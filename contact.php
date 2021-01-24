<html>
<head>
    <title>contactformulier</title>
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
	<form name="contactformulier" action="" method="post">
		<h1 class="contact">contactformulier</h1>
		<h3 class="contact">uw naam:<h3>
		<input type="text" name="username" size="15" class="vul"/>
		<h3 class="contact">in welke klas zit u?</h3>
		</br>
		<p class="contact">Groep 4</p>
		<input type="checkbox" name="Groep4" class="vul"/> 
		</br>
		<p class="contact">Groep 5</p>
		<input type="checkbox" name="Groep5" class="vul"/> 
		</br>
		<p class="contact">Groep 6</p>
		<input type="checkbox" name="Groep6" class="vul"/> 
		</br>
		<h3 class="contact">beschrijf uw probleem</h3>
		<br/>
		<textarea name="comments" cols="20" rows="3" class="vul"></textarea>
		<br/>
		<input type="submit" name="submit" value="Versturen" class="vul"/>
	</form>

</body>
</html>
<?php
if(isset($_POST['submit']))
{
echo "test";
}
?>