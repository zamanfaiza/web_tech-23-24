<!DOCTYPE html>

<?php
require_once('../Controllers/tourManagementController.php');

$tourManagement = table_element_tourManagement();

if (isset($_POST['approve'])) {
    $r = update_database('Approved', $_POST['approve']);

    if ($r) {
        header('Location: tourManagement.php');
    }
}

if (isset($_POST['cancel'])) {
    $r = update_database('Cancel', $_POST['cancel']);

    if ($r) {
        header('Location: tourManagement.php');
    }
}

if (isset($_POST['details-button'])) {
    $activity = get_details($_POST['details-button']);
    show_popup($activity['tourname'], $activity['price'], $activity['location'], $activity['username'], $activity['status'],$activity['packageimage']);
}




?>


<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Tour Management</title>
    <link rel="stylesheet" href="template.css" />
    <link rel="stylesheet" href="tourManagement.css" />
    <script src="https://kit.fontawesome.com/af9a51cad1.js"></script>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="tourManagement.css" />
    <script src="tourManagement.js" defer></script>


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
                <a href="#"><i class="fa-solid fa-cubes-stacked"></i> Tour Management</a>
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
            <div class="tour-requests">

                <main class="table" id="customers_table">
                    <section class="table__header">
                        <h1>Tour Requests</h1>
                    </section>

                    <section class="table__body">
                        <form method='post'>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Tour name </th>
                                        <th>Status </th>
                                        <th>Location </th>
                                        <th>Price </th>
                                        <th>Approve </th>
                                        <th>Cancle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = $tourManagement->fetch_assoc()) {
                                        $statusClass = strtolower($row['status']); // Convert status to lowercase for class name
                                        $disableButtons = ($statusClass === 'approved' || $statusClass === 'cancel') ? 'disabled' : '';
                                    ?>
                                        <tr>
                                            <td><?php echo $row['tourname'] ?></td>
                                            <td class="<?php echo $statusClass; ?>"><?php echo $row['status']; ?></td>
                                            <td><?php echo $row['location'] ?></td>
                                            <td><?php echo $row['price'] ?></td>
                                            <td><button name="approve" class="approve-button <?php echo $disableButtons ?>" value="<?php echo $row['tourname'] ?>">Approve</button></td>
                                            <td><button name="cancel" class="cancel-button <?php echo $disableButtons ?>" value="<?php echo $row['tourname'] ?>">Cancel</button></td>
                                        </tr>
                                    <?php


                                    }
                                    ?>

                                </tbody>
                            </table>
                        </form>
                    </section>
                </main>
            </div>


            <div class="tour-plans">
                <h1>Tour Plans</h1>
                <div class="container2">
                    <div class="slider-wrapper">
                        <button id="prev-slide" class="slide-button material-symbols-rounded">
                            chevron_left
                        </button>
                        <div class="image-list">

                            <?php
                            $activities = table_element_tourManagement2();
                            while ($activity = mysqli_fetch_assoc($activities)) { ?>
                                <div class="image-item">
                                    <div class="image">
                                        <img src="<?php echo $activity['packageimage']; ?> " alt="<?php echo $activity['packageimage']; ?>" class="image-size">
                                    </div>

                                    <div class="text2">
                                        <h4><?php echo $activity['tourname']; ?></h4>
                                        <form method="post"><button class="details-button" name="details-button" value="<?php echo $activity['tourname']; ?>">Details</button></form>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                        <button id="next-slide" class="slide-button material-symbols-rounded">
                            chevron_right
                        </button>
                    </div>
                    <div class="slider-scrollbar">
                        <div class="scrollbar-track">
                            <div class="scrollbar-thumb"></div>
                        </div>
                    </div>
                </div>


            </div>


        </div>

        <?php
        function show_popup($packagename, $price, $location, $traveler, $status,$image )
        { ?>
            <div class="popup-details">
                <div class="popup-details-content">
                    <div class="popup-details-header">
                        <h2>Details</h2>
                        <button class="close-button material-symbols-rounded">close</button>
                    </div>
                    <div class="popup-details-body">
                        <div class="popup-details-image">
                            <img src="<?php echo $image; ?>" alt="" class="popup-details-image-size" />
                        </div>
                        <div class="popup-details-text">
                            <h3>Package Name</h3>
                            <p> <?php echo $packagename; ?> </p>
                            <h3>Price</h3>
                            <p><?php echo $price; ?></p>
                            <h3>Location</h3>
                            <p><?php echo $location; ?></p>
                            <h3>Traveler</h3>
                            <p><?php echo $traveler; ?></p>
                            <h3>Status</h3>
                            <p><?php echo $status; ?></p>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>



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

    <script src="http://localhost/Faiza/Views/tourManagement.js"></script>
</body>

</html>