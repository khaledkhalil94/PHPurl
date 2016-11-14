// ----------------------------------------------------------------------
// Copyright (c) 2016 by Patrik Ohlson
// PHPurl Version 1.01
// http://zdi.it
// Copyright (c) 2005-2009 by Nile Flores
// PHPurl Version 1.0
// http://blondish.net/
// ----------------------------------------------------------------------
// LICENSE
//
// This program is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License (GPL)
// as published by the Free Software Foundation; either version 3
// of the License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// To read the license please visit http://www.gnu.org/copyleft/gpl.html
// ----------------------------------------------------------------------

Installation instructions:

1.) Upload the files to your host.

If you extract the files to a subfolder you have to edit the .htaccess file.

The line:
"RewriteRule ^([a-zA-Z0-9]+)/?$ /go.php?id=$1 [L]"

becomes:
"RewriteRule ^([a-zA-Z0-9]+)/?$ /subfolder/go.php?id=$1 [L]"

2.) Open up config.php . Edit the lines with the correct information for your Domain Name and Mysql info, and PHPurl admin username and password.

For the domain name, configure the subfolder (if any) your redirect script is, for example:

$root = 'domain.tld/subfolder/';
$rooturl = 'http://www.domain.tld/subfolder/';
$destination = 'http://www.domain.tld/subfolder/go.php?id=';

3.) Run install.php from your browser. It will create the tables required on your MySQL database.
Remember to delete install.php when it's finished.

4.) To login to the admin panel, point your browser to http://www.domain.tld/subfolder/admin/login.php
 
Here you can Add / Edit / Delete URLs.

