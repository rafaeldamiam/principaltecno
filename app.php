<?php
session_start();

//libs obrigatorias
require_once 'bibliotecas/mysqli.php';
require_once 'bibliotecas/visao.php';
require_once 'bibliotecas/uteis.php';

//libs opcionais
require_once 'bibliotecas/alert.php';
require_once 'bibliotecas/auth.php';

define('CONTROLADOR_PADRAO', 'home');
define('BASE_URL', 'http://principaltecno.onlinewebshop.net/');