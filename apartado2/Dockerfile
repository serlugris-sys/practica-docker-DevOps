# Apartado 2: Imagen basada en Ubuntu con Apache + PHP
FROM ubuntu:22.04

# Evitar preguntas interactivas durante la instalación
ENV DEBIAN_FRONTEND=noninteractive

# Actualizar repositorios e instalar Apache, PHP y git
RUN apt-get update && apt-get install -y \
    apache2 \
    php \
    libapache2-mod-php \
    git \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Descargar la aplicación PHP desde GitHub con git clone
# (Usamos como ejemplo un repositorio público sencillo sin base de datos)
RUN rm -rf /var/www/html/* && \
    git clone https://github.com/banago/simple-php-website.git /var/www/html/

# Ajustar permisos
RUN chown -R www-data:www-data /var/www/html/

# Exponer el puerto 80
EXPOSE 80

# Arrancar Apache en primer plano (necesario para que el contenedor no se detenga)
CMD ["apache2ctl", "-D", "FOREGROUND"]
