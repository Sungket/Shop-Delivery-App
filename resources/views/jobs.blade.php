<x-layout>
<x-slot:heading>
        Jobs Page
    </x-slot:heading>

    @foreach ($jobs as $job)
        <li>
            <a href="/jobs/">
            <strong>{{$job['title']}}</strong>: Pays {{$job['salary']}} per year
            </a>
        </li>
    @endforeach
</x-layout>