<?php debug($afiq) ;?>

<!-- File: /app/View/Users/index.ctp  TEMPLATE-->

<table>

    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
		<th>Created</th>
		<th>Modified</th>
    </tr>

    <?php foreach ($afiq as $a): ?>
    <tr>
        <td><?php echo $a['User']['id']; ?></td>
        <td>
            <?php 
				echo $this->Html->link($a['User']['username'],
					array('controller' => 'users', 'action' => 'view', $a['User']['id'])
				); ?>
        </td>
        <td><?php echo $a['User']['password']; ?></td>
		<td><?php echo $a['User']['created']; ?></td>
		 <td><?php echo $a['User']['modified']; ?></td>
		 <td><?php echo $this->Html->link('Edit', array('action' => 'edit', $a['User']['id'])); ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($a); ?>
	
</table>
	