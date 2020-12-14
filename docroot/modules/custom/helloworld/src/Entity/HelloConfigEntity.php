<?php

namespace Drupal\helloworld\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the Hello Config entity.
 *
 * @ConfigEntityType(
 *   id = "hello_config_entity",
 *   label = @Translation("Hello Config"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\helloworld\HelloConfigEntityListBuilder",
 *     "form" = {
 *       "add" = "Drupal\helloworld\Form\HelloConfigEntityForm",
 *       "edit" = "Drupal\helloworld\Form\HelloConfigEntityForm",
 *       "delete" = "Drupal\helloworld\Form\HelloConfigEntityDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\helloworld\HelloConfigEntityHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "hello_config_entity",
 *   admin_permission = "administer site configuration",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/config/hello_config_entity/{hello_config_entity}",
 *     "add-form" = "/admin/config/hello_config_entity/add",
 *     "edit-form" = "/admin/config/hello_config_entity/{hello_config_entity}/edit",
 *     "delete-form" = "/admin/config/hello_config_entity/{hello_config_entity}/delete",
 *     "collection" = "/admin/config/hello_config_entity"
 *   }
 * )
 */
class HelloConfigEntity extends ConfigEntityBase implements HelloConfigEntityInterface {

  /**
   * The Hello Config ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Hello Config label.
   *
   * @var string
   */
  protected $label;

  /**
   * The Hello Config label.
   *
   * @var string
   */
  protected $rotate;
  
  public function getRotate(){
    return $this->rotate;
  }

}
