<?php
// require "./../models/ArticleConfection.php";
require "./../models/Appro.php";

class ApproController extends Controller
{

    private Appro $appro;

    public function __construct()
    {
        $this->appro = new Appro();
    }

    /** 
     *
     *@return mixed[]
     */

    public function index()
    {
        $datas = Appro::all();
        // die('OKKK');
        ob_start();
        require "../public/ressources/views/appro/liste.html.php";
        $content_for_view = ob_get_clean();
        require "../public/ressources/views/base.layout.html.php";
    }
    public function filtre()
    {
        $datas = Appro::recupeDonneesFiltrer();
        // die('OKKK');
        ob_start();
        require "../public/ressources/views/appro/liste.html.php";
        $content_for_view = ob_get_clean();
        require "../public/ressources/views/base.layout.html.php";
    }
    public function updatePaiement()
    {
        $idAppro = $_POST['id_appro'];
        $this->appro->updatePaiement($idAppro, 0);
        $this->redirect("appro");
    }

    /** 
     *
     *@return mixed
     */

    public function create()
    {
    }

    /** 
     *
     *@return mixed
     */

    public function store()
    {
        !isset($montantTotal) ? $montantTotal=[] : null;

        if (isset($_POST['OK'])) {
            $fournisseur = $_POST['fournisseur'];
            $breukh = Appro::find($fournisseur);
            $approId = $breukh->id;
            $article = $_POST['article'];
            $data = ArticleConfection::find($article);
            $prixAchat = $data->getPrix();
            $qtestock = $_POST['qtestock'];
            $total = $prixAchat * $qtestock; 
            // dd($total);
            // array_push($montantTotal, $total);
            // Rechercher l'index de l'article dans $_SESSION['selection']
            $articleIndex = -1;
            foreach ($_SESSION['selection'] as $index => $produit) {
                if ($produit['article'] === $article) {
                    $articleIndex = $index;
                    break;
                }
            }

            if ($articleIndex !== -1) {
                // L'article existe déjà, mettez à jour la quantité et le total
                $_SESSION['selection'][$articleIndex]['qtestock'] += $qtestock;
                $_SESSION['selection'][$articleIndex]['total'] = $_SESSION['selection'][$articleIndex]['prixAchat'] * $_SESSION['selection'][$articleIndex]['qtestock'];
            } else {
                // L'article n'existe pas encore, ajoutez-le à $_SESSION['selection']
                $produit = [
                    "approId" => $approId,
                    "article" => $article,
                    "qtestock" => $qtestock,
                    "prixAchat" => $prixAchat,
                    "total" => $total
                ];
                $_SESSION['selection'][] = $produit;
            }

            // Redirigez vers la vue du formulaire après avoir ajouté les données dans la session
            $this->redirect("form-appro");
        }

        if (isset($_POST['ENREGISTRER'])) {
            // dd($_POST);
            // dd($_SESSION['total']);
            // Ici, vous pouvez enregistrer les données de $_SESSION['selection'] dans la table "Appro" de la base de données.
            // Les détails de l'approvisionnement seront stockés dans la table "DetailAppro".

            // Parcourez $_SESSION['selection'] et insérez les détails dans la table "DetailAppro" pour chaque article.
            //  dd($_SESSION['selection']);
            $fournisseur = "";
            foreach ($_SESSION['selection'] as $produit) {
                $thioukh = DetailAppro::create([
                    'approId' => $produit['approId'],
                    'qteAppro' => $produit['qtestock'],
                    'articleConfId' => $produit['article'] // Vous devez obtenir l'ID de l'approvisionnement depuis la table "Appro" (nouvel enregistrement créé).
                ]);
                //  dd($thioukh);
                $approId = DetailAppro::find($thioukh)->approId;
                $fournisseur = Appro::find($approId)->fournisseur;
                
            }
            appro::create([
            'fournisseur' => $fournisseur,
            'dateAppro' => date("Y/m/d"),
            'montant' => $_POST['montantTotal'],
            'paiement' => 0
            ]);

            // Une fois les détails enregistrés, vous pouvez également créer un enregistrement dans la table "Appro" avec les informations de l'approvisionnement.

            // Après avoir enregistré toutes les données, vous pouvez réinitialiser $_SESSION['selection'] si nécessaire.
            $_SESSION['selection'] = [];

            // Vous pouvez ensuite rediriger vers la vue de la liste des approvisionnements.
            $this->redirect("appro");
        }
    }

    public function form()
    {
        $this->view('appro/form');
    }
}