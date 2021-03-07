# ip-logger

<br>

Used: [Anti-Proxy-VPN](https://github.com/HideakiAtsuyo/Anti-Proxy-VPN) By [Cleaner-Discord](https://github.com/Cleaner-Discord)

<br>

## Speed Setup Video:

[Here(YouTube)](https://www.youtube.com/watch?v=6OOnHM3LQ_c) (Old but always usable)

## Informations and settings


Basic PHP ip logger for kids who can't ip log.<br>Later this can be updated for add better things because too basics sorry i want to help you skids just wait :/<br><br>Grab IPs in a database and if the ip is already in, die with `:(`<br><br>You can protect IPs in the config file<br><br>Used: MariaDB Server, PHPMYADMIN and apache2(work also with nginx, and httpd for #centos lol :))<br>BLABLA = ip or mydomain.extension<br>DBNAME = the name choosend for the db<br><br>Go to: https://BLABLA/phpmyadmin/server_databases.php?server=1 create a database with name "iplogger" you can change this isn't a magic trick ;)<br>After go to: https://BLABLA/phpmyadmin/db_import.php?db=DBNAME "https://i.imgur.com/FeDkGCe.png" (YEAH FRENCH JUST USE THE BUTTONS!?)<br>Now set the settings in `config.php`<br>
```php
<?php
return (object) array(
    'host' => 'localhost',
    'dbName' => 'db',
    'user' => 'root',
    'pass' => 'password',

    'cloudflare' => true,
    'ProtectedIPs' => ["ip1", "ip2"]
);
?>
```

You also need to modify [This](https://github.com/HideakiAtsuyo/ip-logger/blob/75d508f252dcece0451cdfba28cbcf7c4ab9335a/config.php#L8) you need to set it to `true` or `false`(`true` only if you're using CloudFlare)


Replace : `root`, `password` and `db`(db name) if you change the db name and save...<br>

<br>

## List of the IPs

BLABLA = VPS IP or DOMAIN.EXTENSION<br>You can go to: `https://BLABLA/list.php` to see the IPs logged

<br>EASY NO!?<br><br><br>To Do:<br>- I don't know give some ideas for the ip-logger or projects ideas
