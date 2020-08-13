<?php

class Voitures
{
    private $id;
    private $marque;
    private $modele;
    private $energie;
    private $boite_auto;
    private $picture;

    /**
     * Ravioles constructor.
     * @param $id
     * @param $marque
     * @param $modele
     * @param $energie
     * @param $boite_auto
     * @param $picture
     */
    public function __construct($id, $marque, $modele, $energie, $boite_auto, $picture)
    {
        $this->id = $id;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->energie = $energie;
        $this->boite_auto = $boite_auto;
        $this->picture = $picture;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * @param mixed $modele
     */
    public function setModele($modele)
    {
        $this->modele = $modele;
    }

    /**
     * @return mixed
     */
    public function getEnergie()
    {
        return $this->energie;
    }

    /**
     * @param mixed $energie
     */
    public function setEnergie($energie)
    {
        $this->energie = $energie;
    }

    /**
     * @return mixed
     */
    public function getBoiteAuto()
    {
        return $this->boite_auto;
    }

    /**
     * @param mixed $boite_auto
     */
    public function setBoiteAuto($boite_auto)
    {
        $this->boite_auto = $boite_auto;
    }

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param mixed $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }
}
