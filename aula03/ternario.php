<?php

$idade = 18;

echo $idade >= 18? "Maior de idade":"Menor de idade"; 

echo isset($idade)?$nome:'nome não definidoo'; //se nome existir mostre nome, caso não exiba não definido.

//para subistituir o uso do isset, usa-se ?? exemplo:

echo $nome ?? 'nome não definido';