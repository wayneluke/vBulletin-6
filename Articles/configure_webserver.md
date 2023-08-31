## Install Apache Web Server

Ensure that you have Apache Web Server installed on your system. If not, you can install it using package managers like apt (for Debian/Ubuntu), yum (for CentOS/RHEL), brew (MacOS) or any other appropriate method for your operating system.


## Install MySQL or MariaDB

MariaDB is a popular open-source relational database management system and a drop-in replacement for MySQL. This will provide the required database server for vBulletin. 

Use your package manager to install MariaDB, for example:
bash

```bash
sudo apt install mariadb-server   # For Debian/Ubuntu
sudo yum install mariadb-server   # For CentOS/RHEL
```

### Secure Database installation:

After installation, run the following command to secure your MariaDB installation and set the root password:

```bash
sudo mysql_secure_installation 
```

Install PHP

Install PHP and PHP modules needed to run your PHP applications. You can typically install PHP with the following command:

Examples: 

```bash
sudo apt install php libapache2-mod-php   # For Debian/Ubuntu
sudo yum install php php-mysql           # For CentOS/RHEL
```

Enable PHP module in Apache:

After installing PHP, enable the PHP module in Apache using the following command:

```bash
sudo a2enmod php
``` 

## Configure Apache to handle .htaccess:

By default, Apache may not be configured to read .htaccess files. To enable this, make sure the AllowOverride directive is set appropriately in the Apache configuration file.

Locate the Apache configuration file, often named httpd.conf, apache2.conf, or httpd-vhosts.conf.

Look for the <Directory> block that corresponds to the directory where your PHP applications will be stored (e.g., `/var/www/html`).
Change AllowOverride None to AllowOverride All within the `<Directory>` block. This will allow .htaccess files to override settings.

Save the changes and restart Apache for the changes to take effect:

```bash
sudo service apache2 restart   # For Debian/Ubuntu
sudo systemctl restart httpd   # For CentOS/RHEL
```

## Test PHP

1. Create a simple PHP file (e.g., test.php) containing the following code:

```php
<?php
phpinfo();
```

2. Place the test.php file in the web server's root directory (e.g., /var/www/html).
3. Access the PHP file through your web browser by visiting http://your_server_ip/test.php or http://localhost/test.php. If PHP is configured correctly, you should see the PHP information page.

/* Should I include this? */
## Security considerations:

- Keep both PHP and MariaDB versions up to date.