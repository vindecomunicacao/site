<?php
function str_outWeirdChar($value)
{
    $keys = array();
    $values = array();
    preg_match_all('/./u', "áàãâéêíóôõúüçÁÀÃÂÉÊÍÓÔÕÚÜÇ", $keys);
    preg_match_all('/./u', "aaaaeeiooouucAAAAEEIOOOUUC", $values);
    $value = strtr($value, array_combine($keys[0], $values[0]));

    return $value;
}