<?php
$I = new FunctionalTester($scenario);
$I->wantTo('mark a movie as watched');

$I->have(App\Movie::class);

$user = $I->have(App\User::class);
$I->amLoggedAs($user);

$I->amOnPage('/');
$I->see('Mark as watched');

$I->click('Mark as watched');
$I->seeCurrentUrlEquals('/');
$I->see('Mark as not watched');
