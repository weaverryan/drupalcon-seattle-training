<?php

namespace Drupal\coffee_shop\Controller;

use Symfony\Component\HttpFoundation\Response;

class CoffeeController {
  public function brewCoffee($type) {
    return new Response(sprintf('Ding! Your delicious %s is ready!', $type));
  }
}
