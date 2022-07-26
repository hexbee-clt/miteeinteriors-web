@extends('layouts.web')

@section('content')
<!-- menu end -->

<div class="transition-fade">
    <div class="mry-content-frame" id="scroll">
        <canvas class="mry-dots" style="display: none"></canvas>

        <div class="mry-head-bg">
            <img src="{{asset('web/img/light/projects/prjct-6/1.jpg')}}" alt="background">
            <div class="mry-bg-overlay"></div>
        </div>

        <div class="mry-banner mry-p-140-0">
            <div class="container">
                <div class="mry-main-title mry-title-center">
                    <div class="mry-subtitle mry-mb-20 mry-fo">Portfolio</div>
                    <h1 class="mry-mb-20 mry-fo">Flourishing Your Home <br><span class="mry-border-text">With Impeccable Designs</span><span class="mry-animation-el"></span></h1>
                    <div class="mry-scroll-hint-frame">
                        <a class="mry-scroll-hint mry-smooth-scroll mry-magnetic-link mry-fo" href="#mry-anchor">
                            <span class="mry-magnetic-object"></span>
                        </a>
                        <div class="mry-label mry-fo">Scroll Down</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- portfolio -->
        <div class="mry-portfolio mry-p-100-100">
            <div class="container">

                <div class="mry-filter mry-mb-40 mry-fo">
                    <a href="#" data-filter="*" class="mry-card-category mry-default-link mry-current">All
                        Categories</a>
                    <a href="#" data-filter=".residential" class="mry-card-category mry-default-link">Residential interior design</a>
                    <a href="#" data-filter=".commercial" class="mry-card-category mry-default-link">Commercial interior design</a>
                    <a href="#" data-filter=".architectural" class="mry-card-category mry-default-link">Architectural Services</a>
                </div> 

                <div class="mry-portfolio-frame">
                    <div class="mry-masonry-grid mry-3-col">
                        <div class="mry-grid-sizer"></div> 
                        
                        @foreach ($projects as $project) 
                        <div class="mry-masonry-grid-item mry-masonry-grid-item-33 mry-masonry-grid-item-h-x-2 {{ $project->type }}">

                            <div class="mry-card-item">
                                <div class="mry-card-cover-frame mry-mb-20 mry-fo">
                                    <div class="mry-badge">{{ $project->type }}</div>
                                    <div class="mry-cover-overlay"></div>
                                    <img src="{{url('')}}/{{$project->location}}/{{$project->file}}" alt="project">
                                    <div class="mry-hover-links">
                                        <a href="{{url('')}}/{{$project->location}}/{{$project->file}}" data-fancybox="works"
                                            class="mry-zoom mry-magnetic-link"><span class="mry-magnetic-object"><i
                                                    class="fas fa-expand"></i></span></a>
                                        <a href="{{url('projects/'.$project->url)}}"
                                            class="mry-more mry-magnetic-link mry-anima-link"><span
                                                class="mry-magnetic-object"><i
                                                    class="fas fa-arrow-right"></i></span></a>
                                    </div>
                                </div>
                                <div class="mry-item-descr mry-fo">
                                    <h4 class="mry-mb-10"><a href="{{url('projects/'.$project->url)}}">{{$project->title}}</a></h4>
                                    <div class="mry-text">{!! Str::limit($project->contant, 150, '...') !!}</div>
                                </div>
                            </div>

                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- portfolio end -->

        <!-- footer -->
        <footer class="mry-footer">
            <div class="container">
                <div class="mry-main-title mry-title-center mry-p-0-100">
                    <h2 class="mry-h1 mry-mb-20 mry-fo">Do you have <span class="mry-border-text">a project?</span></h2>
                    <div class="mry-text mry-mb-30  mry-fo">If you have a much-awaited dream of transforming your residential and commercial spaces, you can get in touch today for the quote.</div>
                    <div class="mry-fo">
                        <a href="{{url('contact')}}" class="mry-anima-link mry-btn mry-btn-color mry-default-link">Contact</a>
                        <a href="{{url('projects')}}"
                            class="mry-anima-link  mry-btn-text mry-default-link">Projects</a>
                    </div>
                </div>
            </div>
            <div class="mry-footer-copy">
                <div class="container">
                    <div>All Rights Reserved.</div>
                    <ul class="mry-social">
						<li><a href="https://www.facebook.com/Miteeinteriors" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="https://instagram.com/miteeinteriors" target="_blank"><i class="fab fa-instagram"></i></a></li>
						<li><a href="https://www.houzz.com/hznb/professionals/interior-designers-and-decorators/mitee-interiors-pfvwin-pf~221729941" target="_blank"><i class="fab fa-houzz"></i></a></li>
                    </ul>
                    <div>Powered By <a href="https://cremountdigital.com/">Cremount Digital Solutions</a></div>
                </div>
            </div>
        </footer>
        <!-- footer end -->

        <div class="mry-head-bg mry-head-bottom">
            <img src="{{asset('web/img/light/projects/prjct-2/1.jpg')}}" alt="background">
            <div class="mry-bg-overlay"></div>
        </div>

    </div>
</div>

</div>


@endsection()
