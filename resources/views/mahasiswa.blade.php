@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tabel Mahasiswa</h1>
            <table class="table">
				<thead>
					<tr>
						<th>NIM</th>
						<th>Nama</th>
						<th>Email</th>
						<th>No. HP</th>
						<th>Alamat</th>
						<th>Aksi</th>
					</tr>
				</thead>
				
				<tbody>
				@foreach($mahasiswa as $i => $value)
					<tr>
						<td>{{$value->nim}}</td>
						<td>{{$value->nama}}</td>
						<td>{{$value->email}}</td>
						<td>{{$value->nohp}}</td>
						<td>{{$value->alamat}}</td>
						<td></td>
					</tr>
				@endforeach
				</tbody>
			</table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection