<?php
namespace Drupal\custom_header\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\custom_header\Model\StandardPageModel;

class HeaderController extends ControllerBase {

  public static function buildHeader($data) {
    $node_id = $data->field_custom_header->target_id;
    $item = \Drupal::entityTypeManager()->getStorage('node')->load($node_id);
    $resultsData = new HeaderModel($item);
    return $resultsData;
  }
}