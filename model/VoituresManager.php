
<?php

class VoituresManager extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function selectAll()
    {
        $voitures = [];
        $sql = 'SELECT * FROM voitures';
        foreach ($this->bdd->query($sql) as $row) {
            $voitures[] = new Voitures($row['id'], $row['marque'], $row['modele'], $row['energie'], $row['boite_auto'], $row['picture']);
        }
        return $voitures;
//        var_dump($voitures);
    }

    public function insert(Voitures $voiture)
    {
        $marque = $voiture->getMarque();
        $modele = $voiture->getModele();
        $energie = $voiture->getEnergie();
        $boite_auto = $voiture->getBoiteAuto();
        $picture = $voiture->getPicture();
        $req = $this->bdd->prepare("INSERT INTO voitures (marque, modele, energie, boite_auto, picture) VALUES (?,?,?,?,?)");
        $req->bindParam(1, $marque);
        $req->bindParam(2, $modele);
        $req->bindParam(3, $energie);
        $req->bindParam(4, $boite_auto);
        $req->bindParam(5, $picture);
        $req->execute();
        $voiture->setId($this->bdd->lastInsertId());
//        var_dump($voiture);
//        die();
    }

    public function select($id)
    {
        $req = $this->bdd->prepare("SELECT * FROM voitures WHERE id=?");
        $req->bindParam(1, $id);
        $req->execute();
        $res = $req->fetch();
        $voiture = new Voitures($res['id'], $res['marque'], $res['modele'], $res['energie'],$res['boite_auto'],$res['picture']);
        return $voiture;
    }

    public function delete($id)
    {
        $req = $this->bdd->prepare("DELETE FROM voitures where id = ?");
        $req->bindParam(1,$id);
        $req->execute();
    }

    public function update(Voitures $voiture)
    {
        $marque = $voiture->getMarque();
        $modele = $voiture->getModele();
        $energie = $voiture->getEnergie();
        $boite_auto = $voiture->getBoiteAuto();
        $picture = $voiture->getPicture();
        $id = $voiture->getId();
        $req = $this->bdd->prepare("UPDATE voitures SET marque = ?, modele = ?, energie = ?, boite_auto = ?, picture = ? WHERE id = ?");
        $req->bindParam(1,$marque);
        $req->bindParam(2,$modele);
        $req->bindParam(3,$energie);
        $req->bindParam(4,$boite_auto);
        $req->bindParam(5,$picture);
        $req->bindParam(6,$id);
        $req->execute();
    }

    public function count(){
        $count = $this->bdd->query('SELECT COUNT(*) AS nb FROM voitures');
        $res = $count->fetch();
        $nb = $res['nb'];
        return $nb;
    }


    public function orderBy()
    {
        $voitures = [];
        $sql = 'SELECT * FROM voitures ORDER BY marque';
        foreach ($this->bdd->query($sql) as $row) {
            $voitures[] = new Voitures($row['id'], $row['marque'], $row['modele'], $row['energie'], $row['boite_auto'], $row['picture']);
        }
        return $voitures;
    }

    public function orderByDesc()
    {
        $voitures = [];
        $sql = 'SELECT * FROM voitures ORDER BY marque DESC';
        foreach ($this->bdd->query($sql) as $row) {
            $voitures[] = new Voitures($row['id'], $row['marque'], $row['modele'], $row['energie'], $row['boite_auto'], $row['picture']);
        }
        return $voitures;
    }


    public function orderByModeleAsc()
    {
        $voitures = [];
        $sql = 'SELECT * FROM voitures ORDER BY modele';
        foreach ($this->bdd->query($sql) as $row) {
            $voitures[] = new Voitures($row['id'], $row['marque'], $row['modele'], $row['energie'], $row['boite_auto'], $row['picture']);
        }
        return $voitures;
    }

    public function orderByModeleDesc()
    {
        $voitures = [];
        $sql = 'SELECT * FROM voitures ORDER BY modele DESC';
        foreach ($this->bdd->query($sql) as $row) {
            $voitures[] = new Voitures($row['id'], $row['marque'], $row['modele'], $row['energie'], $row['boite_auto'], $row['picture']);
        }
        return $voitures;
    }

//    todo : mettre dans le controller .. ça n'a rien à faire ici;

    public function getColor($data){
        if ($data >= 0 && $data < 4){
            $color = 'orange';
        }
        else if ($data >= 4 && $data < 8){
            $color = 'red';
        }
        else if ($data >= 8 && $data < 12){
            $color = 'purple';
        }
        else if ($data >= 12 && $data < 16){
            $color = 'blue';
        }
        else if ($data >= 16){
            $color = 'limegreen';
        }
        return $color;
    }
}
