<?php 
    include ("../layout/header.php");
?>
      <div class="bg-light" style="height: 800px; width: 80%; float: right;">
            <div class="headersp">
                <div class="row">
                    <div class="col-6">
                        <h1>sửa loại sản phẩm</h1>
                    </div>
                </div>
                <div class="container-fluid">

                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tên loại sản phẩm</label>
                            <input type="text" class="form-control" name="name" value="nước hoa">
                        </div>
                        <div class="form-group form-check">
                            <button type="submit" name="add_sp" class="btn btn-primary">Cập nhật</button>
                    </form>
                    </div>

                </div>
            </div>
        </div>
<?php 
    include ("../layout/footer.php");
?>