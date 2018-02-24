<?php /* Smarty version Smarty-3.1.19, created on 2018-02-24 08:17:27
         compiled from "/var/www/html/hotelcommerce-1.1.0/modules/wkhotelroom/views/templates/hook/hotelRoomNaviagtionMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7014463655a911f974726e6-89818022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e052cc9786d48eafb3e04092bdb11d7df616ea6' => 
    array (
      0 => '/var/www/html/hotelcommerce-1.1.0/modules/wkhotelroom/views/templates/hook/hotelRoomNaviagtionMenu.tpl',
      1 => 1504354799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7014463655a911f974726e6-89818022',
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
  'unifunc' => 'content_5a911f97478776_23341134',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a911f97478776_23341134')) {function content_5a911f97478776_23341134($_smarty_tpl) {?><li>
	<a class="navigation-link jsNaviLink" data-block="#hotelRoomsBlock" href="<?php if (($_smarty_tpl->tpl_vars['page_name']->value=='index')) {?>#<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
#hotelRoomsBlock<?php }?>"><?php echo smartyTranslate(array('s'=>'Our Rooms','mod'=>'wkhotelroom'),$_smarty_tpl);?>
</a>
</li><?php }} ?>
