<?php
//  include_once "Model/conn.php" ; 






class Adminroute extends Database {

  
 private $ID ; 
 private $Ville_depart ; 
 private $Ville_destination ; 
 private $Distance ; 
 private $Duree ; 







    public function getAllroute(){

        $consulta = $this->getConnection()->prepare("SELECT * FROM  route" );
        $consulta->execute();
        $resultados = $consulta->fetchAll();
       
        return $resultados;

    }

    
    public function getByIdroute($id){
        $consulta = $this->getConnection()->prepare("SELECT * 
                                                FROM route  WHERE ID = :id");
        $consulta->execute(array(
            "id" => $id
        ));
        /* Fetch all of the remaining rows in the result set */
        $resultados = $consulta->fetchAll();
       
        return $resultados;
    }
    
    public function getByColumnroute($column,$value){
        $consulta = $this->getConnection()->prepare("SELECT * 
                                                FROM route WHERE " . $column . " = :value");
        $consulta->execute(array(
            "value" => $value
        ));
        $resultados = $consulta->fetchAll();
       
        return $resultados;
    }
    
    public function deleteByIdroute($id){
        try {
            $consulta = $this->getConnection()->prepare("DELETE FROM route WHERE ID = :id");
            $consulta->execute(array(
                "id" => $id
            ));
           
        } catch (Exception $e) {
            echo 'Falló el DELETE (deleteById): ' . $e->getMessage();
            return -1;
        }
    }
    
    public function deleteByColumnroute($column,$value){
        try {
            $consulta = $this->getConnection()->prepare("DELETE FROM route WHERE :column = :value");
            $consulta->execute(array(
                "column" => $column,
                "value" => $value,
            ));
           
        } catch (Exception $e) {
            echo 'Falló el DELETE (deleteBy): ' . $e->getMessage();
            return -1;
        }
    }

    public function Insertroute($Ville_depart,$Ville_destination,$Distance,$Duree){

        $consulta = $this->getConnection()->prepare("INSERT INTO route(Ville_depart,Ville_destination,Distance,Duree)
                                        VALUES (:Ville_depart,:Ville_destination,:Distance,:Duree)");
        $result = $consulta->execute(array(
            "Ville_depart" => $Ville_depart,
            "Ville_destination" => $Ville_destination,
            "Distance" => $Distance,
            "Duree" => $Duree
          
        ));

        return $result; 
    }

    public function Updateroute($id,$Ville_depart,$Ville_destination,$Distance,$Duree) {
        try {
            $consulta = $this->getConnection()->prepare("
                UPDATE route 
                SET 
                    Ville_depart = :Ville_depart,  
                    Ville_destination = :Ville_destination,
                    Distance = :Distance,
                    Duree = :Duree
                  
                WHERE Id = :id 
            ");
    
            $resultado = $consulta->execute(array(
                "Ville_depart" => $Ville_depart,
                "Ville_destination" => $Ville_destination,
                "Distance" => $Distance,
                "Duree" => $Duree,
             
                "id" => $id
            ));
    
            return $resultado;
        } catch (PDOException $e) {
            // Handle database errors
            // Log or return an error message
            return false;
        }
    }
    





}