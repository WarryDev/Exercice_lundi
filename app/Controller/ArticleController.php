<?php

// app/Controller/ArticleController

namespace App\Controller;

use App\Weblitzer\Controller;
use App\Model\ArticleModel;


class ArticleController extends Controller
{
    public function index()
    {
        // aller chercher tous les articles
        $articles = ArticleModel::all();
        //$this->debug($articles);
        $this->render('app.article.listing',array(
            // faire passer les articles à la vue dans view/app/article/listing.php
            'articles' => $articles
        ));
    }

    public function single($id)
    {
        // request pour aller chercher l'article qui possede cet id
        $article = ArticleModel::findById($id);
        if(empty($article)) {
            // si article n'existe pas dans la BDD => error 404
            die('404');
            //$this->Abort404();
        }
        $this->render('app.article.single',array(
            // faire passer l'article à la vue dans view/app/article/single.php
            'article' => $article
        ));

    }

}
