@extends('base')

@section('title', 'About Us | '. config('app.name'))


@section('content')

<img src="{{asset('images/bamba.jpg')}}" alt="bamba" class="my-12 rounded-full shadow-md" width="120px"> 
    
   <h2 class="mb-5 text-gray-700">Built with <span class="text-pink-500"> &hearts;</span> by KHADIM MBODJI.</h2>

        <p><a href="{{route('home')}}" class="text-indigo-500 hover:text-indigo-600 underline ">Revenir à la pge d'accueil</a></p>

        
@endsection