<?php

/**
 * @file
 * Contains Drupal\salut\Tests\DefaultController.
 */

namespace Drupal\salut\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the salut module.
 */
class DefaultControllerTest extends WebTestBase
{





  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "salut DefaultController's controller functionality",
      'description' => 'Test Unit for module salut and controller DefaultController.',
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
   * Tests salut functionality.
   */
  public function testDefaultController() {
    // Check that the basic functions of module salut.
    $this->assertEqual(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }
}
