
<?php 

	echo $this->Html->link(
		'MyBlog',
		array('controller' => 'posts', 'action' => 'index')
	); 
	
	echo "&nbsp;|&nbsp;"; 						/*breaker without paragraph*/
	
	echo $this->Html->link(
		'Add Post',
		array('controller' => 'posts', 'action' => 'add')
	); 
	
	echo "&nbsp;|&nbsp;"; 						/*breaker without paragraph*/
	
	echo $this->Html->link(
		'Logout',
		array('controller' => 'Users', 'action' => 'index')
	); 

?>