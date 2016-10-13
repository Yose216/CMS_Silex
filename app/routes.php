<?php

// Home page
$app->get('/', "cms\Controller\HomeController::indexAction")->bind('home');

// Detailed info about an article
$app->match('/article/{id}', "cms\Controller\HomeController::articleAction")->bind('article');

// Login form
$app->get('/login', "cms\Controller\HomeController::loginAction")->bind('login');

//inscription
$app->match('/inscription', "cms\Controller\HomeController::inscriptionAction")->bind('inscription');

// Admin zone
$app->get('/admin', "cms\Controller\AdminController::indexAction")->bind('admin');

// Add a new article
$app->match('/admin/article/add', "cms\Controller\AdminController::addArticleAction")->bind('admin_article_add');

// Edit an existing article
$app->match('/admin/article/{id}/edit', "cms\Controller\AdminController::editArticleAction")->bind('admin_article_edit');

// Remove an article
$app->get('/admin/article/{id}/delete', "cms\Controller\AdminController::deleteArticleAction")->bind('admin_article_delete');

// Edit an existing comment
$app->match('/admin/comment/{id}/edit', "cms\Controller\AdminController::editCommentAction")->bind('admin_comment_edit');

// Remove a comment
$app->get('/admin/comment/{id}/delete', "cms\Controller\AdminController::deleteCommentAction")->bind('admin_comment_delete');

// Add a user
$app->match('/admin/user/add', "cms\Controller\AdminController::addUserAction")->bind('admin_user_add');

// Edit an existing user
$app->match('/admin/user/{id}/edit', "cms\Controller\AdminController::editUserAction")->bind('admin_user_edit');

// Remove a user
$app->get('/admin/user/{id}/delete', "cms\Controller\AdminController::deleteUserAction")->bind('admin_user_delete');

// API : get all articles
$app->get('/api/articles', "cms\Controller\ApiController::getArticlesAction")->bind('api_articles');

// API : get an article
$app->get('/api/article/{id}', "cms\Controller\ApiController::getArticleAction")->bind('api_article');

//New hach for password
$app->get('/newpwd', function() use ($app) {
    $rawPassword = '3007';
    $salt = '%qUgq3NAYfC1MKwrW?yevbE';
    $encoder = $app['security.encoder.digest'];
    return $encoder->encodePassword($rawPassword, $salt);
});

$app->get('/web/images/Articles', function(Request $request) use ($app) {
	
});
