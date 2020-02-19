<?php
    $Username=$_GET['Username'];
    $PASSWORD=$_GET['PASSWORD'];
    $Tipo=$_GET['Tipo'];
    $Status=$_GET['Status'];
    $Intentos=$_GET['Intentos'];

    print("Username: ".$Username."<br>");
    print("PASSWORD: ".$PASSWORD."<br>");
    print("Tipo: ".$Tipo."<br>");
    print("Status: ".$Status."<br>");
    print("Intentos: ".$Intentos."<br>");
?>