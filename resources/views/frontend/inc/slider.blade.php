<section class="main-slider revolution-slider">
    	
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>

                @foreach($sliders as $slider)
                
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="{{asset($slider->image)}}"  data-saveperformance="off"  data-title="Awesome Title Here">
                <img src="{{asset($slider->image)}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                
                
                <div class="tp-caption sfl sfb tp-resizeme"
                data-x="left" data-hoffset="15"
                data-y="center" data-voffset="-150"
                data-speed="1500"
                data-start="500"
                data-easing="easeOutExpo"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.3"
                data-endspeed="1200"
                data-endeasing="Power4.easeIn"><div class="circular-drop">0<sub>2</sub></div></div>
                
                <div class="tp-caption sfr sfb tp-resizeme"
                data-x="left" data-hoffset="90"
                data-y="center" data-voffset="-50"
                data-speed="1500"
                data-start="1000"
                data-easing="easeOutExpo"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.3"
                data-endspeed="1200"
                data-endeasing="Power4.easeIn"><h1><span class="normal-font">{{$slider->ftitle}}</span></h1></div>
                
                <div class="tp-caption sfl sfb tp-resizeme"
                data-x="left" data-hoffset="90"
                data-y="center" data-voffset="40"
                data-speed="1500"
                data-start="1500"
                data-easing="easeOutExpo"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.3"
                data-endspeed="1200"
                data-endeasing="Power4.easeIn"><h3 class="bg-color">{{$slider->stitle}}</h3></div>
                
                <div class="tp-caption sfl sfb tp-resizeme"
                data-x="left" data-hoffset="90"
                data-y="center" data-voffset="110"
                data-speed="1500"
                data-start="2000"
                data-easing="easeOutExpo"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.3"
                data-endspeed="1200"
                data-endeasing="Power4.easeIn"><div class="text">{{$slider->text}}</div></div>
                
                <div class="tp-caption sfr sfb tp-resizeme"
                data-x="left" data-hoffset="90"
                data-y="center" data-voffset="190"
                data-speed="1500"
                data-start="2000"
                data-easing="easeOutExpo"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.3"
                data-endspeed="1200"
                
                
                </li>

                @endforeach
                
                
            </ul>
            
        </div>
    </div>
</section>