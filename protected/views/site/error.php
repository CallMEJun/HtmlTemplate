
<?php if($code == 404): ?>
    <div class="full-content-center animated flipInX">
        <h1>404</h1>
        <h2>The page you are looking for is definitely not this!</h2><br>
        <!-- <p class="text-lightblue-2">You better try our awesome search:</p> -->
        <div class="row">
            <div class="icon-added input-group col-sm-8 col-sm-offset-2">
               <!--  <i class="fa fa-search"></i>
                <input type="text" class="form-control">
                <span class="input-group-btn">
                    <button class="btn btn-success" type="button">Search</button>
                </span> -->
            </div>
        </div><br>
        <!-- <a class="btn btn-primary btn-sm" href="index.html"><i class="fa fa-angle-left"></i> Back to Dashboard</a> -->
    </div>
<?php elseif($code == 403): ?>
    <div class="error error403">
        <img src="/images/403.png" alt="">
    </div>
<?php else: ?>
    <div class="full-content-center animated flipInX internal-error">
        <h1>500</h1>
        <h2>We are unable to show this page to you correctly!</h2><br>
        <!-- <p class="text-lightblue-2">You better try our awesome search:</p> -->
        <div class="row">
            <div class="icon-added input-group col-sm-8 col-sm-offset-2">
               <!--  <i class="fa fa-search"></i>
                <input type="text" class="form-control">
                <span class="input-group-btn">
                    <button class="btn btn-success searchbtn" type="button">Search</button>
                  </span> -->
            </div>
        </div><br>
        <!-- <a class="btn btn-primary btn-sm backbtn" href="index.html"><i class="fa fa-angle-left"></i> Back to Dashboard</a> -->
    </div>
<?php endif; ?>