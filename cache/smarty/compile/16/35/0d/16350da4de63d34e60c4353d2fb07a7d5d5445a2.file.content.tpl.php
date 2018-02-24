<?php /* Smarty version Smarty-3.1.19, created on 2018-02-24 09:03:01
         compiled from "/var/www/html/hotelcommerce-1.1.0/adminhaitt/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5159008765a912a45390f35-03978221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16350da4de63d34e60c4353d2fb07a7d5d5445a2' => 
    array (
      0 => '/var/www/html/hotelcommerce-1.1.0/adminhaitt/themes/default/template/content.tpl',
      1 => 1504354799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5159008765a912a45390f35-03978221',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a912a45396366_83145411',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a912a45396366_83145411')) {function content_5a912a45396366_83145411($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
