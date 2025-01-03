<x-app-layout>
    @section('title', 'Dashboard')
    @section('page-title')
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold flex-column justify-content-center my-0 text-3xl">
                @if (Auth::user()->hasRole('User'))
                Selamat Datang、 {{ auth()->user()->name }}
                @else
                Selamat Datang, Admin
                @endif
            </h1>
        </div>
    @endsection
</x-app-layout>
