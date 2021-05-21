<html>
<head>
    
</head>
<body>

@foreach($posts as $post)
  <h2>{{$post['title']}}</h2>
@endforeach

<form action="/registration" method="get">
    <input type="text" name="name">
    <input type="text" name="email">
    <input type="password" name="password">
    <input type="submit">
</form>
</body>
</html>