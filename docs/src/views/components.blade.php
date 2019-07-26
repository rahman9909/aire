@extends('_layout')

@section('content')
	
	<h1>
		Aire Components
	</h1>
	
	<?php
	$components = [
		'input' => 'Generic Input',
		'textarea' => 'Text Area',
		'date' => 'Date Input',
		'time' => 'Time Input',
		'datetime-local' => 'Date & Time Input',
		'month' => 'Month Input',
		'week' => 'Week Input',
		'email' => 'Email Input',
		'file' => 'File Input',
		'number' => 'Number Input',
		'password' => 'Password Field',
		'radio' => 'Radio Button Group',
		'checkbox-group' => 'Checkbox Group',
		'checkbox' => 'Checkbox',
		'select' => 'Select',
		'range' => 'Range Selector',
		'search' => 'Search Input',
		'tel' => 'Phone Number Input',
		'url' => 'URL Input',
		'color' => 'Color Picker',
		'submit' => 'Submit Button',
		// 'summary' => 'Summary Helper', // FIXME
	];
	?>
	
	<ul class="pl-8 list-disc mb-6 inline-block" style="column-count: 2; column-gap: 2rem;">
		@foreach ($components as $component => $title)
			<li>
				<a href="#component-{{ $component }}">
					{{ $title }}
				</a>
			</li>
		@endforeach
	</ul>
	
	@foreach ($components as $component => $title)
		@include('_component', compact('title', 'component'))
	@endforeach

@endsection
