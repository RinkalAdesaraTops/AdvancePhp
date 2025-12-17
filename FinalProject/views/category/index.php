<?php
include('./views/common/header.php');
include('./views/common/aside.php');
?>
<main class="app-main">
      <!--begin::App Content Header-->
      <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                  <!--begin::Row-->
                  <div class="row">
                        <div class="col-sm-6">
                              <h3 class="mb-0">General Form</h3>
                        </div>
                        <div class="col-sm-6">
                              <ol class="breadcrumb float-sm-end">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">General Form</li>
                              </ol>
                        </div>
                  </div>
                  <!--end::Row-->
            </div>
            <!--end::Container-->
      </div>
      <!--end::App Content Header-->
      <!--begin::App Content-->
      <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
                  <!--begin::Row-->
                  <div class="row g-4">
                        <!--begin::Col-->

                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6">
                              <!--begin::Quick Example-->
                              <div class="card card-primary card-outline mb-4">
                                    <!--begin::Header-->
                                    <div class="card-header">
                                          <div class="card-title">Add Category</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Form-->
                                    <form method="post" action="index.php?action=add">
                                          <!--begin::Body-->
                                          <div class="card-body">
                                                <div class="mb-3">
                                                      <label for="exampleInputEmail1" class="form-label">Category
                                                            Name:</label>
                                                      <input type="text" name="name" class="form-control"
                                                            id="exampleInputEmail1" aria-describedby="emailHelp" />

                                                </div>


                                          </div>
                                          <!--end::Body-->
                                          <!--begin::Footer-->
                                          <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                          </div>
                                          <!--end::Footer-->
                                    </form>
                                    <!--end::Form-->
                              </div>
                              <!--end::Quick Example-->

                              <!--end::Horizontal Form-->
                        </div>

                        <div class="col-md-6">
                              <div class="card mb-4">
                                    <div class="card-header">
                                          <h3 class="card-title">List Category</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                          <table class="table table-bordered">
                                                <thead>
                                                      <tr>
                                                            <th style="width: 10px">#</th>
                                                            <th>Task</th>
                                                            <th>Progress</th>
                                                            <th style="width: 40px">Label</th>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                      <tr class="align-middle">
                                                            <td>1.</td>
                                                            <td>Update software</td>
                                                            <td>
                                                                  <div class="progress progress-xs">
                                                                        <div class="progress-bar progress-bar-danger"
                                                                              style="width: 55%"></div>
                                                                  </div>
                                                            </td>
                                                            <td><span class="badge text-bg-danger">55%</span></td>
                                                      </tr>
                                                      <tr class="align-middle">
                                                            <td>2.</td>
                                                            <td>Clean database</td>
                                                            <td>
                                                                  <div class="progress progress-xs">
                                                                        <div class="progress-bar text-bg-warning"
                                                                              style="width: 70%"></div>
                                                                  </div>
                                                            </td>
                                                            <td><span class="badge text-bg-warning">70%</span></td>
                                                      </tr>
                                                      <tr class="align-middle">
                                                            <td>3.</td>
                                                            <td>Cron job running</td>
                                                            <td>
                                                                  <div
                                                                        class="progress progress-xs progress-striped active">
                                                                        <div class="progress-bar text-bg-primary"
                                                                              style="width: 30%"></div>
                                                                  </div>
                                                            </td>
                                                            <td><span class="badge text-bg-primary">30%</span></td>
                                                      </tr>
                                                      <tr class="align-middle">
                                                            <td>4.</td>
                                                            <td>Fix and squish bugs</td>
                                                            <td>
                                                                  <div
                                                                        class="progress progress-xs progress-striped active">
                                                                        <div class="progress-bar text-bg-success"
                                                                              style="width: 90%"></div>
                                                                  </div>
                                                            </td>
                                                            <td><span class="badge text-bg-success">90%</span></td>
                                                      </tr>
                                                </tbody>
                                          </table>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer clearfix">
                                          <ul class="pagination pagination-sm m-0 float-end">
                                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                          </ul>
                                    </div>
                              </div>
                        </div>
                        <!--end::Col-->

                        <!--end::Col-->
                  </div>
                  <!--end::Row-->
            </div>
            <!--end::Container-->
      </div>
      <!--end::App Content-->
</main>
<?php include('./views/common/footer.php') ?>