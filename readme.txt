=== LinkMaker ===
Contributors: fishdan
Tags: wikipedia, links, search, wiki
Requires at least: 5.8
Tested up to: 6.9
Requires PHP: 7.4
Stable tag: 0.1.9
License: MIT
License URI: https://opensource.org/licenses/MIT

LinkMaker turns links pointing to `linkmaker` into live Wikipedia searches using the link text.

== Description ==

LinkMaker lets editors create Wikipedia links without leaving the editor. Link any text to `linkmaker` (no protocol) and the plugin automatically points the front-end link to the matching article on Wikipedia. It ships with lightweight JavaScript and CSS that only runs on the front-end when needed.

* Gutenberg-friendly workflow
* Zero configuration
* Keeps links that already point to GitHub untouched

== Contact ==

Questions or partnership inquiries: [dan@fishdan.com](mailto:dan@fishdan.com)

== Installation ==

1. Upload the `linkmaker` folder to `/wp-content/plugins/`, or install the plugin via the WordPress admin by uploading the ZIP file.
2. Activate the plugin through the "Plugins" screen in WordPress.

== Frequently Asked Questions ==

= Why isn’t my GitHub link changing? =
Links whose `href` contains `github` are intentionally skipped so developer documentation is unaffected.

= Can I force a different article slug than the visible text? =
Not yet. The plugin currently matches the Wikipedia article based on the visible anchor text.

== Screenshots ==

1. Linking text to `linkmaker` in Gutenberg automatically produces Wikipedia links on the front end.

== Changelog ==

= 0.1.9 =
* Removed HTML from the plugin author field to satisfy WordPress.org header validation.

= 0.1.8 =
* Updated ownership contact details and refreshed release assets for WordPress.org review.

= 0.1.7 =
* Enabled Freemius WordPress.org compatibility mode and adjusted release packaging.

= 0.1.6 =
* Bundled the Freemius SDK and initialized it for LinkMaker.

= 0.1.5 =
* Renamed the plugin to LinkMaker and refreshed distribution metadata.

= 0.1.4 =
* Refined asset loading and WordPress.org preparation.

= 0.1.0 =
* Initial release.

== Upgrade Notice ==

= 0.1.9 =
Fixes the plugin header author field so WordPress.org validation passes without warnings.
