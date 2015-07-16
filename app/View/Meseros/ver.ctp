<h2>Detalle del Meser@ <?= $mesero['Mesero']['nombre'] ;?></h2>

<p><strong>Nombre: </strong><?=$mesero['Mesero']['nombre'];?></p>
<p><strong>Apellido: </strong><?=$mesero['Mesero']['apellido'];?></p>
<p><strong>DNI: </strong><?=$mesero['Mesero']['dni'];?></p>
<p><strong>Teléfono: </strong><?=$mesero['Mesero']['telefono'];?></p>
<p><strong>Creado: </strong><?= $this->Time->format('d-m-Y / h:i A', $mesero['Mesero']['created']);?></p>
<p><strong>Modificado: </strong><?=$this->Time->format('d-m-Y / h:i A', $mesero['Mesero']['modified']);?></p>

<pre></pre>
<h3>Encargado de las mesas:</h3>

<?if (empty($mesero['Mesa'])):?>
	<p>No tiene mesas asociadas.</p>
<?endif;?>

<?foreach ($mesero['Mesa'] as $mesa): ?>
	<p>
		Serie: <?= $mesa['serie'];?>
		<br/>
		Puestos: <?= $mesa['puestos'];?>
		<br/>
		Posicion: <?= $mesa['posicion'];?>
		<br/>
		Creado: <?= $mesa['created'];?>
	</p>
<?endforeach;?>

<?echo $this->Html->link('Volver', array('controller' =>'meseros', 'action' => 'index'));