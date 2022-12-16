<?php /* Smarty version 2.6.13, created on 2013-03-20 14:02:51
         compiled from admin/admin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't', 'admin/admin.tpl', 3, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/admin.header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Admin Menu<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h2>

<div id="language" class="right">
<form method="POST" action="" id="language">
<select name="lang" onChange="this.form.submit();">
<option value="en">English (en)</option>
<option value="en-uk" <?php if ($this->_tpl_vars['lang'] == 'en-uk'): ?>SELECTED<?php endif; ?>>british english (en-uk)</option>
<option value="bg" <?php if ($this->_tpl_vars['lang'] == 'bg'): ?>SELECTED<?php endif; ?>>български (bg)</option>
<option value="da" <?php if ($this->_tpl_vars['lang'] == 'da'): ?>SELECTED<?php endif; ?>>dansk (da)</option>
<option value="de" <?php if ($this->_tpl_vars['lang'] == 'de'): ?>SELECTED<?php endif; ?>>deutsch (de)</option>
<option value="es" <?php if ($this->_tpl_vars['lang'] == 'es'): ?>SELECTED<?php endif; ?>>español (es)</option>
<option value="fr" <?php if ($this->_tpl_vars['lang'] == 'fr'): ?>SELECTED<?php endif; ?>>français (fr)</option>
<option value="it" <?php if ($this->_tpl_vars['lang'] == 'it'): ?>SELECTED<?php endif; ?>>italiano (it)</option>
<option value="nl" <?php if ($this->_tpl_vars['lang'] == 'nl'): ?>SELECTED<?php endif; ?>>nederlands (nl)</option>
<option value="pl" <?php if ($this->_tpl_vars['lang'] == 'pl'): ?>SELECTED<?php endif; ?>>polski (pl)</option>
<option value="pt" <?php if ($this->_tpl_vars['lang'] == 'pt'): ?>SELECTED<?php endif; ?>>português (pt)</option>
<option value="pt-br" <?php if ($this->_tpl_vars['lang'] == 'pt-br'): ?>SELECTED<?php endif; ?>>brasil português (pt-br)</option>
<option value="ro" <?php if ($this->_tpl_vars['lang'] == 'ro'): ?>SELECTED<?php endif; ?>>română (ro)</option>
<option value="ru" <?php if ($this->_tpl_vars['lang'] == 'ru'): ?>SELECTED<?php endif; ?>>русский язык (ru)</option>
</select>
</form>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/messages.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="boxMenu">

<div><a href="<?php echo $this->_tpl_vars['url']['base']; ?>
admin/mailings/admin_mailings.php"><img src="<?php echo $this->_tpl_vars['url']['theme']['shared']; ?>
images/icons/mailing.png" alt="envelope icon" class="navimage" /> <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Mailings<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a> - <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Send mailings to the entire list or to a subset of subscribers. Mailing status and history can also be viewed from here.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>

<div><a href="<?php echo $this->_tpl_vars['url']['base']; ?>
admin/subscribers/admin_subscribers.php"><img src="<?php echo $this->_tpl_vars['url']['theme']['shared']; ?>
images/icons/subscribers.png" alt="people icon" class="navimage" /> <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Subscribers<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a> - <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Here you can list, add, delete, import, export, and update your subscribers. You can also create groups (subsets) of your subsribers from here.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>

<div><a href="<?php echo $this->_tpl_vars['url']['base']; ?>
admin/setup/admin_setup.php"><img src="<?php echo $this->_tpl_vars['url']['theme']['shared']; ?>
images/icons/settings.png" alt="hammer and screw icon" class="navimage" /> <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Setup<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a> - <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This area allows you to configure poMMo. Set mailing list parameters, choose the information you'd like to collect from subscribers, and generate subscription forms from here.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>

<br />


</div>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/admin.footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>