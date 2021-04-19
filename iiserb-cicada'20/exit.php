<?php
    $servername= "localhost";
    $username= "enthuzia20";
    $password= "iiserb@sucks";
    $dbname= "cicada";
    $conn= mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn)
        die ("Database connection error. Contact Sarthak (sarthak18@iiserb.ac.in)");
    $n = $_POST["name"];
    $r = $_POST["roll"];
    $m = $_POST["mail"];
    echo "Name is ".$n;
    echo "Roll is ".$r;
    echo "Mail is ".$m;
    $query="INSERT INTO loginexit(name, roll, mail) VALUES('$n','$r','$m')";
    $data=mysqli_query($conn,$query);
    if($data)
        header("Location: http://enthuzia.iiserb.ac.in/cicada/completed.html");
    else
        echo 
        "<script type='text/javascript'>
          alert('Data insertion unsuccesful. Please Try Again. Or Contact Sarthak (sarthak18@iiserb.ac.in)');
          window.history.back();
         </script>";
?>