<footer class="footer">
    <div class="uk-container uk-container-center">
        <div class="footer-upper">
            <div class="uk-grid uk-grid-medium">
                <!-- Thông tin liên hệ -->
                <div class="uk-width-large-1-5">
                    <div class="footer-contact">
                        <a href="{{ url('/') }}" class="image img-scaledown">
                            <img src="{{ asset('frontend/resources/img/logo.png') }}" alt="Logo">
                        </a>
                        <div class="footer-slogan">Awesome grocery store website template</div>
                        <div class="company-address">
                            <div class="address">{{ $address ?? 'Số 16 Ngõ 198 Lê Trọng Tấn, Khương Mai, Thanh Xuân, Hà Nội' }}</div>
                            <div class="phone">Hotline: {{ $hotline ?? '0988.778.688' }}</div>
                            <div class="email">Email: {{ $email ?? 'info@nestmart.com' }}</div>
                            <div class="hour">Giờ làm việc: {{ $working_hours ?? '10:00 - 18:00, Mon - Sat' }}</div>
                        </div>
                    </div>
                </div>
                <!-- Menu footer -->
                <div class="uk-width-large-3-5">
                    @if (isset($menu['menu-footer']) && count($menu['menu-footer']))
                        <div class="footer-menu">
                            <div class="uk-grid uk-grid-medium">
                                @foreach ($menu['menu-footer'] as $key => $val)
                                    @php
                                        $name = $val['item']->languages->first()->pivot->name ?? 'Menu';
                                        $canonical = write_url(
                                            $val['item']->languages->first()->pivot->canonical ?? '#',
                                            true,
                                            true,
                                        );
                                    @endphp
                                    <div class="uk-width-large-1-4">
                                        <div class="ft-menu">
                                            <div class="heading">{{ $name }}</div>
                                            @if (isset($val['children']) && count($val['children']))
                                                <ul class="uk-list uk-clearfix">
                                                    @foreach ($val['children'] as $children)
                                                        @php
                                                            $ChildName = $children['item']->languages->first()->pivot->name ?? 'Child Menu';
                                                            $ChildCanonical = write_url(
                                                                $children['item']->languages->first()->pivot->canonical ?? '#',
                                                                true,
                                                                true,
                                                            );
                                                        @endphp
                                                        <li><a href="{{ $ChildCanonical }}" title="{{ $ChildName }}">{{ $ChildName }}</a></li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
                <!-- Fanpage Facebook -->
                <div class="uk-width-large-1-5">
                    <div class="fanpage-facebook">
                        <div class="ft-menu">
                            <div class="heading">Fanpage Facebook</div>
                            <div class="fanpage">
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright -->
    <div class="copyright">
        <div class="uk-container uk-container-center">
            <div class="uk-flex uk-flex-middle uk-flex-space-between">
                <div class="copyright-text">© {!! $system['homepage_copyright'] !!}</div>
                <div class="copyright-contact">
                    <div class="uk-flex uk-flex-middle">
                        <div class="phone-item">
                            <div class="p">Hotline: {{ $system['contact_hotline'] }}</div>
                            <div class="worktime">Làm việc: {{ $working_hours_2 ?? '8:00 - 22:00' }}</div>
                        </div>
                        <div class="phone-item">
                            <div class="p">Support: {{ $system['contact_phone'] }}</div>
                            <div class="worktime">Hỗ trợ 24/7</div>
                        </div>
                    </div>
                </div>
                <div class="social">
                    <div class="uk-flex uk-flex-middle">
                        <div class="span">Follow us:</div>
                        <div class="social-list">
                            @php
                                $social =  ['facebook' ,'twitter' ,'youtube'];
                            @endphp
                            <div class="uk-flex uk-flex-middle">
                                @foreach ($social as $key=>$val)
                                    
                   
                                <a target href="{{ $system['social_'.$val] }}" class=""><i class="fa fa-{{ $val }}"></i></a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
