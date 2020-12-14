<?php

namespace Drupal\helloworld\Entity;

use Drupal\Core\Config\Entity\ConfigEntityInterface;

/**
 * Provides an interface for defining Hello Config entities.
 */
interface HelloConfigEntityInterface extends ConfigEntityInterface {

  // Add get/set methods for your configuration properties here.

  public function getRotate();
  
}
