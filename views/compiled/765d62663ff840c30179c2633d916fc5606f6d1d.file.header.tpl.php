<?php /* Smarty version Smarty-3.1.18, created on 2015-10-28 12:04:49
         compiled from "views\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26889561d1c622650a0-72549502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765d62663ff840c30179c2633d916fc5606f6d1d' => 
    array (
      0 => 'views\\header.tpl',
      1 => 1446030287,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26889561d1c622650a0-72549502',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_561d1c624356e0_77478017',
  'variables' => 
  array (
    'curr_page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561d1c624356e0_77478017')) {function content_561d1c624356e0_77478017($_smarty_tpl) {?><header>
	<ul>
		<li ><a <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=='home') {?> class="selected" <?php }?> href="?page=home">Home</a></li>
		<li ><a <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=='news') {?> class="selected" <?php }?> href="?page=news">News</a></li>
		<li ><a <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=='tour') {?> class="selected" <?php }?> href="?page=tour">Tour</a></li>
		<li ><a <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=='music') {?> class="selected" <?php }?> href="?page=music">Music</a></li>
		<li ><a <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=='photos') {?> class="selected" <?php }?> href="?page=photos">Photos</a></li>
		<li ><a <?php if ($_smarty_tpl->tpl_vars['curr_page']->value=='about') {?> class="selected" <?php }?> href="?page=about">About</a></li>
	</ul>
	<hr>
</header><?php }} ?>
