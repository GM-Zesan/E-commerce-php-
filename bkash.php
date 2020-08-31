<?php
    include('inc/header.php');
?>
    <div class="container">
        <form method="post" action="" class="ml-auto mr-auto mt-5" style="width: 30%">
        <h2 style="text-align: center; letter-spacing: 2px; margin-bottom: 30px;">Payment Confirmation By Bkash</h2>

        <h6 class="text-dark text-center mb-5" style="background-color:wheat;">
            <p>Our bkash personal number:</p>
            <span>01234******</span>
        </h6>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control signup">
            </div>

            <div class="form-group">
                <label for="number">Phone Number</label>
                <input type="number" name="number" id="number" class="form-control signup">
            </div>

            <div class="form-group mb-5">
                <label for="trx">TrxId</label>
                <input type="text" name="trx" id="trx" class="form-control signup">
            </div>

            <div>
                <button type="submit" class="btn btn-success btn-block">
                    Confirm
                </button>
            </div> 
        </form>
    </div>


<?php
	include('inc/footer.php');
?>