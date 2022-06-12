<div class="widget">
    <div class="project-widget">
        <h4 class="rheading">Profil Detayları: {{Auth::user()->name}}<span></span></h4>
        <ul class="project-detail">
            <li><a href="{{route('userprofile')}}">Profilim</a></li>
            <li><a href="{{route('user_places')}}">Mekanlarım</a></li>
            <li><a href="{{route('user_review')}}">Yorumlarım</a></li>
            <li><a href="{{route('logout')}}">Logout</a></li>
        </ul>
    </div>
</div>
