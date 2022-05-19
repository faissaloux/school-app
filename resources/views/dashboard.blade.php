<x-app-layout>
	<!-- Page header -->
	<div class="page-header">
		<div class="page-title">
			<h3>{{ __('Dashboard') }} <small>{{ __('Welcome') }} {{ auth()->user()->name }}.</small></h3>
		</div>
	</div>
	<!-- /page header -->

	<!-- Recent activity -->
	<div class="block">
		<h6 class="heading-hr"><i class="icon-file"></i>{{ __('Recent activity') }}</h6>
		<ul class="media-list">
			@foreach ($buses as $bus)
				<li class="media">
					<div class="media-body">
						<div class="clearfix">
							<a href="{{ route('buses.students', $bus->id) }}" class="media-heading">#{{ $bus->id }}</a>
							<span class="pull-right label label-{{ $bus->onTrip() ? 'success' : 'danger' }}">
								{{ $bus->onTrip() ? __('On trip') : __('Off trip') }}
							</span>
						</div>
						<a href="{{ route('teachers.edit', $bus->teacher_id) }}">{{ $bus->teacher->name }}</a>
					</div>
				</li>
			@endforeach
		</ul>
	</div>
	<!-- /recent activity -->
</x-app-layout>
