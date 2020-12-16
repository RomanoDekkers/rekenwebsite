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
        $_nummer1 = rand(0, 50);
        $_nummer2 = rand(0, 50);
        $uitkomst = -1;
        switch ($_GET['somtype']){
            case "keer":
                $operator = "x";
                $uitkomst = $_nummer1*$_nummer2;
                break;
            case "deel":
                $operator = ":";
                $uitkomst = $_nummer1/$_nummer2;
                break;
            case "plus":
                $operator = "+";
                $uitkomst = $_nummer1+$_nummer2;
                break;
            case "min":
                $operator = "-";
                $uitkomst = $_nummer1-$_nummer2;
                break;
        }



        echo "wat is $_nummer1 $operator $_nummer2?";
        echo "$uitkomst";
    }
?>
</body>
</html>

