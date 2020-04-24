<?php

//create Database credential variables

$user = "a3001712_toiohomai";
$password = "Toiohomai1234";
$db = "a3001712_SCP";

//create php db connection object

$connection = new mysqli('localhost', $user, $password, $db) or die(mysqli_error($connection));

$resultSet = $connection->query("SELECT `id` , `ItemNum` FROM `SCPTABLE`");

//SELECT data from db
if(isset($_POST['scpFile'])) 

{

$i = $_POST['scpFile'];
$resultdropdown = $connection->query("SELECT * FROM `SCPTABLE` WHERE `id` = $i") or die(mysqli_error($connection));


}




if(isset($_POST['ItemNum']))
    {
        // save all $_POST values from form into separate variables
        $item_no = $_POST['ItemNum'];

        $object_class = $_POST['ObjectClass'];

        $subject_image = $_POST['SubjectImage'];

        $description = $_POST['DescriptionOf'];
        
        $procedures = $_POST['SCPProcedures'];

        // create insert command
        $sql = "insert into SCPTABLE(ItemNum, ObjectClass, SubjectImage, DescriptionOf, SCPProcedures) values('$item_no', '$object_class', '$subject_image', '$description', '$procedures')"; 

        if ($connection->query($sql) === TRUE) {
            include 'template/insert_header.php';
            echo "<h1>Record created successfully</h1>
                  <p><a href='index.php' class='btn btn-primary'>Back to SCP App</a></p>";
            include 'template/footer.php';
           } 
           else 
           {
               include 'template/insert_header.php';
               echo "<h1>Error creating record: {$connection->error}</h1>
               <p><a href='insert.php' class='btn btn-warning'>Back to form</a></p>";
               include 'template/footer.php';
           }

    
    }

   
