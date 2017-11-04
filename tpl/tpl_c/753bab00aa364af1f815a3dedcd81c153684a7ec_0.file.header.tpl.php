<?php
/* Smarty version 3.1.30, created on 2017-06-17 09:43:27
  from "/var/www/html/tpl/tpl/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5944cf8f4c7289_15918115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '753bab00aa364af1f815a3dedcd81c153684a7ec' => 
    array (
      0 => '/var/www/html/tpl/tpl/header.tpl',
      1 => 1497681798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5944cf8f4c7289_15918115 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>  
        <link href="css/bootstrap.css" rel="stylesheet">
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
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
                        <li><a href="index.php">Главная</a></li>
                        <li><a href="about.php">О нас</a></li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Категории<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="about.php">Книги</a></li>
                                <li><a href="about.php">Электроника</a></li>
                                <li><a href="about.php">Бытовая техника</a></li>
                                <li><a href="about.php">Спорт и отдых</a></li>
                                <li><a href="about.php">Одежда, обувь</a></li>
                                <li><a href="about.php">Аксексуары</a></li>
                                <li><a href="about.php">Музыка</a></li>
                                <li><a href="about.php">Цифровые товары</a></li>
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
                        
                        <?php if ($_smarty_tpl->tpl_vars['isuser']->value == false) {?>
                        <li><a href="registration.php">Регистрация</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#ModalLoginDialog"><span class="glyphicon glyphicon-log-in"></span> Войти</a></li>
                        
                        <?php } else { ?>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['surname']->value;?>
 <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="about.php"><span class="glyphicon glyphicon-home"></span> Личный кабинет</a></li>
                                <li><a href="about.php"><span class="glyphicon glyphicon-shopping-cart"></span> Корзина</a></li>
                                <li><a href="about.php"><span class="glyphicon glyphicon-ok"></span> Заказы</a></li>
                                <li><a href="LogoutQuery.php"><span class="glyphicon glyphicon-share"></span> Выйти</a></li>
                            </ul>
                        </li>
                        <?php }?>
                    </ul>
                </div>
            </nav>
            
            <?php if ($_smarty_tpl->tpl_vars['loginerror']->value == 1) {?>
            <div class="alert alert-danger">
                <strong>Ошибка!</strong> Данные были введены неправильно!
            </div>
            <?php }?>
            
            <?php echo $_smarty_tpl->tpl_vars['other']->value;?>


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
        
        <?php if ($_smarty_tpl->tpl_vars['isuser']->value == false) {?>
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
        <?php }?>
    </body>
</html><?php }
}
