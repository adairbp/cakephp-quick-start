<?php echo $this->Session->flash();?>
<hr>
Welcome, <strong><?php echo $users['User']['username'];?></strong>
    <p>
        <?php echo $this->Html->link('Logout', array('Controller'=>'Users', 'action'=>'logout'));?>
    </p>