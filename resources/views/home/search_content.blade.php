<section id="subintro">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="search">
                    <form action="{{route('getplace')}}" method="post" class="input-append">
                        @csrf
                        @livewire('search')

                    </form>
                    @section('footerjs')
                    @livewireScripts
                    @endsection
                </div>
            </div>
        </div>
    </div>
</section>
