<x-layouts.app>
    <flux:breadcrumbs class="mb-4">
            <flux:breadcrumbs.item :href="route('dashboard')">
                Dashboard
            </flux:breadcrumbs.item>

            <flux:breadcrumbs.item href="{{route('admin.tags.index')}}">
                Etiquetas
            </flux:breadcrumbs.item>

            <flux:breadcrumbs.item>
                Editar
            </flux:breadcrumbs.item>
        </flux:breadcrumbs>

        <div class="card">
            <form action="{{route('admin.tags.update', $tag)}}" method="POST">
                
                @csrf
                @method('PUT')


                <flux:input name="name" label="Nombre" value="{{old('name', $tag->name)}}" placeholder="Nombre de la etiqueta" class="mb-4"/>
    
                <div class="flex justify-end">
                    <flux:button variant="primary" type="submit">
                        Enviar
                    </flux:button>
                </div>
            </form>
        </div>
</x-layouts.app>