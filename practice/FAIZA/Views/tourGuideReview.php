<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Guide Reviews</title>
    <link rel="stylesheet" href="template.css" />
    <link rel="stylesheet" href="tourGuideReviews.css">
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
          <a href="#"><i class="fa-solid fa-cubes-stacked"></i> Ratings</a>
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
 

    <main>
        <div class="summary">
            <h2>Review Summary</h2>
            <p>Overall Rating: 4.5 Stars</p>
            <p>Total Reviews: 120</p>
        </div>
        
        <div class="filters">
            <label for="tourType">Filter by Tour Type:</label>
            <select id="tourType" name="tourType">
                <option value="all">All Tours</option>
                <option value="city">City Tour</option>
                <option value="historical">Historical Tour</option>
            </select>
            <input type="text" placeholder="Search Reviews" id="search-reviews">
            <button type="button" onclick="searchReviews()">Search</button>
        </div>

        <div class="review-list">
            <h3>Recent Reviews</h3>
            <div class="review-item">
                <p>Date: 2024-05-15</p>
                <p>Tour Name: City Landmarks</p>
                <p>Rating: ★★★★☆</p>
                <p>Review: Great tour, very informative and friendly guide!</p>
                <form action="submitResponse.php" method="post">
                    <input type="hidden" name="review_id" value="123">
                    <textarea name="response" placeholder="Type your response here..." required></textarea>
                    <button type="submit">Submit Response</button>
                </form>
            </div>
            <div class="review-item">
                <p>Date: 2024-05-10</p>
                <p>Tour Name: Historic Downtown</p>
                <p>Rating: ★★★☆☆</p>
                <p>Review: Interesting, but the guide seemed rushed.</p>
                <form action="submitResponse.php" method="post">
                    <input type="hidden" name="review_id" value="124">
                    <textarea name="response" placeholder="Type your response here..." required></textarea>
                    <button type="submit">Submit Response</button>
                </form>
            </div>
            <div class="review-item">
                <p>Date: 2024-05-08</p>
                <p>Tour Name: River Views</p>
                <p>Rating: ★★★★★</p>
                <p>Review: Fantastic tour, very relaxing and beautiful sights!</p>
                <form action="submitResponse.php" method="post">
                    <input type="hidden" name="review_id" value="125">
                    <textarea name="response" placeholder="Type your response here..." required></textarea>
                    <button type="submit">Submit Response</button>
                </form>
            </div>
        </div>
    </main>

</body>
</html>
