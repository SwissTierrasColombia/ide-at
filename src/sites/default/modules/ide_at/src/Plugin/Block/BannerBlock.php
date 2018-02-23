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
    //$page_title = \Drupal::configFactory()->get('system.site')->get('name');
    // link: https://www.drupal.org/node/2067859
    // link: https://drupal.stackexchange.com/questions/187519/how-do-i-show-the-current-node-title-in-page-html-twig-or-in-node-html-twig/187520
    //$config = $this->getConfiguration();
    $request = \Drupal::request();
    $route_match = \Drupal::routeMatch();
    $page_title = '';
    if ($route_match->getParameter('node')) {
      $page_title = \Drupal::service('title_resolver')->getTitle($request, $route_match->getRouteObject());
    }
    //debug($config);
    //$page_title = $this->t("'%name' block", array('%name' => $info[$block->delta]['info']));//block name
    $build = [];
    $build['banner_block']['#markup'] = 'Implement BannerBlock.';
    $build['banner_block']['#title'] = $page_title;

    return $build;
  }

}
