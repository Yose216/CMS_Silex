<?php

namespace cms\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use cms\Domain\Article;

class ApiController {

    /**
     * API articles controller.
     *
     * @param Application $app Silex application
     *
     * @return All articles in JSON format
     */
    public function getArticlesAction(Application $app) {
        $articles = $app['dao.article']->findAll();
        // Convert an array of objects ($articles) into an array of associative arrays ($responseData)
        $responseData = array();
        foreach ($articles as $article) {
            $responseData[] = $this->buildArticleArray($article);
        }
        // Create and return a JSON response
        return $app->json($responseData);
    }

    /**
     * API article details controller.
     *
     * @param integer $id Article id
     * @param Application $app Silex application
     *
     * @return Article details in JSON format
     */
    public function getArticleAction($id, Application $app) {
        $article = $app['dao.article']->find($id);
        $responseData = $this->buildArticleArray($article);
        // Create and return a JSON response
        return $app->json($responseData);
    }
	
	/**
     * Converts an Article object into an associative array for JSON encoding
     *
     * @param Article $article Article object
     *
     * @return array Associative array whose fields are the article properties.
     */
    private function buildArticleArray(Article $article) {
        $data  = array(
            'id' => $article->getId(),
            'title' => $article->getTitle(),
            'content' => $article->getContent()
            );
        return $data;
    }
}
