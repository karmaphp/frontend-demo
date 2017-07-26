{extends file="__layouts/General.tpl"}

{block name="content"}

    <h1>Merhaba Dünya!</h1>
    <p>Ben Smarty ile çalışıyorum.</p>
    <ul>
        <li><b>First Name:</b> {$firstname}</li>
        <li><b>Last Name:</b> {$lastname}</li>
    </ul>

{/block}