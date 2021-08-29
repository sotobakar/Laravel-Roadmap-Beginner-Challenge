<x-app-layout>
  <x-slot name="header">
    <div class="flex flex-row items-baseline">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Tags') }}
      </h2>
      <a href="{{ route('tags.create') }}" class="font-medium text-sm ml-4 text-indigo-600 uppercase">Add
        Tag</a>
    </div>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      {{ $tags->links() }}
      <div class="mt-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Name
                  </th>
                  <th scope="col" class="relative px-6 py-3 w-20">
                    <span class="sr-only">Edit</span>
                  </th>
                  <th scope="col" class="relative px-6 py-3 w-20">
                    <span class="sr-only">Delete</span>
                  </th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($tags as $tag)
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{ $tag->name }}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="{{ route('tags.edit', [ 'tag' => $tag->id ])}}"
                      class="text-indigo-600 hover:text-indigo-900">Edit</a>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <form action="{{ route('tags.destroy', ['tag' => $tag->id])}}"
                      onsubmit="return confirm('Are you sure?');" method="post">
                      @csrf
                      @method('DELETE')
                      <x-button class="bg-red-600 hover:bg-red-800 text-gray-100">Delete</x-button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>