<?php 
  $title = "For Loop";
  include 'includes/header.php'; 
?>
  <h1>For Loops</h1>

  <?php
    // For Loops
    for ($count=0; $count < 10; $count++) { 
      echo "<p>Hello World</p>";
    } 

    for ($i=0; $i < 10; $i++) { 
      echo "<p>Count is: $i</p>"; 
    }
  ?>

<?php require 'includes/footer.php'; ?>