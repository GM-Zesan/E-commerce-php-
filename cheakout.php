<?php
    include('inc/header.php');
    include 'main.php';
    $obj = new Main;
    $cus_data = $obj->checkout($_SESSION['id']);

    // if(isset($_POST['submit'])){
    //     $name = $_POST['name'];
    //     $email = $_POST['email'];
    //     $phone = $_POST['phone'];
    //     $division = $_POST['division'];
    //     $upzila = $_POST['upzila'];
    //     $postal = $_POST['postal'];
    //     $id = $_POST['id'];
    //     $obj->checkout_update($name,$email,$phone,$division,$upzila,$postal, $id);
    //         header('Location: pmethod.php');
    // }
    
?>

<div class="container mt-5">
    <h2 class="text-center">Place Your Order Here</h2>
    <form action="pmethod.php" method="post" class="pt-5 w-50 ml-auto mr-auto">

    <?php
        if($cus_data->num_rows>0){
            while($cus_row = $cus_data->fetch_object()){
    ?>

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Full Name</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control signup" value="<?php echo $cus_row->customer_Fname; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" name="email" class="form-control signup" id="email"  value="<?php echo $cus_row->customer_Email; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="phone" class="col-sm-2 col-form-label">Phone Number</label>
            <div class="col-sm-10">
                <input type="number" name="phone" class="form-control signup" id="phone" value="<?php echo $cus_row->customer_Phone; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Delivary Address</label>
            <div class="col-sm-10">
            <select class="form-control signup" name="division" id="division">
                <?php
                    $dis = $obj->show_dis();
                    if($dis->num_rows>0){
                        while($row = $dis->fetch_object()){
                ?>
                        <option class="text-dark"
                            <?php
                                if($cus_row->customer_Division === $row->id){
                            ?>
                                    selected = "selected";
                            <?php
                                }
                            ?>
                            value="<?php echo $row->id;?>"><?php echo $row->name;?>
                        </option>
                <?php
                        }
                    }
                ?>
            </select>
            </div>
            <div class="col-sm-10 ml-auto">
                <input class="form-control signup" type="text" name="upzila"  value="<?php echo $cus_row->customer_Upzila; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Postal Code</label>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-6">
                        <input type="number" name="postal"class="form-control signup"  value="<?php echo $cus_row->customer_Postal; ?>">
                    </div>
                    <input class="form-control" type="hidden" name="id" value="<?php echo $cus_row->customer_Id;?>">
                    <div class="col-sm-6 text-right pt-2">
                        
                        <button type="submit" name="submit" class="btn btn-sm btn-success"> N - e - x - t </button>
                        
                    </div>
                </div>
            </div>
        </div>

    <?php
            }
        }
    ?>

    </form>
</div>


<?php
	include('inc/footer.php');
?>