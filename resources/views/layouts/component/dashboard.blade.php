@extends('layouts.admin')

@section('content')

      <!-- partial -->
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="{{ asset('assets/images/dashboard/people.svg')}}" alt="people">
                  <div class="weather-info">
                    <div class="d-flex">
                      <div>
                        {{-- <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2> --}}
                      </div>
                      <div class="ml-5">

                        <h2 class=" font-weight-bold">Welcome Admin</h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Total Pemesanan</p>
                      <p class="fs-30 mb-2">1</p>
                      <p>3.00% (30 hari)</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Jumlah Costumer</p>
                      <p class="fs-30 mb-2">3</p>
                      <p>2.00% (30 hari)</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Pendapatan Transaksi</p>
                      <p class="fs-30 mb-2">4.000.000</p>
                      <p>22.00% (30 hari)</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Jumlah Villa</p>
                      <p class="fs-30 mb-2">5</p>
                      <p>0.22% (30 days)</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

@endsection
