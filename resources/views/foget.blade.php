<!DOCTYPE html>
<html>
<head>
    @include('head')
    <title>找回密码 - 地球上的猫数据迁移系统</title>
</head>


<body>


<!-- Begin page -->
<div class="accountbg"></div>
<div class="wrapper-page">

    <div class="card">
        <div class="card-body">

            <h3 class="text-center mt-0 m-b-15">
                <a href="/login" class="logo logo-admin"><img src="assets/images/logo.png" height="40" alt="logo"></a>
            </h3>

            <div class="p-3">
                <div class="form-group row">
                    <div class="col-12">
                        <input class="form-control" type="text" required="" placeholder="Email" name="email" id="email">
                    </div>
                </div>

                <div class="form-group text-center row m-t-20">
                    <div class="col-12">
                        <button class="btn btn-danger btn-block waves-effect waves-light" onclick="is_login()">点击找回</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    function is_login() {
        $.ajax({
            type: 'POST',
            url:"{{url('foget')}}",
            data: {
                "email": $('#email').val(),
                "_token": "{{ csrf_token() }}",
            },
            success: function (data) {
                if (data == 'success') {
                    alert('新密码已发送到您的邮箱，请检查');
                    window.location.href = '/login';
                }
                else alert('发送失败,请检查您的邮箱地址');
            },
            error: function (reject) {
                console.log(reject);
            }
        });
    }
</script>

<!-- jQuery  -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/modernizr.min.js"></script>
<script src="/assets/js/waves.js"></script>
<script src="/assets/js/jquery.slimscroll.js"></script>
<script src="/assets/js/jquery.nicescroll.js"></script>
<script src="/assets/js/jquery.scrollTo.min.js"></script>

<!-- App js -->
<script src="/assets/js/app.js"></script>

</body>
</html>