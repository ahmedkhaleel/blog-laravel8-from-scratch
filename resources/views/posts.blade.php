<!DOCTYPE html>
<title>Laravel</title>
<link href="/app.css" rel="stylesheet">


<body>
    <?php foreach ($posts as $post): ?>
    <article>
        <h1>
            <a href="posts/<?= $post->slug ?>"><?= $post->title ?></a>
        </h1>
        <div><?= $post->excerpt ?></div>
    </article>
    <?php endforeach; ?>

    </body>
