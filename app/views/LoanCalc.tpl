<link rel="stylesheet" href="{$conf->app_url}/css/style.css">

<div class="container">

    <div class="top-bar">
        Zalogowany jako: <b>{$smarty.session.user}</b>
        | <a href="{$conf->action_url}logout">Wyloguj</a>
    </div>

    <h2>Kalkulator kredytowy</h2>

    <form method="post" action="{$conf->action_url}loanCalc">

        <label>Kwota kredytu (zł)</label>
        <input type="text" name="amount">

        <label>Liczba lat</label>
        <input type="text" name="years">

        <label>Oprocentowanie roczne (%)</label>
        <input type="text" name="rate">

        <button type="submit">Oblicz ratę</button>
    </form>

    {if isset($result)}
        <div class="result">
            Miesięczna rata: {$result} zł
        </div>
    {/if}

    {include file='messages.tpl'}

</div>
