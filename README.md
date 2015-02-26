# aws-tools

[![Build Status](https://travis-ci.org/dulo-tech/aws-tools.svg?branch=master)](https://travis-ci.org/dulo-tech/aws-tools)
[![Latest Stable Version](https://poser.pugx.org/dulo-tech/aws-tools/v/stable.svg)](https://packagist.org/packages/dulo-tech/aws-tools)
[![Total Downloads](https://poser.pugx.org/dulo-tech/aws-tools/downloads.svg)](https://packagist.org/packages/dulo-tech/aws-tools)
[![License](https://poser.pugx.org/dulo-tech/aws-tools/license.svg)](https://packagist.org/packages/dulo-tech/aws-tools)

Because I keep needing the same handful of utility classes when I'm working with AWS, I decided to put them in a separate repo so they can be reused in different projects.


### Installing via Composer
The recommended way to install dulo-tech/aws-tools is through [Composer](http://getcomposer.org).

```bash
# Install Composer
curl -sS https://getcomposer.org/installer | php
```

Add dulo-tech/aws-tools to your composer.json:

```javascript
"require": {
	"dulo-tech/aws-tools": "dev-master"
}
```

Or run the Composer command to install the latest stable version of dulo-tech/aws-tools:

```bash
composer require dulo-tech/aws-tools
```

After installing, you need to require Composer's autoloader:

```php
require 'vendor/autoload.php';
```
