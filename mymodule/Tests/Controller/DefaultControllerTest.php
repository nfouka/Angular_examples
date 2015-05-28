<?php

/**
 * @file
 * Contains Drupal\mymodule\Tests\DefaultController.
 */

namespace Drupal\mymodule\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the mymodule module.
 */
class DefaultControllerTest extends WebTestBase
 {





  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "mymodule DefaultController's controller functionality",
      'description' => 'Test Unit for module mymodule and controller DefaultController.',
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
   * Tests mymodule functionality.
   */
  public function testDefaultController() {
    // Check that the basic functions of module mymodule.
    $this->assertEqual(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }
}
