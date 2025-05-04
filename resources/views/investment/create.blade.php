<x-app-layout>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4 w-96">
        @if (session('error'))
            <p>{{ session('error') }}</p>
        @endif

        @if (session('message'))
            <p>{{ session('message') }}</p>
        @endif
        <p>Confirm to invest on {{ ucfirst(request('plan')) }} Plan</p>
        <form action="/invest/{{ request('plan') }}" method="post">
            @csrf
            <input type="text" name="amount">
            <input name="plan" value="{{ ucfirst(request('plan')) }}" hidden>
            <select name="payment_method">
                <option value="Bitcoin">Bitcoin</option>
                <option value="Ethereum">Ethereum</option>
            </select>

            <input type="submit" value="Submit">
        </form>
    </div>
</x-app-layout>