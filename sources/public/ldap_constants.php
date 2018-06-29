<?php
				defined('LDAP_ENABLED') || define('LDAP_ENABLED','true');
                defined('LDAP_HOST') || define('LDAP_HOST','localhost');
                defined('LDAP_PORT') || define('LDAP_PORT','389');
                defined('LDAP_USERNAME') || define('LDAP_USERNAME','uid=devadmin,ou=users,dc=yunohost,dc=org');
                defined('LDAP_PASSWORD') || define('LDAP_PASSWORD','Pxxxx');
                defined('LDAP_ACCOUNTFILTERFORMAT') || define('LDAP_ACCOUNTFILTERFORMAT','uid=%s');
                defined('LDAP_ACCOUNTDOMAINNAME') || define('LDAP_ACCOUNTDOMAINNAME','yunohost.org');
                defined('LDAP_ACCOUNTDOMAINNAMESHORT') || define('LDAP_ACCOUNTDOMAINNAMESHORT','yunohost');
                defined('LDAP_ACCOUNTCANONICALFORM') || define('LDAP_ACCOUNTCANONICALFORM','1');
				defined('LDAP_BASEDN') || define('LDAP_BASEDN','ou=users,dc=yunohost,dc=org');
                defined('LDAP_SUPER_ADMIN_USERNAME') || define('LDAP_SUPER_ADMIN_USERNAME','devadmin');

			   
	         ?>