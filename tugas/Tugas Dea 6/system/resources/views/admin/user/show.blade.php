@extends ('admin.template.base')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-3">
				<div class="card">
					<div class="card-header">
							detail Data user
					</div>

					<div class="card-body">
							<h1> {{ $user->nama }}</h1>

							<p>
									{{"@". $user->username }} <br>
									email : {{ $user->email }} 
							</p>
					
					</div>
			</div>				
			</div>
		</div>
	</div>
@endsection