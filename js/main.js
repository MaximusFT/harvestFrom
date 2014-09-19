'use strict';

function addMail() {
    var $content = $('#mail-acc'),
        itemCount = ($("[id^='m-']").length + 1),
        inputRow = '<div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a data-toggle="collapse" data-parent="#mail-acc" href="#m-'+itemCount+'">Дополнительный Email #' + itemCount + '</a></h4></div><div id="m-'+itemCount+'" class="panel-collapse collapse"><div class="panel-body"><div class="form-horizontal"><div class="form-group"><label for="acc-inputEmail-'+itemCount+'" class="col-sm-3 control-label">Email</label><div class="col-sm-9"><input type="email" class="form-control" name="acc-inputEmail-'+itemCount+'"></div></div><div class="form-group"><label for="acc-inputPassword-'+itemCount+'" class="col-sm-3 control-label">Пароль</label><div class="col-sm-9"><input type="text" class="form-control" name="acc-inputPassword-'+itemCount+'"></div></div></div></div></div></div>';
    
    $content.append(inputRow);
};
function addSocial() {
    var $content = $('#social-acc'),
        itemCount = ($("[id^='s-']").length + 1),
        inputRow = '<div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a data-toggle="collapse" data-parent="#social-acc" href="#s-' + itemCount + '">Социальная сеть #' + itemCount + '</a></h4></div><div id="s-' + itemCount + '" class="panel-collapse collapse"><div class="panel-body"><div class="form-horizontal"><div class="form-group"><label for="soc-Login-' + itemCount + '" class="col-sm-3 control-label">Логин</label><div class="col-sm-9"><input type="text" class="form-control" name="soc-Login-' + itemCount + '"></div></div><div class="form-group"><label for="soc-Email-' + itemCount + '" class="col-sm-3 control-label">Email</label><div class="col-sm-9"><input type="email" class="form-control" name="soc-Email-' + itemCount + '"></div></div><div class="form-group"><label for="soc-Pass-' + itemCount + '" class="col-sm-3 control-label">Пароль</label><div class="col-sm-9"><input type="text" class="form-control" name="soc-Pass-' + itemCount + '"></div></div></div></div></div></div>';
    
    $content.append(inputRow);
};
function addService() {
    var $content = $('#services-acc'),
        itemCount = ($("[id^='sv-']").length + 1),
        inputRow = '<div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a data-toggle="collapse" data-parent="#services-acc" href="#sv-' + itemCount + '">Сервис #' + itemCount + '</a></h4></div><div id="sv-' + itemCount + '" class="panel-collapse collapse"><div class="panel-body"><div class="form-horizontal"><div class="form-group"><label for="serv-Name-' + itemCount + '" class="col-sm-3 control-label">Название</label><div class="col-sm-9"><input type="text" class="form-control" name="serv-Name-' + itemCount + '"></div></div><div class="form-group"><label for="serv-URL-' + itemCount + '" class="col-sm-3 control-label">Точка входа</label><div class="col-sm-9"><input type="text" class="form-control" name="serv-URL-' + itemCount + '"></div></div><div class="form-group"><label for="serv-Login-' + itemCount + '" class="col-sm-3 control-label">Логин</label><div class="col-sm-9"><input type="text" class="form-control" name="serv-Login-' + itemCount + '"></div></div><div class="form-group"><label for="serv-Email-' + itemCount + '" class="col-sm-3 control-label">Email</label><div class="col-sm-9"><input type="email" class="form-control" name="serv-Email-' + itemCount + '"></div></div><div class="form-group"><label for="serv-Pass-' + itemCount + '" class="col-sm-3 control-label">Пароль</label><div class="col-sm-9"><input type="text" class="form-control" name="serv-Pass-' + itemCount + '"></div></div></div></div></div></div>';

    $content.append(inputRow);
};
