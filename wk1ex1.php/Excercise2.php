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
<style>
  body {
    margin: 0;
    font-family: 'Oswald', sans-serif; /* Change font to Oswald Medium */
    color: white;
    background-color: #1a1a2e; /* Dark blue */
  }
  .hero-image {
    background-image: url('https://history-computer.com/wp-content/uploads/2023/03/shutterstock_2136848509-2048x1536.jpg');
    background-size: cover;
    height: 300px;
    text-align: center;
    color: white; /* Change text color to white */
    overflow: hidden;
    position: relative;
  }
  .hero-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 48px; /* Make the text much larger */
  }

.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
}

.navbar ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
}

.navbar ul li {
  margin-right: 20px;
}

.navbar ul li:last-child {
  margin-right: 0;
}

.navbar a {
  text-decoration: none;
  color: #fff;
  padding: 10px 20px;
}

/* Styles for mobile navigation */
.mobile-nav {
  display: none;
}

@media screen and (max-width: 768px) {
  .desktop-nav {
    display: none;
  }

  .mobile-nav {
    display: block;
  }

  .mobile-nav-content {
    display: none;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease-out;
    background-color: #333;
    padding: 10px 0; /* Removed padding */
  }

  .mobile-nav-content.show {
    display: block;
    max-height: 400px; /* Adjust as needed */
    transition: max-height 0.3s ease-in;
  }

  .mobile-nav-toggle {
    cursor: pointer;
    color: #fff;
    font-size: 18px;
  }

  .mobile-nav-content button {
    margin-bottom: 10px;
    background-color: #333;
    border: none;
    color: white;
    padding: 10px 0; /* Removed padding */
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    cursor: pointer;
    width: 100%;
  }

  .mobile-nav-content button:hover {
    background-color: pink;
  }
}

@media screen and (min-width: 769px) {
  .mobile-nav {
    display: none;
  }
  
  .desktop-nav a:hover {
    background-color: pink;
  }
}
.navbar:hover {
  background-color: #333;
}
</style>
</head>
<body>

<div class="container">
  <div class="hero-image">
    <div class="hero-text">
      <h1>PHP Logbook</h1> <!-- Remove inline style for font-size -->
    </div>
  </div>

  <!-- Navigation bar -->
  <nav class="navbar">
    <div class="desktop-nav">
      <ul>
        <li><a href="Excercise1.php">Week 1</a></li>
        <li><a href="#">Week 2</a></li>
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
  </nav>

  <div class="title">
    <h2>WELCOME TO MY PHP EXERCISES</h2>
    
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

</body>
</html>

<?php
$hourlyrate = 5.75;
$hoursperweek = 40;
$gross = $hourlyrate * $hoursperweek;
?>
<html>
<head></head>
    <body>
        <p>My gross wage is <?php echo $gross; ?></p>
    </body>
</html>

<?php
$myage = "None of your business <br/>";
print($myage);
$myage = 21;
print($myage . "<br/>");
$myage = 21.75;
print($myage);
?>

<br>
<br>

<?php
define("PASS_GRADE", 40);
echo "You need " . PASS_GRADE . "% or more to pass.<br/>";
$grade = PASS_GRADE + 15;
echo "To achieve a merit you need $grade% or more <br/>";
$grade = PASS_GRADE + 30;
echo "To achieve a distinction you need $grade% or more <br/>";
?>

<br>
<br>
<!-- Speed camera advise script -->
<?php
$points = 13;
// Output appropriate message depending on points awarded.
if ($points >= 12) {
   echo "Public transport is your best option. <br/>";
} elseif ($points >= 9) {
   echo "If you get caught say your grandmother was driving. <br/>";
} else {
   echo "There is no need to worry about the speed limit.<br/>";
}
?>

<br>

<?php
if (strpos($_SERVER["HTTP_USER_AGENT"], "MSIE") !== false) {
   echo "You are using Internet Explorer<br/>";
} else {
   echo "Why are you not using Internet Explorer?<br/>";
}
?>

<br>

<?php
$marks[0] = 65;
$marks[3] = 55;
$marks[] = 76;

echo "Index 0 = $marks[0]<br/>";
echo "Index 1 = $marks[1]<br/>";
echo "Index 2 = $marks[2]<br/>";
echo "Index 3 = $marks[3]<br/>";
echo "Index 4 = $marks[4]<br/>";
echo "Index 5 = $marks[5]<br/>";
?>

<br>

<?php
for ($count = 0; $count <= 10; $count++) {
    echo "I must behave in class $count <br/>";
}
?>

<br>

<?php
$topModules[0] = "Internet Systems Development";
$topModules[1] = "Programming 1";
$topModules[2] = "Programming 2";
$topModules[3] = "OOAD";
$topModules[4] = "Software Engineering";
for ($count = 0; $count < 5; $count++) {
    echo "$count module is $topModules[$count] <br/>";
}
?>

<br>

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

<br>

<?php
$mymarks["year 1"] = 55;
$mymarks["year 2"] = 65;
$mymarks["year 3"] = 75;

// foreach loop to iterate over the associative array elements
foreach ($mymarks as $index => $value) {
    echo "for $index my grade was $value <br/>";
}

echo "<br/> My best year was Year 3 when I averaged " . $mymarks["year 3"];
?>

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
