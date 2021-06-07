<!DOCTYPE html>
<html>
<head>
<title>Karar Ağacı Çıktısı</title>
<link rel="stylesheet" href="../css/php.css">
<style>
table {
border-collapse: collapse;
width: 100%;
color: #000;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #730000;
color: white;
}
tr:nth-child(even) {background-color: #F5DEB3}
</style>
</head>
<body style="background-image: url(../projects/img/assets/k.png)";>
    <header>
        <nav id="nav">

            <h1><a href="http://127.0.0.1:5500/mertkarababa.html" >Mert<span>Karababa</span></a></h1>
                    <ul class="nav-area">
                    <a href="http://127.0.0.1:5500/anasayfa.html" target="_self">Anasayfa</a>
                    <li><a href="http://127.0.0.1:5500/veri_seti.html">Veri Seti Yükle</a></li>
                    <li><a href="http://localhost:3000/projects/php/ana_veri_seti.php">Veri Seti Tablosu</a></li>
                    <li><a href="http://localhost:3000/projects/php/random_forest.php">Random Forest Tablosu</a></li>
                    <li><a href="http://localhost:3000/projects/php/java_random_forest.php">Java Random Forest Tablosu</a></li>
                    <li><a href="http://localhost:3000/projects/php/a-k_means.php">Scatter Tablosu</a></li>
                    <li><a href="http://localhost:3000/projects/php/naive_bayes.php">Naive Bayes Tablosu</a></li>
                    </ul>

         </nav>
<table>
<tr>
<th>True Positives</th>
<th>False Positives</th>
<th>True Negatives</th>
<th>False Negatives</th>
<th>Recall</th>
<th>Precision</th>
<th>Sensitivity</th>
<th>Spesificity</th>
<th>F-measure</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "veri_setleri");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT tpos, fpos, tneg, fneg, recl, prec, sens, spec, fmes FROM karar_agac";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["tpos"]. "</td><td>" . $row["fpos"] . "</td><td>" . $row["tneg"] . "</td><td>" . $row["fneg"] . "</td><td>" . $row["recl"] . "</td><td>" . $row["prec"] . "</td><td>" . $row["sens"] . "</td><td>"  . $row["spec"] . "</td><td>"
. $row["fmes"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
