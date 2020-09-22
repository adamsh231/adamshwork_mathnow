<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LINEARICONS -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('assets/icon.png') }}">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{ URL::asset('quixlab/css/style_login.css') }}">
</head>

<body>
    <div class="wrapper">
        <div class="inner">
            @if (session('status'))
            <button style="color:yellow; margin-top:0">
                <b>{{ session('status') }}</b>
            </button>
            @endif

            <img src="{{ URL::asset('assets/image-1.png') }}" alt="" class="image-1">
            <form action="{{ url('/login') }}" method="POST">
                @csrf
                <h3>Sign In</h3>
                {{-- <div class="form-holder" @error('username') style="margin-bottom: 0" @enderror>
                    <span class="lnr lnr-user"></span>
                    <input type="text" class="form-control" value="{{ old('username') }}" name="username" placeholder="Username">
                </div>
                @error('username')
                <small style="color: red; margin-left:40px">{{ $message }}</small>
                @enderror
                <div class="form-holder" @error('password') style="margin-bottom: 0" @enderror>
                    <span class="lnr lnr-lock"></span>
                    <input type="password" class="form-control" value="{{ old('password') }}" name="password" placeholder="Password">
                </div>
                @error('password')
                <small style="color: red; margin-left:40px">{{ $message }}</small>
                @enderror --}}

                <input name="username" type="hidden" id="username">
                <input name="password" type="hidden" id="password">

                <button type="submit" onclick="login(1)">
                    <span>Sign In Teacher</span>
                </button>
                <button type="submit" onclick="login(2)">
                    <span>Sign In Student</span>
                </button>
                <br>
                <p style="float: right"><a href="{{ url('/register') }}"> Sign Up</a></p>
            </form>
            <img src="{{ asset('assets/image-2.png') }}" alt="" class="image-2">
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>

    <script>
		function login(id){
			if(id == 1){
				$('#username').val('admin');
				$('#password').val('admin');
			}else{
				$('#username').val('user');
				$('#password').val('user');
			}
		}
	</script>

</body>

</html>
