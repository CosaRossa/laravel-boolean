@extends('layouts.main-layout')
@section('content')
<div class="main-container">

  <h3>LE LUNGHE</h3>
  <div class="long">
    @foreach ($data as $pasta)
        @if($pasta['tipo'] == 'lunga')
          <div class="img">
            <img src="{{$pasta['src']}}" alt="image">
          </div>
        @endif
    @endforeach
  </div>

  <h3>LE CORTE</h3>
  <div class="short">
    @foreach ($data as $pasta)
        @if($pasta['tipo'] == 'corta')
          <div class="img">
            <img src="{{$pasta['src']}}" alt="image">
          </div>
        @endif
    @endforeach
  </div>

  <h3>LE CORTISSIME</h3>
  <div class="shorter">
    @foreach ($data as $pasta)
      @if($pasta['tipo'] == 'cortissima')
        <div class="img">
          <img src="{{$pasta['src']}}" alt="image">
        </div>
      @endif
    @endforeach
  </div>

</div>
@endsection
