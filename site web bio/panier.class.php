<?php


class Panier
{
    public $name;
    private static $nbPaniers=0;

    public function __construct($name)
    {
        $this->name=$name;
    }
    //**************SET
    public function set($key,$value){
        $_SESSION['paniers'][$this->name][$key]=$value;
    }
    //*****************GET**
    public function get($key){
        if(isset($_SESSION['paniers'][$this->name][$key])){
            return $_SESSION['paniers'][$this->name][$key];
        }
        return null;

    }
    //********DELETE**
    public function delete($key){
        if (isset($_SESSION['paniers'][$this->name][$key])){
            unset($_SESSION['paniers'][$this->name][$key]);
        }
    }
    //******************GETPANIER**
    public function getPanier(){
        if (isset($_SESSION['paniers'][$this->name])){
            return $_SESSION['paniers'][$this->name];
        }
        return array();
    }
    //************CLEAR**
    public function clear(){
        if (isset($_SESSION['paniers'][$this->name])){
            unset($_SESSION['paniers'][$this->name]);
        }
    }
}
?>