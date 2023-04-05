<?php
   if (isset($_POST['name']))
{

    $login = $_POST['name'];
    $password = $_POST['wachtwoord'];

    //echo $login . $password;
    //echo "<br/><br/>";


   // Create connection
   $conn = mysqli_connect("localhost", "root", "", "sd1a");

   // Check connection
   if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
   }

   $sqlcommando = "SELECT * FROM user WHERE name='$login' AND password='$password'";
   echo $sqlcommando . "<br>";
   $result = mysqli_query($conn, $sqlcommando);

   if (mysqli_num_rows ($result) == 1 ) {
    echo "Dat is oke";
    $sqlcommandoALLusers = "SELECT * FROM user";
    $result = mysqli_query($conn, $sqlcommando);
   }
   mysqli_close($conn);
}
?>