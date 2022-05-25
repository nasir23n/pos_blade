@extends('backend.layouts.app')

@section('content')



    <h3 class="content_header">Font Awesome 5 fonts</h3>
    <style>

        #clp {
            width: 100px;
            height: 30px;
            opacity: 0;
            position: fixed;
            top: -1000px;
            left: -1000px;
        }

        .icon_wrap {
            display: flex;
            justify-content: center;
            align-content: center;
        }

        .icon_container {
            width: 90vw;
            background: #ffffff;
        }

        .icons {
            box-shadow: 0 2px 8px 0 #0000001a;
            display: grid;
            grid-template-columns: repeat(8, 1fr);
        }

        @media (max-width: 1250px) {
            .icons {
                grid-template-columns: repeat(6, 1fr);
            }
        }

        @media (max-width: 1000px) {
            .icons {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        @media (max-width: 768px) {
            .icons {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 500px) {
            .icons {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        .icon {
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 1px solid #ddd;
            padding: 20px 10px;
            margin-left: -1px;
            margin-top: -1px;
            text-align: center;
            transition: all 50ms ease-in-out;
        }

        .icon:active {
            transform: scale(0.9);
        }

        .icon:hover {
            cursor: pointer;
            background: #eee;
        }

        .icon i {
            font-size: 25px;
            padding-bottom: 20px;
        }

        .search_wrap {
            flex-basis: 680px;
            display: flex;
            background: rgba(0, 0, 0, 0.25);
        }

        .search {
            width: 100%;
            padding: 14px;
            border: none;
            outline: none;
            /* background: #2850A7; */
            background: transparent;
            color: #ffffff;
        }

        .search::-webkit-input-placeholder {
            /* Edge */
            color: #b7c4e2;
        }

        .search:-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: #b7c4e2;
        }

        .search::placeholder {
            color: #b7c4e2;
        }

        .search_btn {
            background: transparent;
            border: none;
            outline: none;
            color: #b7c4e2;
            padding: 14px;
            cursor: pointer;
            transition: all 0.2s ease-in-out;
        }

        .search:focus+.search_btn {
            color: #fff;
        }
        .back_to_top {
            width: 50px;
            height: 50px;
            background: var(--fave);
            position: fixed;
            bottom: 50px;
            right: 50px;
            z-index: 999;
            color: var(--bs-white);
            border-radius: 50%;
            transform: scale(0);
            transition: all 0.3s ease-in-out;
        }
        .back_to_top.active {
            transform: scale(1);
        }
    </style>
    <div class="card" style="position: sticky; top: var(--top_nav_height);">
        <div class="card-body">
            <input type="search" id="search" class="form-control" placeholder="Search Icons" autofocus="">
        </div>
    </div>
    <div class="icon_wrap">
        <div class="icon_container">
            
            <ul class="icons">
                <li class="icon spc_id_0">
                    <i class="fab fa-twitter-square"></i>
                    <span>fa-twitter-square</span>
                </li>
                <li class="icon spc_id_1">
                    <i class="fab fa-facebook-square"></i>
                    <span>fa-facebook-square</span>
                </li>
                <li class="icon spc_id_2">
                    <i class="fab fa-linkedin"></i>
                    <span>fa-linkedin</span>
                </li>
                <li class="icon spc_id_3">
                    <i class="fab fa-github-square"></i>
                    <span>fa-github-square</span>
                </li>
                <li class="icon spc_id_4">
                    <i class="fab fa-twitter"></i>
                    <span>fa-twitter</span>
                </li>
                <li class="icon spc_id_5">
                    <i class="fab fa-facebook"></i>
                    <span>fa-facebook</span>
                </li>
                <li class="icon spc_id_6">
                    <i class="fab fa-github"></i>
                    <span>fa-github</span>
                </li>
                <li class="icon spc_id_7">
                    <i class="fab fa-pinterest"></i>
                    <span>fa-pinterest</span>
                </li>
                <li class="icon spc_id_8">
                    <i class="fab fa-pinterest-square"></i>
                    <span>fa-pinterest-square</span>
                </li>
                <li class="icon spc_id_9">
                    <i class="fab fa-google-plus-square"></i>
                    <span>fa-google-plus-square</span>
                </li>
                <li class="icon spc_id_10">
                    <i class="fab fa-google-plus-g"></i>
                    <span>fa-google-plus-g</span>
                </li>
                <li class="icon spc_id_11">
                    <i class="fab fa-linkedin-in"></i>
                    <span>fa-linkedin-in</span>
                </li>
                <li class="icon spc_id_12">
                    <i class="fab fa-github-alt"></i>
                    <span>fa-github-alt</span>
                </li>
                <li class="icon spc_id_13">
                    <i class="fab fa-maxcdn"></i>
                    <span>fa-maxcdn</span>
                </li>
                <li class="icon spc_id_14">
                    <i class="fab fa-html5"></i>
                    <span>fa-html5</span>
                </li>
                <li class="icon spc_id_15">
                    <i class="fab fa-css3"></i>
                    <span>fa-css3</span>
                </li>
                <li class="icon spc_id_16">
                    <i class="fab fa-btc"></i>
                    <span>fa-btc</span>
                </li>
                <li class="icon spc_id_17">
                    <i class="fab fa-youtube"></i>
                    <span>fa-youtube</span>
                </li>
                <li class="icon spc_id_18">
                    <i class="fab fa-xing"></i>
                    <span>fa-xing</span>
                </li>
                <li class="icon spc_id_19">
                    <i class="fab fa-xing-square"></i>
                    <span>fa-xing-square</span>
                </li>
                <li class="icon spc_id_20">
                    <i class="fab fa-dropbox"></i>
                    <span>fa-dropbox</span>
                </li>
                <li class="icon spc_id_21">
                    <i class="fab fa-stack-overflow"></i>
                    <span>fa-stack-overflow</span>
                </li>
                <li class="icon spc_id_22">
                    <i class="fab fa-instagram"></i>
                    <span>fa-instagram</span>
                </li>
                <li class="icon spc_id_23">
                    <i class="fab fa-flickr"></i>
                    <span>fa-flickr</span>
                </li>
                <li class="icon spc_id_24">
                    <i class="fab fa-adn"></i>
                    <span>fa-adn</span>
                </li>
                <li class="icon spc_id_25">
                    <i class="fab fa-bitbucket"></i>
                    <span>fa-bitbucket</span>
                </li>
                <li class="icon spc_id_26">
                    <i class="fab fa-tumblr"></i>
                    <span>fa-tumblr</span>
                </li>
                <li class="icon spc_id_27">
                    <i class="fab fa-tumblr-square"></i>
                    <span>fa-tumblr-square</span>
                </li>
                <li class="icon spc_id_28">
                    <i class="fab fa-apple"></i>
                    <span>fa-apple</span>
                </li>
                <li class="icon spc_id_29">
                    <i class="fab fa-windows"></i>
                    <span>fa-windows</span>
                </li>
                <li class="icon spc_id_30">
                    <i class="fab fa-android"></i>
                    <span>fa-android</span>
                </li>
                <li class="icon spc_id_31">
                    <i class="fab fa-linux"></i>
                    <span>fa-linux</span>
                </li>
                <li class="icon spc_id_32">
                    <i class="fab fa-dribbble"></i>
                    <span>fa-dribbble</span>
                </li>
                <li class="icon spc_id_33">
                    <i class="fab fa-skype"></i>
                    <span>fa-skype</span>
                </li>
                <li class="icon spc_id_34">
                    <i class="fab fa-foursquare"></i>
                    <span>fa-foursquare</span>
                </li>
                <li class="icon spc_id_35">
                    <i class="fab fa-trello"></i>
                    <span>fa-trello</span>
                </li>
                <li class="icon spc_id_36">
                    <i class="fab fa-gratipay"></i>
                    <span>fa-gratipay</span>
                </li>
                <li class="icon spc_id_37">
                    <i class="fab fa-vk"></i>
                    <span>fa-vk</span>
                </li>
                <li class="icon spc_id_38">
                    <i class="fab fa-weibo"></i>
                    <span>fa-weibo</span>
                </li>
                <li class="icon spc_id_39">
                    <i class="fab fa-renren"></i>
                    <span>fa-renren</span>
                </li>
                <li class="icon spc_id_40">
                    <i class="fab fa-pagelines"></i>
                    <span>fa-pagelines</span>
                </li>
                <li class="icon spc_id_41">
                    <i class="fab fa-stack-exchange"></i>
                    <span>fa-stack-exchange</span>
                </li>
                <li class="icon spc_id_42">
                    <i class="fab fa-vimeo-square"></i>
                    <span>fa-vimeo-square</span>
                </li>
                <li class="icon spc_id_43">
                    <i class="fab fa-slack"></i>
                    <span>fa-slack</span>
                </li>
                <li class="icon spc_id_44">
                    <i class="fab fa-wordpress"></i>
                    <span>fa-wordpress</span>
                </li>
                <li class="icon spc_id_45">
                    <i class="fab fa-openid"></i>
                    <span>fa-openid</span>
                </li>
                <li class="icon spc_id_46">
                    <i class="fab fa-yahoo"></i>
                    <span>fa-yahoo</span>
                </li>
                <li class="icon spc_id_47">
                    <i class="fab fa-google"></i>
                    <span>fa-google</span>
                </li>
                <li class="icon spc_id_48">
                    <i class="fab fa-reddit"></i>
                    <span>fa-reddit</span>
                </li>
                <li class="icon spc_id_49">
                    <i class="fab fa-reddit-square"></i>
                    <span>fa-reddit-square</span>
                </li>
                <li class="icon spc_id_50">
                    <i class="fab fa-stumbleupon-circle"></i>
                    <span>fa-stumbleupon-circle</span>
                </li>
                <li class="icon spc_id_51">
                    <i class="fab fa-stumbleupon"></i>
                    <span>fa-stumbleupon</span>
                </li>
                <li class="icon spc_id_52">
                    <i class="fab fa-delicious"></i>
                    <span>fa-delicious</span>
                </li>
                <li class="icon spc_id_53">
                    <i class="fab fa-digg"></i>
                    <span>fa-digg</span>
                </li>
                <li class="icon spc_id_54">
                    <i class="fab fa-pied-piper-pp"></i>
                    <span>fa-pied-piper-pp</span>
                </li>
                <li class="icon spc_id_55">
                    <i class="fab fa-pied-piper-alt"></i>
                    <span>fa-pied-piper-alt</span>
                </li>
                <li class="icon spc_id_56">
                    <i class="fab fa-drupal"></i>
                    <span>fa-drupal</span>
                </li>
                <li class="icon spc_id_57">
                    <i class="fab fa-joomla"></i>
                    <span>fa-joomla</span>
                </li>
                <li class="icon spc_id_58">
                    <i class="fab fa-behance"></i>
                    <span>fa-behance</span>
                </li>
                <li class="icon spc_id_59">
                    <i class="fab fa-behance-square"></i>
                    <span>fa-behance-square</span>
                </li>
                <li class="icon spc_id_60">
                    <i class="fab fa-steam"></i>
                    <span>fa-steam</span>
                </li>
                <li class="icon spc_id_61">
                    <i class="fab fa-steam-square"></i>
                    <span>fa-steam-square</span>
                </li>
                <li class="icon spc_id_62">
                    <i class="fab fa-spotify"></i>
                    <span>fa-spotify</span>
                </li>
                <li class="icon spc_id_63">
                    <i class="fab fa-deviantart"></i>
                    <span>fa-deviantart</span>
                </li>
                <li class="icon spc_id_64">
                    <i class="fab fa-soundcloud"></i>
                    <span>fa-soundcloud</span>
                </li>
                <li class="icon spc_id_65">
                    <i class="fab fa-vine"></i>
                    <span>fa-vine</span>
                </li>
                <li class="icon spc_id_66">
                    <i class="fab fa-codepen"></i>
                    <span>fa-codepen</span>
                </li>
                <li class="icon spc_id_67">
                    <i class="fab fa-jsfiddle"></i>
                    <span>fa-jsfiddle</span>
                </li>
                <li class="icon spc_id_68">
                    <i class="fab fa-rebel"></i>
                    <span>fa-rebel</span>
                </li>
                <li class="icon spc_id_69">
                    <i class="fab fa-empire"></i>
                    <span>fa-empire</span>
                </li>
                <li class="icon spc_id_70">
                    <i class="fab fa-git-square"></i>
                    <span>fa-git-square</span>
                </li>
                <li class="icon spc_id_71">
                    <i class="fab fa-git"></i>
                    <span>fa-git</span>
                </li>
                <li class="icon spc_id_72">
                    <i class="fab fa-hacker-news"></i>
                    <span>fa-hacker-news</span>
                </li>
                <li class="icon spc_id_73">
                    <i class="fab fa-tencent-weibo"></i>
                    <span>fa-tencent-weibo</span>
                </li>
                <li class="icon spc_id_74">
                    <i class="fab fa-qq"></i>
                    <span>fa-qq</span>
                </li>
                <li class="icon spc_id_75">
                    <i class="fab fa-weixin"></i>
                    <span>fa-weixin</span>
                </li>
                <li class="icon spc_id_76">
                    <i class="fab fa-slideshare"></i>
                    <span>fa-slideshare</span>
                </li>
                <li class="icon spc_id_77">
                    <i class="fab fa-twitch"></i>
                    <span>fa-twitch</span>
                </li>
                <li class="icon spc_id_78">
                    <i class="fab fa-yelp"></i>
                    <span>fa-yelp</span>
                </li>
                <li class="icon spc_id_79">
                    <i class="fab fa-paypal"></i>
                    <span>fa-paypal</span>
                </li>
                <li class="icon spc_id_80">
                    <i class="fab fa-google-wallet"></i>
                    <span>fa-google-wallet</span>
                </li>
                <li class="icon spc_id_81">
                    <i class="fab fa-cc-visa"></i>
                    <span>fa-cc-visa</span>
                </li>
                <li class="icon spc_id_82">
                    <i class="fab fa-cc-mastercard"></i>
                    <span>fa-cc-mastercard</span>
                </li>
                <li class="icon spc_id_83">
                    <i class="fab fa-cc-discover"></i>
                    <span>fa-cc-discover</span>
                </li>
                <li class="icon spc_id_84">
                    <i class="fab fa-cc-amex"></i>
                    <span>fa-cc-amex</span>
                </li>
                <li class="icon spc_id_85">
                    <i class="fab fa-cc-paypal"></i>
                    <span>fa-cc-paypal</span>
                </li>
                <li class="icon spc_id_86">
                    <i class="fab fa-cc-stripe"></i>
                    <span>fa-cc-stripe</span>
                </li>
                <li class="icon spc_id_87">
                    <i class="fab fa-lastfm"></i>
                    <span>fa-lastfm</span>
                </li>
                <li class="icon spc_id_88">
                    <i class="fab fa-lastfm-square"></i>
                    <span>fa-lastfm-square</span>
                </li>
                <li class="icon spc_id_89">
                    <i class="fab fa-ioxhost"></i>
                    <span>fa-ioxhost</span>
                </li>
                <li class="icon spc_id_90">
                    <i class="fab fa-angellist"></i>
                    <span>fa-angellist</span>
                </li>
                <li class="icon spc_id_91">
                    <i class="fab fa-buysellads"></i>
                    <span>fa-buysellads</span>
                </li>
                <li class="icon spc_id_92">
                    <i class="fab fa-connectdevelop"></i>
                    <span>fa-connectdevelop</span>
                </li>
                <li class="icon spc_id_93">
                    <i class="fab fa-dashcube"></i>
                    <span>fa-dashcube</span>
                </li>
                <li class="icon spc_id_94">
                    <i class="fab fa-forumbee"></i>
                    <span>fa-forumbee</span>
                </li>
                <li class="icon spc_id_95">
                    <i class="fab fa-leanpub"></i>
                    <span>fa-leanpub</span>
                </li>
                <li class="icon spc_id_96">
                    <i class="fab fa-sellsy"></i>
                    <span>fa-sellsy</span>
                </li>
                <li class="icon spc_id_97">
                    <i class="fab fa-shirtsinbulk"></i>
                    <span>fa-shirtsinbulk</span>
                </li>
                <li class="icon spc_id_98">
                    <i class="fab fa-simplybuilt"></i>
                    <span>fa-simplybuilt</span>
                </li>
                <li class="icon spc_id_99">
                    <i class="fab fa-skyatlas"></i>
                    <span>fa-skyatlas</span>
                </li>
                <li class="icon spc_id_100">
                    <i class="fab fa-pinterest-p"></i>
                    <span>fa-pinterest-p</span>
                </li>
                <li class="icon spc_id_101">
                    <i class="fab fa-whatsapp"></i>
                    <span>fa-whatsapp</span>
                </li>
                <li class="icon spc_id_102">
                    <i class="fab fa-viacoin"></i>
                    <span>fa-viacoin</span>
                </li>
                <li class="icon spc_id_103">
                    <i class="fab fa-medium"></i>
                    <span>fa-medium</span>
                </li>
                <li class="icon spc_id_104">
                    <i class="fab fa-y-combinator"></i>
                    <span>fa-y-combinator</span>
                </li>
                <li class="icon spc_id_105">
                    <i class="fab fa-optin-monster"></i>
                    <span>fa-optin-monster</span>
                </li>
                <li class="icon spc_id_106">
                    <i class="fab fa-opencart"></i>
                    <span>fa-opencart</span>
                </li>
                <li class="icon spc_id_107">
                    <i class="fab fa-expeditedssl"></i>
                    <span>fa-expeditedssl</span>
                </li>
                <li class="icon spc_id_108">
                    <i class="fab fa-cc-jcb"></i>
                    <span>fa-cc-jcb</span>
                </li>
                <li class="icon spc_id_109">
                    <i class="fab fa-cc-diners-club"></i>
                    <span>fa-cc-diners-club</span>
                </li>
                <li class="icon spc_id_110">
                    <i class="fab fa-creative-commons"></i>
                    <span>fa-creative-commons</span>
                </li>
                <li class="icon spc_id_111">
                    <i class="fab fa-gg"></i>
                    <span>fa-gg</span>
                </li>
                <li class="icon spc_id_112">
                    <i class="fab fa-gg-circle"></i>
                    <span>fa-gg-circle</span>
                </li>
                <li class="icon spc_id_113">
                    <i class="fab fa-tripadvisor"></i>
                    <span>fa-tripadvisor</span>
                </li>
                <li class="icon spc_id_114">
                    <i class="fab fa-odnoklassniki"></i>
                    <span>fa-odnoklassniki</span>
                </li>
                <li class="icon spc_id_115">
                    <i class="fab fa-odnoklassniki-square"></i>
                    <span>fa-odnoklassniki-square</span>
                </li>
                <li class="icon spc_id_116">
                    <i class="fab fa-get-pocket"></i>
                    <span>fa-get-pocket</span>
                </li>
                <li class="icon spc_id_117">
                    <i class="fab fa-wikipedia-w"></i>
                    <span>fa-wikipedia-w</span>
                </li>
                <li class="icon spc_id_118">
                    <i class="fab fa-safari"></i>
                    <span>fa-safari</span>
                </li>
                <li class="icon spc_id_119">
                    <i class="fab fa-chrome"></i>
                    <span>fa-chrome</span>
                </li>
                <li class="icon spc_id_120">
                    <i class="fab fa-firefox"></i>
                    <span>fa-firefox</span>
                </li>
                <li class="icon spc_id_121">
                    <i class="fab fa-opera"></i>
                    <span>fa-opera</span>
                </li>
                <li class="icon spc_id_122">
                    <i class="fab fa-internet-explorer"></i>
                    <span>fa-internet-explorer</span>
                </li>
                <li class="icon spc_id_123">
                    <i class="fab fa-contao"></i>
                    <span>fa-contao</span>
                </li>
                <li class="icon spc_id_124">
                    <i class="fab fa-500px"></i>
                    <span>fa-500px</span>
                </li>
                <li class="icon spc_id_125">
                    <i class="fab fa-amazon"></i>
                    <span>fa-amazon</span>
                </li>
                <li class="icon spc_id_126">
                    <i class="fab fa-houzz"></i>
                    <span>fa-houzz</span>
                </li>
                <li class="icon spc_id_127">
                    <i class="fab fa-vimeo-v"></i>
                    <span>fa-vimeo-v</span>
                </li>
                <li class="icon spc_id_128">
                    <i class="fab fa-black-tie"></i>
                    <span>fa-black-tie</span>
                </li>
                <li class="icon spc_id_129">
                    <i class="fab fa-fonticons"></i>
                    <span>fa-fonticons</span>
                </li>
                <li class="icon spc_id_130">
                    <i class="fab fa-reddit-alien"></i>
                    <span>fa-reddit-alien</span>
                </li>
                <li class="icon spc_id_131">
                    <i class="fab fa-edge"></i>
                    <span>fa-edge</span>
                </li>
                <li class="icon spc_id_132">
                    <i class="fab fa-codiepie"></i>
                    <span>fa-codiepie</span>
                </li>
                <li class="icon spc_id_133">
                    <i class="fab fa-modx"></i>
                    <span>fa-modx</span>
                </li>
                <li class="icon spc_id_134">
                    <i class="fab fa-fort-awesome"></i>
                    <span>fa-fort-awesome</span>
                </li>
                <li class="icon spc_id_135">
                    <i class="fab fa-usb"></i>
                    <span>fa-usb</span>
                </li>
                <li class="icon spc_id_136">
                    <i class="fab fa-product-hunt"></i>
                    <span>fa-product-hunt</span>
                </li>
                <li class="icon spc_id_137">
                    <i class="fab fa-mixcloud"></i>
                    <span>fa-mixcloud</span>
                </li>
                <li class="icon spc_id_138">
                    <i class="fab fa-scribd"></i>
                    <span>fa-scribd</span>
                </li>
                <li class="icon spc_id_139">
                    <i class="fab fa-bluetooth"></i>
                    <span>fa-bluetooth</span>
                </li>
                <li class="icon spc_id_140">
                    <i class="fab fa-bluetooth-b"></i>
                    <span>fa-bluetooth-b</span>
                </li>
                <li class="icon spc_id_141">
                    <i class="fab fa-gitlab"></i>
                    <span>fa-gitlab</span>
                </li>
                <li class="icon spc_id_142">
                    <i class="fab fa-wpbeginner"></i>
                    <span>fa-wpbeginner</span>
                </li>
                <li class="icon spc_id_143">
                    <i class="fab fa-wpforms"></i>
                    <span>fa-wpforms</span>
                </li>
                <li class="icon spc_id_144">
                    <i class="fab fa-envira"></i>
                    <span>fa-envira</span>
                </li>
                <li class="icon spc_id_145">
                    <i class="fab fa-glide"></i>
                    <span>fa-glide</span>
                </li>
                <li class="icon spc_id_146">
                    <i class="fab fa-glide-g"></i>
                    <span>fa-glide-g</span>
                </li>
                <li class="icon spc_id_147">
                    <i class="fab fa-viadeo"></i>
                    <span>fa-viadeo</span>
                </li>
                <li class="icon spc_id_148">
                    <i class="fab fa-viadeo-square"></i>
                    <span>fa-viadeo-square</span>
                </li>
                <li class="icon spc_id_149">
                    <i class="fab fa-snapchat"></i>
                    <span>fa-snapchat</span>
                </li>
                <li class="icon spc_id_150">
                    <i class="fab fa-snapchat-ghost"></i>
                    <span>fa-snapchat-ghost</span>
                </li>
                <li class="icon spc_id_151">
                    <i class="fab fa-snapchat-square"></i>
                    <span>fa-snapchat-square</span>
                </li>
                <li class="icon spc_id_152">
                    <i class="fab fa-pied-piper"></i>
                    <span>fa-pied-piper</span>
                </li>
                <li class="icon spc_id_153">
                    <i class="fab fa-first-order"></i>
                    <span>fa-first-order</span>
                </li>
                <li class="icon spc_id_154">
                    <i class="fab fa-yoast"></i>
                    <span>fa-yoast</span>
                </li>
                <li class="icon spc_id_155">
                    <i class="fab fa-themeisle"></i>
                    <span>fa-themeisle</span>
                </li>
                <li class="icon spc_id_156">
                    <i class="fab fa-google-plus"></i>
                    <span>fa-google-plus</span>
                </li>
                <li class="icon spc_id_157">
                    <i class="fab fa-font-awesome"></i>
                    <span>fa-font-awesome</span>
                </li>
                <li class="icon spc_id_158">
                    <i class="fab fa-linode"></i>
                    <span>fa-linode</span>
                </li>
                <li class="icon spc_id_159">
                    <i class="fab fa-quora"></i>
                    <span>fa-quora</span>
                </li>
                <li class="icon spc_id_160">
                    <i class="fab fa-free-code-camp"></i>
                    <span>fa-free-code-camp</span>
                </li>
                <li class="icon spc_id_161">
                    <i class="fab fa-telegram"></i>
                    <span>fa-telegram</span>
                </li>
                <li class="icon spc_id_162">
                    <i class="fab fa-bandcamp"></i>
                    <span>fa-bandcamp</span>
                </li>
                <li class="icon spc_id_163">
                    <i class="fab fa-grav"></i>
                    <span>fa-grav</span>
                </li>
                <li class="icon spc_id_164">
                    <i class="fab fa-etsy"></i>
                    <span>fa-etsy</span>
                </li>
                <li class="icon spc_id_165">
                    <i class="fab fa-imdb"></i>
                    <span>fa-imdb</span>
                </li>
                <li class="icon spc_id_166">
                    <i class="fab fa-ravelry"></i>
                    <span>fa-ravelry</span>
                </li>
                <li class="icon spc_id_167">
                    <i class="fab fa-sellcast"></i>
                    <span>fa-sellcast</span>
                </li>
                <li class="icon spc_id_168">
                    <i class="fab fa-superpowers"></i>
                    <span>fa-superpowers</span>
                </li>
                <li class="icon spc_id_169">
                    <i class="fab fa-wpexplorer"></i>
                    <span>fa-wpexplorer</span>
                </li>
                <li class="icon spc_id_170">
                    <i class="fab fa-meetup"></i>
                    <span>fa-meetup</span>
                </li>
                <li class="icon spc_id_171">
                    <i class="fab fa-font-awesome-alt"></i>
                    <span>fa-font-awesome-alt</span>
                </li>
                <li class="icon spc_id_172">
                    <i class="fab fa-accessible-icon"></i>
                    <span>fa-accessible-icon</span>
                </li>
                <li class="icon spc_id_173">
                    <i class="fab fa-accusoft"></i>
                    <span>fa-accusoft</span>
                </li>
                <li class="icon spc_id_174">
                    <i class="fab fa-adversal"></i>
                    <span>fa-adversal</span>
                </li>
                <li class="icon spc_id_175">
                    <i class="fab fa-affiliatetheme"></i>
                    <span>fa-affiliatetheme</span>
                </li>
                <li class="icon spc_id_176">
                    <i class="fab fa-algolia"></i>
                    <span>fa-algolia</span>
                </li>
                <li class="icon spc_id_177">
                    <i class="fab fa-amilia"></i>
                    <span>fa-amilia</span>
                </li>
                <li class="icon spc_id_178">
                    <i class="fab fa-angrycreative"></i>
                    <span>fa-angrycreative</span>
                </li>
                <li class="icon spc_id_179">
                    <i class="fab fa-app-store"></i>
                    <span>fa-app-store</span>
                </li>
                <li class="icon spc_id_180">
                    <i class="fab fa-app-store-ios"></i>
                    <span>fa-app-store-ios</span>
                </li>
                <li class="icon spc_id_181">
                    <i class="fab fa-apper"></i>
                    <span>fa-apper</span>
                </li>
                <li class="icon spc_id_182">
                    <i class="fab fa-asymmetrik"></i>
                    <span>fa-asymmetrik</span>
                </li>
                <li class="icon spc_id_183">
                    <i class="fab fa-audible"></i>
                    <span>fa-audible</span>
                </li>
                <li class="icon spc_id_184">
                    <i class="fab fa-avianex"></i>
                    <span>fa-avianex</span>
                </li>
                <li class="icon spc_id_185">
                    <i class="fab fa-aws"></i>
                    <span>fa-aws</span>
                </li>
                <li class="icon spc_id_186">
                    <i class="fab fa-bimobject"></i>
                    <span>fa-bimobject</span>
                </li>
                <li class="icon spc_id_187">
                    <i class="fab fa-bitcoin"></i>
                    <span>fa-bitcoin</span>
                </li>
                <li class="icon spc_id_188">
                    <i class="fab fa-bity"></i>
                    <span>fa-bity</span>
                </li>
                <li class="icon spc_id_189">
                    <i class="fab fa-blackberry"></i>
                    <span>fa-blackberry</span>
                </li>
                <li class="icon spc_id_190">
                    <i class="fab fa-blogger"></i>
                    <span>fa-blogger</span>
                </li>
                <li class="icon spc_id_191">
                    <i class="fab fa-blogger-b"></i>
                    <span>fa-blogger-b</span>
                </li>
                <li class="icon spc_id_192">
                    <i class="fab fa-buromobelexperte"></i>
                    <span>fa-buromobelexperte</span>
                </li>
                <li class="icon spc_id_193">
                    <i class="fab fa-centercode"></i>
                    <span>fa-centercode</span>
                </li>
                <li class="icon spc_id_194">
                    <i class="fab fa-cloudscale"></i>
                    <span>fa-cloudscale</span>
                </li>
                <li class="icon spc_id_195">
                    <i class="fab fa-cloudsmith"></i>
                    <span>fa-cloudsmith</span>
                </li>
                <li class="icon spc_id_196">
                    <i class="fab fa-cloudversify"></i>
                    <span>fa-cloudversify</span>
                </li>
                <li class="icon spc_id_197">
                    <i class="fab fa-cpanel"></i>
                    <span>fa-cpanel</span>
                </li>
                <li class="icon spc_id_198">
                    <i class="fab fa-css3-alt"></i>
                    <span>fa-css3-alt</span>
                </li>
                <li class="icon spc_id_199">
                    <i class="fab fa-cuttlefish"></i>
                    <span>fa-cuttlefish</span>
                </li>
                <li class="icon spc_id_200">
                    <i class="fab fa-d-and-d"></i>
                    <span>fa-d-and-d</span>
                </li>
                <li class="icon spc_id_201">
                    <i class="fab fa-deploydog"></i>
                    <span>fa-deploydog</span>
                </li>
                <li class="icon spc_id_202">
                    <i class="fab fa-deskpro"></i>
                    <span>fa-deskpro</span>
                </li>
                <li class="icon spc_id_203">
                    <i class="fab fa-digital-ocean"></i>
                    <span>fa-digital-ocean</span>
                </li>
                <li class="icon spc_id_204">
                    <i class="fab fa-discord"></i>
                    <span>fa-discord</span>
                </li>
                <li class="icon spc_id_205">
                    <i class="fab fa-discourse"></i>
                    <span>fa-discourse</span>
                </li>
                <li class="icon spc_id_206">
                    <i class="fab fa-dochub"></i>
                    <span>fa-dochub</span>
                </li>
                <li class="icon spc_id_207">
                    <i class="fab fa-docker"></i>
                    <span>fa-docker</span>
                </li>
                <li class="icon spc_id_208">
                    <i class="fab fa-draft2digital"></i>
                    <span>fa-draft2digital</span>
                </li>
                <li class="icon spc_id_209">
                    <i class="fab fa-dribbble-square"></i>
                    <span>fa-dribbble-square</span>
                </li>
                <li class="icon spc_id_210">
                    <i class="fab fa-dyalog"></i>
                    <span>fa-dyalog</span>
                </li>
                <li class="icon spc_id_211">
                    <i class="fab fa-earlybirds"></i>
                    <span>fa-earlybirds</span>
                </li>
                <li class="icon spc_id_212">
                    <i class="fab fa-erlang"></i>
                    <span>fa-erlang</span>
                </li>
                <li class="icon spc_id_213">
                    <i class="fab fa-facebook-f"></i>
                    <span>fa-facebook-f</span>
                </li>
                <li class="icon spc_id_214">
                    <i class="fab fa-facebook-messenger"></i>
                    <span>fa-facebook-messenger</span>
                </li>
                <li class="icon spc_id_215">
                    <i class="fab fa-firstdraft"></i>
                    <span>fa-firstdraft</span>
                </li>
                <li class="icon spc_id_216">
                    <i class="fab fa-fonticons-fi"></i>
                    <span>fa-fonticons-fi</span>
                </li>
                <li class="icon spc_id_217">
                    <i class="fab fa-fort-awesome-alt"></i>
                    <span>fa-fort-awesome-alt</span>
                </li>
                <li class="icon spc_id_218">
                    <i class="fab fa-freebsd"></i>
                    <span>fa-freebsd</span>
                </li>
                <li class="icon spc_id_219">
                    <i class="fab fa-gitkraken"></i>
                    <span>fa-gitkraken</span>
                </li>
                <li class="icon spc_id_220">
                    <i class="fab fa-gofore"></i>
                    <span>fa-gofore</span>
                </li>
                <li class="icon spc_id_221">
                    <i class="fab fa-goodreads"></i>
                    <span>fa-goodreads</span>
                </li>
                <li class="icon spc_id_222">
                    <i class="fab fa-goodreads-g"></i>
                    <span>fa-goodreads-g</span>
                </li>
                <li class="icon spc_id_223">
                    <i class="fab fa-google-drive"></i>
                    <span>fa-google-drive</span>
                </li>
                <li class="icon spc_id_224">
                    <i class="fab fa-google-play"></i>
                    <span>fa-google-play</span>
                </li>
                <li class="icon spc_id_225">
                    <i class="fab fa-gripfire"></i>
                    <span>fa-gripfire</span>
                </li>
                <li class="icon spc_id_226">
                    <i class="fab fa-grunt"></i>
                    <span>fa-grunt</span>
                </li>
                <li class="icon spc_id_227">
                    <i class="fab fa-gulp"></i>
                    <span>fa-gulp</span>
                </li>
                <li class="icon spc_id_228">
                    <i class="fab fa-hacker-news-square"></i>
                    <span>fa-hacker-news-square</span>
                </li>
                <li class="icon spc_id_229">
                    <i class="fab fa-hire-a-helper"></i>
                    <span>fa-hire-a-helper</span>
                </li>
                <li class="icon spc_id_230">
                    <i class="fab fa-hotjar"></i>
                    <span>fa-hotjar</span>
                </li>
                <li class="icon spc_id_231">
                    <i class="fab fa-hubspot"></i>
                    <span>fa-hubspot</span>
                </li>
                <li class="icon spc_id_232">
                    <i class="fab fa-itunes"></i>
                    <span>fa-itunes</span>
                </li>
                <li class="icon spc_id_233">
                    <i class="fab fa-itunes-note"></i>
                    <span>fa-itunes-note</span>
                </li>
                <li class="icon spc_id_234">
                    <i class="fab fa-jenkins"></i>
                    <span>fa-jenkins</span>
                </li>
                <li class="icon spc_id_235">
                    <i class="fab fa-joget"></i>
                    <span>fa-joget</span>
                </li>
                <li class="icon spc_id_236">
                    <i class="fab fa-js"></i>
                    <span>fa-js</span>
                </li>
                <li class="icon spc_id_237">
                    <i class="fab fa-js-square"></i>
                    <span>fa-js-square</span>
                </li>
                <li class="icon spc_id_238">
                    <i class="fab fa-keycdn"></i>
                    <span>fa-keycdn</span>
                </li>
                <li class="icon spc_id_239">
                    <i class="fab fa-kickstarter"></i>
                    <span>fa-kickstarter</span>
                </li>
                <li class="icon spc_id_240">
                    <i class="fab fa-kickstarter-k"></i>
                    <span>fa-kickstarter-k</span>
                </li>
                <li class="icon spc_id_241">
                    <i class="fab fa-laravel"></i>
                    <span>fa-laravel</span>
                </li>
                <li class="icon spc_id_242">
                    <i class="fab fa-line"></i>
                    <span>fa-line</span>
                </li>
                <li class="icon spc_id_243">
                    <i class="fab fa-lyft"></i>
                    <span>fa-lyft</span>
                </li>
                <li class="icon spc_id_244">
                    <i class="fab fa-magento"></i>
                    <span>fa-magento</span>
                </li>
                <li class="icon spc_id_245">
                    <i class="fab fa-medapps"></i>
                    <span>fa-medapps</span>
                </li>
                <li class="icon spc_id_246">
                    <i class="fab fa-medium-m"></i>
                    <span>fa-medium-m</span>
                </li>
                <li class="icon spc_id_247">
                    <i class="fab fa-medrt"></i>
                    <span>fa-medrt</span>
                </li>
                <li class="icon spc_id_248">
                    <i class="fab fa-microsoft"></i>
                    <span>fa-microsoft</span>
                </li>
                <li class="icon spc_id_249">
                    <i class="fab fa-mix"></i>
                    <span>fa-mix</span>
                </li>
                <li class="icon spc_id_250">
                    <i class="fab fa-mizuni"></i>
                    <span>fa-mizuni</span>
                </li>
                <li class="icon spc_id_251">
                    <i class="fab fa-monero"></i>
                    <span>fa-monero</span>
                </li>
                <li class="icon spc_id_252">
                    <i class="fab fa-napster"></i>
                    <span>fa-napster</span>
                </li>
                <li class="icon spc_id_253">
                    <i class="fab fa-node-js"></i>
                    <span>fa-node-js</span>
                </li>
                <li class="icon spc_id_254">
                    <i class="fab fa-npm"></i>
                    <span>fa-npm</span>
                </li>
                <li class="icon spc_id_255">
                    <i class="fab fa-ns8"></i>
                    <span>fa-ns8</span>
                </li>
                <li class="icon spc_id_256">
                    <i class="fab fa-nutritionix"></i>
                    <span>fa-nutritionix</span>
                </li>
                <li class="icon spc_id_257">
                    <i class="fab fa-page4"></i>
                    <span>fa-page4</span>
                </li>
                <li class="icon spc_id_258">
                    <i class="fab fa-palfed"></i>
                    <span>fa-palfed</span>
                </li>
                <li class="icon spc_id_259">
                    <i class="fab fa-patreon"></i>
                    <span>fa-patreon</span>
                </li>
                <li class="icon spc_id_260">
                    <i class="fab fa-periscope"></i>
                    <span>fa-periscope</span>
                </li>
                <li class="icon spc_id_261">
                    <i class="fab fa-phabricator"></i>
                    <span>fa-phabricator</span>
                </li>
                <li class="icon spc_id_262">
                    <i class="fab fa-phoenix-framework"></i>
                    <span>fa-phoenix-framework</span>
                </li>
                <li class="icon spc_id_263">
                    <i class="fab fa-playstation"></i>
                    <span>fa-playstation</span>
                </li>
                <li class="icon spc_id_264">
                    <i class="fab fa-pushed"></i>
                    <span>fa-pushed</span>
                </li>
                <li class="icon spc_id_265">
                    <i class="fab fa-python"></i>
                    <span>fa-python</span>
                </li>
                <li class="icon spc_id_266">
                    <i class="fab fa-red-river"></i>
                    <span>fa-red-river</span>
                </li>
                <li class="icon spc_id_267">
                    <i class="fab fa-wpressr"></i>
                    <span>fa-wpressr</span>
                </li>
                <li class="icon spc_id_268">
                    <i class="fab fa-replyd"></i>
                    <span>fa-replyd</span>
                </li>
                <li class="icon spc_id_269">
                    <i class="fab fa-resolving"></i>
                    <span>fa-resolving</span>
                </li>
                <li class="icon spc_id_270">
                    <i class="fab fa-rocketchat"></i>
                    <span>fa-rocketchat</span>
                </li>
                <li class="icon spc_id_271">
                    <i class="fab fa-rockrms"></i>
                    <span>fa-rockrms</span>
                </li>
                <li class="icon spc_id_272">
                    <i class="fab fa-schlix"></i>
                    <span>fa-schlix</span>
                </li>
                <li class="icon spc_id_273">
                    <i class="fab fa-searchengin"></i>
                    <span>fa-searchengin</span>
                </li>
                <li class="icon spc_id_274">
                    <i class="fab fa-servicestack"></i>
                    <span>fa-servicestack</span>
                </li>
                <li class="icon spc_id_275">
                    <i class="fab fa-sistrix"></i>
                    <span>fa-sistrix</span>
                </li>
                <li class="icon spc_id_276">
                    <i class="fab fa-slack-hash"></i>
                    <span>fa-slack-hash</span>
                </li>
                <li class="icon spc_id_277">
                    <i class="fab fa-speakap"></i>
                    <span>fa-speakap</span>
                </li>
                <li class="icon spc_id_278">
                    <i class="fab fa-staylinked"></i>
                    <span>fa-staylinked</span>
                </li>
                <li class="icon spc_id_279">
                    <i class="fab fa-steam-symbol"></i>
                    <span>fa-steam-symbol</span>
                </li>
                <li class="icon spc_id_280">
                    <i class="fab fa-sticker-mule"></i>
                    <span>fa-sticker-mule</span>
                </li>
                <li class="icon spc_id_281">
                    <i class="fab fa-studiovinari"></i>
                    <span>fa-studiovinari</span>
                </li>
                <li class="icon spc_id_282">
                    <i class="fab fa-supple"></i>
                    <span>fa-supple</span>
                </li>
                <li class="icon spc_id_283">
                    <i class="fab fa-telegram-plane"></i>
                    <span>fa-telegram-plane</span>
                </li>
                <li class="icon spc_id_284">
                    <i class="fab fa-uber"></i>
                    <span>fa-uber</span>
                </li>
                <li class="icon spc_id_285">
                    <i class="fab fa-uikit"></i>
                    <span>fa-uikit</span>
                </li>
                <li class="icon spc_id_286">
                    <i class="fab fa-uniregistry"></i>
                    <span>fa-uniregistry</span>
                </li>
                <li class="icon spc_id_287">
                    <i class="fab fa-untappd"></i>
                    <span>fa-untappd</span>
                </li>
                <li class="icon spc_id_288">
                    <i class="fab fa-ussunnah"></i>
                    <span>fa-ussunnah</span>
                </li>
                <li class="icon spc_id_289">
                    <i class="fab fa-vaadin"></i>
                    <span>fa-vaadin</span>
                </li>
                <li class="icon spc_id_290">
                    <i class="fab fa-viber"></i>
                    <span>fa-viber</span>
                </li>
                <li class="icon spc_id_291">
                    <i class="fab fa-vimeo"></i>
                    <span>fa-vimeo</span>
                </li>
                <li class="icon spc_id_292">
                    <i class="fab fa-vnv"></i>
                    <span>fa-vnv</span>
                </li>
                <li class="icon spc_id_293">
                    <i class="fab fa-whatsapp-square"></i>
                    <span>fa-whatsapp-square</span>
                </li>
                <li class="icon spc_id_294">
                    <i class="fab fa-whmcs"></i>
                    <span>fa-whmcs</span>
                </li>
                <li class="icon spc_id_295">
                    <i class="fab fa-wordpress-simple"></i>
                    <span>fa-wordpress-simple</span>
                </li>
                <li class="icon spc_id_296">
                    <i class="fab fa-xbox"></i>
                    <span>fa-xbox</span>
                </li>
                <li class="icon spc_id_297">
                    <i class="fab fa-yandex"></i>
                    <span>fa-yandex</span>
                </li>
                <li class="icon spc_id_298">
                    <i class="fab fa-yandex-international"></i>
                    <span>fa-yandex-international</span>
                </li>
                <li class="icon spc_id_299">
                    <i class="fab fa-apple-pay"></i>
                    <span>fa-apple-pay</span>
                </li>
                <li class="icon spc_id_300">
                    <i class="fab fa-cc-apple-pay"></i>
                    <span>fa-cc-apple-pay</span>
                </li>
                <li class="icon spc_id_301">
                    <i class="fab fa-fly"></i>
                    <span>fa-fly</span>
                </li>
                <li class="icon spc_id_302">
                    <i class="fab fa-node"></i>
                    <span>fa-node</span>
                </li>
                <li class="icon spc_id_303">
                    <i class="fab fa-osi"></i>
                    <span>fa-osi</span>
                </li>
                <li class="icon spc_id_304">
                    <i class="fab fa-react"></i>
                    <span>fa-react</span>
                </li>
                <li class="icon spc_id_305">
                    <i class="fab fa-autoprefixer"></i>
                    <span>fa-autoprefixer</span>
                </li>
                <li class="icon spc_id_306">
                    <i class="fab fa-less"></i>
                    <span>fa-less</span>
                </li>
                <li class="icon spc_id_307">
                    <i class="fab fa-sass"></i>
                    <span>fa-sass</span>
                </li>
                <li class="icon spc_id_308">
                    <i class="fab fa-vuejs"></i>
                    <span>fa-vuejs</span>
                </li>
                <li class="icon spc_id_309">
                    <i class="fab fa-angular"></i>
                    <span>fa-angular</span>
                </li>
                <li class="icon spc_id_310">
                    <i class="fab fa-aviato"></i>
                    <span>fa-aviato</span>
                </li>
                <li class="icon spc_id_311">
                    <i class="fab fa-ember"></i>
                    <span>fa-ember</span>
                </li>
                <li class="icon spc_id_312">
                    <i class="fab fa-font-awesome-flag"></i>
                    <span>fa-font-awesome-flag</span>
                </li>
                <li class="icon spc_id_313">
                    <i class="fab fa-gitter"></i>
                    <span>fa-gitter</span>
                </li>
                <li class="icon spc_id_314">
                    <i class="fab fa-hooli"></i>
                    <span>fa-hooli</span>
                </li>
                <li class="icon spc_id_315">
                    <i class="fab fa-strava"></i>
                    <span>fa-strava</span>
                </li>
                <li class="icon spc_id_316">
                    <i class="fab fa-stripe"></i>
                    <span>fa-stripe</span>
                </li>
                <li class="icon spc_id_317">
                    <i class="fab fa-stripe-s"></i>
                    <span>fa-stripe-s</span>
                </li>
                <li class="icon spc_id_318">
                    <i class="fab fa-typo3"></i>
                    <span>fa-typo3</span>
                </li>
                <li class="icon spc_id_319">
                    <i class="fab fa-amazon-pay"></i>
                    <span>fa-amazon-pay</span>
                </li>
                <li class="icon spc_id_320">
                    <i class="fab fa-cc-amazon-pay"></i>
                    <span>fa-cc-amazon-pay</span>
                </li>
                <li class="icon spc_id_321">
                    <i class="fab fa-ethereum"></i>
                    <span>fa-ethereum</span>
                </li>
                <li class="icon spc_id_322">
                    <i class="fab fa-korvue"></i>
                    <span>fa-korvue</span>
                </li>
                <li class="icon spc_id_323">
                    <i class="fab fa-elementor"></i>
                    <span>fa-elementor</span>
                </li>
                <li class="icon spc_id_324">
                    <i class="fab fa-youtube-square"></i>
                    <span>fa-youtube-square</span>
                </li>
                <li class="icon spc_id_325">
                    <i class="fab fa-flipboard"></i>
                    <span>fa-flipboard</span>
                </li>
                <li class="icon spc_id_326">
                    <i class="fab fa-hips"></i>
                    <span>fa-hips</span>
                </li>
                <li class="icon spc_id_327">
                    <i class="fab fa-php"></i>
                    <span>fa-php</span>
                </li>
                <li class="icon spc_id_328">
                    <i class="fab fa-quinscape"></i>
                    <span>fa-quinscape</span>
                </li>
                <li class="icon spc_id_329">
                    <i class="fab fa-readme"></i>
                    <span>fa-readme</span>
                </li>
                <li class="icon spc_id_330">
                    <i class="fab fa-java"></i>
                    <span>fa-java</span>
                </li>
                <li class="icon spc_id_331">
                    <i class="fab fa-pied-piper-hat"></i>
                    <span>fa-pied-piper-hat</span>
                </li>
                <li class="icon spc_id_332">
                    <i class="fab fa-creative-commons-by"></i>
                    <span>fa-creative-commons-by</span>
                </li>
                <li class="icon spc_id_333">
                    <i class="fab fa-creative-commons-nc"></i>
                    <span>fa-creative-commons-nc</span>
                </li>
                <li class="icon spc_id_334">
                    <i class="fab fa-creative-commons-nc-eu"></i>
                    <span>fa-creative-commons-nc-eu</span>
                </li>
                <li class="icon spc_id_335">
                    <i class="fab fa-creative-commons-nc-jp"></i>
                    <span>fa-creative-commons-nc-jp</span>
                </li>
                <li class="icon spc_id_336">
                    <i class="fab fa-creative-commons-nd"></i>
                    <span>fa-creative-commons-nd</span>
                </li>
                <li class="icon spc_id_337">
                    <i class="fab fa-creative-commons-pd"></i>
                    <span>fa-creative-commons-pd</span>
                </li>
                <li class="icon spc_id_338">
                    <i class="fab fa-creative-commons-pd-alt"></i>
                    <span>fa-creative-commons-pd-alt</span>
                </li>
                <li class="icon spc_id_339">
                    <i class="fab fa-creative-commons-remix"></i>
                    <span>fa-creative-commons-remix</span>
                </li>
                <li class="icon spc_id_340">
                    <i class="fab fa-creative-commons-sa"></i>
                    <span>fa-creative-commons-sa</span>
                </li>
                <li class="icon spc_id_341">
                    <i class="fab fa-creative-commons-sampling"></i>
                    <span>fa-creative-commons-sampling</span>
                </li>
                <li class="icon spc_id_342">
                    <i class="fab fa-creative-commons-sampling-plus"></i>
                    <span>fa-creative-commons-sampling-plus</span>
                </li>
                <li class="icon spc_id_343">
                    <i class="fab fa-creative-commons-share"></i>
                    <span>fa-creative-commons-share</span>
                </li>
                <li class="icon spc_id_344">
                    <i class="fab fa-creative-commons-zero"></i>
                    <span>fa-creative-commons-zero</span>
                </li>
                <li class="icon spc_id_345">
                    <i class="fab fa-ebay"></i>
                    <span>fa-ebay</span>
                </li>
                <li class="icon spc_id_346">
                    <i class="fab fa-keybase"></i>
                    <span>fa-keybase</span>
                </li>
                <li class="icon spc_id_347">
                    <i class="fab fa-mastodon"></i>
                    <span>fa-mastodon</span>
                </li>
                <li class="icon spc_id_348">
                    <i class="fab fa-r-project"></i>
                    <span>fa-r-project</span>
                </li>
                <li class="icon spc_id_349">
                    <i class="fab fa-researchgate"></i>
                    <span>fa-researchgate</span>
                </li>
                <li class="icon spc_id_350">
                    <i class="fab fa-teamspeak"></i>
                    <span>fa-teamspeak</span>
                </li>
                <li class="icon spc_id_351">
                    <i class="fab fa-first-order-alt"></i>
                    <span>fa-first-order-alt</span>
                </li>
                <li class="icon spc_id_352">
                    <i class="fab fa-fulcrum"></i>
                    <span>fa-fulcrum</span>
                </li>
                <li class="icon spc_id_353">
                    <i class="fab fa-galactic-republic"></i>
                    <span>fa-galactic-republic</span>
                </li>
                <li class="icon spc_id_354">
                    <i class="fab fa-galactic-senate"></i>
                    <span>fa-galactic-senate</span>
                </li>
                <li class="icon spc_id_355">
                    <i class="fab fa-jedi-order"></i>
                    <span>fa-jedi-order</span>
                </li>
                <li class="icon spc_id_356">
                    <i class="fab fa-mandalorian"></i>
                    <span>fa-mandalorian</span>
                </li>
                <li class="icon spc_id_357">
                    <i class="fab fa-old-republic"></i>
                    <span>fa-old-republic</span>
                </li>
                <li class="icon spc_id_358">
                    <i class="fab fa-phoenix-squadron"></i>
                    <span>fa-phoenix-squadron</span>
                </li>
                <li class="icon spc_id_359">
                    <i class="fab fa-sith"></i>
                    <span>fa-sith</span>
                </li>
                <li class="icon spc_id_360">
                    <i class="fab fa-trade-federation"></i>
                    <span>fa-trade-federation</span>
                </li>
                <li class="icon spc_id_361">
                    <i class="fab fa-wolf-pack-battalion"></i>
                    <span>fa-wolf-pack-battalion</span>
                </li>
                <li class="icon spc_id_362">
                    <i class="fab fa-hornbill"></i>
                    <span>fa-hornbill</span>
                </li>
                <li class="icon spc_id_363">
                    <i class="fab fa-mailchimp"></i>
                    <span>fa-mailchimp</span>
                </li>
                <li class="icon spc_id_364">
                    <i class="fab fa-megaport"></i>
                    <span>fa-megaport</span>
                </li>
                <li class="icon spc_id_365">
                    <i class="fab fa-nimblr"></i>
                    <span>fa-nimblr</span>
                </li>
                <li class="icon spc_id_366">
                    <i class="fab fa-rev"></i>
                    <span>fa-rev</span>
                </li>
                <li class="icon spc_id_367">
                    <i class="fab fa-shopware"></i>
                    <span>fa-shopware</span>
                </li>
                <li class="icon spc_id_368">
                    <i class="fab fa-squarespace"></i>
                    <span>fa-squarespace</span>
                </li>
                <li class="icon spc_id_369">
                    <i class="fab fa-themeco"></i>
                    <span>fa-themeco</span>
                </li>
                <li class="icon spc_id_370">
                    <i class="fab fa-weebly"></i>
                    <span>fa-weebly</span>
                </li>
                <li class="icon spc_id_371">
                    <i class="fab fa-wix"></i>
                    <span>fa-wix</span>
                </li>
                <li class="icon spc_id_372">
                    <i class="fab fa-ello"></i>
                    <span>fa-ello</span>
                </li>
                <li class="icon spc_id_373">
                    <i class="fab fa-hackerrank"></i>
                    <span>fa-hackerrank</span>
                </li>
                <li class="icon spc_id_374">
                    <i class="fab fa-kaggle"></i>
                    <span>fa-kaggle</span>
                </li>
                <li class="icon spc_id_375">
                    <i class="fab fa-markdown"></i>
                    <span>fa-markdown</span>
                </li>
                <li class="icon spc_id_376">
                    <i class="fab fa-neos"></i>
                    <span>fa-neos</span>
                </li>
                <li class="icon spc_id_377">
                    <i class="fab fa-zhihu"></i>
                    <span>fa-zhihu</span>
                </li>
                <li class="icon spc_id_378">
                    <i class="fab fa-alipay"></i>
                    <span>fa-alipay</span>
                </li>
                <li class="icon spc_id_379">
                    <i class="fab fa-the-red-yeti"></i>
                    <span>fa-the-red-yeti</span>
                </li>
                <li class="icon spc_id_380">
                    <i class="fab fa-acquisitions-incorporated"></i>
                    <span>fa-acquisitions-incorporated</span>
                </li>
                <li class="icon spc_id_381">
                    <i class="fab fa-critical-role"></i>
                    <span>fa-critical-role</span>
                </li>
                <li class="icon spc_id_382">
                    <i class="fab fa-d-and-d-beyond"></i>
                    <span>fa-d-and-d-beyond</span>
                </li>
                <li class="icon spc_id_383">
                    <i class="fab fa-dev"></i>
                    <span>fa-dev</span>
                </li>
                <li class="icon spc_id_384">
                    <i class="fab fa-fantasy-flight-games"></i>
                    <span>fa-fantasy-flight-games</span>
                </li>
                <li class="icon spc_id_385">
                    <i class="fab fa-penny-arcade"></i>
                    <span>fa-penny-arcade</span>
                </li>
                <li class="icon spc_id_386">
                    <i class="fab fa-wizards-of-the-coast"></i>
                    <span>fa-wizards-of-the-coast</span>
                </li>
                <li class="icon spc_id_387">
                    <i class="fab fa-think-peaks"></i>
                    <span>fa-think-peaks</span>
                </li>
                <li class="icon spc_id_388">
                    <i class="fab fa-reacteurope"></i>
                    <span>fa-reacteurope</span>
                </li>
                <li class="icon spc_id_389">
                    <i class="fab fa-adobe"></i>
                    <span>fa-adobe</span>
                </li>
                <li class="icon spc_id_390">
                    <i class="fab fa-artstation"></i>
                    <span>fa-artstation</span>
                </li>
                <li class="icon spc_id_391">
                    <i class="fab fa-atlassian"></i>
                    <span>fa-atlassian</span>
                </li>
                <li class="icon spc_id_392">
                    <i class="fab fa-canadian-maple-leaf"></i>
                    <span>fa-canadian-maple-leaf</span>
                </li>
                <li class="icon spc_id_393">
                    <i class="fab fa-centos"></i>
                    <span>fa-centos</span>
                </li>
                <li class="icon spc_id_394">
                    <i class="fab fa-confluence"></i>
                    <span>fa-confluence</span>
                </li>
                <li class="icon spc_id_395">
                    <i class="fab fa-dhl"></i>
                    <span>fa-dhl</span>
                </li>
                <li class="icon spc_id_396">
                    <i class="fab fa-diaspora"></i>
                    <span>fa-diaspora</span>
                </li>
                <li class="icon spc_id_397">
                    <i class="fab fa-fedex"></i>
                    <span>fa-fedex</span>
                </li>
                <li class="icon spc_id_398">
                    <i class="fab fa-fedora"></i>
                    <span>fa-fedora</span>
                </li>
                <li class="icon spc_id_399">
                    <i class="fab fa-figma"></i>
                    <span>fa-figma</span>
                </li>
                <li class="icon spc_id_400">
                    <i class="fab fa-intercom"></i>
                    <span>fa-intercom</span>
                </li>
                <li class="icon spc_id_401">
                    <i class="fab fa-invision"></i>
                    <span>fa-invision</span>
                </li>
                <li class="icon spc_id_402">
                    <i class="fab fa-jira"></i>
                    <span>fa-jira</span>
                </li>
                <li class="icon spc_id_403">
                    <i class="fab fa-mendeley"></i>
                    <span>fa-mendeley</span>
                </li>
                <li class="icon spc_id_404">
                    <i class="fab fa-raspberry-pi"></i>
                    <span>fa-raspberry-pi</span>
                </li>
                <li class="icon spc_id_405">
                    <i class="fab fa-redhat"></i>
                    <span>fa-redhat</span>
                </li>
                <li class="icon spc_id_406">
                    <i class="fab fa-sketch"></i>
                    <span>fa-sketch</span>
                </li>
                <li class="icon spc_id_407">
                    <i class="fab fa-sourcetree"></i>
                    <span>fa-sourcetree</span>
                </li>
                <li class="icon spc_id_408">
                    <i class="fab fa-suse"></i>
                    <span>fa-suse</span>
                </li>
                <li class="icon spc_id_409">
                    <i class="fab fa-ubuntu"></i>
                    <span>fa-ubuntu</span>
                </li>
                <li class="icon spc_id_410">
                    <i class="fab fa-ups"></i>
                    <span>fa-ups</span>
                </li>
                <li class="icon spc_id_411">
                    <i class="fab fa-usps"></i>
                    <span>fa-usps</span>
                </li>
                <li class="icon spc_id_412">
                    <i class="fab fa-yarn"></i>
                    <span>fa-yarn</span>
                </li>
                <li class="icon spc_id_413">
                    <i class="fab fa-airbnb"></i>
                    <span>fa-airbnb</span>
                </li>
                <li class="icon spc_id_414">
                    <i class="fab fa-battle-net"></i>
                    <span>fa-battle-net</span>
                </li>
                <li class="icon spc_id_415">
                    <i class="fab fa-bootstrap"></i>
                    <span>fa-bootstrap</span>
                </li>
                <li class="icon spc_id_416">
                    <i class="fab fa-buffer"></i>
                    <span>fa-buffer</span>
                </li>
                <li class="icon spc_id_417">
                    <i class="fab fa-chromecast"></i>
                    <span>fa-chromecast</span>
                </li>
                <li class="icon spc_id_418">
                    <i class="fab fa-evernote"></i>
                    <span>fa-evernote</span>
                </li>
                <li class="icon spc_id_419">
                    <i class="fab fa-itch-io"></i>
                    <span>fa-itch-io</span>
                </li>
                <li class="icon spc_id_420">
                    <i class="fab fa-salesforce"></i>
                    <span>fa-salesforce</span>
                </li>
                <li class="icon spc_id_421">
                    <i class="fab fa-speaker-deck"></i>
                    <span>fa-speaker-deck</span>
                </li>
                <li class="icon spc_id_422">
                    <i class="fab fa-symfony"></i>
                    <span>fa-symfony</span>
                </li>
                <li class="icon spc_id_423">
                    <i class="fab fa-waze"></i>
                    <span>fa-waze</span>
                </li>
                <li class="icon spc_id_424">
                    <i class="fab fa-yammer"></i>
                    <span>fa-yammer</span>
                </li>
                <li class="icon spc_id_425">
                    <i class="fab fa-git-alt"></i>
                    <span>fa-git-alt</span>
                </li>
                <li class="icon spc_id_426">
                    <i class="fab fa-stackpath"></i>
                    <span>fa-stackpath</span>
                </li>
                <li class="icon spc_id_427">
                    <i class="fab fa-cotton-bureau"></i>
                    <span>fa-cotton-bureau</span>
                </li>
                <li class="icon spc_id_428">
                    <i class="fab fa-buy-n-large"></i>
                    <span>fa-buy-n-large</span>
                </li>
                <li class="icon spc_id_429">
                    <i class="fab fa-mdb"></i>
                    <span>fa-mdb</span>
                </li>
                <li class="icon spc_id_430">
                    <i class="fab fa-orcid"></i>
                    <span>fa-orcid</span>
                </li>
                <li class="icon spc_id_431">
                    <i class="fab fa-swift"></i>
                    <span>fa-swift</span>
                </li>
                <li class="icon spc_id_432">
                    <i class="fab fa-umbraco"></i>
                    <span>fa-umbraco</span>
                </li>
                <li class="icon spc_id_433">
                    <i class="far fa-heart"></i>
                    <span>fa-heart</span>
                </li>
                <li class="icon spc_id_434">
                    <i class="far fa-star"></i>
                    <span>fa-star</span>
                </li>
                <li class="icon spc_id_435">
                    <i class="far fa-user"></i>
                    <span>fa-user</span>
                </li>
                <li class="icon spc_id_436">
                    <i class="far fa-clock"></i>
                    <span>fa-clock</span>
                </li>
                <li class="icon spc_id_437">
                    <i class="far fa-list-alt"></i>
                    <span>fa-list-alt</span>
                </li>
                <li class="icon spc_id_438">
                    <i class="far fa-flag"></i>
                    <span>fa-flag</span>
                </li>
                <li class="icon spc_id_439">
                    <i class="far fa-bookmark"></i>
                    <span>fa-bookmark</span>
                </li>
                <li class="icon spc_id_440">
                    <i class="far fa-image"></i>
                    <span>fa-image</span>
                </li>
                <li class="icon spc_id_441">
                    <i class="far fa-edit"></i>
                    <span>fa-edit</span>
                </li>
                <li class="icon spc_id_442">
                    <i class="far fa-times-circle"></i>
                    <span>fa-times-circle</span>
                </li>
                <li class="icon spc_id_443">
                    <i class="far fa-check-circle"></i>
                    <span>fa-check-circle</span>
                </li>
                <li class="icon spc_id_444">
                    <i class="far fa-question-circle"></i>
                    <span>fa-question-circle</span>
                </li>
                <li class="icon spc_id_445">
                    <i class="far fa-eye"></i>
                    <span>fa-eye</span>
                </li>
                <li class="icon spc_id_446">
                    <i class="far fa-eye-slash"></i>
                    <span>fa-eye-slash</span>
                </li>
                <li class="icon spc_id_447">
                    <i class="far fa-calendar-alt"></i>
                    <span>fa-calendar-alt</span>
                </li>
                <li class="icon spc_id_448">
                    <i class="far fa-comment"></i>
                    <span>fa-comment</span>
                </li>
                <li class="icon spc_id_449">
                    <i class="far fa-folder"></i>
                    <span>fa-folder</span>
                </li>
                <li class="icon spc_id_450">
                    <i class="far fa-folder-open"></i>
                    <span>fa-folder-open</span>
                </li>
                <li class="icon spc_id_451">
                    <i class="far fa-chart-bar"></i>
                    <span>fa-chart-bar</span>
                </li>
                <li class="icon spc_id_452">
                    <i class="far fa-comments"></i>
                    <span>fa-comments</span>
                </li>
                <li class="icon spc_id_453">
                    <i class="far fa-star-half"></i>
                    <span>fa-star-half</span>
                </li>
                <li class="icon spc_id_454">
                    <i class="far fa-lemon"></i>
                    <span>fa-lemon</span>
                </li>
                <li class="icon spc_id_455">
                    <i class="far fa-credit-card"></i>
                    <span>fa-credit-card</span>
                </li>
                <li class="icon spc_id_456">
                    <i class="far fa-hdd"></i>
                    <span>fa-hdd</span>
                </li>
                <li class="icon spc_id_457">
                    <i class="far fa-hand-point-right"></i>
                    <span>fa-hand-point-right</span>
                </li>
                <li class="icon spc_id_458">
                    <i class="far fa-hand-point-left"></i>
                    <span>fa-hand-point-left</span>
                </li>
                <li class="icon spc_id_459">
                    <i class="far fa-hand-point-up"></i>
                    <span>fa-hand-point-up</span>
                </li>
                <li class="icon spc_id_460">
                    <i class="far fa-hand-point-down"></i>
                    <span>fa-hand-point-down</span>
                </li>
                <li class="icon spc_id_461">
                    <i class="far fa-copy"></i>
                    <span>fa-copy</span>
                </li>
                <li class="icon spc_id_462">
                    <i class="far fa-save"></i>
                    <span>fa-save</span>
                </li>
                <li class="icon spc_id_463">
                    <i class="far fa-square"></i>
                    <span>fa-square</span>
                </li>
                <li class="icon spc_id_464">
                    <i class="far fa-envelope"></i>
                    <span>fa-envelope</span>
                </li>
                <li class="icon spc_id_465">
                    <i class="far fa-lightbulb"></i>
                    <span>fa-lightbulb</span>
                </li>
                <li class="icon spc_id_466">
                    <i class="far fa-bell"></i>
                    <span>fa-bell</span>
                </li>
                <li class="icon spc_id_467">
                    <i class="far fa-hospital"></i>
                    <span>fa-hospital</span>
                </li>
                <li class="icon spc_id_468">
                    <i class="far fa-plus-square"></i>
                    <span>fa-plus-square</span>
                </li>
                <li class="icon spc_id_469">
                    <i class="far fa-circle"></i>
                    <span>fa-circle</span>
                </li>
                <li class="icon spc_id_470">
                    <i class="far fa-smile"></i>
                    <span>fa-smile</span>
                </li>
                <li class="icon spc_id_471">
                    <i class="far fa-frown"></i>
                    <span>fa-frown</span>
                </li>
                <li class="icon spc_id_472">
                    <i class="far fa-meh"></i>
                    <span>fa-meh</span>
                </li>
                <li class="icon spc_id_473">
                    <i class="far fa-keyboard"></i>
                    <span>fa-keyboard</span>
                </li>
                <li class="icon spc_id_474">
                    <i class="far fa-calendar"></i>
                    <span>fa-calendar</span>
                </li>
                <li class="icon spc_id_475">
                    <i class="far fa-play-circle"></i>
                    <span>fa-play-circle</span>
                </li>
                <li class="icon spc_id_476">
                    <i class="far fa-minus-square"></i>
                    <span>fa-minus-square</span>
                </li>
                <li class="icon spc_id_477">
                    <i class="far fa-check-square"></i>
                    <span>fa-check-square</span>
                </li>
                <li class="icon spc_id_478">
                    <i class="far fa-share-square"></i>
                    <span>fa-share-square</span>
                </li>
                <li class="icon spc_id_479">
                    <i class="far fa-compass"></i>
                    <span>fa-compass</span>
                </li>
                <li class="icon spc_id_480">
                    <i class="far fa-caret-square-down"></i>
                    <span>fa-caret-square-down</span>
                </li>
                <li class="icon spc_id_481">
                    <i class="far fa-caret-square-up"></i>
                    <span>fa-caret-square-up</span>
                </li>
                <li class="icon spc_id_482">
                    <i class="far fa-caret-square-right"></i>
                    <span>fa-caret-square-right</span>
                </li>
                <li class="icon spc_id_483">
                    <i class="far fa-file"></i>
                    <span>fa-file</span>
                </li>
                <li class="icon spc_id_484">
                    <i class="far fa-file-alt"></i>
                    <span>fa-file-alt</span>
                </li>
                <li class="icon spc_id_485">
                    <i class="far fa-thumbs-up"></i>
                    <span>fa-thumbs-up</span>
                </li>
                <li class="icon spc_id_486">
                    <i class="far fa-thumbs-down"></i>
                    <span>fa-thumbs-down</span>
                </li>
                <li class="icon spc_id_487">
                    <i class="far fa-sun"></i>
                    <span>fa-sun</span>
                </li>
                <li class="icon spc_id_488">
                    <i class="far fa-moon"></i>
                    <span>fa-moon</span>
                </li>
                <li class="icon spc_id_489">
                    <i class="far fa-caret-square-left"></i>
                    <span>fa-caret-square-left</span>
                </li>
                <li class="icon spc_id_490">
                    <i class="far fa-dot-circle"></i>
                    <span>fa-dot-circle</span>
                </li>
                <li class="icon spc_id_491">
                    <i class="far fa-building"></i>
                    <span>fa-building</span>
                </li>
                <li class="icon spc_id_492">
                    <i class="far fa-file-pdf"></i>
                    <span>fa-file-pdf</span>
                </li>
                <li class="icon spc_id_493">
                    <i class="far fa-file-word"></i>
                    <span>fa-file-word</span>
                </li>
                <li class="icon spc_id_494">
                    <i class="far fa-file-excel"></i>
                    <span>fa-file-excel</span>
                </li>
                <li class="icon spc_id_495">
                    <i class="far fa-file-powerpoint"></i>
                    <span>fa-file-powerpoint</span>
                </li>
                <li class="icon spc_id_496">
                    <i class="far fa-file-image"></i>
                    <span>fa-file-image</span>
                </li>
                <li class="icon spc_id_497">
                    <i class="far fa-file-archive"></i>
                    <span>fa-file-archive</span>
                </li>
                <li class="icon spc_id_498">
                    <i class="far fa-file-audio"></i>
                    <span>fa-file-audio</span>
                </li>
                <li class="icon spc_id_499">
                    <i class="far fa-file-video"></i>
                    <span>fa-file-video</span>
                </li>
                <li class="icon spc_id_500">
                    <i class="far fa-file-code"></i>
                    <span>fa-file-code</span>
                </li>
                <li class="icon spc_id_501">
                    <i class="far fa-life-ring"></i>
                    <span>fa-life-ring</span>
                </li>
                <li class="icon spc_id_502">
                    <i class="far fa-paper-plane"></i>
                    <span>fa-paper-plane</span>
                </li>
                <li class="icon spc_id_503">
                    <i class="far fa-futbol"></i>
                    <span>fa-futbol</span>
                </li>
                <li class="icon spc_id_504">
                    <i class="far fa-newspaper"></i>
                    <span>fa-newspaper</span>
                </li>
                <li class="icon spc_id_505">
                    <i class="far fa-bell-slash"></i>
                    <span>fa-bell-slash</span>
                </li>
                <li class="icon spc_id_506">
                    <i class="far fa-copyright"></i>
                    <span>fa-copyright</span>
                </li>
                <li class="icon spc_id_507">
                    <i class="far fa-closed-captioning"></i>
                    <span>fa-closed-captioning</span>
                </li>
                <li class="icon spc_id_508">
                    <i class="far fa-object-group"></i>
                    <span>fa-object-group</span>
                </li>
                <li class="icon spc_id_509">
                    <i class="far fa-object-ungroup"></i>
                    <span>fa-object-ungroup</span>
                </li>
                <li class="icon spc_id_510">
                    <i class="far fa-sticky-note"></i>
                    <span>fa-sticky-note</span>
                </li>
                <li class="icon spc_id_511">
                    <i class="far fa-clone"></i>
                    <span>fa-clone</span>
                </li>
                <li class="icon spc_id_512">
                    <i class="far fa-hourglass"></i>
                    <span>fa-hourglass</span>
                </li>
                <li class="icon spc_id_513">
                    <i class="far fa-hand-rock"></i>
                    <span>fa-hand-rock</span>
                </li>
                <li class="icon spc_id_514">
                    <i class="far fa-hand-paper"></i>
                    <span>fa-hand-paper</span>
                </li>
                <li class="icon spc_id_515">
                    <i class="far fa-hand-scissors"></i>
                    <span>fa-hand-scissors</span>
                </li>
                <li class="icon spc_id_516">
                    <i class="far fa-hand-lizard"></i>
                    <span>fa-hand-lizard</span>
                </li>
                <li class="icon spc_id_517">
                    <i class="far fa-hand-spock"></i>
                    <span>fa-hand-spock</span>
                </li>
                <li class="icon spc_id_518">
                    <i class="far fa-hand-pointer"></i>
                    <span>fa-hand-pointer</span>
                </li>
                <li class="icon spc_id_519">
                    <i class="far fa-hand-peace"></i>
                    <span>fa-hand-peace</span>
                </li>
                <li class="icon spc_id_520">
                    <i class="far fa-registered"></i>
                    <span>fa-registered</span>
                </li>
                <li class="icon spc_id_521">
                    <i class="far fa-calendar-plus"></i>
                    <span>fa-calendar-plus</span>
                </li>
                <li class="icon spc_id_522">
                    <i class="far fa-calendar-minus"></i>
                    <span>fa-calendar-minus</span>
                </li>
                <li class="icon spc_id_523">
                    <i class="far fa-calendar-times"></i>
                    <span>fa-calendar-times</span>
                </li>
                <li class="icon spc_id_524">
                    <i class="far fa-calendar-check"></i>
                    <span>fa-calendar-check</span>
                </li>
                <li class="icon spc_id_525">
                    <i class="far fa-map"></i>
                    <span>fa-map</span>
                </li>
                <li class="icon spc_id_526">
                    <i class="far fa-comment-alt"></i>
                    <span>fa-comment-alt</span>
                </li>
                <li class="icon spc_id_527">
                    <i class="far fa-pause-circle"></i>
                    <span>fa-pause-circle</span>
                </li>
                <li class="icon spc_id_528">
                    <i class="far fa-stop-circle"></i>
                    <span>fa-stop-circle</span>
                </li>
                <li class="icon spc_id_529">
                    <i class="far fa-handshake"></i>
                    <span>fa-handshake</span>
                </li>
                <li class="icon spc_id_530">
                    <i class="far fa-envelope-open"></i>
                    <span>fa-envelope-open</span>
                </li>
                <li class="icon spc_id_531">
                    <i class="far fa-address-book"></i>
                    <span>fa-address-book</span>
                </li>
                <li class="icon spc_id_532">
                    <i class="far fa-address-card"></i>
                    <span>fa-address-card</span>
                </li>
                <li class="icon spc_id_533">
                    <i class="far fa-user-circle"></i>
                    <span>fa-user-circle</span>
                </li>
                <li class="icon spc_id_534">
                    <i class="far fa-id-badge"></i>
                    <span>fa-id-badge</span>
                </li>
                <li class="icon spc_id_535">
                    <i class="far fa-id-card"></i>
                    <span>fa-id-card</span>
                </li>
                <li class="icon spc_id_536">
                    <i class="far fa-window-maximize"></i>
                    <span>fa-window-maximize</span>
                </li>
                <li class="icon spc_id_537">
                    <i class="far fa-window-minimize"></i>
                    <span>fa-window-minimize</span>
                </li>
                <li class="icon spc_id_538">
                    <i class="far fa-window-restore"></i>
                    <span>fa-window-restore</span>
                </li>
                <li class="icon spc_id_539">
                    <i class="far fa-snowflake"></i>
                    <span>fa-snowflake</span>
                </li>
                <li class="icon spc_id_540">
                    <i class="far fa-trash-alt"></i>
                    <span>fa-trash-alt</span>
                </li>
                <li class="icon spc_id_541">
                    <i class="far fa-images"></i>
                    <span>fa-images</span>
                </li>
                <li class="icon spc_id_542">
                    <i class="far fa-clipboard"></i>
                    <span>fa-clipboard</span>
                </li>
                <li class="icon spc_id_543">
                    <i class="far fa-arrow-alt-circle-down"></i>
                    <span>fa-arrow-alt-circle-down</span>
                </li>
                <li class="icon spc_id_544">
                    <i class="far fa-arrow-alt-circle-left"></i>
                    <span>fa-arrow-alt-circle-left</span>
                </li>
                <li class="icon spc_id_545">
                    <i class="far fa-arrow-alt-circle-right"></i>
                    <span>fa-arrow-alt-circle-right</span>
                </li>
                <li class="icon spc_id_546">
                    <i class="far fa-arrow-alt-circle-up"></i>
                    <span>fa-arrow-alt-circle-up</span>
                </li>
                <li class="icon spc_id_547">
                    <i class="far fa-gem"></i>
                    <span>fa-gem</span>
                </li>
                <li class="icon spc_id_548">
                    <i class="far fa-money-bill-alt"></i>
                    <span>fa-money-bill-alt</span>
                </li>
                <li class="icon spc_id_549">
                    <i class="far fa-window-close"></i>
                    <span>fa-window-close</span>
                </li>
                <li class="icon spc_id_550">
                    <i class="far fa-comment-dots"></i>
                    <span>fa-comment-dots</span>
                </li>
                <li class="icon spc_id_551">
                    <i class="far fa-smile-wink"></i>
                    <span>fa-smile-wink</span>
                </li>
                <li class="icon spc_id_552">
                    <i class="far fa-angry"></i>
                    <span>fa-angry</span>
                </li>
                <li class="icon spc_id_553">
                    <i class="far fa-dizzy"></i>
                    <span>fa-dizzy</span>
                </li>
                <li class="icon spc_id_554">
                    <i class="far fa-flushed"></i>
                    <span>fa-flushed</span>
                </li>
                <li class="icon spc_id_555">
                    <i class="far fa-frown-open"></i>
                    <span>fa-frown-open</span>
                </li>
                <li class="icon spc_id_556">
                    <i class="far fa-grimace"></i>
                    <span>fa-grimace</span>
                </li>
                <li class="icon spc_id_557">
                    <i class="far fa-grin"></i>
                    <span>fa-grin</span>
                </li>
                <li class="icon spc_id_558">
                    <i class="far fa-grin-alt"></i>
                    <span>fa-grin-alt</span>
                </li>
                <li class="icon spc_id_559">
                    <i class="far fa-grin-beam"></i>
                    <span>fa-grin-beam</span>
                </li>
                <li class="icon spc_id_560">
                    <i class="far fa-grin-beam-sweat"></i>
                    <span>fa-grin-beam-sweat</span>
                </li>
                <li class="icon spc_id_561">
                    <i class="far fa-grin-hearts"></i>
                    <span>fa-grin-hearts</span>
                </li>
                <li class="icon spc_id_562">
                    <i class="far fa-grin-squint"></i>
                    <span>fa-grin-squint</span>
                </li>
                <li class="icon spc_id_563">
                    <i class="far fa-grin-squint-tears"></i>
                    <span>fa-grin-squint-tears</span>
                </li>
                <li class="icon spc_id_564">
                    <i class="far fa-grin-stars"></i>
                    <span>fa-grin-stars</span>
                </li>
                <li class="icon spc_id_565">
                    <i class="far fa-grin-tears"></i>
                    <span>fa-grin-tears</span>
                </li>
                <li class="icon spc_id_566">
                    <i class="far fa-grin-tongue"></i>
                    <span>fa-grin-tongue</span>
                </li>
                <li class="icon spc_id_567">
                    <i class="far fa-grin-tongue-squint"></i>
                    <span>fa-grin-tongue-squint</span>
                </li>
                <li class="icon spc_id_568">
                    <i class="far fa-grin-tongue-wink"></i>
                    <span>fa-grin-tongue-wink</span>
                </li>
                <li class="icon spc_id_569">
                    <i class="far fa-grin-wink"></i>
                    <span>fa-grin-wink</span>
                </li>
                <li class="icon spc_id_570">
                    <i class="far fa-kiss"></i>
                    <span>fa-kiss</span>
                </li>
                <li class="icon spc_id_571">
                    <i class="far fa-kiss-beam"></i>
                    <span>fa-kiss-beam</span>
                </li>
                <li class="icon spc_id_572">
                    <i class="far fa-kiss-wink-heart"></i>
                    <span>fa-kiss-wink-heart</span>
                </li>
                <li class="icon spc_id_573">
                    <i class="far fa-laugh"></i>
                    <span>fa-laugh</span>
                </li>
                <li class="icon spc_id_574">
                    <i class="far fa-laugh-beam"></i>
                    <span>fa-laugh-beam</span>
                </li>
                <li class="icon spc_id_575">
                    <i class="far fa-laugh-squint"></i>
                    <span>fa-laugh-squint</span>
                </li>
                <li class="icon spc_id_576">
                    <i class="far fa-laugh-wink"></i>
                    <span>fa-laugh-wink</span>
                </li>
                <li class="icon spc_id_577">
                    <i class="far fa-meh-blank"></i>
                    <span>fa-meh-blank</span>
                </li>
                <li class="icon spc_id_578">
                    <i class="far fa-meh-rolling-eyes"></i>
                    <span>fa-meh-rolling-eyes</span>
                </li>
                <li class="icon spc_id_579">
                    <i class="far fa-sad-cry"></i>
                    <span>fa-sad-cry</span>
                </li>
                <li class="icon spc_id_580">
                    <i class="far fa-sad-tear"></i>
                    <span>fa-sad-tear</span>
                </li>
                <li class="icon spc_id_581">
                    <i class="far fa-smile-beam"></i>
                    <span>fa-smile-beam</span>
                </li>
                <li class="icon spc_id_582">
                    <i class="far fa-surprise"></i>
                    <span>fa-surprise</span>
                </li>
                <li class="icon spc_id_583">
                    <i class="far fa-tired"></i>
                    <span>fa-tired</span>
                </li>
                <li class="icon spc_id_584">
                    <i class="fas fa-glass-martini"></i>
                    <span>fa-glass-martini</span>
                </li>
                <li class="icon spc_id_585">
                    <i class="fas fa-music"></i>
                    <span>fa-music</span>
                </li>
                <li class="icon spc_id_586">
                    <i class="fas fa-search"></i>
                    <span>fa-search</span>
                </li>
                <li class="icon spc_id_587">
                    <i class="fas fa-heart"></i>
                    <span>fa-heart</span>
                </li>
                <li class="icon spc_id_588">
                    <i class="fas fa-star"></i>
                    <span>fa-star</span>
                </li>
                <li class="icon spc_id_589">
                    <i class="fas fa-user"></i>
                    <span>fa-user</span>
                </li>
                <li class="icon spc_id_590">
                    <i class="fas fa-film"></i>
                    <span>fa-film</span>
                </li>
                <li class="icon spc_id_591">
                    <i class="fas fa-th-large"></i>
                    <span>fa-th-large</span>
                </li>
                <li class="icon spc_id_592">
                    <i class="fas fa-th"></i>
                    <span>fa-th</span>
                </li>
                <li class="icon spc_id_593">
                    <i class="fas fa-th-list"></i>
                    <span>fa-th-list</span>
                </li>
                <li class="icon spc_id_594">
                    <i class="fas fa-check"></i>
                    <span>fa-check</span>
                </li>
                <li class="icon spc_id_595">
                    <i class="fas fa-times"></i>
                    <span>fa-times</span>
                </li>
                <li class="icon spc_id_596">
                    <i class="fas fa-search-plus"></i>
                    <span>fa-search-plus</span>
                </li>
                <li class="icon spc_id_597">
                    <i class="fas fa-search-minus"></i>
                    <span>fa-search-minus</span>
                </li>
                <li class="icon spc_id_598">
                    <i class="fas fa-power-off"></i>
                    <span>fa-power-off</span>
                </li>
                <li class="icon spc_id_599">
                    <i class="fas fa-signal"></i>
                    <span>fa-signal</span>
                </li>
                <li class="icon spc_id_600">
                    <i class="fas fa-cog"></i>
                    <span>fa-cog</span>
                </li>
                <li class="icon spc_id_601">
                    <i class="fas fa-home"></i>
                    <span>fa-home</span>
                </li>
                <li class="icon spc_id_602">
                    <i class="fas fa-clock"></i>
                    <span>fa-clock</span>
                </li>
                <li class="icon spc_id_603">
                    <i class="fas fa-road"></i>
                    <span>fa-road</span>
                </li>
                <li class="icon spc_id_604">
                    <i class="fas fa-download"></i>
                    <span>fa-download</span>
                </li>
                <li class="icon spc_id_605">
                    <i class="fas fa-inbox"></i>
                    <span>fa-inbox</span>
                </li>
                <li class="icon spc_id_606">
                    <i class="fas fa-redo"></i>
                    <span>fa-redo</span>
                </li>
                <li class="icon spc_id_607">
                    <i class="fas fa-sync"></i>
                    <span>fa-sync</span>
                </li>
                <li class="icon spc_id_608">
                    <i class="fas fa-list-alt"></i>
                    <span>fa-list-alt</span>
                </li>
                <li class="icon spc_id_609">
                    <i class="fas fa-lock"></i>
                    <span>fa-lock</span>
                </li>
                <li class="icon spc_id_610">
                    <i class="fas fa-flag"></i>
                    <span>fa-flag</span>
                </li>
                <li class="icon spc_id_611">
                    <i class="fas fa-headphones"></i>
                    <span>fa-headphones</span>
                </li>
                <li class="icon spc_id_612">
                    <i class="fas fa-volume-off"></i>
                    <span>fa-volume-off</span>
                </li>
                <li class="icon spc_id_613">
                    <i class="fas fa-volume-down"></i>
                    <span>fa-volume-down</span>
                </li>
                <li class="icon spc_id_614">
                    <i class="fas fa-volume-up"></i>
                    <span>fa-volume-up</span>
                </li>
                <li class="icon spc_id_615">
                    <i class="fas fa-qrcode"></i>
                    <span>fa-qrcode</span>
                </li>
                <li class="icon spc_id_616">
                    <i class="fas fa-barcode"></i>
                    <span>fa-barcode</span>
                </li>
                <li class="icon spc_id_617">
                    <i class="fas fa-tag"></i>
                    <span>fa-tag</span>
                </li>
                <li class="icon spc_id_618">
                    <i class="fas fa-tags"></i>
                    <span>fa-tags</span>
                </li>
                <li class="icon spc_id_619">
                    <i class="fas fa-book"></i>
                    <span>fa-book</span>
                </li>
                <li class="icon spc_id_620">
                    <i class="fas fa-bookmark"></i>
                    <span>fa-bookmark</span>
                </li>
                <li class="icon spc_id_621">
                    <i class="fas fa-print"></i>
                    <span>fa-print</span>
                </li>
                <li class="icon spc_id_622">
                    <i class="fas fa-camera"></i>
                    <span>fa-camera</span>
                </li>
                <li class="icon spc_id_623">
                    <i class="fas fa-font"></i>
                    <span>fa-font</span>
                </li>
                <li class="icon spc_id_624">
                    <i class="fas fa-bold"></i>
                    <span>fa-bold</span>
                </li>
                <li class="icon spc_id_625">
                    <i class="fas fa-italic"></i>
                    <span>fa-italic</span>
                </li>
                <li class="icon spc_id_626">
                    <i class="fas fa-text-height"></i>
                    <span>fa-text-height</span>
                </li>
                <li class="icon spc_id_627">
                    <i class="fas fa-text-width"></i>
                    <span>fa-text-width</span>
                </li>
                <li class="icon spc_id_628">
                    <i class="fas fa-align-left"></i>
                    <span>fa-align-left</span>
                </li>
                <li class="icon spc_id_629">
                    <i class="fas fa-align-center"></i>
                    <span>fa-align-center</span>
                </li>
                <li class="icon spc_id_630">
                    <i class="fas fa-align-right"></i>
                    <span>fa-align-right</span>
                </li>
                <li class="icon spc_id_631">
                    <i class="fas fa-align-justify"></i>
                    <span>fa-align-justify</span>
                </li>
                <li class="icon spc_id_632">
                    <i class="fas fa-list"></i>
                    <span>fa-list</span>
                </li>
                <li class="icon spc_id_633">
                    <i class="fas fa-outdent"></i>
                    <span>fa-outdent</span>
                </li>
                <li class="icon spc_id_634">
                    <i class="fas fa-indent"></i>
                    <span>fa-indent</span>
                </li>
                <li class="icon spc_id_635">
                    <i class="fas fa-video"></i>
                    <span>fa-video</span>
                </li>
                <li class="icon spc_id_636">
                    <i class="fas fa-image"></i>
                    <span>fa-image</span>
                </li>
                <li class="icon spc_id_637">
                    <i class="fas fa-map-marker"></i>
                    <span>fa-map-marker</span>
                </li>
                <li class="icon spc_id_638">
                    <i class="fas fa-adjust"></i>
                    <span>fa-adjust</span>
                </li>
                <li class="icon spc_id_639">
                    <i class="fas fa-tint"></i>
                    <span>fa-tint</span>
                </li>
                <li class="icon spc_id_640">
                    <i class="fas fa-edit"></i>
                    <span>fa-edit</span>
                </li>
                <li class="icon spc_id_641">
                    <i class="fas fa-step-backward"></i>
                    <span>fa-step-backward</span>
                </li>
                <li class="icon spc_id_642">
                    <i class="fas fa-fast-backward"></i>
                    <span>fa-fast-backward</span>
                </li>
                <li class="icon spc_id_643">
                    <i class="fas fa-backward"></i>
                    <span>fa-backward</span>
                </li>
                <li class="icon spc_id_644">
                    <i class="fas fa-play"></i>
                    <span>fa-play</span>
                </li>
                <li class="icon spc_id_645">
                    <i class="fas fa-pause"></i>
                    <span>fa-pause</span>
                </li>
                <li class="icon spc_id_646">
                    <i class="fas fa-stop"></i>
                    <span>fa-stop</span>
                </li>
                <li class="icon spc_id_647">
                    <i class="fas fa-forward"></i>
                    <span>fa-forward</span>
                </li>
                <li class="icon spc_id_648">
                    <i class="fas fa-fast-forward"></i>
                    <span>fa-fast-forward</span>
                </li>
                <li class="icon spc_id_649">
                    <i class="fas fa-step-forward"></i>
                    <span>fa-step-forward</span>
                </li>
                <li class="icon spc_id_650">
                    <i class="fas fa-eject"></i>
                    <span>fa-eject</span>
                </li>
                <li class="icon spc_id_651">
                    <i class="fas fa-chevron-left"></i>
                    <span>fa-chevron-left</span>
                </li>
                <li class="icon spc_id_652">
                    <i class="fas fa-chevron-right"></i>
                    <span>fa-chevron-right</span>
                </li>
                <li class="icon spc_id_653">
                    <i class="fas fa-plus-circle"></i>
                    <span>fa-plus-circle</span>
                </li>
                <li class="icon spc_id_654">
                    <i class="fas fa-minus-circle"></i>
                    <span>fa-minus-circle</span>
                </li>
                <li class="icon spc_id_655">
                    <i class="fas fa-times-circle"></i>
                    <span>fa-times-circle</span>
                </li>
                <li class="icon spc_id_656">
                    <i class="fas fa-check-circle"></i>
                    <span>fa-check-circle</span>
                </li>
                <li class="icon spc_id_657">
                    <i class="fas fa-question-circle"></i>
                    <span>fa-question-circle</span>
                </li>
                <li class="icon spc_id_658">
                    <i class="fas fa-info-circle"></i>
                    <span>fa-info-circle</span>
                </li>
                <li class="icon spc_id_659">
                    <i class="fas fa-crosshairs"></i>
                    <span>fa-crosshairs</span>
                </li>
                <li class="icon spc_id_660">
                    <i class="fas fa-ban"></i>
                    <span>fa-ban</span>
                </li>
                <li class="icon spc_id_661">
                    <i class="fas fa-arrow-left"></i>
                    <span>fa-arrow-left</span>
                </li>
                <li class="icon spc_id_662">
                    <i class="fas fa-arrow-right"></i>
                    <span>fa-arrow-right</span>
                </li>
                <li class="icon spc_id_663">
                    <i class="fas fa-arrow-up"></i>
                    <span>fa-arrow-up</span>
                </li>
                <li class="icon spc_id_664">
                    <i class="fas fa-arrow-down"></i>
                    <span>fa-arrow-down</span>
                </li>
                <li class="icon spc_id_665">
                    <i class="fas fa-share"></i>
                    <span>fa-share</span>
                </li>
                <li class="icon spc_id_666">
                    <i class="fas fa-expand"></i>
                    <span>fa-expand</span>
                </li>
                <li class="icon spc_id_667">
                    <i class="fas fa-compress"></i>
                    <span>fa-compress</span>
                </li>
                <li class="icon spc_id_668">
                    <i class="fas fa-plus"></i>
                    <span>fa-plus</span>
                </li>
                <li class="icon spc_id_669">
                    <i class="fas fa-minus"></i>
                    <span>fa-minus</span>
                </li>
                <li class="icon spc_id_670">
                    <i class="fas fa-asterisk"></i>
                    <span>fa-asterisk</span>
                </li>
                <li class="icon spc_id_671">
                    <i class="fas fa-exclamation-circle"></i>
                    <span>fa-exclamation-circle</span>
                </li>
                <li class="icon spc_id_672">
                    <i class="fas fa-gift"></i>
                    <span>fa-gift</span>
                </li>
                <li class="icon spc_id_673">
                    <i class="fas fa-leaf"></i>
                    <span>fa-leaf</span>
                </li>
                <li class="icon spc_id_674">
                    <i class="fas fa-fire"></i>
                    <span>fa-fire</span>
                </li>
                <li class="icon spc_id_675">
                    <i class="fas fa-eye"></i>
                    <span>fa-eye</span>
                </li>
                <li class="icon spc_id_676">
                    <i class="fas fa-eye-slash"></i>
                    <span>fa-eye-slash</span>
                </li>
                <li class="icon spc_id_677">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span>fa-exclamation-triangle</span>
                </li>
                <li class="icon spc_id_678">
                    <i class="fas fa-plane"></i>
                    <span>fa-plane</span>
                </li>
                <li class="icon spc_id_679">
                    <i class="fas fa-calendar-alt"></i>
                    <span>fa-calendar-alt</span>
                </li>
                <li class="icon spc_id_680">
                    <i class="fas fa-random"></i>
                    <span>fa-random</span>
                </li>
                <li class="icon spc_id_681">
                    <i class="fas fa-comment"></i>
                    <span>fa-comment</span>
                </li>
                <li class="icon spc_id_682">
                    <i class="fas fa-magnet"></i>
                    <span>fa-magnet</span>
                </li>
                <li class="icon spc_id_683">
                    <i class="fas fa-chevron-up"></i>
                    <span>fa-chevron-up</span>
                </li>
                <li class="icon spc_id_684">
                    <i class="fas fa-chevron-down"></i>
                    <span>fa-chevron-down</span>
                </li>
                <li class="icon spc_id_685">
                    <i class="fas fa-retweet"></i>
                    <span>fa-retweet</span>
                </li>
                <li class="icon spc_id_686">
                    <i class="fas fa-shopping-cart"></i>
                    <span>fa-shopping-cart</span>
                </li>
                <li class="icon spc_id_687">
                    <i class="fas fa-folder"></i>
                    <span>fa-folder</span>
                </li>
                <li class="icon spc_id_688">
                    <i class="fas fa-folder-open"></i>
                    <span>fa-folder-open</span>
                </li>
                <li class="icon spc_id_689">
                    <i class="fas fa-chart-bar"></i>
                    <span>fa-chart-bar</span>
                </li>
                <li class="icon spc_id_690">
                    <i class="fas fa-camera-retro"></i>
                    <span>fa-camera-retro</span>
                </li>
                <li class="icon spc_id_691">
                    <i class="fas fa-key"></i>
                    <span>fa-key</span>
                </li>
                <li class="icon spc_id_692">
                    <i class="fas fa-cogs"></i>
                    <span>fa-cogs</span>
                </li>
                <li class="icon spc_id_693">
                    <i class="fas fa-comments"></i>
                    <span>fa-comments</span>
                </li>
                <li class="icon spc_id_694">
                    <i class="fas fa-star-half"></i>
                    <span>fa-star-half</span>
                </li>
                <li class="icon spc_id_695">
                    <i class="fas fa-thumbtack"></i>
                    <span>fa-thumbtack</span>
                </li>
                <li class="icon spc_id_696">
                    <i class="fas fa-trophy"></i>
                    <span>fa-trophy</span>
                </li>
                <li class="icon spc_id_697">
                    <i class="fas fa-upload"></i>
                    <span>fa-upload</span>
                </li>
                <li class="icon spc_id_698">
                    <i class="fas fa-lemon"></i>
                    <span>fa-lemon</span>
                </li>
                <li class="icon spc_id_699">
                    <i class="fas fa-phone"></i>
                    <span>fa-phone</span>
                </li>
                <li class="icon spc_id_700">
                    <i class="fas fa-phone-square"></i>
                    <span>fa-phone-square</span>
                </li>
                <li class="icon spc_id_701">
                    <i class="fas fa-unlock"></i>
                    <span>fa-unlock</span>
                </li>
                <li class="icon spc_id_702">
                    <i class="fas fa-credit-card"></i>
                    <span>fa-credit-card</span>
                </li>
                <li class="icon spc_id_703">
                    <i class="fas fa-rss"></i>
                    <span>fa-rss</span>
                </li>
                <li class="icon spc_id_704">
                    <i class="fas fa-hdd"></i>
                    <span>fa-hdd</span>
                </li>
                <li class="icon spc_id_705">
                    <i class="fas fa-bullhorn"></i>
                    <span>fa-bullhorn</span>
                </li>
                <li class="icon spc_id_706">
                    <i class="fas fa-certificate"></i>
                    <span>fa-certificate</span>
                </li>
                <li class="icon spc_id_707">
                    <i class="fas fa-hand-point-right"></i>
                    <span>fa-hand-point-right</span>
                </li>
                <li class="icon spc_id_708">
                    <i class="fas fa-hand-point-left"></i>
                    <span>fa-hand-point-left</span>
                </li>
                <li class="icon spc_id_709">
                    <i class="fas fa-hand-point-up"></i>
                    <span>fa-hand-point-up</span>
                </li>
                <li class="icon spc_id_710">
                    <i class="fas fa-hand-point-down"></i>
                    <span>fa-hand-point-down</span>
                </li>
                <li class="icon spc_id_711">
                    <i class="fas fa-arrow-circle-left"></i>
                    <span>fa-arrow-circle-left</span>
                </li>
                <li class="icon spc_id_712">
                    <i class="fas fa-arrow-circle-right"></i>
                    <span>fa-arrow-circle-right</span>
                </li>
                <li class="icon spc_id_713">
                    <i class="fas fa-arrow-circle-up"></i>
                    <span>fa-arrow-circle-up</span>
                </li>
                <li class="icon spc_id_714">
                    <i class="fas fa-arrow-circle-down"></i>
                    <span>fa-arrow-circle-down</span>
                </li>
                <li class="icon spc_id_715">
                    <i class="fas fa-globe"></i>
                    <span>fa-globe</span>
                </li>
                <li class="icon spc_id_716">
                    <i class="fas fa-wrench"></i>
                    <span>fa-wrench</span>
                </li>
                <li class="icon spc_id_717">
                    <i class="fas fa-tasks"></i>
                    <span>fa-tasks</span>
                </li>
                <li class="icon spc_id_718">
                    <i class="fas fa-filter"></i>
                    <span>fa-filter</span>
                </li>
                <li class="icon spc_id_719">
                    <i class="fas fa-briefcase"></i>
                    <span>fa-briefcase</span>
                </li>
                <li class="icon spc_id_720">
                    <i class="fas fa-arrows-alt"></i>
                    <span>fa-arrows-alt</span>
                </li>
                <li class="icon spc_id_721">
                    <i class="fas fa-users"></i>
                    <span>fa-users</span>
                </li>
                <li class="icon spc_id_722">
                    <i class="fas fa-link"></i>
                    <span>fa-link</span>
                </li>
                <li class="icon spc_id_723">
                    <i class="fas fa-cloud"></i>
                    <span>fa-cloud</span>
                </li>
                <li class="icon spc_id_724">
                    <i class="fas fa-flask"></i>
                    <span>fa-flask</span>
                </li>
                <li class="icon spc_id_725">
                    <i class="fas fa-cut"></i>
                    <span>fa-cut</span>
                </li>
                <li class="icon spc_id_726">
                    <i class="fas fa-copy"></i>
                    <span>fa-copy</span>
                </li>
                <li class="icon spc_id_727">
                    <i class="fas fa-paperclip"></i>
                    <span>fa-paperclip</span>
                </li>
                <li class="icon spc_id_728">
                    <i class="fas fa-save"></i>
                    <span>fa-save</span>
                </li>
                <li class="icon spc_id_729">
                    <i class="fas fa-square"></i>
                    <span>fa-square</span>
                </li>
                <li class="icon spc_id_730">
                    <i class="fas fa-bars"></i>
                    <span>fa-bars</span>
                </li>
                <li class="icon spc_id_731">
                    <i class="fas fa-list-ul"></i>
                    <span>fa-list-ul</span>
                </li>
                <li class="icon spc_id_732">
                    <i class="fas fa-list-ol"></i>
                    <span>fa-list-ol</span>
                </li>
                <li class="icon spc_id_733">
                    <i class="fas fa-strikethrough"></i>
                    <span>fa-strikethrough</span>
                </li>
                <li class="icon spc_id_734">
                    <i class="fas fa-underline"></i>
                    <span>fa-underline</span>
                </li>
                <li class="icon spc_id_735">
                    <i class="fas fa-table"></i>
                    <span>fa-table</span>
                </li>
                <li class="icon spc_id_736">
                    <i class="fas fa-magic"></i>
                    <span>fa-magic</span>
                </li>
                <li class="icon spc_id_737">
                    <i class="fas fa-truck"></i>
                    <span>fa-truck</span>
                </li>
                <li class="icon spc_id_738">
                    <i class="fas fa-money-bill"></i>
                    <span>fa-money-bill</span>
                </li>
                <li class="icon spc_id_739">
                    <i class="fas fa-caret-down"></i>
                    <span>fa-caret-down</span>
                </li>
                <li class="icon spc_id_740">
                    <i class="fas fa-caret-up"></i>
                    <span>fa-caret-up</span>
                </li>
                <li class="icon spc_id_741">
                    <i class="fas fa-caret-left"></i>
                    <span>fa-caret-left</span>
                </li>
                <li class="icon spc_id_742">
                    <i class="fas fa-caret-right"></i>
                    <span>fa-caret-right</span>
                </li>
                <li class="icon spc_id_743">
                    <i class="fas fa-columns"></i>
                    <span>fa-columns</span>
                </li>
                <li class="icon spc_id_744">
                    <i class="fas fa-sort"></i>
                    <span>fa-sort</span>
                </li>
                <li class="icon spc_id_745">
                    <i class="fas fa-sort-down"></i>
                    <span>fa-sort-down</span>
                </li>
                <li class="icon spc_id_746">
                    <i class="fas fa-sort-up"></i>
                    <span>fa-sort-up</span>
                </li>
                <li class="icon spc_id_747">
                    <i class="fas fa-envelope"></i>
                    <span>fa-envelope</span>
                </li>
                <li class="icon spc_id_748">
                    <i class="fas fa-undo"></i>
                    <span>fa-undo</span>
                </li>
                <li class="icon spc_id_749">
                    <i class="fas fa-gavel"></i>
                    <span>fa-gavel</span>
                </li>
                <li class="icon spc_id_750">
                    <i class="fas fa-bolt"></i>
                    <span>fa-bolt</span>
                </li>
                <li class="icon spc_id_751">
                    <i class="fas fa-sitemap"></i>
                    <span>fa-sitemap</span>
                </li>
                <li class="icon spc_id_752">
                    <i class="fas fa-umbrella"></i>
                    <span>fa-umbrella</span>
                </li>
                <li class="icon spc_id_753">
                    <i class="fas fa-paste"></i>
                    <span>fa-paste</span>
                </li>
                <li class="icon spc_id_754">
                    <i class="fas fa-lightbulb"></i>
                    <span>fa-lightbulb</span>
                </li>
                <li class="icon spc_id_755">
                    <i class="fas fa-user-md"></i>
                    <span>fa-user-md</span>
                </li>
                <li class="icon spc_id_756">
                    <i class="fas fa-stethoscope"></i>
                    <span>fa-stethoscope</span>
                </li>
                <li class="icon spc_id_757">
                    <i class="fas fa-suitcase"></i>
                    <span>fa-suitcase</span>
                </li>
                <li class="icon spc_id_758">
                    <i class="fas fa-bell"></i>
                    <span>fa-bell</span>
                </li>
                <li class="icon spc_id_759">
                    <i class="fas fa-coffee"></i>
                    <span>fa-coffee</span>
                </li>
                <li class="icon spc_id_760">
                    <i class="fas fa-hospital"></i>
                    <span>fa-hospital</span>
                </li>
                <li class="icon spc_id_761">
                    <i class="fas fa-ambulance"></i>
                    <span>fa-ambulance</span>
                </li>
                <li class="icon spc_id_762">
                    <i class="fas fa-medkit"></i>
                    <span>fa-medkit</span>
                </li>
                <li class="icon spc_id_763">
                    <i class="fas fa-fighter-jet"></i>
                    <span>fa-fighter-jet</span>
                </li>
                <li class="icon spc_id_764">
                    <i class="fas fa-beer"></i>
                    <span>fa-beer</span>
                </li>
                <li class="icon spc_id_765">
                    <i class="fas fa-h-square"></i>
                    <span>fa-h-square</span>
                </li>
                <li class="icon spc_id_766">
                    <i class="fas fa-plus-square"></i>
                    <span>fa-plus-square</span>
                </li>
                <li class="icon spc_id_767">
                    <i class="fas fa-angle-double-left"></i>
                    <span>fa-angle-double-left</span>
                </li>
                <li class="icon spc_id_768">
                    <i class="fas fa-angle-double-right"></i>
                    <span>fa-angle-double-right</span>
                </li>
                <li class="icon spc_id_769">
                    <i class="fas fa-angle-double-up"></i>
                    <span>fa-angle-double-up</span>
                </li>
                <li class="icon spc_id_770">
                    <i class="fas fa-angle-double-down"></i>
                    <span>fa-angle-double-down</span>
                </li>
                <li class="icon spc_id_771">
                    <i class="fas fa-angle-left"></i>
                    <span>fa-angle-left</span>
                </li>
                <li class="icon spc_id_772">
                    <i class="fas fa-angle-right"></i>
                    <span>fa-angle-right</span>
                </li>
                <li class="icon spc_id_773">
                    <i class="fas fa-angle-up"></i>
                    <span>fa-angle-up</span>
                </li>
                <li class="icon spc_id_774">
                    <i class="fas fa-angle-down"></i>
                    <span>fa-angle-down</span>
                </li>
                <li class="icon spc_id_775">
                    <i class="fas fa-desktop"></i>
                    <span>fa-desktop</span>
                </li>
                <li class="icon spc_id_776">
                    <i class="fas fa-laptop"></i>
                    <span>fa-laptop</span>
                </li>
                <li class="icon spc_id_777">
                    <i class="fas fa-tablet"></i>
                    <span>fa-tablet</span>
                </li>
                <li class="icon spc_id_778">
                    <i class="fas fa-mobile"></i>
                    <span>fa-mobile</span>
                </li>
                <li class="icon spc_id_779">
                    <i class="fas fa-quote-left"></i>
                    <span>fa-quote-left</span>
                </li>
                <li class="icon spc_id_780">
                    <i class="fas fa-quote-right"></i>
                    <span>fa-quote-right</span>
                </li>
                <li class="icon spc_id_781">
                    <i class="fas fa-spinner"></i>
                    <span>fa-spinner</span>
                </li>
                <li class="icon spc_id_782">
                    <i class="fas fa-circle"></i>
                    <span>fa-circle</span>
                </li>
                <li class="icon spc_id_783">
                    <i class="fas fa-smile"></i>
                    <span>fa-smile</span>
                </li>
                <li class="icon spc_id_784">
                    <i class="fas fa-frown"></i>
                    <span>fa-frown</span>
                </li>
                <li class="icon spc_id_785">
                    <i class="fas fa-meh"></i>
                    <span>fa-meh</span>
                </li>
                <li class="icon spc_id_786">
                    <i class="fas fa-gamepad"></i>
                    <span>fa-gamepad</span>
                </li>
                <li class="icon spc_id_787">
                    <i class="fas fa-keyboard"></i>
                    <span>fa-keyboard</span>
                </li>
                <li class="icon spc_id_788">
                    <i class="fas fa-flag-checkered"></i>
                    <span>fa-flag-checkered</span>
                </li>
                <li class="icon spc_id_789">
                    <i class="fas fa-terminal"></i>
                    <span>fa-terminal</span>
                </li>
                <li class="icon spc_id_790">
                    <i class="fas fa-code"></i>
                    <span>fa-code</span>
                </li>
                <li class="icon spc_id_791">
                    <i class="fas fa-reply-all"></i>
                    <span>fa-reply-all</span>
                </li>
                <li class="icon spc_id_792">
                    <i class="fas fa-location-arrow"></i>
                    <span>fa-location-arrow</span>
                </li>
                <li class="icon spc_id_793">
                    <i class="fas fa-crop"></i>
                    <span>fa-crop</span>
                </li>
                <li class="icon spc_id_794">
                    <i class="fas fa-code-branch"></i>
                    <span>fa-code-branch</span>
                </li>
                <li class="icon spc_id_795">
                    <i class="fas fa-unlink"></i>
                    <span>fa-unlink</span>
                </li>
                <li class="icon spc_id_796">
                    <i class="fas fa-question"></i>
                    <span>fa-question</span>
                </li>
                <li class="icon spc_id_797">
                    <i class="fas fa-info"></i>
                    <span>fa-info</span>
                </li>
                <li class="icon spc_id_798">
                    <i class="fas fa-exclamation"></i>
                    <span>fa-exclamation</span>
                </li>
                <li class="icon spc_id_799">
                    <i class="fas fa-superscript"></i>
                    <span>fa-superscript</span>
                </li>
                <li class="icon spc_id_800">
                    <i class="fas fa-subscript"></i>
                    <span>fa-subscript</span>
                </li>
                <li class="icon spc_id_801">
                    <i class="fas fa-eraser"></i>
                    <span>fa-eraser</span>
                </li>
                <li class="icon spc_id_802">
                    <i class="fas fa-puzzle-piece"></i>
                    <span>fa-puzzle-piece</span>
                </li>
                <li class="icon spc_id_803">
                    <i class="fas fa-microphone"></i>
                    <span>fa-microphone</span>
                </li>
                <li class="icon spc_id_804">
                    <i class="fas fa-microphone-slash"></i>
                    <span>fa-microphone-slash</span>
                </li>
                <li class="icon spc_id_805">
                    <i class="fas fa-calendar"></i>
                    <span>fa-calendar</span>
                </li>
                <li class="icon spc_id_806">
                    <i class="fas fa-fire-extinguisher"></i>
                    <span>fa-fire-extinguisher</span>
                </li>
                <li class="icon spc_id_807">
                    <i class="fas fa-rocket"></i>
                    <span>fa-rocket</span>
                </li>
                <li class="icon spc_id_808">
                    <i class="fas fa-chevron-circle-left"></i>
                    <span>fa-chevron-circle-left</span>
                </li>
                <li class="icon spc_id_809">
                    <i class="fas fa-chevron-circle-right"></i>
                    <span>fa-chevron-circle-right</span>
                </li>
                <li class="icon spc_id_810">
                    <i class="fas fa-chevron-circle-up"></i>
                    <span>fa-chevron-circle-up</span>
                </li>
                <li class="icon spc_id_811">
                    <i class="fas fa-chevron-circle-down"></i>
                    <span>fa-chevron-circle-down</span>
                </li>
                <li class="icon spc_id_812">
                    <i class="fas fa-anchor"></i>
                    <span>fa-anchor</span>
                </li>
                <li class="icon spc_id_813">
                    <i class="fas fa-unlock-alt"></i>
                    <span>fa-unlock-alt</span>
                </li>
                <li class="icon spc_id_814">
                    <i class="fas fa-bullseye"></i>
                    <span>fa-bullseye</span>
                </li>
                <li class="icon spc_id_815">
                    <i class="fas fa-ellipsis-h"></i>
                    <span>fa-ellipsis-h</span>
                </li>
                <li class="icon spc_id_816">
                    <i class="fas fa-ellipsis-v"></i>
                    <span>fa-ellipsis-v</span>
                </li>
                <li class="icon spc_id_817">
                    <i class="fas fa-rss-square"></i>
                    <span>fa-rss-square</span>
                </li>
                <li class="icon spc_id_818">
                    <i class="fas fa-play-circle"></i>
                    <span>fa-play-circle</span>
                </li>
                <li class="icon spc_id_819">
                    <i class="fas fa-minus-square"></i>
                    <span>fa-minus-square</span>
                </li>
                <li class="icon spc_id_820">
                    <i class="fas fa-check-square"></i>
                    <span>fa-check-square</span>
                </li>
                <li class="icon spc_id_821">
                    <i class="fas fa-pen-square"></i>
                    <span>fa-pen-square</span>
                </li>
                <li class="icon spc_id_822">
                    <i class="fas fa-share-square"></i>
                    <span>fa-share-square</span>
                </li>
                <li class="icon spc_id_823">
                    <i class="fas fa-compass"></i>
                    <span>fa-compass</span>
                </li>
                <li class="icon spc_id_824">
                    <i class="fas fa-caret-square-down"></i>
                    <span>fa-caret-square-down</span>
                </li>
                <li class="icon spc_id_825">
                    <i class="fas fa-caret-square-up"></i>
                    <span>fa-caret-square-up</span>
                </li>
                <li class="icon spc_id_826">
                    <i class="fas fa-caret-square-right"></i>
                    <span>fa-caret-square-right</span>
                </li>
                <li class="icon spc_id_827">
                    <i class="fas fa-euro-sign"></i>
                    <span>fa-euro-sign</span>
                </li>
                <li class="icon spc_id_828">
                    <i class="fas fa-pound-sign"></i>
                    <span>fa-pound-sign</span>
                </li>
                <li class="icon spc_id_829">
                    <i class="fas fa-dollar-sign"></i>
                    <span>fa-dollar-sign</span>
                </li>
                <li class="icon spc_id_830">
                    <i class="fas fa-rupee-sign"></i>
                    <span>fa-rupee-sign</span>
                </li>
                <li class="icon spc_id_831">
                    <i class="fas fa-yen-sign"></i>
                    <span>fa-yen-sign</span>
                </li>
                <li class="icon spc_id_832">
                    <i class="fas fa-ruble-sign"></i>
                    <span>fa-ruble-sign</span>
                </li>
                <li class="icon spc_id_833">
                    <i class="fas fa-won-sign"></i>
                    <span>fa-won-sign</span>
                </li>
                <li class="icon spc_id_834">
                    <i class="fas fa-file"></i>
                    <span>fa-file</span>
                </li>
                <li class="icon spc_id_835">
                    <i class="fas fa-file-alt"></i>
                    <span>fa-file-alt</span>
                </li>
                <li class="icon spc_id_836">
                    <i class="fas fa-sort-alpha-down"></i>
                    <span>fa-sort-alpha-down</span>
                </li>
                <li class="icon spc_id_837">
                    <i class="fas fa-sort-alpha-up"></i>
                    <span>fa-sort-alpha-up</span>
                </li>
                <li class="icon spc_id_838">
                    <i class="fas fa-sort-amount-down"></i>
                    <span>fa-sort-amount-down</span>
                </li>
                <li class="icon spc_id_839">
                    <i class="fas fa-sort-amount-up"></i>
                    <span>fa-sort-amount-up</span>
                </li>
                <li class="icon spc_id_840">
                    <i class="fas fa-sort-numeric-down"></i>
                    <span>fa-sort-numeric-down</span>
                </li>
                <li class="icon spc_id_841">
                    <i class="fas fa-sort-numeric-up"></i>
                    <span>fa-sort-numeric-up</span>
                </li>
                <li class="icon spc_id_842">
                    <i class="fas fa-thumbs-up"></i>
                    <span>fa-thumbs-up</span>
                </li>
                <li class="icon spc_id_843">
                    <i class="fas fa-thumbs-down"></i>
                    <span>fa-thumbs-down</span>
                </li>
                <li class="icon spc_id_844">
                    <i class="fas fa-female"></i>
                    <span>fa-female</span>
                </li>
                <li class="icon spc_id_845">
                    <i class="fas fa-male"></i>
                    <span>fa-male</span>
                </li>
                <li class="icon spc_id_846">
                    <i class="fas fa-sun"></i>
                    <span>fa-sun</span>
                </li>
                <li class="icon spc_id_847">
                    <i class="fas fa-moon"></i>
                    <span>fa-moon</span>
                </li>
                <li class="icon spc_id_848">
                    <i class="fas fa-archive"></i>
                    <span>fa-archive</span>
                </li>
                <li class="icon spc_id_849">
                    <i class="fas fa-bug"></i>
                    <span>fa-bug</span>
                </li>
                <li class="icon spc_id_850">
                    <i class="fas fa-caret-square-left"></i>
                    <span>fa-caret-square-left</span>
                </li>
                <li class="icon spc_id_851">
                    <i class="fas fa-dot-circle"></i>
                    <span>fa-dot-circle</span>
                </li>
                <li class="icon spc_id_852">
                    <i class="fas fa-wheelchair"></i>
                    <span>fa-wheelchair</span>
                </li>
                <li class="icon spc_id_853">
                    <i class="fas fa-lira-sign"></i>
                    <span>fa-lira-sign</span>
                </li>
                <li class="icon spc_id_854">
                    <i class="fas fa-space-shuttle"></i>
                    <span>fa-space-shuttle</span>
                </li>
                <li class="icon spc_id_855">
                    <i class="fas fa-envelope-square"></i>
                    <span>fa-envelope-square</span>
                </li>
                <li class="icon spc_id_856">
                    <i class="fas fa-university"></i>
                    <span>fa-university</span>
                </li>
                <li class="icon spc_id_857">
                    <i class="fas fa-graduation-cap"></i>
                    <span>fa-graduation-cap</span>
                </li>
                <li class="icon spc_id_858">
                    <i class="fas fa-language"></i>
                    <span>fa-language</span>
                </li>
                <li class="icon spc_id_859">
                    <i class="fas fa-fax"></i>
                    <span>fa-fax</span>
                </li>
                <li class="icon spc_id_860">
                    <i class="fas fa-building"></i>
                    <span>fa-building</span>
                </li>
                <li class="icon spc_id_861">
                    <i class="fas fa-child"></i>
                    <span>fa-child</span>
                </li>
                <li class="icon spc_id_862">
                    <i class="fas fa-paw"></i>
                    <span>fa-paw</span>
                </li>
                <li class="icon spc_id_863">
                    <i class="fas fa-cube"></i>
                    <span>fa-cube</span>
                </li>
                <li class="icon spc_id_864">
                    <i class="fas fa-cubes"></i>
                    <span>fa-cubes</span>
                </li>
                <li class="icon spc_id_865">
                    <i class="fas fa-recycle"></i>
                    <span>fa-recycle</span>
                </li>
                <li class="icon spc_id_866">
                    <i class="fas fa-car"></i>
                    <span>fa-car</span>
                </li>
                <li class="icon spc_id_867">
                    <i class="fas fa-taxi"></i>
                    <span>fa-taxi</span>
                </li>
                <li class="icon spc_id_868">
                    <i class="fas fa-tree"></i>
                    <span>fa-tree</span>
                </li>
                <li class="icon spc_id_869">
                    <i class="fas fa-database"></i>
                    <span>fa-database</span>
                </li>
                <li class="icon spc_id_870">
                    <i class="fas fa-file-pdf"></i>
                    <span>fa-file-pdf</span>
                </li>
                <li class="icon spc_id_871">
                    <i class="fas fa-file-word"></i>
                    <span>fa-file-word</span>
                </li>
                <li class="icon spc_id_872">
                    <i class="fas fa-file-excel"></i>
                    <span>fa-file-excel</span>
                </li>
                <li class="icon spc_id_873">
                    <i class="fas fa-file-powerpoint"></i>
                    <span>fa-file-powerpoint</span>
                </li>
                <li class="icon spc_id_874">
                    <i class="fas fa-file-image"></i>
                    <span>fa-file-image</span>
                </li>
                <li class="icon spc_id_875">
                    <i class="fas fa-file-archive"></i>
                    <span>fa-file-archive</span>
                </li>
                <li class="icon spc_id_876">
                    <i class="fas fa-file-audio"></i>
                    <span>fa-file-audio</span>
                </li>
                <li class="icon spc_id_877">
                    <i class="fas fa-file-video"></i>
                    <span>fa-file-video</span>
                </li>
                <li class="icon spc_id_878">
                    <i class="fas fa-file-code"></i>
                    <span>fa-file-code</span>
                </li>
                <li class="icon spc_id_879">
                    <i class="fas fa-life-ring"></i>
                    <span>fa-life-ring</span>
                </li>
                <li class="icon spc_id_880">
                    <i class="fas fa-circle-notch"></i>
                    <span>fa-circle-notch</span>
                </li>
                <li class="icon spc_id_881">
                    <i class="fas fa-paper-plane"></i>
                    <span>fa-paper-plane</span>
                </li>
                <li class="icon spc_id_882">
                    <i class="fas fa-history"></i>
                    <span>fa-history</span>
                </li>
                <li class="icon spc_id_883">
                    <i class="fas fa-heading"></i>
                    <span>fa-heading</span>
                </li>
                <li class="icon spc_id_884">
                    <i class="fas fa-paragraph"></i>
                    <span>fa-paragraph</span>
                </li>
                <li class="icon spc_id_885">
                    <i class="fas fa-sliders-h"></i>
                    <span>fa-sliders-h</span>
                </li>
                <li class="icon spc_id_886">
                    <i class="fas fa-share-alt"></i>
                    <span>fa-share-alt</span>
                </li>
                <li class="icon spc_id_887">
                    <i class="fas fa-share-alt-square"></i>
                    <span>fa-share-alt-square</span>
                </li>
                <li class="icon spc_id_888">
                    <i class="fas fa-bomb"></i>
                    <span>fa-bomb</span>
                </li>
                <li class="icon spc_id_889">
                    <i class="fas fa-futbol"></i>
                    <span>fa-futbol</span>
                </li>
                <li class="icon spc_id_890">
                    <i class="fas fa-tty"></i>
                    <span>fa-tty</span>
                </li>
                <li class="icon spc_id_891">
                    <i class="fas fa-binoculars"></i>
                    <span>fa-binoculars</span>
                </li>
                <li class="icon spc_id_892">
                    <i class="fas fa-plug"></i>
                    <span>fa-plug</span>
                </li>
                <li class="icon spc_id_893">
                    <i class="fas fa-newspaper"></i>
                    <span>fa-newspaper</span>
                </li>
                <li class="icon spc_id_894">
                    <i class="fas fa-wifi"></i>
                    <span>fa-wifi</span>
                </li>
                <li class="icon spc_id_895">
                    <i class="fas fa-calculator"></i>
                    <span>fa-calculator</span>
                </li>
                <li class="icon spc_id_896">
                    <i class="fas fa-bell-slash"></i>
                    <span>fa-bell-slash</span>
                </li>
                <li class="icon spc_id_897">
                    <i class="fas fa-trash"></i>
                    <span>fa-trash</span>
                </li>
                <li class="icon spc_id_898">
                    <i class="fas fa-copyright"></i>
                    <span>fa-copyright</span>
                </li>
                <li class="icon spc_id_899">
                    <i class="fas fa-at"></i>
                    <span>fa-at</span>
                </li>
                <li class="icon spc_id_900">
                    <i class="fas fa-eye-dropper"></i>
                    <span>fa-eye-dropper</span>
                </li>
                <li class="icon spc_id_901">
                    <i class="fas fa-paint-brush"></i>
                    <span>fa-paint-brush</span>
                </li>
                <li class="icon spc_id_902">
                    <i class="fas fa-birthday-cake"></i>
                    <span>fa-birthday-cake</span>
                </li>
                <li class="icon spc_id_903">
                    <i class="fas fa-chart-area"></i>
                    <span>fa-chart-area</span>
                </li>
                <li class="icon spc_id_904">
                    <i class="fas fa-chart-pie"></i>
                    <span>fa-chart-pie</span>
                </li>
                <li class="icon spc_id_905">
                    <i class="fas fa-chart-line"></i>
                    <span>fa-chart-line</span>
                </li>
                <li class="icon spc_id_906">
                    <i class="fas fa-toggle-off"></i>
                    <span>fa-toggle-off</span>
                </li>
                <li class="icon spc_id_907">
                    <i class="fas fa-toggle-on"></i>
                    <span>fa-toggle-on</span>
                </li>
                <li class="icon spc_id_908">
                    <i class="fas fa-bicycle"></i>
                    <span>fa-bicycle</span>
                </li>
                <li class="icon spc_id_909">
                    <i class="fas fa-bus"></i>
                    <span>fa-bus</span>
                </li>
                <li class="icon spc_id_910">
                    <i class="fas fa-closed-captioning"></i>
                    <span>fa-closed-captioning</span>
                </li>
                <li class="icon spc_id_911">
                    <i class="fas fa-shekel-sign"></i>
                    <span>fa-shekel-sign</span>
                </li>
                <li class="icon spc_id_912">
                    <i class="fas fa-cart-plus"></i>
                    <span>fa-cart-plus</span>
                </li>
                <li class="icon spc_id_913">
                    <i class="fas fa-cart-arrow-down"></i>
                    <span>fa-cart-arrow-down</span>
                </li>
                <li class="icon spc_id_914">
                    <i class="fas fa-ship"></i>
                    <span>fa-ship</span>
                </li>
                <li class="icon spc_id_915">
                    <i class="fas fa-user-secret"></i>
                    <span>fa-user-secret</span>
                </li>
                <li class="icon spc_id_916">
                    <i class="fas fa-motorcycle"></i>
                    <span>fa-motorcycle</span>
                </li>
                <li class="icon spc_id_917">
                    <i class="fas fa-street-view"></i>
                    <span>fa-street-view</span>
                </li>
                <li class="icon spc_id_918">
                    <i class="fas fa-heartbeat"></i>
                    <span>fa-heartbeat</span>
                </li>
                <li class="icon spc_id_919">
                    <i class="fas fa-venus"></i>
                    <span>fa-venus</span>
                </li>
                <li class="icon spc_id_920">
                    <i class="fas fa-mars"></i>
                    <span>fa-mars</span>
                </li>
                <li class="icon spc_id_921">
                    <i class="fas fa-mercury"></i>
                    <span>fa-mercury</span>
                </li>
                <li class="icon spc_id_922">
                    <i class="fas fa-transgender"></i>
                    <span>fa-transgender</span>
                </li>
                <li class="icon spc_id_923">
                    <i class="fas fa-transgender-alt"></i>
                    <span>fa-transgender-alt</span>
                </li>
                <li class="icon spc_id_924">
                    <i class="fas fa-venus-double"></i>
                    <span>fa-venus-double</span>
                </li>
                <li class="icon spc_id_925">
                    <i class="fas fa-mars-double"></i>
                    <span>fa-mars-double</span>
                </li>
                <li class="icon spc_id_926">
                    <i class="fas fa-venus-mars"></i>
                    <span>fa-venus-mars</span>
                </li>
                <li class="icon spc_id_927">
                    <i class="fas fa-mars-stroke"></i>
                    <span>fa-mars-stroke</span>
                </li>
                <li class="icon spc_id_928">
                    <i class="fas fa-mars-stroke-v"></i>
                    <span>fa-mars-stroke-v</span>
                </li>
                <li class="icon spc_id_929">
                    <i class="fas fa-mars-stroke-h"></i>
                    <span>fa-mars-stroke-h</span>
                </li>
                <li class="icon spc_id_930">
                    <i class="fas fa-neuter"></i>
                    <span>fa-neuter</span>
                </li>
                <li class="icon spc_id_931">
                    <i class="fas fa-genderless"></i>
                    <span>fa-genderless</span>
                </li>
                <li class="icon spc_id_932">
                    <i class="fas fa-server"></i>
                    <span>fa-server</span>
                </li>
                <li class="icon spc_id_933">
                    <i class="fas fa-user-plus"></i>
                    <span>fa-user-plus</span>
                </li>
                <li class="icon spc_id_934">
                    <i class="fas fa-user-times"></i>
                    <span>fa-user-times</span>
                </li>
                <li class="icon spc_id_935">
                    <i class="fas fa-bed"></i>
                    <span>fa-bed</span>
                </li>
                <li class="icon spc_id_936">
                    <i class="fas fa-train"></i>
                    <span>fa-train</span>
                </li>
                <li class="icon spc_id_937">
                    <i class="fas fa-subway"></i>
                    <span>fa-subway</span>
                </li>
                <li class="icon spc_id_938">
                    <i class="fas fa-battery-full"></i>
                    <span>fa-battery-full</span>
                </li>
                <li class="icon spc_id_939">
                    <i class="fas fa-battery-three-quarters"></i>
                    <span>fa-battery-three-quarters</span>
                </li>
                <li class="icon spc_id_940">
                    <i class="fas fa-battery-half"></i>
                    <span>fa-battery-half</span>
                </li>
                <li class="icon spc_id_941">
                    <i class="fas fa-battery-quarter"></i>
                    <span>fa-battery-quarter</span>
                </li>
                <li class="icon spc_id_942">
                    <i class="fas fa-battery-empty"></i>
                    <span>fa-battery-empty</span>
                </li>
                <li class="icon spc_id_943">
                    <i class="fas fa-mouse-pointer"></i>
                    <span>fa-mouse-pointer</span>
                </li>
                <li class="icon spc_id_944">
                    <i class="fas fa-i-cursor"></i>
                    <span>fa-i-cursor</span>
                </li>
                <li class="icon spc_id_945">
                    <i class="fas fa-object-group"></i>
                    <span>fa-object-group</span>
                </li>
                <li class="icon spc_id_946">
                    <i class="fas fa-object-ungroup"></i>
                    <span>fa-object-ungroup</span>
                </li>
                <li class="icon spc_id_947">
                    <i class="fas fa-sticky-note"></i>
                    <span>fa-sticky-note</span>
                </li>
                <li class="icon spc_id_948">
                    <i class="fas fa-clone"></i>
                    <span>fa-clone</span>
                </li>
                <li class="icon spc_id_949">
                    <i class="fas fa-balance-scale"></i>
                    <span>fa-balance-scale</span>
                </li>
                <li class="icon spc_id_950">
                    <i class="fas fa-hourglass-start"></i>
                    <span>fa-hourglass-start</span>
                </li>
                <li class="icon spc_id_951">
                    <i class="fas fa-hourglass-half"></i>
                    <span>fa-hourglass-half</span>
                </li>
                <li class="icon spc_id_952">
                    <i class="fas fa-hourglass-end"></i>
                    <span>fa-hourglass-end</span>
                </li>
                <li class="icon spc_id_953">
                    <i class="fas fa-hourglass"></i>
                    <span>fa-hourglass</span>
                </li>
                <li class="icon spc_id_954">
                    <i class="fas fa-hand-rock"></i>
                    <span>fa-hand-rock</span>
                </li>
                <li class="icon spc_id_955">
                    <i class="fas fa-hand-paper"></i>
                    <span>fa-hand-paper</span>
                </li>
                <li class="icon spc_id_956">
                    <i class="fas fa-hand-scissors"></i>
                    <span>fa-hand-scissors</span>
                </li>
                <li class="icon spc_id_957">
                    <i class="fas fa-hand-lizard"></i>
                    <span>fa-hand-lizard</span>
                </li>
                <li class="icon spc_id_958">
                    <i class="fas fa-hand-spock"></i>
                    <span>fa-hand-spock</span>
                </li>
                <li class="icon spc_id_959">
                    <i class="fas fa-hand-pointer"></i>
                    <span>fa-hand-pointer</span>
                </li>
                <li class="icon spc_id_960">
                    <i class="fas fa-hand-peace"></i>
                    <span>fa-hand-peace</span>
                </li>
                <li class="icon spc_id_961">
                    <i class="fas fa-trademark"></i>
                    <span>fa-trademark</span>
                </li>
                <li class="icon spc_id_962">
                    <i class="fas fa-registered"></i>
                    <span>fa-registered</span>
                </li>
                <li class="icon spc_id_963">
                    <i class="fas fa-tv"></i>
                    <span>fa-tv</span>
                </li>
                <li class="icon spc_id_964">
                    <i class="fas fa-calendar-plus"></i>
                    <span>fa-calendar-plus</span>
                </li>
                <li class="icon spc_id_965">
                    <i class="fas fa-calendar-minus"></i>
                    <span>fa-calendar-minus</span>
                </li>
                <li class="icon spc_id_966">
                    <i class="fas fa-calendar-times"></i>
                    <span>fa-calendar-times</span>
                </li>
                <li class="icon spc_id_967">
                    <i class="fas fa-calendar-check"></i>
                    <span>fa-calendar-check</span>
                </li>
                <li class="icon spc_id_968">
                    <i class="fas fa-industry"></i>
                    <span>fa-industry</span>
                </li>
                <li class="icon spc_id_969">
                    <i class="fas fa-map-pin"></i>
                    <span>fa-map-pin</span>
                </li>
                <li class="icon spc_id_970">
                    <i class="fas fa-map-signs"></i>
                    <span>fa-map-signs</span>
                </li>
                <li class="icon spc_id_971">
                    <i class="fas fa-map"></i>
                    <span>fa-map</span>
                </li>
                <li class="icon spc_id_972">
                    <i class="fas fa-comment-alt"></i>
                    <span>fa-comment-alt</span>
                </li>
                <li class="icon spc_id_973">
                    <i class="fas fa-pause-circle"></i>
                    <span>fa-pause-circle</span>
                </li>
                <li class="icon spc_id_974">
                    <i class="fas fa-stop-circle"></i>
                    <span>fa-stop-circle</span>
                </li>
                <li class="icon spc_id_975">
                    <i class="fas fa-shopping-bag"></i>
                    <span>fa-shopping-bag</span>
                </li>
                <li class="icon spc_id_976">
                    <i class="fas fa-shopping-basket"></i>
                    <span>fa-shopping-basket</span>
                </li>
                <li class="icon spc_id_977">
                    <i class="fas fa-hashtag"></i>
                    <span>fa-hashtag</span>
                </li>
                <li class="icon spc_id_978">
                    <i class="fas fa-percent"></i>
                    <span>fa-percent</span>
                </li>
                <li class="icon spc_id_979">
                    <i class="fas fa-universal-access"></i>
                    <span>fa-universal-access</span>
                </li>
                <li class="icon spc_id_980">
                    <i class="fas fa-blind"></i>
                    <span>fa-blind</span>
                </li>
                <li class="icon spc_id_981">
                    <i class="fas fa-audio-description"></i>
                    <span>fa-audio-description</span>
                </li>
                <li class="icon spc_id_982">
                    <i class="fas fa-phone-volume"></i>
                    <span>fa-phone-volume</span>
                </li>
                <li class="icon spc_id_983">
                    <i class="fas fa-braille"></i>
                    <span>fa-braille</span>
                </li>
                <li class="icon spc_id_984">
                    <i class="fas fa-assistive-listening-systems"></i>
                    <span>fa-assistive-listening-systems</span>
                </li>
                <li class="icon spc_id_985">
                    <i class="fas fa-american-sign-language-interpreting"></i>
                    <span>fa-american-sign-language-interpreting</span>
                </li>
                <li class="icon spc_id_986">
                    <i class="fas fa-deaf"></i>
                    <span>fa-deaf</span>
                </li>
                <li class="icon spc_id_987">
                    <i class="fas fa-sign-language"></i>
                    <span>fa-sign-language</span>
                </li>
                <li class="icon spc_id_988">
                    <i class="fas fa-low-vision"></i>
                    <span>fa-low-vision</span>
                </li>
                <li class="icon spc_id_989">
                    <i class="fas fa-handshake"></i>
                    <span>fa-handshake</span>
                </li>
                <li class="icon spc_id_990">
                    <i class="fas fa-envelope-open"></i>
                    <span>fa-envelope-open</span>
                </li>
                <li class="icon spc_id_991">
                    <i class="fas fa-address-book"></i>
                    <span>fa-address-book</span>
                </li>
                <li class="icon spc_id_992">
                    <i class="fas fa-address-card"></i>
                    <span>fa-address-card</span>
                </li>
                <li class="icon spc_id_993">
                    <i class="fas fa-user-circle"></i>
                    <span>fa-user-circle</span>
                </li>
                <li class="icon spc_id_994">
                    <i class="fas fa-id-badge"></i>
                    <span>fa-id-badge</span>
                </li>
                <li class="icon spc_id_995">
                    <i class="fas fa-id-card"></i>
                    <span>fa-id-card</span>
                </li>
                <li class="icon spc_id_996">
                    <i class="fas fa-thermometer-full"></i>
                    <span>fa-thermometer-full</span>
                </li>
                <li class="icon spc_id_997">
                    <i class="fas fa-thermometer-three-quarters"></i>
                    <span>fa-thermometer-three-quarters</span>
                </li>
                <li class="icon spc_id_998">
                    <i class="fas fa-thermometer-half"></i>
                    <span>fa-thermometer-half</span>
                </li>
                <li class="icon spc_id_999">
                    <i class="fas fa-thermometer-quarter"></i>
                    <span>fa-thermometer-quarter</span>
                </li>
                <li class="icon spc_id_1000">
                    <i class="fas fa-thermometer-empty"></i>
                    <span>fa-thermometer-empty</span>
                </li>
                <li class="icon spc_id_1001">
                    <i class="fas fa-shower"></i>
                    <span>fa-shower</span>
                </li>
                <li class="icon spc_id_1002">
                    <i class="fas fa-bath"></i>
                    <span>fa-bath</span>
                </li>
                <li class="icon spc_id_1003">
                    <i class="fas fa-podcast"></i>
                    <span>fa-podcast</span>
                </li>
                <li class="icon spc_id_1004">
                    <i class="fas fa-window-maximize"></i>
                    <span>fa-window-maximize</span>
                </li>
                <li class="icon spc_id_1005">
                    <i class="fas fa-window-minimize"></i>
                    <span>fa-window-minimize</span>
                </li>
                <li class="icon spc_id_1006">
                    <i class="fas fa-window-restore"></i>
                    <span>fa-window-restore</span>
                </li>
                <li class="icon spc_id_1007">
                    <i class="fas fa-microchip"></i>
                    <span>fa-microchip</span>
                </li>
                <li class="icon spc_id_1008">
                    <i class="fas fa-snowflake"></i>
                    <span>fa-snowflake</span>
                </li>
                <li class="icon spc_id_1009">
                    <i class="fas fa-utensil-spoon"></i>
                    <span>fa-utensil-spoon</span>
                </li>
                <li class="icon spc_id_1010">
                    <i class="fas fa-utensils"></i>
                    <span>fa-utensils</span>
                </li>
                <li class="icon spc_id_1011">
                    <i class="fas fa-undo-alt"></i>
                    <span>fa-undo-alt</span>
                </li>
                <li class="icon spc_id_1012">
                    <i class="fas fa-trash-alt"></i>
                    <span>fa-trash-alt</span>
                </li>
                <li class="icon spc_id_1013">
                    <i class="fas fa-sync-alt"></i>
                    <span>fa-sync-alt</span>
                </li>
                <li class="icon spc_id_1014">
                    <i class="fas fa-stopwatch"></i>
                    <span>fa-stopwatch</span>
                </li>
                <li class="icon spc_id_1015">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>fa-sign-out-alt</span>
                </li>
                <li class="icon spc_id_1016">
                    <i class="fas fa-sign-in-alt"></i>
                    <span>fa-sign-in-alt</span>
                </li>
                <li class="icon spc_id_1017">
                    <i class="fas fa-redo-alt"></i>
                    <span>fa-redo-alt</span>
                </li>
                <li class="icon spc_id_1018">
                    <i class="fas fa-poo"></i>
                    <span>fa-poo</span>
                </li>
                <li class="icon spc_id_1019">
                    <i class="fas fa-images"></i>
                    <span>fa-images</span>
                </li>
                <li class="icon spc_id_1020">
                    <i class="fas fa-pencil-alt"></i>
                    <span>fa-pencil-alt</span>
                </li>
                <li class="icon spc_id_1021">
                    <i class="fas fa-pen"></i>
                    <span>fa-pen</span>
                </li>
                <li class="icon spc_id_1022">
                    <i class="fas fa-pen-alt"></i>
                    <span>fa-pen-alt</span>
                </li>
                <li class="icon spc_id_1023">
                    <i class="fas fa-long-arrow-alt-down"></i>
                    <span>fa-long-arrow-alt-down</span>
                </li>
                <li class="icon spc_id_1024">
                    <i class="fas fa-long-arrow-alt-left"></i>
                    <span>fa-long-arrow-alt-left</span>
                </li>
                <li class="icon spc_id_1025">
                    <i class="fas fa-long-arrow-alt-right"></i>
                    <span>fa-long-arrow-alt-right</span>
                </li>
                <li class="icon spc_id_1026">
                    <i class="fas fa-long-arrow-alt-up"></i>
                    <span>fa-long-arrow-alt-up</span>
                </li>
                <li class="icon spc_id_1027">
                    <i class="fas fa-expand-arrows-alt"></i>
                    <span>fa-expand-arrows-alt</span>
                </li>
                <li class="icon spc_id_1028">
                    <i class="fas fa-clipboard"></i>
                    <span>fa-clipboard</span>
                </li>
                <li class="icon spc_id_1029">
                    <i class="fas fa-arrows-alt-h"></i>
                    <span>fa-arrows-alt-h</span>
                </li>
                <li class="icon spc_id_1030">
                    <i class="fas fa-arrows-alt-v"></i>
                    <span>fa-arrows-alt-v</span>
                </li>
                <li class="icon spc_id_1031">
                    <i class="fas fa-arrow-alt-circle-down"></i>
                    <span>fa-arrow-alt-circle-down</span>
                </li>
                <li class="icon spc_id_1032">
                    <i class="fas fa-arrow-alt-circle-left"></i>
                    <span>fa-arrow-alt-circle-left</span>
                </li>
                <li class="icon spc_id_1033">
                    <i class="fas fa-arrow-alt-circle-right"></i>
                    <span>fa-arrow-alt-circle-right</span>
                </li>
                <li class="icon spc_id_1034">
                    <i class="fas fa-arrow-alt-circle-up"></i>
                    <span>fa-arrow-alt-circle-up</span>
                </li>
                <li class="icon spc_id_1035">
                    <i class="fas fa-external-link-alt"></i>
                    <span>fa-external-link-alt</span>
                </li>
                <li class="icon spc_id_1036">
                    <i class="fas fa-external-link-square-alt"></i>
                    <span>fa-external-link-square-alt</span>
                </li>
                <li class="icon spc_id_1037">
                    <i class="fas fa-exchange-alt"></i>
                    <span>fa-exchange-alt</span>
                </li>
                <li class="icon spc_id_1038">
                    <i class="fas fa-cloud-download-alt"></i>
                    <span>fa-cloud-download-alt</span>
                </li>
                <li class="icon spc_id_1039">
                    <i class="fas fa-cloud-upload-alt"></i>
                    <span>fa-cloud-upload-alt</span>
                </li>
                <li class="icon spc_id_1040">
                    <i class="fas fa-gem"></i>
                    <span>fa-gem</span>
                </li>
                <li class="icon spc_id_1041">
                    <i class="fas fa-level-down-alt"></i>
                    <span>fa-level-down-alt</span>
                </li>
                <li class="icon spc_id_1042">
                    <i class="fas fa-level-up-alt"></i>
                    <span>fa-level-up-alt</span>
                </li>
                <li class="icon spc_id_1043">
                    <i class="fas fa-lock-open"></i>
                    <span>fa-lock-open</span>
                </li>
                <li class="icon spc_id_1044">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>fa-map-marker-alt</span>
                </li>
                <li class="icon spc_id_1045">
                    <i class="fas fa-microphone-alt"></i>
                    <span>fa-microphone-alt</span>
                </li>
                <li class="icon spc_id_1046">
                    <i class="fas fa-mobile-alt"></i>
                    <span>fa-mobile-alt</span>
                </li>
                <li class="icon spc_id_1047">
                    <i class="fas fa-money-bill-alt"></i>
                    <span>fa-money-bill-alt</span>
                </li>
                <li class="icon spc_id_1048">
                    <i class="fas fa-phone-slash"></i>
                    <span>fa-phone-slash</span>
                </li>
                <li class="icon spc_id_1049">
                    <i class="fas fa-portrait"></i>
                    <span>fa-portrait</span>
                </li>
                <li class="icon spc_id_1050">
                    <i class="fas fa-reply"></i>
                    <span>fa-reply</span>
                </li>
                <li class="icon spc_id_1051">
                    <i class="fas fa-shield-alt"></i>
                    <span>fa-shield-alt</span>
                </li>
                <li class="icon spc_id_1052">
                    <i class="fas fa-tablet-alt"></i>
                    <span>fa-tablet-alt</span>
                </li>
                <li class="icon spc_id_1053">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>fa-tachometer-alt</span>
                </li>
                <li class="icon spc_id_1054">
                    <i class="fas fa-ticket-alt"></i>
                    <span>fa-ticket-alt</span>
                </li>
                <li class="icon spc_id_1055">
                    <i class="fas fa-user-alt"></i>
                    <span>fa-user-alt</span>
                </li>
                <li class="icon spc_id_1056">
                    <i class="fas fa-window-close"></i>
                    <span>fa-window-close</span>
                </li>
                <li class="icon spc_id_1057">
                    <i class="fas fa-baseball-ball"></i>
                    <span>fa-baseball-ball</span>
                </li>
                <li class="icon spc_id_1058">
                    <i class="fas fa-basketball-ball"></i>
                    <span>fa-basketball-ball</span>
                </li>
                <li class="icon spc_id_1059">
                    <i class="fas fa-bowling-ball"></i>
                    <span>fa-bowling-ball</span>
                </li>
                <li class="icon spc_id_1060">
                    <i class="fas fa-chess"></i>
                    <span>fa-chess</span>
                </li>
                <li class="icon spc_id_1061">
                    <i class="fas fa-chess-bishop"></i>
                    <span>fa-chess-bishop</span>
                </li>
                <li class="icon spc_id_1062">
                    <i class="fas fa-chess-board"></i>
                    <span>fa-chess-board</span>
                </li>
                <li class="icon spc_id_1063">
                    <i class="fas fa-chess-king"></i>
                    <span>fa-chess-king</span>
                </li>
                <li class="icon spc_id_1064">
                    <i class="fas fa-chess-knight"></i>
                    <span>fa-chess-knight</span>
                </li>
                <li class="icon spc_id_1065">
                    <i class="fas fa-chess-pawn"></i>
                    <span>fa-chess-pawn</span>
                </li>
                <li class="icon spc_id_1066">
                    <i class="fas fa-chess-queen"></i>
                    <span>fa-chess-queen</span>
                </li>
                <li class="icon spc_id_1067">
                    <i class="fas fa-chess-rook"></i>
                    <span>fa-chess-rook</span>
                </li>
                <li class="icon spc_id_1068">
                    <i class="fas fa-dumbbell"></i>
                    <span>fa-dumbbell</span>
                </li>
                <li class="icon spc_id_1069">
                    <i class="fas fa-football-ball"></i>
                    <span>fa-football-ball</span>
                </li>
                <li class="icon spc_id_1070">
                    <i class="fas fa-golf-ball"></i>
                    <span>fa-golf-ball</span>
                </li>
                <li class="icon spc_id_1071">
                    <i class="fas fa-hockey-puck"></i>
                    <span>fa-hockey-puck</span>
                </li>
                <li class="icon spc_id_1072">
                    <i class="fas fa-quidditch"></i>
                    <span>fa-quidditch</span>
                </li>
                <li class="icon spc_id_1073">
                    <i class="fas fa-square-full"></i>
                    <span>fa-square-full</span>
                </li>
                <li class="icon spc_id_1074">
                    <i class="fas fa-table-tennis"></i>
                    <span>fa-table-tennis</span>
                </li>
                <li class="icon spc_id_1075">
                    <i class="fas fa-volleyball-ball"></i>
                    <span>fa-volleyball-ball</span>
                </li>
                <li class="icon spc_id_1076">
                    <i class="fas fa-allergies"></i>
                    <span>fa-allergies</span>
                </li>
                <li class="icon spc_id_1077">
                    <i class="fas fa-band-aid"></i>
                    <span>fa-band-aid</span>
                </li>
                <li class="icon spc_id_1078">
                    <i class="fas fa-box"></i>
                    <span>fa-box</span>
                </li>
                <li class="icon spc_id_1079">
                    <i class="fas fa-boxes"></i>
                    <span>fa-boxes</span>
                </li>
                <li class="icon spc_id_1080">
                    <i class="fas fa-briefcase-medical"></i>
                    <span>fa-briefcase-medical</span>
                </li>
                <li class="icon spc_id_1081">
                    <i class="fas fa-burn"></i>
                    <span>fa-burn</span>
                </li>
                <li class="icon spc_id_1082">
                    <i class="fas fa-capsules"></i>
                    <span>fa-capsules</span>
                </li>
                <li class="icon spc_id_1083">
                    <i class="fas fa-clipboard-check"></i>
                    <span>fa-clipboard-check</span>
                </li>
                <li class="icon spc_id_1084">
                    <i class="fas fa-clipboard-list"></i>
                    <span>fa-clipboard-list</span>
                </li>
                <li class="icon spc_id_1085">
                    <i class="fas fa-diagnoses"></i>
                    <span>fa-diagnoses</span>
                </li>
                <li class="icon spc_id_1086">
                    <i class="fas fa-dna"></i>
                    <span>fa-dna</span>
                </li>
                <li class="icon spc_id_1087">
                    <i class="fas fa-dolly"></i>
                    <span>fa-dolly</span>
                </li>
                <li class="icon spc_id_1088">
                    <i class="fas fa-dolly-flatbed"></i>
                    <span>fa-dolly-flatbed</span>
                </li>
                <li class="icon spc_id_1089">
                    <i class="fas fa-file-medical"></i>
                    <span>fa-file-medical</span>
                </li>
                <li class="icon spc_id_1090">
                    <i class="fas fa-file-medical-alt"></i>
                    <span>fa-file-medical-alt</span>
                </li>
                <li class="icon spc_id_1091">
                    <i class="fas fa-first-aid"></i>
                    <span>fa-first-aid</span>
                </li>
                <li class="icon spc_id_1092">
                    <i class="fas fa-hospital-alt"></i>
                    <span>fa-hospital-alt</span>
                </li>
                <li class="icon spc_id_1093">
                    <i class="fas fa-hospital-symbol"></i>
                    <span>fa-hospital-symbol</span>
                </li>
                <li class="icon spc_id_1094">
                    <i class="fas fa-id-card-alt"></i>
                    <span>fa-id-card-alt</span>
                </li>
                <li class="icon spc_id_1095">
                    <i class="fas fa-notes-medical"></i>
                    <span>fa-notes-medical</span>
                </li>
                <li class="icon spc_id_1096">
                    <i class="fas fa-pallet"></i>
                    <span>fa-pallet</span>
                </li>
                <li class="icon spc_id_1097">
                    <i class="fas fa-pills"></i>
                    <span>fa-pills</span>
                </li>
                <li class="icon spc_id_1098">
                    <i class="fas fa-prescription-bottle"></i>
                    <span>fa-prescription-bottle</span>
                </li>
                <li class="icon spc_id_1099">
                    <i class="fas fa-prescription-bottle-alt"></i>
                    <span>fa-prescription-bottle-alt</span>
                </li>
                <li class="icon spc_id_1100">
                    <i class="fas fa-procedures"></i>
                    <span>fa-procedures</span>
                </li>
                <li class="icon spc_id_1101">
                    <i class="fas fa-shipping-fast"></i>
                    <span>fa-shipping-fast</span>
                </li>
                <li class="icon spc_id_1102">
                    <i class="fas fa-smoking"></i>
                    <span>fa-smoking</span>
                </li>
                <li class="icon spc_id_1103">
                    <i class="fas fa-syringe"></i>
                    <span>fa-syringe</span>
                </li>
                <li class="icon spc_id_1104">
                    <i class="fas fa-tablets"></i>
                    <span>fa-tablets</span>
                </li>
                <li class="icon spc_id_1105">
                    <i class="fas fa-thermometer"></i>
                    <span>fa-thermometer</span>
                </li>
                <li class="icon spc_id_1106">
                    <i class="fas fa-vial"></i>
                    <span>fa-vial</span>
                </li>
                <li class="icon spc_id_1107">
                    <i class="fas fa-vials"></i>
                    <span>fa-vials</span>
                </li>
                <li class="icon spc_id_1108">
                    <i class="fas fa-warehouse"></i>
                    <span>fa-warehouse</span>
                </li>
                <li class="icon spc_id_1109">
                    <i class="fas fa-weight"></i>
                    <span>fa-weight</span>
                </li>
                <li class="icon spc_id_1110">
                    <i class="fas fa-x-ray"></i>
                    <span>fa-x-ray</span>
                </li>
                <li class="icon spc_id_1111">
                    <i class="fas fa-box-open"></i>
                    <span>fa-box-open</span>
                </li>
                <li class="icon spc_id_1112">
                    <i class="fas fa-comment-dots"></i>
                    <span>fa-comment-dots</span>
                </li>
                <li class="icon spc_id_1113">
                    <i class="fas fa-comment-slash"></i>
                    <span>fa-comment-slash</span>
                </li>
                <li class="icon spc_id_1114">
                    <i class="fas fa-couch"></i>
                    <span>fa-couch</span>
                </li>
                <li class="icon spc_id_1115">
                    <i class="fas fa-donate"></i>
                    <span>fa-donate</span>
                </li>
                <li class="icon spc_id_1116">
                    <i class="fas fa-dove"></i>
                    <span>fa-dove</span>
                </li>
                <li class="icon spc_id_1117">
                    <i class="fas fa-hand-holding"></i>
                    <span>fa-hand-holding</span>
                </li>
                <li class="icon spc_id_1118">
                    <i class="fas fa-hand-holding-heart"></i>
                    <span>fa-hand-holding-heart</span>
                </li>
                <li class="icon spc_id_1119">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>fa-hand-holding-usd</span>
                </li>
                <li class="icon spc_id_1120">
                    <i class="fas fa-hands"></i>
                    <span>fa-hands</span>
                </li>
                <li class="icon spc_id_1121">
                    <i class="fas fa-hands-helping"></i>
                    <span>fa-hands-helping</span>
                </li>
                <li class="icon spc_id_1122">
                    <i class="fas fa-parachute-box"></i>
                    <span>fa-parachute-box</span>
                </li>
                <li class="icon spc_id_1123">
                    <i class="fas fa-people-carry"></i>
                    <span>fa-people-carry</span>
                </li>
                <li class="icon spc_id_1124">
                    <i class="fas fa-piggy-bank"></i>
                    <span>fa-piggy-bank</span>
                </li>
                <li class="icon spc_id_1125">
                    <i class="fas fa-ribbon"></i>
                    <span>fa-ribbon</span>
                </li>
                <li class="icon spc_id_1126">
                    <i class="fas fa-route"></i>
                    <span>fa-route</span>
                </li>
                <li class="icon spc_id_1127">
                    <i class="fas fa-seedling"></i>
                    <span>fa-seedling</span>
                </li>
                <li class="icon spc_id_1128">
                    <i class="fas fa-sign"></i>
                    <span>fa-sign</span>
                </li>
                <li class="icon spc_id_1129">
                    <i class="fas fa-smile-wink"></i>
                    <span>fa-smile-wink</span>
                </li>
                <li class="icon spc_id_1130">
                    <i class="fas fa-tape"></i>
                    <span>fa-tape</span>
                </li>
                <li class="icon spc_id_1131">
                    <i class="fas fa-truck-loading"></i>
                    <span>fa-truck-loading</span>
                </li>
                <li class="icon spc_id_1132">
                    <i class="fas fa-truck-moving"></i>
                    <span>fa-truck-moving</span>
                </li>
                <li class="icon spc_id_1133">
                    <i class="fas fa-video-slash"></i>
                    <span>fa-video-slash</span>
                </li>
                <li class="icon spc_id_1134">
                    <i class="fas fa-wine-glass"></i>
                    <span>fa-wine-glass</span>
                </li>
                <li class="icon spc_id_1135">
                    <i class="fas fa-user-alt-slash"></i>
                    <span>fa-user-alt-slash</span>
                </li>
                <li class="icon spc_id_1136">
                    <i class="fas fa-user-astronaut"></i>
                    <span>fa-user-astronaut</span>
                </li>
                <li class="icon spc_id_1137">
                    <i class="fas fa-user-check"></i>
                    <span>fa-user-check</span>
                </li>
                <li class="icon spc_id_1138">
                    <i class="fas fa-user-clock"></i>
                    <span>fa-user-clock</span>
                </li>
                <li class="icon spc_id_1139">
                    <i class="fas fa-user-cog"></i>
                    <span>fa-user-cog</span>
                </li>
                <li class="icon spc_id_1140">
                    <i class="fas fa-user-edit"></i>
                    <span>fa-user-edit</span>
                </li>
                <li class="icon spc_id_1141">
                    <i class="fas fa-user-friends"></i>
                    <span>fa-user-friends</span>
                </li>
                <li class="icon spc_id_1142">
                    <i class="fas fa-user-graduate"></i>
                    <span>fa-user-graduate</span>
                </li>
                <li class="icon spc_id_1143">
                    <i class="fas fa-user-lock"></i>
                    <span>fa-user-lock</span>
                </li>
                <li class="icon spc_id_1144">
                    <i class="fas fa-user-minus"></i>
                    <span>fa-user-minus</span>
                </li>
                <li class="icon spc_id_1145">
                    <i class="fas fa-user-ninja"></i>
                    <span>fa-user-ninja</span>
                </li>
                <li class="icon spc_id_1146">
                    <i class="fas fa-user-shield"></i>
                    <span>fa-user-shield</span>
                </li>
                <li class="icon spc_id_1147">
                    <i class="fas fa-user-slash"></i>
                    <span>fa-user-slash</span>
                </li>
                <li class="icon spc_id_1148">
                    <i class="fas fa-user-tag"></i>
                    <span>fa-user-tag</span>
                </li>
                <li class="icon spc_id_1149">
                    <i class="fas fa-user-tie"></i>
                    <span>fa-user-tie</span>
                </li>
                <li class="icon spc_id_1150">
                    <i class="fas fa-users-cog"></i>
                    <span>fa-users-cog</span>
                </li>
                <li class="icon spc_id_1151">
                    <i class="fas fa-balance-scale-left"></i>
                    <span>fa-balance-scale-left</span>
                </li>
                <li class="icon spc_id_1152">
                    <i class="fas fa-balance-scale-right"></i>
                    <span>fa-balance-scale-right</span>
                </li>
                <li class="icon spc_id_1153">
                    <i class="fas fa-blender"></i>
                    <span>fa-blender</span>
                </li>
                <li class="icon spc_id_1154">
                    <i class="fas fa-book-open"></i>
                    <span>fa-book-open</span>
                </li>
                <li class="icon spc_id_1155">
                    <i class="fas fa-broadcast-tower"></i>
                    <span>fa-broadcast-tower</span>
                </li>
                <li class="icon spc_id_1156">
                    <i class="fas fa-broom"></i>
                    <span>fa-broom</span>
                </li>
                <li class="icon spc_id_1157">
                    <i class="fas fa-chalkboard"></i>
                    <span>fa-chalkboard</span>
                </li>
                <li class="icon spc_id_1158">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span>fa-chalkboard-teacher</span>
                </li>
                <li class="icon spc_id_1159">
                    <i class="fas fa-church"></i>
                    <span>fa-church</span>
                </li>
                <li class="icon spc_id_1160">
                    <i class="fas fa-coins"></i>
                    <span>fa-coins</span>
                </li>
                <li class="icon spc_id_1161">
                    <i class="fas fa-compact-disc"></i>
                    <span>fa-compact-disc</span>
                </li>
                <li class="icon spc_id_1162">
                    <i class="fas fa-crow"></i>
                    <span>fa-crow</span>
                </li>
                <li class="icon spc_id_1163">
                    <i class="fas fa-crown"></i>
                    <span>fa-crown</span>
                </li>
                <li class="icon spc_id_1164">
                    <i class="fas fa-dice"></i>
                    <span>fa-dice</span>
                </li>
                <li class="icon spc_id_1165">
                    <i class="fas fa-dice-five"></i>
                    <span>fa-dice-five</span>
                </li>
                <li class="icon spc_id_1166">
                    <i class="fas fa-dice-four"></i>
                    <span>fa-dice-four</span>
                </li>
                <li class="icon spc_id_1167">
                    <i class="fas fa-dice-one"></i>
                    <span>fa-dice-one</span>
                </li>
                <li class="icon spc_id_1168">
                    <i class="fas fa-dice-six"></i>
                    <span>fa-dice-six</span>
                </li>
                <li class="icon spc_id_1169">
                    <i class="fas fa-dice-three"></i>
                    <span>fa-dice-three</span>
                </li>
                <li class="icon spc_id_1170">
                    <i class="fas fa-dice-two"></i>
                    <span>fa-dice-two</span>
                </li>
                <li class="icon spc_id_1171">
                    <i class="fas fa-divide"></i>
                    <span>fa-divide</span>
                </li>
                <li class="icon spc_id_1172">
                    <i class="fas fa-door-closed"></i>
                    <span>fa-door-closed</span>
                </li>
                <li class="icon spc_id_1173">
                    <i class="fas fa-door-open"></i>
                    <span>fa-door-open</span>
                </li>
                <li class="icon spc_id_1174">
                    <i class="fas fa-equals"></i>
                    <span>fa-equals</span>
                </li>
                <li class="icon spc_id_1175">
                    <i class="fas fa-feather"></i>
                    <span>fa-feather</span>
                </li>
                <li class="icon spc_id_1176">
                    <i class="fas fa-frog"></i>
                    <span>fa-frog</span>
                </li>
                <li class="icon spc_id_1177">
                    <i class="fas fa-gas-pump"></i>
                    <span>fa-gas-pump</span>
                </li>
                <li class="icon spc_id_1178">
                    <i class="fas fa-glasses"></i>
                    <span>fa-glasses</span>
                </li>
                <li class="icon spc_id_1179">
                    <i class="fas fa-greater-than"></i>
                    <span>fa-greater-than</span>
                </li>
                <li class="icon spc_id_1180">
                    <i class="fas fa-greater-than-equal"></i>
                    <span>fa-greater-than-equal</span>
                </li>
                <li class="icon spc_id_1181">
                    <i class="fas fa-helicopter"></i>
                    <span>fa-helicopter</span>
                </li>
                <li class="icon spc_id_1182">
                    <i class="fas fa-infinity"></i>
                    <span>fa-infinity</span>
                </li>
                <li class="icon spc_id_1183">
                    <i class="fas fa-kiwi-bird"></i>
                    <span>fa-kiwi-bird</span>
                </li>
                <li class="icon spc_id_1184">
                    <i class="fas fa-less-than"></i>
                    <span>fa-less-than</span>
                </li>
                <li class="icon spc_id_1185">
                    <i class="fas fa-less-than-equal"></i>
                    <span>fa-less-than-equal</span>
                </li>
                <li class="icon spc_id_1186">
                    <i class="fas fa-memory"></i>
                    <span>fa-memory</span>
                </li>
                <li class="icon spc_id_1187">
                    <i class="fas fa-microphone-alt-slash"></i>
                    <span>fa-microphone-alt-slash</span>
                </li>
                <li class="icon spc_id_1188">
                    <i class="fas fa-money-bill-wave"></i>
                    <span>fa-money-bill-wave</span>
                </li>
                <li class="icon spc_id_1189">
                    <i class="fas fa-money-bill-wave-alt"></i>
                    <span>fa-money-bill-wave-alt</span>
                </li>
                <li class="icon spc_id_1190">
                    <i class="fas fa-money-check"></i>
                    <span>fa-money-check</span>
                </li>
                <li class="icon spc_id_1191">
                    <i class="fas fa-money-check-alt"></i>
                    <span>fa-money-check-alt</span>
                </li>
                <li class="icon spc_id_1192">
                    <i class="fas fa-not-equal"></i>
                    <span>fa-not-equal</span>
                </li>
                <li class="icon spc_id_1193">
                    <i class="fas fa-palette"></i>
                    <span>fa-palette</span>
                </li>
                <li class="icon spc_id_1194">
                    <i class="fas fa-parking"></i>
                    <span>fa-parking</span>
                </li>
                <li class="icon spc_id_1195">
                    <i class="fas fa-percentage"></i>
                    <span>fa-percentage</span>
                </li>
                <li class="icon spc_id_1196">
                    <i class="fas fa-project-diagram"></i>
                    <span>fa-project-diagram</span>
                </li>
                <li class="icon spc_id_1197">
                    <i class="fas fa-receipt"></i>
                    <span>fa-receipt</span>
                </li>
                <li class="icon spc_id_1198">
                    <i class="fas fa-robot"></i>
                    <span>fa-robot</span>
                </li>
                <li class="icon spc_id_1199">
                    <i class="fas fa-ruler"></i>
                    <span>fa-ruler</span>
                </li>
                <li class="icon spc_id_1200">
                    <i class="fas fa-ruler-combined"></i>
                    <span>fa-ruler-combined</span>
                </li>
                <li class="icon spc_id_1201">
                    <i class="fas fa-ruler-horizontal"></i>
                    <span>fa-ruler-horizontal</span>
                </li>
                <li class="icon spc_id_1202">
                    <i class="fas fa-ruler-vertical"></i>
                    <span>fa-ruler-vertical</span>
                </li>
                <li class="icon spc_id_1203">
                    <i class="fas fa-school"></i>
                    <span>fa-school</span>
                </li>
                <li class="icon spc_id_1204">
                    <i class="fas fa-screwdriver"></i>
                    <span>fa-screwdriver</span>
                </li>
                <li class="icon spc_id_1205">
                    <i class="fas fa-shoe-prints"></i>
                    <span>fa-shoe-prints</span>
                </li>
                <li class="icon spc_id_1206">
                    <i class="fas fa-skull"></i>
                    <span>fa-skull</span>
                </li>
                <li class="icon spc_id_1207">
                    <i class="fas fa-smoking-ban"></i>
                    <span>fa-smoking-ban</span>
                </li>
                <li class="icon spc_id_1208">
                    <i class="fas fa-store"></i>
                    <span>fa-store</span>
                </li>
                <li class="icon spc_id_1209">
                    <i class="fas fa-store-alt"></i>
                    <span>fa-store-alt</span>
                </li>
                <li class="icon spc_id_1210">
                    <i class="fas fa-stream"></i>
                    <span>fa-stream</span>
                </li>
                <li class="icon spc_id_1211">
                    <i class="fas fa-stroopwafel"></i>
                    <span>fa-stroopwafel</span>
                </li>
                <li class="icon spc_id_1212">
                    <i class="fas fa-toolbox"></i>
                    <span>fa-toolbox</span>
                </li>
                <li class="icon spc_id_1213">
                    <i class="fas fa-tshirt"></i>
                    <span>fa-tshirt</span>
                </li>
                <li class="icon spc_id_1214">
                    <i class="fas fa-walking"></i>
                    <span>fa-walking</span>
                </li>
                <li class="icon spc_id_1215">
                    <i class="fas fa-wallet"></i>
                    <span>fa-wallet</span>
                </li>
                <li class="icon spc_id_1216">
                    <i class="fas fa-angry"></i>
                    <span>fa-angry</span>
                </li>
                <li class="icon spc_id_1217">
                    <i class="fas fa-archway"></i>
                    <span>fa-archway</span>
                </li>
                <li class="icon spc_id_1218">
                    <i class="fas fa-atlas"></i>
                    <span>fa-atlas</span>
                </li>
                <li class="icon spc_id_1219">
                    <i class="fas fa-award"></i>
                    <span>fa-award</span>
                </li>
                <li class="icon spc_id_1220">
                    <i class="fas fa-backspace"></i>
                    <span>fa-backspace</span>
                </li>
                <li class="icon spc_id_1221">
                    <i class="fas fa-bezier-curve"></i>
                    <span>fa-bezier-curve</span>
                </li>
                <li class="icon spc_id_1222">
                    <i class="fas fa-bong"></i>
                    <span>fa-bong</span>
                </li>
                <li class="icon spc_id_1223">
                    <i class="fas fa-brush"></i>
                    <span>fa-brush</span>
                </li>
                <li class="icon spc_id_1224">
                    <i class="fas fa-bus-alt"></i>
                    <span>fa-bus-alt</span>
                </li>
                <li class="icon spc_id_1225">
                    <i class="fas fa-cannabis"></i>
                    <span>fa-cannabis</span>
                </li>
                <li class="icon spc_id_1226">
                    <i class="fas fa-check-double"></i>
                    <span>fa-check-double</span>
                </li>
                <li class="icon spc_id_1227">
                    <i class="fas fa-cocktail"></i>
                    <span>fa-cocktail</span>
                </li>
                <li class="icon spc_id_1228">
                    <i class="fas fa-concierge-bell"></i>
                    <span>fa-concierge-bell</span>
                </li>
                <li class="icon spc_id_1229">
                    <i class="fas fa-cookie"></i>
                    <span>fa-cookie</span>
                </li>
                <li class="icon spc_id_1230">
                    <i class="fas fa-cookie-bite"></i>
                    <span>fa-cookie-bite</span>
                </li>
                <li class="icon spc_id_1231">
                    <i class="fas fa-crop-alt"></i>
                    <span>fa-crop-alt</span>
                </li>
                <li class="icon spc_id_1232">
                    <i class="fas fa-digital-tachograph"></i>
                    <span>fa-digital-tachograph</span>
                </li>
                <li class="icon spc_id_1233">
                    <i class="fas fa-dizzy"></i>
                    <span>fa-dizzy</span>
                </li>
                <li class="icon spc_id_1234">
                    <i class="fas fa-drafting-compass"></i>
                    <span>fa-drafting-compass</span>
                </li>
                <li class="icon spc_id_1235">
                    <i class="fas fa-drum"></i>
                    <span>fa-drum</span>
                </li>
                <li class="icon spc_id_1236">
                    <i class="fas fa-drum-steelpan"></i>
                    <span>fa-drum-steelpan</span>
                </li>
                <li class="icon spc_id_1237">
                    <i class="fas fa-feather-alt"></i>
                    <span>fa-feather-alt</span>
                </li>
                <li class="icon spc_id_1238">
                    <i class="fas fa-file-contract"></i>
                    <span>fa-file-contract</span>
                </li>
                <li class="icon spc_id_1239">
                    <i class="fas fa-file-download"></i>
                    <span>fa-file-download</span>
                </li>
                <li class="icon spc_id_1240">
                    <i class="fas fa-file-export"></i>
                    <span>fa-file-export</span>
                </li>
                <li class="icon spc_id_1241">
                    <i class="fas fa-file-import"></i>
                    <span>fa-file-import</span>
                </li>
                <li class="icon spc_id_1242">
                    <i class="fas fa-file-invoice"></i>
                    <span>fa-file-invoice</span>
                </li>
                <li class="icon spc_id_1243">
                    <i class="fas fa-file-invoice-dollar"></i>
                    <span>fa-file-invoice-dollar</span>
                </li>
                <li class="icon spc_id_1244">
                    <i class="fas fa-file-prescription"></i>
                    <span>fa-file-prescription</span>
                </li>
                <li class="icon spc_id_1245">
                    <i class="fas fa-file-signature"></i>
                    <span>fa-file-signature</span>
                </li>
                <li class="icon spc_id_1246">
                    <i class="fas fa-file-upload"></i>
                    <span>fa-file-upload</span>
                </li>
                <li class="icon spc_id_1247">
                    <i class="fas fa-fill"></i>
                    <span>fa-fill</span>
                </li>
                <li class="icon spc_id_1248">
                    <i class="fas fa-fill-drip"></i>
                    <span>fa-fill-drip</span>
                </li>
                <li class="icon spc_id_1249">
                    <i class="fas fa-fingerprint"></i>
                    <span>fa-fingerprint</span>
                </li>
                <li class="icon spc_id_1250">
                    <i class="fas fa-fish"></i>
                    <span>fa-fish</span>
                </li>
                <li class="icon spc_id_1251">
                    <i class="fas fa-flushed"></i>
                    <span>fa-flushed</span>
                </li>
                <li class="icon spc_id_1252">
                    <i class="fas fa-frown-open"></i>
                    <span>fa-frown-open</span>
                </li>
                <li class="icon spc_id_1253">
                    <i class="fas fa-glass-martini-alt"></i>
                    <span>fa-glass-martini-alt</span>
                </li>
                <li class="icon spc_id_1254">
                    <i class="fas fa-globe-africa"></i>
                    <span>fa-globe-africa</span>
                </li>
                <li class="icon spc_id_1255">
                    <i class="fas fa-globe-americas"></i>
                    <span>fa-globe-americas</span>
                </li>
                <li class="icon spc_id_1256">
                    <i class="fas fa-globe-asia"></i>
                    <span>fa-globe-asia</span>
                </li>
                <li class="icon spc_id_1257">
                    <i class="fas fa-grimace"></i>
                    <span>fa-grimace</span>
                </li>
                <li class="icon spc_id_1258">
                    <i class="fas fa-grin"></i>
                    <span>fa-grin</span>
                </li>
                <li class="icon spc_id_1259">
                    <i class="fas fa-grin-alt"></i>
                    <span>fa-grin-alt</span>
                </li>
                <li class="icon spc_id_1260">
                    <i class="fas fa-grin-beam"></i>
                    <span>fa-grin-beam</span>
                </li>
                <li class="icon spc_id_1261">
                    <i class="fas fa-grin-beam-sweat"></i>
                    <span>fa-grin-beam-sweat</span>
                </li>
                <li class="icon spc_id_1262">
                    <i class="fas fa-grin-hearts"></i>
                    <span>fa-grin-hearts</span>
                </li>
                <li class="icon spc_id_1263">
                    <i class="fas fa-grin-squint"></i>
                    <span>fa-grin-squint</span>
                </li>
                <li class="icon spc_id_1264">
                    <i class="fas fa-grin-squint-tears"></i>
                    <span>fa-grin-squint-tears</span>
                </li>
                <li class="icon spc_id_1265">
                    <i class="fas fa-grin-stars"></i>
                    <span>fa-grin-stars</span>
                </li>
                <li class="icon spc_id_1266">
                    <i class="fas fa-grin-tears"></i>
                    <span>fa-grin-tears</span>
                </li>
                <li class="icon spc_id_1267">
                    <i class="fas fa-grin-tongue"></i>
                    <span>fa-grin-tongue</span>
                </li>
                <li class="icon spc_id_1268">
                    <i class="fas fa-grin-tongue-squint"></i>
                    <span>fa-grin-tongue-squint</span>
                </li>
                <li class="icon spc_id_1269">
                    <i class="fas fa-grin-tongue-wink"></i>
                    <span>fa-grin-tongue-wink</span>
                </li>
                <li class="icon spc_id_1270">
                    <i class="fas fa-grin-wink"></i>
                    <span>fa-grin-wink</span>
                </li>
                <li class="icon spc_id_1271">
                    <i class="fas fa-grip-horizontal"></i>
                    <span>fa-grip-horizontal</span>
                </li>
                <li class="icon spc_id_1272">
                    <i class="fas fa-grip-vertical"></i>
                    <span>fa-grip-vertical</span>
                </li>
                <li class="icon spc_id_1273">
                    <i class="fas fa-headphones-alt"></i>
                    <span>fa-headphones-alt</span>
                </li>
                <li class="icon spc_id_1274">
                    <i class="fas fa-headset"></i>
                    <span>fa-headset</span>
                </li>
                <li class="icon spc_id_1275">
                    <i class="fas fa-highlighter"></i>
                    <span>fa-highlighter</span>
                </li>
                <li class="icon spc_id_1276">
                    <i class="fas fa-hot-tub"></i>
                    <span>fa-hot-tub</span>
                </li>
                <li class="icon spc_id_1277">
                    <i class="fas fa-hotel"></i>
                    <span>fa-hotel</span>
                </li>
                <li class="icon spc_id_1278">
                    <i class="fas fa-joint"></i>
                    <span>fa-joint</span>
                </li>
                <li class="icon spc_id_1279">
                    <i class="fas fa-kiss"></i>
                    <span>fa-kiss</span>
                </li>
                <li class="icon spc_id_1280">
                    <i class="fas fa-kiss-beam"></i>
                    <span>fa-kiss-beam</span>
                </li>
                <li class="icon spc_id_1281">
                    <i class="fas fa-kiss-wink-heart"></i>
                    <span>fa-kiss-wink-heart</span>
                </li>
                <li class="icon spc_id_1282">
                    <i class="fas fa-laugh"></i>
                    <span>fa-laugh</span>
                </li>
                <li class="icon spc_id_1283">
                    <i class="fas fa-laugh-beam"></i>
                    <span>fa-laugh-beam</span>
                </li>
                <li class="icon spc_id_1284">
                    <i class="fas fa-laugh-squint"></i>
                    <span>fa-laugh-squint</span>
                </li>
                <li class="icon spc_id_1285">
                    <i class="fas fa-laugh-wink"></i>
                    <span>fa-laugh-wink</span>
                </li>
                <li class="icon spc_id_1286">
                    <i class="fas fa-luggage-cart"></i>
                    <span>fa-luggage-cart</span>
                </li>
                <li class="icon spc_id_1287">
                    <i class="fas fa-map-marked"></i>
                    <span>fa-map-marked</span>
                </li>
                <li class="icon spc_id_1288">
                    <i class="fas fa-map-marked-alt"></i>
                    <span>fa-map-marked-alt</span>
                </li>
                <li class="icon spc_id_1289">
                    <i class="fas fa-marker"></i>
                    <span>fa-marker</span>
                </li>
                <li class="icon spc_id_1290">
                    <i class="fas fa-medal"></i>
                    <span>fa-medal</span>
                </li>
                <li class="icon spc_id_1291">
                    <i class="fas fa-meh-blank"></i>
                    <span>fa-meh-blank</span>
                </li>
                <li class="icon spc_id_1292">
                    <i class="fas fa-meh-rolling-eyes"></i>
                    <span>fa-meh-rolling-eyes</span>
                </li>
                <li class="icon spc_id_1293">
                    <i class="fas fa-monument"></i>
                    <span>fa-monument</span>
                </li>
                <li class="icon spc_id_1294">
                    <i class="fas fa-mortar-pestle"></i>
                    <span>fa-mortar-pestle</span>
                </li>
                <li class="icon spc_id_1295">
                    <i class="fas fa-paint-roller"></i>
                    <span>fa-paint-roller</span>
                </li>
                <li class="icon spc_id_1296">
                    <i class="fas fa-passport"></i>
                    <span>fa-passport</span>
                </li>
                <li class="icon spc_id_1297">
                    <i class="fas fa-pen-fancy"></i>
                    <span>fa-pen-fancy</span>
                </li>
                <li class="icon spc_id_1298">
                    <i class="fas fa-pen-nib"></i>
                    <span>fa-pen-nib</span>
                </li>
                <li class="icon spc_id_1299">
                    <i class="fas fa-pencil-ruler"></i>
                    <span>fa-pencil-ruler</span>
                </li>
                <li class="icon spc_id_1300">
                    <i class="fas fa-plane-arrival"></i>
                    <span>fa-plane-arrival</span>
                </li>
                <li class="icon spc_id_1301">
                    <i class="fas fa-plane-departure"></i>
                    <span>fa-plane-departure</span>
                </li>
                <li class="icon spc_id_1302">
                    <i class="fas fa-prescription"></i>
                    <span>fa-prescription</span>
                </li>
                <li class="icon spc_id_1303">
                    <i class="fas fa-sad-cry"></i>
                    <span>fa-sad-cry</span>
                </li>
                <li class="icon spc_id_1304">
                    <i class="fas fa-sad-tear"></i>
                    <span>fa-sad-tear</span>
                </li>
                <li class="icon spc_id_1305">
                    <i class="fas fa-shuttle-van"></i>
                    <span>fa-shuttle-van</span>
                </li>
                <li class="icon spc_id_1306">
                    <i class="fas fa-signature"></i>
                    <span>fa-signature</span>
                </li>
                <li class="icon spc_id_1307">
                    <i class="fas fa-smile-beam"></i>
                    <span>fa-smile-beam</span>
                </li>
                <li class="icon spc_id_1308">
                    <i class="fas fa-solar-panel"></i>
                    <span>fa-solar-panel</span>
                </li>
                <li class="icon spc_id_1309">
                    <i class="fas fa-spa"></i>
                    <span>fa-spa</span>
                </li>
                <li class="icon spc_id_1310">
                    <i class="fas fa-splotch"></i>
                    <span>fa-splotch</span>
                </li>
                <li class="icon spc_id_1311">
                    <i class="fas fa-spray-can"></i>
                    <span>fa-spray-can</span>
                </li>
                <li class="icon spc_id_1312">
                    <i class="fas fa-stamp"></i>
                    <span>fa-stamp</span>
                </li>
                <li class="icon spc_id_1313">
                    <i class="fas fa-star-half-alt"></i>
                    <span>fa-star-half-alt</span>
                </li>
                <li class="icon spc_id_1314">
                    <i class="fas fa-suitcase-rolling"></i>
                    <span>fa-suitcase-rolling</span>
                </li>
                <li class="icon spc_id_1315">
                    <i class="fas fa-surprise"></i>
                    <span>fa-surprise</span>
                </li>
                <li class="icon spc_id_1316">
                    <i class="fas fa-swatchbook"></i>
                    <span>fa-swatchbook</span>
                </li>
                <li class="icon spc_id_1317">
                    <i class="fas fa-swimmer"></i>
                    <span>fa-swimmer</span>
                </li>
                <li class="icon spc_id_1318">
                    <i class="fas fa-swimming-pool"></i>
                    <span>fa-swimming-pool</span>
                </li>
                <li class="icon spc_id_1319">
                    <i class="fas fa-tint-slash"></i>
                    <span>fa-tint-slash</span>
                </li>
                <li class="icon spc_id_1320">
                    <i class="fas fa-tired"></i>
                    <span>fa-tired</span>
                </li>
                <li class="icon spc_id_1321">
                    <i class="fas fa-tooth"></i>
                    <span>fa-tooth</span>
                </li>
                <li class="icon spc_id_1322">
                    <i class="fas fa-umbrella-beach"></i>
                    <span>fa-umbrella-beach</span>
                </li>
                <li class="icon spc_id_1323">
                    <i class="fas fa-vector-square"></i>
                    <span>fa-vector-square</span>
                </li>
                <li class="icon spc_id_1324">
                    <i class="fas fa-weight-hanging"></i>
                    <span>fa-weight-hanging</span>
                </li>
                <li class="icon spc_id_1325">
                    <i class="fas fa-wine-glass-alt"></i>
                    <span>fa-wine-glass-alt</span>
                </li>
                <li class="icon spc_id_1326">
                    <i class="fas fa-air-freshener"></i>
                    <span>fa-air-freshener</span>
                </li>
                <li class="icon spc_id_1327">
                    <i class="fas fa-apple-alt"></i>
                    <span>fa-apple-alt</span>
                </li>
                <li class="icon spc_id_1328">
                    <i class="fas fa-atom"></i>
                    <span>fa-atom</span>
                </li>
                <li class="icon spc_id_1329">
                    <i class="fas fa-bone"></i>
                    <span>fa-bone</span>
                </li>
                <li class="icon spc_id_1330">
                    <i class="fas fa-book-reader"></i>
                    <span>fa-book-reader</span>
                </li>
                <li class="icon spc_id_1331">
                    <i class="fas fa-brain"></i>
                    <span>fa-brain</span>
                </li>
                <li class="icon spc_id_1332">
                    <i class="fas fa-car-alt"></i>
                    <span>fa-car-alt</span>
                </li>
                <li class="icon spc_id_1333">
                    <i class="fas fa-car-battery"></i>
                    <span>fa-car-battery</span>
                </li>
                <li class="icon spc_id_1334">
                    <i class="fas fa-car-crash"></i>
                    <span>fa-car-crash</span>
                </li>
                <li class="icon spc_id_1335">
                    <i class="fas fa-car-side"></i>
                    <span>fa-car-side</span>
                </li>
                <li class="icon spc_id_1336">
                    <i class="fas fa-charging-station"></i>
                    <span>fa-charging-station</span>
                </li>
                <li class="icon spc_id_1337">
                    <i class="fas fa-directions"></i>
                    <span>fa-directions</span>
                </li>
                <li class="icon spc_id_1338">
                    <i class="fas fa-draw-polygon"></i>
                    <span>fa-draw-polygon</span>
                </li>
                <li class="icon spc_id_1339">
                    <i class="fas fa-laptop-code"></i>
                    <span>fa-laptop-code</span>
                </li>
                <li class="icon spc_id_1340">
                    <i class="fas fa-layer-group"></i>
                    <span>fa-layer-group</span>
                </li>
                <li class="icon spc_id_1341">
                    <i class="fas fa-microscope"></i>
                    <span>fa-microscope</span>
                </li>
                <li class="icon spc_id_1342">
                    <i class="fas fa-oil-can"></i>
                    <span>fa-oil-can</span>
                </li>
                <li class="icon spc_id_1343">
                    <i class="fas fa-poop"></i>
                    <span>fa-poop</span>
                </li>
                <li class="icon spc_id_1344">
                    <i class="fas fa-shapes"></i>
                    <span>fa-shapes</span>
                </li>
                <li class="icon spc_id_1345">
                    <i class="fas fa-star-of-life"></i>
                    <span>fa-star-of-life</span>
                </li>
                <li class="icon spc_id_1346">
                    <i class="fas fa-teeth"></i>
                    <span>fa-teeth</span>
                </li>
                <li class="icon spc_id_1347">
                    <i class="fas fa-teeth-open"></i>
                    <span>fa-teeth-open</span>
                </li>
                <li class="icon spc_id_1348">
                    <i class="fas fa-theater-masks"></i>
                    <span>fa-theater-masks</span>
                </li>
                <li class="icon spc_id_1349">
                    <i class="fas fa-traffic-light"></i>
                    <span>fa-traffic-light</span>
                </li>
                <li class="icon spc_id_1350">
                    <i class="fas fa-truck-monster"></i>
                    <span>fa-truck-monster</span>
                </li>
                <li class="icon spc_id_1351">
                    <i class="fas fa-truck-pickup"></i>
                    <span>fa-truck-pickup</span>
                </li>
                <li class="icon spc_id_1352">
                    <i class="fas fa-ad"></i>
                    <span>fa-ad</span>
                </li>
                <li class="icon spc_id_1353">
                    <i class="fas fa-ankh"></i>
                    <span>fa-ankh</span>
                </li>
                <li class="icon spc_id_1354">
                    <i class="fas fa-bible"></i>
                    <span>fa-bible</span>
                </li>
                <li class="icon spc_id_1355">
                    <i class="fas fa-business-time"></i>
                    <span>fa-business-time</span>
                </li>
                <li class="icon spc_id_1356">
                    <i class="fas fa-city"></i>
                    <span>fa-city</span>
                </li>
                <li class="icon spc_id_1357">
                    <i class="fas fa-comment-dollar"></i>
                    <span>fa-comment-dollar</span>
                </li>
                <li class="icon spc_id_1358">
                    <i class="fas fa-comments-dollar"></i>
                    <span>fa-comments-dollar</span>
                </li>
                <li class="icon spc_id_1359">
                    <i class="fas fa-cross"></i>
                    <span>fa-cross</span>
                </li>
                <li class="icon spc_id_1360">
                    <i class="fas fa-dharmachakra"></i>
                    <span>fa-dharmachakra</span>
                </li>
                <li class="icon spc_id_1361">
                    <i class="fas fa-envelope-open-text"></i>
                    <span>fa-envelope-open-text</span>
                </li>
                <li class="icon spc_id_1362">
                    <i class="fas fa-folder-minus"></i>
                    <span>fa-folder-minus</span>
                </li>
                <li class="icon spc_id_1363">
                    <i class="fas fa-folder-plus"></i>
                    <span>fa-folder-plus</span>
                </li>
                <li class="icon spc_id_1364">
                    <i class="fas fa-funnel-dollar"></i>
                    <span>fa-funnel-dollar</span>
                </li>
                <li class="icon spc_id_1365">
                    <i class="fas fa-gopuram"></i>
                    <span>fa-gopuram</span>
                </li>
                <li class="icon spc_id_1366">
                    <i class="fas fa-hamsa"></i>
                    <span>fa-hamsa</span>
                </li>
                <li class="icon spc_id_1367">
                    <i class="fas fa-haykal"></i>
                    <span>fa-haykal</span>
                </li>
                <li class="icon spc_id_1368">
                    <i class="fas fa-jedi"></i>
                    <span>fa-jedi</span>
                </li>
                <li class="icon spc_id_1369">
                    <i class="fas fa-journal-whills"></i>
                    <span>fa-journal-whills</span>
                </li>
                <li class="icon spc_id_1370">
                    <i class="fas fa-kaaba"></i>
                    <span>fa-kaaba</span>
                </li>
                <li class="icon spc_id_1371">
                    <i class="fas fa-khanda"></i>
                    <span>fa-khanda</span>
                </li>
                <li class="icon spc_id_1372">
                    <i class="fas fa-landmark"></i>
                    <span>fa-landmark</span>
                </li>
                <li class="icon spc_id_1373">
                    <i class="fas fa-mail-bulk"></i>
                    <span>fa-mail-bulk</span>
                </li>
                <li class="icon spc_id_1374">
                    <i class="fas fa-menorah"></i>
                    <span>fa-menorah</span>
                </li>
                <li class="icon spc_id_1375">
                    <i class="fas fa-mosque"></i>
                    <span>fa-mosque</span>
                </li>
                <li class="icon spc_id_1376">
                    <i class="fas fa-om"></i>
                    <span>fa-om</span>
                </li>
                <li class="icon spc_id_1377">
                    <i class="fas fa-pastafarianism"></i>
                    <span>fa-pastafarianism</span>
                </li>
                <li class="icon spc_id_1378">
                    <i class="fas fa-peace"></i>
                    <span>fa-peace</span>
                </li>
                <li class="icon spc_id_1379">
                    <i class="fas fa-place-of-worship"></i>
                    <span>fa-place-of-worship</span>
                </li>
                <li class="icon spc_id_1380">
                    <i class="fas fa-poll"></i>
                    <span>fa-poll</span>
                </li>
                <li class="icon spc_id_1381">
                    <i class="fas fa-poll-h"></i>
                    <span>fa-poll-h</span>
                </li>
                <li class="icon spc_id_1382">
                    <i class="fas fa-pray"></i>
                    <span>fa-pray</span>
                </li>
                <li class="icon spc_id_1383">
                    <i class="fas fa-praying-hands"></i>
                    <span>fa-praying-hands</span>
                </li>
                <li class="icon spc_id_1384">
                    <i class="fas fa-quran"></i>
                    <span>fa-quran</span>
                </li>
                <li class="icon spc_id_1385">
                    <i class="fas fa-search-dollar"></i>
                    <span>fa-search-dollar</span>
                </li>
                <li class="icon spc_id_1386">
                    <i class="fas fa-search-location"></i>
                    <span>fa-search-location</span>
                </li>
                <li class="icon spc_id_1387">
                    <i class="fas fa-socks"></i>
                    <span>fa-socks</span>
                </li>
                <li class="icon spc_id_1388">
                    <i class="fas fa-square-root-alt"></i>
                    <span>fa-square-root-alt</span>
                </li>
                <li class="icon spc_id_1389">
                    <i class="fas fa-star-and-crescent"></i>
                    <span>fa-star-and-crescent</span>
                </li>
                <li class="icon spc_id_1390">
                    <i class="fas fa-star-of-david"></i>
                    <span>fa-star-of-david</span>
                </li>
                <li class="icon spc_id_1391">
                    <i class="fas fa-synagogue"></i>
                    <span>fa-synagogue</span>
                </li>
                <li class="icon spc_id_1392">
                    <i class="fas fa-torah"></i>
                    <span>fa-torah</span>
                </li>
                <li class="icon spc_id_1393">
                    <i class="fas fa-torii-gate"></i>
                    <span>fa-torii-gate</span>
                </li>
                <li class="icon spc_id_1394">
                    <i class="fas fa-vihara"></i>
                    <span>fa-vihara</span>
                </li>
                <li class="icon spc_id_1395">
                    <i class="fas fa-volume-mute"></i>
                    <span>fa-volume-mute</span>
                </li>
                <li class="icon spc_id_1396">
                    <i class="fas fa-yin-yang"></i>
                    <span>fa-yin-yang</span>
                </li>
                <li class="icon spc_id_1397">
                    <i class="fas fa-blender-phone"></i>
                    <span>fa-blender-phone</span>
                </li>
                <li class="icon spc_id_1398">
                    <i class="fas fa-book-dead"></i>
                    <span>fa-book-dead</span>
                </li>
                <li class="icon spc_id_1399">
                    <i class="fas fa-campground"></i>
                    <span>fa-campground</span>
                </li>
                <li class="icon spc_id_1400">
                    <i class="fas fa-cat"></i>
                    <span>fa-cat</span>
                </li>
                <li class="icon spc_id_1401">
                    <i class="fas fa-chair"></i>
                    <span>fa-chair</span>
                </li>
                <li class="icon spc_id_1402">
                    <i class="fas fa-cloud-moon"></i>
                    <span>fa-cloud-moon</span>
                </li>
                <li class="icon spc_id_1403">
                    <i class="fas fa-cloud-sun"></i>
                    <span>fa-cloud-sun</span>
                </li>
                <li class="icon spc_id_1404">
                    <i class="fas fa-dice-d20"></i>
                    <span>fa-dice-d20</span>
                </li>
                <li class="icon spc_id_1405">
                    <i class="fas fa-dice-d6"></i>
                    <span>fa-dice-d6</span>
                </li>
                <li class="icon spc_id_1406">
                    <i class="fas fa-dog"></i>
                    <span>fa-dog</span>
                </li>
                <li class="icon spc_id_1407">
                    <i class="fas fa-dragon"></i>
                    <span>fa-dragon</span>
                </li>
                <li class="icon spc_id_1408">
                    <i class="fas fa-drumstick-bite"></i>
                    <span>fa-drumstick-bite</span>
                </li>
                <li class="icon spc_id_1409">
                    <i class="fas fa-dungeon"></i>
                    <span>fa-dungeon</span>
                </li>
                <li class="icon spc_id_1410">
                    <i class="fas fa-file-csv"></i>
                    <span>fa-file-csv</span>
                </li>
                <li class="icon spc_id_1411">
                    <i class="fas fa-fist-raised"></i>
                    <span>fa-fist-raised</span>
                </li>
                <li class="icon spc_id_1412">
                    <i class="fas fa-ghost"></i>
                    <span>fa-ghost</span>
                </li>
                <li class="icon spc_id_1413">
                    <i class="fas fa-hammer"></i>
                    <span>fa-hammer</span>
                </li>
                <li class="icon spc_id_1414">
                    <i class="fas fa-hanukiah"></i>
                    <span>fa-hanukiah</span>
                </li>
                <li class="icon spc_id_1415">
                    <i class="fas fa-hat-wizard"></i>
                    <span>fa-hat-wizard</span>
                </li>
                <li class="icon spc_id_1416">
                    <i class="fas fa-hiking"></i>
                    <span>fa-hiking</span>
                </li>
                <li class="icon spc_id_1417">
                    <i class="fas fa-hippo"></i>
                    <span>fa-hippo</span>
                </li>
                <li class="icon spc_id_1418">
                    <i class="fas fa-horse"></i>
                    <span>fa-horse</span>
                </li>
                <li class="icon spc_id_1419">
                    <i class="fas fa-house-damage"></i>
                    <span>fa-house-damage</span>
                </li>
                <li class="icon spc_id_1420">
                    <i class="fas fa-hryvnia"></i>
                    <span>fa-hryvnia</span>
                </li>
                <li class="icon spc_id_1421">
                    <i class="fas fa-mask"></i>
                    <span>fa-mask</span>
                </li>
                <li class="icon spc_id_1422">
                    <i class="fas fa-mountain"></i>
                    <span>fa-mountain</span>
                </li>
                <li class="icon spc_id_1423">
                    <i class="fas fa-network-wired"></i>
                    <span>fa-network-wired</span>
                </li>
                <li class="icon spc_id_1424">
                    <i class="fas fa-otter"></i>
                    <span>fa-otter</span>
                </li>
                <li class="icon spc_id_1425">
                    <i class="fas fa-ring"></i>
                    <span>fa-ring</span>
                </li>
                <li class="icon spc_id_1426">
                    <i class="fas fa-running"></i>
                    <span>fa-running</span>
                </li>
                <li class="icon spc_id_1427">
                    <i class="fas fa-scroll"></i>
                    <span>fa-scroll</span>
                </li>
                <li class="icon spc_id_1428">
                    <i class="fas fa-skull-crossbones"></i>
                    <span>fa-skull-crossbones</span>
                </li>
                <li class="icon spc_id_1429">
                    <i class="fas fa-slash"></i>
                    <span>fa-slash</span>
                </li>
                <li class="icon spc_id_1430">
                    <i class="fas fa-spider"></i>
                    <span>fa-spider</span>
                </li>
                <li class="icon spc_id_1431">
                    <i class="fas fa-toilet-paper"></i>
                    <span>fa-toilet-paper</span>
                </li>
                <li class="icon spc_id_1432">
                    <i class="fas fa-tractor"></i>
                    <span>fa-tractor</span>
                </li>
                <li class="icon spc_id_1433">
                    <i class="fas fa-user-injured"></i>
                    <span>fa-user-injured</span>
                </li>
                <li class="icon spc_id_1434">
                    <i class="fas fa-vr-cardboard"></i>
                    <span>fa-vr-cardboard</span>
                </li>
                <li class="icon spc_id_1435">
                    <i class="fas fa-wind"></i>
                    <span>fa-wind</span>
                </li>
                <li class="icon spc_id_1436">
                    <i class="fas fa-wine-bottle"></i>
                    <span>fa-wine-bottle</span>
                </li>
                <li class="icon spc_id_1437">
                    <i class="fas fa-cloud-meatball"></i>
                    <span>fa-cloud-meatball</span>
                </li>
                <li class="icon spc_id_1438">
                    <i class="fas fa-cloud-moon-rain"></i>
                    <span>fa-cloud-moon-rain</span>
                </li>
                <li class="icon spc_id_1439">
                    <i class="fas fa-cloud-rain"></i>
                    <span>fa-cloud-rain</span>
                </li>
                <li class="icon spc_id_1440">
                    <i class="fas fa-cloud-showers-heavy"></i>
                    <span>fa-cloud-showers-heavy</span>
                </li>
                <li class="icon spc_id_1441">
                    <i class="fas fa-cloud-sun-rain"></i>
                    <span>fa-cloud-sun-rain</span>
                </li>
                <li class="icon spc_id_1442">
                    <i class="fas fa-democrat"></i>
                    <span>fa-democrat</span>
                </li>
                <li class="icon spc_id_1443">
                    <i class="fas fa-flag-usa"></i>
                    <span>fa-flag-usa</span>
                </li>
                <li class="icon spc_id_1444">
                    <i class="fas fa-meteor"></i>
                    <span>fa-meteor</span>
                </li>
                <li class="icon spc_id_1445">
                    <i class="fas fa-person-booth"></i>
                    <span>fa-person-booth</span>
                </li>
                <li class="icon spc_id_1446">
                    <i class="fas fa-poo-storm"></i>
                    <span>fa-poo-storm</span>
                </li>
                <li class="icon spc_id_1447">
                    <i class="fas fa-rainbow"></i>
                    <span>fa-rainbow</span>
                </li>
                <li class="icon spc_id_1448">
                    <i class="fas fa-republican"></i>
                    <span>fa-republican</span>
                </li>
                <li class="icon spc_id_1449">
                    <i class="fas fa-smog"></i>
                    <span>fa-smog</span>
                </li>
                <li class="icon spc_id_1450">
                    <i class="fas fa-temperature-high"></i>
                    <span>fa-temperature-high</span>
                </li>
                <li class="icon spc_id_1451">
                    <i class="fas fa-temperature-low"></i>
                    <span>fa-temperature-low</span>
                </li>
                <li class="icon spc_id_1452">
                    <i class="fas fa-vote-yea"></i>
                    <span>fa-vote-yea</span>
                </li>
                <li class="icon spc_id_1453">
                    <i class="fas fa-water"></i>
                    <span>fa-water</span>
                </li>
                <li class="icon spc_id_1454">
                    <i class="fas fa-baby"></i>
                    <span>fa-baby</span>
                </li>
                <li class="icon spc_id_1455">
                    <i class="fas fa-baby-carriage"></i>
                    <span>fa-baby-carriage</span>
                </li>
                <li class="icon spc_id_1456">
                    <i class="fas fa-biohazard"></i>
                    <span>fa-biohazard</span>
                </li>
                <li class="icon spc_id_1457">
                    <i class="fas fa-blog"></i>
                    <span>fa-blog</span>
                </li>
                <li class="icon spc_id_1458">
                    <i class="fas fa-calendar-day"></i>
                    <span>fa-calendar-day</span>
                </li>
                <li class="icon spc_id_1459">
                    <i class="fas fa-calendar-week"></i>
                    <span>fa-calendar-week</span>
                </li>
                <li class="icon spc_id_1460">
                    <i class="fas fa-candy-cane"></i>
                    <span>fa-candy-cane</span>
                </li>
                <li class="icon spc_id_1461">
                    <i class="fas fa-carrot"></i>
                    <span>fa-carrot</span>
                </li>
                <li class="icon spc_id_1462">
                    <i class="fas fa-cash-register"></i>
                    <span>fa-cash-register</span>
                </li>
                <li class="icon spc_id_1463">
                    <i class="fas fa-compress-arrows-alt"></i>
                    <span>fa-compress-arrows-alt</span>
                </li>
                <li class="icon spc_id_1464">
                    <i class="fas fa-dumpster"></i>
                    <span>fa-dumpster</span>
                </li>
                <li class="icon spc_id_1465">
                    <i class="fas fa-dumpster-fire"></i>
                    <span>fa-dumpster-fire</span>
                </li>
                <li class="icon spc_id_1466">
                    <i class="fas fa-ethernet"></i>
                    <span>fa-ethernet</span>
                </li>
                <li class="icon spc_id_1467">
                    <i class="fas fa-gifts"></i>
                    <span>fa-gifts</span>
                </li>
                <li class="icon spc_id_1468">
                    <i class="fas fa-glass-cheers"></i>
                    <span>fa-glass-cheers</span>
                </li>
                <li class="icon spc_id_1469">
                    <i class="fas fa-glass-whiskey"></i>
                    <span>fa-glass-whiskey</span>
                </li>
                <li class="icon spc_id_1470">
                    <i class="fas fa-globe-europe"></i>
                    <span>fa-globe-europe</span>
                </li>
                <li class="icon spc_id_1471">
                    <i class="fas fa-grip-lines"></i>
                    <span>fa-grip-lines</span>
                </li>
                <li class="icon spc_id_1472">
                    <i class="fas fa-grip-lines-vertical"></i>
                    <span>fa-grip-lines-vertical</span>
                </li>
                <li class="icon spc_id_1473">
                    <i class="fas fa-guitar"></i>
                    <span>fa-guitar</span>
                </li>
                <li class="icon spc_id_1474">
                    <i class="fas fa-heart-broken"></i>
                    <span>fa-heart-broken</span>
                </li>
                <li class="icon spc_id_1475">
                    <i class="fas fa-holly-berry"></i>
                    <span>fa-holly-berry</span>
                </li>
                <li class="icon spc_id_1476">
                    <i class="fas fa-horse-head"></i>
                    <span>fa-horse-head</span>
                </li>
                <li class="icon spc_id_1477">
                    <i class="fas fa-icicles"></i>
                    <span>fa-icicles</span>
                </li>
                <li class="icon spc_id_1478">
                    <i class="fas fa-igloo"></i>
                    <span>fa-igloo</span>
                </li>
                <li class="icon spc_id_1479">
                    <i class="fas fa-mitten"></i>
                    <span>fa-mitten</span>
                </li>
                <li class="icon spc_id_1480">
                    <i class="fas fa-mug-hot"></i>
                    <span>fa-mug-hot</span>
                </li>
                <li class="icon spc_id_1481">
                    <i class="fas fa-radiation"></i>
                    <span>fa-radiation</span>
                </li>
                <li class="icon spc_id_1482">
                    <i class="fas fa-radiation-alt"></i>
                    <span>fa-radiation-alt</span>
                </li>
                <li class="icon spc_id_1483">
                    <i class="fas fa-restroom"></i>
                    <span>fa-restroom</span>
                </li>
                <li class="icon spc_id_1484">
                    <i class="fas fa-satellite"></i>
                    <span>fa-satellite</span>
                </li>
                <li class="icon spc_id_1485">
                    <i class="fas fa-satellite-dish"></i>
                    <span>fa-satellite-dish</span>
                </li>
                <li class="icon spc_id_1486">
                    <i class="fas fa-sd-card"></i>
                    <span>fa-sd-card</span>
                </li>
                <li class="icon spc_id_1487">
                    <i class="fas fa-sim-card"></i>
                    <span>fa-sim-card</span>
                </li>
                <li class="icon spc_id_1488">
                    <i class="fas fa-skating"></i>
                    <span>fa-skating</span>
                </li>
                <li class="icon spc_id_1489">
                    <i class="fas fa-skiing"></i>
                    <span>fa-skiing</span>
                </li>
                <li class="icon spc_id_1490">
                    <i class="fas fa-skiing-nordic"></i>
                    <span>fa-skiing-nordic</span>
                </li>
                <li class="icon spc_id_1491">
                    <i class="fas fa-sleigh"></i>
                    <span>fa-sleigh</span>
                </li>
                <li class="icon spc_id_1492">
                    <i class="fas fa-sms"></i>
                    <span>fa-sms</span>
                </li>
                <li class="icon spc_id_1493">
                    <i class="fas fa-snowboarding"></i>
                    <span>fa-snowboarding</span>
                </li>
                <li class="icon spc_id_1494">
                    <i class="fas fa-snowman"></i>
                    <span>fa-snowman</span>
                </li>
                <li class="icon spc_id_1495">
                    <i class="fas fa-snowplow"></i>
                    <span>fa-snowplow</span>
                </li>
                <li class="icon spc_id_1496">
                    <i class="fas fa-tenge"></i>
                    <span>fa-tenge</span>
                </li>
                <li class="icon spc_id_1497">
                    <i class="fas fa-toilet"></i>
                    <span>fa-toilet</span>
                </li>
                <li class="icon spc_id_1498">
                    <i class="fas fa-tools"></i>
                    <span>fa-tools</span>
                </li>
                <li class="icon spc_id_1499">
                    <i class="fas fa-tram"></i>
                    <span>fa-tram</span>
                </li>
                <li class="icon spc_id_1500">
                    <i class="fas fa-fire-alt"></i>
                    <span>fa-fire-alt</span>
                </li>
                <li class="icon spc_id_1501">
                    <i class="fas fa-bacon"></i>
                    <span>fa-bacon</span>
                </li>
                <li class="icon spc_id_1502">
                    <i class="fas fa-book-medical"></i>
                    <span>fa-book-medical</span>
                </li>
                <li class="icon spc_id_1503">
                    <i class="fas fa-bread-slice"></i>
                    <span>fa-bread-slice</span>
                </li>
                <li class="icon spc_id_1504">
                    <i class="fas fa-cheese"></i>
                    <span>fa-cheese</span>
                </li>
                <li class="icon spc_id_1505">
                    <i class="fas fa-clinic-medical"></i>
                    <span>fa-clinic-medical</span>
                </li>
                <li class="icon spc_id_1506">
                    <i class="fas fa-comment-medical"></i>
                    <span>fa-comment-medical</span>
                </li>
                <li class="icon spc_id_1507">
                    <i class="fas fa-crutch"></i>
                    <span>fa-crutch</span>
                </li>
                <li class="icon spc_id_1508">
                    <i class="fas fa-egg"></i>
                    <span>fa-egg</span>
                </li>
                <li class="icon spc_id_1509">
                    <i class="fas fa-hamburger"></i>
                    <span>fa-hamburger</span>
                </li>
                <li class="icon spc_id_1510">
                    <i class="fas fa-hand-middle-finger"></i>
                    <span>fa-hand-middle-finger</span>
                </li>
                <li class="icon spc_id_1511">
                    <i class="fas fa-hard-hat"></i>
                    <span>fa-hard-hat</span>
                </li>
                <li class="icon spc_id_1512">
                    <i class="fas fa-hotdog"></i>
                    <span>fa-hotdog</span>
                </li>
                <li class="icon spc_id_1513">
                    <i class="fas fa-ice-cream"></i>
                    <span>fa-ice-cream</span>
                </li>
                <li class="icon spc_id_1514">
                    <i class="fas fa-laptop-medical"></i>
                    <span>fa-laptop-medical</span>
                </li>
                <li class="icon spc_id_1515">
                    <i class="fas fa-pager"></i>
                    <span>fa-pager</span>
                </li>
                <li class="icon spc_id_1516">
                    <i class="fas fa-pepper-hot"></i>
                    <span>fa-pepper-hot</span>
                </li>
                <li class="icon spc_id_1517">
                    <i class="fas fa-pizza-slice"></i>
                    <span>fa-pizza-slice</span>
                </li>
                <li class="icon spc_id_1518">
                    <i class="fas fa-trash-restore"></i>
                    <span>fa-trash-restore</span>
                </li>
                <li class="icon spc_id_1519">
                    <i class="fas fa-trash-restore-alt"></i>
                    <span>fa-trash-restore-alt</span>
                </li>
                <li class="icon spc_id_1520">
                    <i class="fas fa-user-nurse"></i>
                    <span>fa-user-nurse</span>
                </li>
                <li class="icon spc_id_1521">
                    <i class="fas fa-wave-square"></i>
                    <span>fa-wave-square</span>
                </li>
                <li class="icon spc_id_1522">
                    <i class="fas fa-biking"></i>
                    <span>fa-biking</span>
                </li>
                <li class="icon spc_id_1523">
                    <i class="fas fa-border-all"></i>
                    <span>fa-border-all</span>
                </li>
                <li class="icon spc_id_1524">
                    <i class="fas fa-border-none"></i>
                    <span>fa-border-none</span>
                </li>
                <li class="icon spc_id_1525">
                    <i class="fas fa-border-style"></i>
                    <span>fa-border-style</span>
                </li>
                <li class="icon spc_id_1526">
                    <i class="fas fa-fan"></i>
                    <span>fa-fan</span>
                </li>
                <li class="icon spc_id_1527">
                    <i class="fas fa-icons"></i>
                    <span>fa-icons</span>
                </li>
                <li class="icon spc_id_1528">
                    <i class="fas fa-phone-alt"></i>
                    <span>fa-phone-alt</span>
                </li>
                <li class="icon spc_id_1529">
                    <i class="fas fa-phone-square-alt"></i>
                    <span>fa-phone-square-alt</span>
                </li>
                <li class="icon spc_id_1530">
                    <i class="fas fa-photo-video"></i>
                    <span>fa-photo-video</span>
                </li>
                <li class="icon spc_id_1531">
                    <i class="fas fa-remove-format"></i>
                    <span>fa-remove-format</span>
                </li>
                <li class="icon spc_id_1532">
                    <i class="fas fa-sort-alpha-down-alt"></i>
                    <span>fa-sort-alpha-down-alt</span>
                </li>
                <li class="icon spc_id_1533">
                    <i class="fas fa-sort-alpha-up-alt"></i>
                    <span>fa-sort-alpha-up-alt</span>
                </li>
                <li class="icon spc_id_1534">
                    <i class="fas fa-sort-amount-down-alt"></i>
                    <span>fa-sort-amount-down-alt</span>
                </li>
                <li class="icon spc_id_1535">
                    <i class="fas fa-sort-amount-up-alt"></i>
                    <span>fa-sort-amount-up-alt</span>
                </li>
                <li class="icon spc_id_1536">
                    <i class="fas fa-sort-numeric-down-alt"></i>
                    <span>fa-sort-numeric-down-alt</span>
                </li>
                <li class="icon spc_id_1537">
                    <i class="fas fa-sort-numeric-up-alt"></i>
                    <span>fa-sort-numeric-up-alt</span>
                </li>
                <li class="icon spc_id_1538">
                    <i class="fas fa-spell-check"></i>
                    <span>fa-spell-check</span>
                </li>
                <li class="icon spc_id_1539">
                    <i class="fas fa-voicemail"></i>
                    <span>fa-voicemail</span>
                </li>
                <li class="icon spc_id_1540">
                    <i class="fas fa-hat-cowboy"></i>
                    <span>fa-hat-cowboy</span>
                </li>
                <li class="icon spc_id_1541">
                    <i class="fas fa-hat-cowboy-side"></i>
                    <span>fa-hat-cowboy-side</span>
                </li>
                <li class="icon spc_id_1542">
                    <i class="fas fa-mouse"></i>
                    <span>fa-mouse</span>
                </li>
                <li class="icon spc_id_1543">
                    <i class="fas fa-record-vinyl"></i>
                    <span>fa-record-vinyl</span>
                </li>
            </ul>

        </div>
    </div>
    <input type="text" id="clp">



<button class="back_to_top"><i class="fas fa-angle-up"></i></button>

@push('js')
<script>
    var all_icons = ["twitter-square","facebook-square","linkedin","github-square","twitter","facebook","github","pinterest","pinterest-square","google-plus-square","google-plus-g","linkedin-in","github-alt","maxcdn","html5","css3","btc","youtube","xing","xing-square","dropbox","stack-overflow","instagram","flickr","adn","bitbucket","tumblr","tumblr-square","apple","windows","android","linux","dribbble","skype","foursquare","trello","gratipay","vk","weibo","renren","pagelines","stack-exchange","vimeo-square","slack","wordpress","openid","yahoo","google","reddit","reddit-square","stumbleupon-circle","stumbleupon","delicious","digg","pied-piper-pp","pied-piper-alt","drupal","joomla","behance","behance-square","steam","steam-square","spotify","deviantart","soundcloud","vine","codepen","jsfiddle","rebel","empire","git-square","git","hacker-news","tencent-weibo","qq","weixin","slideshare","twitch","yelp","paypal","google-wallet","cc-visa","cc-mastercard","cc-discover","cc-amex","cc-paypal","cc-stripe","lastfm","lastfm-square","ioxhost","angellist","buysellads","connectdevelop","dashcube","forumbee","leanpub","sellsy","shirtsinbulk","simplybuilt","skyatlas","pinterest-p","whatsapp","viacoin","medium","y-combinator","optin-monster","opencart","expeditedssl","cc-jcb","cc-diners-club","creative-commons","gg","gg-circle","tripadvisor","odnoklassniki","odnoklassniki-square","get-pocket","wikipedia-w","safari","chrome","firefox","opera","internet-explorer","contao","500px","amazon","houzz","vimeo-v","black-tie","fonticons","reddit-alien","edge","codiepie","modx","fort-awesome","usb","product-hunt","mixcloud","scribd","bluetooth","bluetooth-b","gitlab","wpbeginner","wpforms","envira","glide","glide-g","viadeo","viadeo-square","snapchat","snapchat-ghost","snapchat-square","pied-piper","first-order","yoast","themeisle","google-plus","font-awesome","linode","quora","free-code-camp","telegram","bandcamp","grav","etsy","imdb","ravelry","sellcast","superpowers","wpexplorer","meetup","font-awesome-alt","accessible-icon","accusoft","adversal","affiliatetheme","algolia","amilia","angrycreative","app-store","app-store-ios","apper","asymmetrik","audible","avianex","aws","bimobject","bitcoin","bity","blackberry","blogger","blogger-b","buromobelexperte","centercode","cloudscale","cloudsmith","cloudversify","cpanel","css3-alt","cuttlefish","d-and-d","deploydog","deskpro","digital-ocean","discord","discourse","dochub","docker","draft2digital","dribbble-square","dyalog","earlybirds","erlang","facebook-f","facebook-messenger","firstdraft","fonticons-fi","fort-awesome-alt","freebsd","gitkraken","gofore","goodreads","goodreads-g","google-drive","google-play","gripfire","grunt","gulp","hacker-news-square","hire-a-helper","hotjar","hubspot","itunes","itunes-note","jenkins","joget","js","js-square","keycdn","kickstarter","kickstarter-k","laravel","line","lyft","magento","medapps","medium-m","medrt","microsoft","mix","mizuni","monero","napster","node-js","npm","ns8","nutritionix","page4","palfed","patreon","periscope","phabricator","phoenix-framework","playstation","pushed","python","red-river","wpressr","replyd","resolving","rocketchat","rockrms","schlix","searchengin","servicestack","sistrix","slack-hash","speakap","staylinked","steam-symbol","sticker-mule","studiovinari","supple","telegram-plane","uber","uikit","uniregistry","untappd","ussunnah","vaadin","viber","vimeo","vnv","whatsapp-square","whmcs","wordpress-simple","xbox","yandex","yandex-international","apple-pay","cc-apple-pay","fly","node","osi","react","autoprefixer","less","sass","vuejs","angular","aviato","ember","font-awesome-flag","gitter","hooli","strava","stripe","stripe-s","typo3","amazon-pay","cc-amazon-pay","ethereum","korvue","elementor","youtube-square","flipboard","hips","php","quinscape","readme","java","pied-piper-hat","creative-commons-by","creative-commons-nc","creative-commons-nc-eu","creative-commons-nc-jp","creative-commons-nd","creative-commons-pd","creative-commons-pd-alt","creative-commons-remix","creative-commons-sa","creative-commons-sampling","creative-commons-sampling-plus","creative-commons-share","creative-commons-zero","ebay","keybase","mastodon","r-project","researchgate","teamspeak","first-order-alt","fulcrum","galactic-republic","galactic-senate","jedi-order","mandalorian","old-republic","phoenix-squadron","sith","trade-federation","wolf-pack-battalion","hornbill","mailchimp","megaport","nimblr","rev","shopware","squarespace","themeco","weebly","wix","ello","hackerrank","kaggle","markdown","neos","zhihu","alipay","the-red-yeti","acquisitions-incorporated","critical-role","d-and-d-beyond","dev","fantasy-flight-games","penny-arcade","wizards-of-the-coast","think-peaks","reacteurope","adobe","artstation","atlassian","canadian-maple-leaf","centos","confluence","dhl","diaspora","fedex","fedora","figma","intercom","invision","jira","mendeley","raspberry-pi","redhat","sketch","sourcetree","suse","ubuntu","ups","usps","yarn","airbnb","battle-net","bootstrap","buffer","chromecast","evernote","itch-io","salesforce","speaker-deck","symfony","waze","yammer","git-alt","stackpath","cotton-bureau","buy-n-large","mdb","orcid","swift","umbraco","heart","star","user","clock","list-alt","flag","bookmark","image","edit","times-circle","check-circle","question-circle","eye","eye-slash","calendar-alt","comment","folder","folder-open","chart-bar","comments","star-half","lemon","credit-card","hdd","hand-point-right","hand-point-left","hand-point-up","hand-point-down","copy","save","square","envelope","lightbulb","bell","hospital","plus-square","circle","smile","frown","meh","keyboard","calendar","play-circle","minus-square","check-square","share-square","compass","caret-square-down","caret-square-up","caret-square-right","file","file-alt","thumbs-up","thumbs-down","sun","moon","caret-square-left","dot-circle","building","file-pdf","file-word","file-excel","file-powerpoint","file-image","file-archive","file-audio","file-video","file-code","life-ring","paper-plane","futbol","newspaper","bell-slash","copyright","closed-captioning","object-group","object-ungroup","sticky-note","clone","hourglass","hand-rock","hand-paper","hand-scissors","hand-lizard","hand-spock","hand-pointer","hand-peace","registered","calendar-plus","calendar-minus","calendar-times","calendar-check","map","comment-alt","pause-circle","stop-circle","handshake","envelope-open","address-book","address-card","user-circle","id-badge","id-card","window-maximize","window-minimize","window-restore","snowflake","trash-alt","images","clipboard","arrow-alt-circle-down","arrow-alt-circle-left","arrow-alt-circle-right","arrow-alt-circle-up","gem","money-bill-alt","window-close","comment-dots","smile-wink","angry","dizzy","flushed","frown-open","grimace","grin","grin-alt","grin-beam","grin-beam-sweat","grin-hearts","grin-squint","grin-squint-tears","grin-stars","grin-tears","grin-tongue","grin-tongue-squint","grin-tongue-wink","grin-wink","kiss","kiss-beam","kiss-wink-heart","laugh","laugh-beam","laugh-squint","laugh-wink","meh-blank","meh-rolling-eyes","sad-cry","sad-tear","smile-beam","surprise","tired","glass-martini","music","search","heart","star","user","film","th-large","th","th-list","check","times","search-plus","search-minus","power-off","signal","cog","home","clock","road","download","inbox","redo","sync","list-alt","lock","flag","headphones","volume-off","volume-down","volume-up","qrcode","barcode","tag","tags","book","bookmark","print","camera","font","bold","italic","text-height","text-width","align-left","align-center","align-right","align-justify","list","outdent","indent","video","image","map-marker","adjust","tint","edit","step-backward","fast-backward","backward","play","pause","stop","forward","fast-forward","step-forward","eject","chevron-left","chevron-right","plus-circle","minus-circle","times-circle","check-circle","question-circle","info-circle","crosshairs","ban","arrow-left","arrow-right","arrow-up","arrow-down","share","expand","compress","plus","minus","asterisk","exclamation-circle","gift","leaf","fire","eye","eye-slash","exclamation-triangle","plane","calendar-alt","random","comment","magnet","chevron-up","chevron-down","retweet","shopping-cart","folder","folder-open","chart-bar","camera-retro","key","cogs","comments","star-half","thumbtack","trophy","upload","lemon","phone","phone-square","unlock","credit-card","rss","hdd","bullhorn","certificate","hand-point-right","hand-point-left","hand-point-up","hand-point-down","arrow-circle-left","arrow-circle-right","arrow-circle-up","arrow-circle-down","globe","wrench","tasks","filter","briefcase","arrows-alt","users","link","cloud","flask","cut","copy","paperclip","save","square","bars","list-ul","list-ol","strikethrough","underline","table","magic","truck","money-bill","caret-down","caret-up","caret-left","caret-right","columns","sort","sort-down","sort-up","envelope","undo","gavel","bolt","sitemap","umbrella","paste","lightbulb","user-md","stethoscope","suitcase","bell","coffee","hospital","ambulance","medkit","fighter-jet","beer","h-square","plus-square","angle-double-left","angle-double-right","angle-double-up","angle-double-down","angle-left","angle-right","angle-up","angle-down","desktop","laptop","tablet","mobile","quote-left","quote-right","spinner","circle","smile","frown","meh","gamepad","keyboard","flag-checkered","terminal","code","reply-all","location-arrow","crop","code-branch","unlink","question","info","exclamation","superscript","subscript","eraser","puzzle-piece","microphone","microphone-slash","calendar","fire-extinguisher","rocket","chevron-circle-left","chevron-circle-right","chevron-circle-up","chevron-circle-down","anchor","unlock-alt","bullseye","ellipsis-h","ellipsis-v","rss-square","play-circle","minus-square","check-square","pen-square","share-square","compass","caret-square-down","caret-square-up","caret-square-right","euro-sign","pound-sign","dollar-sign","rupee-sign","yen-sign","ruble-sign","won-sign","file","file-alt","sort-alpha-down","sort-alpha-up","sort-amount-down","sort-amount-up","sort-numeric-down","sort-numeric-up","thumbs-up","thumbs-down","female","male","sun","moon","archive","bug","caret-square-left","dot-circle","wheelchair","lira-sign","space-shuttle","envelope-square","university","graduation-cap","language","fax","building","child","paw","cube","cubes","recycle","car","taxi","tree","database","file-pdf","file-word","file-excel","file-powerpoint","file-image","file-archive","file-audio","file-video","file-code","life-ring","circle-notch","paper-plane","history","heading","paragraph","sliders-h","share-alt","share-alt-square","bomb","futbol","tty","binoculars","plug","newspaper","wifi","calculator","bell-slash","trash","copyright","at","eye-dropper","paint-brush","birthday-cake","chart-area","chart-pie","chart-line","toggle-off","toggle-on","bicycle","bus","closed-captioning","shekel-sign","cart-plus","cart-arrow-down","ship","user-secret","motorcycle","street-view","heartbeat","venus","mars","mercury","transgender","transgender-alt","venus-double","mars-double","venus-mars","mars-stroke","mars-stroke-v","mars-stroke-h","neuter","genderless","server","user-plus","user-times","bed","train","subway","battery-full","battery-three-quarters","battery-half","battery-quarter","battery-empty","mouse-pointer","i-cursor","object-group","object-ungroup","sticky-note","clone","balance-scale","hourglass-start","hourglass-half","hourglass-end","hourglass","hand-rock","hand-paper","hand-scissors","hand-lizard","hand-spock","hand-pointer","hand-peace","trademark","registered","tv","calendar-plus","calendar-minus","calendar-times","calendar-check","industry","map-pin","map-signs","map","comment-alt","pause-circle","stop-circle","shopping-bag","shopping-basket","hashtag","percent","universal-access","blind","audio-description","phone-volume","braille","assistive-listening-systems","american-sign-language-interpreting","deaf","sign-language","low-vision","handshake","envelope-open","address-book","address-card","user-circle","id-badge","id-card","thermometer-full","thermometer-three-quarters","thermometer-half","thermometer-quarter","thermometer-empty","shower","bath","podcast","window-maximize","window-minimize","window-restore","microchip","snowflake","utensil-spoon","utensils","undo-alt","trash-alt","sync-alt","stopwatch","sign-out-alt","sign-in-alt","redo-alt","poo","images","pencil-alt","pen","pen-alt","long-arrow-alt-down","long-arrow-alt-left","long-arrow-alt-right","long-arrow-alt-up","expand-arrows-alt","clipboard","arrows-alt-h","arrows-alt-v","arrow-alt-circle-down","arrow-alt-circle-left","arrow-alt-circle-right","arrow-alt-circle-up","external-link-alt","external-link-square-alt","exchange-alt","cloud-download-alt","cloud-upload-alt","gem","level-down-alt","level-up-alt","lock-open","map-marker-alt","microphone-alt","mobile-alt","money-bill-alt","phone-slash","portrait","reply","shield-alt","tablet-alt","tachometer-alt","ticket-alt","user-alt","window-close","baseball-ball","basketball-ball","bowling-ball","chess","chess-bishop","chess-board","chess-king","chess-knight","chess-pawn","chess-queen","chess-rook","dumbbell","football-ball","golf-ball","hockey-puck","quidditch","square-full","table-tennis","volleyball-ball","allergies","band-aid","box","boxes","briefcase-medical","burn","capsules","clipboard-check","clipboard-list","diagnoses","dna","dolly","dolly-flatbed","file-medical","file-medical-alt","first-aid","hospital-alt","hospital-symbol","id-card-alt","notes-medical","pallet","pills","prescription-bottle","prescription-bottle-alt","procedures","shipping-fast","smoking","syringe","tablets","thermometer","vial","vials","warehouse","weight","x-ray","box-open","comment-dots","comment-slash","couch","donate","dove","hand-holding","hand-holding-heart","hand-holding-usd","hands","hands-helping","parachute-box","people-carry","piggy-bank","ribbon","route","seedling","sign","smile-wink","tape","truck-loading","truck-moving","video-slash","wine-glass","user-alt-slash","user-astronaut","user-check","user-clock","user-cog","user-edit","user-friends","user-graduate","user-lock","user-minus","user-ninja","user-shield","user-slash","user-tag","user-tie","users-cog","balance-scale-left","balance-scale-right","blender","book-open","broadcast-tower","broom","chalkboard","chalkboard-teacher","church","coins","compact-disc","crow","crown","dice","dice-five","dice-four","dice-one","dice-six","dice-three","dice-two","divide","door-closed","door-open","equals","feather","frog","gas-pump","glasses","greater-than","greater-than-equal","helicopter","infinity","kiwi-bird","less-than","less-than-equal","memory","microphone-alt-slash","money-bill-wave","money-bill-wave-alt","money-check","money-check-alt","not-equal","palette","parking","percentage","project-diagram","receipt","robot","ruler","ruler-combined","ruler-horizontal","ruler-vertical","school","screwdriver","shoe-prints","skull","smoking-ban","store","store-alt","stream","stroopwafel","toolbox","tshirt","walking","wallet","angry","archway","atlas","award","backspace","bezier-curve","bong","brush","bus-alt","cannabis","check-double","cocktail","concierge-bell","cookie","cookie-bite","crop-alt","digital-tachograph","dizzy","drafting-compass","drum","drum-steelpan","feather-alt","file-contract","file-download","file-export","file-import","file-invoice","file-invoice-dollar","file-prescription","file-signature","file-upload","fill","fill-drip","fingerprint","fish","flushed","frown-open","glass-martini-alt","globe-africa","globe-americas","globe-asia","grimace","grin","grin-alt","grin-beam","grin-beam-sweat","grin-hearts","grin-squint","grin-squint-tears","grin-stars","grin-tears","grin-tongue","grin-tongue-squint","grin-tongue-wink","grin-wink","grip-horizontal","grip-vertical","headphones-alt","headset","highlighter","hot-tub","hotel","joint","kiss","kiss-beam","kiss-wink-heart","laugh","laugh-beam","laugh-squint","laugh-wink","luggage-cart","map-marked","map-marked-alt","marker","medal","meh-blank","meh-rolling-eyes","monument","mortar-pestle","paint-roller","passport","pen-fancy","pen-nib","pencil-ruler","plane-arrival","plane-departure","prescription","sad-cry","sad-tear","shuttle-van","signature","smile-beam","solar-panel","spa","splotch","spray-can","stamp","star-half-alt","suitcase-rolling","surprise","swatchbook","swimmer","swimming-pool","tint-slash","tired","tooth","umbrella-beach","vector-square","weight-hanging","wine-glass-alt","air-freshener","apple-alt","atom","bone","book-reader","brain","car-alt","car-battery","car-crash","car-side","charging-station","directions","draw-polygon","laptop-code","layer-group","microscope","oil-can","poop","shapes","star-of-life","teeth","teeth-open","theater-masks","traffic-light","truck-monster","truck-pickup","ad","ankh","bible","business-time","city","comment-dollar","comments-dollar","cross","dharmachakra","envelope-open-text","folder-minus","folder-plus","funnel-dollar","gopuram","hamsa","haykal","jedi","journal-whills","kaaba","khanda","landmark","mail-bulk","menorah","mosque","om","pastafarianism","peace","place-of-worship","poll","poll-h","pray","praying-hands","quran","search-dollar","search-location","socks","square-root-alt","star-and-crescent","star-of-david","synagogue","torah","torii-gate","vihara","volume-mute","yin-yang","blender-phone","book-dead","campground","cat","chair","cloud-moon","cloud-sun","dice-d20","dice-d6","dog","dragon","drumstick-bite","dungeon","file-csv","fist-raised","ghost","hammer","hanukiah","hat-wizard","hiking","hippo","horse","house-damage","hryvnia","mask","mountain","network-wired","otter","ring","running","scroll","skull-crossbones","slash","spider","toilet-paper","tractor","user-injured","vr-cardboard","wind","wine-bottle","cloud-meatball","cloud-moon-rain","cloud-rain","cloud-showers-heavy","cloud-sun-rain","democrat","flag-usa","meteor","person-booth","poo-storm","rainbow","republican","smog","temperature-high","temperature-low","vote-yea","water","baby","baby-carriage","biohazard","blog","calendar-day","calendar-week","candy-cane","carrot","cash-register","compress-arrows-alt","dumpster","dumpster-fire","ethernet","gifts","glass-cheers","glass-whiskey","globe-europe","grip-lines","grip-lines-vertical","guitar","heart-broken","holly-berry","horse-head","icicles","igloo","mitten","mug-hot","radiation","radiation-alt","restroom","satellite","satellite-dish","sd-card","sim-card","skating","skiing","skiing-nordic","sleigh","sms","snowboarding","snowman","snowplow","tenge","toilet","tools","tram","fire-alt","bacon","book-medical","bread-slice","cheese","clinic-medical","comment-medical","crutch","egg","hamburger","hand-middle-finger","hard-hat","hotdog","ice-cream","laptop-medical","pager","pepper-hot","pizza-slice","trash-restore","trash-restore-alt","user-nurse","wave-square","biking","border-all","border-none","border-style","fan","icons","phone-alt","phone-square-alt","photo-video","remove-format","sort-alpha-down-alt","sort-alpha-up-alt","sort-amount-down-alt","sort-amount-up-alt","sort-numeric-down-alt","sort-numeric-up-alt","spell-check","voicemail","hat-cowboy","hat-cowboy-side","mouse","record-vinyl"];
    var search = document.getElementById('search');
    search.addEventListener('input', function () {
        var keyword = this.value.toLowerCase();

        all_icons.forEach((element, index) => {
            if (element.substring(0, keyword.length) === keyword) {
                var t_elem = document.querySelector('.spc_id_' + index);
                t_elem.style.display = 'flex';
            } else {
                var t_elem = document.querySelector('.spc_id_' + index);
                t_elem.style.display = 'none';
            }
        });
    });

    var icon = document.querySelectorAll('.icon');
    var clp = document.getElementById('clp');
    icon.forEach(element => {
        element.addEventListener('click', function () {
            var get_i = this.getElementsByTagName('i');
            var cls_names = get_i[0].classList.value;
            var o_txt = `<i class="${cls_names}"></i>`;
            clp.value = o_txt;
            clp.select();
            document.execCommand('cut');
        });
    });
    // Back to top button
    let back_to_top = document.querySelector('.back_to_top');
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 100) {
            back_to_top.classList.add('active');
        } else {
            back_to_top.classList.remove('active');
        }
    });
    back_to_top.addEventListener('click', function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>
@endpush

@endsection