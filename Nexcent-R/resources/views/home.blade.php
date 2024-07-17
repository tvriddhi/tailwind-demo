@extends("layouts.app")
@section("title")
@section("content")
  <section class="lg:py-24 py-12 bg-slate-50">
    <div class="container">
      <div class="grid grid-cols-12 gap-4 items-center">
        <div class="lg:col-span-7 col-span-12">
          <h1 class="lg:text-6xl md:text-5xl text-4xl font-semibold">Lessons and insights <span class="text-green-600">from 8 years</span></h1>
          <p class="mt-4 text-gray-600">Where to grow your business as a photographer: site or social media?</p>
          <button class="btn btn-primary py-3 px-8 rounded mt-8">Register</button>
        </div>
          <div class="lg:col-span-4 lg:col-start-9 col-start-3 col-span-8">
            <img
              class="w-full"
              alt="hero img"
              src={{ asset("assets/image/hero-img.png") }}
              />
          </div>
      </div>
    </div>
  </section>

  <section class="py-10">
    <div class="container">
      <h3 class="lg:text-4xl md:text-3xl text-gray-800 font-semibold text-center">Our Clients</h3>
      <p class="mt-4 text-gray-600 text-center">We have been working with some Fortune 500+ clients</p>
      <div class="flex items-center justify-between flex-wrap gap-3 my-8">
        <img src="{{ asset("assets/image/client/logo1.svg") }}" alt="client-logo" />
        <img src="{{ asset("assets/image/client/logo2.svg") }}" alt="client-logo" />
        <img src="{{ asset("assets/image/client/logo3.svg") }}" alt="client-logo" />
        <img src="{{ asset("assets/image/client/logo4.svg") }}" alt="client-logo" />
        <img src="{{ asset("assets/image/client/logo5.svg") }}" alt="client-logo" />
        <img src="{{ asset("assets/image/client/logo6.svg") }}" alt="client-logo" />
        <img src="{{ asset("assets/image/client/logo7.svg") }}" alt="client-logo" />
      </div>
    </div>
  </section>

  <section class="pb-10 text-center">
    <div class="container">
      <h3 class="max-w-[542px] mx-auto lg:text-4xl md:text-3xl text-gray-800 font-semibold text-center">Manage your entire community in a single system</h3>
      <p class="mt-4 text-gray-600 text-center">Who is Nextcent suitable for?</p>
      <div class="grid md:grid-cols-3 lg:gap-x-32 gap-4">
        <div class="shadow-[0_4px_2px_rgba(171,190,209,0.20)] rounded-md px-4 py-6">
          <div class="flex w-full justify-center">
            <img src="{{ asset("assets/image/icon/member.svg") }}" class="mb-4" alt="member-logo" />
          </div>
          <h4 class="font-bold text-3xl">Membership Organisations</h4>
          <p class="mt-2 text-gray-600 text-center">Our membership management software provides full automation of membership renewals and payments</p>
        </div>
        <div class="shadow-[0_4px_2px_rgba(171,190,209,0.20)] rounded-md px-4 py-6">
          <div class="flex w-full justify-center">
            <img src="{{ asset("assets/image/icon/national.svg") }}" class="mb-4" alt="member-logo" />
          </div>
          <h4 class="font-bold text-3xl">National Associations</h4>
          <p class="mt-2 text-gray-600 text-center">Our membership management software provides full automation of membership renewals and payments</p>
        </div>
        <div class="shadow-[0_4px_2px_rgba(171,190,209,0.20)] rounded-md px-4 py-6">
          <div class="flex w-full justify-center">
            <img src="{{ asset("assets/image/icon/group.svg") }}" class="mb-4" alt="member-logo" />
          </div>
          <h4 class="font-bold text-3xl">Clubs And Groups</h4>
          <p class="mt-2 text-gray-600 text-center">Our membership management software provides full automation of membership renewals and payments</p>
        </div>
      </div>
    </div>
  </section>

  <section class="lg:py-20 py-10">
    <div class="container">
      <div class="grid grid-cols-12 gap-4 items-center">
        <div class="lg:col-span-5 col-span-12">
          <img
            class="w-full"
            alt="hero img"
            src={{ asset("assets/image/hero-img2.png") }}
            />
        </div>
        <div class="lg:col-span-6 col-span-12">
          <h2 class="lg:text-4xl md:text-3xl text-2xl font-semibold text-gray-800">The unseen of spending three years at Pixelgrade</h2>
          <p class="mt-4 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet justo ipsum. Sed accumsan quam vitae est varius fringilla. Pellentesque placerat vestibulum lorem sed porta. Nullam mattis tristique iaculis. Nullam pulvinar sit amet risus pretium auctor. Etiam quis massa pulvinar, aliquam quam vitae, tempus sem. Donec elementum pulvinar odio.</p>
          <button class="btn btn-primary py-3 px-8 rounded mt-8">Learn More</button>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-slate-50 py-10">
    <div class="container">
      <div class="grid grid-cols-12 gap-4 items-center">
        <div class="lg:col-span-5 col-span-12">
          <h1 class="lg:text-4xl md:text-3xl text-2xl font-semibold text-gray-800">Helping a local <br /><span class="text-green-600">business reinvent itself</span></h1>
          <p class="text-gray-900 mt-2">We reached here with our hard work and dedication</p>
        </div>
        <div class="lg:col-span-6 col-span-12 lg:col-start-7">
          <div class="grid md:grid-cols-2 gap-4 lg:gap-10 items-center">
            <div>
              <div class="flex items-center gap-4">
                <img
                  alt="person group"
                  width="48"
                  height="48"
                  src={{ asset("assets/image/icon/person.svg") }}
                />
                <div>
                  <h3 class="lg:text-[28px] md:text-2xl text-xl font-bold text-gray-800">2,245,341</h3>
                  <p class="text-gray-600 mt-1">Members</p>
                </div>
              </div>
            </div>
            <div>
              <div class="flex items-center gap-4">
                <img
                  alt="clubs"
                  width="48"
                  height="48"
                  src={{ asset("assets/image/icon/club.svg") }}
                />
                <div>
                  <h3 class="lg:text-[28px] md:text-2xl text-xl font-bold text-gray-800">46,328</h3>
                  <p class="text-gray-600 mt-1">Clubs</p>
                </div>
              </div>
            </div>
            <div>
              <div class="flex items-center gap-4">
                <img
                  alt="Event Booking"
                  width="48"
                  height="48"
                  src={{ asset("assets/image/icon/point.svg") }}
                />
                <div>
                  <h3 class="lg:text-[28px] md:text-2xl text-xl font-bold text-gray-800">828,867</h3>
                  <p class="text-gray-600 mt-1">Event Bookings</p>
                </div>
              </div>
            </div>
            <div>
              <div class="flex items-center gap-4">
                <img
                  alt="Payments"
                  width="48"
                  height="48"
                  src={{ asset("assets/image/icon/payment.svg") }}
                />
                <div>
                  <h3 class="lg:text-[28px] md:text-2xl text-xl font-bold text-gray-800">1,926,436</h3>
                  <p class="text-gray-600 mt-1">Payments</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="lg:py-20 py-10">
    <div class="container">
      <div class="grid grid-cols-12 gap-4 items-center">
        <div class="lg:col-span-5 col-span-12">
          <img
            class="w-full"
            alt="hero img"
            src={{ asset("assets/image/hero-img3.png") }}
            />
        </div>
        <div class="lg:col-span-7 col-span-12 lg:pe-16">
          <h2 class="lg:text-4xl md:text-3xl text-2xl font-semibold text-gray-800">How to design your site footer like we did</h2>
          <p class="mt-4 text-gray-600 text-sm">Donec a eros justo. Fusce egestas tristique ultrices. Nam tempor, augue nec tincidunt molestie, massa nunc varius arcu, at scelerisque elit erat a magna. Donec quis erat at libero ultrices mollis. In hac habitasse platea dictumst. Vivamus vehicula leo dui, at porta nisi facilisis finibus. In euismod augue vitae nisi ultricies, non aliquet urna tincidunt. Integer in nisi eget nulla commodo faucibus efficitur quis massa. Praesent felis est, finibus et nisi ac, hendrerit venenatis libero. Donec consectetur faucibus ipsum id gravida.</p>
          <button class="btn btn-primary py-3 px-8 rounded mt-8">Learn More</button>
        </div>
      </div>
    </div>
  </section>
  
  <section class="bg-slate-50 py-8">
    <div class="container">
      <div class="grid grid-cols-12 gap-4 items-center">
        <div class="lg:col-span-4 col-span-12">
          <img
            alt="Hero Image"
            src={{ asset("assets/image/hero-img4.png") }}
          />
        </div>
        <div class="lg:col-span-8 col-span-12">
          <p class="text-gray-600 font-medium">Maecenas dignissim justo eget nulla rutrum molestie. Maecenas lobortis sem dui, vel rutrum risus tincidunt ullamcorper. Proin eu enim metus. Vivamus sed libero ornare, tristique quam in, gravida enim. Nullam ut molestie arcu, at hendrerit elit. Morbi laoreet elit at ligula molestie, nec molestie mi blandit. Suspendisse cursus tellus sed augue ultrices, quis tristique nulla sodales. Suspendisse eget lorem eu turpis vestibulum pretium. Suspendisse potenti. Quisque malesuada enim sapien, vitae placerat ante feugiat eget. Quisque vulputate odio neque, eget efficitur libero condimentum id. Curabitur id nibh id sem dignissim finibus ac sit amet magna.</p>
          <h6 class="text-green-700 text-xl font-semibold mt-4">Tim Smith</h6>
          <p class="text-gray-500 ">British Dragon Boat Racing Association</p>
          <div class="flex items-center flex-wrap lg:gap-8 gap-4 mt-8">
            <img src="{{ asset("assets/image/client/logo1.svg") }}" alt="client-logo" />
            <img src="{{ asset("assets/image/client/logo2.svg") }}" alt="client-logo" />
            <img src="{{ asset("assets/image/client/logo3.svg") }}" alt="client-logo" />
            <img src="{{ asset("assets/image/client/logo4.svg") }}" alt="client-logo" />
            <img src="{{ asset("assets/image/client/logo5.svg") }}" alt="client-logo" />
            <img src="{{ asset("assets/image/client/logo6.svg") }}" alt="client-logo" />
            <a class="text-green-700 font-semibold flex gap-2">Meet all customers <img src="{{ asset("assets/image/icon/arrow_right.svg") }}" alt="Arrow Right" /></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="lg:pt-12 py-10 lg:pb-20">
    <div class="container">
      <h2 class="lg:text-4xl md:text-3xl text-2xl font-semibold text-gray-800 text-center">Caring is the new marketing</h2>
      <p class="text-gray-600 mt-2 max-w-screen-sm text-center mx-auto">The Nexcent blog is the best place to read about the latest membership insights, trends and more. See who's joining the community, read about how our community are increasing their membership income and lot's more.​</p>
      <div class="grid grid-cols-12 gap-y-8 lg:gap-x-8 gap-x-4 mt-4">
        <div class="lg:col-span-4 md:col-span-6 col-span-12">
          <div class="h-full flex flex-col">
            <img
              class="w-full rounded-md z-1"
              alt="Marketing Image"
              src={{ asset("assets/image/marketing_img.png") }}
              />
              <div class="bg-slate-50 rounded-md mx-6 text-center p-4 -mt-20 z-10 relative h-full flex flex-col">
                <p class="text-xl text-gray-600 font-semibold">Creating Streamlined Safeguarding Processes with OneRen</p>
                <a class="text-green-700 font-semibold flex gap-2 justify-center pt-6 mt-auto">Meet all customers <img src="{{ asset("assets/image/icon/arrow_right.svg") }}" alt="Arrow Right" /></a>
              </div>
          </div>
        </div>
        <div class="lg:col-span-4 md:col-span-6 col-span-12">
          <div class="h-full flex flex-col">
            <img
              class="w-full rounded-md"
              alt="Marketing Image"
              src={{ asset("assets/image/marketing_img2.png") }}
              />
              <div class="bg-slate-50 rounded-md mx-6 text-center p-4 -mt-20 z-10 relative h-full flex flex-col">
                <p class="lg:text-xl md:text-lg text-base text-gray-600 font-semibold">What are your safeguarding responsibilities and how can you manage them?</p>
                <a class="text-green-700 font-semibold flex gap-2 justify-center pt-6 mt-auto">Meet all customers <img src="{{ asset("assets/image/icon/arrow_right.svg") }}" alt="Arrow Right" /></a>
              </div>
          </div>
        </div>
        <div class="lg:col-span-4 md:col-span-6 col-span-12">
          <div class="h-full flex flex-col">
            <img
              class="w-full rounded-md"
              alt="Marketing Image"
              src={{ asset("assets/image/marketing_img3.png") }}
              />
              <div class="bg-slate-50 rounded-md mx-6 text-center p-4 -mt-20 z-10 relative h-full flex flex-col">
                <p class="text-xl text-gray-600 font-semibold">Revamping the Membership Model with Triathlon Australia</p>
                <a class="text-green-700 font-semibold flex gap-2 justify-center pt-6 mt-auto">Meet all customers <img src="{{ asset("assets/image/icon/arrow_right.svg") }}" alt="Arrow Right" /></a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-slate-50 py-8">
    <div class="container">
      <div class="grid grid-cols-12">
        <div class="md:col-span-8 col-span-12 md:col-start-3">
          <h1 class="lg:text-6xl md:text-5xl text-4xl font-semibold text-center">Pellentesque suscipit fringilla libero eu.</h1>
          <button class="btn btn-primary font-medium py-3 px-8 rounded mt-8 flex items-center mx-auto">Get a Demo <img src="{{ asset("assets/image/icon/arrow_right_white.svg") }}" class="ml-2" alt="Arrow Right" /></button>
        </div>
      </div>
    </div>
  </section>
@endsection