<?php
/* Smarty version 4.3.1, created on 2024-07-29 21:05:13
  from '/home/sexthera/public_html/muizenmesh.co.za/store/admin963hiaiywinz0astpu8/themes/new-theme/template/components/layout/confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a7e7e9d3a3c5_34164996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b03c8c306d4bc837b04c01ca36378aff043f1a3' => 
    array (
      0 => '/home/sexthera/public_html/muizenmesh.co.za/store/admin963hiaiywinz0astpu8/themes/new-theme/template/components/layout/confirmation_messages.tpl',
      1 => 1694187249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a7e7e9d3a3c5_34164996 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['confirmations']->value)) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
$_smarty_tpl->tpl_vars['conf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
$_smarty_tpl->tpl_vars['conf']->do_else = false;
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
