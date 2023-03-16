<?php require 'connection.php';
//    session_start();
    if(isset($_POST['add'])){
        $airline_name=$_POST['airline_name'];
        $sql='INSERT INTO airline(airline_name) VALUES(:airline_name)';
        $statement = $connection -> prepare($sql);
        $statement->execute([':airline_name'=>$airline_name]);
        header('location:admin.php');
    }
    if(isset($_POST['delete'])){
        $airline_name=$_POST['airline_name'];
        $sql='DELETE FROM airline WHERE airline_name=:airline_name';
        $statement = $connection -> prepare($sql);
        $statement->execute([':airline_name'=>$airline_name]);
        header('location:admin.php');
    }
    if(isset($_GET['name'])){
        $airline=$_GET['name'];
        $sql='SELECT * FROM airline WHERE airline_name=:airline_name';
        $statement = $connection -> prepare($sql);
        $statement->execute([':airline_name'=>$airline_name]);
        $airlines = $statement->fetchAll(PDO::FETCH_OBJ);
        $airline_name=$airline->airline_name;
        $_SESSION['airline']=$airline_name;
        header('location:admin.php');
    }
?>