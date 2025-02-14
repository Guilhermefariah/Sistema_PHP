<?php
// Caminhos absolutos
$pastaInterna = "Sistema_PHP"; // Defina o nome da pasta do projeto corretamente

// Define o caminho da pasta interna
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");

// Define a barra de navegação corretamente
$barra = (substr($_SERVER['DOCUMENT_ROOT'], -1) === '/') ? '' : '/';

// Define a pasta interna do projeto corretamente (sem espaço indevido)
define('DIRREQ', $_SERVER['DOCUMENT_ROOT'] . $barra . $pastaInterna . '/');

// Atalhos
define('DIRIMG', DIRPAGE . '/img/');
define('DIRCSS', DIRPAGE . '/css/');
define('DIRJS', DIRPAGE . '/js/');

// Acessos Banco de Dados
define('HOST', 'localhost');
define('DB', 'sistema');
define('USER', 'root');
define('PASS', '');

