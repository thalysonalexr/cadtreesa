# cadtreesa

[![Release version](https://img.shields.io/github/v/release/thalysonalexr/cadtreesa?label=version&style=flat-square)](https://img.shields.io/github/v/release/thalysonalexr/cadtreesa?label=version&style=flat-square)
[![License](https://img.shields.io/github/license/thalysonalexr/cadtreesa?color=blue&style=flat-square)](https://img.shields.io/github/license/thalysonalexr/cadtreesa?color=blue&style=flat-square)


<p style="text-align: center;">
 <img style="width: 500px;" title="Cadtreesa" src=https://github.com/thalysonalexr/cadtreesa/raw/master/docs/logo-pagina.png>
</p>

🐘 Cadtreesa project website ☕

## Cadtreesa Project - WEB page

Development of the WEB page for the Cadtreesa project (Cadastre of Trees of Systems & Agricultural) of the discipline of Concepts of programming languages ​​of UFMT.

## Purpose

The web page of the Cadtreesa project was developed with the purpose of being the output of the data of the trees registered and validated in the Cadtreesa application for android from different URLs generated and made available in QR code.

## Architecture

This application was built on the basis of the architecture model [MVC](https://en.wikipedia.org/wiki/MVC).

## tested on PHP and MySQL server

* PHP: 7.1.9
* MySQL: 5.7.19

``` bash
$ php -S localhost:8888 -t public
```

## Running

<div style="text-align: center"><img title="Cadtreesa running" src=https://github.com/thalysonalexr/cadtreesa/raw/master/docs/testing-mobile.gif></div>

## Dependencies

This project uses several front-end and back-end web development technologies. The project uses composer for management of PHP dependencies (look at [composer.json](https://github.com/thalysonalexr/cadtreesa/blob/master/composer.json)) and CDNJS for dependencies of libraries like bootstrap, jquery. Here are the technologies used in this:

* Front-end
  * [HTML5](https://developer.mozilla.org/pt-BR/docs/Web/HTML/HTML5)
  * [CSS3](https://developer.mozilla.org/pt-BR/docs/Web/CSS)
  * [Twitter Boostrap 3.3.7](//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css)
  * [Font awesome](//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css)
  * [JQuery 3.3.1](//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js)
  * [Google Maps APIs](https://developers.google.com/maps/?hl=pt-br)

* Back-end
  * [PHP 7.1.9](http://php.net/releases/7_1_9.php)
  * [MySQL 5.7.19](https://dev.mysql.com/doc/relnotes/mysql/5.7/en/news-5-7-19.html)

### Composer

project dependencies

``` bash
$ composer update
```

``` bash
## sending emails with smtp
$ composer require phpmailer/phpmailer
```

``` bash
## project routes
$ composer require klein/klein
```

``` bash
## QR Code of the current tree
$ composer require aferrandini/phpqrcode
```

## Credits

- [Thalyson Alexandre Rodrigues de Sousa](https://github.com/thalysonalexr)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
