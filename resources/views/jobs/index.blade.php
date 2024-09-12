<x-layout>
    <section class="text-center">
        <h1 class="font-bold text-4xl text-center">Search A job</h1>
       {{-- <form action="" class="mt-6" >
            <input type="text" placeholder="EX: BackEnd Developer, Software Enginner..." class="rounded-xl bg-white/25 border-white/10 px-5 py-4 w-full max-w-xl ">
        </form>--}}
    <x-forms.form action="/search" class="mt-8">
        <x-forms.input name="q" :label="false" placeholder="EX: BackEnd Developer, Software Enginner.." />
    </x-forms.form>
    </section>
 <Section class="pt-10">
    <h1 class="font-bold text-lg m-8">Featured Jobs &#x1F525;</h1>
    <div class="grid lg:grid-cols-3 gap-8 mt-6">
        @foreach ($featuredjobs as $job)
        <x-job-card :$job />

        @endforeach
    </div>
 </Section>
 <section>
    <h1 class="font-bold text-lg m-8">TAGS </h1>
    @foreach ($tags as $tag)
    <x-tags :$tag />

    @endforeach


 </section>
 <section>
    <h1 class="font-bold text-lg m-8">Recent Jobs  🆕 </h1>
    <div class="mt-6 space-y-6">
        @foreach ($jobs as $job)
        <x-job-card2 :$job />
        @endforeach
    </div>
    </section>
</x-layout>
