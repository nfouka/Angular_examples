<?php

/**
 * @file
 * Contains Drupal\first\Tests\DefaultController.
 */

namespace Drupal\first\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the first module.
 */
class DefaultControllerTest extends WebTestBase {
  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "first DefaultController's controller functionality",
      'description' => 'Test Unit for module first and controller DefaultController.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests first functionality.
   */
  public function testDefaultController() {
    // Check that the basic functions of module first.
    $this->assertEqual(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
