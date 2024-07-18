import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/react';
import { Bars3Icon, XMarkIcon } from '@heroicons/react/24/outline';
import './App.css';
import { arrowRight, arrowRightWhite, club, dribble, heroImg, heroImg1, heroImg4, insta, logo, logo1, Logo1, logo2, Logo2, logo3, Logo3, logo4, Logo4, logo5, Logo5, logo6, logo7, logoWhite, manageIcon, manageIcon1, manageIcon2, marketingImg, marketingImg2, marketingImg3, payment, person, point, send, twitter, youtube } from './assets/images';

const navigation = [
  { name: 'Home', href: '#', current: true },
  { name: 'Service', href: '#', current: false },
  { name: 'Feature', href: '#', current: false },
  { name: 'Product', href: '#', current: false },
  { name: 'Testimonial', href: '#', current: false },
  { name: 'FAQ', href: '#', current: false },
]

function classNames(...classes) {
  return classes.filter(Boolean).join(' ')
}
function App() {
  return (
    <>
      <div className="container px-6 sm:px-14 lg:px-6 lg:py-7 py-4">
        <Disclosure as="nav">
        <div>
          <div className="relative flex items-center justify-between">
            <div className="flex flex-1 items-center lg:justify-start">
              <div>
                <img
                  alt="Your Company"
                  src={logo}
                />
              </div>
              <div className="hidden lg:block mx-auto">
                <div className="flex space-x-4">
                  {navigation.map((item) => (
                    <a
                      key={item.name}
                      href={item.href}
                      aria-current={item.current ? 'page' : undefined}
                      className={classNames(
                        item.current ? 'text-blue-950 font-medium' : 'text-blue-950 font-normal',
                        'px-3 py-2 nav-link',
                      )}
                    >
                      {item.name}
                    </a>
                  ))}
                </div>
              </div>
            </div>
            <div className="space-x-4 hidden lg:flex">
              <a href="#" className='text-green-600 rounded-md px-5 py-3 text-sm font-medium hover:bg-green-200/50 transition duration-500 ease-out'>
                Login
              </a>
              <a href="#" className='text-white bg-green-600 rounded-md px-5 py-3 text-sm font-medium'>
                Sign up
              </a>
            </div>
            <div className="lg:hidden">
              <DisclosureButton className="group relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                <Bars3Icon aria-hidden="true" className="block h-6 w-6 group-data-[open]:hidden" />
                <XMarkIcon aria-hidden="true" className="hidden h-6 w-6 group-data-[open]:block" />
              </DisclosureButton>
            </div>
          </div>
        </div>

        <DisclosurePanel className="lg:hidden">
          <div className="space-y-1 pb-3 pt-2">
            {navigation.map((item) => (
              <DisclosureButton
                key={item.name}
                as="a"
                href={item.href}
                aria-current={item.current ? 'page' : undefined}
                className={classNames(
                  item.current ? 'text-blue-950' : 'text-blue-950',
                  'xl:px-3 py-2 nav-link',
                )}
              >
                {item.name}
              </DisclosureButton>
            ))}
            <a href="#" className='text-green-600 inline-block rounded-md px-3 py-2 text-sm font-medium hover:bg-green-200/50'>
              Login
            </a>
            <a href="#" className='text-white bg-green-600 inline-block rounded-md px-3 ml-3 py-2 text-sm font-medium'>
              Sign up
            </a>
          </div>
        </DisclosurePanel>
      </Disclosure>
      </div>

      <section className='py-24 bg-slate-50'>
        <div className='container'>
          <div className='grid grid-cols-12 gap-4 items-center'>
            <div className='lg:col-span-7 col-span-12 lg:order-first order-last'>
              <h1 className='lg:text-6xl md:text-5xl text-4xl font-semibold '>Lessons and insights <span className='text-green-600'>from 8 years</span></h1>
              <p className='mt-4 text-gray-600'>Where to grow your business as a photographer: site or social media?</p>
              <button className='btn-primary py-3 px-8 rounded-sm mt-8'>Register</button>
            </div>
            <div className='lg:col-span-4 lg:col-start-9 col-start-3 col-span-8 lg:order-last order-first'>
              <img
                className='w-full'
                alt="hero img"
                src={heroImg}
                />
            </div>
          </div>
        </div>
      </section>
      <section className='our-client py-10'>
          <div className='container px-6 sm:px-14 lg:px-6'>
            <h2 className='text-4xl text-gray-950 font-semibold text-center mb-2'>Our Clients</h2>
            <p className='text-gray-600 text-center mb-4'>We have been working with some Fortune 500+ clients</p>
            <div className='flex justify-between gap-4 flex-wrap'>
              <img alt="Your Company" src={Logo1}/>
              <img alt="Your Company" src={Logo2}/>
              <img alt="Your Company" src={Logo3}/>
              <img alt="Your Company" src={Logo4}/>
              <img alt="Your Company" src={Logo5}/>
            </div>
          </div>
      </section>
      <section className='pb-10'>
        <div className='container px-6 sm:px-14 lg:px-6'>
          <h2 className='text-4xl text-gray-950 font-semibold text-center max-w-[542px] mx-auto mb-2'>Manage your entire community in a single system</h2>
          <p className='text-gray-600 text-center mb-4'>Who is Nextcent suitable for?</p>
          <div className="grid md:grid-cols-3 lg:gap-x-32 gap-4">
            <div className="shadow-[0_4px_2px_rgba(171,190,209,0.20)] rounded-md px-4 py-6">
              <div className="flex w-full justify-center">
                <img src={manageIcon} className="mb-4" alt="member-logo" />
              </div>
              <h4 className="font-bold text-3xl text-center">Membership Organisations</h4>
              <p className="mt-2 text-gray-600 text-center">Our membership management software provides full automation of membership renewals and payments</p>
            </div>
            <div className="shadow-[0_4px_2px_rgba(171,190,209,0.20)] rounded-md px-4 py-6">
              <div className="flex w-full justify-center">
                <img src={manageIcon1} className="mb-4" alt="member-logo" />
              </div>
              <h4 className="font-bold text-3xl text-center">National Associations</h4>
              <p className="mt-2 text-gray-600 text-center">Our membership management software provides full automation of membership renewals and payments</p>
            </div>
            <div className="shadow-[0_4px_2px_rgba(171,190,209,0.20)] rounded-md px-4 py-6">
              <div className="flex w-full justify-center">
                <img src={manageIcon2} className="mb-4" alt="member-logo" />
              </div>
              <h4 className="font-bold text-3xl text-center">Clubs And Groups</h4>
              <p className="mt-2 text-gray-600 text-center">Our membership management software provides full automation of membership renewals and payments</p>
            </div>
          </div>
        </div>
      </section>

      <section className="lg:py-20 py-10">
        <div className="container">
          <div className="grid grid-cols-12 gap-4 items-center">
            <div className="lg:col-span-5 col-span-12">
              <img
                className="w-full"
                alt="hero img"
                src={heroImg1}
                />
            </div>
            <div className="lg:col-span-6 col-span-12">
              <h2 className="lg:text-4xl md:text-3xl text-2xl font-semibold text-gray-800">The unseen of spending three years at Pixelgrade</h2>
              <p className="mt-4 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet justo ipsum. Sed accumsan quam vitae est varius fringilla. Pellentesque placerat vestibulum lorem sed porta. Nullam mattis tristique iaculis. Nullam pulvinar sit amet risus pretium auctor. Etiam quis massa pulvinar, aliquam quam vitae, tempus sem. Donec elementum pulvinar odio.</p>
              <button className="btn btn-primary py-3 px-8 rounded mt-8">Learn More</button>
            </div>
          </div>
        </div>
      </section>

      <section className="bg-slate-50 py-10">
        <div className="container">
          <div className="grid grid-cols-12 gap-4 items-center">
            <div className="lg:col-span-5 col-span-12">
              <h1 className="lg:text-4xl md:text-3xl text-2xl font-semibold text-gray-800">Helping a local <br /><span className="text-green-600">business reinvent itself</span></h1>
              <p className="text-gray-900 mt-2">We reached here with our hard work and dedication</p>
            </div>
            <div className="lg:col-span-6 col-span-12 lg:col-start-7">
              <div className="grid md:grid-cols-2 gap-4 lg:gap-10 items-center">
                <div>
                  <div className="flex items-center gap-4">
                    <img
                      alt="person group"
                      width="48"
                      height="48"
                      src={person}
                    />
                    <div>
                      <h3 className="lg:text-[28px] md:text-2xl text-xl font-bold text-gray-800">2,245,341</h3>
                      <p className="text-gray-600 mt-1">Members</p>
                    </div>
                  </div>
                </div>
                <div>
                  <div className="flex items-center gap-4">
                    <img
                      alt="clubs"
                      width="48"
                      height="48"
                      src={club}
                    />
                    <div>
                      <h3 className="lg:text-[28px] md:text-2xl text-xl font-bold text-gray-800">46,328</h3>
                      <p className="text-gray-600 mt-1">Clubs</p>
                    </div>
                  </div>
                </div>
                <div>
                  <div className="flex items-center gap-4">
                    <img
                      alt="Event Booking"
                      width="48"
                      height="48"
                      src={point}
                    />
                    <div>
                      <h3 className="lg:text-[28px] md:text-2xl text-xl font-bold text-gray-800">828,867</h3>
                      <p className="text-gray-600 mt-1">Event Bookings</p>
                    </div>
                  </div>
                </div>
                <div>
                  <div className="flex items-center gap-4">
                    <img
                      alt="Payments"
                      width="48"
                      height="48"
                      src={payment}
                    />
                    <div>
                      <h3 className="lg:text-[28px] md:text-2xl text-xl font-bold text-gray-800">1,926,436</h3>
                      <p className="text-gray-600 mt-1">Payments</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section className="bg-slate-50 py-8">
        <div className="container">
          <div className="grid grid-cols-12 gap-4 items-center">
            <div className="lg:col-span-4 col-span-12">
              <img
                alt="Hero Image"
                src={heroImg4}
                className='xl:mx-0 mx-auto'
              />
            </div>
            <div className="lg:col-span-8 col-span-12">
              <p className="text-gray-600 font-medium">Maecenas dignissim justo eget nulla rutrum molestie. Maecenas lobortis sem dui, vel rutrum risus tincidunt ullamcorper. Proin eu enim metus. Vivamus sed libero ornare, tristique quam in, gravida enim. Nullam ut molestie arcu, at hendrerit elit. Morbi laoreet elit at ligula molestie, nec molestie mi blandit. Suspendisse cursus tellus sed augue ultrices, quis tristique nulla sodales. Suspendisse eget lorem eu turpis vestibulum pretium. Suspendisse potenti. Quisque malesuada enim sapien, vitae placerat ante feugiat eget. Quisque vulputate odio neque, eget efficitur libero condimentum id. Curabitur id nibh id sem dignissim finibus ac sit amet magna.</p>
              <h6 className="text-green-700 text-xl font-semibold mt-4">Tim Smith</h6>
              <p className="text-gray-500 ">British Dragon Boat Racing Association</p>
              <div className="flex items-center flex-wrap lg:gap-8 gap-4 mt-8">
                <img src={logo1} alt="client-logo" />
                <img src={logo2} alt="client-logo" />
                <img src={logo3} alt="client-logo" />
                <img src={logo4} alt="client-logo" />
                <img src={logo5} alt="client-logo" />
                <img src={logo6} alt="client-logo" />
                <img src={logo7} alt="client-logo" />
                <a href='#' className="text-green-700 font-semibold flex gap-2">Meet all customers <img src={arrowRight} alt="Arrow Right" /></a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section className="lg:pt-12 py-10 lg:pb-20">
        <div className="container">
          <h2 className="lg:text-4xl md:text-3xl text-2xl font-semibold text-gray-800 text-center">Caring is the new marketing</h2>
          <p className="text-gray-600 mt-2 max-w-screen-sm text-center mx-auto">The Nexcent blog is the best place to read about the latest membership insights, trends and more. See who's joining the community, read about how our community are increasing their membership income and lot's more.​</p>
          <div className="grid grid-cols-12 gap-y-8 md:gap-x-8 mt-4">
            <div className="lg:col-span-4 md:col-span-6 col-span-12">
              <div className="h-full flex flex-col">
                <img
                  className="w-full rounded-md z-1"
                  alt="Marketing Image"
                  src={marketingImg}
                  />
                  <div className="bg-slate-50 rounded-md mx-6 text-center p-4 -mt-20 z-10 relative h-full flex flex-col">
                    <p className="text-xl text-gray-600 font-semibold">Creating Streamlined Safeguarding Processes with OneRen</p>
                    <a href='#' className="text-green-700 font-semibold flex gap-2 justify-center pt-6 mt-auto">Meet all customers <img src={arrowRight} alt="Arrow Right" /></a>
                  </div>
              </div>
            </div>
            <div className="lg:col-span-4 md:col-span-6 col-span-12">
              <div className="h-full flex flex-col">
                <img
                  className="w-full rounded-md"
                  alt="Marketing Image"
                  src={marketingImg2}
                  />
                  <div className="bg-slate-50 rounded-md mx-6 text-center p-4 -mt-20 z-10 relative h-full flex flex-col">
                    <p className="lg:text-xl md:text-lg text-base text-gray-600 font-semibold">What are your safeguarding responsibilities and how can you manage them?</p>
                    <a href='#' className="text-green-700 font-semibold flex gap-2 justify-center pt-6 mt-auto">Meet all customers <img src={arrowRight} alt="Arrow Right" /></a>
                  </div>
              </div>
            </div>
            <div className="lg:col-span-4 md:col-span-6 col-span-12">
              <div className="h-full flex flex-col">
                <img
                  className="w-full rounded-md"
                  alt="Marketing Image"
                  src={marketingImg3}
                  />
                  <div className="bg-slate-50 rounded-md mx-6 text-center p-4 -mt-20 z-10 relative h-full flex flex-col">
                    <p className="text-xl text-gray-600 font-semibold">Revamping the Membership Model with Triathlon Australia</p>
                    <a href='#' className="text-green-700 font-semibold flex gap-2 justify-center pt-6 mt-auto">Meet all customers <img src={arrowRight} alt="Arrow Right" /></a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section className="bg-slate-50 py-8">
        <div className="container">
          <div className="grid grid-cols-12">
            <div className="md:col-span-8 col-span-12 md:col-start-3">
              <h1 className="lg:text-6xl md:text-5xl text-4xl font-semibold text-center">Pellentesque suscipit fringilla libero eu.</h1>
              <button className="btn btn-primary font-medium py-3 px-8 rounded mt-8 flex items-center mx-auto">Get a Demo <img src={arrowRightWhite} className="ml-2" alt="Arrow Right" /></button>
            </div>
          </div>
        </div>
      </section>

      <footer className="bg-slate-900 lg:py-16 py-8 text-slate-50">
        <div className="container">
          <div className="grid grid-cols-12 gap-4">
            <div className="lg:col-span-3 col-span-12">
              <a href="#">
                <img src={logoWhite} alt="logo" />
              </a>
              <p className="mt-10 text-sm">Copyright © 2020 Nexcent ltd.</p>
              <p className="mt-2 text-sm">All rights reserved</p>
              <div className="mt-10 flex gap-4 items-center">
                <a href="#" className="w-8 h-8 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center"><img src={insta} alt="Instagram Logo"/></a>
                <a href="#" className="w-8 h-8 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center"><img src={dribble} alt="Instagram Logo"/></a>
                <a href="#" className="w-8 h-8 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center"><img src={twitter} alt="Instagram Logo"/></a>
                <a href="#" className="w-8 h-8 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center"><img src={youtube} alt="Instagram Logo"/></a>
              </div>
            </div>
            <div className="lg:col-span-2 md:col-span-6 col-span-12 lg:col-start-6">
              <h5 className="text-lg font-semibold text-white">Company</h5>
              <ul className="mt-6 gap-3 flex flex-col">
                <li>
                  <a href="#" className="footer-link">About us</a>
                </li>
                <li>
                  <a href="#" className="footer-link">Blog</a>
                </li>
                <li>
                  <a href="#" className="footer-link">Contact us</a>
                </li>
                <li>
                  <a href="#" className="footer-link">Pricing</a>
                </li>
                <li>
                  <a href="#" className="footer-link">Testimonials</a>
                </li>
              </ul>
            </div>
            <div className="lg:col-span-2 md:col-span-6 col-span-12">
              <h5 className="text-lg font-semibold text-white">Support</h5>
              <ul className="mt-6 gap-3 flex flex-col">
                <li>
                  <a href="#" className="footer-link">Help center</a>
                </li>
                <li>
                  <a href="#" className="footer-link">Terms of service</a>
                </li>
                <li>
                  <a href="#" className="footer-link">Legal</a>
                </li>
                <li>
                  <a href="#" className="footer-link">Privacy policy</a>
                </li>
                <li>
                  <a href="#" className="footer-link">Status</a>
                </li>
              </ul>
            </div>
            <div className="lg:col-span-3 col-span-12">
              <h5 className="text-lg font-semibold text-white">Stay up to date</h5>
              <div className="relative mt-6 rounded-lg shadow-sm">
                <input type="text" name="price" id="price" className="block w-full rounded-lg border-0 ring-0 outline-0 py-3 pr-7 pl-3 text-white bg-white/20 placeholder:text-slate-200 sm:text-sm sm:leading-6" placeholder="0.00" />
                <div className="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                  <img src={send} alt="Send"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </>
  );
}

export default App;
