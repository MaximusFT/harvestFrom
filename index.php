<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Harvest Form</title>

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="/js/sisyphus.min.js"></script>
    <script src="/js/main.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
<?
function ec_slash($var) {
$var=str_replace("\\'","'",$var);
$var=str_replace("\\\\","\\",$var);
$var=str_replace("\\","\\\\",$var);
$var=str_replace("'","\\'",$var);
return $var;
}

include 'connect_bd.php';

if (isset($_POST['acc_surname'])) {
    $str = json_encode($_POST, JSON_UNESCAPED_UNICODE);
	$st = htmlspecialchars($str, ENT_QUOTES);


    mysql_query('INSERT INTO data (id, data, date) VALUES ("", "'.$st.'","'.time().'")', $link)
    or die ("ERROR: ".mysql_error());

    
}
?>
    <section class="form_section">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-6">
                    <h2>Форма для заполнения</h2>
                    <p class="text-primary">Форма ниже предназначена для заполнения.</p>

                    <div class="form_block">
                        <form id="harvesForm" action="#" role="form" class="" method="post">

                            <legend>ФИО</legend>
                            <fieldset>
                                <div class="form-group">
                                    <label for="acc_surname">Фамилия</label>
                                    <input type="text" name="acc_surname" id="acc_surname" class="form-control" required />
                                </div>
                                <div class="form-group">
                                    <label for="acc_name">Имя</label>
                                    <input type="text" name="acc_name" id="acc_name" class="form-control" required />
                                </div>
                                <div class="form-group">
                                    <label for="acc_midname">Отчество</label>
                                    <input type="text" name="acc_midname" id="acc_midname" class="form-control" required />
                                </div>
                            </fieldset>


                            <legend>Руководство</legend>
                            <fieldset>
                                <div class="form-group">
                                    <label for="office">Название офиса</label>
                                    <input type="text" name="office" id="office" class="form-control" required />
                                </div>
                                <div class="form-group">
                                    <label for="department">Название отдела</label>
                                    <input type="text" name="department" id="department" class="form-control" required />
                                </div>
                                <div class="form-group">
                                    <label for="headname">ФИО руководителя</label>
                                    <input type="text" name="headname" id="headname" class="form-control" required />
                                </div>
                            </fieldset>


                            <legend>Почта</legend>
                            <div class="panel-group" id="mail-acc">

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#mail-acc" href="#m-1">Корпоративный Email #1</a>
                                        </h4>
                                    </div>
                                    <div id="m-1" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                                <div class="form-horizontal">
                                                    <div class="form-group">
                                                        <label for="acc-inputEmail-1" class="col-sm-3 control-label">Email</label>
                                                        <div class="col-sm-9">
                                                            <input type="email" class="form-control" name="acc-inputEmail-1">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="acc-inputPassword-1" class="col-sm-3 control-label">Пароль</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="acc-inputPassword-1">
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#mail-acc" href="#m-2">Дополнительный Email #2</a>
                                        </h4>
                                    </div>
                                    <div id="m-2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                                <div class="form-horizontal">
                                                    <div class="form-group">
                                                        <label for="acc-inputEmail-2" class="col-sm-3 control-label">Email</label>
                                                        <div class="col-sm-9">
                                                            <input type="email" class="form-control" name="acc-inputEmail-2">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="acc-inputPassword-2" class="col-sm-3 control-label">Пароль</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="acc-inputPassword-2">
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#mail-acc" href="#m-3">Дополнительный Email #3</a>
                                        </h4>
                                    </div>
                                    <div id="m-3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                                <div class="form-horizontal">
                                                    <div class="form-group">
                                                        <label for="acc-inputEmail-3" class="col-sm-3 control-label">Email</label>
                                                        <div class="col-sm-9">
                                                            <input type="email" class="form-control" name="acc-inputEmail-3">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="acc-inputPassword-3" class="col-sm-3 control-label">Пароль</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="acc-inputPassword-3">
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#mail-acc" href="#m-4">Дополнительный Email #4</a>
                                        </h4>
                                    </div>
                                    <div id="m-4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                                <div class="form-horizontal">
                                                    <div class="form-group">
                                                        <label for="acc-inputEmail-4" class="col-sm-3 control-label">Email</label>
                                                        <div class="col-sm-9">
                                                            <input type="email" class="form-control" name="acc-inputEmail-4">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="acc-inputPassword-4" class="col-sm-3 control-label">Пароль</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="acc-inputPassword-4">
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input id="add-mail" class="btn btn-info btn-block" type="button" onclick="addMail()" name="add" value="Добавить Email" />

                            <legend>Социальные сети</legend>
                            <div class="panel-group" id="social-acc">

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#social-acc" href="#s-1">Вконтакте</a>
                                        </h4>
                                    </div>
                                    <div id="s-1" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                                <div class="form-horizontal">
                                                    <div class="form-group">
                                                        <label for="soc-Login-1" class="col-sm-3 control-label">Логин</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="soc-Login-1">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="soc-Email-1" class="col-sm-3 control-label">Email</label>
                                                        <div class="col-sm-9">
                                                            <input type="email" class="form-control" name="soc-Email-1">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="soc-Pass-1" class="col-sm-3 control-label">Пароль</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="soc-Pass-1">
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#social-acc" href="#s-2">Facebook</a>
                                        </h4>
                                    </div>
                                    <div id="s-2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                                <div class="form-horizontal">
                                                    <div class="form-group">
                                                        <label for="soc-Login-2" class="col-sm-3 control-label">Логин</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="soc-Login-2">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="soc-Email-2" class="col-sm-3 control-label">Email</label>
                                                        <div class="col-sm-9">
                                                            <input type="email" class="form-control" name="soc-Email-2">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="soc-Pass-2" class="col-sm-3 control-label">Пароль</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="soc-Pass-2">
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#social-acc" href="#s-3">Google +</a>
                                        </h4>
                                    </div>
                                    <div id="s-3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                                <div class="form-horizontal">
                                                    <div class="form-group">
                                                        <label for="soc-Login-3" class="col-sm-3 control-label">Логин</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="soc-Login-3">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="soc-Email-3" class="col-sm-3 control-label">Email</label>
                                                        <div class="col-sm-9">
                                                            <input type="email" class="form-control" name="soc-Email-3">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="soc-Pass-3" class="col-sm-3 control-label">Пароль</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="soc-Pass-3">
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#social-acc" href="#s-4">Одноклассники</a>
                                        </h4>
                                    </div>
                                    <div id="s-4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                                <div class="form-horizontal">
                                                    <div class="form-group">
                                                        <label for="soc-Login-4" class="col-sm-3 control-label">Логин</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="soc-Login-4">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="soc-Email-4" class="col-sm-3 control-label">Email</label>
                                                        <div class="col-sm-9">
                                                            <input type="email" class="form-control" name="soc-Email-4">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="soc-Pass-4" class="col-sm-3 control-label">Пароль</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="soc-Pass-4">
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#social-acc" href="#s-5">LinkedIn</a>
                                        </h4>
                                    </div>
                                    <div id="s-5" class="panel-collapse collapse">
                                        <div class="panel-body">
                                                <div class="form-horizontal">
                                                    <div class="form-group">
                                                        <label for="soc-Login-5" class="col-sm-3 control-label">Логин</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="soc-Login-5">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="soc-Email-5" class="col-sm-3 control-label">Email</label>
                                                        <div class="col-sm-9">
                                                            <input type="email" class="form-control" name="soc-Email-5">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="soc-Pass-5" class="col-sm-3 control-label">Пароль</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="soc-Pass-5">
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input id="add-social" class="btn btn-info btn-block" type="button" onclick="addSocial()" name="add" value="Добавить сеть" />

                            <legend>Сервисы</legend>
                            <div class="panel-group" id="services-acc">

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#services-acc" href="#sv-1">Сервис #1</a>
                                        </h4>
                                    </div>
                                    <div id="sv-1" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                                <div class="form-horizontal">
                                                    <div class="form-group">
                                                        <label for="serv-Name-1" class="col-sm-3 control-label">Название</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="serv-Name-1">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="serv-URL-1" class="col-sm-3 control-label">Точка входа</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="serv-URL-1">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="serv-Login-1" class="col-sm-3 control-label">Логин</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="serv-Login-1">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="serv-Email-1" class="col-sm-3 control-label">Email</label>
                                                        <div class="col-sm-9">
                                                            <input type="email" class="form-control" name="serv-Email-1">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="serv-Pass-1" class="col-sm-3 control-label">Пароль</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="serv-Pass-1">
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#services-acc" href="#sv-2">Сервис #2</a>
                                        </h4>
                                    </div>
                                    <div id="sv-2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                                <div class="form-horizontal">
                                                    <div class="form-group">
                                                        <label for="serv-Name-2" class="col-sm-3 control-label">Название</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="serv-Name-2">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="serv-URL-2" class="col-sm-3 control-label">Точка входа</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="serv-URL-2">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="serv-Login-2" class="col-sm-3 control-label">Логин</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="serv-Login-2">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="serv-Email-2" class="col-sm-3 control-label">Email</label>
                                                        <div class="col-sm-9">
                                                            <input type="email" class="form-control" name="serv-Email-2">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="serv-Pass-2" class="col-sm-3 control-label">Пароль</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="serv-Pass-2">
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#services-acc" href="#sv-3">Сервис #3</a>
                                        </h4>
                                    </div>
                                    <div id="sv-3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="serv-Name-3" class="col-sm-3 control-label">Название</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="serv-Name-3">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="serv-URL-3" class="col-sm-3 control-label">Точка входа</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="serv-URL-3">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="serv-Login-3" class="col-sm-3 control-label">Логин</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="serv-Login-3">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="serv-Email-3" class="col-sm-3 control-label">Email</label>
                                                    <div class="col-sm-9">
                                                        <input type="email" class="form-control" name="serv-Email-3">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="serv-Pass-3" class="col-sm-3 control-label">Пароль</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="serv-Pass-3">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input id="add-service" class="btn btn-info btn-block" type="button" onclick="addService()" name="add" value="Добавить сервис" />

                            <legend>Дополнительная информация</legend>
                            <div class="form-group">
                                <label for="addDescription" class="control-label">Для любой другой информации, которую вы хотите оставить</label>
                                <textarea class="form-control" name="addDescription" rows="6"></textarea>
                            </div>

                            <legend>Согласие</legend>
                            <div class="form-group checkbox">
                                <label>
                                    <input type="checkbox" name="check" required>Я даю согласие на обработку моих персональных данных и Я подтверждаю, что мною были передана вся корпоративная информация которую Я знаю.
                                </label>
                            </div>

                            <input type="submit" class="btn btn-success btn-block" value="Отправить" />
                        </form>
                    </div>
                </div>


                <? /** * Fake Form */ ?>
                <div class="col-md-5">
                    <h2>Форма-образец</h2>
                    <p class="text-primary">Форма ниже предназначена для примера, как надо заполнять</p>
                    <div class="form_block">
                            <legend>ФИО</legend>
                            <fieldset>
                                <div class="form-group">
                                    <label for="surname">Фамилия</label>
                                    <input disabled type="text" name="surname" id="surname" class="form-control" value="Иванов" />
                                </div>
                                <div class="form-group">
                                    <label for="name">Имя</label>
                                    <input disabled type="text" name="name" id="name" class="form-control" value="Иван" />
                                </div>
                                <div class="form-group">
                                    <label for="midname">Отчество</label>
                                    <input disabled type="text" name="midname" id="midname" class="form-control" value="Иваныч" />
                                </div>
                            </fieldset>

                            <legend>Руководство</legend>
                            <fieldset>
                                <div class="form-group">
                                    <label for="office">Название офиса</label>
                                    <input disabled type="text" name="office" id="office" class="form-control" value="TeleTrade IT Ukraine" />
                                </div>
                                <div class="form-group">
                                    <label for="department">Название отдела</label>
                                    <input disabled type="text" name="department" id="department" class="form-control" value="IT" />
                                </div>
                                <div class="form-group">
                                    <label for="headname">ФИО руководителя</label>
                                    <input disabled type="text" name="headname" id="headname" class="form-control" value="Тёркин Василий" />
                                </div>
                            </fieldset>

                            <legend>Почта</legend>
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse">Корпоративный Email</a>
                                        </h4>
                                    </div>
                                    <div class="panel-body">
                                        <fieldset>
                                            <div class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="email" class="form-control" id="inputEmail3" value="ivanovvvv@teletrade.com.ua">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-3 control-label">Пароль</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="text" class="form-control" id="inputPassword3" value="ivanovvvv2014qwerty">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse">Дополнительный Email</a>
                                        </h4>
                                    </div>
                                    <div class="panel-body">
                                        <fieldset>
                                            <div class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="email" class="form-control" id="inputEmail3" value="ivanovvvv@masterbrok.com.ua">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-3 control-label">Пароль</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="text" class="form-control" id="inputPassword3" value="ivanovvv123qaz">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                            <legend>Социальные сети</legend>
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse">Вконтакте</a>
                                        </h4>
                                    </div>
                                    <div class="panel-body">
                                        <fieldset>
                                            <div class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Логин</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="email" class="form-control" id="inputEmail3" value="ttgroupvk">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="email" class="form-control" id="inputEmail3" value="ttgroupvk@yandex.ru">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-3 control-label">Пароль</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="text" class="form-control" id="inputPassword3" value="PassForttgroupvk">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse">Facebook</a>
                                        </h4>
                                    </div>
                                    <div class="panel-body">
                                        <fieldset>
                                            <div class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Логин</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="email" class="form-control" id="inputEmail3" value="ttgroupvk">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="email" class="form-control" id="inputEmail3" value="ttgroupvk@yandex.ru">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-3 control-label">Пароль</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="text" class="form-control" id="inputPassword3" value="PassForttgroupvk">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                            <legend>Сервисы</legend>
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse">Сервис #1</a>
                                        </h4>
                                    </div>
                                    <div class="panel-body">
                                        <fieldset>
                                            <div class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Название</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="text" class="form-control" id="inputEmail3" value="Google Analytics">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Точка входа</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="text" class="form-control" id="inputEmail3" value="http://www.google.com/analytics/">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Логин</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="text" class="form-control" id="inputEmail3" value="tt_analytics">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="email" class="form-control" id="inputEmail3" value="tt_analytics@gmail.com">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-3 control-label">Пароль</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="text" class="form-control" id="inputPassword3" value="qwerty12345asdfg">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse">Сервис #2</a>
                                        </h4>
                                    </div>
                                    <div class="panel-body">
                                        <fieldset>
                                            <div class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Название</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="text" class="form-control" id="inputEmail3" value="Сервис мониторинга позиций сайтов">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Точка входа</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="text" class="form-control" id="inputEmail3" value="http://www.sitetest.com/">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Логин</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="text" class="form-control" id="inputEmail3" value="tt_sitetest">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="email" class="form-control" id="inputEmail3" value="tt_sitetest@gmail.com">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-3 control-label">Пароль</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="text" class="form-control" id="inputPassword3" value="PassFortt_sitetest">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse">Сервис #3</a>
                                        </h4>
                                    </div>
                                    <div class="panel-body">
                                        <fieldset>
                                            <div class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Название</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="text" class="form-control" id="inputEmail3" value="Google AdWords">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Точка входа</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="text" class="form-control" id="inputEmail3" value="https://adwords.google.com.ua/">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Логин</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="text" class="form-control" id="inputEmail3" value="tt_AdWords">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="email" class="form-control" id="inputEmail3" value="tt_AdWords@gmail.com">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-3 control-label">Пароль</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="text" class="form-control" id="inputPassword3" value="PassFortt_AdWords">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse">Сервис #4</a>
                                        </h4>
                                    </div>
                                    <div class="panel-body">
                                        <fieldset>
                                            <div class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Название</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="text" class="form-control" id="inputEmail3" value="Google AdSens">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Точка входа</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="text" class="form-control" id="inputEmail3" value="https://www.google.com/adsense/">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Логин</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="text" class="form-control" id="inputEmail3" value="tt_AdSens">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="email" class="form-control" id="inputEmail3" value="tt_AdSens@gmail.com">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-3 control-label">Пароль</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="text" class="form-control" id="inputPassword3" value="PassFortt_AdSens">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse">Сервис #5</a>
                                        </h4>
                                    </div>
                                    <div class="panel-body">
                                        <fieldset>
                                            <div class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Название</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="text" class="form-control" id="inputEmail3" value="Управления сайтом SiteContent.com">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Точка входа</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="text" class="form-control" id="inputEmail3" value="http://www.SiteContent.com/admin-panel/">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Логин</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="text" class="form-control" id="inputEmail3" value="tt_SiteContent">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="email" class="form-control" id="inputEmail3" value="tt_SiteContent@gmail.com">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword3" class="col-sm-3 control-label">Пароль</label>
                                                    <div class="col-sm-9">
                                                        <input disabled type="text" class="form-control" id="inputPassword3" value="PassFortt_SiteContent">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>

                                <legend>Дополнительная информация</legend>
                                <div class="form-group">
                                    <label for="addDescription" class="control-label">Для любой другой информации, которую вы хотите оставить</label>
                                    <textarea class="form-control" name="addDescription" rows="6"></textarea>
                                </div>

                                <legend>Согласие</legend>
                                <div class="form-group checkbox">
                                    <label>
                                        <input disabled checked="checked" type="checkbox">Я даю согласие на обработку моих персональных данных и Я подтверждаю, что мною были передана вся корпоративная информация которую Я знаю.
                                    </label>
                                </div>
                        </div>
                    </div>
                </div>
    </section>
</body>
</html>