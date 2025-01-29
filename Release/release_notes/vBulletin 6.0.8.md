# vBulletin 6.0.8 Changes and Updates

A preview release of vBulletin 6.0.8 is available for download.  vBulletin Cloud sites will be updated automatically over the next couple of weeks.

## Front End Changes

### Go to New Post

A new link in the topic toolbar will take the user to the newest unread post within the topic. This link does not apply to the Latest Activity tab, which shows the posts in reverse order.

### Readmarking Changes

This system has been refactored to facilitate the above and handle read marking more atomically. In previous versions, visiting the last page of a topic marked the topic as read. Readmarking will now mark individual pages of posts as read. Users should be able to return to a topic and continue from where they left off if they have not read the entire topic thoroughly.

Administrators can control how far this goes back with the "Database Read Marking Limit" option under Settings -> Options -> General Settings. The default value is 10 days.

Among the changes in this refactor, if the user makes a reply to a post in the middle of the topic, the system will tell them which page it exists on.

### Tag Suggestions

Tags are a common way to add categorization to content and can be helpful to end users looking for similar content. To make tags more useful, we have added the ability to have the system suggest tags when someone creates a new topic. This system will display a tag dialog box if this is enabled and the user has not added any tags. The system will show a list of suggested tags from the content. Administrators can add and manage the tags they wish to support in the AdminCP under Tagging -> Tags.

Administrators can enable tag suggestions in the AdminCP under Settings -> Option -> Tagging Options.

### Log Out All Devices

End users can now cancel the login of all devices using their account. They can access this option from the Account tab of the User Settings page. When activated, the user is immediately logged out, even if they had Remember Me selected.

### Improved Onboarding

New vBulletin installations will notify administrators and point them towards the Quick Setup in Site Builder to help people get their sites online quicker. This notice may also show once on Upgrades. If the notice doesn't apply, you can dismiss it, and it won't appear again.

### Responsive

Avatars and other core images now have an explicit height and width. The change should help with page rendering speeds across devices and provide a better presentation on small-screen devices.

---

## Back End / AdminCP Changes

### Style Manager

The Style Manager will tell you when a scheduled style is active. This change can help troubleshoot issues with style changes and updates.

### Force User Log Out

Administrators can log a user out of all sessions across their devices. This option is accessed from the Quick User Links drop-down when editing a user's profile. Selecting this will invalidate all login sessions for the user on every device.

### Topic/Forum Read Marking Type

This option is no longer available. All topics will be marked as read automatically, and the database will be updated appropriately. This change will allow better read marking across devices.

---

## Deprecations

We occasionally must stop supporting different server packages. When support is deprecated, developers will not resolve issues specific to the unsupported versions. It is recommended that these server packages be upgraded to prevent issues in newer software versions.

In the next version of vBulletin, the following server packages will be considered deprecated.

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

- Active Version - 6.0.7
- Security Patch - 6.0.6
- Security Patch - 6.0.5

### Discussion

If you have any questions about these changes, you may discuss them here: [node][/node]

If you encounter an issue with the software or wish to submit a feature request, please visit our [tracker](https://tracker.vbulletin.com/vbulletin6).

To receive support for your vBulletin Product, please visit our [community forums](https://www.vbulletin.com/forum/).
