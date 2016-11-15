# php-ci-template
This package provide some PHP quality assurance Tools inspired by http://jenkins-php.org/

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