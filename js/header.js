// 导航栏下拉
(function () {



  var time = null;

  var list = $("#navlist");

  var box = $("#navbox");

  var lista = list.find("a");



  for (var i = 0, j = lista.length; i < j; i++) {

    if (lista[i].className == "now") {

      var olda = i;

    }

  }



  var box_show = function (hei) {

    box.stop().animate({

      height: hei,

      opacity: 1

    }, 400);

  }



  var box_hide = function () {

    box.stop().animate({

      height: 0,

      opacity: 0

    }, 400);

  }



  lista.hover(function () {

    lista.removeClass("now");

    $(this).addClass("now");

    clearTimeout(time);

    var index = list.find("a").index($(this));

    box.find(".cont").hide().eq(index).show();

    var _height = box.find(".cont").eq(index).height() + 54;

    box_show(_height)

  }, function () {

    time = setTimeout(function () {

      box.find(".cont").hide();

      box_hide();

    }, 50);

    lista.removeClass("now");

    lista.eq(olda).addClass("now");

  });



  box.find(".cont").hover(function () {

    var _index = box.find(".cont").index($(this));

    lista.removeClass("now");

    lista.eq(_index).addClass("now");

    clearTimeout(time);

    $(this).show();

    var _height = $(this).height() + 54;

    box_show(_height);

  }, function () {

    time = setTimeout(function () {

      $(this).hide();

      box_hide();

    }, 50);

    lista.removeClass("now");

    lista.eq(olda).addClass("now");

  });



})();

// 医师团队轮播
var swiper = new Swiper('.banner1', {
  slidesPerView: 1,
  spaceBetween: 0,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});







// 热点文章切换
$('.ct_list').hover(function () {
  $(this).find('.imee').show()
  $(this).find('h5').css('background', '#005aab')
  $(this).siblings().find('.imee').hide().siblings('h5').css('background', '#4e4e4e')

}, function () {})


// 显隐医院地址

$('.yi').hover(function () {
  $('.addbox').addClass('isShow')

}, function () {
  $('.addbox').removeClass('isShow')
})

$('.addbox').hover(function () {
  $(this).addClass('isShow')
}, function () {
  $(this).removeClass('isShow')
})

$('.dizhi>li').hover(function () {
  $(this).addClass('borderRadius').siblings().removeClass('borderRadius')

  var index = $(this).index()
  $('.add_1').eq(index).show().siblings('.add_1').hide()

}, function () {

})




// 显隐关注我们
$('.er').hover(function () {

  $('.follow').addClass('isShow')
}, function () {
  $('.follow').removeClass('isShow')
})
$('.follow').hover(function () {
  $(this).addClass('isShow')
}, function () {
  $(this).removeClass('isShow')
})

// 地区导航栏   各店地址，联系方式
$('.navTop li').hover(function () {
  var index = $(this).index()
  $('.lxfs').eq(index).stop().slideDown()

}, function () {
  var index = $(this).index()
  $('.lxfs').eq(index).stop().slideUp()
})