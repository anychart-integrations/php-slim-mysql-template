[<img src="https://cdn.anychart.com/images/logo-transparent-segoe.png?2" width="234px" alt="AnyChart - Robust JavaScript/HTML5 Chart library for any project">](https://anychart.com)
Ruby basic template
=========================

This example shows how to use Anychart library with the PHP programming language, Slim micro framework and MySQL database.

## Running

To use this sample you must have PHP installed (if not, please, install it http://php.net/manual/en/faq.installation.php);
MySQL installed and running (if not please check out https://dev.mysql.com/downloads/installer/ and follow instructions http://dev.mysql.com/doc/refman/5.7/en/installing.html)

To check your installations, run the following command in the command line:
```
$ php -v
PHP 5.6.27-1+deb.sury.org~trusty+1 (cli)  # sample output
Copyright (c) 1997-2016 The PHP Group
Zend Engine v2.6.0, Copyright (c) 1998-2016 Zend Technologies
    with Zend OPcache v7.0.6-dev, Copyright (c) 1999-2016, by Zend Technologies
$ mysql --version
mysql  Ver 14.14 Distrib 5.5.52, for debian-linux-gnu (x86_64) using readline 6. # sample output
```

To start this example run commands listed below.

Clone the repository from github.com:
```
$ git clone git@github.com:anychart-integrations/php-slim-mysql-template.git
```

Navigate to the repository folder:
```
$ cd php-slim-mysql-template
```

Install dependencies:
```
$ php composer.phar install
```
Ensure you have php-mysql being installed, run:
```
$ php -m
```
If there isn't 'mysql' install it:
```
$ sudo apt-get install php{your_php_version}-mysql # e.g. sudo apt-get install php5.6-mysql
```

Set up MySQL database, use -u -p flags to provide username and password:
```
$  mysql < database_backup.sql
```

Navigate to public folder and run example:
```
$ cd public
$ php -S localhost:8080
```

Open browser at http://localhost:8080/

## Workspace
Your workspace should look like:
```
php-slim-mysql-template/
    logs/               # log folder
    public/
        static/
            css/
                style.css       # css style
        index.php
    src/
        classes/
            FruitEntity.php     # model
            FruitMapper.php     # model to db mapper
            Mapper.php          # base mapper class
        dependencies.php        # for setting app dependencies
        routes.php              # app routes
        settings.php            # base settings
    templates/
        index.phtml             # main template
    composer.json               # composer project settings
    composer.lock
    composer.phar
    database_backup.sql     # MySQL database dump
    LICENSE
    README.md
```

## Technologies
Language - [Ruby](https://www.ruby-lang.org)<br />
Database - [MySQL](https://www.mysql.com/)<br />
Web framework - [sinatra](http://www.sinatrarb.com/)<br />

## Further Learning
* [Documentation](https://docs.anychart.com)
* [JavaScript API Reference](https://api.anychart.com)
* [Code Playground](https://playground.anychart.com)
* [Technical Support](https://anychart.com/support)

## License
[© AnyChart.com - JavaScript charts](http://www.anychart.com). Released under the [Apache 2.0 License](https://github.com/anychart-integrations/php-slim-mysql-template/blob/master/LICENSE).
