<div class="container py-4">
    <h5 class="mb-4 fw-bold text-dark">Welcome back 👋</h5>

    <div class="row g-3">
        @php
            $cards = [
                ['title' => 'Total Property', 'value' => $totalProperty, 'color' => 'primary', 'icon' => 'calendar-check-fill'],
                ['title' => 'Total Inquiry', 'value' => $totalInquiry, 'color' => 'warning', 'icon' => 'hourglass-split'],
                ['title' => 'Registered Users', 'value' => $totalUsers, 'color' => 'info', 'icon' => 'people-fill'],
                
            ];
        @endphp

        @foreach ($cards as $card)
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card shadow-sm border-0 bg-white stat-box">
                    <div class="card-body d-flex align-items-center justify-content-between p-2">
                        <div>
                            <div class="text-muted small">{{ $card['title'] }}</div>
                            <div class="fw-bold fs-6 text-{{ $card['color'] }}">{{ $card['value'] }}</div>
                        </div>
                        <div class="icon-sm bg-{{ $card['color'] }} text-white d-flex align-items-center justify-content-center rounded-circle">
                            <i class="bi bi-{{ $card['icon'] }} fs-6"></i>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
