<!DOCTYPE html>
<html>
    <head>
        <title>forms</title>
        <body>
            <?php 
                $un = $_GET["reg_un"];
                $pw = $_GET["reg_pass"];
            
                if ($un == "Tomer" && $pw == "1515")
                    echo "<h2>Good morning user " . $un . "</h2>";
                else
                    echo "<h2>Who are you? you cant ge in</h2>"; 
            ?>
        </body>
    </head>
</html>