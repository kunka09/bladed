@extends('base')

@section('content')
<header>
    <img class="master" src="{{url('img/tech.jpg')}}" alt="technology imagee">
</header>
<br><br>
<div class="container">

<section class="page-section bg-white text-black mb-0" id="about">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-black">About</h2>
        <div class="row">
            <div class="col-lg-4 ml-auto"><p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, ipsa rem nemo rerum quibusdam sint voluptate qui totam, quis placeat expedita ea, labore laborum veritatis aperiam! A quisquam esse nobis?</p></div>
            <div class="col-lg-4 mr-auto"><p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit autem molestias earum voluptas, placeat possimus sint quas ratione nobis laboriosam sapiente neque, esse at tempora magnam quidem eius iusto? Autem!</p></div>
        </div>
    </div>
</section>
</div>
@stop
