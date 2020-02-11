@extends('layout')

@section('content')
    {{ $welcome }}{{ $data['title'] }} {{-- pra renderizar data, vc usa 2 brackets e a variavel passada --}}
    {{-- se vc quiser deixar o negocio em bold, ce tira um dos bracets {{ e coloca !! !! no lugar dessas bracets --}}
@endsection 