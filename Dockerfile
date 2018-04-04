FROM php:7-cli
COPY . /usr/src/economize
WORKDIR /usr/src/economize
CMD [ "php", "./index.php" ]