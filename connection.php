<?php 
    $dsn="mysql:host=localhost;dbname=flight_ticket_reservation";
    $user="root";
    $password="";
    $options=[];
    try{
        $connection=new PDO($dsn,$user,$password,$options);
    }
    catch(PDOException){
        // echo"<p class='text-light bg-danger m-0'>Connection Interrupted!</p>";
    }

?>