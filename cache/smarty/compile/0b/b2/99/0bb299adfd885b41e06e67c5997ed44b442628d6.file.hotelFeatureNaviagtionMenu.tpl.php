<?php /* Smarty version Smarty-3.1.19, created on 2018-02-24 08:17:27
         compiled from "/var/www/html/hotelcommerce-1.1.0/modules/wkhotelfeaturesblock/views/templates/hook/hotelFeatureNaviagtionMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4800138835a911f97466659-73347968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bb299adfd885b41e06e67c5997ed44b442628d6' => 
    array (
      0 => '/var/www/html/hotelcommerce-1.1.0/modules/wkhotelfeaturesblock/views/templates/hook/hotelFeatureNaviagtionMenu.tpl',
      1 => 1504354799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4800138835a911f97466659-73347968',
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
  'unifunc' => 'content_5a911f9746cc61_10488161',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a911f9746cc61_10488161')) {function content_5a911f9746cc61_10488161($_smarty_tpl) {?><li>
	<a class="navigation-link jsNaviLink" data-block="#hotelAmenitiesBlock" href="<?php if (($_smarty_tpl->tpl_vars['page_name']->value=='index')) {?>#<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
#hotelAmenitiesBlock<?php }?>"><?php echo smartyTranslate(array('s'=>'Amenities','mod'=>'wkhotelfeaturesblock'),$_smarty_tpl);?>
</a>
</li><?php }} ?>
