<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Connectdb.php';

function CheckUser($login,$pwd){
    $db = connectDb();
    $sql = "SELECT * FROM client WHERE Login = ? AND Password = ?";
    $request = $db->prepare($sql);
    if($request->execute()){
        return $request->fetch();
    }
    else
        
}