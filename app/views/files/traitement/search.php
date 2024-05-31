<?php

session_start();

if (isset($_SESSION['user'])) {
    if (isset($_POST)) {
        $search = filter_input(INPUT_POST, 'search', FILTER_DEFAULT);

        if (empty($search)) {
            $_SESSION['message'] = 'Minimum 1 caracère requis pour effectuer une recherche';
            header('Location: /www/stage/plateforme_partage/public/home/index');
            exit();
        }

        header('Location: /www/stage/plateforme_partage/public/file/search/' . $search);
        exit();
    } else {
        $_SESSION['error'] = 'not found';
        header('Location: /www/stage/plateforme_partage/public/home/index');
        exit();
    }
} else {
    $_SESSION['error'] = 'not found';
    header('Location: /www/stage/plateforme_partage/public/home/index');
    exit();
}

