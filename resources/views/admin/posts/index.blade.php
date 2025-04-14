<x-layouts.app>

    <div class="mb-4 flex justify-between items-center">
        <flux:breadcrumbs>
            <flux:breadcrumbs.item :href="route('dashboard')">
                Dashboard
            </flux:breadcrumbs.item>

            <flux:breadcrumbs.item href="{{route('admin.posts.index')}}">
                Posts
            </flux:breadcrumbs.item>
        </flux:breadcrumbs>

        <a href="{{route('admin.posts.create')}}" class="btn btn-blue txt-xs">
            Nuevo
        </a>
    </div>

    {{-- tabla de flowbite - table tailwind --}}
    <div class="relative overflow-x-auto mb-4">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    {{-- <th scope="col" class="px-6 py-3" width="10px">
                        Slug
                    </th>
                    <th scope="col" class="px-6 py-3" width="10px">
                        Excerpt
                    </th>
                    <th scope="col" class="px-6 py-3" width="10px">
                        Content
                    </th>
                    <th scope="col" class="px-6 py-3" width="10px">
                        Image
                    </th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$post->id}}
                        </th>
                        <td class="px-6 py-4">
                            {{$post->title}}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex space-x-2">
                                <a href="{{route('admin.posts.edit', $post)}}" class="btn btn-blue text-xs">
                                    Editar
                                </a>

                                <form class="delete-form" action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                                    
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-red text-xs ml-2" type="submit">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    <div class="mt-4">
        {{$posts->links()}}
    </div>
        
    {{-- Alerta para confirmar la eliminacion de datos --}}
    @push('js')
        <script>
            forms = document.querySelectorAll('.delete-form');

            forms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    Swal.fire({
                        title: '¿Estás seguro?',
                        text: "No podrás revertir esto!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Sí, eliminar!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            this.submit();
                        }
                    })
                });
            });
        </script>
    @endpush

</x-layouts.app>