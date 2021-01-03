@extends('layouts.main')

@section('content')

<div class="tenacita">
    <div class="top container">
        <div class="side">
            <h3>da oggi la nostra tenacità</h3>
            <h3 class="italic">è certificata</h3>
        </div>
        <div class="center">
            <img src="{{ asset('image/box-home-tenacita-certificata.jpg') }}" alt="">
        </div>
        <div class="side">
            <h3>scopri i nostri</h3>
            <h3 class="italic">formati certificati</h3>
        </div>
    </div>
    <div class="certificazione container">
        <img src="{{ asset('image/banner-certificazione-new.png') }}" alt="">
        <p>
            Da oggi lo certifichiamo: la nostra pasta è tenace, compatta in tutte le sue parti, elastica in masticazione e capace di mantenere intatte forma e consistenza anche sotto stress (prove dopo cottura di elasticità e resistenza al taglio). Caratteristiche che abbiamo volontariamente deciso di attestare, attraverso DNVGL - Business Assurance, uno dei principali enti di certificazione internazionali. A tale scopo è stato definito uno specifico documento tecnico che descrive la composizione e le caratteristiche qualitative dei prodotti sottoposti a test (caratteristiche della semola, alcune tecnologie di produzione e prove post cottura della pasta).
            Un percorso avviato 2 anni fa che ha coinvolto tutte le figure cruciali della filiera produttiva con l’obiettivo di standardizzare i processi e garantire non solo i costanti target qualitativi prefissati ma anche lo spirito tenace che caratterizza il nostro temperamento e la nostra pasta!</p>
    </div>
    
</div>


@endsection