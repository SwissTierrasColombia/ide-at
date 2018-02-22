<?php

namespace Drupal\ide_at\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'ServiciosBlock' block.
 *
 * @Block(
 *  id = "servicios_block",
 *  admin_label = @Translation("Servicios Agencia de Implementacion"),
 * )
 */
class ServiciosBlock extends BlockBase {
  const default_html_servicios = <<<EOF
<div class="icon col-sm-12 col-md-3 col-xs-12 col-lg-3">
  <a href="#">
    <img class="icon-pic" src="sites/default/themes/ideat_theme/images/icon1.png">
    <p class="vg link-icon-text">Visor Geográfico</p>
  </a>
</div>
<div class="icon col-sm-12 col-md-3 col-xs-12 col-lg-3">
  <a href="#">
    <img class="icon-pic" src="sites/default/themes/ideat_theme/images/icon2.png">
    <p class="cm link-icon-text">Catálogo de metadatos</p>
  </a>
</div>
<div class="icon col-sm-12 col-md-3 col-xs-12 col-lg-3">
  <a href="#">
    <img class="icon-pic" src="sites/default/themes/ideat_theme/images/icon3.png">
    <p class="vl link-icon-text">Validador de Datos y Metadatos</p>
  </a>
</div>
<div class="icon col-sm-12 col-md-3 col-xs-12 col-lg-3">
  <a href="gestor-contenidos.html">
    <img class="icon-pic" src="sites/default/themes/ideat_theme/images/icon4.png">
    <p class="gc link-icon-text">Gestor de contenidos</p>
  </a>
</div>
EOF;
  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
            'entrada_html' => self::default_html_servicios,
          ] + parent::defaultConfiguration();
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['entrada_html'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Entrada HTML'),
      '#description' => $this->t('La forma más fácil de edición de este bloque es HTML, ya qué permite cambiar los colores, tamaños y estructuras de mejor manera qué solo poner íconos y Dtexto'),
      '#default_value' => $this->configuration['entrada_html'],
      '#weight' => '10',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['entrada_html'] = $form_state->getValue('entrada_html');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['servicios_block_entrada_html']['#markup'] = '' . $this->configuration['entrada_html'] . '';

    return $build;
  }

}
