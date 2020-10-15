/*
 * 头部轮播图的配置
 */

var swiper = new Swiper('.banner', {
  spaceBetween: 30,
  loop: true, // 无限轮播
  centeredSlides: true,
  speed: 2500,
  autoplay: {
    // 自动轮播
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    // 轮播的左右按钮
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    // 轮播图的小圆点
    el: ".swiper-pagination",
  },
});

/*
 * 专家列表 轮播图
 */
var galleryThumbs = new Swiper(".gallery-thumbs", {
  spaceBetween: 0, // 行间距
  slidesPerView: 4, // 下栏显示数量
  freeMode: true,
  loop: true, // 无限轮播
  speed: 2500,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
  mousewheel: false,
})
var galleryTop = new Swiper(".gallery-top", {
  spaceBetween: 10,
  speed: 2500,
  loop: true, // 无限轮播
  autoplay: {
    // 自动轮播的设置
    delay: 2500,
    disableOnInteraction: false,
  },
  navigation: {
    // 轮播的左右按钮
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: galleryThumbs,
  },
})


/*
 * 鼠标移入医院动态和诊疗项目
 * 获取当前 鼠标移入的索引值
 * 利用索引查找对应项目内容
 */
$('.introzlxm').hover(function () {
  $(this).addClass('on').siblings('.introzlxm').removeClass('on')
  var index = $(this).index()
  $('.intro_conTab').eq(index - 1).show().siblings('.intro_conTab').hide()
}, function () {})

/*
 * 控制 项目中心鼠标移入 
 * 获取当前 鼠标移入的索引值
 * 移入当前 添加类名
 * 切换 dd 对应内容
 */
$('.center .mx').hover(function () {
  var index = $(this).index()
  $(this).addClass('on').siblings().removeClass('on')
  $('.zhx').eq(index).show().siblings('.zhx').hide()
}, function () {})


// 安全体系｜MORE 的切换
$('.xz_czzl01').hover(function () {
  var inddex = $(this).index()
  $('.conxz_czzl01').eq(inddex).show().siblings('.conxz_czzl01').hide()
  $(this).addClass('hover').siblings().removeClass('hover')
}, function () {})