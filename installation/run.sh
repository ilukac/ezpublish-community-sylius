#!/bin/bash

mysql -usummer -pcamp -e "create database ezsylius character set utf8"
mysql ezsylius -usummer -pcamp < installation/db.dmp
composer install --no-dev -n

cp -R installation/ezpublish_legacy/settings/override ezpublish_legacy/settings/
cp -R installation/ezpublish_legacy/settings/siteaccess/administration ezpublish_legacy/settings/siteaccess/
cp -R installation/ezpublish_legacy/settings/siteaccess/eng ezpublish_legacy/settings/siteaccess/
cp -R installation/ezpublish_legacy/var/autoload ezpublish_legacy/var/
cp -R installation/ezpublish_legacy/var/ezdemo_site ezpublish_legacy/var/

php ezpublish/console assets:install --symlink --relative
php ezpublish/console assetic:dump
php ezpublish/console assetic:dump --env=prod web
php ezpublish/console cache:clear --no-warmup

