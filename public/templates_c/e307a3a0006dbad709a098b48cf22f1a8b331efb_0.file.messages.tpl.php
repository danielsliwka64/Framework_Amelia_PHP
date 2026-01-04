<?php
/* Smarty version 3.1.33, created on 2026-01-04 15:41:24
  from 'C:\xampp\htdocs\amelia\app\views\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_695a7c1441b661_30461949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e307a3a0006dbad709a098b48cf22f1a8b331efb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\messages.tpl',
      1 => 1767536522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_695a7c1441b661_30461949 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['msgs']->value->isError() && isset($_smarty_tpl->tpl_vars['msgs']->value->errors)) {?>
    <ul style="color:red;">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->errors, 'e');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
?>
            <li><?php echo $_smarty_tpl->tpl_vars['e']->value;?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo() && isset($_smarty_tpl->tpl_vars['msgs']->value->infos)) {?>
    <ul style="color:green;">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->infos, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
            <li><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isWarning() && isset($_smarty_tpl->tpl_vars['msgs']->value->warnings)) {?>
    <ul style="color:orange;">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->warnings, 'w');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['w']->value) {
?>
            <li><?php echo $_smarty_tpl->tpl_vars['w']->value;?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php }
}
}
