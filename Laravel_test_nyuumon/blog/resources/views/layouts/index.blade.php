<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ブログ</title>
    <link type="text/css" rel="stylesheet" href="">
</head>
<body>

    <nav>
        <li><a href="/">TOP（ブログ一覧）</a></li>
        @auth
            <li><a href="/mypage/blogs/">マイブログ一覧</a></li>
            <li>
                <form action="/mypage/logout" method="post">
                @csrf
                <input type="submit" value="ログアウト">
                </form>
            </li>
        @else
            <li><a href="{{ route(('login')) }}">ログイン</a></li>
        @endauth
    </nav>

@yield('content')

</body>
</html>
