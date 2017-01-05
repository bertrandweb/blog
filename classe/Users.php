<?php

class Users
{
    protected $bdd;
    protected $pseudo;
    protected $mail;
    protected $password;
    protected $id;
    protected $nom;
    protected $prenom;
    protected $admin;


    public function __construct($bdd)
    {
    $this -> bdd = $bdd;
    }

    protected function Inscription() {

    $user = "root";
    $mdp = "";
    $host = "localhost";
    $dbName="blod";

    try {
        $instance = new PDO("mysql:host=".$host.";dbname=".$dbName,$user,$mdp);
        }
        catch (PDOException $e) {
            die('Erreur :'. $e->getMessage());
        }
    if(isset($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['pseudo'])) {
        if(!isset($_POST['id']) || $_POST['id']=="")
        {
        $req=$instance->prepare('INSERT INTO user(nom, prenom, email, password, pseudo) VALUES (:nom, :prenom, :email, :password, :pseudo)');

       $req->execute(array(
       'nom' => $_POST['nom'],
       'prenom' => $_POST['prenom'],
       'email' => $_POST['email'],
       'password' => $_POST['password'],
       'pseudo' => $_POST['pseudo'],
       ));
       }
        else (
            echo "Erreur !";
        )
    }
    }

    function connexion() {

        $user = "root";
        $mdp = "";
        $host = "localhost";
        $dbName="magasin";

        try {
            $instance = new MYPDO("mysql:host=".$host.";dbname=".$dbName,$user,$mdp);
        }
        catch (PDOException $e) {
            die('Erreur :' . $e->getMessage());
        }

        if (isset($_POST['email'],$_POST['password']) && (($_POST['email'] !="") && $_POST['email'] != ""))

            $sql = "SELECT * FROM user WHERE email=:email AND password = :password";
            $resultat = $instance -> prepare($sql);
            $resultat->execute(array(
                'email' => $_POST['email'],
                'password' => $_POST['password'],
            ));

            $resultat=$resultat->fetch();
            if ($resultat==false)
            {
                echo 'Erreur de login';
            }
            else
            {
                $_SESSION['id']= $resultat['id'];
                if($resultat['grade_id'] == 1)
                {
                    $_SESSION['admin'] = true;
                }
                header('location: index.php');
            }
    }
    }

    function deconnexion() {

    session_unset()

    }

    function verifemail() {



    }

    function verifdejainscrit() {

    }
}