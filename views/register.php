<div class="container">
    <h1>Create Account!</h1>
    <?php $form =  \app\core\form\Form::begin("", "POST")?>
    <div class="row">
        <div class="col">
            <?php  echo $form->field($model, "firstname") ?>
        </div>
        <div class="col">
        <?php  echo $form->field($model, "lastname") ?>
        </div>
    </div>

        <?php  echo $form->field($model, "email") ?>
        <?php  echo $form->field($model, "password")->passwordField() ?>
        <?php  echo $form->field($model, "confirmpassword")->passwordField() ?>
        <button type="submit" class="btn btn-primary">Submit</button>
    <?php echo \app\core\form\Form::end()?>

</div>