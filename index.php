<?php
$N = $_GET["N"];
$V = $_GET["V"];
echo "<h1>1.</h1>";
echo "<table>";
for ($i=0; $i < 10; $i++) { 
    echo "<tr>";
    for ($j=0; $j < 10; $j++) { 
        echo "<td>";
        echo $j*$i;
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<h1>2.</h1>";
echo "<table>";
for ($i=1; $i < $N+1; $i++) { 
    echo "<tr>";
    echo "<td>";
        echo $i;
        echo "</td>";
    for ($j=1; $j < $V; $j++) { 
        echo "<td>";
        echo pow($j,$i);
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>

<form name="sample_form" method="get" action="index.php">
    <h2>Stepeni</h2>
<input type = "number" name = "N"/>
<input type = "number" name = "V"/>
<input type = "submit"/>
</form>
<?php
echo "<h1>3.</h1>";
$myfile = fopen("telephones.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
  echo explode("#", fgets($myfile))[2];
}
fclose($myfile);
echo $text;
?>
<?php
echo "<h1>4.</h1>";

if (isset($_POST['submit'])) {
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        if (strlen($_POST['pass']) > 3) {
            if ($_POST['rpass'] == $_POST['pass']) {
                echo 'все ок!';
            } else {
                echo '<font color="red">пароли не совпадают</font>';
            }
        } else {
            echo '<font color="red">длина пароля не менее 3х символов и иметь 1 большую букву</font>';
        }
    } else {
        echo '<font color="red">некорректный адрес</font>';
    } 
}
?>
<form action="" class="form1" method="POST">
        
        <input class="inp" type="text" name="email" placeholder="Email: vasya.pupkin@ukr.net">
        <br><br>

       <input class="inp" type="password" name="pass" placeholder="Password">
       <br><br>

       <input class="inp" type="password" name="rpass" placeholder="Repeat password">
       <br><br>
       <button name="submit">Отправить</button>
    </form>

<?php
echo "<h1>5.</h1>";

$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password, "exam");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo "fail";
}
$sql = "SELECT * FROM menu";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$el = $row["element"];
$link = $row["link"];
while($row = $result->fetch_assoc()) {
    echo ":" . $row["element"]. " - link: " . $row["link"]."<br>";
  }

  echo "<h1>6.</h1>";

$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password, "exam");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo "fail";
}

$sql = "SELECT * FROM bd";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$el = $row["element"];
$link = $row["link"];


echo "<table>";
while($row = $result->fetch_assoc()) {
    echo "<tr><td>". $row["Family"].": ". $row["Birthday"]."</td></tr>";
  }

  echo "</table>";

  echo "<h1>7.</h1>";
echo "<table>";
  $myfile = fopen("book.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
  $info = explode("#", fgets($myfile));
  echo "<tr><td>". $info[1].": ". $info[2]. '<img src="'.$info[0].'.jpg"</img>'."</td></tr>";
}
echo "</table>";

echo "<h1>8.</h1>";
require_once("clases/tovar.php");
$aple = new Tovar("Apple", 13, "Afrika"); 
echo $aple->toString()."<hr/>";

$book = new PechatniuTovar("Biblia", 100, "Lydi", "Bog"); 
echo $book->toString()."<hr/>";

$Fleska = new ElectroTovat("Fleshka", 100, "Kingstoon", 128); 
echo $Fleska->toString()."<hr/>";
?>