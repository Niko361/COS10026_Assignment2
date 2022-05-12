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
        //takes in the data generated by the quiz form
        $studentid = htmlspecialchars(trim($_POST["studentid"]));
        $firstname = htmlspecialchars(trim($_POST["firstname"]));
        $familyname = htmlspecialchars(trim($_POST["familyname"]));
        $textquestion = htmlspecialchars(trim($_POST["textquestion"]));
        $multiplechoice1 = htmlspecialchars(trim($_POST["multiplechoice1"]));
        $dropdownmultichoice = htmlspecialchars(trim($_POST["dropdownmultichoice"]));
        $multicheckbox = htmlspecialchars(trim($_POST["multicheckbox"]));
        $numericalQuestion = htmlspecialchars(trim($_POST["numericalQuestion"]));

        $errMsg = "";

        //checks that the student ID has been set and is in the required format.
        if($studentid == "")
        {
            $errMsg = "<p>You must enter your first name.</p>";
        }
        else if (!preg_match("/^[0-9]{7}$|^[0-9]{10}$/", $studentid))
        {
            $errMsg = "<p>You must enter 7 or 10 numbers for your student ID.</p>";
        }
        
        //chesks that the firs tname is in the required format
        if($firstname == "")
        {
            $errMsg = "<p>You must enter your first name.</p>";
        }
        else if (!preg_match("/^[a-zA-Z- ]{0,30}$/", $firstname))
        {
            $errMsg = "<p>Only alpha letters allowed in your first name.</p>";
        }
        
        //checks that the familyname has been set and is in the required format.
        if($familyname == "")
        {
            $errMsg = "<p>You must enter your last name.</p>";
        }
        else if (!preg_match("/^[a-zA-Z\-]{0,30}$/", $familyname))
        {
            $errMsg = "<p>Only alpha letters and hyphens allowed in your last name.</p>";
        }

        //Checks that all questions in the form have been filled in.
        if (($textquestion == "")
            || ($multiplechoice1 == "")
            || ($dropdownmultichoice == "")
            || ($multicheckbox == ""))
        {
            $errMsg .= "<p>Please fill in every field in the quiz form.</p>";
        }
        
        
        
        //close the database connection
        mysqli_close($conn);
    } //if successful database connection
    ?>
</body>
</html>