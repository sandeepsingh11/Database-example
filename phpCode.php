<?php

include 'dbConn.php';


$fName = $lName = $element = $zodiac = "";
$level = -1;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // get values from POST after form submission
  $fName = testData($_POST["fName"]);
  $lName = testData($_POST["lName"]);
  $element = testData($_POST["element"]);
  $level = testData($_POST["level"]);
  $zodiac = testData($_POST["zodiac"]);

  $sql = "INSERT INTO users (fName, lName, element, level, zodiac) VALUES('$fName', '$lName', '$element', $level, '$zodiac'); ";
  $store = mysqli_query($conn, $sql);

  if ($zodiac != "")
    //echo "*Poof*, your info was stored in the vault! " . $fName . "<br>";


  if ($store)
    echo "connection apparently works :/";
  else
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

function testData($data) {
  // get valid chars
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);

  return $data;
}
