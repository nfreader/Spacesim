<?php

namespace ssim\Action\Galaxy;

use Psr\Http\Message\ResponseInterface;
use Slim\Http\Response;
use Slim\Http\ServerRequest;

use ssim\Action\ActionHandler;

use Slim\Views\Twig;

use ssim\Repository\Star;

use ssim\Data\StarTypes;

final class ViewGalaxy extends ActionHandler{
  
  private $template = 'galaxy/view.twig';

  private $star;

  private $twig;

  public $types;

  public function __construct(Twig $twig, Star $star) {
    $this->twig = $twig;
    $this->star = $star;
    $this->types = (new StarTypes())->getTypes(); //TODO: Wrap in galaxy check
  }

  public function __invoke(ServerRequest $request, Response $response): ResponseInterface {
    return $this->twig->render($response, $this->template, [
      'galaxy' => $this->star->getGalaxy(),
      'starTypes' => $this->types
    ]);
  }
}