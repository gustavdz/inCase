@extends('layouts.app')
@section('title','Home')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-home"></i></a></li>
    <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
@endsection
@section('css_optional')
    <link rel="stylesheet" href="{{asset('assets/vendor/fullcalendar/dist/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css')}}">
@endsection
@section('js_optional')
    <script src="{{asset('assets/vendor/fullcalendar/dist/fullcalendar.min.js')}}"></script>
    <script src="{{asset('assets/vendor/sweetalert2/dist/sweetalert2.min.js')}}"></script>
@endsection
@section('cards')
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Trámites activos</h5>
                        <span class="h2 font-weight-bold mb-0">350,897</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                            <i class="ni ni-active-40"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Desde el mes anterior</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Clientes</h5>
                        <span class="h2 font-weight-bold mb-0">2,356</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                            <i class="ni ni-chart-pie-35"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Desde el mes anterior</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Recaudacion</h5>
                        <span class="h2 font-weight-bold mb-0">924</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                            <i class="ni ni-money-coins"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Desde el mes anterior</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Asistentes</h5>
                        <span class="h2 font-weight-bold mb-0">5</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                            <i class="ni ni-chart-bar-32"></i>
                        </div>
                    </div>
                </div>
                    <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"></i> 80%</span>
                        <span class="text-nowrap">De los casos activos</span>
                    </p>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header bg-transparent">
                    Dashboard
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <!-- Fullcalendar -->
            <div class="card card-calendar">
                <!-- Card header -->
                <div class="card-header">
                    <!-- Title -->
                    <h5 class="h3 mb-0">Calendar</h5>
                    <div class="row">
                        <div class="text-left col-md-4">
                            <a href="#" class="btn btn-sm btn-neutral" data-calendar-view="month">Month</a>
                            <a href="#" class="btn btn-sm btn-neutral active" data-calendar-view="agendaWeek">Week</a>
                            <a href="#" class="btn btn-sm btn-neutral" data-calendar-view="agendaDay">Day</a>
                        </div>
                        <div class="text-center col-md-4"><h6 class="fullcalendar-title h2 mb-0">Fullcalendar</h6></div>
                        <div class="text-right col-md-4">

                            <a href="#" class="fullcalendar-btn-prevYear btn btn-sm btn-neutral">
                                <i class="fas fa-angle-double-left"></i>
                            </a>
                            <a href="#" class="fullcalendar-btn-prev btn btn-sm btn-neutral">
                                <i class="fas fa-angle-left"></i>
                            </a>
                            <a href="#" class="fullcalendar-btn-next btn btn-sm btn-neutral">
                                <i class="fas fa-angle-right"></i>
                            </a>
                            <a href="#" class="fullcalendar-btn-nextYear btn btn-sm btn-neutral">
                                <i class="fas fa-angle-double-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Card body -->
                <div class="card-body p-0">
                    <div class="calendar" data-toggle="calendar" id="calendar"></div>
                </div>
            </div>
            <!-- Modal - Add new event -->
            <!--* Modal header *-->
            <!--* Modal body *-->
            <!--* Modal footer *-->
            <!--* Modal init *-->
            <div class="modal fade" id="new-event" tabindex="-1" role="dialog" aria-labelledby="new-event-label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-secondary" role="document">
                    <div class="modal-content">
                        <!-- Modal body -->
                        <form class="new-event--form">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="form-control-label">Event title</label>
                                    <input type="text" class="form-control form-control-alternative new-event--title" placeholder="Event Title">
                                </div>
                                <div class="form-group mb-0">
                                    <label class="form-control-label d-block mb-3">Status color</label>
                                    <div class="btn-group btn-group-toggle btn-group-colors event-tag" data-toggle="buttons">
                                        <label class="btn bg-info active"><input type="radio" name="event-tag" value="bg-info" autocomplete="off" checked></label>
                                        <label class="btn bg-warning"><input type="radio" name="event-tag" value="bg-warning" autocomplete="off"></label>
                                        <label class="btn bg-danger"><input type="radio" name="event-tag" value="bg-danger" autocomplete="off"></label>
                                        <label class="btn bg-success"><input type="radio" name="event-tag" value="bg-success" autocomplete="off"></label>
                                        <label class="btn bg-default"><input type="radio" name="event-tag" value="bg-default" autocomplete="off"></label>
                                        <label class="btn bg-primary"><input type="radio" name="event-tag" value="bg-primary" autocomplete="off"></label>
                                    </div>
                                </div>
                                <input type="hidden" class="new-event--start" />
                                <input type="hidden" class="new-event--end" />
                            </div>
                        </form>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary new-event--add">Add event</button>
                            <button type="button" class="btn btn-link ml-auto" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Modal - Edit event -->
            <!--* Modal body *-->
            <!--* Modal footer *-->
            <!--* Modal init *-->
            <div class="modal fade" id="edit-event" tabindex="-1" role="dialog" aria-labelledby="edit-event-label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-secondary" role="document">
                    <div class="modal-content">
                        <!-- Modal body -->
                        <form class="edit-event--form">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="form-control-label">Event title</label>
                                    <input type="text" class="form-control form-control-alternative edit-event--title" placeholder="Event Title">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label d-block mb-3">Status color</label>
                                    <div class="btn-group btn-group-toggle btn-group-colors event-tag mb-0" data-toggle="buttons">
                                        <label class="btn bg-info"><input type="radio" id="rad-info" name="event-tag" value="bg-info" autocomplete="off"></label>
                                        <label class="btn bg-warning"><input type="radio" id="rad-warning"  name="event-tag" value="bg-warning" autocomplete="off"></label>
                                        <label class="btn bg-danger"><input type="radio" id="rad-danger"  name="event-tag" value="bg-danger" autocomplete="off"></label>
                                        <label class="btn bg-success"><input type="radio" id="rad-success"  name="event-tag" value="bg-success" autocomplete="off"></label>
                                        <label class="btn bg-default"><input type="radio" id="rad-default"  name="event-tag" value="bg-default" autocomplete="off"></label>
                                        <label class="btn bg-primary"><input type="radio" id="rad-primary"  name="event-tag" value="bg-primary" autocomplete="off"></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Description</label>
                                    <textarea class="form-control form-control-alternative edit-event--description textarea-autosize" placeholder="Event Desctiption"></textarea>
                                    <i class="form-group--bar"></i>
                                </div>
                                <input type="hidden" class="edit-event--id">
                            </div>
                        </form>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button class="btn btn-primary" data-calendar="update">Update</button>
                            <button class="btn btn-danger" data-calendar="delete">Delete</button>
                            <button class="btn btn-link ml-auto" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-8">
            <div class="card bg-default">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-light text-uppercase ls-1 mb-1">Overview</h6>
                            <h5 class="h3 text-white mb-0">Sales value</h5>
                        </div>
                        <div class="col">
                            <ul class="nav nav-pills justify-content-end">
                                <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales-dark" data-update='{"data":{"datasets":[{"data":[0, 20, 10, 30, 15, 40, 20, 60, 60]}]}}' data-prefix="$" data-suffix="k">
                                    <a href="#" class="nav-link py-2 px-3 active" data-toggle="tab">
                                        <span class="d-none d-md-block">Month</span>
                                        <span class="d-md-none">M</span>
                                    </a>
                                </li>
                                <li class="nav-item" data-toggle="chart" data-target="#chart-sales-dark" data-update='{"data":{"datasets":[{"data":[0, 20, 5, 25, 10, 30, 15, 40, 40]}]}}' data-prefix="$" data-suffix="k">
                                    <a href="#" class="nav-link py-2 px-3" data-toggle="tab">
                                        <span class="d-none d-md-block">Week</span>
                                        <span class="d-md-none">W</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Chart -->
                    <div class="chart">
                        <!-- Chart wrapper -->
                        <canvas id="chart-sales-dark" class="chart-canvas"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-uppercase text-muted ls-1 mb-1">Performance</h6>
                            <h5 class="h3 mb-0">Total orders</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Chart -->
                    <div class="chart">
                        <canvas id="chart-bars" class="chart-canvas"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script>

        Fullcalendar=function(){
            var e,a,t=$('#calendar');
            t.length&&(a= {

                    header:{right:"",center:"",left:""},
                    buttonIcons:{prev:"calendar--prev",prevYear:"calendar--prevYear",next:"calendar--next",nextYear:"calendar--nextYear"},
                    theme:false,
                    selectable:true,
                    selectHelper:true,
                    editable:true,
                    defaultView: 'agendaWeek',
                    events:[
                            @foreach($meetings as $meeting)
                        {
                            id:{{$meeting->id}},
                            title:"{{$meeting->title}}",
                            start:"{{$meeting->start}}",
                            end:"{{$meeting->end}}",
                            allDay:!{{$meeting->allDay}},
                            className:"{{$meeting->className}}",
                            description:"{{$meeting->description}}"
                        },
                        @endforeach
                    ],
                    eventDrop: function(event, delta, revertFunc) {
                        if (!confirm("¿Está seguro de cambiar la reunion?")) {
                            revertFunc();
                        }else{
                            if(event.end==null){
                                if(event.allDay==false){
                                    event.end=moment(event.start).add(60,"minutes");
                                }else{
                                    event.end=event.start;
                                }
                            }
                            $.ajax({
                                method: "POST",
                                url: "meeting/"+event.id+"/meetingdrop",
                                data: {
                                    title: event.title,
                                    description:event.description,
                                    start:event.start.format(),
                                    end:event.end.format(),
                                    allDay:event.allDay===false?1:0,
                                    className:event.className[0],
                                    _token: '{{csrf_token()}}'
                                }
                            }).done(function( msg ) {
                                //alert( "Data Saved: " + msg );
                            })
                        }
                    },
                    eventResize: function(event, delta, revertFunc) {
                        if (!confirm("¿Está seguro de cambiar la reunion?")) {
                            revertFunc();
                        }else{
                            $.ajax({
                                method: "POST",
                                url: "meeting/"+event.id+"/meetingresize",
                                data: {
                                    title: event.title,
                                    description:event.description,
                                    start:event.start.format(),
                                    end:event.end.format(),
                                    className:event.className[0],
                                    _token: '{{csrf_token()}}'
                                }
                            }).done(function( msg ) {
                                //alert( "Data Saved: " + msg );
                            })
                        }
                    },
                    dayClick:function(e) {
                        var a = moment(e).toISOString();
                        var b = moment(e).add(60,"minutes").toISOString();
                        $("#new-event").modal("show"),
                            $(".new-event--title").val(""),
                            $(".new-event--start").val(a),
                            $(".new-event--end").val(b)
                    },
                    viewRender:function(a){
                        e.fullCalendar("getDate").month(),
                            $(".fullcalendar-title").html(a.title)
                    },
                    eventClick:function(e,a){
                        $("#edit-event").modal("show"),
                            $(".edit-event--id").val(e.id),
                            $(".edit-event--title").val(e.title),
                            $(".edit-event--description").val(e.description),
                            $("#rad-warning").prop("checked",true)
                    }
                },
                    (e=t).fullCalendar(a),
                    $("body").on("click",".new-event--add",function(){
                        var a=$(".new-event--title").val(),t={
                            Stored:[],
                            Job:function(){
                                var e=Date.now().toString().substr(6);
                                return this.Check(e)?this.Job():(this.Stored.push(e),e)
                            },
                            Check:function(e){
                                for(var a=0;a<this.Stored.length;a++)if(this.Stored[a]==e)return!0;return!1
                            }
                        };
                        ""!=a?(e.fullCalendar("renderEvent",{
                                id:t.Job(),
                                title:a,
                                start:$(".new-event--start").val(),
                                end:$(".new-event--end").val(),
                                allDay:$(".new-event--start").val().length===10?0:1,
                                className:$(".event-tag input:checked").val()
                            },!0),
                                $.ajax({
                                    method: "POST",
                                    url: "meeting/store",
                                    data: {
                                        title: a,
                                        description:"",
                                        start:$(".new-event--start").val(),
                                        end:$(".new-event--end").val(),
                                        allDay:$(".new-event--start").val().length==10?0:1,
                                        className:$(".event-tag input:checked").val(),
                                        _token: '{{csrf_token()}}'
                                    }
                                }).done(function( msg ) {
                                    //alert( "Data Saved: " + msg );
                                }),
                                $(".new-event--form")[0].reset(),
                                $(".new-event--title").closest(".form-group").removeClass("has-danger"),
                                $("#new-event").modal("hide")
                        ):(
                            $(".new-event--title").closest(".form-group").addClass("has-danger"),
                                $(".new-event--title").focus())
                    }),

                    $("body").on("click", "[data-calendar]",function(){
                        var a=$(this).data("calendar"),
                            t=$(".edit-event--id").val(),
                            n=$(".edit-event--title").val(),
                            i=$(".edit-event--description").val(),
                            o=$("#edit-event .event-tag input:checked").val(),
                            l=e.fullCalendar("clientEvents",t);

                        "update"===a&&(""!=n?(
                                l[0].title=n,
                                    l[0].description=i,
                                    l[0].className=[o],
                                    console.log(l[0].className[0]),
                                    e.fullCalendar("updateEvent",l[0]),
                                    $("#edit-event").modal("hide"),
                                    $.ajax({
                                        method: "POST",
                                        url: "meeting/"+l[0].id+"/update",
                                        data: { title: n , className:l[0].className[0], description:i, _token: '{{csrf_token()}}'}
                                    }).done(function( msg ) {
                                        //alert( "Data Saved: " + msg );
                                    })
                            ):(
                                $(".edit-event--title").closest(".form-group").addClass("has-error"),
                                    $(".edit-event--title").focus())
                        ),

                        "delete"===a&&(
                            $("#edit-event").modal("hide"),
                                setTimeout(function(){
                                        swal({title:"Are you sure?",text:"You won't be able to revert this!",type:"warning",showCancelButton:!0,buttonsStyling:!1,confirmButtonClass:"btn btn-danger",confirmButtonText:"Yes, delete it!",cancelButtonClass:"btn btn-secondary"}).then(
                                            a=>{
                                                a.value&&(e.fullCalendar("removeEvents",t),
                                                        swal({title:"Deleted!",text:"The event has been deleted.",type:"success",buttonsStyling:!1,confirmButtonClass:"btn btn-primary"})
                                                )
                                            })
                                    },
                                    200)
                        )
                    }),

                    $("body").on("click","[data-calendar-view]",function(a){a.preventDefault(),$("[data-calendar-view]").removeClass("active"),$(this).addClass("active");var t=$(this).attr("data-calendar-view");e.fullCalendar("changeView",t)}),

                    $("body").on("click",".fullcalendar-btn-nextYear",function(a){a.preventDefault(),e.fullCalendar("nextYear")}),

                    $("body").on("click",".fullcalendar-btn-next",function(a){a.preventDefault(),e.fullCalendar("next")}),

                    $("body").on("click",".fullcalendar-btn-prev",function(a){a.preventDefault(),e.fullCalendar("prev")}),

                    $("body").on("click",".fullcalendar-btn-prevYear",function(a){a.preventDefault(),e.fullCalendar("prevYear")})
            )}()
    </script>
@endsection