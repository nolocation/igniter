IGNITER README
----------------

Igniter is a starting theme... 
Nothings fannzy but if you don't want to start with a blanc theme, these is for you.

Juste copy past the igniter folder in /site/all/themes.

Go in

TEMPLATES (.tpl)
-----------------

We start with the core template of D7. So we are sure than we didn't forget any
things and than nothings is left from D6.
We also keep the original comment and documentation inside template.

NO HTML5 doctype
------------------

We do not use the HTML5 doctype:
 - HTML5 + RDFa doctype doesn't pass validator
 - HTML5 specification change almost every day
 - without JS it doesn't work on IE

But we using HTML5 element name as class or id for some element:
 .article: for node
 .section: page section
 #header: page header section
 #footer: page footer section


THEAMING DOCUMENTATION
------------------------

The theme developer's guide -> http://drupal.org/theme-guide

Core templates -> http://drupal.org/node/190815

Drupal Template Suggestions -> http://drupal.org/node/1089656

Render Arrays in Drupal 7 -> http://drupal.org/node/930760

Assigning content to regions -> http://drupal.org/node/171224