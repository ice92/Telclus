<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
session_unset();
session_destroy();
header('Refresh: 2; URL=login.php');
?>