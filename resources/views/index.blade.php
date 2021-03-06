@extends('layouts.app')

@section('content')

<section class="hero">
    <div class="container">
        <div class="left-col">
            <p class="subhead">It's Nitty &amp; Gritty</p>
            <h1>A Task App That Doesn't Stink</h1>

            <div class="hero-cta">
                <a href="#" class="primary-cta">Try for free</a>
                <a href="#" class="watch-video-cta">
                    <img src="{{ url('storage/images/watch.svg') }}" alt="Watch a video">Watch a video
                </a>
            </div>
        </div>

        <img src="{{ url('storage/images/illustration.svg') }}" class="hero-img" alt="Illustration">
    </div>
</section>

<section class="features-section">
    <div class="container">
        <ul class="features-list">
            <li>Unlimited Tasks</li>
            <li>SMS Task Reminders</li>
            <li>Confetti Explosions upon Task Completions</li>
            <li>Social Media Announcements</li>
            <li>Real Time Collaboration</li>
            <li>Other awesome features</li>
        </ul>

        <img src="{{ url('storage/images/holding-phone.jpg') }}" alt="Man holding phone">
    </div>
</section>

<section class="testimonials-section">
    <div class="container">
        <ul>
            <li>
                <img src="{{ url('storage/images/person.jpg') }}" alt="Person">

                <blockquote>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores iusto perspiciatis dolorum, similique vero amet, autem porro quam dignissimos ut!"</blockquote>
                <cite>- Jane Doe</cite>
            </li>
            <li>
                <img src="{{ url('storage/images/person.jpg') }}" alt="Person">

                <blockquote>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores iusto perspiciatis dolorum, similique vero amet, autem porro quam dignissimos ut!"</blockquote>
                <cite>- Jane Doe</cite>
            </li>
            <li>
                <img src="{{ url('storage/images/person.jpg') }}" alt="Person">

                <blockquote>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores iusto perspiciatis dolorum, similique vero amet, autem porro quam dignissimos ut!"</blockquote>
                <cite>- Jane Doe</cite>
            </li>
        </ul>
    </div>
</section>



@endsection
