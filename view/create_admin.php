
    <a href="admin_panel.php"><i class="bg-secondary text-white fas fa-long-arrow-alt-left"><span>Go back</span></i></a>

    <div class="container" style="margin-top: 20px;">

        <form action="?c=user&action=add" method="POST">

            <div class="mb-3">
                <label for="exampleInputText" class="form-label">Username</label>
                <input type="text" class="form-control" id="exampleInputtext" aria-describedby="textHelp" name="username">
                <div id="textHelp" class="form-text">Your username its personal, dont share with anyone.</div>
            </div>

            <label for="inputPassword5" class="form-label">Password</label>
            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock"  name="password">
            <div id="passwordHelpBlock" class="form-text">
                Your password must be 4-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
            </div> <br>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

</body>