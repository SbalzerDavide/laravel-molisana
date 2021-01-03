@extends('layouts.main')

@section('content')

<div class="home">
    <div class="ricette">
        <div class="ricetta left">
            <div class="image">
                <img src="{{ asset('image/carbonara-carciofi-1.jpg') }}" alt="">
            </div>
            <div class="description">
                <h2>Pasta</h2>
                <h3>Spaghetti alla carbonara</h3>
                <button class="btn btn-primary">
                    <a href="#">Apri la ricetta</a>
                </button>
            </div>
            <div class="scopri scopri-primary">
                <a href="{{ route('ricette') }}">
                    Scopri tutte le ricette di "Chef in camicia per la Molisana"
                    <i class="far fa-hand-point-up"></i>
                </a>
            </div>
        </div>
        <div class="ricetta right">
            <div class="image">
                <img src="{{ asset('image/pasta-fresca.jpg') }}" alt="">
            </div>
            <div class="description">
                <h2>Semole</h2>
                <h3>Pasta di semola di grano duro fatta in casa</h3>
                <button class="btn btn-primary">
                    <a href="#">Apri la ricetta</a>
                </button>
            </div>
            <div class="scopri scopri-secondary">
                <a href="{{ route('ricette') }}">
                    Scopri tutte le ricette con le nostre semole
                    <i class="far fa-hand-point-up"></i>
                </a>
            </div>
        </div>
        <div class="logo-chef">
            <img src="{{ asset('image/logo-chef-camicia.png') }}" alt="">
        </div>
    </div>

    <div class="preview">
        <div class="first">
            <div class="big half" style="background-image: url({{ asset('image/box-home-nuove-forme-2020.jpg')}})">
                <div class="overlay">
                    <div class="plus">
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="text">
                        La Molisana. dove le nuove idee prendono nuove forme
                    </div>
                </div>
                <a href="#" class="overlay-ancor"></a>
            </div>
            <div class="small half">
                <div class="small-element" style="background-image: url({{ asset('image/box-home-sfarinati-2020.jpg') }})">
                    <div class="overlay">
                        <div class="plus">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="text">
                            In nostri 5 sfarinati decorticati a pietra
                        </div>
                    </div>
                    <a href="#" class="overlay-ancor"></a>
                    </div>
                <div class="small-element" style="background-image: url({{ asset('image/box-home-integrale-2020.jpg') }})">
                    <div class="overlay">
                        <div class="plus">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="text">
                            Nuovo intergrale: ricco di fibre e con più vitamine. Da oggi con grano 100% italiano
                        </div>
                    </div>
                    <a href="#" class="overlay-ancor"></a>
                    </div>
                <div class="small-element" style="background-image: url({{ asset('image/box-home-timeline-2020.jpg') }})">
                    <div class="overlay">
                        <div class="plus">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="text">
                            Cento anni di pasta La Molisana
                        </div>
                    </div>
                    <a href="#" class="overlay-ancor"></a>
                    </div>
                <div class="small-element" style="background-image: url({{ asset('image/box-home-tenacita-certificata.jpg') }})">
                    <div class="overlay">
                        <div class="plus">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="text">
                            Da oggi la nostra tenacità è certificata
                        </div>
                    </div>
                    <a href="#" class="overlay-ancor"></a>
                    </div>
            </div>
        </div>
        <div class="second">
            <div class="small half">
                <div class="small-element" style="background-image: url({{ asset('image/box-home-rossi-2020.jpg') }})">
                    <div class="overlay">
                        <div class="plus">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="text">
                            Perfetto per una pasta grande
                        </div>
                    </div>
                    <a href="#" class="overlay-ancor"></a>
                    </div>
                <div class="small-element" style="background-image: url({{ asset('image/montagna.jpg') }})">
                    <div class="overlay">
                        <div class="plus">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="text">
                            La nostra filiera integrata
                        </div>
                    </div>
                    <a href="#" class="overlay-ancor"></a>
                    </div>
                <div class="small-element" style="background-image: url({{ asset('image/box-home-comunicazione-2020.jpg') }})">
                    <div class="overlay">
                        <div class="plus">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="text">
                            La nostra comunicazione pubblicitaria
                        </div>
                    </div>
                    <a href="#" class="overlay-ancor"></a>
                    </div>
                <div class="small-element" style="background-image: url({{ asset('image/box-home-leonardo-2020.jpg') }})">
                    <div class="overlay">
                        <div class="plus">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="text">
                            Orgogliosi di affermmare la "Qualità Italia" nel mondo
                        </div>
                    </div>
                    <a href="#" class="overlay-ancor"></a>
                    </div>
            </div>
            <div class="big half" style="background-image: url({{ asset('image/box-home-grano-100-italiano.jpg') }})">
                <div class="overlay">
                    <div class="plus">
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="text">
                        La nostra pasta è 100% grano italiano. Scopri di più
                    </div>
                </div>
                <a href="#" class="overlay-ancor"></a>
            </div>
        </div>
        <div class="bottom">
            <h3>LA MOLISANA: PASTA E FARINE DI QUALITA'</h3>
        </div>
    </div>
</div>


@endsection