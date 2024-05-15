<?php

// Database File Connect
require_once "dbConnection.php";

// Select Database Table
$query = "SELECT * FROM blogs";

// Query All Data From table
$data = $mysqli->query($query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Php Blog Post | Home</title>
  <link rel="stylesheet" href="./assets/style.css">
  <!-- fontawesome CDN -->
  <script src="https://kit.fontawesome.com/3b03bde672.js" crossorigin="anonymous"></script>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Daisy Ui CDN -->
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
  <!----------------------------- Header Here ------------------------------------>
  <header class="bg-base-200">
    <div class="navbar container mx-auto">
      <div class="navbar-start">
        <div class="dropdown">
          <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
            </svg>
          </div>
          <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
            <li><a href="#">Home</a></li>
            <li><a href="#">All Blogs</a></li>
          </ul>
        </div>
        <a href="#"><img class="w-[60px] rounded-full" src="./assets/images/logo.png" alt=""></a>
      </div>
      <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
          <li><a>Home</a></li>
          <li><a>All Blogs</a></li>
        </ul>
      </div>
      <div class="navbar-end">
        <a href="addBlog.php" class="btn btn-primary">Create New</a>
      </div>
    </div>
  </header>
  <!----------------------------- Header End ------------------------------------>


  <!----------------------------- Blogs Section Start ------------------------------------>

  <div class="py-20">
    <h2 class="text-center text-4xl font-mono underline underline-offset-8 pb-5">Our Blogs</h2>
    <div class="container mx-auto grid grid-cols-3 gap-7">
      <!-- Data Fetch from Database -->
      <?php

      while ($res = $data->fetch_assoc()) {

        echo '<div class="card w-full bg-base-100 shadow-xl hover:border border-primary duration-300">';
        echo '  <figure>
          <img src="' . $res['image'] . '" alt="Shoes" class="rounded-xl" />
        </figure>';

        echo '<div class="p-2 pb-5 pt-0 items-center text-center">';
        echo '<div class="flex justify-between items-center w-full pt-2">';
        echo '<p class="text-sm flex items-center gap-2">'. "<i class='fa-regular fa-user'></i>" . $res['author'] . '</p>';
        echo '<p class="text-sm flex items-center gap-2">'. '<i class="fa-regular fa-calendar-days"></i>' . $res['date'] . '</p>';
        echo '</div>';
        echo '<h2 class="text-white font-bold py-3 text-center text-2xl">' . $res['title'] . '</h2>';
        echo '<p class="text-center">' . $res['description'] . '</p>';
        echo '<div class="card-actions">';
        echo ' <button class="btn btn-primary mx-auto mt-5">Learn more</button>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
      }

      ?>
    </div>
  </div>

  <!----------------------------- Blogs Section End ------------------------------------>


</body>

</html>