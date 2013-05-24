<?php
use Behat\Symfony2Extension\Context\KernelAwareInterface;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

require_once 'vendor/autoload.php';

class FeatureContext extends MinkContext
{
    /** @BeforeFeature */
    public static function prepareForTheFeature() {
    // clean database or do other preparation stuff
    }

   /**
   * @Given /^that I am an anonymous user$/
   */
  public function thatIAmAnAnonymousUser() {
    $this->getSession()->visit($this->locatePath('/user/logout'));    
  }

  /**
   * @When /^I visit the home page$/
   */
  public function iVisitTheHomePage() {
    $this->getSession()->visit($this->locatePath('/'));
  }


  /**
   * @When /^I visit the home page again$/
   */
  public function iVisitTheHomePage2() {
    $this->getSession()->visit($this->locatePath('/'));
  }

  /**
   * @Then /^I should see the login form$/
   */
  public function iShouldSeeTheLoginForm() {
    throw new PendingException();
  }

  /**
   * @Given /^that I amn an anonymous users$/
   */
  public function thatIAmnAnAnonymousUsers() {
    throw new PendingException();
  }

}
?>
