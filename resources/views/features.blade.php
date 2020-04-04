@extends('layouts')
@section('content')
    <section  style= "background: url('assets/img/mocks.png');
    background-attachment: fixed;
    background-position: top;
    background-repeat: no-repeat;
    background-size: cover;">
        <div class="wrapper">

            <div class="wrapper_wow_feat">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center ">
                            <h1 class="innerPage_title_featured" style="margin-top:0;padding-top:0;">WOW Features</h1>
                        </div>
                    </div>

                    <div class="container desktop_features">
                        <div class="row">
                            <div class="col-md-12">
                                <div role="tabpanel">
                                    <div class="col-sm-4">
                                        <ul class="nav nav-pills brand-pills nav-stacked" role="tablist">
                                            <li role="presentation" class="brand-nav active">
                                                <a href="#tab0" aria-controls="tab0" role="tab" data-toggle="tab">
                                                    <h3>Live TV</h3>
                                                    <p>130+ Live TV Channels</p>
                                                </a>
                                            </li>
                                            <li role="presentation" class="brand-nav">
                                                <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">
                                                    <h3>Movies</h3>
                                                    <p>1000+ movie collection</p>
                                                </a>
                                            </li>
                                            <li role="presentation" class="brand-nav">
                                                <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">
                                                    <h3>Vidoes</h3>
                                                    <p>1000+ videos collection </p>
                                                </a>
                                            </li>
                                            <li role="presentation" class="brand-nav">
                                                <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">
                                                    <h3>Radio</h3>
                                                    <p>50+ Nepali Radio Stations</p>
                                                </a>
                                            </li>
                                            <li role="presentation" class="brand-nav">
                                                <a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">
                                                    <h3>News</h3>
                                                    <p>5 Popular News Source</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="tab0">
                                            <img src="assets/uploads/features/desktop/live.png" alt="">
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="tab1">
                                            <img src="assets/uploads/features/desktop/movies.png" alt="">
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="tab2">
                                            <img src="assets/uploads/features/desktop/videos.png" alt="">
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="tab3">
                                            <img src="assets/uploads/features/desktop/fm.png" alt="">
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="tab4">
                                            <img src="assets/uploads/features/desktop/news.png" alt="">
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="container mobile_features">
                        <div class="row">
                            <div class="col-xs-12 text-center white_text">
                                <h3>Live TV</h3>
                                <p>130+ Live TV Channels</p>
                                <img src="assets/uploads/features/desktop/live.png" alt="" class="width-100 mg-tp-bt-20">
                                <h3>Movies</h3>
                                <p>1000+ movie collection</p>
                                <img src="assets/uploads/features/desktop/movies.png" alt="" class="width-100 mg-tp-bt-20">
                                <h3>Vidoes</h3>
                                <p>1000+ videos collection </p>
                                <img src="assets/uploads/features/desktop/videos.png" alt="" class="width-100 mg-tp-bt-20">
                                <h3>Radio</h3>
                                <p>50+ Nepali Radio Stations</p>
                                <img src="assets/uploads/features/desktop/fm.png" alt="" class="width-100 mg-tp-bt-20">
                                <h3>News</h3>
                                <p>5 Popular News Source</p>
                                <img src="assets/uploads/features/desktop/news.png" alt="" class="width-100 mg-tp-bt-20">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

    