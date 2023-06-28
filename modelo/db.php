<?php
class DB
{
    private $host;
    private $user;
    private $pass;
    private $db;
    private $charset;

    public function __construct()
    {
        $this->host     = 'localhost';
        $this->user     = 'root';
        $this->pass     = '';
        $this->db       = 'colegio';
        $this->charset  = 'utf8mb4';
    }

    public function connect()
    {


        try {
            $connection = 'mysql:host=' . $this->host . ';dbname=' . $this->db . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE          => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            $pdo = new PDO($connection, $this->user, $this->pass, $options);

            return $pdo;
        } catch (PDOException $e) {
            print_r("Error en la conexión: " . $e->getMessage());
        }
    }

    public function registro($nombre, $usr, $pass){
        
        $query = $this->connect()->prepare("INSERT INTO usuarios (nombre, username, password ) values
        ('$nombre', '$usr', '$pass')");
        $query->execute();

    }

    public function userdel($usuario , $contraseña){
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE username = :user AND password = :pass');
        $query->execute(['user' => $usuario, 'pass' => $contraseña]);
        
        foreach ($query as $userData) {
            $this->username = $userData['username'];
            $this->password = $userData['password'];
        }

        if($this->username==$usuario && $this->password==$contraseña){
            $query=$this->connect()->prepare("DELETE FROM usuarios WHERE username = :user AND password = :pass");
            $query->execute(['user' => $usuario, 'pass' => $contraseña]);
            echo "usuario borrado satisfactoriamente";
        }else{
            echo "No se ha encontrado la cuenta en la base de datos <br>";
        }
    }


    
}
