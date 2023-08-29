# Getting Started Guide

Version 2

## Introduction

Congratulations on successfully installing your new vBulletin site! This guide will help you get things set up. When you first install your vBulletin, your site loads with the preset style and page like so:

![home page image](homepage.png)

As you can see, it’s already been pre-populated with all of the pages that you need to get started. **Pages** display your site to the users and can be customized using modules.

**Modules** are the building blocks of a Page. You can add, customize, and remove modules from a page. This allows you to build a custom site quickly and easily. Almost everything the user sees in vBulletin is a module of some type.

Now that we have the basic terms down for vBulletin, we’ll move on to the how they work and how you can use them, starting with creating pages.

## Table of Content

- [Getting Started Guide](#getting-started-guide)
  - [Introduction](#introduction)
  - [Table of Content](#table-of-content)
  - [Using Site Builder](#using-site-builder)
    - [Editing and Creating Pages](#editing-and-creating-pages)
      - [Add Modules Tab](#add-modules-tab)
      - [Change Layout Tab](#change-layout-tab)
      - [Select Template Tab](#select-template-tab)
      - [Saving the Changes](#saving-the-changes)
      - [Adding a Page](#adding-a-page)
      - [Linking to the a New Page](#linking-to-the-a-new-page)
    - [Using the Channel Manager](#using-the-channel-manager)
      - [Adding a Forum](#adding-a-forum)
      - [Creating a Category](#creating-a-category)
      - [Adding a Sub-Forum](#adding-a-sub-forum)
    - [Creating a Private Forum](#creating-a-private-forum)
    - [Other Site Builder Tools](#other-site-builder-tools)
      - [Style](#style)
      - [Pages](#pages)
      - [Header](#header)
      - [Navigation](#navigation)
      - [Footer](#footer)
  - [Using the AdminCP](#using-the-admincp)
  - [Logging into the AdminCP](#logging-into-the-admincp)
    - [Getting around the AdminCP](#getting-around-the-admincp)
    - [Using the Inline Help](#using-the-inline-help)
    - [Setting Up Contact Details](#setting-up-contact-details)
    - [Setting Up User Registration](#setting-up-user-registration)
    - [Setting Up Human Verification](#setting-up-human-verification)
    - [Frequently Asked Questions](#frequently-asked-questions)
      - [Why can't I delete some modules from a page?](#why-cant-i-delete-some-modules-from-a-page)
      - [How do I add a Terms of Service?](#how-do-i-add-a-terms-of-service)
      - [How do I add a Privacy Policy?](#how-do-i-add-a-privacy-policy)
      - [How can I manage Spam?](#how-can-i-manage-spam)
      - [How do I change my username?](#how-do-i-change-my-username)
      - [How do I change my password?](#how-do-i-change-my-password)
      - [How do I change my logo?](#how-do-i-change-my-logo)
      - [How do I change the default style?](#how-do-i-change-the-default-style)
      - [How do I add my own ads?](#how-do-i-add-my-own-ads)

## Using Site Builder

> If this is your first installation of vBulletin, you should review the Quick Setup article first.

### Editing and Creating Pages

You can edit all default pages in addition to adding more pages to meet the needs of your site.

In order to edit an existing page, activate the Site Builder by click on the the `Edit Site` button in the upper right hand corner of your navigation bar.

> You will be asked to re-enter your password for security purposes. Using Site Builder can change the look and feel of your site dramatically and this is to ensure that no one, but you, can do this.

Once you’ve activated the Site Builder, navigate to the page that you want to edit and
click `Edit Page` button.

This opens a form like the one below.

![Site Builder Image 1](path/to/image/image.png)

#### Add Modules Tab

There are three tabs in the form. The first (the **Add Modules** ) is a catalogue of modules that you can add to the selected page to customize the look and feel of it. Each, as we mentioned, has a different function. Here’s a short list of what they do:

- Ad: A module that organizes and rotates the ads on a site.
- Search: A module that displays a customized set of search results as a feed.
- Static HTML: A module that displays custom HTML.
- Tag Cloud: A module that displays a clickable list of tags used on the site.
- Today’s Birthday: A module that displays the usernames of user’s with birthdays on
any given day.
- Top Active Users: A module that displays a list of the top active users.
- Video: A module that embeds a video on to a page.

To put a module on a page, drag it from the menu and drop it where you want it to appear. Each module has a series of controls when shown in the page layout.

- Crossed Arrows: Press this and drag the module to a new location on the page.
- Pencil: To edit the module's options, press on the pencil. This will open an option dialog to configure the module.
- Trash can: To delete a module, press on the trash can. This is an immediate action so choose this option wisely.

A number of fields will be available in the form for you to edit and change. To save the changes you have made for the module, click on the **Save** button at the bottom of the page.

For more information on what the options for each module does, visit our online help visit the [online manual](https://www.vbulletin.com/docs/html/sitebuilder_modulelist).

#### Change Layout Tab

The **Change Layout Tab** is the second of the four tabs. This controls the number of columns on a page and the percentage of space each column takes up.

#### Select Template Tab

Templates are the saved designs for the default pages and any pages that you create. This can be especially helpful when you have several pages using the same template that requires a change that affects them all.

#### Saving the Changes

Once you’re finished modifying the page, click on the **Save Page** button to the right of the tabs. It opens a confirmation form where you have the option of saving the page as a new Template or overwriting the existing Template.

> Note: If you choose to overwrite the existing Template, you may not be able to  retrieve the old design if you want to switch back at a later time.

#### Adding a Page

To add a page to your site, follow the same steps as we listed at the top of this section, but instead of clicking on the **Edit Page** button, click on the **New Page** button instead.

#### Linking to the a New Page

To link your newly created page in the navigation bar, navigate to the page and copy the address to your clipboard. Click on the **Navigation Bar** button. A form like the one below will open:

Decide if you want the link to be a main navigation item or a sub-navigation item. If the link is a sub-navigation item, click on the carat to the far right of the main navigation item you want it nested beneath. Click either the **New Navigation Item** or the **New Sub Navigation Item**.

Enter in the name of the link in the **Navigation Item Name** field and then paste the address your copied into the **Target URL** before clicking the **Save** button. Once that’s one, your link will appear in column it was added to. To change it’s position, click and drag it to its new location.

Finally, click **Save Changes** and confirm your changes. If you do not take this step, the changes will be lost.

### Using the Channel Manager

Your vBulletin installation comes with a pre-generated forum. To add more forums, turn on your Site Builder and click on the **Page Manager** button. This opens a form like the one below:

#### Adding a Forum

From here, enter the name of the of forum you want to create in the **New Forum** text box and click **Add**. It will appear beneath the pre-generated Main Forum. You can change it’s position by clicking on the dotted strip to the left of the forum name and dragging it to its new location.

If you want to delete the forum, click the red x icon to the right of the plus symbol. A confirmation popup will appear. Clicking **Yes** will complete the deletion. Be careful of which forums you delete, since any threads, posts, and replies in that forum will be removed along with its parent.

#### Creating a Category

A category is a container for forums and largely used to organize the forums into, well, different categories. To make a category, click on the **Make Category** link to the right of the forum you wish to be a category. It will be instantly changed to a category. If you want to change it back, just click the **Make Forum** link that has taken it’s place. It’s that simple.

#### Adding a Sub-Forum

Sub-forums are forums that are nested in parent forums. Usually, this is used to create an area for specific aspects of the topic covered by the larger forum to be discussed. If you want to create sub-forum, click on the plus symbol between the **Make Category** link and the red x icon. A field such as as the one below will appear:

Enter the name of the new forum in the field that reads **New Channel** before clicking away from the sub-forum. It’s that simple.

### Creating a Private Forum

Now that you have your forums set up, you might want to change the permissions on them. Permissions tell the system which users get to see what. By using permissions, you can create a private forum for your users to use.

To do this, click on the **AdminCP** button in the upper right hand corner of the **Site Builder** menu.

Please note, you may be asked to log in again for the same reasons that you had to provide your password a second time. The window will reload to a page similar to this:

Scroll down to the **Channel Management** header and click it. Select the **Channel Permissions** option and click it.

For a more thorough explanation of permissions, visit the [online manual](https://www.vbulletin.com/docs/html/main/acp_permission_overview_overview).

This will reload the frame to the right with a form like this:

Select the **Edit** link beside the usergroup you want to hide the forum from. This will open another form with several options:

Find the **forum_permissions** header and change the **Can View Forum** setting to **No** before clicking **Save**. The usergroup that you selected will no longer be able to see that forum.

### Other Site Builder Tools

#### Style

#### Pages

#### Header

#### Navigation

#### Footer

## Using the AdminCP

## Logging into the AdminCP

The vBulletin Admin Control Panel can be accessed by pointing your browser at `http://www.example.com/forums/admincp/`.

The first thing you will see when you access the Control Panel is a prompt to log in. You will be presented with this login prompt even if you are already logged into the public area of the board. This is an additional level of security. To log in, simply enter the username and password of a user account with administrator privileges, such as the one you created towards the end of the installation script process.

There are a couple of extra options that can be set on the login form. To see them, click the [Options] button to expand the form to its full size.

Clicking the `[Log in]` button will submit the login details and options you have set, and log you in to the board.

### Getting around the AdminCP

The first thing you will see when you log into the Admin Control Panel is the welcome page. This page contains a quick method to search for users, phrases, PHP functions or MySQL language as well as some useful links, information about your server and the vBulletin credits.

You will notice that the Admin Control Panel is divided into three distinct areas. The first and most obvious of these is the main panel, which currently shows the home page. This area (the main panel) is where the majority of your attention will be focused when administering your board.

At the top of the page is a tab bar with a link to the Site Home Page (the starting point of the public area of the board). To the right of the tab bar is a link to the messages page for your admin user and a link allowing you to log out of the control panel. Directly below the open Admin CP tab is a narrow strip that contains information about the vBulletin version you are currently running and the latest version available to download. To the right of the strip is a search box allowing you to search the forums.

To the left of the page is the navigation panel. This long, thin area is the key to getting around the Admin CP.

When you first visit the Admin CP, you will notice that all the sections of this panel are in a collapsed state.

You can click the gadget on each section to expand it and show its contents, and click the gadget again to collapse that section again. Double-clicking a section's title will also toggle its state and either expand or contract it.

You can expand and collapse any sections at any time. You are not limited to having just a single group expanded at any one time.

When you have a section or sections expanded, hovering your mouse over the included links will highlight that link. You can then click to open the corresponding page in the main panel.

You can use the expanding and contracting sections to build a customized control panel layout for yourself. For example, you may find that you regularly use the 'Styles & Templates' tools, but very infrequently use the FAQ manager.

When you have established a set of expanded and collapsed sections that suits your way of working, you can save the state of the sections by clicking the [Save Prefs] button.

When you reload the Admin CP, you will find that the sections in the left navigation panel will have automatically expanded and collapsed in the manner that they were when you clicked the [Save Prefs] button.

You can expand and collapse any section in your administration session, and at any time you can click the [Revert Prefs] button, which will revert the expanded/collapsed state of all the sections to how they were when you saved your preferences.

If at any time you want to return to the home page of the Admin CP, clicking the [Control Panel Home] button at the top of the navigation panel will do this.

### Using the Inline Help

### Setting Up Contact Details

### Setting Up User Registration

With everything set up for your site, it’s now time to take a look at your User Registration settings. Stay in the AdminCP and click on the **Settings** header, followed by the **Options** link.

Once the vBulletin Options form loads, select the **User Registration Options** from the scrolling list and click the **Edit Settings** button:

The following form will load:

This controls every aspect of user registration for your site. It includes everything from whether or not it’s turned on, to COPPA Registration, to Welcome Messages.

### Setting Up Human Verification

There are some sections of the site and its functionality that you’ll want to have human verification for. To turn on Human Verification, click on the **Settings** header in the AdminCP, followed by the **Options** link.

Once the vBulletin Options form loads, select the **Human Verification Options** from the scrolling list and click the **Edit Settings** button:

This reloads the frame with the following form:

Checking an option will activate it, while unchecking the option will deactivate it. This means that any usergroup that has the option **Require Human Verification on Configure Actions** activated will need to verify that they’re human when interacting with the selected options. Once you’re done, click **Save** and the changes you’ve made will be applied to the site.

### Frequently Asked Questions

#### Why can't I delete some modules from a page?

There are two types of modules: Admin and System modules. The main difference between the two is that you are unable to delete System modules from a page. This is functionality that you wouldn’t want removed from your site to begin with, such as private messages, advanced search and registration forms.

#### How do I add a Terms of Service?

#### How do I add a Privacy Policy?

#### How can I manage Spam?

#### How do I change my username?

To change your username, login to the AdminCP and click on the **Users** header. In the menu, click on **Search for Users**. In the new form in the frame to the right, enter your current username in to the **User Name** field and click the **Exact Match** button. In the User Form, change the username in the **User Name** field and click **Save**.

#### How do I change my password?

On your Site Home Page, click on the **Profile** tab. Find the **Edit Settings** button beneath your user picture and click on it. This will reload the page with the Profile Settings page. Click on the **Account** tab and scroll down to the **Password** fields. Enter your current password in the field with the words ‘Enter current password’ and your new password in both the fields below that. Click **Save Changes** and your password will be set to the new password.

#### How do I change my logo?

To change the logo of your site, make sure your **Site Builder** is turned on and click the **Header** button in the menu. Find the vBulletin logo and click the **Edit** button in the upper left hand corner. This will open an upload form which you can use to replace the current logo with another of your liking. Once you’ve uploaded the new logo, click on the **Save Changes** button. The site will reload with the new logo.

#### How do I change the default style?

To change the default style for a page, login to the AdminCP and click on the **Settings** header. Then click on **Options** then select the **Styles & Language Settings** option from the new form. This will take you to the selected form. From here, find the **Default Styles** section and select a new default style from the dropdown list. Click the **Save** button at the bottom of the form and your changes will be saved.

#### How do I add my own ads?

To add your own ads, turn on the **Site Builder** option and add the **Ad Module** to the page you want the ads to appear on. Click on the **Edit** button for the module and fill out the form before clicking **Attach**. This will take you to a new form where you can arrange the order in which the ads appear or add new ads.

Once you’re done, click the **Save** button on the Ad form and confirm the changes on the page by clicking the **Save Page** button. The ads should now appear where you placed them.

---

Written and Maintained by Internet Brands
