<?php
$I = new FunctionalTester($scenario);
$I->wantTo('login to my account');

$I->amOnPage('/');
$I->click('Log in');
$I->seeCurrentRouteIs('login');

// password is `secret`
$user = $I->have(App\User::class, [
    'name' => 'John Doe'
]);

$I->fillField('email', $user->email);
$I->fillField('password', 'secret');
$I->click('Login');

$I->seeCurrentUrlEquals('/');
$I->see($user->name);
