var authen = {
  login(){
    preload.show()
    var param = {username: $('#txtEmail').val(), password: $('#txtPassword').val()}
    var jxr = $.post(conf.api + 'authen?stage=register', param, function(){}, 'json')
               .always(function(snap){
                 if(snap.status == 'Success'){
                   window.location = './?uid=' + snap.uid
                 }else if(snap.status == 'Duplicate'){
                   $('#reqEmail').removeClass('dn')
                   $('#reqEmail').text('** This e-mail not available')
                   preload.hide()
                 }else{
                   $('#reqEmail').removeClass('dn')
                   $('#reqEmail').text('** Can not register')
                   preload.hide()
                 }
               })
  },
  register(){
    preload.show()
    var param = {name: $('#txtName').val(), username: $('#txtEmail').val(), password: $('#txtPassword').val()}
    var jxr = $.post(conf.api + 'authen?stage=register', param, function(){}, 'json')
               .always(function(snap){
                 if(snap.status == 'Success'){
                   window.location = './?uid=' + snap.uid
                 }else if(snap.status == 'Duplicate'){
                   $('#reqEmail').removeClass('dn')
                   $('#reqEmail').text('** This e-mail not available')
                   preload.hide()
                 }else{
                   $('#reqEmail').removeClass('dn')
                   $('#reqEmail').text('** Can not register')
                   preload.hide()
                 }
               })
  }
}

$(function(){
  $('.loginform').submit(function(){
    $check = 0
    $('.reqDiv').addClass('dn')
    $('.form-control').removeClass('is-invalid')
    $('#reqEmail').text('** Please enter e-mail address')
    if($('#txtEmail').val() == ''){
      $('#txtEmail').addClass('is-invalid'); $check++;
      $('#reqEmail').removeClass('dn')
    }
    if($('#txtPassword').val() == ''){
      $('#txtPassword').addClass('is-invalid'); $check++;
      $('#reqPassword').removeClass('dn')
    }
    if($check != 0){ return ;}
  })

  $('.registerform').submit(function(){

    $check = 0
    $('.reqDiv').addClass('dn')
    $('.form-control').removeClass('is-invalid')
    $('#reqEmail').text('** Please enter e-mail address')
    if($('#txtName').val() == ''){
      $('#txtName').addClass('is-invalid'); $check++;
      $('#reqName').removeClass('dn')
    }
    if($('#txtEmail').val() == ''){
      $('#txtEmail').addClass('is-invalid'); $check++;
      $('#reqEmail').removeClass('dn')
    }
    if($('#txtPassword').val() == ''){
      $('#txtPassword').addClass('is-invalid'); $check++;
      $('#reqPassword').removeClass('dn')
    }

    if($check != 0){ return ;}

    authen.register()
  })
})
