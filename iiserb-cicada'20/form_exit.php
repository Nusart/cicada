<?php
$servername= "localhost";
$username= "enthuzia20";
$password= "iiserb@sucks";
$dbname = "cicada";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
    die ("Database connection error. Contact Sarthak (sarthak18@iiserb.ac.in)");
$pw = $_POST['pw'];
$query = "SELECT pw FROM credentials WHERE id = '7'";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_row($data);
$pwdb = $result[0];
//echo "$pwdb";
if($pw==$pwdb){
    echo 
        "<script type='text/javascript'>
          alert('Yaaay!!! You have successfully completed the Quest. Now, just one small step left.');
        </script>";
}
else{
    echo "<script type='text/javascript'>alert('Looooser! Try Again.');window.history.back();</script>";
}
?>


<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="icon" href="Images/cicada.png" type="image/gif">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <title>One Last Time</title>
        
        <style>
            .container{
                padding-top: 10%;
                text-align: center;
            }
            .img{
                width: 300px;
                height: 200px;
            }
        </style>
    </head>
    <body>
        <script>
            alert("Please fill in this form. This will help us in deciding The Winner.");
        </script>
            
        <div class="container">
            <p>
               <img src="Images/cicada.png" class="img"/>
               <form action="exit.php" method="post">
                 <div class="form-row">
                   <div class="col-md-4 mb-3">
                     <label for="validationDefault01">Name</label>
                     <input type="text" class="form-control" id="validationName" name="name" required>
                     <small id="emailHelp" class="form-text text-muted">Please provide your full name.</small>
                   </div>
                   <div class="col-md-4 mb-3">
                     <label for="validationDefault02">Roll No</label>
                     <input type="text" class="form-control" id="validationRollNo" name="roll" required>
                   </div>
                   <div class="col-md-4 mb-3">
                     <label for="validationDefaultUsername">Email (Preferably Institutional)</label>
                     <input type="text" class="form-control" id="validationEmail" name="mail" required> 
                   </div>
                 </div>
                 <button class="btn btn-primary" type="submit">Enter</button>
               </form>
            </p>
        </div>
    
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
