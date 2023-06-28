<?php
class alumno
{
    public $dni;
    public $usr;
    public $pass;
    public $nombre;
    public $apellidos;


    public function setdni($newdni)
    {
        $this->dni = $newdni;
    }
    public function setusr($newusr)
    {
        $this->usr = $newusr;
    }
    public function setpass($newpass)
    {
        $this->pass = $newpass;
    }
    public function setnombre($newnombre)
    {
        $this->nombre = $newnombre;
    }
    public function setapellidos($newapellidos)
    {
        $this->apellidos = $newapellidos;
    }

    public function getdni()
    {
        return $this->dni;
    }
    public function getusr()
    {
        return $this->usr;
    }
    public function getpass()
    {
        return $this->pass;
    }
    public function getnombre()
    {
        return $this->nombre;
    }
    public function getapellidos()
    {
        return $this->apellidos;
    }

    public function __construct($dni, $usr, $pass, $nombre, $apellidos)
    {
        $this->setdni($dni);
        $this->setusr($usr);
        $this->setpass($pass);
        $this->setnombre($nombre);
        $this->setapellidos($apellidos);
    }     
}
