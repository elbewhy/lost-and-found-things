<?php 
session_start();
include('config.php');

    ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lost And Found Things System</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Masonry CSS -->
<link href="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.css" rel="stylesheet">

   <!-- Bootstrap JS and Popper.js -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Masonry JS -->
     <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"></script>
<style>

body {
  overflow: auto; /* or overflow: visible; */
  } 
  #about {
      font-family: 'Roboto', sans-serif; /* Apply the "Roboto" font family */
      font-size: 18px; /* Adjust the font size */
      line-height: 1.6; /* Adjust the line height for better readability */
      letter-spacing: 0.02em; /* Add a slight letter spacing */
    }

    /* Additional custom CSS for the rest of the "About" section */
    #about h2 {
      font-size: 36px; /* Adjust the heading font size */
      font-weight: bold; /* Set the heading font weight to bold */
      margin-bottom: 20px; /* Add some space below the heading */
    }

    #about p {
      margin-bottom: 15px; /* Add space between paragraphs */
    }

    #about ul {
      margin-bottom: 15px; /* Add space below the list */
    }

    #about li {
      margin-bottom: 5px; /* Add space between list items */
    }
#about {
  margin-bottom: 100px; /* Add a sufficient margin to avoid overlap */
}

  /* Custom CSS for masonry-item elements */
.masonry-item {
  margin-top: 20px;;
  margin-bottom: 10px; /* Add some space between the items */
  border: 1px solid #ccc; /* Add a border to each item */
  border-radius: 8px; /* Round the corners of the items */
  background-color: #f9f9f9; /* Set a background color for the items */
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add a subtle shadow to the items */
  padding: 10px; /* Add some padding inside each item */
}

/* Custom CSS for the item title */
.masonry-item h3 {
  margin-top: 0;
  font-size: 18px;
  font-weight: bold;
}

/* Custom CSS for the item description */
.masonry-item p {
  font-size: 14px;
  line-height: 1.5;
}

/* Custom CSS for images inside the item */
.masonry-item img {
  max-width: 100%;
  height: auto;
  display: block; /* Removes any spacing issues with images */
  border-radius: 8px; /* Round the corners of the images */
}

</style>
  </head>

  <body>

    <!-- Navigation -->
   <?php include('includes/topheader.php');?>

    <!-- Page Content -->
    <div class="container">


     
      <div class="row" style="margin-top: 4%">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <!-- Blog Post -->

        <!-- Sidebar Widgets Column -->
      <?php // include('includes/sidebar.php');?>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <div class="container mt-2">
  <div class="row" id="masonry-grid">
  <div class="col-md-4 masonry-item"><img src="image/Finding things-Luke 11-9.webp" alt=""></div>
    <div class="col-md-4 masonry-item"><img src="image/file-21-1453385220587689800.jpg" alt=""></div>
    <div class="col-md-4 masonry-item"><img src="image/istockphoto-471333229-612x612.jpg" alt=""></div>
    <div class="col-md-4 masonry-item"><img src="image/istockphoto-471374521-612x612.jpg" alt=""></div>
    <div class="col-md-4 masonry-item"><img src="image/istockphoto-172876206-612x612.jpg" alt=""></div>
    <div class="col-md-4 masonry-item"><img src="image/istockphoto-477391857-612x612.jpg" alt=""></div>
    <div class="col-md-4 masonry-item"><img src="image/rename1.jpg" alt=""></div>
    <div class="col-md-4 masonry-item"><img src="image/rename2.jpg" alt=""></div>
    <div class="col-md-4 masonry-item"><img src="image/rename3.png" alt=""></div>
    <div class="col-md-3 masonry-item"><img src="image/rename5.jpg" alt=""></div>
  </div>
    </div>
    <!-- Add more masonry-item divs as needed -->
<br><br><br>
<div class="container p-2">
    <div class="card mt-6">
      <div class="card-body bg-light">
<section id="about" class="section">
  <div class="container">
    <h2>About Lost and Found Things Management System</h2>
    <p>
      Welcome to the Lost and Found Things Management System at Kebbi State University of Science and Technology, Aliero. Our system is designed to help students, faculty, and staff report and reclaim lost items within the university campus.
    </p>
    <p>
      We understand that misplacing belongings can be stressful, and that's why we've created this platform to streamline the process of reporting and retrieving lost items. Whether it's a misplaced textbook, a lost ID card, or any other valuable item, our system is here to assist you in finding and recovering your belongings.
    </p>
    <p>
      How it works:
    </p>
    <ul>
      <li>Report Lost Items: If you've lost something, use our simple reporting form to provide details about the item and the location where you think you might have misplaced it. Our system will log the report and make it available for others to see.</li>
      <li>Find Found Items: Check our regularly updated database of found items to see if your lost belongings have been recovered. We encourage users to actively browse through the found items to claim their lost possessions.</li>
      <li>Reclaim Lost Items: If you find your lost item in our database of found items, you can easily contact the person who found it or visit the designated Lost and Found Office to retrieve your belongings.</li>
    </ul>
    <p>
      Our mission is to provide a convenient and efficient platform that fosters a sense of community responsibility, helping reunite owners with their lost items and promoting a culture of honesty and care within our university community.
    </p>
    <p>
      If you have any questions or need assistance, please don't hesitate to contact our Lost and Found team. Together, we can make a difference in reuniting people with their lost belongings and fostering a supportive campus environment.
    </p>
  </div>
</section>
      </div>
    </div>
</div>

    <!-- Footer -->
      <?php include('includes/footer.php');?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 
</head>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    var masonryGrid = document.getElementById("masonry-grid");
    var masonry = new Masonry(masonryGrid, {
      itemSelector: ".masonry-item",
      columnWidth: ".col-md-4",
      percentPosition: true
    });
  });
</script>
<script>
  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();

      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
      });
    });
  });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>

</html>
