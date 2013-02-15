<!-- File: /app/View/Posts/edit.ctp -->

<h1>Edit Post</h1>
<?php
    echo $this->Form->create('Post');
    echo $this->Form->input('title');
	echo $this->Form->input('author');
    echo $this->Form->input('body', array('rows' => '3'));
    echo $this->Form->input('id', array('type' => 'hidden'));
	
	echo $this->Form->end('Save Post');
	echo $this->Html->link ('Cancel', array('controller' => 'Posts', 'action' => 'index')	); 
?>