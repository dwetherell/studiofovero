<?php /* Smarty version 2.6.13, created on 2013-04-19 18:31:29
         compiled from admin/subscribers/ajax/subscriber_add.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't', 'admin/subscribers/ajax/subscriber_add.tpl', 1, false),array('modifier', 'escape', 'admin/subscribers/ajax/subscriber_add.tpl', 30, false),)), $this); ?>
<p><?php $this->_tag_stack[] = array('t', array('escape' => 'no','1' => '<a href="subscribers_import.php">','2' => '</a>')); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Welcome to adding subscribers! You can add subscribers one-by-one here. If you would like to add subscribers in bulk, visit the %1Subscriber Import%2 page.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>

<form class="json validate" action="ajax/manage.rpc.php?call=addSubscriber" method="post">

<div class="output alert"></div>

<fieldset>
<legend><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add Subscriber<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>

<div>
<label for="email"><strong class="required"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong></label>
<input type="text" class="pvEmail pvEmpty" size="32" maxlength="60" name="Email" />
</div>

<?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fields'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fields']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['field']):
        $this->_foreach['fields']['iteration']++;
?>
<div>
<label for="field<?php echo $this->_tpl_vars['key']; ?>
"><?php if ($this->_tpl_vars['field']['required'] == 'on'): ?><strong class="required"><?php endif;  echo $this->_tpl_vars['field']['name']; ?>
:<?php if ($this->_tpl_vars['field']['required'] == 'on'): ?></strong><?php endif; ?></label>

<?php if ($this->_tpl_vars['field']['type'] == 'checkbox'): ?>
<input type="checkbox" name="d[<?php echo $this->_tpl_vars['key']; ?>
]"<?php if ($this->_tpl_vars['field']['normally'] == 'on'): ?> checked="checked"<?php endif;  if ($this->_tpl_vars['field']['required'] == 'on'): ?> class="pvEmpty"<?php endif; ?> />

<?php elseif ($this->_tpl_vars['field']['type'] == 'multiple'): ?>
<select name="d[<?php echo $this->_tpl_vars['key']; ?>
]">
<?php $_from = $this->_tpl_vars['field']['array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['option']):
?>
<option<?php if ($this->_tpl_vars['field']['normally'] == $this->_tpl_vars['option']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['option']; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select>

<?php elseif ($this->_tpl_vars['field']['type'] == 'date'): ?>
<input type="text" class="pvDate<?php if ($this->_tpl_vars['field']['required'] == 'on'): ?> pvEmpty<?php endif; ?>" size="12" name="d[<?php echo $this->_tpl_vars['key']; ?>
]" value=<?php if ($this->_tpl_vars['field']['normally']): ?>"<?php echo ((is_array($_tmp=$this->_tpl_vars['field']['normally'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php else: ?>"<?php echo $this->_tpl_vars['config']['app']['dateformat']; ?>
"<?php endif; ?> />

<?php elseif ($this->_tpl_vars['field']['type'] == 'number'): ?>
<input type="text" class="pvNumber<?php if ($this->_tpl_vars['field']['required'] == 'on'): ?> pvEmpty<?php endif; ?>" size="12" name="d[<?php echo $this->_tpl_vars['key']; ?>
]" value="<?php if ($this->_tpl_vars['field']['normally']):  echo ((is_array($_tmp=$this->_tpl_vars['field']['normally'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  endif; ?>" />

<?php else: ?>
<input type="text" size="32"<?php if ($this->_tpl_vars['field']['required'] == 'on'): ?> class="pvEmpty"<?php endif; ?> name="d[<?php echo $this->_tpl_vars['key']; ?>
]" value="<?php if ($this->_tpl_vars['field']['normally']):  echo ((is_array($_tmp=$this->_tpl_vars['field']['normally'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  endif; ?>" />
<?php endif; ?>

</div>

<?php endforeach; endif; unset($_from); ?>

</fieldset>

<fieldset>
	<input type="checkbox" name="force" /><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Force (bypasses validation)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</fieldset>

<div class="buttons">

<input type="submit" value="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add Subscriber<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" />

<input type="reset" value="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Reset<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" />

</div>

<p><?php $this->_tag_stack[] = array('t', array('escape' => false,'1' => "<span class=\"required\">",'2' => "</span>")); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Fields marked like %1 this %2 are required.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>

</form>

<?php echo '
<script type="text/javascript">
$().ready(function(){

	poMMo.callback.addSubscriber = function(json) {
		if($(\'#grid\').size() == 0)
        	history.go(0); // refresh the page if no grid exists, else add new subscriber to grid
        else
        	poMMo.grid.addRow(json.key,json);
	};
	
	$(\'input[@name="force"]\').click(function(){
		if(this.checked)
			$(this).jqvDisable();
		else
			$(this).jqvEnable();
	});

});
</script>
'; ?>