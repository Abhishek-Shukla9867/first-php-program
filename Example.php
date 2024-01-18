<?php 


/* The code is establishing a connection to a MySQL database server using the mysqli_connect()
function. It sets the server name to "localhost", the username to "root", and the password to an
empty string. If the connection is successful, it will echo "Connection established". If the
connection fails, it will echo "Connection failed". */

 $servername = "localhost";
 $username ="root";
 $Password ="";
 $database = "travel";

 $conn = mysqli_connect($servername,$username,$Password,$database);

   if($conn)
   {
      echo "Connection established";
   }

    else {
      echo "Connection failed";
    }

      /* The code is executing a SQL query to drop a database named "travel". */

//   $sql ="DROP DATABASE travel";

//     $result = mysqli_query($conn,$sql);
//     if($result){
//       echo "Deleted successfully";
//     }
//      else {
//       echo "Connection failed";
//      } 

      echo "<br>";




/* The code is executing a SQL query to create a new database named "Travel". It uses the
`mysqli_query()` function to execute the query using the established database connection ``. */

   //  $sql ="CREATE DATABASE Travel";
   //   $result =  mysqli_query($conn,$sql);
       


   //   if($result){
   //       echo  "Database is Created successfully";
   //   }
   //   else {
   //    echo "Database is already Exits";
   //   }


     echo "<br>";
 
   /* The code is creating a new table named "Details" in the database. The table has three columns:
   "id" of type int with a length of 11, "name" of type VARCHAR with a length of 25, and "Address"
   of type VARCHAR with a length of 20. The `mysqli_query()` function is used to execute the SQL
   query and create the table. If the query is successful, it will echo "table is Created
   successfully". If the table already exists, it will echo "table is already exit". */



   //   $sql ="CREATE TABLE `Details` (`id` int(11)  NOT NULL, `name` VARCHAR(25) NOT NULL ,
   //    `Address` VARCHAR(20) NOT NULL)";

   //    $result = mysqli_query($conn ,$sql);
   //    if($result){
   //        echo "table  is Created successfully";
   //     }
   //     else {
   //       echo  "table is already exit";
   //     }


   echo "<br>";
     
  //  $sql ="INSERT INTO 'Details'('id','name','Address') VALUES ('1','Abhishek','Thane')";

  //    $result = mysqli_query($conn ,$sql);
  //     if($result ){
  //        echo  "Data is Inserted successfully";
  //     }
  //     else {
  //        echo "Data is Not Inserted ";
  //     }
  
      $sql = "INSERT INTO `Details` (`id`, `name`, `Address`) VALUES ('123','Abhishek','Mumbai Thane')";


      $result = mysqli_query($conn, $sql);
      if ($result)
       {
          echo "Data is saved successfully";
       }
       else {
          echo "Failed to save data";
       }


 ?>