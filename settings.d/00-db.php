<?php
## Database settings
$wgDBtype = "mysql";
$wgDBserver = "mysql";
$wgDBname = getenv("WG_DBNAME");
$wgDBuser = getenv("WG_DBUSER");
$wgDBpassword = getenv("WG_DBPASSWORD");

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;
