<?php 
  $title = "Functions";
  include 'includes/header.php'; 
?>
  <h1>Functions</h1>

  <?php 
    // Defining a function
    function writeMessage() {
      echo "You are a really nice person.<br>";
    }
    // Calling a function
    writeMessage();
    echo "<hr/>";
    writeMessage();

    // Function with parameters
    function addFunction($num1, $num2) {
      $sum = $num1 + $num2;
      echo "The sum of $num1 and $num2 is: $sum <br>";
    }

    // Default pass by value, using ampersand (&) is pass by reference
    function changeNum(&$num) {
      $num = $num + 10;
      // num+=10;
    }

    // Value returning function
    function returnProduct($num1, $num2) {
      return $num1 * $num2;
    }

    addFunction(1,2);
    $num = 500;
    addFunction($num, 10);
    addFunction("10", '20');
    changeNum($num);
    echo $num."<br>";

    $returnValue = returnProduct(10, 200);
    echo $returnValue."<br>";


  ?>
<?php require 'includes/footer.php'; ?>