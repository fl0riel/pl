<?php
session_start();
session_unset();
header('Location: /www/stage/plateforme_partage/public/home/connect/');
exit;