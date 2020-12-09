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
if (!isset($_POST['submit'])){
?>
    <div id="content">
    <form name="form1" action="" method="post">
        <h1>welke soort sommen wil je oefenen</h1>
        <div id="sommen">
            <input type="radio" name="soortsommen" value="plus">plus sommen<br />
            <input type="radio" name="soortsommen" value="min">min sommen<br />
            <input type="radio" name="soortsommen" value="keer">keer sommen<br />
            <input type="radio" name="soortsommen" value="deel">deel sommen<br />

            <input id="maak" type="submit" name="submit" value="maak"/>
        </div>
    </form>
    </div>
<?php
}
else {
    $_test = $_POST['soortsommen'];

    if($_test == 'plus'){
        echo "<div class='start'>
                <h1>je gaat nu plus sommen maken</h1><br />
                <input id='begin' type='submit' name='plus' value='start'>
              </div>";
    }
    elseif($_test == 'min'){
        echo "<div class='start'>
                <h1>je gaat nu min sommen maken</h1><br />
                <input id='begin' type='submit' name='min' value='start'>
              </div>";
    }
    elseif($_test == 'keer'){
        echo "<div class='start'>
                <h1>je gaat nu keer sommen maken</h1><br />
                <input id='begin' type='submit' name='keer' value='start'>
              </div>";
    }
    else{
        echo "<div class='start'>
                <h1>je gaat nu deel sommen maken</h1><br />
                <input id='begin' type='submit' name='deel' value='start'>
              </div>";
    }
}
?>
</body>
</html>