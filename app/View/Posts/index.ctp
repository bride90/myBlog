<?php #debug($posts); ?>
<!-- File: /app/View/Posts/index.ctp  TEMPLATE-->

<?php 

	echo $this->Html->link(
		'Add New Post',
		array('controller' => 'posts', 'action' => 'add')
	); 
	
?>

<table>

    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
		<th>Author</th>
		<th>Modified</th>
		<th>Option</th>
		
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($post['Post']['title'],
array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
        </td>
        <td><?php echo $post['Post']['created']; ?></td>
		<td><?php echo $post['Post']['author']; ?></td>
		 <td><?php echo $post['Post']['modified']; ?></td>
		 <td><?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?> |        
		 <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'padam', $post['Post']['id']),
                array('confirm' => 'Are you sure?'));
            ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
	
</table>

<?php

	echo $this->Html->link
	(
		'Home',
		array('controller' => 'pages', 'action' => 'home')
	); 
	
?>
	