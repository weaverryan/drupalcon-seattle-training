<?php

namespace Drupal\coffee_shop\Controller;

use Symfony\Component\HttpFoundation\Response;

class CoffeeController {
  public function brewCoffee() {
    return new Response('Ding! Your delicious coffee is ready!');
  }
}
