<?php
/* @var $this WebServiceController */

$this->breadcrumbs=array(
	'Web Service',
);
?>

<h1> <?php echo count($movies); ?> Extrenos Descargados </h1>

<ul class="items">
	<?php foreach ( $movies as $movie ): ?>
		<li class="item">
			<h2> <?php echo  $movie['nombre'] ?>  </h2>
			<p>
				<b>Idioma: </b> <?php echo  $movie->data['idioma'] ?> <br/>
				<b>Genero: </b> <?php echo  $movie->data['genero'] ?>
			</p>
			<b> Disponiblilidad: </b> <br>
			<?php foreach ( $movie->DiasDisponiblesTodosCinemas->dia as $dia ): ?>

				<?php echo  $dia['fecha'] ?> <br>

			<?php endforeach; ?>		
		</li>
	<?php endforeach; ?>
</ul>

<style>
	.items {
		overflow: auto;
		height: 400px;
	}
	.item {
		float:left; 
		width:30%; 
		background:#f8f8f8; 
		margin:4px; 
		border:1px solid #ccc; 
		padding:6px; 
		border-radius:3px; 
		list-style-type:none
	}
</style>

