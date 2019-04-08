<?php

namespace Drupal\coffee_shop\Controller;

use Drupal\coffee_shop\Service\Barista;
use Drupal\Core\Controller\ControllerBase;

class CoffeeController extends ControllerBase {
  public function brewCoffee($type) {
    $barista =  \Drupal::getContainer()
      ->get('coffee_shop.barista');
    $text = $barista->prepareDrink($type);

    return [
      '#type' => 'markup',
      '#markup' => $text,
    ];
  }
}
