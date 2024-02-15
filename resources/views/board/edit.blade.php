<!DOCTYPE html>
<html lang="ja">
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
    <h4>投稿</h4>
    <form action=" {{ route('board.update', ['id'=>$dates->id]) }}" method="POST">
    @csrf
    @method('PUT')
      <label>タイトル</label>
      </br>
      <input type="text" name="title" id="title" value="{{ $dates->title }}">
      </br>
      <label>投稿</label>
      </br>
      <textarea name="post" id="post">{{ $dates->post }}</textarea>
      </br>
      <button>投稿</button>
    </form>
    </br>
    <button><a href="{{ route('board.index') }}">戻る</a></button>
  </div>
  </div>
</body>
</html>
