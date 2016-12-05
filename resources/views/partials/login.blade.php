<!-- Modal Login -->
<div class="modal fade modal-ext" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3><i class="fa fa-user"></i> Login</h3>
            </div>

            <!--Body-->
            <form method="POST" action="/login" class="form-horizontal" role="form">
                {!! csrf_field() !!}
                <div class="modal-body">
                    <div class="md-form">
                        <i class="fa fa-envelope prefix"></i>
                        <input type="text" id="form2" class="form-control" name="email">
                        <label for="form2">Your email</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-lock prefix"></i>
                        <input type="password" id="form3" class="form-control" name="password">
                        <label for="form3">Your password</label>
                    </div>
                    <div class="text-xs-center">
                        <button type="submit" class="btn btn-primary btn-lg">Login</button>
                    </div>
                </div>
            </form>
        </div>
        <!--/.Content-->
    </div>
</div>