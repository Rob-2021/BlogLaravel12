<x-layouts.app>
    <flux:breadcrumbs class="mb-4">
            <flux:breadcrumbs.item :href="route('dashboard')">
                Dashboard
            </flux:breadcrumbs.item>

            <flux:breadcrumbs.item href="{{route('admin.posts.index')}}">
                Posts
            </flux:breadcrumbs.item>

            <flux:breadcrumbs.item>
                Nuevo
            </flux:breadcrumbs.item>
        </flux:breadcrumbs>

    <div class="card">
        <form action="{{route('admin.posts.store')}}" method="POST" class="space-y-4">
            
            @csrf
            <flux:input name="title" label="Titulo" value="{{old('title')}}" oninput="string_to_slug(this.value, '#slug')" placeholder="Escribe el titulo del post" class="mb-4"/>

            <flux:input name="slug" id="slug" label="Slug" value="{{old('slug')}}" placeholder="Escribe el slug del post" class="mb-4"/>

            <flux:select name="category_id" label="Categoria" value="{{old('category_id')}}" placeholder="Selecciona una categoria" class="mb-4">
                <flux:select.option value="">Selecciona una categoria</flux:select.option>
                @foreach ($categories as $category)
                    <flux:select.option value="{{$category->id}}">
                        {{$category->name}}
                    </flux:select.option>
                @endforeach
            </flux:select>

            <div class="flex justify-end">
                <flux:button variant="primary" type="submit">
                    Enviar
                </flux:button>
            </div>
        </form>
    </div>
    
</x-layouts.app>