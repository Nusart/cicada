<?php
    $servername= "localhost";
    $username= "enthuzia20";
    $password= "iiserb@sucks";
    $dbname= "cicada";
    $conn= mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn)
        die ("Database connection error. Contact Sarthak (sarthak18@iiserb.ac.in)");
    $n= $_POST["name"];
    $r= $_POST["roll"];
//    echo "Name is ".$name;
//    echo "Roll is ".$roll;
//    echo "Mail is ".$mail;
    $query="INSERT INTO logins(name, roll) VALUES('$n','$r')";
    $data=mysqli_query($conn,$query);
    if($data)
        echo 
        "<script type='text/javascript'>
          alert('You are now registered. Carry On!');
          window.location.href = 'https://enthuzia.iiserb.ac.in/cicada/welcome.html';
        </script>";
    else
        echo 
        "<script type='text/javascript'>
          alert('Data insertion unsuccesful. Please Try Again. Or Contact Sarthak (sarthak18@iiserb.ac.in)');
          window.history.back();
         </script>";
?>