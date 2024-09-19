<?php require('header.php');?>

<div class="container">
    <p class="erreur">
        <?php if(isset($_SESSION['erreur'])){
            echo $_SESSION['erreur'];
            unset($_SESSION['erreur']);
        }
        ?>
    </p>
    <h1 class="titreformulaire">Formulaire de contact</h1>
    <form action="../controleurs/contact.php" method="post">
        <label for="firstname">Nom & prénom</label>
        <input type="text" id="firstname" name="firstname" placeholder="Votre nom et prénom">

        <label for="sujet">Sujet</label>
        <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message">

        <label for="email">Email</label>
        <input id="email" type="email" name="email" placeholder="Votre email">


        <label for="subject">Message</label>
        <textarea id="subject" name="subject" placeholder="Votre message" style="height:200px"></textarea>

        <input type="submit" name="formulaire" value="Envoyer">
    </form>
</div>


<?php require('footer.php');?>