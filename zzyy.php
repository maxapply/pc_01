<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>自助预约_顺义口腔自助预约_顺义口腔医院</title>
  <link rel="stylesheet" href="./css/swiper.min.css">
  <link rel="stylesheet" href="./css/zzyy.css">
  <script src="./js/swiper.min.js"></script>
  <script src="./js/jquery-3.5.1.min.js"></script>
  <script src="./js/zzyy/date.js"></script> <!-- 日期选择器 -->


</head>
<body>
  <!-- 头部 -->
  <?php include './public/header.php'; ?>



  <!-- 导航下图片 -->
  <div class="img">
  <img src="./images/zzyy/0011231.jpg" alt="">
  </div>
  


 


  <!-- 文章 -->
  <div class="fo_is" style="min-width: 1500px;">
    <div class="w">

      <!-- 左侧内容 -->
      <div class="fo_fl" style="width: 100%;">
        <div class="listTitle" style="width: 100%;">
          <h2 >
            <a href="#">博爱口腔</a> > <a href="#">自助预约</a> >
          </h2>
        </div>
        <!-- 表单区域 -->
        <table>
          <tbody>
            <tr>
              <td valign="top"
                style=" margin:0 auto; width: 300px; line-height:45px; border:1px dotted #ccc; text-align:right">就诊地区 ：
              </td>
              <td style=" margin:0 auto; line-height:45px; border:1px dotted #ccc;">
                <input type="radio" style="margin-left: 10px;" name="diqua" class="np" value="北京市顺义区仁和镇双兴东区甲9号楼（通顺路店）" checked> 北京市顺义区仁和镇双兴东区甲9号楼（通顺路店）
                <br>
                <input type="radio" style="margin-left: 10px;" name="diqua" class="np" value="顺义区前进花园石门苑甲13号国泰宏城4楼Z健身房旁（国泰宏城店）" > 顺义区前进花园石门苑甲13号国泰宏城4楼Z健身房旁（国泰宏城店）
              </td>
            </tr>
            <tr>
              <td valign="top"
                style=" margin:0 auto; width: 300px; line-height:45px; border:1px dotted #ccc; text-align:right">称谓 ：
              </td>
              <td style=" margin:0 auto; line-height:45px; border:1px dotted #ccc;">
                <input type="radio" style="margin-left: 10px;" name="chenhua" class="np" value="先生" checked> 先生
                <input type="radio" name="chenhua" class="np" value="女士"> 女士
              </td>
            </tr>
            <tr>
              <td valign="top"
                style=" margin:0 auto; width: 300px; line-height:45px; border:1px dotted #ccc; text-align:right">姓名：
              </td>
              <td style="  margin:0 auto; line-height:45px;   border:1px dotted #ccc;">
                <input type="text" name="xinminga" id="name" style="width:250px; margin-top: 13px;   float: left; margin-left: 10px;" class="intxt" id="xinminga" value> 
                    <i style="color:red; float: left; margin-left: 10px;">*&nbsp;&nbsp;&nbsp;</i> 
                    <span id="nameNo" style="display: none;  float: left; color: red;font-size: 12px;">用户名输入有误</span>
                    <span id="nameYes"  style="display: none; float: left; color: green;font-size: 12px;">用户名输入正确</span>
              </td>
            </tr>
            <tr>
              <td valign="top"
                style=" margin:0 auto; width: 300px; line-height:45px; border:1px dotted #ccc; text-align:right">手机号码：
              </td>
              <td style="  margin:0 auto; line-height:45px;   border:1px dotted #ccc;">
                <input type="text" name="xinmin" id="photo" style="width:250px; margin-top: 13px;   float: left; margin-left: 10px;" class="intxt" id="xinminga" value> 
                    <i style="color:red; float: left; margin-left: 10px;">*&nbsp;&nbsp;&nbsp;</i> 
                    <span id="no" style="display: none;  float: left; color: red;font-size: 12px;">手机号码有误，请重填</span>
                    <span id="yes"  style="display: none; float: left; color: green;font-size: 12px;">手机号码输入正确</span>
              </td>
            </tr>
            <tr>
              <td valign="top"
                style=" margin:0 auto; width: 300px; line-height:45px; border:1px dotted #ccc; text-align:right">就诊项目：
              </td>
              <td style="  margin:0 auto; line-height:45px; border:1px dotted #ccc;">
                <select name="xiangmua" id="sel"
                  style="width:180px; text-align:center; height: 25px; margin-top: 10px; float: left;  margin-left: 10px;; color:#666; font-size:14px;" id="">
                  <option></option>
                  <option value="种植牙">种植牙</option>
                  <option value="牙齿矫正">牙齿矫正</option>
                  <option value="牙齿不齐">牙齿不齐</option>
                  <option value="烤齿牙">烤齿牙</option>
                  <option value="牙齿缺失">牙齿缺失</option>
                  <option value="牙痛">牙痛</option>
                  <option value="补牙">补牙</option>
                  <option value="拔牙">拔牙</option>
                  <option value="治疗">治疗</option>
                  <option value="洗牙">洗牙</option>
                  <option value="智齿">智齿</option>
                  <option value="复诊">复诊</option>
                </select>  <i style="color:red; float: left; margin-left: 10px;">*&nbsp;&nbsp;&nbsp;</i> 
                 <span id="optNo" style="display: none;  float: left; color: red;font-size: 12px;">请选择就诊项目</span>
                 <span id="optYes"  style="display: none; float: left;  color: green;font-size: 12px;">就诊项目已选择</span>
              </td>
            </tr>
            <tr>
              <td valign="top"
                style=" margin:0 auto; width: 300px; line-height:45px; border:1px dotted #ccc; text-align:right">预约时间：
              </td>
              <td style="  margin:0 auto;   position: relative; line-height:45px; border:1px dotted #ccc;">
                <!-- <input type="date" name="xinminga" style="width:250px;  margin-left: 10px;;" class="intxt" id="xinminga"
                  value> --> 
                  <input onclick="MyDatePick({fmt:'datetime'})" type="text" name="xinminga" style="width:250px;  margin-left: 10px;;" class="intxt" id="xinminga"
                  value> 
              </td>
            </tr>
            <tr>
              <td valign="top"
                style=" margin:0 auto; width: 300px; line-height:45px; border:1px dotted #ccc; text-align:right">备注：
              </td>
              <td style="  margin:0 auto; line-height:45px; border:1px dotted #ccc;">
                <textarea name="beizhua" id="beizhua"
                  style="width:90%;margin-left: 10px;margin-top: 10px;height:80px;"></textarea>
              </td>
            </tr>
          </tbody>
        </table>

        <div style="height:30px;padding-top:40px; margin-left: 40%; margin-bottom: 40px;">
          <input type="button" class="tijiao" id="btn" value="提交预约">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="button" class="chongzhi" value="重置预约">
        </div>
      </div>
    </div>
  </div>






  <!-- 底部 -->
  <?php include './public/footer.php'; ?>
  <script src="./js/header.js"></script>

  <!-- 表单验证 -->
  <script>

      // 点击按钮
        var btn = document.getElementById('btn')
        btn.addEventListener('click', function () {

          var nameYes = document.getElementById('nameYes')
          var yes = document.getElementById('yes')
          var yanYes = document.getElementById('yanYes')


          var yZ1 = nameYes.style.cssText.substr(9, 5)
          var yZ2 = yes.style.cssText.substr(9, 5)


          if (yZ1 !== 'block') {
            alert('用户名输入有误')
          } else if (yZ2 !== 'block') {
            alert('手机号输入有误')
          }  else {
            alert('输入正确')
          }
        })

        var sel = document.getElementById('sel')

        sel.addEventListener('blur',function(){

          var optNo = document.getElementById('optNo')
          var optYes = document.getElementById('optYes')

          if(this.value==''){
            
            optNo.style.display = 'block'
            optYes.style.display = 'none'
          }else {
            optNo.style.display = 'none'
            optYes.style.display = 'block'
          }

        })




        var photo = document.getElementById('photo')
      
            // 手机号验证
            photo.addEventListener('blur',function(){


        
          
              if(!(/^1[3456789]\d{9}$/.test(photo.value))){ 
              //  alert("手机号码有误，请重填");  
              var yes = document.getElementById('yes')
                  yes.style.display = 'none'
              var no = document.getElementById('no')
              no.style.display = 'block'




              }else {
                  var no = document.getElementById('no')
                  no.style.display = 'none'
                  // alert("手机号码输入正确"); 
                  var yes = document.getElementById('yes')
                  yes.style.display = 'block'

                  
              }
            })








        // 用户名验证
        var userName = document.getElementById('name')
        userName.addEventListener('blur', function () {

          var value = document.getElementById('name').value
          if (/^([\u4e00-\u9fa5]){2,5}$/.test(value)) {

            document.getElementById('nameYes').style.display = 'block'
            document.getElementById('nameNo').style.display = 'none'

          } else {

            document.getElementById('nameYes').style.display = 'none'
            document.getElementById('nameNo').style.display = 'block'

          }
        })



  </script>




</body>
</html>



