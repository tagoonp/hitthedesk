const conf = {
  domain: 'http://localhost/hitthedesk/',
  api: 'http://localhost/hitthedesk/controller/',
  prefix: 'hdd2x_'
}

var current_user = window.localStorage.getItem(conf.prefix + '_uid')
var current_role = window.localStorage.getItem(conf.prefix + '_role')
