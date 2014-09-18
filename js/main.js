// $(".form_block.fake input").attr('disabled',true);

mailFields = 0;

function addMail() {
    var content = $('#mail-acc');
    var add = $('#add-mail');
    var itemCount = ($("[id^='m-']").length + 1);

    var inputRow = '<div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a data-toggle="collapse" data-parent="#mail-acc" href="#m-' + itemCount + '">Дополнительный Email #' + itemCount + '</a></h4></div><div id="m-' + itemCount + '" class="panel-collapse collapse"><div class="panel-body"><fieldset><div class="form-horizontal"><div class="form-group"><label for="inputEmail3" class="col-sm-3 control-label">Email</label><div class="col-sm-9"><input type="email" class="form-control" id="inputEmail3"></div></div><div class="form-group"><label for="inputPassword3" class="col-sm-3 control-label">Пароль</label><div class="col-sm-9"><input type="password" class="form-control" id="inputPassword3"></div></div></div></fieldset></div></div></div>';
    if (mailFields != 2) {
        $(content).get(0).innerHTML += inputRow;
        mailFields += 1;
    } else {
        $(content).get(0).innerHTML += "<br />Ладн-ладн, фатит мне и этих мыл";
        $(add).attr('disabled', true);
    }
}


socialFields = 0;

function addSocial() {
    var content = $('#social-acc');
    var add = $('#add-social');
    var itemCount = ($("[id^='s-']").length + 1);

    var inputRow = '<div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a data-toggle="collapse" data-parent="#social-acc" href="#s-' + itemCount + '">Социальная сеть #' + itemCount + '</a></h4></div><div id="s-' + itemCount + '" class="panel-collapse collapse"><div class="panel-body"><fieldset><div class="form-horizontal"><div class="form-group"><label for="inputEmail3" class="col-sm-3 control-label">Логин</label><div class="col-sm-9"><input type="email" class="form-control" id="inputEmail3"></div></div><div class="form-horizontal"><div class="form-group"><label for="inputEmail3" class="col-sm-3 control-label">Email</label><div class="col-sm-9"><input type="email" class="form-control" id="inputEmail3"></div></div><div class="form-group"><label for="inputPassword3" class="col-sm-3 control-label">Пароль</label><div class="col-sm-9"><input type="password" class="form-control" id="inputPassword3"></div></div></div></div></fieldset></div></div></div>';
    if (socialFields != 2) {
        $(content).get(0).innerHTML += inputRow;
        socialFields += 1;
    } else {
        $(content).get(0).innerHTML += "<br />Ладн-ладн, и сетей мне ваших фатит";
        $(add).attr('disabled', true);
    }
}


servicesFields = 0;

function addService() {
    var content = $('#services-acc');
    var add = $('#add-service');
    var itemCount = ($("[id^='sv-']").length + 1);

    var inputRow = '<div class="panel panel-default"><div class="panel-heading"><h4 class="panel-title"><a data-toggle="collapse" data-parent="#services-acc" href="#sv-' + itemCount + '">Сервис #' + itemCount + '</a></h4></div><div id="sv-' + itemCount + '" class="panel-collapse collapse"><div class="panel-body"><fieldset><div class="form-horizontal"><div class="form-group"><label for="inputEmail3" class="col-sm-3 control-label">Название</label><div class="col-sm-9"><input type="email" class="form-control" id="inputEmail3"></div></div><div class="form-horizontal"><div class="form-group"><label for="inputEmail3" class="col-sm-3 control-label">Точка входа</label><div class="col-sm-9"><input type="email" class="form-control" id="inputEmail3"></div></div><div class="form-horizontal"><div class="form-group"><label for="inputEmail3" class="col-sm-3 control-label">Логин</label><div class="col-sm-9"><input type="email" class="form-control" id="inputEmail3"></div></div><div class="form-horizontal"><div class="form-group"><label for="inputEmail3" class="col-sm-3 control-label">Email</label><div class="col-sm-9"><input type="email" class="form-control" id="inputEmail3"></div></div><div class="form-group"><label for="inputPassword3" class="col-sm-3 control-label">Пароль</label><div class="col-sm-9"><input type="password" class="form-control" id="inputPassword3"></div></div></div></fieldset></div></div></div>';
    if (servicesFields != 2) {
        $(content).get(0).innerHTML += inputRow;
        servicesFields += 1;
    } else {
        $(content).get(0).innerHTML += "<br />Где ж ты их нашёл столько?!";
        $(add).attr('disabled', true);
    }
}
