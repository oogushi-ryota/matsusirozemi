// ハンバーガーメニュー
const Nav = $(".nav");
const navBtn = $(".nav-btn")
const body = $("body")
const companyName = $(".company-name")
const contactBtn = $(".contact-btn")

navBtn.on("click", function () {
  if (Nav.hasClass("js_active")) {
    Nav.removeClass("js_active");
    navBtn.removeClass("js_active");
    body.removeClass("js_active");
    companyName.removeClass("js_active");
    contactBtn.removeClass("js_active");

  } else {
    // クラスを追加する処理
    Nav.addClass("js_active");
    navBtn.addClass("js_active");
    body.addClass("js_active");
    companyName.addClass("js_active");
    contactBtn.addClass("js_active");
  }
});

$(".nav__list__item a").click(function () {
  Nav.removeClass("js_active");
  navBtn.removeClass("js_active");
  body.removeClass("js_active");
  companyName.removeClass("js_active");
});
// ハンバーガーメニュー

// スワイパー
var swiper = new Swiper('.swiper-container', {
  slidesPerView: 1,
  loop: true,
  autoplay: {
    delay: 5000, // 3秒ごとにスライド
    disableOnInteraction: false, // ユーザーの操作後も自動再生を継続
  },
  spaceBetween: 0, // 画像間の余白（px）
  effect: 'fade', // フェード効果を適用
  fadeEffect: {
    crossFade: true // クロスフェード効果を有効化
  },
  speed: 1000, // トランジション時間を1秒に設定
});
// スワイパー


// アコーディオン
document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".details").forEach(function (el) {
      const summary = el.querySelector(".summary");
      const answer = el.querySelector(".answer");
      summary.addEventListener("click", (event) => {
          // デフォルトの挙動を無効化
          event.preventDefault();
          // detailsのopen属性を判定
          if (el.getAttribute("open") !== null) {
              // アコーディオンを閉じるときの処理
              const closingAnim = answer.animate(closingAnimation(answer), animTiming);

              closingAnim.onfinish = () => {
                  // アニメーションの完了後にopen属性を取り除く
                  el.removeAttribute("open");
                  // "open"クラスを取り除く
                  el.classList.remove("open");
              };
          } else {
              // open属性を付与
              el.setAttribute("open", "true");
              // "open"クラスを追加
              el.classList.add("open");
              // アコーディオンを開くときの処理
              const openingAnim = answer.animate(openingAnimation(answer), animTiming);
          }
      });
  });
});

// アニメーションの時間とイージング
const animTiming = {
  duration: 300,
  easing: "ease-in-out",
};

// アコーディオンを閉じるときのキーフレーム
const closingAnimation = (answer) => [
  {
      height: answer.offsetHeight + "px",
      opacity: 1,
  },
  {
      height: 0,
      opacity: 0,
  },
];

// アコーディオンを開くときのキーフレーム
const openingAnimation = (answer) => [
  {
      height: 0,
      opacity: 0,
  },
  {
      height: answer.offsetHeight + "px",
      opacity: 1,
  },
];
// アコーディオン


// スムーススクロール
$('a[href*="#"]').click(function () {
  var h = 500;
  var href = $(this).attr("href");
  
  // URLが同じページ内のアンカーリンクであるかをチェック
  if (href.startsWith("#") || href.includes("/#")) {
    var targetId = href.split("#")[1];
    var targetElement = $("#" + targetId);
    
    if (targetElement.length) {
      var targetOffset = targetElement.offset().top;

      $("html, body").animate({
        scrollTop: targetOffset
      }, h, "swing");

      return false;
    }
  }
});
// スムーススクロール


// 下からフェードイン
$(function () {
  $(window).scroll(function () {
    const windowHeight = $(window).height();
    const scroll = $(window).scrollTop();

    if (window.matchMedia("(max-width: 767px)").matches) {
      // 767px以下の場合の処理
      $('.fadein-point').each(function () {
        const targetPosition = $(this).offset().top;
        if (scroll > targetPosition - windowHeight + 100) {
          $(this).addClass("js-fadein");
        }
      });
    } else {
      // 768px以上の場合の処理
      $('.fadein-point').each(function () {
        const targetPosition = $(this).offset().top;
        if (scroll > targetPosition - windowHeight + 200) {
          $(this).addClass("js-fadein");
        }
      });
    }
  });
});
// 下からフェードイン

// タブ切り替え
function manageTabs() {
  // ページロード時とタブクリック時の共通処理を関数化
  function showTabContent(index) {
    $(".courseCont").hide();
    $(".courseCont").eq(index).fadeIn();
    $(".tabList_item").removeClass("is-active");
    $(".tabList_item").eq(index).addClass("is-active");
  }

  // ページロード時の処理
  function loadTabFromHash() {
    var hash = location.hash;
    hash = (hash.match(/^#tab\d+$/) || [])[0];
    var tabname = hash ? hash.slice(1) : "tab1";
    var tabno = $(".tabList_item#" + tabname).index();
    if (tabno >= 0) {
      showTabContent(tabno);
    } else {
      showTabContent(0);  // デフォルトで1番目のタブを表示
    }
  }

  // ページロード時のハッシュに対応したタブを表示
  loadTabFromHash();

  // タブクリック時の処理
  $(".tabList_item").click(function() {
    var index = $(".tabList_item").index(this);
    showTabContent(index);
  });

  // ハッシュ変更時に対応するタブを表示
  $(window).on('hashchange', function() {
    loadTabFromHash();
  });
}

$(document).ready(function() {
  manageTabs();
});


function faqTabs() {
  // ページロード時とタブクリック時の共通処理を関数化
  function showTabContent(index) {
    $(".detailsWrap").css("display", "none");
    $(".detailsWrap").eq(index).fadeIn();
    $(".faq-tabList_item").removeClass("is-active");
    $(".faq-tabList_item").eq(index).addClass("is-active");
  }

  // ページロード時の処理
  var hash = location.hash;
  hash = (hash.match(/^#tab\d+$/) || [])[0];
  var tabname = hash ? hash.slice(1) : "faqtab1";
  var tabno = $(".faq-tabList_item#" + tabname).index();
  showTabContent(tabno);

  // タブクリック時の処理
  $(".faq-tabList_item").click(function() {
    var index = $(".faq-tabList_item").index(this);
    showTabContent(index);
  });
}

faqTabs();

function categoryTabs() {
  // ページロード時とタブクリック時の共通処理を関数化
  function showTabContent(index) {
    $(".newsList").css("display", "none");
    $(".newsList").eq(index).fadeIn();
    $(".category-tabList_item").removeClass("is-active");
    $(".category-tabList_item").eq(index).addClass("is-active");
  }

  // ページロード時の処理
  var hash = location.hash;
  hash = (hash.match(/^#tab\d+$/) || [])[0];
  var tabname = hash ? hash.slice(1) : "categorytab1";
  var tabno = $(".category-tabList_item#" + tabname).index();
  showTabContent(tabno);

  // タブクリック時の処理
  $(".category-tabList_item").click(function() {
    var index = $(".category-tabList_item").index(this);
    showTabContent(index);
  });
}

categoryTabs();
// タブ切り替え


// // 画面幅がリサイズされた場合はブラウザをリロード
// function reloadPageOnResize() {
//   const initialWidth = window.innerWidth;

//   window.addEventListener('resize', () => {
//     const currentWidth = window.innerWidth;

//     if (currentWidth !== initialWidth) {
//       // 画面幅がリサイズされたらページをリロード
//       location.reload();
//     }
//   });
// }
// // ページ読み込み時にリロードの検出を開始
// reloadPageOnResize();
// // 画面幅がリサイズされた場合はブラウザをリロード







// window.onload = function() {
//   new Vivus('svgmask',{
//     type: 'oneByOne', 	// アニメーションのタイプ
//     start: 'inViewport', 	//アニメーションの自動再生
//     duration: 400,  		//アニメーションの時間
//     animTimingFunction:Vivus.EASE_OUT 	//アニメーションの終わるタイミングの動き
//   });
// }
