<template>
  <section class="registration">

    <form action="index.php" method="GET" class="form-login">
      <div class="content__form">
        <h1>
          Регистрация
        </h1>
        <input type="text" name="d" placeholder="Введите имя">
        <input type="email" name="a" placeholder="Введите свою почту">
        <input type="password" name="b" placeholder="Введите пароль">
        <input type="password" name="c" placeholder="Подтвердите пароль">
        <button class="button__registration">
          Зарегистрироваться
        </button>
        <router-link to="/authorization">Войти в аккаунт</router-link>
      </div>
    </form>


  </section>
</template>

<style>
*{
  padding:0;
  margin: 0;
}

.registration{
  width:65.500vw;
  margin:0 auto;
  margin-top: 9vw;
}

.form-login{
  margin: 0 auto;
  width: 45vw;
  border: 0.156vw solid #5085A5;
  padding:0.677vw;
  border-radius:1.2vw;
  background-color: rgba(210, 210, 220, 0.15);
}

.content__form{
  display:flex;
  flex-direction: column;
}

h1{
  margin:0 auto;
  width:26.823vw;
  padding: 1.8vw 0vw 1.8vw 0vw;
  font-size:2.5vw;
}

input {
  margin:0 auto;
  height:3.5vw;
  width:83%;
  margin-bottom:1.5vw;
  border-radius: 0.9vw;
  background: white;
  border: 0px;
  padding-left:0.52vw;
  font-size:1.5vw;
  outline:none;
}

.button__registration{  margin:0 auto;width:20vw; height:2.8vw;margin-bottom:0.8vw;border-radius: 20px;border:0px;  background-color: #8FC1E3;font-weight: bold;font-size: 1.5vw;
}
.button__registration:hover {
  color: #fff;
  background-color: #5085A5;
  -webkit-transition: all .2s linear;
  -moz-transition: all .2s linear;
}
.content__form a{
  color:orange;
  font-weight:bold;
  font-size:0.8VW;
  text-decoration:none;
}
</style>