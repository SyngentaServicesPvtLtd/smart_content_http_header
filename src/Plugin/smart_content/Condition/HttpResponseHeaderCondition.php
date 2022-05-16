<?php

namespace Drupal\smart_content_http_header\Plugin\smart_content\Condition;

use Drupal\smart_content\Condition\ConditionTypeConfigurableBase;

/**
 * Provides a HTTP Header Smart Condition.
 *
 * @SmartCondition(
 *   id = "http_response_header",
 *   label = @Translation("HTTP Header"),
 *   group = "http_header",
 *   type = "key_value",
 *   unique = TRUE,
 *   weight = 0,
 * )
 */
class HttpResponseHeaderCondition extends ConditionTypeConfigurableBase {

  /**
   * {@inheritdoc}
   */
  public function getLibraries() {
    $libraries = array_unique(array_merge(parent::getLibraries(), ['smart_content_http_header/condition.http_response_header']));
    return $libraries;
  }

}
