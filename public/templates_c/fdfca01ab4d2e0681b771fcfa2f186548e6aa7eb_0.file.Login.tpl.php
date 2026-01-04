<?php
/* Smarty version 3.1.33, created on 2026-01-04 15:42:03
  from 'C:\xampp\htdocs\amelia\app\views\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_695a7c3ba8ae69_30539058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdfca01ab4d2e0681b771fcfa2f186548e6aa7eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\Login.tpl',
      1 => 1767537717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_695a7c3ba8ae69_30539058 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css">

<div class="container">

    <h2>Logowanie</h2>

    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login">
        <label>Login</label>
        <input type="text" name="login">

        <label>Hasło</label>
        <input type="password" name="pass">

        <button type="submit">Zaloguj</button>
    </form>

    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php }
}
