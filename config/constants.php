<?php 


    //Start Session
    session_start();


    //create constants to store non repeating values
    define('SITEURL','http://localhost:8081/happy-meals/');
    define('LOCALHOST','localhost:3307');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','varu12345');
    define('DB_NAME','happy-meals');

    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error($conn));//database connection
    $db_select = mysqli_select_db($conn, "happy-meals") or die(mysqli_error($conn)); //selecting database

?>