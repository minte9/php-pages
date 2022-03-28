<?php // src/Simplex/Framework.php

namespace Simplex;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;

Class Framework
{
    private $matcher;
    private $controllerResolver;
    private $argumentResolver;

    public function __construct(UrlMatcher $matcher,
                        ControllerResolver $controllerResolver,
                            ArgumentResolver $argumentResolver)
    {
        $this->matcher = $matcher;
        $this->controllerResolver = $controllerResolver;
        $this->argumentResolver = $argumentResolver;
    }

    public function handle(Request $request)
    {
        try {
            $request->attributes->add(
                $this->matcher->match($request->getPathInfo())
            );

            $controller =$this->controllerResolver->getController($request);
            $arguments =$this->argumentResolver
                ->getArguments($request, $controller);

            return call_user_func_array($controller, $arguments);
        } catch(ResourceNotFoundException $e) {
            return new Response('Not found', 404);
        } catch (\Exception $e) {
            return new Response('An error occured', 500);
        }
    }
}
