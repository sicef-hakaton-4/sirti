<!-- Stored in resources/views/child.blade.php -->
@extends('layouts.cat_i_ad')
@section('title', 'Kontakt')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Kontakt</div>
        <div class="panel-body">
            @include('flash::message')
            <form class="form-horizontal" action="{{route('kontakt2')}}" method="post" class="form-control">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>


                    </div>
                </div>

                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                    <label for="telephone" class="col-md-4 control-label">Phone</label>

                    <div class="col-md-6">
                        <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>



                    </div>
                </div>



                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>


                    </div>
                </div>
                <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                    <label for="subject" class="col-md-4 control-label">Subject</label>

                    <div class="col-md-6">
                        <input id="subject" type="text" class="form-control" name="subject" value="{{ old('subject') }}" required autofocus>


                    </div>
                </div>
                <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                    <label for="message" class="col-md-4 control-label">Message</label>

                    <div class="col-md-6">
                        <textarea id="message" type="text" class="form-control" name="message" value="{{ old('message') }}" required autofocus>
                        </textarea>


                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Send
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection