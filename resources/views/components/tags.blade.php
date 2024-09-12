@props(['tag','size'=>'base'])
@php
    $classes  = " bg-white/10 hover:bg-white/20 rounded-xl transition-colors duration-300 ";
    if ($size == 'base'){
    $classes .= "px-5 py-1 text-lg ";
    }

    if ($size == 'small'){
        $classes .="px-3 py-1 text-xs";
    }

@endphp
<a class="{{$classes}}" href="/tags/{{strtolower($tag->name)}}">{{$tag->name}}</a>
