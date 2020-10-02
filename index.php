<?php
$animal = "Le chat";
$something = "la lune";
function writeSecretSentence(string $animal, string $something) : string 
{
return $animal." s'incline face à ".$something;
}

echo writeSecretSentence($animal, $something);