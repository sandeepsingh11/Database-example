<?php
  include_once 'dbConn.php';
  include_once 'phpCode.php';
?>

<!DOCTYPE html>
<html>


<head>
  <title>Web Database Example</title>

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>


<body>

  <div class="w3-container w3-purple">

  <div id="intro">
    <div class="w3-panel w3-deep-purple w3-center w3-round-xlarge w3-card-4">
      <h1><a href="root.php">Database Example!</a></h1>
      <h3>Merry meet! For this quest, input your info young wizard, and I, the grandmaster, will store it into the magical vault. See if you can summon it back. <br><br>~Sayonara!</h3>
    </div>
  </div>

  <div class="w3-card-4 w3-brown w3-round-large">
    <!-- submit to the same web page -->
    <h2 class="w3-center">~ Scroll ~</h2>
    <form id="form" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> " method="post">
      *First Name: <input class="w3-input" type="text" name="fName" required><br>
      *Last Name: <input class="w3-input" type="text" name="lName" required><br>
      *Element: <input class="w3-input" type="text" name="element" ><br>
      *Level: <input class="w3-input" type="number" name="level" ><br>
      *Zodiac: <input class="w3-input" type="text" name="zodiac" ><br>
      <input type="submit" value="Submit">
    </form>
  </div>

  <div class="w3-panel w3-deep-purple w3-round-xlarge">
    <h2 class="w3-center">~ Vault info ~</h2>


  <?php
    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data for each row
        while ($row = mysqli_fetch_assoc($result) ) {
            // every fetch decrements from the result array length
            echo "id: " . $row["id"] . ", name: " . $row["fName"] . " " . $row["lName"] . ", element: " . $row["element"] . ", level: " . $row["level"] . ", zodiac: " . $row["zodiac"] . "<br>";
        }
    }

    // print once vars are filled in
    echo $fName;
    echo "<br>";
    echo $lName;
    echo "<br>";
    echo $element;
    echo "<br>";
    if ($level != -1)
      echo $level;
    echo "<br>";
    echo $zodiac;
  ?>

  </div>

</div>

</body>


</html>

<!-- open with Apache, not Atom. Go to XAMPP and hit the 'Admin' button for Apache. Then go to the 'web_db_ex' folder and select 'root.php'. derp -->

<!-- https://www.youtube.com/watch?v=0YLJ0uO6n8I&list=FL-kV3NcLa9dTlJJHLy_ti4w&index=1 -->
