<?php

namespace Drupal\custom_header\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\node\NodeInterface;
use Drupal\custom_header\Controller\HeaderController;

/**
 * Provides a block with a simple text.
 *
 * @Block(
 *   id = "Custom Header",
 *   admin_label = @Translation("Nehre - Custom Header"),
 * )
 */
class HeaderBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $resultsData = null;

    $node = \Drupal::routeMatch()->getParameter('node');
    if ($node instanceof NodeInterface) {
      $nid  = $node->id();
    }

    if ($nid != null) {
      $items = \Drupal::entityTypemanager()->getStorage('node')->load($nid);
      $resultsData = HeaderController::buildHeader($items);
    }

    return [
      // '#markup' => $this->t('This is a simple block!'),
      '#page' => $resultsData,
      '#theme' => 'custom_header',
    ];
  }

  /**
   * {@inheritdoc}
   */
  protected function blockAccess(AccountInterface $account) {
    return AccessResult::allowedIfHasPermission($account, 'access content');
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $config = $this->getConfiguration();

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['header_block_settings'] = $form_state->getValue('header_block_settings');
  }
}