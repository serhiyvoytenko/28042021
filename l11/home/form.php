<div class="container-fluid pb-3">
    <div class="d-grid gap-3" style="grid-template-columns: 1fr 2fr;">
        <div class="bg-light border rounded-3">
            <br><br><br><br><br><br><br><br><br><br>
        </div>
        <div class="bg-light border rounded-3 p-3">
            <form name="guest-book" method="post" action="text-handler.php">

                <div class="mb-3">
                    <b>Your name:</b><br>
                    <input name="my-name" class="form-control" autocomplete="on">
                </div>
                <p>
                    <b>Your gender:</b><br><br>
                    <input type="radio" class="" name="gender" value="male"> Man
                    <input type="radio" class="" name="gender" value="female"> Wooman
                </p>
                <p>
                    <b>Your program language:</b><br><br>
                    <select name="language">
                        <option value="php">PHP</option>
                        <option value="c++">C++</option>
                        <option value="js">JS</option>
                        <option value="java">JAVA</option>
                        <option value="jquery">Jquery</option>
                    </select>
                </p>
                <p class="mb-3"><b>Your comments:</b><br><br>
                    <textarea name="text" class="form-control" autocomplete="on"></textarea>
                </p>
                <p>
                    <button type="submit" class="btn btn-danger">SEND</button>
                </p>
            </form>
        </div>
    </div>
</div>