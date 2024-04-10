# vBulletin 6.0.4 Changes and Updates

vBulletin 6.0.4 is now available for download customers. vBulletin Cloud customers will be automatically upgraded over the coming weeks.

### Home Node Permissions

Handling the channel permissions of the Home Node has been refactored.

- The Terms of Service page, Privacy Policy page, and AdminCP login will always be available even if guests cannot view the Home Node.
- You can now assign viewing permissions per page in the AdminCP under Usergroups → Page Permissions. Page Permissions allow control over page viewing to fit your site's needs.
- Special Groups (i.e., Channel groups) will not be listed in the Page Permission Manager. These groups are managed internally.

### Paypal API

Paypal's Payment API has been added as a vBulletin Gateway. The new gateway will allow Administrators to move away from Paypal's IPN functionality and add new payment methods to their site.

To enable the Paypal API, follow these steps:

1. In your AdminCP visit Paid Subscriptions -> Payment Gateways.
2. Select Edit for Paypal API.
3. Enter your Paypal Client Id and Secret Key.
   - If you have not created an app yet, Log into the [PayPal Developer Dashboard](https://developer.paypal.com/dashboard/) using your merchant credentials, go to "App & Credentials" and hit "Create App".
   - Give it an easily identifiable name like "vBulletin 6 Integration", set the type to "Merchant" and create the app.
   - On the next page, you should see your Client ID & Secret key.
   - Scroll down to "Features", and ensure that "Subscriptions" is checked.
   - You can always go back to "App & Credentials" in the dashboard to view your client ID & secret.
4. Set this Gateway to Active
5. Save the page.

> Please note that the Paypal IPN Gateway is now considered deprecated and will be removed in the future.

### Article Sorting

The Article Channel Display module now allows sorting articles by Display Order, Date-last update, Date-Started Post, Replies, Title, Members, Reactions, and Publish Date. You can also order the results ascending or descending. The default sorting is Publish Date, which is ordered by descending dates.

To control the Display Order of your articles, visit the AdminCP and go to Articles → List Content.

### New Template Markup

We have added a new vBulletin Markup tag (`vb:usergroup`) to test for usergroups to the system. This tag provides simpler markup to check if a user belongs to a specific usergroup over using the <vb:if> markup with ismemberof() code from previous versions.

Usage:

```text
<!-- Check if a user is a member of a usergroup -->
<vb:usergroup groupid="2">
  You are in the registered usergroup.
</vb:usergoup>

<!-- Check if the user is not a member of a usergroup -->
<vb:usergroup notgroupid="2">
  You are not part of the registered usergroup.
</vb:usergroup>

<!-- You can also check multiple groups: -->
<vb:usergroup groupid="X,Y,Z">
  ...
</vb:usergroup>
```

### Template Organization

Global page templates are now grouped in the Style Manager template under Page. The affected templates include header, bare_header, footer, bare_footer, head_include, page_date, and preheader. Each template has had the `page_` prefix added to its name. If you use these templates in custom coding, please adjust accordingly.

#### Template Grouping

vBulletin will now match the longest group name to reduce improper merging. Due to this, some groups will be split compared to previous versions. For example, previously, `subscription` and `subscriptions` were treated as the same group even though the templates weren't related to each other. Now, they are separate.

### Cache Limits

Cache Limits are now available. The limits are to prevent large database caches on some server configurations. The limits consist of two new configuration variables:

- maxtablesize - defines the maximum size of your cache and cacheevents tables in megabytes.
- maxtabledeletecount - the number of unexpired records to delete from your cache tables.

To enable the limits, copy the lines below into your /core/includes/config.php file:

```php
// When clearing expired cache items, additional items will be removed if the cache table exceeds this size (in Mb).
$config['Cache']['maxtablesize'] = 500; 
// The number of (unexpired) records to remove when the cache tables are too big. If 0, then empty the cache.
$config['Cache']['maxtabledeletecount'] = 0; 
```

Skipping these lines or leaving them commented out will disable the system and the cache will maintain its previous behavior.

Note: These lines exist in the /core/includes/config.php.new file when installing a new instance.

### Javascript

We have removed the inline Javascript used to define the Page Object. The Page Object is now defined using HTML's data attributes.

- More inline Javascript was removed from the AdminCP.
- Added cache busting to AdminCP Javascript.
- Moved the jQuery fallback out of inline Javascript.

### Additional Changes

- **Node Tools → Open** The ability to mass open topics has been added to the AdminCP under Node Tools.
- **Posting Options** are no longer available on the Home node.
- Improved text indexing with accented characters (For example: à, é, and õ). Previously, search indexing could skip these characters if a similar word without accents was indexed first.
- Payment Gateway currency symbols can now be edited outside of debug mode. You can add new currencies in the AdminCP under Settings → Options → Paid Subscriptions. Please note that your payment gateway will still need to be able to support the currency as defined.
- The Today's Birthday module will be automatically hidden if there are no active birthdays on the date.
- Consolidated the default Terms of Service information from three phrases and locations to one location.

## Additional Information

### PHP 8.0 Deprecation

PHP 8.0 is now past end of life and is no longer supported by The PHP Group. Due to this PHP 8.0 should be considered deprecated.

### Install / Upgrade

- [Installation Instructions](https://www.vbulletin.com/forum/node/4483267)
- [Upgrade Instructions](https://www.vbulletin.com/forum/node/4483262)

### File Cleanup

After upgrading your vBulletin system, you should delete any possible obsolete files. You can obtain more information on why this is needed and instructions on how to do this in this [**topic**](https://www.vbulletin.com/forum/node/4391346) in the vBulletin 6 Installs & Upgrades forum.

### System Requirements

Minimum System Requirements

- PHP Version: 8.0.0
- MySQL Version: 5.7.10
- MariaDB Version: 10.6.0

Recommended System Requirements

- PHP Version: 8.2 or higher
- MySQL Version: 8.0 or higher
- MariaDB Version: 10.11+

For more information, see [vBulletin Connect System Requirements](https://www.vbulletin.com/forum/node/4391344).

### Current Version Support Schedule

- Active Version - 6.0.3
- Security Patch - 6.0.2
- Security Patch - 6.0.1
- Security Patch - 5.7.5

### Discussion

If you have any questions about these changes, you may discuss them here|[node]########[/node]

If you find an issue with the software or wish to request a feature, please visit our [tracker](https://tracker.vbulletin.com/vbulletin6).

To receive support for your vBulletin Product, please visit our [community forums](https://www.vbulletin.com/forum/).
