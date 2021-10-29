<?php

class Perso
{
    private $id;
    private $nom;
    private $type_perso;
    private $points_de_vie
    private $points_attaque;
    private $points_defense;
}

class Guerrier extends Perso
{
    private $nom = " ";
    private $type_perso = 'guerrier';
    private $points_de_vie = 100;
    private $points_attaque = 40;
    private $points_defense = >10 <=19;

    public function attaquer(Perso $perso)
    {
        
    }

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

    public function setPtDef($points_defense)
    {
        $this->points_defense = $points_defense;
        return $this;
    }
    
}

class Magicien extends Perso
{
    private $nom = " ";
    private $type_perso = 'magicien';
    private $points_de_vie = 100;
    private $points_attaque =>5 && <10;
    private $points_defense = 0;

    public function lancerSort(Perso $perso)
    {

    }

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

    public function setPtDef($points_defense)
    {
        $this->points_defense = $points_defense;
        return $this;
    }
}

}













?>