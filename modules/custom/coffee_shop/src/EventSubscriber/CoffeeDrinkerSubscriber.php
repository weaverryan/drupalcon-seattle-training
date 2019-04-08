<?php

namespace Drupal\coffee_shop\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class CoffeeDrinkerSubscriber implements EventSubscriberInterface {
  public function onKernelRequest()
  {
    drupal_set_message('Good morning request! Time for some coffee!');
  }

  public static function getSubscribedEvents() {
    return [
      'kernel.request' => 'onKernelRequest',
    ];
  }
}
