<div class="page-header">
  <h1>RasPi Security <small>Login</small></h1>
</div>

<?php if ($request->getMethod() === 'POST'): ?>
    <div class="alert alert-danger" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
        Login failed.
    </div>
<?php endif; ?>

<form action="<?php echo $url->generate('login') ?>" method="post">
    <div class="input-group input-group-lg">
        <span class="input-group-addon" id="sizing-addon1">@</span>
        <input type="text" name="_username" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
    </div>

    <br/>

    <div class="input-group input-group-lg">
        <span class="input-group-addon" id="sizing-addon2">@</span>
        <input type="password" name="_password" class="form-control" placeholder="Password" aria-describedby="sizing-addon1">
    </div>

    <br/>

    <input type="submit" name="login" value="Login" class="btn btn-default" />
</form>
