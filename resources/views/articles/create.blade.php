<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Create Article') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      @if ($errors->any())
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
      @endif
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <form class="flex flex-col gap-y-4" method="POST" action="{{ route('articles.store') }}"
            enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <div>
              <x-label for="title" :value="__('Title')" />

              <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required
                autofocus />
            </div>

            <!-- Image -->
            <div>
              <x-label for="image" :value="__('Image (Optional) *Max. File Size 2000Kb')" />

              <x-input id="image" class="block mt-1 rounded-l-none" type="file" name="image" :value="old('image')"
                autofocus />
            </div>

            <!-- Category -->
            <div>
              <x-label for="category" :value="__('Category')" />

              <select
                class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                name="category_id" id="category_id">
                @foreach ($categories as $category)
                <option value={{ $category->id }}>{{ $category->name }}</option>
                @endforeach
              </select>
            </div>

            <!-- Tags -->
            <div>
              <x-label for="tags" :value="__('Tags')" />

              <x-input id="tags" class="block mt-1 w-full" type="text" name="tags" :value="old('tags')" required
                autofocus />
            </div>

            <!-- Content -->
            <div>
              <x-label for="content" :value="__('Content')" />

              <textarea
                class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                name="content" id="content" cols="30" rows="10"></textarea>
            </div>

            <div class="flex items-center justify-end mt-4">
              <x-button class="ml-4">
                {{ __('Submit') }}
              </x-button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>