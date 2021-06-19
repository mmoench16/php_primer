<?php 
  $title = "Switch Statements";
  include 'includes/header.php'; 
?>
  <h1>Switch Statements</h1>

  <?php
    $grade = "B";
    
    switch ($grade) {
      case 'A':
        echo "<h2>You are a superstar.</h2>";
        break;
      case 'B':
        echo "<h2>Well done.</h2>";
        break;

      default:
        echo "<h2>Not so great now, is it.</h2>";
        break;
    }
  ?>

<?php require 'includes/footer.php'; ?>