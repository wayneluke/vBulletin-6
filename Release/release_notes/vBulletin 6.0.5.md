# vBulletin 6.0.5 Changes and Updates

A preview release of vBulletin 6.0.5 is now available for testing by self-hosted (download) customers. Preview releases are not meant to be used on production servers.

## Front End Changes

### Global Advertising Management

In previous versions, each ad was unique to the Ad Location. Unique ad lists made reusing Ad code difficult across modules. Starting in vBulletin 6.0.5, Ad Locations will list all available Ad units/templates in the system to make reuse easier.

### Email Handling

Outgoing notification emails will include a global one-click unsubscribe link, which complies with requirements set by many email providers. Transactional emails (e.g., password changes) do not include the link. Emails also include a header that allows email providers to show an unsubscribe button.

Two new options have been added to the system to control these additions. You will find them in the AdminCP under Settings -> Options -> Email Settings.

### Web Application Manifest

vBulletin 6.0.5 automatically generates a Web Application Manifest. The Web Manifest defines your site as a web application for the end-user device. It allows them to install vBulletin on their home screen.

### Structured Data Markup

Structured Data Markup is metadata used in the HTML output of your forums. This metadata tells search engines how to categorize your data. In vBulletin 6.0.0, we updated the metadata to fit Google's Rich Search Results specification. Recently, Google started to support the DiscussionForumPosting markup. In vBulletin 6.0.5, Forum & Group Topics use the new metadata as much as possible within the current framework.

---

## Back End / AdminCP Changes

### Template Parsing

The development team has refactored template parsing. This change allows for better isolation of individual tags and curly shortcodes used in the template markup. Benefits of the refactor include:

- A standardized set of utility classes to handle template parsing (/core/vb/utility/template).
- Improved error reporting on template save.
- The introduction of Limited Templates.

#### Limited Templates

Limited Templates are designed to expand the vBulletin Cloud's template editing capabilities. These new templates make a limited number of the vBulletin Markup tags and curly shortcodes available to vBulletin Cloud customers.

- These Tags are Available: usergroup, comment, and literal.
- These Curly Codes are available: stylevar

We will expand the list of tags and curly codes over time. Customers can use Limited Templates with template hooks to show custom HTML inline to your end users. Switching the css_additional.css template to the new Limited Category will allow you to reuse Style Variables in your custom CSS.

- Resolved a performance issue with opening and closing large topics (thousands of posts). (VB6-490, VB6-493)
- Four new template hooks are available. These allow customers to add content between posts and comments.
  
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

- Active Version - 6.0.4
- Security Patch - 6.0.3
- Security Patch - 6.0.2
- Security Patch - 5.7.5

### Discussion

If you have any questions about these changes, you may discuss them here: [node]4492212[/node]

If you encounter an issue with the software or wish to submit a feature request, please visit our [tracker](https://tracker.vbulletin.com/vbulletin6).

To receive support for your vBulletin Product, please visit our [community forums](https://www.vbulletin.com/forum/).
