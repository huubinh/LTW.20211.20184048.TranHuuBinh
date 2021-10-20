<html>
    <head>
        <title>Information</title>
        <link rel="stylesheet" href="css/styleInfo.css">
    </head>
    
    <body>
        <?php
            $name = $_POST["name"];
            $class = $_POST["class"];
            $university = $_POST["university"];
            $email = $_POST["email"];
            $gender = $_POST["gender"];
            $soccer = $_POST["soccer"];
            $tennis = $_POST["tennis"];
            $badminton = $_POST["badminton"];
            echo("<p>Hello $name<br>");
            echo("You are studying at $class, $university<br>");
            echo("Gender: $gender<br>");
            echo("Email: $email<br>");
            echo("Your hobby:<br></p>");
            echo("<ol>");
            if (!empty($soccer)) {
                echo("<li>Soccer</li>");
            }
            if (!empty($tennis)) {
                echo("<li>Tennis</li>");
            }
            if (!empty($badminton)) {
                echo("<li>Badminton</li>");
            }
            echo("<li>...</li></ol><p>...</p>");
        ?>
    </body>
</html>