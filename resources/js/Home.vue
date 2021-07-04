<template>
  <div class="head">
    <header>
      <section class="header-line">
        <h1 class="header-line__h1">FreePoint</h1>
        <div class="header-line__block">
          <input type="text" placeholder="Поиск" class="header-line__input">
          <button class="header-line__btn">
            Вход
          </button>
        </div>
      </section>
    </header>

    <div class="conteiner">

      <aside class="conteiner__aside">

        <ul class="conteiner__ul">
          <li class="conteiner__li">Выберите категорию</li>
          <li class="conteiner__li">Погода</li>
          <li class="conteiner__li">Новости</li>
          <li class="conteiner__li">Спорт</li>
          <li class="conteiner__li">Избранное</li>
        </ul>

      </aside>

      <section class="content">
        <article class="post">
          <img src="@/assets/images/house.png" alt="house" class="post__img">
          <div class="post__block">
            <h3 class="post__h3">Заголовокh esdjx csesdcjs d ewjksdfvs kjsd ksfnc ejd edjfc jedf jdf sjsdj jsd jds  sdk jd wjsd </h3>
            <div class="post__block1">
              <div>
                <img src="@/assets/images/like.png" alt="star" class="post__star" @click="counter++">
                <img src="@/assets/images/comments.png" alt="comment" class="post__comment">
              </div>
              <p class="post__category">Категория</p>
            </div>

          </div>
        </article>
        <article class="post">
          <img src="@/assets/images/house.png" alt="house" class="post__img">
          <div class="post__block">
            <h3 class="post__h3">Заголовокh esdjx csesdcjs d ewjksdfvs kjsd ksfnc ejd edjfc jedf jdf sjsdj jsd jds  sdk jd wjsd </h3>
            <div class="post__block1">
              <div>
                <img src="@/assets/images/like.png" alt="star" class="post__star" >
                <img src="@/assets/images/comments.png" alt="comment" class="post__comment">


                <div @click="show = !show" :class="{active: show}">
                  <svg  version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g> <g>
		<polygon fill="#000" points="512,197.816 325.961,185.585 255.898,9.569 185.835,185.585 0,197.816 142.534,318.842 95.762,502.431
			255.898,401.21 416.035,502.431 369.263,318.842 		"/> </g></g> <g> </g> <g></g> <g></g> <g></g><g></g><g></g> <g></g> <g></g><g></g> <g></g>  <g></g>  <g></g>  <g></g>  <g></g>  <g></g>
</svg>
                </div>

              </div>
              <p class="post__category">Категория</p>
            </div>

          </div>
        </article><article class="post">
        <img src="@/assets/images/house.png" alt="house" class="post__img">
        <div class="post__block">
          <h3 class="post__h3">Заголовокh esdjx csesdcjs d ewjksdfvs kjsd ksfnc ejd edjfc jedf jdf sjsdj jsd jds  sdk jd wjsd </h3>
          <div class="post__block1">
            <div>
              <img src="@/assets/images/like.png" alt="star" class="post__star" @click="counter++">
              <img src="@/assets/images/comments.png" alt="comment" class="post__comment">
            </div>
            <p class="post__category">Категория</p>
          </div>

        </div>
      </article>
      </section>
    </div>
    <div>
      <footer>
        <section class="footer-line">
          <span class="footer-line__h2">© 4_Free_Team, 2021</span>
          <nav class="footer-line__nav">
            <link-router to="#" class="footer-line__nav1">Новости</link-router>
            <link-router to="#" class="footer-line__nav1">Спорт</link-router>
            <link-router to="#" >Погода</link-router>
          </nav>
          <h2 class="footer-line__h2">FreePoint</h2>

        </section>
      </footer>
    </div>
  </div>

</template>

<script>
export default {
  name: "home",
  data(){
    return {
      show: false,
    }
  },

};

</script>

<style>
*{
  padding: 0;
  margin: 0;
}
header{
  background-color: black;
  width: 100%;
  position:fixed;
  top:0;
  z-index: 100;
}

.header-line{
  display: flex;
  width:100%;
  justify-content: space-between;
  align-items: center;
}
.content p{font-size:1vw;}
.header-line__h1{
  color: aliceblue;
  padding: 1vw;
  font-size:2vw;
}

.header-line__block{
  display: flex;
  align-items: center;
}

.header-line__input{
  font-size:1vw;
  margin-right: 0.5vw;
  width: 19.791666666666664vw;
  height: 2vw;
  border-radius: 0.52vw;
  border-color: #FFFFFF;
  outline: none;
  border: 0;
  padding-left: 1vw;

}

.header-line__btn {
  font-size:1vw;
  width: 10vw;
  height: 2vw;
  border-radius: 1vw;
  background-color: #8FC1E3;
  border: none;
  margin-right: 1vw;
}

.header-line__btn:hover {
  color: #fff;
  background-color: #5085A5;
  -webkit-transition: all .2s linear;
  -moz-transition: all .2s linear;
}

.conteiner{
  display: flex;
  margin-top: 5vw;
  width: 90%;
  min-height: 80.53vh;
  margin: 0 auto;
  margin-top: 5vw;
  margin-bottom:0.5vw;
}

.conteiner__aside{
  border-radius: 0.5vw;
  top: 3vw;
  margin: 0;
  padding: 3vw;
  width: 15vw;
  background-color: #f1f1f1;
  position: sticky;
  height: 50%;
  overflow: auto;
  color: #000000;
}
aside ul li{
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: baseline;
  font-size:1.2vw;
  width: 13.020833333333334vw;
}

aside ul li:first-child{font-weight: bold;}
aside ul li:last-child{font-weight: bold;}


.conteiner__ul{
  list-style-type: none;

}

.conteiner__li{
  padding-bottom: 1vw;
}

.content{
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-left: 2%;
  width: 100%;
}

.post{
  display: flex;
  flex-direction: column;
  margin-right: 15vw;
  background-color: #E5E5E5;
  margin-bottom: 3vw;
  border-radius:0.5vw;
}

.post__img{
  max-height: 25vw;
  border-radius: 0.5vw 0.5vw 0vw 0vw;
}

.post__block{
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  padding:0.5vw;
  min-height: 10vw;
  max-width: 23vw;

}

.post__block1{
  display: flex;
  justify-content: space-between;
}

.post__comment{
  max-width: 2vw;
}

.post__star{
  max-width: 2vw;
  margin-right: 1vw;;
}

.post__category{
  color: #ACA3A3;
}


footer{
  width: 100%;
  background-color: black;
  z-index: 0;
}
.footer-line{
  display: flex;
  width:100%;
  justify-content: space-between;
  align-items: center;
}

.footer-line__nav{
  color: aliceblue;
  font-size:1vw;
}

.footer-line__nav1{
  padding-right: 1vw;
}

.footer-line__h2{
  color: aliceblue;
  padding: 1vw;
  font-size:2vw;
}
.active svg polygon{
  fill: #5085A5;
}


</style>