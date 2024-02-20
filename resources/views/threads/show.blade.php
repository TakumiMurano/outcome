<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Threads</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $thread->title }}
        </h1>
        <div class="comments">
                <div class="comment">
                    <p>上から順に新しいコメントが表示されています。</p>    
                </div>
        </div>
        <div class="footer">
            <a href="/">一覧へ</a>
        </div>
    </body>
</html>