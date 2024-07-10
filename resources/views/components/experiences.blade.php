@props(['experiences' => $experiences])

<section class="m-3 p-3 md:m-5 md:p-5 bg-gray-100 rounded-md space-y-3">
  <h2 class="text-xl font-bold text-gray-600">
    {{ $experiences->title }}
  </h2>
  <div class="relative max-w-2xl">
    <div class="top-0 h-full" />
    <ul class="space-y-2">
      @foreach ($experiences->lists as $item)
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
          {{-- <div class="text-sm text-gray-500 text-justify">
            {{ $item->description }}
          </div> --}}
          @foreach ($item->projects as $project)
            <p class="text-md text-gray-500 text-justify font-bold">
              {{ $project->name }}
            </p>
            <ul class="list-disc text-sm text-gray-500 text-justify">
            @foreach ($project->works as $work)
              <li>{{ $work }}</li>
            @endforeach  
            </ul>
          @endforeach
        </div>        
      </li>
      @endforeach            
    </ul>
  </div>
</section>