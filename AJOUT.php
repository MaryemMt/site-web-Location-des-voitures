<?php
$conn=new mysqli("localhost","root","","location de voiture");

$marque = $_POST["marque"];
$plaque = $_POST["plaque"];
$img = $_FILES["img"]["name"];
$prix = $_POST["prix"];
$path = "assets/img/cars/".$img;
$disponibilit√© = $_POST["disponibilit√©"];

$id=uniqid();
$req="INSERT INTO voiture(marque,plaque,img,prix,disponibilit√©) VALUES ('$marque', '$plaque' ,'$path ', $prix , '$disponibilit√©')";
if ($conn -> query($req)===true)
{
    header("location:page-admin.html"); 
}else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


?>