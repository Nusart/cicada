<?php
$servername= "localhost";
$username= "enthuzia20";
$password= "iiserb@sucks";
$dbname = "cicada";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
    die ("Database connection error. Contact Sarthak (sarthak18@iiserb.ac.in)");
$un = $_POST['un'];
$pw = $_POST['pw'];
$query = "SELECT un,pw FROM credentials WHERE id = '5'";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_row($data);
$undb = $result[0];
$pwdb = $result[1];
//echo "$undb"."pwdb";
if($un==$undb && $pw==$pwdb){
    echo 
        "<script type='text/javascript'>
          alert('Penultimate Round. Good Luck!');
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
        
        <title>Spot the difference</title>
    </head>
    
    <style>
        .container{
            margin-top: 10%;
        }
        .png{
            padding-top: 40%;
        }
    </style>
    <body>
        <h1>5.</h1>
        
        <div class="container text-center">
            <div class="row">
                <div class="col-md-5">
                    <img src="Images/pic1.jpg" class="img-fluid img-thumbnail" />
                    <p>
                        <h5>Original</h5>
                    </p>
                </div>
                <div class="col-md-2">
                    <img src="Images/two-arrows-pointing-opposite-sides.png" class="img-fluid png" />
                </div>
                <div class="col-md-5">
                    <img src="Images/pic1e.png" class="img-fluid img-thumbnail" />
                    <p>
                        <h5>Duplicate</h5>
                    </p>
                </div>
            </div>
    
            <a class="btn btn-primary" href="5inter6.html" role="button">Got an answer?</a>
    
        </div>
    
        <div class="fixed-bottom">
            <a href="rules.html" target="_blank" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Rules</a>
            <a href="hints.html" target="_blank" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Hints</a>
        </div>
        
    
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>