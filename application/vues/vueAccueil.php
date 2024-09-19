<?php require('header.php');?>
<?php if(isset($_SESSION['reussite'])){
    echo $_SESSION['reussite'];
    unset($_SESSION['reussite']);
}
?>
<img class="dessin-accueil" src="../../public/media/image/accueil.png" alt="dessin acceuil"></img>
<h1 id="titre-accueil">ANIMATOR 2D</h1>
<?php require('footer.php');?>