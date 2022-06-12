
@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
<!-- Footer
 ================================================== -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="widget">
                    <h5>Daha Fazlası İçin</h5>
                    <ul class="regular">
                        <li><a href="{{route('aboutus')}}">Hakkımızda</a></li>
                        <li><a href="{{route('contact')}}">İletişim</a></li>
                        <li><a href="{{route('references')}}">Referanslarımız</a></li>
                        <li><a href="{{route('faq')}}">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="span4">

            </div>
            <div class="span4">
                <div class="widget">
                    <h5>How to find us</h5>
                    <address>
                        <i class="icon-home"></i> <strong>{{$setting->company}}.</strong><br>
                        {{$setting->address}}
                    </address>
                    <p>
                        <i class="icon-phone"></i> {{$setting->phone}}<br>
                        <i class="icon-envelope-alt"></i> {{$setting->email}}
                    </p>
                </div>
                <div class="widget">
                    <ul class="social">
                        <li><a href="{{$setting->twitter}}" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square icon-32"></i></a></li>
                        <li><a href="{{$setting->facebook}}" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square icon-32"></i></a></li>
                        <li><a href="{{$setting->instagram}}" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square icon-32"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="verybottom">
        <div class="container">
            <div class="row">
                <div class="span6">
                    <p>
                        &copy; 2022 - All right reserved
                    </p>
                </div>
                <div class="span6">
                    <div class="pull-right">
                        <div class="credits">
                            <!--
                              All the links in the footer should remain intact.
                              You can delete the links only if you purchased the pro version.
                              Licensing information: https://bootstrapmade.com/license/
                              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Lumia
                            -->
                            Created by Rabia Nur SARIKAYA
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
<!-- end wrapper -->


<script src="{{asset('assets')}}/js/jquery.js"></script>
<script src="{{asset('assets')}}/js/raphael-min.js"></script>
<script src="{{asset('assets')}}/js/jquery.easing.1.3.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.js"></script>
<script src="{{asset('assets')}}/js/google-code-prettify/prettify.js"></script>
<script src="{{asset('assets')}}/js/jquery.elastislide.js"></script>
<script src="{{asset('assets')}}/js/jquery.prettyPhoto.js"></script>
<script src="{{asset('assets')}}/js/jquery.flexslider.js"></script>
<script src="{{asset('assets')}}/js/jquery-hover-effect.js"></script>
<script src="{{asset('assets')}}/js/animate.js"></script>

<!-- Template Custom JavaScript File -->
<script src="{{asset('assets')}}/js/custom.js"></script>


