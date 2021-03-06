@extends('layouts.app')

@section('content')

<div class="container">
{{--
    Switch Statement
    Comparing multiple possible conditions
    Multiple values that may require the same code
--}}

@switch($name)
    @case('Krishma')
        <h3>Name is Krishman</h3>
        @break
    @case('John')
        <h3>Name is John</h3>
        @break
    @case('Jim')
        <h3>Name is Jim</h3>
    @default
        <h3>No name matched.</h3>

@endswitch

{{--
    For loop
    Foreach loop
    For else loop
    While loop
--}}

@for ($i = 0; $i < 3; $i++)
     <h4>The number is {{ $i }}</h4>
@endfor

@foreach ($nameList as $item)
    <h4>The name is {{ $item }}.
    {{-- not possible here thus for else is useful in such case
        @empty
        <h4>No names</h4>  --}}
@endforeach

@forelse ($games as $item)
    <h4>The name is {{ $item }}.
@empty
    <h3>No games</h3>
@endforelse

{{ $i = 1 }}
@while ($i < 4)
    <h2>{{ $i }}</h2>
    {{ $i++ }}
@endwhile

{{--  <--
    Ifelse statements
-->  --}}

@if(5>10)
<p>False</p>
@elseif(5==10)
<p>False</p>
@else
<h2>All conditions wrong!!</h2>
@endif
{{--  // same thing diffrent ways
//1st method  --}}
@unless(empty($name))
<h2>No, the name is not empty..</h2>
@endunless

{{--  //2nd method  --}}
{{--  @if (!empty($name))
<h2  >Not empty</h2>
@endif  --}}

@empty($name)
<h2>Name is empty</h2>
@endempty

@isset($name)
<h2 style="margin-bottom: 4em">Name has been isset</h2>
@endisset
</div>

{{--  <section class="features-section">
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
</section>  --}}



@endsection
