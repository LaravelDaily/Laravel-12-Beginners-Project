@extends('layouts.blog')

@section('content')
<main class="container mx-auto mt-6 flex justify-center">
    <!-- Blog Article Section -->
    <section class="w-3/5 bg-white p-6 shadow-md rounded-lg">
        <h1 class="text-2xl font-bold mb-4">Blog Post Title</h1>
        <img src="{{ asset('images/placeholder-800x400.png') }}" alt="Post Image" class="w-full object-cover rounded mb-4">
        <p class="text-gray-600 mb-4">Published on <span class="font-semibold">March 2, 2025</span></p>
        <div class="text-gray-800 space-y-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam hendrerit, sapien eget euismod
                convallis, augue elit ultrices augue, eget egestas metus ipsum eu odio.</p>
            <p>Vestibulum in libero euismod, luctus velit id, sollicitudin lacus. Sed sagittis tristique justo nec
                interdum. Fusce auctor purus non massa hendrerit, in vehicula tortor pharetra.</p>
            <p>Curabitur sit amet nunc ac odio accumsan malesuada. Proin sit amet magna vitae eros convallis
                bibendum ac et libero. Sed scelerisque erat et mauris cursus, eget tincidunt nulla blandit.</p>
        </div>
    </section>
</main>
@endsection
