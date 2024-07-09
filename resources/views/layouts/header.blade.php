<div class="container">   
  <nav
    class="sticky top-0 z-10 block w-full max-w-full px-4 py-2 bg-white rounded-none h-max lg:px-8 lg:py-6">
    <div class="flex items-center text-blue-gray-900">
      <a href="#"
        class="mr-4 block cursor-pointer py-1.5 font-sans text-base font-medium leading-relaxed text-inherit antialiased">
        <img src="{{ asset('assets/image/logo.svg') }}" alt="logo">
      </a>
      <div class="flex items-center gap-4 flex-1">
        <div class="hidden pr-4 lg:block mx-auto">
          <ul class="flex flex-col gap-2 mt-2 mb-4 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">
            <li class="nav-link">
              <a href="#" class="flex items-center">
                Home
              </a>
            </li>
            <li class="nav-link">
              <a href="#">
                Service
              </a>
            </li>
            <li class="nav-link">
              <a href="#">
                Feature
              </a>
            </li>
            <li class="nav-link">
              <a href="#">
                Product
              </a>
            </li>
            <li class="nav-link">
              <a href="#">
                Testimonial
              </a>
            </li>
            <li class="nav-link">
              <a href="#">
                FAQ
              </a>
            </li>
          </ul>
        </div>
        <div class="flex items-center gap-x-1">
          <button
            class="hidden btn text-green-700 lg:inline-block"
            type="button">
            <span>Login</span>
          </button>
          <button
            class="hidden btn btn-primary lg:inline-block"
            type="button">
            <span>Sign up</span>
          </button>
        </div>
        <button
          class="relative ml-auto h-6 max-h-[40px] w-6 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-inherit transition-all hover:bg-transparent focus:bg-transparent active:bg-transparent disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:hidden"
          type="button">
          <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor"
              stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </span>
        </button>
      </div>
    </div>
  </nav>
</div>