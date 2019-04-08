<?php

namespace Drupal\coffee_shop\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Class RouteSubscriber.
 *
 * Listens to the dynamic route events.
 */
class RouteSubscriber extends RouteSubscriberBase {

  /**
   * {@inheritdoc}
   */
  protected function alterRoutes(RouteCollection $collection) {
    // change the route path, just to show we're powerful!
    $collection->get('coffee_shop.coffee.brew')
      ->setPath('/seattle/coffee/brew/{type}');
  }
}
