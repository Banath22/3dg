<?php /* Smarty version Smarty-3.1.18, created on 2015-10-27 14:44:39
         compiled from "views\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21236562f7fc7f3ce59-36820067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e64ec67b9351f7c35c643899da1c549889b16a43' => 
    array (
      0 => 'views\\home.tpl',
      1 => 1445953457,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21236562f7fc7f3ce59-36820067',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'newsItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_562f7fc8079c93_21083865',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562f7fc8079c93_21083865')) {function content_562f7fc8079c93_21083865($_smarty_tpl) {?><div class="content">
	<section>


	<?php  $_smarty_tpl->tpl_vars['newsItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsItem']->key => $_smarty_tpl->tpl_vars['newsItem']->value) {
$_smarty_tpl->tpl_vars['newsItem']->_loop = true;
?>
		
		<div id='news'><article>
		<h1><?php echo $_smarty_tpl->tpl_vars['newsItem']->value['title'];?>
</h1>
		<content><?php echo $_smarty_tpl->tpl_vars['newsItem']->value['content'];?>
</content>
		</article></div>
	<?php } ?>

	</section>
</div><?php }} ?>
