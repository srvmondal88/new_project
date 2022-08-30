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

<div class="container"><br>
  <h2><a href="{{route('customers.dashboard')}}">Dashboard</a></h2><br><br>
  <form action="{{route('ans-store')}}" method="post">
    @csrf
    @foreach ($res as $qstn)
    <div>
    <div class="form-group">
      <input type="hidden" name="qstn[]" value="{{$qstn->id}}">
      <label for="email">{{$qstn->questions}}</label>

    </div>
    <div class="form-group">
      <input type="radio" class="form-check-input" id="radio1" name="oanswer.{{$qstn->id}}" value="{{$qstn->option1}}">
      <label for="pwd">{{$qstn->option1}}</label>


    </div>
    <div class="form-group">
      <input type="radio" class="form-check-input" id="radio1" name="oanswer.{{$qstn->id}}" value="{{$qstn->option2}}">
      <label for="pwd">{{$qstn->option2}}</label>


    </div>
    <div class="form-group">
      <input type="radio" class="form-check-input" id="radio1" name="oanswer.{{$qstn->id}}" value="{{$qstn->option3}}">
      <label for="pwd">{{$qstn->option3}}</label>


    </div>
    <div class="form-group">
      <input type="radio" class="form-check-input" id="radio1" name="oanswer.{{$qstn->id}}" value="{{$qstn->option4}}">
      <label for="pwd">{{$qstn->option4}}</label>


    </div>
    <b>--------------------------------------------------------------------------------------------------------</b>
  </div>
  @endforeach
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
