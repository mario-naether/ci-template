# php-ci-template
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
* pdepend
* phpmd
* phpmetrics

```
vendor/bin/phpqa --analyzedDir ./examples/src/ --buildDir ./build/logs --report
```

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