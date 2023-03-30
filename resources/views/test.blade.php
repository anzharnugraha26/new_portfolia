<div class="row" id="table_data">

    <div class="col-lg-8 col-md-8 col-12 ms-auto" data-aos="zoom-in">
        <div class="section-title-wrap d-flex justify-content-center align-items-center mb-4">
            <img src="{{ asset('element/tmp/images/white-desk-work-study-aesthetics.jpg') }}"
                class="avatar-image img-fluid" alt="">

            <h2 class="text-white ms-4 mb-0">Projects</h2>
        </div>
    </div>

    <div class="clearfix"></div>

    
   
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