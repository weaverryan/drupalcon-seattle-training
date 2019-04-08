<?php

namespace Drupal\coffee_shop\EventSubscriber;

use Drupal\Core\Messenger\MessengerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class CoffeeDrinkerSubscriber implements EventSubscriberInterface {
  private $messenger;
  private $startTime;

  public function __construct(MessengerInterface $messenger) {
    $this->messenger = $messenger;
  }

  public function onKernelRequest()
  {
    $this->startTime = microtime(true);
    $this->messenger->addStatus('Good morning request! Time for some coffee!');
  }

  public function onKernelResponse(FilterResponseEvent $event) {
    $duration = microtime(true) - $this->startTime;
    $event->getResponse()
        ->headers
        ->set('X-Brew-Time', $duration * 1000);
  }

  public static function getSubscribedEvents() {
    return [
      'kernel.request' => 'onKernelRequest',
      'kernel.response' => 'onKernelResponse',
    ];
  }
}
