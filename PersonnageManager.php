<?php 



class PersonnageManager
{
    private $pdo;
    private $pdoStatement;

    public function __construct()
    {

        $this->pdo = new PDO('mysql:host=localhost;dbname=exoclass26.10.21', 'root', '');
    }

    public function create(Personnage $personnage) //insertion de l'objet passé en argument dans la bdd
    {

        $this->pdoStatement = $this->pdo->prepare('INSERT INTO personnages VALUES(NULL, :nom, :type_perso');

        //liaison des paramètres

        $this->pdoStatement->bindValue(':nom', $personnage->getNom(),PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':type_perso', $personnage->getPerso(),PDO::PARAM_STR);
        
        //execution de la requête

        $executeIsOk = $this->pdoStatement->execute();

        if($executeIsOk){

            return false;
        }
        else{
            $id = $this->pdo->lastInsertId();
            $personnage = $this->read($id);
            return true;
        }
    }

    public function read($id) //recup un objet contact a partir de son identifiant
    {
        $this->pdoStatement=$this->pdo->prepare('SELECT * FROM personnages WHERE id = :id');

        //liaison des paramètres 
        $this->pdoStatement->bindValue(':id', $id, PDO::PARAM_INT);

        //execution de la requête

        $executeIsOk = $this->pdoStatement->execute();

        if($executeIsOk){
            $personnage = $this->pdoStatement->fetchObjet('C:\wamp64\www\exo class 26.10.21/Contact');

            if($personnage === false){
                return null;
            }
            else{
                return $personnage;
            }

        }

    }

    public function readAll($id)//cette méthode recup tous les objets contact de la bdd
    {

        $this->pdoStatement = $this->pdo->query('SELECT * FROM personnages ORDER BY prenom, type_perso');

        //construction d'un tableau d'objet

        $personnages = [];

        while($this->pdoStatement->fetchObject('C:\wamp64\www\exo class 26.10.21/Contact')){
            $personnages[] = $personnage;

        }
        return $personnages;
    }



    public function update(Personnage $personnage)// cette méthode met à jour un objet stocké en bdd
    {

        $this->pdoStatement = $this->pdo->prepare('UPDATE personnages set nom=:nom, type_perso =:type_perso WHERE id=:id LIMIT 1');

        $this->pdoStatement->bindValue(':nom', $personnage->getNom(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':type_perso', $personnage->getPerso(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':id', $personnage->getId(), PDO::PARAM_INT);

        //execution de la requête
        return $this->pdoStatement->execute();

    }

    public function delete(Personnage $personnage)//cette méthode supprime un objet stocké en bdd
    {

        $this->pdoStatement = $this->pdo->prepare('DELETE FROM personages WHERE id = :id LIMIT 1');

        $this->pdoStatement->bindValue(':id', $personnage->getId(), PDO::PARAM_INT);


        //executer la requête

        return $this->pdoStatement->execute();
    }

    public function save(Personnage $personnage)
    {
        if(is_null($personnage->getId())){
            return $this->create($personnage);
        }
        else{
            return $this->update($personnage);
        }

    }
}



















?>