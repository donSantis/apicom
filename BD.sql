user
    id
	rut
	name
	lastname
	email
	phone
	addres
	role

product
    id
	sku
	title
	description
	price
	cant
	state
	size
	color
	category

boleta
    id
	nro_boleta
	id_user            -direccion -nombre-bla
	products[aray]
	state
	tipo_pago

category
    id
	title

size
    id
	title

color
    id
	title


role
    id
	title

city
    id
	title

subsciption
    id
	title









    #Comando vía Composer para la instalación de Laravel 8:
    $ composer create-project --prefer-dist laravel/laravel:^8.0 MyProject

    #Probamos que todo esté funcionando bien, levantando un servidor local
    $ php artisan serve

     // Estudiar
    $ php artisan vendor:publish --provider="InfyOm\Generator\InfyOmGeneratorServiceProvider"
    // Estudiar
    $ php artisan infyom:publish

    /// Actualizar o instalar composer, esto permite instalar otras librerias o frameworks

    install composer

    update composer

    //// PARA CORRER EL API
    php artisan serve

    // LIMPIA EL ARCHIVO JSON
    php artisan clear-compiled

    // LIMPIA O CREA EL ARCHIVO autoload
    composer dump-autoload

    // CREA KEY PARA CORRER EL API
     php artisan key:generate
 //////////////////////////////////

    //// PARA CREAR ARCHIVO EN CARPETA MIGRATIONS
    php artisan make:migration

    //// PARA ENVIAR A LA BD LOS ARCHIVOS DE LA CARPETA MIGRATIONS
    php artisan migrate

//////////////////////////////////

    #Generamos el CRUD a través del Generador InfyOm con el siguiente comando
    $ php artisan infyom:scaffold Example --fromTable --tableName=example --primary=id_example

    #Primero hay que crear un archivo de estructura, que permitirá crear una tabla dentro de la BD
    $ php artisan make:migration create_example

    // ROLLBACK PARA CUANDO QUERAMOS CORREGIR UNA TABLA
    php artisan infyom:rollback $MODEL_NAME$ $COMMAND_TYPE   ROLLBACK DE LOS CRUD

    php artisan infyom:rollback role scaffold

    php artisan infyom:rollback category scaffold

    php artisan infyom:rollback city scaffold

    php artisan infyom:rollback size scaffold

    php artisan infyom:rollback color scaffold

    php artisan infyom:rollback users scaffold

    php artisan infyom:rollback product scaffold

    php artisan infyom:rollback subscription scaffold

    php artisan infyom:rollback boleta scaffold

    php artisan infyom:rollback venta scaffold




        php artisan infyom:scaffold Role --fromTable --tableName=role --primary=id

        php artisan infyom:scaffold Category --fromTable --tableName=category --primary=id

        php artisan infyom:scaffold Size --fromTable --tableName=size --primary=id

        php artisan infyom:scaffold City --fromTable --tableName=city --primary=id

        php artisan infyom:scaffold Color --fromTable --tableName=color --primary=id

        php artisan infyom:scaffold Users --fromTable --tableName=users --primary=id

        php artisan infyom:scaffold Product --fromTable --tableName=product --primary=id

        php artisan infyom:scaffold Subscription --fromTable --tableName=subscription --primary=id

        php artisan infyom:scaffold Boleta --fromTable --tableName=boleta --primary=id

        php artisan infyom:scaffold Venta --fromTable --tableName=venta --primary=id
