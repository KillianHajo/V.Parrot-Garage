<?php 
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
?>

<?php   if (isset($_SESSION['flash'])): ?>
<?php   foreach ($_SESSION['flash'] as $type => $message) : ?>
            <div class="alert alert-<?= $type?>">
                    <?= $message ?>
            </div>
<?php   endforeach; ?>
    <?php unset($_SESSION['flash'])?>
<?php endif; ?>

<div class="top-bar">
    <div class="top-bar-contact">
    <i class="fa fa-phone"></i><a href="#link-contact"><p>06 52 12 47 14</p></a>
    </div>
    <div class="top-bar-mail">
    <i class="fa fa-envelope"><a href="contact.php"><p>garagev.parrotecf@gmail.com</p></a></i>
    </div>
    <div class="top-bar-clock">
    <i class="fa-solid fa-clock"><a href="contact.php#schedule"><p> Ouvert du Lundi au Vendredi, de 8h30 à 12h00 et de 14h00 à 18h30</p></a></i>
    </div>
</div>



</div>

<nav class="navbar">
    <div class="mobile-menu"><i class="fa fa-bars"></i></div>
    <ul class="style-links">
        <li class="li-links"> <a href="/index.php" > Acceuil </a></li>
        <li class="li-links"> <a href="/offre.php"> Offres </a></li>
        <li class="li-links"> <a href="/services.php"> Services </a></li>
        <li class="li-links"> <a href="/occasions.php"> Occasions </a></li>
        <li class="li-links"> <a href="/contact.php"> Nous Contacter </a></li>
        <?php if(isset($_SESSION['auth'])):?>
        <li class="li-links"> <a href="logout.php"> Se Déconnecter </a></li>
        <?php else : ?>
        <li class="li-links"> <a href="/login.php"> Se Connecter </a></li>
        <?php endif; ?>
        <div class="close-menu"><i class="fa fa-times"></i></div>
        <span class="icons">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-youtube"></i>
        </span>
    </ul>
<script src="./app.js"></script>

        </nav>