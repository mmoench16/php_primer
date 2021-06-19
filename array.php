<?php 
  $title = "Arrays & Printing";
  include 'includes/header.php'; 
?>
  <h1><?php echo $title; ?></h1>

  <?php 
    // a variable
    $num = 3;

    // an array with
    // only one datatype
    $numbers = array(1,2,3,4,5,6,7,8,9,10);
    // access a value in array
    echo $numbers[5];
    echo "<p>$numbers[9]</p>";
    $size = count($numbers);
    echo "<p>Elements in array: $size</p>";

    // Looping through array
    for ($i=0; $i < count($numbers); $i++) { 
      echo "<p>$numbers[$i]</p>";
    }

  ?>
<?php require 'includes/footer.php'; ?>