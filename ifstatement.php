<?php 
  $title = "If Statement";
  include 'includes/header.php'; 
?>
  <?php 
    // An If statement that will carry out an action based on the value of the variable
    echo "<h2>If Statement</h2>";

    $grade = 30*2;
    // ==, >, <, <=, >=, ===
    if ($grade >= 50) {
      echo "<h3 style='color:green;'>You have passed</h3>";
    } else {
      echo "<h3 style='color:red;'>You have failed</h3>";
    }

    $grade = "C";
    // if-else if-else
    if ($grade == "A") {
      echo "<h2 style='color:green;'>You are a superstar.</h2>";
    } elseif ($grade == "B") {
      echo "<h2 style='color:blue;'>You did well.</h2>";
    } else {
      echo "<h2 style='color:red;'>Well, that was rubbish.</h2>";
    }
  ?>
<?php require 'includes/footer.php'; ?>