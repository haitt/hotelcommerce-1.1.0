<?php /* Smarty version Smarty-3.1.19, created on 2018-02-24 08:17:27
         compiled from "/var/www/html/hotelcommerce-1.1.0/modules/wkfooterexploreblock/views/templates/hook/wkFooterExploreBlock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12751023775a911f97653902-07028321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fa24de63b8de8ffc275e5ab5e551da34358c55c' => 
    array (
      0 => '/var/www/html/hotelcommerce-1.1.0/modules/wkfooterexploreblock/views/templates/hook/wkFooterExploreBlock.tpl',
      1 => 1504354799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12751023775a911f97653902-07028321',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'force_ssl' => 0,
    'base_dir_ssl' => 0,
    'base_dir' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a911f9766a6e2_26667771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a911f9766a6e2_26667771')) {function content_5a911f9766a6e2_26667771($_smarty_tpl) {?><div class="col-sm-3">
	<div class="row">
		<section class="col-xs-12 col-sm-12">
			<div class="row margin-lr-0 footer-section-heading">
				<p><?php echo smartyTranslate(array('s'=>'Explore','mod'=>'wkfooterexploreblock'),$_smarty_tpl);?>
</p>
				<hr/>
			</div>
			<div class="row margin-lr-0">
				<ul class="footer-explore-section">
					<li class="item">
						<a title="<?php echo smartyTranslate(array('s'=>'Home','mod'=>'wkfooterexploreblock'),$_smarty_tpl);?>
" href="<?php if (isset($_smarty_tpl->tpl_vars['force_ssl']->value)&&$_smarty_tpl->tpl_vars['force_ssl']->value) {?><?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php }?>">
							<?php echo smartyTranslate(array('s'=>'Home','mod'=>'wkfooterexploreblock'),$_smarty_tpl);?>

						</a>
					</li>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayFooterExploreSectionHook"),$_smarty_tpl);?>

					<li class="item">
						<a title="<?php echo smartyTranslate(array('s'=>'Contact','mod'=>'wkfooterexploreblock'),$_smarty_tpl);?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
">
							<?php echo smartyTranslate(array('s'=>'Contact','mod'=>'wkfooterexploreblock'),$_smarty_tpl);?>

						</a>
					</li>
				</ul>
			</div>
		</section>
	</div>
</div>

<?php }} ?>
