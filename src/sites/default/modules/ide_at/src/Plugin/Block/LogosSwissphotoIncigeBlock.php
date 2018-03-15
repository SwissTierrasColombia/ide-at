<?php

namespace Drupal\ide_at\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'LogosSwissphotoIncigeBlock' block.
 *
 * @Block(
 *  id = "logos_swissphoto_incige_block",
 *  admin_label = @Translation("Logos Swissphoto Incige Agencia de Implementacion"),
 * )
 */
class LogosSwissphotoIncigeBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['#theme'] = 'logos_swissphoto_incige_block';
    $build['#test_var'] = 'test_var';
    $build['logos_swissphoto_incige_block']['#markup'] = 'Implement LogosSwissphotoIncigeBlock.';
    return $build;
  }

}
