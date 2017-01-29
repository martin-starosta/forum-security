<?php
use \Codeception\Util\HttpCode;

$I = new AcceptanceTester($scenario);

/* Should throw 401 */
$I->wantTo('check if bad URL request is forbidden');
$I->amOnPage('/?q=%2e%2e');
$I->seeResponseCodeIs(HttpCode::FORBIDDEN);

/* Should see home page */
$I->amOnPage('/');
$I->seeResponseCodeIs(HttpCode::OK);
$I->see('KAM Fórum');
