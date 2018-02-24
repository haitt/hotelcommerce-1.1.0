<?php /* Smarty version Smarty-3.1.19, created on 2018-02-24 08:17:27
         compiled from "/var/www/html/hotelcommerce-1.1.0/modules/wkabouthotelblock/views/templates/hook/hotelInteriorFooterExploreLink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15483872405a911f9766e474-06985093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e44d6ddd83ad2d2a374b4bac91b446c316b78efe' => 
    array (
      0 => '/var/www/html/hotelcommerce-1.1.0/modules/wkabouthotelblock/views/templates/hook/hotelInteriorFooterExploreLink.tpl',
      1 => 1504354799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15483872405a911f9766e474-06985093',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a911f97675266_64317373',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a911f97675266_64317373')) {function content_5a911f97675266_64317373($_smarty_tpl) {?><li class="item">
	<a data-block="#hotelInteriorBlock" class="jsFooterTraverseBlock" title="<?php echo smartyTranslate(array('s'=>'Interior','mod'=>'wkabouthotelblock'),$_smarty_tpl);?>
" href="<?php if (($_smarty_tpl->tpl_vars['page_name']->value=='index')) {?>#<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
#hotelInteriorBlock<?php }?>">
		<?php echo smartyTranslate(array('s'=>'Interior','mod'=>'wkabouthotelblock'),$_smarty_tpl);?>

	</a>
</li><?php }} ?>
