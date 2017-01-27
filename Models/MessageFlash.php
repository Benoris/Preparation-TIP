<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$msg = "";
function SetMessage($txt){
    GLOBAL $msg;
    $msg = $txt;
}
function GetMessage(){
    GLOBAL $msg;
    if($msg != null)
        return $msg;
}