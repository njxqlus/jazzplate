@extends('views.layouts.default')
@section('content')

    <div <?php jazzweb()->post()->classANDid(); ?>>
        <?php jazzweb()->post()->title('h1'); ?>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    </div>

@endsection
