<p>Adds multiple JavaScript or CSS files at the same time.</p>
<p>A library defines a set of JavaScript and/or CSS files, optionally using
settings, and optionally requiring another library. For example, a library
can be a jQuery plugin, a JavaScript framework, or a CSS framework. This
function allows modules to load a library defined/shipped by itself or a
depending module, without having to add all files of the library separately.
Each library is only loaded once.</p>

<h3>Parameters</h3>
<p>
<strong>$module</strong>:
The name of the module that registered the library.</p>
<p><strong>$name</strong>:
The name of the library to add.</p>
<p><strong>$every_page</strong>:
Set to TRUE if this library is added to every page on the site. Only items
with the every_page flag set to TRUE can participate in aggregation.</p>

<h3>Return value</h3>
<p>
TRUE if the library was successfully added; FALSE if the library or one of
its dependencies could not be added.</p>

<h1>Formulaire</h1>

<?php print drupal_render($form1); ?>


