<?php
$module = (isset($_GET['m'])) ? $_GET['m'] : 'welcome';
switch ($module) {
    case 'home': default:
        include('welcome.php');
        break;
    case 'mapel':
        include('mapel/index.php');
        break;
    case 'guru':
        include('guru/index.php');
        break;
}