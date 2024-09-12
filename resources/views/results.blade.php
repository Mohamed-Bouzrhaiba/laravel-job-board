<x-layout>
    <x-page-heading>Result</x-page-heading>
    <div class="mt-6 space-y-6">
        @foreach ($res as $job)
        <x-job-card2 :$job />
        @endforeach
    </div>
</x-layout>
