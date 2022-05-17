@extends('base')

@section('content')
    
<div class="applications">
    <div class="applications__filter">
        @include('includes.applications-filter')
    </div>
    

    @include('includes.applications-list')

   @include('includes.applications-form')
    
</div>

<div class="admin">
    @include('includes.admin-info')
</div>

@endsection