# InmoGest

![InmoGest Logo](https://endigitalweb.com/wp-content/uploads/2022/12/EDW_Logo_Lateral.png)

InmoGest es una aplicación web diseñada para la gestión de inmuebles y sus reparaciones. La aplicación permite a los usuarios registrar, editar y eliminar tipos de porterías, cocinas, y gestionar solicitudes de reparación, entre otras funcionalidades.

## Características

- **Gestión de inmuebles**: Añadir, editar y eliminar diferentes tipos de inmuebles.
- **Gestión de reparaciones**: Crear y gestionar solicitudes de reparación.
- **Listados**: Ver listados de tipos de porterías, cocinas, etc.
- **Notificaciones**: Recibir notificaciones sobre el estado de las solicitudes.
- **Interfaz amigable**: Interfaz de usuario intuitiva y fácil de usar.

## Requisitos

- PHP 7.4 o superior
- Laravel 8.x o superior
- MySQL 5.7 o superior
- Composer
- Node.js y npm

## Instalación

1. Clona el repositorio:

    ```bash
    git clone https://github.com/tu-usuario/inmogest.git
    ```

2. Navega al directorio del proyecto:

    ```bash
    cd inmogest
    ```

3. Instala las dependencias de Composer:

    ```bash
    composer install
    ```

4. Copia el archivo de configuración y configura tus variables de entorno:

    ```bash
    cp .env.example .env
    ```

5. Genera la clave de la aplicación:

    ```bash
    php artisan key:generate
    ```

6. Configura tu base de datos en el archivo `.env`.

7. Ejecuta las migraciones y seeder:

    ```bash
    php artisan migrate --seed
    ```

8. Instala las dependencias de npm:

    ```bash
    npm install
    ```

9. Compila los assets:

    ```bash
    npm run dev
    ```

10. Inicia el servidor:

    ```bash
    php artisan serve
    ```

11. Accede a la aplicación en tu navegador en la dirección `http://localhost:8000`.

## Uso

- **Tipos de porterías**: Gestiona los tipos de porterías desde el menú correspondiente.
- **Tipos de cocinas**: Gestiona los tipos de cocinas desde el menú correspondiente.
- **Solicitudes de reparación**: Crea y gestiona solicitudes de reparación desde el menú de solicitudes.

## Contribuir

Si deseas contribuir a este proyecto, por favor sigue los siguientes pasos:

1. Haz un fork del repositorio.
2. Crea una nueva rama (`git checkout -b feature/nueva-funcionalidad`).
3. Realiza tus cambios y haz commit (`git commit -am 'Añadir nueva funcionalidad'`).
4. Empuja los cambios a tu rama (`git push origin feature/nueva-funcionalidad`).
5. Abre un Pull Request.

## Licencia

Este proyecto está bajo la Licencia MIT. Para más información, consulta el archivo `LICENSE`.

## Contacto

Si tienes alguna pregunta o sugerencia, no dudes en abrir un issue o contactar a [jclavijo@endigitalweb.com](mailto:jclavijo@endigitalweb.com).
