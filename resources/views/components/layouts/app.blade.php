<x-layouts.app.sidebar :title="$title ?? null">
    <flux:main>
        {{ $slot }}
    </flux:main>

    @stack('js')

    {{-- Alerta --}}
    @if (session('swal'))
        <script>
            Swal.fire(@json(session('swal')));
        </script>  
    @endif

</x-layouts.app.sidebar>
