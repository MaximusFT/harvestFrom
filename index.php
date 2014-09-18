
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Password System</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

   <script src="//code.jquery.com/jquery-1.10.2.js"></script>
 <script src="js/main.js"></script>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
	
	
	
    <body>
  <section class="form_section">
  <div class="container">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-5">

        <div class="form_block">

          <form action="#" method="post">


            <legend>ФИО</legend>
            <fieldset>
              <div class="form-group">
                <label for="surname">Фамилия</label>
                <input type="text" name="surname" id="surname" class="form-control" />
              </div>
              <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" name="name" id="name" class="form-control" />
              </div>
              <div class="form-group">
                <label for="midname">Отчество</label>
                <input type="text" name="midname" id="midname" class="form-control" />
              </div>
            </fieldset>


            <legend>Руководство</legend>
            <fieldset>
              <div class="form-group">
                <label for="office">Название офиса</label>
                <input type="text" name="office" id="office" class="form-control" />
              </div>
              <div class="form-group">
                <label for="department">Название отдела</label>
                <input type="text" name="department" id="department" class="form-control" />
              </div>
              <div class="form-group">
                <label for="headname">ФИО руководителя</label>
                <input type="text" name="headname" id="headname" class="form-control" />
              </div>
            </fieldset>


            <legend>Почта</legend>
            <div class="panel-group" id="mail-acc">

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#mail-acc" href="#m-1">
                    Корпоративный Email
                  </a>
                  </h4>
                </div>
                <div id="m-1" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <fieldset>
                      <div class="form-horizontal">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-3 control-label">Пароль</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPassword3">
                          </div>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#mail-acc" href="#m-2">
                    Дополнительный Email
                  </a>
                  </h4>
                </div>
                <div id="m-2" class="panel-collapse collapse">
                  <div class="panel-body">
                    <fieldset>
                      <div class="form-horizontal">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-3 control-label">Пароль</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPassword3">
                          </div>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                </div>
              </div>

            </div>
            <input id="add-mail" class="btn btn-default" type="button" onclick="addMail()" name="add" value="Добавить Email" />


            <legend>Социальные сети</legend>
            <div class="panel-group" id="social-acc">
              
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#social-acc" href="#s-1">
                    Вконтакте
                  </a>
                  </h4>
                </div>
                <div id="s-1" class="panel-collapse collapse">
                  <div class="panel-body">
                    <fieldset>
                      <div class="form-horizontal">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Логин</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3">
                          </div>
                        </div>
                        <div class="form-horizontal">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" id="inputEmail3">
                            </div>
                          </div>
<div class="form-horizontal">
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Пароль</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="inputPassword3">
                            </div>
                          </div>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#social-acc" href="#s-2">
                    Facebook
                  </a>
                  </h4>
                </div>
                <div id="s-2" class="panel-collapse collapse">
                  <div class="panel-body">
                    <fieldset>
                      <div class="form-horizontal">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Логин</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3">
                          </div>
                        </div>
                        <div class="form-horizontal">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" id="inputEmail3">
                            </div>
                          </div>
<div class="form-horizontal">
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Пароль</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="inputPassword3">
                            </div>
                          </div>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#social-acc" href="#s-3">
                    Google +
                  </a>
                  </h4>
                </div>
                <div id="s-3" class="panel-collapse collapse">
                  <div class="panel-body">
                    <fieldset>
                      <div class="form-horizontal">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Логин</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3">
                          </div>
                        </div>
                        <div class="form-horizontal">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" id="inputEmail3">
                            </div>
                          </div>
<div class="form-horizontal">
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Пароль</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="inputPassword3">
                            </div>
                          </div>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#social-acc" href="#s-4">
                    Одноклассники
                  </a>
                  </h4>
                </div>
                <div id="s-4" class="panel-collapse collapse">
                  <div class="panel-body">
                    <fieldset>
                      <div class="form-horizontal">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Логин</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3">
                          </div>
                        </div>
                        <div class="form-horizontal">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" id="inputEmail3">
                            </div>
                          </div>
<div class="form-horizontal">
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Пароль</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="inputPassword3">
                            </div>
                          </div>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#social-acc" href="#s-5">
                    LinkedIn
                  </a>
                  </h4>
                </div>
                <div id="s-5" class="panel-collapse collapse">
                  <div class="panel-body">
                    <fieldset>
                      <div class="form-horizontal">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Логин</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3">
                          </div>
                        </div>
                        <div class="form-horizontal">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" id="inputEmail3">
                            </div>
                          </div>
                          <div class="form-horizontal">
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Пароль</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="inputPassword3">
                            </div>
                          </div>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                </div>
              </div>

            </div>
            <input id="add-social" class="btn btn-default" type="button" onclick="addSocial()" name="add" value="Добавить сеть" />


            <legend>Сервисы</legend>
            <div class="panel-group" id="services-acc">

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#services-acc" href="#sv-1">
                    Сервис #1
                  </a>
                  </h4>
                </div>
                <div id="sv-1" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <fieldset>
                      <div class="form-horizontal">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Название</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3">
                          </div>
                        </div>
                      </div>
                      <div class="form-horizontal">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Точка входа</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3">
                          </div>
                        </div>
                      </div>
                      <div class="form-horizontal">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Логин</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3">
                          </div>
                        </div>
                      </div>
                      <div class="form-horizontal">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3">
                          </div>
                        </div>
                      </div>
                      <div class="form-horizontal">
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Пароль</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="inputPassword3">
                        </div>
                      </div>
                      </div>
                    </fieldset>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#services-acc" href="#sv-2">
                    Сервис #2
                  </a>
                  </h4>
                </div>
                <div id="sv-2" class="panel-collapse collapse">
                  <div class="panel-body">
                    <fieldset>
                      <div class="form-horizontal">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Название</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3">
                          </div>
                        </div>
                      </div>
                      <div class="form-horizontal">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Точка входа</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3">
                          </div>
                        </div>
                      </div>
                      <div class="form-horizontal">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Логин</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3">
                          </div>
                        </div>
                      </div>
                      <div class="form-horizontal">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3">
                          </div>
                        </div>
                      </div>
                      <div class="form-horizontal">
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Пароль</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="inputPassword3">
                        </div>
                      </div>
                      </div>
                    </fieldset>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#services-acc" href="#sv-3">
                    Сервис #3
                  </a>
                  </h4>
                </div>
                <div id="sv-3" class="panel-collapse collapse">
                  <div class="panel-body">
                    <fieldset>
                      <div class="form-horizontal">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Название</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3">
                          </div>
                        </div>
                      </div>
                      <div class="form-horizontal">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Точка входа</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3">
                          </div>
                        </div>
                      </div>
                      <div class="form-horizontal">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Логин</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3">
                          </div>
                        </div>
                      </div>
                      <div class="form-horizontal">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3">
                          </div>
                        </div>
                      </div>
                      <div class="form-horizontal">
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Пароль</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="inputPassword3">
                        </div>
                      </div>
                      </div>
                    </fieldset>
                  </div>
                </div>
              </div>

            </div>
            <input id="add-service" class="btn btn-default" type="button" onclick="addService()" name="add" value="Добавить сервис" />

            <div class="checkbox">
              <label>
                <input type="checkbox">Check me out
              </label>
            </div>

            <div>
              <input type="submit" class="btn btn-success" value="Отправить" />
            </div>

          </form>

        </div>
      </div>


      <!--fake form--> 
      <div class="col-md-1"></div>
      <div class="col-md-5">
        <div class="form_block fake">
          <form action="#" > 
            <legend>ФИО</legend>
            <fieldset>
              <div class="form-group">
                <label for="surname">Фамилия</label>
                <input type="text" name="surname" id="surname" class="form-control" value="Иванов" />
              </div>
              <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" name="name" id="name" class="form-control" value="Иван" />
              </div>
              <div class="form-group">
                <label for="midname">Отчество</label>
                <input type="text" name="midname" id="midname" class="form-control" value="Иваныч" />
              </div>
            </fieldset>
            <legend>Руководство</legend>
            <fieldset>
              <div class="form-group">
                <label for="office">Название офиса</label>
                <input type="text" name="office" id="office" class="form-control" value="TeleTrade IT Ukraine" />
              </div>
              <div class="form-group">
                <label for="department">Название отдела</label>
                <input type="text" name="department" id="department" class="form-control" value="IT" />
              </div>
              <div class="form-group">
                <label for="headname">ФИО руководителя</label>
                <input type="text" name="headname" id="headname" class="form-control" value="Тёркин Василий" />
              </div>
            </fieldset>
            <legend>Почта</legend>
            <div class="panel-group">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                  <a data-toggle="collapse">
                    Корпоративный Email
                  </a>
                  </h4>
                </div>
                <div class="panel-collapse collapse in">
                  <div class="panel-body">
                    <fieldset>
                      <div class="form-horizontal">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3" value="ivanovvvv@teletrade.com.ua">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-3 control-label">Пароль</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPassword3" value="ivanovvvv2014qwerty">
                          </div>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                  <a data-toggle="collapse">
                    Дополнительный Email
                  </a>
                  </h4>
                </div>
                <div id="m-2" class="panel-collapse collapse">
                  <div class="panel-body">
                  </div>
                </div>
              </div>
            </div>
            <input class="btn btn-default" type="button" value="Добавить Email" />
            <legend>Социальные сети</legend>
            <div class="panel-group">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                  <a data-toggle="collapse">
                    Вконтакте
                  </a>
                  </h4> 
                </div>
                <div class="panel-collapse collapse in">
                  <div class="panel-body"> 
                    <fieldset>
                      <div class="form-horizontal">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Логин</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3" value="vanyusha2014">
                          </div>
                        </div>
                        <div class="form-horizontal">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" id="inputEmail3" value="vanyusha2014@yandex.ru">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Пароль</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="inputPassword3" value="123vanyusha2014">
                            </div>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                  <a data-toggle="collapse">
                    Facebook
                  </a>
                  </h4>
                </div>
                <div class="panel-collapse collapse">
                  <div class="panel-body">
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                  <a data-toggle="collapse">
                    Google +
                  </a>
                  </h4>
                </div>
                <div class="panel-collapse collapse">
                  <div class="panel-body">
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                  <a data-toggle="collapse">
                    Одноклассники
                  </a>
                  </h4>
                </div>
                <div id="s-4" class="panel-collapse collapse">
                  <div class="panel-body">
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                  <a data-toggle="collapse">
                    LinkedIn
                  </a>
                  </h4>
                </div>
                <div id="s-5" class="panel-collapse collapse">
                  <div class="panel-body">
                  </div>
                </div>
              </div>
            </div>
            <input class="btn btn-default" type="button" value="Добавить сеть" />
            <legend>Сервисы</legend>
            <div class="panel-group">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                  <a data-toggle="collapse">
                    Сервис #1
                  </a>
                  </h4>
                </div>
                <div id="sv-1" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <fieldset>
                      <div class="form-horizontal">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Название</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" value="Google Analytics">
                          </div>
                        </div>
                      </div>
                      <div class="form-horizontal">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Точка входа</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" value="http://www.google.com/analytics/">
                          </div>
                        </div>
                      </div>
                      <div class="form-horizontal">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Логин</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" value="tt_analytics">
                          </div>
                        </div>
                      </div>
                      <div class="form-horizontal">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmail3" value="tt_analytics@gmail.com">
                          </div>
                        </div>
                      </div>
                      <div class="form-horizontal">
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Пароль</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="inputPassword3" value="qwerty12345asdfg">
                        </div>
                      </div>
                      </div>
                    </fieldset>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                  <a data-toggle="collapse">
                    Сервис #2
                  </a>
                  </h4>
                </div>
                <div class="panel-collapse collapse">
                  <div class="panel-body">
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                  <a data-toggle="collapse">
                    Сервис #3
                  </a>
                  </h4>
                </div>
                <div class="panel-collapse collapse">
                  <div class="panel-body">
                  </div>
                </div>
              </div>
            </div>
            <input class="btn btn-default" type="button" value="Добавить сервис" />
            <div class="checkbox">
              <label>
                <input type="checkbox">Check me out
              </label>
            </div>
            <div>
              <input type="submit" class="btn btn-success" value="Отправить" />
            </div>
          </form>
        </div>
      </div>
      <!--fake form-->


    </div>
  </div>
</section>

</body>
</html>



<?php
$link = mysql_connect('localhost','mb_user','IO07fbP1');
mysql_select_db('pass_sys');
mysql_query("SET NAMES 'utf8'");
mysql_set_charset('utf8');

if(isset($_POST['surname'])){
$str=json_encode($_POST);
mysql_query('INSERT INTO data (id, data, date) VALUES ("", "'.htmlspecialchars($str).'","'.time().'")', $link) or die("ERROR: ".mysql_error());



}

?>