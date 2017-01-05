<?php

class Article
{

    protected $titre;
    protected $id;
    protected $contenu;
    protected $date;
    protected $auteur;

    protected function createarticle()
    {
        if (isset($_POST['article'], $_POST['contenu'], $_POST['date'], $_POST['auteur']))
        {
            $req = $instance->prepare("INSERT INTO article (titre, contenu, date, auteur) VALUES (:titre, :contenu, :date, :auteur)");

            $req = $instance(array(
                'article' => $_POST['article'],
                'contenu' => $_POST['contenu'],
                'date' => $_POST['date'],
                'auteur' => $_POST['auteur'],
                ));
        }
    else
        {
        echo "Erreur !";
        }
    }

    public function editarticle()
    {

    }

    public function displayarticle()
    {

    }

}
