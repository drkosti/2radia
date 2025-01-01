<div class="row playery">
    <!-- KANAŁ 1 PO LEWEJ STRONIE -->
    <div class="col-sm lewa">
        <div class="player-container">
            <!-- MIEJSCE DO ZAKODOWANIA METADANYCH początek-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm prezenter">
                        <div class="text-block kanal1">
                            <!-- MIEJSCE DO ZAKODOWANIA METADANYCH POLE PREZENTERA -->
                            Prezenter: <span>Dj Jakiś</span>
                        </div>
                    </div>
                    <div class="col-sm audycja">
                        <div class="text-block kanal1">
                            <!-- MIEJSCE DO ZAKODOWANIA METADANYCH POLE AUDYCJA -->
                            Audycja: <span>Disko w polu, bla bla [uwaga śpiewam] </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MIEJSCE DO ZAKODOWANIA METADANYCH koniec-->
            <h2>#CLUB #DANCE #DISCO_POLO</h2>
            <button class="player-button" id="playPauseButton1">
                <i class="fas fa-play"></i>
            </button>
            <div class="volume-control">
                <i class="fas fa-volume-down"></i>
                <input type="range" id="volumeSlider1" min="0" max="1" step="0.01" value="0.5">
                <i class="fas fa-volume-up"></i>
            </div>
            <audio id="shoutcastPlayer1" preload="none">
                <source src="<?php echo $stream_1; ?>" type="audio/mpeg">
                Twoja przeglądarka nie obsługuje odtwarzania strumieniowego.
            </audio>
        </div>
        <div class="btn-group" role="group" aria-label="Basic outlined example">
            <button type="button" class="btn btn-outline-light" data-bs-toggle="offcanvas" data-bs-target="#pozdrokanal1" aria-controls="pozdrokanal1">Napisz</button>
            <button type="button" class="btn btn-outline-light" data-bs-toggle="offcanvas" data-bs-target="#ramowkakanal1" aria-controls="ramowkakanal1">Ramówka</button>
            <button type="button" class="btn btn-outline-light" data-bs-toggle="offcanvas" data-bs-target="#ekipakanal1" aria-controls="ekipakanal1">Ekipa</button>
        </div>
    </div>
    <!-- KANAŁ 2 PO PRAWEJ STRONIE -->
    <div class="col-sm prawa">
        <div class="player-container">
            <!-- MIEJSCE DO ZAKODOWANIA METADANYCH początek-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm prezenter">
                        <div class="text-block">
                            <!-- MIEJSCE DO ZAKODOWANIA METADANYCH POLE PREZENTERA -->
                            Prezenter: <span>Kostek</span>
                        </div>
                    </div>
                    <div class="col-sm audycja">
                        <div class="text-block">
                            <!-- MIEJSCE DO ZAKODOWANIA METADANYCH POLE AUDYCJA -->
                            Audycja: <span>Matalowy dzień </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MIEJSCE DO ZAKODOWANIA METADANYCH koniec-->
            <h2>#MOCNA_MUZA #ROCK #METAL</h2>
            <button class="player-button" id="playPauseButton2">
                <i class="fas fa-play"></i>
            </button>
            <div class="volume-control">
                <i class="fas fa-volume-down"></i>
                <input type="range" id="volumeSlider2" min="0" max="1" step="0.01" value="0.5">
                <i class="fas fa-volume-up"></i>
            </div>
            <audio id="shoutcastPlayer2" preload="none">
                <source src="<?php echo $stream_2; ?>" type="audio/mpeg">
                Twoja przeglądarka nie obsługuje odtwarzania strumieniowego.
            </audio>
        </div>
        <div class="btn-group" role="group" aria-label="Basic outlined example">
            <button type="button" class="btn btn-outline-light" data-bs-toggle="offcanvas" data-bs-target="#pozdrokanal2" aria-controls="pozdrokanal2">Napisz</button>
            <button type="button" class="btn btn-outline-light" data-bs-toggle="offcanvas" data-bs-target="#ramowkakanal2" aria-controls="ramowkakanal2">Ramówka</button>
            <button type="button" class="btn btn-outline-light" data-bs-toggle="offcanvas" data-bs-target="#ekipakanal2" aria-controls="ekipakanal2">Ekipa</button>
        </div>
    </div>

</div>