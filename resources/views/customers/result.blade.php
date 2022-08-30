<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
      #h1a {
        color: green;
    }
    #h1b {
      color: red;
  }
  </style>
</head>
<body>

<div class="container"><br><br>
  <h2><a href="{{route('customers.dashboard')}}">Dashboard</a></h2>
  @php
     $marks = 0;
  @endphp
    @foreach ($res as $k => $qstn)

     @if($k ==0)
       <b>--------------------------------------------------------------------------------------------------------</b>
     @endif
    <div>
      @php
         $did =  ($qstn->Aanswer == $qstn->Qanswer) ? 'h1a' : 'h1b';
      @endphp
    <div class="form-group" id="{{$did}}">
      <label for="email">Question : {{$qstn->questions}}</label><br>
      <label for="pwd">Answer : {{$qstn->Aanswer}}</label>

    </div>
    @php
    if($qstn->Aanswer == $qstn->Qanswer)
    {
        $marks++;
    }

  @endphp

  </div>
    <b>--------------------------------------------------------------------------------------------------------</b>

  @endforeach
   <span id="h1b"><h2>Marks : {{ $marks }}</h2></span>
</div>

</body>
</html>
