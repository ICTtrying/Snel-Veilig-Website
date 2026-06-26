@extends('layout.app')

@section('title', 'Over mij')

@section('content')
    <div
        style="position: fixed; top: 0; left: 0; width: 100%; height: 100vh; z-index: 0; pointer-events: none; overflow: hidden;">
        <svg width="100%" height="100%" viewBox="0 0 1920 1080" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
            style="width: 100%; height:100vh;">
            <defs>
                <linearGradient id="bg-gradient" x1="0" y1="0" x2="1" y2="1">
                    <stop offset="0%" stop-color="#0d1b2a" />
                    <stop offset="100%" stop-color="#274472" />
                </linearGradient>
                <radialGradient id="radial1" cx="80%" cy="10%" r="80%">
                    <stop offset="0%" stop-color="#00b4d8" stop-opacity="0.25" />
                    <stop offset="100%" stop-color="#0d1b2a" stop-opacity="0" />
                </radialGradient>
                <radialGradient id="radial2" cx="20%" cy="80%" r="70%">
                    <stop offset="0%" stop-color="#90e0ef" stop-opacity="0.18" />
                    <stop offset="100%" stop-color="#0d1b2a" stop-opacity="0" />
                </radialGradient>
            </defs>
            <rect width="1920" height="1080" fill="url(#bg-gradient)" />
            <ellipse cx="1700" cy="200" rx="600" ry="300" fill="url(#radial1)" />
            <ellipse cx="400" cy="900" rx="500" ry="250" fill="url(#radial2)" />
            <path d="M0,900 Q600,800 1200,1000 T1920,900 L1920,1080 L0,1080 Z" fill="#1b263b" fill-opacity="0.18" />
            <path d="M0,200 Q800,100 1920,300 L1920,0 L0,0 Z" fill="#1b263b" fill-opacity="0.12" />
        </svg>
    </div>

    <section class="section2 clamp-padding-section">
        <h2>Meer over Snel & Veilig!</h2>
        <hr class="mb-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <p>
                    Rijschool Snel & Veilig: persoonlijke rijlessen, ervaren instructeur en snel je rijbewijs halen met vertrouwen.
                </p>
                <p>
                    <b>Locaties:</b> <span style="color: rgb(96, 184, 255);">Amsterdam, Amstelveen, Haarlem, Hoofddorp</span>
                </p>
                <p>
                    vragen? Bel naar: <a href="tel:+31619666642"
                        style="white-space: nowrap; color: rgb(0, 140, 255); text-decoration: none;"><b>+31 6
                            19666642</b></a>
                    <br>
                    <span>Of email naar: <a href="mailto:info@rijschoolsnelenveilig.nl"
                            style="color: rgb(0, 140, 255); text-decoration: none;">info@rijschoolsnelenveilig.nl</a></span>
                </p>
                <a href="{{ route('pakketten.index') }}" class="linkButton" role="button">Zie pakketten</a>
            </div>
            <div class="col-6">
                <img class="clamp-img hide-when-small rounded-4" src="{{ asset('images/girl-looking-in-car.jpeg') }}"
                    alt="foto van rijdende leerling">
            </div>
        </div>
    </section>


    <section class="section2 bg-dark clamp-padding-section">
        <div class="Scale-animate hidden">
            <h2>Lessen in het examengebied!</h2>
            <small class="mt-3">Over Snel & Veilig</small>
            <hr>
            <br>
            <p>
                Bij Rijschool Snel & Veilig rijd je meteen op de routes van je praktijkexamen. <br> Zo raak je vertrouwd met de echte examenwegen en weet je precies wat je kunt verwachten. <br> Dit is veel effectiever dan bij andere rijscholen. Daar word je vaak alleen opgehaald en rijd je niet op de examenroutes. Zo ben je optimaal voorbereid en vergroot je kans om in één keer te slagen!
            </p>

            <p>
                Rijlessen met plezier en vertrouwen! <br> Neem contact op voor meer informatie of een proefles.<br>
            </p>


            <a href="{{ route('pakketten.index') }}" class="linkButton" role="button">Zie pakketten</a>
        </div>
    </section>

    <section class="section2 bg-dark overflow-hidden clamp-padding-section">
        <div class="container-fluid px-0">
            <h2 class="text-center">Wat klanten over mij denken:</h2>

            <script src="https://widget.trustmary.com/YIhAeRsMQ"></script>

        </div>
    </section>
@endsection
