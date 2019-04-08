<?php

namespace Drupal\coffee_shop\Service;

use Drupal\Core\Config\ConfigFactoryInterface;

class Barista {
  private $configFactory;

  public function __construct(ConfigFactoryInterface $configFactory) {
    $this->configFactory = $configFactory;
  }

  public function prepareDrink($type = null) {
    if ($type === null) {
      $type = $this->configFactory->get('coffee_shop.default')
        ->get('type');
    }

    $sizes = ['small', 'medium', 'large', 'scary huge'];
    $statuses = ['for here', 'to go', 'to sip while standing pensively'];

    $template = 'A %size% %type% prepared %status%. Enjoy!';

    return strtr($template, [
      '%size%' => $sizes[array_rand($sizes)],
      '%type%' => $type,
      '%status%' => $statuses[array_rand($statuses)],
    ]);
  }
}
