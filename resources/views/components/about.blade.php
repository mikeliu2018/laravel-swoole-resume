@props(['about' => $about])

<section class="m-3 p-3 md:m-5 md:p-5 bg-gray-100 rounded-md space-y-3">
  <h2 class="text-xl font-bold text-gray-600">
    {{ $about->title }}
  </h2>
  @foreach ($about->lists as $item)
  <p class="text-md text-gray-500 leading-relaxed text-justify">
    {{ $item }}
  </p>
  @endforeach
</section>