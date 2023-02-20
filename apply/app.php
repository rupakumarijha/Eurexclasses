 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">  -->
    <title>Application Form</title>
 </head>
 <body>
    <div class="container">
        <div class="circle1">
        </div>
        <div class="circle2">
        </div>
    </div>

    <form  autocomplete="off"  action="insert.php" method="post" >
<h3> Teacher Hiring Form
    <span style="color: white;">kindly fill this form</span>
</h3> 

<label for="name">Full Name</label>
<input type="text" name="name"  placeholder="Enter your Full name" id="Name" required>



<label for="email">Email</label>
<input type="text" name="email" placeholder="Enter your email adress" id="email" required>


<label for="address">Address</label>
<input type="text" name="address" placeholder="Enter your residence address" id="address" required>


<label for="city">City</label>
<input type="text" name="city" placeholder="Enter your City " id="city" required>




<label for="Mobile" >Mobile Number</label>
<input  name="mobile" name="mobile" type="number" 
placeholder="99XX99XX99"  id="mobile" required>







<button type="submit" name="submit" id="submit" >Submit</button>


    </form> 

<!-- <script >
</script> -->
 </body>
 </html> 