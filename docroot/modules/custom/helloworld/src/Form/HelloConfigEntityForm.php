<?php

namespace Drupal\helloworld\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class HelloConfigEntityForm.
 */
class HelloConfigEntityForm extends EntityForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $hello_config_entity = $this->entity;
    // print_r($hello_config_entity); exit;
    $form['label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $hello_config_entity->label(),
      '#description' => $this->t("Label for the Hello Config."),
      '#required' => TRUE,
    ];

    $form['rotate'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Rotate'),
      '#maxlength' => 255,
      '#default_value' => $hello_config_entity->getRotate(),
      '#description' => $this->t("Time in milliseconds (ms) when log data should reset."),
      '#required' => TRUE,
    ];

    $form['id'] = [
      '#type' => 'machine_name',
      '#default_value' => $hello_config_entity->id(),
      '#machine_name' => [
        'exists' => '\Drupal\helloworld\Entity\HelloConfigEntity::load',
      ],
      '#disabled' => !$hello_config_entity->isNew(),
    ];

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $hello_config_entity = $this->entity;
    $status = $hello_config_entity->save();

    switch ($status) {
      case SAVED_NEW:
        $this->messenger()->addMessage($this->t('Created the %label Hello Config.', [
          '%label' => $hello_config_entity->label(),
        ]));
        break;

      default:
        $this->messenger()->addMessage($this->t('Saved the %label Hello Config.', [
          '%label' => $hello_config_entity->label(),
        ]));
    }
    $form_state->setRedirectUrl($hello_config_entity->toUrl('collection'));
  }

}
