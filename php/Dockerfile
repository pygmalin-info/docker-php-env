FROM php:8.2-apache

# mod_rewrite有効化（.htaccessで必要）
RUN a2enmod rewrite

# .htaccessを有効にするため AllowOverride All を設定（Docker特有）
RUN sed -i \
    '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' \
    /etc/apache2/apache2.conf

# 推奨？日本語環境設定
RUN apt-get update && apt-get install -y locales \
    && echo "ja_JP.UTF-8 UTF-8" > /etc/locale.gen \
    && locale-gen ja_JP.UTF-8

ENV LANG ja_JP.UTF-8


# PDO MySQLドライバをインストール
RUN docker-php-ext-install pdo_mysql