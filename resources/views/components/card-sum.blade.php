<div class="col-6 col-xl-3 mb-4">
    <div class="card h-100">
        <div class="card-body">
            <div class="row align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">{{ $text }}</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $value }}</div>
                
            </div>
            <div class="col-auto">
                <i class="fas fa-{{ $icon }} fa-2x text-{{ ($color) ?? 'primary' }}"></i>
            </div>
            </div>
        </div>
    </div>
</div>