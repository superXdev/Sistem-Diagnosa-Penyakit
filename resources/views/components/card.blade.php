<div class="card mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-danger">{{ ($title) ?? '' }}</h6>
        {{ ($option) ?? '' }}
    </div>
    <div class="card-body"> 
    	{{ $slot }}
    </div>
</div>