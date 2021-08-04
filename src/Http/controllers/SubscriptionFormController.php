<?php

namespace Avicodez\Subscription\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Avicodez\Subscription\Models\Subscription;

class SubscriptionFormController extends Controller
{
    public function showSubscriptionForm()
    {
        return view('subscriptionform::subscription');
    }

    public function saveSubscription(Request $request)
    {
        Subscription::create($request->all());

        return redirect('subscription')->with(['message' => 'Thank you, you have been subscribed successfully.']);
    }
}
