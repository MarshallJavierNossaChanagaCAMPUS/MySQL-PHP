<?php

    class conexion{
        use getInstance;
        private $conx;
        function __construct(){
            try {
                $this->conx = new PDO("mysql:host=localhost;port=3306;username=campus;password=campus2023;database=usuarios");
            } catch (\Throwable $th) {
                //throw $th;
            }
        }
    }

?>
