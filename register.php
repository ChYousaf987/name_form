<?php
    $name = $_POST['name'];
    $number = $_POST['number'];
    $address = $_POST['address'];

    $connection = mysqli_connect("localhost", "root", "", "data-enter") or die();

    $insert = "INSERT INTO inputs (name,mobile_no,address) VALUE('{$name}', $number, '{$address}')" or die();
    
    
    mysqli_query($connection,$insert);
    
    header("location: http://localhost/name_form/");
    
    ?>