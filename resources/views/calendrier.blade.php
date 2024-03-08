@extends('master.layout')

@section('title')
    Absence
@endsection

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.0/fullcalendar.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.0/fullcalendar.min.js"></script>

    <div class="container">
        <div id="calendar"></div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth', // Set initial view mode (e.g., month)
                events: "{{ route('absence.calendrier') }}", // Load events from the backend

                // Event handler for date selection
                dateClick: function(info) {
                    // Open a modal or form to select absent employees
                    // For example:
                    var date = info.dateStr;
                    var modalContent = `
                        <h3>Select Absent Employees for ${date}</h3>
                        <!-- Form to select employees -->
                    `;
                    // Display the modal or form
                }
            });

            calendar.render();
        });
    </script>
@endsection