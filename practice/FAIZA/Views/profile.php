<!DOCTYPE html>

<?php
require_once('../Controllers/profileController.php');
$details = detailsRequest_profile('faiza');

$username = $details['username'];
$name = $details['name'];
$email = $details['email'];
$phone = $details['phone'];
$password = $details['pass'];
$image = $details['img'];
$joiningDate = $details['joiningdate'];

if (isset($_POST['update'])) {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $image = $_POST['tempimg'];

    update_details_profile_send($username, $name, $email, $phone, $password, $image);
}






?>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Profile</title>
    <link rel="stylesheet" href="template.css" />
    <link rel="stylesheet" href="profile.css" />
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
                <a href="#"><i class="fa-solid fa-cubes-stacked"></i> Profile</a>
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

            <div class="edit-profile">
                <h3>Edit Profile</h3>
            </div>

            <div class="profile-image">
                <div class="image">
                    <img src=" <?php echo $image ?> " id="image" />
                </div>
                <div class="upload">
                    <input type="file" id="file" class="upper-profile-pic" onchange="loadFile(event)" style="display: none;" />
                    <label for="file" class="upload">Change Profile Picture</label>

                </div>
                <form method="post">
                    <button class="update" name="update">Update</button>
                    <input type="hidden" name="tempimg" id="tempimg" value="<?php echo $image ?>" />

                    <script>
                        var loadFile = function(event) {

                            var image = document.getElementById('image');
                            var value = event.target.files[0]['name'];
                            var total = "./Images/" + value;
                            image.src = total;

                            var tempimg = document.getElementById('tempimg');
                            tempimg.value = total;



                        };
                    </script>


            </div>

            <div class="personal-information">
                <h3>Personal Information</h3>
                <p class="username">Username</p>
                <input type="text" class="text-username" name="username" value="<?php echo $username ?>" required disabled />
                <p class="name">Name</p>
                <input type="text" class="text-name" name="name" value="<?php echo $name ?>" required />
                <p class="email">Email</p>
                <input type="email" class="text-email" name="email" value="<?php echo $email ?>" required />
                <p class="phone">Phone</p>
                <input type="text" class="text-phone" name="phone" value="<?php echo $phone ?>" required />
                <p class="joiningdate">Joining Date</p>
                <input type="text" class="text-joiningdate" name="joiningDate" value="<?php echo $joiningDate ?>" required disabled />
                <p class="password">Password</p>
                <input type="password" class="text-password" name="password" value="<?php echo $password ?>" required />
            </div>
            </form>




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