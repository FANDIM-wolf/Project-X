
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <title>Autorzation</title>
    <link rel="stylesheet" href="{{asset('./css/style.css')}}" type="text/css">
</head>
<body>
    <section class="registration">

        <form action="/registration" method="post" class="form-login">
        @csrf()
          <div class="content__form">
            <h1>
              Регистрация
            </h1>
            <input type="text" name="name" placeholder="Введите имя">
            <input type="email" name="email" placeholder="Введите свою почту">
            <input type="password" name="password" placeholder="Введите пароль">
            <input type="password" name="password_check" placeholder="Подтвердите пароль">
            <button type="submit"class="button__registration">
              Зарегистрироваться
            </button>
            <a href="/authorization">Войти в аккаунт</a>
          </div>
        </form>
    
    
      </section>
   
</body>
</html>