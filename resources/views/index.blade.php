<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="{{ route('form.store') }}" method="post">
    @csrf
    <div>
      <label for="name">氏名</label><br>
      <input type="text" id="name" name="name">
    </div>
    <div>
      <label for="email">メールアドレス</label><br>
      <input type="email" id="email" name="email">
    </div>
    <button type="submit">送信する</button>
  </form>
</body>

</html>