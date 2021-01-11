<!DOCTYPE html>
<html lang="ja">

<head>
    @yield('head')
</head>

<body>
    <div class="container-fluid">
        <header>
            <p class="h2 text-center">@yield('headerTitle')</p>
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
                    @yield('content')
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
