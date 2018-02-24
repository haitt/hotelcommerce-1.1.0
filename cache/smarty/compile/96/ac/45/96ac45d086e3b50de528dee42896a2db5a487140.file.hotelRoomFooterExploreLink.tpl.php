<?php /* Smarty version Smarty-3.1.19, created on 2018-02-24 08:17:27
         compiled from "/var/www/html/hotelcommerce-1.1.0/modules/wkhotelroom/views/templates/hook/hotelRoomFooterExploreLink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15868466225a911f97686169-61316118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96ac45d086e3b50de528dee42896a2db5a487140' => 
    array (
      0 => '/var/www/html/hotelcommerce-1.1.0/modules/wkhotelroom/views/templates/hook/hotelRoomFooterExploreLink.tpl',
      1 => 1504354799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15868466225a911f97686169-61316118',
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
  'unifunc' => 'content_5a911f9768de60_23599729',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a911f9768de60_23599729')) {function content_5a911f9768de60_23599729($_smarty_tpl) {?><li class="item">
	<a data-block="#hotelRoomsBlock" class="jsFooterTraverseBlock" title="<?php echo smartyTranslate(array('s'=>'Our Rooms','mod'=>'wkhotelroom'),$_smarty_tpl);?>
" href="<?php if (($_smarty_tpl->tpl_vars['page_name']->value=='index')) {?>#<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
#hotelRoomsBlock<?php }?>">
		<?php echo smartyTranslate(array('s'=>'Our Rooms','mod'=>'wkhotelroom'),$_smarty_tpl);?>

	</a>
</li><?php }} ?>
