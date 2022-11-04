@extends('template')

@section('title', 'Homepage')
@section('content')
    <div class="fs-5 text-secondary"><span>Login as</span> {{$role}}</div>
    <h1 class="fw-light">Welcome back, <b class="text-primary fw-bold">{{$name}}</b></h1>

    @switch($role)
        @case('Mahasiswa')
            <div class="row mt-5">
                <div class="col-8">
                    <h2>Jadwal Kuliah</h2>
                    <div class="list-group">
                        @for($i = 0; $i < sizeof($jadwal); $i++)
                            @if($i == 0)
                                <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">{{$jadwal[$i]['matkul']}}</h5>
                                        <small>Ruang {{$jadwal[$i]['ruangan']}}</small>
                                    </div>
                                    <p class="mb-1">Materi : {{$jadwal[$i]['desc']}}</p>
                                    <small>{{$jadwal[$i]['tanggal'].' jam '.$jadwal[$i]['jam']}}</small>
                                </a>
                            @else
                                <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">{{$jadwal[$i]['matkul']}}</h5>
                                        <small>Ruang {{$jadwal[$i]['ruangan']}}</small>
                                    </div>
                                    <p class="mb-1">Materi : {{$jadwal[$i]['desc']}}</p>
                                    <small>{{$jadwal[$i]['tanggal'].' jam '.$jadwal[$i]['jam']}}</small>
                                </a>
                            @endif
                        @endfor
                    </div>
                </div>
                <div class="col-4">
                    <h3>Matkul Diambil</h3>
                    <ul class="list-group">
                        @foreach($matkul as $dataMatkul)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{$dataMatkul}}
                                <span class="badge bg-primary rounded-pill">2</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @break

        @case('Dosen')
            <div class="row mt-5">
                <div class="col-8">
                    <h2>Jadwal Kuliah</h2>
                    <div class="list-group">
                        @php
                            $i = 0;
                        @endphp
                        @while($i < sizeof($jadwal))
                            @if($i == 0)
                                <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">{{$jadwal[$i]['matkul']}}</h5>
                                        <small>Ruang {{$jadwal[$i]['ruangan']}}</small>
                                    </div>
                                    <p class="mb-1">Materi : {{$jadwal[$i]['desc']}}</p>
                                    <small>{{$jadwal[$i]['tanggal'].' jam '.$jadwal[$i]['jam']}}</small>
                                </a>
                            @else
                                <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">{{$jadwal[$i]['matkul']}}</h5>
                                        <small>Ruang {{$jadwal[$i]['ruangan']}}</small>
                                    </div>
                                    <p class="mb-1">Materi : {{$jadwal[$i]['desc']}}</p>
                                    <small>{{$jadwal[$i]['tanggal'].' jam '.$jadwal[$i]['jam']}}</small>
                                </a>
                            @endif
                            @php
                                $i++;
                            @endphp
                        @endwhile
                    </div>
                </div>
                <div class="col-4">
                    <h3>Matkul Diambil</h3>
                    <ul class="list-group">
                        @forelse($matkul as $dataMatkul)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{$dataMatkul}}
                                <span class="badge bg-primary rounded-pill">2</span>
                            </li>
                        @empty
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Error : Matkul Tidak ditemukan
                                <span class="badge bg-primary rounded-pill">0</span>
                            </li>
                        @endforelse
                    </ul>
                </div>
            </div>
            @break

    @endswitch
@endsection
