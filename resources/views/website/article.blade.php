@extends('layouts.website.app')

@section('content')
<div class="bg-gray-50">
  <div class="px-4 md:px-6 lg:px-12 pt-8 flex flex-row items-center text-lg font-sans gap-x-4">
    <p>Article</p>
    <img class="h-5" src="{{ asset('icons/chevron-right.svg') }}" alt="Next">
    <p>{{ $article->category->name }}</p>
    <img class="h-5" src="{{ asset('icons/chevron-right.svg') }}" alt="Next">
    <p class="font-bold">{{ $article->title }}</p>
  </div>
  <div class="article py-8 max-w-screen-lg mx-auto">
    <p class="text-center text-gray-500 font-bold">{{ $article->date }}</p>
    <h1 class="mt-4 text-center font-semibold text-3xl">{{ $article->title }}</h1>
    <div class="my-4 flex flex-row gap-x-4 justify-center">
      @foreach ($article->tags as $tag)
      <span class="p-2 bg-gray-200 font-bold text-sm">{{ $tag->name }}</span>
      @endforeach
    </div>
    <img class="w-full h-96 object-cover" src="{{ asset('storage/images/articles/' . $article->image) }}" alt="Image">
    <p class="mt-4 text-lg text-justify">{!! nl2br($article->content) !!}</p>
  </div>
</div>
@endsection