

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <title>Autorzation</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <div class="authorization">

        <form action="/authorization" method="post" class="form-login">
        @csrf()
          <div class="content__form">
            <h1>
              Вход в систему
            </h1>
            <input type="email" name="email" placeholder="Введите свою почту">
            <input type="password" name="password" placeholder="Введите пароль">
            <button class="button__login">
              Войти
            </button>
            <a to="/registration">Создать аккаунт</a>
          </div>
        </form>
    
      </div>
    
   
</body>
</html>