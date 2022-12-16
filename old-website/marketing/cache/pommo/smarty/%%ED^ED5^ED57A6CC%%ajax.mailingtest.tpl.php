<?php /* Smarty version 2.6.13, created on 2013-04-19 18:34:32
         compiled from admin/mailings/mailing/ajax.mailingtest.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'fv', 'admin/mailings/mailing/ajax.mailingtest.tpl', 2, false),array('block', 't', 'admin/mailings/mailing/ajax.mailingtest.tpl', 9, false),array('modifier', 'escape', 'admin/mailings/mailing/ajax.mailingtest.tpl', 24, false),)), $this); ?>
<?php echo smarty_function_fv(array('prepend' => '<span class="error">','append' => '</span>'), $this);?>

<?php echo smarty_function_fv(array('validate' => 'email'), $this);?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/messages.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['sent']): ?>
	<div class="alert">
	<?php $this->_tag_stack[] = array('t', array('escape' => false,'1' => "<strong>".($this->_tpl_vars['sent'])."</strong>")); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Mailing sent to %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	</div>
<?php endif; ?>

<p>
<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Verify the appeareance of a mailing by sending a message to yourself.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</p>

<form class="ajax" action="<?php echo $_SERVER['PHP_SELF']; ?>
" method="post">

<fieldset>
<legend><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Recipient<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>

<div>
<label class="required" for="email"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  echo smarty_function_fv(array('message' => 'email'), $this);?>
</label>
<input type="text" size="32" maxlength="60" name="email" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
<input type="submit" value="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Send Mailing<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"/>
</div>

</fieldset>

<p><?php $this->_tag_stack[] = array('t', array('escape' => 'no','1' => '<strong>','2' => '</strong>')); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If your mailing includes personalizations, you can %1optionally%2 supply test values<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>

<fieldset>
<legend><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Personalizations<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>

<?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fields'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fields']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['field']):
        $this->_foreach['fields']['iteration']++;
?>
<div>
<label<?php if ($this->_tpl_vars['field']['required'] == 'on'): ?> class="required"<?php endif; ?> for="field<?php echo $this->_tpl_vars['key']; ?>
"><?php echo $this->_tpl_vars['field']['prompt']; ?>
:</label>

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
]" value="<?php if ($this->_tpl_vars['field']['normally']):  echo ((is_array($_tmp=$this->_tpl_vars['field']['normally'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  else:  echo $this->_tpl_vars['config']['app']['dateformat'];  endif; ?>" />

<?php elseif ($this->_tpl_vars['field']['type'] == 'number'): ?>
<input type="text" class="pvNumber<?php if ($this->_tpl_vars['field']['required'] == 'on'): ?> pvEmpty<?php endif; ?>" size="12" name="d[<?php echo $this->_tpl_vars['key']; ?>
]" value="<?php if ($this->_tpl_vars['field']['normally']):  echo ((is_array($_tmp=$this->_tpl_vars['field']['normally'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  endif; ?>" />

<?php else: ?>
<input type="text"<?php if ($this->_tpl_vars['field']['required'] == 'on'): ?> class="pvEmpty"<?php endif; ?> size="32" name="d[<?php echo $this->_tpl_vars['key']; ?>
]" value="<?php if ($this->_tpl_vars['field']['normally']):  echo ((is_array($_tmp=$this->_tpl_vars['field']['normally'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));  endif; ?>" />
<?php endif; ?>

</div>

<?php endforeach; endif; unset($_from); ?>

</fieldset>

</form>