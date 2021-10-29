<?php

class Personnage
{
    private $id;
    private $nom;
    private $type_perso;
    private $points_de_vie;
    private $points_attaque;
    private $points_defense;

    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    public function getTypeperso()
    {
        return $this->type_perso;
    }

    public function setTypeperso($type_perso)
    {
         $this->type_perso = $type_perso;
         return $this;
    }

    public function getPtsVie()
    {
        return $this->points_de_vie;
    }

    public function setPtsVie($points_de_vie)
    {
         $this->points_de_vie = $points_de_vie;
         return $this; 
    }

    public function getPtsAtt()
    {
        return $this->points_attaque;
    }

    public function setPtsAtt($points_attaque)
    {
         $this->points_attaque = $points_attaque;
         return $this;
    }

    public function getPtsDef()
    {
        return $this->points_defense;
    }

    public function setPtsDef($points_defense)
    {
         $this->points_defense = $points_defense;
         return $this;
    }




}

















?>