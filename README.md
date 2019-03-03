Installation
------------

```
$ composer install 
```

Commands
--------

Insert into you crontab. This task will remove featured and published signs from expired listings.

```
$ php bin/console directory-platform:unpublish-unfeature-listings
```

Doctrine
--------

```
$ php bin/console doctrine:database:drop --force
```

```
$ php bin/console doctrine:database:create
```

```
$ php bin/console doctrine:schema:update --force
```

```
$ php bin/console doctrine:query:sql "`cat database.sql`"
```

UserBundle
----------

```
$ php bin/console fos:user:create testuser test@example.com p@ssword
```

```
$ php bin/console fos:user:create sample@example.com --super-admin
```

Helpers
-------

```
$ php bin/console assets:install --symlink
```

```
$ php bin/console cache:clear --env=dev
```

```
$ php bin/console assetic:dump --env prod
```

Translations
------------

```
$ php bin/console translation:update en FrontBundle --force --output-format=po --no-prefix # for 3.2

```


```
$ npm link gulp

```


```
$ npm link gulp-sass

```


```
$ npm install --global gulp-cli

```


```
$ php bin/console fos:user:promote itsudatte

```


```
$ php bin/console cache:clear
$ php bin/console debug:translation es --domain=messages

php-xml
php-intl
php-mbstring
php-curl

```
