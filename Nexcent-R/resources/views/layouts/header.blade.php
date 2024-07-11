<nav class="w-full z-20 top-0 start-0 sticky bg-slate-50">
  <div class="container">
    <div class="flex flex-wrap items-center justify-between mx-auto py-4">
      <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{ asset('assets/image/logo.svg') }}" alt="logo">
      </a>
      <div class="flex lg:order-2 space-x-3 lg:space-x-0 rtl:space-x-reverse">
        <!-- <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</button> -->
        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
        </button>
      </div>
      <div class="items-center hidden w-full lg:flex lg:w-auto lg:order-1 lg:flex-1" id="navbar-sticky">
        <ul class="flex flex-col p-4 lg:p-0 mt-4 font-medium lg:space-x-8 rtl:space-x-reverse lg:flex-row lg:mt-0 mx-auto">
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
        <button
          class="btn text-green-700"
          type="button">
          <span>Login</span>
        </button>
        <button
          class="btn btn-primary"
          type="button">
          <span>Sign up</span>
        </button>
      </div>
    </div>
  </div>
</nav>
