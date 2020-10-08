
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Booking</title>

<link rel="stylesheet" type="text/css" href="css/hesapla.css">
<link rel="stylesheet" type="text/css" href="css/contact.css">

<!-- Font -->
<link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,900" rel="stylesheet">

 <link rel="stylesheet" type="text/css" href="css/carreg1.css">
</head>
<body>

  <nav>
    <p>Parking Management</p>

    <ul>

      <li><a href="home.php">Home</a></li>
      <li><a href="#">Register Car </a>
          <ul>

            <li><a href="hesapla.php">Calculate Price</a></li>
            <li><a href="carform.php">Register Car Form</a></li>
            


          </ul>

      </li>
      <li><a href="#">Available Slots</a></li>
      <li><a href="contact.php">Contact</a></li>

 </ul>



  </nav>

<div class="wrapper">
  <div class="title">
    <h1>Contact Us</h1>
  </div>

 
  <div class="contact-form">
    <div class="input-fields">
      <input type="text" class="input" required placeholder="Name">
      <input type="mail" class="input" required  placeholder="Email Address">
      <input type="text" class="input" required placeholder="Phone">
      <input type="text" class="input" required placeholder="Subject">
    </div>
    <div class="msg">
      <textarea placeholder="Message"></textarea>
      
      <div class="btn"  onclick="send()" >send</div>
    </div>
  </div>


</div>





</body>
</html>
