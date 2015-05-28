<?php

/**
 * @file
 * Contains Drupal\foo\Tests\DefaultController.
 */

namespace Drupal\foo\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the foo module.
 */
class DefaultControllerTest extends WebTestBase
{





  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "foo DefaultController's controller functionality",
      'description' => 'Test Unit for module foo and controller DefaultController.',
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
   * Tests foo functionality.
   */
  public function testDefaultController() {
    // Check that the basic functions of module foo.
    $this->assertEqual(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }
}
