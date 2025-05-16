@extends('layouts/admin.admin')

@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Geist:wght@100..900&display=swap');

        *{
            font-family: "Geist"
        }
        .radio-group {
            position: relative;
            display: flex;
            border-radius: 0.5rem;
            overflow: hidden;
            background-color: #f8f9fa;
        }

        .radio-group input[type="radio"] {
            display: none;
        }

        .radio-group label {
            padding: .3rem 1rem;
            cursor: pointer;
            position: relative;
            z-index: 1;
            transition: color 0.3s;
            flex: 1;

            font-family: "Geist"
            color: #6c757d;
        }

        .radio-group .slider {
            position: absolute;
            height: 100%;
            background-color: #0d6efd;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
            z-index: 0;
        }

        .radio-group input:checked+label {
            color: white;
        }
    </style>

    <div class="container-fluid p-0">
        <h2 class="mb-4 fw-bold">Dashboard</h2>
        <hr>
        {{-- <p class="text-muted">Ringkasan aktivitas pasca panen padi</p> --}}
        <!-- Summary Cards -->
        <div class="container-fluid p-0 mb-3">
            <div class="d-flex justify-content-between flex-wrap gap-3">
                <div class="radio-group d-flex bg-body-secondary">
                    <input type="radio" name="options" id="option1" checked>
                    <label for="option1">Tempat</label>

                    <input type="radio" name="options" id="option2">
                    <label for="option2">Analis</label>

                    <input type="radio" name="options" id="option3">
                    <label for="option3">Laporan</label>

                    <input type="radio" name="options" id="option4">
                    <label for="option4">Notifikasi</label>

                    <div class="slider"></div>
                </div>

                <div class="d-flex align-items-center gap-2">
                    <input id="datepicker" class="form-control" type="date" />
                    <button class="btn btn-dark">Export</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="d-flex gap-3">

            <div class="card shadow-sm p-3 text-center border-0 flex-fill">
                <div class="d-flex justify-content-between">
                    <h5>Total Petani</h5>
                    <i class="bi bi-people fs-0 mb-2"></i>
                </div>
                <p class="d-flex justify-content-start fs-3 fw-semibold">1000</p>

            </div>
            <div class="card shadow-sm p-3 text-center border-0 flex-fill">
                <div class="d-flex justify-content-between">
                    <h5>Total Penjualan Padi</h5>
                    <i class="bi bi-cart-check fs-0 mb-2 "></i>
                </div>
                <p class="d-flex justify-content-start fs-3 fw-semibold">IDR. 800.000.000</p>
            </div>
            <div class="card shadow-sm p-3 text-center border-0 flex-fill">
                <div class="d-flex justify-content-between">
                    <h5>Produksi Beras</h5>
                    <i class="bi bi-box-seam fs-0 mb-2"></i>
                </div>
                <p class="d-flex justify-content-start fs-3  fw-semibold">IDR. 800.000.000</p>
            </div>
            <div class="card shadow-sm p-3 text-center border-0 flex-fill">
                <div class="d-flex justify-content-between">
                    <h5>Total Pendapatan</h5>
                    <i class="bi bi-currency-dollar fs-0 mb-2"></i>
                </div>
                <p class="d-flex justify-content-start fs-3 fw-semibold">IDR. 800.000.000</p>
            </div>
        </div>
    </div>
    <div class="row g-3">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="card shadow-sm p-3 text-center border-0 bg-success text-white">
                <i class="bi bi-people fs-2 mb-2"></i>
                <h5>Total Petani</h5>
                <p class="fs-3 fw-bold">5</p>
                <span class="fs-6">⬆ 12% dari bulan lalu</span>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="card shadow-sm p-3 text-center border-0 bg-primary text-white">
                <i class="bi bi-cart-check fs-2 mb-2"></i>
                <h5>Total Penjualan Padi</h5>
                <p class="fs-3 fw-bold">Rp 6.035.000</p>
                <span class="fs-6">⬆ 8% dari bulan lalu</span>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="card shadow-sm p-3 text-center border-0 bg-warning text-dark">
                <i class="bi bi-box-seam fs-2 mb-2"></i>
                <h5>Produksi Beras</h5>
                <p class="fs-3 fw-bold">4.760 kg</p>
                <span class="fs-6">⬆ 5% dari bulan lalu</span>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="card shadow-sm p-3 text-center border-0 bg-danger text-white">
                <i class="bi bi-currency-dollar fs-2 mb-2"></i>
                <h5>Total Pendapatan</h5>
                <p class="fs-3 fw-bold">Rp 3.790.000</p>
                <span class="fs-6">⬆ 10% dari bulan lalu</span>
            </div>
        </div>
    </div>

    <!-- Charts -->
    <div class="row mt-3">
        <div class="col-12 col-lg-6">
            <div class="card shadow-sm p-3">
                <h5 class="text-center"><i class="bi bi-bar-chart-line"></i> Penjualan Padi (Bulanan)</h5>
                <canvas id="salesChart"></canvas>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="card shadow-sm p-3">
                <h5 class="text-center"><i class="bi bi-pie-chart"></i> Kategori Produk</h5>
                <canvas id="categoryChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Tables -->
    <div class="row mt-3">
        <div class="col-12 col-lg-6">
            <div class="card shadow-sm p-3">
                <h5 class="text-center"><i class="bi bi-clock-history"></i> Penjualan Terbaru</h5>
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Tanggal</th>
                            <th>Petani</th>
                            <th>Jumlah (kg)</th>
                            <th>Total Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>15 Jan 2024</td>
                            <td>Budi Santoso</td>
                            <td>100</td>
                            <td>Rp 500.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="card shadow-sm p-3">
                <h5 class="text-center"><i class="bi bi-exclamation-triangle"></i> Hutang Petani</h5>
                <table class="table table-hover">
                    <thead class="table-danger">
                        <tr>
                            <th>Tanggal</th>
                            <th>Petani</th>
                            <th>Jumlah Hutang</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>15 Okt 2023</td>
                            <td>Budi Santoso</td>
                            <td>Rp 500.000</td>
                            <td><span class="badge bg-warning text-dark">Belum Lunas</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

    <!-- ChartJS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const salesChart = new Chart(document.getElementById('salesChart'), {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei'],
                datasets: [{
                    label: 'Penjualan Padi',
                    data: [1200000, 1800000, 1500000, 1450000, 0],
                    backgroundColor: 'rgba(0, 128, 0, 0.7)',
                    borderColor: 'green',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true
            }
        });

        const categoryChart = new Chart(document.getElementById('categoryChart'), {
            type: 'doughnut',
            data: {
                labels: ['Pupuk', 'Pestisida', 'Benih'],
                datasets: [{
                    data: [40, 20, 40],
                    backgroundColor: ['green', 'yellow', 'blue']
                }]
            }
        });

        document.addEventListener('DOMContentLoaded', () => {
            const group = document.querySelector('.radio-group');
            const slider = group.querySelector('.slider');
            const radios = group.querySelectorAll('input[type="radio"]');

            function moveSlider() {
                const checked = group.querySelector('input:checked + label');
                if (checked) {
                    slider.style.width = checked.offsetWidth + 'px';
                    slider.style.left = checked.offsetLeft + 'px';
                }
            }

            radios.forEach(radio => {
                radio.addEventListener('change', moveSlider);
            });

            // On load
            moveSlider();
            window.addEventListener('resize', moveSlider);
        });
    </script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
@endsection
