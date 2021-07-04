<template>
  <div class="authorization">

    <form action="index.php" method="GET" class="form-login">
      <div class="content__form">
        <h1>
          Вход в систему
        </h1>
        <input type="email" name="a" placeholder="Введите свою почту">
        <input type="password" name="b" placeholder="Введите пароль">
        <button class="button__login">
          Войти
        </button>
        <router-link to="/registration">Создать аккаунт</router-link>
      </div>
    </form>

  </div>
</template>

<style>

*{margin:0;}
.authorization{
  margin:0 auto;
  margin-left:auto;
  margin-right: auto;
  width:55.500vw;
  margin-top:14vw;
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
  font-size:2.5vw;
  padding: 1.8vw 0vw 1.8vw 0vw;
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

.button__login{width:14vw; height:2.4vw;;border-radius: 20px;border:0px;  background-color: #8FC1E3;font-weight: bold;margin:0 auto;margin-bottom:0.8vw; font-size: 1.5vw;
}
.button__login:hover {
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