<?php
session_start();
require('../modeles/image.php');

$listePhotos = obtenirAnimation();
require('../vues/vueAccueil.php');
