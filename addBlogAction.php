<?php

require_once "dbConnection.php";

echo "<pre>";

var_dump($_POST);

if (isset($_POST['submit'])) {

    $title = mysqli_real_escape_string($mysqli, $_POST['title']);
    $author = mysqli_real_escape_string($mysqli, $_POST['author']);
    $date = mysqli_real_escape_string($mysqli, $_POST['date']);
    $image = mysqli_real_escape_string($mysqli, $_POST['image']);
    $description = mysqli_real_escape_string($mysqli, $_POST['description']);

    $setData = "INSERT INTO blogs (title, description, date, author, image) VALUES ('$title', '$description', '$date', '$author', '$image')";

    $query = $mysqli->query($setData);

    echo "Blog Create Successful!";
    echo "<a href='index.php'>See Blogs</a>";

} else {
    echo "Error";
}
