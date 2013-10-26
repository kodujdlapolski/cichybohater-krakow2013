<?php echo $this->Form->create('Intervention', array('url' => array('action' => 'edit', $id))); ?>
<?php echo $this->Form->hidden('Intervention.id', array('value' => $id)); ?>
<?php echo $this->Form->input('Intervention.status_id'); ?>
<?php echo $this->Form->end('Zapisz'); ?>