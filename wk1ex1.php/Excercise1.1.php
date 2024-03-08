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
    padding: 0 5px;
    font-family: 'Oswald', sans-serif; /* Change font to Oswald Medium */
    background-color: #ffffff; /* Dark blue */
  }

  .title {
    text-align: center; /* Center-align the content within the div */
  }

  .tasks h3 {
    margin: 0 15px; /* Margin of 0 pixels on the top and bottom, and 15 pixels on the left and right */
    font-size: 15px;
  }

  .tasks h1 {
    margin: 0 15px; /* Margin of 0 pixels on the top and bottom, and 15 pixels on the left and right */
    font-size: 24px;
  }
  .tasks .task-content {
    margin: 0 20px; /* Adjust margins as needed */
  }

  .hero-image {
    background-image: url('https://history-computer.com/wp-content/uploads/2023/03/shutterstock_2136848509-2048x1536.jpg');
    background-size: cover;
    height: 300px;
    position: relative;
    opacity: 0.7; /* Increased opacity */
  }

  .hero-text {
    position: absolute;
    top: 20%; /* Adjusted the top position higher */
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 48px; /* Make the text much larger */
    color: white; /* Change text color to white */
    text-shadow: 10px 10px 18px rgba(0, 0, 0, 0.5); /* Add text shadow */
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
  display: inline-block; /* Change to inline-block for proper alignment */
}

.navbar ul li:first-child {
  margin-left: 0; /* Remove margin-left for the first item */
}

.navbar a {
  text-decoration: none;
  color: #fff;
  padding: 10px 20px; /* Adjusted padding */
  display: inline-block; /* Added display property */
}
.navbar a:hover {
  background-color: #555; /* Changed hover background color */
  padding: 10px 20px; /* Match the padding with the regular state */
  border-radius: 5px; /* Added border radius for rounded corners */
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
    background-color: #C3B1E1;
  }
}
.navbar:hover {
  background-color: #333;
}

table {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
        border: 2px solid black;
    }
    th, td {
        border: 1px solid black;
        padding: 10px;
        text-align: left;
    }
    th {
        background-color: #9999cc; /* Changed color for header row */
        color: black; /* Text color for header row */
    }
    tr:nth-child(even) {
        background-color: #dddddd; /* Changed color for even rows */
    }
    tr:hover {
        background-color: white; /* Changed color for hover */
    }
    td:first-child {
        width: 10%; /* Set width for Excercise column */
    }
    /* Centering exercise numbers */
    td.exercise {
        text-align: center;
    }
    tr:nth-child(3), /* Rows 3, 5, and 7 to have the same color */
    tr:nth-child(5),
    tr:nth-child(7) { /* Row to be changed to #ccccff */
        background-color: #ccccff;
    }
</style>
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
    <h1>WEEK 1 - INTRODUCTION TO PHP</h1>
    <h2> Excercise 1 is located in Introduction page! </h2>
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
    <td class="exercise">2</td>
    <td>Display server information</td>
    <td>
        <?php
        function displayServerInfo($key) {
            if (isset($_SERVER[$key])) {
                echo "<p>$key: " . $_SERVER[$key] . "</p>";
            } else {
                echo "<p>$key: Not available</p>";
            }
        }

        displayServerInfo("HTTP_USER_AGENT");
        displayServerInfo("SERVER_NAME");
        displayServerInfo("SERVER_PROTOCOL");
        ?>
    </td>
  </tr>
  <tr>
    <td class="exercise">3</td>
    <td>Display "Blimmy it worked!"</td>
    <td>
        <?php
        echo "Blimmy it worked!";
        ?>
    </td>
  </tr>
  <tr>
    <td class="exercise">4</td>
    <td>Display current date and time</td>
    <td>
        <?php
        echo gmdate("D");
        echo "<br>";
        echo gmdate("d m Y");
        echo "<br>";
        echo gmdate("z");
        ?>
    </td>
  </tr>
  <tr>
    <td class="exercise">5</td>
    <td>Concatenate first and last name with a space</td>
    <td>
        <?php
        $firstname = "Richard";
        $lastname = "Mather";
        $space = " ";
        $name = $firstname . $space . $lastname;
        echo $name;
        ?>
    </td>
  </tr>
  <tr>
    <td class="exercise">6</td>
    <td>Calculate gross wage</td>
    <td>
        <?php
        $hourlyrate = 5.75;
        $hoursperweek = 40;
        $gross = $hourlyrate * $hoursperweek;
        echo $gross;
        ?>
    </td>
  </tr>
  <tr>
    <td class="exercise">7</td>
    <td>Calculate net wage after tax</td>
    <td>
        <?php
        $taxRate = 0.22; // 22% tax rate
        $taxAmount = $gross * $taxRate;
        $net = $gross - $taxAmount;
        echo $net;
        ?>
    </td>
  </tr>
</table>
  
  <br>

</body>
</html>
