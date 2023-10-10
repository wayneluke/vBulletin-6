# vBulletin 6.0.1 Changes and Updates

vBulletin 6.0.1 is now availabnle for Self-Hosted/Download Customers. This release contains a security fix for BB Code Rendering and it is recommended that customers upgrade as soon as possible. vBulletin Cloud customers have already been patched against this issue and will be upgraded soon.

## Front End Changes

### Who Reacted

Users can now see who reacted to a post by hovering or long-pressing the reaction. A popup will list everyone who reacted.

## One-Click Unsubscribe

Outgoing content notification emails will now contain a "One-Click Unsubscribe" link. The link will take users to a page that unsubscribes them from the topic or channel. Users subscribed to parent channels can also remove those subscriptions. If the parent channel subscriptions are left intact, they will continue to receive notifications for all descendant channels.

## Who's Online Improvements

A series of behind-the-scenes changes should improve the display of the Who's Online page. One update reduces the possibility of the presentation of duplicate sessions. Users with permission to view the IP Addresses can see the User Agent reported for the session. This additional information can help Administrators track bots more easily.

## Custom Node Fields

Individual Custom Node Fields can now be marked as required. This change will allow Administrators to require information for their custom content, such as classified ad topics. Newly required fields will only apply to new topics using that field. Existing topics will continue to function as before.

## Style Updates

Styles and Themes are updated to resolve several issues.

- Tabs on the user profile should appear appropriately in each Theme.
- The Select All checkbox in topic lists has been fixed in the vB5 Style.
- The Dismiss All notifications button has been fixed in the vB5 Style.
- Various icons have been updated consistently with the overall Default Style look and feel.

---

## Back End / AdminCP Changes

### Password Security Options

The available password security options are now updated. These options enable your users to create better passwords and allow you to keep your site more secure. You can adjust these options in the AdminCP under Settings -> Options -> User Registration Options.

- API Verification of passwords against the HaveIBeenPwned database. This system uses an OpenAPI and will compare the hash of the entered password to determine if it may be compromised. Upgrading will enable this feature.
- Implemented a feature that can invalidate passwords for users who have not logged in for one year.

Ten password strikes are allowed for incorrect logins. This change follows [NIST password recommendations](https://tracker.vbulletin.com/vbulletin6/issues/VB6-138). Increasing the limit will help users recover accounts if they mistype their passwords and can help reduce frustration. Login Strikes are executed on a rolling timeout of 15 minutes and restricted to the IP Address with the improper login. This feature helps prevent brute force attacks on users. There is no option to change this value.

---

## Additional Information

### Install / Upgrade

- [Installation Instructions](https://www.vbulletin.com/forum/node/4483267)
- [Upgrade Instructions](https://www.vbulletin.com/forum/node/4483262)

### File Cleanup

After upgrading your vBulletin system, you should delete any possible obsolete files. You can obtain more information on why this is needed and instructions on how to do this in this [**topic**](https://www.vbulletin.com/forum/node/4483262) in the Installations & Upgrades forum.

### System Requirements

Minimum System Requirements

- PHP Version: 8.0.0
- MySQL Version: 5.7.10
- MariaDB Version: 10.4.0

Recommended System Requirements

- PHP Version:  8.0 or higher
- MySQL Version: 8.0 or higher
- MariaDB Version: 10.6+

For more information, see [vBulletin Connect System Requirements](https://www.vbulletin.com/forum/node/4391344).

### Current Version Support Schedule

- Active Version - 6.0.0
- Security Patch - 5.7.5

### Discussion

If you have any questions about these changes, you may discuss them here: [node]4485542[/node]

If you find an issue with the software or request a feature, please visit our [tracker](https://tracker.vbulletin.com/vbulletin6).

To receive support for your vBulletin Product, please visit our [community forums](https://www.vbulletin.com/forum/).
