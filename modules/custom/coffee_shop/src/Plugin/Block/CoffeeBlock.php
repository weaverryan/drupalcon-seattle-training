<?php

namespace Drupal\coffee_shop\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'CoffeeBlock' block.
 *
 * @Block(
 *  id = "coffee_block",
 *  admin_label = @Translation("Coffee block"),
 * )
 */
class CoffeeBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['coffee_block']['#markup'] = 'Implement CoffeeBlock.';

    return $build;
  }

}
