@props(['job'])
<div class="p-4 bg-white/5 rounded-xl flex gap-6 border border-transparent hover:border-blue-500 group">
   <div>
     <x-img/>
</div>
    <div class="flex-1 flex flex-col">
    <a class="self-start text-gray-400" >{{$job->employer->name}} </a>
        <h2  class="text-xl font-bold mt-1">{{$job->title}}</h2>
        <p class="text-gray-300 mt-auto">{{$job->salary}}</p>
    </div>
        <div>
            @foreach ($job->tags as $tag)
            <x-tags :$tag size='small'/>
            @endforeach

        </div>


</div>

