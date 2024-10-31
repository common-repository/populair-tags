=== Populair Tags  ===
Contributors: Johnny Mast
Donate link: http://www.phpvrouwen.nl/populair-tags/
Tags: Tagcloud, posts, tags, tagcloud
Requires at least: 2.5.1
Tested up to: 2.6.2
Stable tag: 1.3.1

This plugin adds a tag cloud of the most used tags by the blog author(s).

== Description ==

This plugin adds a tag cloud of the most used tags by the blog author(s).


== Installation ==
 
**Installation of Twitme is to easy**
 
Upload the directory populair-tags to the `/wp-content/plugins/` directory. Then open the file "sidebar.php" in the theme that you are
currently using and add this code.

<code>
<!-- Populair tags -->
 <?php
		if (function_exists ('show_populair_tags'))
		{
			?><h2>Populair tags</h2><?
			show_populair_tags();
		}
?> 
<!- End of Populair tags -->
</code>

After you have done that you can activate the plugin through the 'Plugins' menu in WordPress.

And your done :).
 
 
== Screenshots ==
 
[Can be found here](http://www.phpvrouwen.nl/populair-tags/)
 
 
== Frequently Asked Questions ==
 
No questions Yet
 
== Contact ==
 
Suggestions, bugs, hugs and love can be donated at the following locations.
 
1. [Authors page](http://www.phpvrouwen.nl/)
2. [Project webpage](http://www.phpvrouwen.nl/populair-tags/)
3. [Project Forum](http://www.phpvrouwen.nl/forums/forum/populair-tags)
