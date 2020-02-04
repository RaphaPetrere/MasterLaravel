# MasterLaravel
A Laravel 5.8 PHP course for Beginners

Here's some things u might want to know beforehand:
  • U need to remove the "#" from httpd.conf at line 488, so it allows u to use vhosts.conf ;
  • U need to configure the vhosts.conf through nano by adding 127.0.0.1 and the URL laravel.test
    and u need to add the following line : 
    <VirtualHost laravel.test:80>
      DocumentRoot "/opt/lampp/htdocs/LaravelCourse/laravel/public" 
      <Directory "/opt/lampp/htdocs/LaravelCourse/laravel">
            Options Indexes FollowSymLinks
            AllowOverride All
            Require all granted
      </Directory>
    </VirtualHost>
    so u can use the path laravel.test as :80 just like localhost;
