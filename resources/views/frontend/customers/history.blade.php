@extends('frontend.template.layout')

@section('content')
    <div class="side-top">
        <div class="container">
            <div class="row">
                <div class="title">Danh sách đặt chỗ</div>
            </div>
        </div>
    </div>
    <section class="ticket">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <mypage-sidebar>
                        @include('frontend.template.left_sidebar')
                        <dialog-message>
                            <div tabindex="-1" role="dialog" aria-hidden="true" class="modal fade modal-custom"
                                 id="dialog-cart">
                                <div role="document" class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                                                <span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body txt-center"></div>
                                        <div class="modal-footer">
                                            <button type="button" data-dismiss="modal" class="btn btn-cancel">Đóng
                                            </button>
                                            <button type="button" data-dismiss="modal" class="btn btn-confirm">Đồng ý
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </dialog-message>
                    </mypage-sidebar>
                </div>
                <div class="col-12 col-lg-9">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                            <li aria-current="page" class="breadcrumb-item active">Danh sách đặt chỗ</li>
                        </ol>
                    </nav>
                    <div class="row card-booking card-my-page mt-0"><h5>Lịch sử mua vé</h5></div>

                    @if(count($veDat) != 0)
                        <div class="result_content" id="list_ticketed">
                            @include('frontend.customers.list_ticketed')
                        </div>

                    @else
                        <div class="no-result search">
                            <svg width="160px" height="160px" viewBox="0 0 160 160" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="mobile" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Group-61" transform="translate(0.397508, 0.036408)">
                                        <g id="Group-60"
                                           transform="translate(89.228986, 95.000000) rotate(22.000000) translate(-89.228986, -95.000000) translate(23.728986, 19.000000)"
                                           fill="#242528" fill-rule="nonzero" opacity="0.5">
                                            <g id="Group-56" transform="translate(0.720235, 0.000000)">
                                                <g id="bus-side-view"
                                                   transform="translate(64.984800, 102.031023) rotate(-22.000000) translate(-64.984800, -102.031023) translate(7.484800, 71.531023)">
                                                    <path
                                                        d="M21.7441704,42.2914478 C16.8128148,42.2914478 12.7963083,46.2886064 12.7963083,51.2002676 C12.7963083,56.1119288 16.8115712,60.1066118 21.7441704,60.1066118 C26.6805002,60.1066118 30.6920325,56.1119288 30.6920325,51.2002676 C30.6920325,46.2910819 26.681951,42.2914478 21.7441704,42.2914478 Z M21.7441704,56.7976511 C18.6452073,56.7976511 16.1222219,54.2851927 16.1222219,51.2000613 C16.1222219,48.1151362 18.6439637,45.6026778 21.7441704,45.6026778 C24.8456206,45.6026778 27.3683987,48.1124544 27.3683987,51.2000613 C27.3683987,54.2851927 24.8468641,56.7976511 21.7441704,56.7976511 Z M93.5125654,42.2914478 C88.5778937,42.2914478 84.5634598,46.2886064 84.5634598,51.2002676 C84.5634598,56.1119288 88.5766501,60.1066118 93.5125654,60.1066118 C98.4484807,60.1066118 102.460427,56.1119288 102.460427,51.2002676 C102.459184,46.2910819 98.4459936,42.2914478 93.5125654,42.2914478 Z M93.5125654,56.7976511 C90.411737,56.7976511 87.8877153,54.2851927 87.8877153,51.2000613 C87.8877153,48.1151362 90.4092499,45.6026778 93.5125654,45.6026778 C96.6109067,45.6026778 99.1349284,48.1124544 99.1349284,51.2000613 C99.1326485,54.2851927 96.611114,56.7976511 93.5125654,56.7976511 Z M111.393367,39.5353558 L114.716379,39.5353558 L114.716379,10.0521856 C114.716379,4.82778224 110.46318,0.594416703 105.215545,0.594416703 L9.70729374,0.594416703 C4.45654932,0.594416703 0.206045391,4.82778224 0.206045391,10.0521856 L0.206045391,43.4735142 C0.206045391,48.7003931 4.45654932,52.9335524 9.70729374,52.9335524 L12.1859253,52.9335524 C12.1254052,52.4927014 12.0849893,52.0479309 12.0849893,51.5920205 C12.0849893,46.1076862 16.5527025,41.6595683 22.063352,41.6595683 C27.5740014,41.6595683 32.0417146,46.1076862 32.0417146,51.5920205 C32.0417146,52.0479309 31.9988116,52.4927014 31.9407786,52.9335524 L83.9335943,52.9335524 C83.8730741,52.4927014 83.8328655,52.0479309 83.8328655,51.5920205 C83.8328655,46.1076862 88.3003715,41.6595683 93.8141298,41.6595683 C99.3243647,41.6595683 103.789384,46.1076862 103.789384,51.5920205 C103.789384,52.0479309 103.749175,52.4927014 103.688655,52.9335524 L114.718866,52.9335524 L114.718866,48.991887 L111.39461,48.991887 C110.869619,48.991887 110.443076,48.5683648 110.443076,48.0472653 L110.443076,40.4799775 C110.440382,39.9561962 110.867132,39.5353558 111.393367,39.5353558 Z M63.5582022,5.48235408 L63.5582022,28.1817422 L46.1381415,28.1817422 L46.1381415,5.48235408 L63.5582022,5.48235408 Z M18.7353657,28.1817422 L15.2502758,28.1817422 C7.25332619,28.1817422 7.41353876,23.4547144 7.41353876,22.9334086 L7.41353876,6.42759461 C7.41353876,5.90567001 7.83759431,5.48235408 8.36196406,5.48235408 L18.7353657,5.48235408 L26.8123181,5.48235408 L26.8123181,28.1817422 L18.7353657,28.1817422 Z M27.762816,28.1817422 L27.762816,5.48235408 L45.1857783,5.48235408 L45.1857783,28.1817422 L27.762816,28.1817422 Z M83.6751401,28.1817422 L64.5072493,28.1817422 L64.5072493,5.48235408 L83.6751401,5.48235408 L83.6751401,28.1817422 Z M92.1460951,27.2350576 C92.1460951,27.7594577 91.7193452,28.1817422 91.1982916,28.1817422 L84.563667,28.1817422 L84.563667,5.48235408 L91.1982916,5.48235408 C91.7195525,5.48235408 92.1460951,5.90567001 92.1460951,6.42759461 L92.1460951,27.2350576 Z M109.184796,33.3853099 C109.184796,33.3853099 104.915224,33.7708739 100.276106,32.7107275 C95.6394755,31.6518188 94.9982106,27.474359 94.9982106,27.474359 L94.9982106,10.272508 L94.9982106,5.40354966 L104.291991,5.40354966 C106.992806,5.40354966 109.18376,7.58366792 109.18376,10.272508 L109.18376,33.3851036 L109.184796,33.3851036 L109.184796,33.3853099 Z"
                                                        id="Shape"></path>
                                                </g>
                                                <g id="speech-bubble"
                                                   transform="translate(73.804167, 34.812697) scale(-1, 1) rotate(22.000000) translate(-73.804167, -34.812697) translate(47.304167, 8.812697)">
                                                    <path
                                                        d="M51.8309471,22.2857143 C51.1854042,22.2857143 50.66205,22.8035777 50.66205,23.4426925 C50.66205,26.4019342 48.229809,28.8093745 45.2399262,28.8093745 C44.6718423,28.8093745 44.1059402,28.719593 43.5578054,28.5424982 C43.2072922,28.4294228 42.8231147,28.4863462 42.5216951,28.6966077 C42.2202755,28.9068692 42.0366807,29.2457867 42.0267061,29.6107747 C41.9456626,32.5368498 39.5679702,34.8289007 36.613466,34.8289007 C35.038572,34.8289007 33.5422279,34.1478262 32.5081436,32.9601495 C32.2860532,32.7051515 31.9628142,32.5584467 31.6227431,32.5584467 C31.282672,32.5584467 30.959433,32.7049973 30.7373425,32.9601495 C29.7032583,34.1478262 28.2069142,34.8289007 26.6320202,34.8289007 C24.9604974,34.8289007 23.4064878,34.0779447 22.3681955,32.7685539 C22.1465726,32.489028 21.8075924,32.3259712 21.4486631,32.3259712 C21.0897338,32.3259712 20.7507536,32.4891823 20.5291308,32.7685539 C19.4908385,34.0779447 17.9366729,34.8289007 16.265306,34.8289007 C15.1744913,34.8289007 14.1237308,34.509729 13.2263295,33.9056321 C12.6925332,33.5460433 11.9654792,33.6831838 11.6024977,34.2115371 C11.2393604,34.7398905 11.3779136,35.459531 11.91171,35.8188113 C13.198276,36.6850023 14.7038154,37.1428571 16.265306,37.1428571 C18.205831,37.1428571 20.0349211,36.4375632 21.4486631,35.1732174 C22.8624051,36.437409 24.6914953,37.1428571 26.6320202,37.1428571 C28.4703057,37.1428571 30.2330024,36.4960292 31.6227431,35.3375083 C33.0124838,36.4960292 34.7751805,37.1428571 36.613466,37.1428571 C38.6484378,37.1428571 40.570728,36.3682988 42.0263944,34.9615676 C43.1393403,33.8858863 43.8869668,32.5314505 44.2002313,31.0534494 C44.5448221,31.1000371 44.8920625,31.1233309 45.2400821,31.1233309 C49.5188687,31.1233309 53,27.6778498 53,23.4426925 C53,22.8035777 52.47649,22.2857143 51.8309471,22.2857143 Z"
                                                        id="Path"></path>
                                                    <path
                                                        d="M11.2790156,29.3505142 C11.8995034,29.1611941 12.2381088,28.5378802 12.0356389,27.9581424 C11.8330113,27.3785519 11.1657269,27.062184 10.5455542,27.2512098 C9.99140095,27.4202141 9.41928535,27.505894 8.84496385,27.505894 C5.82240984,27.505894 3.3633054,25.2084363 3.3633054,22.384386 C3.3633054,20.9257669 4.03815286,19.5301563 5.21499986,18.5554372 C5.46789039,18.3458012 5.61269189,18.0450383 5.61269189,17.7292593 C5.61269189,17.4134803 5.46789039,17.1127174 5.21499986,16.9032286 C4.03831043,15.9282151 3.3633054,14.5326045 3.3633054,13.0741326 C3.3633054,10.2499351 5.82225227,7.95247745 8.84496385,7.95247745 C9.41897022,7.95247745 9.99108582,8.03815733 10.5457118,8.20716165 C10.9002312,8.31521841 11.2883119,8.26060117 11.593041,8.05994535 C11.8977702,7.85928953 12.0832232,7.53585531 12.0934649,7.18768875 C12.1755559,4.39558436 14.5793553,2.20824454 17.5662998,2.20824454 C19.2561758,2.20824454 20.827406,2.9248935 21.8769411,4.17431826 C22.1009974,4.44122141 22.4436995,4.59682905 22.8065699,4.59682905 C23.1694402,4.59682905 23.5122999,4.44092698 23.7361986,4.17431826 C24.7857337,2.9248935 26.3568064,2.20824454 28.0468399,2.20824454 C28.6994709,2.20824454 29.2285714,1.71403941 29.2285714,1.10412227 C29.2285714,0.494205128 28.6994709,0 28.0468399,0 C26.0848506,0 24.2358347,0.673072935 22.8065699,1.87951053 C21.3771475,0.673072935 19.5282892,0 17.5662998,0 C15.508984,0 13.5655872,0.739173055 12.0940952,2.08163852 C10.9689292,3.10803058 10.2130938,4.40073693 9.89638974,5.81106911 C9.5480153,5.76660979 9.19696226,5.74438012 8.84512141,5.74438012 C4.51935392,5.74438012 1,9.03260346 1,13.0742798 C1,14.7800751 1.64286193,16.4246284 2.79418352,17.7294065 C1.64286193,19.0340374 1,20.6785907 1,22.3845332 C1,26.4262096 4.51919636,29.7142857 8.84512141,29.7142857 C9.66870947,29.7142857 10.4877282,29.591949 11.2790156,29.3505142 Z"
                                                        id="Path"></path>
                                                    <path
                                                        d="M31.1154022,4.21203037 C31.5988201,4.62026472 32.3284145,4.56712179 32.7449735,4.09351559 C33.7669603,2.9311649 35.246022,2.26461363 36.8027263,2.26461363 C39.7232608,2.26461363 42.0734915,4.50763793 42.153445,7.37131735 C42.1633043,7.72837143 42.3447786,8.06006184 42.6427169,8.26583973 C42.9406552,8.47161762 43.3200874,8.52762907 43.6667064,8.41681397 C44.2089725,8.24349555 44.7684926,8.15562854 45.3295531,8.15562854 C48.2847495,8.15562854 50.6890528,10.5117326 50.6890528,13.4080224 C50.6890528,14.9037242 50.0290902,16.33496 48.8786234,17.3348624 C48.4010594,17.7497396 48.3573084,18.4653576 48.7806457,18.9332267 C49.0089521,19.1856557 49.3264551,19.3142857 49.6456526,19.3142857 C49.9181722,19.3142857 50.1917701,19.2203797 50.4117576,19.0290954 C52.0565802,17.5998222 53,15.5511018 53,13.4080224 C53,9.26317557 49.559229,5.89101491 45.3297072,5.89101491 C44.9857071,5.89101491 44.6426314,5.91381202 44.3018664,5.95940624 C43.9922201,4.51307301 43.2532285,3.18736819 42.1531368,2.13477578 C40.714437,0.758041668 38.8141948,0 36.8027263,0 C34.5728109,0 32.4558163,0.953100388 30.9943166,2.61502484 C30.5779117,3.08893299 30.6321383,3.80379602 31.1154022,4.21203037 Z"
                                                        id="Path"></path>
                                                    <path
                                                        d="M21.0571429,38.6285714 C18.1411396,38.6285714 15.8571429,40.2600476 15.8571429,42.3428571 C15.8571429,44.4256666 18.1412815,46.0571429 21.0571429,46.0571429 C23.9730042,46.0571429 26.2571429,44.4256666 26.2571429,42.3428571 C26.2571429,40.2600476 23.9730042,38.6285714 21.0571429,38.6285714 Z M21.0571429,43.7914135 C19.2112351,43.7914135 17.986545,42.9195608 17.986545,42.3428571 C17.986545,41.7661535 19.2112351,40.8943008 21.0571429,40.8943008 C22.9030506,40.8943008 24.1277407,41.7661535 24.1277407,42.3428571 C24.1277407,42.9195608 22.9030506,43.7914135 21.0571429,43.7914135 Z"
                                                        id="Shape"></path>
                                                    <path
                                                        d="M14.1187783,47.1371611 C13.1587375,47.1371611 12.3804138,47.6512878 12.3804138,48.2857909 C12.3804138,48.9545997 10.6598964,49.7027405 8.35714286,49.7027405 C6.05438929,49.7027405 4.33387195,48.9545997 4.33387195,48.2857909 C4.33387195,47.6168289 6.05438929,46.8686881 8.35714286,46.8686881 C9.31718365,46.8686881 10.0955074,46.3545614 10.0955074,45.7200583 C10.0955074,45.0855552 9.31718365,44.5714286 8.35714286,44.5714286 C4.15145956,44.5714286 0.857142857,46.2029423 0.857142857,48.2857909 C0.857142857,50.3686395 4.15169135,52 8.35714286,52 C12.5625944,52 15.8571429,50.3686395 15.8571429,48.2857909 C15.8571429,47.6514409 15.0788191,47.1371611 14.1187783,47.1371611 Z"
                                                        id="Path"></path>
                                                </g>
                                                <g id="doubts-button"
                                                   transform="translate(70.673304, 26.315755) rotate(-23.000000) translate(-70.673304, -26.315755) translate(64.673304, 18.315755)">
                                                    <path
                                                        d="M6.16250379,0.0913604366 C3.29241125,0.0913604366 0.957375589,2.21360614 0.957375589,4.82214941 C0.957375589,5.42948984 1.49912774,5.92187254 2.16736401,5.92187254 C2.83560029,5.92187254 3.37735244,5.42948984 3.37735244,4.82214941 C3.37735244,3.42638081 4.62678649,2.2908067 6.16250379,2.2908067 C7.6982211,2.2908067 8.94765515,3.42638081 8.94765515,4.82214941 C8.94765515,6.21791801 7.6982211,7.35349212 6.16250379,7.35349212 C5.49426752,7.35349212 4.95251537,7.84587482 4.95251537,8.45321525 L4.95251537,10.9396893 C4.95251537,11.5470297 5.49426752,12.0394124 6.16250379,12.0394124 C6.83074007,12.0394124 7.37249222,11.5470297 7.37249222,10.9396893 L7.37249222,9.4239042 C9.66106433,8.92690266 11.367632,7.05216798 11.367632,4.82207609 C11.367632,2.21360614 9.03259634,0.0913604366 6.16250379,0.0913604366 Z"
                                                        id="Path"></path>
                                                    <ellipse id="Oval" cx="5.83569423" cy="14.8028749" rx="1.48717949"
                                                             ry="1"></ellipse>
                                                </g>
                                            </g>
                                        </g>
                                        <polyline id="Path-8" stroke-opacity="0.502076049" stroke="#242528"
                                                  stroke-width="4"
                                                  points="13 151.013173 122.814093 150.712351 143.602492 150.963592"></polyline>
                                    </g>
                                </g>
                            </svg>
                            <p>Chưa có dữ liệu đặt chỗ. Hãy bắt đầu hành trình của bạn.</p><a href="/">Bắt đầu đặt
                                vé</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@stop
