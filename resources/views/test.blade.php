<div class="row">

    @foreach ($pr as $i)
        <div class="col-lg-4 col-md-6 col-12">
            <div class="projects-thumb">
                <div class="projects-info">
                    <small class="projects-tag text-white">{{ $i->jenis }}</small>

                    <h3 class="projects-title">{{ $i->nama }}</h3>
                </div>

                <a href="{{ $i->url }}" target="_blank" class="">
                    <img src="{{ asset('element/tmp/images/' . $i->image) }}"
                        class="projects-image img-fluid" alt="">
                </a>
            </div>
        </div>
    @endforeach

    <div class="row">
        <div class="col-md-6">
            {!! $pr->links() !!}
        </div>
    </div>

</div>