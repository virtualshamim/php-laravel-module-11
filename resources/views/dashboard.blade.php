@extends('Layout.app')
@section('content')
<!-- Hero Section -->
<div class="page-content">
          <div class="container-fluid">
            <div class="row">
              <div class="col">
                <div class="h-100">
                  <div class="row mb-3 pb-1">
                    <div class="col-12">
                      <div
                        class="d-flex align-items-lg-center flex-lg-row flex-column"
                      >
                        <div class="flex-grow-1">
                          <h4 class="fs-16 mb-1">Good Morning, Shamim!</h4>
                          <p class="text-muted mb-0">
                            Here's what's happening with your store...
                          </p>
                        </div>
                      </div>
                      <!-- end card header -->
                    </div>
                    <!--end col-->
                  </div>
                  <!--end row-->

                  <div class="row">
                    <div class="col-xl-6 col-lg-6">
                      <!-- card -->
                      <div class="card card-animate">
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <div class="flex-grow-1 overflow-hidden">
                              <p
                                class="text-uppercase fw-medium text-muted text-truncate mb-0"
                              >
                                Sales Report
                              </p>
                            </div>
                            <div class="flex-shrink-0">
                              <h5 class="text-success fs-14 mb-0">
                                <i
                                  class="ri-arrow-right-up-line fs-13 align-middle"
                                ></i>
                                Today
                              </h5>
                            </div>
                          </div>
                          <div
                            class="d-flex align-items-end justify-content-between mt-4"
                          >
                            <div>
                              <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                                $<span
                                  class="counter-value"
                                  data-target="{{$todaySales}}"
                                  >0</span
                                >
                              </h4>
                            </div>
                           
                          </div>
                        </div>
                        <!-- end card body -->
                      </div>
                      <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-6 col-lg-6">
                      <!-- card -->
                      <div class="card card-animate">
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <div class="flex-grow-1 overflow-hidden">
                              <p
                                class="text-uppercase fw-medium text-muted text-truncate mb-0"
                              >
                                Sales Report
                              </p>
                            </div>
                            <div class="flex-shrink-0">
                              <h5 class="text-success fs-14 mb-0">
                                <i
                                  class="ri-arrow-right-up-line fs-13 align-middle"
                                ></i>
                                Yesterday
                              </h5>
                            </div>
                          </div>
                          <div
                            class="d-flex align-items-end justify-content-between mt-4"
                          >
                            <div>
                              <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                                $<span
                                  class="counter-value"
                                  data-target="{{$yesterdaySales}}"
                                  >0</span
                                >
                              </h4>
                            </div>
                           
                          </div>
                        </div>
                        <!-- end card body -->
                      </div>
                      <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-6 col-lg-6">
                      <!-- card -->
                      <div class="card card-animate">
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <div class="flex-grow-1 overflow-hidden">
                              <p
                                class="text-uppercase fw-medium text-muted text-truncate mb-0"
                              >
                                Sales Report
                              </p>
                            </div>
                            <div class="flex-shrink-0">
                              <h5 class="text-success fs-14 mb-0">
                                <i
                                  class="ri-arrow-right-up-line fs-13 align-middle"
                                ></i>
                                This Month
                              </h5>
                            </div>
                          </div>
                          <div
                            class="d-flex align-items-end justify-content-between mt-4"
                          >
                            <div>
                              <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                                $<span
                                  class="counter-value"
                                  data-target="{{$thisMonthSales}}"
                                  >0</span
                                >
                              </h4>
                            </div>
                           
                          </div>
                        </div>
                        <!-- end card body -->
                      </div>
                      <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-6 col-lg-6">
                      <!-- card -->
                      <div class="card card-animate">
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <div class="flex-grow-1 overflow-hidden">
                              <p
                                class="text-uppercase fw-medium text-muted text-truncate mb-0"
                              >
                                Sales Report
                              </p>
                            </div>
                            <div class="flex-shrink-0">
                              <h5 class="text-success fs-14 mb-0">
                                <i
                                  class="ri-arrow-right-up-line fs-13 align-middle"
                                ></i>
                                Last Month
                              </h5>
                            </div>
                          </div>
                          <div
                            class="d-flex align-items-end justify-content-between mt-4"
                          >
                            <div>
                              <h4 class="fs-22 fw-semibold ff-secondary mb-4">
                                $<span
                                  class="counter-value"
                                  data-target="{{$lastMonthSales}}"
                                  >0</span
                                >
                              </h4>
                            </div>
                           
                          </div>
                        </div>
                        <!-- end card body -->
                      </div>
                      <!-- end card -->
                    </div>
                    <!-- end col -->
                  </div>
                  <!-- end row-->
                </div>
                <!-- end .h-100-->
              </div>
              <!-- end col -->
            </div>
          </div>
          <!-- container-fluid -->
        </div>

@endsection