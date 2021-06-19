<?php 
  $title = "Index";
  include 'includes/header.php'; 
?>
  <!-- Basic HTML -->
  <h1>Hello World - PHP Primer</h1>
  
  <?php
    // Printing to HTML using echo
    echo "Hello PHP!";
    echo "<br/>";
    echo "Second Line";
    echo "<br/>";
    // declare variable
    $name = "Johnny";
    $age = 32;
    // echo variable
    echo $name;
    echo "<h1>My Name is: ".$name."</h1>";
    echo "<h1>My Age is: ".$age."</h1>";
    // different way of concatenating
    echo "<h1>My Name is: $name</h1>";

  ?>
  <button type="button" class="btn btn-dark">Click Me</button>
<?php require 'includes/footer.php'; ?>