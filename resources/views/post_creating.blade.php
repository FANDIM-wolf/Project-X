<html>
<head>
    
</head>
<body>



<form action="/add_post" method="post" enctype="multipart/form-data">
@csrf()
    <input type="text" name="title">
    <textarea type="text" name="description"></textarea>
    <input type="text" name="category">
    <br>
    <input type="text" name="location">
    <br>
    <br>
    <input type="file" name="image">
    <br>
    <input type="submit">

</form>



</body>
</html>