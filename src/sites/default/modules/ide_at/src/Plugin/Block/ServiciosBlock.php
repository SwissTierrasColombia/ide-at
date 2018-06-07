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
  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
            'visor_link' => 'http://geo.proadmintierra.info',
            'visor_title' => 'Visor Geográfico',
            'metadatos_link' => 'https://ide.proadmintierra.info/geonetwork',
            'metadatos_title' => 'Catálogo de Metadatos',
            'validador_link' => 'https://validador.proadmintierra.info/',
            'validador_title' => 'Validador de Datos y Metadatos',
            'contenidos_link' => 'https://ide.proadmintierra.info/documentacion',
            'contenidos_title' => 'Documentación',
          ] + parent::defaultConfiguration();
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    // $form['entrada_html'] = [
    //   '#type' => 'textarea',
    //   '#title' => $this->t('Entrada HTML'),
    //   '#description' => $this->t('La forma más fácil de edición de este bloque es HTML, ya qué permite cambiar los colores, tamaños y estructuras de mejor manera qué solo poner íconos y Dtexto'),
    //   '#default_value' => $this->configuration['entrada_html'],
    //   '#weight' => '10',
    // ];

    // Available types: button, checkbox, checkboxes, color, date, datelist,
    // datetime, email, entity_autocomplete, field_ui_table, fieldset, file,
    // hidden, image_button, item, language_configuration, language_select,
    // machine_name, managed_file, number, password, password_confirm, path,
    // radio, radios, range, search, select, submit, table, tableselect, tel,
    // text_format, textarea, textfield, token, url, value, weight

    //
    $form['visor_link'] = [
      '#type' => 'url',
      '#title' => $this->t('URL Visor'),
      '#description' => $this->t('URL del Visor'),
      '#default_value' => $this->configuration['visor_link'],
      '#weight' => '0',
    ];
    $form['visor_title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Texto Visor'),
      '#description' => $this->t('Texto del Visor'),
      '#default_value' => $this->configuration['visor_title'],
      '#weight' => '0',
    ];

    $form['metadatos_link'] = [
      '#type' => 'url',
      '#title' => $this->t('URL Metadatos'),
      '#description' => $this->t('URL del Metadatos'),
      '#default_value' => $this->configuration['metadatos_link'],
      '#weight' => '0',
    ];
    $form['metadatos_title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Texto Metadatos'),
      '#description' => $this->t('Texto del Metadatos'),
      '#default_value' => $this->configuration['metadatos_title'],
      '#weight' => '0',
    ];

    $form['validador_link'] = [
      '#type' => 'url',
      '#title' => $this->t('URL Validador'),
      '#description' => $this->t('URL del Validador'),
      '#default_value' => $this->configuration['validador_link'],
      '#weight' => '0',
    ];
    $form['validador_title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Texto Validador'),
      '#description' => $this->t('Texto del Validador'),
      '#default_value' => $this->configuration['validador_title'],
      '#weight' => '0',
    ];
    // https://drupal.stackexchange.com/questions/213472/add-link-field-in-custom-form-drupal-8
    $form['contenidos_link'] = [
      '#type' => 'url',
      '#title' => $this->t('URL Contenidos'),
      '#description' => $this->t('URL del Contenidos'),
      '#default_value' => $this->configuration['contenidos_link'],
      '#weight' => '0',
    ];
    $form['contenidos_title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Texto Contenidos'),
      '#description' => $this->t('Texto del Contenidos'),
      '#default_value' => $this->configuration['contenidos_title'],
      '#weight' => '0',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['visor_link'] = $form_state->getValue('visor_link');
    $this->configuration['visor_title'] = $form_state->getValue('visor_title');
    $this->configuration['metadatos_link'] = $form_state->getValue('metadatos_link');
    $this->configuration['metadatos_title'] = $form_state->getValue('metadatos_title');
    $this->configuration['validador_link'] = $form_state->getValue('validador_link');
    $this->configuration['validador_title'] = $form_state->getValue('validador_title');
    $this->configuration['contenidos_link'] = $form_state->getValue('contenidos_link');
    $this->configuration['contenidos_title'] = $form_state->getValue('contenidos_title');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['#theme'] = 'servicios_block';
    $build['#visor_link_var'] = $this->configuration['visor_link'];
    $build['#visor_title_var'] = $this->configuration['visor_title'];
    $build['#metadatos_link_var'] = $this->configuration['metadatos_link'];
    $build['#metadatos_title_var'] = $this->configuration['metadatos_title'];
    $build['#validador_link_var'] = $this->configuration['validador_link'];
    $build['#validador_title_var'] = $this->configuration['validador_title'];
    $build['#contenidos_link_var'] = $this->configuration['contenidos_link'];
    $build['#contenidos_title_var'] = $this->configuration['contenidos_title'];
    $build['servicios_block_entrada_html']['#markup'] = 'ServiciosBlock.php';

    return $build;
  }

}
