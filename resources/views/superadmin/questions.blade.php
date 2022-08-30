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
  <p>The .table-bordered class adds borders to a table:</p>
  <a href="{{route('question-add')}}">Add</a>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Sl. No.</th>
        <th>Question</th>
        <th>Option 1</th>
        <th>Option 2</th>
        <th>Option 3</th>
        <th>Option 4</th>
        <th>Answer</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($res as $k => $response)
      <tr>
        <td>{{$k+1}}</td>
        <td>{{$response->questions}}</td>
        <td>{{$response->option1}}</td>
        <td>
          {{$response->option2}}
        </td>
        <td>{{$response->option3}}</td>
        <td>{{$response->option4}}</td>
        <td>{{$response->answer}}</td>
        <td>
            <a href="delete/{{$response->id}}">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
