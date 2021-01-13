<?php
$this->style = "public/css/chat.css";
$this->script = "public/js/chat.js";
?>

<div id="message-container" >

</div>

<div class="typing-container">
    <form>
        <textarea id="message" class="textinput" placeholder="Message..."></textarea>
        <input id="valid" type='button' value="Envoyer">
    </form>
</div>