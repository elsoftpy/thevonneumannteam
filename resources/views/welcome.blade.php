@extends('layouts.landing')

@section('content')
    @include('sections.header')
    @include('sections.takeaways')
    @include('sections.description')
    @include('sections.vnt')
    @include('sections.extension')
    @include('sections.crosswords')

        


        <!-- Description Lightbox -->
        <!-- Lightbox -->
        <div id="description-lightbox" class="lightbox-basic zoom-anim-dialog mfp-hide">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/description.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h3>Start Your Own Blog Is A Free eBook For You To Download</h3>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square text-danger"></i>
                                <div class="media-body"><strong>How to pick the subject</strong> based on your passions, expertise and a thorough analysis</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square text-danger"></i>
                                <div class="media-body"><strong>Choosing the platform</strong> for creating and hosting your blog will save you a lot of time</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square text-danger"></i>
                                <div class="media-body"><strong>How to monetize your blog</strong> after it has a lot of loyal readers that return to your blog daily</div>
                            </li>
                        </ul>
                        <a class="btn-solid-reg mfp-close page-scroll" href="#header">Free Download</a> <button class="btn-outline-reg mfp-close as-button" type="button">Back</button>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of lightbox-basic -->
        <!-- end of lightbox -->
        <!-- end of description lightbox -->


       


        


        


        


        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled li-space-lg p-small">
{{--                             <li><a href="article.html">Details</a></li>
                            <li><a href="terms.html">Terms</a></li>
                            <li><a href="privacy.html">Privacy</a></li>
 --}}                        
                        </ul>
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <p class="p-small statement">Copyright © <a href="https://thevonneumannteam.elsoft.com.py">The Von Neumann Team - 2021</a></p>
                    </div> <!-- end of col -->
                </div> <!-- enf of row -->
            </div> <!-- end of container -->
        </div> <!-- end of copyright --> 
        <!-- end of copyright -->
@endsection