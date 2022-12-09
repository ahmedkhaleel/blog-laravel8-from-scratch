<!DOCTYPE html>
<title>Laravel</title>
<link href="/app.css" rel="stylesheet">


<body>
    <?php foreach ($posts as $post): ?>
    <article>
        <?= $post; ?>
    </article>
    <?php endforeach; ?>

    </body>
