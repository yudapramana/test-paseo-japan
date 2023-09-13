@extends('layouts.landing.v2.master')

@section('title', 'PPID - Buat Permohonan')

@section('_styles')

{{-- Primary Meta Tags --}}
<meta name="title" content="{{$title}}">
<meta name="description" content="{{$title}}" />
<meta name="keywords" content="PPID, PPID Kementerian Agama, PPID KemenagPessel, Komisi Informasi" />
<meta name="author" content="PPID KemenagPessel" />
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
<meta name="revisit-after" content="1 Days" />

<!-- Open Graph / Facebook -->
<meta property="og:site_name" content="{{$title}}">
<meta property="og:title" content="{{$title}}">
<meta property="og:locale" content="id_ID">
<meta property="og:description" content="PPID - {{$title}}">
<meta property="og:image" content="{{ asset('sailor/img/logo.png') }}" />

<meta property="og:type" content=website />
<meta property="og:url" content="{{ URL::current() }}" />

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="{{$title}}" />
<meta name="twitter:title" content="{{$title}}" />
<meta name="twitter:description" content="PPID - {{$title}}">
<meta name="twitter:image" content="{{ asset('sailor/img/logo.png') }}" />
<meta property="twitter:url" content="{{ URL::current() }}">


<link rel="canonical" href="{{ URL::current() }}" />
<link rel="alternate" hreflang="en-US" href="{{ URL::current() }}" />
<link rel="shortcut icon" type="image/png" href="{{ URL::current() }}" />

<style>
    .greenext {
        color: #29b477;
        font-weight: 600;
        letter-spacing: 1px;
    }
</style>
@endsection

@section('content')

<hr class="pt-0 mt-0">

<!-- START SECTION CONTACT -->

<div class="container">

    <section class="py-0 my-0">

        <div class="row py-0 my-0">
            <div class="col-sm-12 py-0 my-0 wow fadeInLeft animated">

                <h3 class="greenext">Keberatan Atas Informasi</h3>


            </div>


        </div>
    </section>

    <section class="py-0 my-0">

        {{-- <form action="{{ route('permohonan.store') }}"> --}}
            <form class="needs-validation" method="post" id="permohonanForm" action={{ route('keberatan.store') }}
                role="form">
                {{ csrf_field() }}
                <hr class="styledhr">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <legend class="font-weight-bold">Formulir Ajuan Keberatan</legend>

                        <div class="form-group">
                            <label for="nomor_permohonan">Nomor Permohonan Informasi</label>
                            <input type="text" class="form-control" id="nomor_permohonan" name="nomor_permohonan"
                                aria-describedby="nomor_permohonan" placeholder="Nomor Permohonan Informasi">

                        </div>

                        <div class="form-group">
                            <label for="alasan_keberatan">Alasan Keberatan</label>
                            <textarea class="form-control" name="alasan_keberatan" id="alasan_keberatan"
                                rows="5"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="Captcha">Captcha</label>
                            <div class="captcha">
                                <span>{!! captcha_img() !!}</span>
                                <button type="button" class="btn btn-sm btn-danger" class="reload" id="reload"
                                    style="font-size:large">
                                    &#x21bb;
                                </button>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha"
                                name="captcha">
                        </div>

                        <hr class="styledhr">
                        <div class="form-group pb-5">
                            <button type="button" id="savePermohonanBtn" class="btn btn-primary float-right">Ajukan
                                Permohonan</button>
                        </div>


                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12">
                        {{-- <legend class="font-weight-bold">Persyaratan Keberatan Informasi</legend> --}}

                        <div class="p-l-10 p-rl-0-sr991 pb-3">
                            <p class="font-weight-bold" style="font-size:large;">Persyaratan Keberatan Permohonan
                                Informasi Publik
                            </p>
                            <table>
                                <tbody>
                                    <tr>
                                        <td colspan="3">Pemohon informasi publik dapat mengajukan keberatan secara
                                            tertulis kepada Atasan PPID paling lambat 30 (tiga puluh) hari kerja setelah
                                            ditemukannya alasan sebagai berikut:</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>.</td>
                                        <td> Penolakan atas permohonan informasi publik;</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>.</td>
                                        <td> tidak disediakannya informasi berkala;</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>.</td>
                                        <td> tidak ditanggapinya permohonan informasi publik;</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>.</td>
                                        <td> permohonan informasi publik ditanggapi tidak sebagaimana yang diminta;</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>.</td>
                                        <td> tidak dipenuhinya permohonan informasi publik;</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>.</td>
                                        <td> pengenaan biaya yang tidak wajar;</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">7</td>
                                        <td valign="top">.</td>
                                        <td> dan/atau penyampaian informasi publik yang melebihi waktu yang diatur dalam
                                            peraturan perundang-undangan.</td>
                                    </tr>
                                    <tr>
                                    </tr>
                                </tbody>
                            </table>
                            <div style="margin-bottom:20px;"></div>
                            <table>
                                <tbody>
                                    <tr>
                                        <td colspan="3" align="justify">Dalam hal pengajuan keberatan disampaikan secara
                                            tidak tertulis, Tim Sekretariat PPID mengarahkan Pemohon Informasi Publik
                                            yang mengajukan keberatan atau pihak penerima kuasa untuk mengisi formulir
                                            keberatan sesuai format. Dalam mengajukan keberatan, pemohon wajib
                                            menyertakan identitas pemohon yang sah sebagaimana syarat dalam permohonan
                                            informasi.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div style="margin-bottom:20px;"></div>
                            <table>
                                <tbody>
                                    <tr>
                                        <td colspan="3" align="justify">Pemohon Keberatan harus menyertakan dokumen
                                            sebagai berikut:</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>.</td>
                                        <td>Surat tanggapan/jawaban permohonan informasi dari PPID</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>.</td>
                                        <td>Formulir tanda terima permohonan informasi</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div style="margin-bottom:20px;"></div>
                            <table>
                                <tbody>
                                    <tr>
                                        <td colspan="3">Tim Sekretariat PPID wajib memberikan salinan formulir keberatan
                                            disertai nomor registrasi keberatan kepada Pemohon Informasi Publik yang
                                            mengajukan keberatan atau kuasanya sebagai tanda terima pengajuan keberatan.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>



                    </div>
                </div>


            </form>


    </section>

</div>
<!-- END SECTION CONTACT -->


@endsection


@section('_scripts')
{{-- No Data --}}

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://upload-widget.cloudinary.com/global/all.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script>
    $('#reload').click(function() {
            reloadCaptcha();
        });

        function reloadCaptcha() {
            $.ajax({
                type: 'GET',
                url: "{{ route('reload.captcha') }}",
                success: function(data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        }

        $('#savePermohonanBtn').click(function(e) {

            var formData = $('#permohonanForm').serializeArray();
            console.log(formData);

            if ($("#permohonanForm").valid()) {
                $('#savePermohonanBtn').attr("disabled", "disabled");
                e.preventDefault();

                var url = $('#permohonanForm').attr('action');

                var formdata = $("#permohonanForm").serialize(); // here $(this) refere to the form its submitting
                console.log(formdata);

                Swal.fire({
                    title: "Checking...",
                    text: "Please wait",
                    showConfirmButton: false,
                    allowOutsideClick: false,
                    timer: 1000,
                });

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: formData, // here $(this) refers to the ajax object not form
                    dataType: 'json', // let's set the expected response format
                    success: function(data) {
                        console.log(data);

                        if (data.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Keberatan Informasi berhasil disimpan dengan nomor tiket: #' + data.nomor_tiket,
                                confirmButtonText: "OK",
                                allowOutsideClick: false
                                    // , timer: 1000
                                    ,
                            }).then(function() {
                                window.location.href = "/";
                            });
                        } else {
                            $('#savePermohonanBtn').attr("disabled", false);
                            Swal.fire({
                                title: "Permohonan Gagal!",
                                text: data.message,
                                type: "error",
                                confirmButtonText: "OK",
                                allowOutsideClick: false,
                            });
                            reloadCaptcha();
                        }

                        // Swal.fire({
                        //     icon: 'success'
                        //     , title: 'Permohonan berhasil disimpan!.'
                        //     , html: 'Page will be redirected in <b></b> milliseconds.'
                        //     , timer: 2000
                        //     , showCancelButton: false
                        //     , showConfirmButton: false
                        //     , timerProgressBar: true
                        //     , allowOutsideClick: false
                        //     , willOpen: () => {
                        //         Swal.showLoading()
                        //         timerInterval = setInterval(() => {
                        //             const content = Swal.getContent()
                        //             if (content) {
                        //                 const b = content.querySelector('b')
                        //                 if (b) {
                        //                     b.textContent = Swal.getTimerLeft()
                        //                 }
                        //             }
                        //         }, 100)
                        //     }
                        //     , willClose: () => {
                        //         clearInterval(timerInterval)
                        //     }
                        // }).then((result) => {
                        //     /* Read more about handling dismissals below */
                        //     if (result.dismiss === Swal.DismissReason.timer) {
                        //         // location.reload('/');
                        //         window.location.href = "/";
                        //     }
                        // })

                    },
                    error: function(err) {



                        if (err.status == 422) { // when status code is 422, it's a validation issue
                            console.log(err.responseJSON);
                            // you can loop through the errors object and show it to the user
                            console.warn(err.responseJSON.errors);
                            // display errors on each form field
                            $('.ajax-invalid').remove();
                            $.each(err.responseJSON.errors, function(i, error) {
                                var el = $(document).find('[name="' + i + '"]');
                                el.addClass('is-invalid');
                                el.after($('<span class="error invalid-feedback" >' + error[0] + '</span>'));
                            });

                            Swal.fire({
                                title: "Pengecekan Selesai!",
                                showConfirmButton: false,
                                timer: 700
                            });
                            $('#savePermohonanBtn').attr("disabled", false);
                            reloadCaptcha();
                        } else if (err.status == 403) {
                            Swal.fire(
                                'Unauthorized!', 'You are unauthorized to do the action', 'warning'
                            );

                        }

                    }
                });


            } else {
                Swal.fire(
                    'Error!', 'Perhatian! Perbaiki isian Formulir', 'error'
                );
            }

        });

        $("#permohonanForm").validate({
            ignore: [],
            rules: {
                jenis_pemohon: {
                    required: true
                },
                jenis_identitas: {
                    required: true
                },
                nomor_identitas: {
                    required: true
                },
                nama_pemohon: {
                    required: true
                },
                email: {
                    required: true
                },
                no_telp: {
                    required: true
                },
                alamat: {
                    required: true
                },
                pekerjaan: {
                    required: true
                },
                identity_url: {
                    required: true
                },
                rincian_informasi: {
                    required: true
                },
                tujuan_penggunaan_informasi: {
                    required: true
                },
                cara_pemakaian_informasi: {
                    required: true
                },
                cara_memperoleh_informasi: {
                    required: true
                },
                bentuk_informasi: {
                    required: true
                },
                cara_mendapatkan_salinan: {
                    required: true
                },
                captcha: {
                    required: true
                },

            },
            messages: {

            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
</script>


@endsection