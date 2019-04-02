
<section id="about" class="page-section">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="service-item">
					<div class="icon">

						<img src=<?PHP echo base_url('assets/img/service_icon_01.png')?>
							alt="">
					</div>
					<h4>
						Loisir <em>(BD)</em>
					</h4>
					<div class="line-dec"></div>
					<p>Salles de chat pour le loisir.</p>
					<div class="primary-blue-button">
						<a href=<?PHP echo base_url('index.php/Salles/salleBD/1')?>>Rejoindre la
							salle</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="service-item">
					<div class="icon">
						<img src=<?PHP echo base_url('assets/img/service_icon_02.png')?>
							alt="">
					</div>
					<h4>
						Sport <em>(BD)</em>
					</h4>
					<div class="line-dec"></div>
					<p>Salles de chat pour le sport.</p>
					<div class="primary-blue-button">
						<a href=<?PHP echo base_url('index.php/Salles/salleBD/2')?>>Rejoindre la
							salle</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="service-item">
					<div class="icon">
						<img src=<?PHP echo base_url('assets/img/service_icon_03.png')?>
							alt="">
					</div>
					<h4>
						Etudes <em>(BD)</em>
					</h4>
					<div class="line-dec"></div>
					<p>Salles de chat pour les études.</p>
					<div class="primary-blue-button">
						<a href=<?PHP echo base_url('index.php/Salles/salleBD/3')?>>Rejoindre la
							salle</a>
					</div>
				</div>
			</div>

<?php if($_SESSION['isAdmin']){?>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="service-item">
					<div class="icon">

						<img src=<?PHP echo base_url('assets/img/service_icon_01.png')?>
							alt="">
					</div>
					<h4>
						Administration <em>(admin)</em>
					</h4>
					<div class="line-dec"></div>
					<p>Salles de chat pour les administrateurs.</p>
					<div class="primary-blue-button">
						<a
							href=<?PHP echo base_url('index.php/Salles/salleXML/Administration')?>>Rejoindre
							la salle</a>
					</div>
				</div>
			</div>
<?php }?>

			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="service-item">
					<div class="icon">
						<img src=<?PHP echo base_url('assets/img/service_icon_02.png')?>
							alt="">
					</div>
					<h4>
						Plaintes <em>(public)</em>
					</h4>
					<div class="line-dec"></div>
					<p>Salles de chat pour les plaintes.</p>
					<div class="primary-blue-button">
						<a
							href=<?PHP echo base_url('index.php/Salles/salleXML/Plaintes')?>>Rejoindre
							la salle</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="service-item">
					<div class="icon">
						<img src=<?PHP echo base_url('assets/img/service_icon_03.png')?>
							alt="">
					</div>
					<h4>
						Libre <em>(public)</em>
					</h4>
					<div class="line-dec"></div>
					<p>Salles de chat libre.</p>
					<div class="primary-blue-button">
						<a href=<?PHP echo base_url('index.php/Salles/salleXML/Libre')?>>Rejoindre
							la salle</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>




