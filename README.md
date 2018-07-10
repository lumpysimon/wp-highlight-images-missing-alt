# Highlight Images With No Alt Attribute #

A WordPress accessibility plugin to highlight images on your website that are missing the alt attribute.

 * **Author:** Simon Blackbourn
 * **Author URI:** [simonblackbourn.net](https://simonblackbourn.net) and [lumpylemon.co.uk](https://lumpylemon.co.uk)
 * **Tags:** accessibility, images, alt text, tools, screen readers
 * **License:** GPLv2 or later

## Description ##

Every image on your website should have an alt tag. Alt tags are a crucial accessibility feature used by screen readers to describe the image to visually impaired and blind users. This plugin will highlight all images that do not have an alt tag by adding a bright red, dashed border to them.

## Frequently Asked Questions ##

### What's an alt tag? ###

If you view the source code of a website, the HTML tags for images will look something like this:

`<img src="sunset.jpg" alt="A photograph of sunset over the desert">`

The `alt="..."` bit is the alt tag. The text inside the double quotes will be read out by screen readers to visually impaired and blind users. Without it, they have no no way of knowing what the image is or what it represents.

Missing alt tags will also cause your website to fail various accessibility standards.

### How do I add missing alt tags? ###

Edit the post/page in which the image is shown, find the image, click the icon to edit it, and add your text to the 'Alternative text' field. Then click the blue 'Update' button to save the changes.

### What if the image is part of the theme of my website (not uploaded via the media library)? ###

You - or your developer or theme author - will need to edit the file containing the image and manually add the alt tag.

### Can I omit the alt tag if an image is purely for design purposes? ###

No, these kind of images still need one, but it should be empty:

`<img src="image.png" alt="">`

### Argh! I don't want my visitors to see bright red dashed borders round my images! ###

Don't worry, only logged in users with the `manage_options` capability will see the highlighting.

### Can I make the highlighting visible to users with a different capability? ###

Yes. For example, the following code changes the required capability to `edit_posts`. Place this code in the `functions.php` file in your active theme:

```
add_filter( 'hiwnaa_user_cap', 'change_the_hiwnaa_user_cap' );

function change_the_hiwnaa_user_cap( $cap ) {
	return 'edit_posts';
}
```

## Installation ##

 1. [Download a zip file of the latest version](https://github.com/lumpysimon/wp-highlight-images-missing-alt/archive/master.zip).
 2. In your WordPress admin area, go to Plugins > Add New > Upload Plugin.
 3. Click 'Choose file'.
 3. Find the file you just downloaded, upload and then activate it.

## Changelog ##

= 1.0 (10th July 2018) =
* Initial release