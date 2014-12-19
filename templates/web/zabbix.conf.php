<?php
// Zabbix GUI configuration file
global $DB;

$DB["TYPE"] = 'MYSQL';
$DB["SERVER"] = '{{ azulinho_zabbix_server.dbhost |default('localhost')}}';
$DB["PORT"] = '0';
$DB["DATABASE"] = '{{ azulinho_zabbix_server.dbname |default('zabbix')}}';
$DB["USER"] = '{{ azulinho_zabbix_server.mysql_username }}';
$DB["PASSWORD"] = '{{ azulinho_zabbix_server.mysql_password }}';
$DB["SCHEMA"]  = '';

$ZBX_SERVER = '{{ azulinho_zabbix_server.zabbix_host | default('localhost') }}';
$ZBX_SERVER_PORT = '{{ azulinho_zabbix_server.server_port |default(10051) }}';
$ZBX_SERVER_NAME = '';

$IMAGE_FORMAT_DEFAULT   = IMAGE_FORMAT_PNG;
?>
