<?php /* Smarty version Smarty-3.1.19, created on 2018-02-24 08:17:27
         compiled from "/var/www/html/hotelcommerce-1.1.0/modules/wktestimonialblock/views/templates/hook/hotelTestimonialFooterExploreLink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7510389755a911f97692039-16408858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '850fc90cfc63c7ea68f0e6b50f0299e85e135ed7' => 
    array (
      0 => '/var/www/html/hotelcommerce-1.1.0/modules/wktestimonialblock/views/templates/hook/hotelTestimonialFooterExploreLink.tpl',
      1 => 1504354799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7510389755a911f97692039-16408858',
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
  'unifunc' => 'content_5a911f97699835_79881309',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a911f97699835_79881309')) {function content_5a911f97699835_79881309($_smarty_tpl) {?><li class="item">
	<a data-block="#hotelTestimonialBlock" class="jsFooterTraverseBlock" title="<?php echo smartyTranslate(array('s'=>'Testimonials','mod'=>'blocknevigationmenu'),$_smarty_tpl);?>
" href="<?php if (($_smarty_tpl->tpl_vars['page_name']->value=='index')) {?>#<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
#hotelTestimonialBlock<?php }?>">
		<?php echo smartyTranslate(array('s'=>'Testimonials','mod'=>'blocknevigationmenu'),$_smarty_tpl);?>

	</a>
</li><?php }} ?>
