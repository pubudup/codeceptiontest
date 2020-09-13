<?php 

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    	date_default_timezone_set('GMT');
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }

    public function frontPageWorks(AcceptanceTester $I)
    {

    	$I->amOnPage('/');
    	$I->see('Login');
    }

    public function loginWorks(AcceptanceTester $I)
    {
    	$I->amOnPage('/index.php?route=account/login');
    	$I->fillField(['name' => 'email'],'tt1@tt1.com');
    	$I->fillField(['name'=>'password'],'tt1tt1tt1');
    	$I->click('#account-login > div.container > div > div:nth-child(1) > form > div.row > div:nth-child(1) > button.btn.btn-primary.btn-lg.hidden-xs');
    	$I->fillField(['name' => 'pin'], '6699');
    	$I->click('#account-security > div.container > div > div.col-md-8 > form > div:nth-child(2) > button');
    	$I->see('Account details');
    	$I->see('Showcase');
    	$I->see('Change password');
    	$I->see('Partner up');
    	$I->see('Purchases');
    	$I->see('Extensions');
    	$I->see('Cloud Stores');
    }
}
