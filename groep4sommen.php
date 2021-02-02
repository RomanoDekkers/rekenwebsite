<html>
<head>
    <title>groep 4</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<nav>
    <ul>
        <li><img src="logo.jpg" alt="logo" width="80px" height="80px" id="logo"></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="groep4.php">Groep 4</a></li>
        <li><a href="groep5.php">Groep 5</a></li>
        <li><a href="groep6.php">Groep 6</a></li>
        <li><a href="#">hulpvideo's</a>
            <ul>
                <li><a href="https://www.youtube.com/watch?v=1gmUWGt2KRg" target="_blank">videouitleg plus</a></li>
                <li><a href="https://www.youtube.com/watch?v=adEkIa42Y2k&t=132s" target="_blank">videouitleg min</a></li>
                <li><a href="https://www.youtube.com/watch?v=d79H5i5SUd8" target="_blank">videouitleg keer</a></li>
                <li><a href="https://www.youtube.com/watch?v=4PyzMWQ-7B8" target="_blank">videouitleg delen</a></li>
            </ul>
        </li>
        <li><a href="contact.php" id="contact">contact opnemen</a></li>
    </ul>
</nav>
<?php
if(isset($_GET['somtype'])) {
    $operator = "+";
    if (isset($_POST['getalEen'])) {
        $_nummer1 = $_POST['getalEen']; //uitkomst controlleren
    } else {
        $_nummer1 = rand(0, 50); //nieuwe som
    }

    if (isset($_POST['getalTwee'])) {
        $_nummer2 = $_POST['getalTwee']; //uitkomt controlleren
    } else {
        $_nummer2 = rand(0, 50); //nieuwe som
    }

    switch ($_GET['somtype']) {
        case "keer":
            $operator = "x";
            $uitkomst = $_nummer1 * $_nummer2;
            break;
        case "deel":
            $operator = ":";
            $uitkomst = $_nummer1 / $_nummer2;
            break;
        case "plus":
            $operator = "+";
            $uitkomst = $_nummer1 + $_nummer2;
            break;
        case "min":
            $operator = "-";
            $uitkomst = $_nummer1 - $_nummer2;
            break;
    }

    $reactie = "";
    if (isset($_POST['antwoord'])) //code die wordt uitgevoerd wanneer er wel op de nakijkknop gedrukt is
    {
        echo "De oude som is " . $_nummer1 . " " . $operator . " " . $_nummer2;

        if ($_POST['antwoord'] == $uitkomst) {
            $reactie = "<br /> Het antwoord is " . $uitkomst . "<br /> en je hebt het goede antwoord gegeven";
            echo "$reactie <br />";
        } else {
            $reactie = "<br />Helaas, het antwoord is fout. <br />Het goede antwoordt was " . $uitkomst . "";
            echo "$reactie <br />";
        }
        unset($uitkomst);
        echo "<div> 
                  <form method='post' action='groep4sommen.php?somtype=$_GET[somtype]' name='somkeuze'>
                  <input id='begin' type='submit' value='volgende vraag'>
                  </form>   
                  </div>";

    } else { //code die wordt uitgevoerd wanneer er niet op de nakijkknop gedrukt is.
        echo "wat is $_nummer1 $operator $_nummer2?";
        echo "<br />rond af op twee decimalen als het nodig is";
        if ($operator == "x" || $operator == ":") {
            echo "<br />je mag een rekenmachine gebruiken";
        }
        echo "<div>    
                <form name='somen' action='' method='post'>
                    <input type='text' name='antwoord'>
                    <input type='hidden' name='getalEen' value='$_nummer1'>
                    <input type='hidden' name='getalTwee' value='$_nummer2'>
                    <input id='mijnantwoord' type='submit' name='mijnantwoord' value='nakijken'
                </form>
              </div>";
    }
    if (isset($_GET['antwoord'])) {
        echo "($_GET ['antwoord'])";
    }
}
?>
</body>
</html>
