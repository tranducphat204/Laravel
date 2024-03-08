<!-- Cbhuyển tất cả mã html sang dạng thực thể: giúp an toàn hơn -->
<h2>{{$welcome}}</h2>
<!-- Toán tử ba ngôi và cần biên dịch html -->
{{-- <h2>{{!empty(request() -> keyword)?request()->keyword:'Không có gì'}}</h2>
<div class="container">
    {!!$content!!}
</div>

@for($i =1;$i <=10;$i++) <p>Phần thử thứ: {{$i}}</p>
    @endfor

    @while($index <= 10) <p>Phần thử thứ: {{$index}}</p>
        @php
        $index++;
        @endphp
        @endwhile --}}

        {{-- @foreach ($dataArr as $key =>$item)
        <p>Phần tử: {{$item}} - {{$key}}</p>
        @endforeach

        @forelse ($dataArr as $item)
        <p>Phần tử: {{$item}}</p>
        @empty
        <p>Không có phần tử nào</p>
        @endforelse

        @if ($number >=10)
        <p>Đây là giá trị hợp lệ</p>
        @elseif ($number <0) <p>SỐ âm</p>
            @else
            <p>Giá trị không hợp lẹ</p>
            @endif

            @switch($number)
            @case(1)
            @case(4)
            @case(7)
            <p>Số thứ nhất</p>
            @break
            @case(2)
            <p>SỐ thứ hai</p>
            @break
            @default
            <p>số còn lại</p>
            @endswitch

            @php
            $numeber =10;
            if($number >= 10){
            $total += 10;
            }else
            $total = $number +20;
            @endphp
            <h3>kết quả {{$number}} - total: {{$total}}</h3> --}}

            {{-- @forelse ($dataArr as $item)
            <p>Phần tử: {{$item}}</p>
            @empty
            <p>Không có phần tử nào</p>
            @endforelse --}}
            <!-- Chỉ comment html chứ lệnh vẫn chạy -->


            {{-- @forelse ($dataArr as $item)
            <p>Phần tử: {{$item}}</p>
            @empty
            <p>Không có phần tử nào</p>
            @endforelse -->
            <!-- Chỉ comment html chứ lệnh vẫn chạy --}}
            <!-- Comment dành cho templte -->

            {{--@php
            $message ='Đặt hàng thành công';
            @endphp--}}
            @include('parts.notice')

            @extends('layouts.client')
            @section('title')
            <h1>Trang chủ</h1>
            @endsection

            @section('css')
            @endsection

            @section('content')
            <h1>Trang chủ</h1>
            @datatime('2022-12-03 15:00:00')
            @datatime("2022-12-06 15:00:00")
            @env(production')
            <x-alert type="info" :content="$message" data-icon="youtube" />
            <!-- <x-inputs.button/>

            <x-forms.button /> -->
            <p><img src="https://vcdn1-dulich.vnecdn.net/2021/07/16/1-1626437591.jpg?w=460&h=0&q=100&dpr=2&fit=crop&s=i2M2IgCcw574LT-bXFY92g" alt="Ảnh"></p>
            <p><a href="{{route('downImg',['link' => 'https://vcdn1-dulich.vnecdn.net/2021/07/16/1-1626437591.jpg?w=460&h=0&q=100&dpr=2&fit=crop&s=i2M2IgCcw574LT-bXFY92g'])}}" class="btn btn-primary">Download ảnh</a></p>
            @endsection

            @section ('css')
            <style>
                img {
                    max-width: 100%;
                    height: auto;
                }
            </style>
            @section('js')
            @endsection