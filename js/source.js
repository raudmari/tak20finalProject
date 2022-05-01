

// Initialize all input of date type.
const calendars = bulmaCalendar.attach('[type="date"]', {
    dateFormat: 'dd.MM.yyyy',
    weekStart: '1',
    startDate: '28.07.2018',
    maxDate: new Date(),
    cancelLabel: 'Tühista',
    clearLabel: 'Kustuta',
    todayLabel: 'Täna'
});

// Loop on each calendar initialized
calendars.forEach(calendar => {
    // Add listener to select event
    calendar.on('select', date => {

    });
});

// To access to bulmaCalendar instance of an element
const element = document.querySelector('#my-element');
if (element) {
    // bulmaCalendar instance is available as element.bulmaCalendar
    element.bulmaCalendar.on('select', datepicker => {
        let date = datepicker.data.value()
        console.log(date);

    });
}
