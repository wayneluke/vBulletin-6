# vBulletin 6.0.7 Changes and Updates

A preview release of vBulletin 6.0.7 is now available for self-hosted (download) customers. These preview releases are suitable for testing purposes only and are not suitable for production servers.

## Front End Changes

### Site Builder Quick Setup

Several new options have been added to Site Builder's Quick Setup tool. This tool helps onboard new vBulletin sites after installation. 

1. Site Owners can edit the Site Name within Quick Setup.
2. Top-level forum channels can be marked as private or public within Quick Setup.
3. The ability to turn off the Forum, Article, Blog, and Group sections has been added. Deactivating any of these sections will remove their tab from the header of the page. vBulletin will re-add the tab when a section is enabled again. However, Administrators will need to manually adjust the positioning of their tabs in the Navigation Bar tool.

### Event Export

Users can export Event Topics as ICS files and import them into their calendar apps. The import process varies among calendar apps and OSes. In most cases, users will need to load the resulting .ics file, and their calendar app will prompt them to import it.

### Additional Issues

- Update Vimeo Thumbnail retrieval and display
- Due to updates in Template parsing, the Home URL option was not being properly rendered in breadcrumbs. 
- Fixed an issue where the link to view the user in the AdminCP can fail if vBulletin requires an Administrator login.

---

## Back End / AdminCP Changes

### Channel Subscriptions

Administrators can automatically subscribe users and usergroups to channels in the AdminCP. An example of this being useful is that you can automatically subscribe new users to a forum about your community and how it works. Subscriptions can also be added retroactively by usergroup and username. An Automatic Channel Subscriptions manager has been added under Channel Management to manage this type of subscription.

Users can still unsubscribe by clicking the "Subscribed" button in the channel or by visiting their Subscriptions page from their User Profile.

### Full-Text Search

With advances in MySQL's INNODB table management, we can reintroduce Full-Text Search as an option within vBulletin. Self-hosted customers can choose this option under Settings -> Search Type. After changing your search indexing type, you will need to rebuild the indexes under Maintenance -> General Update Tools or via the searchindex.php file from the command line. The Full-Text search complies with the options set by the Admin under Settings -> Options -> Message Searching and Indexing Options.

### Paid Subscription Reminders

A Paid Subscription reminder option is available under Settings -> Options -> Paid Subscriptions. This option takes a comma-separated list and emails reminders to end users at the listed intervals before their subscriptions expire. Previously, the reminder emails were sent 3 days and 2 days before expiration.

### Signature Picture Import

sigpic.php allows the import of signature pictures from vBulletin 3 and 4. The script will enable self-hosted customers to import these images from their older installation. This script is for customers who upgraded before vBulletin 6.0.6.

To use the import, upload `do_not_upload/sigpic.php` to your server's `/core/admincp` directory. Load this page in your browser and follow the onscreen instructions. The script will move the image information from the legacy sigpic table into the attachment tables for proper handling in the future.

> Note: The upgrade script will delete the legacy sigpic table in the future.

---

## Additional Information

### Install / Upgrade

- [Installation Instructions](https://www.vbulletin.com/forum/node/4483267)
- [Upgrade Instructions](https://www.vbulletin.com/forum/node/4483262)

### File Cleanup

After upgrading your vBulletin system, you should delete any possible obsolete files. You can obtain more information on why this is needed and instructions on how to do this in this [**topic**](https://www.vbulletin.com/forum/node/4391346) in the vBulletin 6 Installs & Upgrades forum.

### System Requirements

Minimum System Requirements

- PHP Version: 8.1.0
- MySQL Version: 5.7.10
- MariaDB Version: 10.4.0

Recommended System Requirements

- PHP Version:  8.2 or higher
- MySQL Version: 8.0 or higher
- MariaDB Version: 10.6+

For more information, see [vBulletin Connect System Requirements](https://www.vbulletin.com/forum/node/4391344).

### Current Version Support Schedule

- Active Version - 6.0.6
- Security Patch - 6.0.5
- Security Patch - 6.0.4

### Discussion

If you have any questions about these changes, you may discuss them here: [node]4495166[/node]

If you encounter an issue with the software or wish to submit a feature request, please visit our [tracker](https://tracker.vbulletin.com/vbulletin6).

To receive support for your vBulletin Product, please visit our [community forums](https://www.vbulletin.com/forum/).
