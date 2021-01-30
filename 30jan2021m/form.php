<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php Forms: working with forms</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <h2>User Registrattion form</h2>
    <form action="./processdata.php" method="GET">
      <div class="form-group">
        <label for="name">Your Name:</label>
        <input type="text" class="form-control" id="name" name="fn">
      </div>

      <div class="form-group">
        <label for="age">Your Age:</label>
        <input type="number" class="form-control" id="age" name="age">
      </div>
      
      <div class="form-group">
        <label for="comment">Comment:</label>
        <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
      </div>
      Subjects
      <div class="checkbox">
        <label><input name="subject[]" type="checkbox" value="html">Html</label>
      </div>
      <div class="checkbox">
        <label><input name="subject[]" type="checkbox" value="css">CSS</label>
      </div>
      <div class="checkbox disabled">
        <label><input name="subject[]" type="checkbox" value="php" checked>PHP</label>
      </div>

      Gender
      <div class="radio-inline">
        <label>
          <input type="radio" name="gender" checked value="M"> 
          Male
        </label>
      </div>
      <div class="radio-inline">
        <label><input type="radio" name="gender" value="F"> Female</label>
      </div>

      <div class="form-group">
        <label for="sel1">Select list:</label>
        <select class="form-control" id="sel1" name="sel1">
          <option value="best">Choice 1</option>
          <option value="worst">Choice 2</option>
          <option>3</option>
          <option>4</option>
        </select>
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
</body>
</html>