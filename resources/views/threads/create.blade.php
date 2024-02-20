<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Thread</title>
    </head>
    <body>
        <h1>スレッドを作成して語り合おう！</h1>
        <form action="/threads" method="POST">
            @csrf
            <div class="title">
                <h2>スレッドタイトル</h2>
                <input type="text" name="thread[title]" placeholder="タイトル"/>
            <input type="submit" value="作成"/>
        </form>
        <div class="footer">
            <a href="/">一覧へ</a>
        </div>
    </body>
</html>