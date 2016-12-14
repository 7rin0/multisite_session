<?php

namespace \Drupal\multisite_session\Controller;

use \Symfony\Component\HttpFoundation\Request;

/**
 * Multisite Session Main Controller.
 */
class MultisiteSessionController {

  /**
   * Multisite Session Main Action.
   */
  public function indexAction(Request $request) {
    return 'ok';
  }

}
