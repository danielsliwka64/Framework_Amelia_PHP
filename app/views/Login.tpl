<link rel="stylesheet" href="{$conf->app_url}/css/style.css">

<div class="container">

    <h2>Logowanie</h2>

    <form method="post" action="{$conf->action_url}login">
        <label>Login</label>
        <input type="text" name="login">

        <label>Hasło</label>
        <input type="password" name="pass">

        <button type="submit">Zaloguj</button>
    </form>

    {include file='messages.tpl'}

</div>
