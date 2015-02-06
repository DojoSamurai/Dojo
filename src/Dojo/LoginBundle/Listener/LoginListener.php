<?php

namespace Dojo\LoginBundle\Listener;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Routing\Router;
use Symfony\Component\HttpFoundation\RedirectResponse;
/**
 * Listener del evento SecurityInteractive que se utiliza para redireccionar
 * al usuario recién logueado a la portada de su ciudad
 */
class LoginListener
{
    private $contexto, $router, $usuario;
    public function __construct(SecurityContext $context, Router $router)
    {
        $this->contexto = $context;
        $this->router   = $router;
    }
    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event)
    {
        $token = $event->getAuthenticationToken();
        $this->usuario = $token->getUser()->getEmail();
    }
    public function onKernelResponse(FilterResponseEvent $event)
    {
        if (null != $this->usuario) {
            if ($this->contexto->isGranted('ROLE_USUARIO')) {
                $portada = $this->router->generate('dashboard');
            } else {
                $portada = $this->router->generate('usuarios_login');
            }
            $event->setResponse(new RedirectResponse($portada));
            $event->stopPropagation();
        }
    }
}