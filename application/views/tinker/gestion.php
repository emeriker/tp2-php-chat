<section id="about" class="page-section">
	<div class="container">
		<div class="row light-gray">
			<h1 class="yellow"><?php echo $title;?></h1>
			<h3 class="yellow">Utilisateur</h3>
			<div>
			<?php
			foreach ( $users as $user ) {
				echo "<p><strong>Nom Utilisateur : </strong>" . $user ['username'] . "</p>";
				echo "<p><strong>id : </strong>" . $user ['id'] . "</p>";
				echo "<p><strong>adresse ip : </strong>" . $user ['ip_address'] . "</p>";
				echo "<p><strong>Adresse courielle : </strong>" . $user ['email'] . "</p>";
				echo "<p><strong>Prénom : </strong>" . $user ['first_name'] . "</p>";
				echo "<p><strong>Nom de famille : </strong>" . $user ['last_name'] . "</p>";
				echo "<p><strong>Numéros de téléphone : </strong>" . $user ['phone'] . "</p>";
				echo "<a href='gestion/deleteUser/" . $user ['id'] . "'>Effacer l'utilisateur</a></br></br><</br>";
			}
			?>
			</div>

			<h3 class="yellow">Message de la Salle 1 à 3</h3>
			<div><?php
			foreach ( $messagesBD as $unMessage ) {
				echo "<p><strong>Message id : </strong>" . $unMessage ['idmessage'] . "</p>";
				echo "<p><strong>Message : </strong>" . $unMessage ['message'] . "</p>";
				echo "<p><strong>Utilisteur ID : </strong>" . $unMessage ['users_id'] . "</p>";
				echo "<p><strong>Date : </strong>" . $unMessage ['date'] . "</p>";
				echo "<p><strong>Salle ID : </strong>" . $unMessage ['salle_id_salle'] . "</p>";
				// pour effacer les message,
				echo "<a href='gestion/deleteMessageBD/" . $unMessage ['idmessage'] . "'>Effacer le message</a></br></br><</br>";
			}

			?></div>
			<h3 class="yellow">Message de la Salle Administration</h3>
			<div><?php
			foreach ( $messagesXMLAdministration as $unMessage ) {
				echo "<p><strong>Message id : </strong>" . $unMessage ['id'] . "</p>";
				echo "<p><strong>Message : </strong>" . $unMessage ['contenu'] . "</p>";
				echo "<p><strong>Utilisteur : </strong>" . $unMessage ['pseudo'] . "</p>";
				echo "<p><strong>Date : </strong>" . $unMessage ['date'] . "</p>";
				// pour effacer les message,
				echo "<a href='gestion/deleteMessageXML/" . $unMessage ['id'] ."/"."Administration"."'>Effacer le message</a></br></br><</br>";
			}?></div>
						<h3 class="yellow">Message de la Salle Plaintes</h3>
			<div><?php
			foreach ( $messagesXMLPlaintes as $unMessage ) {
				echo "<p><strong>Message id : </strong>" . $unMessage ['id'] . "</p>";
				echo "<p><strong>Message : </strong>" . $unMessage ['contenu'] . "</p>";
				echo "<p><strong>Utilisteur : </strong>" . $unMessage ['pseudo'] . "</p>";
				echo "<p><strong>Date : </strong>" . $unMessage ['date'] . "</p>";
				// pour effacer les message,
				echo "<a href='gestion/deleteMessageXML/" . $unMessage ['id'] ."/"."Plaintes"."'>Effacer le message</a></br></br><</br>";
			}?></div>
						<h3 class="yellow">Message de la Salle Libre</h3>
			<div><?php
			foreach ( $messagesXMLLibre as $unMessage ) {
				echo "<p><strong>Message id : </strong>" . $unMessage ['id'] . "</p>";
				echo "<p><strong>Message : </strong>" . $unMessage ['contenu'] . "</p>";
				echo "<p><strong>Utilisteur : </strong>" . $unMessage ['pseudo'] . "</p>";
				echo "<p><strong>Date : </strong>" . $unMessage ['date'] . "</p>";
				// pour effacer les message,
				echo "<a href='gestion/deleteMessageXML/" . $unMessage ['id'] ."/"."Libre"."'>Effacer le message</a></br></br><</br>";
			}?></div>
		</div>
	</div>
</section>