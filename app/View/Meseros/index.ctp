<h2>Lista de Meseros</h2>
<?=$this->Html->link('Crear Mesero', array('controller' => 'meseros', 'action' => 'nuevo'));?>
<table>
	<tr>
		<td>Id</td>
		<td>Nombre</td>
		<td>Apellido</td>
		<td>Detalle</td>
		<td>Editar</td>
		<td>Eliminar</td>
	</tr>
	<? foreach($meseros as $mesero):?>
		<tr>
			<td><?= $mesero['Mesero']['id']; ?></td>
			<td><?= $mesero['Mesero']['nombre']; ?></td>
			<td><?= $mesero['Mesero']['apellido']; ?></td>
			<td>
				<?= $this->Html->link('Detalle', array(
					'controller'=>'meseros', 
					'action' => 'ver',
					$mesero['Mesero']['id']
				)); ?>
			</td>
		<td>
			<?= $this->Html->link('Editar', array('controller' => 'meseros', 'action' => 'editar', $mesero['Mesero']['id']));?>
		</td>
		<td>
			<?= $this->Form->postLink('Eliminar', array('action' => 'eliminar', $mesero['Mesero']['id']), array('confirm' => 'Elimar a '.$mesero['Mesero']['nombre'].'?'));?>
		</td>
		</tr>
	<? endforeach;?>
</table>