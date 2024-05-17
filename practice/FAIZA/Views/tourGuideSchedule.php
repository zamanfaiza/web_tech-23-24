<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="template.css" />
    <link rel="stylesheet" href="tourGuideSchedule.css" />
    <script src="https://kit.fontawesome.com/af9a51cad1.js"></script>
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
          <a href="#"><i class="fa-solid fa-cubes-stacked"></i> Schedule</a>
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

      <div class="heading"><h1>Your Upcoming Tours</h1></div>
      <div class="scheduletable">
      <table border="2">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Tour Name</th>
                    <th>Location</th>
                    <th>Duration</th>
                    <!-- <th>Details</th> -->
                </tr>
            </thead>
            <tbody>
              <?php require_once('../Controllers/Upcoming_Tours_Controller.php');
              while ($row = mysqli_fetch_assoc($list)) {
              ?>
                <tr>
                    <td><?php echo $row['Date'] ?></td>
                    <td><?php echo $row['Time']; ?></td>
                    <td><?php echo $row['Tour_Name'] ?></td>
                    <td><?php echo $row['Location'] ?></td>
                    <td><?php echo $row['Duration'] ?></td>
                    <!-- <td><button onclick="showDetails('Tour1')">View Details</button></td> -->
                </tr>
                <?php 
                }
                ?>
            </tbody>
        </table>

        </div>


      </div>
      <div class="background"></div>
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
  </body>
</html>

    

 


