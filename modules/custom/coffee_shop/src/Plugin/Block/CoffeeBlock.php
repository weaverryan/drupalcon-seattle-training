<?php

namespace Drupal\coffee_shop\Plugin\Block;

use Drupal\coffee_shop\Service\Barista;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a 'CoffeeBlock' block.
 *
 * @Block(
 *  id = "coffee_block",
 *  admin_label = @Translation("Coffee block"),
 * )
 */
class CoffeeBlock extends BlockBase implements ContainerFactoryPluginInterface {
  private $barista;

  public function __construct(Barista $barista, array $configuration, $plugin_id, $plugin_definition) {
    $this->barista = $barista;

    parent::__construct($configuration, $plugin_id, $plugin_definition);
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['coffee_block']['#markup'] = $this->barista->prepareDrink();

    return $build;
  }

  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new self($container->get('coffee_shop.barista'), $configuration, $plugin_id, $plugin_definition);
  }
}
