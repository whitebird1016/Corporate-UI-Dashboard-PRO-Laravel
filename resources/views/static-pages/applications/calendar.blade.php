<x-app-layout>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="top-0 bg-cover z-index-n1 min-height-100 max-height-200 h-25 position-absolute w-100 start-0 end-0"
            style="background-image: url('../../assets/img/header-blue-purple.jpg'); background-position: bottom;">
        </div>
        <div class="px-5 py-4 container-fluid">
            <div class="mt-6 row">
                <div class="col-xl-9">
                    <div class="card blur card-calendar">
                        <div class="pb-0 card-header">
                            <h5 class="text-lg font-weight-semibold">Calendar</h5>
                            <p><b>Tuesday 2022</b></p>
                        </div>
                        <div class="pt-0 card-body">
                            <div class="calendar" data-bs-toggle="calendar" id="calendar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="row">
                        <div class="mt-4 col-xl-12 col-md-6 mt-xl-0">
                            <div class="card blur">
                                <div class="p-3 pb-0 card-header">
                                    <h6 class="mb-0">Next events</h6>
                                </div>
                                <div class="p-3 card-body border-radius-lg">
                                    <div class="d-flex">
                                        <div>
                                            <div
                                                class="text-center shadow shadow-none icon icon-shape bg-danger-soft border-radius-md">
                                                <i class="text-lg ni ni-money-coins text-danger  opacity-10"
                                                    aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <div class="numbers">
                                                <h6 class="mb-1 text-sm text-dark">Cyber Week</h6>
                                                <span class="text-sm">27 March 2021, at 12:30 PM</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 d-flex">
                                        <div>
                                            <div
                                                class="text-center shadow shadow-none icon icon-shape bg-info-soft border-radius-md">
                                                <i class="text-lg ni ni-bell-55 text-info  opacity-10"
                                                    aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <div class="numbers">
                                                <h6 class="mb-1 text-sm text-dark">Meeting with Marry</h6>
                                                <span class="text-sm">24 March 2021, at 10:00 PM</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 d-flex">
                                        <div>
                                            <div
                                                class="text-center shadow shadow-none icon icon-shape bg-success-soft border-radius-md">
                                                <i class="text-lg ni ni-books text-success  opacity-10"
                                                    aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <div class="numbers">
                                                <h6 class="mb-1 text-sm text-dark">Book Deposit Hall</h6>
                                                <span class="text-sm">25 March 2021, at 9:30 AM</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 d-flex">
                                        <div>
                                            <div
                                                class="text-center shadow shadow-none icon icon-shape bg-warning-soft border-radius-md">
                                                <i class="text-lg ni ni-delivery-fast text-warning  opacity-10"
                                                    aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <div class="numbers">
                                                <h6 class="mb-1 text-sm text-dark">Shipment Deal UK</h6>
                                                <span class="text-sm">25 March 2021, at 2:00 PM</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 d-flex">
                                        <div>
                                            <div
                                                class="text-center shadow shadow-none icon icon-shape bg-primary-soft border-radius-md">
                                                <i class="text-lg ni ni-palette text-primary  opacity-10"
                                                    aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <div class="numbers">
                                                <h6 class="mb-1 text-sm text-dark">Verify Dashboard Color Palette</h6>
                                                <span class="text-sm">26 March 2021, at 9:00 AM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 col-xl-12 col-md-6">
                            <div class="card">
                                <div class="p-3 pb-0 card-header">
                                    <div class="row">
                                        <div class="col-7">
                                            <p class="mb-0 ">Tasks</p>
                                            <h5 class="mb-0 ">480</h5>
                                        </div>
                                        <div class="col-5 d-flex align-items-center">
                                            <div class="progress-wrapper w-100">
                                                <div class="progress-info">
                                                    <div class="progress-percentage">
                                                        <span class="text-xs font-weight-bold">60%</span>
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-dark w-60" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart">
                                        <canvas id="chart-line-widgets" class="chart-canvas" height="100"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-app.footer />
        </div>
    </main>

</x-app-layout>
<script src="../../assets/js/plugins/fullcalendar.min.js"></script>
<script>
    if (document.getElementById("calendar")) {
        let calendars = document.querySelectorAll("#calendar");
        calendars.forEach(calendar => {
            fullcalendar = new FullCalendar.Calendar(calendar, {
                contentHeight: 'auto',
                initialView: "dayGridMonth",
                headerToolbar: {
                    start: '', // will normally be on the left. if RTL, will be on the right
                    center: '',
                    end: '' // will normally be on the right. if RTL, will be on the left
                },
                selectable: true,
                editable: true,
                initialDate: '2020-12-01',
                events: [{
                        title: 'Call with Dave',
                        start: '2020-11-18',
                        end: '2020-11-18',
                        className: 'p-1 mb-2 px-2 bg-danger'
                    },

                    {
                        title: 'Lunch meeting',
                        start: '2020-11-21',
                        end: '2020-11-22',
                        className: 'p-1 mb-2 px-2 bg-warning'
                    },

                    {
                        title: 'All day conference',
                        start: '2020-11-29',
                        end: '2020-11-29',
                        className: 'p-1 mb-2 px-2 bg-success'
                    },

                    {
                        title: 'Meeting with Mary',
                        start: '2020-12-01',
                        end: '2020-12-01',
                        className: 'p-1 mb-2 px-2 bg-info'
                    },

                    {
                        title: 'Winter Hackaton',
                        start: '2020-12-03',
                        end: '2020-12-03',
                        className: 'p-1 mb-2 px-2 bg-danger'
                    },

                    {
                        title: 'Digital event',
                        start: '2020-12-07',
                        end: '2020-12-09',
                        className: 'p-1 mb-2 px-2 bg-warning'
                    },

                    {
                        title: 'Marketing event',
                        start: '2020-12-10',
                        end: '2020-12-10',
                        className: 'p-1 mb-2 px-2 bg-primary'
                    },

                    {
                        title: 'Dinner with Family',
                        start: '2020-12-19',
                        end: '2020-12-19',
                        className: 'p-1 mb-2 px-2 bg-danger'
                    },

                    {
                        title: 'Black Friday',
                        start: '2020-12-23',
                        end: '2020-12-23',
                        className: 'p-1 mb-2 px-2 bg-info'
                    },

                    {
                        title: 'Cyber Week',
                        start: '2020-12-02',
                        end: '2020-12-02',
                        className: 'p-1 mb-2 px-2 bg-warning'
                    },

                ],
                views: {
                    month: {
                        titleFormat: {
                            month: "long",
                            year: "numeric"
                        }
                    },
                    agendaWeek: {
                        titleFormat: {
                            month: "long",
                            year: "numeric",
                            day: "numeric"
                        }
                    },
                    agendaDay: {
                        titleFormat: {
                            month: "short",
                            year: "numeric",
                            day: "numeric"
                        }
                    }
                },
            });

            fullcalendar.render();
        });

    }

    var ctx = document.getElementById("chart-line-widgets").getContext("2d");

    var gradientStroke3 = ctx.createLinearGradient(0, 100, 0, 0);
    gradientStroke3.addColorStop(1, 'rgba(27, 70, 194, 0.38)');
    gradientStroke3.addColorStop(0, 'rgba(94, 114, 228, 0)');

    new Chart(ctx, {
        type: "line",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Tasks",
                tension: 0.3,
                pointRadius: 2,
                pointBackgroundColor: "#774DD3",
                borderColor: "#774DD3",
                borderWidth: 2,
                backgroundColor: gradientStroke3,
                data: [40, 45, 42, 41, 40, 43, 40, 42, 39],
                maxBarThickness: 6,
                fill: true
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                    },
                    ticks: {
                        color: '#252f40',
                        padding: 10
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                    },
                    ticks: {
                        color: '#252f40',
                        padding: 10
                    }
                },
            },
        },
    });
</script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
