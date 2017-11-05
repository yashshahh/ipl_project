<?php

$con = mysqli_connect("localhost","root","","playerdb");

function getMumbaiDetails(){
  global $con;
  $get_info = "select * from player where teamname='mumbai-indians'";
  $run_info = mysqli_query($con,$get_info);
  $i=0;
  while($row_info=mysqli_fetch_array($run_info)) {
    $name = $row_info['playername'];
    $type = $row_info['type'];
    $age = $row_info['age'];
    $salary = $row_info['salary'];
    $experience = $row_info['experience'];
    $i=$i+1;
    echo "<tr><th scope='row'>$i</th><td>$name</td><td>$type</td><td>$age</td><td>$salary</td><td>$experience yrs</td></tr>";
  }
}

function getBangloreDetails(){
  global $con;
  $get_info = "select * from player where teamname='royal-challengers-banglore'";
  $run_info = mysqli_query($con,$get_info);
  $i=0;
  while($row_info=mysqli_fetch_array($run_info)) {
    $name = $row_info['playername'];
    $type = $row_info['type'];
    $age = $row_info['age'];
    $salary = $row_info['salary'];
    $experience = $row_info['experience'];
    $i=$i+1;
    echo "<tr><th scope='row'>$i</th><td>$name</td><td>$type</td><td>$age</td><td>$salary</td><td>$experience yrs</td></tr>";
  }
}

function getGujuratDetails(){
  global $con;
  $get_info = "select * from player where teamname='gujurat-lions'";
  $run_info = mysqli_query($con,$get_info);
  $i=0;
  while($row_info=mysqli_fetch_array($run_info)) {
    $name = $row_info['playername'];
    $type = $row_info['type'];
    $age = $row_info['age'];
    $salary = $row_info['salary'];
    $experience = $row_info['experience'];
    $i=$i+1;
    echo "<tr><th scope='row'>$i</th><td>$name</td><td>$type</td><td>$age</td><td>$salary</td><td>$experience yrs</td></tr>";
  }
}

function getDelhiDetails(){
  global $con;
  $get_info = "select * from player where teamname='delhi-daredevils'";
  $run_info = mysqli_query($con,$get_info);
  $i=0;
  while($row_info=mysqli_fetch_array($run_info)) {
    $name = $row_info['playername'];
    $type = $row_info['type'];
    $age = $row_info['age'];
    $salary = $row_info['salary'];
    $experience = $row_info['experience'];
    $i=$i+1;
    echo "<tr><th scope='row'>$i</th><td>$name</td><td>$type</td><td>$age</td><td>$salary</td><td>$experience yrs</td></tr>";
  }
}
?>
