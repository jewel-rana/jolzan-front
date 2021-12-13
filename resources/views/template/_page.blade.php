@extends('layouts.main')
@section('content')

    <section class="section feature top-padding" id="feature">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>{{ $page->title }}</h2>
                        <p>{{ $page->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
