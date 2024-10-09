@extends('CoachTemp.layout.template')
@section('contenu')
@section('titre')Schedule @endsection
<style>
    .calendar {

        position: relative;
        border: 0.01em solid black;
        bottom: 38.5px;
        width: 1100px;
        right: 16px;
        background-color: #ed563b;
    }
</style>

<div class="calendar"></div>


@if ($msg=Session::get('success'))
<div class="alert alert-success">
    {{$msg}}
</div>
@endif

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>


<script>
    $(document).ready(function() {
            // page is now ready, initialize the calendar...
            $('.calendar').fullCalendar({
                // put your options and callbacks here
                defaultView: 'agendaWeek',
                height:800,
                header:{
                center:'year,month,agendaWeek,basicDay,list',
                },
                buttonText: {
                today: 'Today',
                month: 'Month',
                day: 'Day',
                week:'Week',
                list:'List'
                },
                selectable: true,
                nowIndicator: 'true',
                showNonCurrentDates:false,
                events : [
                        @foreach($tasks as $task)
                        @if($coach->id==$task->coaches_id)

                        {
                            start:'{{$task->start}}',
                            end: '{{$task->end}}',
                            title : '*{{ $task->sports->name }} class',
                            // url : '{{ route('tasks.edit', $task->id) }}',
                            dow: [{{$task->day}}],
                            // ranges : [{
                            //     start : 2017-06-01,
                            //     end : 2017-07-31
                            //     }],
                            color: '#0000A0F',
                            // editable: true

                        },
                        @endif
                        @endforeach

                ]


                //
                //
                //
                //
            })
        });
</script>


@endsection
