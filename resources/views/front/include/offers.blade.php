@if($offers->is_on == 1)
<section id="offers">
    <div class="container">
        <div class="row pb-20">
            <div class="col-md-4">
                @if(!$offers->valid1->ispast())
                <img class="w100 pb-20" src="{{asset($offers->image1)}}" alt="">
                <div class="countdown-wrap pb-20">
                    <div class="countdown item-4" data-countdown="{{$offers->valid1}}" data-format="short">
                        <div class="countdown__item">
                            <span class="countdown__time daysLeft"></span>
                            <span style="font-size: 10px" class="countdown__text daysText"></span>
                        </div>
                        <div class="countdown__item">
                            <span class="countdown__time hoursLeft"></span>
                            <span style="font-size: 10px" class="countdown__text hoursText"></span>
                        </div>
                        <div class="countdown__item">
                            <span class="countdown__time minsLeft"></span>
                            <span style="font-size: 10px" class="countdown__text minsText"></span>
                        </div>
                        <div class="countdown__item">
                            <span class="countdown__time secsLeft"></span>
                            <span style="font-size: 10px" class="countdown__text secsText"></span>
                        </div>
                    </div>
                </div>
                <input type="hidden" class="offerprice1" value="{{$offers->price1}}">
                <button data-toggle="modal" data-target="#model-quote" class="btn btn-primary pb-20 offer1">Acheter maintenant</button>
                @endif
            </div>
            <div class="col-md-4 mdn">
                <img class="w100" style="margin-top: 200px; margin-bottom: -100px" src="{{asset('front/assets/images/11.jpeg')}}" alt="">
            </div>
            <div class="col-md-4">
                @if(!$offers->valid2->ispast())
                <img class="w100 pb-20" src="{{asset($offers->image2)}}" alt="">
                <div class="countdown-wrap pb-20">
                    <div class="countdown item-4" data-countdown="{{$offers->valid2}}" data-format="short">
                        <div class="countdown__item">
                            <span class="countdown__time daysLeft"></span>
                            <span style="font-size: 10px" class="countdown__text daysText"></span>
                        </div>
                        <div class="countdown__item">
                            <span class="countdown__time hoursLeft"></span>
                            <span style="font-size: 10px" class="countdown__text hoursText"></span>
                        </div>
                        <div class="countdown__item">
                            <span class="countdown__time minsLeft"></span>
                            <span style="font-size: 10px" class="countdown__text minsText"></span>
                        </div>
                        <div class="countdown__item">
                            <span class="countdown__time secsLeft"></span>
                            <span style="font-size: 10px" class="countdown__text secsText"></span>
                        </div>
                    </div>
                </div>
                <input type="hidden" class="offerprice2" value="{{$offers->price2}}">
                <button data-toggle="modal" data-target="#model-quote" class="btn btn-primary pb-20 offer2">Acheter maintenant</button>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                @if(!$offers->valid3->ispast())
                <img class="w100 pb-20" src="{{asset($offers->image3)}}" alt="">
                <div class="countdown-wrap pb-20">
                    <div class="countdown item-4" data-countdown="{{$offers->valid3}}" data-format="short">
                        <div class="countdown__item">
                            <span class="countdown__time daysLeft"></span>
                            <span style="font-size: 10px" class="countdown__text daysText"></span>
                        </div>
                        <div class="countdown__item">
                            <span class="countdown__time hoursLeft"></span>
                            <span style="font-size: 10px" class="countdown__text hoursText"></span>
                        </div>
                        <div class="countdown__item">
                            <span class="countdown__time minsLeft"></span>
                            <span style="font-size: 10px" class="countdown__text minsText"></span>
                        </div>
                        <div class="countdown__item">
                            <span class="countdown__time secsLeft"></span>
                            <span style="font-size: 10px" class="countdown__text secsText"></span>
                        </div>
                    </div>
                </div>
                <input type="hidden" class="offerprice3" value="{{$offers->price3}}">
                <button data-toggle="modal" data-target="#model-quote" class="btn btn-primary pb-20 offer3">Acheter maintenant </button>
                @endif
            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                @if(!$offers->valid4->ispast())
                <img class="w100 pb-20" src="{{asset($offers->image4)}}" alt="">
                <div class="countdown-wrap pb-20">
                    <div class="countdown item-4" data-countdown="{{$offers->valid4}}" data-format="short">
                        <div class="countdown__item">
                            <span class="countdown__time daysLeft"></span>
                            <span style="font-size: 10px" class="countdown__text daysText"></span>
                        </div>
                        <div class="countdown__item">
                            <span class="countdown__time hoursLeft"></span>
                            <span style="font-size: 10px" class="countdown__text hoursText"></span>
                        </div>
                        <div class="countdown__item">
                            <span class="countdown__time minsLeft"></span>
                            <span style="font-size: 10px" class="countdown__text minsText"></span>
                        </div>
                        <div class="countdown__item">
                            <span class="countdown__time secsLeft"></span>
                            <span style="font-size: 10px" class="countdown__text secsText"></span>
                        </div>
                    </div>
                </div>
                <input type="hidden" class="offerprice4" value="{{$offers->price4}}">
                <button data-toggle="modal" data-target="#model-quote" class="btn btn-primary pb-20 offer4">Acheter maintenant</button>
                @endif
            </div>
        </div>
    </div>
</section>
@endif
