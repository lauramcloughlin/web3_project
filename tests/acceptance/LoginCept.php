<?php
$I = new AcceptanceTester($scenario);
$I->amOnPage('/login');
$I->fillField('_username','lauramccomish@hotmail.com');
$I->fillField('_password','pass');
$I->click('Login');
$I->see('Welcome to');

