@extends('layout.app')

@section('title', 'Snel & veilig')

@section('content')
    <!--Section 1 -->
    <section class="section1 position-relative">
        <div class="darkOverlay"></div>

        <div class="tekstContainerDarkOverlay text-center">
            <h1 class="fw-bolder">Snel & Veilig</h1>
            <p class="mb-1" style="font-size:1.1rem;">Jouw weg naar je rijbewijs begint hier! Persoonlijke begeleiding,
                scherpe prijzen en snel resultaat.</p>
            <p class="mb-3" style="font-size:1.1rem;">Begin nu met je gratis proefles!</p>

            <a href="{{ route('contact.index') }}" class="linkButton" role="button">Gratis proefles!</a>

            <div class="mt-4">
                <p class="mb-0">vragen? Bel naar:
                    <a href="tel:+31619666642" style="white-space:nowrap; color: rgb(0,140,255); text-decoration:none;">
                        <strong>+31 6 19666642</strong>
                    </a>
                </p>
                <p class="mb-0">of email naar:
                    <a href="mailto:info@rijschoolsnelenveilig.nl" style="color: rgb(0,140,255); text-decoration:none;">
                        info@rijschoolsnelenveilig.nl
                    </a>
                </p>
            </div>
        </div>
    </section>

    <!-- proefles bar -->
    <div class="gratis-proefles-balk bg-info d-flex text-center justify-content-between flex-column align-items-center px-4 py-3 rounded"
        style="font-size: 1.2rem;">
        <div class="d-flex align-items-center">
            <svg class="me-3" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#fff"
                class="bi bi-star-fill mr-3" viewBox="0 0 16 16">
                <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
            </svg>
            <span class="fw-bold text-nowrap" style="font-size: clamp(1.3rem, 8vw, 2rem); color: #fff;">Gratis
                proefles!</span>
        </div>
        <span class="ml-3" style="color: #fff; font-size: 1.1rem;">Blijf je bij Snel & Veilig? Dan is je proefles helemaal gratis!
            🎉</span>
        <a href="{{ route('contact.index') }}" class="linkButton" style="margin-left: 20px;">Probeer nu!</a>
    </div>

    <section class="section2 pb-5 pt-5 bg-dark">
        <div class="container slide-left-animate hidden">
            <h2>Leren op examenwegen!</h2>
            <small class="mt-5">Over Snel & Veilig</small>
            <hr>
            <br>
            <div class="row">
                <div class="col-12 col-md-6">
                    <p>
                        Bij Rijschool Snel & Veilig leer je autorijden op jouw eigen tempo, met persoonlijke begeleiding van een enthousiaste en ervaren instructeur. Je leert niet alleen de verkeersregels, maar zit ook vol vertrouwen achter het stuur.
                    </p>
                    <p>
                        Tijdens de lessen rijden we samen op de echte examenroutes, zodat jij
                        precies weet wat je kunt verwachten en zonder stress je praktijkexamen ingaat. Zo zorg ik
                        ervoor
                        dat jij vlekkeloos je rijbewijs haalt!
                    </p>

                    <p>
                        <b>Locaties:</b> <span style="color: rgb(96, 184, 255);">Amsterdam, Amstelveen, Haarlem, Hoofddorp</span>
                    </p>

                    <p>
                        Vragen? Bel naar: <a href="tel:+31619666642"
                            style="white-space: nowrap; color: rgb(0, 140, 255); text-decoration: none;"><b>+31 6
                                19666642</b></a>
                        <br>
                        <span>Of email naar: <a href="mailto:info@rijschoolsnelenveilig.nl"
                                style="color: rgb(0, 140, 255); text-decoration: none;">info@rijschoolsnelenveilig.nl</a></span>
                    </p>

                    <a href="{{ route('pakketten.index') }}" class="linkButton" role="button">Zie pakketten</a>
                </div>
                <div class="col-6 section2-img-home">
                    <img class="rounded-4 clamp-img hide-when-small" src="images/driving.jpg"
                        alt="foto van rijdende leerling">
                </div>
            </div>
        </div>
    </section>

    <section class="section3">
        <h2 class="font-weight-bold">Les pakketten</h2>
        <hr class="mb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 mb-4 p-4 card-pakket bg-dark card-animate hidden">
                <div class="d-flex justify-content-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor"
                        class="bi bi-car-front" viewBox="0 0 16 16">
                        <path
                            d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0m10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17s2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276" />
                        <path
                            d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.8.8 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155s4.037-.084 5.592-.155A1.48 1.48 0 0 0 15 9.611v-.413q0-.148-.03-.294l-.335-1.68a.8.8 0 0 0-.43-.563 1.8 1.8 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3z" />
                    </svg>
                </div>
                <path
                    d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0m10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17s2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276" />
                <path
                    d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.8.8 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155s4.037-.084 5.592-.155A1.48 1.48 0 0 0 15 9.611v-.413q0-.148-.03-.294l-.335-1.68a.8.8 0 0 0-.43-.563 1.8 1.8 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3z" />
                </svg>
                <h2 class="font-weight-bolder">Spoedpakket</h2>
                <h2 class="card-price font-weight-bolder">&euro;2.400</h2>
                <hr>
                <p class="mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="gold"
                        class="bi bi-currency-euro" viewBox="0 0 16 16">
                        <path
                            d="M4 9.42h1.063C5.4 12.323 7.317 14 10.34 14c.622 0 1.167-.068 1.659-.185v-1.3c-.484.119-1.045.17-1.659.17-2.1 0-3.455-1.198-3.775-3.264h4.017v-.928H6.497v-.936q-.002-.165.008-.329h4.078v-.927H6.618c.388-1.898 1.719-2.985 3.723-2.985.614 0 1.175.05 1.659.177V2.194A6.6 6.6 0 0 0 10.341 2c-2.928 0-4.82 1.569-5.244 4.3H4v.928h1.01v1.265H4v.928z" />
                    </svg>
                    <span>70,- per uur</span>
                </p>
                <p class="mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#90ee90"
                        class="bi bi-check-lg" viewBox="0 0 16 16">
                        <path
                            d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                    </svg>
                    <span>15 lessen</span>
                </p>
                <p class="mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#90ee90"
                        class="bi bi-check-lg" viewBox="0 0 16 16">
                        <path
                            d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                    </svg>
                    <span>120 minuten per les</span>
                </p>
                <p class="mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#90ee90"
                        class="bi bi-check-lg" viewBox="0 0 16 16">
                        <path
                            d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                    </svg>
                    <span>incl. CBR praktijkexamen €300</span>
                </p>

                <p class="mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gold"
                        class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                    <span>Gratis proefles</span>
                </p>

                <div class="d-flex justify-content-center mt-5 mb-3">
                    <a href="{{ route('contact.index') }}" class="linkButton">Afspraak plannen</a>
                </div>
            </div>

            <div class="col-12 card-pakket-gold bg-dark rounded col-md-6 col-lg-4 mb-4 p-4 card-animate2 hidden">
                <div class="d-flex justify-content-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="gold"
                        class="bi bi-car-front" viewBox="0 0 16 16">
                        <path
                            d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0m10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17s2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276" />
                        <path
                            d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.8.8 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155s4.037-.084 5.592-.155A1.48 1.48 0 0 0 15 9.611v-.413q0-.148-.03-.294l-.335-1.68a.8.8 0 0 0-.43-.563 1.8 1.8 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3z" />
                    </svg>
                </div>
                <path
                    d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0m10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17s2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276" />
                <path
                    d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.8.8 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155s4.037-.084 5.592-.155A1.48 1.48 0 0 0 15 9.611v-.413q0-.148-.03-.294l-.335-1.68a.8.8 0 0 0-.43-.563 1.8 1.8 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3z" />
                </svg>
                <h2 class="font-weight-bolder">Standaardpakket</h2>
                <h2 class="card-price font-weight-bolder">&euro;3.100</h2>
                <hr>
                <p class="mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="gold"
                        class="bi bi-currency-euro" viewBox="0 0 16 16">
                        <path
                            d="M4 9.42h1.063C5.4 12.323 7.317 14 10.34 14c.622 0 1.167-.068 1.659-.185v-1.3c-.484.119-1.045.17-1.659.17-2.1 0-3.455-1.198-3.775-3.264h4.017v-.928H6.497v-.936q-.002-.165.008-.329h4.078v-.927H6.618c.388-1.898 1.719-2.985 3.723-2.985.614 0 1.175.05 1.659.177V2.194A6.6 6.6 0 0 0 10.341 2c-2.928 0-4.82 1.569-5.244 4.3H4v.928h1.01v1.265H4v.928z" />
                    </svg>
                    <span>70,- per uur</span>
                </p>
                <p class="mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#90ee90"
                        class="bi bi-check-lg" viewBox="0 0 16 16">
                        <path
                            d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                    </svg>
                    <span>20 lessen</span>
                </p>
                <p class="mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#90ee90"
                        class="bi bi-check-lg" viewBox="0 0 16 16">
                        <path
                            d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                    </svg>
                    <span>120 minuten per les</span>
                </p>
                <p class="mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#90ee90"
                        class="bi bi-check-lg" viewBox="0 0 16 16">
                        <path
                            d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                    </svg>
                    <span>incl. CBR praktijkexamen €300</span>
                </p>

                <p class="mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gold"
                        class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                    <span>Gratis proefles</span>
                </p>

                <div class="d-flex justify-content-center mt-5 mb-3">
                    <a href="{{ route('contact.index') }}" class="linkButton">Afspraak plannen</a>
                </div>
            </div>

            <div class="col-12 card-pakket bg-dark rounded col-md-6 col-lg-4 mb-4 p-4 card-animate3 hidden">
                <div class="d-flex justify-content-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor"
                        class="bi bi-car-front" viewBox="0 0 16 16">
                        <path
                            d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0m10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17s2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276" />
                        <path
                            d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.8.8 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155s4.037-.084 5.592-.155A1.48 1.48 0 0 0 15 9.611v-.413q0-.148-.03-.294l-.335-1.68a.8.8 0 0 0-.43-.563 1.8 1.8 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3z" />
                    </svg>
                </div>
                <path
                    d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0m10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17s2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276" />
                <path
                    d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.8.8 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155s4.037-.084 5.592-.155A1.48 1.48 0 0 0 15 9.611v-.413q0-.148-.03-.294l-.335-1.68a.8.8 0 0 0-.43-.563 1.8 1.8 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3z" />
                </svg>
                <h2 class="font-weight-bolder ">Zekerheidpakket</h2>
                <h2 class="card-price font-weight-bolder">&euro;3.800</h2>
                <hr>
                <p class="mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="gold"
                        class="bi bi-currency-euro" viewBox="0 0 16 16">
                        <path
                            d="M4 9.42h1.063C5.4 12.323 7.317 14 10.34 14c.622 0 1.167-.068 1.659-.185v-1.3c-.484.119-1.045.17-1.659.17-2.1 0-3.455-1.198-3.775-3.264h4.017v-.928H6.497v-.936q-.002-.165.008-.329h4.078v-.927H6.618c.388-1.898 1.719-2.985 3.723-2.985.614 0 1.175.05 1.659.177V2.194A6.6 6.6 0 0 0 10.341 2c-2.928 0-4.82 1.569-5.244 4.3H4v.928h1.01v1.265H4v.928z" />
                    </svg>
                    <span>70,- per uur</span> <!--<span class="badge bg-success ms-2">Goedkoopst</span>-->
                </p>
                <p class="mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#90ee90"
                        class="bi bi-check-lg" viewBox="0 0 16 16">
                        <path
                            d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                    </svg>
                    <span>25 lessen</span>
                </p>
                <p class="mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#90ee90"
                        class="bi bi-check-lg" viewBox="0 0 16 16">
                        <path
                            d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                    </svg>
                    <span>120 minuten per les</span>
                </p>
                <p class="mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#90ee90"
                        class="bi bi-check-lg" viewBox="0 0 16 16">
                        <path
                            d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                    </svg>
                    <span>incl. CBR praktijkexamen €300</span>
                </p>

                <p class="mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gold"
                        class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                    <span>Gratis proefles</span>
                </p>

                <div class="d-flex justify-content-center mt-5 mb-3">
                    <a href="{{ route('contact.index') }}" class="linkButton">Afspraak plannen</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section4 bg-dark clamp-padding-section">
        <h2 class="text-center mb-4">
            Waarom kiezen voor Rijschool Snel & Veilig?
        </h2>
        <hr class="mb-5">

        <div class="row justify-content-center gap-5">
            <div class="col-12 col-md-6 col-lg-4 mb-2">
                <div class="card bg-dark text-white border-0 thin-card">
                    <h5 class="card-title-section4 mb-4"><span><svg class="me-1 me-sm-4 Scale-animate hidden"
                                xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#3399cc"
                                viewBox="0 0 16 16">
                                <path
                                    d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0m2 5.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12s5 1.755 5 1.755" />
                            </svg></span>Persoonlijke aanpak</h5>
                    <div class="card-body py-2">
                        <p class="small">
                            Bij Rijschool Snel & Veilig staat jouw leerproces centraal. Ik stem elke
                            rijles af op jouw individuele behoeften, of je nu een beginner bent of al wat ervaring hebt.
                        </p>
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-5">
                <div class="card bg-dark text-white border-0 thin-card">
                    <h5 class="card-title-section4"><svg class="me-1 me-sm-4 Scale-animate hidden"
                            xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#3399cc"
                            viewBox="0 0 16 16">
                            <path
                                d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17s3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z" />
                        </svg>Ervaren instructeur</h5>
                    <div class="card-body py-2">
                        <p class="small">
                            Ik ben een instructeur met jarenlange ervaring en een passie voor het helpen
                            van leerlingen. Ik ben geduldig, professioneel en begrijp dat iedereen op zijn eigen
                            tempo leert.
                        </p>
                    </div>
                    <div class="text-center float-start">
                        <a href="{{ route('contact.index') }}" class="linkButton" role="button">Afspraak plannen</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="section2 bg-dark overflow-hidden clamp-padding-section">
  <div class="container-fluid px-0">
    <h2 class="text-center">Wat klanten over mij denken:</h2>
    <script src="https://widget.trustmary.com/YIhAeRsMQ"></script>
  </div>
</section>

<style>
.geslaagden-section {
  padding: 3rem 1rem 4rem;
}

.geslaagden-header {
  text-align: center;
  margin-bottom: 2.5rem;
}

.geslaagden-title {
  font-size: clamp(1.6rem, 4vw, 2.4rem);
  font-weight: 800;
  color: #fff;
  margin-bottom: 0.5rem;
}

.geslaagden-subtitle {
  color: #90caf9;
  font-size: 1rem;
  margin-bottom: 0;
}

/* student card */
.student-card {
  flex: 0 0 calc((100% - ((var(--ips) - 1) * var(--gap))) / var(--ips));
  max-width: 380px;
  box-sizing: border-box;
  position: relative;
  border-radius: 14px;
  overflow: hidden;
  box-shadow: 0 8px 32px rgba(0,0,0,0.45);
  transition: transform 0.25s ease, box-shadow 0.25s ease;
}

.student-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 16px 40px rgba(0,0,0,0.6);
}

.student-img {
  width: 100%;
  height: 260px;
  object-fit: cover;
  object-position: 50% 20%;
  display: block;
}

.student-card-overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 0.6rem 0.8rem;
  background: linear-gradient(to top, rgba(0,0,0,0.75) 0%, transparent 100%);
  display: flex;
  align-items: center;
  gap: 0.4rem;
}

.student-card-badge {
  background: #f59e0b;
  color: #fff;
  font-size: 0.7rem;
  font-weight: 700;
  padding: 0.2rem 0.6rem;
  border-radius: 50px;
  letter-spacing: 0.05em;
  text-transform: uppercase;
}

/* slide row */
.slide-row {
  display: flex;
  gap: 1rem;
  justify-content: center;
  align-items: stretch;
  padding: 0 0.5rem;
  box-sizing: border-box;
}

/* carousel */
.geslaagden-carousel .carousel-inner {
  --ips: 1;
  --gap: 1rem;
}

.geslaagden-carousel .carousel-item {
  transition: transform 0.55s ease;
}

/* pijlen */
.geslaagden-carousel .carousel-control-prev,
.geslaagden-carousel .carousel-control-next {
  width: 3rem;
  height: 3rem;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(255,255,255,0.12);
  border-radius: 50%;
  border: 1px solid rgba(255,255,255,0.2);
  backdrop-filter: blur(4px);
  transition: background 0.2s;
}

.geslaagden-carousel .carousel-control-prev:hover,
.geslaagden-carousel .carousel-control-next:hover {
  background: rgba(255,255,255,0.25);
}

/* dot indicators */
.geslaagden-dots {
  display: flex;
  justify-content: center;
  gap: 0.4rem;
  margin-top: 1.5rem;
}

.geslaagden-dot {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: rgba(255,255,255,0.3);
  border: none;
  padding: 0;
  cursor: pointer;
  transition: background 0.2s, transform 0.2s;
}

.geslaagden-dot.active {
  background: #f59e0b;
  transform: scale(1.3);
}
</style>

<section class="geslaagden-section bg-dark">
  <div class="geslaagden-header">
    <h2 class="geslaagden-title">Geslaagd!</h2>
    <p class="geslaagden-subtitle">Trots op al onze leerlingen die hun rijbewijs hebben gehaald.</p>
  </div>

  <div class="container position-relative">
    <div id="studentsCarousel" class="carousel slide geslaagden-carousel" data-bs-ride="carousel">
      <div class="carousel-inner">
        <!-- slides worden door JS opgebouwd -->
      </div>

      <button class="carousel-control-prev" type="button" id="carouselPrev" aria-label="Vorige">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" id="carouselNext" aria-label="Volgende">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="geslaagden-dots" id="carouselDots"></div>
  </div>
</section>

<!-- images als JSON met volledige asset() URLs -->
<script>
  const images = @json(array_map(fn($p) => asset($p), $images ?? []));
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const carouselEl   = document.getElementById('studentsCarousel');
  const carouselInner = carouselEl.querySelector('.carousel-inner');
  const dotsContainer = document.getElementById('carouselDots');
  const prevBtn = document.getElementById('carouselPrev');
  const nextBtn = document.getElementById('carouselNext');

  function getItemsPerSlide() {
    const w = window.innerWidth;
    if (w >= 992) return 3;
    if (w >= 768) return 2;
    return 1;
  }

  function buildSlides() {
    const ips = getItemsPerSlide();
    carouselInner.style.setProperty('--ips', ips);
    carouselInner.style.setProperty('--gap', '1rem');

    if (!images || !images.length) {
      carouselInner.innerHTML = '<div class="carousel-item active"><div class="slide-row"><div class="student-card"><img class="student-img" src="" alt="geen afbeelding"></div></div></div>';
      dotsContainer.innerHTML = '';
      return;
    }

    const slides = [];
    for (let start = 0; start < images.length; start += ips) {
      const chunk = [];
      for (let j = 0; j < ips; j++) {
        chunk.push(images[(start + j) % images.length]);
      }
      slides.push(chunk);
    }

    carouselInner.innerHTML = '';
    dotsContainer.innerHTML = '';

    slides.forEach((chunk, sIndex) => {
      const item = document.createElement('div');
      item.className = 'carousel-item' + (sIndex === 0 ? ' active' : '');

      const row = document.createElement('div');
      row.className = 'slide-row';

      chunk.forEach(src => {
        const card = document.createElement('div');
        card.className = 'student-card';

        const img = document.createElement('img');
        img.className = 'student-img';
        img.loading = 'lazy';
        img.src = src || '';
        img.alt = 'Geslaagde leerling';
        card.appendChild(img);

        const overlay = document.createElement('div');
        overlay.className = 'student-card-overlay';
        const badge = document.createElement('span');
        badge.className = 'student-card-badge';
        badge.textContent = 'Geslaagd!';
        overlay.appendChild(badge);
        card.appendChild(overlay);

        row.appendChild(card);
      });

      item.appendChild(row);
      carouselInner.appendChild(item);

      // dot
      const dot = document.createElement('button');
      dot.className = 'geslaagden-dot' + (sIndex === 0 ? ' active' : '');
      dot.setAttribute('aria-label', 'Ga naar slide ' + (sIndex + 1));
      dot.addEventListener('click', () => bsCarousel.to(sIndex));
      dotsContainer.appendChild(dot);
    });
  }

  function updateDots(activeIndex) {
    dotsContainer.querySelectorAll('.geslaagden-dot').forEach((dot, i) => {
      dot.classList.toggle('active', i === activeIndex);
    });
  }

  buildSlides();

  let bsCarousel = new bootstrap.Carousel(carouselEl, {
    interval: 3500,
    ride: 'carousel',
    pause: 'hover',
    wrap: true
  });

  carouselEl.addEventListener('slid.bs.carousel', function (e) {
    updateDots(e.to);
  });

  prevBtn.addEventListener('click', e => { e.preventDefault(); bsCarousel.prev(); });
  nextBtn.addEventListener('click', e => { e.preventDefault(); bsCarousel.next(); });

  let lastIps = getItemsPerSlide();
  let resizeTimer;
  window.addEventListener('resize', function () {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function () {
      const ips = getItemsPerSlide();
      if (ips !== lastIps) {
        lastIps = ips;
        bsCarousel.dispose();
        buildSlides();
        bsCarousel = new bootstrap.Carousel(carouselEl, {
          interval: 3500,
          ride: 'carousel',
          pause: 'hover',
          wrap: true
        });
        carouselEl.addEventListener('slid.bs.carousel', function (e) {
          updateDots(e.to);
        });
      }
    }, 150);
  });
});
</script>

@endsection
