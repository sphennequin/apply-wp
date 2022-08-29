# Easy Test

## Git (if you can)
Before doing anything we need to have a copy of your answers. We use git to see how you can use it, name your commits, etc.
[x] Maybe [create](https://github.com/join) your Github Account
[x] [Fork](https://help.github.com/articles/fork-a-repo/) the project, then clone yours to work into
[x] Create a branch and name it as you want
[x] You could whatever software you want to ease the process : smartgit, git kraken, sourcetree, etc
[x] Try to make one commit and push it

# WordPress is your best Friend
You are done for the first part, now let's got to the WordPress part !
Before that ask for checking in order to see what has been done.

## Theme creation
[x] Add the [basic files](https://codex.wordpress.org/Theme_Development#Basic_Templates)
[x] Complete the style's [header](https://developer.wordpress.org/themes/basics/main-stylesheet-style-css/)
[] Then, add the default files for the homepage, the post single and archive view. Please refer to the [template hierarchy](https://wphierarchy.com/)
[x] Activate your theme

## Theme templating
* From the html folder ( `themes/easy/html/` ) you would have to carve and build the different templates, let's begin with the header and footer block.

### Header / Footer
[x] Header : localize the header part and isolate it inside header.php
[x] Footer : same for the footer block (footer.php)
[x] Go into homepage template and use header / footer wp functions
* Display should be the same from html's index and theme's homepage

#### Dynamization
Now your html has been splitted out, you must dynamize it, that means replacing all :
* relative urls into absolute urls
* same for image's source
* also apply to assets (css/javascript)
* so on ..
Do it on header and footer with [`get_stylesheet_directory_uri()`](https://codex.wordpress.org/Function_Reference/get_stylesheet_directory_uri), then ask for checking

### WP_Query
On homepage display the last 6 news.
* Use the [wp_query](http://www.geekpress.fr/wp-query-creez-des-requetes-personnalisees-dans-vos-themes-wordpress/) to get the 6th last (date) news
* Create a [loop](https://code.tutsplus.com/tutorials/a-beginners-guide-to-the-wordpress-loop--wp-20241) for display purpose
* Try to use a loop template foreach item with `get_template_part()` wp function