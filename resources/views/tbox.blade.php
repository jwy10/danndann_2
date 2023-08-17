<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYBUS</title>
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/header.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/tab.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/video.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/trip.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/date-picker.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/map.css') }}" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>




    <div class="header">
        <img src="{{ asset('pictures/MYBUS.png') }}" width="114" height="21" style="top: 20px; left:22px;    position: absolute;">
    </div>

    <!-- Tab links -->
    <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'Monitor')" id="defaultOpen">모니터링 모드</button>
        <button class="tablinks" onclick="openTab(event, 'Replay')">리플레이 모드</button>
    </div>

    <!-- Tab content -->
    <div id="Monitor" class="tabcontent">
        <div class="monitoring-mode">
            <div class="searchveh">차량조회</div>
            <div class="monitoring-mode-search">

                <!-- <form action="" method="post" id="search-form"> -->
                <div id="select-client">
                    <select name="client" id="client" class="selbox">
                        <?php
                        echo "<option value=default selected>";
                        echo "고객사 전체";
                        echo "</option>";
                        foreach ($clients as $client) {
                            echo "<option value=$client->BIN>";
                            echo $client->client_name;
                            echo "</option>";
                        } ?>
                    </select>
                </div>
                <form>
                    <!-- <div id="search-carNum"> -->
                    <label for="vnum" class="label-with-button">
                        <input type="text" name="vnum" id="vnum" class="vnum" placeholder="  차량번호를 입력하세요">
                        <button type="submit" id="search-button"></button>
                    </label>
                    <!-- </div> -->
                </form>
                <!--  </form> -->
                <div id="print"></div>
            </div>
            <div class="box3894">
                <table>
                    <thead class="box2426">
                        <tr>
                            <th>상태</th>
                            <th>차량번호</th>
                            <th>운전자</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($cars as $car) {
                            echo "<tr class='sendVrn-item'>";
                            echo "<td>";
                            
                            if ($car->car_status == 1) {
                                echo "<img src='pictures/good.png' width='23' height='25'>";
                            } else {
                                echo "<img src='bad-image.png' alt='Bad'>";
                            }
                            
                            echo "</td>";
                            echo "<td class='vrn-cell'><a>$car->VRN</a></td>";
                            echo "<td>$car->car_id</td>";
                            echo "</tr>";
                        }
/*                         foreach ($cars as $car) {
                            echo "<tr class='sendVrn-item'>";
                            echo "<td>" . ($car->car_status == 1 ? 'Good' : 'Bad') . "</td>";
                            echo "<td class='vrn-cell'>$car->VRN</td>";
                            echo "<td>$car->car_id</td>";
                            echo "</tr>";
                        } */
                        ?>
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
            </div>
        </div>

        <div class="container-video-map">
            <div class="video-grid-container-monitor" left="325px">

                <div class="video-grid-item-monitor">
                    <div class="video-head-monitor">
                        <i class="fa-regular fa-circle-play" style="color: #ffffff;"></i>
                        <i class="fa-regular fa-circle-stop" style="color: #ffffff;"></i>
                        <i class="fa-solid fa-camera" style="color: #ffffff;"></i>
                        <span class="video-head-text">"충남 123가1234"</span>
                    </div>
                    <video controls width="455px" height="300px">
                        <source src="" type="video/mp4">
                    </video>
                </div>

                <div class="video-grid-item-monitor">
                    <div class="video-head-monitor">
                        <i class="fa-regular fa-circle-play" style="color: #ffffff;"></i>
                        <i class="fa-regular fa-circle-stop" style="color: #ffffff;"></i>
                        <i class="fa-solid fa-camera" style="color: #ffffff;"></i>
                        <span class="video-head-text">"충남 123가1234"</span>
                    </div>
                    <video controls width="455px" height="300px">
                        <source src="" type="video/mp4">
                    </video>
                </div>

                <div class="video-grid-item-monitor">
                    <div class="video-head-monitor">
                        <i class="fa-regular fa-circle-play" style="color: #ffffff;"></i>
                        <i class="fa-regular fa-circle-stop" style="color: #ffffff;"></i>
                        <i class="fa-solid fa-camera" style="color: #ffffff;"></i>
                        <span class="video-head-text">"충남 123가1234"</span>
                    </div>
                    <video autoplay controls loop muted width="455px" height="300px"></video>
                </div>

                <div class="video-grid-item-monitor">
                    <div class="video-head-monitor">
                        <i class="fa-regular fa-circle-play" style="color: #ffffff;"></i>
                        <i class="fa-regular fa-circle-stop" style="color: #ffffff;"></i>
                        <i class="fa-solid fa-camera" style="color: #ffffff;"></i>
                        <span class="video-head-text">"충남 123가1234"</span>
                    </div>
                    <video autoplay controls loop muted width="455px" height="300px"></video>
                </div>

            </div>
            <div class="map" id="map-monitor"></div>



        </div>
        <!-- </div> -->
    </div>

    <div id="Replay" class="tabcontent">
        <form action="" class="replay-mode">
            <div>
                <select name="client" class="re-client" id="client" required>
                    <option value="ALL" selected>고객사전체</option>
                    <option value="JW">장우투어</option>
                    <option value="MS">민식물산</option>
                    <option value="WY">원영고속</option>
                    <option value="HS">홍식여행</option>
                    <option value="JW">지원어린이집</option>
                    <option value="NR">신누리당</option>
                </select>
            </div>
            <div>
                <select name="vnum" class="re-client" id="vnum" required>
                    <option value="" disabled selected>차량번호 선택</option>
                    <option value="충남 123가1234">충남 123가1234</option>
                    <option value="전남 123가1234">전남 123가1234</option>
                    <option value="경남 123가1234">경남 123가1234</option>
                    <option value="정남 123진1234">정남 123진1234</option>
                    <option value="화남 123극1234">화남 123극1234</option>
                </select>
            </div>

            <div class="container-calendar">
                <div class="button-container-calendar">
                    <input type="button" id="previous" value="&#8249;">
                    <input type="button" id="next" value="&#8250;">
                    <h3 id="monthHeader"></h3>
                    <p id="yearHeader"></p>
                </div>

                <table class="table-calendar" id="calendar">
                    <thead id="thead-month">
                    </thead>
                    <tbody id="calendar-body">
                    </tbody>
                </table>

                <div class="footer-container-calendar">
                    <label for="month">Jump To: </label>
                    <select id="month">
                        <option value=0>Jan</option>
                        <option value=1>Feb</option>
                        <option value=2>Mar</option>
                        <option value=3>Apr</option>
                        <option value=4>May</option>
                        <option value=5>Jun</option>
                        <option value=6>Jul</option>
                        <option value=7>Aug</option>
                        <option value=8>Sep</option>
                        <option value=9>Oct</option>
                        <option value=10>Nov</option>
                        <option value=11>Dec</option>
                    </select>
                    <select id="year"></select>
                </div>
                <p id="date-picked"></p>
            </div>
            <input type="submit" value="검색">
        </form>

        <div class="container-video-map">
            <div class="video-grid-container-replay" left="325px">
                
                <div class="video-grid-item-replay">
                    <div class="video-head-replay">
                        <i class="fa-regular fa-circle-play" style="color: #ffffff;"></i>
                        <i class="fa-regular fa-circle-stop" style="color: #ffffff;"></i>
                        <i class="fa-solid fa-camera" style="color: #ffffff;"></i>
                        <span class="video-head-text">"충남 123가1234"</span>
                    </div>
                    <video controls width="455px" height="300px">
                        <source src="" type="video/mp4">
                    </video>
                </div>

                <div class="video-grid-item-replay">
                    <div class="video-head-replay">
                        <i class="fa-regular fa-circle-play" style="color: #ffffff;"></i>
                        <i class="fa-regular fa-circle-stop" style="color: #ffffff;"></i>
                        <i class="fa-solid fa-camera" style="color: #ffffff;"></i>
                        <span class="video-head-text">"충남 123가1234"</span>
                    </div>
                    <video controls width="455px" height="300px">
                        <source src="" type="video/mp4">
                    </video>
                </div>

                <div class="video-grid-item-replay">
                    <div class="video-head-replay">
                        <i class="fa-regular fa-circle-play" style="color: #ffffff;"></i>
                        <i class="fa-regular fa-circle-stop" style="color: #ffffff;"></i>
                        <i class="fa-solid fa-camera" style="color: #ffffff;"></i>
                        <span class="video-head-text">"충남 123가1234"</span>
                    </div>
                    <video autoplay controls loop muted width="455px" height="300px"></video>
                </div>

                <div class="video-grid-item-replay">
                    <div class="video-head-replay">
                        <i class="fa-regular fa-circle-play" style="color: #ffffff;"></i>
                        <i class="fa-regular fa-circle-stop" style="color: #ffffff;"></i>
                        <i class="fa-solid fa-camera" style="color: #ffffff;"></i>
                        <span class="video-head-text">"충남 123가1234"</span>
                    </div>
                    <video autoplay controls loop muted width="455px" height="300px"></video>
                </div>


            </div>
            <div class="map" id="map-replay" ></div>

        </div>
    </div>

    <div class="shape">
        <div class="group5829">
            <form action="/date" class="trip-date-form">
                <span class="trip">
                    트립조회
                </span>

                <input type="date" name="fromdate" required="required">

                <input type="date" name="todate" required="required">

                <div class="emptytrip"></div>
            </form>

           <!--  <div class="line546"></div> -->
            <div class="group5827">
                <table>
                    <thead class="box2429">
                        <tr>
                            <th>순번</th>
                            <th>출발일시</th>
                            <th>도착일시</th>
                            <th>운전자명</th>
                            <th>DTG상태</th>
                            <th>운행시간(분)</th>
                            <th>운행거리(km)</th>
                            <th>최고속도(km/h)</th>
                            <th>평균속도(km/h)</th>
                            <th>최고RPM</th>
                            <th>평균RPM</th>
                            <th>전압정보</th>
                            <th>과속시간</th>
                            <th>누적주행거리</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                            <td>11</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                            <td>11</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                            <td>11</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                            <td>11</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                            <td>11</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                            <td>11</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                            <td>11</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                            <td>11</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                        </tr>
                    </tbody>

                    <tfoot>

                    </tfoot>
                </table>
            </div>
        <div class="line546"></div>               
        </div>
    </div>
    <script src="https://kit.fontawesome.com/c52defce05.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=12ef8a88b31ad05eff2e3e9e054f857f">
    </script>

    <script src="{{ asset('js/search-Monitor.js') }}"></script>
    <script src="{{ asset('js/openTab.js') }}"></script>
    <script src="{{ asset('js/kakaoMap.js') }}"></script>
    <script src="{{ asset('js/date-picker.js') }}"></script>
    <script src="{{ asset('js/send-VRN.js') }}"></script>
    <script src="{{ asset('js/search.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        var csrfToken = "{{ csrf_token() }}";
    </script>
</body>

</html>