@extends('layouts.app')

@section('template_title')
    {{ $option->name ?? "{{ __('Show') Option" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Option</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('options.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Option:</strong>
                            {{ $option->option }}
                        </div>
                        <div class="form-group">
                            <strong>Category Id:</strong>
                            {{ $option->category_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
