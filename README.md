# Starter kit for a coding Dojo

## Install PHPUnit

For testing the code we will use [PHPUnit](https://phpunit.de/), you need to [install it](https://phpunit.de/manual/current/en/installation.html) and it's better to do it globally.

## Start a dojo

Clone this repo in your server directory.

if you're using apache :  **/var/www/html** or **/var/www** for Ubuntu users or **c:\wamp\www** for Windows. Rename it if you want.

```
git clone https://github.com/SimplonReunion/dojo-starter-kit.git
```

## Resolve a problem

To write your solution you can :
* Write your solution in **src/SimplonReunion/Dojo.php**
* Create your own class in the directory **src/SimplonReunion**


## Tests

The tests need to be in **tests/** directory.

PHPUnit is already configured for fetching the composer autoloader and for displaying the result in colors (thanks to *phpunit.xml* file).
All you have to do is to launch PHPUnit in the console in the right directory :

```
phpunit
```
