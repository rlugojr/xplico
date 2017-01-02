<!--
Copyright: Gianluca Costa & Andrea de Franceschi 2007-2010, http://www.xplico.org
 Version: MPL 1.1/GPL 2.0/LGPL 2.1
-->
<div class="generic">
	<h2><?php echo __('Users of').' '.$group; ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr id='items'>
			<th><?php echo $this->Paginator->sort(__('User'), 'username'); ?></th>
			<th><?php echo $this->Paginator->sort(__('First Name'), 'first_name'); ?></th>
			<th><?php echo $this->Paginator->sort(__('Last Name'), 'last_name'); ?></th>
			<th><?php echo $this->Paginator->sort(__('Email'), 'email'); ?></th>
			<th><?php echo $this->Paginator->sort(__('Last Login'), 'last_login'); ?></th>
                        <th><?php echo $this->Paginator->sort(__('Count'), 'login_num'); ?></th>
			<th><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($users as $user):
	?>
	<tr>
		<td><?php echo $user['User']['username']; ?></td>
		<td><?php echo $user['User']['first_name']; ?></td>
		<td><?php echo $user['User']['last_name']; ?></td>
		<td><?php echo $user['User']['email']; ?></td>
		<td><?php echo $user['User']['last_login']; ?></td>
                <td><?php echo $user['User']['login_num']; ?></td>
		<td class="actions">
		<?php 
                     if ($user['User']['id'] != 1) echo $this->Html->link(__('Delete'),'/admins/udelete/' . $user['User']['id'], null, __('Are you sure you want to delete the user'). ' \'' . $user['User']['username'] . '\' ?').', ';
                     echo $this->Html->link(__('Password'),'/users/cpassword/' . $user['User']['id'], null);
                ?>
		</td>
	</tr>
       <?php endforeach; ?>
	</table>

</table>
<table id="listpage" summary="Message list" cellspacing="0">
<tr>
<th class="next"><?php echo $this->Paginator->prev(__('Previous'), array(), null, array('class'=>'disabled')); ?></th>
<th><?php echo $this->Paginator->numbers(); echo '<br/>'.$this->Paginator->counter(); ?></th>
<th class="next"><?php echo $this->Paginator->next(__('Next'), array(), null, array('class' => 'disabled')); ?></th>
</tr>
</table>
</div>