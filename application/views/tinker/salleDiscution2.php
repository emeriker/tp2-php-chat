<section id="about" class="page-section">
	<div class="container">
		<div class="row light-gray">
<h1 class="yellow"><?php echo $title;?></h1>
<?php
foreach ( $messages as $unMessage ) {
	echo '<div class="speech-bubble">';
	echo "<h2>" . $unMessage ['pseudo'] . "</h2></br>";
	echo "<h4>" . $unMessage ['contenu'] . "</h4></br>";
	echo "<p class='red'>" . $unMessage ['date'] . "</p></br></br>";
	echo "</div>";

	?>

	<?php echo form_open('Salles/salleBD/'.$id);
}
?>


<?php echo validation_errors(); ?>


<?php echo form_open('Salles/salleBD/'.$id); ?>
<?php if($_SESSION['isConnecter']){?>
<p>Message</p>
			<input type="text" name='message'
				value="<?php echo set_value('message');?>" size="50" />
<?php echo form_error('message'); ?>

<div></br>
				<a class="submit"><input type="submit" value="Envoyer" /></a>
			</div>
			<?php }?>
		</div>
	</div>
</section>