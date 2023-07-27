<?php
class Appro extends Model
{
    public int $id;
    public string $dateAppro;
    public int $montant;
    public string $fournisseur;
    public bool $paiement;
    protected static function tableName()
    {
        return "appro";
    }

    public  DetailAppro $detailAppro;

    // public function __construct(){
    //     $this->detailAppro = new DetailAppro();
    // }
    // public function details(){
    //     return $this->dateAppro->findDetailByAppro($this->id);
    // }
    public static function recupeDonneesFiltrer(): array
    {

        $textinput = "";
        $textselect = "";


        if (isset($_GET['btn-recherche'])) {
            //recupere la valeur du champ input
            $textinput = $_GET["date-appro"];
            //recupere la valeur du champ select choisi
            $textselect = isset($_GET['paiement']) ? $_GET["paiement"] : null;
        }

        //recupere les objets au niveau de la base de données
        $datas = Appro::all();
        // dd($textselect);
        //initialisation d'un tableau vide
        $data = [];
        // parcours des objets
        foreach ($datas as $value) {
            // dd($textinput);
            //test si le champs du date est vide
            if ($textinput !== "") {
                //condition pour recuperer les objets dont leur date est celle du input
                if ((strpos($value->dateAppro, $textinput) !== FALSE)) {
                    //insertion dans une nouvelle tableau de chaque objet trouver
                    $data[] = $value;
                }
            } elseif ($textinput === "") {
                //pareil pour au dessus ce sont a peut pres les meme condition
                // dd($textselect);
                if (intval($value->paiement) === intval($textselect)) {
                    $data[] = $value;
                }
            } elseif ($textinput !== "" && $textselect != "") {
                if ((strpos($value->dateAppro, $textinput) !== FALSE) && (($value->paiement) === intval($textselect))) {
                    $data[] = $value;
                }
            }
        }
        return $data;
    }
    public function formatPaiement(): string {
        return $this->paiement==true ? "Payés":"Impayés";
    }
    public function updatePaiement(int $approId, int $statut=1){
        return self::executeUpdate("UPDATE `appro` SET `paiement` = :statut WHERE `appro`.`id` = :approId" , ['approId' => $approId, 'statut' => $statut]);
    }
   
}
