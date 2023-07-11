<?php 
class Approvisionnement{
    private int $id;
    private string   $dateAppro;
    private int $montant;
    private string $fournisseur;
    private int $paiement;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    public function getmontant()
    {
        return $this->montant;
    }
    public function setmontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }
    public function getfournisseur()
    {
        return $this->fournisseur;
    }
    public function setfournisseur($fournisseur)
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }
    public function getpaiement()
    {
        return $this->paiement;
    }
    public function setpaiement($paiement)
    {
        $this->paiement = $paiement;

        return $this;
    }
    public function getdateAppro()
    {
        return $this->dateAppro;
    }
    public function setdateAppro($dateAppro)
    {
        $this->dateAppro = $dateAppro;

        return $this;
    }
    public function create(){
            
    }

    public function all(){
        $conn = get_connection();
        $sql = "SELECT * FROM appro";
        $stmt = $conn->query($sql);
        $approvisionnement = $stmt->fetchAll();
       // var_dump($approvisionnement);die('TIOUKH');
    }
}