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
$query = "SELECT un,pw FROM credentials WHERE id = '6'";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_row($data);
$undb = $result[0];
$pwdb = $result[1];
//echo "$undb"."$pwdb";
if($un==$undb && $pw==$pwdb){
    echo 
        "<script type='text/javascript'>
          alert('Welcome to the final stage of IISERB's Cicada 3301!');
        </script>";
}
else{
    echo "<script type='text/javascript'>alert('Looooser! Try Again.');window.history.back();</script>";
}
?>
<html>
    <head>
        <link rel="icon" href="Images/cicada.png" type="image/gif">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <title>Find the (matrix)5x4 and exit:</title>
    </head>
    <body>
        <h1>6.</h1>
        
        <div class="stretch">
            <img src="Images/computer-virus-danger.jpg" usemap="#exit" />
            <map name="exit">
                <area shape="rect" coords="1800,250,1920,320" style="cursor: pointer" href="6inter7.html">
            </map>
        </div>
    
        <div class="fixed-bottom">
            <a href="rules.html" target="_blank" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Rules</a>
            <a href="hints.html" target="_blank" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Hints</a>
        </div>
    </body>
</html>