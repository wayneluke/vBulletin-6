Within your vBulletin Download Package, we provide a file called tools.php, this file isn't uploaded to the server by default as it is considered to be a **significant security risk**. However, there are times when you need to change specific settings and aren't able to access your AdminCP directly.

Uploading to the Server
-----------------------

It is recommended that tools.php is installed in the `/core/install` directory. To do this, follow the steps below:

1.  Connect to your server with your favorite SFTP or SCP client.
2.  In your vBulletin package, upload the /core/install directory to your server.
3.  In your vBulletin package, find tools.php in your `do_not_upload` directory and upload to the `/core/install` directory.

After Using Remove Tools.php
----------------------------

**We consider this file to be a security risk**. This cannot be overstated. This file should not be stored on your server after use. It is provided as a tool of last resort. Once you have completed your tasks, you should delete it from your server. To do this, delete the `/core/install/` directory.

Using The Tools
---------------

1.  Point your browser to the file at /core/install/tools.php (e.g. `https://example.com/core/install/tools.php`)
2.  Enter your Customer ID.
3.  Select the tool from the menu.

The Tools
---------

### XML Tools

These tools allow you to restore default information that is normally updated during an installation or upgrade. They allow you to restore a site to its default look and feel.

*   `Style`: Loads the vbulletin_style.xml file located in the /core/install directory and overwrites the MASTER style. All other styles inherit their templates from this hidden MASTER style. This will not affect changes made in themes or custom styles.
*   `Settings`: Loads the vbulletin_settings.xml file located in the /core/install directory and updates the setting table in the database. It does not overwrite your configured options.
*   `Language`: Loads the vbulletin_language.xml file located in the /core/install directory. Similar to the Style system, this rebuilds the MASTER language that contains all phrases that other languages are based on. This will not affect changes made in custom languages.
*   `Admin Help`: Loads the vbulletin_adminhelp.xml file. This is a series of phrases used for the inline help with the AdminCP.

### Datastore Tools

This information is stored in the datastore table of your database. It allows us to consolidate frequently used information into a single table in order to reduce queries when loading pages. Sometimes, the values in this table can be out of date or corrupted. These options let you rebuild some important values.

*   `Usergroup / Channel Cache`: Every usergroup has a datastore record that caches custom permissions across the site. These are loaded for the users on every page load. This tool will rebuild these records should they get corrupted.
*   `Options Cache`: Rebuilds the datastore records that stores the compiled values of every setting under Settings -> Options. If you manually change values in the setting table, this should be run. Until you do so, your new values will have no affect.
*   `Bitfield Cache`: vBulletin stores a number of values in Bitfields. That is the values are stored as a portion of an integer within the database. This allows the software to store multiple settings in a single integer. This will rebuild the bitfield cache with those options.
*   `Password Schemes`: Unlike other datastore options, Password Schemes are not stored in a scheme table within the database but reside in a file. These schemes are cached within the datastore. Using this option imports all `pwsschemes_*.xml` files schemese located `core/includes/xml/` directory and rebuilds the cache. This file tells vBulletin what types of password storage is available and what PHP Class processes those passwords. It also provides options like the cost for Blowfish hashing. If you ever get an error stating there are no known password types for a user, this datastore should be rebuilt. It should also be rebuilt if you ever edit/add to the `pwsschemes-vbulletin.xml` file.

### MySQL Tools

These tools directly modify your modify your database and should be used with extreme caution. Before making any changes to your database you should create a complete backup.

*   `Run Query`: This allows you to run alter and update queries on the database. Altering the database can make your vBulletin inoperable.
*   `Repair Tables`: (**OBSOLETE**) Allows you to repair crashed MyISAM tables. You can repair MyISAM tables with this tool if your software is returning an error of "Table is marked as crashed." This tool will not fix other database errors.
*   `Reset Admin Access`: Allows you to promote any user to Administrator status. They would have full access to your site. This can be used to create a new administrator if applied to a newly registered user.
*   `Set User Password`: Allows you to change the password of any user. The new password will be saved in the top priority password scheme.
*   `Scan Content Tables`: Scan & Repair node, closure, and content tables. You should only do this if vBulletin Technical Support Staff advises you to do so, and make sure you have a back up first.
*   `Restore Pages`: This allows you to revert pages to their default configuration. This restores the route (URL), page, pagetemplate, and widgets defaults for the selected page(s). You should only use this if vBulletin Technical Support Staff advises you to do so, and after backing up your database first.
*   `Fix Poll Option Cache`: Regenerate the poll option cache if it is out of sync.

### Other Options

All of the options below can be found in the AdminCP under Settings -> Options.

*   `Turn On/Off Forum`: Toggles the availability of your forum. The default value is On.
*   `Turn On/Off Css As Files`: Toggles where your CSS Files are stored. The default value is Off. The recommended value is On. If you're having problems upgrading with the Web Upgrade Wizard, setting this to Off may help.
*   `Turn Off Templates As Files`: Determines where your templates are stored. The default value is Off. The recommended value is Off. Only turn this on if you have very fast SSD based storage.
*  `Rebuild Styles`: Rebuild the internal Style Rollup values based on the Master Style and individual style customizations. _This will rebuild the css cache on disk if Css As Files is on_.
*   `Rebuild Template Cache`: Rebuild the template cache on disk. _This only has an effect if Templates As Files is on_
*   `Default Language`: Reset the site's default language. This can be useful if you receive an error stating the language cannot be found.
*   `Location of Website`: Change location of site. Allows you to change the location of the site if you cannot access the AdminCP. Frequently used after changing domain names for your site. (This is the `$vboptions[frontendurl]` setting).