# Kohana User Auth

My take on a user-auth system for Kohana. Improvements are welcome

## Dependencies:
This module depends on a couple other Kohana modules to be installed and activated in your bootstrap.php:
- Database: https://github.com/kohana/database
- ORM: https://github.com/kohana/orm
- Auth: https://github.com/kohana/auth

All three are shipped with the Kohana zip. It also assumes you're using a .htaccess file and no index.php in the URL

## Instructions:
- Extract the module into the modules folder
- Import the tables.sql file into your database
- Edit the slugs in modules/kohanauserauth/config/kohanauserauth.php if needed
- Navigate to yourdomain.com/users (or whatever base slug you set)
