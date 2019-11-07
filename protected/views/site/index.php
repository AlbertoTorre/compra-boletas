<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1> Compra tu boleta </h1>

<ul>
	<?php foreach( $lists as $list ): ?>
		<li class="item">
			<h2> <?php echo $list->title ?> </h2>
			<h4> Teatro: <?php echo $list->cinema->name ?> </h3>
			<h5> Sala: <?php echo $list->room->name ?> </h5>
			<h5> Hora: <?php echo $list->movie_time ?> </h5>
			<p> Precio <?php echo $list->price ?> </p>

			<script
				src="https://checkout.epayco.co/checkout.js"
				class="epayco-button"
				data-epayco-key="491d6a0b6e992cf924edd8d3d088aff1"
				data-epayco-amount="<?php echo $list->price ?>"
				data-epayco-name="<?php echo $list->title ?>"
				data-epayco-description="<?php echo $list->title.' Teatro: '.$list->cinema->name.' Sala: '.$list->room->name.' Hora funcion '.$list->movie_time; ?>"
				data-epayco-currency="cop"
				data-epayco-country="co"
				data-epayco-test="true"
				data-epayco-external="false"
				data-epayco-response="<?php  echo Yii::app()->getBaseUrl(true).'/index.php?r=api/response'; ?>"
				data-epayco-confirmation="https://ejemplo.com/confirmacion">
        	</script>
		</li>
	<?php endforeach; ?>
</ul>

<style>
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
