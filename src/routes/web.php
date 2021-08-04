<?php
    
    Route::group(['namespace' => 'Avicodez\Subscription\Http\Controllers', 'middleware' => ['web']], function(){
        Route::get('subscription', 'SubscriptionFormController@showSubscriptionForm');
        Route::post('subscription', 'SubscriptionFormController@saveSubscription')->name('subscribe');
    });
?>