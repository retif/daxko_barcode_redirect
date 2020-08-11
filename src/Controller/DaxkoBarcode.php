<?php

namespace Drupal\daxko_barcode_redirect\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Routing\TrustedRedirectResponse;

/**
 * Class DaxkoBarcode
 *
 * @package Drupal\daxko_barcode_redirect\Controller
 */
class DaxkoBarcode extends ControllerBase {

  /**
   * @return \Drupal\Core\Routing\TrustedRedirectResponse
   */
  public function redirectAfterBarcodeScanner() {
    $status = \Drupal::request()->get('status');

    if ($status === 'success') {
      return new TrustedRedirectResponse('/virtual-scan/check');
    }

    return new TrustedRedirectResponse('/test-check-page');
  }
}
