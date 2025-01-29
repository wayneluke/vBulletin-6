# vBulletin 6.1.0 Changes and Updates

vBulletin 6.1.0 is now available to download. vBulletin Cloud customers will be upgraded to the new version over the upcoming weeks.

## Front End Changes

### Bookmarks

Users may want to mark their favorite posts. To accomplish this, we have added a bookmark feature. Users can bookmark any post by clicking on a icon in the upper right corner. These can be accessed through their user profile. The bookmark will go directly to the post and multiple posts in a topic can be bookmarked.

### Forum Categories

Users can collapse forum categories that they are not interested in. The collapse state is stored locally on the browser. Administrators can designate channels to collapse in the Channel Manager automatically. 

### Privacy and Terms of Service Pages.

These pages have been updated to wrap the site's custom content in CSS, which restores default browser behavior. This will simplify the display of complex HTML (i.e., lists, tables, and blocks) on these pages.

---

## Back End / AdminCP Changes

### Related Topics
Related Topics uses a Natural Language Processor built into vBulletin to scan your content, build a list of keywords, and find related topics based on the content of the first post.  

You can enable Related Topics in the AdminCP under Settings -> Options -> Related Topics. Building the data for this feature can be time-consuming. To improve performance, follow the instructions below.

1. Configure [vbcron.php](https://forum.vbulletin.com/node/4489007) and [vbevents.php](https://forum.vbulletin.com/node/4489008) to run on your server. You should schedule the scripts to run every 1 minute. Example crontab entries look like this:
    - `* * * * * /path/to/php /path/to/vbcron.php`
    - `* * * * * /path/to/php /path/to/vbevent.php`
2. Ensure the `core/cache/relatedtopics` directory is writable. On most servers, the command is: 
    - `chmod +w /path/to/vbulletin/core/cache/relatedtopics`
3. In the AdminCP, enable this function under Settings → Options → Related Topics.
4. Go to Scheduled Tasks → Scheduled Tasks Manager. 
5. Find the Related Topics (Full) task in the list.
6. Click "Run Now".

The system will queue the events needed to build information on your related topics in the `noderelated` table. However, the rebuild will not be instant. The task will run when the event is the next in line for `vbevents.php`. The time needed to complete these tasks will depend on your configuration of the Related Topics settings in the AdminCP and`vbeevents.php`.

#### Displaying Related Topics

Once Related Topics is enabled, you can add the module to your Discussion pages. To do this, follow these steps:

1. Visit a forum topic on the front end of your site.
2. If Necessary, click the Edit Site toggle.
3. Click Edit Page in the Site Builder menu.
4. Under Modules → Content, find the Related Topics module.
5. Drag it into position on the page.
6. Save the page.
7. When asked, you should overwrite the Page Template to apply this change to all topics.

Initial settings on the module will hide it when there is no content.

### Improved URL Preview Caching

When a user posts a link, the system retrieves it and gathers information about it. This information is stored in the database for future views. However, each link is specific to a single node. 

The system now has a global cache system that reuses data. When a link is used multiple times, the original cache information is used. Updated caching will lower site bandwidth and loading times when a URL needs to be cached again.

### .ico image uploads.

The software now supports the .ico file type as an attachment image type. This will facilitate the uploading of favicon images via Site Builder.

### Instant Messaging Fields removed.

The instant messaging fields were out of date and representative of a bygone era. The fields have been removed from vBulletin. If you wish to offer similar functionality to your end users for listing their social media accounts, please use custom profile fields.

### Reduced Download Size.

When using the default download options, the vBulletin Package will be smaller due to compressing the /core/libraries directory into a PHAR file. These libraries are third-party classes used to help bring functionality to the software and can often contain many files in the package. Compressing this will improve upload times and reduce file size. 

**Due to this change, it is recommended that the contents of the /core/libraries directory be deleted before uploading the new version.**

If you need the uncompressed versions of these libraries, select "More Download Options" and turn off the use of Compressed PHP Archives.



---

## Deprecations

We occasionally must stop supporting different server packages. When support is deprecated, developers will not resolve issues specific to the unsupported versions. It is recommended that you upgrade these server packages to prevent problems in newer vBulletin versions.

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

- Active Version - 6.0.7
- Security Patch - 6.0.6
- Security Patch - 6.0.5

### Discussion

If you have any questions about these changes, you may discuss them here: [node][/node]

If you encounter an issue with the software or wish to submit a feature request, please visit our [tracker](https://tracker.vbulletin.com/vbulletin6).

To receive support for your vBulletin Product, please visit our [community forums](https://www.vbulletin.com/forum/).
