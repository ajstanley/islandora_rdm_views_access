<?php


namespace Drupal\islandora_rdm_views_access\Plugin\views\access;

use Drupal\views\Plugin\views\access\AccessPluginBase;
use Drupal\Core\Session\AccountInterface;
use Symfony\Component\Routing\Route;

/**
 * Class ViewsCustomAccess
 *
 * @ingroup views_access_plugins
 *
 * @ViewsAccess(
 *     id = "ViewsCustomAccess",
 *     title = @Translation("RDM Customised views access"),
 *     help = @Translation("Add custom logic to access() method"),
 * )
 */
class ViewsCustomAccess extends AccessPluginBase {
  /**
   * {@inheritdoc}
   */
  public function summaryTitle() {
    return $this->t('Customised Settings');
  }


  /**
   * {@inheritdoc}
   */
  public function access(AccountInterface $account) {
    return FALSE;
  }


  /**
   * {@inheritdoc}
   */
  public function alterRouteDefinition(Route $route) {
    $route->setRequirement('_access', 'TRUE');
  }
}
