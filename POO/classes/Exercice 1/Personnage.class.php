<?php
class Personnage
{
    private $_nom;
    private $_prenom;
    private $_age;
    private $_sexe;

    // Mutateur : définit/modifie la valeur passée en argument à l'attribut 
    public function setNom($Nom){
    return $this->_nom = $aNom;
    }
    public function setPrenom($Prenom){
    return $this->_prenom = $aPrenom;
    } 
    public function setAge($Age){
    return $this->_age = $aAge;
    } 
    public function setSexe($Sexe){
    return $this->_sexe = $aSexe;
    } 
    
    
    // Accesseur : renvoie la valeur d'un attribut  
    public function getNom() 
    {
    return $this->_nom;
    }
    public function getPrenom() 
    {
    return $this->_prenom;
    }
    public function getAge() 
    {
    return $this->_age;
    }
    public function getSexe() 
    {
    return $this->_sexe;
    }
}