<form method="post">
    <input type="submit" name="test" id="test" value="Hazme Click :)" /><br/>
</form>

<?php

function saludo()
{
   echo "Saludos al grupo 2058";
}
if(array_key_exists('test',$_POST)){
   saludo();
}
?>