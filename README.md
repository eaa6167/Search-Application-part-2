

# Search-Application-part-2
 Search Application is an application that can be used to search tweets or comparable data of your choice.     
#####  This document contains details on Installing and Running this application using Tweet and Amazon datasets.  
#####  Before you start running our  application, please install the PHP and PHP mongodb driver to connect to MongoDB.
## Install:
A. Check if PHP and apache2 are already installed by running the following commands on command prompt.
##### `which php` 
##### `which apache2`
##### You will get the following output if it is already installed.
##### `/usr/bin/php`
##### `/usr/sbin/apache2` (if apache2 is not installed , please run the follwing command `sudo apt-get install apache2`)
B. Install PHP and PHP mongodb driver
##### `sudo apt-get update`
##### `sudo apt-get upgrade`
##### `sudo apt-get install php`
##### `sudo apt-get install php-mongodb`
##### `sudo apt-get install libapache2-mod-php`
C. Install Pecl to install PHP mongodb driver`
##### `sudo apt-get install php-pear`
##### `sudo apt-get install php-dev`
##### `sudo pecl install mongodb`
##### `sudo apt install composer`
##### `composer require mongodb/mongodb`
D. Check php version using `php -v`

E. Add the following line `extension=mongodb.so` to your php.ini file
#####  To find the php.ini file on your system, you can use the grep command in your shell: `php –i | grep Configuration`.Use the follwing URL by pointing to your php version in previous step to  file:///etc/php/7.0/cli/php.ini .Scroll down to the extensions section (under Windows extension section) , and add the following line `extension=mongodb.so` to tell PHP to load the MongoDB driver.

#### Note: The preceding step is mandatory; if you don’t do this, then the MongoDB commands in php will not function.

## Running Backend Application for tweets_sandy.csv dataset:

##### Prerequisites:
1.Save searchEngine_Tweets.html and searchEngine_Tweets.php files in your home directory 

2.Download tweets_sandy.csv collection from http://kelvin.ist.rit.edu/~mjmic and save it in your home directory

3.Import tweets dataset 
#### Note: Make sure you exit the mongo shell (using exit) and issue  the following command at the system prompt)
`mongoimport --headerline --db users --collection tweets_sandy --drop --type csv --file tweets_sandy.csv`  

4.Start mongo client by running `mongo`

5.Access Users database by running `use users`  

6.Show that you have tweets_sandy collection under users database by running `show collections` 

7.Exit mongo client by running `exit` 

## Running Frontend Application for tweets_sandy.csv dataset:
1. Save searchEngine_Tweets.html file in /var/www/html
2. Load from the browser using http://localhost/searchEngine_Tweets.html  and type "barbaratalia" , for instance , in the search text box and click submit. It should display list of documents containing the word "barbaratalia".

## Running Backend Application for Amazon_Automotive.json dataset:
##### Prerequisites:
1.Save searchEngine_Amazon.html and searchCollection.php files in your home directory 

2.Download  Amazon_Automotive.json collection from RIT myCourses/Drop Box and save it in your home directory

3.Import amazon dataset 
#### Note: Make sure you exit the mongo shell (using exit) and issue  the following command at the system prompt)
`mongoimport --db users --collection Amazon_Automotive --drop --jsonArray --file Amazon_Automotive.json`  

4.Start mongo client by running `mongo`

5.Access Users database by running `use users`            

6.Show that you have Amazon_Automotive collection under users database by running `show collections`  

7.Exit mongo client by running `exit`

## Running Frontend Application for Amazon_Automotive.json dataset:
1. Save searchEngine_Amazon.html file in /var/www/html
2. Load from the browser using http://localhost/searchEngine_Amazon.html and type "foo" , for instance , in the search text box and click submit. It should display list of documents containing the word "foo".




