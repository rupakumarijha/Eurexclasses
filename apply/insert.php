<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Refund Request</title>
</head>

<body>
    <center>
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

        // Taking all 6 values from the form data(input)
        $submit = $_REQUEST['submit'];
        $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $address = $_REQUEST['address'];
        $city = $_REQUEST['city'];
        $mobile = $_REQUEST['mobile'];
        
        

        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT into record values('$submit','$name',' $email','$address','$city',' $mobile')";

        if (mysqli_query($conn, $sql)) {

            $success = '<div class="alert alert-success" role="alert">
 submitted succesfully.<br><br>.<br><a href="../index.html">
 <button type="button" class="btn btn-primary btn-lg">Go To Home Page</button></a>
</div>';

            echo $success;
        } else {
            $fail = '<div class="alert alert-danger">.Data not submitted.</div>';

            echo  $fail
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>