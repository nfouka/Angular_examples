<?php

/**
 * @file
 * Contains Drupal\nadir\Tests\DefaultController.
 */

namespace Drupal\nadir\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the nadir module.
 */
class DefaultControllerTest extends WebTestBase
{





  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "nadir DefaultController's controller functionality",
      'description' => 'Test Unit for module nadir and controller DefaultController.',
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
   * Tests nadir functionality.
   */
  public function testDefaultController() {
    // Check that the basic functions of module nadir.
    $this->assertEqual(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }
}
