<h2>Lista de Mesas</h2>

<?=$this->Html->link('Crear nueva mesa', array('controller' => 'mesas', 'action' => 'nuevo'));?>
<table>
	<tr>
		<td>Serie</td>
		<td>Puestos</td>
		<td>Posición</td>
		<td>Creado</td>
		<td>Modificado</td>
		<td>Responsable</td>
		<td>Editar</td>
		<td>Eliminar</td>
	</tr>

	<? foreach($mesas as $mesa):?>
		<tr>
			<td><?=$mesa['Mesa']['serie'];?></td>
			<td><?=$mesa['Mesa']['puestos'];?></td>
			<td><?=$mesa['Mesa']['posicion'];?></td>
			<td><?=$this->Time->format('d-m-Y / h:i A', $mesa['Mesa']['created']);?></td>
			<td><?=$this->Time->format('d-m-Y / h:i A', $mesa['Mesa']['modified']);?></td>
			<td>
				<?=$this->Html->link($mesa['Mesero']['nombre'].' ' . $mesa['Mesero']['apellido'],
				array('controller' => 'meseros', 'action' => 'ver', $mesa['Mesero']['id']));?>
			</td>
			<td><?=$this->Html->link('editar', array('controller' => 'mesas', 'action' => 'editar', $mesa['Mesa']['id']));?></td>
			<td><?=$this->Form->postLink('Eliminar', array('action' => 'eliminar', $mesa['Mesa']['id']), array('confirm' => 'Eliminar mesa'.$mesa['Mesa']['serie'].'?'));?></td>
		</tr>
	<?endforeach;?>
</table>