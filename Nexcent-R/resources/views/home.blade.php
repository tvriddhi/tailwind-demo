@extends('layouts.app')
@section('title')
@section('content')
  <section class='py-24 bg-slate-50'>
    <div class='xl:container lg:container px-6 sm:px-14 lg:px-6'>
      <div class='grid grid-cols-12 gap-4 items-center'>
        <div class='lg:col-span-7 col-span-12'>
          <h1 class='text-6xl'>Lessons and insights <span class='text-green-600'>from 8 years</span></h1>
          <p class='mt-4 text-gray-600'>Where to grow your business as a photographer: site or social media?</p>
          <button class='btn btn-primary py-3 px-8 rounded mt-8'>Register</button>
        </div>
          <div class='lg:col-span-4 lg:col-start-9 col-start-3 col-span-8'>
            <img
              class='w-full'
              alt="hero img"
              src={{ asset('assets/image/hero-img.png') }}
              />
          </div>
      </div>
    </div>
  </section>
@endsection