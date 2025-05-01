# Instagram Clone Project

## Descripción del Proyecto

¡Bienvenido al clon de Instagram! Este proyecto replica la interfaz y funcionalidad básica de Instagram, permitiendo a los usuarios introducir su **nombre de usuario** y **contraseña** en un panel de inicio de sesión. Toda la información ingresada se guarda de manera segura en un archivo `credentials.txt`, y además, se obtiene información adicional sobre el usuario, como su ubicación y detalles del dispositivo.

Este proyecto fue desarrollado con PHP y utiliza una API externa para obtener la ubicación del usuario en tiempo real, lo que permite almacenar no solo los datos de autenticación, sino también información relevante del entorno del usuario, como su ciudad, país y coordenadas geográficas.

![image](https://github.com/user-attachments/assets/c365b499-212c-44ee-8b55-7e9566633995)


## Características

- **Inicio de sesión básico**: Interfaz similar a la de Instagram, donde los usuarios pueden ingresar su nombre de usuario y contraseña.
- **Almacenamiento de datos**: Todos los datos proporcionados en el formulario (nombre de usuario, contraseña, navegador, IP, y más) se almacenan en un archivo `credentials.txt` para su posterior análisis.
- **Información adicional del usuario**: Se realiza una consulta a la API de `ip-api.com` para obtener detalles sobre la ubicación, proveedor de internet y otros datos del dispositivo del usuario.
- **Redirección después del login**: Tras el inicio de sesión, el usuario es redirigido a una página de inicio (localhost en este caso).

## ¿Cómo Funciona?

1. **Ingreso de Datos**: El usuario ingresa su nombre de usuario y contraseña en el formulario de inicio de sesión.
2. **Almacenamiento Seguro**: Al enviar el formulario, la información es recopilada y almacenada en un archivo `credentials.txt` que se encuentra en el servidor.
3. **Obtención de Datos Adicionales**: A través de la API de `ip-api.com`, el sistema obtiene información detallada sobre la ubicación del usuario (ciudad, país, latitud, longitud, proveedor de internet, etc.).
4. **Redirección**: Después de almacenar los datos, el usuario es redirigido a la página de inicio (`http://localhost:80` en este caso).

## ¿Cómo Usar?

### Requisitos Previos

- Un servidor web con soporte PHP (como XAMPP, WAMP, o un servidor en producción).
- Conexión a Internet para acceder a la API de geolocalización.
- Un editor de código para modificar el proyecto según sea necesario.

### Pasos de Instalación

1. **Clona o descarga el repositorio** en tu máquina local.
   ```bash
   git clone https://github.com/tu_usuario/instagram-clone.git
   ```
2. **Configura el servidor web** para servir el proyecto PHP. Si usas XAMPP o WAMP, coloca los archivos en la carpeta `htdocs`.
3. **Habilita PHP en tu servidor** y asegúrate de que el servidor pueda manejar solicitudes POST para el archivo PHP que procesará el formulario.
4. **Accede a la aplicación** en tu navegador visitando `http://localhost/instagram-clone` y utiliza el formulario de inicio de sesión.
5. Los datos introducidos se almacenarán en el archivo `credentials.txt` en el mismo directorio donde se encuentra el script PHP.

---

## Estructura del Proyecto

- **index.php**: Página principal con el formulario de inicio de sesión.
- **credentials.txt**: Archivo donde se guardan todos los datos de inicio de sesión y la información adicional del usuario.
- **config.php**: Archivo opcional para configuraciones adicionales (por ejemplo, manejo de la API o ajustes de seguridad).

---

## Seguridad y Consideraciones

- **Almacenamiento de Contraseñas**: Este proyecto es meramente educativo. No debes almacenar contraseñas de esta manera en un entorno de producción. Considera utilizar técnicas seguras como el cifrado con `password_hash` en PHP.
  
- **Uso de la API**: La API de geolocalización es usada para obtener información sobre la ubicación y otros detalles del usuario. Es importante asegurarse de que se respeta la privacidad del usuario y que el uso de la API sea conforme con las normativas de privacidad.
  
- **Redirección**: La redirección post-login se realiza a `localhost:80`. Si deseas cambiar esto, ajusta la URL en el script PHP.

---

## Tecnologías Utilizadas

- **PHP**: Lenguaje de programación utilizado para manejar el formulario y la lógica de backend.
- **API ip-api**: Para obtener información geográfica y de proveedor de internet del usuario basado en su IP.
- **HTML**: Estructura básica del formulario de inicio de sesión.
- **CSS (opcional)**: Puedes añadir tu propio estilo CSS para hacer el proyecto más atractivo visualmente.

---

## Notas

Este es un proyecto básico y educativo que replica algunas funcionalidades de Instagram. Sin embargo, en un entorno de producción, es fundamental implementar medidas de seguridad como la validación de entrada y el cifrado de contraseñas.

---

## Contribuciones

¡Las contribuciones son bienvenidas! Si tienes ideas para mejorar el proyecto, corrige errores o simplemente quieres ayudar a hacerlo más seguro, no dudes en crear un **pull request**.
