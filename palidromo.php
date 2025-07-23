<?php
function es_palindromo($cadena): bool {
    $cadena = strtolower(str_replace(' ', '',$cadena));
    return $cadena === strrev($cadena);
}

echo es_palindromo('anilina') ? 'True' : 'False';
?>
