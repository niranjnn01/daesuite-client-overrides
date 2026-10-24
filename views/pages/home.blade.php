@extends('layouts.guest')

@section('content')


    
    @isset($pages['home']['highlights'])
    <x-system::layout.container class="mb-10">

        <div class="flex justify-center gap-3">

            @foreach($pages['home']['highlights']->items AS $item)
                <x-system::cards.media-icon class="flex-1" 
                    :title="$item->title" 
                    :description="$item->description" 
                    :icon="$item->media"/>
            @endforeach
        </div>    

    </x-system::layout.container>
    @endisset

@endsection