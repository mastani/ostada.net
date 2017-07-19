@extends('layout')
@section('content')
    <div class="container">
        <h1>استاد جو ...</h1>
        <hr class="colorgraph"/>

        <div class="container-rtl">
{{--            {{$prof}}--}}
            {{$prof->name}}
            {{--<h3>{{$prof->name}}--}}
                {{--<small>مدرس در {{$prof->university->name}} - شهر {{$prof->university->city->name}}</small>--}}
            {{--</h3>--}}
        </div>
    </div>
@stop