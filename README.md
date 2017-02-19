Yii2 FreeRADIUS Module
======================
Models and migration for FreeRADIUS SQL

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist zhilchenko/yii2-freeradius "*"
```

or add

```
"zhilchenko/yii2-freeradius": "*"
```

to the require section of your `composer.json` file.


Apply migration

```
php yii migrate/up --migrationPath=@vendor/zhilchenko/yii2-freeradius/src/migrations
```
