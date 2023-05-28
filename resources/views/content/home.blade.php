
@extends('layouts/detachedLayoutMaster')
@section('title', 'Home')

@section('content')

@section('vendor-style')
  <!-- Vendor css files -->
  
@endsection
@section('page-style')
<style type="text/css">
  img.wp-smiley,
  img.emoji {
    display: inline !important;
    border: none !important;
    box-shadow: none !important;
    height: 1em !important;
    width: 1em !important;
    margin: 0 0.07em !important;
    vertical-align: -0.1em !important;
    background: none !important;
    padding: 0 !important;
  }
  </style>
  <!-- Page css files -->
  <link rel='stylesheet' id='animate-css' href='https://gizmos.qodeinteractive.com/wp-content/plugins/qi-blocks/assets/css/plugins/animate/animate.min.css?ver=6.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='sbi_styles-css' href='https://gizmos.qodeinteractive.com/wp-content/plugins/instagram-feed/css/sbi-styles.min.css?ver=6.1' type='text/css' media='all' />
<link rel='stylesheet' id='elegant-icons-css' href='https://gizmos.qodeinteractive.com/wp-content/plugins/gizmos-core/inc/icons/elegant-icons/assets/css/elegant-icons.min.css?ver=6.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css' href='https://gizmos.qodeinteractive.com/wp-content/plugins/gizmos-core/inc/icons/font-awesome/assets/css/all.min.css?ver=6.2.2' type='text/css' media='all' />
<style id='font-awesome-inline-css' type='text/css'>
[data-font="FontAwesome"]:before {font-family: 'FontAwesome' !important;content: attr(data-icon) !important;speak: none !important;font-weight: normal !important;font-variant: normal !important;text-transform: none !important;line-height: 1 !important;font-style: normal !important;-webkit-font-smoothing: antialiased !important;-moz-osx-font-smoothing: grayscale !important;}
</style>
<link rel='stylesheet' id='ionicons-css' href='https://gizmos.qodeinteractive.com/wp-content/plugins/gizmos-core/inc/icons/ionicons/assets/css/ionicons.min.css?ver=6.2.2' type='text/css' media='all' />
<style id='wp-block-library-inline-css' type='text/css'>
:root{--wp-admin-theme-color:#007cba;--wp-admin-theme-color--rgb:0,124,186;--wp-admin-theme-color-darker-10:#006ba1;--wp-admin-theme-color-darker-10--rgb:0,107,161;--wp-admin-theme-color-darker-20:#005a87;--wp-admin-theme-color-darker-20--rgb:0,90,135;--wp-admin-border-width-focus:2px;--wp-block-synced-color:#7a00df;--wp-block-synced-color--rgb:122,0,223}@media (-webkit-min-device-pixel-ratio:2),(min-resolution:192dpi){:root{--wp-admin-border-width-focus:1.5px}}.wp-element-button{cursor:pointer}:root{--wp--preset--font-size--normal:16px;--wp--preset--font-size--huge:42px}:root .has-very-light-gray-background-color{background-color:#eee}:root .has-very-dark-gray-background-color{background-color:#313131}:root .has-very-light-gray-color{color:#eee}:root .has-very-dark-gray-color{color:#313131}:root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background{background:linear-gradient(135deg,#00d084,#0693e3)}:root .has-purple-crush-gradient-background{background:linear-gradient(135deg,#34e2e4,#4721fb 50%,#ab1dfe)}:root .has-hazy-dawn-gradient-background{background:linear-gradient(135deg,#faaca8,#dad0ec)}:root .has-subdued-olive-gradient-background{background:linear-gradient(135deg,#fafae1,#67a671)}:root .has-atomic-cream-gradient-background{background:linear-gradient(135deg,#fdd79a,#004a59)}:root .has-nightshade-gradient-background{background:linear-gradient(135deg,#330968,#31cdcf)}:root .has-midnight-gradient-background{background:linear-gradient(135deg,#020381,#2874fc)}.has-regular-font-size{font-size:1em}.has-larger-font-size{font-size:2.625em}.has-normal-font-size{font-size:var(--wp--preset--font-size--normal)}.has-huge-font-size{font-size:var(--wp--preset--font-size--huge)}.has-text-align-center{text-align:center}.has-text-align-left{text-align:left}.has-text-align-right{text-align:right}#end-resizable-editor-section{display:none}.aligncenter{clear:both}.items-justified-left{justify-content:flex-start}.items-justified-center{justify-content:center}.items-justified-right{justify-content:flex-end}.items-justified-space-between{justify-content:space-between}.screen-reader-text{clip:rect(1px,1px,1px,1px);word-wrap:normal!important;border:0;-webkit-clip-path:inset(50%);clip-path:inset(50%);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.screen-reader-text:focus{clip:auto!important;background-color:#ddd;-webkit-clip-path:none;clip-path:none;color:#444;display:block;font-size:1em;height:auto;left:5px;line-height:normal;padding:15px 23px 14px;text-decoration:none;top:5px;width:auto;z-index:100000}html :where(.has-border-color){border-style:solid}html :where([style*=border-top-color]){border-top-style:solid}html :where([style*=border-right-color]){border-right-style:solid}html :where([style*=border-bottom-color]){border-bottom-style:solid}html :where([style*=border-left-color]){border-left-style:solid}html :where([style*=border-width]){border-style:solid}html :where([style*=border-top-width]){border-top-style:solid}html :where([style*=border-right-width]){border-right-style:solid}html :where([style*=border-bottom-width]){border-bottom-style:solid}html :where([style*=border-left-width]){border-left-style:solid}html :where(img[class*=wp-image-]){height:auto;max-width:100%}figure{margin:0 0 1em}html :where(.is-position-sticky){--wp-admin--admin-bar--position-offset:var(--wp-admin--admin-bar--height,0px)}@media screen and (max-width:600px){html :where(.is-position-sticky){--wp-admin--admin-bar--position-offset:0px}}
</style>
<link rel='stylesheet' id='classic-theme-styles-css' href='https://gizmos.qodeinteractive.com/wp-includes/css/classic-themes.min.css?ver=6.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css' href='https://gizmos.qodeinteractive.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.6.4' type='text/css' media='all' />
<link rel='stylesheet' id='qi-blocks-grid-css' href='https://gizmos.qodeinteractive.com/wp-content/plugins/qi-blocks/assets/dist/grid.css?ver=6.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='qi-blocks-main-css' href='https://gizmos.qodeinteractive.com/wp-content/plugins/qi-blocks/assets/dist/main.css?ver=6.2.2' type='text/css' media='all' />
<style id='qi-blocks-main-inline-css' type='text/css'>
body  .qodef-widget-block-06577e08 .qi-block-tag-cloud .qodef-e-item{font-family: 'Roboto';font-weight: 400;text-transform: uppercase;font-style: normal;text-decoration: none;font-size: 11px;line-height: 1.36em;letter-spacing: 0.04em;color: rgba(143,150,172,1);margin-bottom: 9px;} body  .qodef-widget-block-7f776a66 .qi-block-categories ul li{color: rgba(113,120,139,1);font-family: 'Roboto';font-weight: 500;font-size: 14px;} body  .qodef-widget-block-7f776a66 .qi-block-categories ul li a:hover{color: rgba(0,0,0,1);} body  .qodef-widget-block-f2be87c3 .qi-block-image-gallery .qodef-e-inner{border-radius: 5px;} body  .qodef-widget-block-f2be87c3 .qodef-gutenberg-section{--qi-blocks-columns-gap: 10px;}
</style>
<link rel='stylesheet' id='rabbit_css-css' href='https://export.qodethemes.com/_toolbar/assets/css/rbt-modules.css?ver=6.2.2' type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='swiper-css' href='https://gizmos.qodeinteractive.com/wp-content/plugins/qi-blocks/inc/slider/assets/plugins/swiper.min.css?ver=6.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='gizmos-main-css' href='https://gizmos.qodeinteractive.com/wp-content/themes/gizmos/assets/css/main.min.css?ver=6.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='gizmos-core-style-css' href='https://gizmos.qodeinteractive.com/wp-content/plugins/gizmos-core/assets/css/gizmos-core.min.css?ver=6.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='yith_wccl_frontend-css' href='https://gizmos.qodeinteractive.com/wp-content/plugins/yith-woocommerce-color-label-variations-premium/assets/css/yith-wccl.css?ver=1.29.0' type='text/css' media='all' />
<style id='yith_wccl_frontend-inline-css' type='text/css'>
.select_option .yith_wccl_tooltip > span{background: #222222;color: #ffffff;}
            .select_option .yith_wccl_tooltip.bottom span:after{border-bottom-color: #222222;}
            .select_option .yith_wccl_tooltip.top span:after{border-top-color: #222222;}
</style>
<link rel='stylesheet' id='jquery-colorbox-css' href='https://gizmos.qodeinteractive.com/wp-content/plugins/yith-woocommerce-compare/assets/css/colorbox.css?ver=1.4.21' type='text/css' media='all' />
<link rel='stylesheet' id='yith-woocompare-widget-css' href='https://gizmos.qodeinteractive.com/wp-content/plugins/yith-woocommerce-compare/assets/css/widget.css?ver=2.20.1' type='text/css' media='all' />
<link rel='stylesheet' id='yith-gfonts-open-sans-css' href='https://gizmos.qodeinteractive.com/wp-content/plugins/yith-woocommerce-product-sales-countdown-premium/assets/fonts/open-sans/style.css?ver=1.22.0' type='text/css' media='all' />
<link rel='stylesheet' id='ywpc-frontend-css' href='https://gizmos.qodeinteractive.com/wp-content/plugins/yith-woocommerce-product-sales-countdown-premium/assets/css/ywpc-style-1.css?ver=1.22.0' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-selectBox-css' href='https://gizmos.qodeinteractive.com/wp-content/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBox.css?ver=1.2.0' type='text/css' media='all' />
<link rel='stylesheet' id='yith-wcwl-font-awesome-css' href='https://gizmos.qodeinteractive.com/wp-content/plugins/yith-woocommerce-wishlist/assets/css/font-awesome.css?ver=4.7.0' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce_prettyPhoto_css-css' href='//gizmos.qodeinteractive.com/wp-content/plugins/woocommerce/assets/css/prettyPhoto.css?ver=3.1.6' type='text/css' media='all' />
<link rel='stylesheet' id='yith-wcwl-main-css' href='https://gizmos.qodeinteractive.com/wp-content/plugins/yith-woocommerce-wishlist/assets/css/style.css?ver=3.15.0' type='text/css' media='all' />
<style id='yith-wcwl-main-inline-css' type='text/css'>
.yith-wcwl-share li a{color: #FFFFFF;}.yith-wcwl-share li a:hover{color: #FFFFFF;}.yith-wcwl-share a.facebook{background: #39599E; background-color: #39599E;}.yith-wcwl-share a.facebook:hover{background: #595A5A; background-color: #595A5A;}.yith-wcwl-share a.twitter{background: #45AFE2; background-color: #45AFE2;}.yith-wcwl-share a.twitter:hover{background: #595A5A; background-color: #595A5A;}.yith-wcwl-share a.pinterest{background: #AB2E31; background-color: #AB2E31;}.yith-wcwl-share a.pinterest:hover{background: #595A5A; background-color: #595A5A;}.yith-wcwl-share a.email{background: #FBB102; background-color: #FBB102;}.yith-wcwl-share a.email:hover{background: #595A5A; background-color: #595A5A;}.yith-wcwl-share a.whatsapp{background: #00A901; background-color: #00A901;}.yith-wcwl-share a.whatsapp:hover{background: #595A5A; background-color: #595A5A;}
</style>
<link rel='stylesheet' id='gizmos-google-fonts-css' href='https://fonts.googleapis.com/css?family=Roboto%3A300%2C400%2C500%2C600%2C700&#038;subset=latin-ext&#038;display=swap&#038;ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='gizmos-grid-css' href='https://gizmos.qodeinteractive.com/wp-content/themes/gizmos/assets/css/grid.min.css?ver=6.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='gizmos-style-css' href='https://gizmos.qodeinteractive.com/wp-content/themes/gizmos/style.css?ver=6.2.2' type='text/css' media='all' />
<style id='gizmos-style-inline-css' type='text/css'>
#qodef-content-bottom { background-color: #1A1A1A;}body { background-color: #f3f6fb;}#qodef-page-inner { padding: 0px 0px 0px 0px;}@media only screen and (max-width: 1024px) { #qodef-page-inner { padding: 0px 0px 0px 0px;}}#qodef-top-area { background-color: #ffffff;}#qodef-top-area-inner { border-bottom-color: #ffffff00;border-bottom-width: 0px;}#qodef-page-header .qodef-header-logo-link { height: 21px;}#qodef-page-mobile-header .qodef-mobile-header-logo-link { height: 21px;}.qodef-header-navigation ul li .qodef-drop-down-second { top: 325%;}.qodef-header-navigation> ul > li:hover { background-color: #ffffff00!important;}.qodef-header-navigation> ul > li.current-menu-item { background-color: #ffffff00!important;}.qodef-header-navigation> ul > li.current-menu-ancestor { background-color: #ffffff00!important;}.widget .qodef-side-menu-opener:hover { color: #2453d4;}.qodef-page-title { height: 78px;}.qodef-header--standard-extended #qodef-page-header { height: 152px;}
</style>
<link rel='stylesheet' id='gizmos-core-elementor-css' href='https://gizmos.qodeinteractive.com/wp-content/plugins/gizmos-core/inc/plugins/elementor/assets/css/elementor.min.css?ver=6.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-css' href='https://gizmos.qodeinteractive.com/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.16.0' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='https://gizmos.qodeinteractive.com/wp-content/uploads/elementor/css/custom-frontend-lite.min.css?ver=1669374779' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-6-css' href='https://gizmos.qodeinteractive.com/wp-content/uploads/elementor/css/post-6.css?ver=1669374779' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-5601-css' href='https://gizmos.qodeinteractive.com/wp-content/uploads/elementor/css/post-5601.css?ver=1669375605' type='text/css' media='all' />
<link rel='stylesheet' id='qode-zendesk-chat-css' href='https://gizmos.qodeinteractive.com/wp-content/plugins/qode-zendesk-chat//assets/main.css?ver=6.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='qi-blocks-google-fonts-css' href='https://fonts.googleapis.com/css?family=Roboto%3A400%2C500&#038;subset&#038;display=swap&#038;ver=1.0.0' type='text/css' media='all' />
{{-- <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.2.2' type='text/css' media='all' /> --}}
<link rel="https://api.w.org/" href="https://gizmos.qodeinteractive.com/wp-json/" /><link rel="alternate" type="application/json" href="https://gizmos.qodeinteractive.com/wp-json/wp/v2/pages/5601" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://gizmos.qodeinteractive.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://gizmos.qodeinteractive.com/wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 6.2.2" />
<meta name="generator" content="WooCommerce 7.1.0" />
<link rel="canonical" href="https://gizmos.qodeinteractive.com/home-12/" />
<link rel='shortlink' href='https://gizmos.qodeinteractive.com/?p=5601' />
<link rel="alternate" type="application/json+oembed" href="https://gizmos.qodeinteractive.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fgizmos.qodeinteractive.com%2Fhome-12%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://gizmos.qodeinteractive.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fgizmos.qodeinteractive.com%2Fhome-12%2F&#038;format=xml" />

<style type="text/css" id="wp-custom-css">
  .qodef-rev-border-radius rs-slide {
border-radius: 10px;
}		</style>
@endsection

@section('vendor-script')
<!-- Vendor js files -->

@endsection
@section('page-script')
<script data-cfasync="false" data-pagespeed-no-defer>
	var dataLayer_content = {"pagePostType":"page","pagePostType2":"single-page","pagePostAuthor":"admin"};
	dataLayer.push( dataLayer_content );
</script>
<script data-cfasync="false">
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.'+'js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KTQ2BTD');
</script>

 <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
 <script type="text/template" id="tmpl-variation-template">
	
</script>
<script type="text/template" id="tmpl-unavailable-variation-template">
	<p>Sorry, this product is unavailable. Please choose a different combination.</p>
</script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.4' id='jquery-core-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.0' id='jquery-migrate-js'></script>
<script>
  window.RS_MODULES = window.RS_MODULES || {};
  window.RS_MODULES.modules = window.RS_MODULES.modules || {};
  window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
  window.RS_MODULES.defered = true;
  window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
  window.RS_MODULES.type = 'compiled';
</script>
<div class="rbt-toolbar" data-theme="Gizmos" data-featured="" data-button-position="89%" data-button-horizontal="right" data-button-alt="no"></div>
<script type="text/javascript">
var sbiajaxurl = "https://gizmos.qodeinteractive.com/wp-admin/admin-ajax.php";
</script>
<link href="https://fonts.googleapis.com/css?family=Roboto:500%2C400&display=swap" rel="stylesheet" property="stylesheet" media="all" type="text/css">
<script type="text/javascript">
(function () {
  var c = document.body.className;
  c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
  document.body.className = c;
})();
</script>
<script>
if(typeof revslider_showDoubleJqueryError === "undefined") {function revslider_showDoubleJqueryError(sliderID) {console.log("You have some jquery.js library include that comes after the Slider Revolution files js inclusion.");console.log("To fix this, you can:");console.log("1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on");console.log("2. Find the double jQuery.js inclusion and remove it");return "Double Included jQuery Library";}}
</script>
<link rel='stylesheet' id='perfect-scrollbar-css' href='https://gizmos.qodeinteractive.com/wp-content/plugins/gizmos-core/assets/plugins/perfect-scrollbar/perfect-scrollbar.css?ver=6.2.2' type='text/css' media='all' />
<style id='wp-block-columns-inline-css' type='text/css'>
.wp-block-columns{align-items:normal!important;box-sizing:border-box;display:flex;flex-wrap:wrap!important;margin-bottom:1.75em}@media (min-width:782px){.wp-block-columns{flex-wrap:nowrap!important}}.wp-block-columns.are-vertically-aligned-top{align-items:flex-start}.wp-block-columns.are-vertically-aligned-center{align-items:center}.wp-block-columns.are-vertically-aligned-bottom{align-items:flex-end}@media (max-width:781px){.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column{flex-basis:100%!important}}@media (min-width:782px){.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column{flex-basis:0;flex-grow:1}.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column[style*=flex-basis]{flex-grow:0}}.wp-block-columns.is-not-stacked-on-mobile{flex-wrap:nowrap!important}.wp-block-columns.is-not-stacked-on-mobile>.wp-block-column{flex-basis:0;flex-grow:1}.wp-block-columns.is-not-stacked-on-mobile>.wp-block-column[style*=flex-basis]{flex-grow:0}:where(.wp-block-columns.has-background){padding:1.25em 2.375em}.wp-block-column{flex-grow:1;min-width:0;overflow-wrap:break-word;word-break:break-word}.wp-block-column.is-vertically-aligned-top{align-self:flex-start}.wp-block-column.is-vertically-aligned-center{align-self:center}.wp-block-column.is-vertically-aligned-bottom{align-self:flex-end}.wp-block-column.is-vertically-aligned-bottom,.wp-block-column.is-vertically-aligned-center,.wp-block-column.is-vertically-aligned-top{width:100%}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}
</style>
<style id='global-styles-inline-css' type='text/css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
</style>
<style id='core-block-supports-inline-css' type='text/css'>
.wp-container-8.wp-container-8{flex-wrap:nowrap;}
</style>
<link rel='stylesheet' id='rs-plugin-settings-css' href='https://gizmos.qodeinteractive.com/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.6.5' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
.gizmos.tparrows:before{display:none}.qodef-theme-cursor .kamperen.tparrows{cursor:none}.gizmos.tparrows:before{display:none}.gizmos.tparrows{cursor:pointer;background:transparent;width:20px;  height:auto;position:absolute;display:block;z-index:1000}.gizmos.tparrows:before{display:none}.gizmos.tparrows svg{display:block}.gizmos.tparrows svg g:nth-of-type(2){transition:clip-path .55s cubic-bezier(0.51,0.56,0.04,0.9);  clip-path:inset(0 16px 0 0)}.gizmos.tparrows.tp-leftarrow svg{transform:translateX(0);transition:transform .55s cubic-bezier(0.51,0.56,0.04,0.9)}.gizmos.tparrows.tp-rightarrow svg{transform:translateX(0) scaleX(-1); transform-origin:10px;transition:transform .55s cubic-bezier(0.51,0.56,0.04,0.9)}.gizmos.tparrows.tp-leftarrow.rs-touchhover svg{transform:translateX(-16px)}.gizmos.tparrows.tp-rightarrow.rs-touchhover svg{transform:translateX(16px) scaleX(-1)}.gizmos.tparrows.rs-touchhover svg g:nth-of-type(2){clip-path:inset(0 0px 0 0)}.gizmos.tp-bullets:before{content:' ';position:absolute;width:100%;height:100%;background:transparent;padding:10px;margin-left:-10px; margin-top:-10px;box-sizing:content-box}.gizmos .tp-bullet{width:7px;height:7px;position:absolute;  background:transparent;cursor:pointer;box-sizing:content-box;  border-radius:100%;  border:2px solid #000; transition:background-color .2s ease-out}.gizmos .tp-bullet.rs-touchhover,.gizmos .tp-bullet.selected{background:#000}
.gizmos_light.tparrows:before{display:none}.qodef-theme-cursor .kamperen.tparrows{cursor:none}.gizmos_light.tparrows{cursor:pointer;background:transparent;width:20px;  height:auto;position:absolute;display:block;z-index:1000}.gizmos_light.tparrows:before{display:none}.gizmos_light.tparrows svg{display:block}.gizmos_light.tparrows svg g:nth-of-type(2){transition:clip-path .55s cubic-bezier(0.51,0.56,0.04,0.9);  clip-path:inset(0 16px 0 0)}.gizmos_light.tparrows.tp-leftarrow svg{transform:translateX(0);transition:transform .55s cubic-bezier(0.51,0.56,0.04,0.9)}.gizmos_light.tparrows.tp-rightarrow svg{transform:translateX(0) scaleX(-1); transform-origin:10px;transition:transform .55s cubic-bezier(0.51,0.56,0.04,0.9)}.gizmos_light.tparrows.tp-leftarrow.rs-touchhover svg{transform:translateX(-16px)}.gizmos_light.tparrows.tp-rightarrow.rs-touchhover svg{transform:translateX(16px) scaleX(-1)}.gizmos_light.tparrows.rs-touchhover svg g:nth-of-type(2){clip-path:inset(0 0px 0 0)}.gizmos_light.tp-bullets:before{content:' ';position:absolute;width:100%;height:100%;background:rgba(255,255,255,0);padding:10px;margin-left:-10px; margin-top:-10px;box-sizing:content-box}.gizmos_light .tp-bullet{width:7px;height:7px;position:absolute;  background:transparent;cursor:pointer;box-sizing:content-box;  border-radius:100%;  border:2px solid #fff; transition:background-color .2s ease-out}.gizmos_light .tp-bullet.rs-touchhover,.gizmos_light .tp-bullet.selected{background:#fff}.tp-bullet{background:rgba(255,255,255,0)}
</style>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.6.4' id='swv-js'></script>
<script type='text/javascript' id='contact-form-7-js-extra'>
/* <![CDATA[ */
var wpcf7 = {"api":{"root":"https:\/\/gizmos.qodeinteractive.com\/wp-json\/","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.6.4' id='contact-form-7-js'></script>
<script type='text/javascript' id='qi-blocks-main-js-extra'>
/* <![CDATA[ */
var qiBlocks = {"vars":{"arrowLeftIcon":"<svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"><line x1=\"0.5\" y1=\"16\" x2=\"33.5\" y2=\"16\"\/><line x1=\"0.3\" y1=\"16.5\" x2=\"16.2\" y2=\"0.7\"\/><line x1=\"0\" y1=\"15.4\" x2=\"16.2\" y2=\"31.6\"\/><\/svg>","arrowRightIcon":"<svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 34.2 32.3\" xml:space=\"preserve\" style=\"stroke-width: 2;\"><line x1=\"0\" y1=\"16\" x2=\"33\" y2=\"16\"\/><line x1=\"17.3\" y1=\"0.7\" x2=\"33.2\" y2=\"16.5\"\/><line x1=\"17.3\" y1=\"31.6\" x2=\"33.5\" y2=\"15.4\"\/><\/svg>","closeIcon":"<svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 9.1 9.1\" xml:space=\"preserve\"><g><path d=\"M8.5,0L9,0.6L5.1,4.5L9,8.5L8.5,9L4.5,5.1L0.6,9L0,8.5L4,4.5L0,0.6L0.6,0L4.5,4L8.5,0z\"\/><\/g><\/svg>"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/qi-blocks/assets/dist/main.js?ver=6.2.2' id='qi-blocks-main-js'></script>
<script type='text/javascript' src='https://export.qodethemes.com/_toolbar/assets/js/rbt-modules.js?ver=6.2.2' id='rabbit_js-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.6.5' defer async id='tp-tools-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.6.5' defer async id='revmin-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.7.1.0' id='jquery-blockui-js'></script>
<script type='text/javascript' id='wc-add-to-cart-js-extra'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/gizmos.qodeinteractive.com\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=7.1.0' id='wc-add-to-cart-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.7.1.0' id='js-cookie-js'></script>
<script type='text/javascript' id='woocommerce-js-extra'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=7.1.0' id='woocommerce-js'></script>
<script type='text/javascript' id='wc-cart-fragments-js-extra'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_7a5960560b004e0d6806675ffcc1bebb","fragment_name":"wc_fragments_7a5960560b004e0d6806675ffcc1bebb","request_timeout":"5000"};
/* ]]> */
</script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=7.1.0' id='wc-cart-fragments-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-includes/js/hoverIntent.min.js?ver=1.10.2' id='hoverIntent-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2' id='jquery-ui-core-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/gizmos-core/assets/plugins/modernizr/modernizr.js?ver=6.2.2' id='modernizr-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/gizmos-core/assets/plugins/parallax-scroll/jquery.parallax-scroll.js?ver=6.2.2' id='parallax-scroll-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/gizmos-core/assets/plugins/gsap/gsap.min.js?ver=6.2.2' id='gsap-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/gizmos-core/assets/plugins/gsap/TextPlugin.min.js?ver=6.2.2' id='TextPlugin-js'></script>
<script type='text/javascript' id='gizmos-main-js-js-extra'>
/* <![CDATA[ */
var qodefGlobal = {"vars":{"adminBarHeight":0,"iconArrowLeft":"<svg class=\"qodef-svg--slider-arrow-left\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"10.607\" height=\"18.385\" viewBox=\"0 0 10.607 18.385\"><path d=\"M8.70851355 17.90094068.48344748 9.6758746c-.26657926-.26657926-.16758431-.79973777.22344574-1.19076782s.92418856-.490025 1.19076782-.22344574l8.22506608 8.22506608c.26657925.26657925.1661701.80115198-.22344575 1.19076782s-.92418856.490025-1.19076782.22344574Z\"\/><path d=\"M10.12294068 1.89748645 1.8978746 10.12255252c-.26657926.26657926-.79973777.16758431-1.19076782-.22344574s-.490025-.92418856-.22344574-1.19076782L8.70872712.48327288c.26657925-.26657925.80115198-.1661701 1.19076782.22344575s.490025.92418856.22344574 1.19076782Z\"\/><\/svg>","iconArrowRight":"<svg class=\"qodef-svg--slider-arrow-right\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"10.607\" height=\"18.385\" viewBox=\"0 0 10.607 18.385\"><path d=\"m1.89827288 17.90172712 8.22506608-8.22506608c.26657926-.26657926.1675843-.79973777-.22344574-1.19076782s-.92418856-.490025-1.19076782-.22344574L.48405932 16.48751355c-.26728636.26728637-.1661701.80115199.22344574 1.19076782s.92348146.49073211 1.19076782.22344575Z\"\/><path d=\"m.48327288 1.89827288 8.22506608 8.22506608c.26657926.26657926.79973777.1675843 1.19076782-.22344574s.490025-.92418856.22344574-1.19076782L1.89748645.48405932C1.63020008.21677296 1.09633446.31788922.70671863.70750506s-.49073211.92348146-.22344575 1.19076782Z\"\/><\/svg>","iconClose":"<svg class=\"qodef-svg--close\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" xmlns:xlink=\"http:\/\/www.w3.org\/1999\/xlink\" width=\"32\" height=\"32\" viewBox=\"0 0 32 32\"><g><path d=\"M 10.050,23.95c 0.39,0.39, 1.024,0.39, 1.414,0L 17,18.414l 5.536,5.536c 0.39,0.39, 1.024,0.39, 1.414,0 c 0.39-0.39, 0.39-1.024,0-1.414L 18.414,17l 5.536-5.536c 0.39-0.39, 0.39-1.024,0-1.414c-0.39-0.39-1.024-0.39-1.414,0 L 17,15.586L 11.464,10.050c-0.39-0.39-1.024-0.39-1.414,0c-0.39,0.39-0.39,1.024,0,1.414L 15.586,17l-5.536,5.536 C 9.66,22.926, 9.66,23.56, 10.050,23.95z\"><\/path><\/g><\/svg>","topAreaHeight":40,"restUrl":"https:\/\/gizmos.qodeinteractive.com\/wp-json\/","restNonce":"e7bf045a27","wishlistRestRoute":"gizmos\/v1\/wishlist","paginationRestRoute":"gizmos\/v1\/get-posts","productShowcaseCartRestRoute":"gizmos\/v1\/get-cart-data","productShowcaseWooCartRestRoute":"gizmos\/v1\/get-woo-cart-data","authorPaginationRestRoute":"gizmos\/v1\/get-authors","wishlistDropdownRestRoute":"gizmos\/v1\/wishlistdropdown","headerHeight":152,"mobileHeaderHeight":70}};
var qodefProductList = {"products":[{"ID":9453,"post_title":"X5 Closed-Back Wireless Headphones","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-10.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>370<\/bdi><\/span>","product_cat":["widgets"]},{"ID":9448,"post_title":"Wireless PC Mouse XG in Carbon Grey","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-90.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>45<\/bdi><\/span> &ndash; <span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>500<\/bdi><\/span>","product_cat":["widgets"]},{"ID":9443,"post_title":"Over-Ear FX-525 Light Headphones","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-76-1.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>890<\/bdi><\/span>","product_cat":["widgets"]},{"ID":9438,"post_title":"Full HD Webcam With Light Correction","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-18.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>120<\/bdi><\/span>","product_cat":["widgets"]},{"ID":9433,"post_title":"Camera CCQ-55889 4k Waterproof Cover","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-40.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,050<\/bdi><\/span>","product_cat":["widgets"]},{"ID":9428,"post_title":"Profeus Laptop 64GB W Series QW-55814","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-30.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>870<\/bdi><\/span>","product_cat":["widgets"]},{"ID":9423,"post_title":"Smart Watch Fitness Tracker GS-87 Black","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-28.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>450<\/bdi><\/span>","product_cat":["widgets"]},{"ID":9418,"post_title":"Led 4K Smart TV Expo GSX White","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-97.png","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,590<\/bdi><\/span>","product_cat":["widgets"]},{"ID":9413,"post_title":"Waterproof Fitness Watch GSPS-100259","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/10\/shop-categories-product-img2.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>320<\/bdi><\/span>","product_cat":["widgets"]},{"ID":9404,"post_title":"4K Monitor Z-10 Pro Expo with Keyboard","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-11.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,490<\/bdi><\/span>","product_cat":["widgets"]},{"ID":9402,"post_title":"USB Cable P-5001 Printer\/Laptop\/Phone","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-49.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>45<\/bdi><\/span>","product_cat":["widgets"]},{"ID":9397,"post_title":"Gaming Console S-4002 in Black\/Grey","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/10\/shop-img-121.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>290<\/bdi><\/span>","product_cat":["widgets"]},{"ID":9392,"post_title":"High-Airflow CXC-77 Computer Case Blue","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/10\/shop-img-122.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>3,850<\/bdi><\/span>","product_cat":["widgets"]},{"ID":9387,"post_title":"Robotic Vacuum Cleaner FZP-5505","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/10\/shop-categories-product-img4.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>440<\/bdi><\/span>","product_cat":["widgets"]},{"ID":9382,"post_title":"Profeus Drawing Tablet S-50 Series","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-31.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>950<\/bdi><\/span>","product_cat":["widgets"]},{"ID":9377,"post_title":"Hybrid Surveillance Drone RRP-2555","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-8.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,450<\/bdi><\/span>","product_cat":["widgets"]},{"ID":10182,"post_title":"Wireless PC Mouse XF-550 Black\/Grey","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/10\/weekly-1.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>250<\/bdi><\/span>","product_cat":["weekly"]},{"ID":10198,"post_title":"X7 Closed-Back Wireless Earbuds","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-10.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>345<\/bdi><\/span>","product_cat":["weekly"]},{"ID":10206,"post_title":"Computer Monitor Full HD Red\/Black","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-74.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,200<\/bdi><\/span>","product_cat":["weekly"]},{"ID":10209,"post_title":"Air Purifier Pro With Eco Mode For Office","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/10\/weekly-4.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>150<\/bdi><\/span>","product_cat":["weekly"]},{"ID":10230,"post_title":"Black Smartphone 128GB Storage","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-14.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>125<\/bdi><\/span>","product_cat":["weekly"]},{"ID":10239,"post_title":"4K Webcam With Light Correction","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-18.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>258<\/bdi><\/span>","product_cat":["uncategorized"]},{"ID":9739,"post_title":"Air Purifier with Eco Mode & Timer KL 12","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img10.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>100<\/bdi><\/span>","product_cat":["major-appliances"]},{"ID":9731,"post_title":"Norelco Shaver, Wet & Dry, S3\/85654","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img4a.jpg","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>95<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>85<\/bdi><\/span><\/ins>","product_cat":["major-appliances"]},{"ID":9723,"post_title":"Air Purifiers for Pets & Home Dust Pro","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img7.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>280<\/bdi><\/span>","product_cat":["major-appliances"]},{"ID":9696,"post_title":"Frontload Washer with Steam, 2.4 Cu. Ft. Capacity","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/10\/h5-rev-shop-img.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>456<\/bdi><\/span>","product_cat":["front-load-machine"]},{"ID":9285,"post_title":"Home Steam Iron for Clothes, NB14","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img6.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>85<\/bdi><\/span>","product_cat":["for-home"]},{"ID":9277,"post_title":"Wired Earbuds, 3.5mm Jack for Phone","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-70.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>250<\/bdi><\/span>","product_cat":["audio"]},{"ID":9275,"post_title":"32\" Smart Monitor,4K UHD, Remote","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-6.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>980<\/bdi><\/span>","product_cat":["lcd-monitors"]},{"ID":9267,"post_title":"White Fridge-Freezer with Panels","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img6.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>7,500<\/bdi><\/span>","product_cat":["for-kitchen"]},{"ID":9259,"post_title":"BX-235700 Closed-Back Headphones","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-9.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>650<\/bdi><\/span>","product_cat":["audio"]},{"ID":9246,"post_title":"Smart Front Load Washing Machine 16kg","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img3a.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>340<\/bdi><\/span>","product_cat":["for-home"]},{"ID":9238,"post_title":"Profeus Drawing Tablet S Series QW-55822","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-31.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>950<\/bdi><\/span>","product_cat":["it-tech"]},{"ID":9233,"post_title":"Smart Robotic Vacuum Cleaner FZ-65993","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/10\/shop-categories-product-img4.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>465<\/bdi><\/span>","product_cat":["for-home"]},{"ID":9221,"post_title":"High-AirflowTempered Glass Door Opening","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/10\/shop-categories-product-img3.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>3,650<\/bdi><\/span>","product_cat":["it-tech"]},{"ID":9213,"post_title":"Mini Drone Camera - 1080P HD 360\u00b0 Flip","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-8.jpg","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,250<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,000<\/bdi><\/span><\/ins>","product_cat":["digital-tech"]},{"ID":9204,"post_title":"Iron for Clothes With Non-Stick Soleplate","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img1-new.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>45<\/bdi><\/span>","product_cat":["for-home"]},{"ID":9195,"post_title":"Multiuse USB Cable Phone\/Laptop\/Desc","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-49.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>62<\/bdi><\/span>","product_cat":["it-tech"]},{"ID":9186,"post_title":"34-Inch Ultrawide QHD Computer Monitor","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-11.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>766<\/bdi><\/span> &ndash; <span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>966<\/bdi><\/span>","product_cat":["lcd-monitors"]},{"ID":9172,"post_title":"Waterproof Fitness Watch GSPS-100253","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/10\/shop-categories-product-img2.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>320<\/bdi><\/span>","product_cat":["smart-watches"]},{"ID":9163,"post_title":"Video Game Console 1080P HDMI Output","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-59.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>360<\/bdi><\/span>","product_cat":["gaming"]},{"ID":9152,"post_title":"PowerCrush Blender, 6 Speed For Shakes","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h12-shop-img2.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>45<\/bdi><\/span>","product_cat":["for-kitchen"]},{"ID":9144,"post_title":"Smart Watch Fitness Tracker GS-87 Black","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-28.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>450<\/bdi><\/span>","product_cat":["smart-watches"]},{"ID":9135,"post_title":"Profeus Laptop 128GB Q Series QW-55814","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-3.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>770<\/bdi><\/span> &ndash; <span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>870<\/bdi><\/span>","product_cat":["it-tech"]},{"ID":9127,"post_title":"Camera CCW-55889 4k Waterproof Cover","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-40.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>850<\/bdi><\/span> &ndash; <span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,050<\/bdi><\/span>","product_cat":["digital-tech"]},{"ID":9116,"post_title":"Led 4K Smart TV Expo GSX-10257 Black","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-97.png","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,250<\/bdi><\/span>","product_cat":["lcd-monitors"]},{"ID":9107,"post_title":"Side-by-Side Fridge & Freezer For Apartment","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img12.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>460<\/bdi><\/span>","product_cat":["for-kitchen"]},{"ID":9097,"post_title":"Wireless Headphones with 32mm Drivers","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-76-1.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>890<\/bdi><\/span>","product_cat":["audio"]},{"ID":9087,"post_title":"Optical Mouse Pro XS-854PT Carbon Black","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-102.png","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>170<\/bdi><\/span>","product_cat":["gaming"]},{"ID":9078,"post_title":"SX-2299 Closed-Back Wireless Headphones","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-10.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>520<\/bdi><\/span>","product_cat":["audio"]},{"ID":9070,"post_title":"Full Hd 1080p Webcam With Light Correction","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-18.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>120<\/bdi><\/span>","product_cat":["digital-tech"]},{"ID":9049,"post_title":"Profeus Drawing Tablet M Series QW-558157 Pro","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-31.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,390<\/bdi><\/span>","product_cat":["virtual-reality"]},{"ID":8997,"post_title":"MBB214 147GB 10000 RPM 16MB Cache SAS 6Gb\/s 2.5\" Hard Drive","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-104.png","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>2,330<\/bdi><\/span>","product_cat":["internal-ssds"]},{"ID":8921,"post_title":"RGB PTP-50 Mechanical Keyboard","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/10\/shop-img-118.png","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>390<\/bdi><\/span>","product_cat":["fitbit"]},{"ID":8911,"post_title":"2TB USB 3.1 External Hard Drive Orange","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/10\/shop-img-117.png","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>210<\/bdi><\/span>","product_cat":["fitbit"]},{"ID":8904,"post_title":"FTW-37 256GB DDR4 Desktop Memory","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/10\/shop-img-116.png","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,280<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,180<\/bdi><\/span><\/ins>","product_cat":["fitbit"]},{"ID":8889,"post_title":"High Definition Web Camera SPX-8962","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/10\/shop-img-115.png","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>140<\/bdi><\/span>","product_cat":["fitbit"]},{"ID":8862,"post_title":"Tablet W-56774 Mini Series with Keyboard","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/10\/shop-img-114.png","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>890<\/bdi><\/span>","product_cat":["fitbit"]},{"ID":8855,"post_title":"BW-23571 Closed-Back Headphones Pro","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/10\/shop-img-113.png","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>700<\/bdi><\/span>","product_cat":["fitbit"]},{"ID":8823,"post_title":"CPU Air Cooler FP130 Fan Anodized Metal","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/10\/shop-img-111.png","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>155<\/bdi><\/span>","product_cat":["fitbit"]},{"ID":8815,"post_title":"Wireless PC Mouse XF-550 in Carbon Black","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/10\/shop-img-112.png","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>290<\/bdi><\/span>","product_cat":["fitbit"]},{"ID":8625,"post_title":"2TB SSD 3D TLC 6Gb\/s 2.5\" Internal Solid State Drive T253A300","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/10\/shop-img-110.png","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>450<\/bdi><\/span>","product_cat":["external-ssds"]},{"ID":8621,"post_title":"High-Airflow CXC-10269 Computer Case Black w\/ Blue","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-96.png","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>3,850<\/bdi><\/span>","product_cat":["internal-ssds"]},{"ID":8611,"post_title":"CPU Air Cooler FP120 Fan Anodized Gun-Metalic Black","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/10\/shop-img-109.png","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>155<\/bdi><\/span>","product_cat":["internal-ssds"]},{"ID":8602,"post_title":"Gaming Headphones Over-Ear FX-9909 Plus Blue\/Black","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-99.png","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>890<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>810<\/bdi><\/span><\/ins>","product_cat":["external-ssds"]},{"ID":8587,"post_title":"RGB Double Shot PBT QUACK Mechanical Keyboard","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/10\/shop-img-107.png","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>390<\/bdi><\/span>","product_cat":["external-ssds"]},{"ID":7800,"post_title":"Power Supply, 80 Plus, Silver 4.7 inches","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-101.png","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>770<\/bdi><\/span>","product_cat":["premium-audio"]},{"ID":7788,"post_title":"Core 6100 3.70 GHz 3M Cache Processor","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-100.png","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,860<\/bdi><\/span>","product_cat":["premium-audio"]},{"ID":7777,"post_title":"Headphones FX-990 Plus Blue Black","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-99.png","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>890<\/bdi><\/span>","product_cat":["premium-audio"]},{"ID":7771,"post_title":"FTW-3553 8GB DDR4 Desktop Memory","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-98.png","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,280<\/bdi><\/span>","product_cat":["premium-audio"]},{"ID":7765,"post_title":"Led 4K Smart TV Expo GSX-10007 White","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-97.png","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,590<\/bdi><\/span>","product_cat":["premium-audio"]},{"ID":7759,"post_title":"High-Airflow C-10 Computer Case","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-96.png","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>3,850<\/bdi><\/span>","product_cat":["premium-audio"]},{"ID":7744,"post_title":"RX 6600 Core 8GB GDDR6 Graphics Card","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-95.png","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>990<\/bdi><\/span>","product_cat":["premium-audio"]},{"ID":7564,"post_title":"High Definition Monitor Red\/Black Expo SDS-855697","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-106.png","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,490<\/bdi><\/span>","product_cat":["premium-laptops"]},{"ID":7550,"post_title":"FTW-3553 8GB 2666MHz DDR4 DIMM Desktop Memory","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-105.png","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,280<\/bdi><\/span>","product_cat":["premium-laptops"]},{"ID":7532,"post_title":"MBD214 147GB 10000 RPM 16MB Cache SAS 6Gb\/s 2.5\" Hard Drive","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-104.png","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>2,330<\/bdi><\/span>","product_cat":["premium-laptops"]},{"ID":7508,"post_title":"Fractal Design 850-PW Tempered Glass Computer Case","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-103.png","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>2,790<\/bdi><\/span>","product_cat":["premium-laptops"]},{"ID":7503,"post_title":"Wireless PC Mouse XF-550 in Carbon Black\/Grey\/Green","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-102.png","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>290<\/bdi><\/span>","product_cat":["premium-laptops"]},{"ID":7161,"post_title":"Large Format 120mm f\/5.6 Lens for VCW Pro","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-81.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>890<\/bdi><\/span>","product_cat":["lighting"]},{"ID":7156,"post_title":"Fixed-Wing Hybrid Surveillance Drone VV-550","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-8.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,450<\/bdi><\/span>","product_cat":["coolers"]},{"ID":7151,"post_title":"Business Inkjet Printer DLWW-779 All in One","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-7.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>790<\/bdi><\/span>","product_cat":["coolers"]},{"ID":7145,"post_title":"Wireless PC Mouse XF in Carbon Black\/Grey","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-90.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>45<\/bdi><\/span> &ndash; <span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>500<\/bdi><\/span>","product_cat":["coolers"]},{"ID":7137,"post_title":"Digital Waterproof Fitness Watch GS-Sport","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-65.jpg","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>490<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>400<\/bdi><\/span><\/ins>","product_cat":["lighting"]},{"ID":7126,"post_title":"Led 4K Smart TV Expo GSX-877 White\/Black","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-26.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,590<\/bdi><\/span>","product_cat":["lighting"]},{"ID":7005,"post_title":"Retro Gaming Console 4014 in Coal Black","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-73.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>290<\/bdi><\/span>","product_cat":["gift-sets"]},{"ID":6956,"post_title":"Mini USB Flash Drive G-900 in Silver Gray","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-89.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>59<\/bdi><\/span>","product_cat":["gift-sets"]},{"ID":6948,"post_title":"Smart Watch Fitness Tracker RP-5 Carbon","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-88.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>590<\/bdi><\/span>","product_cat":["gift-sets"]},{"ID":6935,"post_title":"Over-Ear FX-55 Light Headphones Orange","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-44.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>890<\/bdi><\/span>","product_cat":["gift-sets"]},{"ID":7002,"post_title":"Waterproof Fitness Watch GSPS-100557","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-72.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>490<\/bdi><\/span>","product_cat":["gift-sets"]},{"ID":6928,"post_title":"High Definition Monitor Red\/Black Expo SDS","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-74.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,490<\/bdi><\/span>","product_cat":["gift-sets"]},{"ID":6915,"post_title":"PC Superior Air Z Silver Grey QOW-5859","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-87.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>3,450<\/bdi><\/span>","product_cat":["gift-sets"]},{"ID":6889,"post_title":"Photography Drone GS-878 Carbon Black","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-86.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,450<\/bdi><\/span>","product_cat":["gift-sets"]},{"ID":6479,"post_title":"Business Inkjet Printer DLLW-7797","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-85.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>790<\/bdi><\/span>","product_cat":["gopro"]},{"ID":6471,"post_title":"SM-22 Wireless Headphones","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-10.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>590<\/bdi><\/span>","product_cat":["gopro"]},{"ID":6462,"post_title":"BX-23 Closed-Back Headphones","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-9.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>700<\/bdi><\/span>","product_cat":["gopro"]},{"ID":6439,"post_title":"Electric Scooter Prisma Superior F","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-2.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,790<\/bdi><\/span>","product_cat":["gopro"]},{"ID":6434,"post_title":"USB Cable P-501 Printer\/Laptop","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-49.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>45<\/bdi><\/span>","product_cat":["gopro"]},{"ID":6429,"post_title":"Tablet Mini Series with Keyboard","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-31.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>890<\/bdi><\/span>","product_cat":["gopro"]},{"ID":6418,"post_title":"Led 4K Smart TV Expo GSX-8789 White\/Black\/Grey","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-84.jpg","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,590<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,390<\/bdi><\/span><\/ins>","product_cat":["gopro"]},{"ID":6413,"post_title":"Profeus Laptop M Series QW-55811","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-30.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>970<\/bdi><\/span>","product_cat":["gopro"]},{"ID":6392,"post_title":"Smartphone Midnight Black GP-255","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-83.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>770<\/bdi><\/span>","product_cat":["gopro"]},{"ID":6380,"post_title":"Tablet SQ Series F-569877 with Keyboard","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-68.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,090<\/bdi><\/span>","product_cat":["light-bulbs"]},{"ID":6365,"post_title":"Smartphone Premium Midnight Black GP-250","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-14.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>770<\/bdi><\/span>","product_cat":["sensors"]},{"ID":6346,"post_title":"Wireless Bluetooth Speaker GS-97 Multiple Colors","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-82.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>500<\/bdi><\/span>","product_cat":["light-bulbs"]},{"ID":6341,"post_title":"Fixed-Wing Hybrid Surveillance Drone VV","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-8.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,450<\/bdi><\/span>","product_cat":["sensors"]},{"ID":6302,"post_title":"Large Format 120mm f\/5.6 Lens for VCC Pro","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-81.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>890<\/bdi><\/span>","product_cat":["sensors"]},{"ID":6291,"post_title":"High Definition Web Camera Sharp X 59855","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-18.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>230<\/bdi><\/span>","product_cat":["light-bulbs"]},{"ID":6103,"post_title":"Wireless Bluetooth Speaker GS-997 Multiple Colors","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-15.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>500<\/bdi><\/span>","product_cat":["chromebooks"]},{"ID":6098,"post_title":"Air Purifier Mika Clean Basic-659566 White","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-60.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,390<\/bdi><\/span>","product_cat":["chromebooks"]},{"ID":6093,"post_title":"BW-235700 Closed-Back Wireless Headphones","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-9.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>700<\/bdi><\/span>","product_cat":["notebooks"]},{"ID":6087,"post_title":"SM-225088 Closed-Back White Wireless Headphones","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-10.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>590<\/bdi><\/span>","product_cat":["notebooks"]},{"ID":6057,"post_title":"Fractal Design Tempered Glass S7 Computer Case","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-80.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>2,790<\/bdi><\/span>","product_cat":["chromebooks"]},{"ID":6043,"post_title":"Air Purifier with UV-C Light","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img10.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>267<\/bdi><\/span>","product_cat":["ultraviolet"]},{"ID":6035,"post_title":"Ionic Air Purifier Pro","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img7.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>258<\/bdi><\/span>","product_cat":["ionic"]},{"ID":6027,"post_title":"Air Purifier With Hepa Filter","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img10.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>316<\/bdi><\/span>","product_cat":["hepa"]},{"ID":6018,"post_title":"Central Air Purifier Pro","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img7.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>318<\/bdi><\/span>","product_cat":["central"]},{"ID":6009,"post_title":"Air Purifier OxyPure Pro","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img10.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>135<\/bdi><\/span>","product_cat":["air-to-air"]},{"ID":6001,"post_title":"AC With Carbon Activated Filter","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img7.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>295<\/bdi><\/span>","product_cat":["activated-carbon"]},{"ID":5985,"post_title":"Upright Bagged Vacuum, Silver","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img11.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>324<\/bdi><\/span>","product_cat":["upright"]},{"ID":5976,"post_title":"Turbo Canister Vacuum Cleaner","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img11.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>259<\/bdi><\/span>","product_cat":["upholstery-cleaners"]},{"ID":5959,"post_title":"Robot Vacuum Sweep and Mop","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h12-shop-img6.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>464<\/bdi><\/span>","product_cat":["robotic"]},{"ID":5958,"post_title":"High Definition Web Camera Sharp X 59855","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-78.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>230<\/bdi><\/span>","product_cat":["software"]},{"ID":5952,"post_title":"Smart Watch Fitness Tracker Silver Black RP-100","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-77.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>590<\/bdi><\/span>","product_cat":["software"]},{"ID":5940,"post_title":"Stick Cordless Vacuum Cleaner","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img11.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>305<\/bdi><\/span>","product_cat":["cordless"]},{"ID":5936,"post_title":"Electric Scooter Prisma Superior ZY-695471","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-2.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,790<\/bdi><\/span>","product_cat":["software"]},{"ID":5928,"post_title":"Canister Vacuum Cleaner","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img11.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>280<\/bdi><\/span>","product_cat":["canister"]},{"ID":5919,"post_title":"Robotic Vacuum Pro, Black","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img13new.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>356<\/bdi><\/span>","product_cat":["carpet-cleaners"]},{"ID":5914,"post_title":"Led 4K Smart TV Expo GSX-878 White\/Black\/Grey","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-79.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,590<\/bdi><\/span>","product_cat":["software"]},{"ID":5906,"post_title":"24\" Wide All-Refrigerator","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img10.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>785<\/bdi><\/span>","product_cat":["stacked-fridge"]},{"ID":5901,"post_title":"Side-by-Side Fridge and Freezer","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img12.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>360<\/bdi><\/span>","product_cat":["side-by-side-fridge"]},{"ID":5887,"post_title":"5-Speed Hand Mixer, Inox","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img9.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>65<\/bdi><\/span>","product_cat":["mixers"]},{"ID":5879,"post_title":"800W Handheld Mixer, 5-in-1","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img8.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>42<\/bdi><\/span>","product_cat":["hand-blenders"]},{"ID":5871,"post_title":"French Door Fridge, Ice Maker","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img6.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,250<\/bdi><\/span>","product_cat":["french-door-fridge"]},{"ID":5863,"post_title":"PowerCrush Blender, 6 Speed","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h12-shop-img2.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>39<\/bdi><\/span>","product_cat":["basic-blenders"]},{"ID":5853,"post_title":"Blue Iron, 2 Steam Levels","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img1-new.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>35<\/bdi><\/span>","product_cat":["vertical-steam"]},{"ID":5845,"post_title":"Steam Iron with Travel Bag","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img6.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>49<\/bdi><\/span>","product_cat":["travel-irons"]},{"ID":5836,"post_title":"Top Load Washer, Quick Wash","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img3a.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>350<\/bdi><\/span>","product_cat":["top-load-machine"]},{"ID":5813,"post_title":"Steam Iron  With LCD Display","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img6.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>64<\/bdi><\/span>","product_cat":["steam-irons"]},{"ID":5804,"post_title":"Combo Machine, Washer & Dryer, 2.7 cu ft, White","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img5.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>336<\/bdi><\/span>","product_cat":["front-load-machine"]},{"ID":5788,"post_title":"Dry & Spray Iron, One Size, Blue","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img1-new.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>24<\/bdi><\/span>","product_cat":["basic-irons"]},{"ID":5785,"post_title":"High-Airflow Tempered Glass Computer Case","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-75.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>3,850<\/bdi><\/span>","product_cat":["3d-printers"]},{"ID":5775,"post_title":"Smart Robotic Vacuum Cleaner FZP-550","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h12-shop-img6.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>440<\/bdi><\/span>","product_cat":["3d-printers"]},{"ID":5773,"post_title":"Smartphone LS-589662 Midnight Black","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-37.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>770<\/bdi><\/span>","product_cat":["3d-printers"]},{"ID":5762,"post_title":"Over-Ear Headphones FX-9901 Orange","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-76-1.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>890<\/bdi><\/span>","product_cat":["3d-printers"]},{"ID":5757,"post_title":"Fixed-Wing Hybrid Surveillance Drone VW","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-8.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,450<\/bdi><\/span>","product_cat":["3d-printers"]},{"ID":5707,"post_title":"Washing Machine with HygienicCare","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img3a.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>850<\/bdi><\/span>","product_cat":["large-appliances"]},{"ID":5699,"post_title":"Right Hinge Top Mount Fridge - White","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img4.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,000<\/bdi><\/span>","product_cat":["large-appliances"]},{"ID":5691,"post_title":"2 in 1 Air Purifier and Humidifier","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img7.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,500<\/bdi><\/span>","product_cat":["hybrid-models"]},{"ID":5682,"post_title":"Hybrid Fridge-Freezer with Panels","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img6.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>6,500<\/bdi><\/span>","product_cat":["hybrid-models"]},{"ID":5507,"post_title":"USB Cable P-500 Printer\/Laptop\/Phone","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-49.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>45<\/bdi><\/span>","product_cat":["web-cameras"]},{"ID":5501,"post_title":"Profeus Laptop Mini Series QW-558 Pro","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-30.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>970<\/bdi><\/span> &ndash; <span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,570<\/bdi><\/span>","product_cat":["web-cameras"]},{"ID":5493,"post_title":"Smartphone Premium Midnight Black G-250","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-14.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>770<\/bdi><\/span>","product_cat":["web-cameras"]},{"ID":5483,"post_title":"Smart Robotic Vacuum Cleaner FZ-65897","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h12-shop-img6.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>440<\/bdi><\/span>","product_cat":["web-cameras"]},{"ID":5461,"post_title":"Self-Charging Robotic Vacuums","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img13new.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>330<\/bdi><\/span>","product_cat":["wireless-control"]},{"ID":5456,"post_title":"Mini Fridge With Freezer For Office","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img12.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>432<\/bdi><\/span>","product_cat":["big-spenders"]},{"ID":5448,"post_title":"Blender With Pulse Function","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img11.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>74<\/bdi><\/span>","product_cat":["low-spenders"]},{"ID":5440,"post_title":"Air Purifier with Eco Mode & Timer","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img10.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>92<\/bdi><\/span>","product_cat":["big-spenders"]},{"ID":5432,"post_title":"Food Mixer for Cream With Cord","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img9.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>75<\/bdi><\/span>","product_cat":["small-appliances"]},{"ID":5424,"post_title":"Hand Blender for Baby Food & More","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img8.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>39<\/bdi><\/span>","product_cat":["small-appliances"]},{"ID":5416,"post_title":"Air Purifiers for Pets & Home Dust","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img7.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>250<\/bdi><\/span>","product_cat":["wireless-control"]},{"ID":5407,"post_title":"Home Steam Iron for Clothes, NB12","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img6.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>75<\/bdi><\/span>","product_cat":["low-spenders"]},{"ID":5218,"post_title":"4K Monitor Red and Black Expo SDM-6671","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-74.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,490<\/bdi><\/span>","product_cat":["new-arrivals"]},{"ID":5213,"post_title":"Waterproof Fitness Watch GSPS-100550","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-72.jpg","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>490<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>430<\/bdi><\/span><\/ins>","product_cat":["new-arrivals"]},{"ID":5208,"post_title":"Retro Gaming Console 4012 in Coal Black","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-73.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>290<\/bdi><\/span>","product_cat":["new-arrivals"]},{"ID":5193,"post_title":"Profeus Drawing Tablet Professional Series QW-55","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-71.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>2,290<\/bdi><\/span>","product_cat":["trending"]},{"ID":5188,"post_title":"BX-235700 Closed-Back Wireless Headphones","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-9.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>700<\/bdi><\/span>","product_cat":["trending"]},{"ID":5183,"post_title":"SM-225088 Closed-Back Wireless Headphones","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-10.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>590<\/bdi><\/span>","product_cat":["trending"]},{"ID":5174,"post_title":"Smart TV Keyboard and Mouse Set Silver Grey S900","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-11.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>390<\/bdi><\/span>","product_cat":["trending"]},{"ID":5143,"post_title":"Vacuum Cleaner with Filter Bag","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img11.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>350<\/bdi><\/span>","product_cat":["minor-appliances"]},{"ID":5128,"post_title":"2 Door Fridge and Freezer, 245L","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img4.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>458<\/bdi><\/span>","product_cat":["minor-appliances"]},{"ID":5120,"post_title":"1800W Iron with Thermostat Dial","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img1-new.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>75<\/bdi><\/span>","product_cat":["minor-appliances"]},{"ID":5112,"post_title":"3 Door Fridge and Freezer, Inox","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img6.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>850<\/bdi><\/span>","product_cat":["minor-appliances"]},{"ID":5099,"post_title":"Kitchen Mixer, Ultra Power, 600W","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img3.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>70<\/bdi><\/span>","product_cat":["minor-appliances"]},{"ID":5087,"post_title":"Espresso & Coffee Machine, Silver","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img2.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>49<\/bdi><\/span>","product_cat":["minor-appliances"]},{"ID":5074,"post_title":"Front Load Washing Machine, 8kg","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img5.jpg","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>350<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>325<\/bdi><\/span><\/ins>","product_cat":["minor-appliances"]},{"ID":5065,"post_title":"Air Cleaner for Smoke, KM12456","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img16.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>85<\/bdi><\/span>","product_cat":["minor-appliances"]},{"ID":5054,"post_title":"Electric Toaster, 2 Slice - Orange","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h5-shop-img1.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>45<\/bdi><\/span>","product_cat":["minor-appliances"]},{"ID":4926,"post_title":"Smart Watch Super Black SMT-100","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-17.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>350<\/bdi><\/span>","product_cat":["special-price"]},{"ID":4923,"post_title":"In-Ear Studio Headphones FX-9909","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-70.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>650<\/bdi><\/span>","product_cat":["last-pieces"]},{"ID":4914,"post_title":"Multiuse Cable Adapter FFG-8898","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-69.jpg","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>42<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>35<\/bdi><\/span><\/ins>","product_cat":["special-price"]},{"ID":4897,"post_title":"Tablet S Series F-569877 with Keyboard","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-68.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,090<\/bdi><\/span>","product_cat":["last-pieces"]},{"ID":4885,"post_title":"Fixed-Wing Hybrid Surveillance Drone G","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-8.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,450<\/bdi><\/span>","product_cat":["last-pieces"]},{"ID":4877,"post_title":"Bluetooth Speaker GSS-991 Multicolor","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-15.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>500<\/bdi><\/span>","product_cat":["special-price"]},{"ID":4534,"post_title":"Steam Garment Iron, Standard","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h12-shop-img1.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>133<\/bdi><\/span>","product_cat":["domestic"]},{"ID":4526,"post_title":"16-Speed Blender with Glass Jar","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h12-shop-img2.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>80<\/bdi><\/span>","product_cat":["domestic"]},{"ID":4518,"post_title":"Compact Washer With LED Display","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img3a.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>325<\/bdi><\/span>","product_cat":["domestic"]},{"ID":4510,"post_title":"Volume Booster Hair Dryer, Black","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h12-shop-img3.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>58<\/bdi><\/span>","product_cat":["domestic"]},{"ID":4502,"post_title":"Hand Blender with Beaker, Orange","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h12-shop-img4.jpg","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>43<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>33<\/bdi><\/span><\/ins>","product_cat":["domestic"]},{"ID":4494,"post_title":"French Door With Ice Maker, AP13","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h12-shop-img5.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>750<\/bdi><\/span>","product_cat":["domestic"]},{"ID":4478,"post_title":"High Definition Web Camera","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-18.jpg","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>170<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>120<\/bdi><\/span><\/ins>","product_cat":["devices"]},{"ID":4466,"post_title":"Profeus Laptop SQ-55 Series","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-30.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,090<\/bdi><\/span>","product_cat":["devices"]},{"ID":4458,"post_title":"Camera 4k Waterproof Cover","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-40.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,190<\/bdi><\/span>","product_cat":["devices"]},{"ID":4450,"post_title":"Electric Scooter Prisma Superior","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-51.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,790<\/bdi><\/span>","product_cat":["devices"]},{"ID":4445,"post_title":"Smart Robotic Vacuum Cleaner","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h12-shop-img6.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>440<\/bdi><\/span>","product_cat":["devices"]},{"ID":4432,"post_title":"Smart Watch Fitness Tracker","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-28.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>590<\/bdi><\/span>","product_cat":["devices"]},{"ID":4400,"post_title":"Business Inkjet Printer DLLW-779 All in One","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-7.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>790<\/bdi><\/span>","product_cat":["top-rated"]},{"ID":4388,"post_title":"Fixed-Wing Hybrid Surveillance Drone PW-554","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-8.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,450<\/bdi><\/span>","product_cat":["top-rated"]},{"ID":4380,"post_title":"BX-23570 Closed-Back Wireless Headphones","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-9.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>700<\/bdi><\/span>","product_cat":["special-offer"]},{"ID":4372,"post_title":"SM-22508 Closed-Back Wireless Headphones","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-10.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>590<\/bdi><\/span>","product_cat":["special-offer"]},{"ID":4366,"post_title":"Led 4K Smart TV Expo GSX White\/Black\/Grey","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-26.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,590<\/bdi><\/span>","product_cat":["top-rated"]},{"ID":4345,"post_title":"Air Purifier, Smart WiFi and PM2.5 Monitor","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h12-shop-img13.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>212<\/bdi><\/span>","product_cat":["popular"]},{"ID":4291,"post_title":"Salon Hair Dryer for Normal & Curly Hair","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h12-shop-img12.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>57<\/bdi><\/span>","product_cat":["popular"]},{"ID":4262,"post_title":"Iron for Clothes 2400-Watt, Orange, KM 125","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h12-shop-img11.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>60<\/bdi><\/span>","product_cat":["popular"]},{"ID":4249,"post_title":"Ultra-Stick 500 Watt 9-Speed Hand Blender","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h12-shop-img10.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>45<\/bdi><\/span>","product_cat":["popular"]},{"ID":4232,"post_title":"Dual Door Fridge With Thermostat Control","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h12-shop-img9.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>256<\/bdi><\/span>","product_cat":["popular"]},{"ID":4209,"post_title":"Self-Emptying Robot Vacuum, New Model","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h12-shop-img8.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>250<\/bdi><\/span>","product_cat":["popular"]},{"ID":4186,"post_title":"Smart Robotic Vacuum, High Suction Power","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h12-shop-img6.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>140<\/bdi><\/span>","product_cat":["smart"]},{"ID":4159,"post_title":"Smart 2 Door Fridge and Freezer, WS2022","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h12-shop-img5.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>950<\/bdi><\/span>","product_cat":["smart"]},{"ID":4150,"post_title":"Smart Front Load Washing Machine 14kg","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img17.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>480<\/bdi><\/span>","product_cat":["smart"]},{"ID":4125,"post_title":"Electric Hand Mixer KH210, 6 Speed, White","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h12-shop-img7.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>35<\/bdi><\/span>","product_cat":["regular"]},{"ID":4116,"post_title":"Coffee Maker with Auto Pause and Glass Carafe","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img8.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>45<\/bdi><\/span>","product_cat":["regular"]},{"ID":4101,"post_title":"White Robotic Vacuum, High Suction Power","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h12-shop-img6.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>120<\/bdi><\/span>","product_cat":["regular"]},{"ID":4089,"post_title":"Wireless Mouse XF in Carbon Black\/Grey","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-48.jpg","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>190<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>135<\/bdi><\/span><\/ins>","product_cat":["earphones"]},{"ID":4083,"post_title":"High Definition Web Camera SPX-89625","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-18.jpg","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>170<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>120<\/bdi><\/span><\/ins>","product_cat":["earphones"]},{"ID":4078,"post_title":"Bluetooth Speaker GSS-997 Multicolor","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-15.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>500<\/bdi><\/span>","product_cat":["power-banks"]},{"ID":4073,"post_title":"Retro Gaming Console S-4002 in Black","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-59.jpg","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>290<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>220<\/bdi><\/span><\/ins>","product_cat":["earphones"]},{"ID":4060,"post_title":"USB Cable P-200 Printer\/Laptop\/Phone","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-49.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>45<\/bdi><\/span>","product_cat":["power-banks"]},{"ID":4054,"post_title":"Smart TV Keyboard and Mouse S7001","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-11.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>590<\/bdi><\/span>","product_cat":["power-banks"]},{"ID":3992,"post_title":"Electric Toaster, 2 Slice \u2013 Black CT20546","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img15.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>56<\/bdi><\/span>","product_cat":["regular"]},{"ID":4170,"post_title":"Smart Iron for Clothes 1800-Watt, Blue & White","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h12-shop-img1.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>140<\/bdi><\/span>","product_cat":["smart"]},{"ID":3943,"post_title":"Front Load Washing Machine 10kg WAX32","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img17.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>380<\/bdi><\/span>","product_cat":["regular"]},{"ID":4184,"post_title":"Smart Professional Hair Dryer, 1800 Watt","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h12-shop-img3.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>80<\/bdi><\/span>","product_cat":["smart"]},{"ID":3909,"post_title":"High Definition Web Camera SPX-8962547","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-46.jpg","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>140<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>100<\/bdi><\/span><\/ins>","product_cat":["analog-watches"]},{"ID":3896,"post_title":"Mini USB Flash G-10 Multiple Colors","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-67.jpg","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>59<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>39<\/bdi><\/span><\/ins>","product_cat":["analog-watches"]},{"ID":3887,"post_title":"Fixed-Wing Hybrid Surveillance Drone PW-555","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-8.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,450<\/bdi><\/span>","product_cat":["analog-watches"]},{"ID":3879,"post_title":"Digital Waterproof Fitness Watch G-Sport","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-65.jpg","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>490<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>400<\/bdi><\/span><\/ins>","product_cat":["chairs"]},{"ID":3872,"post_title":"SM-22505 Closed-Back Wireless Headphones","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-10.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>590<\/bdi><\/span>","product_cat":["chairs"]},{"ID":3871,"post_title":"2 Door Fridge and Freezer, White","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h12-shop-img5.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>810<\/bdi><\/span>","product_cat":["daily-use"]},{"ID":3860,"post_title":"Led 4K Smart TV Screen Vantablack D-5","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-6.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,290<\/bdi><\/span>","product_cat":["chairs"]},{"ID":3849,"post_title":"Multipurpose Hand Blender","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h12-shop-img4.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>53<\/bdi><\/span>","product_cat":["daily-use"]},{"ID":3814,"post_title":"Professional Hair Dryer, 1875 Watt","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h12-shop-img3.jpg","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>65<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>45<\/bdi><\/span><\/ins>","product_cat":["daily-use"]},{"ID":3792,"post_title":"BNK 1600 Spin Washing Machine","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img3a.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>225<\/bdi><\/span>","product_cat":["daily-use"]},{"ID":3772,"post_title":"Blender, Black, 9.5 in L x 7.5 in W","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h12-shop-img2.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>100<\/bdi><\/span>","product_cat":["daily-use"]},{"ID":3767,"post_title":"Iron for Clothes 1800-Watt, Blue","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h12-shop-img1.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>120<\/bdi><\/span>","product_cat":["daily-use"]},{"ID":3712,"post_title":"Ultra Large Front Load Washer, 2.7 cu ft, Blue","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img17.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>330<\/bdi><\/span>","product_cat":["stainless-steel"]},{"ID":3700,"post_title":"9-Speed Blender for Shakes and Smoothies, 1500W","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img2.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>95<\/bdi><\/span>","product_cat":["stainless-steel"]},{"ID":3689,"post_title":"2 Door Fridge and Freezer, Double H526 L125","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img6.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>940<\/bdi><\/span>","product_cat":["stainless-steel"]},{"ID":3681,"post_title":"Iron for Clothes With Non-Stick Soleplate - 1500W","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img1-new.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>50<\/bdi><\/span>","product_cat":["aluminium"]},{"ID":5009,"post_title":"Air Purifiers for Home Large Room up to 180ft\u00b2","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img13.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>62<\/bdi><\/span>","product_cat":["aluminium"]},{"ID":3659,"post_title":"Air Purifiers for Home Large Room up to 230ft\u00b2","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img16.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>75<\/bdi><\/span>","product_cat":["aluminium"]},{"ID":3651,"post_title":"Drip Glass Coffeemaker, 12 Cup, Aluminium","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img8.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>146<\/bdi><\/span>","product_cat":["aluminium"]},{"ID":3640,"post_title":"Ultra Power Kitchen Mixer, 500W, 2 Speed","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img7.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>63<\/bdi><\/span>","product_cat":["plastic"]},{"ID":3605,"post_title":"Textured Plastic Toaster 2 Slice - Black L455","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img15.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>25<\/bdi><\/span>","product_cat":["plastic"]},{"ID":3594,"post_title":"Air Purifiers for Pets in Bedroom, TP52 H43","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img9.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>80<\/bdi><\/span>","product_cat":["plastic"]},{"ID":3520,"post_title":"Smart TV Keyboard and Mouse S700","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-11.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>390<\/bdi><\/span>","product_cat":["fan-controllers"]},{"ID":3514,"post_title":"Electric Scooter XM Prisma Light Superior","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-51.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,790<\/bdi><\/span>","product_cat":["fan-controllers"]},{"ID":3506,"post_title":"Retro Gaming Console S-4001 in Dark Grey","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-59.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>290<\/bdi><\/span>","product_cat":["fan-controllers"]},{"ID":3376,"post_title":"Mini USB Flash W-11 in Silver Gray","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-20.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>59<\/bdi><\/span>","product_cat":["projectors"]},{"ID":3417,"post_title":"Surveillance Drone in Black","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-66.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,450<\/bdi><\/span>","product_cat":["projectors"]},{"ID":3411,"post_title":"Headphones FX-990 Orange","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-29.jpg","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>890<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>810<\/bdi><\/span><\/ins>","product_cat":["projectors"]},{"ID":3406,"post_title":"Led 4K Smart TV Expo GSX White","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-26.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,590<\/bdi><\/span>","product_cat":["projectors"]},{"ID":3401,"post_title":"Smart Watch Black SMT-100","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-17.jpg","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>390<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>330<\/bdi><\/span><\/ins>","product_cat":["projectors"]},{"ID":3391,"post_title":"Bluetooth Speaker GS-997 Multicolor","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-15.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>500<\/bdi><\/span>","product_cat":["projectors"]},{"ID":3386,"post_title":"Tablet S Series with Keyboard","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-31.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,090<\/bdi><\/span>","product_cat":["projectors"]},{"ID":3384,"post_title":"USB Cable P-200 Printer\/Laptop","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-49.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>42<\/bdi><\/span>","product_cat":["projectors"]},{"ID":3204,"post_title":"Washer & Dryer, 9 Wash Cycles","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img14.jpg","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>350<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>325<\/bdi><\/span><\/ins>","product_cat":["home-appliances"]},{"ID":3133,"post_title":"Air Purifiers for Office With Filters","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img13.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>250<\/bdi><\/span>","product_cat":["home-appliances"]},{"ID":3090,"post_title":"Air Purifiers for Home Large Room","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img12.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>88<\/bdi><\/span>","product_cat":["home-appliances"]},{"ID":3001,"post_title":"Vacuum Cleaner, Standard, Silver","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img11.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>300<\/bdi><\/span>","product_cat":["home-appliances"]},{"ID":2980,"post_title":"Fridge, 2 Doors & Bottom Freezer","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img10.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>658<\/bdi><\/span>","product_cat":["kitchen-appliances"]},{"ID":2967,"post_title":"Air Purifiers for Pets in Bedroom","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img9.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>80<\/bdi><\/span>","product_cat":["home-appliances"]},{"ID":2954,"post_title":"Drip Glass Coffee Maker, 12 Cups","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img8.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>136<\/bdi><\/span>","product_cat":["kitchen-appliances"]},{"ID":2924,"post_title":"Mixer for Baking & Cake, 2x5 Speeds","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img7.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>53<\/bdi><\/span>","product_cat":["kitchen-appliances"]},{"ID":2741,"post_title":"2 Door Fridge and Freezer, Double","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img6.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>950<\/bdi><\/span>","product_cat":["kitchen-appliances"]},{"ID":2716,"post_title":"Electric Hand Blender, 150 Watts","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img5a.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>47<\/bdi><\/span>","product_cat":["kitchen-appliances"]},{"ID":2692,"post_title":"Norelco Shaver, Wet & Dry, S3\/85","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img4a.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>75<\/bdi><\/span>","product_cat":["home-appliances"]},{"ID":2664,"post_title":"BGA 1400 Spin Washing Machine","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img3a.jpg","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>230<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>185<\/bdi><\/span><\/ins>","product_cat":["home-appliances"]},{"ID":2579,"post_title":"Profeus Laptop M Series QW-55814","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-30.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>970<\/bdi><\/span>","product_cat":["cameras"]},{"ID":2585,"post_title":"Smartphone Midnight Black","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-14.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>770<\/bdi><\/span>","product_cat":["tv-equipment"]},{"ID":2593,"post_title":"Led 4K Smart TV Vantablack K-5","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-6.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,290<\/bdi><\/span>","product_cat":["tv-equipment"]},{"ID":2599,"post_title":"Fixed-Wing Hybrid Drone PS-555","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-8.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,450<\/bdi><\/span>","product_cat":["cameras"]},{"ID":2605,"post_title":"Business Inkjet Printer DLLW-777","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-7.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>500<\/bdi><\/span>","product_cat":["cables-and-adapters"]},{"ID":2615,"post_title":"TV Keyboard and Mouse S600","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-11.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>390<\/bdi><\/span>","product_cat":["tv-equipment"]},{"ID":2620,"post_title":"High Definition Web Camera SSX","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-18.jpg","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>140<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>100<\/bdi><\/span><\/ins>","product_cat":["cameras"]},{"ID":2625,"post_title":"Retro Gaming Console in Grey","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-59.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>290<\/bdi><\/span>","product_cat":["cables-and-adapters"]},{"ID":2422,"post_title":"Ultra Power Juicer, 1.5L, 500W","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img2.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>80<\/bdi><\/span>","product_cat":["kitchen-appliances"]},{"ID":2402,"post_title":"Digital Waterproof Fitness Watch","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-65.jpg","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>490<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>400<\/bdi><\/span><\/ins>","product_cat":["pilot-watches"]},{"ID":2353,"post_title":"Wireless Retro Gaming Console","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-64.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>290<\/bdi><\/span>","product_cat":["data-storage"]},{"ID":2316,"post_title":"1700W Iron with Thermostat Dial","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/h9-shop-img1-new.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>65<\/bdi><\/span>","product_cat":["home-appliances"]},{"ID":2191,"post_title":"Drawing Tablet Pro Series","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-61.jpg","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>900<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>800<\/bdi><\/span><\/ins>","product_cat":["data-storage"]},{"ID":2185,"post_title":"Wireless Headphones","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-62.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>590<\/bdi><\/span>","product_cat":["data-storage"]},{"ID":2177,"post_title":"Monitor Red Black Expo SD","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-63.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,490<\/bdi><\/span>","product_cat":["data-storage"]},{"ID":2156,"post_title":"Air Purifier Mika Clean Basic-659 White","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-60.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,390<\/bdi><\/span>","product_cat":["transmitters"]},{"ID":2145,"post_title":"Wireless Retro Gaming Console in Black","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-59.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>390<\/bdi><\/span>","product_cat":["amplifiers"]},{"ID":2126,"post_title":"4K Monitor Red Black Expo SD-667125","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-25.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,490<\/bdi><\/span>","product_cat":["tv-keyboards"]},{"ID":2113,"post_title":"Dehumidifier and Air Purifier Sensa S-8","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-58.jpg","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>890<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>790<\/bdi><\/span><\/ins>","product_cat":["transmitters"]},{"ID":2098,"post_title":"High Definition Web Camera W","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-57.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>140<\/bdi><\/span>","product_cat":["streaming"]},{"ID":2089,"post_title":"Smartphone Case Carbon X","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-56.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>79<\/bdi><\/span>","product_cat":["components"]},{"ID":2084,"post_title":"Multiuse Cable Adapter FF-89","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-55.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>42<\/bdi><\/span>","product_cat":["streaming"]},{"ID":2074,"post_title":"Small Drawing Tablet S Series","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-54.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,090<\/bdi><\/span>","product_cat":["desks"]},{"ID":2067,"post_title":"Mini USB Flash in Silver Gray","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-53.jpg","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>59<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>39<\/bdi><\/span><\/ins>","product_cat":["components"]},{"ID":2052,"post_title":"Robot Vacuum Cleaner Samba","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-52.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>790<\/bdi><\/span>","product_cat":["gear"]},{"ID":2027,"post_title":"Electric Scooter XM Prisma Light","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-51.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>890<\/bdi><\/span>","product_cat":["adapters"]},{"ID":2012,"post_title":"Profeus Drawing Tablet Pro Series QW-55","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-50.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>2,290<\/bdi><\/span>","product_cat":["chargers"]},{"ID":2006,"post_title":"Multiuse USB Cable Tablet\/Laptop","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-49.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>42<\/bdi><\/span>","product_cat":["batteries"]},{"ID":2000,"post_title":"Wireless PC Mouse in Carbon Black\/Grey","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-48.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>190<\/bdi><\/span>","product_cat":["chargers"]},{"ID":1981,"post_title":"In-Ear Studio Headphones FX-990","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-43.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>650<\/bdi><\/span>","product_cat":["adapters"]},{"ID":1973,"post_title":"Smart Watch Fitness Tracker Metallic","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-28.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>690<\/bdi><\/span>","product_cat":["monitors"]},{"ID":1963,"post_title":"Two Slice Toaster in Blue and White","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-42.jpg","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>170<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>120<\/bdi><\/span><\/ins>","product_cat":["cables"]},{"ID":1953,"post_title":"Bluetooth Speaker GS-997225 Orange","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-41.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>500<\/bdi><\/span>","product_cat":["printers"]},{"ID":1942,"post_title":"Camera CCW-55269 4k Waterproof Cover","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-40.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,190<\/bdi><\/span>","product_cat":["scanners"]},{"ID":1935,"post_title":"High Definition Web Camera SSX-660","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-46.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>140<\/bdi><\/span>","product_cat":["printers"]},{"ID":1930,"post_title":"Over-Ear Studio Headphones FX-990","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-44.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>890<\/bdi><\/span>","product_cat":["microphones"]},{"ID":1875,"post_title":"Smartphone Star Plus 128GB Pro S-328","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-45.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>790<\/bdi><\/span>","product_cat":["keyboards"]},{"ID":1870,"post_title":"SM-2250 Closed-Back Wireless Headphones","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-10.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>590<\/bdi><\/span>","product_cat":["cables"]},{"ID":1423,"post_title":"Protective 6C Tempered Glass","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-39.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>99<\/bdi><\/span>","product_cat":["equipment"]},{"ID":1413,"post_title":"Tablet Protective Case Ultra Black","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-38.jpg","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>89<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>59<\/bdi><\/span><\/ins>","product_cat":["equipment"]},{"ID":1407,"post_title":"Smartphone Case Carbon Black Flex","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-37.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>79<\/bdi><\/span>","product_cat":["equipment"]},{"ID":1388,"post_title":"Tablet X-16 Pro Black\/White C-15","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-36.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>990<\/bdi><\/span>","product_cat":["tablets"]},{"ID":1374,"post_title":"Ultra HD Tablet Black\/White C-10","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-35.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,090<\/bdi><\/span>","product_cat":["tablets"]},{"ID":1352,"post_title":"HD Tablet 256GB Blue C-8586952","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-34.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>580<\/bdi><\/span>","product_cat":["tablets"]},{"ID":1342,"post_title":"Smartphone S-10 Professional","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-33.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>690<\/bdi><\/span>","product_cat":["smartphones"]},{"ID":1324,"post_title":"Smartphone Plus 128GB Pro S-328","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-32.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>320<\/bdi><\/span>","product_cat":["smartphones"]},{"ID":1770,"post_title":"Wireless PC Mouse in Carbon Black\/Grey\/White SG-999","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-1.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>190<\/bdi><\/span>","product_cat":["consoles"]},{"ID":1250,"post_title":"Profeus Laptop Inspiron Q Series QW-55814","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-30.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>970<\/bdi><\/span>","product_cat":["processors"]},{"ID":1239,"post_title":"Over-Ear Studio Headphones FX-989 Multicolor","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-29.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>790<\/bdi><\/span>","product_cat":["processors"]},{"ID":1227,"post_title":"Smart Watch Fitness Tracker GS-887 Metallic Black","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-28.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>590<\/bdi><\/span>","product_cat":["consoles"]},{"ID":1211,"post_title":"SM-2357 Closed-Back Wireless Headphones","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-10.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>630<\/bdi><\/span>","product_cat":["consoles"]},{"ID":1191,"post_title":"Multiuse USB Cable For Phone\/Tablet\/Laptop","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-5.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>42<\/bdi><\/span>","product_cat":["bluetooth"]},{"ID":1181,"post_title":"Camera CCW5 4k Waterproof Cover","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-27.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,390<\/bdi><\/span>","product_cat":["earbuds-in-ear"]},{"ID":1173,"post_title":"Air Purifier Mika Clean Pro-659","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-13.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,390<\/bdi><\/span>","product_cat":["wireless-earbuds"]},{"ID":1168,"post_title":"Smart Watch Black Matte SMT","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-17.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>230<\/bdi><\/span>","product_cat":["bluetooth"]},{"ID":1165,"post_title":"Led 4K Smart TV Expo GSX Grey","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-26.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,590<\/bdi><\/span>","product_cat":["laptops"]},{"ID":1160,"post_title":"High Definition Webcam SX-557","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-18.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>140<\/bdi><\/span>","product_cat":["bluetooth"]},{"ID":1150,"post_title":"Profeus Drawing Tablet M Series QW-55815 Pro","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-31.jpg","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,390<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,110<\/bdi><\/span><\/ins>","product_cat":["gaming-headsets"]},{"ID":1122,"post_title":"4K Monitor Red Black Expo SD","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-25.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,490<\/bdi><\/span>","product_cat":["earbuds"]},{"ID":1109,"post_title":"Mini USB Flash S-10 in Silver Gray","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-20.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>59<\/bdi><\/span>","product_cat":["laptops"]},{"ID":1000,"post_title":"Universal Grey Smartphone Case","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-14.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>80<\/bdi><\/span>","product_cat":["games"]},{"ID":995,"post_title":"Fixed-Wing Surveillance Drone","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-8.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,450<\/bdi><\/span>","product_cat":["games"]},{"ID":993,"post_title":"Led 4K Smart TV Vantablack Expo","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-6.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,290<\/bdi><\/span>","product_cat":["home-cinema"]},{"ID":988,"post_title":"Bluetooth Speaker GS-997","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-15.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>500<\/bdi><\/span>","product_cat":["speakers"]},{"ID":983,"post_title":"Wireless Headphones Black Matte","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-9.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>650<\/bdi><\/span>","product_cat":["speakers"]},{"ID":676,"post_title":"4K Smart Monitor Vantablack Expo","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-11.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,490<\/bdi><\/span>","product_cat":["tv-audio"]},{"ID":610,"post_title":"Led 4K Smart TV Expo GSX White","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-19.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,590<\/bdi><\/span>","product_cat":["appliances"]},{"ID":596,"post_title":"High Definition Webcam SX-555","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-18.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>140<\/bdi><\/span>","product_cat":["appliances"]},{"ID":583,"post_title":"Waterproof Smart Watch Black","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-17.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>230<\/bdi><\/span>","product_cat":["appliances"]},{"ID":572,"post_title":"Electric Scooter XM Prisma","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-16.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>590<\/bdi><\/span>","product_cat":["appliances"]},{"ID":542,"post_title":"Bluetooth Speaker GS-99 Silver","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-15.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>290<\/bdi><\/span>","product_cat":["appliances"]},{"ID":529,"post_title":"Universal Black Smartphone Case","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-14.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>80<\/bdi><\/span>","product_cat":["appliances"]},{"ID":517,"post_title":"Profeus Drawing Tablet S Series QW-55815 Professional","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-31.jpg","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,090<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>930<\/bdi><\/span><\/ins>","product_cat":["appliances"]},{"ID":501,"post_title":"Air Purifier Mika Clean Pro-559","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-13.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,390<\/bdi><\/span>","product_cat":["appliances"]},{"ID":474,"post_title":"Robot Vacuum Cleaner Samba W","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/09\/shop-img-12.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>890<\/bdi><\/span>","product_cat":["appliances"]},{"ID":228,"post_title":"4K Smart Monitor Vantablack Expo GPS-8377366J","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-11.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,150<\/bdi><\/span>","product_cat":["gadgets"]},{"ID":216,"post_title":"SX-2357 Closed-Back Wireless Headphones","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-10.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>630<\/bdi><\/span>","product_cat":["gadgets"]},{"ID":205,"post_title":"BX-2357 Closed-Back Wireless Headphones","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-9.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>700<\/bdi><\/span>","product_cat":["gadgets"]},{"ID":195,"post_title":"Fixed-Wing Hybrid VTOL Surveillance Drone","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-8.jpg","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,450<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>1,100<\/bdi><\/span><\/ins>","product_cat":["gadgets"]},{"ID":185,"post_title":"Business Inkjet All In One Printer 752-DLLW-888","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-7.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>750<\/bdi><\/span>","product_cat":["gadgets"]},{"ID":173,"post_title":"Led 4K Smart TV Vantablack Expo GSM-8547366J","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-6.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>990<\/bdi><\/span>","product_cat":["gadgets"]},{"ID":116,"post_title":"Electric Scooter B&W TP58921XM Prisma XX Series","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-2.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>450<\/bdi><\/span>","product_cat":["gadgets"]},{"ID":76,"post_title":"Optical Mouse Pro XS-85477PGT Carbon Black","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-1.jpg","price":"<del aria-hidden=\"true\"><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>170<\/bdi><\/span><\/del> <ins><span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>120<\/bdi><\/span><\/ins>","product_cat":["gadgets"]},{"ID":163,"post_title":"Multiuse USB Cable Phone\/Tablet\/Laptop","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-5.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>42<\/bdi><\/span>","product_cat":["tech"]},{"ID":153,"post_title":"Profeus Tablet Q Series QW-55814 Professional","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-4.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>550<\/bdi><\/span>","product_cat":["tech"]},{"ID":142,"post_title":"Profeus Laptop S Series QW-55814","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/08\/shop-img-3.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>970<\/bdi><\/span>","product_cat":["tech"]},{"ID":10526,"post_title":"Gift Card","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/10\/shop-gift-card.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>250<\/bdi><\/span>","product_cat":["gift-cards"]},{"ID":10520,"post_title":"Shop Voucher","thumb":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/10\/shop-vaucher.jpg","price":"<span class=\"woocommerce-Price-amount amount\"><bdi><span class=\"woocommerce-Price-currencySymbol\">&#36;<\/span>250<\/bdi><\/span>","product_cat":["vouchers"]}]};
/* ]]> */
</script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/themes/gizmos/assets/js/main.min.js?ver=6.2.2' id='gizmos-main-js-js'></script>
<script type='text/javascript' src='//maps.googleapis.com/maps/api/js?key=AIzaSyDyrcQwuRDTbsURYjceT_CvaKxBxLlUZCs&#038;ver=6.2.2' id='google-map-api-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-includes/js/underscore.min.js?ver=1.13.4' id='underscore-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/gizmos-core/inc/maps/assets/js/custom-marker.js?ver=6.2.2' id='gizmos-core-map-custom-marker-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/gizmos-core/inc/maps/assets/js/markerclusterer.js?ver=6.2.2' id='markerclusterer-js'></script>
<script type='text/javascript' id='gizmos-core-google-map-js-extra'>
/* <![CDATA[ */
var qodefMapsVariables = {"global":{"mapStyle":"","mapZoom":"14%","mapScrollable":false,"mapDraggable":true,"streetViewControl":true,"zoomControl":true,"mapTypeControl":true,"fullscreenControl":true,"geolocationTitle":"Your location is here"},"multiple":[]};
/* ]]> */
</script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/gizmos-core/inc/maps/assets/js/google-map.js?ver=6.2.2' id='gizmos-core-google-map-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/yith-woocommerce-product-sales-countdown-premium/assets/js/jquery.plugin.min.js?ver=1.22.0' id='jquery-plugin-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/yith-woocommerce-product-sales-countdown-premium/assets/js/jquery.countdown.min.js?ver=2.1.0' id='jquery-countdown-js'></script>
<script type='text/javascript' id='ywpc-footer-js-extra'>
/* <![CDATA[ */
var ywpc_footer = {"gmt":"0","is_rtl":"","theme":"Gizmos","variation":""};
/* ]]> */
</script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/yith-woocommerce-product-sales-countdown-premium/assets/js/ywpc-footer.min.js?ver=1.22.0' id='ywpc-footer-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/gizmos-core/assets/js/gizmos-core.min.js?ver=6.2.2' id='gizmos-core-script-js'></script>
<script type='text/javascript' id='wp-util-js-extra'>
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-includes/js/wp-util.min.js?ver=6.2.2' id='wp-util-js'></script>
<script type='text/javascript' id='wc-add-to-cart-variation-js-extra'>
/* <![CDATA[ */
var wc_add_to_cart_variation_params = {"wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_no_matching_variations_text":"Sorry, no products matched your selection. Please choose a different combination.","i18n_make_a_selection_text":"Please select some product options before adding this product to your cart.","i18n_unavailable_text":"Sorry, this product is unavailable. Please choose a different combination."};
/* ]]> */
</script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js?ver=7.1.0' id='wc-add-to-cart-variation-js'></script>
<script type='text/javascript' id='yith_wccl_frontend-js-extra'>
/* <![CDATA[ */
var yith_wccl_general = {"ajaxurl":"\/?wc-ajax=%%endpoint%%","actionAddCart":"yith_wccl_add_to_cart","actionVariationGallery":"yith_wccl_variation_gallery","cart_redirect":"","cart_url":"https:\/\/gizmos.qodeinteractive.com\/cart\/","view_cart":"View Cart","tooltip":"1","tooltip_pos":"top","tooltip_ani":"fade","description":"1","add_cart":"Add to cart","grey_out":"","image_hover":"","wrapper_container_shop":"li.product,.wishlist-items-wrapper .product-add-to-cart","image_selector":"img.wp-post-image,img.attachment-woocommerce_thumbnail","enable_handle_variation_gallery":"1","plugin_compatibility_selectors":"yith-wcan-ajax-filtered yith_infs_adding_elem initialized.owl.carousel post-load ajax-tab-loaded","single_gallery_selector":".woocommerce-product-gallery","set_srcset_on_loop_image":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/yith-woocommerce-color-label-variations-premium/assets/js/yith-wccl.min.js?ver=1.29.0' id='yith_wccl_frontend-js'></script>
<script type='text/javascript' id='yith-woocompare-main-js-extra'>
/* <![CDATA[ */
var yith_woocompare = {"ajaxurl":"\/?wc-ajax=%%endpoint%%","actionadd":"yith-woocompare-add-product","actionremove":"yith-woocompare-remove-product","actionview":"yith-woocompare-view-table","actionreload":"yith-woocompare-reload-product","added_label":"Added","table_title":"Product Comparison","auto_open":"no","loader":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/plugins\/yith-woocommerce-compare\/assets\/images\/loader.gif","button_text":"","cookie_name":"yith_woocompare_list","close_label":"Close"};
/* ]]> */
</script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/yith-woocommerce-compare/assets/js/woocompare.min.js?ver=2.20.1' id='yith-woocompare-main-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/yith-woocommerce-compare/assets/js/jquery.colorbox-min.js?ver=1.4.21' id='jquery-colorbox-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/qi-blocks/inc/slider/assets/plugins/swiper.min.js?ver=6.2.2' id='swiper-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/select2/select2.full.min.js?ver=4.0.3-wc.7.1.0' id='select2-js'></script>
<script type="text/javascript" src="https://static.zdassets.com/ekr/snippet.js?key=af3078fd-a5ae-40da-bee0-e589b98c8603&#038;ver=6.2.2" id="ze-snippet"></script><script type="text/javascript">
        zE(function(){
          $zopim(function(){
            var isChatEnabled = sessionStorage.getItem("qodeChatEnabled"),
              appearingTime = 15000;
            
            if(isChatEnabled !== "no" && window.innerWidth > 1024) {
              setTimeout(function(){
                $zopim.livechat.window.show();
                
                 $zopim.livechat.window.onHide(function(){
                    sessionStorage.setItem("qodeChatEnabled", "no");
                 });
              }, appearingTime);
            }
          });
        });
        </script><script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/gizmos-core/assets/plugins/perfect-scrollbar/perfect-scrollbar.jquery.min.js?ver=6.2.2' id='jquery-perfect-scrollbar-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/gizmos-core/assets/plugins/bloodhound/bloodhound.min.js?ver=6.2.2' id='bloodhound-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/gizmos-core/assets/plugins/typeahead/typeahead.bundle.min.js?ver=6.2.2' id='typeahead-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/gizmos-core/assets/plugins/perfect-scrollbar/perfect-scrollbar.jquery.min.js?ver=6.2.2' id='perfect-scrollbar-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min.js?ver=1.2.0' id='jquery-selectBox-js'></script>
<script type='text/javascript' src='//gizmos.qodeinteractive.com/wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min.js?ver=3.1.6' id='prettyPhoto-js'></script>
<script type='text/javascript' id='jquery-yith-wcwl-js-extra'>
/* <![CDATA[ */
var yith_wcwl_l10n = {"ajax_url":"\/wp-admin\/admin-ajax.php","redirect_to_cart":"no","multi_wishlist":"","hide_add_button":"1","enable_ajax_loading":"","ajax_loader_url":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader-alt.svg","remove_from_wishlist_after_add_to_cart":"1","is_wishlist_responsive":"","time_to_close_prettyphoto":"3000","fragments_index_glue":".","reload_on_found_variation":"1","mobile_media_query":"768","labels":{"cookie_disabled":"We are sorry, but this feature is available only if cookies on your browser are enabled.","added_to_cart_message":"<div class=\"woocommerce-notices-wrapper\"><div class=\"woocommerce-message\" role=\"alert\">Product added to cart successfully<\/div><\/div>"},"actions":{"add_to_wishlist_action":"add_to_wishlist","remove_from_wishlist_action":"remove_from_wishlist","reload_wishlist_and_adding_elem_action":"reload_wishlist_and_adding_elem","load_mobile_action":"load_mobile","delete_item_action":"delete_item","save_title_action":"save_title","save_privacy_action":"save_privacy","load_fragments":"load_fragments"},"nonce":{"add_to_wishlist_nonce":"6e2b03d0d3","remove_from_wishlist_nonce":"7273dabc42","reload_wishlist_and_adding_elem_nonce":"ef8e653a64","load_mobile_nonce":"9d0f2d4700","delete_item_nonce":"fe4ceae4a9","save_title_nonce":"cc66f970dd","save_privacy_nonce":"67df67f9cc","load_fragments_nonce":"1872ce41a0"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.min.js?ver=3.15.0' id='jquery-yith-wcwl-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-includes/js/jquery/ui/mouse.min.js?ver=1.13.2' id='jquery-ui-mouse-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-includes/js/jquery/ui/slider.min.js?ver=1.13.2' id='jquery-ui-slider-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/themes/gizmos/inc/justified-gallery/assets/js/plugins/jquery.justifiedGallery.min.js?ver=1' id='jquery-justified-gallery-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/qi-blocks/inc/masonry/assets/plugins/isotope.pkgd.min.js?ver=6.2.2' id='isotope-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/qi-blocks/inc/masonry/assets/plugins/packery-mode.pkgd.min.js?ver=6.2.2' id='packery-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.8.1' id='elementor-webpack-runtime-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.8.1' id='elementor-frontend-modules-js'></script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2' id='elementor-waypoints-js'></script>
<script type='text/javascript' id='elementor-frontend-js-before'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"default_value":880,"direction":"max","is_enabled":true},"tablet":{"label":"Tablet","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1440,"default_value":1366,"direction":"max","is_enabled":true},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":true}}},"version":"3.8.1","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"a11y_improvements":true,"additional_custom_breakpoints":true,"e_import_export":true,"landing-pages":true,"elements-color-picker":true,"favorite-widgets":true,"admin-top-bar":true},"urls":{"assets":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_mobile_extra","viewport_tablet","viewport_laptop","viewport_widescreen"],"viewport_laptop":1440,"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":5601,"title":"Home%2012%20%E2%80%93%20Gizmos","excerpt":"","featuredImage":"https:\/\/gizmos.qodeinteractive.com\/wp-content\/uploads\/2022\/11\/open-graph-1200x630-1-1024x538.png"}};
</script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.8.1' id='elementor-frontend-js'></script>
<script type='text/javascript' id='gizmos-core-elementor-js-extra'>
/* <![CDATA[ */
var qodefElementorGlobal = {"vars":{"elementorSectionHandler":[],"elementorColumnHandler":[]}};
/* ]]> */
</script>
<script type='text/javascript' src='https://gizmos.qodeinteractive.com/wp-content/plugins/gizmos-core/inc/plugins/elementor/assets/js/elementor.min.js?ver=6.2.2' id='gizmos-core-elementor-js'></script>
<script id="rs-initialisation-scripts">
var	tpj = jQuery;

var	revapi17,revapi19;

if(window.RS_MODULES === undefined) window.RS_MODULES = {};
if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
RS_MODULES.modules["revslider171"] = {once: RS_MODULES.modules["revslider171"]!==undefined ? RS_MODULES.modules["revslider171"].once : undefined, init:function() {
  window.revapi17 = window.revapi17===undefined || window.revapi17===null || window.revapi17.length===0  ? document.getElementById("rev_slider_17_1") : window.revapi17;
  if(window.revapi17 === null || window.revapi17 === undefined || window.revapi17.length==0) { window.revapi17initTry = window.revapi17initTry ===undefined ? 0 : window.revapi17initTry+1; if (window.revapi17initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider171"].init()}); return;}
  window.revapi17 = jQuery(window.revapi17);
  if(window.revapi17.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_17_1"); return;}
  revapi17.revolutionInit({
      revapi:"revapi17",
      DPR:"dpr",
      sliderLayout:"fullwidth",
      duration:"2500ms",
      visibilityLevels:"1920,1700,1025,680",
      gridwidth:"1400,1100,600,300",
      gridheight:"550,450,550,550",
      lazyType:"smart",
      perspective:600,
      perspectiveType:"global",
      editorheight:"550,450,550,550",
      responsiveLevels:"1920,1700,1025,680",
      progressBar:{disableProgressBar:true},
      navigation: {
        wheelCallDelay:1000,
        onHoverStop:false,
        touch: {
          touchenabled:true
        },
        arrows: {
          enable:true,
          tmp:"<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"26\" height=\"34\" viewBox=\"0 0 26 34\"><g> <rect width=\"2\" height=\"19\" data-name=\"1 A\" rx=\"1\" transform=\"rotate(-135 4.5 9)\"/><rect width=\"2\" height=\"19\" data-name=\"2 A\" rx=\"1\" transform=\"rotate(-45 20.5 8.5)\"/></g><g><rect width=\"2\" height=\"19\" data-name=\"1 B\" rx=\"1\" transform=\"rotate(-135 9.5 6.8)\"/> <rect width=\"2\" height=\"19\" data-name=\"2 B\" rx=\"1\" transform=\"rotate(-45 25.5 -3.6)\"/></g></svg>",
          style:"gizmos",
          hide_onmobile:true,
          hide_under:"1300px",
          animDelay:"500ms",
          left: {
            h_offset:60
          },
          right: {
            h_offset:60
          }
        },
        bullets: {
          enable:true,
          tmp:"",
          style:"gizmos",
          hide_onmobile:true,
          hide_under:"1025px",
          animDelay:"500ms",
          h_align:"left",
          v_offset:30,
          space:22,
          container:"layergrid"
        }
      },
      viewPort: {
        global:true,
        globalDist:"-200px",
        enable:false,
        visible_area:"3%"
      },
      fallbacks: {
        allowHTML5AutoPlayOnAndroid:true
      },
  });
  
}} // End of RevInitScript

if(window.RS_MODULES === undefined) window.RS_MODULES = {};
if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
RS_MODULES.modules["revslider192"] = {once: RS_MODULES.modules["revslider192"]!==undefined ? RS_MODULES.modules["revslider192"].once : undefined, init:function() {
  window.revapi19 = window.revapi19===undefined || window.revapi19===null || window.revapi19.length===0  ? document.getElementById("rev_slider_19_2") : window.revapi19;
  if(window.revapi19 === null || window.revapi19 === undefined || window.revapi19.length==0) { window.revapi19initTry = window.revapi19initTry ===undefined ? 0 : window.revapi19initTry+1; if (window.revapi19initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider192"].init()}); return;}
  window.revapi19 = jQuery(window.revapi19);
  if(window.revapi19.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_19_2"); return;}
  revapi19.revolutionInit({
      revapi:"revapi19",
      DPR:"dpr",
      sliderLayout:"fullwidth",
      duration:"2500ms",
      visibilityLevels:"1920,1700,1025,680",
      gridwidth:"1400,1100,600,300",
      gridheight:"500,450,450,500",
      lazyType:"smart",
      perspective:600,
      perspectiveType:"global",
      editorheight:"500,450,450,500",
      responsiveLevels:"1920,1700,1025,680",
      progressBar:{disableProgressBar:true},
      navigation: {
        wheelCallDelay:1000,
        onHoverStop:false,
        touch: {
          touchenabled:true
        },
        arrows: {
          enable:true,
          tmp:"<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"26\" height=\"34\" viewBox=\"0 0 26 34\"><g fill=\"#fff\"> <rect width=\"2\" height=\"19\" data-name=\"1 A\" rx=\"1\" transform=\"rotate(-135 4.5 9)\"/><rect width=\"2\" height=\"19\" data-name=\"2 A\" rx=\"1\" transform=\"rotate(-45 20.5 8.5)\"/></g><g fill=\"#fff\"><rect width=\"2\" height=\"19\" data-name=\"1 B\" rx=\"1\" transform=\"rotate(-135 9.5 6.8)\"/> <rect width=\"2\" height=\"19\" data-name=\"2 B\" rx=\"1\" transform=\"rotate(-45 25.5 -3.6)\"/></g></svg>",
          style:"gizmos_light",
          hide_onmobile:true,
          hide_under:"1300px",
          animDelay:"500ms",
          left: {
            h_offset:60
          },
          right: {
            h_offset:60
          }
        },
        bullets: {
          enable:true,
          tmp:"",
          style:"gizmos_light",
          hide_onmobile:true,
          hide_under:"1025px",
          animDelay:"500ms",
          h_align:"left",
          v_offset:30,
          space:22,
          container:"layergrid"
        }
      },
      viewPort: {
        global:true,
        globalDist:"-200px",
        enable:true,
        visible_area:"2%"
      },
      fallbacks: {
        allowHTML5AutoPlayOnAndroid:true
      },
  });
  
}} // End of RevInitScript

if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};
</script>
@endsection






<div id="qodef-page-outer">
  <div id="qodef-page-inner" class="qodef-content-full-width">
  <main id="qodef-page-content" class="qodef-grid qodef-layout--template " role="main">
  <div class="qodef-grid-inner clear">
  <div class="qodef-grid-item qodef-page-content-section qodef-col--12">
  <div data-elementor-type="wp-page" data-elementor-id="5601" class="elementor elementor-5601">
  <section class="elementor-section elementor-top-section elementor-element elementor-element-d6d2f84 elementor-section-full_width elementor-section-height-default elementor-section-height-default qodef-elementor-content-no" data-id="d6d2f84" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
  <div class="elementor-container elementor-column-gap-no">
  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a813344" data-id="a813344" data-element_type="column">
  <div class="elementor-widget-wrap elementor-element-populated">
  <div class="elementor-element elementor-element-5e8ad62 elementor-widget elementor-widget-slider_revolution" data-id="5e8ad62" data-element_type="widget" data-widget_type="slider_revolution.default">
  <div class="elementor-widget-container">
  <div class="wp-block-themepunch-revslider">
  <p class="rs-p-wp-fix"></p>
  <rs-module-wrap id="rev_slider_17_1_wrapper" data-source="gallery" style="visibility:hidden;background:#ffffff;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
  <rs-module id="rev_slider_17_1" style="" data-version="6.6.5">
  <rs-slides style="overflow: hidden; position: absolute;">
  <rs-slide style="position: absolute;" data-key="rs-37" data-title="Slide" data-thumb="//gizmos.qodeinteractive.com/wp-content/uploads/2022/10/home-2-rev-img-1.jpg" data-anim="adpr:false;" data-in="o:0;" data-out="a:false;">
  <img decoding="async" src="//gizmos.qodeinteractive.com/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="w" title="home-2-rev-img-1" width="1920" height="600" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="//gizmos.qodeinteractive.com/wp-content/plugins/revslider/public/assets/assets/transparent.png" data-bg="p:left center;" data-no-retina>
  <rs-group id="slider-17-slide-37-layer-3" data-type="group" data-xy="x:c;xo:-489px,-339px,0,0;y:m,m,m,t;yo:10px,11px,-95px,60px;" data-text="w:normal;" data-dim="w:420px,420px,86%,86%;h:250px,250px,230px,350px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="o:1;" data-frame_999="o:0;st:w;sA:2500;" style="z-index:13;"><rs-layer id="slider-17-slide-37-layer-1" data-type="text" data-color="#000000" data-xy="" data-pos="a" data-text="w:normal;s:46,46,42,42;l:52,52,48,48;fw:500;" data-dim="w:420px,420px,400px,100%;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="y:50;" data-frame_1="st:100;sp:1000;" data-frame_999="o:0;st:w;" style="z-index:12;font-family:'Roboto';">Which Smartphone is Right For You?
  </rs-layer><rs-layer id="slider-17-slide-37-layer-2" data-type="text" data-color="#676770" data-xy="yo:118px,118px,106px,158px;" data-pos="a" data-text="w:normal;s:16;l:19;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="y:50;" data-frame_1="st:100;sp:1000;" data-frame_999="o:0;st:w;" style="z-index:11;font-family:'Roboto';">Mei doctus principes interes
  </rs-layer><rs-layer id="slider-17-slide-37-layer-4" data-type="text" data-color="#676770" data-xy="yo:165px,165px,153px,205px;" data-pos="a" data-text="w:normal;s:11;ls:1px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="y:50;" data-frame_1="st:150;sp:1000;" data-frame_999="o:0;st:w;" style="z-index:10;font-family:'Roboto';text-transform:uppercase;">starting at
  </rs-layer><rs-layer id="slider-17-slide-37-layer-5" data-type="text" data-color="#000000" data-xy="yo:186px,186px,174px,226px;" data-pos="a" data-text="w:normal;s:41;l:49;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="y:50;" data-frame_1="st:150;sp:1000;" data-frame_999="o:0;st:w;" style="z-index:9;font-family:'Roboto';">$1.000
  </rs-layer></rs-group><rs-layer id="slider-17-slide-37-layer-6" data-type="image" data-xy="x:c;xo:0,0,-20px,-87px;y:b;yo:-1px,-1px,-5px,-5px;" data-text="w:normal;" data-dim="w:1400px,1100px,900px,520px;h:550px,432px,354px,204px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="y:50;" data-frame_1="st:50;sp:1000;" data-frame_999="o:0;e:power4.inOut;st:w;sp:1000;" style="z-index:8;"><img decoding="async" src="//gizmos.qodeinteractive.com/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="w" class="tp-rs-img rs-lazyload" width="1400" height="550" data-lazyload="//gizmos.qodeinteractive.com/wp-content/uploads/2022/10/home-8-rev-img-1.jpg" data-no-retina>
  </rs-layer> </rs-slide>
  <rs-slide style="position: absolute;" data-key="rs-38" data-title="Slide" data-thumb="//gizmos.qodeinteractive.com/wp-content/uploads/2022/10/home-2-rev-img-1.jpg" data-anim="adpr:false;" data-in="o:0;" data-out="a:false;">
  <img decoding="async" src="//gizmos.qodeinteractive.com/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="w" title="home-2-rev-img-1" width="1920" height="600" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="//gizmos.qodeinteractive.com/wp-content/plugins/revslider/public/assets/assets/transparent.png" data-bg="p:left center;" data-no-retina>
  <rs-group id="slider-17-slide-38-layer-3" data-type="group" data-xy="x:c;xo:-489px,-339px,0,0;y:m,m,m,t;yo:10px,11px,-95px,60px;" data-text="w:normal;" data-dim="w:420px,420px,86%,86%;h:250px,250px,230px,350px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="o:1;" data-frame_999="o:0;st:w;sA:2500;" style="z-index:13;"><rs-layer id="slider-17-slide-38-layer-1" data-type="text" data-color="#000000" data-xy="" data-pos="a" data-text="w:normal;s:46,46,42,42;l:52,52,48,48;fw:500;" data-dim="w:420px,420px,400px,100%;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="y:50;" data-frame_1="st:100;sp:1000;" data-frame_999="o:0;st:w;" style="z-index:12;font-family:'Roboto';">Find The Perfect Pair of Headphones
  </rs-layer><rs-layer id="slider-17-slide-38-layer-2" data-type="text" data-color="#676770" data-xy="yo:118px,118px,106px,158px;" data-pos="a" data-text="w:normal;s:16;l:19;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="y:50;" data-frame_1="st:100;sp:1000;" data-frame_999="o:0;st:w;" style="z-index:11;font-family:'Roboto';">Mei doctus principes interes
  </rs-layer><rs-layer id="slider-17-slide-38-layer-4" data-type="text" data-color="#676770" data-xy="yo:165px,165px,153px,205px;" data-pos="a" data-text="w:normal;s:11;ls:1px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="y:50;" data-frame_1="st:150;sp:1000;" data-frame_999="o:0;st:w;" style="z-index:10;font-family:'Roboto';text-transform:uppercase;">starting at
  </rs-layer><rs-layer id="slider-17-slide-38-layer-5" data-type="text" data-color="#000000" data-xy="yo:186px,186px,174px,226px;" data-pos="a" data-text="w:normal;s:41;l:49;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="y:50;" data-frame_1="st:150;sp:1000;" data-frame_999="o:0;st:w;" style="z-index:9;font-family:'Roboto';">$890
  </rs-layer></rs-group><rs-layer id="slider-17-slide-38-layer-6" data-type="image" data-xy="x:c;xo:0,50px,50px,110px;y:b;yo:0,0,0,-50px;" data-text="w:normal;" data-dim="w:1400px,1145px,1400px,1400px;h:550px,450px,550px,550px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="x:-50;" data-frame_1="st:50;sp:1000;" data-frame_999="o:0;e:power4.inOut;st:w;sp:1000;" style="z-index:8;"><img decoding="async" src="//gizmos.qodeinteractive.com/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="w" class="tp-rs-img rs-lazyload" width="1400" height="550" data-lazyload="//gizmos.qodeinteractive.com/wp-content/uploads/2022/10/home-8-slider-photo-2.jpg" data-no-retina>
  </rs-layer> </rs-slide>
  <rs-slide style="position: absolute;" data-key="rs-69" data-title="Slide" data-thumb="//gizmos.qodeinteractive.com/wp-content/uploads/2022/10/home-2-rev-img-1.jpg" data-anim="adpr:false;" data-in="o:0;" data-out="a:false;">
  <img decoding="async" src="//gizmos.qodeinteractive.com/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="w" title="home-2-rev-img-1" width="1920" height="600" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="//gizmos.qodeinteractive.com/wp-content/plugins/revslider/public/assets/assets/transparent.png" data-bg="p:left center;" data-no-retina>
  <rs-group id="slider-17-slide-69-layer-3" data-type="group" data-xy="x:c;xo:-489px,-339px,0,0;y:m,m,m,t;yo:10px,11px,-95px,70px;" data-text="w:normal;" data-dim="w:420px,420px,86%,86%;h:250px,250px,230px,350px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="o:1;" data-frame_999="o:0;st:w;sA:2500;" style="z-index:13;"><rs-layer id="slider-17-slide-69-layer-1" data-type="text" data-color="#000000" data-xy="" data-pos="a" data-text="w:normal;s:46,46,42,42;l:52,52,48,48;fw:500;" data-dim="w:420px,420px,400px,100%;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="y:50;" data-frame_1="st:100;sp:1000;" data-frame_999="o:0;st:w;" style="z-index:12;font-family:'Roboto';">Next Generation of Tablets is Here
  </rs-layer><rs-layer id="slider-17-slide-69-layer-2" data-type="text" data-color="#676770" data-xy="yo:118px,118px,106px,158px;" data-pos="a" data-text="w:normal;s:16;l:19;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="y:50;" data-frame_1="st:100;sp:1000;" data-frame_999="o:0;st:w;" style="z-index:11;font-family:'Roboto';">Mei doctus principes interes
  </rs-layer><rs-layer id="slider-17-slide-69-layer-4" data-type="text" data-color="#676770" data-xy="yo:165px,165px,153px,205px;" data-pos="a" data-text="w:normal;s:11;ls:1px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="y:50;" data-frame_1="st:150;sp:1000;" data-frame_999="o:0;st:w;" style="z-index:10;font-family:'Roboto';text-transform:uppercase;">starting at
  </rs-layer><rs-layer id="slider-17-slide-69-layer-5" data-type="text" data-color="#000000" data-xy="yo:186px,186px,174px,226px;" data-pos="a" data-text="w:normal;s:41;l:49;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="y:50;" data-frame_1="st:150;sp:1000;" data-frame_999="o:0;st:w;" style="z-index:9;font-family:'Roboto';">$1.950
  </rs-layer></rs-group><rs-layer id="slider-17-slide-69-layer-6" data-type="image" data-xy="x:c;xo:0,50px,140px,200px;y:b;" data-text="w:normal;" data-dim="w:1400px,1145px,1400px,1400px;h:550px,450px,550px,550px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="x:50;" data-frame_1="x:0px,0,0,0;y:-1px,0,0,0;st:50;sp:1000;" data-frame_999="o:0;e:power4.inOut;st:w;sp:1000;" style="z-index:8;"><img decoding="async" src="//gizmos.qodeinteractive.com/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="w" class="tp-rs-img rs-lazyload" width="1400" height="550" data-lazyload="//gizmos.qodeinteractive.com/wp-content/uploads/2022/10/home-8-slider-photo-3.jpg" data-no-retina>
  </rs-layer> </rs-slide>
  </rs-slides>
  </rs-module>
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
            setREVStartSize({c: 'rev_slider_17_1',rl:[1920,1700,1025,680],el:[550,450,550,550],gw:[1400,1100,600,300],gh:[550,450,550,550],type:'standard',justify:'',layout:'fullwidth',mh:"0"});if (window.RS_MODULES!==undefined && window.RS_MODULES.modules!==undefined && window.RS_MODULES.modules["revslider171"]!==undefined) {window.RS_MODULES.modules["revslider171"].once = false;window.revapi17 = undefined;if (window.RS_MODULES.checkMinimal!==undefined) window.RS_MODULES.checkMinimal()}
          </script>
  </rs-module-wrap>
  
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </section>
  <section class="elementor-section elementor-top-section elementor-element elementor-element-eba4d63 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="eba4d63" data-element_type="section">
  <div class="elementor-container elementor-column-gap-no">
  <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-7b8f69a" data-id="7b8f69a" data-element_type="column">
  <div class="elementor-widget-wrap elementor-element-populated">
  <div class="elementor-element elementor-element-d9c42c9 elementor-widget elementor-widget-gizmos_core_banner" data-id="d9c42c9" data-element_type="widget" data-widget_type="gizmos_core_banner.default">
  <div class="elementor-widget-container">
  <div class="qodef-shortcode qodef-m  qodef-banner qodef-layout--link-button ">
  <div class="qodef-m-image" style="--qodef-image-height--768: 230px">
  <img width="904" height="360" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-8-banner-1.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-8-banner-1.jpg 904w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-8-banner-1-300x119.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-8-banner-1-768x306.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-8-banner-1-600x239.jpg 600w" sizes="(max-width: 904px) 100vw, 904px" /></div>
  <div class="qodef-m-content">
  <div class="qodef-m-content-inner" style="--qodef-content-padding--1440: 28px 28px 25px 28px;--qodef-content-padding--1024: 35px 35px 32px 35px;--qodef-content-padding--768: 35px 30px 32px 30px;--qodef-content-padding--680: 25px 20px 22px 20px">
  <div>
  <h4 class="qodef-m-title" style="--qodef-title-font-size--680: 20px">
  Sports Watches	</h4>
  </div>
  <div>
  <div class="qodef-m-button">
  <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual  qodef-html--link" href="https://gizmos.qodeinteractive.com/product-category/sports-watches/analog-watches/" target="_self"> <span class="qodef-m-text">shop now</span> <span class="qodef-m-icon"><svg class="qodef-svg--button-arrow" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12"><g><path d="M11 5H1a1 1 0 0 0 0 2h10a1 1 0 0 0 0-2Z" /><path d="M7 11V1a1 1 0 1 0-2 0v10a1 1 0 0 0 2 0Z" /></g></svg></span></a> </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-cbf290d" data-id="cbf290d" data-element_type="column">
  <div class="elementor-widget-wrap elementor-element-populated">
  <div class="elementor-element elementor-element-766762c elementor-widget elementor-widget-gizmos_core_banner" data-id="766762c" data-element_type="widget" data-widget_type="gizmos_core_banner.default">
  <div class="elementor-widget-container">
  <div class="qodef-shortcode qodef-m  qodef-banner qodef-layout--link-button ">
  <div class="qodef-m-image" style="--qodef-image-height--768: 230px">
  <img width="904" height="360" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-8-banner-2.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-8-banner-2.jpg 904w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-8-banner-2-300x119.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-8-banner-2-768x306.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-8-banner-2-600x239.jpg 600w" sizes="(max-width: 904px) 100vw, 904px" /></div>
  <div class="qodef-m-content">
  <div class="qodef-m-content-inner" style="--qodef-content-padding--1440: 28px 28px 25px 28px;--qodef-content-padding--1024: 35px 35px 32px 35px;--qodef-content-padding--768: 35px 30px 32px 30px;--qodef-content-padding--680: 25px 20px 22px 20px">
  <div>
  <h4 class="qodef-m-title" style="--qodef-title-font-size--680: 20px;color: #FFFFFF">
  Gadgets &amp;<br /> Accessories	</h4>
  </div>
  <div>
  <div class="qodef-m-button">
  <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual  qodef-html--link" href="https://gizmos.qodeinteractive.com/product-category/gadgets/" target="_self" style="color: #FFFFFF"> <span class="qodef-m-text">shop now</span> <span class="qodef-m-icon"><svg class="qodef-svg--button-arrow" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12"><g><path d="M11 5H1a1 1 0 0 0 0 2h10a1 1 0 0 0 0-2Z" /><path d="M7 11V1a1 1 0 1 0-2 0v10a1 1 0 0 0 2 0Z" /></g></svg></span></a> </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-cce720e" data-id="cce720e" data-element_type="column">
  <div class="elementor-widget-wrap elementor-element-populated">
  <div class="elementor-element elementor-element-f1e5f69 elementor-widget elementor-widget-gizmos_core_banner" data-id="f1e5f69" data-element_type="widget" data-widget_type="gizmos_core_banner.default">
  <div class="elementor-widget-container">
  <div class="qodef-shortcode qodef-m  qodef-banner qodef-layout--link-button ">
  <div class="qodef-m-image" style="--qodef-image-height--768: 230px">
  <img width="904" height="360" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-8-banner-3.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-8-banner-3.jpg 904w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-8-banner-3-300x119.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-8-banner-3-768x306.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-8-banner-3-600x239.jpg 600w" sizes="(max-width: 904px) 100vw, 904px" /></div>
  <div class="qodef-m-content">
  <div class="qodef-m-content-inner" style="--qodef-content-padding--1440: 28px 28px 25px 28px;--qodef-content-padding--1024: 35px 35px 32px 35px;--qodef-content-padding--768: 35px 30px 32px 30px;--qodef-content-padding--680: 25px 20px 22px 20px">
  <div>
  <h4 class="qodef-m-title" style="--qodef-title-font-size--680: 20px">
  Gaming Consoles<br /> &amp; Gamepads	</h4>
  </div>
  <div>
  <div class="qodef-m-button">
  <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual  qodef-html--link" href="https://gizmos.qodeinteractive.com/product-category/premium-tech/premium-audio/" target="_self"> <span class="qodef-m-text">shop now</span> <span class="qodef-m-icon"><svg class="qodef-svg--button-arrow" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12"><g><path d="M11 5H1a1 1 0 0 0 0 2h10a1 1 0 0 0 0-2Z" /><path d="M7 11V1a1 1 0 1 0-2 0v10a1 1 0 0 0 2 0Z" /></g></svg></span></a> </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </section>
  <section class="elementor-section elementor-top-section elementor-element elementor-element-cb78e1c elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="cb78e1c" data-element_type="section">
  <div class="elementor-container elementor-column-gap-no">
  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a4c1b11" data-id="a4c1b11" data-element_type="column">
  <div class="elementor-widget-wrap elementor-element-populated">
  <div class="elementor-element elementor-element-9ecc249 elementor-widget elementor-widget-gizmos_core_product_list" data-id="9ecc249" data-element_type="widget" data-widget_type="gizmos_core_product_list.default">
  <div class="elementor-widget-container">
  <div class="qodef-shortcode qodef-m  qodef-woo-shortcode qodef-woo-product-list qodef-item-layout--info-below   qodef-category-filter-type--simple    qodef-grid qodef-layout--columns  qodef-gutter--small qodef-col-num--5 qodef-item-layout--info-below qodef--no-bottom-space qodef-pagination--off qodef-responsive--custom qodef-col-num--1440--5 qodef-col-num--1366--5 qodef-col-num--1024--3 qodef-col-num--768--3 qodef-col-num--680--1 qodef-col-num--480--1" data-options="{&quot;plugin&quot;:&quot;gizmos_core&quot;,&quot;module&quot;:&quot;plugins\/woocommerce\/shortcodes&quot;,&quot;shortcode&quot;:&quot;product-list&quot;,&quot;post_type&quot;:&quot;product&quot;,&quot;next_page&quot;:&quot;2&quot;,&quot;max_pages_num&quot;:1,&quot;product_list_title&quot;:&quot;Featured Products&quot;,&quot;behavior&quot;:&quot;columns&quot;,&quot;images_proportion&quot;:&quot;full&quot;,&quot;columns&quot;:&quot;5&quot;,&quot;columns_responsive&quot;:&quot;custom&quot;,&quot;columns_1440&quot;:&quot;5&quot;,&quot;columns_1366&quot;:&quot;5&quot;,&quot;columns_1024&quot;:&quot;3&quot;,&quot;columns_768&quot;:&quot;3&quot;,&quot;columns_680&quot;:&quot;1&quot;,&quot;columns_480&quot;:&quot;1&quot;,&quot;space&quot;:&quot;small&quot;,&quot;posts_per_page&quot;:&quot;5&quot;,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;ASC&quot;,&quot;additional_params&quot;:&quot;tax&quot;,&quot;tax&quot;:&quot;product_cat&quot;,&quot;tax_slug&quot;:&quot;3d-printers&quot;,&quot;layout&quot;:&quot;info-below&quot;,&quot;title_tag&quot;:&quot;h5&quot;,&quot;enable_category&quot;:&quot;yes&quot;,&quot;enable_banner&quot;:&quot;no&quot;,&quot;enable_compare_product&quot;:&quot;yes&quot;,&quot;enable_wishlist&quot;:&quot;yes&quot;,&quot;enable_filter&quot;:&quot;no&quot;,&quot;pagination_type&quot;:&quot;no-pagination&quot;,&quot;category_filter_type&quot;:&quot;simple&quot;,&quot;enable_ordering_filter&quot;:&quot;no&quot;,&quot;enable_results_count&quot;:&quot;no&quot;,&quot;object_class_name&quot;:&quot;GizmosCore_Product_List_Shortcode&quot;,&quot;additional_query_args&quot;:{&quot;tax_query&quot;:[{&quot;taxonomy&quot;:&quot;product_cat&quot;,&quot;field&quot;:&quot;slug&quot;,&quot;terms&quot;:&quot;3d-printers&quot;}]},&quot;taxonomy_filter&quot;:&quot;product_cat&quot;,&quot;unique&quot;:&quot;1&quot;,&quot;space_value&quot;:10}">
  <div class="qodef-m-top">
  <h3 class="qodef-m-product-list-title">Featured Products</h3>
  </div>
  <ul class="qodef-grid-inner clear">
  <li class="qodef-e qodef-grid-item qodef-item--full product type-product post-5757 status-publish first instock product_cat-3d-printers product_tag-usb product_tag-wireless has-post-thumbnail shipping-taxable purchasable product-type-simple">
  <div class="qodef-e-inner">
  <a href="https://gizmos.qodeinteractive.com/product/fixed-wing-hybrid-surveillance-drone-vw/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a> <div class="qodef-woo-product-content-top">
  <div class="qodef-woo-product-category">
  <div class="qodef-woo-product-categories qodef-e-info"><a href="https://gizmos.qodeinteractive.com/product-category/computers-tablets/3d-printers/" rel="tag">3D Printers</a></div>
  <div class="qodef-info-separator-end"></div>
  </div>
  <div class="qodef-woo-product-compare-wishlist-wrapper">
  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-5757  wishlist-fragment on-first-load" data-fragment-ref="5757" data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:5757,&quot;parent_product_id&quot;:5757,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
  
  <div class="yith-wcwl-add-button">
  <a href="?add_to_wishlist=5757&#038;_wpnonce=6e2b03d0d3" class="add_to_wishlist single_add_to_wishlist" data-product-id="5757" data-product-type="simple" data-original-product-id="5757" data-title="" rel="nofollow">
  <i class="yith-wcwl-icon fa fa-heart-o"></i> <span></span>
  </a>
  </div>
  
  </div>
  <a href="https://gizmos.qodeinteractive.com?action=yith-woocompare-add-product&id=5757" class="compare" data-product_id="5757" rel="nofollow"></a> </div>
  </div>
  <div class="qodef-woo-product-content-middle">
  <div class="qodef-woo-product-image-wrapper">
  <div class="qodef-woo-product-image">
  <img loading="lazy" width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8.jpg" class="attachment-full size-full wp-post-image" alt="w" decoding="async" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="qodef-woo-product-image-slider qodef-m-custom-swiper-container">
  <div class="swiper-wrapper">
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-4.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-4.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-4-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-4-100x100.jpg 100w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-4-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-4-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-4-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-4-650x650.jpg 650w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-1.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-1.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-1-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-1-100x100.jpg 100w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-1-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-1-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-1-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-1-650x650.jpg 650w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-2.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-2.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-2-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-2-100x100.jpg 100w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-2-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-2-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-2-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-2-650x650.jpg 650w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-3.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-3.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-3-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-3-100x100.jpg 100w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-3-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-3-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-3-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-8-3-650x650.jpg 650w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  </div>
  <div class="swiper-button-prev"><svg class="qodef-svg--slider-arrow-left" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="M8.70851355 17.90094068.48344748 9.6758746c-.26657926-.26657926-.16758431-.79973777.22344574-1.19076782s.92418856-.490025 1.19076782-.22344574l8.22506608 8.22506608c.26657925.26657925.1661701.80115198-.22344575 1.19076782s-.92418856.490025-1.19076782.22344574Z" /><path d="M10.12294068 1.89748645 1.8978746 10.12255252c-.26657926.26657926-.79973777.16758431-1.19076782-.22344574s-.490025-.92418856-.22344574-1.19076782L8.70872712.48327288c.26657925-.26657925.80115198-.1661701 1.19076782.22344575s.490025.92418856.22344574 1.19076782Z" /></svg></div>
  <div class="swiper-button-next"><svg class="qodef-svg--slider-arrow-right" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="m1.89827288 17.90172712 8.22506608-8.22506608c.26657926-.26657926.1675843-.79973777-.22344574-1.19076782s-.92418856-.490025-1.19076782-.22344574L.48405932 16.48751355c-.26728636.26728637-.1661701.80115199.22344574 1.19076782s.92348146.49073211 1.19076782.22344575Z" /><path d="m.48327288 1.89827288 8.22506608 8.22506608c.26657926.26657926.79973777.1675843 1.19076782-.22344574s.490025-.92418856.22344574-1.19076782L1.89748645.48405932C1.63020008.21677296 1.09633446.31788922.70671863.70750506s-.49073211.92348146-.22344575 1.19076782Z" /></svg></div>
  </div>
  </div>
  </div>
  <div class="qodef-woo-product-content-bottom">
  <div class="qodef-woo-product-info-wrapper">
  <h5 itemprop="name" class="qodef-woo-product-title entry-title">
  <a itemprop="url" class="qodef-woo-product-title-link" href="https://gizmos.qodeinteractive.com/product/fixed-wing-hybrid-surveillance-drone-vw/">
  Fixed-Wing Hybrid Surveillance Drone VW	</a>
  </h5>
  <div class="qodef-woo-product-price price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>1,450</span></div>
  </div>
  </div>
   <a href="?add-to-cart=5757" data-quantity="1" class="button wp-element-button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="5757" data-product_sku="209" aria-label="Add &ldquo;Fixed-Wing Hybrid Surveillance Drone VW&rdquo; to your cart" rel="nofollow">Add to cart</a> </div>
  </li>
  <li class="qodef-e qodef-grid-item qodef-item--full product type-product post-5762 status-publish instock product_cat-3d-printers has-post-thumbnail shipping-taxable purchasable product-type-simple">
  <div class="qodef-e-inner">
  <a href="https://gizmos.qodeinteractive.com/product/over-ear-headphones-fx-9901-orange/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a> <div class="qodef-woo-product-content-top">
  <div class="qodef-woo-product-category">
  <div class="qodef-woo-product-categories qodef-e-info"><a href="https://gizmos.qodeinteractive.com/product-category/computers-tablets/3d-printers/" rel="tag">3D Printers</a></div>
  <div class="qodef-info-separator-end"></div>
  </div>
  <div class="qodef-woo-product-compare-wishlist-wrapper">
  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-5762  wishlist-fragment on-first-load" data-fragment-ref="5762" data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:5762,&quot;parent_product_id&quot;:5762,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
  
  <div class="yith-wcwl-add-button">
  <a href="?add_to_wishlist=5762&#038;_wpnonce=6e2b03d0d3" class="add_to_wishlist single_add_to_wishlist" data-product-id="5762" data-product-type="simple" data-original-product-id="5762" data-title="" rel="nofollow">
  <i class="yith-wcwl-icon fa fa-heart-o"></i> <span></span>
  </a>
  </div>
  
  </div>
  <a href="https://gizmos.qodeinteractive.com?action=yith-woocompare-add-product&id=5762" class="compare" data-product_id="5762" rel="nofollow"></a> </div>
  </div>
  <div class="qodef-woo-product-content-middle">
  <div class="qodef-woo-product-image-wrapper">
  <div class="qodef-woo-product-image">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-76-1.jpg" class="attachment-full size-full wp-post-image" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-76-1.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-76-1-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-76-1-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-76-1-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-76-1-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-76-1-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-76-1-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="qodef-woo-product-image-slider qodef-m-custom-swiper-container">
  <div class="swiper-wrapper">
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-76-1.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-76-1.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-76-1-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-76-1-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-76-1-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-76-1-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-76-1-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-76-1-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-1.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-1.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-1-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-1-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-1-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-1-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-1-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-1-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-2.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-2.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-2-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-2-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-2-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-2-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-2-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-2-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-3.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-3.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-3-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-3-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-3-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-3-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-3-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-3-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-4.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-4.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-4-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-4-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-4-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-4-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-4-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-29-4-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  </div>
  <div class="swiper-button-prev"><svg class="qodef-svg--slider-arrow-left" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="M8.70851355 17.90094068.48344748 9.6758746c-.26657926-.26657926-.16758431-.79973777.22344574-1.19076782s.92418856-.490025 1.19076782-.22344574l8.22506608 8.22506608c.26657925.26657925.1661701.80115198-.22344575 1.19076782s-.92418856.490025-1.19076782.22344574Z" /><path d="M10.12294068 1.89748645 1.8978746 10.12255252c-.26657926.26657926-.79973777.16758431-1.19076782-.22344574s-.490025-.92418856-.22344574-1.19076782L8.70872712.48327288c.26657925-.26657925.80115198-.1661701 1.19076782.22344575s.490025.92418856.22344574 1.19076782Z" /></svg></div>
  <div class="swiper-button-next"><svg class="qodef-svg--slider-arrow-right" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="m1.89827288 17.90172712 8.22506608-8.22506608c.26657926-.26657926.1675843-.79973777-.22344574-1.19076782s-.92418856-.490025-1.19076782-.22344574L.48405932 16.48751355c-.26728636.26728637-.1661701.80115199.22344574 1.19076782s.92348146.49073211 1.19076782.22344575Z" /><path d="m.48327288 1.89827288 8.22506608 8.22506608c.26657926.26657926.79973777.1675843 1.19076782-.22344574s.490025-.92418856.22344574-1.19076782L1.89748645.48405932C1.63020008.21677296 1.09633446.31788922.70671863.70750506s-.49073211.92348146-.22344575 1.19076782Z" /></svg></div>
  </div>
  </div>
  </div>
  <div class="qodef-woo-product-content-bottom">
  <div class="qodef-woo-product-info-wrapper">
  <h5 itemprop="name" class="qodef-woo-product-title entry-title">
  <a itemprop="url" class="qodef-woo-product-title-link" href="https://gizmos.qodeinteractive.com/product/over-ear-headphones-fx-9901-orange/">
  Over-Ear Headphones FX-9901 Orange	</a>
  </h5>
  <div class="qodef-woo-product-price price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>890</span></div>
  </div>
  </div>
  <a href="?add-to-cart=5762" data-quantity="1" class="button wp-element-button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="5762" data-product_sku="210" aria-label="Add &ldquo;Over-Ear Headphones FX-9901 Orange&rdquo; to your cart" rel="nofollow">Add to cart</a> </div>
  </li>
  <li class="qodef-e qodef-grid-item qodef-item--full product type-product post-5773 status-publish instock product_cat-3d-printers has-post-thumbnail shipping-taxable purchasable product-type-simple">
  <div class="qodef-e-inner">
  <a href="https://gizmos.qodeinteractive.com/product/smartphone-ls-589662-midnight-black/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a> <div class="qodef-woo-product-content-top">
  <div class="qodef-woo-product-category">
  <div class="qodef-woo-product-categories qodef-e-info"><a href="https://gizmos.qodeinteractive.com/product-category/computers-tablets/3d-printers/" rel="tag">3D Printers</a></div>
  <div class="qodef-info-separator-end"></div>
  </div>
  <div class="qodef-woo-product-compare-wishlist-wrapper">
  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-5773  wishlist-fragment on-first-load" data-fragment-ref="5773" data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:5773,&quot;parent_product_id&quot;:5773,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
  
  <div class="yith-wcwl-add-button">
  <a href="?add_to_wishlist=5773&#038;_wpnonce=6e2b03d0d3" class="add_to_wishlist single_add_to_wishlist" data-product-id="5773" data-product-type="simple" data-original-product-id="5773" data-title="" rel="nofollow">
  <i class="yith-wcwl-icon fa fa-heart-o"></i> <span></span>
  </a>
  </div>
  
  </div>
  <a href="https://gizmos.qodeinteractive.com?action=yith-woocompare-add-product&id=5773" class="compare" data-product_id="5773" rel="nofollow"></a> </div>
  </div>
  <div class="qodef-woo-product-content-middle">
  <div class="qodef-woo-product-image-wrapper">
  <div class="qodef-woo-product-image">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-37.jpg" class="attachment-full size-full wp-post-image" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-37.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-37-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-37-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-37-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-37-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-37-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-37-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="qodef-woo-product-image-slider qodef-m-custom-swiper-container">
  <div class="swiper-wrapper">
   <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-37.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-37.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-37-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-37-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-37-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-37-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-37-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-37-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-4.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-4.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-4-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-4-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-4-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-4-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-4-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-4-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-1.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-1.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-1-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-1-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-1-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-1-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-1-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-1-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-2.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-2.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-2-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-2-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-2-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-2-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-2-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-2-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-3.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-3.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-3-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-3-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-3-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-3-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-3-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-14-3-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  </div>
  <div class="swiper-button-prev"><svg class="qodef-svg--slider-arrow-left" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="M8.70851355 17.90094068.48344748 9.6758746c-.26657926-.26657926-.16758431-.79973777.22344574-1.19076782s.92418856-.490025 1.19076782-.22344574l8.22506608 8.22506608c.26657925.26657925.1661701.80115198-.22344575 1.19076782s-.92418856.490025-1.19076782.22344574Z" /><path d="M10.12294068 1.89748645 1.8978746 10.12255252c-.26657926.26657926-.79973777.16758431-1.19076782-.22344574s-.490025-.92418856-.22344574-1.19076782L8.70872712.48327288c.26657925-.26657925.80115198-.1661701 1.19076782.22344575s.490025.92418856.22344574 1.19076782Z" /></svg></div>
  <div class="swiper-button-next"><svg class="qodef-svg--slider-arrow-right" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="m1.89827288 17.90172712 8.22506608-8.22506608c.26657926-.26657926.1675843-.79973777-.22344574-1.19076782s-.92418856-.490025-1.19076782-.22344574L.48405932 16.48751355c-.26728636.26728637-.1661701.80115199.22344574 1.19076782s.92348146.49073211 1.19076782.22344575Z" /><path d="m.48327288 1.89827288 8.22506608 8.22506608c.26657926.26657926.79973777.1675843 1.19076782-.22344574s.490025-.92418856.22344574-1.19076782L1.89748645.48405932C1.63020008.21677296 1.09633446.31788922.70671863.70750506s-.49073211.92348146-.22344575 1.19076782Z" /></svg></div>
  </div>
  </div>
  </div>
  <div class="qodef-woo-product-content-bottom">
  <div class="qodef-woo-product-info-wrapper">
  <h5 itemprop="name" class="qodef-woo-product-title entry-title">
  <a itemprop="url" class="qodef-woo-product-title-link" href="https://gizmos.qodeinteractive.com/product/smartphone-ls-589662-midnight-black/">
  Smartphone LS-589662 Midnight Black	</a>
  </h5>
  <div class="qodef-woo-product-price price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>770</span></div>
  </div>
  </div>
  <a href="?add-to-cart=5773" data-quantity="1" class="button wp-element-button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="5773" data-product_sku="211" aria-label="Add &ldquo;Smartphone LS-589662 Midnight Black&rdquo; to your cart" rel="nofollow">Add to cart</a> </div>
  </li>
  <li class="qodef-e qodef-grid-item qodef-item--full product type-product post-5775 status-publish last instock product_cat-3d-printers has-post-thumbnail shipping-taxable purchasable product-type-simple">
  <div class="qodef-e-inner">
  <a href="https://gizmos.qodeinteractive.com/product/smart-robotic-vacuum-cleaner-fzp-550/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a> <div class="qodef-woo-product-content-top">
  <div class="qodef-woo-product-category">
  <div class="qodef-woo-product-categories qodef-e-info"><a href="https://gizmos.qodeinteractive.com/product-category/computers-tablets/3d-printers/" rel="tag">3D Printers</a></div>
  <div class="qodef-info-separator-end"></div>
  </div>
  <div class="qodef-woo-product-compare-wishlist-wrapper">
  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-5775  wishlist-fragment on-first-load" data-fragment-ref="5775" data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:5775,&quot;parent_product_id&quot;:5775,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
  
  <div class="yith-wcwl-add-button">
  <a href="?add_to_wishlist=5775&#038;_wpnonce=6e2b03d0d3" class="add_to_wishlist single_add_to_wishlist" data-product-id="5775" data-product-type="simple" data-original-product-id="5775" data-title="" rel="nofollow">
  <i class="yith-wcwl-icon fa fa-heart-o"></i> <span></span>
  </a>
  </div>
  
  </div>
  <a href="https://gizmos.qodeinteractive.com?action=yith-woocompare-add-product&id=5775" class="compare" data-product_id="5775" rel="nofollow"></a> </div>
  </div>
  <div class="qodef-woo-product-content-middle">
  <div class="qodef-woo-product-image-wrapper">
  <div class="qodef-woo-product-image">
  <img width="1000" height="1000" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6.jpg" class="attachment-full size-full wp-post-image" alt="s" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6.jpg 1000w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-100x100.jpg 100w" sizes="(max-width: 1000px) 100vw, 1000px" /> </div>
  <div class="qodef-woo-product-image-slider qodef-m-custom-swiper-container">
  <div class="swiper-wrapper">
  <div class="swiper-slide">
  <img width="1000" height="1000" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6.jpg" class="attachment-full size-full" alt="s" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6.jpg 1000w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-100x100.jpg 100w" sizes="(max-width: 1000px) 100vw, 1000px" /> </div>
  <div class="swiper-slide">
  <img width="1000" height="1000" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-2.jpg" class="attachment-full size-full" alt="c" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-2.jpg 1000w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-2-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-2-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-2-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-2-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-2-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-2-100x100.jpg 100w" sizes="(max-width: 1000px) 100vw, 1000px" /> </div>
  <div class="swiper-slide">
  <img width="1000" height="1000" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-3.jpg" class="attachment-full size-full" alt="v" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-3.jpg 1000w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-3-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-3-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-3-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-3-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-3-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-3-100x100.jpg 100w" sizes="(max-width: 1000px) 100vw, 1000px" /> </div>
  <div class="swiper-slide">
  <img width="1000" height="1000" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-4.jpg" class="attachment-full size-full" alt="a" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-4.jpg 1000w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-4-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-4-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-4-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-4-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-4-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-4-100x100.jpg 100w" sizes="(max-width: 1000px) 100vw, 1000px" /> </div>
  <div class="swiper-slide">
  <img width="1000" height="1000" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-5.jpg" class="attachment-full size-full" alt="s" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-5.jpg 1000w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-5-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-5-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-5-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-5-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-5-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/h12-shop-img6-5-100x100.jpg 100w" sizes="(max-width: 1000px) 100vw, 1000px" /> </div>
  </div>
  <div class="swiper-button-prev"><svg class="qodef-svg--slider-arrow-left" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="M8.70851355 17.90094068.48344748 9.6758746c-.26657926-.26657926-.16758431-.79973777.22344574-1.19076782s.92418856-.490025 1.19076782-.22344574l8.22506608 8.22506608c.26657925.26657925.1661701.80115198-.22344575 1.19076782s-.92418856.490025-1.19076782.22344574Z" /><path d="M10.12294068 1.89748645 1.8978746 10.12255252c-.26657926.26657926-.79973777.16758431-1.19076782-.22344574s-.490025-.92418856-.22344574-1.19076782L8.70872712.48327288c.26657925-.26657925.80115198-.1661701 1.19076782.22344575s.490025.92418856.22344574 1.19076782Z" /></svg></div>
  <div class="swiper-button-next"><svg class="qodef-svg--slider-arrow-right" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="m1.89827288 17.90172712 8.22506608-8.22506608c.26657926-.26657926.1675843-.79973777-.22344574-1.19076782s-.92418856-.490025-1.19076782-.22344574L.48405932 16.48751355c-.26728636.26728637-.1661701.80115199.22344574 1.19076782s.92348146.49073211 1.19076782.22344575Z" /><path d="m.48327288 1.89827288 8.22506608 8.22506608c.26657926.26657926.79973777.1675843 1.19076782-.22344574s.490025-.92418856.22344574-1.19076782L1.89748645.48405932C1.63020008.21677296 1.09633446.31788922.70671863.70750506s-.49073211.92348146-.22344575 1.19076782Z" /></svg></div>
  </div>
  </div>
  </div>
  <div class="qodef-woo-product-content-bottom">
  <div class="qodef-woo-product-info-wrapper">
  <h5 itemprop="name" class="qodef-woo-product-title entry-title">
  <a itemprop="url" class="qodef-woo-product-title-link" href="https://gizmos.qodeinteractive.com/product/smart-robotic-vacuum-cleaner-fzp-550/">
  Smart Robotic Vacuum Cleaner FZP-550	</a>
  </h5>
  <div class="qodef-woo-product-price price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>440</span></div>
   </div>
  </div>
  <a href="?add-to-cart=5775" data-quantity="1" class="button wp-element-button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="5775" data-product_sku="212" aria-label="Add &ldquo;Smart Robotic Vacuum Cleaner FZP-550&rdquo; to your cart" rel="nofollow">Add to cart</a> </div>
  </li>
  <li class="qodef-e qodef-grid-item qodef-item--full product type-product post-5785 status-publish first instock product_cat-3d-printers product_tag-usb product_tag-wireless has-post-thumbnail shipping-taxable purchasable product-type-simple">
  <div class="qodef-e-inner">
  <a href="https://gizmos.qodeinteractive.com/product/high-airflow-tempered-glass-computer-case/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a> <div class="qodef-woo-product-content-top">
  <div class="qodef-woo-product-category">
  <div class="qodef-woo-product-categories qodef-e-info"><a href="https://gizmos.qodeinteractive.com/product-category/computers-tablets/3d-printers/" rel="tag">3D Printers</a></div>
  <div class="qodef-info-separator-end"></div>
  </div>
  <div class="qodef-woo-product-compare-wishlist-wrapper">
  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-5785  wishlist-fragment on-first-load" data-fragment-ref="5785" data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:5785,&quot;parent_product_id&quot;:5785,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
  
  <div class="yith-wcwl-add-button">
  <a href="?add_to_wishlist=5785&#038;_wpnonce=6e2b03d0d3" class="add_to_wishlist single_add_to_wishlist" data-product-id="5785" data-product-type="simple" data-original-product-id="5785" data-title="" rel="nofollow">
  <i class="yith-wcwl-icon fa fa-heart-o"></i> <span></span>
  </a>
  </div>
  
  </div>
  <a href="https://gizmos.qodeinteractive.com?action=yith-woocompare-add-product&id=5785" class="compare" data-product_id="5785" rel="nofollow"></a> </div>
  </div>
  <div class="qodef-woo-product-content-middle">
  <div class="qodef-woo-product-image-wrapper">
  <div class="qodef-woo-product-image">
  <img width="1000" height="1000" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75.jpg" class="attachment-full size-full wp-post-image" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75.jpg 1000w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-100x100.jpg 100w" sizes="(max-width: 1000px) 100vw, 1000px" /> </div>
  <div class="qodef-woo-product-image-slider qodef-m-custom-swiper-container">
  <div class="swiper-wrapper">
  <div class="swiper-slide">
  <img width="1000" height="1000" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75.jpg 1000w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-100x100.jpg 100w" sizes="(max-width: 1000px) 100vw, 1000px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-4.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-4.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-4-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-4-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-4-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-4-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-4-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-4-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-1.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-1.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-1-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-1-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-1-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-1-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-1-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-1-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-2.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-2.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-2-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-2-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-2-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-2-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-2-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-2-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-3.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-3.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-3-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-3-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-3-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-3-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-3-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-75-3-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  </div>
  <div class="swiper-button-prev"><svg class="qodef-svg--slider-arrow-left" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="M8.70851355 17.90094068.48344748 9.6758746c-.26657926-.26657926-.16758431-.79973777.22344574-1.19076782s.92418856-.490025 1.19076782-.22344574l8.22506608 8.22506608c.26657925.26657925.1661701.80115198-.22344575 1.19076782s-.92418856.490025-1.19076782.22344574Z" /><path d="M10.12294068 1.89748645 1.8978746 10.12255252c-.26657926.26657926-.79973777.16758431-1.19076782-.22344574s-.490025-.92418856-.22344574-1.19076782L8.70872712.48327288c.26657925-.26657925.80115198-.1661701 1.19076782.22344575s.490025.92418856.22344574 1.19076782Z" /></svg></div>
  <div class="swiper-button-next"><svg class="qodef-svg--slider-arrow-right" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="m1.89827288 17.90172712 8.22506608-8.22506608c.26657926-.26657926.1675843-.79973777-.22344574-1.19076782s-.92418856-.490025-1.19076782-.22344574L.48405932 16.48751355c-.26728636.26728637-.1661701.80115199.22344574 1.19076782s.92348146.49073211 1.19076782.22344575Z" /><path d="m.48327288 1.89827288 8.22506608 8.22506608c.26657926.26657926.79973777.1675843 1.19076782-.22344574s.490025-.92418856.22344574-1.19076782L1.89748645.48405932C1.63020008.21677296 1.09633446.31788922.70671863.70750506s-.49073211.92348146-.22344575 1.19076782Z" /></svg></div>
  </div>
  </div>
  </div>
  <div class="qodef-woo-product-content-bottom">
  <div class="qodef-woo-product-info-wrapper">
  <h5 itemprop="name" class="qodef-woo-product-title entry-title">
  <a itemprop="url" class="qodef-woo-product-title-link" href="https://gizmos.qodeinteractive.com/product/high-airflow-tempered-glass-computer-case/">
  High-Airflow Tempered Glass Computer Case	</a>
  </h5>
  <div class="qodef-woo-product-price price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>3,850</span></div>
  </div>
  </div>
  <a href="?add-to-cart=5785" data-quantity="1" class="button wp-element-button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="5785" data-product_sku="213" aria-label="Add &ldquo;High-Airflow Tempered Glass Computer Case&rdquo; to your cart" rel="nofollow">Add to cart</a> </div>
  </li>
  </ul>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </section>
  <section class="elementor-section elementor-top-section elementor-element elementor-element-ff6f3fa elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="ff6f3fa" data-element_type="section">
  <div class="elementor-container elementor-column-gap-no">
  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9a15c95" data-id="9a15c95" data-element_type="column">
  <div class="elementor-widget-wrap elementor-element-populated">
  <div class="elementor-element elementor-element-c8c3f75 elementor-widget elementor-widget-gizmos_core_banner" data-id="c8c3f75" data-element_type="widget" data-widget_type="gizmos_core_banner.default">
  <div class="elementor-widget-container">
  <div class="qodef-shortcode qodef-m  qodef-banner qodef-layout--link-overlay ">
  <div class="qodef-m-image" style="--qodef-image-height--768: 240px;--qodef-image-height--680: 190px">
  <img width="1378" height="500" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-8-banner-4.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-8-banner-4.jpg 1378w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-8-banner-4-300x109.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-8-banner-4-1024x372.jpg 1024w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-8-banner-4-768x279.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-8-banner-4-600x218.jpg 600w" sizes="(max-width: 1378px) 100vw, 1378px" /></div>
  <div class="qodef-m-content">
  <div class="qodef-m-content-inner" style="--qodef-content-padding: 50px 40px 38px 40px;--qodef-content-padding--1440: 30px 30px 18px 30px;--qodef-content-padding--768: 35px 35px 25px 35px ;--qodef-content-padding--680: 25px 25px 15px 25px">
  <div>
  <h2 class="qodef-m-title" style="--qodef-title-font-size--680: 28px;color: #FFFFFF">
  E-77 Camera	</h2>
  <h5 class="qodef-m-subtitle" style="color: #ACACAC;font-weight: 400">
  MF841HN/A 13&quot;	</h5>
  </div>
  <div>
  <h6 class="qodef-m-text" style="color: #ACACAC">
  weekend sale	</h6>
  <span class="qodef-m-bottom-text" style="color: #FFFFFF;--qodef-bottom-text-font-size--680: 37px">
  20%	</span>
  </div>
  </div>
  </div>
  <a itemprop="url" href="https://gizmos.qodeinteractive.com/product-category/computers-tablets/3d-printers/" class="qodef-m-banner-link" target="_self"></a>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-113c628" data-id="113c628" data-element_type="column">
  <div class="elementor-widget-wrap elementor-element-populated">
  <div class="elementor-element elementor-element-f4ec3a5 elementor-widget elementor-widget-gizmos_core_banner" data-id="f4ec3a5" data-element_type="widget" data-widget_type="gizmos_core_banner.default">
  <div class="elementor-widget-container">
  <div class="qodef-shortcode qodef-m  qodef-banner qodef-layout--link-overlay ">
  <div class="qodef-m-image" style="--qodef-image-height--768: 240px;--qodef-image-height--680: 190px">
  <img width="1378" height="500" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-4-banner-2.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-4-banner-2.jpg 1378w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-4-banner-2-300x109.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-4-banner-2-1024x372.jpg 1024w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-4-banner-2-768x279.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-4-banner-2-600x218.jpg 600w" sizes="(max-width: 1378px) 100vw, 1378px" /></div>
  <div class="qodef-m-content">
  <div class="qodef-m-content-inner" style="--qodef-content-padding: 50px 40px 38px 40px;--qodef-content-padding--1440: 30px 30px 18px 30px;--qodef-content-padding--768: 35px 35px 25px 35px ;--qodef-content-padding--680: 25px 25px 15px 25px">
  <div>
  <h2 class="qodef-m-title" style="--qodef-title-font-size--680: 28px;color: #FFFFFF">
  HP Ultimate	</h2>
  <h5 class="qodef-m-subtitle" style="color: #ACACAC;font-weight: 400">
  with Bluetooth 5.1	</h5>
  </div>
  <div>
  <h6 class="qodef-m-text" style="color: #ACACAC">
  discount -30%	</h6>
  <span class="qodef-m-bottom-text" style="color: #FFFFFF;--qodef-bottom-text-font-size--680: 37px">
  $349	</span>
  </div>
  </div>
  </div>
  <a itemprop="url" href="https://gizmos.qodeinteractive.com/product-category/webcams-equipment/gopro/" class="qodef-m-banner-link" target="_self"></a>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </section>
  <section class="elementor-section elementor-top-section elementor-element elementor-element-7be8b20 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="7be8b20" data-element_type="section">
  <div class="elementor-container elementor-column-gap-no">
  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4fb8a7f" data-id="4fb8a7f" data-element_type="column">
  <div class="elementor-widget-wrap elementor-element-populated">
  <div class="elementor-element elementor-element-9e684b5 elementor-widget elementor-widget-gizmos_core_product_list" data-id="9e684b5" data-element_type="widget" data-widget_type="gizmos_core_product_list.default">
  <div class="elementor-widget-container">
  <div class="qodef-e-product-list-slider-holder">
  <div class="qodef-shortcode qodef-m  qodef-woo-shortcode qodef-woo-product-list qodef-item-layout--info-below   qodef-category-filter-type--simple    qodef-grid qodef-swiper-container  qodef-gutter--small qodef-col-num--4 qodef-item-layout--info-below qodef-filter--on qodef--no-bottom-space qodef-pagination--off qodef-responsive--predefined" data-options="{&quot;slidesPerView&quot;:&quot;4&quot;,&quot;spaceBetween&quot;:20,&quot;loop&quot;:false,&quot;autoplay&quot;:false,&quot;speed&quot;:&quot;&quot;,&quot;speedAnimation&quot;:&quot;&quot;,&quot;slideAnimation&quot;:&quot;&quot;,&quot;outsideNavigation&quot;:&quot;yes&quot;,&quot;unique&quot;:&quot;2&quot;,&quot;plugin&quot;:&quot;gizmos_core&quot;,&quot;module&quot;:&quot;plugins\/woocommerce\/shortcodes&quot;,&quot;shortcode&quot;:&quot;product-list&quot;,&quot;post_type&quot;:&quot;product&quot;,&quot;next_page&quot;:&quot;2&quot;,&quot;max_pages_num&quot;:1,&quot;product_list_title&quot;:&quot;Featured Products&quot;,&quot;behavior&quot;:&quot;slider&quot;,&quot;images_proportion&quot;:&quot;full&quot;,&quot;columns&quot;:&quot;4&quot;,&quot;columns_responsive&quot;:&quot;predefined&quot;,&quot;space&quot;:&quot;small&quot;,&quot;slider_loop&quot;:&quot;no&quot;,&quot;slider_autoplay&quot;:&quot;no&quot;,&quot;slider_pagination&quot;:&quot;no&quot;,&quot;posts_per_page&quot;:&quot;5&quot;,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;ASC&quot;,&quot;additional_params&quot;:&quot;tax&quot;,&quot;tax&quot;:&quot;product_cat&quot;,&quot;tax_slug&quot;:&quot;computer-systems&quot;,&quot;layout&quot;:&quot;info-below&quot;,&quot;title_tag&quot;:&quot;h5&quot;,&quot;enable_category&quot;:&quot;yes&quot;,&quot;enable_banner&quot;:&quot;no&quot;,&quot;enable_compare_product&quot;:&quot;yes&quot;,&quot;enable_wishlist&quot;:&quot;yes&quot;,&quot;enable_filter&quot;:&quot;yes&quot;,&quot;pagination_type&quot;:&quot;no-pagination&quot;,&quot;filter_type&quot;:&quot;simple&quot;,&quot;category_filter_type&quot;:&quot;simple&quot;,&quot;enable_ordering_filter&quot;:&quot;no&quot;,&quot;enable_results_count&quot;:&quot;no&quot;,&quot;custom_grid&quot;:&quot;no&quot;,&quot;object_class_name&quot;:&quot;GizmosCore_Product_List_Shortcode&quot;,&quot;additional_query_args&quot;:{&quot;tax_query&quot;:[{&quot;taxonomy&quot;:&quot;product_cat&quot;,&quot;field&quot;:&quot;slug&quot;,&quot;terms&quot;:&quot;computer-systems&quot;}]},&quot;taxonomy_filter&quot;:&quot;product_cat&quot;,&quot;space_value&quot;:10}">
  <div class="qodef-m-top">
  <h3 class="qodef-m-product-list-title">Featured Products</h3>
  <div class="qodef-m-filter">
  <div class="qodef-m-filter-items">
  <a class="qodef-m-filter-item qodef--active" href="#" data-taxonomy="product_cat" data-filter="*">
  <span class="qodef-m-filter-item-name">Show All</span>
  </a>
  <a class="qodef-m-filter-item" href="#" data-taxonomy="product_cat" data-filter="chromebooks">
  <span class="qodef-m-filter-item-name">Chromebooks</span>
  </a>
  <a class="qodef-m-filter-item" href="#" data-taxonomy="product_cat" data-filter="notebooks">
  <span class="qodef-m-filter-item-name">Notebooks</span>
  </a>
  </div>
  </div>
  <svg class="qodef-svg--spinner qodef-filter-pagination-spinner" xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><path d="M304 48c0 26.51-21.49 48-48 48s-48-21.49-48-48 21.49-48 48-48 48 21.49 48 48zm-48 368c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zm208-208c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48zM96 256c0-26.51-21.49-48-48-48S0 229.49 0 256s21.49 48 48 48 48-21.49 48-48zm12.922 99.078c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.491-48-48-48zm294.156 0c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48c0-26.509-21.49-48-48-48zM108.922 60.922c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.491-48-48-48z"></path></svg> <div class="qodef-swipper-nav-wrapper">
  <div class="swiper-button-prev swiper-button-outside swiper-button-prev-2"><svg class="qodef-svg--slider-arrow-left" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="M8.70851355 17.90094068.48344748 9.6758746c-.26657926-.26657926-.16758431-.79973777.22344574-1.19076782s.92418856-.490025 1.19076782-.22344574l8.22506608 8.22506608c.26657925.26657925.1661701.80115198-.22344575 1.19076782s-.92418856.490025-1.19076782.22344574Z" /><path d="M10.12294068 1.89748645 1.8978746 10.12255252c-.26657926.26657926-.79973777.16758431-1.19076782-.22344574s-.490025-.92418856-.22344574-1.19076782L8.70872712.48327288c.26657925-.26657925.80115198-.1661701 1.19076782.22344575s.490025.92418856.22344574 1.19076782Z" /></svg></div>
  <div class="swiper-button-next swiper-button-outside swiper-button-next-2"><svg class="qodef-svg--slider-arrow-right" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="m1.89827288 17.90172712 8.22506608-8.22506608c.26657926-.26657926.1675843-.79973777-.22344574-1.19076782s-.92418856-.490025-1.19076782-.22344574L.48405932 16.48751355c-.26728636.26728637-.1661701.80115199.22344574 1.19076782s.92348146.49073211 1.19076782.22344575Z" /><path d="m.48327288 1.89827288 8.22506608 8.22506608c.26657926.26657926.79973777.1675843 1.19076782-.22344574s.490025-.92418856.22344574-1.19076782L1.89748645.48405932C1.63020008.21677296 1.09633446.31788922.70671863.70750506s-.49073211.92348146-.22344575 1.19076782Z" /></svg></div>
  </div>
  </div>
  <ul class="qodef-grid-inner swiper-wrapper clear">
  <li class="qodef-e swiper-slide qodef-item--full product type-product post-6057 status-publish instock product_cat-chromebooks product_tag-computers product_tag-equipment has-post-thumbnail shipping-taxable purchasable product-type-simple">
  <div class="qodef-e-inner">
  <a href="https://gizmos.qodeinteractive.com/product/fractal-design-s7-tempered-glass-computer-case/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a> <div class="qodef-woo-product-content-top">
  <div class="qodef-woo-product-category">
  <div class="qodef-woo-product-categories qodef-e-info"><a href="https://gizmos.qodeinteractive.com/product-category/computer-systems/chromebooks/" rel="tag">Chromebooks</a></div>
  <div class="qodef-info-separator-end"></div>
  </div>
  <div class="qodef-woo-product-compare-wishlist-wrapper">
  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-6057  wishlist-fragment on-first-load" data-fragment-ref="6057" data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:6057,&quot;parent_product_id&quot;:6057,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
  
  <div class="yith-wcwl-add-button">
  <a href="?add_to_wishlist=6057&#038;_wpnonce=6e2b03d0d3" class="add_to_wishlist single_add_to_wishlist" data-product-id="6057" data-product-type="simple" data-original-product-id="6057" data-title="" rel="nofollow">
  <i class="yith-wcwl-icon fa fa-heart-o"></i> <span></span>
  </a>
  </div>
  
  </div>
  <a href="https://gizmos.qodeinteractive.com?action=yith-woocompare-add-product&id=6057" class="compare" data-product_id="6057" rel="nofollow"></a> </div>
  </div>
  <div class="qodef-woo-product-content-middle">
  <div class="qodef-woo-product-image-wrapper">
  <div class="qodef-woo-product-image">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-80.jpg" class="attachment-full size-full wp-post-image" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-80.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-80-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-80-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-80-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-80-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-80-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-80-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="qodef-woo-product-image-slider qodef-m-custom-swiper-container">
  <div class="swiper-wrapper">
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-80.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-80.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-80-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-80-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-80-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-80-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-80-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-80-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-119.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-119.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-119-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-119-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-119-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-119-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-119-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-119-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="1000" height="1000" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-98.png" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-98.png 1000w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-98-300x300.png 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-98-150x150.png 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-98-768x768.png 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-98-650x650.png 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-98-600x600.png 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-98-100x100.png 100w" sizes="(max-width: 1000px) 100vw, 1000px" /> </div>
  <div class="swiper-slide">
  <img width="1000" height="1000" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-104.png" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-104.png 1000w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-104-300x300.png 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-104-150x150.png 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-104-768x768.png 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-104-650x650.png 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-104-600x600.png 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-104-100x100.png 100w" sizes="(max-width: 1000px) 100vw, 1000px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-49.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-49.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-49-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-49-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-49-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-49-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-49-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-49-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  </div>
  <div class="swiper-button-prev"><svg class="qodef-svg--slider-arrow-left" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="M8.70851355 17.90094068.48344748 9.6758746c-.26657926-.26657926-.16758431-.79973777.22344574-1.19076782s.92418856-.490025 1.19076782-.22344574l8.22506608 8.22506608c.26657925.26657925.1661701.80115198-.22344575 1.19076782s-.92418856.490025-1.19076782.22344574Z" /><path d="M10.12294068 1.89748645 1.8978746 10.12255252c-.26657926.26657926-.79973777.16758431-1.19076782-.22344574s-.490025-.92418856-.22344574-1.19076782L8.70872712.48327288c.26657925-.26657925.80115198-.1661701 1.19076782.22344575s.490025.92418856.22344574 1.19076782Z" /></svg></div>
  <div class="swiper-button-next"><svg class="qodef-svg--slider-arrow-right" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="m1.89827288 17.90172712 8.22506608-8.22506608c.26657926-.26657926.1675843-.79973777-.22344574-1.19076782s-.92418856-.490025-1.19076782-.22344574L.48405932 16.48751355c-.26728636.26728637-.1661701.80115199.22344574 1.19076782s.92348146.49073211 1.19076782.22344575Z" /><path d="m.48327288 1.89827288 8.22506608 8.22506608c.26657926.26657926.79973777.1675843 1.19076782-.22344574s.490025-.92418856.22344574-1.19076782L1.89748645.48405932C1.63020008.21677296 1.09633446.31788922.70671863.70750506s-.49073211.92348146-.22344575 1.19076782Z" /></svg></div>
  </div>
  </div>
  </div>
  <div class="qodef-woo-product-content-bottom">
  <div class="qodef-woo-product-info-wrapper">
  <h5 itemprop="name" class="qodef-woo-product-title entry-title">
  <a itemprop="url" class="qodef-woo-product-title-link" href="https://gizmos.qodeinteractive.com/product/fractal-design-s7-tempered-glass-computer-case/">
  Fractal Design Tempered Glass S7 Computer Case	</a>
  </h5>
  <div class="qodef-woo-product-price price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>2,790</span></div>
  </div>
  </div>
  <a href="?add-to-cart=6057" data-quantity="1" class="button wp-element-button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="6057" data-product_sku="242" aria-label="Add &ldquo;Fractal Design Tempered Glass S7 Computer Case&rdquo; to your cart" rel="nofollow">Add to cart</a> </div>
  </li>
  <li class="qodef-e swiper-slide qodef-item--full product type-product post-6087 status-publish instock product_cat-notebooks has-post-thumbnail shipping-taxable purchasable product-type-simple">
  <div class="qodef-e-inner">
  <a href="https://gizmos.qodeinteractive.com/product/sm-225088-closed-back-white-wireless-headphones/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a> <div class="qodef-woo-product-content-top">
  <div class="qodef-woo-product-category">
  <div class="qodef-woo-product-categories qodef-e-info"><a href="https://gizmos.qodeinteractive.com/product-category/computer-systems/notebooks/" rel="tag">Notebooks</a></div>
  <div class="qodef-info-separator-end"></div>
  </div>
  <div class="qodef-woo-product-compare-wishlist-wrapper">
  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-6087  wishlist-fragment on-first-load" data-fragment-ref="6087" data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:6087,&quot;parent_product_id&quot;:6087,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
  
  <div class="yith-wcwl-add-button">
  <a href="?add_to_wishlist=6087&#038;_wpnonce=6e2b03d0d3" class="add_to_wishlist single_add_to_wishlist" data-product-id="6087" data-product-type="simple" data-original-product-id="6087" data-title="" rel="nofollow">
  <i class="yith-wcwl-icon fa fa-heart-o"></i> <span></span>
  </a>
  </div>
  
  </div>
  <a href="https://gizmos.qodeinteractive.com?action=yith-woocompare-add-product&id=6087" class="compare" data-product_id="6087" rel="nofollow"></a> </div>
  </div>
  <div class="qodef-woo-product-content-middle">
  <div class="qodef-woo-product-image-wrapper">
  <div class="qodef-woo-product-image">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10.jpg" class="attachment-full size-full wp-post-image" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="qodef-woo-product-image-slider qodef-m-custom-swiper-container">
  <div class="swiper-wrapper">
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-2.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-2.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-2-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-2-100x100.jpg 100w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-2-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-2-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-2-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-2-650x650.jpg 650w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-3.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-3.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-3-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-3-100x100.jpg 100w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-3-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-3-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-3-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-3-650x650.jpg 650w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-1.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-1.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-1-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-1-100x100.jpg 100w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-1-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-1-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-1-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-1-650x650.jpg 650w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-4.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-4.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-4-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-4-100x100.jpg 100w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-4-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-4-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-4-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-10-4-650x650.jpg 650w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  </div>
  <div class="swiper-button-prev"><svg class="qodef-svg--slider-arrow-left" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="M8.70851355 17.90094068.48344748 9.6758746c-.26657926-.26657926-.16758431-.79973777.22344574-1.19076782s.92418856-.490025 1.19076782-.22344574l8.22506608 8.22506608c.26657925.26657925.1661701.80115198-.22344575 1.19076782s-.92418856.490025-1.19076782.22344574Z" /><path d="M10.12294068 1.89748645 1.8978746 10.12255252c-.26657926.26657926-.79973777.16758431-1.19076782-.22344574s-.490025-.92418856-.22344574-1.19076782L8.70872712.48327288c.26657925-.26657925.80115198-.1661701 1.19076782.22344575s.490025.92418856.22344574 1.19076782Z" /></svg></div>
  <div class="swiper-button-next"><svg class="qodef-svg--slider-arrow-right" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="m1.89827288 17.90172712 8.22506608-8.22506608c.26657926-.26657926.1675843-.79973777-.22344574-1.19076782s-.92418856-.490025-1.19076782-.22344574L.48405932 16.48751355c-.26728636.26728637-.1661701.80115199.22344574 1.19076782s.92348146.49073211 1.19076782.22344575Z" /><path d="m.48327288 1.89827288 8.22506608 8.22506608c.26657926.26657926.79973777.1675843 1.19076782-.22344574s.490025-.92418856.22344574-1.19076782L1.89748645.48405932C1.63020008.21677296 1.09633446.31788922.70671863.70750506s-.49073211.92348146-.22344575 1.19076782Z" /></svg></div>
  </div>
  </div>
  </div>
  <div class="qodef-woo-product-content-bottom">
  <div class="qodef-woo-product-info-wrapper">
  <h5 itemprop="name" class="qodef-woo-product-title entry-title">
  <a itemprop="url" class="qodef-woo-product-title-link" href="https://gizmos.qodeinteractive.com/product/sm-225088-closed-back-white-wireless-headphones/">
  SM-225088 Closed-Back White Wireless Headphones	</a>
  </h5>
  <div class="qodef-woo-product-price price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>590</span></div>
  </div>
  </div>
  <a href="?add-to-cart=6087" data-quantity="1" class="button wp-element-button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="6087" data-product_sku="243" aria-label="Add &ldquo;SM-225088 Closed-Back White Wireless Headphones&rdquo; to your cart" rel="nofollow">Add to cart</a> </div>
  </li>
  <li class="qodef-e swiper-slide qodef-item--full product type-product post-6093 status-publish last outofstock product_cat-notebooks product_tag-usb product_tag-wireless has-post-thumbnail shipping-taxable purchasable product-type-simple">
  <div class="qodef-e-inner">
  <a href="https://gizmos.qodeinteractive.com/product/bw-235700-closed-back-wireless-headphones/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a> <div class="qodef-woo-product-content-top">
  <div class="qodef-woo-product-category">
  <div class="qodef-woo-product-categories qodef-e-info"><a href="https://gizmos.qodeinteractive.com/product-category/computer-systems/notebooks/" rel="tag">Notebooks</a></div>
  <div class="qodef-info-separator-end"></div>
  </div>
  <div class="qodef-woo-product-compare-wishlist-wrapper">
  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-6093  wishlist-fragment on-first-load" data-fragment-ref="6093" data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:6093,&quot;parent_product_id&quot;:6093,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
  
  <div class="yith-wcwl-add-button">
  <a href="?add_to_wishlist=6093&#038;_wpnonce=6e2b03d0d3" class="add_to_wishlist single_add_to_wishlist" data-product-id="6093" data-product-type="simple" data-original-product-id="6093" data-title="" rel="nofollow">
  <i class="yith-wcwl-icon fa fa-heart-o"></i> <span></span>
  </a>
  </div>
  
  </div>
  <a href="https://gizmos.qodeinteractive.com?action=yith-woocompare-add-product&id=6093" class="compare" data-product_id="6093" rel="nofollow"></a> </div>
  </div>
  <div class="qodef-woo-product-content-middle">
  <div class="qodef-woo-product-image-wrapper">
  <div class="qodef-woo-product-image">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9.jpg" class="attachment-full size-full wp-post-image" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="qodef-woo-product-image-slider qodef-m-custom-swiper-container">
  <div class="swiper-wrapper">
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-4.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-4.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-4-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-4-100x100.jpg 100w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-4-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-4-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-4-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-4-650x650.jpg 650w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-1.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-1.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-1-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-1-100x100.jpg 100w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-1-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-1-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-1-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-1-650x650.jpg 650w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-2.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-2.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-2-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-2-100x100.jpg 100w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-2-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-2-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-2-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-2-650x650.jpg 650w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-3.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-3.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-3-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-3-100x100.jpg 100w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-3-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-3-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-3-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-9-3-650x650.jpg 650w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  </div>
  <div class="swiper-button-prev"><svg class="qodef-svg--slider-arrow-left" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="M8.70851355 17.90094068.48344748 9.6758746c-.26657926-.26657926-.16758431-.79973777.22344574-1.19076782s.92418856-.490025 1.19076782-.22344574l8.22506608 8.22506608c.26657925.26657925.1661701.80115198-.22344575 1.19076782s-.92418856.490025-1.19076782.22344574Z" /><path d="M10.12294068 1.89748645 1.8978746 10.12255252c-.26657926.26657926-.79973777.16758431-1.19076782-.22344574s-.490025-.92418856-.22344574-1.19076782L8.70872712.48327288c.26657925-.26657925.80115198-.1661701 1.19076782.22344575s.490025.92418856.22344574 1.19076782Z" /></svg></div>
  <div class="swiper-button-next"><svg class="qodef-svg--slider-arrow-right" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="m1.89827288 17.90172712 8.22506608-8.22506608c.26657926-.26657926.1675843-.79973777-.22344574-1.19076782s-.92418856-.490025-1.19076782-.22344574L.48405932 16.48751355c-.26728636.26728637-.1661701.80115199.22344574 1.19076782s.92348146.49073211 1.19076782.22344575Z" /><path d="m.48327288 1.89827288 8.22506608 8.22506608c.26657926.26657926.79973777.1675843 1.19076782-.22344574s.490025-.92418856.22344574-1.19076782L1.89748645.48405932C1.63020008.21677296 1.09633446.31788922.70671863.70750506s-.49073211.92348146-.22344575 1.19076782Z" /></svg></div>
  </div>
  </div>
  </div>
  <div class="qodef-woo-product-content-bottom">
  <div class="qodef-woo-product-info-wrapper">
   <span class="qodef-woo-product-mark qodef-out-of-stock">Sold</span> <h5 itemprop="name" class="qodef-woo-product-title entry-title">
  <a itemprop="url" class="qodef-woo-product-title-link" href="https://gizmos.qodeinteractive.com/product/bw-235700-closed-back-wireless-headphones/">
  BW-235700 Closed-Back Wireless Headphones	</a>
  </h5>
  <div class="qodef-woo-product-price price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>700</span></div>
  </div>
  </div>
  <a href="https://gizmos.qodeinteractive.com/product/bw-235700-closed-back-wireless-headphones/" data-quantity="1" class="button wp-element-button product_type_simple" data-product_id="6093" data-product_sku="244" aria-label="Read more about &ldquo;BW-235700 Closed-Back Wireless Headphones&rdquo;" rel="nofollow">Read more</a> </div>
  </li>
  <li class="qodef-e swiper-slide qodef-item--full product type-product post-6098 status-publish first instock product_cat-chromebooks has-post-thumbnail shipping-taxable purchasable product-type-simple">
  <div class="qodef-e-inner">
  <a href="https://gizmos.qodeinteractive.com/product/air-purifier-mika-clean-basic-659566-white/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a> <div class="qodef-woo-product-content-top">
  <div class="qodef-woo-product-category">
  <div class="qodef-woo-product-categories qodef-e-info"><a href="https://gizmos.qodeinteractive.com/product-category/computer-systems/chromebooks/" rel="tag">Chromebooks</a></div>
  <div class="qodef-info-separator-end"></div>
  </div>
  <div class="qodef-woo-product-compare-wishlist-wrapper">
  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-6098  wishlist-fragment on-first-load" data-fragment-ref="6098" data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:6098,&quot;parent_product_id&quot;:6098,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
  
  <div class="yith-wcwl-add-button">
  <a href="?add_to_wishlist=6098&#038;_wpnonce=6e2b03d0d3" class="add_to_wishlist single_add_to_wishlist" data-product-id="6098" data-product-type="simple" data-original-product-id="6098" data-title="" rel="nofollow">
  <i class="yith-wcwl-icon fa fa-heart-o"></i> <span></span>
  </a>
  </div>
  
  </div>
  <a href="https://gizmos.qodeinteractive.com?action=yith-woocompare-add-product&id=6098" class="compare" data-product_id="6098" rel="nofollow"></a> </div>
  </div>
  <div class="qodef-woo-product-content-middle">
  <div class="qodef-woo-product-image-wrapper">
  <div class="qodef-woo-product-image">
  <img width="1000" height="1000" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-60.jpg" class="attachment-full size-full wp-post-image" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-60.jpg 1000w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-60-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-60-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-60-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-60-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-60-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-60-100x100.jpg 100w" sizes="(max-width: 1000px) 100vw, 1000px" /> </div>
  <div class="qodef-woo-product-image-slider qodef-m-custom-swiper-container">
  <div class="swiper-wrapper">
  <div class="swiper-slide">
  <img width="1000" height="1000" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-60.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-60.jpg 1000w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-60-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-60-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-60-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-60-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-60-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-60-100x100.jpg 100w" sizes="(max-width: 1000px) 100vw, 1000px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-1.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-1.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-1-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-1-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-1-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-1-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-1-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-1-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-2.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-2.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-2-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-2-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-2-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-2-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-2-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-2-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-3.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-3.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-3-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-3-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-3-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-3-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-3-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-3-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-4.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-4.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-4-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-4-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-4-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-4-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-4-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-13-4-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  </div>
  <div class="swiper-button-prev"><svg class="qodef-svg--slider-arrow-left" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="M8.70851355 17.90094068.48344748 9.6758746c-.26657926-.26657926-.16758431-.79973777.22344574-1.19076782s.92418856-.490025 1.19076782-.22344574l8.22506608 8.22506608c.26657925.26657925.1661701.80115198-.22344575 1.19076782s-.92418856.490025-1.19076782.22344574Z" /><path d="M10.12294068 1.89748645 1.8978746 10.12255252c-.26657926.26657926-.79973777.16758431-1.19076782-.22344574s-.490025-.92418856-.22344574-1.19076782L8.70872712.48327288c.26657925-.26657925.80115198-.1661701 1.19076782.22344575s.490025.92418856.22344574 1.19076782Z" /></svg></div>
  <div class="swiper-button-next"><svg class="qodef-svg--slider-arrow-right" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="m1.89827288 17.90172712 8.22506608-8.22506608c.26657926-.26657926.1675843-.79973777-.22344574-1.19076782s-.92418856-.490025-1.19076782-.22344574L.48405932 16.48751355c-.26728636.26728637-.1661701.80115199.22344574 1.19076782s.92348146.49073211 1.19076782.22344575Z" /><path d="m.48327288 1.89827288 8.22506608 8.22506608c.26657926.26657926.79973777.1675843 1.19076782-.22344574s.490025-.92418856.22344574-1.19076782L1.89748645.48405932C1.63020008.21677296 1.09633446.31788922.70671863.70750506s-.49073211.92348146-.22344575 1.19076782Z" /></svg></div>
  </div>
  </div>
  </div>
  <div class="qodef-woo-product-content-bottom">
  <div class="qodef-woo-product-info-wrapper">
  <h5 itemprop="name" class="qodef-woo-product-title entry-title">
  <a itemprop="url" class="qodef-woo-product-title-link" href="https://gizmos.qodeinteractive.com/product/air-purifier-mika-clean-basic-659566-white/">
  Air Purifier Mika Clean Basic-659566 White	</a>
  </h5>
  <div class="qodef-woo-product-price price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>1,390</span></div>
  </div>
  </div>
  <a href="?add-to-cart=6098" data-quantity="1" class="button wp-element-button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="6098" data-product_sku="245" aria-label="Add &ldquo;Air Purifier Mika Clean Basic-659566 White&rdquo; to your cart" rel="nofollow">Add to cart</a> </div>
  </li>
  <li class="qodef-e swiper-slide qodef-item--full product type-product post-6103 status-publish instock product_cat-chromebooks has-post-thumbnail shipping-taxable purchasable product-type-simple">
  <div class="qodef-e-inner">
  <a href="https://gizmos.qodeinteractive.com/product/wireless-bluetooth-speaker-gs-997-multiple-colors/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a> <div class="qodef-woo-product-content-top">
  <div class="qodef-woo-product-category">
  <div class="qodef-woo-product-categories qodef-e-info"><a href="https://gizmos.qodeinteractive.com/product-category/computer-systems/chromebooks/" rel="tag">Chromebooks</a></div>
  <div class="qodef-info-separator-end"></div>
  </div>
  <div class="qodef-woo-product-compare-wishlist-wrapper">
  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-6103  wishlist-fragment on-first-load" data-fragment-ref="6103" data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:6103,&quot;parent_product_id&quot;:6103,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
  
  <div class="yith-wcwl-add-button">
  <a href="?add_to_wishlist=6103&#038;_wpnonce=6e2b03d0d3" class="add_to_wishlist single_add_to_wishlist" data-product-id="6103" data-product-type="simple" data-original-product-id="6103" data-title="" rel="nofollow">
  <i class="yith-wcwl-icon fa fa-heart-o"></i> <span></span>
  </a>
  </div>
  
  </div>
  <a href="https://gizmos.qodeinteractive.com?action=yith-woocompare-add-product&id=6103" class="compare" data-product_id="6103" rel="nofollow"></a> </div>
  </div>
  <div class="qodef-woo-product-content-middle">
  <div class="qodef-woo-product-image-wrapper">
  <div class="qodef-woo-product-image">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15.jpg" class="attachment-full size-full wp-post-image" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="qodef-woo-product-image-slider qodef-m-custom-swiper-container">
  <div class="swiper-wrapper">
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-4.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-4.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-4-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-4-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-4-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-4-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-4-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-4-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-1.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-1.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-1-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-1-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-1-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-1-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-1-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-1-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-2.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-2.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-2-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-2-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-2-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-2-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-2-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-2-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-3.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-3.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-3-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-3-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-3-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-3-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-3-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-15-3-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  </div>
  <div class="swiper-button-prev"><svg class="qodef-svg--slider-arrow-left" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="M8.70851355 17.90094068.48344748 9.6758746c-.26657926-.26657926-.16758431-.79973777.22344574-1.19076782s.92418856-.490025 1.19076782-.22344574l8.22506608 8.22506608c.26657925.26657925.1661701.80115198-.22344575 1.19076782s-.92418856.490025-1.19076782.22344574Z" /><path d="M10.12294068 1.89748645 1.8978746 10.12255252c-.26657926.26657926-.79973777.16758431-1.19076782-.22344574s-.490025-.92418856-.22344574-1.19076782L8.70872712.48327288c.26657925-.26657925.80115198-.1661701 1.19076782.22344575s.490025.92418856.22344574 1.19076782Z" /></svg></div>
  <div class="swiper-button-next"><svg class="qodef-svg--slider-arrow-right" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="m1.89827288 17.90172712 8.22506608-8.22506608c.26657926-.26657926.1675843-.79973777-.22344574-1.19076782s-.92418856-.490025-1.19076782-.22344574L.48405932 16.48751355c-.26728636.26728637-.1661701.80115199.22344574 1.19076782s.92348146.49073211 1.19076782.22344575Z" /><path d="m.48327288 1.89827288 8.22506608 8.22506608c.26657926.26657926.79973777.1675843 1.19076782-.22344574s.490025-.92418856.22344574-1.19076782L1.89748645.48405932C1.63020008.21677296 1.09633446.31788922.70671863.70750506s-.49073211.92348146-.22344575 1.19076782Z" /></svg></div>
  </div>
  </div>
  </div>
  <div class="qodef-woo-product-content-bottom">
  <div class="qodef-woo-product-info-wrapper">
  <h5 itemprop="name" class="qodef-woo-product-title entry-title">
  <a itemprop="url" class="qodef-woo-product-title-link" href="https://gizmos.qodeinteractive.com/product/wireless-bluetooth-speaker-gs-997-multiple-colors/">
  Wireless Bluetooth Speaker GS-997 Multiple Colors	</a>
  </h5>
  <div class="qodef-woo-product-price price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>500</span></div>
  </div>
  </div>
  <a href="?add-to-cart=6103" data-quantity="1" class="button wp-element-button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="6103" data-product_sku="246" aria-label="Add &ldquo;Wireless Bluetooth Speaker GS-997 Multiple Colors&rdquo; to your cart" rel="nofollow">Add to cart</a> </div>
  </li>
  </ul>
  </div>
  </div> </div>
  </div>
  </div>
  </div>
  </div>
  </section>
  <section class="elementor-section elementor-top-section elementor-element elementor-element-5bed16b elementor-section-full_width elementor-section-height-default elementor-section-height-default qodef-elementor-content-no" data-id="5bed16b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
  <div class="elementor-container elementor-column-gap-no">
  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-afc54d8" data-id="afc54d8" data-element_type="column">
  <div class="elementor-widget-wrap elementor-element-populated">
  <div class="elementor-element elementor-element-bc916fc elementor-widget elementor-widget-slider_revolution" data-id="bc916fc" data-element_type="widget" data-widget_type="slider_revolution.default">
  <div class="elementor-widget-container">
  <div class="wp-block-themepunch-revslider">
  <p class="rs-p-wp-fix"></p>
  <rs-module-wrap id="rev_slider_19_2_wrapper" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
  <rs-module id="rev_slider_19_2" style="" data-version="6.6.5">
  <rs-slides style="overflow: hidden; position: absolute;">
  <rs-slide style="position: absolute;" data-key="rs-41" data-title="Slide" data-thumb="//gizmos.qodeinteractive.com/wp-content/uploads/2022/10/home-8-rev-bg-img-1-50x100.jpg" data-anim="adpr:false;" data-in="o:0;" data-out="a:false;">
  <img decoding="async" src="//gizmos.qodeinteractive.com/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="w" title="home-8-rev-bg-img-1" width="1920" height="500" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="//gizmos.qodeinteractive.com/wp-content/uploads/2022/10/home-8-rev-bg-img-1.jpg" data-no-retina>
  <rs-group id="slider-19-slide-41-layer-1" data-type="group" data-xy="x:c;xo:-470px,-320px,0,0;y:m,m,t,t;yo:12px,12px,65px,60px;" data-text="w:normal;" data-dim="w:460px,460px,86%,86%;h:200px,200px,200px,245px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="o:1;" data-frame_999="o:0;st:w;sA:2500;" style="z-index:13;"><rs-layer id="slider-19-slide-41-layer-0" data-type="text" data-xy="" data-pos="a" data-text="w:normal;s:46,46,46,42;l:52,52,52,48;fw:500;" data-dim="w:460px,460px,100%,100%;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="x:50;" data-frame_1="st:100;sp:1000;" data-frame_999="o:0;st:w;" style="z-index:12;font-family:'Roboto';">Gaming Consoles
  </rs-layer><rs-layer id="slider-19-slide-41-layer-2" data-type="text" data-color="#acacac" data-xy="yo:62px,62px,62px,106px;" data-pos="a" data-text="w:normal;s:16;l:19;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="x:50;" data-frame_1="st:150;sp:1000;" data-frame_999="o:0;st:w;" style="z-index:11;font-family:'Roboto';text-transform:uppercase;">asus CX70 2QF-621XPL 13"
  </rs-layer><rs-layer id="slider-19-slide-41-layer-3" data-type="text" data-color="#acacac" data-xy="yo:114px,114px,114px,158px;" data-pos="a" data-text="w:normal;s:11;l:15;ls:1px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="x:50;" data-frame_1="st:250;sp:1000;" data-frame_999="o:0;st:w;" style="z-index:10;font-family:'Roboto';text-transform:uppercase;">starting at
  </rs-layer><rs-layer id="slider-19-slide-41-layer-4" data-type="text" data-xy="yo:130px,130px,130px,174px;" data-pos="a" data-text="w:normal;s:41;l:49;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="x:50;" data-frame_1="st:250;sp:1000;" data-frame_999="o:0;st:w;" style="z-index:9;font-family:'Roboto';">$1.250
  </rs-layer></rs-group><rs-layer id="slider-19-slide-41-layer-5" data-type="image" data-xy="x:c;xo:215px,193px,125px,0;y:m,m,m,b;yo:24px,41px,77px,0;" data-text="w:normal;" data-dim="w:969px,750px,600px,350px;h:452px,350px,280px,163px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="y:30px;" data-frame_1="sp:1000;" data-frame_999="o:0;e:power4.inOut;st:w;sp:1000;" style="z-index:8;"><img decoding="async" src="//gizmos.qodeinteractive.com/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="w" class="tp-rs-img rs-lazyload" width="969" height="452" data-lazyload="//gizmos.qodeinteractive.com/wp-content/uploads/2022/10/home-8-rev-img-2.png" data-no-retina>
  </rs-layer> </rs-slide>
  <rs-slide style="position: absolute;" data-key="rs-70" data-title="Slide" data-thumb="//gizmos.qodeinteractive.com/wp-content/uploads/2022/10/home-8-rev-bg-img-1-50x100.jpg" data-anim="adpr:false;" data-in="o:0;" data-out="a:false;">
  <img decoding="async" src="//gizmos.qodeinteractive.com/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="w" title="home-8-rev-bg-img-1" width="1920" height="500" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="//gizmos.qodeinteractive.com/wp-content/uploads/2022/10/home-8-rev-bg-img-1.jpg" data-no-retina>
  <rs-group id="slider-19-slide-70-layer-1" data-type="group" data-xy="x:c;xo:-470px,-320px,0,0;y:m,m,t,t;yo:12px,12px,65px,60px;" data-text="w:normal;" data-dim="w:460px,460px,86%,86%;h:200px,200px,200px,245px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="o:1;" data-frame_999="o:0;st:w;sA:2500;" style="z-index:7;"><rs-layer id="slider-19-slide-70-layer-0" data-type="text" data-xy="" data-pos="a" data-text="w:normal;s:46,46,46,42;l:52,52,52,48;fw:500;" data-dim="w:460px,460px,100%,100%;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="x:50;" data-frame_1="st:100;sp:1000;" data-frame_999="o:0;st:w;" style="z-index:9;font-family:'Roboto';">Vacuum Cleaners
  </rs-layer><rs-layer id="slider-19-slide-70-layer-2" data-type="text" data-color="#acacac" data-xy="yo:62px,62px,62px,106px;" data-pos="a" data-text="w:normal;s:16;l:19;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="x:50;" data-frame_1="st:150;sp:1000;" data-frame_999="o:0;st:w;" style="z-index:8;font-family:'Roboto';text-transform:uppercase;">Clenso 2QF-621XPL 13
  </rs-layer><rs-layer id="slider-19-slide-70-layer-3" data-type="text" data-color="#acacac" data-xy="yo:114px,114px,114px,158px;" data-pos="a" data-text="w:normal;s:11;l:15;ls:1px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="x:50;" data-frame_1="st:250;sp:1000;" data-frame_999="o:0;st:w;" style="z-index:7;font-family:'Roboto';text-transform:uppercase;">starting at
  </rs-layer><rs-layer id="slider-19-slide-70-layer-4" data-type="text" data-xy="yo:130px,130px,130px,174px;" data-pos="a" data-text="w:normal;s:41;l:49;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="x:50;" data-frame_1="st:250;sp:1000;" data-frame_999="o:0;st:w;" style="z-index:6;font-family:'Roboto';">$1.650
  </rs-layer></rs-group><rs-layer id="slider-19-slide-70-layer-6" data-type="image" data-xy="x:c;xo:0,0,20px,-66px;y:m,m,b,b;yo:0,0,0,-6px;" data-text="w:normal;" data-dim="w:1400px,1100px,900px,650px;h:500px,393px,321px,232px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="y:30px;" data-frame_1="sp:1000;" data-frame_999="o:0;e:power4.inOut;st:w;sp:1000;" style="z-index:3;"><img decoding="async" src="//gizmos.qodeinteractive.com/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="w" class="tp-rs-img rs-lazyload" width="1400" height="500" data-lazyload="//gizmos.qodeinteractive.com/wp-content/uploads/2022/10/home-8-banner-slider-photo-2.png" data-no-retina>
  </rs-layer> </rs-slide>
  <rs-slide style="position: absolute;" data-key="rs-71" data-title="Slide" data-thumb="//gizmos.qodeinteractive.com/wp-content/uploads/2022/10/home-8-rev-bg-img-1-50x100.jpg" data-anim="adpr:false;" data-in="o:0;" data-out="a:false;">
  <img decoding="async" src="//gizmos.qodeinteractive.com/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="w" title="home-8-rev-bg-img-1" width="1920" height="500" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="//gizmos.qodeinteractive.com/wp-content/uploads/2022/10/home-8-rev-bg-img-1.jpg" data-no-retina>
  <rs-group id="slider-19-slide-71-layer-1" data-type="group" data-xy="x:c;xo:-470px,-320px,0,0;y:m,m,t,t;yo:12px,12px,65px,60px;" data-text="w:normal;" data-dim="w:460px,460px,86%,86%;h:200px,200px,200px,245px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="o:1;" data-frame_999="o:0;st:w;sA:2500;" style="z-index:7;"><rs-layer id="slider-19-slide-71-layer-0" data-type="text" data-xy="" data-pos="a" data-text="w:normal;s:46,46,46,42;l:52,52,52,48;fw:500;" data-dim="w:460px,460px,100%,100%;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="x:50;" data-frame_1="st:100;sp:1000;" data-frame_999="o:0;st:w;" style="z-index:9;font-family:'Roboto';">Cameras & Lenses
  </rs-layer><rs-layer id="slider-19-slide-71-layer-2" data-type="text" data-color="#acacac" data-xy="yo:62px,62px,62px,106px;" data-pos="a" data-text="w:normal;s:16;l:19;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="x:50;" data-frame_1="st:150;sp:1000;" data-frame_999="o:0;st:w;" style="z-index:8;font-family:'Roboto';text-transform:uppercase;">Media Pro CX70 2QF-621
  </rs-layer><rs-layer id="slider-19-slide-71-layer-3" data-type="text" data-color="#acacac" data-xy="yo:114px,114px,114px,158px;" data-pos="a" data-text="w:normal;s:11;l:15;ls:1px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="x:50;" data-frame_1="st:250;sp:1000;" data-frame_999="o:0;st:w;" style="z-index:7;font-family:'Roboto';text-transform:uppercase;">starting at
  </rs-layer><rs-layer id="slider-19-slide-71-layer-4" data-type="text" data-xy="yo:130px,130px,130px,174px;" data-pos="a" data-text="w:normal;s:41;l:49;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="x:50;" data-frame_1="st:250;sp:1000;" data-frame_999="o:0;st:w;" style="z-index:6;font-family:'Roboto';">$1.950
  </rs-layer></rs-group><rs-layer id="slider-19-slide-71-layer-7" data-type="image" data-xy="x:c;xo:0,0,20px,-82px;y:m,m,b,b;" data-text="w:normal;" data-dim="w:1400px,1100px,900px,650px;h:500px,393px,321px,232px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-frame_0="y:30px;" data-frame_1="sp:1000;" data-frame_999="o:0;e:power4.inOut;st:w;sp:1000;" style="z-index:5;"><img decoding="async" src="//gizmos.qodeinteractive.com/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="w" class="tp-rs-img rs-lazyload" width="1400" height="500" data-lazyload="//gizmos.qodeinteractive.com/wp-content/uploads/2022/10/home-8-banner-slider-photo-3.png" data-no-retina>
  </rs-layer> </rs-slide>
  </rs-slides>
  </rs-module>
  <script>
            setREVStartSize({c: 'rev_slider_19_2',rl:[1920,1700,1025,680],el:[500,450,450,500],gw:[1400,1100,600,300],gh:[500,450,450,500],type:'standard',justify:'',layout:'fullwidth',mh:"0"});if (window.RS_MODULES!==undefined && window.RS_MODULES.modules!==undefined && window.RS_MODULES.modules["revslider192"]!==undefined) {window.RS_MODULES.modules["revslider192"].once = false;window.revapi19 = undefined;if (window.RS_MODULES.checkMinimal!==undefined) window.RS_MODULES.checkMinimal()}
          </script>
  </rs-module-wrap>
  
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </section>
  <section class="elementor-section elementor-top-section elementor-element elementor-element-d8e1cee elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="d8e1cee" data-element_type="section">
  <div class="elementor-container elementor-column-gap-no">
  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3d139f1" data-id="3d139f1" data-element_type="column">
  <div class="elementor-widget-wrap elementor-element-populated">
  <div class="elementor-element elementor-element-31b00da elementor-widget elementor-widget-gizmos_core_product_list" data-id="31b00da" data-element_type="widget" data-widget_type="gizmos_core_product_list.default">
  <div class="elementor-widget-container">
  <div class="qodef-e-product-list-slider-holder">
  <div class="qodef-shortcode qodef-m  qodef-woo-shortcode qodef-woo-product-list qodef-item-layout--info-on-side   qodef-category-filter-type--simple    qodef-grid qodef-swiper-container  qodef-gutter--small qodef-col-num--3 qodef-item-layout--info-on-side qodef--no-bottom-space qodef-pagination--off qodef-responsive--predefined" data-options="{&quot;slidesPerView&quot;:&quot;3&quot;,&quot;spaceBetween&quot;:20,&quot;loop&quot;:true,&quot;autoplay&quot;:true,&quot;speed&quot;:&quot;&quot;,&quot;speedAnimation&quot;:&quot;&quot;,&quot;slideAnimation&quot;:&quot;&quot;,&quot;outsideNavigation&quot;:&quot;yes&quot;,&quot;unique&quot;:&quot;3&quot;,&quot;plugin&quot;:&quot;gizmos_core&quot;,&quot;module&quot;:&quot;plugins\/woocommerce\/shortcodes&quot;,&quot;shortcode&quot;:&quot;product-list&quot;,&quot;post_type&quot;:&quot;product&quot;,&quot;next_page&quot;:&quot;2&quot;,&quot;max_pages_num&quot;:1,&quot;product_list_title&quot;:&quot;Trending Products&quot;,&quot;behavior&quot;:&quot;slider&quot;,&quot;images_proportion&quot;:&quot;full&quot;,&quot;columns&quot;:&quot;3&quot;,&quot;columns_responsive&quot;:&quot;predefined&quot;,&quot;space&quot;:&quot;small&quot;,&quot;slider_navigation&quot;:&quot;yes&quot;,&quot;slider_pagination&quot;:&quot;no&quot;,&quot;posts_per_page&quot;:&quot;4&quot;,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;ASC&quot;,&quot;additional_params&quot;:&quot;tax&quot;,&quot;tax&quot;:&quot;product_cat&quot;,&quot;tax_slug&quot;:&quot;new-arrivals&quot;,&quot;layout&quot;:&quot;info-on-side&quot;,&quot;title_tag&quot;:&quot;h5&quot;,&quot;enable_category&quot;:&quot;yes&quot;,&quot;enable_banner&quot;:&quot;no&quot;,&quot;enable_compare_product&quot;:&quot;yes&quot;,&quot;enable_wishlist&quot;:&quot;yes&quot;,&quot;enable_filter&quot;:&quot;no&quot;,&quot;pagination_type&quot;:&quot;no-pagination&quot;,&quot;category_filter_type&quot;:&quot;simple&quot;,&quot;enable_ordering_filter&quot;:&quot;no&quot;,&quot;enable_results_count&quot;:&quot;no&quot;,&quot;custom_grid&quot;:&quot;no&quot;,&quot;object_class_name&quot;:&quot;GizmosCore_Product_List_Shortcode&quot;,&quot;additional_query_args&quot;:{&quot;tax_query&quot;:[{&quot;taxonomy&quot;:&quot;product_cat&quot;,&quot;field&quot;:&quot;slug&quot;,&quot;terms&quot;:&quot;new-arrivals&quot;}]},&quot;taxonomy_filter&quot;:&quot;product_cat&quot;,&quot;space_value&quot;:10}">
  <div class="qodef-m-top">
  <h3 class="qodef-m-product-list-title">Trending Products</h3>
  <div class="qodef-swipper-nav-wrapper">
  <div class="swiper-button-prev swiper-button-outside swiper-button-prev-3"><svg class="qodef-svg--slider-arrow-left" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="M8.70851355 17.90094068.48344748 9.6758746c-.26657926-.26657926-.16758431-.79973777.22344574-1.19076782s.92418856-.490025 1.19076782-.22344574l8.22506608 8.22506608c.26657925.26657925.1661701.80115198-.22344575 1.19076782s-.92418856.490025-1.19076782.22344574Z" /><path d="M10.12294068 1.89748645 1.8978746 10.12255252c-.26657926.26657926-.79973777.16758431-1.19076782-.22344574s-.490025-.92418856-.22344574-1.19076782L8.70872712.48327288c.26657925-.26657925.80115198-.1661701 1.19076782.22344575s.490025.92418856.22344574 1.19076782Z" /></svg></div>
  <div class="swiper-button-next swiper-button-outside swiper-button-next-3"><svg class="qodef-svg--slider-arrow-right" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="m1.89827288 17.90172712 8.22506608-8.22506608c.26657926-.26657926.1675843-.79973777-.22344574-1.19076782s-.92418856-.490025-1.19076782-.22344574L.48405932 16.48751355c-.26728636.26728637-.1661701.80115199.22344574 1.19076782s.92348146.49073211 1.19076782.22344575Z" /><path d="m.48327288 1.89827288 8.22506608 8.22506608c.26657926.26657926.79973777.1675843 1.19076782-.22344574s.490025-.92418856.22344574-1.19076782L1.89748645.48405932C1.63020008.21677296 1.09633446.31788922.70671863.70750506s-.49073211.92348146-.22344575 1.19076782Z" /></svg></div>
  </div>
  </div>
  <ul class="qodef-grid-inner swiper-wrapper clear">
  <li class="qodef-e swiper-slide qodef-item--full product type-product post-5208 status-publish instock product_cat-new-arrivals has-post-thumbnail shipping-taxable purchasable product-type-simple">
  <div class="qodef-e-inner">
  <div class="qodef-woo-product-content-left">
  <div class="qodef-woo-product-image-wrapper">
  <div class="qodef-woo-product-image">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-73.jpg" class="attachment-full size-full wp-post-image" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-73.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-73-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-73-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-73-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-73-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-73-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-73-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <a href="https://gizmos.qodeinteractive.com/product/retro-gaming-console-4012-in-coal-black/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a> </div>
  </div>
  <div class="qodef-woo-product-content-right">
  <div class="qodef-woo-product-content-right-top">
  <div class="qodef-woo-product-category">
  <div class="qodef-woo-product-categories qodef-e-info"><a href="https://gizmos.qodeinteractive.com/product-category/new-arrivals/" rel="tag">New Arrivals</a></div>
  <div class="qodef-info-separator-end"></div>
  </div>
  <div class="qodef-woo-product-compare-wishlist-wrapper">
  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-5208  wishlist-fragment on-first-load" data-fragment-ref="5208" data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:5208,&quot;parent_product_id&quot;:5208,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
  
  <div class="yith-wcwl-add-button">
  <a href="?add_to_wishlist=5208&#038;_wpnonce=6e2b03d0d3" class="add_to_wishlist single_add_to_wishlist" data-product-id="5208" data-product-type="simple" data-original-product-id="5208" data-title="" rel="nofollow">
  <i class="yith-wcwl-icon fa fa-heart-o"></i> <span></span>
  </a>
  </div>
  
  </div>
  <a href="https://gizmos.qodeinteractive.com?action=yith-woocompare-add-product&id=5208" class="compare" data-product_id="5208" rel="nofollow"></a> </div>
  </div>
  <div class="qodef-woo-product-content-right-bottom">
  <h5 itemprop="name" class="qodef-woo-product-title entry-title">
  <a itemprop="url" class="qodef-woo-product-title-link" href="https://gizmos.qodeinteractive.com/product/retro-gaming-console-4012-in-coal-black/">
  Retro Gaming Console 4012 in Coal Black	</a>
  </h5>
  <div class="qodef-woo-product-price price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>290</span></div>
  </div>
  </div>
  <a href="?add-to-cart=5208" data-quantity="1" class="button wp-element-button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="5208" data-product_sku="190" aria-label="Add &ldquo;Retro Gaming Console 4012 in Coal Black&rdquo; to your cart" rel="nofollow">Add to cart</a> </div>
  </li><li class="qodef-e swiper-slide qodef-item--full sale product type-product post-5213 status-publish last instock product_cat-new-arrivals has-post-thumbnail shipping-taxable purchasable product-type-simple">
  <div class="qodef-e-inner">
  <div class="qodef-woo-product-content-left">
  <div class="qodef-woo-product-image-wrapper">
  <div class="qodef-woo-product-image">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-72.jpg" class="attachment-full size-full wp-post-image" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-72.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-72-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-72-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-72-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-72-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-72-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-72-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <a href="https://gizmos.qodeinteractive.com/product/waterproof-fitness-watch-gsps-100550/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a> </div>
  </div>
  <div class="qodef-woo-product-content-right">
  <div class="qodef-woo-product-content-right-top">
  <div class="qodef-woo-product-category">
  <div class="qodef-woo-product-categories qodef-e-info"><a href="https://gizmos.qodeinteractive.com/product-category/new-arrivals/" rel="tag">New Arrivals</a></div>
  <div class="qodef-info-separator-end"></div>
  </div>
  <div class="qodef-woo-product-compare-wishlist-wrapper">
  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-5213  wishlist-fragment on-first-load" data-fragment-ref="5213" data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:5213,&quot;parent_product_id&quot;:5213,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
  
  <div class="yith-wcwl-add-button">
  <a href="?add_to_wishlist=5213&#038;_wpnonce=6e2b03d0d3" class="add_to_wishlist single_add_to_wishlist" data-product-id="5213" data-product-type="simple" data-original-product-id="5213" data-title="" rel="nofollow">
  <i class="yith-wcwl-icon fa fa-heart-o"></i> <span></span>
  </a>
  </div>
  
  </div>
  <a href="https://gizmos.qodeinteractive.com?action=yith-woocompare-add-product&id=5213" class="compare" data-product_id="5213" rel="nofollow"></a> </div>
  <span class="qodef-woo-product-mark qodef-woo-onsale">Sale</span> </div>
  <div class="qodef-woo-product-content-right-bottom">
  <h5 itemprop="name" class="qodef-woo-product-title entry-title">
  <a itemprop="url" class="qodef-woo-product-title-link" href="https://gizmos.qodeinteractive.com/product/waterproof-fitness-watch-gsps-100550/">
  Waterproof Fitness Watch GSPS-100550	</a>
  </h5>
  <div class="qodef-woo-product-price price"><del aria-hidden="true"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>490</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>430</span></ins></div>
  </div>
  </div>
  <a href="?add-to-cart=5213" data-quantity="1" class="button wp-element-button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="5213" data-product_sku="191" aria-label="Add &ldquo;Waterproof Fitness Watch GSPS-100550&rdquo; to your cart" rel="nofollow">Add to cart</a> </div>
  </li><li class="qodef-e swiper-slide qodef-item--full product type-product post-5218 status-publish first instock product_cat-new-arrivals has-post-thumbnail shipping-taxable purchasable product-type-simple">
  <div class="qodef-e-inner">
  <div class="qodef-woo-product-content-left">
  <div class="qodef-woo-product-image-wrapper">
  <div class="qodef-woo-product-image">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-74.jpg" class="attachment-full size-full wp-post-image" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-74.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-74-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-74-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-74-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-74-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-74-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-74-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <a href="https://gizmos.qodeinteractive.com/product/4k-monitor-red-black-expo-sdm-6671/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a> </div>
  </div>
  <div class="qodef-woo-product-content-right">
  <div class="qodef-woo-product-content-right-top">
  <div class="qodef-woo-product-category">
  <div class="qodef-woo-product-categories qodef-e-info"><a href="https://gizmos.qodeinteractive.com/product-category/new-arrivals/" rel="tag">New Arrivals</a></div>
  <div class="qodef-info-separator-end"></div>
  </div>
  <div class="qodef-woo-product-compare-wishlist-wrapper">
  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-5218  wishlist-fragment on-first-load" data-fragment-ref="5218" data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:5218,&quot;parent_product_id&quot;:5218,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
  
  <div class="yith-wcwl-add-button">
  <a href="?add_to_wishlist=5218&#038;_wpnonce=6e2b03d0d3" class="add_to_wishlist single_add_to_wishlist" data-product-id="5218" data-product-type="simple" data-original-product-id="5218" data-title="" rel="nofollow">
  <i class="yith-wcwl-icon fa fa-heart-o"></i> <span></span>
  </a>
  </div>
  
  </div>
  <a href="https://gizmos.qodeinteractive.com?action=yith-woocompare-add-product&id=5218" class="compare" data-product_id="5218" rel="nofollow"></a> </div>
  </div>
  <div class="qodef-woo-product-content-right-bottom">
  <h5 itemprop="name" class="qodef-woo-product-title entry-title">
  <a itemprop="url" class="qodef-woo-product-title-link" href="https://gizmos.qodeinteractive.com/product/4k-monitor-red-black-expo-sdm-6671/">
  4K Monitor Red and Black Expo SDM-6671	</a>
  </h5>
  <div class="qodef-woo-product-price price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>1,490</span></div>
  </div>
  </div>
  <a href="?add-to-cart=5218" data-quantity="1" class="button wp-element-button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="5218" data-product_sku="192" aria-label="Add &ldquo;4K Monitor Red and Black Expo SDM-6671&rdquo; to your cart" rel="nofollow">Add to cart</a> </div>
  </li> </ul>
  </div>
  </div> </div>
  </div>
  </div>
  </div>
  </div>
  </section>
  <section class="elementor-section elementor-top-section elementor-element elementor-element-6a26395 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="6a26395" data-element_type="section">
  <div class="elementor-container elementor-column-gap-no">
  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4120cc2" data-id="4120cc2" data-element_type="column">
  <div class="elementor-widget-wrap elementor-element-populated">
  <div class="elementor-element elementor-element-118dde7 elementor-widget elementor-widget-gizmos_core_product_list" data-id="118dde7" data-element_type="widget" data-widget_type="gizmos_core_product_list.default">
  <div class="elementor-widget-container">
  <div class="qodef-shortcode qodef-m  qodef-woo-shortcode qodef-woo-product-list qodef-item-layout--info-below   qodef-category-filter-type--simple    qodef-grid qodef-layout--columns  qodef-gutter--small qodef-col-num--4 qodef-item-layout--info-below qodef--no-bottom-space qodef-pagination--off qodef-responsive--custom qodef-col-num--1440--4 qodef-col-num--1366--4 qodef-col-num--1024--2 qodef-col-num--768--2 qodef-col-num--680--1 qodef-col-num--480--1" data-options="{&quot;plugin&quot;:&quot;gizmos_core&quot;,&quot;module&quot;:&quot;plugins\/woocommerce\/shortcodes&quot;,&quot;shortcode&quot;:&quot;product-list&quot;,&quot;post_type&quot;:&quot;product&quot;,&quot;next_page&quot;:&quot;2&quot;,&quot;max_pages_num&quot;:1,&quot;product_list_title&quot;:&quot;Featured Products&quot;,&quot;behavior&quot;:&quot;columns&quot;,&quot;images_proportion&quot;:&quot;full&quot;,&quot;columns&quot;:&quot;4&quot;,&quot;columns_responsive&quot;:&quot;custom&quot;,&quot;columns_1440&quot;:&quot;4&quot;,&quot;columns_1366&quot;:&quot;4&quot;,&quot;columns_1024&quot;:&quot;2&quot;,&quot;columns_768&quot;:&quot;2&quot;,&quot;columns_680&quot;:&quot;1&quot;,&quot;columns_480&quot;:&quot;1&quot;,&quot;space&quot;:&quot;small&quot;,&quot;posts_per_page&quot;:&quot;4&quot;,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;ASC&quot;,&quot;additional_params&quot;:&quot;tax&quot;,&quot;tax&quot;:&quot;product_cat&quot;,&quot;tax_slug&quot;:&quot;software&quot;,&quot;layout&quot;:&quot;info-below&quot;,&quot;title_tag&quot;:&quot;h5&quot;,&quot;enable_category&quot;:&quot;yes&quot;,&quot;enable_banner&quot;:&quot;no&quot;,&quot;enable_compare_product&quot;:&quot;yes&quot;,&quot;enable_wishlist&quot;:&quot;yes&quot;,&quot;enable_filter&quot;:&quot;no&quot;,&quot;pagination_type&quot;:&quot;no-pagination&quot;,&quot;category_filter_type&quot;:&quot;simple&quot;,&quot;enable_ordering_filter&quot;:&quot;no&quot;,&quot;enable_results_count&quot;:&quot;no&quot;,&quot;object_class_name&quot;:&quot;GizmosCore_Product_List_Shortcode&quot;,&quot;additional_query_args&quot;:{&quot;tax_query&quot;:[{&quot;taxonomy&quot;:&quot;product_cat&quot;,&quot;field&quot;:&quot;slug&quot;,&quot;terms&quot;:&quot;software&quot;}]},&quot;taxonomy_filter&quot;:&quot;product_cat&quot;,&quot;unique&quot;:&quot;4&quot;,&quot;space_value&quot;:10}">
  <div class="qodef-m-top">
  <h3 class="qodef-m-product-list-title">Featured Products</h3>
  </div>
  <ul class="qodef-grid-inner clear">
  <li class="qodef-e qodef-grid-item qodef-item--full product type-product post-5914 status-publish instock product_cat-software has-post-thumbnail shipping-taxable purchasable product-type-simple">
  <div class="qodef-e-inner">
  <a href="https://gizmos.qodeinteractive.com/product/led-4k-smart-tv-expo-gsx-878-white-black-grey/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a> <div class="qodef-woo-product-content-top">
  <div class="qodef-woo-product-category">
  <div class="qodef-woo-product-categories qodef-e-info"><a href="https://gizmos.qodeinteractive.com/product-category/computers-tablets/software/" rel="tag">Software</a></div>
  <div class="qodef-info-separator-end"></div>
  </div>
  <div class="qodef-woo-product-compare-wishlist-wrapper">
  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-5914  wishlist-fragment on-first-load" data-fragment-ref="5914" data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:5914,&quot;parent_product_id&quot;:5914,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
  
  <div class="yith-wcwl-add-button">
  <a href="?add_to_wishlist=5914&#038;_wpnonce=6e2b03d0d3" class="add_to_wishlist single_add_to_wishlist" data-product-id="5914" data-product-type="simple" data-original-product-id="5914" data-title="" rel="nofollow">
  <i class="yith-wcwl-icon fa fa-heart-o"></i> <span></span>
  </a>
  </div>
  
  </div>
  <a href="https://gizmos.qodeinteractive.com?action=yith-woocompare-add-product&id=5914" class="compare" data-product_id="5914" rel="nofollow"></a> </div>
  </div>
  <div class="qodef-woo-product-content-middle">
  <div class="qodef-woo-product-image-wrapper">
  <div class="qodef-woo-product-image">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-79.jpg" class="attachment-full size-full wp-post-image" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-79.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-79-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-79-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-79-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-79-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-79-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-79-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="qodef-woo-product-image-slider qodef-m-custom-swiper-container">
  <div class="swiper-wrapper">
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-79.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-79.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-79-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-79-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-79-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-79-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-79-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-79-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6-3.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6-3.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6-3-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6-3-100x100.jpg 100w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6-3-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6-3-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6-3-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6-3-650x650.jpg 650w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6-1.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6-1.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6-1-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6-1-100x100.jpg 100w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6-1-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6-1-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6-1-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6-1-650x650.jpg 650w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6-4.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6-4.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6-4-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6-4-100x100.jpg 100w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6-4-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6-4-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6-4-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-6-4-650x650.jpg 650w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  </div>
  <div class="swiper-button-prev"><svg class="qodef-svg--slider-arrow-left" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="M8.70851355 17.90094068.48344748 9.6758746c-.26657926-.26657926-.16758431-.79973777.22344574-1.19076782s.92418856-.490025 1.19076782-.22344574l8.22506608 8.22506608c.26657925.26657925.1661701.80115198-.22344575 1.19076782s-.92418856.490025-1.19076782.22344574Z" /><path d="M10.12294068 1.89748645 1.8978746 10.12255252c-.26657926.26657926-.79973777.16758431-1.19076782-.22344574s-.490025-.92418856-.22344574-1.19076782L8.70872712.48327288c.26657925-.26657925.80115198-.1661701 1.19076782.22344575s.490025.92418856.22344574 1.19076782Z" /></svg></div>
  <div class="swiper-button-next"><svg class="qodef-svg--slider-arrow-right" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="m1.89827288 17.90172712 8.22506608-8.22506608c.26657926-.26657926.1675843-.79973777-.22344574-1.19076782s-.92418856-.490025-1.19076782-.22344574L.48405932 16.48751355c-.26728636.26728637-.1661701.80115199.22344574 1.19076782s.92348146.49073211 1.19076782.22344575Z" /><path d="m.48327288 1.89827288 8.22506608 8.22506608c.26657926.26657926.79973777.1675843 1.19076782-.22344574s.490025-.92418856.22344574-1.19076782L1.89748645.48405932C1.63020008.21677296 1.09633446.31788922.70671863.70750506s-.49073211.92348146-.22344575 1.19076782Z" /></svg></div>
  </div>
  </div>
  </div>
  <div class="qodef-woo-product-content-bottom">
  <div class="qodef-woo-product-info-wrapper">
  <h5 itemprop="name" class="qodef-woo-product-title entry-title">
  <a itemprop="url" class="qodef-woo-product-title-link" href="https://gizmos.qodeinteractive.com/product/led-4k-smart-tv-expo-gsx-878-white-black-grey/">
  Led 4K Smart TV Expo GSX-878 White/Black/Grey	</a>
  </h5>
  <div class="qodef-woo-product-price price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>1,590</span></div>
  </div>
  </div>
  <a href="?add-to-cart=5914" data-quantity="1" class="button wp-element-button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="5914" data-product_sku="226" aria-label="Add &ldquo;Led 4K Smart TV Expo GSX-878 White/Black/Grey&rdquo; to your cart" rel="nofollow">Add to cart</a> </div>
  </li>
  <li class="qodef-e qodef-grid-item qodef-item--full product type-product post-5936 status-publish instock product_cat-software has-post-thumbnail shipping-taxable purchasable product-type-simple">
  <div class="qodef-e-inner">
  <a href="https://gizmos.qodeinteractive.com/product/electric-scooter-prisma-superior-zy-695471/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a> <div class="qodef-woo-product-content-top">
  <div class="qodef-woo-product-category">
  <div class="qodef-woo-product-categories qodef-e-info"><a href="https://gizmos.qodeinteractive.com/product-category/computers-tablets/software/" rel="tag">Software</a></div>
  <div class="qodef-info-separator-end"></div>
  </div>
  <div class="qodef-woo-product-compare-wishlist-wrapper">
  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-5936  wishlist-fragment on-first-load" data-fragment-ref="5936" data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:5936,&quot;parent_product_id&quot;:5936,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
  
  <div class="yith-wcwl-add-button">
  <a href="?add_to_wishlist=5936&#038;_wpnonce=6e2b03d0d3" class="add_to_wishlist single_add_to_wishlist" data-product-id="5936" data-product-type="simple" data-original-product-id="5936" data-title="" rel="nofollow">
  <i class="yith-wcwl-icon fa fa-heart-o"></i> <span></span>
  </a>
  </div>
  
  </div>
  <a href="https://gizmos.qodeinteractive.com?action=yith-woocompare-add-product&id=5936" class="compare" data-product_id="5936" rel="nofollow"></a> </div>
  </div>
  <div class="qodef-woo-product-content-middle">
  <div class="qodef-woo-product-image-wrapper">
  <div class="qodef-woo-product-image">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2.jpg" class="attachment-full size-full wp-post-image" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="qodef-woo-product-image-slider qodef-m-custom-swiper-container">
  <div class="swiper-wrapper">
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-4.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-4.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-4-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-4-100x100.jpg 100w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-4-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-4-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-4-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-4-650x650.jpg 650w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-3.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-3.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-3-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-3-100x100.jpg 100w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-3-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-3-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-3-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-3-650x650.jpg 650w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-1.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-1.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-1-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-1-100x100.jpg 100w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-1-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-1-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-1-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-1-650x650.jpg 650w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-2.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-2.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-2-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-2-100x100.jpg 100w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-2-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-2-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-2-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/shop-img-2-2-650x650.jpg 650w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  </div>
  <div class="swiper-button-prev"><svg class="qodef-svg--slider-arrow-left" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="M8.70851355 17.90094068.48344748 9.6758746c-.26657926-.26657926-.16758431-.79973777.22344574-1.19076782s.92418856-.490025 1.19076782-.22344574l8.22506608 8.22506608c.26657925.26657925.1661701.80115198-.22344575 1.19076782s-.92418856.490025-1.19076782.22344574Z" /><path d="M10.12294068 1.89748645 1.8978746 10.12255252c-.26657926.26657926-.79973777.16758431-1.19076782-.22344574s-.490025-.92418856-.22344574-1.19076782L8.70872712.48327288c.26657925-.26657925.80115198-.1661701 1.19076782.22344575s.490025.92418856.22344574 1.19076782Z" /></svg></div>
  <div class="swiper-button-next"><svg class="qodef-svg--slider-arrow-right" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="m1.89827288 17.90172712 8.22506608-8.22506608c.26657926-.26657926.1675843-.79973777-.22344574-1.19076782s-.92418856-.490025-1.19076782-.22344574L.48405932 16.48751355c-.26728636.26728637-.1661701.80115199.22344574 1.19076782s.92348146.49073211 1.19076782.22344575Z" /><path d="m.48327288 1.89827288 8.22506608 8.22506608c.26657926.26657926.79973777.1675843 1.19076782-.22344574s.490025-.92418856.22344574-1.19076782L1.89748645.48405932C1.63020008.21677296 1.09633446.31788922.70671863.70750506s-.49073211.92348146-.22344575 1.19076782Z" /></svg></div>
  </div>
  </div>
  </div>
  <div class="qodef-woo-product-content-bottom">
  <div class="qodef-woo-product-info-wrapper">
  <h5 itemprop="name" class="qodef-woo-product-title entry-title">
  <a itemprop="url" class="qodef-woo-product-title-link" href="https://gizmos.qodeinteractive.com/product/electric-scooter-prisma-superior-zy-695471/">
  Electric Scooter Prisma Superior ZY-695471	</a>
  </h5>
  <div class="qodef-woo-product-price price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>1,790</span></div>
  </div>
  </div>
  <a href="?add-to-cart=5936" data-quantity="1" class="button wp-element-button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="5936" data-product_sku="230" aria-label="Add &ldquo;Electric Scooter Prisma Superior ZY-695471&rdquo; to your cart" rel="nofollow">Add to cart</a> </div>
  </li>
  <li class="qodef-e qodef-grid-item qodef-item--full new product type-product post-5952 status-publish last instock product_cat-software has-post-thumbnail shipping-taxable purchasable product-type-simple">
  <div class="qodef-e-inner">
  <a href="https://gizmos.qodeinteractive.com/product/smart-watch-fitness-tracker-silver-black-rp-100/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a> <div class="qodef-woo-product-content-top">
  <div class="qodef-woo-product-category">
  <div class="qodef-woo-product-categories qodef-e-info"><a href="https://gizmos.qodeinteractive.com/product-category/computers-tablets/software/" rel="tag">Software</a></div>
  <div class="qodef-info-separator-end"></div>
  </div>
  <div class="qodef-woo-product-compare-wishlist-wrapper">
  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-5952  wishlist-fragment on-first-load" data-fragment-ref="5952" data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:5952,&quot;parent_product_id&quot;:5952,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
  
  <div class="yith-wcwl-add-button">
  <a href="?add_to_wishlist=5952&#038;_wpnonce=6e2b03d0d3" class="add_to_wishlist single_add_to_wishlist" data-product-id="5952" data-product-type="simple" data-original-product-id="5952" data-title="" rel="nofollow">
  <i class="yith-wcwl-icon fa fa-heart-o"></i> <span></span>
  </a>
  </div>
  
  </div>
  <a href="https://gizmos.qodeinteractive.com?action=yith-woocompare-add-product&id=5952" class="compare" data-product_id="5952" rel="nofollow"></a> </div>
  </div>
  <div class="qodef-woo-product-content-middle">
  <div class="qodef-woo-product-image-wrapper">
  <div class="qodef-woo-product-image">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-77.jpg" class="attachment-full size-full wp-post-image" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-77.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-77-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-77-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-77-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-77-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-77-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-77-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="qodef-woo-product-image-slider qodef-m-custom-swiper-container">
  <div class="swiper-wrapper">
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-77.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-77.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-77-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-77-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-77-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-77-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-77-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-77-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-1.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-1.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-1-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-1-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-1-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-1-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-1-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-1-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-2.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-2.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-2-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-2-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-2-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-2-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-2-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-2-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-3.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-3.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-3-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-3-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-3-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-3-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-3-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-3-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-4.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-4.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-4-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-4-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-4-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-4-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-4-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-28-4-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  </div>
  <div class="swiper-button-prev"><svg class="qodef-svg--slider-arrow-left" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="M8.70851355 17.90094068.48344748 9.6758746c-.26657926-.26657926-.16758431-.79973777.22344574-1.19076782s.92418856-.490025 1.19076782-.22344574l8.22506608 8.22506608c.26657925.26657925.1661701.80115198-.22344575 1.19076782s-.92418856.490025-1.19076782.22344574Z" /><path d="M10.12294068 1.89748645 1.8978746 10.12255252c-.26657926.26657926-.79973777.16758431-1.19076782-.22344574s-.490025-.92418856-.22344574-1.19076782L8.70872712.48327288c.26657925-.26657925.80115198-.1661701 1.19076782.22344575s.490025.92418856.22344574 1.19076782Z" /></svg></div>
  <div class="swiper-button-next"><svg class="qodef-svg--slider-arrow-right" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="m1.89827288 17.90172712 8.22506608-8.22506608c.26657926-.26657926.1675843-.79973777-.22344574-1.19076782s-.92418856-.490025-1.19076782-.22344574L.48405932 16.48751355c-.26728636.26728637-.1661701.80115199.22344574 1.19076782s.92348146.49073211 1.19076782.22344575Z" /><path d="m.48327288 1.89827288 8.22506608 8.22506608c.26657926.26657926.79973777.1675843 1.19076782-.22344574s.490025-.92418856.22344574-1.19076782L1.89748645.48405932C1.63020008.21677296 1.09633446.31788922.70671863.70750506s-.49073211.92348146-.22344575 1.19076782Z" /></svg></div>
  </div>
  </div>
  </div>
  <div class="qodef-woo-product-content-bottom">
  <div class="qodef-woo-product-info-wrapper">
  <span class="qodef-woo-product-mark qodef-new">New</span> <h5 itemprop="name" class="qodef-woo-product-title entry-title">
  <a itemprop="url" class="qodef-woo-product-title-link" href="https://gizmos.qodeinteractive.com/product/smart-watch-fitness-tracker-silver-black-rp-100/">
  Smart Watch Fitness Tracker Silver Black RP-100	</a>
  </h5>
  <div class="qodef-woo-product-price price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>590</span></div>
  </div>
  </div>
  <a href="?add-to-cart=5952" data-quantity="1" class="button wp-element-button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="5952" data-product_sku="231" aria-label="Add &ldquo;Smart Watch Fitness Tracker Silver Black RP-100&rdquo; to your cart" rel="nofollow">Add to cart</a> </div>
  </li>
  <li class="qodef-e qodef-grid-item qodef-item--full sale product type-product post-5958 status-publish first instock product_cat-software has-post-thumbnail shipping-taxable purchasable product-type-simple">
  <div class="qodef-e-inner">
  <a href="https://gizmos.qodeinteractive.com/product/high-definition-web-camera-sharp-x-59855/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a> <div class="qodef-woo-product-content-top">
  <div class="qodef-woo-product-category">
  <div class="qodef-woo-product-categories qodef-e-info"><a href="https://gizmos.qodeinteractive.com/product-category/computers-tablets/software/" rel="tag">Software</a></div>
  <div class="qodef-info-separator-end"></div>
  </div>
  <div class="qodef-woo-product-compare-wishlist-wrapper">
  <div class="yith-wcwl-add-to-wishlist add-to-wishlist-5958  wishlist-fragment on-first-load" data-fragment-ref="5958" data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:5958,&quot;parent_product_id&quot;:5958,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;fa-heart-o&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
  
  <div class="yith-wcwl-add-button">
  <a href="?add_to_wishlist=5958&#038;_wpnonce=6e2b03d0d3" class="add_to_wishlist single_add_to_wishlist" data-product-id="5958" data-product-type="simple" data-original-product-id="5958" data-title="" rel="nofollow">
  <i class="yith-wcwl-icon fa fa-heart-o"></i> <span></span>
  </a>
  </div>
  
  </div>
  <a href="https://gizmos.qodeinteractive.com?action=yith-woocompare-add-product&id=5958" class="compare" data-product_id="5958" rel="nofollow"></a> </div>
  </div>
  <div class="qodef-woo-product-content-middle">
  <div class="qodef-woo-product-image-wrapper">
  <div class="qodef-woo-product-image">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-78.jpg" class="attachment-full size-full wp-post-image" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-78.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-78-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-78-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-78-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-78-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-78-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-78-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="qodef-woo-product-image-slider qodef-m-custom-swiper-container">
  <div class="swiper-wrapper">
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-78.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-78.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-78-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-78-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-78-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-78-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-78-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-78-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-1.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-1.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-1-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-1-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-1-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-1-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-1-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-1-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-2.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-2.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-2-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-2-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-2-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-2-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-2-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-2-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-4.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-4.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-4-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-4-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-4-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-4-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-4-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-4-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  <div class="swiper-slide">
  <img width="900" height="900" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-3.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-3.jpg 900w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-3-300x300.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-3-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-3-768x768.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-3-650x650.jpg 650w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-3-600x600.jpg 600w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/shop-img-18-3-100x100.jpg 100w" sizes="(max-width: 900px) 100vw, 900px" /> </div>
  </div>
  <div class="swiper-button-prev"><svg class="qodef-svg--slider-arrow-left" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="M8.70851355 17.90094068.48344748 9.6758746c-.26657926-.26657926-.16758431-.79973777.22344574-1.19076782s.92418856-.490025 1.19076782-.22344574l8.22506608 8.22506608c.26657925.26657925.1661701.80115198-.22344575 1.19076782s-.92418856.490025-1.19076782.22344574Z" /><path d="M10.12294068 1.89748645 1.8978746 10.12255252c-.26657926.26657926-.79973777.16758431-1.19076782-.22344574s-.490025-.92418856-.22344574-1.19076782L8.70872712.48327288c.26657925-.26657925.80115198-.1661701 1.19076782.22344575s.490025.92418856.22344574 1.19076782Z" /></svg></div>
  <div class="swiper-button-next"><svg class="qodef-svg--slider-arrow-right" xmlns="http://www.w3.org/2000/svg" width="10.607" height="18.385" viewBox="0 0 10.607 18.385"><path d="m1.89827288 17.90172712 8.22506608-8.22506608c.26657926-.26657926.1675843-.79973777-.22344574-1.19076782s-.92418856-.490025-1.19076782-.22344574L.48405932 16.48751355c-.26728636.26728637-.1661701.80115199.22344574 1.19076782s.92348146.49073211 1.19076782.22344575Z" /><path d="m.48327288 1.89827288 8.22506608 8.22506608c.26657926.26657926.79973777.1675843 1.19076782-.22344574s.490025-.92418856.22344574-1.19076782L1.89748645.48405932C1.63020008.21677296 1.09633446.31788922.70671863.70750506s-.49073211.92348146-.22344575 1.19076782Z" /></svg></div>
  </div>
  </div>
  </div>
  <div class="qodef-woo-product-content-bottom">
  <div class="qodef-woo-product-info-wrapper">
  <h5 itemprop="name" class="qodef-woo-product-title entry-title">
  <a itemprop="url" class="qodef-woo-product-title-link" href="https://gizmos.qodeinteractive.com/product/high-definition-web-camera-sharp-x-59855/">
  High Definition Web Camera Sharp X 59855	</a>
  </h5>
  <div class="qodef-woo-product-price price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>230</span></div>
  </div>
  </div>
  <a href="?add-to-cart=5958" data-quantity="1" class="button wp-element-button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="5958" data-product_sku="232" aria-label="Add &ldquo;High Definition Web Camera Sharp X 59855&rdquo; to your cart" rel="nofollow">Add to cart</a> </div>
  </li>
  </ul>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </section>
  <section class="elementor-section elementor-top-section elementor-element elementor-element-2197c53 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="2197c53" data-element_type="section">
  <div class="elementor-container elementor-column-gap-no">
  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9090423" data-id="9090423" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
  <div class="elementor-widget-wrap elementor-element-populated">
  <div class="elementor-element elementor-element-3071ed0 elementor-widget elementor-widget-gizmos_core_clients_list" data-id="3071ed0" data-element_type="widget" data-widget_type="gizmos_core_clients_list.default">
  <div class="elementor-widget-container">
  <div class="qodef-shortcode qodef-m  qodef-clients-list qodef-border--enabled qodef-grid qodef-layout--columns  qodef-gutter--normal qodef-col-num--6 qodef-item-layout--image-only qodef-responsive--custom qodef-col-num--1440--6 qodef-col-num--1366--6 qodef-col-num--1024--3 qodef-col-num--768--3 qodef-col-num--680--2 qodef-col-num--480--1 qodef-hover-animation--fade" style="--qodef-client-initial-opacity: 1;--qodef-client-hover-opacity: .5;--qodef-client-border-color: #E2E2E2">
  <div class="qodef-grid-inner clear">
  <span class="qodef-e qodef-grid-item ">
  <span class="qodef-e-inner">
  <span class="qodef-e-image">
  <a itemprop="url" href="#" target="_blank">
  <span class="qodef-e-logo">
  <img width="42" height="80" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/client-1.png" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" /> </span>
  </a>
  </span>
  </span>
  </span>
  <span class="qodef-e qodef-grid-item ">
  <span class="qodef-e-inner">
  <span class="qodef-e-image">
  <a itemprop="url" href="#" target="_blank">
  <span class="qodef-e-logo">
  <img width="50" height="80" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/client-2.png" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" /> </span>
  </a>
  </span>
  </span>
  </span>
  <span class="qodef-e qodef-grid-item ">
  <span class="qodef-e-inner">
  <span class="qodef-e-image">
   <a itemprop="url" href="#" target="_blank">
  <span class="qodef-e-logo">
  <img width="73" height="80" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/client-3.png" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" /> </span>
  </a>
  </span>
  </span>
  </span>
  <span class="qodef-e qodef-grid-item ">
  <span class="qodef-e-inner">
  <span class="qodef-e-image">
  <a itemprop="url" href="#" target="_blank">
  <span class="qodef-e-logo">
  <img width="46" height="80" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/client-4.png" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" /> </span>
  </a>
  </span>
  </span>
  </span>
  <span class="qodef-e qodef-grid-item ">
  <span class="qodef-e-inner">
  <span class="qodef-e-image">
  <a itemprop="url" href="#" target="_blank">
  <span class="qodef-e-logo">
  <img width="138" height="80" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/client-5.png" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" /> </span>
  </a>
  </span>
  </span>
  </span>
  <span class="qodef-e qodef-grid-item ">
  <span class="qodef-e-inner">
  <span class="qodef-e-image">
  <a itemprop="url" href="#" target="_blank">
  <span class="qodef-e-logo">
  <img width="54" height="80" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/client-6.png" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" /> </span>
  </a>
  </span>
  </span>
  </span>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </section>
  <section class="elementor-section elementor-top-section elementor-element elementor-element-f1809b1 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="f1809b1" data-element_type="section">
  <div class="elementor-container elementor-column-gap-no">
  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-593a484" data-id="593a484" data-element_type="column">
  <div class="elementor-widget-wrap elementor-element-populated">
  <div class="elementor-element elementor-element-23c8d58 elementor-widget elementor-widget-gizmos_core_banner" data-id="23c8d58" data-element_type="widget" data-widget_type="gizmos_core_banner.default">
  <div class="elementor-widget-container">
  <div class="qodef-shortcode qodef-m  qodef-banner qodef-layout--link-overlay ">
  <div class="qodef-m-image" style="--qodef-image-height--1440: 210px;--qodef-image-height--1024: 210px;--qodef-image-height--768: 240px;--qodef-image-height--680: 220px">
  <img width="1400" height="250" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-8-banner-5.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-8-banner-5.jpg 1400w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-8-banner-5-300x54.jpg 300w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-8-banner-5-1024x183.jpg 1024w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-8-banner-5-768x137.jpg 768w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-8-banner-5-600x107.jpg 600w" sizes="(max-width: 1400px) 100vw, 1400px" /></div>
  <div class="qodef-m-content">
  <div class="qodef-m-content-inner" style="--qodef-content-padding: 52px 60px 37px 60px;--qodef-content-padding--1440: 32px 40px 17px 40px;--qodef-content-padding--1024: 32px 40px 17px 40px;--qodef-content-padding--768: 32px 32px 17px 32px;--qodef-content-padding--680: 25px 25px 15px 25px">
  <div>
  <h2 class="qodef-m-title" style="--qodef-title-font-size--680: 28px;color: #FFFFFF">
  It's finally here!<br /> Gizmos keyboard F-17 </h2>
  </div>
  <div>
  <h6 class="qodef-m-text" style="color: #FFFFFF">
  weekend sale	</h6>
  <span class="qodef-m-bottom-text" style="color: #FFFFFF;--qodef-bottom-text-font-size--680: 37px">
  20% OFF	</span>
  </div>
  </div>
  </div>
  <a itemprop="url" href="https://gizmos.qodeinteractive.com/product-category/fitness-watches/gift-sets/" class="qodef-m-banner-link" target="_self"></a>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </section>
  <section class="elementor-section elementor-top-section elementor-element elementor-element-2356826 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="2356826" data-element_type="section">
  <div class="elementor-container elementor-column-gap-no">
  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-87c3f51" data-id="87c3f51" data-element_type="column">
  <div class="elementor-widget-wrap elementor-element-populated">
  <div class="elementor-element elementor-element-4fac2ec elementor-widget elementor-widget-gizmos_core_product_category_list" data-id="4fac2ec" data-element_type="widget" data-widget_type="gizmos_core_product_category_list.default">
  <div class="elementor-widget-container">
  <div class="qodef-shortcode qodef-m  qodef-woo-shortcode qodef-woo-product-category-list qodef-item-layout--info-on-side qodef-main-category-image--enabled qodef-grid qodef-layout--columns  qodef-gutter--large qodef-col-num--4 qodef-item-layout--info-on-side qodef-responsive--custom qodef-col-num--1440--4 qodef-col-num--1366--4 qodef-col-num--1024--2 qodef-col-num--768--2 qodef-col-num--680--1 qodef-col-num--480--1">
  <div class="qodef-grid-inner clear">
  <div class="qodef-e qodef-grid-item qodef-item--full product-category product">
  <div class="qodef-e-inner">
  <div class="qodef-e-product-category-list-top">
  <div class="qodef-e-product-category-list-image">
  <a href="https://gizmos.qodeinteractive.com/product-category/computers-tablets/" class="qodef-e-product-category-list-link">
  <img width="204" height="204" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-7-categories-3.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-7-categories-3.jpg 204w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-7-categories-3-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-7-categories-3-100x100.jpg 100w" sizes="(max-width: 204px) 100vw, 204px" /> </a>
  </div>
  <a href="https://gizmos.qodeinteractive.com/product-category/computers-tablets/" class="qodef-e-product-category-list-main-category">
  <h4 class="woocommerce-loop-category__title">
  Computers &amp; Tablets </h4>
  </a>
  </div>
  <div class="qodef-e-product-category-list-bottom">
  <ul><li><a href="https://gizmos.qodeinteractive.com/product-category/computers-tablets/3d-printers/">3D Printers</a></li><li><a href="https://gizmos.qodeinteractive.com/product-category/computers-tablets/all-in-one/">All in One</a></li><li><a href="https://gizmos.qodeinteractive.com/product-category/computers-tablets/computers/">Computers</a></li><li><a href="https://gizmos.qodeinteractive.com/product-category/computers-tablets/pc-components/">PC Components</a></li><li><a href="https://gizmos.qodeinteractive.com/product-category/computers-tablets/software/">Software</a></li><li><a href="https://gizmos.qodeinteractive.com/product-category/computers-tablets/workstations/">Workstations</a></li></ul> <div class="qodef-e-read-more">
  <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual  qodef-html--link" href="https://gizmos.qodeinteractive.com/product-category/computers-tablets/" target="_self"> <span class="qodef-m-text">View All</span> <span class="qodef-m-icon"><svg class="qodef-svg--button-arrow" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12"><g><path d="M11 5H1a1 1 0 0 0 0 2h10a1 1 0 0 0 0-2Z" /><path d="M7 11V1a1 1 0 1 0-2 0v10a1 1 0 0 0 2 0Z" /></g></svg></span></a></div> </div>
  </div>
  </div>
  <div class="qodef-e qodef-grid-item qodef-item--full product-category product">
  <div class="qodef-e-inner">
  <div class="qodef-e-product-category-list-top">
  <div class="qodef-e-product-category-list-image">
  <a href="https://gizmos.qodeinteractive.com/product-category/webcams-equipment/" class="qodef-e-product-category-list-link">
  <img width="204" height="204" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-7-categories-2.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-7-categories-2.jpg 204w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-7-categories-2-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-7-categories-2-100x100.jpg 100w" sizes="(max-width: 204px) 100vw, 204px" /> </a>
  </div>
  <a href="https://gizmos.qodeinteractive.com/product-category/webcams-equipment/" class="qodef-e-product-category-list-main-category">
  <h4 class="woocommerce-loop-category__title">
  Webcams &amp; Equipment </h4>
  </a>
  </div>
  <div class="qodef-e-product-category-list-bottom">
  <ul><li><a href="https://gizmos.qodeinteractive.com/product-category/webcams-equipment/auto-focus/">Auto Focus</a></li><li><a href="https://gizmos.qodeinteractive.com/product-category/webcams-equipment/disposable-cameras/">Disposable Cameras</a></li><li><a href="https://gizmos.qodeinteractive.com/product-category/webcams-equipment/gopro/">GoPro</a></li><li><a href="https://gizmos.qodeinteractive.com/product-category/webcams-equipment/manual-focus/">Manual Focus</a></li><li><a href="https://gizmos.qodeinteractive.com/product-category/webcams-equipment/webcam-mounts/">Webcam Mounts</a></li><li><a href="https://gizmos.qodeinteractive.com/product-category/webcams-equipment/webcam-stands/">Webcam Stands</a></li></ul> <div class="qodef-e-read-more">
  <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual  qodef-html--link" href="https://gizmos.qodeinteractive.com/product-category/webcams-equipment/" target="_self"> <span class="qodef-m-text">View All</span> <span class="qodef-m-icon"><svg class="qodef-svg--button-arrow" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12"><g><path d="M11 5H1a1 1 0 0 0 0 2h10a1 1 0 0 0 0-2Z" /><path d="M7 11V1a1 1 0 1 0-2 0v10a1 1 0 0 0 2 0Z" /></g></svg></span></a></div> </div>
  </div>
  </div>
  <div class="qodef-e qodef-grid-item qodef-item--full product-category product last">
  <div class="qodef-e-inner">
  <div class="qodef-e-product-category-list-top">
  <div class="qodef-e-product-category-list-image">
  <a href="https://gizmos.qodeinteractive.com/product-category/fitness-watches/" class="qodef-e-product-category-list-link">
  <img width="204" height="204" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-7-categories-1.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-7-categories-1.jpg 204w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-7-categories-1-150x150.jpg 150w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/09/home-7-categories-1-100x100.jpg 100w" sizes="(max-width: 204px) 100vw, 204px" /> </a>
  </div>
  <a href="https://gizmos.qodeinteractive.com/product-category/fitness-watches/" class="qodef-e-product-category-list-main-category">
  <h4 class="woocommerce-loop-category__title">
  Fitness Watches </h4>
  </a>
  </div>
  <div class="qodef-e-product-category-list-bottom">
  <ul><li><a href="https://gizmos.qodeinteractive.com/product-category/fitness-watches/automatic/">Automatic</a></li><li><a href="https://gizmos.qodeinteractive.com/product-category/fitness-watches/digital/">Digital</a></li><li><a href="https://gizmos.qodeinteractive.com/product-category/fitness-watches/gift-sets/">Gift Sets</a></li><li><a href="https://gizmos.qodeinteractive.com/product-category/fitness-watches/plastic-fitness-watches/">Plastic</a></li><li><a href="https://gizmos.qodeinteractive.com/product-category/fitness-watches/titanium/">Titanium</a></li><li><a href="https://gizmos.qodeinteractive.com/product-category/fitness-watches/waterproof/">Waterproof</a></li></ul> <div class="qodef-e-read-more">
  <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual  qodef-html--link" href="https://gizmos.qodeinteractive.com/product-category/fitness-watches/" target="_self"> <span class="qodef-m-text">View All</span> <span class="qodef-m-icon"><svg class="qodef-svg--button-arrow" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12"><g><path d="M11 5H1a1 1 0 0 0 0 2h10a1 1 0 0 0 0-2Z" /><path d="M7 11V1a1 1 0 1 0-2 0v10a1 1 0 0 0 2 0Z" /></g></svg></span></a></div> </div>
  </div>
  </div>
  <div class="qodef-e qodef-grid-item qodef-item--full product-category product first">
  <div class="qodef-e-inner">
  <div class="qodef-e-product-category-list-top">
  <div class="qodef-e-product-category-list-image">
  <a href="https://gizmos.qodeinteractive.com/product-category/tv-audio-and-video/" class="qodef-e-product-category-list-link">
  <img width="204" height="204" src="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/main-home-categories-4.jpg" class="attachment-full size-full" alt="q" decoding="async" loading="lazy" srcset="https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/main-home-categories-4.jpg 204w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/main-home-categories-4-100x100.jpg 100w, https://gizmos.qodeinteractive.com/wp-content/uploads/2022/08/main-home-categories-4-150x150.jpg 150w" sizes="(max-width: 204px) 100vw, 204px" /> </a>
  </div>
  <a href="https://gizmos.qodeinteractive.com/product-category/tv-audio-and-video/" class="qodef-e-product-category-list-main-category">
  <h4 class="woocommerce-loop-category__title">
  TV, Audio and Video </h4>
  </a>
  </div>
  <div class="qodef-e-product-category-list-bottom">
  <ul><li><a href="https://gizmos.qodeinteractive.com/product-category/tv-audio-and-video/amplifiers/">Amplifiers</a></li><li><a href="https://gizmos.qodeinteractive.com/product-category/tv-audio-and-video/cables-and-adapters/">Cables and Adapters</a></li><li><a href="https://gizmos.qodeinteractive.com/product-category/tv-audio-and-video/cameras/">Cameras</a></li><li><a href="https://gizmos.qodeinteractive.com/product-category/tv-audio-and-video/transmitters/">Transmitters</a></li><li><a href="https://gizmos.qodeinteractive.com/product-category/tv-audio-and-video/tv-equipment/">TV Equipment</a></li><li><a href="https://gizmos.qodeinteractive.com/product-category/tv-audio-and-video/tv-keyboards/">TV Keyboards</a></li></ul> <div class="qodef-e-read-more">
  <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--textual  qodef-html--link" href="https://gizmos.qodeinteractive.com/product-category/tv-audio-and-video/" target="_self"> <span class="qodef-m-text">View All</span> <span class="qodef-m-icon"><svg class="qodef-svg--button-arrow" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12"><g><path d="M11 5H1a1 1 0 0 0 0 2h10a1 1 0 0 0 0-2Z" /><path d="M7 11V1a1 1 0 1 0-2 0v10a1 1 0 0 0 2 0Z" /></g></svg></span></a></div> </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </section>
  </div>
  </div>
  </div>
  </main>
  </div>
  </div>
 














{{-- <script src="{{asset("vendor/simplebar/simplebar.min.js")}}"></script>
<script src="{{asset("vendors/imagesloaded/imagesloaded.pkgd.min.js")}}"></script>
<script src="{{asset("assets/js/config.js")}}"></script>
<link href="{{asset("vendors/simplebar/simplebar.min.css")}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset("assets/css/line.css")}}">
<link rel="stylesheet" href="{{asset("css/homecss.css")}}">
<link href="{{asset("vendors/swiper/swiper-bundle.min.css")}}" rel="stylesheet">
<section class="py-0">
  <div class="container-small">
    <div class="scrollbar">
      <div class="d-flex justify-content-between"><a class="icon-nav-item" href="#!">
          <div class="icon-container mb-2 bg-warning-100 light"><i data-feather="home" style="size:300px"></i></div>
          <p class="nav-label">Deals</p>
        </a><a class="icon-nav-item" href="#!">
          <div class="icon-container mb-2"><span class="fs-4 uil uil-shopping-bag"></span></div>
          <p class="nav-label">Grocery</p>
        </a><a class="icon-nav-item" href="#!">
          <div class="icon-container mb-2"><span class="fs-4 uil uil-watch-alt"></span></div>
          <p class="nav-label">Fashion</p>
        </a><a class="icon-nav-item" href="#!">
          <div class="icon-container mb-2"><span class="fs-4 uil uil-mobile-android"></span></div>
          <p class="nav-label">Mobile</p>
        </a><a class="icon-nav-item" href="#!">
          <div class="icon-container mb-2"><span class="fs-4 uil uil-monitor"></span></div>
          <p class="nav-label">Electronics</p>
        </a><a class="icon-nav-item" href="#!">
          <div class="icon-container mb-2"><span class="fs-4 uil uil-estate"></span></div>
          <p class="nav-label">Home</p>
        </a><a class="icon-nav-item" href="#!">
          <div class="icon-container mb-2"><span class="fs-4 uil uil-lamp"></span></div>
          <p class="nav-label">Dining</p>
        </a><a class="icon-nav-item" href="#!">
          <div class="icon-container mb-2"><span class="fs-4 uil uil-gift"></span></div>
          <p class="nav-label">Gifts</p>
        </a><a class="icon-nav-item" href="#!">
          <div class="icon-container mb-2"><span class="fs-4 uil uil-wrench"></span></div>
          <p class="nav-label">Tools</p>
        </a><a class="icon-nav-item" href="#!">
          <div class="icon-container mb-2"><span class="fs-4 uil uil-plane-departure"></span></div>
          <p class="nav-label">Travel</p>
        </a><a class="icon-nav-item" href="#!">
          <div class="icon-container mb-2"><span class="fs-4 uil uil-palette"></span></div>
          <p class="nav-label">Others</p>
        </a></div>
    </div>
  </div><!-- end of .container-->
</section>
<section class="py-0 px-xl-3">
  <div class="container px-xl-0 px-xxl-3">
    <div class="row g-3 mb-9">
      <div class="col-12">
        <div class="whooping-banner w-100 rounded-3 overflow-hidden">
          <div class="bg-holder z-index--1 product-bg" style="background-image:url(../../../assets/img/e-commerce/whooping_banner_product.png);background-position: bottom right;"></div>
          <!--/.bg-holder-->
          <div class="bg-holder z-index--1 shape-bg" style="background-image:url(../../../assets/img/e-commerce/whooping_banner_shape_2.png);background-position: bottom left;"></div>
          <!--/.bg-holder-->
          <div class="banner-text light">
            <h2 class="text-warning-300 fw-bolder fs-lg-5 fs-xxl-6">Whooping <span class="gradient-text">60% </span>Off</h2>
            <h3 class="fw-bolder fs-lg-3 fs-xxl-5 text-white light">on everyday items</h3>
          </div><a class="btn btn-lg btn-primary rounded-pill banner-button" href="#!">Shop Now</a>
        </div>
      </div>
      <div class="col-12 col-xl-6">
        <div class="gift-items-banner w-100 rounded-3 overflow-hidden">
          <div class="bg-holder z-index--1 banner-bg" style="background-image:url(../../../assets/img/e-commerce/gift-items-banner-bg.png);"></div>
          <!--/.bg-holder-->
          <div class="banner-text text-md-center light">
            <h2 class="text-white fw-bolder fs-xl-4">Get <span class="gradient-text">10% Off </span><br class="d-md-none"> on gift items</h2><a class="btn btn-lg btn-primary rounded-pill banner-button" href="#!">Buy Now</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-xl-6">
        <div class="best-in-market-banner d-flex h-100 px-4 px-sm-7 py-5 px-md-11 rounded-3 overflow-hidden">
          <div class="bg-holder z-index--1 banner-bg" style="background-image:url(../../../assets/img/e-commerce/best-in-market-bg.png);"></div>
          <!--/.bg-holder-->
          <div class="row align-items-center w-sm-100">
            <div class="col-8">
              <div class="banner-text light">
                <h2 class="text-white fw-bolder fs-sm-4 mb-5">MI 11 Pro<br><span class="fs-1 fs-sm-2"> Best in the market</span></h2><a class="btn btn-lg btn-warning rounded-pill banner-button" href="#!">Buy Now</a>
              </div>
            </div>
            <div class="col-4"><img class="w-100 w-sm-75" src="../../../assets/img/e-commerce/5.png" alt=""></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row g-4 mb-6">
      <div class="col-12 col-lg-9 col-xxl-10">
        <div class="d-flex flex-between-center mb-3">
          <div class="d-flex"><span class="fas fa-bolt text-warning fs-2"></span>
            <h3 class="mx-2">Top Deals today</h3><span class="fas fa-bolt text-warning fs-2"></span>
          </div><a class="btn btn-link btn-lg p-0 d-none d-md-block" href="#!">Explore more<span class="fas fa-chevron-right fs--1 ms-1"></span></a>
        </div>
        <div class="swiper-theme-container products-slider">
          <div class="swiper swiper-container theme-slider" data-swiper='{"slidesPerView":1,"spaceBetween":16,"breakpoints":{"450":{"slidesPerView":2,"spaceBetween":16},"768":{"slidesPerView":3,"spaceBetween":20},"1200":{"slidesPerView":4,"spaceBetween":16},"1540":{"slidesPerView":5,"spaceBetween":16}}}'>
            <div class="swiper-wrapper">

              {{-- @foreach ($produits as $produit ) --}}
                
                 
              {{-- <div class="swiper-slide">
                <div class="position-relative text-decoration-none product-card h-100">
                  <div class="d-flex flex-column justify-content-between h-100">
                    <div>
                      <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/6.png" alt=""></div><a class="stretched-link text-decoration-none" href="product-details.html">
                        <h6 class="mb-2 lh-sm line-clamp-3 product-name">PlayStation 5 DualSense Wireless Controller</h6>
                      </a>
                      <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-500 fw-semi-bold ms-1">(67 people rated)</span></p>
                    </div>
                    <div>
                      <p class="fs--1 text-1000 fw-bold mb-2">dbrand skin available</p>
                      <div class="d-flex align-items-center mb-1">
                        <p class="me-2 text-900 text-decoration-line-through mb-0">$125.00</p>
                        <h3 class="text-1100 mb-0">$89.00</h3>
                      </div>
                      <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">2 colors</p>
                    </div>
                  </div>  --}} 
                  {{-- <div class="ecommerce-card">
                    <div class="item-img text-center">
                      <a href="{{url('app/ecommerce/details/'.$produit->id)}}">
                        <img
                          class="img-fluid card-img-top"
                          src="{{asset($produit->photo)}}"
                          alt="img-placeholder"
                      /></a>
                    </div>
                    <div class="card-body">
                      <div class="item-wrapper">
                        <div class="item-rating">
                          <ul class="unstyled-list list-inline">
                            @for ($i = 0; $i < $produit->rating; $i++)
                   
                              <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                            @endfor
                            @for ($i = 0; $i < 5 - $produit->rating; $i++)
                   
                              <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                            @endfor
                
                            
                          </ul>
                        </div>
                        <div>
                          <h6 class="item-price">${{$produit->price}}</h6>
                        </div>
                      </div>
                      <h6 class="item-name">
                        <a class="text-body" href="{{url('app/ecommerce/details/'.$produit->id)}}">{{$produit->libelle}}</a>
                        {{-- <span class="card-text item-company">By <a href="#" class="company-name">{{$produit->brand}}</a></span> --}}
                      {{-- </h6> --}}
                      {{-- <p class="card-text item-description">
                        {{$produit->description}}
                      </p> --}}
                    {{-- </div>
                    <div class="item-options text-center">
                      <div class="item-wrapper">
                        <div class="item-cost">
                          <h4 class="item-price">${{$produit->price}}</h4>
                        </div>
                      </div> --}}
                      {{-- @if (Auth::check())
                      <a href="#" class="btn btn-light btn-wishlist" >
                       @foreach ($wishlist as $item)
                       @if ($item->id==$produit->id)
                       <input type="hidden" id="id" value="{{$produit->id}}">
                       <i class="text-danger" data-feather="heart"></i>
                       <span>Wishlist</span>
               
                       @elseif($item->id!=$produit->id)
                       <input type="hidden" id="id" value="{{$produit->id}}">
                   
                   <i data-feather="heart"></i>
                   <span>Wishlist</span> 
                       @endif
                       
                       @endforeach
                       
                
                      </a>
                 
                      @endif --}}
               
                      {{-- @if (Auth::check()) --}}
                      {{-- <a href="#" class="btn btn-light btn-wishlist" >
                      @foreach ($wishlist as $item)
                      @if ($item->id==$produit->id)
                      <input type="hidden" id="id" value="{{$produit->id}}">
                      <i class="text-danger" data-feather="heart"></i>
                      <span>Wishlist</span>
                      
               
                          
                      @endif
                          
                      @endforeach
                      
                      <input type="hidden" id="id" value="{{$produit->id}}">
                   
                      <i data-feather="heart"></i>
                      <span>Wishlist</span> 
                
               
               
                     </a> --}}
                     {{-- <a href="#" class="btn btn-light btn-wishlist">
                       @php
                           $inWishlist = false;
                           foreach ($wishlist as $item) {
                               if ($item->id == $produit->id) {
                                   $inWishlist = true;
                                   break;
                               }
                           }
                       @endphp
                       <input type="hidden" id="id" value="{{$produit->id}}">
                       @if ($inWishlist)
                           <i class="text-danger" data-feather="heart"></i>
                       @else
                           <i data-feather="heart"></i>
                       @endif
                       <span>Wishlist</span>
                   </a>
                     @endif
                      <a href="{{ route('add_to_cart', $produit->id) }}"  class="btn btn-primary btn-cart">
                        <i data-feather="shopping-cart"></i>
                       
                        <span class="add-to-cart">Add to cart</span>
                      </a>
                    </div> --}}
                  {{-- </div>  --}} 
                
                {{-- </div>
              </div>
       @endforeach --}}
              {{-- <div class="swiper-slide">
                <div class="position-relative text-decoration-none product-card h-100">
                  <div class="d-flex flex-column justify-content-between h-100">
                    <div>
                      <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/1.png" alt=""><span class="badge bg-success fs--2 product-verified-badge">Verified<span class="fas fa-check ms-1"></span></span></div><a class="stretched-link text-decoration-none" href="product-details.html">
                        <h6 class="mb-2 lh-sm line-clamp-3 product-name">Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management &amp; Skin Temperature ...</h6>
                      </a>
                      <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-500 fw-semi-bold ms-1">(74 people rated)</span></p>
                    </div>
                    <div>
                      <div class="d-flex align-items-center mb-1">
                        <p class="me-2 text-900 text-decoration-line-through mb-0">$49.99</p>
                        <h3 class="text-1100 mb-0">$34.99</h3>
                      </div>
                      <p class="text-success fw-bold fs--1 lh-1 mb-0">Deal time ends in days</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="position-relative text-decoration-none product-card h-100">
                  <div class="d-flex flex-column justify-content-between h-100">
                    <div>
                      <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/2.png" alt=""></div><a class="stretched-link text-decoration-none" href="product-details.html">
                        <h6 class="mb-2 lh-sm line-clamp-3 product-name">iPhone 13 pro max-Pacific Blue, 128GB storage</h6>
                      </a>
                      <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-500 fw-semi-bold ms-1">(33 people rated)</span></p>
                    </div>
                    <div>
                      <p class="fs--1 text-1000 fw-bold mb-2">Stock limited</p>
                      <div class="d-flex align-items-center mb-1">
                        <p class="me-2 text-900 text-decoration-line-through mb-0">$899.99</p>
                        <h3 class="text-1100 mb-0">$850.99</h3>
                      </div>
                      <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">5 colors</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="position-relative text-decoration-none product-card h-100">
                  <div class="d-flex flex-column justify-content-between h-100">
                    <div>
                      <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/3.png" alt=""></div><a class="stretched-link text-decoration-none" href="product-details.html">
                        <h6 class="mb-2 lh-sm line-clamp-3 product-name">Apple MacBook Pro 13 inch-M1-8/256GB-Space Gray</h6>
                      </a>
                      <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-500 fw-semi-bold ms-1">(97 people rated)</span></p>
                    </div>
                    <div>
                      <p class="fs--1 text-1000 fw-bold mb-2">Apple care included</p>
                      <div class="d-flex align-items-center mb-1">
                        <p class="me-2 text-900 text-decoration-line-through mb-0">$1299.00</p>
                        <h3 class="text-1100 mb-0">$1149.00</h3>
                      </div>
                      <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">2 colors</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="position-relative text-decoration-none product-card h-100">
                  <div class="d-flex flex-column justify-content-between h-100">
                    <div>
                      <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/4.png" alt=""></div><a class="stretched-link text-decoration-none" href="product-details.html">
                        <h6 class="mb-2 lh-sm line-clamp-3 product-name">Apple iMac 24&quot; 4K Retina Display M1 8 Core CPU, 7 Core GPU, 256GB SSD, Green (MJV83ZP/A) 2021</h6>
                      </a>
                      <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-500 fw-semi-bold ms-1">(134 people rated)</span></p>
                    </div>
                    <div>
                      <p class="fs--1 text-1000 fw-bold mb-2">Exchange with kidney</p>
                      <div class="d-flex align-items-center mb-1">
                        <p class="me-2 text-900 text-decoration-line-through mb-0">$1499.00</p>
                        <h3 class="text-1100 mb-0">$1399.00</h3>
                      </div>
                      <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">7 colors</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="position-relative text-decoration-none product-card h-100">
                  <div class="d-flex flex-column justify-content-between h-100">
                    <div>
                      <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/5.png" alt=""></div><a class="stretched-link text-decoration-none" href="product-details.html">
                        <h6 class="mb-2 lh-sm line-clamp-3 product-name">Razer Kraken v3 x Wired 7.1 Surroung Sound Gaming headset</h6>
                      </a>
                      <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-500 fw-semi-bold ms-1">(59 people rated)</span></p>
                    </div>
                    <div>
                      <h3 class="text-1100">$59.00</h3>
                      <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">2 colors</p>
                    </div>
                  </div>
                </div>
              </div> --}}
            {{-- </div>
          </div>
          <div class="swiper-nav swiper-product-nav">
            <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span></div>
            <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span></div>
          </div>
        </div><a class="fw-bold d-md-none px-0" href="#!">Explore more<span class="fas fa-chevron-right fs--1 ms-1"></span></a>
      </div>
      <div class="col-lg-3 d-none d-lg-block col-xxl-2">
        <div class="h-100 position-relative rounded-3 overflow-hidden">
          <div class="bg-holder" style="background-image:url(../../../assets/img/e-commerce/4.png);"></div>
          <!--/.bg-holder-->
        </div>
      </div>
      <div class="col-12 d-lg-none"><a href="#!"><img class="w-100 rounded-3" src="../../../assets/img/e-commerce/6.png" alt=""></a></div>
    </div>
    <div class="mb-6">
      <div class="d-flex flex-between-center mb-3">
        <h3>Top Electronics</h3><a class="fw-bold d-none d-md-block" href="#!">Explore more<span class="fas fa-chevron-right fs--1 ms-1"></span></a>
      </div>
      <div class="swiper-theme-container products-slider">
        <div class="swiper swiper-container theme-slider" data-swiper='{"slidesPerView":1,"spaceBetween":16,"breakpoints":{"450":{"slidesPerView":2,"spaceBetween":16},"576":{"slidesPerView":3,"spaceBetween":20},"768":{"slidesPerView":4,"spaceBetween":20},"992":{"slidesPerView":5,"spaceBetween":20},"1200":{"slidesPerView":6,"spaceBetween":16}}}'>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="position-relative text-decoration-none product-card h-100">
                <div class="d-flex flex-column justify-content-between h-100">
                  <div>
                    <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/5.png" alt=""></div><a class="stretched-link text-decoration-none" href="product-details.html">
                      <h6 class="mb-2 lh-sm line-clamp-3 product-name">Razer Kraken v3 x Wired 7.1 Surroung Sound Gaming headset</h6>
                    </a>
                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-500 fw-semi-bold ms-1">(59 people rated)</span></p>
                  </div>
                  <div>
                    <h3 class="text-1100">$59.00</h3>
                    <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">2 colors</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="position-relative text-decoration-none product-card h-100">
                <div class="d-flex flex-column justify-content-between h-100">
                  <div>
                    <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/7.png" alt=""></div><a class="stretched-link text-decoration-none" href="product-details.html">
                      <h6 class="mb-2 lh-sm line-clamp-3 product-name">2021 Apple 12.9-inch iPad Pro (Wi‑Fi, 128GB) - Space Gray</h6>
                    </a>
                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-500 fw-semi-bold ms-1">(13 people rated)</span></p>
                  </div>
                  <div>
                    <h3 class="text-1100">$799.00</h3>
                    <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">2 colors</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="position-relative text-decoration-none product-card h-100">
                <div class="d-flex flex-column justify-content-between h-100">
                  <div>
                    <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/12.png" alt=""></div><a class="stretched-link text-decoration-none" href="product-details.html">
                      <h6 class="mb-2 lh-sm line-clamp-3 product-name">HORI Racing Wheel Apex for PlayStation 4/3, and PC</h6>
                    </a>
                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-500 fw-semi-bold ms-1">(64 people rated)</span></p>
                  </div>
                  <div>
                    <p class="fs--1 text-1000 fs--1 mb-0 fw-bold">Leather cover add-on available</p>
                    <p class="fs--1 text-700 fs--1 mb-2">supports Windows 11</p>
                    <h3 class="text-1100">$299.00</h3>
                    <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">1 colors</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="position-relative text-decoration-none product-card h-100">
                <div class="d-flex flex-column justify-content-between h-100">
                  <div>
                    <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove from wishlist"><span class="fas fa-heart"></span></button><img class="img-fluid" src="../../../assets/img/products/1.png" alt=""><span class="badge bg-success fs--2 product-verified-badge">Verified<span class="fas fa-check ms-1"></span></span></div><a class="stretched-link text-decoration-none" href="product-details.html">
                      <h6 class="mb-2 lh-sm line-clamp-3 product-name">Amazfit T-Rex Pro Smart Watch with GPS, Outdoor Fitness Watch for Men, Military Standard Certified</h6>
                    </a>
                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-500 fw-semi-bold ms-1">(32 people rated)</span></p>
                  </div>
                  <div>
                    <h3 class="text-1100">$20.00</h3>
                    <p class="text-success fw-bold fs--1 lh-1 mb-0">Deal time ends in 24 hours</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="position-relative text-decoration-none product-card h-100">
                <div class="d-flex flex-column justify-content-between h-100">
                  <div>
                    <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/16.png" alt=""></div><a class="stretched-link text-decoration-none" href="product-details.html">
                      <h6 class="mb-2 lh-sm line-clamp-3 product-name">Apple AirPods Pro</h6>
                    </a>
                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-500 fw-semi-bold ms-1">(39 people rated)</span></p>
                  </div>
                  <div>
                    <p class="fs--1 text-1000 fs--1 mb-0 fw-bold">Free with iPhone 5s</p>
                    <p class="fs--1 text-700 fs--1 mb-2">Ships to Canada</p>
                    <h3 class="text-1100">$59.00</h3>
                    <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">3 colors</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="position-relative text-decoration-none product-card h-100">
                <div class="d-flex flex-column justify-content-between h-100">
                  <div>
                    <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/10.png" alt=""></div><a class="stretched-link text-decoration-none" href="product-details.html">
                      <h6 class="mb-2 lh-sm line-clamp-3 product-name">Apple Magic Mouse (Wireless, Rechargable) - Silver</h6>
                    </a>
                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span><span class="text-500 fw-semi-bold ms-1">(6 people rated)</span></p>
                  </div>
                  <div>
                    <p class="fs--1 text-1000 fs--1 mb-0 fw-bold">Bundle available</p>
                    <p class="fs--1 text-700 fs--1 mb-2">Charger not included</p>
                    <h3 class="text-1100">$89.00</h3>
                    <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">2 colors</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="position-relative text-decoration-none product-card h-100">
                <div class="d-flex flex-column justify-content-between h-100">
                  <div>
                    <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/8.png" alt=""></div><a class="stretched-link text-decoration-none" href="product-details.html">
                      <h6 class="mb-2 lh-sm line-clamp-3 product-name">Amazon Basics Matte Black Wired Keyboard - US Layout (QWERTY)</h6>
                    </a>
                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span><span class="text-500 fw-semi-bold ms-1">(7 people rated)</span></p>
                  </div>
                  <div>
                    <h3 class="text-1100">$98.00</h3>
                    <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">1 colors</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-nav">
          <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span></div>
          <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span></div>
        </div>
      </div><a class="fw-bold d-md-none" href="#!">Explore more<span class="fas fa-chevron-right fs--1 ms-1"></span></a>
    </div>
    <div class="mb-6">
      <div class="d-flex flex-between-center mb-3">
        <h3>Best Offers</h3><a class="fw-bold d-none d-md-block" href="#!">Explore more<span class="fas fa-chevron-right fs--1 ms-1"></span></a>
      </div>
      <div class="swiper-theme-container products-slider">
        <div class="swiper swiper-container theme-slider" data-swiper='{"slidesPerView":1,"spaceBetween":16,"breakpoints":{"450":{"slidesPerView":2,"spaceBetween":16},"576":{"slidesPerView":3,"spaceBetween":20},"768":{"slidesPerView":4,"spaceBetween":20},"992":{"slidesPerView":5,"spaceBetween":20},"1200":{"slidesPerView":6,"spaceBetween":16}}}'>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="position-relative text-decoration-none product-card h-100">
                <div class="d-flex flex-column justify-content-between h-100">
                  <div>
                    <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/25.png" alt=""></div><a class="stretched-link text-decoration-none" href="product-details.html">
                      <h6 class="mb-2 lh-sm line-clamp-3 product-name">RESPAWN 200 Racing Style Gaming Chair, in Gray RSP 200 GRY</h6>
                    </a>
                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></p>
                  </div>
                  <div>
                    <h6 class="text-success lh-1 mb-0">35% off</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="position-relative text-decoration-none product-card h-100">
                <div class="d-flex flex-column justify-content-between h-100">
                  <div>
                    <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/27.png" alt=""></div><a class="stretched-link text-decoration-none" href="product-details.html">
                      <h6 class="mb-2 lh-sm line-clamp-3 product-name">LEVOIT Humidifiers for Bedroom Large Room 6L Warm and Cool Mist for...</h6>
                    </a>
                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span></p>
                  </div>
                  <div>
                    <h6 class="text-success lh-1 mb-0">18% off</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="position-relative text-decoration-none product-card h-100">
                <div class="d-flex flex-column justify-content-between h-100">
                  <div>
                    <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/26.png" alt=""></div><a class="stretched-link text-decoration-none" href="product-details.html">
                      <h6 class="mb-2 lh-sm line-clamp-3 product-name">NETGEAR Nighthawk Pro Gaming XR500 Wi-Fi Router with 4 Ethernet Ports...</h6>
                    </a>
                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></p>
                  </div>
                  <div>
                    <h6 class="text-success lh-1 mb-0">15% off</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="position-relative text-decoration-none product-card h-100">
                <div class="d-flex flex-column justify-content-between h-100">
                  <div>
                    <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/18.png" alt=""></div><a class="stretched-link text-decoration-none" href="product-details.html">
                      <h6 class="mb-2 lh-sm line-clamp-3 product-name">Rachael Ray Cucina Bakeware Set Includes Nonstick Bread Baking Cookie Sheet...</h6>
                    </a>
                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt star-icon text-warning"></span><span class="fa-regular fa-star text-warning-300"></span></p>
                  </div>
                  <div>
                    <h6 class="text-success lh-1 mb-0">20% off</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="position-relative text-decoration-none product-card h-100">
                <div class="d-flex flex-column justify-content-between h-100">
                  <div>
                    <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/17.png" alt=""></div><a class="stretched-link text-decoration-none" href="product-details.html">
                      <h6 class="mb-2 lh-sm line-clamp-3 product-name">Xbox Series S</h6>
                    </a>
                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></p>
                  </div>
                  <div>
                    <h6 class="text-success lh-1 mb-0">12% off</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="position-relative text-decoration-none product-card h-100">
                <div class="d-flex flex-column justify-content-between h-100">
                  <div>
                    <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/24.png" alt=""></div><a class="stretched-link text-decoration-none" href="product-details.html">
                      <h6 class="mb-2 lh-sm line-clamp-3 product-name">FURINNO Computer Writing Desk, Walnut</h6>
                    </a>
                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></p>
                  </div>
                  <div>
                    <h6 class="text-success lh-1 mb-0">16% off</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="position-relative text-decoration-none product-card h-100">
                <div class="d-flex flex-column justify-content-between h-100">
                  <div>
                    <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/18.png" alt=""></div><a class="stretched-link text-decoration-none" href="product-details.html">
                      <h6 class="mb-2 lh-sm line-clamp-3 product-name">Seagate Portable 2TB External Hard Drive Portable HDD</h6>
                    </a>
                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span></p>
                  </div>
                  <div>
                    <h6 class="text-success lh-1 mb-0">15% off</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-nav">
          <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span></div>
          <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span></div>
        </div>
      </div><a class="fw-bold d-md-none" href="#!">Explore more<span class="fas fa-chevron-right fs--1 ms-1"></span></a>
    </div>
    <div class="row flex-center mb-15 mt-11 gy-6">
      <div class="col-auto"><img class="d-dark-none" src="../../../assets/img/spot-illustrations/light_30.png" alt="" width="305"><img class="d-light-none" src="../../../assets/img/spot-illustrations/dark_30.png" alt="" width="305"></div>
      <div class="col-auto">
        <div class="text-center text-lg-start">
          <h3 class="text-1000 mb-2"><span class="fw-semi-bold">Want to have the </span>ultimate customer experience?</h3>
          <h1 class="display-3 fw-semi-bold mb-4">Become a <span class="text-primary fw-bolder">member </span>today!</h1><a class="btn btn-lg btn-primary px-7" href="../../../pages/authentication/simple/sign-up.html">Sign up<span class="fas fa-chevron-right ms-2 fs--1"></span></a>
        </div>
      </div>
    </div>
  </div><!-- end of .container-->
</section> --}}
<script src="{{asset("vendors/popper/popper.min.js")}}"></script>
<script src="{{asset("vendors/bootstrap/bootstrap.min.js")}}"></script>
<script src="{{asset("vendors/anchorjs/anchor.min.js")}}"></script>
<script src="{{asset("vendors/is/is.min.js")}}"></script>
<script src="{{asset("vendors/fontawesome/all.min.js")}}"></script>
<script src="{{asset("vendors/lodash/lodash.min.js")}}"></script>
{{-- <script src="../../../../../v3/polyfill.min.js?features=window.scroll"></script> --}}
<script src="{{asset("vendors/list.js/list.min.js")}}"></script>
<script src="{{asset("vendors/feather-icons/feather.min.js")}}"></script>
<script src="{{asset("vendors/dayjs/dayjs.min.js")}}"></script>
<script src="{{asset("assets/js/phoenix.js")}}"></script>
<script src="{{asset("vendors/swiper/swiper-bundle.min.js")}}"></script>
@endsection
{{-- <style>
  .images{
    transition: transform .5s;
    }
  .images:hover{
    -ms-transform: scale(1.5); /* IE 9 */
    transform: scale(1.5);
    }
</style>
  <div class="container">
    <div class="row">
      <div class="col-8">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="5000">
            <img src="https://thumbs.dreamstime.com/b/headphone-golden-textual-background-91972489.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img src="https://i5.walmartimages.com/dfw/4ff9c6c9-8b8c/k2-_99d4f7c2-814c-47ea-a05d-2dbcf50bc85a.v1.png?odnHeight=340&odnWidth=604&odnBg=FFFFFF" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img src="https://cdn-dynmedia-1.microsoft.com/is/image/microsoftcorp/Samsung-Galaxy-S20-Family-CC?wid=517&hei=291&fit=crop" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div> 
      </div>
      <div class="col-4">
        <div class="container text-center">
          <div class="row row-cols-1">
            <div class="col ">
              <div class="card">
                <div class="card-body">
                  <ul>
                    <li class="pb-2">Quality electronics, fast delivery..</li>
                    <li class="pb-2">Wide selection, best prices online.</li>
                    <li>Easy online shopping, attentive customer service.</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col">
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{asset('images/phone.png' )}}" class="d-block w-100" width="690px" height="300px">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('images/casque.png' )}}" class="d-block w-100" width="690px" height="300px">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('images/phone.png' )}}" class="d-block w-100" width="690px" height="300px">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    {{-- card 1  --}}
    {{-- <div class="card mt-4">
      <div class="card-header shadow-lg rounded" style="background-color: #7B70F1">
        <span class="text-white">Top deals | Tech Week</span> 
      </div>
      <div class="card-body">
        <div class="row pt-3">
          <div class="col-2">
            <img src="{{asset('images/phone.png' )}}" width="80%" class="images">
            <p class="">designation top</p>
          </div>
          <div class="col-2">
            <img src="{{asset('images/phone.png' )}}" width="80%" class="images">
            <p class="">designation top</p>
          </div>
          <div class="col-2">
            <img src="{{asset('images/phone.png' )}}" width="80%" class="images">
            <p class="">designation top</p>
          </div>
          <div class="col-2">
            <img src="{{asset('images/phone.png' )}}" width="80%" class="images">
            <p class="">designation top</p>
          </div>
          <div class="col-2">
            <img src="{{asset('images/phone.png' )}}" width="80%" class="images">
            <p class="">designation top</p>
          </div>
          <div class="col-2">
            <img src="{{asset('images/phone.png' )}}" width="80%" class="images">
            <p class="">designation top</p>
          </div>
        </div>
      </div>
    </div>
    {{-- card 2  --}}
    {{-- <div class="card mt-4">
      <div class="card-header shadow-lg rounded" style="background-color: #7B70F1">
        <span class="text-white">Headphones</span>
      </div>
      <div class="card-body">
        <div class="row pt-3">
          <div class="col-2">
            <img src="{{asset('images/casque.png' )}}" width="100%" class="images">
            <p class="">designation top</p>
          </div>
          <div class="col-2">
            <img src="{{asset('images/casque.png' )}}" width="100%" class="images">
            <p class="">designation top</p>
          </div>
          <div class="col-2">
            <img src="{{asset('images/casque.png' )}}" width="100%" class="images">
            <p class="">designation top</p>
          </div>
          <div class="col-2">
            <img src="{{asset('images/casque.png' )}}" width="100%" class="images">
            <p class="">designation top</p>
          </div>
          <div class="col-2">
            <img src="{{asset('images/casque.png' )}}" width="100%" class="images">
            <p class="">designation top</p>
          </div>
          <div class="col-2">
            <img src="{{asset('images/casque.png' )}}" width="100%" class="images">
            <p class="">designation top</p>
          </div>
        </div>
      </div>
    </div> --}}

    {{-- <div class="row pt-2 pb-2 d-flex justify-content-center">
      <div class="col-2">
        <img src="{{asset('images/samsung.png' )}}" width="100%" >
      </div>
      <div class="col-2">
        <img src="{{asset('images/huawei.png' )}}" width="100%" >
      </div>
      <div class="col-2">
        <img src="{{asset('images/apple.png' )}}" width="100%" >
      </div>
      <div class="col-2">
        <img src="{{asset('images/lg.png' )}}" width="100%" >
      </div>
      <div class="col-2">
        <img src="{{asset('images/dell.png' )}}" width="100%" >
      </div>
      <div class="col-2">
        <img src="{{asset('images/lenovo.png' )}}" width="100%" >
      </div>
    </div> --}}

    {{-- <div class="card mb-3">
        <div class="row">
          <div class="col-6">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://img.us.news.samsung.com/us/wp-content/uploads/2021/01/14084256/Galaxy-S21-Series-Unpacked-2021-38.jpg" class="d-block w-100" width="690px" height="250px">
                </div>
                <div class="carousel-item">
                  <img src="https://www.apple.com/v/iphone/home/bi/images/meta/iphone__ky2k6x5u6vue_og.png" class="d-block w-100" width="690px" height="250px">
                </div>
                <div class="carousel-item">
                  <img src="https://i0.wp.com/www.yugatech.com/wp-content/uploads/2021/01/Galaxy-S21-series-yugatech.jpg?w=720&ssl=1" class="d-block w-100" width="690px" height="250px">
                </div>
              </div>
            </div>
          </div>
          <div class="col-6"></div>
        </div>  
    </div> --}}
  {{-- </div>  --}}