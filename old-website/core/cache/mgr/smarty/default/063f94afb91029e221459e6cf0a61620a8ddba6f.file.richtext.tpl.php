<?php /* Smarty version Smarty-3.0.4, created on 2013-08-01 18:50:28
         compiled from "/home/studiofo/public_html/manager/templates/default/element/tv/renders/input/richtext.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132027823551faadf43cddc7-19933421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '063f94afb91029e221459e6cf0a61620a8ddba6f' => 
    array (
      0 => '/home/studiofo/public_html/manager/templates/default/element/tv/renders/input/richtext.tpl',
      1 => 1361816080,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132027823551faadf43cddc7-19933421',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/studiofo/public_html/core/model/smarty/plugins/modifier.escape.php';
?><textarea id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" class="modx-richtext" onchange="MODx.fireResourceFormChange();"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->get('value'));?>
</textarea>

<script type="text/javascript">

Ext.onReady(function() {
    
    MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'));
    
});
</script>