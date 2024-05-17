<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="template.css" />
    <link rel="stylesheet" href="dashboard.css" />
    <link rel="stylesheet" herf="weatherpopup.css"/>
    <script src="https://kit.fontawesome.com/af9a51cad1.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <title>Dashboard</title>
  </head>
  <body>
    <!-- -------------------------Left panel------------------------------------------>
    <div class="container">
      <div class="left-panel item1">
        <center>
          <img src="Images/logo-new.png" alt="" class="logo" />
        </center>

        <div class="menu">
          <li class="home">
            <a href="dashboard.php"><i class="fa-solid fa-house"></i> Home</a>
          </li>
          <li class="tour_management">
            <a href="tourManagement.php"><i class="fa-solid fa-location-dot"></i> Tour Management</a>
          </li>
          <li class="profile">
            <a href="profile.php"><i class="fa-solid fa-user"></i> Profile</a>
          </li>
          <li class="tourGuideSchedule">
            <a href="tourGuideSchedule.php"><i class="fa-solid fa-calendar-week"></i> Schedule</a>
          </li>
          <li class="massage">
            <a href="massage.php"><i class="fa-solid fa-envelope"></i> Message</a>
          </li>
          <li class="finance">
            <a href="finance.php"><i class="fa-solid fa-coins"></i> Financial</a>
          </li>
          <li class="tourGuideReview">
            <a href="tourGuideReview.php"><i class="fa-solid fa-star-half-stroke"></i> Ratings</a>
          </li>
        </div>
      </div>

      <!------------------------------------header------------------------------------->
      <div class="header item2">
        <div class="header-left">
          <a href="#"><i class="fa-solid fa-cubes-stacked"></i> Dashboard</a>
        </div>

        <div class="settings">
          <a href="#"><i class="fa-solid fa-gear"></i> </a>
        </div>

        <div class="question">
          <a href="#"><i class="fa-solid fa-question"></i> </a>
        </div>

        <div class="header-image">
          <img src="Images/profile.jpg" alt="" />
        </div>
      </div>

      <!------------------------------------main content------------------------------------->

      <div class="main item3">
        <!-- ------------------card------------------- -->
      <div class="card">
        <div class="card-info">
          <div class="recent_booking">
            <div class="book_icon">
              <i class='bx bxs-book-bookmark'></i>
            </div>
            <div class="booking">
              <h4>32</h4>
              <p>Recent Booking</p>
            </div>
            <div class="book_arrow">
              <a herf="#"> <i class="fa-solid fa-angle-right"></i></a>
            </div>
          </div>

          <div class="total_tour">
            <div class="tour_icon">
              <i class='bx bx-line-chart'></i>
            </div>
            <div class="tour">
              <h4>32</h4>
               <p>Total Tour</p>
            </div>
            <div class="tour_arrow">
              <a herf="#"> <i class="fa-solid fa-angle-right"></i></a>
            </div>
          </div>

          <div class="payment">
            <div class="payment_icon">
              <i class='bx bxl-paypal' ></i>
            </div>
            <div class="payment_text">
              <h4>32</h4>
              <p>Payment</p>
            </div>
            <div class="payment_arrow">
              <a herf="#"> <i class="fa-solid fa-angle-right"></i></a>
            </div>
          </div>

          <div class="new_message">
            <div class="msg_icon">
              <i class='bx bxs-message-rounded-dots' ></i>
            </div>
            <div class="messages">
              <h4>32</h4>
              <p>New Message</p>
            </div>
            <div class="msg_arrow">
              <a herf="#"> <i class="fa-solid fa-angle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- --------------------weather--------------------- -->
        <div class="weather">

        <div class="weather pointer">
          <img src="./IMAGES/weather-icon.png" alt="Icon" />
          <div class="details">
            <p class="date">Today, 2024-03-26 23:48</p>
            <p class="temp">Temp: 24.3 °C, Bangladesh</p>
          </div>
        </div>
        </div>
        
      </div>
      <!-- ----------------------------Chart------------------------ -->
      <div class="chart">
      </div>
      <!-- ---------------------------bar-------------------------------- -->
      <div class="bar">
      <canvas id="BarChart" aria-label="chart" role="img" height="150" width="270"></canvas>
        <script>
          var ctx = document.getElementById("BarChart").getContext("2d");

let Label = ["City","Mountain","Culture","Beach","Safari","History","Island","Nature","River","Urban"];
let Data = [50,23,43,45,60,20,70,34,55,10];
let Bg_Color = ["#be506e","#a159da","#da59d3","#7759da","#5990da","#59ceda","#59da96","#83da59","#bcda59","#dab359"];

var BarChart = new Chart(ctx,{
    type: "bar",
    data:{

        labels: Label,
        datasets: [
            {
                label: 'Revenew $',
                data: Data,
                backgroundColor: Bg_Color,
                borderColor: ["black"],
                borderWidth: 2,
            },
        ],
    },
    options: {
        resposive: true,
        layout:{
            padding:{
                left: 10, right: 40,
                height: 300,
                width: 400,

            },
        },
    },
    tooltips: {
        enabled: true,
        titleFontSize: 30,
    },
});
        </script>
      </div>
      
      <!-- ------------------------------graph--------------------------------- -->
      <div class="graph">
      <canvas id="Line" aria-label="chart" role="img" height="160" width="570"> </canvas>
      <script>
      const xValues = [10,20,30,40,50,60,70,80,90,100];

new Chart("Line", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      data: [50,23,43,45,60,20,70,34,55,10],
      borderColor: "red",
      fill: false
    },{
      data: [55,35,65,45,60,40,70,24,15,10],
      borderColor: "green",
      fill: false
    },{
      data: [20,70,34,55,10,65,45,60,40,70],
      borderColor: "blue",
      fill: false
    }]
  },
  options: {
    legend: {display: false}
  }
});
</script>
      </div>
      
      </div>
      
      
      <!----------------------------------Footer---------------------------->
      <div class="footer item4">
        <div class="container-footer">
          <div class="row">
            <div class="footer-col">
              <img src="Images/logo-new.png" alt="" class="logo" />
            </div>
            <div class="footer-col">
              <h4>Company</h4>
              <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Our services</a></li>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>get help</h4>
              <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Payment Options</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>Follow us</h4>
              <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- --------------------------------------------------weatherpopup--------------------------------------------------------------- -->
    <!-- <div class="weather-popup">
      <div class="weather-header">
        <p class="weather-details">Weather Details</p>
        <button class="close pointer">X</button>
      </div>
      <div class="weather-container">
        <div class="left">
          <p class="day">MONDAY</p>
          <p class="time">12:34</p>
          <div class="icon-temp">
            <img
              src="./Icons/temperature-icon.png"
              alt="icon"
              class="temperature-icon"
            />
            <p class="weather-temp">24.3°C</p>
          </div>
          <p class="uv">UV index: 1</p>
          <p class="feelslike">Feels like: 24.3°C</p>
        </div>

        <div class="humidity">
          <p class="humidity-text">Humidity</p>
          <div class="progressbar-container">
            <div class="circular-progress">
              <div class="progress-value">0%</div>
            </div>
          </div>
        </div>

        <div class="wind">
          <p class="wind-text">Wind</p>
          <img src="./Icons/wind-mill.gif" alt="icon" class="wind-imgs" />
          <p class="wind-direction">Direction: NNW</p>
          <p class="wind-value">Speed: 24 km/h</p>
        </div>
      </div>

      <div class="weather-search">
        <div class="search2">
          <input class="search-box2" type="text" placeholder="Search" />
          <img src="./Icons/search.png" alt="search" class="pointer" />
        </div>

        <div class="weather2 pointer">
          <img src="./Icons/weather-icon.png" alt="Icon" />
          <div class="details">
            <p class="country">Bangladesh</p>
          </div>
        </div>
      </div>
    </div>
    <script src="WeatherApi.js"></script> -->

  </body>
</html>
