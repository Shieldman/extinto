<html>
<head>
        <title>Extinct</title>
        
        <div class="cabecera">
            <?php include 'header.php';?>
        </div>
</head>
<body>

   <?php $link = mysqli_connect("localhost", "root", "", "extint");
    
    if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    
    $name=$_GET["name"];
    $surname=$_GET["surname"];
    $email=$_GET["email"];
    $age=$_GET["age"];

    $sql = "INSERT INTO Users (Name, Surname, Email, Age) VALUES ('$name','$surname','$email','$age')";

    if(mysqli_query($link, $sql)){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
 
    // Close connection
    mysqli_close($link);

    ?><br>

Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>

</body>
</html>
