<?php
   // Para que el framework funcione de manera correcta en un hosting hay que modificar la ruta de busquedas
   //const BASE_URL = "https://www.hosting.com/MVCFramework_R/";  
   const BASE_URL = "http://localhost/MVCFramework_R";

   //Zona horaria 
   date_default_timezone_set('America/Mexico_City');
   //const LIBS = "Libraries/";
   //const VIEWS = "Views/";

   //Datos de la conexion a DB
   const DB_HOST = "localhost";
   const DB_NAME = "tienda";
   const DB_USER = "root";
   const DB_PASS = "rootroot";
   const DB_CHARSERT = "charset=utf8";

   //Delimitadores decimal y millar. Ejemplo 24,1231.50
   const SPD = ".";
   const SPM = ",";
   
   //Simbolo de moneda
   const SMONEY ="$";
?>