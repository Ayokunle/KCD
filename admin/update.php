<?php

ini_set("log_errors", 1);
ini_set('display_errors', 1);
ini_set("error_log", "php-error.log");

error_reporting(-1);
ini_set('display_errors', 'On');
    
//echo "string";
test_function();

  
// if (true) {
//   if (isset($_POST["action"]) && !empty($_POST["action"])) { //Checks if action value exists
//     $action = $_POST["action"];
//     switch($action) { //Switch case for value of action
//       case "test": test_function(); break;
//     }
//   }
// }

// //Function to check if the request is an AJAX request
// function is_ajax() {
//   return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
// }

//test_function();


function test_function(){

  $return = $_POST;
  
  //Do what you need to do with the info. The following are some examples.
  //if ($return["favorite_beverage"] == ""){
  //  $return["favorite_beverage"] = "Coke";
  //}
  

  if(true) {
    $input = "ayokunle";
    $id = $_POST['id'];
    $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $gender = $_POST['gender'];
  $age_group = $_POST['age_group'];
  $status = $_POST['status'];
  $dob_day = $_POST['dob_day'];
  $dob_month = $_POST['dob_month'];
  $wed_anni_day = $_POST['wed_anni_day'];
  $wed_anni_month = $_POST['wed_anni_month'];
  $type = $_POST['type'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $zipco = $_POST['zipco'];
  $contact1 = $_POST['contact1'];
  $contact2 = $_POST['contact2'];

    //$con = mysqli_connect('50.87.144.163','rccgking_kcd','kingscourt','rccgking_KCD');
    $link = mysql_connect('userdb.netsoc.tcd.ie','ayokunle','Ohqu1eed') OR die(mysql_error());
    
    $conn = new mysqli('userdb.netsoc.tcd.ie','ayokunle','Ohqu1eed','u_ayokunle');
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    //if input == members
    $id = mysql_real_escape_string($_POST['id']);
    $fname = mysql_real_escape_string($_POST['fname']);
    $lname = mysql_real_escape_string($_POST['lname']);
    $gender = mysql_real_escape_string($_POST['gender']);
    $age_group = mysql_real_escape_string($_POST['age_group']);
    $status = mysql_real_escape_string($_POST['status']);
    $dob_day = mysql_real_escape_string($_POST['dob_day']);
    $dob_month = mysql_real_escape_string($_POST['dob_month']);
    $wed_anni_day = mysql_real_escape_string($_POST['wed_anni_day']);
    $wed_anni_month= mysql_real_escape_string($_POST['wed_anni_month']);
    $type = mysql_real_escape_string($_POST['type']);
    $email = mysql_real_escape_string($_POST['email']);
    $address = mysql_real_escape_string($_POST['address']);
    $city = mysql_real_escape_string($_POST['city']);
    $zipco = mysql_real_escape_string($_POST['zipco']);
    $contact1 = mysql_real_escape_string($_POST['contact1']);
    $contact2 = mysql_real_escape_string($_POST['contact2']);

    $sql = "UPDATE `members` SET fname = '$fname', 
    lname = '$lname',
    gender = '$gender',
    age_group = '$age_group',
    status = '$status',
    dob_day = '$dob_day',
    dob_month = '$dob_month',
    wed_anni_day = '$wed_anni_day',
    wed_anni_month = '$wed_anni_month ',
    type = '$type',
    email = '$email',
    address  = '$address',
    city = '$city ',
    zipco = '$zipco',
    contact1 = '$contact1',
    contact2 = '$contact2'
    WHERE
    id = '$id' ";

    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $conn->error;
    }

  // if (mysqli_query($con, $sql)) {
  //   echo "Record updated successfully";
  // } else {
  //   echo "Error updating record: " . mysqli_error($con);
  // }
    }
  }
?>