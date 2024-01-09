@extends('layouts.master_backend')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
                        <div class="card">
                            <h5 class="card-header">User</h5>
                            <div class="table-responsive text-nowrap">
                              <table class="table">
                                <thead class="table-dark">
                                  <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                  </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                  @foreach ($user as $u )
                                  <tr>
                                  <td>{{ $u->id }}</td>
                                  <td>{{ $u->name }}</td>
                                  <td>{{ $u->email }}</td>
                                  <td>{{ $u->phone }}</td>
                                  <td>098-888-8888</td>
                                  <td>admin</td>
                                  <td>
                                    <a href="#"><i class='bx bxs-edit'></i></a>
                                    <a href="#"><i class='bx bx-trash'></i></a>
                                  </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                     
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div
                            class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                , made with ❤️ by
                                <a href="https://pongsawadi.ac.th/psc2019/" target="_blank"
                                    class="footer-link fw-bolder">สาขาเทคโนโลยีสารสนเทศ วิทยาลัยเทคโนโลยีพงษ์สวัสดิ์</a>
                            </div>
                          
                        </div>
                    </footer>
                    <!-- / Footer -->
                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

@endsection