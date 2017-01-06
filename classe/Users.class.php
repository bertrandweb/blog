<?php

class Users
{
    protected $instance;
    protected $pseudo;
    protected $mail;
    protected $password;
    protected $id;
    protected $nom;
    protected $prenom;
    protected $admin;


    public function __construct()
    {
        $this -> instance = new Database("root", "localhost", "", "blog");
        $this -> instance = $this -> instance -> Database();
    }

    public function Inscription()
    {


        if (isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['password'], $_POST['pseudo']))
        {
            $req = $this -> instance->prepare('INSERT INTO user(nom, prenom, mail, password, pseudo) VALUES (:nom, :prenom, :email, sha1(:password), :pseudo)');

            $req->execute(array(
                  'nom' => $_POST['nom'],
                  'prenom' => $_POST['prenom'],
                  'email' => $_POST['email'],
                  'password' => $_POST['password'],
                  'pseudo' => $_POST['pseudo'],
            ));
        }   else
            {
                echo "Erreur pour inscription !";
            }
            require('./templates/forminscription.php');
    }

    public function Connexion()
    {

        if (isset($_POST['email'], $_POST['password']) && (($_POST['email'] != "") && $_POST['email'] != ""))

            $sql = "SELECT * FROM user WHERE email=:email AND password = :password";
        $resultat = $this -> instance->prepare($sql);
        $resultat->execute(array(
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ));

        $resultat = $resultat->fetch();
        if ($resultat == false) {
            echo 'Erreur de login';
        } else {
            $_SESSION['id'] = $resultat['id'];
            if ($resultat['grade_id'] == 1) {
                $_SESSION['admin'] = true;
            }
            header('location: index.php');
        }
    }


    public function deconnexion()
    {

        session_unset();

    }

    function verifemail()
    {

        $sql = "SELECT * FROM user WHERE email=:email;";
        $resultat = $this -> instance->prepare($sql);
        $resultat->execute(array(
            'email' => $_POST['email'],
        ));

        $resultat = $resultat->fetch();
        if ($resultat == $_POST['email']) {
            echo 'Email non disponible';
        }
    }
}

