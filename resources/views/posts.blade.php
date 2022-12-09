<!DOCTYPE html>
<title>Laravel</title>
<link href="/app.css" rel="stylesheet">


<body>
    @foreach ($posts as $post)
        @dd($loop)
    <article>
        <h1>
            <a href="posts/{{$post->slug}}">
                {{$post->title}}
            </a>
        </h1>
        <div>{{$post->excerpt}}</div>
    </article>
    @endforeach

    </body>
