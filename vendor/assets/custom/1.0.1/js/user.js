var user = {
  init(){
    console.log($('#txtUid').val());
    if($('#txtUid').val() == ''){
      window.location = conf.domain + 'login'
    }
  }
}

user.init()
