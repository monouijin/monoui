<?php

namespace view\login;

function index()
{
?>
    <h1>ログイン</h1>
    <form action="<?php echo CURRENT_URI; ?>" method="POST">
        <div class="my-5">
            <div class="login-form bg-white p-4 shadow-sm mx-auto rounded">
                <form action="<?php echo CURRENT_URI; ?>" method="POST">
                    <div class="form-group">
                        <label for="id">ユーザーID</label>
                        <input id="id" type="text" name="id" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pwd">パスワード</label>
                        <input id="pwd" type="password" name="pwd" class="form-control">
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <a href="<?php the_url('register'); ?>">アカウント登録はこちら！</a>
                        </div>
                        <div>
                            <input type="submit" value="ログイン" class="btn btn-primary shadow-sm">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
<?php } ?>