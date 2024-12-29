<html>

<head>
    <title>Insert Page page</title>
<style>
body{
background-color: #E6E6FA;
border-style:dashed;border-color:#E3BB88;
}
h3{font-size:50;color:#D4AF37;text-decoration:underline;}
</style>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => sst
        $conn = mysqli_connect("localhost", "root","", "BOOK");
        
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect."
			. mysqli_connect_error());
        }
        
        // Taking all 5 values from the form data(input)
        $name =  $_POST['name'];
        $message=$_POST['message'];
        $email = $_REQUEST['email'];
        
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO contact  VALUES ('$name','$message','$email')";
 if(mysqli_query($conn, $sql)){
            echo "<h3>THANK YOU</h3>"; 

                  } 
else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
        
        
        
        
        
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>
