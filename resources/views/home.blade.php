<x-layout>
  <div class="md:container md:mx-auto">      
    {{-- <h1 class="text-3xl font-bold underline">
      Hello world!
    </h1> --}}
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
    <div class="grid sm:grid-cols-1 md:grid-cols-2">
      <section class="m-3 p-3 md:m-5 md:p-5 bg-gray-100 rounded-md space-y-3">
        <h2 class="text-xl font-bold text-gray-600">
          {{ $resume->about->title }}
        </h2>
        @foreach ($resume->about->lists as $item)
        <p class="text-sm text-gray-500 leading-relaxed text-justify">
          {{ $item }}
        </p>
        @endforeach
      </section>
      <section class="m-3 p-3 md:m-5 md:p-5 bg-gray-100 rounded-md space-y-3">
        <h2 class="text-xl font-bold text-gray-600">
          {{ $resume->experiences->title }}
        </h2>
        <div class="relative max-w-2xl">
          {{-- <div class="absolute top-0 h-full border-r-2 border-gray-500 left-3" /> --}}
          <div class="top-0 h-full" />
          <ul class="space-y-2">
            @foreach ($resume->experiences->lists as $item)
            <li>
              <div class="flex items-center">
                <span class="w-6 h-6 bg-gray-500 rounded-full">
                  &nbsp;
                </span>
                <h5 class="ml-4 font-bold text-gray-600">
                  {{ $item->company }}
                  {{ $item->interval->start }} ~ {{ $item->interval->end }}
                </h5>
              </div>
              <div class="ml-12">
                <p class="text-sm text-gray-500 text-justify">
                  {{ $item->description }}
                </p>
              </div>
            </li>
            @endforeach            
          </ul>
        </div>
      </section>

      <section class="m-3 p-3 md:m-5 md:p-5 bg-gray-100 rounded-md space-y-3">
        <h2 class="text-xl font-bold text-gray-600">
          {{ $resume->skill->title }}
        </h2>
        <ul class="list-none">
          @foreach ($resume->skill->skills as $skill)
          <li class="font-bold text-gray-600">
            {{ $skill->type }}
            <ul class="list-disc list-inside">
              @foreach ($skill->lists as $item)
              <li class="font-bold text-gray-600">
                <img class="inline-block h-6 w-6" src="{{ Vite::asset($item->image) }}"> {{ $item->text }}
              </li>                            
              @endforeach
            </ul>
          </li>
          @endforeach
        </ul>
      </section>
    </div>
  </div>
</x-layout>