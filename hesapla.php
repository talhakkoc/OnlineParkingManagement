
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Booking</title>

<link rel="stylesheet" type="text/css" href="css/hesapla.css">

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

            <li><a href="#">Calculate Price</a></li>
            <li><a href="#">Register Car Form</a></li>
            


          </ul>

      </li>
      <li><a href="#">Available Slots</a></li>
      <li><a href="#">Contact</a></li>

 </ul>




  </nav>




<div class="container">
<div class="container-time">
<h2 class="heading">Time Open</h2>
<h2 class="heading-days">Every day of the week</h2>
<p>Every minute at your service</p>
<p>Vehicle : 10 $ /Hour</p>


<p>Commercial :15 $/Hour</p>
<p>Truck  : 25 $ /Hour</p>

<hr>

<h4 class="heading-phone">Call Us: (312) 444-5-444</h4>
<hr>

<p>Calculated Amount : " " </p>

</div>





<div class="container-form">
<form action="#">
<h2 class="heading heading-yellow">Reservation Online</h2>

<div class="form-field">
<p>Your Name</p>
<input type="text" placeholder="Your Name">
</div>
<div class="form-field">
<p>Car Plate</p>
<input type="email" placeholder="Form : 000-XXX-000 ">
</div>
<div class="form-field">
<p>Date</p>
<input type="date">
</div>
<div class="form-field">
<p>Time Start</p>
<input type="time">
</div>

<div class="form-field">
<p>Time Finish</p>
<input type="time">
</div>


<div class="form-field">
<p>How many Cars You Have?</p>
<select name="select" id="#">
<option value="1">1 Car</option>
<option value="2">2 Cars</option>
<option value="3">3 Cars</option>
<option value="4">4 Cars</option>
<option value="5">5 Cars</option>
</select>
</div>

<button class="btn">Submit</button>
</form>
</div>
</div>



</body>
</html>
