@extends('subscriptionform::layout')
@section('content')
<div style="width: 500px; margin: 0 auto; margin-top: 90px;">
    @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <h3>Get Updated By Subscribing Us</h3>

    <form action="{{route('subscribe')}}" method="POST">
        @csrf
        <div class="form-group">
            <input type="email" class="form-control" name="email" id="subscriptionEmail" placeholder="name@example.com" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection