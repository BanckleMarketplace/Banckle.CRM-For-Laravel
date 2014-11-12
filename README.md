#Banckle.CRM for Laravel

This is a Laravel Package to use Banckle.CRM SDK for PHP in Laravel applications quickly and easily. 


Installation
----------------------------------

Add the following lines to your composer.json file.

<pre>
require: {
	"banckle/crm-sdk-php": "dev-master",		
	"banckle/crm-laravel": "dev-master"
}
</pre>


Run from terminal.

<pre>
composer update
</pre>


Add package to the list of providers. In config/app.php, add the following line to the providers array.
<pre>
'Banckle\Crm\CrmServiceProvider',
</pre>

Publish config files from the terminal.
<pre>
php artisan config:publish banckle/crm-laravel
</pre>

Edit the new config file in the config/packages/banckle/crm-laravel and enter your Banckle API Key, email & password.
<pre>
return array(
    'banckleAccountUri' => 'https://apps.banckle.com/api/v2',
    'banckleCRMUri' => 'https://crm.banckle.com/api/v1.0',    
    'apiKey' => '',
    'email' => '',
    'password' => ''
);
</pre>

In config/packages/banckle, rename crm-laravel to crm

Usage
----------------------------------

Anywhere in your application when you need to access class, just do:
<pre>
// To Generate token
BanckleCRM::getToken();

BanckleCRM::get($apiName, $token);
</pre>

This will return you object of class and you can access properties and methods of class.