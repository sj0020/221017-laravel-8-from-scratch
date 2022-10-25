<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
<?php foreach($posts as $post) : ?>
    <article>
        {{-- <?php ddd($posts)?> --}}
        <h1>
            <a href="/posts/{{ $post->slug; }}">
                {{ $post->title }}
            </a>
        </h1>

        <p>
            By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
            in <a href="/categories/{{ $post->category->slug}}">{{ $post->category->name }}</a>
        </p>

        <div>
            <?= $post->excerpt;?>
        </div>

    </article>

<?php endforeach; ?>


</body>
</html>
