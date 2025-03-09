# OptionPackage

**OptionPackage** es un paquete para Laravel que permite gestionar opciones polimórficas asociadas a cualquier modelo. Facilita la asignación, recuperación y eliminación de opciones específicas para distintos modelos en tu aplicación.

## Características

- **Gestión de Opciones Polimórficas:** Asocia opciones a cualquier modelo utilizando relaciones polimórficas.
- **Fácil Integración:** Incluye un trait que simplifica la implementación en tus modelos.
- **Controladores y Rutas Predeterminadas:** Proporciona controladores y rutas para gestionar opciones a través de API.

## Requisitos

- **PHP:** >=8.0
- **Laravel:** >=11.0

## Instalación

1. **Instalar el paquete vía Composer:**

   ```bash
   composer require luinuxscl/option-package
   ```

2. **Publicar y ejecutar las migraciones:**

   Publica las migraciones del paquete:

   ```bash
   php artisan vendor:publish --provider="Luinuxscl\OptionPackage\Providers\OptionServiceProvider" --tag="migrations"
   ```

   Luego, ejecuta las migraciones:

   ```bash
   php artisan migrate
   ```

3. **Publicar el archivo de configuración (opcional):**

   Si deseas personalizar la configuración del paquete, puedes publicar el archivo de configuración:

   ```bash
   php artisan vendor:publish --provider="Luinuxscl\OptionPackage\Providers\OptionServiceProvider" --tag="config"
   ```

## Uso

1. **Incorporar el trait `HasOptions` en tus modelos:**

   Añade el trait `HasOptions` a cualquier modelo que desees que tenga opciones:

   ```php
   use Illuminate\Database\Eloquent\Model;
   use Luinuxscl\OptionPackage\Traits\HasOptions;

   class User extends Model
   {
       use HasOptions;
   }
   ```

2. **Asignar, obtener y eliminar opciones:**

   - **Asignar una opción:**

     ```php
     $user->setOption('theme', 'dark');
     ```

   - **Obtener una opción:**

     ```php
     $theme = $user->getOption('theme', 'light'); // 'light' es el valor por defecto si no se encuentra la opción
     ```

   - **Eliminar una opción:**

     ```php
     $user->removeOption('theme');
     ```

3. **Uso de la Facade `Option` para opciones globales:**

   También puedes utilizar la Facade `Option` para gestionar opciones globales:

   ```php
   use Luinuxscl\OptionPackage\Facades\Option;

   // Asignar una opción global
   Option::set('site_name', 'Mi Sitio Web');

   // Obtener una opción global
   $siteName = Option::get('site_name');

   // Eliminar una opción global
   Option::remove('site_name');
   ```

## Configuración

El archivo de configuración `option.php` permite definir ajustes personalizados para el paquete. Después de publicarlo, puedes encontrarlo en el directorio `config` de tu aplicación. Las opciones disponibles incluyen:

- **default_model:** Define un modelo por defecto para las opciones globales.

## Contribuciones

¡Las contribuciones son bienvenidas! Si deseas mejorar este paquete, por favor, envía un pull request o abre un issue en el repositorio de GitHub.

## Licencia

Este paquete está licenciado bajo la licencia MIT. Consulta el archivo `LICENSE` para más información.

## Autor

- **Nombre:** Luis Sepúlveda
- **GitHub:** [luinuxscl](https://github.com/luinuxscl)
- **Email:** lsepulveda@outlook.com
- **Página web:** [like.cl](https://like.cl)