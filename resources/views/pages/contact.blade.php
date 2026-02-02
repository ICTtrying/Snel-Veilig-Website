@extends('layout.app')

@section('title', 'Snel & veilig')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="top-half-image position-relative">
        <div class="darkOverlay"></div>
        <div class="tekstContainerDarkOverlay">
            <h1 style="color: #f8f9fa;">Contact</h1>
            <p style="font-size: 1.1rem; color: #f8f9fa; margin-top: 10px;">
                Neem contact op voor een gratis proefles of meer informatie.<br>
                Wij reageren snel op je aanvraag!
            </p>
            <p>
                <b>Bel:</b> <a href="tel:+31619666642"
                    style="white-space: nowrap; color: rgb(0, 140, 255); text-decoration: none;"><b>+31 6
                        19666642</b></a><br>
                <b>of mail:</b> <a href="mailto:info@rijschoolsnelenveilig.nl"
                    style="color: rgb(0, 140, 255); text-decoration: none;">info@rijschoolsnelenveilig.nl</a>
            </p>
        </div>
    </div>

    <section class="section2 bg-dark clamp-padding-section">
        <div class="row Scale-animate hidden justify-content-center gap-5">
            <div class="col-12 col-md-6 mb-4">
                <h2>Contactformulier</h2>
                <form action="{{ route('contact.send') }}" method="post"
                    class="bg-dark p-4 rounded-4 border border-secondary contact-formulier">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="naam">Naam</label>
                        <input type="text" class="form-control" id="naam" name="naam" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="telefoon">Telefoonnummer <small>!optioneel</small></label>
                        <input type="tel" class="form-control" id="telefoon" name="telefoon">
                    </div>
                    <div class="form-group mb-3">
                        <label for="bericht">Bericht <small>!optioneel</small></label>
                        <textarea class="form-control" id="bericht" name="bericht" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="linkButton mt-3">Verzenden <svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                            <path
                                d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z" />
                        </svg></button>
                </form>
            </div>
            <div class="col-12 col-md-5 d-flex flex-column justify-content-center align-items-start mt-4 mt-md-0">

                <div class="proeflesInfo-contact">
                    <h2 class="mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="red"
                            class="bi bi-exclamation-lg" viewBox="0 0 16 16">
                            <path
                                d="M7.005 3.1a1 1 0 1 1 1.99 0l-.388 6.35a.61.61 0 0 1-1.214 0zM7 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0" />
                        </svg>Proefles?</h2>
                    <hr>
                    <p class="bold">
                        <span style="font-size:1.15rem; color:#ffeb3b;">Probeer ons uit voor maar &euro;50,-!</span><br>
                        <span style="font-size:1rem; color:#f8f9fa;">Ben je enthousiast en wil je doorgaan? Dan krijg je
                            dit bedrag gewoon terug als korting op je pakket!</span><br>
                        <span style="font-size:0.95rem; color:#00bcd4;">Zo wordt starten extra leuk en voordelig!</span>
                    </p>
                </div>
                <hr class="w-100">
                <h3 class="bold">Contactgegevens</h3>
                <p>
                    <b>Rijschool Snel & Veilig</b><br>
                    Amsterdam, Amstelveen, Hoofddorp, Nieuw-Vennep, Haarlem, Zandvoort<br>
                    <br>
                    <b>Telefoon:</b> <a href="tel:+31619666642" style="color: rgb(0, 140, 255); text-decoration: none;">+31
                        6 19666642</a><br>
                    <b>E-mail:</b> <a href="mailto:info@rijschoolsnelenveilig.nl"
                        style="color: rgb(0, 140, 255); text-decoration: none;">info@rijschoolsnelenveilig.nl</a>
                </p>
            </div>
        </div>
    </section>
@endsection
