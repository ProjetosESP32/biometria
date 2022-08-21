<button class="ml-3 bg-primary text-white px-10 py-2 rounded-full font-semibold" {{ $attributes->merge(['type' => 'submit'])}} >
  {{$slot}}
</button>