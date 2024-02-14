<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>掲示板</title>
</head>
<body>
  <div>
    <h2>掲示板</h2>
  </div>
  <div>
    <p>投稿一覧</p>
    <div>
      @foreach($boardsDates as $board)
        <p>{{ $board->title }}</p>
        <p>{{ $board->post }}</p>
        <p>投稿者：{{ $board->user->name }}</p>
      @endforeach
    </div>

  </div>
</body>
</html>
