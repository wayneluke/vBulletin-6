# vBulletin 6.1.2 Changes and Updates

vBulletin 6.1.2 is available for download. vBulletin Cloud upgrades will begin in within 7-14 days.

## Gallery Channels

Gallery Channels are a new top-level channel type centered around photos. Gallery Channels act like sitewide photo albums and allow users to share images. Sub-channels will inherit properties designed to highlight your users' image uploads. 

1. The default content type will be the Photo Gallery content type.
2. Users will have an attachment limit of twenty images per post, instead of the five images allowed elsewhere.
3. A navigation bar item will be added automatically. 
4. You can turn Galleries off globally using Site Builder's Quick Setup tool.
5. The Gallery channel view uses the Card View. 
6. Children of the Gallery Channel will default to the Photos tab to show images.
7. Photos are shown using a flexible card view when viewing the channel.

All the features of photo galleries are available for each topic within gallery channels. These include the lightbox carousel, each image allowing a title and description, and image re-ordering when creating a post.

More information on Gallery Channels can be found in our [Tutorials](https://forum.vbulletin.com/articles/support-documents/tutorials/4501893-using-galleries).

## Wordpress Sign-In

If you run a WordPress front-end, you can now allow your users to connect their accounts to vBulletin and log in with a single set of credentials. 

If you use WordPress.com, this feature requires a paid account to install the necessary plugins. During development, two WordPress plugins that allow OAUTH single sign-in were tested.

- WP OAuth Server (OAuth Authentication) by Jayson T Cote (OR wp-oauth.com, both are the same): [https://wordpress.org/plugins/oauth2-provider/](https://wordpress.org/plugins/oauth2-provider/)
- WP OAuth Server ( Login with WordPress ) by miniOrange: [https://wordpress.org/plugins/miniorange-oauth-20-server/](https://wordpress.org/plugins/miniorange-oauth-20-server/)

More information on configuring this can be found in our [tutorials](https://forum.vbulletin.com/articles/support-documents/tutorials/4501877-using-wordpress-oauth).

## Translations

There is a new translation interface when using Site Builder to edit a Page, Module, or Navigation Link. Using this interface allows you to translate the titles inline. vBulletin will automatically pull these phrases and display the titles in the user's chosen language.


## Age Verification

A new option to restrict the minimum registration age has been added to the system. Previously, this was a hard-coded value of 13 to comply with COPPA regulations. Now, Admins can specify the minimum age for registration separately. The default value is 0. You can set this value in the AdminCP under Settings -> Options -> Privacy Options.

## Channel Tasks

Under Channel Management, the administrator can now define Channel Tasks. Currently, the tasks allow users to set up tasks to delete or Close topics in a channel after a chosen amount of time has passed since the topic starter or last reply.

The Close action of Channel Tasks replaces the option in the Channel Manager for Topic Expiration.

## Additional Changes

- The Username Markup is used in more locations throughout the system.
- Fixed an issue with improper content type selection if the text content type was not available.
- Resolved an issue with vBulletin Messenger creating nodes with the wrong endpoint.
- Resolved an issue where the Web Manifest could trigger the creation of additional guest sessions for a user.
- Updated Activity Stream to include author item property.
- When using SMTP Email, Administrators can specify a custom HELO property.
- Post Icon Categories and Icons will show in the properly defined order when creating topics.
- When assigning infractions, the different levels will display in the same order they are used in the AdminCP.

---

## Deprecations

We occasionally must stop supporting different server packages. When support is deprecated, developers will not resolve issues specific to the unsupported versions. You should upgrade these server packages to prevent problems in newer vBulletin versions.

In a future version of vBulletin, the following server packages will be considered deprecated.

- MySQL 5.7.X
- PHP 8.1.X

---

## Additional Information

### Install / Upgrade

- [Installation Instructions](https://www.vbulletin.com/forum/node/4483267)
- [Upgrade Instructions](https://www.vbulletin.com/forum/node/4483262)

### File Cleanup

After upgrading your vBulletin system, you should delete any possible obsolete files. You can obtain more information on why this is needed and instructions on how to do this in this [**topic**](https://www.vbulletin.com/forum/node/4391346) in the vBulletin 6 Installs & Upgrades forum.

### System Requirements

Current Minimum System Requirements

- PHP Version: 8.1.0
- MySQL Version: 5.7.10
- MariaDB Version: 10.4.0

Recommended System Requirements

- PHP Version:  8.2 or higher
- MySQL Version: 8.0 or higher
- MariaDB Version: 10.6+

For more information, see [vBulletin Connect System Requirements](https://www.vbulletin.com/forum/node/4391344).

### Current Version Support Schedule

- Active Version - 6.1.1
- Security Patch - 6.1.0
- Security Patch - 6.0.8

### Discussion

If you have any questions about these changes, you may discuss them here: [node]4501564[/node]

If you encounter an issue with the software or wish to submit a feature request, please visit our [tracker](https://tracker.vbulletin.com/vbulletin6).

To receive support for your vBulletin Product, please visit our [community forums](https://www.vbulletin.com/forum/).
