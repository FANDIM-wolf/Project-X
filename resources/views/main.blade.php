

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <title>Autorzation</title>

    <link rel="stylesheet" href="{{asset('./css/main.css')}}" type="text/css">
</head>
<body>
    <div class="head">
        <header>
          <section class="header-line">
            <h1 class="header-line__h1">FreePoint</h1>
    
            <div class="header-line__block">
            <form action="/search" method="get">
          @csrf()
          
          
              <input  type="text" name="search" placeholder="Поиск" class="header-line__input">
              <input type="submit">
              </form>
              <button  style="text-decoration:none; color:white;" class="header-line__btn">
              <a href="/authorization">
                Вход
              </a>    
              </button>
             
            </div>
          </section>
        </header>
    
        <div class="conteiner">
    
          <aside class="conteiner__aside">
    
            <ul class="conteiner__ul">
              <li class="conteiner__li">Выберите категорию</li>
              <a href="/weather" class="conteiner__li">Погода</a>
              <a href="/news"class="conteiner__li">Новости</a>
              <a href="/sport"class="conteiner__li">Спорт</a>
              <a href="/hot_news" class="conteiner__li">Топ</a>
            </ul>
    
          </aside>
    
          <section class="content">
          @foreach($posts as $post)
            <article class="post">
             <a href="/post/{{$post['id']}}"> <img src="/images/{{$post['image']}}" alt="house" class="post__img"></a>
              <div class="post__block">
              <h3  class="post__h3"><a href="/post/{{$post['id']}}">{{$post['title']}}</a> </h3>
                <div class="post__block1">
                  <div>
                    
                    <img src="images/comments.png" alt="comment" class="post__comment">
    
                  </div>
                  <p class="post__category">{{$post['category']}}</p>
                </div>

              </div>
            </article><article class="post">
            @endforeach
            
          
          </section>
        </div>
        <div>
          <footer>
            <section class="footer-line">
              <span class="footer-line__h2">© 4_Free_Team, 2021</span>
              <nav class="footer-line__nav">
                <link-router to="/news" class="footer-line__nav1">Новости</link-router>
                <link-router to="/sport" class="footer-line__nav1">Спорт</link-router>
                <link-router to="/weather" >Погода</link-router>
              </nav>
              <h2 class="footer-line__h2">FreePoint</h2>
    
            </section>
          </footer>
        </div>
      </div>
    
    </template>
    
</body>
</html>