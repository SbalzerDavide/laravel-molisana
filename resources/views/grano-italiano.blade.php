@extends('layouts.main')

@section('content')
<div class="grano">
    <div class="hero" ref="hero">
        <h2>italiana dal grano alla pasta</h2>
        <div class="go-down" @click="goDown">
            <div class="point"></div>
        </div>
    </div>
    <section class="one">
        <div class="container">
            <img src="https://www.lamolisana.it/wp-content/uploads/2018/07/grano-italiano.jpg" alt="">
            <h3>perché scriviamo</h3>
            <h2>solo grano italiano?</h2>
            <h4>Nel cuore dell'Italia coltiviamo i nostri grani</h4>
            <div class="par">
                <p>
                    Perché dopo anni di ricerca siamo fieri di annunciare che La Molisana è a scaffale con una pasta di solo grano italiano: il risultato di un percorso virtuoso di agricoltura sostenibile che valorizza le colture locali a parametri qualitativi e tecnologici altissimi.
                </p>
                <p>
                    <span>Grazie alla ricerca scientifica</span>, condotta con un pool di agronomi, abbiamo selezionato i semi italiani che restituiscono un grano duro alto-proteico, di eccezionale tenacità ed elasticità, di cui necessita una pasta premium come la nostra.</p>
            </div>

        </div>
    </section>

    
</div>


@endsection