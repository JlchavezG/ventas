<?php
// 1. Definir las variables de conexión
$host = 'localhost';        // Servidor de base de datos (normalmente localhost)
$db   = 'ventas';           // Nombre de la base de datos
$user = 'root';             // Usuario de la base de datos (por defecto es 'root' en XAMPP)
$pass = '';                 // Contraseña del usuario (vacía si no la configuraste)
$charset = 'utf8mb4';       // Codificación de caracteres recomendada

// 2. Construir el DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// 3. Opciones para el manejo de errores y configuración de PDO
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,  // Muestra errores como excepciones
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,        // Retorna los resultados como arreglo asociativo
    PDO::ATTR_EMULATE_PREPARES   => false,                   // Desactiva la emulación de sentencias preparadas (más seguro)
];

try {
    // 4. Crear una instancia de PDO (conexión)
    $pdo = new PDO($dsn, $user, $pass, $options);
    // echo " Conexión exitosa a la base de datos 'ventas'"; // verificar si la conexion es correcta
} catch (PDOException $e) {
    // 5. Capturar y mostrar errores de conexión
    echo "❌ Error al conectar la base de datos: " . $e->getMessage();
}
?>
