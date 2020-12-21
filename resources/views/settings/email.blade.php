<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <header class="header">
            <p>ヘッダー</p>
        </header>

        <body>
            <form action="" method="">
                <div class="form-group">
                    <label for="email">EMAIL</label>
                    <input class="form-control" type="email" name="email" id="email" placeholder="new EMAIL">
                </div>
                <button type="submit" class="btn btn-dark mb-2">登録</button>
            </form>
        </body>

        <footer>
            <p>フッター</p>
        </footer>
    </div>
</body>

</html>
