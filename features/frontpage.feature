Feature: Front page
  In order to begin using the behatdev site
  As an anonymous user
  I want to visit the homepage

  Scenario: not logged in
    Given that I am an anonymous user
    When I visit the home page
    Then I should see the login form
  Scenario: visits the homepage 
    Given that I amn an anonymous users
    When I visit the home page again
    Then I should see "Welcome to Behatdev"
