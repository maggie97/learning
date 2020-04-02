# Para poder visualizar la pagina web 

## Descargar el repositorio a tu computadora 

````
git clone <url_repositorio>
````
## Crear el achivo .env de configuraciones 
- Entrar a la carpeta blog e identificar el archivo .env.example.
- Duplicar el archivo y cambiar el nombre a **.env**
- Editar el archivo 
- Crear un archivo en la carpeta database con el nombre que desees pero con la extension **.sqlite** el cual servira para alojar la base de datos 
- En el archivo .env cambiar el nombre de la base de datos por el path (direccion en tu computadora) del archivo creado en el paso anterior 
## Instalar las dependencias faltantes 

````
composer install 
````
## Generar la llave para Laravel

````
php artisan migrate 
````
## Generar la base de datos 

````
php artisan migrate 
````

### Nota si hubiera algun problema del lado del front, (no estuviera descargado bootstrap o vue o react) ejecutar lo siguiente 

````
php artisan bootstrap 
php artisan vue 
php artisan react 
npm install 
npm run dev
````

### Si hubiera algun problema con la base de datos 
- Revisamos donde esta nuestro archivo php.ini, el siguiente comando nos dara la ubicacion del archivo  

````
php -i | grep php.ini
````
- Con esta ubicacion del archivo revisar el archivo correspondiente y descomentar las lineas siguientes 
````
;extension=pdo_sqlite.so
;extension=pdo_sqlite3.so
````
