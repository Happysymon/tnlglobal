@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger mt-3 text-center">
            {{ $error }}
        </div>
    @endforeach
@endif

@if(session('success'))
<div class="alert alert-success mt-3 text-center">{{ session('success') }}</div>
@endif

@if(session('error'))
    <div id="toastsContainerTopRight" class="toasts-top-right fixed">
        <div class="toast bg-maroon fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="mr-auto">Error</strong>
                <small>Failed</small>
                <button data-dismiss="toast" type="button" class="ml-2 mb-1 close" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="toast-body">{{ session('danger') }}</div>
        </div>
    </div>

@endif