@extends('Layouts.app')


@section('content')
    <div class="jumbotron text-center" style="background: rgb(230, 229, 229)">
        <h1 style="font-size: 3.5rem;">{{ $title }}</h1>
        <p class="lead" style="font-size: 23px">Welcome to our Home page! We are a company dedicated to providing innovative
            products and
            exceptional services to our customers. Our goal is to create solutions that make life easier and more enjoyable
            for our customers.

            On this page, you'll find a selection of our featured products and services. These are just a few examples of
            the many solutions we offer. Whether you're looking for household gadgets, tech accessories, or personalized
            gifts, we have something for everyone.

            We also pride ourselves on our commitment to customer service. If you have any questions or concerns, our
            friendly and knowledgeable support team is here to help. You can reach us via email or phone, and we'll do
            everything we can to ensure your experience with us is a positive one.

            In addition to our products and services, we are also dedicated to giving back to our community. We believe that
            it's important to use our platform and resources to make a positive impact on the world around us. That's why we
            regularly partner with local organizations and charities to support causes that are important to us and our
            customers.

            Thank you for visiting our Home page. We hope you find what you're looking for, and we look forward to serving
            you.
        </p>
        <hr>
    </div>
    @if(!Auth::user())
    <div class="jumbotron text-center">
        <a href="/login" class="btn btn-success">Login</a>
        <a href="/register" class="btn btn-primary">Register</a>
    </div>
    @endif
@endsection
