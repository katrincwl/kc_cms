#KC_CMS

##What is KC_CMS
KC_CMS is a CMS boilerplate created by [Codeigniter 3.0.2](http://www.codeigniter.com/user_guide/) + [Twitter Bootstrap 3](http://getbootstrap.com/css/)

CodeIgniter is an Application Development Framework - a toolkit - for people
who build web sites using PHP. Its goal is to enable you to develop projects
much faster than you could if you were writing code from scratch, by providing
a rich set of libraries for commonly needed tasks, as well as a simple
interface and logical structure to access these libraries. CodeIgniter lets
you creatively focus on your project by minimizing the amount of code needed
for a given task.

* * *
##Server Requirements

PHP version 5.4 or newer is recommended.

It should work on 5.2.4 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

* * *
##Installation

Clone the project into your project directory

**git clone https://katrincwl@bitbucket.org/katrincwl/kc_cms.git**

* * *
##Configuration

Update the following files to configurate the Database and Project setting

/application/config/config.php
/application/config/database.php
/application/config/constant.php
.htaccess


* * *
##Database migration

- Run /application/sql/*.sql to your mysql db
```sql
	CREATE TABLE IF NOT EXISTS `ci_sessions` (
        `id` varchar(40) NOT NULL,
        `ip_address` varchar(45) NOT NULL,
        `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
        `data` blob NOT NULL,
        KEY `ci_sessions_timestamp` (`timestamp`)
	);
```

- Go to [http://localhost/kc_cms/index.php/migrate](http://localhost/kc_cms/index.php/migrate) to install the db migration 


* * *
##Faker data

Edit /application/controllers/Faker.php 
In order to generate data, you may access
e.g [http://localhost/kc_cms/index.php/faker/news](http://localhost/kc_cms/index.php/faker/news)

* * *
##Admin Panel

Access the admin panel through 
[http://localhost/kc_cms/index.php/admin]

Default admin:
Username: admin@admin.com
Password: password

* * *
##Changing template

Bootswatch theme is available in KC CMS.
In order to switch the template, you may config through 
**/gulp/kc_bootstrap.less**
Simply update the theme name to any available Bootswatch theme name
```less
@theme: markyna;
```
and recompile the less to css file using gulp command under the project folder in terminal. 

You may refer to gulpfile.js under the project folder for better understanding.



* * *
##License

* * *
##Tools used for Development
- Composer
- Bower
- Gulp

###Tools installation
1. Install [Git](https://git-scm.com/downloads)
2. Install [Nodejs](https://github.com/npm/npm)
3. Install [Composer](https://getcomposer.org/)
4. Install [Bower](http://bower.io/)
5. Install [Gulp](https://github.com/gulpjs/gulp/blob/master/docs/getting-started.md)
6. Install [Gulp-less](https://github.com/plus3network/gulp-less)

* * *
###Credit
- Codeigniter
- Twitter Bootstrap
- jQuery
- Bootswatch
- DataTables
- Font-awesome
- Jssor-Slider
- Moment
- Blueimp
- Pace
- php-debugbar
- jquery-confirm
- Bootstrap-datetimepicker
- Ion-Auth
