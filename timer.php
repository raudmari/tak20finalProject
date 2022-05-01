<?php
include_once 'templates/header.php';
?>

<div class="container">
    <div class="columns">
        <div class="column is-2">
        </div>
        <div class="column is-8">
            <h1 class="title is-4 has-text-centered">Taimer</h1>
            <div class="field has-text-centered">
                <div class="control">
                    <div class="select is-rounded is-dark">
                        <select id="#my-time" name="times" class="has-text-centered">
                            <option>Vali aeg</option>
                            <option value="05:00">05:00</option>
                            <option value="10:00">10:00</option>
                            <option value="15:00">15:00</option>
                            <option value="20:00">20:00</option>
                            <option value="25:00">25:00</option>
                            <option value="30:00">30:00</option>
                            <option value="35:00">35:00</option>
                            <option value="40:00">40:00</option>
                            <option value="45:00">45:00</option>
                            <option value="50:00">50:00</option>
                            <option value="55:00">55:00</option>
                            <option value="60:00">60:00</option>
                        </select>
                    </div>
                </div>
            </div>
            <div>
                <h1 class="title has-text-centered timer m-4">
                    <span class="counter"></span>
                </h1>
            </div>
            <div class="field has-text-centered">
                <div class="control">
                    <div class="select is-rounded is-dark">
                        <select id="#my-sound" name="alarms" class="has-text-centered">
                            <option>Vali heli</option>
                            <option value="wakeup">Äratus</option>
                            <option value="google">GoogleDuo</option>
                            <option value="wakeUpAlarm">WakeUpAlarm</option>
                            <option value="alarmClock">Äratuskell</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="field has-text-centered">
                <button class="button is-rounded is-dark">Käivita taimer</button>
            </div>
            <div class="field has-text-centered">
                <audio controls src="">
                </audio>
            </div>

        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $("#my-time").click(function() {
        let time = $('option').value();
        console.log(time);

    });

});
</script>