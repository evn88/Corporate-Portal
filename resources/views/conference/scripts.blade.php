<!-- Datepicker script -->
<script>
    $(function () {
        $('#start_datetimepicker').datetimepicker({
             locale: 'ru',
             sideBySide: true,
             daysOfWeekDisabled: [0, 6],
             enabledHours: [8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18],
             useCurrent: true,
        });
         $('#stop_datetimepicker').datetimepicker({
            locale: 'ru',
            sideBySide: true,
            daysOfWeekDisabled: [0, 6],
            enabledHours: [8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18],
            useCurrent: false //Important! See issue #1075
        });
        
        $("#start_datetimepicker").on("dp.change", function (e) {
            $('#stop_datetimepicker').data("DateTimePicker").minDate(e.date);
        });
        $("#stop_datetimepicker").on("dp.change", function (e) {
            $('#start_datetimepicker').data("DateTimePicker").maxDate(e.date);
        });
    });
</script>