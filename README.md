# php-ci-template
[![Latest Stable Version](https://poser.pugx.org/mario-naether/php-ci-template/v/stable)](https://packagist.org/packages/mario-naether/php-ci-template)
[![Latest Unstable Version](https://poser.pugx.org/mario-naether/php-ci-template/v/unstable)](https://packagist.org/packages/mario-naether/php-ci-template)
[![License](https://poser.pugx.org/mario-naether/php-ci-template/license)](https://packagist.org/packages/mario-naether/php-ci-template)
[![Build Status](https://travis-ci.org/mario-naether/php-ci-template.svg?branch=master)](https://travis-ci.org/mario-naether/php-ci-template)
[![PHP runtimes](https://php-eye.com/badge/mario-naether/php-ci-template/tested.svg?style=plastic)](http://php-eye.com/package/mario-naether/php-ci-template)
[![PHP runtimes](http://php-eye.com/badge/mario-naether/php-ci-template/not-tested.svg?style=plastic)](http://php-eye.com/package/mario-naether/php-ci-template)

This package provide some PHP quality assurance Tools inspired by http://jenkins-php.org/

##UnitTest with Codeception 
####Modules
* codeception/codeception
* [captbaritone/mailcatcher-codeception-module](https://github.com/captbaritone/codeception-mailcatcher-module)
* [dlabs/codeception-module-visualception](https://github.com/DigitalProducts/codeception-module-visualception)
* [codeception/verify](https://github.com/Codeception/Verify)
* [codeception/specify](https://github.com/Codeception/Specify)
* [codeception/mockery-module](http://budiirawan.com/using-mockery-codeception) 
* [nathanmac/datetime-codeception-module](https://github.com/nathanmac/datetime-codeception-module)
* [redcomponent/teststatistics](https://github.com/redCOMPONENT-COM/teststatistics)
* [justblackbird/codeception-config-module](https://github.com/JustBlackBird/codeception-config-module)
* [codeception/phpbuiltinserver](https://github.com/tiger-seo/PhpBuiltinServer)
* [edno/codeception-gherkin-param](https://github.com/edno/codeception-gherkin-param)
* [mcustiel/codeception-http-mock](https://github.com/mcustiel/codeception-http-mock)
* [ahmedsamy/codeception-smtp-mail](https://github.com/AhmedSamy/codeception-smtp-mail)
* [jacekk/codeception-dataprovider-module](https://github.com/jacekk/codeception-dataprovider-module)
* [gamajo-codeception-redirects](https://github.com/gamajo/codeception-redirects)


###Factory Muffin Faker
* https://github.com/thephpleague/factory-muffin-faker

###Faker
* https://github.com/fzaninotto/Faker


###Automatic PhantomJS install
For using the PhantomJS installer, add this code to your composer.json
````
"scripts-dev": {
    "post-install-cmd": [
        "PhantomInstaller\\Installer::installPhantomJS"
    ],
    "post-update-cmd": [
        "PhantomInstaller\\Installer::installPhantomJS"
    ]
}
````


##Quality assurance Tools
###Analyze PHP code with one command

[edgedesign/phpqa](https://github.com/EdgedesignCZ/phpqa)

* phploc
* phpcpd
* phpcs
* pdepend
* phpmd
* phpmetrics

```
vendor/bin/phpqa --analyzedDirs ./examples/src/ --buildDir ./build/logs --report
```

For a working Copy/Paste Detection in PHP QA Tool using this:

PHP 5.4/5.5
````
composer require sebastian/phpcpd:dev-master#de90566 --ignore-platform-reqs php
````
PHP >= 5.6
````
composer require sebastian/phpcpd:dev-master
````

###Analyze PHP Code in seperate commands
```
mkdir build/logs
```
####pdepend (https://pdepend.org/)
```
vendor/bin/pdepend --jdepend-xml=./build/logs/pdepend-jdepend.xml --summary-xml=./build/logs/pdepend-summary.xml --dependency-xml=./build/logs/pdepend-dependencies.xml --jdepend-chart=./build/logs/pdepend-jdepend.svg --overview-pyramid=./build/logs/pdepend-pyramid.svg ./examples/src/
```

####phpcpd (https://github.com/sebastianbergmann/phpcpd)
```
vendor/bin/phpcpd --log-pmd build/logs/pmd-cpd.xml ./examples/src
```
 
####phploc (https://github.com/sebastianbergmann/phploc)
```
vendor/bin/phploc --progress  --exclude=vendor ./examples/src/ --log-xml ./build/logs/phploc.xml
```

####phpmd (https://phpmd.org/)
````
vendor/bin/phpmd examples/src xml ./vendor/edgedesign/phpqa/app/phpmd.xml --suffixes php  --exclude /vendor/ --reportfile ./build/logs/phpmd.xml
````

####phpcs (https://github.com/squizlabs/PHP_CodeSniffer)
````
vendor/bin/phpcs -p --extensions=php --standard=PSR2  --ignore=*/vendor/* ./examples/src/ --report=checkstyle --report-file=./build/logs/checkstyle.xml
````

####phpmetrics (https://github.com/phpmetrics/PhpMetrics)
````
vendor/bin/phpmetrics ./examples/src/ --extensions php  --excluded-dirs="vendor" --offline --report-html ./build/logs/phpmetrics.html --report-xml ./build/logs/phpmetrics.xml
````

####php-cs-fixer (https://github.com/FriendsOfPHP/PHP-CS-Fixer)
````
vendor/bin/php-cs-fixer fix
````