<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{$title}</title>  
        <link href="css/bootstrap.css" rel="stylesheet">
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h1>ZendShop</h1> 
                <p>Пожалуй, лучший интернет магазин для покупки товаров </p> 
            </div>
        
            <!-- NAVBAR -->
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li><a href="Index.php">Главная</a></li>
                        <li><a href="about.php">О нас</a></li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Категории<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                {$sectionmenu}
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left" action="serarch.php" method="get">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Введите текст запроса">                    
                        </div>
                        <button type="submit" class="btn btn-danger">Искать!</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        
                        {if $isuser == false}
                        <li><a href="registration.php">Регистрация</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#ModalLoginDialog"><span class="glyphicon glyphicon-log-in"></span> Войти</a></li>
                        
                        {else}
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">{$name} {$surname} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="account.php"><span class="glyphicon glyphicon-home"></span> Личный кабинет</a></li>
                                <li><a href="about.php"><span class="glyphicon glyphicon-shopping-cart"></span> Корзина</a></li>
                                {if ($isuser == true) && ($isadmin == true) }
                                    <li><a href="admineditscb.php"><span class="glyphicon glyphicon-ok"></span> Админ панель</a></li>
                                {/if}
                                <li><a href="about.php"><span class="glyphicon glyphicon-ok"></span> Заказы</a></li>
                                <li><a href="LogoutQuery.php"><span class="glyphicon glyphicon-share"></span> Выйти</a></li>
                            </ul>
                        </li>
                        {/if}
                    </ul>
                </div>
            </nav>
            
            {if $loginerror == 1}
            <div class="alert alert-danger">
                <strong>Ошибка!</strong> Данные были введены неправильно!
            </div>
            {/if}
            
            {$other}

            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <a href="https://github.com/Zendooosbka" class="navbar-text">Meow meow</a>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <p class="navbar-text">Евгений Гусев 2017  </p>
                    </ul>
                </div>
            </nav>
        </div>
        
        {if $isuser == false}
        <div id="ModalLoginDialog" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <form action="LoginQuery.php" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Вход в магазин</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="login">Логин</label>
                                <input type="text" class="form-control" name="login" id="login">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Пароль</label>
                                <input type="password" class="form-control" name="pwd" id="pwd">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Войти</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {/if}
        
        {$innertext}
        
    </body>
</html>