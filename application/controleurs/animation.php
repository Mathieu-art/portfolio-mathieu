<?php
session_start();
require('../modeles/image.php');
$listeAnimation = obtenirAnimation();
require('../vues/vueAnimation.php');