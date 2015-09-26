<?php
echo view('authentication.header',array('title'=>$title));
?>
<div class='container'>

<h1></h1>
<div class='loginBox well'>
<h3><i class='glyphicon glyphicon-hand-right'></i> Login Here</h3><hr>
<form method='post' action='doLogin'>
<label>Email</label>
<input type='email' required='required' name='canteen_email' id='canteen_email' class='form-control' autocomplete='off'>
<label>Password</label>
<input type='password' required='required' name='canteen_password' id='canteen_password' class='form-control' autocomplete='off'>
<div style='text-align:center;padding-top:20px;'>
<button type='submit' name='canteen_login' class='btn btn-primary'>Login </button>
</div>
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
</form>
</div>


<div> <!-- Container ends -->
<?php
echo view('authentication.footer');
?>