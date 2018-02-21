<?php

namespace Drupal\ide_at\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'RedesSocialesBlock' block.
 *
 * @Block(
 *  id = "redes_sociales_block",
 *  admin_label = @Translation("Redes Sociales Agencia de Implementacion"),
 * )
 */
class RedesSocialesBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
                ] + parent::defaultConfiguration();
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['url_twitter'] = [
      '#type' => 'url',
      '#title' => $this->t('Twitter'),
    '#description' => $this->t('URL de la Red Social Twitter'),
      '#default_value' => $this->configuration['url_twitter'],
      '#weight' => '0',
    ];
    $form['url_youtube'] = [
      '#type' => 'url',
      '#title' => $this->t('URL Youtube'),
    '#description' => $this->t('URL de la Red Social Youtube'),
      '#default_value' => $this->configuration['url_youtube'],
      '#weight' => '0',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['url_twitter'] = $form_state->getValue('url_twitter');
    $this->configuration['url_youtube'] = $form_state->getValue('url_youtube');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['redes_sociales_block_url_twitter']['#markup'] = '<p>' . $this->configuration['url_twitter'] . '</p>';
    $build['redes_sociales_block_url_youtube']['#markup'] = '<p>' . $this->configuration['url_youtube'] . '</p>';

    return $build;
  }

}
