<!DOCTYPE html>
<html>

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <head>
        <title>Extinct</title>
        
        <div class="cabecera">
            <?php include 'inc/header.php';?>
        </div>
    
    </head>
    <body>

        <div class="main_banner">
        </div>

        <div class="three_elements">
        </div>

        <div class="mainform"> 

            <form action="inc/main_form.php" method="get">
                Name: <input type="text" name="name"><br>
                Surname: <input type="text" name="surname"><br>
                E-mail: <input type="text" name="email"><br>
                Age: <input type="number" name="age"><br>
            <input type="submit" name="Send">
            </form>

        </div>
    </body>
</html>