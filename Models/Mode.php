<?php
class Model
{
    private $db;
    protected $table;

    public function __construct()
    {
        $config = include($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");

        try {
            $this->db = new mysqli(
                $config["host"],
                $config["username"],
                $config["password"],
                $config["dbname"]
            );
        } catch (mysqli_sql_exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    /**
     * Método para todos los registros de la tabla.
     *
     * @return array Arreglo con todos los registro de la tabla.
     */
    public function all()
    {
        $res = $this->db->query("select * from {$this->table}");
        $data = $res->fetch_all(MYSQLI_ASSOC);

        return $data;
    }

    /**
     * Método para obtener un registro por su id.
     *
     * @param integer $id Id de la fila (recurso) a buscar.
     * @return array Arreglo con los datos de la fila o recurso encontrado.
     */
    public function find($id)
    {
        $res = $this->db->query("select * from {$this->table} where id = $id");
        $data = $res->fetch_assoc();

        return $data;
    }

    /**
     * Método para crear un nuevo registro en la tabla.
     *
     * @param array $data Arreglo asociativo con los datos a ingresar.
     * @return array Arreglo con los datos de la fila ingresada.
     */
    public function create($data)
    {
        $correo = $data["correo"];
        $nombre = $data["nombre"];
        $apellido = $data["apellido"];
        $direccion = $data["direccion"];
        $fecha = $data["fecha_nac"];
        $rol = $data["rol"];
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT);




        try {
            $query = "INSERT INTO {$this->table}(correo, password, nombre, apellido, direccion, fecha_nac, rol )
                                    VALUES ('$correo', '$password', '$nombre', '$apellido', '$direccion', '$fecha', '$rol') ";

            $res = $this->db->query($query);

            if ($res) {
                $ultimoId = $this->db->insert_id;
                $data = $this->find($ultimoId);

                return $data;
            } else {
                return "No se pudo crear el cliente";
            }
        } catch (mysqli_sql_exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }


    public function edit2($data)
    {
        try {
            // Esto hace que sin importar los pares de clave y valor de la variable $data, el $query sea reutilizable.
            $keys = array_keys($data);
            $keysString = implode(", ", $keys);

            $values = array_values($data);
            $valuesString = implode("', '", $values);
            $query = "insert into {$this->table}($keysString) values ('$valuesString')";

            $res = $this->db->query($query);

            if ($res) {
                $ultimoId = $this->db->insert_id;
                $data = $this->find($ultimoId);

                return $data;
            } else {
                return "No se pudo crear el cliente";
            }
        } catch (mysqli_sql_exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    /**
     * Método para actualizar un registro en la tabla.
     *
     * @param array $data Arreglo asociatvo con los datos a actualizar.
     */
    public function update($data)
    {
        session_start();
        $res = $this->db->query("UPDATE {$this->table} 
                                         SET rol= '{$data["rol"]}',
                                          nombre = '{$data["nombre"]}', 
                                         apellido = '{$data["apellido"]}',
                                         direccion = '{$data["direccion"]}', 
                                         fecha_nac = CASE 
                                                      WHEN fecha_nac = '000-00-00'                
                                                           THEN '{$data["fecha_nac"]}'
                                                           ELSE  fecha_nac
                                                           END
                                        WHERE id = {$_SESSION["cliente_edit"]}");



        // Esto hace que sin importar los pares de clave y valor de la variable $data, el $query sea reutilizable.
        // $updatePairs = [];

        // foreach ($data as $key => $value) {
        //     $updatePairs[] = "$key = '$value'";
        // }

        // session_start();
        // $query = "update {$this->table} set " . implode(", ", $updatePairs) . "where id = {$_SESSION["cliente_edit"]}";
        // $this->db->query($query);
    }

    /**
     * Método para eliminar un registro en la tabla.
     *
     * @param integer $id
     */
    public function destroy($id)
    {
        $this->db->query("delete from {$this->table} where id = $id");
    }


    /**
     * metodo para encontrar un dato utilizando la colunna operador y valor
     * @param string $columna que queremos buscar
     * @param string $operator operador para hacer la comparacion, ej: =,!=,<,>
     * @param string $value valor a encontrar en la columna
     * 
     * @return array data a encontrar
     */
    public function where($column, $operator, $value)
    {
        $res = $this->db->query("SELECT * FROM {$this->table} WHERE $column $operator '$value' ");
        $data = $res->fetch_all(MYSQLI_ASSOC);

        return $data;
    }


    public function materias()
    {
        $res = $this->db->query("SELECT
    m.id, m.nombre_materia  AS Nombre_Materia,
    COALESCE(u.nombre, 'Sin Maestro') AS Nombre_Maestro,
    u.apellido as apellido,
    COUNT(DISTINCT a.id_alumno) AS Total_Alumnos
          FROM
            materia m
          LEFT JOIN
            usuarios u ON m.id  = u.id_materias AND u.rol = 2
          LEFT JOIN
            asignacion a ON m.id = a.id_materia
          GROUP BY
            m.id, u.id
          ORDER BY
            m.nombre_materia;");
        $data = $res->fetch_all(MYSQLI_ASSOC);

        return $data;
    }


    public function findteacher()
    {

        $res = $this->db->query("SELECT  u.id, u.nombre, u.apellido  FROM usuarios u
                                     WHERE u.rol = 2 AND u.id_materias IS NULL ");
        $data = $res->fetch_all(MYSQLI_ASSOC);

        return $data;
    }

    public function updateclase($profesor)
    {
        session_start();


        $res = $this->db->query(" UPDATE  usuarios 
                                   SET  id_materias = '{$_SESSION["materia"]}'
                                 WHERE id = {$profesor} ");
    }


    public function addclase($request)
    {
        $res = $this->db->query(" INSERT INTO materia (nombre_materia)
                                    VALUES ('$request' )");
    }
}