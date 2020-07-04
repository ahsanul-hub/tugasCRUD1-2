@extends('index')
@section('content')

<div class="card " style="margin-left:265px;">
    <a href="{{url('/pertanyaan/create')}}">
        <button class="btn btn-primary">Create New Question</button>
    </a><br>
    <table class="table table-bordered">
            <thead>
                <th>No</th>
                <th>List Pertanyaan</th>
                <th>Jawaban</th>
            </thead>
            <tbody>
                @foreach ($pertanyaans as $pertanyaan)
                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$pertanyaan->isi}}</td>
                <td>
                <form action="{{url('/jawaban/'.$pertanyaan->id)}}" method="POST">
                @csrf
                <input type="text" name="isi">
                <input hidden name="pertanyaan_id" value="{{$pertanyaan->id}}">
                <input hidden name="tanggal_dibuat" value="{{\Carbon\Carbon::now()}}">
                <input hidden name="tanggal_diperbarui" value="{{\Carbon\Carbon::now()}}">    
                <button class="btn btn-success" type="submit">Submit Jawaban</button>      
                </form>
                </td>
                </tr>
                @endforeach
            </tbody>
    </table>
</div>



@endsection