<?php /* Smarty version Smarty-3.1.19, created on 2018-02-24 08:09:43
         compiled from "/var/www/html/hotelcommerce-1.1.0/admin/themes/default/template/layout-export.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8595077345a911dc768d845-40330989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eeaa3903a0b7d1a87586d1708740e9a6ce2324f1' => 
    array (
      0 => '/var/www/html/hotelcommerce-1.1.0/admin/themes/default/template/layout-export.tpl',
      1 => 1504354799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8595077345a911dc768d845-40330989',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'export_precontent' => 0,
    'export_headers' => 0,
    'text_delimiter' => 0,
    'header' => 0,
    'export_content' => 0,
    'line' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a911dc769ac49_08638410',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a911dc769ac49_08638410')) {function content_5a911dc769ac49_08638410($_smarty_tpl) {?>
<?php echo $_smarty_tpl->tpl_vars['export_precontent']->value;?>
<?php  $_smarty_tpl->tpl_vars['header'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['header']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['export_headers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['header']->key => $_smarty_tpl->tpl_vars['header']->value) {
$_smarty_tpl->tpl_vars['header']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['text_delimiter']->value;?>
<?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php echo $_smarty_tpl->tpl_vars['text_delimiter']->value;?>
;<?php } ?>

<?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['export_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>
<?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['line']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->tpl_vars['content']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['text_delimiter']->value;?>
<?php echo $_smarty_tpl->tpl_vars['content']->value;?>
<?php echo $_smarty_tpl->tpl_vars['text_delimiter']->value;?>
;<?php } ?>

<?php } ?><?php }} ?>
