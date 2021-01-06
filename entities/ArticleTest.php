<?php

require_once 'Article.php';

$article = new Article("32","test", "tshirt");
echo $article->getIdArticle() . ":" . $article->getDesignationArticle();

$article->setDesignationArticle("TSHIRT");
echo $article->getIdArticle() . ":" . $article->getDesignationArticle();

