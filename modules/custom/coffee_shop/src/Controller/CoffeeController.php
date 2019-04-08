<?php

namespace Drupal\coffee_shop\Controller;

use Drupal\Core\Controller\ControllerBase;

class CoffeeController extends ControllerBase {
  public function brewCoffee($type) {
    if ($type === null) {
      $type = $this->config('coffee_shop.default')
        ->get('type');
    }

    $text = sprintf('Ding! Your delicious %s is ready!', $type);

    return [
      '#type' => 'markup',
      '#markup' => $text,
    ];
  }
}
