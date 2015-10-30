SMSAPIBundle
=====
* [See how to use service](https://github.com/smsapi/smsapi-php-client)

Usage Example
-------------

``` php
$this->getContainer()->get('smsapi');
```
Configuration config.yml example
-------------

``` yml        
#SMSAPI
my_krzysiu_smsapi:
    login: "mail@example.pl"
    password: "password"
    second_channel: false

```
## Installation

### Install via Composer

Add the following lines to your `composer.json` file and then run `php composer.phar install` or `php composer.phar update`:

```json
{
    "require": {
        "MyKrzysiu/SMSAPIBundle": "dev-master"
    }
}
```

### Register the bundle

To start using the bundle, register it in `app/AppKernel.php`:

```php
public function registerBundles()
{
    $bundles = array(
        // Other bundles...
        new MyKrzysiu\SMSAPIBundle\MyKrzysiuSMSAPIBundle(),
    );
}
```
