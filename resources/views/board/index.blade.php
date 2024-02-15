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
    <form action=" {{ route('board.store') }}" method="POST">
    @csrf
      <label>タイトル</label>
      </br>
      <input type="text" name="title" id="title">
      </br>
      <label>投稿</label>
      </br>
      <textarea name="post" id="post"></textarea>
      </br>
      <button></a>投稿</button>
    </form>
  </div>
  <div>
    <p>投稿一覧</p>
    <div>
      @foreach($boardsDates as $board)
        <hr>
        <p>投稿者：{{ $board->user->name }}</p>
        <p>{{ $board->title }}</p>
        <p>{{ $board->post }}</p>
        <button><a href=" {{ route('board.edit', ['id' => $board->id]) }}">編集</a></button>
        <form action="{{ route('board.destroy', ['id' => $board->id]) }}" method="POST">
          @csrf
          @method('DELETE')
          <button>削除</button>
        </form>
        </br>
        @if ($board->comment->count() > 0)
          @foreach($board->comment as $comment)
            <label>コメント</label>
            <p>{{ $comment->comment }}</p>
            <label>投稿者</label>
            <p>{{ $comment->user->name }}</p>
          @endforeach
        @endif
      @endforeach
    </div>
  </div>
</body>
</html>
