<?php /* Smarty version Smarty-3.1.19, created on 2018-02-24 08:17:27
         compiled from "/var/www/html/hotelcommerce-1.1.0/modules/wkhotelfeaturesblock/views/templates/hook/hotelFeatureFooterExploreLink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3856358035a911f9767a5b3-50056014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90caa0c0fa3a128d200c03933220f56642dd2017' => 
    array (
      0 => '/var/www/html/hotelcommerce-1.1.0/modules/wkhotelfeaturesblock/views/templates/hook/hotelFeatureFooterExploreLink.tpl',
      1 => 1504354799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3856358035a911f9767a5b3-50056014',
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
  'unifunc' => 'content_5a911f97681f93_20445463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a911f97681f93_20445463')) {function content_5a911f97681f93_20445463($_smarty_tpl) {?><li class="item">
	<a data-block="#hotelAmenitiesBlock" class="jsFooterTraverseBlock" title="<?php echo smartyTranslate(array('s'=>'Amenities','mod'=>'wkhotelfeaturesblock'),$_smarty_tpl);?>
" href="<?php if (($_smarty_tpl->tpl_vars['page_name']->value=='index')) {?>#<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
#hotelAmenitiesBlock<?php }?>">
		<?php echo smartyTranslate(array('s'=>'Amenities','mod'=>'wkhotelfeaturesblock'),$_smarty_tpl);?>

	</a>
</li><?php }} ?>
