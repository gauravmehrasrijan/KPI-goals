<?php

namespace Drupal\helloworld;

use Drupal\Core\Config\Entity\ConfigEntityListBuilder;
use Drupal\Core\Entity\EntityInterface;

/**
 * Provides a listing of Hello Config entities.
 */
class HelloConfigEntityListBuilder extends ConfigEntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['label'] = $this->t('Hello Config');
    $header['id'] = $this->t('Machine name');
    $header['rotate'] = $this->t('Rotate');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    $row['label'] = $entity->label();
    $row['id'] = $entity->id();
    $row['rotate'] = $entity->getRotate();
    // You probably want a few more properties here...
    return $row + parent::buildRow($entity);
  }

}
