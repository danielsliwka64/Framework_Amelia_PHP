{if $msgs->isError() && isset($msgs->errors)}
    <ul style="color:red;">
        {foreach $msgs->errors as $e}
            <li>{$e}</li>
        {/foreach}
    </ul>
{/if}

{if $msgs->isInfo() && isset($msgs->infos)}
    <ul style="color:green;">
        {foreach $msgs->infos as $i}
            <li>{$i}</li>
        {/foreach}
    </ul>
{/if}

{if $msgs->isWarning() && isset($msgs->warnings)}
    <ul style="color:orange;">
        {foreach $msgs->warnings as $w}
            <li>{$w}</li>
        {/foreach}
    </ul>
{/if}
