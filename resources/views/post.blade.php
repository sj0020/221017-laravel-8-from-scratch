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
    <article>
        <h1>{{ $post ->title }} </h1>

        <p>
            <a href="/categories/{{ $post->category->slug}}">{{ $post->category->name }}</a>
        </p>

        <div>
            {{-- <?= $post ->body;?> --}}
            {{-- {{ $post ->body }} --}}
            {!!$post ->body!!}

        </div>
    </article>

    <a href="/">Go Back</a>

</body>
</html>
