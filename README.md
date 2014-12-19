This repo contains ansible code to install a zabbix-server

When cloning from github, simply run:

    rake

When using galaxy, simply run:

    ansible-galaxy install Azulinho.azulinho-zabbix-server

To consume this role, add the following variables to either group_vars/all,
or into a wrapper_role <role/wrapper_role/vars/main.yaml>

VARIABLES:

    azulinho_zabbix_server:
      nodeid: 999
      zabbix_password: zabbix
      zabbix_host: localhost
      mysql_username: zabbix
      mysql_password: password
      mysql_port: 3306
      mysql_start_pollers: 25
      mysql_start_trappers: 25
      server_port: 10051
      dbname: zabbix
      dbhost: localhost

