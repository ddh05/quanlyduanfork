@extends("layouts.admin")
@section("content")
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <div class="row-span-full" style="display: inline-block;" >

    </div>
{{--    <script>--}}
{{--        var ctx = document.getElementById('myChart').getContext('2d');--}}
{{--        var myChart = new Chart(ctx, {--}}
{{--            type: 'bar',--}}
{{--            data: {--}}
{{--                labels: {!! json_encode($dates) !!},--}}
{{--                datasets: [{--}}
{{--                    label: 'Số lượng đăng ký',--}}
{{--                    data: {!! json_encode($registrations) !!}--}}
{{--                }, {--}}
{{--                    label: 'Doanh thu',--}}
{{--                    data: {!! json_encode($revenues) !!}--}}
{{--                }, {--}}
{{--                    label: 'Số lượng chưa thanh toán',--}}
{{--                    data: {!! json_encode($unpaid) !!}--}}
{{--                }, {--}}
{{--                    label: 'Số lượng đã thanh toán',--}}
{{--                    data: {!! json_encode($paid) !!}--}}
{{--                }]--}}
{{--            },--}}
{{--            options: {--}}
{{--                scales: {--}}
{{--                    yAxes: [{--}}
{{--                        ticks: {--}}
{{--                            beginAtZero: true--}}
{{--                        }--}}
{{--                    }]--}}
{{--                }--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}
@endsection
