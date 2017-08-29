<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
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
          <li>{{ $skill->language }} &#160 {{ $skill->rating }} &#160 {{ $skill->comment }}</li>
      </ul>
    </div>
  </body>
</html>
