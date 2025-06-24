<?php
/* Smarty version 4.3.1, created on 2024-08-02 18:54:57
  from '/home/sexthera/public_html/muizenmesh.co.za/store/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66ad0f61e3ebf3_23731403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '804df426b1e7ce92900b9cdfc8dbb7d1dc1ae7bf' => 
    array (
      0 => '/home/sexthera/public_html/muizenmesh.co.za/store/themes/classic/templates/index.tpl',
      1 => 1694187264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ad0f61e3ebf3_23731403 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181838948566ad0f61e3b432_73852519', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_100243925066ad0f61e3bc82_45490282 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_39262101766ad0f61e3cf78_94078547 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_47478285166ad0f61e3c888_13353362 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39262101766ad0f61e3cf78_94078547', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_181838948566ad0f61e3b432_73852519 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_181838948566ad0f61e3b432_73852519',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_100243925066ad0f61e3bc82_45490282',
  ),
  'page_content' => 
  array (
    0 => 'Block_47478285166ad0f61e3c888_13353362',
  ),
  'hook_home' => 
  array (
    0 => 'Block_39262101766ad0f61e3cf78_94078547',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100243925066ad0f61e3bc82_45490282', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47478285166ad0f61e3c888_13353362', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
