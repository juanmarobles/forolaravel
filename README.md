# **Foro**

Este proyecto se basa en mostrar el potencial de LiveWire en la que el usuario registrado puede dejar preguntas y comentarios demostrando dinamismo en tiempo real sin necesidad de recargar la pagina en cada accion.

- **PHP**: Lenguaje de programación.
- **Laravel**: Framework de PHP para el desarrollo web.
- **Tailwind CSS**: Framework de CSS para el diseño de la interfaz de usuario.
- **Livewire**: Biblioteca de Laravel para crear componentes interactivos en tiempo real.

## **Requisitos**

Asegúrate de tener instalado lo siguiente en tu sistema antes de comenzar:

- [**XAMPP**](https://www.apachefriends.org/index.html) para la gestión de la base de datos MySQL.
- [**Composer**](https://getcomposer.org/) para la gestión de las dependencias de Laravel.
- [**Git**](https://git-scm.com/) (opcional) para el control de versiones.

## **Configuración**

### **Pasos de Configuración:**

1. Clona este repositorio en tu sistema (si aún no lo has hecho):

    ```bash
    git clone https://github.com/juanmarobles/forolaravel.git
    ```

2. Navega hasta el directorio del proyecto:

    ```bash
    cd forolaravel
    ```

3. Instala las dependencias de Composer:

    ```bash
    composer install
    ```

4. Configura el archivo `.env` para tu base de datos.

6. Genera una clave de cifrado única para tu aplicación:

    ```bash
    php artisan key:generate
    ```

7. Ejecuta las migraciones para crear las tablas en la base de datos:

    ```bash
    php artisan migrate
    ```

8. Inicia el servidor de desarrollo de Laravel:

    ```bash
    php artisan serve
    ```
 7. Inicia el servidor de desarrollo de Laravel a traves de Node:

    ```bash
    npm run dev
    ```

## **Funcionalidad**

### **Foro**

Este proyecto es un foro en el que los usuarios pueden crear preguntas y generar comentarios de manera dinámica utilizando Livewire.

1. **Preguntas**
   - Los usuarios pueden crear nuevas preguntas.
   - Los usuarios pueden ver las preguntas existentes.
   - Los usuarios pueden ver los comentarios en cada pregunta.

2. **Comentarios**
   - Los usuarios pueden agregar comentarios a las preguntas existentes.
   - Los comentarios se actualizan en tiempo real gracias a Livewire.

3. **Buscar**
   - Los usuarios pueden buscar preguntas existentes a traves de una solapa de busqueda.
   - Los usuarios pueden buscar en tiempo real temas por categoria.

## **Tecnologías Utilizadas**

- **Laravel**: Framework de PHP para el desarrollo web.
- **MySQL**: Sistema de gestión de bases de datos.
- **Tailwind CSS**: Framework de CSS para el diseño de la interfaz de usuario.
- **Livewire**: Biblioteca de Laravel para crear componentes interactivos en tiempo real.

## **Licencia**

Este proyecto está bajo la licencia de [Juan Manuel, Robles]. Todos los derechos reservados.
