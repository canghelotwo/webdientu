<?php
include('../db/connect.php');
?>
<?php
   if(isset($_POST['thembanner'])){
       $tensanpham=$_POST['tensanpham'];
       $hinhanh=$_FILES['hinhanh']['name'];
       $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
        $path='../uploads/';
       $sql_insert_product=mysqli_query($mysqli,"insert into slider(slider_image,slider_caption) value('$hinhanh','$tensanpham')");
        move_uploaded_file($hinhanh_tmp,$path.$hinhanh);

   }elseif(isset($_POST['capnhatbanner'])){
        $id_update=$_POST['id_update'];
        $tensanpham=$_POST['tensanpham'];
        $hinhanh=$_FILES['hinhanh']['name'];
        $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
        $path='../uploads/';
        if($hinhanh==''){
            $sql_update_image="update slider set slider_caption='$tensanpham' where slider_id='$id_update'";
        }else{
            move_uploaded_file($hinhanh_tmp,$path.$hinhanh);
            $sql_update_image="update slider set slider_image='$hinhanh',slider_caption='$tensanpham' where sp_id='$id_update'";
        }
        mysqli_query($mysqli,$sql_update_image);
   }
   if(isset($_GET['xoa'])){
       $id=$_GET['xoa'];
       $sql_xoa=mysqli_query($mysqli,"delete from slider where slider_id='$id'");
       
   }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Sản phẩm</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
            if(isset($_GET['quanly'])=='capnhat'){
                $id_capnhat=$_GET['capnhat_id'];
                $sql_capnhat=mysqli_query($mysqli,"select * from slider where slider_id='$id_capnhat'");
                $row_capnhat=mysqli_fetch_array($sql_capnhat);
                $id_category_1=$row_capnhat['slider_id'];
                ?>
                <div class="col-md-3">
                <h4>Cập nhật Banner</h4>
                
                <form action="" method="POST" enctype="multipart/form-data">
                    <label>Image</label>
                    <input type="file" class="form-control" name="hinhanh"><br>
                    <img src="../uploads/<?php echo $row_capnhat['slider_image'] ?>" height="100" width="80" ><br>
                    <label>Caption</label>
                    <input type="text" class="form-control" name="tensanpham" value="<?php echo $row_capnhat['slider_caption'] ?>"><br>
                    <input type="hidden" class="form-control" name="id_update" value="<?php echo $row_capnhat['slider_id'] ?>"><br>
                    <input type="submit" name="capnhatbanner" value="Cập nhật Banner" class="btn btn-default">
                </form>
            </div>
            <?php
            }else{
                ?>
                <div class="col-md-3">
                <h4>Thêm Banner</h4>
                
                <form action="" method="POST" enctype="multipart/form-data">
                    <label>Image</label>
                    <input type="file" class="form-control" name="hinhanh"><br>
                    <label>Caption</label>
                    <input type="text" class="form-control" name="caption" placeholder="caption"><br>
                    <input type="submit" name="thembanner" value="Thêm Banner" class="btn btn-default">
                </form>
            </div>
            <?php
            }
            ?>
            
            <div class="col-md-9">
            <h4>Liệt kê Banner</h4>
            <?php
            $sql_select_sp=mysqli_query($mysqli,"select * from slider order by slider_id desc")
            ?>
            <table class="table table-responsive table-bordered ">
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Caption</th>
                    <th>Xử Lý</th>
                </tr>
                <?php
                $i=0;
                while($row_sp=mysqli_fetch_array($sql_select_sp)){
                ?>
                <tr>
                    <td><?php echo $row_sp['slider_id'] ?></td> 
                    <td><img src="../uploads/<?php echo $row_sp['slider_image'] ?>" height="100" width="80"></td>
                    <td><?php echo $row_sp['slider_caption'] ?></td>
                    <td><a href="?mod=quanlybanner&xoa=<?php echo $row_sp['slider_id'] ?>">Xóa</a> | <a href="?mod=quanlybanner&quanly=capnhat&capnhat_id=<?php echo $row_sp['slider_id'] ?>">Sửa</a></td>
                </tr>
                <?php
                }
                ?>
            </table>
            </div>
        </div>
    </div>

</body>
</html>