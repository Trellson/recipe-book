
<?php
// Include the database connection file
include 'connect.php';

// Check if the form has been submitted
if(isset($_POST['submit'])){
  // Get the form data
  $title = $_POST['title'];
  $description = $_POST['description'];
  $ingredients = $_POST['ingredients'];
  $instructions = $_POST['instructions'];
  $category = $_POST['category'];
  $preparationTime = $_POST['preparationTime'];
  $cookTime = $_POST['cookTime'];
  $favorite = isset($_POST['favorite']) ? 1 : 0;

  // TODO: Insert recipe into database

  // Insert the recipe into the database
  $sql="enter recipe into `recipes_crud`(title, description, ingredients, instructions, category, preparationTime, cookTime, favorite)
  values('$title','$description','$ingredients','$instructions','$category','$preparationTime','$cookTime','$favorite')";
  $result=mysqli_query($con,$sql);

  // Check if the query was successful
  if($result){
    echo "Data inserted correctly";
  }else{
    echo "something went wrong.";
    die(mysqli_error($con));
  }
}
?>


<!doctype html>
<html lang="ar" dir="rtl">

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
        <label for="category">Category</label>
        <input type="text" class="form-control" id="category" name="category" placeholder="Recipe Category" required>
      </div>
      <div class="form-group">
        <label for="preparationTime">Preparation Time (minutes)</label>
        <input type="number" class="form-control" id="preparationTime" name="preparationTime" placeholder="Preparation Time" required>
      </div>
      <div class="form-group">
        <label for="cookTime">Cook Time (minutes)</label>
        <input type="number" class="form-control" id="cookTime" name="cookTime" placeholder="Cook Time" required>
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="favorite" name="favorite">
        <label class="form-check-label" for="favorite">Add to Favorites</label>
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>


</body>

</html>