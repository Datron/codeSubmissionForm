<?php
include("index.html");
echo "<br>";
if (isset($_POST["TeamName"])) {
  $TeamName = escapeshellcmd(htmlspecialchars($_POST["TeamName"]));
mkdir($TeamName,0777);
  $target_dir = $TeamName."/";
$target_file1 = $target_dir . basename($_FILES["Bot"]["name"][0]);
$target_file2 = $target_dir . basename($_FILES["Bot"]["name"][1]);
move_uploaded_file($_FILES["Bot"]["tmp_name"][0], $target_file1);
move_uploaded_file($_FILES["Bot"]["tmp_name"][1], $target_file2);
    echo "<h1> Code received. </h1>";
}

?>
