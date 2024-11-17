<?php
// models/Consola.php
require_once __DIR__ . '/../config/config.php';  // Asegúrate de que config.php tenga las constantes correctas

class Consola
{
    private $conn;

    // Constructor para establecer la conexión
    public function __construct()
    {
        // Conexión MySQLi
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        // Verificar si la conexión fue exitosa
        if ($this->conn->connect_error) {
            die("Conexión fallida: " . $this->conn->connect_error);
        }
    }

    // Obtener todas las consolas
    public function obtenerConsolas()
    {
        // Consulta para obtener todas las consolas
        $query = "SELECT * FROM consolas";
        $result = $this->conn->query($query);

        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);  // Devuelve todos los resultados como un array asociativo
        } else {
            return [];  // Si no hay resultados, devuelve un array vacío
        }
    }

    // Obtener consola por ID
    public function obtenerConsolaPorId($id)
    {
        $query = "SELECT * FROM consolas WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();  // Devuelve un único resultado
    }

    // Crear nueva consola
    public function crearConsola($nombre, $descripcion, $imagen_nombre)
    {
        $query = "INSERT INTO consolas (nombre, descripcion, imagen) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sss", $nombre, $descripcion, $imagen_nombre);
        return $stmt->execute();  // Devuelve true si la operación fue exitosa
    }

    // Actualizar consola
    public function actualizarConsola($id, $nombre, $descripcion, $imagen)
    {
        $query = "UPDATE consolas SET nombre = ?, descripcion = ?, imagen = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sssi", $nombre, $descripcion, $imagen, $id);
        return $stmt->execute();  // Devuelve true si la operación fue exitosa
    }

    // Eliminar consola
    public function eliminarConsola($id)
    {
        $query = "DELETE FROM consolas WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        return $stmt->execute();  // Devuelve true si la operación fue exitosa
    }

    // Cerrar la conexión
    public function __destruct()
    {
        $this->conn->close();  // Cerrar la conexión cuando la clase ya no se use
    }
}

?>
