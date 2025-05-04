<x-app-layout>
    @foreach($plans as $key => $plan)
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4 w-64">
        <h3 class="p-6 text-gray-900">{{ $plan['name'] }}</h3>
        <p>Minimum: {{ $plan['minimum'] }}</p>
        <p>Maximum: {{ $plan['maximum'] }}</p>
        <p>ROI: {{ $plan['roi'] }}</p>
        <p>Duration: {{ $plan['duration'] }}</p>
        <a href="/invest/{{ strtolower($plan['name']) }}">
            <button class="bg-green-400 text-white p-2 rounded-none">Invest now</button>
        </a>
    </div>
    @endforeach
</x-app-layout>