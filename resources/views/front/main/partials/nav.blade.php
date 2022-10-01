<nav class="nav">

        <a href="index.html" class="brand">

            <img class="logo_text desktop" src="{{Voyager::image($website->logo_desktop)}}">
            <img class="logo_text mobile" src="{{Voyager::image($website->logo_mobile)}}">
        </a>
        <div class="menu">
            <ul id="menu-main-menu-rechts">

                <li id="menu-item-5281" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5281"><a href="{{route('driver_2')}}">{{__('messages.App for independent drivers')}}</a></li>
                <li id="menu-item-6444" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6444"><a href="{{route('fleets')}}">{{__('messages.Solutions for fleets')}}</a></li>
                <li id="menu-item-6219" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6219"><a href="#popup-ourpurpose">{{__('messages.Our purpose')}}</a></li>
            </ul>

            <a href="javascript:void(0)" class="menu-trigger">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </a>
        </div>
    </nav>