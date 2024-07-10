@props(['skills' => $skills])

<section class="m-3 p-3 md:m-5 md:p-5 bg-gray-100 rounded-md space-y-3">
  <h2 class="text-xl font-bold text-gray-600">
    {{ $skills->title }}
  </h2>
  <ul class="list-none">
    @foreach ($skills->lists as $group)
    <li class="font-bold text-gray-600">
      {{ $group->type }}
      <ul class="list-disc list-inside">
        @foreach ($group->lists as $item)
        <li class="font-bold text-gray-600">
          <img class="inline-block h-6 w-6" src="{{ Vite::asset($item->image) }}"> {{ $item->text }}
        </li>                            
        @endforeach
      </ul>
    </li>
    @endforeach
  </ul>
</section>