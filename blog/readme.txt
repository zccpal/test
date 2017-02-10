127.0.0.1       www.redis2.net后台
127.0.0.1       www.redis.net前台

apache
<VirtualHost *:80>
    DocumentRoot "D:\phpStudy\WWW\blog\frontend\web"
    ServerName www.redis.net
    ServerAlias redis.net
  <Directory "D:\phpStudy\WWW\blog\frontend\web">
      Options FollowSymLinks ExecCGI
      AllowOverride All
      Order allow,deny
      Allow from all
      Require all granted
  </Directory>
</VirtualHost>

<VirtualHost *:80>
    DocumentRoot "D:\phpStudy\WWW\blog\backend\web"
    ServerName www.redis2.net
    ServerAlias redis2.net
  <Directory "D:\phpStudy\WWW\blog\backend\web">
      Options FollowSymLinks ExecCGI
      AllowOverride All
      Order allow,deny
      Allow from all
      Require all granted
  </Directory>
</VirtualHost>
