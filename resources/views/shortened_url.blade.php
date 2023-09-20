<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shortened URL</title>
</head>
<body>
    <h1>Shortened URL</h1>
    @isset($shortUrl)
        <p>Your shortened URL: <a href="{{ $shortUrl }}">{{ $shortUrl }}</a></p>
    @endisset
</body>
</html>
