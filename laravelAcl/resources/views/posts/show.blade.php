<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel</title>
</head>
<body>
<h1>{{ $post->title }}</h1>
@can('edit_form')
<a href="#">编辑文章</a>
@endcan
</body>
</html>