<x-layout>
  <div class="md:container md:mx-auto">
    <header class="flex items-center space-x-5 m-3 p-3 md:m-5 md:p-5 bg-gray-100">
      <img class="inline-block h-20 w-20 rounded-full ring-2 ring-white" src="{{ Vite::asset('resources/images/photo_2020-02-04_11-23-32.jpg') }}">
      <div class="grid sm:grid-cols-1 md:grid-cols-2 w-full">
        <div class="w-full inline-block">
          <h2 class="text-2xl font-bold text-gray-600 font-mono">
            劉烈霆
          </h2>
          <h2 class="text-xl font-bold text-gray-600 font-serif">
            LIU LIEH TING
          </h2>
        </div>
        <div class="w-full inline-block">
          <ul class="list-none">
            <li class="font-bold text-gray-600">
              <a href="mailto:mike.jaffson@gmail.com" target="_blank">
                <img class="inline-block h-5 w-5" src="{{ Vite::asset('resources/images/email.svg') }}">
                <span class="text-sm text-justify">mike.jaffson@gmail.com</span>
              </a>
            </li>
            <li class="font-bold text-gray-600">
              <a href="https://github.com/mikeliu2018" target="_blank">
                <img class="inline-block h-5 w-5" src="{{ Vite::asset('resources/images/github.svg') }}">
                <span class="text-sm text-justify">mikeliu2018</span>
              </a>
            </li>
            <li class="font-bold text-gray-600">
              <a href="https://t.me/mikeliu2018" target="_blank">
                <img class="inline-block h-5 w-5" src="{{ Vite::asset('resources/images/telegram.svg') }}">
                <span class="text-sm text-justify">@mikeliu2018</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <div class="grid md:grid-cols-1">
      <x-about :about="$resume->about"></x-about>
      <x-experiences :experiences="$resume->experiences"></x-experiences>
      <x-skills :skills="$resume->skills"></x-skill>
    </div>
  </div>
</x-layout>