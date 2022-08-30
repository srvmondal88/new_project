<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2><a href="{{route('superadmin-dashboard')}}">Dashboard</a></h2>
  <form action="{{route('store')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="email">Question:</label>
      <input type="text" class="form-control" name="questions">
    </div>
    <div class="form-group">
      <label for="pwd">Option 1:</label>
      <input type="radio" class="form-check-input" id="radio1" name="oanswer" value="1">
      <input type="text" class="form-control" name="option1">
    </div>
    <div class="form-group">
      <label for="pwd">Option 2:</label>
      <input type="radio" class="form-check-input" id="radio1" name="oanswer" value="2">
      <input type="text" class="form-control" name="option2">
    </div>
    <div class="form-group">
      <label for="pwd">Option 3:</label>
      <input type="radio" class="form-check-input" id="radio1" name="oanswer" value="3">
      <input type="text" class="form-control" name="option3">
    </div>
    <div class="form-group">
      <label for="pwd">Option 4:</label>
      <input type="radio" class="form-check-input" id="radio1" name="oanswer" value="4">
      <input type="text" class="form-control" name="option4">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
