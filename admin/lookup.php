<?php

ini_set("log_errors", 1);
ini_set("error_log", "php-error.log");
    
// echo "string";
// test_function();

  
if (is_ajax()) {
  if (isset($_POST["action"]) && !empty($_POST["action"])) { //Checks if action value exists
    $action = $_POST["action"];
    switch($action) { //Switch case for value of action
      case "test": test_function(); break;
    }
  }
}

//Function to check if the request is an AJAX request
function is_ajax() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

function test_function(){

  $return = $_POST;
  
  if(!empty($return["search_input"]) ) {
    $input = $return["search_input"];

    //$con = mysqli_connect('50.87.144.163','rccgking_kcd','kingscourt','rccgking_KCD');
    $con = mysqli_connect('userdb.netsoc.tcd.ie','ayokunle','Ohqu1eed','u_ayokunle');
    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    //mysqli_select_db($con,"rccgking_KCD");
    mysqli_select_db($con,"u_ayokunle");
    
    //if input == members
    if(strcasecmp ($input , "Members" ) == 0 || strcasecmp ($input , "Member" ) == 0){
      $return["option"] = "1";
      $sql = "SELECT id, fname, lname, age_group, 
                    dob_day, dob_month, email, 
                    wed_anni_day, wed_anni_month,
                    address, city, zipco, gender, status,
                    type, contact1, contact2 FROM members 
      ORDER BY lname ASC";
    }elseif(strcasecmp($input , "Members/Workers") == 0
      || strcasecmp($input , "Member/Worker") == 0
      || strcasecmp($input , "Members/Worker") == 0
      || strcasecmp($input , "Member/Workers") == 0 ) {
      $return["option"] = "2";
      $sql = "SELECT id, fname, lname, age_group, 
                    dob_day, dob_month, email, 
                    wed_anni_day, wed_anni_month,
                    address, city, zipco, gender, status,
                    type, contact1, contact2 FROM members 
      WHERE type = 'Member'
      ORDER BY lname ASC";
    }elseif(strcasecmp ($input , "Worker" ) == 0 || strcasecmp ($input , "Workers" ) == 0){
      $return["option"] = "3";
      $sql = "SELECT id, fname, lname, age_group, 
                    dob_day, dob_month, email, 
                    wed_anni_day, wed_anni_month,
                    address, city, zipco, gender, status,
                    type, contact1, contact2 FROM members 
      WHERE type = 'Worker'
      ORDER BY lname ASC";
    }elseif (strcasecmp ($input , "Children" ) == 0 ) {
      $return["option"] = "4";
      $sql = "SELECT id, fname, lname, age_group, 
                    dob_day, dob_month, email, 
                    wed_anni_day, wed_anni_month,
                    address, city, zipco, gender, status,
                    type, contact1, contact2 FROM members 
      WHERE age_group = 'Child'
      ORDER BY lname ASC";
    }elseif (strcasecmp ($input , "Youths" ) == 0 || strcasecmp ($input , "Youth") == 0) {
      $return["option"] = "5";
      $sql = "SELECT id, fname, lname, age_group, 
                    dob_day, dob_month, email, 
                    wed_anni_day, wed_anni_month,
                    address, city, zipco, gender, status,
                    type, contact1, contact2 FROM members 
      WHERE age_group = 'Youth'
      ORDER BY lname ASC";
    }elseif (strcasecmp ($input , "Elders" ) == 0 || strcasecmp ($input , "Elder") == 0) {
      $return["option"] = "6";
      $sql = "SELECT id, fname, lname, age_group, 
                    dob_day, dob_month, email, 
                    wed_anni_day, wed_anni_month,
                    address, city, zipco, gender, status,
                    type, contact1, contact2 FROM members 
      WHERE age_group = 'Elder'
      ORDER BY lname ASC";
    }elseif (strcasecmp ($input , "Men" ) == 0) {
      $return["option"] = "7";
      $sql = "SELECT id, fname, lname, age_group, 
                    dob_day, dob_month, email, 
                    wed_anni_day, wed_anni_month,
                    address, city, zipco, gender, status,
                    type, contact1, contact2 FROM members 
      WHERE age_group = 'Adult' AND gender = 'Male'
      ORDER BY lname ASC";
    }elseif (strcasecmp ($input , "Women" ) == 0) {
      $return["option"] = "8";
      $sql = "SELECT id, fname, lname, age_group, 
                    dob_day, dob_month, email, 
                    wed_anni_day, wed_anni_month,
                    address, city, zipco, gender, status,
                    type, contact1, contact2 FROM members 
      WHERE age_group = 'Adult' AND gender = 'Female'
      ORDER BY lname ASC";
    }elseif (strcasecmp ($input , "January" ) == 0) {
      $return["option"] = "9";
      $sql = "SELECT id, fname, lname, age_group, 
                    dob_day, dob_month, email, 
                    wed_anni_day, wed_anni_month,
                    address, city, zipco, gender, status,
                    type, contact1, contact2 FROM members 
      WHERE dob_month = '1' 
      ORDER BY dob_day ASC";
    }elseif (strcasecmp ($input , "February" ) == 0) {
      $return["option"] = "9";
      $sql = "SELECT id, fname, lname, age_group, 
                    dob_day, dob_month, email, 
                    wed_anni_day, wed_anni_month,
                    address, city, zipco, gender, status,
                    type, contact1, contact2 FROM members 
      WHERE dob_month = '2' 
      ORDER BY dob_day ASC";
    }elseif (strcasecmp ($input , "March" ) == 0) {
      $return["option"] = "9";
      $sql = "SELECT id, fname, lname, age_group, 
                    dob_day, dob_month, email, 
                    wed_anni_day, wed_anni_month,
                    address, city, zipco, gender, status,
                    type, contact1, contact2 FROM members 
      WHERE dob_month = '3' 
      ORDER BY dob_day ASC";
    }elseif (strcasecmp ($input , "April" ) == 0) {
      $return["option"] = "9";
      $sql = "SELECT id, fname, lname, age_group, 
                    dob_day, dob_month, email, 
                    wed_anni_day, wed_anni_month,
                    address, city, zipco, gender, status,
                    type, contact1, contact2 FROM members 
      WHERE dob_month = '4' 
      ORDER BY dob_day ASC";
    }elseif (strcasecmp ($input , "May" ) == 0) {
      $return["option"] = "9";
      $sql = "SELECT id, fname, lname, age_group, 
                    dob_day, dob_month, email, 
                    wed_anni_day, wed_anni_month,
                    address, city, zipco, gender, status,
                    type, contact1, contact2 FROM members 
      WHERE dob_month = '5' 
      ORDER BY dob_day ASC";
    }elseif (strcasecmp ($input , "June" ) == 0) {
      $return["option"] = "9";
      $sql = "SELECT id, fname, lname, age_group, 
                    dob_day, dob_month, email, 
                    wed_anni_day, wed_anni_month,
                    address, city, zipco, gender, status,
                    type, contact1, contact2 FROM members 
      WHERE dob_month = '6' 
      ORDER BY dob_day ASC";
    }elseif (strcasecmp ($input , "July" ) == 0) {
      $return["option"] = "9";
      $sql = "SELECT id, fname, lname, age_group, 
                    dob_day, dob_month, email, 
                    wed_anni_day, wed_anni_month,
                    address, city, zipco, gender, status,
                    type, contact1, contact2 FROM members 
      WHERE dob_month = '7' 
      ORDER BY dob_day ASC";
    }elseif (strcasecmp ($input , "August" ) == 0) {
      $return["option"] = "9";
      $sql = "SELECT id, fname, lname, age_group, 
                    dob_day, dob_month, email, 
                    wed_anni_day, wed_anni_month,
                    address, city, zipco, gender, status,
                    type, contact1, contact2 FROM members 
      WHERE dob_month = '8' 
      ORDER BY dob_day ASC";
    }elseif (strcasecmp ($input , "September" ) == 0) {
      $return["option"] = "9";
      $sql = "SELECT id, fname, lname, age_group, 
                    dob_day, dob_month, email, 
                    wed_anni_day, wed_anni_month,
                    address, city, zipco, gender, status,
                    type, contact1, contact2 FROM members 
      WHERE dob_month = '9' 
      ORDER BY dob_day ASC";
    }elseif (strcasecmp ($input , "October" ) == 0) {
      $return["option"] = "9";
      $sql = "SELECT id, fname, lname, age_group, 
                    dob_day, dob_month, email, 
                    wed_anni_day, wed_anni_month,
                    address, city, zipco, gender, status,
                    type, contact1, contact2 FROM members 
      WHERE dob_month = '10' 
      ORDER BY dob_day ASC";
    }elseif (strcasecmp ($input , "November" ) == 0) {
      $return["option"] = "9";
      $sql = "SELECT id, fname, lname, age_group, 
                    dob_day, dob_month, email, 
                    wed_anni_day, wed_anni_month,
                    address, city, zipco, gender, status,
                    type, contact1, contact2 FROM members 
      WHERE dob_month = '11' 
      ORDER BY dob_day ASC";
    }elseif (strcasecmp ($input , "December" ) == 0) {
      $return["option"] = "9";
      $sql = "SELECT id, fname, lname, age_group, 
                    dob_day, dob_month, email, 
                    wed_anni_day, wed_anni_month,
                    address, city, zipco, gender, status,
                    type, contact1, contact2 FROM members 
      WHERE dob_month = '12' 
      ORDER BY dob_day ASC";
    }else{
      $return["option"] = "10";
      $sql ="SELECT id, fname, lname, age_group, 
                    dob_day, dob_month, email, 
                    wed_anni_day, wed_anni_month,
                    address, city, zipco, gender, status,
                    type, contact1, contact2, gender, status,
                    type, contact1, contact2  FROM members 
      WHERE 
        CONCAT(fname,lname) LIKE '%$input%' 
      ORDER BY lname ASC";
    }
    $result = $con->query($sql);


    if ($result->num_rows > 0) {
      // $rows = array();
      // while($row = $result->fetch_assoc()) {
      //   $rows[] = $row;
      // }

      $table = "<center> <h3 style = 'margin-top:30px;'> Showing $result->num_rows results for ". '"'. $input .'"' ."</h3> </center>";
        if ($result->num_rows > 0) {
          // output data of each row
          $table = $table .  "<table style = 'margin-top:40px; margin-left:50px; width:100%'>";
          $table = $table . "<tr><th>Name</th> <th>Age Group</th> <th>D.O.B.</th></tr>";
          while($row = $result->fetch_assoc()){
            $table = $table . "<tr>";
            
            $dateObj   = DateTime::createFromFormat('!m', (int)$row['dob_month'] );
            $monthName = $dateObj->format('F');

            $table = $table . "<td style='width:110px;border:1px solid black; padding-left:5px;'>". 
                  $row["lname"]. " " . $row["fname"]. 
                  "</td>".
                  "<td style='width:110px;border:1px solid black; padding-left:5px;'>" . 
                  $row["age_group"] .
                  "</td>".
                  "<td style='width:110px;border:1px solid black; padding-left:5px;'>" . 
                  $row["dob_day"] . "/" . $monthName. 
                  "</td>".
                  "<td style='width:5px;border:0px solid black;margin-left:0px; padding-left:5px; padding:3px;'>
                  <a id=". "'member_". $row["id"]."'".">
                  <button
                  id=". "'". $row['id'] ."'"." 
                  type='button' 
                  onclick='getData(this)'
                  data-toggle='modal' 
                  data-target='#GSCCModal'
                  data-id=". "'". $row['id'] ."'"."
                  data-lname=". "'". $row['lname'] ."'"."
                  data-fname=". "'".$row['fname'] ."'"."
                  data-gender=". "'".$row['gender'] ."'"."
                  data-age_group=". "'".$row['age_group']."'" ."
                  data-status=". "'".$row['status'] ."'"."
                  data-dob_day=". "'".$row['dob_day'] ."'"."
                  data-dob_month=". "'".$row['dob_month'] ."'"."
                  data-wed_anni_day=". "'".$row['wed_anni_day']."'" ."
                  data-wed_anni_month=". "'".$row['wed_anni_month'] ."'"."
                  data-type=". "'".$row['type'] ."'"."
                  data-email=". "'".$row['email']."'" ."
                  data-address=". "'".$row['address']."'" ."
                  data-city=". "'".$row['city']."'" ."
                  data-zipco=". "'". $row['zipco'] ."'" ."
                  data-contact1=". "'".$row['contact1']."'" ."
                  data-contact2=". "'". $row['contact2'] ."'"."
                  class='btn btn-primary'>View Profile</button>
                  </a>
                  <a id=". "'member_". $row["id"]."'".">
                  <button
                  id=". "'". $row['id'] ."'"." 
                  type='button' 
                  onclick='deleteProfile(this)'
                  class='btn btn-danger'>Delete Profile</button>
                  </a>
                  </td>";
            $table = $table . "</tr>";
          }
          $table = $table . "</table>";
        }
      $return["table"] = $table;
      // $return["result"] = json_encode($rows);
    }else{
      $table = "<center> <h3 style = 'margin-top:30px;'> Search results for ". '"'. $input .'"' ."</h3> </center>";
      $table =  $table . "<div style='margin-top:40px; margin-left:50px;'> <center><b>No results</b></center> </div>";
      $return["table"] = $table;
    }
  }
  $return["json"] = json_encode($return);
  echo json_encode($return);
}

?>