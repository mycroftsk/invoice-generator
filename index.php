<?php

session_start();

require_once('vendor/autoload.php');

if(\Mlynek\Auth::isLogged()) {
    \Mlynek\Helpers::redirect('pages/dashboard.php');
} else {
    \Mlynek\Helpers::redirect('pages/login.php');
}

