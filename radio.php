<?php
include_once 'templates/header.php';
?>
<div class="container mt-4">
    <div class="level-item has-text-centered">
        <figure class="image">
            <img src="img/elmar.png" alt="raadio_elmar">
        </figure>
        <figure class="image">
            <img src="img/vikerraadio.jpg" alt="vikerraadio">
        </figure>
        <figure>
            <img class="is-a" src="img/raadio2.png" alt="raadio2">
        </figure>
        <figure class="image">
            <img src="img/retrofm.png" alt="retrofm">
        </figure>
    </div>
    <div class="level mt-4">
        <div class="level-item has-text-centered">
            <audio id="elmar" src="https://elmar.pleier.ee/"></audio>
            <button class="button is-rounded is-dark">
                <i class="fa-solid fa-play"></i>
            </button>
        </div>
        <div class="level-item has-text-centered">
            <audio id="vikerraadio" src="https://otse.err.ee/k/vikerraadio"></audio>
            <button class="button is-rounded is-dark">
                <i class="fa-solid fa-play"></i>
            </button>
        </div>
        <div class="level-item has-text-centered">
            <audio id="r2">
                <source src="https://r2.err.ee/" type="audio/mpeg">
            </audio>
            <button onclick="document.getElementById('#r2').play()" class="button is-rounded is-dark">
                <i class="fa-solid fa-play"></i>
            </button>
        </div>
        <div class="level-item has-text-centered">
            <audio id="retro" src="https://raadiod.com/retro-fm/"></audio>
            <button class="button is-rounded is-dark">
                <i class="fa-solid fa-play"></i>
            </button>
        </div>
    </div>
</div>

<script src="js/audio.js"></script>