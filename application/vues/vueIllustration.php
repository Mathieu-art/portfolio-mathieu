<?php
require('header.php')
?>

<section class="carousel-container">
    <div class="carousel-track">
        <?php foreach($listeIllustration as $illustration): ?>
        <div class="carousel-illustration">
            <div class="image">
                <img class="illustration" src="../../<?php echo htmlspecialchars($illustration['file_path']); ?>" alt="illustration" id="illustration<?php echo $illustration['id']; ?>" />
            </div>
            <div class="carousel-illustration-description">
                <h1 class="titre"><?php echo htmlspecialchars($illustration['title']); ?></h1>
                <div class="lireplus">
                    <p class="pdescription"><?php echo htmlspecialchars($illustration['description']); ?></p>
                </div>
                <span class="lireplusmoins">En savoir plus</span>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <span class="nav prev" onclick="1">⟪</span>
    <span class="nav next" onclick="-1">⟫</span>
</section>


<?php
require('footer.php');
?>