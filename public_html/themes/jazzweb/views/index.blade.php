@extends('views.master')

@section('content')

    <h1>Home</h1>

    @while(have_posts())

        @php(the_post())
        <article>
            @php(jazzy()->post()->title('h2', true))
            <p>{!! get_the_content() !!}</p>
        </article>

    @endwhile

@endsection