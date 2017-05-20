@extends('_layouts.master')

@section('body')
        
    @foreach($posts as $post)

        <article>
            <div class="level">
                <div class="level-left">
                    <div class="level-item">
                        <h1 class="title is-3  is-spaced"><a href="{{ $post->getPath() }}">{{ $post->title }}</a></h1>        
                    </div>
                </div>
                <div class="level-right">
                    <div class="level-item">
                        <p class="subtitle is-5">
                            {{ date('F j, Y', $post->date) }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="level content"><p>{{ $post->excerpt() }}</p></div>
        </article>

    @endforeach

@stop