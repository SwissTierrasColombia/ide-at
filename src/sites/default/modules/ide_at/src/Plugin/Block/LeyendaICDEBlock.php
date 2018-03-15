<?php

namespace Drupal\ide_at\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'LeyendaICDEBlock' block.
 *
 * @Block(
 *  id = "leyenda_icdeblock",
 *  admin_label = @Translation("Leyenda ICDE Agencia de Implementacion"),
 * )
 */
class LeyendaICDEBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
            'texto' => 'La Infraestructura Colombiana de Datos Espaciales (ICDE) tiene como objetivo la construcción e implementación colectiva de políticas que faciliten los procesos de gestión de los recursos geográficos, incluyendo datos, información y conocimiento, como sustento de la Gobernanza y la toma de decisiones. En el marco de la IDE-AT, debe fungir su rol de coordinación y armonización del gobierno geoespacial definiendo acciones encaminadas al desarrollo de estrategias para promover la creación de otras IDE y fortalecer existentes.',
          ] + parent::defaultConfiguration();
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['texto'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Texto'),
    '#description' => $this->t('Texto con la leyenda de ICDE'),
      '#default_value' => $this->configuration['texto'],
      '#weight' => '0',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['texto'] = $form_state->getValue('texto');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['leyenda_icdeblock_texto']['#markup'] = '<p>' . $this->configuration['texto'] . '</p>';

    return $build;
  }

}
