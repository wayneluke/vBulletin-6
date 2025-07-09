# vBulletin 6.1.3 Changes and Updates

A preview release of vBulletin 6.1.3 is available for download. 

## Push Notifications

Push Notifications are now available in supported browsers when using HTTPS. Users can enable this option on their User Settings page under Notifications. Once enabled, the browser will prompt the user to allow notifications for the site. If the user grants permission, then the browser will display push notifications for your site. 

vBulletin will automatically create the required VAPID Keys for you. Additionally, a new rewrite is required in the .htaccess file so that the browser can locate the JavaScript Service Worker. You will either need to replace your existing .htaccess file with the copy included in your vBulletin 6.1.3 download or update the rewrites to include the following:

```
	# Rewrite serviceworker from root -> js directory
	RewriteRule ^vb_serviceworker.js js/vb_serviceworker.js [NC,L,QSA]
```
## Topic Prefixes

When editing channels in the Channel Manager, Administrators can set them to require a Topic Prefix for new content. When Channels are set to require a prefix and have one or more prefix sets assigned (Channel Manager > Topic Prefixes), new topics must have a prefix selected to be submitted. The exceptions to this requirement include topics created by RSS or moved to the channel by a moderator.

## Infraction Discussion

The developers have refined the process of replying to infractions. The change enables replies to appear more quickly in the discussion. To initiate a discussion on an Infraction, Administrators and Moderators can visit the Infraction tab in their Message Center and click on the title to view the infraction. Users with permission to reply can do so using the editor on the page. The editor will function the same as for any other topic in vBulletin.

## IP Address Lookup

Administrators and Moderators can now look up the IP Addresses of users on the user's profile. IP Address Lookup offers the same functionality previously available from the Moderator Control Panel. 

## Additional Changes

- Resolved several JavaScript issues that occurred on older versions of Apple's Safari browser.
- Restored links to send a Private Message if vBulletin Messenger is disabled. 
- Added pagination to the interface when inserting images from a personal Photo Album into a post.
- Resolved an issue preventing the use of Post Icons in some instances.
- The JavaScript Cache Buster has been updated to use a randomized token instead of the version number. The upgrade process will generate a new token.
- Editing Templates should now always display the HTML code in a left-to-right format. 


---

## Additional Information

### Install / Upgrade

- [Installation Instructions](https://www.vbulletin.com/forum/node/4483267)
- [Upgrade Instructions](https://www.vbulletin.com/forum/node/4483262)

### File Cleanup

After upgrading your vBulletin system, delete any obsolete files that may still be present. You can obtain more information on why this is needed and instructions on how to do this in this [**topic**](https://www.vbulletin.com/forum/node/4391346) in the vBulletin 6 Installs & Upgrades forum.

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

- Active Version - 6.1.2
- Security Patch - 6.1.1
- Security Patch - 6.1.0

### Discussion

If you have any questions about these changes, you may discuss them here: [node]4502958[/node]

If you encounter an issue with the software or wish to submit a feature request, please visit our [tracker](https://tracker.vbulletin.com/vbulletin6).

To receive support for your vBulletin Product, please visit our [community forums](https://www.vbulletin.com/forum/).
