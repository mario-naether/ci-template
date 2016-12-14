# php-ci-template
[![Latest Stable Version](https://poser.pugx.org/mario-naether/php-ci-template/v/stable)](https://packagist.org/packages/mario-naether/php-ci-template)
[![Latest Unstable Version](https://poser.pugx.org/mario-naether/php-ci-template/v/unstable)](https://packagist.org/packages/mario-naether/php-ci-template)
[![License](https://poser.pugx.org/mario-naether/php-ci-template/license)](https://packagist.org/packages/mario-naether/php-ci-template)

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


###Factory Muffin Faker
* https://github.com/thephpleague/factory-muffin-faker

###Faker
* https://github.com/fzaninotto/Faker



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
vendor/bin/phpqa --analyzedDir ./examples/src/ --buildDir ./build/logs --report
```

If you have problems with phpcpd and progress, use one of this versions.
````
"sebastian/phpcpd": "dev-master"

"sebastian/phpcpd": "dev-de9056615da6c1230f3294384055fa7d722c38fa"
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