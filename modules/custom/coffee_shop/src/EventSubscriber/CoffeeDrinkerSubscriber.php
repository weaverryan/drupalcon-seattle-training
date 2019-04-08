<?php

namespace Drupal\coffee_shop\EventSubscriber;

use Drupal\Core\Messenger\MessengerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class CoffeeDrinkerSubscriber implements EventSubscriberInterface {
  private $messenger;

  public function __construct(MessengerInterface $messenger) {
    $this->messenger = $messenger;
  }

  public function onKernelRequest()
  {
    $this->messenger->addStatus('Good morning request! Time for some coffee!');
  }

  public static function getSubscribedEvents() {
    return [
      'kernel.request' => 'onKernelRequest',
    ];
  }
}
