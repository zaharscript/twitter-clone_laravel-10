@extends('layouts.layouts')

@section('content')
    <<div class="header">
        <div class="logo">ThoughFactory | Help Center</div>
        <nav>
            <a href="#">Articles</a>
            <a href="#">Tutorials</a>
            <a href="#">Courses</a>
            <a href="#">Webinars</a>
        </nav>
        <div class="buttons">
            <button class="login">Log In</button>
            <button class="signup">Get Started</button>
        </div>
    </div>
    <div class="content">
        <h1>How can we help?</h1>
        <div class="search-box">
            <input type="text" placeholder="Search how-tos and more">
        </div>
        <div class="tags">
            <span>Forms</span>
            <span>Templates</span>
            <span>Rules</span>
            <span>Export</span>
            <span>Billing</span>
        </div>
    </div>
@endsection
