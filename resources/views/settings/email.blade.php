<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <title>設定画面</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <header>
            <p class="h2 text-center">設定</p>
        </header>
    </div>
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="box1 col-md-2 d-none d-md-block  sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            基本設定
                        </li>
                        <li class="nav-item">
                            通知設定
                        </li>
                        <li class="nav-item">
                            Twitter連携
                        </li>
                        <li class="nav-item logout">
                            ログアウト
                        </li>
                    </ul>
                </div>
            </div>
            <div class="box2 col-10">
                <section>
                    <form action="" method="">
                        <div class="form-group">
                            <label for="email">EMAIL</label>
                            <input class="form-control" type="email" name="email" id="email" placeholder="new EMAIL">
                        </div>
                        <button type="submit" class="btn btn-dark mb-2">登録</button>
                    </form>
                </section>
            </div>
        </div>
    </div>
    <hr>
    <div class="container-fluid">
        <footer>
            <p>&copy;mokumoku</p>
        </footer>
    </div>
</body>

</html>
