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
$query = "SELECT un,pw FROM credentials WHERE id = '4'";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_row($data);
$undb = $result[0];
$pwdb = $result[1];
//echo "$undb"."$pwdb";
if($un==$undb && $pw==$pwdb){
    echo 
        "<script type='text/javascript'>
          alert('Proceed to level 4.');
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
        
        <link rel="icon" href="Images/google.png" type="image/gif">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <title>Zoom In!</title>
    </head>
    <body>
        <h1>4.</h1>
        
        <div class="text-center">
            <p>
                <img src="Images/mdc.jpg" height="500">
                <h4>Wait&#129306; a moment, look closely and appreciate the beauty of this photograph.</h4>
                <h6>(Right click control has been disabled. In case you want to "save" something. Lol!!!)</h6>
            </p>

        <script type="text/javascript">
            function click (e) {
                  if (!e)
                    e = window.event;
                  if ((e.type && e.type == "contextmenu") || (e.button && e.button == 2) || (e.which && e.which == 3)) {
                    if (window.opera)
                      window.alert("");
                    return false;
                  }
                }
                if (document.layers)
                  document.captureEvents(Event.MOUSEDOWN);
                document.onmousedown = click;
                document.oncontextmenu = click;            
        </script>

            <a class="btn btn-primary" href="4inter5.html" role="button">Next Level</a>
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
