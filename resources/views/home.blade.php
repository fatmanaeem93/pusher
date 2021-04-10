@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    {{ __('You are logged in!') }}--}}

{{--                    @if(isset($posts) && $posts -> count() > 0)--}}
{{--                        @foreach($posts as $post)--}}
{{--                            <div class="card-body">--}}
{{--                                @if (session('status'))--}}
{{--                                    <div class="alert alert-success" role="alert">--}}
{{--                                        {{ session('status') }}--}}
{{--                                    </div>--}}
{{--                                @endif--}}
{{--                                <h1> {{$post -> title}} - @if(Auth::id() == $post -> user -> id)   المالك @endif</h1>--}}
{{--                                <br>--}}
{{--                                {{$post -> content}}--}}

{{--                                <br>--}}
{{--                                <br>--}}
{{--                                <form method="POST" action="{{route('comment.save')}}" enctype="multipart/form-data">--}}
{{--                                    @csrf--}}

{{--                                    <input type="hidden" name="post_id" value="{{$post -> id}}">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="text" class="form-control" name="post_content">--}}
{{--                                        @error('name_ar')--}}
{{--                                        <small class="form-text text-danger">{{$message}}</small>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}


{{--                                    @if(Auth::id() != $post -> user -> id)--}}
{{--                                        <button type="submit" class="btn btn-primary">أضافه ردك</button>--}}
{{--                                    @endif--}}
{{--                                </form>--}}


{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    @endif--}}

                                        <form action="{{route('posts.store')}}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="title" class="col-md-4 control-label">Enter title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" autofocus>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="details" class="col-md-4 control-label">Enter number</label>

                            <div class="col-md-6">
                                <input id="details" type="text" class="form-control" name="details" value="{{ old('details') }}" autofocus>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    submit
                                </button>
                            </div>
                        </div>
                        <div class="notification">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
