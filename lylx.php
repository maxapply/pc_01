<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>来院路线_博爱口腔来院路线_顺义博爱口腔_顺义牙齿种植/牙齿矫正/牙齿美白_顺义牙科医院</title>
  <link rel="stylesheet" href="./css/lylx/lylx.css">

  <script src="./js/swiper.min.js"></script>
  <script src="./js/jquery-3.5.1.min.js"></script>
  <script src="http://api.map.baidu.com/api?ak=X2455as78Q7aVDj5nWMRKBLKWly7pWdq&v=2.0&services=false"></script>

</head>
<body style="overflow-y:scroll;overflow-x:scroll">
  <!-- 头部 -->
  <?php include './public/header.php'; ?>




  <!-- 百度地图 -->
  <div class="map">
    <div id="allmap"></div>
    <div class="index_zhuanjia_list">
      <ul>
        <li class="mapyi">
          <span></span>
          <h2>北京优贝口腔</h2>
          <p>北京市顺义区仁和镇双兴东区甲9号楼（通顺路店）</p>
        </li>
        <li class="maper">
          <span></span>
          <h2>北京优贝口腔</h2>
          <p>顺义区前进花园石门苑甲13号国泰宏城4楼Z健身房旁（国泰宏城店）</p>
        </li>
        <li class="maper">
          <span></span>
          <h2>北京优贝口腔</h2>
          <p>顺义区前进花园石门苑甲13号国泰宏城4楼Z健身房旁（国泰宏城店）</p>
        </li>
        <li class="maper">
          <span></span>
          <h2>北京优贝口腔</h2>
          <p>顺义区前进花园石门苑甲13号国泰宏城4楼Z健身房旁（国泰宏城店）</p>
        </li>
      </ul>
    </div>
  </div>

  <div class="mdchoose">
    <div class="mdBox">
      <div class="flBox">
        <strong>北京优贝口腔</strong>
        <p>地址：北京市顺义区仁和镇双兴东区甲9号楼</p>
        <p>（通顺路店）</p>
        <p>热线咨询电话：(010)-56193353</p>
        <p>电话预约：(010)114</p>
      </div>
      <div class="frBox">
        <strong>北京优贝口腔</strong>
        <p>地址：顺义区前进花园石门苑甲13号国泰宏城4楼Z健身房旁（国泰宏城店））</p>
        <p>热线咨询电话：(010)-56193353</p>
        <p>电话预约：(010)114</p>
      </div>
    </div>
    <div class="mdBox">
      <div class="flBox">
        <strong>北京优贝口腔</strong>
        <p>地址：北京市顺义区仁和镇双兴东区甲9号楼</p>
        <p>（通顺路店）</p>
        <p>热线咨询电话：(010)-56193353</p>
        <p>电话预约：(010)114</p>
      </div>
      <div class="frBox">
        <strong>北京优贝口腔</strong>
        <p>地址：顺义区前进花园石门苑甲13号国泰宏城4楼Z健身房旁（国泰宏城店））</p>
        <p>热线咨询电话：(010)-56193353</p>
        <p>电话预约：(010)114</p>
      </div>
    </div>
  </div>
  





  <!-- 底部 -->
  <?php include './public/footer.php'; ?>
  <script src="./js/header.js"></script>


  <script>
    function setMap(x, y) {
      // 百度地图API功能
      var map = new BMap.Map("allmap"); // 创建Map实例
      var point = new BMap.Point(x, y);
      map.centerAndZoom(point, 18);



      // 向地图添加标注
      var myIcon = new BMap.Icon("https://api.map.baidu.com/images/marker_red_sprite.png", new BMap.Size(23, 25));
      // 创建标注对象并添加到地图 
      var marker = new BMap.Marker(point, {
        icon: myIcon
      });
      map.addOverlay(marker);

      marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画



      var sContent_01 =
        `<h4 class="map_h4">北京优贝口腔</h4>` + 
        `<p class="map_p"><span class="map_span_01">地址：</span>北京市顺义区仁和镇双兴东区甲9号楼（通顺路店）</p>` + 
        `<p class="map_p"><span class="map_span_01">公交路线：</span>345路&nbsp;&nbsp;357路&nbsp;&nbsp;559路&nbsp;&nbsp;885路&nbsp;&nbsp;昌1路;</p>` + 
        `<p class="map_p"><span class="map_span_01">热线咨询电话：</span><span class="map_span">(010)-56193353</span></p`;

        var sContent_02 =
        `<h4 class="map_h4">北京优贝口腔</h4>` + 
        `<p class="map_p"><span class="map_span_01">地址：</span>顺义区前进花园石门苑甲13号（国泰宏城店）</p>` + 
        `<p class="map_p"><span class="map_span_01">公交路线：</span>顺27路&nbsp;&nbsp;顺28路&nbsp;&nbsp;顺28A路&nbsp;&nbsp;顺28B路;</p>` + 
        `<p class="map_p"><span class="map_span_01">热线咨询电话：</span><span class="map_span">(010)-56193353</span></p`;

        var infoWindow = new BMap.InfoWindow(x === 116.238067 ?sContent_01:sContent_02);  // 创建信息窗口对象
        map.openInfoWindow(infoWindow, map.getCenter()); // 打开信息窗口
        map.openInfoWindow(infoWindow,point); //开启信息窗口


      //添加地图类型控件
      map.addControl(new BMap.MapTypeControl({
        mapTypes: [BMAP_NORMAL_MAP,
          BMAP_HYBRID_MAP
        ]
      }));
      map.setCurrentCity("北京"); // 设置地图显示的城市 此项是必须设置的
      map.enableScrollWheelZoom(true); //开启鼠标滚轮缩放
    }
    setMap(116.238067, 40.218111)

    $('.mapyi').click(function () {
      setMap(116.238067, 40.218111)
    })
    $('.maper').click(function () {
      setMap(116.664198, 40.143499)
    })
  </script>
</body>
</html>



