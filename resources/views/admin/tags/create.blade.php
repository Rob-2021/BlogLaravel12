<x-layouts.app>
    <flux:breadcrumbs class="mb-4">
            <flux:breadcrumbs.item :href="route('dashboard')">
                Dashboard
            </flux:breadcrumbs.item>

            <flux:breadcrumbs.item href="{{route('admin.tags.index')}}">
                Etiquetas
            </flux:breadcrumbs.item>

            <flux:breadcrumbs.item>
                Nuevo
            </flux:breadcrumbs.item>
        </flux:breadcrumbs>

    <div class="card">
        <form action="{{route('admin.tags.store')}}" method="POST">
            
            @csrf
            <flux:input name="name" label="Nombre" value="{{old('name')}}" placeholder="Nombre de la Etiqueta" class="mb-4"/>

            <div class="flex justify-end">
                <flux:button variant="primary" type="submit">
                    Enviar
                </flux:button>
            </div>
        </form>
    </div>

</x-layouts.app>