<nav class="w-full z-20 top-0 start-0 bg-slate-50 relative">
  <div class="container">
    <div class="flex flex-wrap items-center justify-between mx-auto py-4">
      <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{ asset('assets/image/logo.svg') }}" alt="logo">
      </a>
      <div class="flex lg:order-2 space-x-3 lg:space-x-0 rtl:space-x-reverse">
        <button id="menu-toggle" data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center px-0 py-2 justify-center text-sm text-green-700 rounded-lg lg:hidden" aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg id="menu-open-icon" class="w-5 h-5 block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
          <svg id="menu-close-icon" class="w-5 h-5 hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:order-1 lg:flex-1" id="navbar-sticky">
        <div class="lg:items-center w-full lg:flex lg:flex-1 lg:flex-row flex-col mx-auto px-4 lg:px-0 pb-4 lg:pb-0 lg:w-auto sm:max-w-screen-sm md:max-w-screen-md lg:max-w-full nav-content">
          <ul class="flex flex-col p-0 pb-4 lg:p-0 font-medium lg:space-x-8 rtl:space-x-reverse lg:flex-row lg:mt-0 mx-auto lg:w-auto w-full">
            <li class="nav-link">
              <a href="#">
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
          <div class="flex lg:gap-4 gap-4 lg:w-auto w-full">
            <button
              class="btn lg:bg-transparent lg:hover:bg-transparent btn-primary lg:text-green-700 text-white lg:ps-1 w-full"
              type="button">
              <span>Login</span>
            </button>
            <button
              class="btn btn-primary w-full lg:whitespace-nowrap"
              type="button">
              <span>Sign up</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
