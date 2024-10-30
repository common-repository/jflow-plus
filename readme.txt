=== jFlow Plus  ===
Contributors: priteshgupta
Donate link: http://www.priteshgupta.com/
Tags:  content, easing, featured, images, jquery, plugin, slider, wordpress, jflow, gallery, slideshow, autoplay, controls, arrows
Requires at least: 2.8
Tested up to: 3.8.1
Stable tag: 2.0.1

The jFlow Plus Plugin implements the jFlow Plus Slider into your WordPress blog, without touching other galleries.

== Description ==

jFlow Plus can be used to create simple image sliders with text content in a beautiful manner, it can be used within articles as well as theme files. It does not modify any other images or galleries.

Release Page: <a href="http://www.priteshgupta.com/plugins/jflow-plus" target="_blank">jFlow Plus Plugin Homepage</a>
Live Demo: <a href="http://testwp.priteshgupta.com/?page_id=74" target="_blank">jFlow Plus Demonstration</a>

<strong>Huge changes form version 1.2.2 to version 2.0.0, older users please backup current plugin before updating.</strong>

After installing the plugin just write something like:

`[jflow]
[jflowslide imgpath="FullPathOfImage" imgalt="ImageAlt" heading="HeadingOfSlide" slidetext="SlideText" linktitle="LinkTitle"]
[/jflow]`

Where `[jflow]` and `[/jflow]` are the beginning and ending of jFlow Plus slider respectively, keep on adding as many `[jflowslide imgpath="FullPathOfImage" imgalt="ImageAlt" heading="HeadingOfSlide" slidetext="SlideText" linktitle="LinkTitle"]` for as many slides you want.

To implement directly in theme files, use:

`<div id="jFlow">
<div class="slide">
<img src="FullPathOfImage" alt="ImageAlt"/>
<span><h3>HeadingOfSlide</h3><p>SlideText<a href="#" title="LinkTitle" class="readmore"></a></p></span>
</div>
</div>
<div id="jFlowController">
<span class="jFlowControl"></span>
<span class="jFlowControl"></span>
<span class="jFlowControl"></span>
</div>
<span class="jFlowPrev"><div></div></span>
<span class="jFlowNext"><div></div></span>
</div>`

jFlow Plus is originally by <a href="http://www.wordimpressed.com/" target="_blank">Devin Walker</a> with code from <a href="http://www.karmagination.com/" target="_blank">ktan</a>.

You can customize these in the Settings section:

* Width of Slider.
* Height of Slider.
* Time to transition one slide.
* Enable/Disable Autoplay.
* Display time per slide.

Internationalization supporting:

* English

== Installation ==

1. Download the latest version.
2. Extract it in the /wp-content/plugins/ directory.
3. Activate the plugin through the 'Plugins' menu in WordPress.
4. Customize the plugin in the Settings > jFlow Plus.

== Frequently Asked Questions ==

For any query, ask the author of this WordPress Plugin at <a href="http://www.priteshgupta.com/" target="_blank">PriteshGupta.com</a>.

== Screenshots ==

1. The Settings menu in the admin panel for customization.

Visit <a href="http://www.priteshgupta.com/plugins/jflow-plus" target="_blank">jFlow Plus Plugin Homepage</a> for more information.

== Changelog ==

= 1.0.0 =
* Stable version.

= 1.2.0 =
* Customizable display time per slide.

= 1.2.1 =
* With default values.

= 2.0.0 =
* Made from scratch again.

== Upgrade Notice ==

= 1.0.0 =
Stable Version.

= 1.2.0 =
Customizable display time per slide, upgrade recommended. 

= 1.2.1 =
Default values now present.

= 2.0.0 =
Old users, please backup current plugin before updating and this update is striclty incompatible with version 1.0.0.