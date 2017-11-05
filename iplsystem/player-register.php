<?php include("db.php") ?>
<?php
    if (isset($_POST['insert_post'])) {
        //getting text data fom the field
        $name=$_POST['name'];
        $team=$_POST['team'];
        $playertype=$_POST['playertype'];
        $age=$_POST['age'];
        $salary=$_POST['salary'];
        $experience=$_POST['experience'];
        
         
        $insert_response="insert into player(playername,teamname,type,age,salary,experience) values('$name','$team','$playertype','$age','$salary','$experience')";

    $insert_res = mysqli_query($con,$insert_response);
    if($insert_res){
      echo "<script>alert('Player has been successfully Registered!')</script>";
      echo "<script>window.open('register.html','_self')</script>";
    }
  }

 ?>