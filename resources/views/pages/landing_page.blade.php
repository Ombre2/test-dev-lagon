@extends('layouts.home')
@section('content')

<x-home />
<x-step />
<x-training />
<x-feedback />
<x-info />
<x-preparation />
<x-reservation :data="$filtered_data" />

@stop