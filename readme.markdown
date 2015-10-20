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


##Server Requirements

PHP version 5.4 or newer is recommended.

It should work on 5.2.4 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.


##Installation

Clone the project into your project directory

**git clone https://katrincwl@bitbucket.org/katrincwl/kc_cms.git**

Install relavant package on project directory:
**composer install**

##Configuration

Update the following files to configurate the Database and Project setting

- /application/config/config.php
- /application/config/database.php
- /application/config/constant.php
- .htaccess



##Database migration

- Run /application/sql/*.sql to your mysql db 
(For other db driver, please refer to https://www.codeigniter.com/user_guide/libraries/sessions.html#database-driver)
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



##Faker data

Edit /application/controllers/Faker.php 
In order to generate data, you may access
e.g [http://localhost/kc_cms/index.php/faker/news](http://localhost/kc_cms/index.php/faker/news)



##Admin Panel
![Login](/wiki/login.png)

Access the admin panel through 
http://localhost/kc_cms/index.php/admin

**Username: admin@admin.com**
**Password: password**


##Changing template

[Bootswatch theme](https://bootswatch.com/) is available in KC CMS.
In order to switch the template, you may config through 
**/gulp/bs_theme.less**
Simply update the theme name to any available Bootswatch theme name

```@theme: flatly;```

and recompile the less to css file using gulp command under the project folder in terminal. 
You may refer to gulpfile.js under the project folder for better understanding.

Cosmo theme:

![Cosmo](/wiki/cosmo.png)

Flatly theme:

![Flatly](/wiki/flatly.png)

Journal theme:

![Journal](/wiki/journal.png)

##Coding

###Inject js and css
KC CMS allows you to inject your css/js to the page easily by specifying your resources in the controller function. Besides, you can define whether include the js inside the ```<head />``` tag or at the bottom of the page.
e.g
```php
$this->data["custom_js"] = 
array(
    'top' => array(
                    'public/js/module/index.js'
                ), 
    'bottom' => array(
                    'public/js/tinymce/tinymce.min.js',
                    'public/js/tinymce/jquery.tinymce.min.js'
                )
);
```

By default, the css are include inside the ```<head></head>```
```php
$this->data["custom_css"] = array("public/css/admin/sidebar.css");
```

###Meta Data
You can config your meta data in controller function
Avaliable options are as follows:

|Data / Meta     | Corresponding variable          |
|----------------|---------------------------------|
|Page Title      | $this->data["page_title"]       |
|Meta Description| $this->data["meta_description"] |
|Meta Keywords   | $this->data["meta_keywords"]    |
|og:type         | $this->data["og_type"]          |
|og:title        | $this->data["og_title"]         |
|og:description  | $this->data["og_description"]   |
|og:image        | $this->data["og_image"]         |



*Remarks: 
    - If og:title is not defined, it will try to use page title value, unless page title is also empty.
    - If og:description is not defined, it will try to use meta description value, unless meta description is also empty.
*

###PHP Debugbar
PHP Debugbar support is added on KC CMS, in order to use it.

**Simple Way**
*(This feature is turned on automatically on development environment)*

1. Extends your controller with MY_Controller/Admin_Controller
2. Add your deubg message as following in controller function:

```php
    $this->debugbar['messages']->addMessage($anything);
```

3. Wrap your page content with the correspodning header and footer partials views:

```php
    //For MY_Controller
    $this->load->view('partials/header');
    $this->load->view('your_content_view');
    $this->load->view('partials/footer');
```

```php
    //For Admin_Controller
    $this->load->view('partials/admin_header');
    $this->load->view('your_content_view');
    $this->load->view('partials/admin_footer');
```

**Advanced way**

If you would like to use your own Controller and own header/footer view, you may choose this way to config your debug bar.

In your controller, add:
```use DebugBar\StandardDebugBar;```
```php
$this->debugbar = new StandardDebugBar();
$this->debugbarRenderer = $this->debugbar->getJavascriptRenderer();
```

In your View, add:
```php
//Include related css and js files
include_once APPPATH.'views/partials/debugbar_resources.php';   

//Render the debug-bar
echo $this->debugbarRenderer->render(); 
```


Final result:

![debug](/wiki/debugbar.png)

![debug2](/wiki/debugbar2.png)

You may refer to [PHP Debug Bar](http://phpdebugbar.com/docs/) for advanced usage.

*To use the above debug method, you may e and render the  *

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

##License

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
