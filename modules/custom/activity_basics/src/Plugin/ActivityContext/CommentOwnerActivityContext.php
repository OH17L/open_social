<?php

namespace Drupal\activity_basics\Plugin\ActivityContext;

use Drupal\activity_creator\Plugin\ActivityContextBase;

/**
 * Provides a 'CommentOwnerActivityContext' activity context.
 *
 * @ActivityContext(
 *  id = "comment_owner_activity_context",
 *  label = @Translation("Comment owner activity context"),
 * )
 */
class CommentOwnerActivityContext extends ActivityContextBase {

  /**
   * {@inheritdoc}
   */
  public function getRecipients(array $data, $last_uid, $limit) {
    $recipients = [];

    return $recipients;
  }

  /**
   * {@inheritdoc}
   */
  public function isValidEntity($entity) {
    return TRUE;
  }

}
