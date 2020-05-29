=== WP TimeZone ===
Contributors: ezraverheijen
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7K5B29HPJE3XW
Tags: timezone, time zone, daylight saving, time, zone, scheduled posts, scheduled post error, offset, cet, cest, utc, utc+1, utc+2, central european summer time, central european time
Requires at least: 3.1
Tested up to: 4.2
Stable tag: 1.3
License: GPL v3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Takes care of publishing posts that missed their schedule, for CET/CEST time zones only.

== Description ==

This lightweight plugin can be used if the scheduled post feature is not working for you (missed scheduled post errors), and you host your site in a European country using CEST in the summer and CET during the winter.

== Installation ==

1. Upload the `wp-timezone` folder to the `/wp-content/plugins/` directory
1. Activate WP TimeZone through the 'Plugins' menu in WordPress
1. No need to configure, it just works!

If WP TimeZone needs to be installed on a multisite, it can also be placed in ['mu-plugins'](http://codex.wordpress.org/Must_Use_Plugins).

== Screenshots ==

1. Timezones are automatically managed by the WP TimeZone plugin.

== Changelog ==

= 1.3 =
* Bugfix
* Even better and faster code

= 1.2 =
* Added fix for a reported issue where scheduled posts missed their schedule again since timezone changed from CEST to CET. All possible cases should be covered now.

= 1.1 =
* Some code improvements

= 1.0 =
* Initial release

== Upgrade Notice ==

= 1.3 =
This version fixes a bug where the timezone offset is not properly set by the plugin. You should upgrade.