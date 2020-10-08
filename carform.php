
<!DOCTYPE html>
<html>
<head>
 <title> Register Car </title>
 <link rel="stylesheet" type="text/css" href="css/carreg1.css">
 <link rel="stylesheet" type="text/css" href="css/carform.css">
 <link rel="stylesheet" type="text/css" href="css/carformsaglam.css">
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

<div class="dis">
    <div class="title">
      Register Car
    </div>
    
  <div class="form">
       <div class="input-field">
            <input class="input" type="text" required name="" placeholder="License Plate"> 
       </div>
     <div class="input-field">
            <input class="input" type="tel" required name="" placeholder="555-555-55-55">     
    </div>
    <div class="input-field">
            <input class="input" type="text" required name="" placeholder="Vehicle Color"> 
    </div>

 
<div class="container">
    
      <div class="select-box">
        <div class="options-container">
          <div class="option">
            <input
              type="radio"
              class="radio"
              id="automobiles"
              name="category"
            />
            <label for="automobiles">Vehicle</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="film" name="category" />
            <label for="film">Commercial</label>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="science" name="category" />
            <label for="science">Truck</label>
          </div>

         
          

          
        </div>

        <div class="selected">
          Select Car Type
        </div>
      </div>
    </div>

    <script src="carformsaglam.js"></script>

    <div class="btn">
      <a href="#">Register Car</a>
    </div>

  </div>
</div>



</body>
</html>
