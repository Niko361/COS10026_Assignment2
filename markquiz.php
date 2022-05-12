<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="COS10026 Mark Quiz" />
        <meta name="keywords" content="PHP, MySQL" />
        <title>Retrieving records to HTML</title>
    </head>
    <body>
        <h1>
            Creating Web Applications - Lab10
        </h1>
    <?php
    require_once("settings.php"); //connection info

    $conn = @mysqli_connect($host, $user, $pwd, $sql_db);

    //checks if connection is successful
    if(!$conn)
    {
        //Displays an error message
        echo "<p>Database connection faliure</p>"; //not in production script
    }
    else
    {
        $studentid = htmlspecialchars(trim($_POST["studentid"]));
        $firstname = htmlspecialchars(trim($_POST["firstname"]));
        $familyname = htmlspecialchars(trim($_POST["familyname"]));
        $textquestion = htmlspecialchars(trim($_POST["textquestion"]));
        $multiplechoice1 = htmlspecialchars(trim($_POST["multiplechoice1"]));
        $dropdownmultichoice = htmlspecialchars(trim($_POST["dropdownmultichoice"]));
        $multicheckbox = htmlspecialchars(trim($_POST["multicheckbox"]));
        $numericalQuestion = htmlspecialchars(trim($_POST["numericalQuestion"]));
        
        
        
        
        //close the database connection
        mysqli_close($conn);
    } //if successful database connection
    ?>
</body>
</html>