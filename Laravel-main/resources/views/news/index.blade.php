<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Danh sach tin tuc</h1>
    <div class="news" style="display: flex; gap: 50px;">
        <div class="new-menu" style="width: 500px; align-items: center;">
            @foreach($news as $item)
                <h2>{{ $item->title }}</h2>
            @endforeach
        </div>
        <div class="news-item" style="display: flex; justify-content: center;">
            @foreach($news as $item)
                <div class="item" style="width: 400px; height: 400px;;">
                    <h1>{{ $item->title }}</h1>
                    <h4>{{ $item->content }}</h4>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
