<?php if(!ob_start( "ob_gzhandler")) ob_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Password Generator - quickly and easily generate strong passwords</title>
    <meta name="description" content="Strong Password Generator - quickly and easily generate strong passwords" />
    <meta name="keywords" content="password, password generator, password tips, generate password online" />
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- Latest compiled and minified CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" rel="stylesheet" type="text/css">
    <link href="//simplecodetips.com/wp-content/themes/simplecodetips/fa/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:200" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="style.css" rel="stylesheet">
    <?php error_reporting(0); include_once( "../demo/ga.php"); echo "\n"; ?>
</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Password Generator</h1>
                <div class="st1">Quick and easy generate strong passwords</div>

                <div class="spacer"></div>

                <div class="form-group">
                    <div class="input-group mif">
                        <input type="text" class="form-control input-lg" rel="gp" data-size="27" id="nc" data-character-set="a-z,A-Z,0-9,#">
                        <span class="input-group-btn"><button type="button" class="btn btn-default btn-lg getNewPass"><span class="fa fa-refresh"></span>
                        </button>
                        </span>
                    </div>

                    <div class="slt">
                        <div class="row">


                            <div class="col-md-12 o7">
                                <i class="fa fa-info-circle" aria-hidden="true"></i> &nbsp; Password length: <span class="spn">27</span> characters a-z, A-Z, 0-9, #
                            </div>



                            <div class="col-md-12 pbt o7"><span class="text-nowrap bct">
<i class="fa fa-sliders" aria-hidden="true"></i> &nbsp; Set password length to:  </span>
                                <span class="l-7 rc"><a href="" class="field" id="data-nr" data-number="7">7</a></span>
                                <span class="l-9 rc"><a href="" class="field" id="data-nr" data-number="9">9</a></span>
                                <span class="l-12 rc"><a href="" class="field" id="data-nr" data-number="12">12</a></span>
                                <span class="l-18 rc"><a href="" class="field" id="data-nr" data-number="18">18</a></span>
                                <span class="l-24 rc"><a href="" class="field" id="data-nr" data-number="24">24</a></span>
                                <span class="l-32 rc"><a href="" class="field" id="data-nr" data-number="32">32</a></span>
                                <span class="l-64 rc"><a href="" class="field" id="data-nr" data-number="64">64</a></span>
                                <span class="l-128 rc"><a href="" class="field" id="data-nr" data-number="128">128</a></span>

                            </div>
                        </div>
                        <div class="pgb">

                            <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    Very strong
                                </div>
                            </div>
                        </div>


                        <div class="opa1 text-left o7">

                            <i class="fa fa-unlock-alt" aria-hidden="true"></i> &nbsp; How strong is this password?
                            <div class="hsp">
                                It would take a computer about
                                <br>
                                <span class="time-to-crack">263 DECILLION YEARS</span>
                                <br> to crack your password
                            </div>
                        </div>


                        <div class="advice">


                            <div class="atext o7">
                                <i class="fa fa-lock" aria-hidden="true"></i> &nbsp; Creating a strong password (<a href="" class="toog">read more</a>)
                            </div>

                            <div class="advice-text hsp">

                                To prevent your passwords from being hacked you should notice that:
                                <ol>

                                    <li>Do not use the same password for multiple important accounts.</li>
                                    <li>Do not use any dictionary word in your passwords.</li>
                                    <li>Use a password that has at least 16 characters, use at least one number, one uppercase letter, one lowercase letter and one special symbol.</li>
                                    <li>Do not use the names of your families, friends or pets in your passwords.</li>
                                    <li>Do not let your Web browsers store your passwords, since all passwords saved in Web browsers can be revealed easily.</li>
                                    <li>Do not log in on the computers of others, or when connected to a public Wi-Fi hotspot, Tor, free VPN or web proxy.</li>
                                    <li>Do not send sensitive information online via unencrypted(HTTP or FTP) connections - messages in these connections can be sniffed with very little effort. Instead, you should use encrypted connections such as HTTPS, SFTP, whenever possible.</li>
                                    <li>It's recommended to change your passwords every 10 weeks.</li>
                                    <li>Turn on 2-step authentication whenever possible.</li>
                                    <li>Do not store your critical passwords in the cloud.</li>
                                </ol>
                            </div>


                        </div>
                    </div>
                </div>


            </div>
        </div>

        <?php include_once( "../demo/sc.php"); echo "\n"; ?>
        <div class="container text-center footer">
            <a href="//simplecodetips.com/people/cosminr/"><?php echo 'CosminR <i class="fa fa-ellipsis-v" aria-hidden="true"></i> '.date("Y"); ?></a>
        </div>





        <script type="text/javascript">
            $("a").click(function(event) {
                event.preventDefault();
            });


            $('.toog').click(function() {
                $('.advice-text').slideToggle("slow");
            });


            $(document).ready(function() {

                $('.field').on('click mouseover', function() {
                    var $el = $(this);
                    //    console.log($el.data('number'));
                    $('.input-lg').attr('data-size', $el.data('number'));
                    $('input[rel="gp"]').each(function() {
                        $(this).val(randString($(this)));
                    });
                });
                //  $(".field").removeClass("label-info");
                $(".field").on('click mouseover', function() {
                    $(".spn").html($(this).attr("data-number"));
                    // remove classes from all
                    $(".field").removeClass("nrh");
                    // add class to the one we clicked
                    $(this).addClass("nrh");
                    //   $(".progress-bar").removeClass("progress-bar-danger");    
                    //   $(".progress-bar").addClass("progress-bar-info"); 

                    var xx = $('.input-lg').attr('data-size');

                    if (xx > 99) {
                        xx = 99;
                    }

                    var newprogress = xx;
                    var newprogress1 = xx;
                    newprogress1 += "%";

                    $(".field").removeClass("progress-bar-");

                    if (xx < 10) {

                        xxp = "Strong";
                        $(".progress-bar").addClass("progress-bar-warning");
                        $(".progress-bar").removeClass("progress-bar-success progress-bar-war progress-bar-info");

                    }

                    if (xx == 12) {

                        xxp = "Strong";
                        $(".progress-bar").addClass("progress-bar-war");
                        $(".progress-bar").removeClass("progress-bar-success progress-bar-warning progress-bar-info");

                    }

                    if (xx < 33 && xx > 13) {

                        xxp = "Very strong";
                        $(".progress-bar").addClass("progress-bar-info");
                        $(".progress-bar").removeClass("progress-bar-war progress-bar-success progress-bar-warning progress-bar-war");
                    }
                    if (xx < 129 && xx > 32) {

                        xxp = "Unbelievably strong";
                        $(".progress-bar").addClass("progress-bar-success");
                        $(".progress-bar").removeClass("progress-bar-info progress-bar-warning progress-bar-war");

                    }

                    $('.progress-bar').text(xxp);
                    $('.progress-bar').attr('aria-valuenow', newprogress).css('width', newprogress1);

                    // how long to crack password...

                    var ttc = $('.input-lg').attr('data-size');

                    switch (ttc) {
                        case '7':
                            ttc = 'A FEW MINUTES';
                            break;
                        case '9':
                            ttc = 'A FEW MONTHS';
                            break;
                        case '12':
                            ttc = 'SEVERAL THOUSAND OF YEARS';
                            break;
                        case '18':
                            ttc = 'SEVERAL QUADRILLION YEARS';
                            break;
                        case '24':
                            ttc = 'A FEW OCTILLION YEARS';
                            break;
                        case '32':
                            ttc = 'A FEW TREDECILLION YEARS';
                            break;
                        case '64':
                            ttc = '6 QUINQUATRIGINTILLION YEARS';
                            break;
                        case '128':
                            ttc = 'ULTRA HIGHT STRONG PASSWORD';
                            break;
                    }




                    $('.time-to-crack').text(ttc);




                    // end - how long to crack password...




                    console.log(xx);

                });
            });
        </script>





        <script type="text/javascript">
            // Generate a password string
            function randString(id) {
                var dataSet = $(id).attr('data-character-set').split(',');
                var possible = '';
                if ($.inArray('a-z', dataSet) >= 0) {
                    possible += 'abcdefghijklmnopqrstuvwxyz';
                }
                if ($.inArray('A-Z', dataSet) >= 0) {
                    possible += 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                }
                if ($.inArray('0-9', dataSet) >= 0) {
                    possible += '0123456789';
                }
                if ($.inArray('#', dataSet) >= 0) {
                    possible += '![]{}()%&*$#^<>~@|';
                }
                var text = '';
                for (var i = 0; i < $(id).attr('data-size'); i++) {
                    text += possible.charAt(Math.floor(Math.random() * possible.length));
                }
                return text;
            }

            // Create a new password on page load
            $('input[rel="gp"]').each(function() {
                $(this).val(randString($(this)));
            });

            // Create a new password
            $(".getNewPass").click(function() {
                var field = $(this).closest('div').find('input[rel="gp"]');
                field.val(randString(field));
            });

            // Auto Select Pass On Focus
            $('input[rel="gp"]').on("click", function() {
                $(this).select();
            });
        </script>


</body>

</html>