@props(['type'=>"button"])

<button type={{ $type ? $type : '' }} {!! $attributes->merge(['class'=> 'ml-3 bg-primary text-white px-10 py-2 rounded-full font-semibold']) !!} >
  {{$slot}}
</button>