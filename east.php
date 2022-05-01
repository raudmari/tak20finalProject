<?php
include 'templates/header.php';
include 'setWeather.php';
?>

<div class="container">
    <div class="columns">
        <div class="column is-2">
        </div>
        <div class="column is-8">
            <h1 class="title is-4 has-text-centered">Temperatuurid idas kuni</h1>

            <input class="input" type="date" name="datepicker" id="datepicker" onselect="onSelect()">

            <table class="table is-bordered is-striped is-fullwidth mt-4">
                <thead>
                    <tr>
                        <th>Aeg</th>
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
$(function() {
    $("#datepicker").datepicker({
        dateFormat: 'yy-mm-dd', // kuupäeva vorming
        maxDate: 0, // homset kuupäeva ei saa valida
        minDate: new Date(2018, 7 - 1, 28),
        changeYear: true,

        onSelect: function() {
            var date = $(this).datepicker('getDate')
            date instanceof Date; // -> true
            var day = date.getDate();
            var month = date.getMonth();
            var year = date.getFullYear();
            console.log(day, month, year);
            $.ajax({
                url: 'setWeather.php',
                type: 'POST',
                data: {
                    day: day,
                    month: month,
                    year: year
                },
                success: function(output) {
                    alert('korras' + output);
                },
                error: function(request, status, error) {
                    alert('error' + error);
                }


            })
        },


    });
});
</script>