# Selects Anidados en PHP, MySQL y JavaScript

Este proyecto demuestra un sistema de selección anidada implementado en PHP, MySQL y JavaScript. Permite a los usuarios elegir un estado, lo que carga una lista de municipios asociados. Luego, al elegir un municipio, se cargan las localidades correspondientes.

## Uso 💻

1. Configuración

   - Descarga el proyecto y copia la carpeta en el htdocs o www de tu servidor web.
   - Asegúrate de tener una base de datos MySQL llamada 'mexico' con las tablas y datos adecuados. Puedes importar el archivo ```mexico.sql``` proporcionado.
   - Abre ```inc/conexion.php``` y verifica que los datos de conexión a la base de datos (host, usuario, contraseña y nombre de la base de datos) sean correctos.
   - Inicia tu servidor web y abre index.php en tu navegador. ```http://localhost/nombre_de_tu_carpeta```

2. Interacción con la Vista

   - Selecciona un estado para cargar una lista de municipios asociados.
   - Luego, selecciona un municipio para cargar las localidades correspondientes.

## Expresiones de Gratitud 🎁

- Comenta a otros sobre este proyecto 📢
- Invitame una cerveza 🍺 o un café ☕ [Da clic aquí](https://www.paypal.com/paypalme/markorobles?locale.x=es_XC.).
- Da las gracias públicamente 🤓.

## Notas 📑

La base de datos se ha extraído del Catálogo Nacional de Códigos Postales, desarrollado por el Servicio Postal Mexicano. Contiene el listado de todos los estados, municipios y localidades de México, lo que hace que el archivo tenga un tamaño aproximado de 14 MB. Para cargarlo en MySQL, se sugiere utilizar la línea de comandos o phpMyAdmin. En caso de utilizar phpMyAdmin y enfrentar problemas de carga debido al tamaño del archivo, se recomienda ajustar los valores de carga de archivos en el archivo php.ini para asegurar una importación correcta.
