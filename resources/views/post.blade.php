
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <title>Autorzation</title>

  <!--  <link rel="stylesheet" href="{{asset('./css/main.css')}}" type="text/css"> -->
  <!--  <link rel="stylesheet" href="{{asset('./css/style.css')}}" type="text/css">-->
  <!--  <link rel="stylesheet" href="{{asset('./css/style_main.css')}}" type="text/css">-->
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
              <button href="authorization" class="header-line__btn">
                Вход
              </button>
             
            </div>
          </section>
        </header>
    
        <div class="conteiner">
    
          
    
          <section class="content">
         
            <article class="post">
             <a href="/post/{{$value['id']}}"> <img src="/images/{{$value['image']}}" alt="house" class="post__img"></a>
              <div class="post__block">
              <h3  class="post__h3"><a href="/post/{{$value['id']}}">{{$value['title']}}</a> </h3>
                <div class="post__block1">
                  <div>
                    


                  </div>
                </div>
                <h2>{{$value['description']}}</h2>
                <h2>views:{{$value['views']}}</h2>
                <h2>likes:{{$value['likes']}}</h2>
                <form method="post" action="/post/{{ $value['id']}}/like">
                @csrf()
                  <input type="submit">
              </form> 
               
              </div>
            </article><article class="post">
          
            @foreach($value->comment as $value->comment)
            <br>
            {{$value->comment->name_of_user}}
            <br>
            {{$value->comment->content_of_comment}}
            <br>
            @endforeach 
            <form  method="post" action="/post/{{ $value['id'] }}/comment">
            @csrf()
          <textarea name="content_of_comment">
          </textarea>
            <input type="submit">
            </form>
          
          </section>
        </div>
        <div>
          <footer>
            <section class="footer-line">
              <span class="footer-line__h2">© 4_Free_Team, 2021</span>
              <nav class="footer-line__nav">
                <link-router href="/news" class="footer-line__nav1">Новости</link-router>
                <link-router href="/sport" class="footer-line__nav1">Спорт</link-router>
                <link-router href="/weather" >Погода</link-router>
              </nav>
              <h2 class="footer-line__h2">FreePoint</h2>
    
            </section>
          </footer>
        </div>
      </div>
    
    </template>
    
</body>
</html>