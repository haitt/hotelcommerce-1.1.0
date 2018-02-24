<?php /* Smarty version Smarty-3.1.19, created on 2018-02-24 08:09:43
         compiled from "/var/www/html/hotelcommerce-1.1.0/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13178493165a911dc74e07a5-78439886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1c99dfb4de20fdc974e5cc41a5ff0b4186f139c' => 
    array (
      0 => '/var/www/html/hotelcommerce-1.1.0/admin/themes/default/template/content.tpl',
      1 => 1504354799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13178493165a911dc74e07a5-78439886',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a911dc74e55b0_24627789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a911dc74e55b0_24627789')) {function content_5a911dc74e55b0_24627789($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
