<?php

function writeSecretSentence(string $animal, string $something) : string 
{
return $animal." s'incline face à ".$something;
}

echo writeSecretSentence("le chat", "la lune");
