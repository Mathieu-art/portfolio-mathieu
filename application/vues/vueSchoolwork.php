<?php require('header.php');?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hero Slider</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.min.css">
</head>
<body>

<div>
  <div class="carousel">
    <ul class="slides">
      <input type="radio" name="radio-buttons" id="img-1" checked />
      <li class="slide-container">
        <div class="slide-image">
            <div class="carousel-work-description">
                <h1 class="titrework">CRÉATION</h1>
                <p class="paragraphework">Pendant mon parcours en Création dans le cadre du BUT Métiers du Multimédia et de l'Internet (MMI), j'ai acquis une solide maîtrise des outils de design et de création numérique. J'ai développé des compétences en conception graphique, et en montage vidéo. L'apprentissage de logiciels professionnels comme Adobe Photoshop, Illustrator, et Premiere Pro m'a permis de réaliser des projets créatifs et innovants. En plus de ces compétences techniques, j'ai appris à concevoir des chartes graphiques pour entreprises, comprenant la création de logos, la sélection de palettes de couleurs, et la définition de typographies et d'éléments visuels cohérents. J'ai également approfondi mes connaissances en ergonomie et en design d'expérience utilisateur (UX), me permettant de concevoir des interfaces intuitives et esthétiques qui répondent aux besoins des utilisateurs.</p>
                <h2 class="titre2work">Vous pouvez voir ci-dessous les principaux travaux de ce parcours.</h2>
                <div class="downloadwork">
                    <a href="../../public/media/image/communication/charte_graphique.pdf" download="charte_graphique.pdf">Charte graphique</a>
                    <a href="../../public/media/image/communication/Origami_Benchmark.pdf" download="Origami_Benchmark.pdf">Origami Benchmark</a>
                </div>
                
            </div>
        </div>
      </li>
      <input type="radio" name="radio-buttons" id="img-2" />
      <li class="slide-container">
        <div class="slide-image">
            <div class="carousel-work-description">
                <h1 class="titrework">COMMUNICATION</h1>
                <p class="paragraphework">Le parcours Communication de mon BUT MMI m'a permis de développer des compétences essentielles en stratégie de communication et en gestion de projet. J'ai appris à élaborer des plans de communication, à créer des contenus engageants pour les réseaux sociaux et à utiliser les outils de marketing digital. Grâce à des cours et des projets pratiques, j'ai acquis une compréhension approfondie des techniques de rédaction, des principes de la communication visuelle et de la gestion des relations publiques. </p>
                <h2 class="titre2work">Vous pouvez voir ci-dessous les principaux travaux de ce parcours.</h2>
                <div class="downloadwork">
                    <a href="../../public/media/image/communication/video1.mp4" download="video1.mp4">Vidéo 1</a>
                    <a href="../../public/media/image/communication/video2.mp4" download="video2.mp4">Vidéo 2</a>
                </div>
            </div>
        </div>
      </li>
      <input type="radio" name="radio-buttons" id="img-3" />
      <li class="slide-container">
        <div class="slide-image">
            <div class="carousel-work-description">
                <h1 class="titrework">DÉVELOPPEMENT</h1>
                <p class="paragraphework">Le parcours Développement m'a permis de maîtriser les langages de programmation et les technologies web nécessaires pour concevoir et développer des sites et applications web performants. J'ai acquis des compétences en HTML, CSS, JavaScript, PHP. Mon apprentissage inclut également des bases de données, la gestion de serveurs, me permettant de développer des solutions complètes et fonctionnelles. Les projets pratiques m'ont aidé à comprendre les meilleures pratiques en matière de développement web, d'accessibilité et de sécurité, me préparant ainsi à relever les défis techniques dans un environnement professionnel.</p>
                <h2 class="titre2work">Vous pouvez voir ci-dessous les principaux travaux de ce parcours.</h2>
                <div class="downloadwork">
                    <a href="../../public/media/image/sae203starter.zip" class="downloadwork" download="sae203starter.zip">Site</a>
                </div>
            </div>
        </div>
      </li>
      <div class="carousel-dots">
        <label for="img-1" class="carousel-dot" id="img-dot-1"></label>
        <label for="img-2" class="carousel-dot" id="img-dot-2"></label>
        <label for="img-3" class="carousel-dot" id="img-dot-3"></label>
      </div>
    </ul>
  </div>
</div>


<?php require('footer.php');?>