<?php
function hashPassword($plainText){
    return password_hash($plainText,PASSWORD_BCRYPT);
}
function verifyPassword($plainText, $hash)
{
    # code...
   return password__verify($plainText,$hash);
}
?>