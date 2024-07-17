<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@latest/dist/apexcharts.css">



    <title></title>

    @vite('resources/css/fonts.css')
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class=" overflow-y-auto w-full h-full
                                 [&::-webkit-scrollbar]:w-2
                                 [&::-webkit-scrollbar-track]:
                                 [&::-webkit-scrollbar-track]:bg-gray-100
                                 [&::-webkit-scrollbar-thumb]:rounded-full
                                 [&::-webkit-scrollbar-thumb]:bg-gray-300
                                 dark:[&::-webkit-scrollbar-track]:bg-neutral-700
                                 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@latest/dist/apexcharts.min.js"></script>
    <script src="https://preline.co/assets/js/hs-apexcharts-helpers.js"></script>


    <script src="https://preline.co/assets/js/hs-apexcharts-helpers.js"></script>

    <script src="https://preline.co/assets/js/hs-apexcharts-helpers.js"></script>

    <script src="https://preline.co/assets/js/hs-apexcharts-helpers.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("TransactionSeeAll").addEventListener("click", function() {
                const transactionView = document.getElementById("TransactionView");
                transactionView.classList.toggle("max-h-[14rem]");
              
                
            });

            document.getElementById("ScheduleSeeAll").addEventListener("click", function() {
                const scheduleView = document.getElementById("ScheduleView");
                scheduleView.classList.toggle("max-h-[14rem]"); 
              
                
            });

            document.getElementById("AccountSeeAll").addEventListener("click", function() {
                const scheduleView = document.getElementById("AccountView");
                scheduleView.classList.toggle("max-h-[14rem]");
              
                
            });

          

            
            
        });
    </script>
    <script>
        window.addEventListener('load', () => {
            // Apex Line Chart
            (function() {
                buildChart('#hs-curved-area-charts', (mode) => ({
                    chart: {
                        height: 300,
                        type: 'area',
                        toolbar: {
                            show: false
                        },
                        zoom: {
                            enabled: false
                        }
                    },
                    // series: [{
                    //         name: 'Income',
                    //         data: [2000, 12000, 9000, 30000, 23000]
                    //     },
                    //     {
                    //         name: 'Expense',
                    //         data: [6000, 8000, 6000, 24000, 4000]
                    //     }
                    // ],
                    series: [{
                        name: 'Income',
                        data: incomeData
                    },
                    {
                        name: 'Expense',
                        data: expenseData
                    }],
                    legend: {
                        show: false
                    },
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        curve: 'smooth',
                        width: 2
                    },
                    grid: {
                        strokeDashArray: 3
                       
                    },

                    xaxis: {
                        type: 'category',
                        tickPlacement: 'on',
                        categories: [
                            'January',
                            'Febuary',
                            'March',
                            'April',
                            'May',
                            'June',
                            'July',
                            'August',
                            'September',
                            'October',
                            'November',
                            'December',
                      

                        ],
                        axisBorder: {
                            show: true,
                            color: '#AAAAAA'
                            
                        },
                        axisTicks: {
                            show: false
                        },
                        crosshairs: {
                            stroke: {
                                dashArray: 0
                            },
                            dropShadow: {
                                show: false
                            }
                        },
                        tooltip: {
                            enabled: false
                        },
                        labels: {
                            style: {
                                colors: '#AAAAAA',
                                fontSize: '8px',
                                fontFamily: 'SkModernist, sans-serif',
                                fontWeight: 400
                            },
                            formatter: (title) => {
                                return title;
                            }
                        }
                    },
                    yaxis: {
                        labels: {
                            align: 'left',
                            minWidth: 0,
                            maxWidth: 140,
                            style: {
                                colors: '#AAAAAA',
                                fontSize: '8px',
                                fontFamily: 'SkModernist, sans-serif',
                                fontWeight: 400
                            },
                            formatter: (value) => `₱ ${value.toLocaleString('en-US')}`
                        },
                        
                        axisBorder: {
                            show: true,
                            color: '#AAAAAA'
                        },
                    },
                    tooltip: {
                        x: {
                            format: 'MMMM yyyy'
                        },
                        y: {
                            formatter: (value) => `$${value >= 1000 ? `${value / 1000}k` : value}`
                        },
                        custom: function(props) {
                            const {
                                categories
                            } = props.ctx.opts.xaxis;
                            const {
                                dataPointIndex
                            } = props;
                            const title = categories[dataPointIndex].split(' ');
                            const newTitle = `${title[0]} ${title[1]}`;

                            return buildTooltip(props, {
                                title: newTitle,
                                mode,
                                hasTextLabel: true,
                                wrapperExtClasses: 'min-w-18',
                                labelDivider: ':',
                                labelExtClasses: 'ms-2'
                            });
                        }
                    },
                    responsive: [{
                        breakpoint:250,
                        options: {
                            chart: {
                                height: 250
                            },
                            labels: {
                                style: {
                                    colors: '#AAAAAA',
                                    fontSize: '8px',
                                    fontFamily: 'sk',
                                    fontWeight: 400
                                },
                                offsetX: -2,
                                formatter: (value) => value
                            },
                            yaxis: {
                                labels: {
                                    align: 'left',
                                    minWidth: 0,
                                    maxWidth: 140,
                                    style: {
                                        colors: '#AAAAAA',
                                        fontSize: '8px',
                                        fontFamily: 'sk',
                                        fontWeight: 400
                                    },
                                    formatter: (value) => value >= 1000 ?
                                        `${value / 1000}k` : value
                                }
                            },
                        },
                    }]
                }), {
                    colors: ['#05D9FF', '#FF0000'],
                    fill: {

                    },
                    xaxis: {
                        labels: {
                            style: {
                                colors: '#AAAAAA'
                            }
                        }
                    },
                    yaxis: {
                        labels: {
                            style: {
                                colors: '#AAAAAA'
                            }
                        }
                    },
                    grid: {
                        borderColor: '#3E3E3E'
                    }
                }, {
                    colors: ['#FF0000', '#FF0000'],
                    fill: {

                    },
                    xaxis: {
                        labels: {
                            style: {
                                colors: '#548088',
                            }
                        }
                    },
                    yaxis: {
                        labels: {
                            style: {
                                colors: '#a3a3a3'
                            }
                        }
                    },
                    grid: {
                        borderColor: '#404040'
                    }
                });
            })();
        });
    </script>
     <script>
        document.getElementById("ViewAccounts").addEventListener("click", function() {
                    window.location.href = "{{ route('accounts.accounts') }}";
                })
    
                document.getElementById("ViewDashboard").addEventListener("click", function() {
                    window.location.href = "{{ route('dashboard.dashboard') }}";
                })
        </script>
</body>

</html>
