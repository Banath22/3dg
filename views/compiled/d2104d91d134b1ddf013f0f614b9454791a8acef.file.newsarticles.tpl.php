<?php /* Smarty version Smarty-3.1.18, created on 2015-10-13 15:02:41
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11292561cfdb578f965-07232231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1444741360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11292561cfdb578f965-07232231',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_561cfdb593a991_08526944',
  'variables' => 
  array (
    'data' => 0,
    'newsItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561cfdb593a991_08526944')) {function content_561cfdb593a991_08526944($_smarty_tpl) {?>
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

</section><?php }} ?>
