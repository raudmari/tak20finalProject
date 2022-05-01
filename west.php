<?php
include 'templates/header.php';
include 'setWeather.php';

?>


<div class="container">
    <div class="columns">
        <div class="column is-2">
        </div>
        <div class="column is-8">
            <h1 class="title is-4 has-text-centered">Temperatuurid läänes kuni</h1>
            <input class="input" type="date" name='dates' id="my-element">
            <table class="table is-bordered is-striped is-fullwidth mt-4">
                <thead>
                    <tr>
                        <th>kell</th>
                        <th>aasta</th>
                        <th>aasta</th>
                        <th>aasta</th>
                        <th>aasta</th>
                        <th>aasta</th>
                        <th>aasta</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>


<script>
    // Initialize all input of date type.
    const calendars = bulmaCalendar.attach('[type="date"]', {
        dateFormat: 'dd.MM.yyyy',
        weekStart: '1',
        minDate: '29.05.2016',
        maxDate: new Date(),
        cancelLabel: 'Tühista',
        clearLabel: 'Kustuta',
        todayLabel: 'Täna'

    });

    // Loop on each calendar initialized
    calendars.forEach(calendar => {
        // Add listener to select event
        calendar.on('select', date => {
            console.log(date);
        });
    });

    // To access to bulmaCalendar instance of an element
    const element = document.querySelector('#my-element');
    if (element) {
        // bulmaCalendar instance is available as element.bulmaCalendar
        element.bulmaCalendar.on('select', datepicker => {
            let date = datepicker.data.value();
            //console.log(date);
            $.ajax({
                url: 'setWeather.php',
                type: 'POST',
                data: {
                    date: date
                },
                success: function(result) {
                    //console.log(data);
                },
                error: function(request, status, error) {
                    alert(error);
                }

            })

        });
    }
</script>