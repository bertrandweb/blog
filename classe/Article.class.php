<?php

class Article
{

    protected $titre;
    protected $id;
    protected $contenu;
    protected $date;
    protected $auteur;
    protected $instance;

    public function __construct()
    {
        $this -> instance = new Database("root", "localhost", "", "blog");
        $this -> instance = $this -> instance -> Database();
    }

    public function createarticle()
    {
        if (isset($_POST['titre'], $_POST['contenu'], $_POST['date'], $_POST['auteur']))
        {
            $req = $instance->prepare("INSERT INTO article (titre, contenu, date, auteur) VALUES (:titre, :contenu, now(), :auteur)");

            $req->execute(array(
                'article' => $_POST['article'],
                'contenu' => $_POST['contenu'],
                'auteur' => $_POST['auteur'],
                ));
        }
    else
        {
        echo "Erreur durant la création !";
        }
    }

    public function editarticle()
    {
        if (isset($_POST['titre'], $_POST['contenu'], $_POST['date'], $_POST['auteur']))
        {
            $req = $instance->prepare("UPDATE article SET titre = :titre, contenu= :contenu, date= :date, auteur=:auteur");

            $req ->execute(array(
                'titre' => $_POST['titre'],
                'contenu' => $_POST['contenu'],
                'date' => $_POST['date'],
                'auteur' => $_POST['auteur'],
            ));
        }
        else
        {
            echo "Erreur durant la modification !";
        }
    }

    public function displayarticle($id)
    {

    $req = $this ->instance->prepare("SELECT * FROM article WHERE id = :id");

    $req->execute(array(
        'id' => $id
    ));
    $req=$req->fetch();

    require('./templates/formarticle.php');
    }
}
