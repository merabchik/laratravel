$(document).ready(function() {
    $('.datepicker').pickadate({
        // Escape any “rule” characters with an exclamation mark (!).
        format: 'yyyy-mm-dd',
        formatSubmit: 'yyyy-mm-dd',
        max: [2020,7,14],
        min: -15,
        max: true,
        disable: [
            { from: [2016,2,14], to: [2016,2,27] }
        ]
    });
});