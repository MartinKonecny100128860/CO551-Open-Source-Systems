<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Logbook</title>
<!-- Import Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+zr/At6/qhZ7uFmOfFndf4Z+1hQ5f+8IEo4499p" crossorigin="anonymous">
<!-- Import Oswald Medium font from Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap">
<link rel="stylesheet" href="Homestyle.css">

</head>
<body>

<div class="container">
    <div class="hero-image"></div>
    <div class="hero-text">
      <h1>PHP Logbook</h1>
    </div>
  </div>

  <!-- Navigation bar -->
  <nav class="navbar">
    <div class="desktop-nav">
      <ul>
      <li><a href="Index.html">Home</a></li>
      <li><a href="Excercise1.php">Introduction</a></li>
        <li><a href="Excercise1.1.php">Week 1</a></li>
        <li><a href="Excercise2.php">Week 2</a></li>
        <li><a href="#">Week 3</a></li>
        <li><a href="#">Week 4</a></li>
        <li><a href="#">Week 5</a></li>
        <li><a href="#">Week 6</a></li>
        <li><a href="#">Week 7</a></li>
        <li><a href="#">Week 8</a></li>
      </ul>
    </div>
    <div class="mobile-nav">
      <div class="mobile-nav-toggle" onclick="toggleMobileNav()">&#9776;</div>
      <div class="mobile-nav-content" id="mobileNavContent">
        <button onclick="window.location.href='Excercise1.php'">Week 1</button>
        <button>Week 2</button>
        <button>Week 3</button>
        <button>Week 4</button>
        <button>Week 5</button>
        <button>Week 6</button>
        <button>Week 7</button>
        <button>Week 8</button>
      </div>
    </div>
    <img src="https://www.php.net/images/logos/new-php-logo.svg" alt="PHP Logo" style="height: 40px;">
  </nav>


  <div class="title">
    <h1>WEEK 2 - PHP SYNTAX</h1>
  </div>
  
<!-- Import Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-hz5Xn+3BsXZ9g7NZ99z5zehYlwT0wq5G2r0PUzPswqVZ2dkvM/E5hJqtvxC6Rzvh" crossorigin="anonymous"></script>

<script>
// JavaScript function to toggle mobile navigation
function toggleMobileNav() {
  var navContent = document.getElementById('mobileNavContent');
  navContent.classList.toggle('show');
}
</script>

<table>
  <tr>
    <th style="width: 10%;">Excercise</th> <!-- Adjusted width for the Excercise column -->
    <th>Description</th>
    <th>Code</th>
  </tr>

  <tr>
    <td class="exercise">1</td>
    <td>Display server information</td>
      <td>
      <?php
        $hourlyrate = 5.75;
        $hoursperweek = 40;
        $gross = $hourlyrate * $hoursperweek;
      ?>
      <p>My gross wage is <?php print("$gross"); ?></p>
    </td>
  </tr>

  <tr>
    <td class="exercise">2</td>
    <td>Display server information</td>
      <td>
      <?php
        $myage = "None of your business <br/>";
        print($myage);
        $myage = 21;
        print($myage . "<br/>");
        $myage = 21.75;
        print($myage);
      ?>
    </td>
  </tr>

  <tr>
    <td class="exercise">3</td>
    <td>Display server information</td>
      <td>
        <?php
          define("PASS_GRADE", 40);
          echo "You need " . PASS_GRADE . "% or more to pass.<br/>";
          $grade = PASS_GRADE + 15;
          echo "To achieve a merit you need $grade% or more <br/>";
          $grade = PASS_GRADE + 30;
          echo "To achieve a distinction you need $grade% or more <br/>";
        ?>
    </td>
  </tr>

  <tr>
    <td class="exercise">4</td>
    <td>Display server information</td>
      <td>
        <?php
          $points = 13;
          if ($points >= 12) {
            echo "Public transport is your best option. <br/>";
          } elseif ($points >= 9) {
            echo "If you get caught say your grandmother was driving. <br/>";
          } else {
            echo "There is no need to worry about the speed limit.<br/>";
          }
        ?>
    </td>
  </tr>

  <tr>
    <td class="exercise">5</td>
    <td>Display server information</td>
      <td>
        <?php
          if (strpos($_SERVER["HTTP_USER_AGENT"], "MSIE") !== false) {
            echo "You are using Internet Explorer<br/>";
          } else {
            echo "Why are you not using Internet Explorer?<br/>";
          }
        ?>
    </td>
  </tr>

  <tr>
    <td class="exercise">6</td>
    <td>Display server information</td>
      <td>
        <?php
          $marks[0] = 65;
          $marks[3] = 55;
          $marks[] = 76;

          echo "Index 0 = $marks[0] <br/>";
          echo "Index 1 = $marks[1] <br/>";
          echo "Index 2 = $marks[2] <br/>";
          echo "Index 3 = $marks[3] <br/>";
          echo "Index 4 = $marks[4] <br/>";
          echo "Index 5 = $marks[5] <br/>";
        ?>
    </td>
  </tr>

  <tr>
    <td class="exercise">7</td>
    <td>Display server information</td>
      <td>
        <?php
          for ($count = 0; $count <= 10; $count++) {
              echo "I must behave in class $count <br/>";
          }
        ?>
    </td>
  </tr>

  <tr>
    <td class="exercise">8</td>
    <td>Display server information</td>
      <td>
        <?php
          $topModules[0] = "Internet Systems Development";
          $topModules[1] = "Programming 1";
          $topModules[2] = "Programming 2";
          $topModules[3] = "OOAD";
          $topModules[4] = "Software Engineering";
          $topModules[5] = "Programming Concepts";
          $topModules[6] = "Mobile Systems";
          for ($count = 0; $count < 7; $count++) {
              echo "$count module is $topModules[$count] <br/>";
          }
        ?>
    </td>
  </tr>

  <tr>
    <td class="exercise">9</td>
    <td>Display server information</td>
      <td>
        <?php
          $topmodules[0] = "Internet Systems Development";
          $topmodules[5] = "Programming 1";
          $topmodules[10] = "Programming 2";
          $topmodules[30] = "OOAD";
          $topmodules[40] = "Software Engineering";

          // foreach loop to iterate over the array elements
          foreach ($topmodules as $index => $value) {
              echo "Index is $index and value is $value <br/>";
          }
        ?>
    </td>
  </tr>

  <tr>
    <td class="exercise">2</td>
    <td>Display server information</td>
      <td>
      <?php
        $mymarks["year 1"] = 55;
        $mymarks["year 2"] = 65;
        $mymarks["year 3"] = 75;


        foreach ($mymarks as $index => $value) {
            echo "for $index my grade was $value <br/>";
        }

        echo "<br/> My best year was Year 3 when I averaged " . $mymarks["year 3"];
      ?>
    </td>
  </tr>

  <tr>
    <td class="exercise">2</td>
    <td>Display server information</td>
      <td>

    </td>
  </tr>

  <tr>
    <td class="exercise">2</td>
    <td>Display server information</td>
      <td>

    </td>
  </tr>

  <tr>
    <td class="exercise">2</td>
    <td>Display server information</td>
      <td>

    </td>
  </tr>

  <tr>
    <td class="exercise">2</td>
    <td>Display server information</td>
      <td>

    </td>
  </tr>
  
</table>



<br>

<?php
// Define an array to hold the marks for six modules
$mymarks = array(
    "CS101" => 80,
    "CS102" => 75,
    "CS103" => 85,
    "CS104" => 70,
    "CS105" => 90,
    "CS106" => 78
);

// Display the marks using a loop
echo "<h2>Marks for last year:</h2>";
foreach ($mymarks as $module => $mark) {
    echo "Module $module: $mark<br>";
}

// Calculate the total mark
$total = 0;
foreach ($mymarks as $index => $mark) {
    $total = $total + $mark;
}

// Calculate the average mark
$average = $total / count($mymarks);

// Output the average mark
echo "<h2>Average mark:</h2>";
echo "Your average mark is: $average";
?>

<br>

<?php
$topmodules[0] = "Open Source Systems";
$topmodules[1] = "Programming 1";
$topmodules[2] = "Programming 2";
$topmodules[3] = "Web Application Development";
$topmodules[4] = "Software Engineering";
?>
<html>
<head>
<title>Data in table</title>
</head>
<body>
<table border=1 align="center">
<tr><th>Index</th><th>Subject</th></tr>
<?php
for ($count = 0; $count < 5; $count++) {
    echo "<tr><td>$count</td><td>$topmodules[$count]</td></tr>";
}
?>
</table>
</body>
</html>

<br>
