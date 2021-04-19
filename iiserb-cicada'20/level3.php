<?php
$servername= "localhost";
$username= "enthuzia20";
$password= "iiserb@sucks";
$dbname = "cicada";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
    die ("Database connection error. Contact Sarthak (sarthak18@iiserb.ac.in)");
$un = $_POST['un'];
$query = "SELECT un FROM credentials WHERE id = '3'";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_row($data);
$undb = $result[0];
//echo "$undb";
if($un==$undb){
    echo 
        "<script type='text/javascript'>
          alert('Remember the name (not really, lol!). Welcome to level 3!');
        </script>";
}
else{
    echo "<script type='text/javascript'>alert('Looooser! Try Again.');window.history.back();</script>";
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="icon" href="Images/cicada.png" type="image/gif">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <title>&#128514;&#128518;&#128539;</title>
    </head>
    <body>
        <h1>3.</h1>
        
        <div class="container text-center">
            <p><img src="Images/foolish_you.jpg" width="600" height="600" usemap="#say"></p>
            <map name="say">
                <area shape="poly" coords="240,210, 290,210, 290,240, 240,240" style="cursor: pointer" onclick="play()">
            </map>
            <audio loop id="audio" src="Audio/bmgm.mp3"></audio>
            
            <script>
                function play(){
                    var audio = document.getElementById("audio");
                    audio.play();
                }
            </script>
        
            <a href="3inter4.html"><button type="button" class="btn btn-outline-dark">Found answer?</button></a>
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