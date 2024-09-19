<?php
session_start();
require('../modeles/image.php');
$listeIllustration = obtenirillustration();
require('../vues/vueIllustration.php');