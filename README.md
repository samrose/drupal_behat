This is a basic set up for using Behat with Drupal. It contains a simple starter feature and step definitions. Much of this configuration was borrowed from information at http://drupalwatchdog.com/2/2/behat-mink and http://drupal.org/project/drupalextension 

This set up does *not* currently require, or use http://drupal.org/project/behat module

Getting started:

1. Clone the repository: <code>$git clone git@github.com:samrose/drupal_behat.git</code> into "tests" in the root of your Drupal directory

2. rm -rf vendor/*   (make sure the vendor directory is empty).

3. Run <code>curl -s https://getcomposer.org/installer | php</code> if you haven't already done so to get composer installed

4. Run <code>php composer.phar install</code> to install all dependencies listed in composer.json file

5. run <code>./bin/behat</code> to see if your configuration is properly running features and step definitions

