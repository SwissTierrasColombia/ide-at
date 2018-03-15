<?php

namespace Drupal\ide_at\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'CreditosBlock' block.
 *
 * @Block(
 *  id = "creditos_block",
 *  admin_label = @Translation("Créditos Agencia de Implementación"),
 * )
 */
class CreditosBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
            'licencia' => '2018 | Diseñado y Desarrollado por Agencia de Implementación del Proyecto Modernización de la Administración de Tierras en Colombia, financiado por la Cooperación Suiza (SECO).',
          ] + parent::defaultConfiguration();
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['licencia'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Licencia'),
    '#description' => $this->t('Escribe el texto de la licencia o créditos'),
      '#default_value' => $this->configuration['licencia'],
      '#weight' => '0',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['licencia'] = $form_state->getValue('licencia');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['#theme'] = 'creditos_block';
    $build['#licencia_var'] = '<p>' . $this->configuration['licencia'] . '</p>';
    $build['creditos_block_licencia']['#markup'] = '<p>' . $this->configuration['licencia'] . '</p>';

    return $build;
  }

}
