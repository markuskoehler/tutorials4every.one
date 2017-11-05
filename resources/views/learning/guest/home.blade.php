@extends('layouts.learning')

@section('content')

@component('learning._components.parallax_cover_full')
@endcomponent

@component('learning._components.features')
@endcomponent

@component('learning._components.featured_courses')
@endcomponent

@component('learning._components.feedback')
@endcomponent

@include('learning._parts.footer')
@endsection