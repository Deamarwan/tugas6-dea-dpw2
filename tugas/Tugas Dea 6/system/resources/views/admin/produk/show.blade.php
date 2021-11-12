@extends ('admin.template.base')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-3">
				<div class="card">
					<div class="card-header">
						DETAIL DATA PRODUK
					</div>
					<div class="card-body">
						<h3>{{$produk->nama}}</h3>
						<hr>
						<p>
							Rp. {{number_format($produk->harga)}} |
							Stok : {{$produk->stok}} |
							Berat : {{$produk->berat}} gr
						</p>
						<p>
							{!! nl2br($produk->deskripsi)!!}
						</p>
					</div>
				</div>				
			</div>
		</div>
	</div>
@endsection