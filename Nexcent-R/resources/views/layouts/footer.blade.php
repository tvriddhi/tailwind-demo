<footer class="bg-slate-900 lg:py-16 py-8 text-slate-50">
  <div class="container">
    <div class="grid grid-cols-12 gap-4">
      <div class="lg:col-span-3 col-span-12">
        <a href="#">
          <img src="{{ asset('assets/image/logo_white.svg') }}" alt="logo">
        </a>
        <p class="mt-10 text-sm">Copyright © 2020 Nexcent ltd.</p>
        <p class="mt-2 text-sm">All rights reserved</p>
        <div class="mt-10 flex gap-4 items-center">
          <a href="#" class="w-8 h-8 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center"><img src="{{ asset('assets/image/icon/insta.svg') }}" alt="Instagram Logo"></a>
          <a href="#" class="w-8 h-8 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center"><img src="{{ asset('assets/image/icon/dribble.svg') }}" alt="Instagram Logo"></a>
          <a href="#" class="w-8 h-8 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center"><img src="{{ asset('assets/image/icon/twitter.svg') }}" alt="Instagram Logo"></a>
          <a href="#" class="w-8 h-8 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center"><img src="{{ asset('assets/image/icon/youtube.svg') }}" alt="Instagram Logo"></a>
        </div>
      </div>
      <div class="lg:col-span-2 md:col-span-6 col-span-12 lg:col-start-6">
        <h5 class="text-lg font-semibold text-white">Company</h5>
        <ul class="mt-6 gap-3 flex flex-col">
          <li>
            <a href="#" class="footer-link">About us</a>
          </li>
          <li>
            <a href="#" class="footer-link">Blog</a>
          </li>
          <li>
            <a href="#" class="footer-link">Contact us</a>
          </li>
          <li>
            <a href="#" class="footer-link">Pricing</a>
          </li>
          <li>
            <a href="#" class="footer-link">Testimonials</a>
          </li>
        </ul>
      </div>
      <div class="lg:col-span-2 md:col-span-6 col-span-12">
        <h5 class="text-lg font-semibold text-white">Support</h5>
        <ul class="mt-6 gap-3 flex flex-col">
          <li>
            <a href="#" class="footer-link">Help center</a>
          </li>
          <li>
            <a href="#" class="footer-link">Terms of service</a>
          </li>
          <li>
            <a href="#" class="footer-link">Legal</a>
          </li>
          <li>
            <a href="#" class="footer-link">Privacy policy</a>
          </li>
          <li>
            <a href="#" class="footer-link">Status</a>
          </li>
        </ul>
      </div>
      <div class="lg:col-span-3 col-span-12">
        <h5 class="text-lg font-semibold text-white">Stay up to date</h5>
        <div class="relative mt-6 rounded-lg shadow-sm">
          <input type="text" name="price" id="price" class="block w-full rounded-lg border-0 ring-0 outline-0 py-3 pr-7 pl-3 text-gray-900 bg-white/20 placeholder:text-slate-200 sm:text-sm sm:leading-6" placeholder="0.00">
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
            <img src="{{ asset('assets/image/icon/send.svg') }}" alt="Send">
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>