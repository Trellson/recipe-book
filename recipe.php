<?php
// Include the database connection file
include 'connect.php';

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Get the form data
  $title = $_POST['title'];
  $description = $_POST['description'];
  $ingredients = $_POST['ingredients'];
  $instructions = $_POST['instructions'];
  $catagory = $_POST['catagory'];
  $favorite = isset($_POST['favorite']) ? 1 : 0;

  // TODO: Insert recipe into database

  // Insert the recipe into the database
  $sql = "INSERT INTO `recipes` (title, description, ingredients, instructions, catagory, favorite)
  VALUES ('$title','$description','$ingredients','$instructions','$catagory','$favorite')";
  $result = mysqli_query($con, $sql);

  // Check if the query was successful
  if ($result) {
    echo "Data inserted correctly";
  } else {
    echo "something went wrong.";
    die(mysqli_error($con));
  }
}
?>


<!doctype html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css">

  <title>Recipe book</title>
</head>

<body>
  <div class="container my-5">
    <form method="post">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Recipe Title" required>
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" placeholder="Recipe Description" rows="3" required></textarea>
      </div>
      <div class="form-group">
        <label for="ingredients">Ingredients</label>
        <textarea class="form-control" id="ingredients" name="ingredients" placeholder="Ingredients List" rows="5" required></textarea>
      </div>
      <div class="form-group">
        <label for="instructions">Instructions</label>
        <textarea class="form-control" id="instructions" name="instructions" placeholder="Recipe Instructions" rows="5" required></textarea>
      </div>
      <div class="form-group">
        <label for="catagory">Catagory</label>
        <select id="catagory" name="catagory">
          <option value="Breakfast">Breakfast</option>
          <option value="Lunch">Lunch</option>
          <option value="Dinner">Dinner</option>
          <option value="Snack">Snack</option>
        </select>
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="favorite" name="favorite">
        <label class="form-check-label" for="favorite">Add to Favorites</label>
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>

</html>