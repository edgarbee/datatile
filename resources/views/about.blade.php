@extends('layouts.app')
@section('title', 'DataTile About')
@section('body-class', 'white-bg')
@section('content')
@include("includes.header")

<div class="about-us">
    <div class="line">
        <img loading="lazy" class="pc-human" src="{{ asset('assets/img/line.png') }}" alt="">
        <img loading="lazy" class="mob-human" src="{{ asset('assets/img/line1.png') }}" alt="">
    </div>
    <div class="container">
        <div class="main-section-solutions">
            <div class="main-title">
                <h1>
                    Transforming data<br class="d-xs-block"> into<br> <span class="blue">insights</span>,<br class="d-xs-block"> effortlessly
                </h1>
            </div>

            <div class="pre-text">
                <div class="black-text">
                    Long before the name DataTile<br class="d-xs-block"> was conceived, data science was <br class="d-xs-block">our<br> speciality, data our passion.                
                </div>
            </div>

            <div class="main-text-container">
                <div class="main-text">
                    <p class="black-text">
                        DataTile is a team of talented engineers, software developers and data scientists who have worked for decades in market research – all the time enduring the painful limitations of existing research tools.
                    </p>
                    <p class="black-text">
                        Created for researchers by researchers, DataTile guides data from the field to decision-makers on the client-side, while removing all the traditional pain points. Finally, a single platform that streamlines workflow from raw data through to interactive dashboards, automating reports and feeding BI systems. 
                    </p>
                    <p class="black-text">
                        Founded by Alex Chilingaryan in 2012 as a service provider, DataTile recognized that the industry was ready for a holistic platform which eliminates cumbersome data management and error-prone manual reporting. Freed from this burden, skilled researchers can focus on the important work – <em>generating the insights that inform successful business decisions.</em>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="list-founder">
    <div class="restangle-founder">
        <img loading="lazy" src="{{ asset('assets/img/restangle-5.png') }}" alt="">
    </div>
    <div class="container">
        <div class="list-founder-row">
            <div class="list-founder-container">
                <div class="list-founder-item">
                    <div class="list-founder-image">
                        <img loading="lazy" src="{{ asset('assets/img/founder-1.png') }}" alt="">
                    </div>
                    <div class="list-founder-text">
                        <h2><span class="red">Alex Chilingaryan</span></h2>
                        <p><b>Founder</b></p>

                        <p class="d-xs-none">
                            <b>Mathematician and entrepreneur</b> in the world of social researchers. <b>Technical visionary</b> who relishes building world-class systems to change the way we work.
                        </p>
                        <p class="d-xs-none">
                            <b>20 years</b> of hands on experience of software development for scientific applications, data analysis and integration.
                        </p>
                        <p class="d-xs-none">
                            <b>10 years</b> of experience in market research innovation and automation to kill pain points and improve quality of life for the industry.
                        </p>
                    </div>

                    <div class="list-founder-text d-xs-block">
                        <p>
                            <b>Mathematician and entrepreneur</b> in the world of social researchers. <b>Technical visionary</b> who relishes building world-class systems to change the way we work.
                        </p>
                        <p>
                            <b>20 years</b> of hands on experience of software development for scientific applications, data analysis and integration.
                        </p>
                        <p>
                            <b>10 years</b> of experience in market research innovation and automation to kill pain points and improve quality of life for the industry.
                        </p>
                    </div>
                </div>
            </div>

            <div class="list-founder-container">
                <div class="list-founder-item">
                    <div class="list-founder-image">
                        <img loading="lazy" src="{{ asset('assets/img/founder-2.png') }}" alt="">
                    </div>
                    <div class="list-founder-text">
                        <h2><span class="blue">Elena Koneva</span></h2>
                        <p><b>Co-founder</b></p>

                        <p class="d-xs-none">
                            <b>Pioneer of market and media research.</b> Founder and Head of the largest Russian market and media research company in the 90s.
                        </p>
                        <p class="d-xs-none">
                            Partner at Research International, BMRB, Synovate and Ipsos in the 2000s.
                        </p>
                        <p class="d-xs-none">
                            Inspired Global TGI - the first and biggest syndicated project, launched and conducted TGI in Russia for <b>18 years</b>
                        </p>
                    </div>
                    <div class="list-founder-text d-xs-block">
                        <p>
                            <b>Pioneer of market and media research.</b> Founder and Head of the largest Russian market and media research company in the 90s.
                        </p>
                        <p>
                            Partner at Research International, BMRB, Synovate and Ipsos in the 2000s.
                        </p>
                        <p>
                            Inspired Global TGI - the first and biggest syndicated project, launched and conducted TGI in Russia for <b>18 years</b>
                        </p>
                    </div>
                </div>
            </div>

            <div class="list-founder-container">
                <div class="list-founder-item">
                    <div class="list-founder-image">
                        <img loading="lazy" src="{{ asset('assets/img/founder-3.png') }}" alt="">
                    </div>
                    <div class="list-founder-text">
                        <h2><span class="yellow">Alex Maddox</span></h2>
                        <p><b>Senior Partner</b></p>

                       <p class="d-xs-none">One of the UK's <b>top research professionals</b>, smart analytics champion.</p>
                       <p class="d-xs-none">Global Client Service Director, Telmar.</p>
                       <p class="d-xs-none">Managing Director, Telmar UK focused on creative analysis and client satisfaction.</p>
                       <p class="d-xs-none">MRG Education Officer.</p>
                    </div>
                    <div class="list-founder-text d-xs-block">
                       <p>One of the UK's <b>top research professionals</b>, smart analytics champion.</p>
                       <p>Global Client Service Director, Telmar.</p>
                       <p>Managing Director, Telmar UK focused on creative analysis and client satisfaction.</p>
                       <p>MRG Education Officer.</p>
                    </div>
                </div>
            </div>

            <div class="list-founder-container">
                <div class="list-founder-item">
                    <div class="list-founder-image">
                        <img loading="lazy" src="{{ asset('assets/img/founder-4.png') }}" alt="">
                    </div>
                    <div class="list-founder-text">
                        <h2><span class="fiolet">Steve Garton</span></h2>
                        <p><b>Senior Partner</b></p>

                       <p class="d-xs-none"><b>World-first projects innovator.</b></p>
                       <p class="d-xs-none">Global Head of Media, Synovate.</p>
                       <p class="d-xs-none">Board Director, Media and IT, ACNielsen.</p>
                       <p class="d-xs-none">Global first surveys for the internet, affluent consumers and climate change.</p>
                    </div>
                    <div class="list-founder-text d-xs-block">
                       <p><b>World-first projects innovator.</b></p>
                       <p>Global Head of Media, Synovate.</p>
                       <p>Board Director, Media and IT, ACNielsen.</p>
                       <p>Global first surveys for the internet, affluent consumers and climate change.</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="partners-clients">
            <div class="our-partners">
                <h3 style="color:#E84532;">Our Partners</h3>
                <div class="our-partners-item">
                    <img loading="lazy" src="{{ asset('assets/img/logo-tiburon.png') }}" alt="">
                </div>
                <div class="our-partners-item">
                    <img loading="lazy" src="{{ asset('assets/img/logo-fastuna.png') }}" alt="">
                </div>
                <div class="our-partners-item mb-0">
                    <img loading="lazy" src="{{ asset('assets/img/logo-ctr.png') }}" alt="">
                </div>
            </div>
            <div class="our-clients">
                <h3 style="color: #AF058F;">Our Clients</h3>
                <div class="row-clients d-xs-none">
                    <div class="our-clients-item">
                        <img loading="lazy" src="{{ asset('assets/img/logo-kantar.png') }}" alt="">
                    </div>
                    <div class="our-clients-item">
                        <img loading="lazy" src="{{ asset('assets/img/logo-ipsos.png') }}" alt="">
                    </div>
                    <div class="our-clients-item">
                        <img loading="lazy" src="{{ asset('assets/img/logo-omd.png') }}" alt="">
                    </div>
                </div>

                <div class="row-clients d-xs-none">
                    <div class="our-clients-item">
                        <img loading="lazy" src="{{ asset('assets/img/logo-reppublika.png') }}" alt="">
                    </div>
                    <div class="our-clients-item">
                        <img loading="lazy" src="{{ asset('assets/img/logo-gfk.png') }}" alt="">
                    </div>
                    <div class="our-clients-item">
                        <img loading="lazy" src="{{ asset('assets/img/logo-estee-lauder.png') }}" alt="">
                    </div>
                </div>

                <div class="row-clients d-xs-flex">
                    <div class="our-clients-item">
                        <img loading="lazy" src="{{ asset('assets/img/logo-kantar.png') }}" alt="">
                    </div>
                    <div class="our-clients-item">
                        <img loading="lazy" src="{{ asset('assets/img/logo-ipsos.png') }}" alt="">
                    </div>

                    <div class="our-clients-item">
                        <img loading="lazy" src="{{ asset('assets/img/logo-reppublika.png') }}" alt="">
                    </div>
                    <div class="our-clients-item">
                        <img loading="lazy" src="{{ asset('assets/img/logo-gfk.png') }}" alt="">
                    </div>

                   

                    <div class="our-clients-item">
                        <img loading="lazy" src="{{ asset('assets/img/logo-estee-lauder.png') }}" alt="">
                    </div>

                    

                    <div class="our-clients-item">
                        <img loading="lazy" src="{{ asset('assets/img/logo-omd.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="contact" id="formSubmitTitle">
            <h2>
                How can we <span class="red">help</span>?
            </h2>

            @include("includes.form")
        </div>

        <div class="contact">
            <h2>
                Or <span class="red">reach us</span> here:
            </h2>
            
            <div class="container">
                <div class="reach">
                    <div class="reach-item">
                        <img loading="lazy" class="reach-img" src="{{ asset('assets/img/map1.png') }}" alt="">
                        <h3 class="yellow">EMEA</h3>
                        <div class="reach-text">
                            <img loading="lazy" src="{{ asset('assets/img/icon1.svg') }}" alt="">
                            <b>Alex Maddox</b>
                        </div>

                        <div class="reach-text">
                            <img loading="lazy" src="{{ asset('assets/img/icon2.svg') }}" alt="">
                            <a href="mailto:emea@datatile.eu">emea@datatile.eu</a>
                        </div>

                        <div class="reach-text">
                            <img loading="lazy" src="{{ asset('assets/img/icon3.svg') }}" alt="">
                            <a href="tel:+442035140043">+442035140043</a>
                        </div>
                    </div>

                    <div class="reach-item">
                        <img loading="lazy" class="reach-img" src="{{ asset('assets/img/map2.png') }}" alt="">
                        <h3 class="red">APAC</h3>
                        <div class="reach-text">
                            <img loading="lazy" src="{{ asset('assets/img/icon1.svg') }}" alt="">
                            <b>Steve Garton</b>
                        </div>
    
                        <div class="reach-text">
                            <img loading="lazy" src="{{ asset('assets/img/icon2.svg') }}" alt="">
                            <a href="mailto:apac@datatile.eu">apac@datatile.eu</a>
                        </div>
    
                        <div class="reach-text">
                            <img loading="lazy" src="{{ asset('assets/img/icon3.svg') }}" alt="">
                            <a href="tel:+85297618648">+85297618648</a>
                        </div>
                    </div>
                    <div class="reach-item">
                        <img loading="lazy" class="reach-img" src="{{ asset('assets/img/map3.png') }}" alt="">
                        <h3 class="fiolet">Australia</h3>
                        <div class="reach-text">
                            <img loading="lazy" src="{{ asset('assets/img/icon1.svg') }}" alt="">
                            <b>Alex Maddox</b>
                        </div>
    
                        <div class="reach-text">
                            <img loading="lazy" src="{{ asset('assets/img/icon2.svg') }}" alt="">
                            <a href="mailto:emea@datatile.eu">emea@datatile.eu</a>
                        </div>
    
                        <div class="reach-text">
                            <img loading="lazy" src="{{ asset('assets/img/icon3.svg') }}" alt="">
                            <a href="tel:+442035140043">+442035140043</a>
                        </div>
                    </div>                    
                </div>
                <div class="reach">
                    <div class="reach-item">
                        <img loading="lazy" class="reach-img" src="{{ asset('assets/img/map4.png') }}" alt="">
                        <h3 class="blue">People's Republic of China</h3>
                        <div class="reach-text">
                            <img loading="lazy" src="{{ asset('assets/img/icon1.svg') }}" alt="">
                            <b>Alex Maddox</b>
                        </div>
    
                        <div class="reach-text">
                            <img loading="lazy" src="{{ asset('assets/img/icon2.svg') }}" alt="">
                            <a href="mailto:emea@datatile.eu">emea@datatile.eu</a>
                        </div>
    
                        <div class="reach-text">
                            <img loading="lazy" src="{{ asset('assets/img/icon3.svg') }}" alt="">
                            <a href="tel:+442035140043">+442035140043</a>
                        </div>
                    </div>

                    <div class="reach-item">
                        <img loading="lazy" class="reach-img" src="{{ asset('assets/img/map5.png') }}" alt="">
                        <h3 class="yellow">Cyprus</h3>
                        <div class="reach-text">
                            <img loading="lazy" src="{{ asset('assets/img/icon1.svg') }}" alt="">
                            <b>Alex Chilingaryan</b>
                        </div>
    
                        <div class="reach-text">
                            <img loading="lazy" src="{{ asset('assets/img/icon2.svg') }}" alt="">
                            <a href="mailto:contact@datatile.eu">contact@datatile.eu</a>
                        </div>
    
                        <div class="reach-text">
                            <img loading="lazy" src="{{ asset('assets/img/icon3.svg') }}" alt="">
                            <a href="tel:+35725123534">+35725123534</a>
                        </div>

                        <div class="reach-text">
                            <img loading="lazy" src="{{ asset('assets/img/icon4.svg') }}" alt="">
                            <span>195-197 Chr. Chatzipavlou Avenue, 4th Floor Limassol 3036, Cyprus</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include("includes.footer")
@endsection