<?php

namespace \Drupal\multisite_session\Controller;

use Drupal\Core\Controller\ControllerBase;
use \Symfony\Component\HttpFoundation\Request;

/**
 * Multisite Session Main Controller.
 */
class MultisiteSessionController extends ControllerBase {

  /**
   * Multisite Session Main Action.
   */
  public function indexAction(Request $request) {
    return 'Multisite Session Administration Page';
  }

}
