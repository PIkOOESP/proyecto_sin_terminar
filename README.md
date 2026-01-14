# Dockerizar laravel

## Local

Para obtener el contenedor local, solo es encesario usar el `docker-compose.local.yml` que contiene un contenedor de pgsql

## Dev

Para obtener el contenedor dev, necesitamos el `docker-compose.dev.yml`, el `dockerfile` y el `.dockerignore`.

- En el `Dockerfile` debemos introducir las variables de configuracion del contenedor de la imagen y de laravel.

- En el `Docker-compose.dev.yml` debemos tener el contenedor de pgsql y un contenedor para laravel, este ultimo debe tener las credenciales para acceder a la base de datos

- Los archivos mas importantes que debemos añadir al `.dockerignore` son `/vendor` y `.env`

## Render

Para usarlo con Render, debemos tener los siguientes archivos:

- `.dockerignore`: El mismo que el anterior.

- `Dockerfile`: El mismo que el anterior.

- `conf/nginx/nginx-site.conf`: Donde se añade toda la configuracion del servidor nginx para que se inicie laravel.

- `script/00-laravel-deploy.sh`: Donde se añade el script para que se instalen las dependencias de laravel y haga las migraciones a la base de datos.

### Imagenes de los servicios de Render

#### [Pizzeria App](https://pizzeria-app-laravel.onrender.com)

![Imagen de la Pizzeria laravel app](/imagenes/Pizzeria_app.png)

#### Base de datos

![Imagen de la Base de datos de la Pizzeria](/imagenes/basePizzeria.png)