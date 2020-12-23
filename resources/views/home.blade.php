{{-- layout --}}
@extends('layouts.main')

@section('content')

{{-- le lunghe --}}
@include('partials.cards',['cards'=> $lunghe, 'title' => 'LE LUNGHE'])

{{-- le corte --}}
@include('partials.cards',['cards'=> $corte, 'title' => 'LE CORTE'])

{{-- le cortissime --}}
@include('partials.cards',['cards'=> $cortissime, 'title' => 'LE CORTISSIME'])
    
@endsection

