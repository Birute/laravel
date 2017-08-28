<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
      body{
        background-color: #d5dbe5;
        font-family: 'Comic Sans MS', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
      }
      div{
        background-color: pink;
        margin: 50px auto;
        text-align: center;
        width: 600px;
        text-align: left;
        padding:20px;
        border: 5px double red;
        border-radius: 20;
      }
    </style>
  </head>
  <body>
    <div>
      <h1>{{ $title }}</h1>
      <ul>
        @foreach ($skills as $skill)
          <li>{{ $skill->language }} &#160 {{ $skill->rating }} &#160 {{ $skill->comment }}</li>
        @endforeach
      </ul>
    </div>
  </body>
</html>
