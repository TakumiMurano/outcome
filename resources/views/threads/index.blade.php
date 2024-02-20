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
        <div class="threads">
            @foreach ($threads as $thread)
                <div class="thread">
                    <h2 class="title">
                        <a href="/threads/{{ $thread->id }}">{{ $thread->title }}</a>
                    </h2>
                    <p class="foreignId">{{ $thread->topic_id }} {{ $thread->competition_id }}</p>
                    <p class="comment">{{ $thread->comment }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>