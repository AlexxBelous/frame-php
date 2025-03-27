FROM php:8.2-fpm

# Устанавливаем необходимые пакеты
RUN apt-get update \
    && apt-get install -y libpq-dev git unzip zip vim nano sudo bash-completion \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql

# Устанавливаем Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Устанавливаем Xdebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# Копируем конфиги PHP
COPY conf.d/* $PHP_INI_DIR/conf.d/

# Устанавливаем автодополнение для Git
RUN curl -o /etc/bash_completion.d/git \
    https://raw.githubusercontent.com/git/git/master/contrib/completion/git-completion.bash \
    && echo "source /etc/bash_completion.d/git" >> /etc/bash.bashrc

# Создаем пользователя с нужными правами
RUN groupadd -g 1001 myuser && \
    useradd -u 1001 -g 1001 -s /bin/bash -m myuser && \
    usermod -aG sudo myuser && \
    echo 'myuser:mypass' | chpasswd

USER myuser
