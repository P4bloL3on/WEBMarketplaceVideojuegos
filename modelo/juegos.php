<?php
include 'db.php';

class buscar extends DB{
    public $busqueda;

    public function buscador($busqueda){
        $query=$this->connect()->prepare("SELECT * FROM productos WHERE nombre LIKE '%$busqueda%'");
        $query->execute();

        foreach ($query as $i) {
            echo "
            <li class='feature-item'>
                <div class='left-icon'>
                    <a href='#' class='text-button'> <img src=".$i['img']." alt='First One'></a>
                </div>
                <div class='right-content'>
                    <h4>".$i['nombre']."</h4>
                    <h4 class='precio'>".$i['precio']."€</h4>
                    <h4 class='stock'> Quedan ".$i['stock']."</h4>
                </div>
            </li>";
        }
    }


    public function mostrarJuegos(){
        $query=$this->connect()->prepare("SELECT * FROM productos");
        $query->execute();

      

        foreach ($query as $i) {
            echo "
            <li class='feature-item'>
                <div class='left-icon'>
                    <a href='#' class='text-button'><img src=".$i['img']." alt='First One'></a>
                </div>
                <div class='right-content'>
                <h4>".$i['nombre']."</h4>
                <h4 class='precio'>".$i['precio']."€</h4>
                <h4 class='stock'> Quedan ".$i['stock']."</h4>
                    
                </div>
            </li>";
         
        }
    }

} 

