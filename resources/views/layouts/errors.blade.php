<x-guest-layout>
	<!-- Error wrapper -->
	<div class="error-wrapper text-center">
	    <h1>{{ $code }}</h1>
        <h6>{{ $message }}</h6>

        <!-- Error content -->
        <div class="error-content">
	        <div class="row">
		        <div class="col">
		            <a href="{{ route('dashboard') }}" class="btn btn-danger btn-block">{{ __('Back') }}</a>
	            </div>
	        </div>
        </div>
        <!-- /error content -->
        
	</div>  
	<!-- /error wrapper -->
</x-guest-layout>