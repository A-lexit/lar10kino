@extends('layouts/layout')

@section('content')
    <div class="container-arch flex-arch">

        <div class="archive-area section-archive">

            <div class="container-archive">


                @foreach($comments as $comment)
                    <h3>{{$comment->subject}}</h3>
                    <p>{{$comment->body}}</p>
                    <h3>{{$comment->film_id}}</h3>
                    <h3>{{$comment->film->title}}</h3>
                    <hr>
                @endforeach


                <div class="pagination-new">
                    {{--{{$comments->links()}}--}}
                    </nav>
                </div>

            </div>
        </div>

    </div>
@endsection

