OOP Examples
=======================

http://drupal.org/project/oop_examples

The project provides examples of object-oriented programming (OOP) in Drupal
starting from very basic ones. The examples are in sequence: each next
example improves the previous one.

OOP Examples 01 - 03 are applicable to Drupal 7 only and not present here,
because Drupal 8 has built-in PSR-4 support.

Examples available:

OOP Example 04. PSR-4 Namespaces.
PSR-4 is current Drupal 8 style of module namespaces. See 
https://www.drupal.org/node/2156625. Base class Vehicle and derived classes 
Car and Motorcycle have been created.

OOP Example 05. Business logic setup.
Class folders and namespaces structure has been created for further
business logic development.

OOP Example 06. Class field $color. Class constructor.
Class field $color has been added for Vehicle class. Default color
with translation t() is set up in class constructor because expression
is not allowed as field default value. Common method getDescription()
has been introduced.

OOP Example 07. Class field $doors.
Class field $doors has been added for Car class. Some car model derived
classes (Toyota) have been added.

OOP Example 08. ColorInterface.
Interface ColorInterface has been added. Two different class hierarchies:
Vehicle and Fruit implement this interface.
