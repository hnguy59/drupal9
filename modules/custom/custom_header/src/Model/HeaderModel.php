<?php
namespace Drupal\custom_header\Model;

class HeaderModel {
  public $title;
  public $menuItems;
  public $theme;

  public function  __construct($data) {
    $this->title = $data->field_custom_header_heading->value;
    $this->menuItems = '';
    $this->theme = $data->field_custom_header_theme->value;
  }
}