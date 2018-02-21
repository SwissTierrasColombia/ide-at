<?php

namespace Drupal\ide_at\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'BannerBlock' block.
 *
 * @Block(
 *  id = "banner_block",
 *  admin_label = @Translation("Banner Agencia de Implementacion"),
 * )
 */
class BannerBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['banner_block']['#markup'] = 'Implement BannerBlock.';

    return $build;
  }

}
