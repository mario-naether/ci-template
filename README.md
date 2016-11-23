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

####Basics
```
mkdir build/logs
```
####pdepend (https://pdepend.org/)
```
mkdir build/pdepend
vendor/bin/pdepend --jdepend-xml=./build/logs/jdepend.xml --jdepend-chart=./build/pdepend/dependencies.svg --overview-pyramid=./build/pdepend/overview-pyramid.svg ./examples/src/
```

####phpcpd (https://github.com/sebastianbergmann/phpcpd)
```
vendor/bin/phpcpd --log-pmd build/logs/pmd-cpd.xml ./examples/src
```