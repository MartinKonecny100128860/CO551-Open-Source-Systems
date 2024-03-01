
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
    background-color: #ffffff; /* Dark blue */
  }

  .title {
    text-align: center; /* Center-align the content within the div */
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
 </style>
</head>

<body>

  <div class="container">
    <div class="hero-image"></div>
    <div class="hero-text">
      <h1>PHP Logbook</h1>
    </div>
  </div>


  <div class="title">
    <h1>Introduction Task</h1>
    <h2><a href="index.html">Back to home page</a></h2>
  </div>

</body>
</html>


  <?php
    // Your PHP code goes here
    phpinfo();
  ?>
