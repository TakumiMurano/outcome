<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Football掲示板プレミア</h1>
        <a href="/threads/create">スレッドを作成しよう！</a>
        <div class="threads">
            @foreach ($threads as $thread)
                <div class="thread">
                    <h2 class="title">
                        <a href="/threads/{{ $thread->id }}">{{ $thread->title }}</a>
                    </h2>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $threads->links() }}
        </div>
    </body>
</html>