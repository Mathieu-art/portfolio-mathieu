<?php require('header.php');?>

<section class="carousel-container">
    <div class="carousel-track">
        <?php
        foreach($listeAnimation as $animation): ?>
            <div class="carousel-animation">
                <div class="video">
                    <video class="animation" src="../../<?php echo htmlspecialchars($animation['file_path']); ?>" alt="animation 2d" id="animation<?php echo $animation['id']; ?>" type="video/mp4" controls></video>
                </div>
                <div class="carousel-animation-description">
                    <h1 class="titre"><?php echo htmlspecialchars($animation['title']); ?></h1>
                    <div class="lireplus">
                        <p class="pdescription"><?php echo htmlspecialchars($animation['description']); ?></p>
                    </div>
                <span class="lireplusmoins">En savoir plus</span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <span class="nav prev" onclick="1">⟪</span>
    <span class="nav next" onclick="-1">⟫</span>
</section>

<?php require('footer.php');?>

