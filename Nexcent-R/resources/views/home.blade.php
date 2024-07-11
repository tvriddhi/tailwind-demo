@extends('layouts.app')
@section('title')
@section('content')
  <section class='md:py-24 py-12 bg-slate-50'>
    <div class='container px-4'>
      <div class='grid grid-cols-12 gap-4 items-center'>
        <div class='lg:col-span-7 col-span-12'>
          <h1 class='lg:text-6xl md:text-5xl text-4xl font-semibold'>Lessons and insights <span class='text-green-600'>from 8 years</span></h1>
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

  <section class="py-10">
    <div class="container px-4">
      <h3 class="lg:text-4xl md:text-3xl text-gray-800 font-semibold text-center">Our Clients</h3>
      <p class="mt-4 text-gray-600 text-center">We have been working with some Fortune 500+ clients</p>
      <div class="flex items-center justify-between flex-wrap gap-3 my-8">
        <img src="{{ asset('assets/image/client/logo1.svg') }}" alt="client-logo" />
        <img src="{{ asset('assets/image/client/logo2.svg') }}" alt="client-logo" />
        <img src="{{ asset('assets/image/client/logo3.svg') }}" alt="client-logo" />
        <img src="{{ asset('assets/image/client/logo4.svg') }}" alt="client-logo" />
        <img src="{{ asset('assets/image/client/logo5.svg') }}" alt="client-logo" />
        <img src="{{ asset('assets/image/client/logo6.svg') }}" alt="client-logo" />
        <img src="{{ asset('assets/image/client/logo7.svg') }}" alt="client-logo" />
      </div>
    </div>
  </section>

  <section class="pb-10 text-center">
    <div class="container px-4">
      <h3 class="max-w-[542px] mx-auto lg:text-4xl md:text-3xl text-gray-800 font-semibold text-center">Manage your entire community in a single system</h3>
      <p class="mt-4 text-gray-600 text-center">Who is Nextcent suitable for?</p>
      <div class="grid md:grid-cols-3 gap-4">
        <div class="shadow-[0_4px_2px_rgba(171,190,209,0.20)] rounded-md px-4 py-6">
          <div class="flex w-full justify-center">
            <img src="{{ asset('assets/image/icon/member.svg') }}" class="mb-4" alt="member-logo" />
          </div>
          <h4 class="font-bold text-3xl">Membership Organisations</h4>
          <p class="mt-2 text-gray-600 text-center">Our membership management software provides full automation of membership renewals and payments</p>
        </div>
        <div class="shadow-[0_4px_2px_rgba(171,190,209,0.20)] rounded-md px-4 py-6">
          <div class="flex w-full justify-center">
            <img src="{{ asset('assets/image/icon/national.svg') }}" class="mb-4" alt="member-logo" />
          </div>
          <h4 class="font-bold text-3xl">National Associations</h4>
          <p class="mt-2 text-gray-600 text-center">Our membership management software provides full automation of membership renewals and payments</p>
        </div>
        <div class="shadow-[0_4px_2px_rgba(171,190,209,0.20)] rounded-md px-4 py-6">
          <div class="flex w-full justify-center">
            <img src="{{ asset('assets/image/icon/group.svg') }}" class="mb-4" alt="member-logo" />
          </div>
          <h4 class="font-bold text-3xl">Clubs And Groups</h4>
          <p class="mt-2 text-gray-600 text-center">Our membership management software provides full automation of membership renewals and payments</p>
        </div>
      </div>
    </div>
  </section>
@endsection