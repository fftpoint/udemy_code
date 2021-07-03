@extends('layouts.index')

@section('content')

<h1>ブログ一覧</h1>

<a href="/mypage/blogs/create">ブログ新規登録</a>
<hr>

<table>
    <tr>
        <th>ブログ名</th>
    </tr>

    @foreach ($blogs as $blog)
    <tr>
        <td>
            <a href="{{ route('mypage.blog.edit', $blog) }}">{{ $blog->title }}</a>
        </td>
        <td>
            <form action="{{ route('mypage.blog.delete', $blog) }}" method="post">
                @csrf @method('delete')
                <input type="submit" value="削除">
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection
