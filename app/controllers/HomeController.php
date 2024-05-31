<?php

use App\Models\M_Home;
use App\Validators\Verification;

class Home
{
    protected $model;
    public function __construct()
    {
        $this->model = new M_Home();
    }


    /**
     * Si l'utilisateur est connecté : affiche la vue home/index.php
     * Sinon utilise la méthode connect()
     */
    public function index()
    {
        if (isset($_SESSION['error'])) {
            $this->model->view('template/404', []);
            exit();
        } else {
            if (isset($_SESSION['user'])) {
                $recentFiles = $this->model->getRecentFiles();
                $_SESSION['storage_infos'] = $this->model->serverStorageInfos();
                $this->model->view('home/index', [
                    'recent_files' => $recentFiles,
                ]);
            } else {
                $this->model->redirect('home/connect');
            }
        }
    }


    /**
     * Si l'utilisateur est connecté : utilise la méthode index()
     * Sinon affiche la vue home/connexion/email.php
     */
    public function connect()
    {
        if (isset($_SESSION['user'])) {
            $this->model->redirect('home/index');
        } else {
            $this->model->view('home/connexion/email', []);
        }
    }


    /**
     * Si l'utilisateur a rentré une adresse mail : vérifie l'existence du mail dans la BDD {
     *      PUIS =>
     *          Si l'adresse mail n'existe pas dans la BDD : affiche la vue home/connexion/email.php AVEC $message
     *          Sinon affiche la vue home/connexion/password.php AVEC les informations $usermail
     *      }
     * Sinon utilise la méthode connect();
     */
    public function login()
    {
        if (isset($_SESSION['user'])) {
            $this->model->redirect('home/index');
        } else {
            if (isset($_SESSION['mail'])) {
                $mail = $_SESSION['mail'];
                if (Verification::mailRegex($mail)) {
                    $usermail = $this->model->mailCheck($mail);

                    if (empty($usermail)) {
                        $message = 'Adresse mail incorrecte.';
                        $this->model->view('home/connexion/email', [
                            'message' => $message,
                        ]);
                    } else {
                        $this->model->view('home/connexion/password', [
                            'user' => $usermail,
                        ]);
                    }
                } else {
                    $message = "Le format de l'adresse mail saisi est incorrect.";
                    $this->model->view('home/connexion/email', [
                        'message' => $message,
                    ]);
                }
            } else {
                $this->model->redirect('home/connect');
            }
        }
    }


    /**
     * Si l'utilisateur a précedemment entré une adresse mail {
     *          vérifie si le mot de passe entré correspond à l'adresse mail dans la BDD
     * 
     *      PUIS => 
     *          Si le mot de passe est incorrect : affiche la vue home/connexion/password.php AVEC $message
     *          Sinon stocke les informations de $user dans $_SESSION['user'] + utilise la methode index()
     *      }
     * Sinon utilise la methode login();
     */
    public function password()
    {
        if (isset($_SESSION['mail']) && isset($_SESSION['password'])) {
            $mail = $_SESSION['mail'];
            $password = $_SESSION['password'];

            if (Verification::passwordRegex($password)) {
                $user = $this->model->passwordCheck($mail, $password);

                if (empty($user)) {
                    $message = 'Mot de passe incorrect.';
                    $this->model->view('home/connexion/password', [
                        'message' => $message,
                    ]);
                } else {
                    if (isset($_SESSION['user'])) {
                        unset($_SESSION['user']);
                        $_SESSION['user'] = $user;
                    } else {
                        $_SESSION['user'] = $user;
                    }
                    unset($_SESSION['mail']);
                    unset($_SESSION['password']);
                    $_SESSION['storage_infos'] = $this->model->serverStorageInfos();
                    $this->model->redirect('home/index');
                }
            } else {
                $message = "Mot de passe incorrect. 1 majuscule, 1 minuscule, 1 chiffre, 1 caractère spécial.";
                $this->model->view('home/connexion/password', [
                    'message' => $message,
                ]);
            }
        } else {
            unset($_SESSION['mail']);
            unset($_SESSION['password']);
            $this->model->redirect('home/login');
        }
    }

    /**
     * Permet d'afficher la page password-forgot si le client n'est pas déjà connecté
     */
    public function forgot()
    {
        if (isset($_SESSION['user'])) {
            $this->model->redirect('home/index');
        } else {
            $this->model->view('home/connexion/password-forgot', []);
        }
    }

    /**
     * Gestion de la page password-forgot
     * Change le mot de passe de l'utilisateur (mot de passe aléatoire)
     * Envoi le mot de passe par mail
     */
    public function passwordForgot()
    {
        if (isset($_SESSION['user'])) {
            $this->model->redirect('home/index');
        } else {
            if (isset($_SESSION['mail'])) {
                $mail = $_SESSION['mail'];
                unset($_SESSION['mail']);

                if (Verification::mailRegex($mail)) {
                    $usermail = $this->model->mailCheck($mail);

                    if (empty($usermail)) {
                        $error = 'Adresse mail incorrecte.';
                        $this->model->view('home/connexion/password-forgot', [
                            'error' => $error,
                        ]);
                    } else {
                        $confirm = '';
                        $message = 'Veuillez suivre les instructions reçu par mail.';
                        $this->model->view('home/connexion/password-forgot', [
                            'confirmation' => $confirm,
                            'message' => $message,
                        ]);
                    }
                } else {
                    $error = "Le format de l'adresse mail saisi est incorrect.";
                    $this->model->view('home/connexion/password-forgot', [
                        'error' => $error,
                    ]);
                }
            } else {
                $this->model->redirect('home/forgot');
            }
        }
    }

    /**
     * Affiche les fichiers d'une catégorie si un id est spécifié (id_categorie)
     * Affiche tout les fichiers si aucun id
     * @param int $id = ID Catégorie
     */
    public function show(int $id = null)
    {
        if (isset($_SESSION['user'])) {
            $category = $id;
            $files = $this->model->getCategory($category);
            $this->model->view('home/show', [
                'files' => $files,
            ]);
        } else {
            $this->model->redirect('home/connect');
        }
    }
}
