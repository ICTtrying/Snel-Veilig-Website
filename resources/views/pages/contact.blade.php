@extends('layout.app')

@section('title', 'Contact')

@section('content')
    <div class="top-half-image position-relative">
        @php
            $cacheSuccess = \Illuminate\Support\Facades\Cache::has('contact_success_message_' . request()->ip());
        @endphp
        @if (session('success') || $cacheSuccess)
            @if (session('success') || $cacheSuccess)
                <div class="darkOverlay"></div>
                <div class="tekstContainerDarkOverlay">
                    <div class="alert alert-success d-flex flex-column justify-content-center align-items-center shadow-lg p-4 rounded-4"
                        style="min-height: 220px; font-size: 1.25rem; background: linear-gradient(135deg, #e0ffe7 0%, #b2f7c1 100%); border: 2.5px solid #28a745; box-shadow: 0 6px 32px rgba(40,167,69,0.18); max-width: 540px; margin: 0 auto;">
                        <div class="d-flex align-items-center mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="#28a745" class="me-3"
                                viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM7 11.414l5.207-5.207-1.414-1.414L7 8.586 5.207 6.793 3.793 8.207 7 11.414z" />
                            </svg>
                            <div>
                                <div class="fw-bold mb-1" style="color: #155724; font-size: 1.5rem;">Bedankt voor je
                                    bericht!</div>
                                <div style="color: #155724; font-size: 1.1rem;">We hebben je aanvraag goed ontvangen.</div>
                            </div>
                        </div>
                        <div class="text-center" style="color: #155724;">
                            <p class="mb-2">we nemen zo snel mogelijk contact met je op.<br>
                                Je ontvangt binnen 24 uur een reactie per e-mail of telefoon.</p>
                            <a href="tel:+31619666642" class="btn btn-outline-success btn-sm me-2"
                                style="font-weight: 500;">Bel ons</a>
                            <a href="mailto:info@rijschoolsnelenveilig.nl" class="btn btn-outline-success btn-sm"
                                style="font-weight: 500;">Mail ons</a>
                        </div>
                    </div>
                </div>
            @endif
        @else
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
        @endif

    </div>

    <section class="section2 bg-dark clamp-padding-section">
        <div class="row Scale-animate hidden justify-content-center gap-5">
            <div class="col-12 col-md-6 mb-4">
                <h2>Contactformulier</h2>
                <form action="{{ route('contact.send') }}" method="post"
                    class="bg-dark p-4 rounded-4 border border-secondary contact-formulier">
                    @csrf

                    @if ($errors->has('ThrottleError'))
                        <div class="alert alert-danger mb-3">
                            {{ $errors->first('ThrottleError') }}
                        </div>
                    @endif
                    <div class="form-group mb-3">
                        <label for="naam">Naam</label>
                        <input type="text" class="form-control" id="naam" name="naam" required
                            value="{{ old('naam') }}">
                        @error('naam')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" required
                            value="{{ old('email') }}">
                        @error('email')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="telefoon">Telefoonnummer <small>!optioneel</small></label>
                        <input type="tel" class="form-control" id="telefoon" name="telefoon"
                            value="{{ old('telefoon') }}">
                        @error('telefoon')
                            <div class="text-danger small mt-1">Geen geldig telefoonnummer formaat</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="bericht">Bericht <small>!optioneel</small></label>
                        <textarea class="form-control" id="bericht" name="bericht" rows="4">{{ old('bericht') }}</textarea>
                        @error('bericht')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
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
