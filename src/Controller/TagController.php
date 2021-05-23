<?php

namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Exception\HttpNotFoundException;

class TagController extends Controller
{
    public function view(Request $request, Response $response)
    {
        $tag = $this->ci->get('db')->getRepository('App\Entity\Tag')->findBy([], [
            'id' => 'ASC'
        ]);

        return $this->renderPage($response, 'tag.html', [
            'tag' => $tag
        ]);
    }
} 