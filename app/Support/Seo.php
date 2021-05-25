<?php

namespace App\Support;

use CoffeeCode\Optimizer\Optimizer;

Class Seo
{
    private $optimizer;

    public function __construct()
    {
        $this->optimizer = new Optimizer();
        $this->optimizer->openGraph(
            env('APP_NAME'), //nome do projeto ou nome do site
            'pt_br', //tipo timezone, lingua 'portuguesa' do projeto
            'article' // conteudo
        )->twitterCard(
            env('CLIENT_SOCIAL_TWITTER_CREATOR'), //creator = @fabiogda_
            env('CLIENT_SOCIAL_TWITTER_PUBLISHER'), //publish = @fabiogda_
            env('APP_URL'), //link do site
        )->publisher(
            env('CLIENT_SOCIAL_FACEBOOK_PAGE'), //face page
            env('CLIENT_SOCIAL_FACEBOOK_AUTHOR'), //face author
            env('CLIENT_SOCIAL_GOOGLE_PAGE'), //plus page
            env('CLIENT_SOCIAL_GOOGLE_AUTHOR'), //plus author
        )->facebook(
            env('CLIENT_SOCIAL_FACEBOOK_APP'), //app ID
        );
    }

    public function render($title, $description, $url, $image, $follow = true)
    {
        return $this->optimizer->optimize($title, $description, $url, $image, $follow)->render();
    }
}