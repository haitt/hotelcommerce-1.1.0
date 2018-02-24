<?php /* Smarty version Smarty-3.1.19, created on 2018-02-24 08:17:27
         compiled from "/var/www/html/hotelcommerce-1.1.0/modules/wkfooterpaymentblock/views/templates/hook/wkFooterPaymentBlock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2888875055a911f976aba54-35648590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db5a2e476d33bc993db42230342dd7abc85cf1ec' => 
    array (
      0 => '/var/www/html/hotelcommerce-1.1.0/modules/wkfooterpaymentblock/views/templates/hook/wkFooterPaymentBlock.tpl',
      1 => 1504354799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2888875055a911f976aba54-35648590',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a911f976b2855_14487406',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a911f976b2855_14487406')) {function content_5a911f976b2855_14487406($_smarty_tpl) {?><div class="row">
	<section class="col-xs-12 col-sm-12">
		<div class="row margin-lr-0 footer-section-heading">
			<p><?php echo smartyTranslate(array('s'=>'payment accepted','mod'=>'wkfooterpaymentblock'),$_smarty_tpl);?>
</p>
			<hr/>
		</div>
		<div class="row margin-lr-0 footer-payment-block">
			<img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
/icon-visa.png">
			<img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
/icon-master-card.png">
			<img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
/icon-american-express.png">
			<img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
/icon-paypal.png">
		</div>
	</section>
</div><?php }} ?>
