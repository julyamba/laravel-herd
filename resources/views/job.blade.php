<x-layout>
    <x-slot:heading>Job</x-slot:heading>

    <p class="text-lg font-bold">{{ $job['title'] }}</p>
    <p class="text-gray-500 text-md italic">Salary : {{ $job['salary'] }} per year</p>
    
</x-layout>