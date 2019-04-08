<?php

namespace Drupal\coffee_shop\Controller;

use Drupal\coffee_shop\Service\Barista;
use Drupal\Core\Controller\ControllerBase;

class CoffeeController extends ControllerBase {
  public function brewCoffee($type) {
    if ($type === null) {
      $type = $this->config('coffee_shop.default')
        ->get('type');
    }

    $barista = new Barista();
    $text = $barista->prepareDrink($type);

    return [
      '#type' => 'markup',
      '#markup' => $text,
    ];
  }
}
