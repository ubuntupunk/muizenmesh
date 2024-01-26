<?php
/* Smarty version 4.3.1, created on 2023-12-21 13:10:29
  from '/home/sexthera/public_html/muizenmesh.co.za/store/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65841d25a6be25_82987125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20ea1eefa17720ca4390903238176e133e505e81' => 
    array (
      0 => '/home/sexthera/public_html/muizenmesh.co.za/store/themes/classic/templates/page.tpl',
      1 => 1694187264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65841d25a6be25_82987125 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72228142065841d25a64738_08350469', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_210924465665841d25a65722_92768549 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_110354977965841d25a64e36_07480633 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210924465665841d25a65722_92768549', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_109667777465841d25a68d66_78572815 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_160452337665841d25a69741_21018630 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_200698555965841d25a68430_31478600 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109667777465841d25a68d66_78572815', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160452337665841d25a69741_21018630', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_167981299465841d25a6abe4_94867211 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_78318454165841d25a6a4e9_25930102 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167981299465841d25a6abe4_94867211', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_72228142065841d25a64738_08350469 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_72228142065841d25a64738_08350469',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_110354977965841d25a64e36_07480633',
  ),
  'page_title' => 
  array (
    0 => 'Block_210924465665841d25a65722_92768549',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_200698555965841d25a68430_31478600',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_109667777465841d25a68d66_78572815',
  ),
  'page_content' => 
  array (
    0 => 'Block_160452337665841d25a69741_21018630',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_78318454165841d25a6a4e9_25930102',
  ),
  'page_footer' => 
  array (
    0 => 'Block_167981299465841d25a6abe4_94867211',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110354977965841d25a64e36_07480633', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200698555965841d25a68430_31478600', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78318454165841d25a6a4e9_25930102', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
