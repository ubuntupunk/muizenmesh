<?php
/* Smarty version 4.3.1, created on 2023-12-21 13:10:29
  from '/home/sexthera/public_html/muizenmesh.co.za/store/themes/classic/templates/catalog/_partials/product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65841d259d1d56_85471931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1d84d3388240d08e1af22037e38e4b104286858' => 
    array (
      0 => '/home/sexthera/public_html/muizenmesh.co.za/store/themes/classic/templates/catalog/_partials/product-flags.tpl',
      1 => 1694187264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65841d259d1d56_85471931 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '194207342065841d259cd005_26516137';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162075677665841d259cecf0_44103338', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_162075677665841d259cecf0_44103338 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_162075677665841d259cecf0_44103338',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags js-product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <li class="product-flag <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
