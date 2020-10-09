=== OAuth Single Sign On - SSO (OAuth client) ===
Contributors: miniOrange
Tags: oauth, oauth client, oauth login, single sign on, sso
Requires at least: 3.0.1
Tested up to: 5.2
Stable tag: 31.5.7
License URI: http://miniorange.com/usecases/miniOrange_User_Agreement.pdf

OAuth Login plugin allows login with your Eve Online, google, facebook, twitter or other custom OAuth server.

== Description ==

OAuth Login plugin allows login with your Eve Online, google, facebook, twitter, other custom OAuth Servers and custom OpenID Providers. OAuth Client plugin works with any OAuth provider that conforms to the OAuth 2.0 standard.


= FREE VERSION FEATURES =

*	Supports login with any 3rd party OAuth server or custom OAuth server.
*	Optionally Auto Register Users- Automatic user registration after login if the user is not already registered with your site
*	Attribute Mapping- Basic Attribute Mapping feature to map wordpress user profile attributes like email and first name. Manage username & email with data provided
*	Oauth Provider Support- It Supports only one Oauth Provider. (ENTERPRISE : Supports Multiple Oauth Provider)
*	Redirect URL after Login- Automatically Redirect user after successful login. Note: Does not include custom redirect URL
*	Display Options- Oauth Login Provides Display Option for both Login form and Registration form
*	Logging- If you run into issues it can be helpful to enable debug logging


= STANDARD VERSION FEATURES =

*	All the Free Version Features
*	Attribute Mapping- Custom Attribute Mapping feature to map wordpress user profile attributes like username, firstname, lastname, email and profile picture. Manage username & email with data provided
*	Login Widget- Use Widgets to easily integrate the login link with your WordPress site
*	Support for Shortcode- Use shortcode to place login button anywhere in your Theme or Plugin
*	Customize Login Buttons / Icons / Text- Wide range of Oauth login Buttons/Icons and it allows you to customize Text shadow
*	Custom Redirect URL after Login- Provides Auto Redirection and this is useful if you wanted to globally  protect your whole site
*	Redirect URL after logout- Auto Redirect Users to custom url after logout in WordPress
*	Basic Role Mapping- Assign default role to user registering through Oauth Login based on rules you define.


= PREMIUM VERSION FEATURES =

*	All the Standard Version Features
*	Advanced Role Mapping- Assign roles to users registering through Oauth Login based on rules you define.
*	OpenID Connect Support- Supports login with any 3rd party OpenID Connect server.
*	Multiple Userinfo Endpoints Support- It Supports multiple Userinfo Endpoints.
*	Account Linking- Supports the linking of user accounts from OAuth Providers to Wordpress account.
*	App domain specific Registration Restrictions- Restricts registration on your site based on the person's email address domain
*	Multi-site Support- Unique ability to support multiple sites under one account
*	Email notifications- You can customize the E-mail templates used for the automatic email notifications related to user registration.
*	Extended OAuth API support- Extend OAuth API support to extend functionality to the existing OAuth client.[ENTERPRISE]
*	BuddyPress Attribute Mapping- It allows BuddyPress Attribute Mapping.[ENTERPRISE]
*	Page Restriction according to roles- Limit Access to pages based on user status or roles. This WordPress plugin allows you to restrict access to the content of a page or post to which only certain group of users can access.[ENTERPRISE]
*	Login Reports- Creates user login and registration reports based on application used. [ENTERPRISE]


= No SSL restriction =
*	Login to wordpress using google credentials or any other app without having an SSL or HTTPS enabled site.

= List of popular OAuth Providers we support =
*   Eve Online
*	Google
*	Facebook
*	Windows Account
*	Azure AD
*	Slack
*	HR Answerlink / Support center
*	Discord

= Other OAuth Providers we support =
*	Other OAuth Providers OAuth client plugin support includes Foursquare, Harvest, Mailchimp, Bitrix24, Spotify, Vkontakte, Huddle, Reddit, Strava, Ustream, Yammer, RunKeeper, Instagram, SoundCloud, Pocket, PayPal, Pinterest, Vimeo, Nest, Heroku, DropBox, Buffer, Box, Hubic, Deezer, DeviantArt, Delicious, Dailymotion, Bitly, Mondo, Netatmo, Amazon, WHMCS  etc.


== Installation ==

= From your WordPress dashboard =
1. Visit `Plugins > Add New`
2. Search for `oAuth Login ( OAuth Client )`. Find and Install `oAuth Login ( OAuth Client )`
3. Activate the plugin from your Plugins page

= From WordPress.org =
1. Download oAuth Login ( OAuth Client ).
2. Unzip and upload the `miniorange-oauth-login` directory to your `/wp-content/plugins/` directory.
3. Activate miniOrange OAuth from your Plugins page.

= Once Activated =
1. Go to `Settings-> miniOrange OAuth -> Configure OAuth`, and follow the instructions
2. Go to `Appearance->Widgets` ,in available widgets you will find `miniOrange OAuth` widget, drag it to chosen widget area where you want it to appear.
3. Now visit your site and you will see login with widget.

= For Viewing Corporation, Alliance, Character Name in user profile =
To view Corporation, Alliance and Character Name in edit user profile, copy the following code in the end of your theme's `Theme Functions(functions.php)`. You can find `Theme Functions(functions.php)` in `Appearance->Editor`.
<code>
add_action( 'show_user_profile', 'mo_oauth_my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'mo_oauth_my_show_extra_profile_fields' );
</code>

== Frequently Asked Questions ==
= I need to customize the plugin or I need support and help? =
Please email us at info@xecurify.com or <a href="http://miniorange.com/contact" target="_blank">Contact us</a>. You can also submit your query from plugin's configuration page.

= I don't see any applications to configure. I only see Register to miniOrange? =
Our very simple and easy registration lets you register to miniOrange. OAuth login works if you are connected to miniOrange. Once you have registered with a valid email-address and phone number, you will be able to configure applications for OAuth.

= How to configure the applications? =
When you want to configure a particular application, you will see a Save Settings button, and beside that a Help button. Click on the Help button to see configuration instructions.


<code>
add_action( 'show_user_profile', 'mo_oauth_my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'mo_oauth_my_show_extra_profile_fields' );
</code>


= I need integration of this plugin with my other installed plugins like BuddyPress, etc.? =
We will help you in integrating this plugin with your other installed plugins. Please email us at info@xecurify.com or <a href="http://miniorange.com/contact" target="_blank">Contact us</a>. You can also submit your query from plugin's configuration page.

= I verified the OTP received over my email and entering the same password that I registered with, but I am still getting the error message - "Invalid password." =
Please write to us at info@xecurify.com and we will get back to you very soon.

= For any other query/problem/request =
Please email us at info@xecurify.com or <a href="http://miniorange.com/contact" target="_blank">Contact us</a>. You can also submit your query from plugin's configuration page.

== Screenshots ==

1. Add OAuth Applications
2. List of Apps
2. Configure Custom OAuth Application

== Changelog ==

= 31.5.8 =
* Custom Attribute Mapping Fixes

= 31.5.7 =

= Made compatible for wordpress v5.2
= Fixed deep links redirection
= Minor bugfixes

= 31.5.6 =
= Made compatible for wordpress v5.1 
= Fixed deep links redirection

= 31.5.5 =
* Fixed WordPress Profile Updation
* Fixed License Deactivation Flow

= 31.5.4 =
* Fixed OpenID Connect flow
* Added textbox to display SSO Protocol on Configure App tab 

= 31.5.3 =
* Fixed cURL 60 error

= 31.5.2 =
* Fixed a display name issue

= 31.5.1 =
* Added feature to Enable Single Login Flow/Button for multiple applications

= 31.5.0 =
* Added support for multiple email attribute mapping

= 31.4.7 =
* replaced cURL calls with WP HTTP API
* replaced sanitize_text_field() with stripslashes() 

= 31.4.6 =
* Added support for Refresh Token Hook/Filter

= 31.4.5 =
* Added Get License Key Button
* UI Fixes
* Replaced SESSION with wp_cache
* Grant realted fixes

= 31.4.4 =
* Enabled update feature for attribute mapping

= 31.4.0 =
* Updated Licensing Plan

= 31.3.0 =
* Added BuddyPress compatibility

= 31.2.1 =
* Updated Licensing plan and Added checkbox to enable/disable Authorization Header

= 31.1.8 =
* Updated Redirect / Callback URL

= 31.1.7 =
* Added multiple OAuth/OpenID Connect providers in default application list(bitrix24,github,clever,box,dash10,fitbit,hr_answerlink,invision_community,amazon,salesforce,paypal,yahoo,cognito,onelogin,okta,adfs, gigya)
* Added Updates for Eve-Online

= 31.1.6 =
* Added domain based restriction

= 31.1.5 =
* Eve online fixes

= 31.1.4 =
* Added support for group info endpoint for group mapping.

= 31.1.3 =
* Added OpenId connect support

= 31.1.2 =
* Added exclude urls option in auto redirect

= 31.1.1 =
* First version of enterprise plugin.