<html>
<head>
    
</head>
<body>

@foreach($posts as $post)
  <a href="/post/{{$post['id']}}">{{$post['title']}}</a>
  <br>
  <h2>{{$post['created_at']}}</h2>
  <br>
@endforeach


<form action="/registration" method="get">
    <input type="text" name="name">
    <input type="text" name="email">
    <input type="text" name="password">
    <input type="text" name="password_check">
    <input type="submit">
</form>
</body>
</html>