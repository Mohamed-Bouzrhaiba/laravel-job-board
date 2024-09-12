@props(['job'])

<div class="p-4 bg-white/5 rounded-xl flex flex-col text-center border border-transparent hover:border-blue-500 group">

    <div class="self-start" >{{$job->employer->name}} </div>

    <div class="py-8 font-bold">
        <h2 class="text-xl mb-2">{{$job->title}}</h2>
        <p>{{$job->salary}}</p>
    </div>
    <div class="flex justify-between item-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
            <x-tags :$tag size='small'/>

            @endforeach



        </div>
            <x-img :width="42"/>
    </div>

</div>

