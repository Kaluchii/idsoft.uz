@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default" style="border: none;">
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							Неправильный логин или пароль
						</div>
					@endif

					
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group" style="text-align: center">
						<img style="width: 100px; height: 100px" src="/images/static_site_logo_0.svg" alt="IDSOFT — автоматизация торговли в Казахстане">
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Почта</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Пароль</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group" style="display: none">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input  type="checkbox" checked name="remember">Запомнить?
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Войти</button>

							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
