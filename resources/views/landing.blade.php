@extends('layout/quixlab')
@section('title','Landing')

@section('add_css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
@endsection

@section('content')
<div class="center">
    <table style="margin-top:8px; margin-left:120px; margin-right:15px;">
        <tr>
            <td>
            <td>
                <h6 style="text-align:right; letter-spacing:1px;"><a href="#" class="text-dark"><b> PENGELOLAAN PEMBELAJARAN </b></h6></a>
            <td>
                <h6 style="text-align:center; letter-spacing:1px;"><a href="#" class="text-dark"><b> SUMBER BELAJAR <b></h6></a>
            <td>
                <h6 style="text-align:center; letter-spacing:1px;"><a href="#" class="text-dark"><b> EVALUASI <b></h6></a>
            <td>
                <div class="center">
                    <button onclick="window.location.href = '{{ url('/login') }}'" type="button" class="btn mb-1 btn-primary" style="height:45px;"> LOGIN </button>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <h4 style="color:#4169E1; letter-spacing:2px;"><b> WEBSITE </b></h4>
                <p style="font-size:55px; color:black; line-height:50px;"><b> Pengelolaan </b></p>
                <p style="font-size:55px; color:black; line-height:50px;"><b> Pembelajaran </b></p>
                <p style="font-size:55px; color:black; line-height:50px;"><b> Matematika. </b></p>
                <p style="text-align:justify; line-height:25px; color:#000000;">
                    Website ini memiliki fitur-fitur untuk menunjang
                    proses pembelajaran matematika di dalam kelas maupun di luar kelas.
                    Klik tombol register untuk membuat akun, dan klik tombol jika kamu
                    sudah mempunyai akun.
                </p>
                <button onclick="window.location.href = '{{ url('/register') }}'" type="button" class="btn mb-1 btn-rounded btn-primary" style="height:50px; width:100px;">Register</button>
            </td>
            <td colspan="4" style="width:1500px;">
                <img src="{{ URL::asset('assets/bg.png') }}">
            </td>
        </tr>

    </table>
</div>

<!-- Modal Demo -->
<div class="modal" id="modal_demo" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Attention</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h4><b>You are in the Demo or Portfolio mode</b></h4>
				<h5 class="text-warning"><small>Please read this before exploring</small></h5>
				<p class="text-info text-justify">
					<small>
						<strong>Note:</strong> Some feature and function has been modified, turned off and maybe disfunction
						to make it easier for explore. The data has been randomized due tue privacy
					</small>
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Got It</button>
			</div>
		</div>
	</div>
</div>
<!-- ---------- -->
@endsection

@section('add_script')
<script type="text/javascript">
	$(window).on('load', function() {
		$('#modal_demo').modal({
			backdrop: 'static',
		});
	});
</script>
@endsection
