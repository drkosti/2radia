<script src="JS/bootstrap.bundle.min.js"></script>
<script src="JS/skrypty.js"></script>
<script>
    const playPauseButton1 = document.getElementById('playPauseButton1');
    const shoutcastPlayer1 = document.getElementById('shoutcastPlayer1');
    const volumeSlider1 = document.getElementById('volumeSlider1');

    let isPlaying1 = false;

    playPauseButton1.addEventListener('click', () => {
        if (isPlaying1) {
            shoutcastPlayer1.pause();
            playPauseButton1.innerHTML = '<i class="fas fa-play"></i>';
            shoutcastPlayer1.src = '';
            shoutcastPlayer1.load();
        } else {
            shoutcastPlayer1.src = '<?php echo $stream_1; ?>';
            shoutcastPlayer1.load();
            shoutcastPlayer1.play();
            playPauseButton1.innerHTML = '<i class="fas fa-pause"></i>';
        }
        isPlaying1 = !isPlaying1;
    });

    volumeSlider1.addEventListener('input', (e) => {
        shoutcastPlayer1.volume = e.target.value;
    });

    shoutcastPlayer1.volume = volumeSlider1.value;

    const playPauseButton2 = document.getElementById('playPauseButton2');
    const shoutcastPlayer2 = document.getElementById('shoutcastPlayer2');
    const volumeSlider2 = document.getElementById('volumeSlider2');

    let isPlaying2 = false;

    playPauseButton2.addEventListener('click', () => {
        if (isPlaying2) {
            shoutcastPlayer2.pause();
            playPauseButton2.innerHTML = '<i class="fas fa-play"></i>';
            shoutcastPlayer2.src = '';
            shoutcastPlayer2.load();
        } else {
            shoutcastPlayer2.src = '<?php echo $stream_2; ?>';
            shoutcastPlayer2.load();
            shoutcastPlayer2.play();
            playPauseButton2.innerHTML = '<i class="fas fa-pause"></i>';
        }
        isPlaying2 = !isPlaying2;
    });

    volumeSlider2.addEventListener('input', (e) => {
        shoutcastPlayer2.volume = e.target.value;
    });

    shoutcastPlayer2.volume = volumeSlider2.value;
</script>
<?php include('INC/offcanvas.php') ?>
<footer>
    <p><?php echo $nazwa; ?> - <?php echo $slogan; ?></p>
    <!--Nie modyfikuj informacji o autorze w  stopce. Dziękuję. -->
    <p class="copy">By <a href="https://tuxinfo.pl" target="_blank" rel="noopener noreferrer">Tuxinfo.pl</a></p>
</footer>
</body>

</html>