import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/react';
import { Bars3Icon, XMarkIcon } from '@heroicons/react/24/outline';
import './App.css';
import { logo } from './assets/images';

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
    <div className="xl:container lg:container px-6 sm:px-14 lg:px-6 lg:py-7 py-4">
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
                      'rounded-md px-3 py-2',
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
            {/* Mobile menu button*/}
            <DisclosureButton className="group relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
              <span className="-inset-0.5" />
              <span className="sr-only">Open main menu</span>
              <Bars3Icon aria-hidden="true" className="block h-6 w-6 group-data-[open]:hidden" />
              <XMarkIcon aria-hidden="true" className="hidden h-6 w-6 group-data-[open]:block" />
            </DisclosureButton>
          </div>
        </div>
      </div>

      <DisclosurePanel className="lg:hidden">
        <div className="space-y-1 px-2 pb-3 pt-2">
          {navigation.map((item) => (
            <DisclosureButton
              key={item.name}
              as="a"
              href={item.href}
              aria-current={item.current ? 'page' : undefined}
              className={classNames(
                item.current ? 'text-blue-950' : 'text-blue-950 hover:bg-gray-700 hover:text-white',
                'block rounded-md px-3 py-2 text-base font-medium',
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
  );
}

export default App;
