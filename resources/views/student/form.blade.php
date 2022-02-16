@extends('layouts.app')
@section('content')
    
    <div id="app">
       <student-form_component scope="{{ $scope }}" :id="{{ $id ?? 0 }">

       </student-form_component>
    </div>
@endsection()