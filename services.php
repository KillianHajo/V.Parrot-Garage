<?php include('head.php')?>

<?php
	
	include 'CSS/comment_config.php';

	if (isset($_POST['post_comment'])) {

		$name = $_POST['name'];
		$message = $_POST['message'];
		
		$sql = "INSERT INTO demo (name, message)
		VALUES ('$name', '$message')";

		if ($conn->query($sql) === TRUE) {
		echo "";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

?>


<body>

<?php include('nav.php')?>

<div class="content2">
        <h1>Nos services<h1>
    </div>

<section class="services" id="services">

    
    <div class="box-container">

    <div class="box">
        <i class='fas fa-car-crash'></i>
            <h3>Assurances</h3>
            <p>
                Nous proposons différentes assurances pour votre voiture, adaptées à vos besoins et à votre budget. Nos formules incluent notamment une assurance tous risques pour une protection maximale, une assurance responsabilité civile pour couvrir les dommages causés à autrui, ainsi qu'une assurance bris de glace pour rembourser la réparation ou le remplacement de vos vitres. Nous offrons également des options telles que l'assistance 24h/24 et la protection du conducteur.
                Contactez-nous pour découvrir nos solutions d'assurances voiture.</p>
            <a href="contact.php"><button class="btn-service">Voir Plus</button></a>
        </div>

        <div class="box">
        <i class='fas fa-car'></i>
            <h3>Vente De Voitures</h3>
            <p>Nous offrons une large sélection de voitures
                d'occasion de haute qualité pour répondre à tous les budgets et tous les besoins. Toutes nos voitures sont soigneusement inspectées pour vous assurer la meilleure qualité et sécurité. Avec notre service après-vente exceptionnel, nous sommes là pour vous aider à chaque étape du processus d'achat. Nous sommes convaincus que nous avons la voiture parfaite pour vous, alors venez nous rendre visite aujourd'hui et trouvez
                votre prochaine voiture d'occasion!</p>
            <a href="occasions.php"><button class="btn-service" id="link-footer">Voir Plus</button></a>
        </div>

        <div class="box">
        <i class='fas fa-tools'></i>
            <h3>Piéce à réparer</h3>
            <p>Nous proposons une large gamme de pièces de réparation pour tous types de voitures. Que ce soit pour des réparations mineures ou majeures, nous avons tout ce dont vous avez besoin pour remettre votre véhicule en état de marche. Nous travaillons avec les meilleurs fabricants du marché pour assurer des produits de qualité à des prix compétitifs. Notre équipe de professionnels est également disponible pour vous conseiller et vous aider à trouver la pièce adaptée à votre problème.
                Contactez-nous dès maintenant pour bénéficier de nos services.</p>
            <a href="offre.php"><button class="btn-service">Voir Plus</button></a>
        </div>

        <div class="box">
            <i class='fas fa-car-battery'></i>
            <h3>Changement de batterie</h3>
            <p>Changer une batterie de voiture est une opération assez simple avec V.Parrot qui peut être effectuée en suivant quelques étapes de base. Tout d'abord, il faut s'assurer que la voiture est éteinte et que les clés ne sont pas dans le contact.
                Ensuite, il faut retirer la batterie en dévissant
                d'abord la cosse négative, puis la cosse positive.
                On peut ensuite installer la nouvelle batterie en faisant le processus inversé de celui utilisé pour retirer l'ancienne batterie. Enfin, il est important de s'assurer que les bornes sont bien serrées pour éviter les problèmes à l'avenir.</p>
            <a href="contact.php #schedule"><button class="btn-service">Voir Plus</button></a>
        </div>

        <div class="box">
            <i class='fas fa-gas-pump'></i>
            <h3>Vidange</h3>
            <p>Le changement d'huile de moteur est une étape importante de l'entretien de votre voiture.
                L'huile de moteur lubrifie les pièces en mouvement, réduit l'usure et protège contre la corrosion. Il est recommandé de changer l'huile tous les 5 000 à 10 000 kilomètres, ou tous les six mois, selon les recommandations du fabricant. Le processus consiste à drainer l'ancienne huile, remplacer le filtre à huile et remplir le moteur avec de l'huile neuve. Un changement d'huile régulier peut prolonger la vie de votre moteur et améliorer
                l'efficacité énergétique de votre voiture.</p>
            <a href="contact.php #schedule"><button class="btn-service" >Voir Plus</button></a>
        </div>

        <div class="box">
            <i class='fas fa-headset'></i>
            <h3>24/7 Présent en ligne</h3>
            <p>Le service est disponible 24 heures sur 24 et 7 jours sur 7, accessible à tout moment en ligne. Les utilisateurs peuvent se connecter à tout moment pour effectuer des transactions, poser des questions ou bénéficier d'un support en ligne. L'accès permanent permet d'obtenir une réponse rapide et efficace et de bénéficier d'une assistance à tout moment, même en dehors des heures de travail habituelles. L'accessibilité continue permet également de garantir une disponibilité maximale du service pour les utilisateurs dans le monde entier,
                quel que soit leur fuseau horaire.</p>
            <a href="contact.php"><button class="btn-service">Voir Plus</button></a>
        </div> 

    </div>

    <p id="garage-def" class="flux">Un travail de qualité, qui est notre priorité, sera effectué sur votre véhicule, c’est pourquoi nous travaillons avec le meilleur outillage possible, et uniquement avec de la pièce neuve d’origine.
        Nous intervenons sur tous types de travaux, sur de l’entretien classique aussi bien que sur de la mécanique lourde, comme remplacement ou réfection d’un moteur.
        Dans notre établissement, aucune intervention ne sera effectuée sur votre véhicule sans votre accord.
        Donc pas de mauvaises surprises au moment de la facture. Pour les sociétés, ainsi que les comités d’entreprises qui nous confient l’entretien de leur flotte de véhicule, nous mettons en place automatiquement un taux de remise, ainsi qu’un service très réactif au niveau des délais, ainsi que sur les véhicules de courtoisie.</h6>

        <a href="index.php"><div class="end-logo"><img src="assets/Garage V.Parrot.png" class="logo" alt="logo"></div></a>
<h2 class="comment-title">Commenter notre service</h2>
        <div class="wrappe">
		<form action="" method="post" class="form">
			<input type="text" class="name" name="name" placeholder="Nom">
			<br>
			<textarea name="message" cols="30" rows="10" class="message" placeholder="Message"></textarea>
			<br>
			<button type="submit" class="btn" name="post_comment">Poster votre avis !</button>
		</form>
	</div>

	<div class="conten">
		<?php

			$sql = "SELECT * FROM demo";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			
			while($row = $result->fetch_assoc()) {
			
		?>

		<?php } } ?>
	</div>
</section>





</body>







<?php include('footer.php')?>
