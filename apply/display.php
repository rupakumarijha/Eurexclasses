<htm>
<head>
<style>
body{  
    background: #d071f9;
}



table{
    background-color: white;
}

</style>

</head>






<?php 
 error_reporting(0);
           
 $servername ="localhost";
 $username = "technotr_euser";
 $password = "vp^}2mNFgXY4";
 $dbname = "technotr_eurex";
 $conn = mysqli_connect( $servername, $username, $password,$dbname);

 // Check connection
 if ($conn === false) {
     die("ERROR: Could not connect. "
         . mysqli_connect_error());
 }



 $query ="SELECT*FROM record";
 $data = mysqli_query($conn,$query);
 $total = mysqli_num_rows($data);
 $result = mysqli_fetch_assoc($data);

// echo $result[id];
// echo $result[name];
// echo $result[email];
// echo $result[address];
// echo $result[city];
// echo $result[mobile];






 //echo $ total
 if ($total != 0)
 {
    ?>
    <h2 align="center" ><mark>Display all Records</mark></h2>
    <center>
    <table border="3" cellspacing="7" width="90%">
    <tr>
        <th width="5%">id</th>
        <th width="10%">name</th>
        <th width="15%">email</th>
        <th width="30%">address</th>
        <th width="15%">city</th>
        <th width="15%">mobile</th>
    </tr>


    <?php
   while($result = mysqli_fetch_assoc($data))
   {
    echo "<tr>
    <td>".$result[id] ."</td>
    <td>".$result[name]."</td>
    <td>".$result[email]."</td>
    <td>".$result[address]."</td>
    <td>".$result[city]." </td>
    <td>".$result[mobile]."</td>
      </tr>";
    

   }
 }
 else{
    //table has no records

    
 }














?>
</table>
    </center>


<!-- echo $result[id]." ".$result[name]." ".$result[email]." ".$result[address]." ".$result[city]." ".$result[mobile]."<br>"; -->




</htm>