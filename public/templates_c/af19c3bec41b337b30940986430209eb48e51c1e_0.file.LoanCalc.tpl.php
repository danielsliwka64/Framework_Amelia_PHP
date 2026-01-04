<?php
/* Smarty version 3.1.33, created on 2026-01-04 15:42:08
  from 'C:\xampp\htdocs\amelia\app\views\LoanCalc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_695a7c40bd3ae1_79181957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af19c3bec41b337b30940986430209eb48e51c1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\LoanCalc.tpl',
      1 => 1767537327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_695a7c40bd3ae1_79181957 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css">

<div class="container">

    <div class="top-bar">
        Zalogowany jako: <b><?php echo $_SESSION['user'];?>
</b>
        | <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Wyloguj</a>
    </div>

    <h2>Kalkulator kredytowy</h2>

    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
loanCalc">

        <label>Kwota kredytu (zł)</label>
        <input type="text" name="amount">

        <label>Liczba lat</label>
        <input type="text" name="years">

        <label>Oprocentowanie roczne (%)</label>
        <input type="text" name="rate">

        <button type="submit">Oblicz ratę</button>
    </form>

    <?php if (isset($_smarty_tpl->tpl_vars['result']->value)) {?>
        <div class="result">
            Miesięczna rata: <?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 zł
        </div>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php }
}
