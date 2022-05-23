<div class="container">
    <h1>Create Account!</h1>
    <?php 
    if(isset($errors)){
        var_dump($errors);
        exit;
    }
    ?>

<form action="" method="POST">
    <div class="form-group">
        <label >First Name</label>
        <input type="text" name="firstname" value="<?php echo $model->firstname?>" class="form-control <?php echo $model->hasError("firstname") ? " is-invalid" : '' ?>"  aria-describedby="emailHelp" placeholder="Enter email">
        <div class="invalid-feedback">
            <?php echo $model->getFirstError("firstname") ?>
        </div>
    </div>
    <div class="form-group">
        <label >Last Name</label>
        <input type="text" name="lastname" class="form-control" value="<?php echo $model->lastname?>"  aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label >Email</label>
        <input type="email" name="email" value="<?php echo $model->email?>"  class="form-control"  placeholder="Password">
    </div>
    <div class="form-group">
        <label >Password</label>
        <input type="password" value="<?php echo $model->password?>"  name="password" class="form-control <?php echo $model->hasError("password") ? " is-invalid" : '' ?>"   aria-describedby="emailHelp" placeholder="Enter email">
        <div class="invalid-feedback">
            <?php echo $model->getFirstError("password") ?>
        </div>
    </div>
    <div class="form-group">
        <label >Confirm Password</label>
        <input type="password" value="<?php echo $model->confirmpassword?>" name="confirmpassword" class="form-control <?php echo $model->hasError("confirmpassword") ? " is-invalid" : '' ?>"  aria-describedby="emailHelp" placeholder="Enter email">
        <div class="invalid-feedback">
            <?php echo $model->getFirstError("confirmpassword") ?>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>