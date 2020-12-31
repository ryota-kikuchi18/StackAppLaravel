<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <title>Email設定</title>
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
            <div class="box1 col-md-2 d-none d-md-block sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column ">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">基本設定</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">通知設定</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Twitter連携</a>
                        </li>
                        <li class="nav-item logout">
                            <a class="nav-link text-dark" href="#">ログアウト</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="box2 col-10">
                <section>
                    <form action="" method="">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label label" for="email">EMAIL</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="email" name="email" id="email"
                                    placeholder="new EMAIL">
                            </div>
                        </div>
                        <div class="col text-center">
                            <button type="submit" class="btn btn-dark">登録</button>
                        </div>
                    </form>
                </section>
            </div>
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
