<h2>Editar Mesa</h2>

<?
echo $this->Form->create('Mesa');
echo $this->Form->input('serie');
echo $this->Form->input('puestos');
echo $this->Form->input('posicion', array('rows' => 3));
echo $this->Form->input('mesero_id');
echo $this->Form->end('Editar mesa');