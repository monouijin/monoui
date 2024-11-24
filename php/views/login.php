<?php

namespace view\login;

function index()
{
?>
<h2 class="w3-container w3-teal ">Login</h2>
<form action="" method="POST" class="w3-container w3-padding">
        <label for="id">Username </label>
        <input type="text" name="id" value="<?php if(isset($_POST['id'])){ echo strip_tags($_POST['id']);}?>" class="w3-input w3-border">
        <label for="pwd">Password</label>
        <input type="password" name="pwd" class="w3-input w3-border">
        <p><input type="submit" name="log" value="Login" class="w3-btn w3-teal mt-3"></p>
        <p>アカウント登録がまだの方はこちら！</p>
        <div>
            <a href="<?php the_url('register') ?>" class="w3-btn w3-teal">アカウント登録</a>
        </div>
    </form>
<?php } ?>