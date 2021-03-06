<?php

namespace Drupal\social_post_photo\Plugin\Block;

use Drupal\social_post\Plugin\Block\PostGroupBlock;

/**
 * Provides a 'PostPhotoGroupBlock' block.
 *
 * @Block(
 *  id = "post_photo_group_block",
 *  admin_label = @Translation("Post photo on group block"),
 * )
 */
class PostPhotoGroupBlock extends PostGroupBlock {

  public $bundle;

  /**
   * The entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * The current user.
   *
   * @var \Drupal\Core\Session\AccountProxy
   */
  protected $currentUser;

  /**
   * The form builder.
   *
   * @var \Drupal\Core\Form\FormBuilderInterface
   */
  protected $formBuilder;

  /**
   * {@inheritdoc}
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, $entityTypeManager, $currentUser, $formBuilder) {
    parent::__construct($configuration, $plugin_id, $plugin_definition, $entityTypeManager, $currentUser, $formBuilder);
    // Override the bundle type.
    $this->bundle = 'photo';
  }

}
