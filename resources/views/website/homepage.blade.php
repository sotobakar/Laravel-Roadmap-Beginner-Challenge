@extends('layouts.website.app')

@section('content')
<div class="bg-gray-50">
  <div class="px-4 md:px-6 lg:px-12 py-4">
    <div class="mt-4 grid grid-cols-12 gap-x-6">
      <div class="col-span-3 flex flex-col gap-y-4">
        <div class="flex flex-col">
          <img class="h-40 w-full object-cover" src="{{ asset('storage/images/articles/' . $articles[0]->image )}}"
            alt="Photo 1">
          <p class="mt-2 text-gray-500 text-sm font-semibold">{{ $articles[0]->category->name }}</p>
          <a href="{{ route('website.article' , ['article' => $articles[0]->id])}}"
            class="text-gray-900 text-md font-semibold">{{ $articles[0]->title }}</a>
          <p class="text-gray-400 text-sm">{{ Str::limit($articles[0]->content,50) }}</p>
        </div>
        <div class="flex flex-col">
          <img class="h-40 w-full object-cover" src="{{ asset('storage/images/articles/' . $articles[1]->image )}}"
            alt="Photo 2">
          <p class="mt-2 text-gray-500 text-sm font-semibold">{{ $articles[1]->category->name }}</p>
          <a href="{{ route('website.article' , ['article' => $articles[1]->id])}}"
            class="text-gray-900 text-md font-semibold">{{ Str::limit($articles[1]->title, 60) }}</a>
          <p class="text-gray-400 text-sm">{{ Str::limit($articles[1]->content,50) }}</p>
        </div>
      </div>
      <div class="col-span-6 flex flex-col">
        <div class="h-4/5 w-full"
          style="background-image: url({{ asset('storage/images/articles/' . $articles[2]->image )}})">
        </div>
        <div class="h-1/5 text-center flex flex-col justify-center">
          <a href="{{ route('website.article' , ['article' => $articles[2]->id])}}"
            class="text-gray-900 text-lg font-semibold">{{ Str::limit($articles[2]->title, 60) }}</a>
          <p class="text-gray-400 text-md">{{ Str::limit($articles[2]->content,150) }}</p>
        </div>
      </div>
      <div class="col-span-3 flex flex-col">
        <div class="h-1/4 flex flex-col">
          <p class="mt-2 text-gray-500 text-sm font-semibold">{{ $articles[3]->category->name }}</p>
          <a href="{{ route('website.article' , ['article' => $articles[3]->id])}}"
            class="text-gray-900 text-md font-semibold">{{ $articles[3]->title }}</a>
          <p class="text-gray-400 text-sm">{{ Str::limit($articles[3]->content,50) }}</p>
        </div>
        <div class="h-1/4 flex flex-col">
          <p class="mt-2 text-gray-500 text-sm font-semibold">{{ $articles[4]->category->name }}</p>
          <a href="{{ route('website.article' , ['article' => $articles[4]->id])}}"
            class="text-gray-900 text-md font-semibold">{{ Str::limit($articles[4]->title, 60) }}</a>
          <p class="text-gray-400 text-sm">{{ Str::limit($articles[4]->content,50) }}</p>
        </div>
        <div class="h-1/4 flex flex-col">
          <p class="mt-2 text-gray-500 text-sm font-semibold">{{ $articles[5]->category->name }}</p>
          <a href="{{ route('website.article' , ['article' => $articles[5]->id])}}"
            class="text-gray-900 text-md font-semibold">{{ Str::limit($articles[5]->title, 60) }}</a>
          <p class="text-gray-400 text-sm">{{ Str::limit($articles[5]->content,50) }}</p>
        </div>
        <div class="h-1/4 flex flex-col">
          <p class="mt-2 text-gray-500 text-sm font-semibold">{{ $articles[6]->category->name }}</p>
          <a href="{{ route('website.article' , ['article' => $articles[6]->id])}}"
            class="text-gray-900 text-md font-semibold">{{ Str::limit($articles[6]->title, 60) }}</a>
          <p class="text-gray-400 text-sm">{{ Str::limit($articles[6]->content,50) }}</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection