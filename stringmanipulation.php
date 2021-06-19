<?php 
  $title = "String Manipulation";
  include 'includes/header.php'; 
?>
  <h1>String Manipulation</h1>

  <?php 
    $phrase1 = "student who came late";
    $phrase2 = "in class, stand with rock";
    $name = "martin johnny";
    echo $phrase1.", named Tiffany, ".$phrase2;
    echo "<hr/>";

    // String transformation
    echo "Uppercase first letter: ".ucfirst($name)."<br>";
    echo "Uppercase each word: ".ucwords($name)."<br>";
    echo "Upper case: ".strtoupper($name)."<br>";
    echo "Lower case: ".strtolower("THIS WAS ALL UPPS")."<br>";
    echo "<hr/>";

    echo "Repeat String: ".str_repeat("a", 10)."<br>";
    echo "Repeat String: ".strtoupper(str_repeat("a", 10))."<br>";
    echo "Get a substring: ".substr($name, 7, 6)."<br>";

    echo "Get position of string: ".strpos($name, "o")."<br>";
    // Get position of a character in a string
    echo "Find character 'M': ".strchr($name, "M")."<br>";
    echo "Find character 'a': ".strchr($name, "a")."<br>";
    echo "Find character 'R': ".strchr($name, "R")."<br>";
    echo "Find character 't': ".strchr($name, "t")."<br>";

    echo "Find length of string: ".strlen($name)."<br>";

    echo "Without trim: "."A"." B C D "."E"."<br>";
    echo "Trim on both sides: "."A".trim(" B C D ")."E"."<br>";
    echo "Trim on left: "."A".ltrim(" B C D ")."E"."<br>";
    echo "Trim on right: "."A".rtrim(" B C D ")."E"."<br>";

    echo "Replace string with another: ".str_replace("stand", "sit", $phrase2)."<br>";







  ?>
<?php require 'includes/footer.php'; ?>