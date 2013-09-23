@extends('admin._layouts.default')
 
@section('main')
			<div id="content-header">
				<h1>Dashboard</h1>
				<div class="btn-group">
					<a class="btn"><i class="icon-file"></i></a>
					<a class="btn" title="Manage Users"><i class="icon-user"></i></a>
					<a class="btn"><i class="icon-comment"></i><span class="label label-danger">5</span></a>
					<a class="btn"><i class="icon-shopping-cart"></i></a>
				</div>
			</div>
			<div id="breadcrumb">
				<a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
				<a href="#" class="current">Dashboard</a>
			</div>

@stop