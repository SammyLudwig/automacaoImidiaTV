<?php
namespace Step\Features;

class LoginSteps extends \FeaturesTester
{
   # use _generated\FeaturesTesterActions;
    
     /**
     * @Given i access imidiaTV login page
     */
    public function iAccessImidiaTVLoginPage()
    {
        $this->amOnPage('/');
    }

   /**
    * @Given put my useraname on email field
    */
    public function putMyUseranameOnEmailField()
    {
        $this->fillField('login','suporte');
    }

   /**
    * @Given put my password on password field
    */
    public function putMyPasswordOnPasswordField()
    {
        $this->fillField('senha','pixSup2021');
    }

   /**
    * @When Click on Login button
    */
    public function clickOnLoginButton()
    {
        $this->click('Login');
    }

   /**
    * @Then User dashboard page is accessed sucefully
    */
    public function userDashboardPageIsAccessedSucefully()
    {
        $this->see('HOMOLOGAÇÃO');
    }
}