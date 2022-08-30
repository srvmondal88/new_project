@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as : ') }} {{ Auth::user()->name }}
                </div>
            </div>
        </div>


          @if(Auth::user()->is_admin == 1)

             <a href="{{route('list')}}">Questions</a>
          @else
             <a href="{{route('cus.planlist')}}">Plans</a>

          @endif
    </div>
</div>
@endsection
