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
                              <h3 class="mb-0">Category</h3>
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
                                                      <?php
                                                            if(isset($res) && !empty($res)){
                                                                  $res1 = mysqli_fetch_assoc($res);
                                                            }
                                                      ?>
                                          <input type="hidden" name="catid" value="<?= (isset($res1))? $res1['catid']:''?>">

                                                      <label for="exampleInputEmail1" class="form-label">Category
                                                            Name:</label>
                                                      <input type="text" name="name" value="<?= (isset($res1))? $res1['name']:''?>" class="form-control"
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
                                                            <th>Category</th>
                                                            <th>Action</th>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                      <?php while ($row = mysqli_fetch_assoc($data)) { ?>
                                                            <tr>
                                                                  <td><?= $row['catid'] ?></td>
                                                                  <td><?= $row['name'] ?></td>
                                                                  <td>
                                                                        <a href="index.php?action=edit&id=<?= $row['catid'] ?>" class="btn btn-primary">Edit</a>
                                                                        <a href="index.php?action=delete&id=<?= $row['catid'] ?>"
                                                                              class="btn btn-danger">Delete</a>
                                                                  </td>
                                                            </tr>
                                                      <?php } ?>


                                                </tbody>
                                          </table>
                                    </div>
                                    <!-- /.card-body -->

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