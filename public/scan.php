<?php
/**
 * Created by PhpStorm.
 * User: dennys
 * Date: 29/10/16
 * Time: 17:47
 */
$query = 'Loja peça flor';
$start = 10;
$url = 'https://www.google.com.br/?gws_rd=ssl#q=download+windows+98+iso+%2B4shared'; //. $query . '&start=' . $start;
$file_contents = file_get_contents($url);
// display file
echo $file_contents;