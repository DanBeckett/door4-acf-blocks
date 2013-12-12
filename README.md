door4-acf-blocks
================

A repository for quick access to blocks that we have created across sites for rapid redeployment. These blocks have all been built using Foundation so this is also a dependency - but not listed as it is built into our base template and is standard practice anyway.

Current blocks included are:
*	[Flexible Content Panel Switcher - Required](#flexible-content-panel-switcher---required)
*	[One Column Text Panel](#one-column-text-panel)
*	[One Column Indented Text Panel](#one-column-indented-text-panel)
*	[Two Column Text Panel](#two-column-text-panel)
*	[Two Column Text and Image Panel - Text Left](#two-column-text-and-image-panel---text-left)
*	[Two Column Text and Image Panel - (Text Right)](#two-column-text-and-image-panel-text-right)
*	[Testimonial Panel](#testimonial-panel)


Flexible Content Panel Switcher - Required
------------------------------------------

*	Version: 1.0
*	Source: G&H
*	File: /content-fcp.php
*	Description: The main include that looks at which Content Layout is currently being used and loads the respective fcp-content file.

One Column Text Panel
---------------------

*	Version: 0.9
*	Source Project: TSL
*	Folder:	/one_column_text_panel
*	Description: A simple text layout to display a one column WYSIWYG

One Column Indented Text Panel
------------------------------

*	Version: 0.9
*	Source Project: TSL
*	Folder:	/one_column_indented_text_panel
*	Description: Display a WYSIWYG content in an indented format, a blockquote type styling

Two Column Text Panel
---------------------

*	Version: 0.9
*	Source Project: TSL
*	Folder:	/two_column_text_panel
*	Description: A simple text layout to display two columns of WYSIWYG content

Two Column Text and Image Panel - Text Left
-------------------------------------------

*	Version: 0.9
*	Source Project: TSL
*	Folder:	/two_column_left_text_image_panel
*	Description: Display a two column layout with WYSIWYG content on the left and an image on the right

Two Column Text and Image Panel (Text Right)
--------------------------------------------

*	Version: 0.9
*	Source Project: TSL
*	Folder:	/two_column_right_text_image_panel
*	Description: Display a two column layout with WYSIWYG content on the right and an image on the left

Testimonial Panel
-----------------

*	Version: 0.85
*	Source Project: TSL
*	Folder:	/testimonial_panel
*	Dependencies: jQuery, Flexslider (both available to queue in standard template functions file)
*	Description: A section to display either single or multiple simple text content entries in a slider



To-do/Decisions
===============

*	Do we want to include screenshots in this readme, and how best to handle this
*	How best to handle lists of dependencies (i.e. Javascript files or snips to go into Site Plugin or Functions.php)