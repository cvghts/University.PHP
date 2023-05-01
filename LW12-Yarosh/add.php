<form action="user_list.php" method="post" class="w-25">
    <div class="form-group mb-3">
        <input type="text" class="form-control" name="login" placeholder="Your Login">
    </div>

    <div class="form-group mb-3">
        <input type="password" class="form-control" name="password" placeholder="Your Password">
    </div>

    <div class="form-group mb-3">
        <input type="email" class="form-control" name="email" placeholder="Your Email">
    </div>
    
    <div class="form-group mb-3">
        <input type="submit" class="btn btn-secondary">
    </div>

    <div class="form-group">
        <input type="hidden" name="action" value="add"">
    </div>
</form>