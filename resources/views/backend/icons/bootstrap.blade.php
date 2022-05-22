@extends('backend.layouts.app')

@section('content')
    <h3 class="content_header">Bootstrap Icon</h3>
    <style>
        #clp {
            width: 100px;
            height: 30px;
            opacity: 0;
            position: fixed;
            top: -1000px;
            left: -1000px;
        }

        .icon {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 20px 5px;
            border: 1px solid #ddd;
            margin-left: -1px;
            margin-top: -1px;
            text-align: center;
            user-select: none;
            transition: all 0.2s ease-in-out;
        }

        .icon:active {
            transform: scale(0.9);
        }

        .icon:hover {
            cursor: pointer;
            background: rgba(0, 0, 0, 0.05);
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

    <div class="card">
        <div class="container-fluid card-body">

            <ul class="row icons">
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63103">
                    <i class="bi bi-123"></i>
                    <span>123</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61697">
                    <i class="bi bi-alarm-fill"></i>
                    <span>alarm-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61698">
                    <i class="bi bi-alarm"></i>
                    <span>alarm</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61699">
                    <i class="bi bi-align-bottom"></i>
                    <span>align-bottom</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61700">
                    <i class="bi bi-align-center"></i>
                    <span>align-center</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61701">
                    <i class="bi bi-align-end"></i>
                    <span>align-end</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61702">
                    <i class="bi bi-align-middle"></i>
                    <span>align-middle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61703">
                    <i class="bi bi-align-start"></i>
                    <span>align-start</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61704">
                    <i class="bi bi-align-top"></i>
                    <span>align-top</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61705">
                    <i class="bi bi-alt"></i>
                    <span>alt</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61706">
                    <i class="bi bi-app-indicator"></i>
                    <span>app-indicator</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61707">
                    <i class="bi bi-app"></i>
                    <span>app</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61708">
                    <i class="bi bi-archive-fill"></i>
                    <span>archive-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61709">
                    <i class="bi bi-archive"></i>
                    <span>archive</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61710">
                    <i class="bi bi-arrow-90deg-down"></i>
                    <span>arrow-90deg-down</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61711">
                    <i class="bi bi-arrow-90deg-left"></i>
                    <span>arrow-90deg-left</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61712">
                    <i class="bi bi-arrow-90deg-right"></i>
                    <span>arrow-90deg-right</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61713">
                    <i class="bi bi-arrow-90deg-up"></i>
                    <span>arrow-90deg-up</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61714">
                    <i class="bi bi-arrow-bar-down"></i>
                    <span>arrow-bar-down</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61715">
                    <i class="bi bi-arrow-bar-left"></i>
                    <span>arrow-bar-left</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61716">
                    <i class="bi bi-arrow-bar-right"></i>
                    <span>arrow-bar-right</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61717">
                    <i class="bi bi-arrow-bar-up"></i>
                    <span>arrow-bar-up</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61718">
                    <i class="bi bi-arrow-clockwise"></i>
                    <span>arrow-clockwise</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61719">
                    <i class="bi bi-arrow-counterclockwise"></i>
                    <span>arrow-counterclockwise</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61720">
                    <i class="bi bi-arrow-down-circle-fill"></i>
                    <span>arrow-down-circle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61721">
                    <i class="bi bi-arrow-down-circle"></i>
                    <span>arrow-down-circle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61722">
                    <i class="bi bi-arrow-down-left-circle-fill"></i>
                    <span>arrow-down-left-circle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61723">
                    <i class="bi bi-arrow-down-left-circle"></i>
                    <span>arrow-down-left-circle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61724">
                    <i class="bi bi-arrow-down-left-square-fill"></i>
                    <span>arrow-down-left-square-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61725">
                    <i class="bi bi-arrow-down-left-square"></i>
                    <span>arrow-down-left-square</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61726">
                    <i class="bi bi-arrow-down-left"></i>
                    <span>arrow-down-left</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61727">
                    <i class="bi bi-arrow-down-right-circle-fill"></i>
                    <span>arrow-down-right-circle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61728">
                    <i class="bi bi-arrow-down-right-circle"></i>
                    <span>arrow-down-right-circle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61729">
                    <i class="bi bi-arrow-down-right-square-fill"></i>
                    <span>arrow-down-right-square-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61730">
                    <i class="bi bi-arrow-down-right-square"></i>
                    <span>arrow-down-right-square</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61731">
                    <i class="bi bi-arrow-down-right"></i>
                    <span>arrow-down-right</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61732">
                    <i class="bi bi-arrow-down-short"></i>
                    <span>arrow-down-short</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61733">
                    <i class="bi bi-arrow-down-square-fill"></i>
                    <span>arrow-down-square-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61734">
                    <i class="bi bi-arrow-down-square"></i>
                    <span>arrow-down-square</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61735">
                    <i class="bi bi-arrow-down-up"></i>
                    <span>arrow-down-up</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61736">
                    <i class="bi bi-arrow-down"></i>
                    <span>arrow-down</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61737">
                    <i class="bi bi-arrow-left-circle-fill"></i>
                    <span>arrow-left-circle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61738">
                    <i class="bi bi-arrow-left-circle"></i>
                    <span>arrow-left-circle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61739">
                    <i class="bi bi-arrow-left-right"></i>
                    <span>arrow-left-right</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61740">
                    <i class="bi bi-arrow-left-short"></i>
                    <span>arrow-left-short</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61741">
                    <i class="bi bi-arrow-left-square-fill"></i>
                    <span>arrow-left-square-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61742">
                    <i class="bi bi-arrow-left-square"></i>
                    <span>arrow-left-square</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61743">
                    <i class="bi bi-arrow-left"></i>
                    <span>arrow-left</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61744">
                    <i class="bi bi-arrow-repeat"></i>
                    <span>arrow-repeat</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61745">
                    <i class="bi bi-arrow-return-left"></i>
                    <span>arrow-return-left</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61746">
                    <i class="bi bi-arrow-return-right"></i>
                    <span>arrow-return-right</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61747">
                    <i class="bi bi-arrow-right-circle-fill"></i>
                    <span>arrow-right-circle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61748">
                    <i class="bi bi-arrow-right-circle"></i>
                    <span>arrow-right-circle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61749">
                    <i class="bi bi-arrow-right-short"></i>
                    <span>arrow-right-short</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61750">
                    <i class="bi bi-arrow-right-square-fill"></i>
                    <span>arrow-right-square-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61751">
                    <i class="bi bi-arrow-right-square"></i>
                    <span>arrow-right-square</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61752">
                    <i class="bi bi-arrow-right"></i>
                    <span>arrow-right</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61753">
                    <i class="bi bi-arrow-up-circle-fill"></i>
                    <span>arrow-up-circle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61754">
                    <i class="bi bi-arrow-up-circle"></i>
                    <span>arrow-up-circle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61755">
                    <i class="bi bi-arrow-up-left-circle-fill"></i>
                    <span>arrow-up-left-circle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61756">
                    <i class="bi bi-arrow-up-left-circle"></i>
                    <span>arrow-up-left-circle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61757">
                    <i class="bi bi-arrow-up-left-square-fill"></i>
                    <span>arrow-up-left-square-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61758">
                    <i class="bi bi-arrow-up-left-square"></i>
                    <span>arrow-up-left-square</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61759">
                    <i class="bi bi-arrow-up-left"></i>
                    <span>arrow-up-left</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61760">
                    <i class="bi bi-arrow-up-right-circle-fill"></i>
                    <span>arrow-up-right-circle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61761">
                    <i class="bi bi-arrow-up-right-circle"></i>
                    <span>arrow-up-right-circle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61762">
                    <i class="bi bi-arrow-up-right-square-fill"></i>
                    <span>arrow-up-right-square-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61763">
                    <i class="bi bi-arrow-up-right-square"></i>
                    <span>arrow-up-right-square</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61764">
                    <i class="bi bi-arrow-up-right"></i>
                    <span>arrow-up-right</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61765">
                    <i class="bi bi-arrow-up-short"></i>
                    <span>arrow-up-short</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61766">
                    <i class="bi bi-arrow-up-square-fill"></i>
                    <span>arrow-up-square-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61767">
                    <i class="bi bi-arrow-up-square"></i>
                    <span>arrow-up-square</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61768">
                    <i class="bi bi-arrow-up"></i>
                    <span>arrow-up</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61769">
                    <i class="bi bi-arrows-angle-contract"></i>
                    <span>arrows-angle-contract</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61770">
                    <i class="bi bi-arrows-angle-expand"></i>
                    <span>arrows-angle-expand</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61771">
                    <i class="bi bi-arrows-collapse"></i>
                    <span>arrows-collapse</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61772">
                    <i class="bi bi-arrows-expand"></i>
                    <span>arrows-expand</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61773">
                    <i class="bi bi-arrows-fullscreen"></i>
                    <span>arrows-fullscreen</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61774">
                    <i class="bi bi-arrows-move"></i>
                    <span>arrows-move</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61775">
                    <i class="bi bi-aspect-ratio-fill"></i>
                    <span>aspect-ratio-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61776">
                    <i class="bi bi-aspect-ratio"></i>
                    <span>aspect-ratio</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61777">
                    <i class="bi bi-asterisk"></i>
                    <span>asterisk</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61778">
                    <i class="bi bi-at"></i>
                    <span>at</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61779">
                    <i class="bi bi-award-fill"></i>
                    <span>award-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61780">
                    <i class="bi bi-award"></i>
                    <span>award</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61781">
                    <i class="bi bi-back"></i>
                    <span>back</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61782">
                    <i class="bi bi-backspace-fill"></i>
                    <span>backspace-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61783">
                    <i class="bi bi-backspace-reverse-fill"></i>
                    <span>backspace-reverse-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61784">
                    <i class="bi bi-backspace-reverse"></i>
                    <span>backspace-reverse</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61785">
                    <i class="bi bi-backspace"></i>
                    <span>backspace</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61786">
                    <i class="bi bi-badge-3d-fill"></i>
                    <span>badge-3d-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61787">
                    <i class="bi bi-badge-3d"></i>
                    <span>badge-3d</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61788">
                    <i class="bi bi-badge-4k-fill"></i>
                    <span>badge-4k-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61789">
                    <i class="bi bi-badge-4k"></i>
                    <span>badge-4k</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61790">
                    <i class="bi bi-badge-8k-fill"></i>
                    <span>badge-8k-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61791">
                    <i class="bi bi-badge-8k"></i>
                    <span>badge-8k</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61792">
                    <i class="bi bi-badge-ad-fill"></i>
                    <span>badge-ad-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61793">
                    <i class="bi bi-badge-ad"></i>
                    <span>badge-ad</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61794">
                    <i class="bi bi-badge-ar-fill"></i>
                    <span>badge-ar-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61795">
                    <i class="bi bi-badge-ar"></i>
                    <span>badge-ar</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61796">
                    <i class="bi bi-badge-cc-fill"></i>
                    <span>badge-cc-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61797">
                    <i class="bi bi-badge-cc"></i>
                    <span>badge-cc</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61798">
                    <i class="bi bi-badge-hd-fill"></i>
                    <span>badge-hd-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61799">
                    <i class="bi bi-badge-hd"></i>
                    <span>badge-hd</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61800">
                    <i class="bi bi-badge-tm-fill"></i>
                    <span>badge-tm-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61801">
                    <i class="bi bi-badge-tm"></i>
                    <span>badge-tm</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61802">
                    <i class="bi bi-badge-vo-fill"></i>
                    <span>badge-vo-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61803">
                    <i class="bi bi-badge-vo"></i>
                    <span>badge-vo</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61804">
                    <i class="bi bi-badge-vr-fill"></i>
                    <span>badge-vr-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61805">
                    <i class="bi bi-badge-vr"></i>
                    <span>badge-vr</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61806">
                    <i class="bi bi-badge-wc-fill"></i>
                    <span>badge-wc-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61807">
                    <i class="bi bi-badge-wc"></i>
                    <span>badge-wc</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61808">
                    <i class="bi bi-bag-check-fill"></i>
                    <span>bag-check-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61809">
                    <i class="bi bi-bag-check"></i>
                    <span>bag-check</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61810">
                    <i class="bi bi-bag-dash-fill"></i>
                    <span>bag-dash-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61811">
                    <i class="bi bi-bag-dash"></i>
                    <span>bag-dash</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61812">
                    <i class="bi bi-bag-fill"></i>
                    <span>bag-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61813">
                    <i class="bi bi-bag-plus-fill"></i>
                    <span>bag-plus-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61814">
                    <i class="bi bi-bag-plus"></i>
                    <span>bag-plus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61815">
                    <i class="bi bi-bag-x-fill"></i>
                    <span>bag-x-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61816">
                    <i class="bi bi-bag-x"></i>
                    <span>bag-x</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61817">
                    <i class="bi bi-bag"></i>
                    <span>bag</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61818">
                    <i class="bi bi-bar-chart-fill"></i>
                    <span>bar-chart-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61819">
                    <i class="bi bi-bar-chart-line-fill"></i>
                    <span>bar-chart-line-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61820">
                    <i class="bi bi-bar-chart-line"></i>
                    <span>bar-chart-line</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61821">
                    <i class="bi bi-bar-chart-steps"></i>
                    <span>bar-chart-steps</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61822">
                    <i class="bi bi-bar-chart"></i>
                    <span>bar-chart</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61823">
                    <i class="bi bi-basket-fill"></i>
                    <span>basket-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61824">
                    <i class="bi bi-basket"></i>
                    <span>basket</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61825">
                    <i class="bi bi-basket2-fill"></i>
                    <span>basket2-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61826">
                    <i class="bi bi-basket2"></i>
                    <span>basket2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61827">
                    <i class="bi bi-basket3-fill"></i>
                    <span>basket3-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61828">
                    <i class="bi bi-basket3"></i>
                    <span>basket3</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61829">
                    <i class="bi bi-battery-charging"></i>
                    <span>battery-charging</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61830">
                    <i class="bi bi-battery-full"></i>
                    <span>battery-full</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61831">
                    <i class="bi bi-battery-half"></i>
                    <span>battery-half</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61832">
                    <i class="bi bi-battery"></i>
                    <span>battery</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61833">
                    <i class="bi bi-bell-fill"></i>
                    <span>bell-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61834">
                    <i class="bi bi-bell"></i>
                    <span>bell</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61835">
                    <i class="bi bi-bezier"></i>
                    <span>bezier</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61836">
                    <i class="bi bi-bezier2"></i>
                    <span>bezier2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61837">
                    <i class="bi bi-bicycle"></i>
                    <span>bicycle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61838">
                    <i class="bi bi-binoculars-fill"></i>
                    <span>binoculars-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61839">
                    <i class="bi bi-binoculars"></i>
                    <span>binoculars</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61840">
                    <i class="bi bi-blockquote-left"></i>
                    <span>blockquote-left</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61841">
                    <i class="bi bi-blockquote-right"></i>
                    <span>blockquote-right</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61842">
                    <i class="bi bi-book-fill"></i>
                    <span>book-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61843">
                    <i class="bi bi-book-half"></i>
                    <span>book-half</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61844">
                    <i class="bi bi-book"></i>
                    <span>book</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61845">
                    <i class="bi bi-bookmark-check-fill"></i>
                    <span>bookmark-check-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61846">
                    <i class="bi bi-bookmark-check"></i>
                    <span>bookmark-check</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61847">
                    <i class="bi bi-bookmark-dash-fill"></i>
                    <span>bookmark-dash-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61848">
                    <i class="bi bi-bookmark-dash"></i>
                    <span>bookmark-dash</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61849">
                    <i class="bi bi-bookmark-fill"></i>
                    <span>bookmark-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61850">
                    <i class="bi bi-bookmark-heart-fill"></i>
                    <span>bookmark-heart-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61851">
                    <i class="bi bi-bookmark-heart"></i>
                    <span>bookmark-heart</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61852">
                    <i class="bi bi-bookmark-plus-fill"></i>
                    <span>bookmark-plus-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61853">
                    <i class="bi bi-bookmark-plus"></i>
                    <span>bookmark-plus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61854">
                    <i class="bi bi-bookmark-star-fill"></i>
                    <span>bookmark-star-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61855">
                    <i class="bi bi-bookmark-star"></i>
                    <span>bookmark-star</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61856">
                    <i class="bi bi-bookmark-x-fill"></i>
                    <span>bookmark-x-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61857">
                    <i class="bi bi-bookmark-x"></i>
                    <span>bookmark-x</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61858">
                    <i class="bi bi-bookmark"></i>
                    <span>bookmark</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61859">
                    <i class="bi bi-bookmarks-fill"></i>
                    <span>bookmarks-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61860">
                    <i class="bi bi-bookmarks"></i>
                    <span>bookmarks</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61861">
                    <i class="bi bi-bookshelf"></i>
                    <span>bookshelf</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61862">
                    <i class="bi bi-bootstrap-fill"></i>
                    <span>bootstrap-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61863">
                    <i class="bi bi-bootstrap-reboot"></i>
                    <span>bootstrap-reboot</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61864">
                    <i class="bi bi-bootstrap"></i>
                    <span>bootstrap</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61865">
                    <i class="bi bi-border-all"></i>
                    <span>border-all</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61866">
                    <i class="bi bi-border-bottom"></i>
                    <span>border-bottom</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61867">
                    <i class="bi bi-border-center"></i>
                    <span>border-center</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61868">
                    <i class="bi bi-border-inner"></i>
                    <span>border-inner</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61869">
                    <i class="bi bi-border-left"></i>
                    <span>border-left</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61870">
                    <i class="bi bi-border-middle"></i>
                    <span>border-middle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61871">
                    <i class="bi bi-border-outer"></i>
                    <span>border-outer</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61872">
                    <i class="bi bi-border-right"></i>
                    <span>border-right</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61873">
                    <i class="bi bi-border-style"></i>
                    <span>border-style</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61874">
                    <i class="bi bi-border-top"></i>
                    <span>border-top</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61875">
                    <i class="bi bi-border-width"></i>
                    <span>border-width</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61876">
                    <i class="bi bi-border"></i>
                    <span>border</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61877">
                    <i class="bi bi-bounding-box-circles"></i>
                    <span>bounding-box-circles</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61878">
                    <i class="bi bi-bounding-box"></i>
                    <span>bounding-box</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61879">
                    <i class="bi bi-box-arrow-down-left"></i>
                    <span>box-arrow-down-left</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61880">
                    <i class="bi bi-box-arrow-down-right"></i>
                    <span>box-arrow-down-right</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61881">
                    <i class="bi bi-box-arrow-down"></i>
                    <span>box-arrow-down</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61882">
                    <i class="bi bi-box-arrow-in-down-left"></i>
                    <span>box-arrow-in-down-left</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61883">
                    <i class="bi bi-box-arrow-in-down-right"></i>
                    <span>box-arrow-in-down-right</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61884">
                    <i class="bi bi-box-arrow-in-down"></i>
                    <span>box-arrow-in-down</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61885">
                    <i class="bi bi-box-arrow-in-left"></i>
                    <span>box-arrow-in-left</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61886">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>box-arrow-in-right</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61887">
                    <i class="bi bi-box-arrow-in-up-left"></i>
                    <span>box-arrow-in-up-left</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61888">
                    <i class="bi bi-box-arrow-in-up-right"></i>
                    <span>box-arrow-in-up-right</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61889">
                    <i class="bi bi-box-arrow-in-up"></i>
                    <span>box-arrow-in-up</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61890">
                    <i class="bi bi-box-arrow-left"></i>
                    <span>box-arrow-left</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61891">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>box-arrow-right</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61892">
                    <i class="bi bi-box-arrow-up-left"></i>
                    <span>box-arrow-up-left</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61893">
                    <i class="bi bi-box-arrow-up-right"></i>
                    <span>box-arrow-up-right</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61894">
                    <i class="bi bi-box-arrow-up"></i>
                    <span>box-arrow-up</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61895">
                    <i class="bi bi-box-seam"></i>
                    <span>box-seam</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61896">
                    <i class="bi bi-box"></i>
                    <span>box</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61897">
                    <i class="bi bi-braces"></i>
                    <span>braces</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61898">
                    <i class="bi bi-bricks"></i>
                    <span>bricks</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61899">
                    <i class="bi bi-briefcase-fill"></i>
                    <span>briefcase-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61900">
                    <i class="bi bi-briefcase"></i>
                    <span>briefcase</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61901">
                    <i class="bi bi-brightness-alt-high-fill"></i>
                    <span>brightness-alt-high-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61902">
                    <i class="bi bi-brightness-alt-high"></i>
                    <span>brightness-alt-high</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61903">
                    <i class="bi bi-brightness-alt-low-fill"></i>
                    <span>brightness-alt-low-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61904">
                    <i class="bi bi-brightness-alt-low"></i>
                    <span>brightness-alt-low</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61905">
                    <i class="bi bi-brightness-high-fill"></i>
                    <span>brightness-high-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61906">
                    <i class="bi bi-brightness-high"></i>
                    <span>brightness-high</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61907">
                    <i class="bi bi-brightness-low-fill"></i>
                    <span>brightness-low-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61908">
                    <i class="bi bi-brightness-low"></i>
                    <span>brightness-low</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61909">
                    <i class="bi bi-broadcast-pin"></i>
                    <span>broadcast-pin</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61910">
                    <i class="bi bi-broadcast"></i>
                    <span>broadcast</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61911">
                    <i class="bi bi-brush-fill"></i>
                    <span>brush-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61912">
                    <i class="bi bi-brush"></i>
                    <span>brush</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61913">
                    <i class="bi bi-bucket-fill"></i>
                    <span>bucket-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61914">
                    <i class="bi bi-bucket"></i>
                    <span>bucket</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61915">
                    <i class="bi bi-bug-fill"></i>
                    <span>bug-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61916">
                    <i class="bi bi-bug"></i>
                    <span>bug</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61917">
                    <i class="bi bi-building"></i>
                    <span>building</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61918">
                    <i class="bi bi-bullseye"></i>
                    <span>bullseye</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61919">
                    <i class="bi bi-calculator-fill"></i>
                    <span>calculator-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61920">
                    <i class="bi bi-calculator"></i>
                    <span>calculator</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61921">
                    <i class="bi bi-calendar-check-fill"></i>
                    <span>calendar-check-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61922">
                    <i class="bi bi-calendar-check"></i>
                    <span>calendar-check</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61923">
                    <i class="bi bi-calendar-date-fill"></i>
                    <span>calendar-date-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61924">
                    <i class="bi bi-calendar-date"></i>
                    <span>calendar-date</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61925">
                    <i class="bi bi-calendar-day-fill"></i>
                    <span>calendar-day-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61926">
                    <i class="bi bi-calendar-day"></i>
                    <span>calendar-day</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61927">
                    <i class="bi bi-calendar-event-fill"></i>
                    <span>calendar-event-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61928">
                    <i class="bi bi-calendar-event"></i>
                    <span>calendar-event</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61929">
                    <i class="bi bi-calendar-fill"></i>
                    <span>calendar-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61930">
                    <i class="bi bi-calendar-minus-fill"></i>
                    <span>calendar-minus-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61931">
                    <i class="bi bi-calendar-minus"></i>
                    <span>calendar-minus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61932">
                    <i class="bi bi-calendar-month-fill"></i>
                    <span>calendar-month-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61933">
                    <i class="bi bi-calendar-month"></i>
                    <span>calendar-month</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61934">
                    <i class="bi bi-calendar-plus-fill"></i>
                    <span>calendar-plus-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61935">
                    <i class="bi bi-calendar-plus"></i>
                    <span>calendar-plus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61936">
                    <i class="bi bi-calendar-range-fill"></i>
                    <span>calendar-range-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61937">
                    <i class="bi bi-calendar-range"></i>
                    <span>calendar-range</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61938">
                    <i class="bi bi-calendar-week-fill"></i>
                    <span>calendar-week-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61939">
                    <i class="bi bi-calendar-week"></i>
                    <span>calendar-week</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61940">
                    <i class="bi bi-calendar-x-fill"></i>
                    <span>calendar-x-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61941">
                    <i class="bi bi-calendar-x"></i>
                    <span>calendar-x</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61942">
                    <i class="bi bi-calendar"></i>
                    <span>calendar</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61943">
                    <i class="bi bi-calendar2-check-fill"></i>
                    <span>calendar2-check-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61944">
                    <i class="bi bi-calendar2-check"></i>
                    <span>calendar2-check</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61945">
                    <i class="bi bi-calendar2-date-fill"></i>
                    <span>calendar2-date-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61946">
                    <i class="bi bi-calendar2-date"></i>
                    <span>calendar2-date</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61947">
                    <i class="bi bi-calendar2-day-fill"></i>
                    <span>calendar2-day-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61948">
                    <i class="bi bi-calendar2-day"></i>
                    <span>calendar2-day</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61949">
                    <i class="bi bi-calendar2-event-fill"></i>
                    <span>calendar2-event-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61950">
                    <i class="bi bi-calendar2-event"></i>
                    <span>calendar2-event</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61951">
                    <i class="bi bi-calendar2-fill"></i>
                    <span>calendar2-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61952">
                    <i class="bi bi-calendar2-minus-fill"></i>
                    <span>calendar2-minus-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61953">
                    <i class="bi bi-calendar2-minus"></i>
                    <span>calendar2-minus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61954">
                    <i class="bi bi-calendar2-month-fill"></i>
                    <span>calendar2-month-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61955">
                    <i class="bi bi-calendar2-month"></i>
                    <span>calendar2-month</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61956">
                    <i class="bi bi-calendar2-plus-fill"></i>
                    <span>calendar2-plus-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61957">
                    <i class="bi bi-calendar2-plus"></i>
                    <span>calendar2-plus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61958">
                    <i class="bi bi-calendar2-range-fill"></i>
                    <span>calendar2-range-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61959">
                    <i class="bi bi-calendar2-range"></i>
                    <span>calendar2-range</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61960">
                    <i class="bi bi-calendar2-week-fill"></i>
                    <span>calendar2-week-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61961">
                    <i class="bi bi-calendar2-week"></i>
                    <span>calendar2-week</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61962">
                    <i class="bi bi-calendar2-x-fill"></i>
                    <span>calendar2-x-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61963">
                    <i class="bi bi-calendar2-x"></i>
                    <span>calendar2-x</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61964">
                    <i class="bi bi-calendar2"></i>
                    <span>calendar2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61965">
                    <i class="bi bi-calendar3-event-fill"></i>
                    <span>calendar3-event-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61966">
                    <i class="bi bi-calendar3-event"></i>
                    <span>calendar3-event</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61967">
                    <i class="bi bi-calendar3-fill"></i>
                    <span>calendar3-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61968">
                    <i class="bi bi-calendar3-range-fill"></i>
                    <span>calendar3-range-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61969">
                    <i class="bi bi-calendar3-range"></i>
                    <span>calendar3-range</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61970">
                    <i class="bi bi-calendar3-week-fill"></i>
                    <span>calendar3-week-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61971">
                    <i class="bi bi-calendar3-week"></i>
                    <span>calendar3-week</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61972">
                    <i class="bi bi-calendar3"></i>
                    <span>calendar3</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61973">
                    <i class="bi bi-calendar4-event"></i>
                    <span>calendar4-event</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61974">
                    <i class="bi bi-calendar4-range"></i>
                    <span>calendar4-range</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61975">
                    <i class="bi bi-calendar4-week"></i>
                    <span>calendar4-week</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61976">
                    <i class="bi bi-calendar4"></i>
                    <span>calendar4</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61977">
                    <i class="bi bi-camera-fill"></i>
                    <span>camera-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61978">
                    <i class="bi bi-camera-reels-fill"></i>
                    <span>camera-reels-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61979">
                    <i class="bi bi-camera-reels"></i>
                    <span>camera-reels</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61980">
                    <i class="bi bi-camera-video-fill"></i>
                    <span>camera-video-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61981">
                    <i class="bi bi-camera-video-off-fill"></i>
                    <span>camera-video-off-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61982">
                    <i class="bi bi-camera-video-off"></i>
                    <span>camera-video-off</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61983">
                    <i class="bi bi-camera-video"></i>
                    <span>camera-video</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61984">
                    <i class="bi bi-camera"></i>
                    <span>camera</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61985">
                    <i class="bi bi-camera2"></i>
                    <span>camera2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61986">
                    <i class="bi bi-capslock-fill"></i>
                    <span>capslock-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61987">
                    <i class="bi bi-capslock"></i>
                    <span>capslock</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61988">
                    <i class="bi bi-card-checklist"></i>
                    <span>card-checklist</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61989">
                    <i class="bi bi-card-heading"></i>
                    <span>card-heading</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61990">
                    <i class="bi bi-card-image"></i>
                    <span>card-image</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61991">
                    <i class="bi bi-card-list"></i>
                    <span>card-list</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61992">
                    <i class="bi bi-card-text"></i>
                    <span>card-text</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61993">
                    <i class="bi bi-caret-down-fill"></i>
                    <span>caret-down-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61994">
                    <i class="bi bi-caret-down-square-fill"></i>
                    <span>caret-down-square-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61995">
                    <i class="bi bi-caret-down-square"></i>
                    <span>caret-down-square</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61996">
                    <i class="bi bi-caret-down"></i>
                    <span>caret-down</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61997">
                    <i class="bi bi-caret-left-fill"></i>
                    <span>caret-left-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61998">
                    <i class="bi bi-caret-left-square-fill"></i>
                    <span>caret-left-square-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_61999">
                    <i class="bi bi-caret-left-square"></i>
                    <span>caret-left-square</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62000">
                    <i class="bi bi-caret-left"></i>
                    <span>caret-left</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62001">
                    <i class="bi bi-caret-right-fill"></i>
                    <span>caret-right-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62002">
                    <i class="bi bi-caret-right-square-fill"></i>
                    <span>caret-right-square-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62003">
                    <i class="bi bi-caret-right-square"></i>
                    <span>caret-right-square</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62004">
                    <i class="bi bi-caret-right"></i>
                    <span>caret-right</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62005">
                    <i class="bi bi-caret-up-fill"></i>
                    <span>caret-up-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62006">
                    <i class="bi bi-caret-up-square-fill"></i>
                    <span>caret-up-square-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62007">
                    <i class="bi bi-caret-up-square"></i>
                    <span>caret-up-square</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62008">
                    <i class="bi bi-caret-up"></i>
                    <span>caret-up</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62009">
                    <i class="bi bi-cart-check-fill"></i>
                    <span>cart-check-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62010">
                    <i class="bi bi-cart-check"></i>
                    <span>cart-check</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62011">
                    <i class="bi bi-cart-dash-fill"></i>
                    <span>cart-dash-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62012">
                    <i class="bi bi-cart-dash"></i>
                    <span>cart-dash</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62013">
                    <i class="bi bi-cart-fill"></i>
                    <span>cart-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62014">
                    <i class="bi bi-cart-plus-fill"></i>
                    <span>cart-plus-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62015">
                    <i class="bi bi-cart-plus"></i>
                    <span>cart-plus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62016">
                    <i class="bi bi-cart-x-fill"></i>
                    <span>cart-x-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62017">
                    <i class="bi bi-cart-x"></i>
                    <span>cart-x</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62018">
                    <i class="bi bi-cart"></i>
                    <span>cart</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62019">
                    <i class="bi bi-cart2"></i>
                    <span>cart2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62020">
                    <i class="bi bi-cart3"></i>
                    <span>cart3</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62021">
                    <i class="bi bi-cart4"></i>
                    <span>cart4</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62022">
                    <i class="bi bi-cash-stack"></i>
                    <span>cash-stack</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62023">
                    <i class="bi bi-cash"></i>
                    <span>cash</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62024">
                    <i class="bi bi-cast"></i>
                    <span>cast</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62025">
                    <i class="bi bi-chat-dots-fill"></i>
                    <span>chat-dots-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62026">
                    <i class="bi bi-chat-dots"></i>
                    <span>chat-dots</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62027">
                    <i class="bi bi-chat-fill"></i>
                    <span>chat-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62028">
                    <i class="bi bi-chat-left-dots-fill"></i>
                    <span>chat-left-dots-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62029">
                    <i class="bi bi-chat-left-dots"></i>
                    <span>chat-left-dots</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62030">
                    <i class="bi bi-chat-left-fill"></i>
                    <span>chat-left-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62031">
                    <i class="bi bi-chat-left-quote-fill"></i>
                    <span>chat-left-quote-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62032">
                    <i class="bi bi-chat-left-quote"></i>
                    <span>chat-left-quote</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62033">
                    <i class="bi bi-chat-left-text-fill"></i>
                    <span>chat-left-text-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62034">
                    <i class="bi bi-chat-left-text"></i>
                    <span>chat-left-text</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62035">
                    <i class="bi bi-chat-left"></i>
                    <span>chat-left</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62036">
                    <i class="bi bi-chat-quote-fill"></i>
                    <span>chat-quote-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62037">
                    <i class="bi bi-chat-quote"></i>
                    <span>chat-quote</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62038">
                    <i class="bi bi-chat-right-dots-fill"></i>
                    <span>chat-right-dots-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62039">
                    <i class="bi bi-chat-right-dots"></i>
                    <span>chat-right-dots</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62040">
                    <i class="bi bi-chat-right-fill"></i>
                    <span>chat-right-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62041">
                    <i class="bi bi-chat-right-quote-fill"></i>
                    <span>chat-right-quote-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62042">
                    <i class="bi bi-chat-right-quote"></i>
                    <span>chat-right-quote</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62043">
                    <i class="bi bi-chat-right-text-fill"></i>
                    <span>chat-right-text-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62044">
                    <i class="bi bi-chat-right-text"></i>
                    <span>chat-right-text</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62045">
                    <i class="bi bi-chat-right"></i>
                    <span>chat-right</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62046">
                    <i class="bi bi-chat-square-dots-fill"></i>
                    <span>chat-square-dots-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62047">
                    <i class="bi bi-chat-square-dots"></i>
                    <span>chat-square-dots</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62048">
                    <i class="bi bi-chat-square-fill"></i>
                    <span>chat-square-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62049">
                    <i class="bi bi-chat-square-quote-fill"></i>
                    <span>chat-square-quote-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62050">
                    <i class="bi bi-chat-square-quote"></i>
                    <span>chat-square-quote</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62051">
                    <i class="bi bi-chat-square-text-fill"></i>
                    <span>chat-square-text-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62052">
                    <i class="bi bi-chat-square-text"></i>
                    <span>chat-square-text</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62053">
                    <i class="bi bi-chat-square"></i>
                    <span>chat-square</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62054">
                    <i class="bi bi-chat-text-fill"></i>
                    <span>chat-text-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62055">
                    <i class="bi bi-chat-text"></i>
                    <span>chat-text</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62056">
                    <i class="bi bi-chat"></i>
                    <span>chat</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62057">
                    <i class="bi bi-check-all"></i>
                    <span>check-all</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62058">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>check-circle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62059">
                    <i class="bi bi-check-circle"></i>
                    <span>check-circle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62060">
                    <i class="bi bi-check-square-fill"></i>
                    <span>check-square-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62061">
                    <i class="bi bi-check-square"></i>
                    <span>check-square</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62062">
                    <i class="bi bi-check"></i>
                    <span>check</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62063">
                    <i class="bi bi-check2-all"></i>
                    <span>check2-all</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62064">
                    <i class="bi bi-check2-circle"></i>
                    <span>check2-circle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62065">
                    <i class="bi bi-check2-square"></i>
                    <span>check2-square</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62066">
                    <i class="bi bi-check2"></i>
                    <span>check2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62067">
                    <i class="bi bi-chevron-bar-contract"></i>
                    <span>chevron-bar-contract</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62068">
                    <i class="bi bi-chevron-bar-down"></i>
                    <span>chevron-bar-down</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62069">
                    <i class="bi bi-chevron-bar-expand"></i>
                    <span>chevron-bar-expand</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62070">
                    <i class="bi bi-chevron-bar-left"></i>
                    <span>chevron-bar-left</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62071">
                    <i class="bi bi-chevron-bar-right"></i>
                    <span>chevron-bar-right</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62072">
                    <i class="bi bi-chevron-bar-up"></i>
                    <span>chevron-bar-up</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62073">
                    <i class="bi bi-chevron-compact-down"></i>
                    <span>chevron-compact-down</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62074">
                    <i class="bi bi-chevron-compact-left"></i>
                    <span>chevron-compact-left</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62075">
                    <i class="bi bi-chevron-compact-right"></i>
                    <span>chevron-compact-right</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62076">
                    <i class="bi bi-chevron-compact-up"></i>
                    <span>chevron-compact-up</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62077">
                    <i class="bi bi-chevron-contract"></i>
                    <span>chevron-contract</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62078">
                    <i class="bi bi-chevron-double-down"></i>
                    <span>chevron-double-down</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62079">
                    <i class="bi bi-chevron-double-left"></i>
                    <span>chevron-double-left</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62080">
                    <i class="bi bi-chevron-double-right"></i>
                    <span>chevron-double-right</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62081">
                    <i class="bi bi-chevron-double-up"></i>
                    <span>chevron-double-up</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62082">
                    <i class="bi bi-chevron-down"></i>
                    <span>chevron-down</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62083">
                    <i class="bi bi-chevron-expand"></i>
                    <span>chevron-expand</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62084">
                    <i class="bi bi-chevron-left"></i>
                    <span>chevron-left</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62085">
                    <i class="bi bi-chevron-right"></i>
                    <span>chevron-right</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62086">
                    <i class="bi bi-chevron-up"></i>
                    <span>chevron-up</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62087">
                    <i class="bi bi-circle-fill"></i>
                    <span>circle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62088">
                    <i class="bi bi-circle-half"></i>
                    <span>circle-half</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62089">
                    <i class="bi bi-circle-square"></i>
                    <span>circle-square</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62090">
                    <i class="bi bi-circle"></i>
                    <span>circle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62091">
                    <i class="bi bi-clipboard-check"></i>
                    <span>clipboard-check</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62092">
                    <i class="bi bi-clipboard-data"></i>
                    <span>clipboard-data</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62093">
                    <i class="bi bi-clipboard-minus"></i>
                    <span>clipboard-minus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62094">
                    <i class="bi bi-clipboard-plus"></i>
                    <span>clipboard-plus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62095">
                    <i class="bi bi-clipboard-x"></i>
                    <span>clipboard-x</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62096">
                    <i class="bi bi-clipboard"></i>
                    <span>clipboard</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62097">
                    <i class="bi bi-clock-fill"></i>
                    <span>clock-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62098">
                    <i class="bi bi-clock-history"></i>
                    <span>clock-history</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62099">
                    <i class="bi bi-clock"></i>
                    <span>clock</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62100">
                    <i class="bi bi-cloud-arrow-down-fill"></i>
                    <span>cloud-arrow-down-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62101">
                    <i class="bi bi-cloud-arrow-down"></i>
                    <span>cloud-arrow-down</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62102">
                    <i class="bi bi-cloud-arrow-up-fill"></i>
                    <span>cloud-arrow-up-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62103">
                    <i class="bi bi-cloud-arrow-up"></i>
                    <span>cloud-arrow-up</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62104">
                    <i class="bi bi-cloud-check-fill"></i>
                    <span>cloud-check-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62105">
                    <i class="bi bi-cloud-check"></i>
                    <span>cloud-check</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62106">
                    <i class="bi bi-cloud-download-fill"></i>
                    <span>cloud-download-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62107">
                    <i class="bi bi-cloud-download"></i>
                    <span>cloud-download</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62108">
                    <i class="bi bi-cloud-drizzle-fill"></i>
                    <span>cloud-drizzle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62109">
                    <i class="bi bi-cloud-drizzle"></i>
                    <span>cloud-drizzle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62110">
                    <i class="bi bi-cloud-fill"></i>
                    <span>cloud-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62111">
                    <i class="bi bi-cloud-fog-fill"></i>
                    <span>cloud-fog-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62112">
                    <i class="bi bi-cloud-fog"></i>
                    <span>cloud-fog</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62113">
                    <i class="bi bi-cloud-fog2-fill"></i>
                    <span>cloud-fog2-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62114">
                    <i class="bi bi-cloud-fog2"></i>
                    <span>cloud-fog2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62115">
                    <i class="bi bi-cloud-hail-fill"></i>
                    <span>cloud-hail-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62116">
                    <i class="bi bi-cloud-hail"></i>
                    <span>cloud-hail</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62117">
                    <i class="bi bi-cloud-haze-1"></i>
                    <span>cloud-haze-1</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62118">
                    <i class="bi bi-cloud-haze-fill"></i>
                    <span>cloud-haze-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62119">
                    <i class="bi bi-cloud-haze"></i>
                    <span>cloud-haze</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62120">
                    <i class="bi bi-cloud-haze2-fill"></i>
                    <span>cloud-haze2-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62121">
                    <i class="bi bi-cloud-lightning-fill"></i>
                    <span>cloud-lightning-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62122">
                    <i class="bi bi-cloud-lightning-rain-fill"></i>
                    <span>cloud-lightning-rain-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62123">
                    <i class="bi bi-cloud-lightning-rain"></i>
                    <span>cloud-lightning-rain</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62124">
                    <i class="bi bi-cloud-lightning"></i>
                    <span>cloud-lightning</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62125">
                    <i class="bi bi-cloud-minus-fill"></i>
                    <span>cloud-minus-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62126">
                    <i class="bi bi-cloud-minus"></i>
                    <span>cloud-minus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62127">
                    <i class="bi bi-cloud-moon-fill"></i>
                    <span>cloud-moon-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62128">
                    <i class="bi bi-cloud-moon"></i>
                    <span>cloud-moon</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62129">
                    <i class="bi bi-cloud-plus-fill"></i>
                    <span>cloud-plus-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62130">
                    <i class="bi bi-cloud-plus"></i>
                    <span>cloud-plus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62131">
                    <i class="bi bi-cloud-rain-fill"></i>
                    <span>cloud-rain-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62132">
                    <i class="bi bi-cloud-rain-heavy-fill"></i>
                    <span>cloud-rain-heavy-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62133">
                    <i class="bi bi-cloud-rain-heavy"></i>
                    <span>cloud-rain-heavy</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62134">
                    <i class="bi bi-cloud-rain"></i>
                    <span>cloud-rain</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62135">
                    <i class="bi bi-cloud-slash-fill"></i>
                    <span>cloud-slash-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62136">
                    <i class="bi bi-cloud-slash"></i>
                    <span>cloud-slash</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62137">
                    <i class="bi bi-cloud-sleet-fill"></i>
                    <span>cloud-sleet-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62138">
                    <i class="bi bi-cloud-sleet"></i>
                    <span>cloud-sleet</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62139">
                    <i class="bi bi-cloud-snow-fill"></i>
                    <span>cloud-snow-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62140">
                    <i class="bi bi-cloud-snow"></i>
                    <span>cloud-snow</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62141">
                    <i class="bi bi-cloud-sun-fill"></i>
                    <span>cloud-sun-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62142">
                    <i class="bi bi-cloud-sun"></i>
                    <span>cloud-sun</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62143">
                    <i class="bi bi-cloud-upload-fill"></i>
                    <span>cloud-upload-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62144">
                    <i class="bi bi-cloud-upload"></i>
                    <span>cloud-upload</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62145">
                    <i class="bi bi-cloud"></i>
                    <span>cloud</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62146">
                    <i class="bi bi-clouds-fill"></i>
                    <span>clouds-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62147">
                    <i class="bi bi-clouds"></i>
                    <span>clouds</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62148">
                    <i class="bi bi-cloudy-fill"></i>
                    <span>cloudy-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62149">
                    <i class="bi bi-cloudy"></i>
                    <span>cloudy</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62150">
                    <i class="bi bi-code-slash"></i>
                    <span>code-slash</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62151">
                    <i class="bi bi-code-square"></i>
                    <span>code-square</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62152">
                    <i class="bi bi-code"></i>
                    <span>code</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62153">
                    <i class="bi bi-collection-fill"></i>
                    <span>collection-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62154">
                    <i class="bi bi-collection-play-fill"></i>
                    <span>collection-play-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62155">
                    <i class="bi bi-collection-play"></i>
                    <span>collection-play</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62156">
                    <i class="bi bi-collection"></i>
                    <span>collection</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62157">
                    <i class="bi bi-columns-gap"></i>
                    <span>columns-gap</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62158">
                    <i class="bi bi-columns"></i>
                    <span>columns</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62159">
                    <i class="bi bi-command"></i>
                    <span>command</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62160">
                    <i class="bi bi-compass-fill"></i>
                    <span>compass-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62161">
                    <i class="bi bi-compass"></i>
                    <span>compass</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62162">
                    <i class="bi bi-cone-striped"></i>
                    <span>cone-striped</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62163">
                    <i class="bi bi-cone"></i>
                    <span>cone</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62164">
                    <i class="bi bi-controller"></i>
                    <span>controller</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62165">
                    <i class="bi bi-cpu-fill"></i>
                    <span>cpu-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62166">
                    <i class="bi bi-cpu"></i>
                    <span>cpu</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62167">
                    <i class="bi bi-credit-card-2-back-fill"></i>
                    <span>credit-card-2-back-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62168">
                    <i class="bi bi-credit-card-2-back"></i>
                    <span>credit-card-2-back</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62169">
                    <i class="bi bi-credit-card-2-front-fill"></i>
                    <span>credit-card-2-front-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62170">
                    <i class="bi bi-credit-card-2-front"></i>
                    <span>credit-card-2-front</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62171">
                    <i class="bi bi-credit-card-fill"></i>
                    <span>credit-card-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62172">
                    <i class="bi bi-credit-card"></i>
                    <span>credit-card</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62173">
                    <i class="bi bi-crop"></i>
                    <span>crop</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62174">
                    <i class="bi bi-cup-fill"></i>
                    <span>cup-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62175">
                    <i class="bi bi-cup-straw"></i>
                    <span>cup-straw</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62176">
                    <i class="bi bi-cup"></i>
                    <span>cup</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62177">
                    <i class="bi bi-cursor-fill"></i>
                    <span>cursor-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62178">
                    <i class="bi bi-cursor-text"></i>
                    <span>cursor-text</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62179">
                    <i class="bi bi-cursor"></i>
                    <span>cursor</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62180">
                    <i class="bi bi-dash-circle-dotted"></i>
                    <span>dash-circle-dotted</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62181">
                    <i class="bi bi-dash-circle-fill"></i>
                    <span>dash-circle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62182">
                    <i class="bi bi-dash-circle"></i>
                    <span>dash-circle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62183">
                    <i class="bi bi-dash-square-dotted"></i>
                    <span>dash-square-dotted</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62184">
                    <i class="bi bi-dash-square-fill"></i>
                    <span>dash-square-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62185">
                    <i class="bi bi-dash-square"></i>
                    <span>dash-square</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62186">
                    <i class="bi bi-dash"></i>
                    <span>dash</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62187">
                    <i class="bi bi-diagram-2-fill"></i>
                    <span>diagram-2-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62188">
                    <i class="bi bi-diagram-2"></i>
                    <span>diagram-2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62189">
                    <i class="bi bi-diagram-3-fill"></i>
                    <span>diagram-3-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62190">
                    <i class="bi bi-diagram-3"></i>
                    <span>diagram-3</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62191">
                    <i class="bi bi-diamond-fill"></i>
                    <span>diamond-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62192">
                    <i class="bi bi-diamond-half"></i>
                    <span>diamond-half</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62193">
                    <i class="bi bi-diamond"></i>
                    <span>diamond</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62194">
                    <i class="bi bi-dice-1-fill"></i>
                    <span>dice-1-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62195">
                    <i class="bi bi-dice-1"></i>
                    <span>dice-1</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62196">
                    <i class="bi bi-dice-2-fill"></i>
                    <span>dice-2-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62197">
                    <i class="bi bi-dice-2"></i>
                    <span>dice-2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62198">
                    <i class="bi bi-dice-3-fill"></i>
                    <span>dice-3-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62199">
                    <i class="bi bi-dice-3"></i>
                    <span>dice-3</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62200">
                    <i class="bi bi-dice-4-fill"></i>
                    <span>dice-4-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62201">
                    <i class="bi bi-dice-4"></i>
                    <span>dice-4</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62202">
                    <i class="bi bi-dice-5-fill"></i>
                    <span>dice-5-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62203">
                    <i class="bi bi-dice-5"></i>
                    <span>dice-5</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62204">
                    <i class="bi bi-dice-6-fill"></i>
                    <span>dice-6-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62205">
                    <i class="bi bi-dice-6"></i>
                    <span>dice-6</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62206">
                    <i class="bi bi-disc-fill"></i>
                    <span>disc-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62207">
                    <i class="bi bi-disc"></i>
                    <span>disc</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62208">
                    <i class="bi bi-discord"></i>
                    <span>discord</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62209">
                    <i class="bi bi-display-fill"></i>
                    <span>display-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62210">
                    <i class="bi bi-display"></i>
                    <span>display</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62211">
                    <i class="bi bi-distribute-horizontal"></i>
                    <span>distribute-horizontal</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62212">
                    <i class="bi bi-distribute-vertical"></i>
                    <span>distribute-vertical</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62213">
                    <i class="bi bi-door-closed-fill"></i>
                    <span>door-closed-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62214">
                    <i class="bi bi-door-closed"></i>
                    <span>door-closed</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62215">
                    <i class="bi bi-door-open-fill"></i>
                    <span>door-open-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62216">
                    <i class="bi bi-door-open"></i>
                    <span>door-open</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62217">
                    <i class="bi bi-dot"></i>
                    <span>dot</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62218">
                    <i class="bi bi-download"></i>
                    <span>download</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62219">
                    <i class="bi bi-droplet-fill"></i>
                    <span>droplet-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62220">
                    <i class="bi bi-droplet-half"></i>
                    <span>droplet-half</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62221">
                    <i class="bi bi-droplet"></i>
                    <span>droplet</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62222">
                    <i class="bi bi-earbuds"></i>
                    <span>earbuds</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62223">
                    <i class="bi bi-easel-fill"></i>
                    <span>easel-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62224">
                    <i class="bi bi-easel"></i>
                    <span>easel</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62225">
                    <i class="bi bi-egg-fill"></i>
                    <span>egg-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62226">
                    <i class="bi bi-egg-fried"></i>
                    <span>egg-fried</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62227">
                    <i class="bi bi-egg"></i>
                    <span>egg</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62228">
                    <i class="bi bi-eject-fill"></i>
                    <span>eject-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62229">
                    <i class="bi bi-eject"></i>
                    <span>eject</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62230">
                    <i class="bi bi-emoji-angry-fill"></i>
                    <span>emoji-angry-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62231">
                    <i class="bi bi-emoji-angry"></i>
                    <span>emoji-angry</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62232">
                    <i class="bi bi-emoji-dizzy-fill"></i>
                    <span>emoji-dizzy-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62233">
                    <i class="bi bi-emoji-dizzy"></i>
                    <span>emoji-dizzy</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62234">
                    <i class="bi bi-emoji-expressionless-fill"></i>
                    <span>emoji-expressionless-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62235">
                    <i class="bi bi-emoji-expressionless"></i>
                    <span>emoji-expressionless</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62236">
                    <i class="bi bi-emoji-frown-fill"></i>
                    <span>emoji-frown-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62237">
                    <i class="bi bi-emoji-frown"></i>
                    <span>emoji-frown</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62238">
                    <i class="bi bi-emoji-heart-eyes-fill"></i>
                    <span>emoji-heart-eyes-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62239">
                    <i class="bi bi-emoji-heart-eyes"></i>
                    <span>emoji-heart-eyes</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62240">
                    <i class="bi bi-emoji-laughing-fill"></i>
                    <span>emoji-laughing-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62241">
                    <i class="bi bi-emoji-laughing"></i>
                    <span>emoji-laughing</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62242">
                    <i class="bi bi-emoji-neutral-fill"></i>
                    <span>emoji-neutral-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62243">
                    <i class="bi bi-emoji-neutral"></i>
                    <span>emoji-neutral</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62244">
                    <i class="bi bi-emoji-smile-fill"></i>
                    <span>emoji-smile-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62245">
                    <i class="bi bi-emoji-smile-upside-down-fill"></i>
                    <span>emoji-smile-upside-down-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62246">
                    <i class="bi bi-emoji-smile-upside-down"></i>
                    <span>emoji-smile-upside-down</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62247">
                    <i class="bi bi-emoji-smile"></i>
                    <span>emoji-smile</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62248">
                    <i class="bi bi-emoji-sunglasses-fill"></i>
                    <span>emoji-sunglasses-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62249">
                    <i class="bi bi-emoji-sunglasses"></i>
                    <span>emoji-sunglasses</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62250">
                    <i class="bi bi-emoji-wink-fill"></i>
                    <span>emoji-wink-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62251">
                    <i class="bi bi-emoji-wink"></i>
                    <span>emoji-wink</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62252">
                    <i class="bi bi-envelope-fill"></i>
                    <span>envelope-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62253">
                    <i class="bi bi-envelope-open-fill"></i>
                    <span>envelope-open-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62254">
                    <i class="bi bi-envelope-open"></i>
                    <span>envelope-open</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62255">
                    <i class="bi bi-envelope"></i>
                    <span>envelope</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62256">
                    <i class="bi bi-eraser-fill"></i>
                    <span>eraser-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62257">
                    <i class="bi bi-eraser"></i>
                    <span>eraser</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62258">
                    <i class="bi bi-exclamation-circle-fill"></i>
                    <span>exclamation-circle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62259">
                    <i class="bi bi-exclamation-circle"></i>
                    <span>exclamation-circle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62260">
                    <i class="bi bi-exclamation-diamond-fill"></i>
                    <span>exclamation-diamond-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62261">
                    <i class="bi bi-exclamation-diamond"></i>
                    <span>exclamation-diamond</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62262">
                    <i class="bi bi-exclamation-octagon-fill"></i>
                    <span>exclamation-octagon-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62263">
                    <i class="bi bi-exclamation-octagon"></i>
                    <span>exclamation-octagon</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62264">
                    <i class="bi bi-exclamation-square-fill"></i>
                    <span>exclamation-square-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62265">
                    <i class="bi bi-exclamation-square"></i>
                    <span>exclamation-square</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62266">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                    <span>exclamation-triangle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62267">
                    <i class="bi bi-exclamation-triangle"></i>
                    <span>exclamation-triangle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62268">
                    <i class="bi bi-exclamation"></i>
                    <span>exclamation</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62269">
                    <i class="bi bi-exclude"></i>
                    <span>exclude</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62270">
                    <i class="bi bi-eye-fill"></i>
                    <span>eye-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62271">
                    <i class="bi bi-eye-slash-fill"></i>
                    <span>eye-slash-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62272">
                    <i class="bi bi-eye-slash"></i>
                    <span>eye-slash</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62273">
                    <i class="bi bi-eye"></i>
                    <span>eye</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62274">
                    <i class="bi bi-eyedropper"></i>
                    <span>eyedropper</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62275">
                    <i class="bi bi-eyeglasses"></i>
                    <span>eyeglasses</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62276">
                    <i class="bi bi-facebook"></i>
                    <span>facebook</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62277">
                    <i class="bi bi-file-arrow-down-fill"></i>
                    <span>file-arrow-down-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62278">
                    <i class="bi bi-file-arrow-down"></i>
                    <span>file-arrow-down</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62279">
                    <i class="bi bi-file-arrow-up-fill"></i>
                    <span>file-arrow-up-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62280">
                    <i class="bi bi-file-arrow-up"></i>
                    <span>file-arrow-up</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62281">
                    <i class="bi bi-file-bar-graph-fill"></i>
                    <span>file-bar-graph-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62282">
                    <i class="bi bi-file-bar-graph"></i>
                    <span>file-bar-graph</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62283">
                    <i class="bi bi-file-binary-fill"></i>
                    <span>file-binary-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62284">
                    <i class="bi bi-file-binary"></i>
                    <span>file-binary</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62285">
                    <i class="bi bi-file-break-fill"></i>
                    <span>file-break-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62286">
                    <i class="bi bi-file-break"></i>
                    <span>file-break</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62287">
                    <i class="bi bi-file-check-fill"></i>
                    <span>file-check-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62288">
                    <i class="bi bi-file-check"></i>
                    <span>file-check</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62289">
                    <i class="bi bi-file-code-fill"></i>
                    <span>file-code-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62290">
                    <i class="bi bi-file-code"></i>
                    <span>file-code</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62291">
                    <i class="bi bi-file-diff-fill"></i>
                    <span>file-diff-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62292">
                    <i class="bi bi-file-diff"></i>
                    <span>file-diff</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62293">
                    <i class="bi bi-file-earmark-arrow-down-fill"></i>
                    <span>file-earmark-arrow-down-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62294">
                    <i class="bi bi-file-earmark-arrow-down"></i>
                    <span>file-earmark-arrow-down</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62295">
                    <i class="bi bi-file-earmark-arrow-up-fill"></i>
                    <span>file-earmark-arrow-up-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62296">
                    <i class="bi bi-file-earmark-arrow-up"></i>
                    <span>file-earmark-arrow-up</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62297">
                    <i class="bi bi-file-earmark-bar-graph-fill"></i>
                    <span>file-earmark-bar-graph-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62298">
                    <i class="bi bi-file-earmark-bar-graph"></i>
                    <span>file-earmark-bar-graph</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62299">
                    <i class="bi bi-file-earmark-binary-fill"></i>
                    <span>file-earmark-binary-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62300">
                    <i class="bi bi-file-earmark-binary"></i>
                    <span>file-earmark-binary</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62301">
                    <i class="bi bi-file-earmark-break-fill"></i>
                    <span>file-earmark-break-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62302">
                    <i class="bi bi-file-earmark-break"></i>
                    <span>file-earmark-break</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62303">
                    <i class="bi bi-file-earmark-check-fill"></i>
                    <span>file-earmark-check-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62304">
                    <i class="bi bi-file-earmark-check"></i>
                    <span>file-earmark-check</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62305">
                    <i class="bi bi-file-earmark-code-fill"></i>
                    <span>file-earmark-code-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62306">
                    <i class="bi bi-file-earmark-code"></i>
                    <span>file-earmark-code</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62307">
                    <i class="bi bi-file-earmark-diff-fill"></i>
                    <span>file-earmark-diff-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62308">
                    <i class="bi bi-file-earmark-diff"></i>
                    <span>file-earmark-diff</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62309">
                    <i class="bi bi-file-earmark-easel-fill"></i>
                    <span>file-earmark-easel-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62310">
                    <i class="bi bi-file-earmark-easel"></i>
                    <span>file-earmark-easel</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62311">
                    <i class="bi bi-file-earmark-excel-fill"></i>
                    <span>file-earmark-excel-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62312">
                    <i class="bi bi-file-earmark-excel"></i>
                    <span>file-earmark-excel</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62313">
                    <i class="bi bi-file-earmark-fill"></i>
                    <span>file-earmark-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62314">
                    <i class="bi bi-file-earmark-font-fill"></i>
                    <span>file-earmark-font-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62315">
                    <i class="bi bi-file-earmark-font"></i>
                    <span>file-earmark-font</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62316">
                    <i class="bi bi-file-earmark-image-fill"></i>
                    <span>file-earmark-image-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62317">
                    <i class="bi bi-file-earmark-image"></i>
                    <span>file-earmark-image</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62318">
                    <i class="bi bi-file-earmark-lock-fill"></i>
                    <span>file-earmark-lock-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62319">
                    <i class="bi bi-file-earmark-lock"></i>
                    <span>file-earmark-lock</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62320">
                    <i class="bi bi-file-earmark-lock2-fill"></i>
                    <span>file-earmark-lock2-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62321">
                    <i class="bi bi-file-earmark-lock2"></i>
                    <span>file-earmark-lock2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62322">
                    <i class="bi bi-file-earmark-medical-fill"></i>
                    <span>file-earmark-medical-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62323">
                    <i class="bi bi-file-earmark-medical"></i>
                    <span>file-earmark-medical</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62324">
                    <i class="bi bi-file-earmark-minus-fill"></i>
                    <span>file-earmark-minus-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62325">
                    <i class="bi bi-file-earmark-minus"></i>
                    <span>file-earmark-minus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62326">
                    <i class="bi bi-file-earmark-music-fill"></i>
                    <span>file-earmark-music-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62327">
                    <i class="bi bi-file-earmark-music"></i>
                    <span>file-earmark-music</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62328">
                    <i class="bi bi-file-earmark-person-fill"></i>
                    <span>file-earmark-person-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62329">
                    <i class="bi bi-file-earmark-person"></i>
                    <span>file-earmark-person</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62330">
                    <i class="bi bi-file-earmark-play-fill"></i>
                    <span>file-earmark-play-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62331">
                    <i class="bi bi-file-earmark-play"></i>
                    <span>file-earmark-play</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62332">
                    <i class="bi bi-file-earmark-plus-fill"></i>
                    <span>file-earmark-plus-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62333">
                    <i class="bi bi-file-earmark-plus"></i>
                    <span>file-earmark-plus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62334">
                    <i class="bi bi-file-earmark-post-fill"></i>
                    <span>file-earmark-post-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62335">
                    <i class="bi bi-file-earmark-post"></i>
                    <span>file-earmark-post</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62336">
                    <i class="bi bi-file-earmark-ppt-fill"></i>
                    <span>file-earmark-ppt-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62337">
                    <i class="bi bi-file-earmark-ppt"></i>
                    <span>file-earmark-ppt</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62338">
                    <i class="bi bi-file-earmark-richtext-fill"></i>
                    <span>file-earmark-richtext-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62339">
                    <i class="bi bi-file-earmark-richtext"></i>
                    <span>file-earmark-richtext</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62340">
                    <i class="bi bi-file-earmark-ruled-fill"></i>
                    <span>file-earmark-ruled-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62341">
                    <i class="bi bi-file-earmark-ruled"></i>
                    <span>file-earmark-ruled</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62342">
                    <i class="bi bi-file-earmark-slides-fill"></i>
                    <span>file-earmark-slides-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62343">
                    <i class="bi bi-file-earmark-slides"></i>
                    <span>file-earmark-slides</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62344">
                    <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                    <span>file-earmark-spreadsheet-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62345">
                    <i class="bi bi-file-earmark-spreadsheet"></i>
                    <span>file-earmark-spreadsheet</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62346">
                    <i class="bi bi-file-earmark-text-fill"></i>
                    <span>file-earmark-text-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62347">
                    <i class="bi bi-file-earmark-text"></i>
                    <span>file-earmark-text</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62348">
                    <i class="bi bi-file-earmark-word-fill"></i>
                    <span>file-earmark-word-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62349">
                    <i class="bi bi-file-earmark-word"></i>
                    <span>file-earmark-word</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62350">
                    <i class="bi bi-file-earmark-x-fill"></i>
                    <span>file-earmark-x-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62351">
                    <i class="bi bi-file-earmark-x"></i>
                    <span>file-earmark-x</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62352">
                    <i class="bi bi-file-earmark-zip-fill"></i>
                    <span>file-earmark-zip-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62353">
                    <i class="bi bi-file-earmark-zip"></i>
                    <span>file-earmark-zip</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62354">
                    <i class="bi bi-file-earmark"></i>
                    <span>file-earmark</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62355">
                    <i class="bi bi-file-easel-fill"></i>
                    <span>file-easel-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62356">
                    <i class="bi bi-file-easel"></i>
                    <span>file-easel</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62357">
                    <i class="bi bi-file-excel-fill"></i>
                    <span>file-excel-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62358">
                    <i class="bi bi-file-excel"></i>
                    <span>file-excel</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62359">
                    <i class="bi bi-file-fill"></i>
                    <span>file-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62360">
                    <i class="bi bi-file-font-fill"></i>
                    <span>file-font-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62361">
                    <i class="bi bi-file-font"></i>
                    <span>file-font</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62362">
                    <i class="bi bi-file-image-fill"></i>
                    <span>file-image-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62363">
                    <i class="bi bi-file-image"></i>
                    <span>file-image</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62364">
                    <i class="bi bi-file-lock-fill"></i>
                    <span>file-lock-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62365">
                    <i class="bi bi-file-lock"></i>
                    <span>file-lock</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62366">
                    <i class="bi bi-file-lock2-fill"></i>
                    <span>file-lock2-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62367">
                    <i class="bi bi-file-lock2"></i>
                    <span>file-lock2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62368">
                    <i class="bi bi-file-medical-fill"></i>
                    <span>file-medical-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62369">
                    <i class="bi bi-file-medical"></i>
                    <span>file-medical</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62370">
                    <i class="bi bi-file-minus-fill"></i>
                    <span>file-minus-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62371">
                    <i class="bi bi-file-minus"></i>
                    <span>file-minus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62372">
                    <i class="bi bi-file-music-fill"></i>
                    <span>file-music-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62373">
                    <i class="bi bi-file-music"></i>
                    <span>file-music</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62374">
                    <i class="bi bi-file-person-fill"></i>
                    <span>file-person-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62375">
                    <i class="bi bi-file-person"></i>
                    <span>file-person</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62376">
                    <i class="bi bi-file-play-fill"></i>
                    <span>file-play-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62377">
                    <i class="bi bi-file-play"></i>
                    <span>file-play</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62378">
                    <i class="bi bi-file-plus-fill"></i>
                    <span>file-plus-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62379">
                    <i class="bi bi-file-plus"></i>
                    <span>file-plus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62380">
                    <i class="bi bi-file-post-fill"></i>
                    <span>file-post-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62381">
                    <i class="bi bi-file-post"></i>
                    <span>file-post</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62382">
                    <i class="bi bi-file-ppt-fill"></i>
                    <span>file-ppt-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62383">
                    <i class="bi bi-file-ppt"></i>
                    <span>file-ppt</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62384">
                    <i class="bi bi-file-richtext-fill"></i>
                    <span>file-richtext-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62385">
                    <i class="bi bi-file-richtext"></i>
                    <span>file-richtext</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62386">
                    <i class="bi bi-file-ruled-fill"></i>
                    <span>file-ruled-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62387">
                    <i class="bi bi-file-ruled"></i>
                    <span>file-ruled</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62388">
                    <i class="bi bi-file-slides-fill"></i>
                    <span>file-slides-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62389">
                    <i class="bi bi-file-slides"></i>
                    <span>file-slides</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62390">
                    <i class="bi bi-file-spreadsheet-fill"></i>
                    <span>file-spreadsheet-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62391">
                    <i class="bi bi-file-spreadsheet"></i>
                    <span>file-spreadsheet</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62392">
                    <i class="bi bi-file-text-fill"></i>
                    <span>file-text-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62393">
                    <i class="bi bi-file-text"></i>
                    <span>file-text</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62394">
                    <i class="bi bi-file-word-fill"></i>
                    <span>file-word-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62395">
                    <i class="bi bi-file-word"></i>
                    <span>file-word</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62396">
                    <i class="bi bi-file-x-fill"></i>
                    <span>file-x-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62397">
                    <i class="bi bi-file-x"></i>
                    <span>file-x</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62398">
                    <i class="bi bi-file-zip-fill"></i>
                    <span>file-zip-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62399">
                    <i class="bi bi-file-zip"></i>
                    <span>file-zip</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62400">
                    <i class="bi bi-file"></i>
                    <span>file</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62401">
                    <i class="bi bi-files-alt"></i>
                    <span>files-alt</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62402">
                    <i class="bi bi-files"></i>
                    <span>files</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62403">
                    <i class="bi bi-film"></i>
                    <span>film</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62404">
                    <i class="bi bi-filter-circle-fill"></i>
                    <span>filter-circle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62405">
                    <i class="bi bi-filter-circle"></i>
                    <span>filter-circle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62406">
                    <i class="bi bi-filter-left"></i>
                    <span>filter-left</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62407">
                    <i class="bi bi-filter-right"></i>
                    <span>filter-right</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62408">
                    <i class="bi bi-filter-square-fill"></i>
                    <span>filter-square-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62409">
                    <i class="bi bi-filter-square"></i>
                    <span>filter-square</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62410">
                    <i class="bi bi-filter"></i>
                    <span>filter</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62411">
                    <i class="bi bi-flag-fill"></i>
                    <span>flag-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62412">
                    <i class="bi bi-flag"></i>
                    <span>flag</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62413">
                    <i class="bi bi-flower1"></i>
                    <span>flower1</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62414">
                    <i class="bi bi-flower2"></i>
                    <span>flower2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62415">
                    <i class="bi bi-flower3"></i>
                    <span>flower3</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62416">
                    <i class="bi bi-folder-check"></i>
                    <span>folder-check</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62417">
                    <i class="bi bi-folder-fill"></i>
                    <span>folder-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62418">
                    <i class="bi bi-folder-minus"></i>
                    <span>folder-minus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62419">
                    <i class="bi bi-folder-plus"></i>
                    <span>folder-plus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62420">
                    <i class="bi bi-folder-symlink-fill"></i>
                    <span>folder-symlink-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62421">
                    <i class="bi bi-folder-symlink"></i>
                    <span>folder-symlink</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62422">
                    <i class="bi bi-folder-x"></i>
                    <span>folder-x</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62423">
                    <i class="bi bi-folder"></i>
                    <span>folder</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62424">
                    <i class="bi bi-folder2-open"></i>
                    <span>folder2-open</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62425">
                    <i class="bi bi-folder2"></i>
                    <span>folder2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62426">
                    <i class="bi bi-fonts"></i>
                    <span>fonts</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62427">
                    <i class="bi bi-forward-fill"></i>
                    <span>forward-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62428">
                    <i class="bi bi-forward"></i>
                    <span>forward</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62429">
                    <i class="bi bi-front"></i>
                    <span>front</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62430">
                    <i class="bi bi-fullscreen-exit"></i>
                    <span>fullscreen-exit</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62431">
                    <i class="bi bi-fullscreen"></i>
                    <span>fullscreen</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62432">
                    <i class="bi bi-funnel-fill"></i>
                    <span>funnel-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62433">
                    <i class="bi bi-funnel"></i>
                    <span>funnel</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62434">
                    <i class="bi bi-gear-fill"></i>
                    <span>gear-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62435">
                    <i class="bi bi-gear-wide-connected"></i>
                    <span>gear-wide-connected</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62436">
                    <i class="bi bi-gear-wide"></i>
                    <span>gear-wide</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62437">
                    <i class="bi bi-gear"></i>
                    <span>gear</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62438">
                    <i class="bi bi-gem"></i>
                    <span>gem</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62439">
                    <i class="bi bi-geo-alt-fill"></i>
                    <span>geo-alt-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62440">
                    <i class="bi bi-geo-alt"></i>
                    <span>geo-alt</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62441">
                    <i class="bi bi-geo-fill"></i>
                    <span>geo-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62442">
                    <i class="bi bi-geo"></i>
                    <span>geo</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62443">
                    <i class="bi bi-gift-fill"></i>
                    <span>gift-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62444">
                    <i class="bi bi-gift"></i>
                    <span>gift</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62445">
                    <i class="bi bi-github"></i>
                    <span>github</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62446">
                    <i class="bi bi-globe"></i>
                    <span>globe</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62447">
                    <i class="bi bi-globe2"></i>
                    <span>globe2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62448">
                    <i class="bi bi-google"></i>
                    <span>google</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62449">
                    <i class="bi bi-graph-down"></i>
                    <span>graph-down</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62450">
                    <i class="bi bi-graph-up"></i>
                    <span>graph-up</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62451">
                    <i class="bi bi-grid-1x2-fill"></i>
                    <span>grid-1x2-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62452">
                    <i class="bi bi-grid-1x2"></i>
                    <span>grid-1x2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62453">
                    <i class="bi bi-grid-3x2-gap-fill"></i>
                    <span>grid-3x2-gap-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62454">
                    <i class="bi bi-grid-3x2-gap"></i>
                    <span>grid-3x2-gap</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62455">
                    <i class="bi bi-grid-3x2"></i>
                    <span>grid-3x2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62456">
                    <i class="bi bi-grid-3x3-gap-fill"></i>
                    <span>grid-3x3-gap-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62457">
                    <i class="bi bi-grid-3x3-gap"></i>
                    <span>grid-3x3-gap</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62458">
                    <i class="bi bi-grid-3x3"></i>
                    <span>grid-3x3</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62459">
                    <i class="bi bi-grid-fill"></i>
                    <span>grid-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62460">
                    <i class="bi bi-grid"></i>
                    <span>grid</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62461">
                    <i class="bi bi-grip-horizontal"></i>
                    <span>grip-horizontal</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62462">
                    <i class="bi bi-grip-vertical"></i>
                    <span>grip-vertical</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62463">
                    <i class="bi bi-hammer"></i>
                    <span>hammer</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62464">
                    <i class="bi bi-hand-index-fill"></i>
                    <span>hand-index-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62465">
                    <i class="bi bi-hand-index-thumb-fill"></i>
                    <span>hand-index-thumb-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62466">
                    <i class="bi bi-hand-index-thumb"></i>
                    <span>hand-index-thumb</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62467">
                    <i class="bi bi-hand-index"></i>
                    <span>hand-index</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62468">
                    <i class="bi bi-hand-thumbs-down-fill"></i>
                    <span>hand-thumbs-down-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62469">
                    <i class="bi bi-hand-thumbs-down"></i>
                    <span>hand-thumbs-down</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62470">
                    <i class="bi bi-hand-thumbs-up-fill"></i>
                    <span>hand-thumbs-up-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62471">
                    <i class="bi bi-hand-thumbs-up"></i>
                    <span>hand-thumbs-up</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62472">
                    <i class="bi bi-handbag-fill"></i>
                    <span>handbag-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62473">
                    <i class="bi bi-handbag"></i>
                    <span>handbag</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62474">
                    <i class="bi bi-hash"></i>
                    <span>hash</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62475">
                    <i class="bi bi-hdd-fill"></i>
                    <span>hdd-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62476">
                    <i class="bi bi-hdd-network-fill"></i>
                    <span>hdd-network-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62477">
                    <i class="bi bi-hdd-network"></i>
                    <span>hdd-network</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62478">
                    <i class="bi bi-hdd-rack-fill"></i>
                    <span>hdd-rack-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62479">
                    <i class="bi bi-hdd-rack"></i>
                    <span>hdd-rack</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62480">
                    <i class="bi bi-hdd-stack-fill"></i>
                    <span>hdd-stack-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62481">
                    <i class="bi bi-hdd-stack"></i>
                    <span>hdd-stack</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62482">
                    <i class="bi bi-hdd"></i>
                    <span>hdd</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62483">
                    <i class="bi bi-headphones"></i>
                    <span>headphones</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62484">
                    <i class="bi bi-headset"></i>
                    <span>headset</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62485">
                    <i class="bi bi-heart-fill"></i>
                    <span>heart-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62486">
                    <i class="bi bi-heart-half"></i>
                    <span>heart-half</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62487">
                    <i class="bi bi-heart"></i>
                    <span>heart</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62488">
                    <i class="bi bi-heptagon-fill"></i>
                    <span>heptagon-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62489">
                    <i class="bi bi-heptagon-half"></i>
                    <span>heptagon-half</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62490">
                    <i class="bi bi-heptagon"></i>
                    <span>heptagon</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62491">
                    <i class="bi bi-hexagon-fill"></i>
                    <span>hexagon-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62492">
                    <i class="bi bi-hexagon-half"></i>
                    <span>hexagon-half</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62493">
                    <i class="bi bi-hexagon"></i>
                    <span>hexagon</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62494">
                    <i class="bi bi-hourglass-bottom"></i>
                    <span>hourglass-bottom</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62495">
                    <i class="bi bi-hourglass-split"></i>
                    <span>hourglass-split</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62496">
                    <i class="bi bi-hourglass-top"></i>
                    <span>hourglass-top</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62497">
                    <i class="bi bi-hourglass"></i>
                    <span>hourglass</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62498">
                    <i class="bi bi-house-door-fill"></i>
                    <span>house-door-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62499">
                    <i class="bi bi-house-door"></i>
                    <span>house-door</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62500">
                    <i class="bi bi-house-fill"></i>
                    <span>house-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62501">
                    <i class="bi bi-house"></i>
                    <span>house</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62502">
                    <i class="bi bi-hr"></i>
                    <span>hr</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62503">
                    <i class="bi bi-hurricane"></i>
                    <span>hurricane</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62504">
                    <i class="bi bi-image-alt"></i>
                    <span>image-alt</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62505">
                    <i class="bi bi-image-fill"></i>
                    <span>image-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62506">
                    <i class="bi bi-image"></i>
                    <span>image</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62507">
                    <i class="bi bi-images"></i>
                    <span>images</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62508">
                    <i class="bi bi-inbox-fill"></i>
                    <span>inbox-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62509">
                    <i class="bi bi-inbox"></i>
                    <span>inbox</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62510">
                    <i class="bi bi-inboxes-fill"></i>
                    <span>inboxes-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62511">
                    <i class="bi bi-inboxes"></i>
                    <span>inboxes</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62512">
                    <i class="bi bi-info-circle-fill"></i>
                    <span>info-circle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62513">
                    <i class="bi bi-info-circle"></i>
                    <span>info-circle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62514">
                    <i class="bi bi-info-square-fill"></i>
                    <span>info-square-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62515">
                    <i class="bi bi-info-square"></i>
                    <span>info-square</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62516">
                    <i class="bi bi-info"></i>
                    <span>info</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62517">
                    <i class="bi bi-input-cursor-text"></i>
                    <span>input-cursor-text</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62518">
                    <i class="bi bi-input-cursor"></i>
                    <span>input-cursor</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62519">
                    <i class="bi bi-instagram"></i>
                    <span>instagram</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62520">
                    <i class="bi bi-intersect"></i>
                    <span>intersect</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62521">
                    <i class="bi bi-journal-album"></i>
                    <span>journal-album</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62522">
                    <i class="bi bi-journal-arrow-down"></i>
                    <span>journal-arrow-down</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62523">
                    <i class="bi bi-journal-arrow-up"></i>
                    <span>journal-arrow-up</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62524">
                    <i class="bi bi-journal-bookmark-fill"></i>
                    <span>journal-bookmark-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62525">
                    <i class="bi bi-journal-bookmark"></i>
                    <span>journal-bookmark</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62526">
                    <i class="bi bi-journal-check"></i>
                    <span>journal-check</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62527">
                    <i class="bi bi-journal-code"></i>
                    <span>journal-code</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62528">
                    <i class="bi bi-journal-medical"></i>
                    <span>journal-medical</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62529">
                    <i class="bi bi-journal-minus"></i>
                    <span>journal-minus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62530">
                    <i class="bi bi-journal-plus"></i>
                    <span>journal-plus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62531">
                    <i class="bi bi-journal-richtext"></i>
                    <span>journal-richtext</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62532">
                    <i class="bi bi-journal-text"></i>
                    <span>journal-text</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62533">
                    <i class="bi bi-journal-x"></i>
                    <span>journal-x</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62534">
                    <i class="bi bi-journal"></i>
                    <span>journal</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62535">
                    <i class="bi bi-journals"></i>
                    <span>journals</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62536">
                    <i class="bi bi-joystick"></i>
                    <span>joystick</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62537">
                    <i class="bi bi-justify-left"></i>
                    <span>justify-left</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62538">
                    <i class="bi bi-justify-right"></i>
                    <span>justify-right</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62539">
                    <i class="bi bi-justify"></i>
                    <span>justify</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62540">
                    <i class="bi bi-kanban-fill"></i>
                    <span>kanban-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62541">
                    <i class="bi bi-kanban"></i>
                    <span>kanban</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62542">
                    <i class="bi bi-key-fill"></i>
                    <span>key-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62543">
                    <i class="bi bi-key"></i>
                    <span>key</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62544">
                    <i class="bi bi-keyboard-fill"></i>
                    <span>keyboard-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62545">
                    <i class="bi bi-keyboard"></i>
                    <span>keyboard</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62546">
                    <i class="bi bi-ladder"></i>
                    <span>ladder</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62547">
                    <i class="bi bi-lamp-fill"></i>
                    <span>lamp-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62548">
                    <i class="bi bi-lamp"></i>
                    <span>lamp</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62549">
                    <i class="bi bi-laptop-fill"></i>
                    <span>laptop-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62550">
                    <i class="bi bi-laptop"></i>
                    <span>laptop</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62551">
                    <i class="bi bi-layer-backward"></i>
                    <span>layer-backward</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62552">
                    <i class="bi bi-layer-forward"></i>
                    <span>layer-forward</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62553">
                    <i class="bi bi-layers-fill"></i>
                    <span>layers-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62554">
                    <i class="bi bi-layers-half"></i>
                    <span>layers-half</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62555">
                    <i class="bi bi-layers"></i>
                    <span>layers</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62556">
                    <i class="bi bi-layout-sidebar-inset-reverse"></i>
                    <span>layout-sidebar-inset-reverse</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62557">
                    <i class="bi bi-layout-sidebar-inset"></i>
                    <span>layout-sidebar-inset</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62558">
                    <i class="bi bi-layout-sidebar-reverse"></i>
                    <span>layout-sidebar-reverse</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62559">
                    <i class="bi bi-layout-sidebar"></i>
                    <span>layout-sidebar</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62560">
                    <i class="bi bi-layout-split"></i>
                    <span>layout-split</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62561">
                    <i class="bi bi-layout-text-sidebar-reverse"></i>
                    <span>layout-text-sidebar-reverse</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62562">
                    <i class="bi bi-layout-text-sidebar"></i>
                    <span>layout-text-sidebar</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62563">
                    <i class="bi bi-layout-text-window-reverse"></i>
                    <span>layout-text-window-reverse</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62564">
                    <i class="bi bi-layout-text-window"></i>
                    <span>layout-text-window</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62565">
                    <i class="bi bi-layout-three-columns"></i>
                    <span>layout-three-columns</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62566">
                    <i class="bi bi-layout-wtf"></i>
                    <span>layout-wtf</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62567">
                    <i class="bi bi-life-preserver"></i>
                    <span>life-preserver</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62568">
                    <i class="bi bi-lightbulb-fill"></i>
                    <span>lightbulb-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62569">
                    <i class="bi bi-lightbulb-off-fill"></i>
                    <span>lightbulb-off-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62570">
                    <i class="bi bi-lightbulb-off"></i>
                    <span>lightbulb-off</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62571">
                    <i class="bi bi-lightbulb"></i>
                    <span>lightbulb</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62572">
                    <i class="bi bi-lightning-charge-fill"></i>
                    <span>lightning-charge-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62573">
                    <i class="bi bi-lightning-charge"></i>
                    <span>lightning-charge</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62574">
                    <i class="bi bi-lightning-fill"></i>
                    <span>lightning-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62575">
                    <i class="bi bi-lightning"></i>
                    <span>lightning</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62576">
                    <i class="bi bi-link-45deg"></i>
                    <span>link-45deg</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62577">
                    <i class="bi bi-link"></i>
                    <span>link</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62578">
                    <i class="bi bi-linkedin"></i>
                    <span>linkedin</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62579">
                    <i class="bi bi-list-check"></i>
                    <span>list-check</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62580">
                    <i class="bi bi-list-nested"></i>
                    <span>list-nested</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62581">
                    <i class="bi bi-list-ol"></i>
                    <span>list-ol</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62582">
                    <i class="bi bi-list-stars"></i>
                    <span>list-stars</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62583">
                    <i class="bi bi-list-task"></i>
                    <span>list-task</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62584">
                    <i class="bi bi-list-ul"></i>
                    <span>list-ul</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62585">
                    <i class="bi bi-list"></i>
                    <span>list</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62586">
                    <i class="bi bi-lock-fill"></i>
                    <span>lock-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62587">
                    <i class="bi bi-lock"></i>
                    <span>lock</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62588">
                    <i class="bi bi-mailbox"></i>
                    <span>mailbox</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62589">
                    <i class="bi bi-mailbox2"></i>
                    <span>mailbox2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62590">
                    <i class="bi bi-map-fill"></i>
                    <span>map-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62591">
                    <i class="bi bi-map"></i>
                    <span>map</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62592">
                    <i class="bi bi-markdown-fill"></i>
                    <span>markdown-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62593">
                    <i class="bi bi-markdown"></i>
                    <span>markdown</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62594">
                    <i class="bi bi-mask"></i>
                    <span>mask</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62595">
                    <i class="bi bi-megaphone-fill"></i>
                    <span>megaphone-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62596">
                    <i class="bi bi-megaphone"></i>
                    <span>megaphone</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62597">
                    <i class="bi bi-menu-app-fill"></i>
                    <span>menu-app-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62598">
                    <i class="bi bi-menu-app"></i>
                    <span>menu-app</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62599">
                    <i class="bi bi-menu-button-fill"></i>
                    <span>menu-button-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62600">
                    <i class="bi bi-menu-button-wide-fill"></i>
                    <span>menu-button-wide-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62601">
                    <i class="bi bi-menu-button-wide"></i>
                    <span>menu-button-wide</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62602">
                    <i class="bi bi-menu-button"></i>
                    <span>menu-button</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62603">
                    <i class="bi bi-menu-down"></i>
                    <span>menu-down</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62604">
                    <i class="bi bi-menu-up"></i>
                    <span>menu-up</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62605">
                    <i class="bi bi-mic-fill"></i>
                    <span>mic-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62606">
                    <i class="bi bi-mic-mute-fill"></i>
                    <span>mic-mute-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62607">
                    <i class="bi bi-mic-mute"></i>
                    <span>mic-mute</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62608">
                    <i class="bi bi-mic"></i>
                    <span>mic</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62609">
                    <i class="bi bi-minecart-loaded"></i>
                    <span>minecart-loaded</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62610">
                    <i class="bi bi-minecart"></i>
                    <span>minecart</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62611">
                    <i class="bi bi-moisture"></i>
                    <span>moisture</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62612">
                    <i class="bi bi-moon-fill"></i>
                    <span>moon-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62613">
                    <i class="bi bi-moon-stars-fill"></i>
                    <span>moon-stars-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62614">
                    <i class="bi bi-moon-stars"></i>
                    <span>moon-stars</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62615">
                    <i class="bi bi-moon"></i>
                    <span>moon</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62616">
                    <i class="bi bi-mouse-fill"></i>
                    <span>mouse-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62617">
                    <i class="bi bi-mouse"></i>
                    <span>mouse</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62618">
                    <i class="bi bi-mouse2-fill"></i>
                    <span>mouse2-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62619">
                    <i class="bi bi-mouse2"></i>
                    <span>mouse2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62620">
                    <i class="bi bi-mouse3-fill"></i>
                    <span>mouse3-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62621">
                    <i class="bi bi-mouse3"></i>
                    <span>mouse3</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62622">
                    <i class="bi bi-music-note-beamed"></i>
                    <span>music-note-beamed</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62623">
                    <i class="bi bi-music-note-list"></i>
                    <span>music-note-list</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62624">
                    <i class="bi bi-music-note"></i>
                    <span>music-note</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62625">
                    <i class="bi bi-music-player-fill"></i>
                    <span>music-player-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62626">
                    <i class="bi bi-music-player"></i>
                    <span>music-player</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62627">
                    <i class="bi bi-newspaper"></i>
                    <span>newspaper</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62628">
                    <i class="bi bi-node-minus-fill"></i>
                    <span>node-minus-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62629">
                    <i class="bi bi-node-minus"></i>
                    <span>node-minus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62630">
                    <i class="bi bi-node-plus-fill"></i>
                    <span>node-plus-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62631">
                    <i class="bi bi-node-plus"></i>
                    <span>node-plus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62632">
                    <i class="bi bi-nut-fill"></i>
                    <span>nut-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62633">
                    <i class="bi bi-nut"></i>
                    <span>nut</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62634">
                    <i class="bi bi-octagon-fill"></i>
                    <span>octagon-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62635">
                    <i class="bi bi-octagon-half"></i>
                    <span>octagon-half</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62636">
                    <i class="bi bi-octagon"></i>
                    <span>octagon</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62637">
                    <i class="bi bi-option"></i>
                    <span>option</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62638">
                    <i class="bi bi-outlet"></i>
                    <span>outlet</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62639">
                    <i class="bi bi-paint-bucket"></i>
                    <span>paint-bucket</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62640">
                    <i class="bi bi-palette-fill"></i>
                    <span>palette-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62641">
                    <i class="bi bi-palette"></i>
                    <span>palette</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62642">
                    <i class="bi bi-palette2"></i>
                    <span>palette2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62643">
                    <i class="bi bi-paperclip"></i>
                    <span>paperclip</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62644">
                    <i class="bi bi-paragraph"></i>
                    <span>paragraph</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62645">
                    <i class="bi bi-patch-check-fill"></i>
                    <span>patch-check-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62646">
                    <i class="bi bi-patch-check"></i>
                    <span>patch-check</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62647">
                    <i class="bi bi-patch-exclamation-fill"></i>
                    <span>patch-exclamation-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62648">
                    <i class="bi bi-patch-exclamation"></i>
                    <span>patch-exclamation</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62649">
                    <i class="bi bi-patch-minus-fill"></i>
                    <span>patch-minus-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62650">
                    <i class="bi bi-patch-minus"></i>
                    <span>patch-minus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62651">
                    <i class="bi bi-patch-plus-fill"></i>
                    <span>patch-plus-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62652">
                    <i class="bi bi-patch-plus"></i>
                    <span>patch-plus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62653">
                    <i class="bi bi-patch-question-fill"></i>
                    <span>patch-question-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62654">
                    <i class="bi bi-patch-question"></i>
                    <span>patch-question</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62655">
                    <i class="bi bi-pause-btn-fill"></i>
                    <span>pause-btn-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62656">
                    <i class="bi bi-pause-btn"></i>
                    <span>pause-btn</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62657">
                    <i class="bi bi-pause-circle-fill"></i>
                    <span>pause-circle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62658">
                    <i class="bi bi-pause-circle"></i>
                    <span>pause-circle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62659">
                    <i class="bi bi-pause-fill"></i>
                    <span>pause-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62660">
                    <i class="bi bi-pause"></i>
                    <span>pause</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62661">
                    <i class="bi bi-peace-fill"></i>
                    <span>peace-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62662">
                    <i class="bi bi-peace"></i>
                    <span>peace</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62663">
                    <i class="bi bi-pen-fill"></i>
                    <span>pen-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62664">
                    <i class="bi bi-pen"></i>
                    <span>pen</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62665">
                    <i class="bi bi-pencil-fill"></i>
                    <span>pencil-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62666">
                    <i class="bi bi-pencil-square"></i>
                    <span>pencil-square</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62667">
                    <i class="bi bi-pencil"></i>
                    <span>pencil</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62668">
                    <i class="bi bi-pentagon-fill"></i>
                    <span>pentagon-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62669">
                    <i class="bi bi-pentagon-half"></i>
                    <span>pentagon-half</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62670">
                    <i class="bi bi-pentagon"></i>
                    <span>pentagon</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62671">
                    <i class="bi bi-people-fill"></i>
                    <span>people-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62672">
                    <i class="bi bi-people"></i>
                    <span>people</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62673">
                    <i class="bi bi-percent"></i>
                    <span>percent</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62674">
                    <i class="bi bi-person-badge-fill"></i>
                    <span>person-badge-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62675">
                    <i class="bi bi-person-badge"></i>
                    <span>person-badge</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62676">
                    <i class="bi bi-person-bounding-box"></i>
                    <span>person-bounding-box</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62677">
                    <i class="bi bi-person-check-fill"></i>
                    <span>person-check-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62678">
                    <i class="bi bi-person-check"></i>
                    <span>person-check</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62679">
                    <i class="bi bi-person-circle"></i>
                    <span>person-circle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62680">
                    <i class="bi bi-person-dash-fill"></i>
                    <span>person-dash-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62681">
                    <i class="bi bi-person-dash"></i>
                    <span>person-dash</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62682">
                    <i class="bi bi-person-fill"></i>
                    <span>person-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62683">
                    <i class="bi bi-person-lines-fill"></i>
                    <span>person-lines-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62684">
                    <i class="bi bi-person-plus-fill"></i>
                    <span>person-plus-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62685">
                    <i class="bi bi-person-plus"></i>
                    <span>person-plus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62686">
                    <i class="bi bi-person-square"></i>
                    <span>person-square</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62687">
                    <i class="bi bi-person-x-fill"></i>
                    <span>person-x-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62688">
                    <i class="bi bi-person-x"></i>
                    <span>person-x</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62689">
                    <i class="bi bi-person"></i>
                    <span>person</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62690">
                    <i class="bi bi-phone-fill"></i>
                    <span>phone-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62691">
                    <i class="bi bi-phone-landscape-fill"></i>
                    <span>phone-landscape-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62692">
                    <i class="bi bi-phone-landscape"></i>
                    <span>phone-landscape</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62693">
                    <i class="bi bi-phone-vibrate-fill"></i>
                    <span>phone-vibrate-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62694">
                    <i class="bi bi-phone-vibrate"></i>
                    <span>phone-vibrate</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62695">
                    <i class="bi bi-phone"></i>
                    <span>phone</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62696">
                    <i class="bi bi-pie-chart-fill"></i>
                    <span>pie-chart-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62697">
                    <i class="bi bi-pie-chart"></i>
                    <span>pie-chart</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62698">
                    <i class="bi bi-pin-angle-fill"></i>
                    <span>pin-angle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62699">
                    <i class="bi bi-pin-angle"></i>
                    <span>pin-angle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62700">
                    <i class="bi bi-pin-fill"></i>
                    <span>pin-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62701">
                    <i class="bi bi-pin"></i>
                    <span>pin</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62702">
                    <i class="bi bi-pip-fill"></i>
                    <span>pip-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62703">
                    <i class="bi bi-pip"></i>
                    <span>pip</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62704">
                    <i class="bi bi-play-btn-fill"></i>
                    <span>play-btn-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62705">
                    <i class="bi bi-play-btn"></i>
                    <span>play-btn</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62706">
                    <i class="bi bi-play-circle-fill"></i>
                    <span>play-circle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62707">
                    <i class="bi bi-play-circle"></i>
                    <span>play-circle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62708">
                    <i class="bi bi-play-fill"></i>
                    <span>play-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62709">
                    <i class="bi bi-play"></i>
                    <span>play</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62710">
                    <i class="bi bi-plug-fill"></i>
                    <span>plug-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62711">
                    <i class="bi bi-plug"></i>
                    <span>plug</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62712">
                    <i class="bi bi-plus-circle-dotted"></i>
                    <span>plus-circle-dotted</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62713">
                    <i class="bi bi-plus-circle-fill"></i>
                    <span>plus-circle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62714">
                    <i class="bi bi-plus-circle"></i>
                    <span>plus-circle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62715">
                    <i class="bi bi-plus-square-dotted"></i>
                    <span>plus-square-dotted</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62716">
                    <i class="bi bi-plus-square-fill"></i>
                    <span>plus-square-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62717">
                    <i class="bi bi-plus-square"></i>
                    <span>plus-square</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62718">
                    <i class="bi bi-plus"></i>
                    <span>plus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62719">
                    <i class="bi bi-power"></i>
                    <span>power</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62720">
                    <i class="bi bi-printer-fill"></i>
                    <span>printer-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62721">
                    <i class="bi bi-printer"></i>
                    <span>printer</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62722">
                    <i class="bi bi-puzzle-fill"></i>
                    <span>puzzle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62723">
                    <i class="bi bi-puzzle"></i>
                    <span>puzzle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62724">
                    <i class="bi bi-question-circle-fill"></i>
                    <span>question-circle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62725">
                    <i class="bi bi-question-circle"></i>
                    <span>question-circle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62726">
                    <i class="bi bi-question-diamond-fill"></i>
                    <span>question-diamond-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62727">
                    <i class="bi bi-question-diamond"></i>
                    <span>question-diamond</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62728">
                    <i class="bi bi-question-octagon-fill"></i>
                    <span>question-octagon-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62729">
                    <i class="bi bi-question-octagon"></i>
                    <span>question-octagon</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62730">
                    <i class="bi bi-question-square-fill"></i>
                    <span>question-square-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62731">
                    <i class="bi bi-question-square"></i>
                    <span>question-square</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62732">
                    <i class="bi bi-question"></i>
                    <span>question</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62733">
                    <i class="bi bi-rainbow"></i>
                    <span>rainbow</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62734">
                    <i class="bi bi-receipt-cutoff"></i>
                    <span>receipt-cutoff</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62735">
                    <i class="bi bi-receipt"></i>
                    <span>receipt</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62736">
                    <i class="bi bi-reception-0"></i>
                    <span>reception-0</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62737">
                    <i class="bi bi-reception-1"></i>
                    <span>reception-1</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62738">
                    <i class="bi bi-reception-2"></i>
                    <span>reception-2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62739">
                    <i class="bi bi-reception-3"></i>
                    <span>reception-3</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62740">
                    <i class="bi bi-reception-4"></i>
                    <span>reception-4</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62741">
                    <i class="bi bi-record-btn-fill"></i>
                    <span>record-btn-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62742">
                    <i class="bi bi-record-btn"></i>
                    <span>record-btn</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62743">
                    <i class="bi bi-record-circle-fill"></i>
                    <span>record-circle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62744">
                    <i class="bi bi-record-circle"></i>
                    <span>record-circle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62745">
                    <i class="bi bi-record-fill"></i>
                    <span>record-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62746">
                    <i class="bi bi-record"></i>
                    <span>record</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62747">
                    <i class="bi bi-record2-fill"></i>
                    <span>record2-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62748">
                    <i class="bi bi-record2"></i>
                    <span>record2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62749">
                    <i class="bi bi-reply-all-fill"></i>
                    <span>reply-all-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62750">
                    <i class="bi bi-reply-all"></i>
                    <span>reply-all</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62751">
                    <i class="bi bi-reply-fill"></i>
                    <span>reply-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62752">
                    <i class="bi bi-reply"></i>
                    <span>reply</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62753">
                    <i class="bi bi-rss-fill"></i>
                    <span>rss-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62754">
                    <i class="bi bi-rss"></i>
                    <span>rss</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62755">
                    <i class="bi bi-rulers"></i>
                    <span>rulers</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62756">
                    <i class="bi bi-save-fill"></i>
                    <span>save-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62757">
                    <i class="bi bi-save"></i>
                    <span>save</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62758">
                    <i class="bi bi-save2-fill"></i>
                    <span>save2-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62759">
                    <i class="bi bi-save2"></i>
                    <span>save2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62760">
                    <i class="bi bi-scissors"></i>
                    <span>scissors</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62761">
                    <i class="bi bi-screwdriver"></i>
                    <span>screwdriver</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62762">
                    <i class="bi bi-search"></i>
                    <span>search</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62763">
                    <i class="bi bi-segmented-nav"></i>
                    <span>segmented-nav</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62764">
                    <i class="bi bi-server"></i>
                    <span>server</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62765">
                    <i class="bi bi-share-fill"></i>
                    <span>share-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62766">
                    <i class="bi bi-share"></i>
                    <span>share</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62767">
                    <i class="bi bi-shield-check"></i>
                    <span>shield-check</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62768">
                    <i class="bi bi-shield-exclamation"></i>
                    <span>shield-exclamation</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62769">
                    <i class="bi bi-shield-fill-check"></i>
                    <span>shield-fill-check</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62770">
                    <i class="bi bi-shield-fill-exclamation"></i>
                    <span>shield-fill-exclamation</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62771">
                    <i class="bi bi-shield-fill-minus"></i>
                    <span>shield-fill-minus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62772">
                    <i class="bi bi-shield-fill-plus"></i>
                    <span>shield-fill-plus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62773">
                    <i class="bi bi-shield-fill-x"></i>
                    <span>shield-fill-x</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62774">
                    <i class="bi bi-shield-fill"></i>
                    <span>shield-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62775">
                    <i class="bi bi-shield-lock-fill"></i>
                    <span>shield-lock-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62776">
                    <i class="bi bi-shield-lock"></i>
                    <span>shield-lock</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62777">
                    <i class="bi bi-shield-minus"></i>
                    <span>shield-minus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62778">
                    <i class="bi bi-shield-plus"></i>
                    <span>shield-plus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62779">
                    <i class="bi bi-shield-shaded"></i>
                    <span>shield-shaded</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62780">
                    <i class="bi bi-shield-slash-fill"></i>
                    <span>shield-slash-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62781">
                    <i class="bi bi-shield-slash"></i>
                    <span>shield-slash</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62782">
                    <i class="bi bi-shield-x"></i>
                    <span>shield-x</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62783">
                    <i class="bi bi-shield"></i>
                    <span>shield</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62784">
                    <i class="bi bi-shift-fill"></i>
                    <span>shift-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62785">
                    <i class="bi bi-shift"></i>
                    <span>shift</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62786">
                    <i class="bi bi-shop-window"></i>
                    <span>shop-window</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62787">
                    <i class="bi bi-shop"></i>
                    <span>shop</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62788">
                    <i class="bi bi-shuffle"></i>
                    <span>shuffle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62789">
                    <i class="bi bi-signpost-2-fill"></i>
                    <span>signpost-2-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62790">
                    <i class="bi bi-signpost-2"></i>
                    <span>signpost-2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62791">
                    <i class="bi bi-signpost-fill"></i>
                    <span>signpost-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62792">
                    <i class="bi bi-signpost-split-fill"></i>
                    <span>signpost-split-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62793">
                    <i class="bi bi-signpost-split"></i>
                    <span>signpost-split</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62794">
                    <i class="bi bi-signpost"></i>
                    <span>signpost</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62795">
                    <i class="bi bi-sim-fill"></i>
                    <span>sim-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62796">
                    <i class="bi bi-sim"></i>
                    <span>sim</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62797">
                    <i class="bi bi-skip-backward-btn-fill"></i>
                    <span>skip-backward-btn-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62798">
                    <i class="bi bi-skip-backward-btn"></i>
                    <span>skip-backward-btn</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62799">
                    <i class="bi bi-skip-backward-circle-fill"></i>
                    <span>skip-backward-circle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62800">
                    <i class="bi bi-skip-backward-circle"></i>
                    <span>skip-backward-circle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62801">
                    <i class="bi bi-skip-backward-fill"></i>
                    <span>skip-backward-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62802">
                    <i class="bi bi-skip-backward"></i>
                    <span>skip-backward</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62803">
                    <i class="bi bi-skip-end-btn-fill"></i>
                    <span>skip-end-btn-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62804">
                    <i class="bi bi-skip-end-btn"></i>
                    <span>skip-end-btn</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62805">
                    <i class="bi bi-skip-end-circle-fill"></i>
                    <span>skip-end-circle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62806">
                    <i class="bi bi-skip-end-circle"></i>
                    <span>skip-end-circle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62807">
                    <i class="bi bi-skip-end-fill"></i>
                    <span>skip-end-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62808">
                    <i class="bi bi-skip-end"></i>
                    <span>skip-end</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62809">
                    <i class="bi bi-skip-forward-btn-fill"></i>
                    <span>skip-forward-btn-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62810">
                    <i class="bi bi-skip-forward-btn"></i>
                    <span>skip-forward-btn</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62811">
                    <i class="bi bi-skip-forward-circle-fill"></i>
                    <span>skip-forward-circle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62812">
                    <i class="bi bi-skip-forward-circle"></i>
                    <span>skip-forward-circle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62813">
                    <i class="bi bi-skip-forward-fill"></i>
                    <span>skip-forward-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62814">
                    <i class="bi bi-skip-forward"></i>
                    <span>skip-forward</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62815">
                    <i class="bi bi-skip-start-btn-fill"></i>
                    <span>skip-start-btn-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62816">
                    <i class="bi bi-skip-start-btn"></i>
                    <span>skip-start-btn</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62817">
                    <i class="bi bi-skip-start-circle-fill"></i>
                    <span>skip-start-circle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62818">
                    <i class="bi bi-skip-start-circle"></i>
                    <span>skip-start-circle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62819">
                    <i class="bi bi-skip-start-fill"></i>
                    <span>skip-start-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62820">
                    <i class="bi bi-skip-start"></i>
                    <span>skip-start</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62821">
                    <i class="bi bi-slack"></i>
                    <span>slack</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62822">
                    <i class="bi bi-slash-circle-fill"></i>
                    <span>slash-circle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62823">
                    <i class="bi bi-slash-circle"></i>
                    <span>slash-circle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62824">
                    <i class="bi bi-slash-square-fill"></i>
                    <span>slash-square-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62825">
                    <i class="bi bi-slash-square"></i>
                    <span>slash-square</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62826">
                    <i class="bi bi-slash"></i>
                    <span>slash</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62827">
                    <i class="bi bi-sliders"></i>
                    <span>sliders</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62828">
                    <i class="bi bi-smartwatch"></i>
                    <span>smartwatch</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62829">
                    <i class="bi bi-snow"></i>
                    <span>snow</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62830">
                    <i class="bi bi-snow2"></i>
                    <span>snow2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62831">
                    <i class="bi bi-snow3"></i>
                    <span>snow3</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62832">
                    <i class="bi bi-sort-alpha-down-alt"></i>
                    <span>sort-alpha-down-alt</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62833">
                    <i class="bi bi-sort-alpha-down"></i>
                    <span>sort-alpha-down</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62834">
                    <i class="bi bi-sort-alpha-up-alt"></i>
                    <span>sort-alpha-up-alt</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62835">
                    <i class="bi bi-sort-alpha-up"></i>
                    <span>sort-alpha-up</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62836">
                    <i class="bi bi-sort-down-alt"></i>
                    <span>sort-down-alt</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62837">
                    <i class="bi bi-sort-down"></i>
                    <span>sort-down</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62838">
                    <i class="bi bi-sort-numeric-down-alt"></i>
                    <span>sort-numeric-down-alt</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62839">
                    <i class="bi bi-sort-numeric-down"></i>
                    <span>sort-numeric-down</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62840">
                    <i class="bi bi-sort-numeric-up-alt"></i>
                    <span>sort-numeric-up-alt</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62841">
                    <i class="bi bi-sort-numeric-up"></i>
                    <span>sort-numeric-up</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62842">
                    <i class="bi bi-sort-up-alt"></i>
                    <span>sort-up-alt</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62843">
                    <i class="bi bi-sort-up"></i>
                    <span>sort-up</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62844">
                    <i class="bi bi-soundwave"></i>
                    <span>soundwave</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62845">
                    <i class="bi bi-speaker-fill"></i>
                    <span>speaker-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62846">
                    <i class="bi bi-speaker"></i>
                    <span>speaker</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62847">
                    <i class="bi bi-speedometer"></i>
                    <span>speedometer</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62848">
                    <i class="bi bi-speedometer2"></i>
                    <span>speedometer2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62849">
                    <i class="bi bi-spellcheck"></i>
                    <span>spellcheck</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62850">
                    <i class="bi bi-square-fill"></i>
                    <span>square-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62851">
                    <i class="bi bi-square-half"></i>
                    <span>square-half</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62852">
                    <i class="bi bi-square"></i>
                    <span>square</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62853">
                    <i class="bi bi-stack"></i>
                    <span>stack</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62854">
                    <i class="bi bi-star-fill"></i>
                    <span>star-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62855">
                    <i class="bi bi-star-half"></i>
                    <span>star-half</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62856">
                    <i class="bi bi-star"></i>
                    <span>star</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62857">
                    <i class="bi bi-stars"></i>
                    <span>stars</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62858">
                    <i class="bi bi-stickies-fill"></i>
                    <span>stickies-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62859">
                    <i class="bi bi-stickies"></i>
                    <span>stickies</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62860">
                    <i class="bi bi-sticky-fill"></i>
                    <span>sticky-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62861">
                    <i class="bi bi-sticky"></i>
                    <span>sticky</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62862">
                    <i class="bi bi-stop-btn-fill"></i>
                    <span>stop-btn-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62863">
                    <i class="bi bi-stop-btn"></i>
                    <span>stop-btn</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62864">
                    <i class="bi bi-stop-circle-fill"></i>
                    <span>stop-circle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62865">
                    <i class="bi bi-stop-circle"></i>
                    <span>stop-circle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62866">
                    <i class="bi bi-stop-fill"></i>
                    <span>stop-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62867">
                    <i class="bi bi-stop"></i>
                    <span>stop</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62868">
                    <i class="bi bi-stoplights-fill"></i>
                    <span>stoplights-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62869">
                    <i class="bi bi-stoplights"></i>
                    <span>stoplights</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62870">
                    <i class="bi bi-stopwatch-fill"></i>
                    <span>stopwatch-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62871">
                    <i class="bi bi-stopwatch"></i>
                    <span>stopwatch</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62872">
                    <i class="bi bi-subtract"></i>
                    <span>subtract</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62873">
                    <i class="bi bi-suit-club-fill"></i>
                    <span>suit-club-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62874">
                    <i class="bi bi-suit-club"></i>
                    <span>suit-club</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62875">
                    <i class="bi bi-suit-diamond-fill"></i>
                    <span>suit-diamond-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62876">
                    <i class="bi bi-suit-diamond"></i>
                    <span>suit-diamond</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62877">
                    <i class="bi bi-suit-heart-fill"></i>
                    <span>suit-heart-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62878">
                    <i class="bi bi-suit-heart"></i>
                    <span>suit-heart</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62879">
                    <i class="bi bi-suit-spade-fill"></i>
                    <span>suit-spade-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62880">
                    <i class="bi bi-suit-spade"></i>
                    <span>suit-spade</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62881">
                    <i class="bi bi-sun-fill"></i>
                    <span>sun-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62882">
                    <i class="bi bi-sun"></i>
                    <span>sun</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62883">
                    <i class="bi bi-sunglasses"></i>
                    <span>sunglasses</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62884">
                    <i class="bi bi-sunrise-fill"></i>
                    <span>sunrise-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62885">
                    <i class="bi bi-sunrise"></i>
                    <span>sunrise</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62886">
                    <i class="bi bi-sunset-fill"></i>
                    <span>sunset-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62887">
                    <i class="bi bi-sunset"></i>
                    <span>sunset</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62888">
                    <i class="bi bi-symmetry-horizontal"></i>
                    <span>symmetry-horizontal</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62889">
                    <i class="bi bi-symmetry-vertical"></i>
                    <span>symmetry-vertical</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62890">
                    <i class="bi bi-table"></i>
                    <span>table</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62891">
                    <i class="bi bi-tablet-fill"></i>
                    <span>tablet-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62892">
                    <i class="bi bi-tablet-landscape-fill"></i>
                    <span>tablet-landscape-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62893">
                    <i class="bi bi-tablet-landscape"></i>
                    <span>tablet-landscape</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62894">
                    <i class="bi bi-tablet"></i>
                    <span>tablet</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62895">
                    <i class="bi bi-tag-fill"></i>
                    <span>tag-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62896">
                    <i class="bi bi-tag"></i>
                    <span>tag</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62897">
                    <i class="bi bi-tags-fill"></i>
                    <span>tags-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62898">
                    <i class="bi bi-tags"></i>
                    <span>tags</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62899">
                    <i class="bi bi-telegram"></i>
                    <span>telegram</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62900">
                    <i class="bi bi-telephone-fill"></i>
                    <span>telephone-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62901">
                    <i class="bi bi-telephone-forward-fill"></i>
                    <span>telephone-forward-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62902">
                    <i class="bi bi-telephone-forward"></i>
                    <span>telephone-forward</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62903">
                    <i class="bi bi-telephone-inbound-fill"></i>
                    <span>telephone-inbound-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62904">
                    <i class="bi bi-telephone-inbound"></i>
                    <span>telephone-inbound</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62905">
                    <i class="bi bi-telephone-minus-fill"></i>
                    <span>telephone-minus-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62906">
                    <i class="bi bi-telephone-minus"></i>
                    <span>telephone-minus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62907">
                    <i class="bi bi-telephone-outbound-fill"></i>
                    <span>telephone-outbound-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62908">
                    <i class="bi bi-telephone-outbound"></i>
                    <span>telephone-outbound</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62909">
                    <i class="bi bi-telephone-plus-fill"></i>
                    <span>telephone-plus-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62910">
                    <i class="bi bi-telephone-plus"></i>
                    <span>telephone-plus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62911">
                    <i class="bi bi-telephone-x-fill"></i>
                    <span>telephone-x-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62912">
                    <i class="bi bi-telephone-x"></i>
                    <span>telephone-x</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62913">
                    <i class="bi bi-telephone"></i>
                    <span>telephone</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62914">
                    <i class="bi bi-terminal-fill"></i>
                    <span>terminal-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62915">
                    <i class="bi bi-terminal"></i>
                    <span>terminal</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62916">
                    <i class="bi bi-text-center"></i>
                    <span>text-center</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62917">
                    <i class="bi bi-text-indent-left"></i>
                    <span>text-indent-left</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62918">
                    <i class="bi bi-text-indent-right"></i>
                    <span>text-indent-right</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62919">
                    <i class="bi bi-text-left"></i>
                    <span>text-left</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62920">
                    <i class="bi bi-text-paragraph"></i>
                    <span>text-paragraph</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62921">
                    <i class="bi bi-text-right"></i>
                    <span>text-right</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62922">
                    <i class="bi bi-textarea-resize"></i>
                    <span>textarea-resize</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62923">
                    <i class="bi bi-textarea-t"></i>
                    <span>textarea-t</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62924">
                    <i class="bi bi-textarea"></i>
                    <span>textarea</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62925">
                    <i class="bi bi-thermometer-half"></i>
                    <span>thermometer-half</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62926">
                    <i class="bi bi-thermometer-high"></i>
                    <span>thermometer-high</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62927">
                    <i class="bi bi-thermometer-low"></i>
                    <span>thermometer-low</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62928">
                    <i class="bi bi-thermometer-snow"></i>
                    <span>thermometer-snow</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62929">
                    <i class="bi bi-thermometer-sun"></i>
                    <span>thermometer-sun</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62930">
                    <i class="bi bi-thermometer"></i>
                    <span>thermometer</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62931">
                    <i class="bi bi-three-dots-vertical"></i>
                    <span>three-dots-vertical</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62932">
                    <i class="bi bi-three-dots"></i>
                    <span>three-dots</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62933">
                    <i class="bi bi-toggle-off"></i>
                    <span>toggle-off</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62934">
                    <i class="bi bi-toggle-on"></i>
                    <span>toggle-on</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62935">
                    <i class="bi bi-toggle2-off"></i>
                    <span>toggle2-off</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62936">
                    <i class="bi bi-toggle2-on"></i>
                    <span>toggle2-on</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62937">
                    <i class="bi bi-toggles"></i>
                    <span>toggles</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62938">
                    <i class="bi bi-toggles2"></i>
                    <span>toggles2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62939">
                    <i class="bi bi-tools"></i>
                    <span>tools</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62940">
                    <i class="bi bi-tornado"></i>
                    <span>tornado</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62941">
                    <i class="bi bi-trash-fill"></i>
                    <span>trash-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62942">
                    <i class="bi bi-trash"></i>
                    <span>trash</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62943">
                    <i class="bi bi-trash2-fill"></i>
                    <span>trash2-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62944">
                    <i class="bi bi-trash2"></i>
                    <span>trash2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62945">
                    <i class="bi bi-tree-fill"></i>
                    <span>tree-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62946">
                    <i class="bi bi-tree"></i>
                    <span>tree</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62947">
                    <i class="bi bi-triangle-fill"></i>
                    <span>triangle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62948">
                    <i class="bi bi-triangle-half"></i>
                    <span>triangle-half</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62949">
                    <i class="bi bi-triangle"></i>
                    <span>triangle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62950">
                    <i class="bi bi-trophy-fill"></i>
                    <span>trophy-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62951">
                    <i class="bi bi-trophy"></i>
                    <span>trophy</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62952">
                    <i class="bi bi-tropical-storm"></i>
                    <span>tropical-storm</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62953">
                    <i class="bi bi-truck-flatbed"></i>
                    <span>truck-flatbed</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62954">
                    <i class="bi bi-truck"></i>
                    <span>truck</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62955">
                    <i class="bi bi-tsunami"></i>
                    <span>tsunami</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62956">
                    <i class="bi bi-tv-fill"></i>
                    <span>tv-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62957">
                    <i class="bi bi-tv"></i>
                    <span>tv</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62958">
                    <i class="bi bi-twitch"></i>
                    <span>twitch</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62959">
                    <i class="bi bi-twitter"></i>
                    <span>twitter</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62960">
                    <i class="bi bi-type-bold"></i>
                    <span>type-bold</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62961">
                    <i class="bi bi-type-h1"></i>
                    <span>type-h1</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62962">
                    <i class="bi bi-type-h2"></i>
                    <span>type-h2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62963">
                    <i class="bi bi-type-h3"></i>
                    <span>type-h3</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62964">
                    <i class="bi bi-type-italic"></i>
                    <span>type-italic</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62965">
                    <i class="bi bi-type-strikethrough"></i>
                    <span>type-strikethrough</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62966">
                    <i class="bi bi-type-underline"></i>
                    <span>type-underline</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62967">
                    <i class="bi bi-type"></i>
                    <span>type</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62968">
                    <i class="bi bi-ui-checks-grid"></i>
                    <span>ui-checks-grid</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62969">
                    <i class="bi bi-ui-checks"></i>
                    <span>ui-checks</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62970">
                    <i class="bi bi-ui-radios-grid"></i>
                    <span>ui-radios-grid</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62971">
                    <i class="bi bi-ui-radios"></i>
                    <span>ui-radios</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62972">
                    <i class="bi bi-umbrella-fill"></i>
                    <span>umbrella-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62973">
                    <i class="bi bi-umbrella"></i>
                    <span>umbrella</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62974">
                    <i class="bi bi-union"></i>
                    <span>union</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62975">
                    <i class="bi bi-unlock-fill"></i>
                    <span>unlock-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62976">
                    <i class="bi bi-unlock"></i>
                    <span>unlock</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62977">
                    <i class="bi bi-upc-scan"></i>
                    <span>upc-scan</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62978">
                    <i class="bi bi-upc"></i>
                    <span>upc</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62979">
                    <i class="bi bi-upload"></i>
                    <span>upload</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62980">
                    <i class="bi bi-vector-pen"></i>
                    <span>vector-pen</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62981">
                    <i class="bi bi-view-list"></i>
                    <span>view-list</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62982">
                    <i class="bi bi-view-stacked"></i>
                    <span>view-stacked</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62983">
                    <i class="bi bi-vinyl-fill"></i>
                    <span>vinyl-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62984">
                    <i class="bi bi-vinyl"></i>
                    <span>vinyl</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62985">
                    <i class="bi bi-voicemail"></i>
                    <span>voicemail</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62986">
                    <i class="bi bi-volume-down-fill"></i>
                    <span>volume-down-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62987">
                    <i class="bi bi-volume-down"></i>
                    <span>volume-down</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62988">
                    <i class="bi bi-volume-mute-fill"></i>
                    <span>volume-mute-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62989">
                    <i class="bi bi-volume-mute"></i>
                    <span>volume-mute</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62990">
                    <i class="bi bi-volume-off-fill"></i>
                    <span>volume-off-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62991">
                    <i class="bi bi-volume-off"></i>
                    <span>volume-off</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62992">
                    <i class="bi bi-volume-up-fill"></i>
                    <span>volume-up-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62993">
                    <i class="bi bi-volume-up"></i>
                    <span>volume-up</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62994">
                    <i class="bi bi-vr"></i>
                    <span>vr</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62995">
                    <i class="bi bi-wallet-fill"></i>
                    <span>wallet-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62996">
                    <i class="bi bi-wallet"></i>
                    <span>wallet</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62997">
                    <i class="bi bi-wallet2"></i>
                    <span>wallet2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62998">
                    <i class="bi bi-watch"></i>
                    <span>watch</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_62999">
                    <i class="bi bi-water"></i>
                    <span>water</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63000">
                    <i class="bi bi-whatsapp"></i>
                    <span>whatsapp</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63001">
                    <i class="bi bi-wifi-1"></i>
                    <span>wifi-1</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63002">
                    <i class="bi bi-wifi-2"></i>
                    <span>wifi-2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63003">
                    <i class="bi bi-wifi-off"></i>
                    <span>wifi-off</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63004">
                    <i class="bi bi-wifi"></i>
                    <span>wifi</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63005">
                    <i class="bi bi-wind"></i>
                    <span>wind</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63006">
                    <i class="bi bi-window-dock"></i>
                    <span>window-dock</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63007">
                    <i class="bi bi-window-sidebar"></i>
                    <span>window-sidebar</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63008">
                    <i class="bi bi-window"></i>
                    <span>window</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63009">
                    <i class="bi bi-wrench"></i>
                    <span>wrench</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63010">
                    <i class="bi bi-x-circle-fill"></i>
                    <span>x-circle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63011">
                    <i class="bi bi-x-circle"></i>
                    <span>x-circle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63012">
                    <i class="bi bi-x-diamond-fill"></i>
                    <span>x-diamond-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63013">
                    <i class="bi bi-x-diamond"></i>
                    <span>x-diamond</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63014">
                    <i class="bi bi-x-octagon-fill"></i>
                    <span>x-octagon-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63015">
                    <i class="bi bi-x-octagon"></i>
                    <span>x-octagon</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63016">
                    <i class="bi bi-x-square-fill"></i>
                    <span>x-square-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63017">
                    <i class="bi bi-x-square"></i>
                    <span>x-square</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63018">
                    <i class="bi bi-x"></i>
                    <span>x</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63019">
                    <i class="bi bi-youtube"></i>
                    <span>youtube</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63020">
                    <i class="bi bi-zoom-in"></i>
                    <span>zoom-in</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63021">
                    <i class="bi bi-zoom-out"></i>
                    <span>zoom-out</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63022">
                    <i class="bi bi-bank"></i>
                    <span>bank</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63023">
                    <i class="bi bi-bank2"></i>
                    <span>bank2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63024">
                    <i class="bi bi-bell-slash-fill"></i>
                    <span>bell-slash-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63025">
                    <i class="bi bi-bell-slash"></i>
                    <span>bell-slash</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63026">
                    <i class="bi bi-cash-coin"></i>
                    <span>cash-coin</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63027">
                    <i class="bi bi-check-lg"></i>
                    <span>check-lg</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63028">
                    <i class="bi bi-coin"></i>
                    <span>coin</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63029">
                    <i class="bi bi-currency-bitcoin"></i>
                    <span>currency-bitcoin</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63030">
                    <i class="bi bi-currency-dollar"></i>
                    <span>currency-dollar</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63031">
                    <i class="bi bi-currency-euro"></i>
                    <span>currency-euro</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63032">
                    <i class="bi bi-currency-exchange"></i>
                    <span>currency-exchange</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63033">
                    <i class="bi bi-currency-pound"></i>
                    <span>currency-pound</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63034">
                    <i class="bi bi-currency-yen"></i>
                    <span>currency-yen</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63035">
                    <i class="bi bi-dash-lg"></i>
                    <span>dash-lg</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63036">
                    <i class="bi bi-exclamation-lg"></i>
                    <span>exclamation-lg</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63037">
                    <i class="bi bi-file-earmark-pdf-fill"></i>
                    <span>file-earmark-pdf-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63038">
                    <i class="bi bi-file-earmark-pdf"></i>
                    <span>file-earmark-pdf</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63039">
                    <i class="bi bi-file-pdf-fill"></i>
                    <span>file-pdf-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63040">
                    <i class="bi bi-file-pdf"></i>
                    <span>file-pdf</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63041">
                    <i class="bi bi-gender-ambiguous"></i>
                    <span>gender-ambiguous</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63042">
                    <i class="bi bi-gender-female"></i>
                    <span>gender-female</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63043">
                    <i class="bi bi-gender-male"></i>
                    <span>gender-male</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63044">
                    <i class="bi bi-gender-trans"></i>
                    <span>gender-trans</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63045">
                    <i class="bi bi-headset-vr"></i>
                    <span>headset-vr</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63046">
                    <i class="bi bi-info-lg"></i>
                    <span>info-lg</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63047">
                    <i class="bi bi-mastodon"></i>
                    <span>mastodon</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63048">
                    <i class="bi bi-messenger"></i>
                    <span>messenger</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63049">
                    <i class="bi bi-piggy-bank-fill"></i>
                    <span>piggy-bank-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63050">
                    <i class="bi bi-piggy-bank"></i>
                    <span>piggy-bank</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63051">
                    <i class="bi bi-pin-map-fill"></i>
                    <span>pin-map-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63052">
                    <i class="bi bi-pin-map"></i>
                    <span>pin-map</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63053">
                    <i class="bi bi-plus-lg"></i>
                    <span>plus-lg</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63054">
                    <i class="bi bi-question-lg"></i>
                    <span>question-lg</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63055">
                    <i class="bi bi-recycle"></i>
                    <span>recycle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63056">
                    <i class="bi bi-reddit"></i>
                    <span>reddit</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63057">
                    <i class="bi bi-safe-fill"></i>
                    <span>safe-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63058">
                    <i class="bi bi-safe2-fill"></i>
                    <span>safe2-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63059">
                    <i class="bi bi-safe2"></i>
                    <span>safe2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63060">
                    <i class="bi bi-sd-card-fill"></i>
                    <span>sd-card-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63061">
                    <i class="bi bi-sd-card"></i>
                    <span>sd-card</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63062">
                    <i class="bi bi-skype"></i>
                    <span>skype</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63063">
                    <i class="bi bi-slash-lg"></i>
                    <span>slash-lg</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63064">
                    <i class="bi bi-translate"></i>
                    <span>translate</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63065">
                    <i class="bi bi-x-lg"></i>
                    <span>x-lg</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63066">
                    <i class="bi bi-safe"></i>
                    <span>safe</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63067">
                    <i class="bi bi-apple"></i>
                    <span>apple</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63069">
                    <i class="bi bi-microsoft"></i>
                    <span>microsoft</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63070">
                    <i class="bi bi-windows"></i>
                    <span>windows</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63068">
                    <i class="bi bi-behance"></i>
                    <span>behance</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63071">
                    <i class="bi bi-dribbble"></i>
                    <span>dribbble</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63072">
                    <i class="bi bi-line"></i>
                    <span>line</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63073">
                    <i class="bi bi-medium"></i>
                    <span>medium</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63074">
                    <i class="bi bi-paypal"></i>
                    <span>paypal</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63075">
                    <i class="bi bi-pinterest"></i>
                    <span>pinterest</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63076">
                    <i class="bi bi-signal"></i>
                    <span>signal</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63077">
                    <i class="bi bi-snapchat"></i>
                    <span>snapchat</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63078">
                    <i class="bi bi-spotify"></i>
                    <span>spotify</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63079">
                    <i class="bi bi-stack-overflow"></i>
                    <span>stack-overflow</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63080">
                    <i class="bi bi-strava"></i>
                    <span>strava</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63081">
                    <i class="bi bi-wordpress"></i>
                    <span>wordpress</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63082">
                    <i class="bi bi-vimeo"></i>
                    <span>vimeo</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63083">
                    <i class="bi bi-activity"></i>
                    <span>activity</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63084">
                    <i class="bi bi-easel2-fill"></i>
                    <span>easel2-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63085">
                    <i class="bi bi-easel2"></i>
                    <span>easel2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63086">
                    <i class="bi bi-easel3-fill"></i>
                    <span>easel3-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63087">
                    <i class="bi bi-easel3"></i>
                    <span>easel3</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63088">
                    <i class="bi bi-fan"></i>
                    <span>fan</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63089">
                    <i class="bi bi-fingerprint"></i>
                    <span>fingerprint</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63090">
                    <i class="bi bi-graph-down-arrow"></i>
                    <span>graph-down-arrow</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63091">
                    <i class="bi bi-graph-up-arrow"></i>
                    <span>graph-up-arrow</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63092">
                    <i class="bi bi-hypnotize"></i>
                    <span>hypnotize</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63093">
                    <i class="bi bi-magic"></i>
                    <span>magic</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63094">
                    <i class="bi bi-person-rolodex"></i>
                    <span>person-rolodex</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63095">
                    <i class="bi bi-person-video"></i>
                    <span>person-video</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63096">
                    <i class="bi bi-person-video2"></i>
                    <span>person-video2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63097">
                    <i class="bi bi-person-video3"></i>
                    <span>person-video3</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63098">
                    <i class="bi bi-person-workspace"></i>
                    <span>person-workspace</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63099">
                    <i class="bi bi-radioactive"></i>
                    <span>radioactive</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63100">
                    <i class="bi bi-webcam-fill"></i>
                    <span>webcam-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63101">
                    <i class="bi bi-webcam"></i>
                    <span>webcam</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63102">
                    <i class="bi bi-yin-yang"></i>
                    <span>yin-yang</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63104">
                    <i class="bi bi-bandaid-fill"></i>
                    <span>bandaid-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63105">
                    <i class="bi bi-bandaid"></i>
                    <span>bandaid</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63106">
                    <i class="bi bi-bluetooth"></i>
                    <span>bluetooth</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63107">
                    <i class="bi bi-body-text"></i>
                    <span>body-text</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63108">
                    <i class="bi bi-boombox"></i>
                    <span>boombox</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63109">
                    <i class="bi bi-boxes"></i>
                    <span>boxes</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63110">
                    <i class="bi bi-dpad-fill"></i>
                    <span>dpad-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63111">
                    <i class="bi bi-dpad"></i>
                    <span>dpad</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63112">
                    <i class="bi bi-ear-fill"></i>
                    <span>ear-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63113">
                    <i class="bi bi-ear"></i>
                    <span>ear</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63114">
                    <i class="bi bi-envelope-check-1"></i>
                    <span>envelope-check-1</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63115">
                    <i class="bi bi-envelope-check-fill"></i>
                    <span>envelope-check-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63116">
                    <i class="bi bi-envelope-check"></i>
                    <span>envelope-check</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63117">
                    <i class="bi bi-envelope-dash-1"></i>
                    <span>envelope-dash-1</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63118">
                    <i class="bi bi-envelope-dash-fill"></i>
                    <span>envelope-dash-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63119">
                    <i class="bi bi-envelope-dash"></i>
                    <span>envelope-dash</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63120">
                    <i class="bi bi-envelope-exclamation-1"></i>
                    <span>envelope-exclamation-1</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63121">
                    <i class="bi bi-envelope-exclamation-fill"></i>
                    <span>envelope-exclamation-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63122">
                    <i class="bi bi-envelope-exclamation"></i>
                    <span>envelope-exclamation</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63123">
                    <i class="bi bi-envelope-plus-fill"></i>
                    <span>envelope-plus-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63124">
                    <i class="bi bi-envelope-plus"></i>
                    <span>envelope-plus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63125">
                    <i class="bi bi-envelope-slash-1"></i>
                    <span>envelope-slash-1</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63126">
                    <i class="bi bi-envelope-slash-fill"></i>
                    <span>envelope-slash-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63127">
                    <i class="bi bi-envelope-slash"></i>
                    <span>envelope-slash</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63128">
                    <i class="bi bi-envelope-x-1"></i>
                    <span>envelope-x-1</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63129">
                    <i class="bi bi-envelope-x-fill"></i>
                    <span>envelope-x-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63130">
                    <i class="bi bi-envelope-x"></i>
                    <span>envelope-x</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63131">
                    <i class="bi bi-explicit-fill"></i>
                    <span>explicit-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63132">
                    <i class="bi bi-explicit"></i>
                    <span>explicit</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63133">
                    <i class="bi bi-git"></i>
                    <span>git</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63134">
                    <i class="bi bi-infinity"></i>
                    <span>infinity</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63135">
                    <i class="bi bi-list-columns-reverse"></i>
                    <span>list-columns-reverse</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63136">
                    <i class="bi bi-list-columns"></i>
                    <span>list-columns</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63137">
                    <i class="bi bi-meta"></i>
                    <span>meta</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63138">
                    <i class="bi bi-mortorboard-fill"></i>
                    <span>mortorboard-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63139">
                    <i class="bi bi-mortorboard"></i>
                    <span>mortorboard</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63140">
                    <i class="bi bi-nintendo-switch"></i>
                    <span>nintendo-switch</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63141">
                    <i class="bi bi-pc-display-horizontal"></i>
                    <span>pc-display-horizontal</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63142">
                    <i class="bi bi-pc-display"></i>
                    <span>pc-display</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63143">
                    <i class="bi bi-pc-horizontal"></i>
                    <span>pc-horizontal</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63144">
                    <i class="bi bi-pc"></i>
                    <span>pc</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63145">
                    <i class="bi bi-playstation"></i>
                    <span>playstation</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63146">
                    <i class="bi bi-plus-slash-minus"></i>
                    <span>plus-slash-minus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63147">
                    <i class="bi bi-projector-fill"></i>
                    <span>projector-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63148">
                    <i class="bi bi-projector"></i>
                    <span>projector</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63149">
                    <i class="bi bi-qr-code-scan"></i>
                    <span>qr-code-scan</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63150">
                    <i class="bi bi-qr-code"></i>
                    <span>qr-code</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63151">
                    <i class="bi bi-quora"></i>
                    <span>quora</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63152">
                    <i class="bi bi-quote"></i>
                    <span>quote</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63153">
                    <i class="bi bi-robot"></i>
                    <span>robot</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63154">
                    <i class="bi bi-send-check-fill"></i>
                    <span>send-check-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63155">
                    <i class="bi bi-send-check"></i>
                    <span>send-check</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63156">
                    <i class="bi bi-send-dash-fill"></i>
                    <span>send-dash-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63157">
                    <i class="bi bi-send-dash"></i>
                    <span>send-dash</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63158">
                    <i class="bi bi-send-exclamation-1"></i>
                    <span>send-exclamation-1</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63159">
                    <i class="bi bi-send-exclamation-fill"></i>
                    <span>send-exclamation-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63160">
                    <i class="bi bi-send-exclamation"></i>
                    <span>send-exclamation</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63161">
                    <i class="bi bi-send-fill"></i>
                    <span>send-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63162">
                    <i class="bi bi-send-plus-fill"></i>
                    <span>send-plus-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63163">
                    <i class="bi bi-send-plus"></i>
                    <span>send-plus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63164">
                    <i class="bi bi-send-slash-fill"></i>
                    <span>send-slash-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63165">
                    <i class="bi bi-send-slash"></i>
                    <span>send-slash</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63166">
                    <i class="bi bi-send-x-fill"></i>
                    <span>send-x-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63167">
                    <i class="bi bi-send-x"></i>
                    <span>send-x</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63168">
                    <i class="bi bi-send"></i>
                    <span>send</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63169">
                    <i class="bi bi-steam"></i>
                    <span>steam</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63170">
                    <i class="bi bi-terminal-dash-1"></i>
                    <span>terminal-dash-1</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63171">
                    <i class="bi bi-terminal-dash"></i>
                    <span>terminal-dash</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63172">
                    <i class="bi bi-terminal-plus"></i>
                    <span>terminal-plus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63173">
                    <i class="bi bi-terminal-split"></i>
                    <span>terminal-split</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63174">
                    <i class="bi bi-ticket-detailed-fill"></i>
                    <span>ticket-detailed-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63175">
                    <i class="bi bi-ticket-detailed"></i>
                    <span>ticket-detailed</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63176">
                    <i class="bi bi-ticket-fill"></i>
                    <span>ticket-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63177">
                    <i class="bi bi-ticket-perforated-fill"></i>
                    <span>ticket-perforated-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63178">
                    <i class="bi bi-ticket-perforated"></i>
                    <span>ticket-perforated</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63179">
                    <i class="bi bi-ticket"></i>
                    <span>ticket</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63180">
                    <i class="bi bi-tiktok"></i>
                    <span>tiktok</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63181">
                    <i class="bi bi-window-dash"></i>
                    <span>window-dash</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63182">
                    <i class="bi bi-window-desktop"></i>
                    <span>window-desktop</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63183">
                    <i class="bi bi-window-fullscreen"></i>
                    <span>window-fullscreen</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63184">
                    <i class="bi bi-window-plus"></i>
                    <span>window-plus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63185">
                    <i class="bi bi-window-split"></i>
                    <span>window-split</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63186">
                    <i class="bi bi-window-stack"></i>
                    <span>window-stack</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63187">
                    <i class="bi bi-window-x"></i>
                    <span>window-x</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63188">
                    <i class="bi bi-xbox"></i>
                    <span>xbox</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63189">
                    <i class="bi bi-ethernet"></i>
                    <span>ethernet</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63190">
                    <i class="bi bi-hdmi-fill"></i>
                    <span>hdmi-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63191">
                    <i class="bi bi-hdmi"></i>
                    <span>hdmi</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63192">
                    <i class="bi bi-usb-c-fill"></i>
                    <span>usb-c-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63193">
                    <i class="bi bi-usb-c"></i>
                    <span>usb-c</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63194">
                    <i class="bi bi-usb-fill"></i>
                    <span>usb-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63195">
                    <i class="bi bi-usb-plug-fill"></i>
                    <span>usb-plug-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63196">
                    <i class="bi bi-usb-plug"></i>
                    <span>usb-plug</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63197">
                    <i class="bi bi-usb-symbol"></i>
                    <span>usb-symbol</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63198">
                    <i class="bi bi-usb"></i>
                    <span>usb</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63199">
                    <i class="bi bi-boombox-fill"></i>
                    <span>boombox-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63200">
                    <i class="bi bi-displayport-1"></i>
                    <span>displayport-1</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63201">
                    <i class="bi bi-displayport"></i>
                    <span>displayport</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63202">
                    <i class="bi bi-gpu-card"></i>
                    <span>gpu-card</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63203">
                    <i class="bi bi-memory"></i>
                    <span>memory</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63204">
                    <i class="bi bi-modem-fill"></i>
                    <span>modem-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63205">
                    <i class="bi bi-modem"></i>
                    <span>modem</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63206">
                    <i class="bi bi-motherboard-fill"></i>
                    <span>motherboard-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63207">
                    <i class="bi bi-motherboard"></i>
                    <span>motherboard</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63208">
                    <i class="bi bi-optical-audio-fill"></i>
                    <span>optical-audio-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63209">
                    <i class="bi bi-optical-audio"></i>
                    <span>optical-audio</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63210">
                    <i class="bi bi-pci-card"></i>
                    <span>pci-card</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63211">
                    <i class="bi bi-router-fill"></i>
                    <span>router-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63212">
                    <i class="bi bi-router"></i>
                    <span>router</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63213">
                    <i class="bi bi-ssd-fill"></i>
                    <span>ssd-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63214">
                    <i class="bi bi-ssd"></i>
                    <span>ssd</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63215">
                    <i class="bi bi-thunderbolt-fill"></i>
                    <span>thunderbolt-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63216">
                    <i class="bi bi-thunderbolt"></i>
                    <span>thunderbolt</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63217">
                    <i class="bi bi-usb-drive-fill"></i>
                    <span>usb-drive-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63218">
                    <i class="bi bi-usb-drive"></i>
                    <span>usb-drive</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63219">
                    <i class="bi bi-usb-micro-fill"></i>
                    <span>usb-micro-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63220">
                    <i class="bi bi-usb-micro"></i>
                    <span>usb-micro</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63221">
                    <i class="bi bi-usb-mini-fill"></i>
                    <span>usb-mini-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63222">
                    <i class="bi bi-usb-mini"></i>
                    <span>usb-mini</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63223">
                    <i class="bi bi-cloud-haze2"></i>
                    <span>cloud-haze2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63224">
                    <i class="bi bi-device-hdd-fill"></i>
                    <span>device-hdd-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63225">
                    <i class="bi bi-device-hdd"></i>
                    <span>device-hdd</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63226">
                    <i class="bi bi-device-ssd-fill"></i>
                    <span>device-ssd-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63227">
                    <i class="bi bi-device-ssd"></i>
                    <span>device-ssd</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63228">
                    <i class="bi bi-displayport-fill"></i>
                    <span>displayport-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63229">
                    <i class="bi bi-mortarboard-fill"></i>
                    <span>mortarboard-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63230">
                    <i class="bi bi-mortarboard"></i>
                    <span>mortarboard</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63231">
                    <i class="bi bi-terminal-x"></i>
                    <span>terminal-x</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63232">
                    <i class="bi bi-arrow-through-heart-fill"></i>
                    <span>arrow-through-heart-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63233">
                    <i class="bi bi-arrow-through-heart"></i>
                    <span>arrow-through-heart</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63234">
                    <i class="bi bi-badge-sd-fill"></i>
                    <span>badge-sd-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63235">
                    <i class="bi bi-badge-sd"></i>
                    <span>badge-sd</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63236">
                    <i class="bi bi-bag-heart-fill"></i>
                    <span>bag-heart-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63237">
                    <i class="bi bi-bag-heart"></i>
                    <span>bag-heart</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63238">
                    <i class="bi bi-balloon-fill"></i>
                    <span>balloon-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63239">
                    <i class="bi bi-balloon-heart-fill"></i>
                    <span>balloon-heart-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63240">
                    <i class="bi bi-balloon-heart"></i>
                    <span>balloon-heart</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63241">
                    <i class="bi bi-balloon"></i>
                    <span>balloon</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63242">
                    <i class="bi bi-box2-fill"></i>
                    <span>box2-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63243">
                    <i class="bi bi-box2-heart-fill"></i>
                    <span>box2-heart-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63244">
                    <i class="bi bi-box2-heart"></i>
                    <span>box2-heart</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63245">
                    <i class="bi bi-box2"></i>
                    <span>box2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63246">
                    <i class="bi bi-braces-asterisk"></i>
                    <span>braces-asterisk</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63247">
                    <i class="bi bi-calendar-heart-fill"></i>
                    <span>calendar-heart-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63248">
                    <i class="bi bi-calendar-heart"></i>
                    <span>calendar-heart</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63249">
                    <i class="bi bi-calendar2-heart-fill"></i>
                    <span>calendar2-heart-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63250">
                    <i class="bi bi-calendar2-heart"></i>
                    <span>calendar2-heart</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63251">
                    <i class="bi bi-chat-heart-fill"></i>
                    <span>chat-heart-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63252">
                    <i class="bi bi-chat-heart"></i>
                    <span>chat-heart</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63253">
                    <i class="bi bi-chat-left-heart-fill"></i>
                    <span>chat-left-heart-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63254">
                    <i class="bi bi-chat-left-heart"></i>
                    <span>chat-left-heart</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63255">
                    <i class="bi bi-chat-right-heart-fill"></i>
                    <span>chat-right-heart-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63256">
                    <i class="bi bi-chat-right-heart"></i>
                    <span>chat-right-heart</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63257">
                    <i class="bi bi-chat-square-heart-fill"></i>
                    <span>chat-square-heart-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63258">
                    <i class="bi bi-chat-square-heart"></i>
                    <span>chat-square-heart</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63259">
                    <i class="bi bi-clipboard-check-fill"></i>
                    <span>clipboard-check-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63260">
                    <i class="bi bi-clipboard-data-fill"></i>
                    <span>clipboard-data-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63261">
                    <i class="bi bi-clipboard-fill"></i>
                    <span>clipboard-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63262">
                    <i class="bi bi-clipboard-heart-fill"></i>
                    <span>clipboard-heart-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63263">
                    <i class="bi bi-clipboard-heart"></i>
                    <span>clipboard-heart</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63264">
                    <i class="bi bi-clipboard-minus-fill"></i>
                    <span>clipboard-minus-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63265">
                    <i class="bi bi-clipboard-plus-fill"></i>
                    <span>clipboard-plus-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63266">
                    <i class="bi bi-clipboard-pulse"></i>
                    <span>clipboard-pulse</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63267">
                    <i class="bi bi-clipboard-x-fill"></i>
                    <span>clipboard-x-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63268">
                    <i class="bi bi-clipboard2-check-fill"></i>
                    <span>clipboard2-check-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63269">
                    <i class="bi bi-clipboard2-check"></i>
                    <span>clipboard2-check</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63270">
                    <i class="bi bi-clipboard2-data-fill"></i>
                    <span>clipboard2-data-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63271">
                    <i class="bi bi-clipboard2-data"></i>
                    <span>clipboard2-data</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63272">
                    <i class="bi bi-clipboard2-fill"></i>
                    <span>clipboard2-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63273">
                    <i class="bi bi-clipboard2-heart-fill"></i>
                    <span>clipboard2-heart-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63274">
                    <i class="bi bi-clipboard2-heart"></i>
                    <span>clipboard2-heart</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63275">
                    <i class="bi bi-clipboard2-minus-fill"></i>
                    <span>clipboard2-minus-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63276">
                    <i class="bi bi-clipboard2-minus"></i>
                    <span>clipboard2-minus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63277">
                    <i class="bi bi-clipboard2-plus-fill"></i>
                    <span>clipboard2-plus-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63278">
                    <i class="bi bi-clipboard2-plus"></i>
                    <span>clipboard2-plus</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63279">
                    <i class="bi bi-clipboard2-pulse-fill"></i>
                    <span>clipboard2-pulse-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63280">
                    <i class="bi bi-clipboard2-pulse"></i>
                    <span>clipboard2-pulse</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63281">
                    <i class="bi bi-clipboard2-x-fill"></i>
                    <span>clipboard2-x-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63282">
                    <i class="bi bi-clipboard2-x"></i>
                    <span>clipboard2-x</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63283">
                    <i class="bi bi-clipboard2"></i>
                    <span>clipboard2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63284">
                    <i class="bi bi-emoji-kiss-fill"></i>
                    <span>emoji-kiss-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63285">
                    <i class="bi bi-emoji-kiss"></i>
                    <span>emoji-kiss</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63286">
                    <i class="bi bi-envelope-heart-fill"></i>
                    <span>envelope-heart-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63287">
                    <i class="bi bi-envelope-heart"></i>
                    <span>envelope-heart</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63288">
                    <i class="bi bi-envelope-open-heart-fill"></i>
                    <span>envelope-open-heart-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63289">
                    <i class="bi bi-envelope-open-heart"></i>
                    <span>envelope-open-heart</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63290">
                    <i class="bi bi-envelope-paper-fill"></i>
                    <span>envelope-paper-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63291">
                    <i class="bi bi-envelope-paper-heart-fill"></i>
                    <span>envelope-paper-heart-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63292">
                    <i class="bi bi-envelope-paper-heart"></i>
                    <span>envelope-paper-heart</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63293">
                    <i class="bi bi-envelope-paper"></i>
                    <span>envelope-paper</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63294">
                    <i class="bi bi-filetype-aac"></i>
                    <span>filetype-aac</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63295">
                    <i class="bi bi-filetype-ai"></i>
                    <span>filetype-ai</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63296">
                    <i class="bi bi-filetype-bmp"></i>
                    <span>filetype-bmp</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63297">
                    <i class="bi bi-filetype-cs"></i>
                    <span>filetype-cs</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63298">
                    <i class="bi bi-filetype-css"></i>
                    <span>filetype-css</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63299">
                    <i class="bi bi-filetype-csv"></i>
                    <span>filetype-csv</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63300">
                    <i class="bi bi-filetype-doc"></i>
                    <span>filetype-doc</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63301">
                    <i class="bi bi-filetype-docx"></i>
                    <span>filetype-docx</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63302">
                    <i class="bi bi-filetype-exe"></i>
                    <span>filetype-exe</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63303">
                    <i class="bi bi-filetype-gif"></i>
                    <span>filetype-gif</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63304">
                    <i class="bi bi-filetype-heic"></i>
                    <span>filetype-heic</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63305">
                    <i class="bi bi-filetype-html"></i>
                    <span>filetype-html</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63306">
                    <i class="bi bi-filetype-java"></i>
                    <span>filetype-java</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63307">
                    <i class="bi bi-filetype-jpg"></i>
                    <span>filetype-jpg</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63308">
                    <i class="bi bi-filetype-js"></i>
                    <span>filetype-js</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63309">
                    <i class="bi bi-filetype-jsx"></i>
                    <span>filetype-jsx</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63310">
                    <i class="bi bi-filetype-key"></i>
                    <span>filetype-key</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63311">
                    <i class="bi bi-filetype-m4p"></i>
                    <span>filetype-m4p</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63312">
                    <i class="bi bi-filetype-md"></i>
                    <span>filetype-md</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63313">
                    <i class="bi bi-filetype-mdx"></i>
                    <span>filetype-mdx</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63314">
                    <i class="bi bi-filetype-mov"></i>
                    <span>filetype-mov</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63315">
                    <i class="bi bi-filetype-mp3"></i>
                    <span>filetype-mp3</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63316">
                    <i class="bi bi-filetype-mp4"></i>
                    <span>filetype-mp4</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63317">
                    <i class="bi bi-filetype-otf"></i>
                    <span>filetype-otf</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63318">
                    <i class="bi bi-filetype-pdf"></i>
                    <span>filetype-pdf</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63319">
                    <i class="bi bi-filetype-php"></i>
                    <span>filetype-php</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63320">
                    <i class="bi bi-filetype-png"></i>
                    <span>filetype-png</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63321">
                    <i class="bi bi-filetype-ppt-1"></i>
                    <span>filetype-ppt-1</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63322">
                    <i class="bi bi-filetype-ppt"></i>
                    <span>filetype-ppt</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63323">
                    <i class="bi bi-filetype-psd"></i>
                    <span>filetype-psd</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63324">
                    <i class="bi bi-filetype-py"></i>
                    <span>filetype-py</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63325">
                    <i class="bi bi-filetype-raw"></i>
                    <span>filetype-raw</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63326">
                    <i class="bi bi-filetype-rb"></i>
                    <span>filetype-rb</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63327">
                    <i class="bi bi-filetype-sass"></i>
                    <span>filetype-sass</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63328">
                    <i class="bi bi-filetype-scss"></i>
                    <span>filetype-scss</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63329">
                    <i class="bi bi-filetype-sh"></i>
                    <span>filetype-sh</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63330">
                    <i class="bi bi-filetype-svg"></i>
                    <span>filetype-svg</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63331">
                    <i class="bi bi-filetype-tiff"></i>
                    <span>filetype-tiff</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63332">
                    <i class="bi bi-filetype-tsx"></i>
                    <span>filetype-tsx</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63333">
                    <i class="bi bi-filetype-ttf"></i>
                    <span>filetype-ttf</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63334">
                    <i class="bi bi-filetype-txt"></i>
                    <span>filetype-txt</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63335">
                    <i class="bi bi-filetype-wav"></i>
                    <span>filetype-wav</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63336">
                    <i class="bi bi-filetype-woff"></i>
                    <span>filetype-woff</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63337">
                    <i class="bi bi-filetype-xls-1"></i>
                    <span>filetype-xls-1</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63338">
                    <i class="bi bi-filetype-xls"></i>
                    <span>filetype-xls</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63339">
                    <i class="bi bi-filetype-xml"></i>
                    <span>filetype-xml</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63340">
                    <i class="bi bi-filetype-yml"></i>
                    <span>filetype-yml</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63341">
                    <i class="bi bi-heart-arrow"></i>
                    <span>heart-arrow</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63342">
                    <i class="bi bi-heart-pulse-fill"></i>
                    <span>heart-pulse-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63343">
                    <i class="bi bi-heart-pulse"></i>
                    <span>heart-pulse</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63344">
                    <i class="bi bi-heartbreak-fill"></i>
                    <span>heartbreak-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63345">
                    <i class="bi bi-heartbreak"></i>
                    <span>heartbreak</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63346">
                    <i class="bi bi-hearts"></i>
                    <span>hearts</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63347">
                    <i class="bi bi-hospital-fill"></i>
                    <span>hospital-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63348">
                    <i class="bi bi-hospital"></i>
                    <span>hospital</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63349">
                    <i class="bi bi-house-heart-fill"></i>
                    <span>house-heart-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63350">
                    <i class="bi bi-house-heart"></i>
                    <span>house-heart</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63351">
                    <i class="bi bi-incognito"></i>
                    <span>incognito</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63352">
                    <i class="bi bi-magnet-fill"></i>
                    <span>magnet-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63353">
                    <i class="bi bi-magnet"></i>
                    <span>magnet</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63354">
                    <i class="bi bi-person-heart"></i>
                    <span>person-heart</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63355">
                    <i class="bi bi-person-hearts"></i>
                    <span>person-hearts</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63356">
                    <i class="bi bi-phone-flip"></i>
                    <span>phone-flip</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63357">
                    <i class="bi bi-plugin"></i>
                    <span>plugin</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63358">
                    <i class="bi bi-postage-fill"></i>
                    <span>postage-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63359">
                    <i class="bi bi-postage-heart-fill"></i>
                    <span>postage-heart-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63360">
                    <i class="bi bi-postage-heart"></i>
                    <span>postage-heart</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63361">
                    <i class="bi bi-postage"></i>
                    <span>postage</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63362">
                    <i class="bi bi-postcard-fill"></i>
                    <span>postcard-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63363">
                    <i class="bi bi-postcard-heart-fill"></i>
                    <span>postcard-heart-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63364">
                    <i class="bi bi-postcard-heart"></i>
                    <span>postcard-heart</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63365">
                    <i class="bi bi-postcard"></i>
                    <span>postcard</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63366">
                    <i class="bi bi-search-heart-fill"></i>
                    <span>search-heart-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63367">
                    <i class="bi bi-search-heart"></i>
                    <span>search-heart</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63368">
                    <i class="bi bi-sliders2-vertical"></i>
                    <span>sliders2-vertical</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63369">
                    <i class="bi bi-sliders2"></i>
                    <span>sliders2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63370">
                    <i class="bi bi-trash3-fill"></i>
                    <span>trash3-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63371">
                    <i class="bi bi-trash3"></i>
                    <span>trash3</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63372">
                    <i class="bi bi-valentine"></i>
                    <span>valentine</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63373">
                    <i class="bi bi-valentine2"></i>
                    <span>valentine2</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63374">
                    <i class="bi bi-wrench-adjustable-circle-fill"></i>
                    <span>wrench-adjustable-circle-fill</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63375">
                    <i class="bi bi-wrench-adjustable-circle"></i>
                    <span>wrench-adjustable-circle</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63376">
                    <i class="bi bi-wrench-adjustable"></i>
                    <span>wrench-adjustable</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63377">
                    <i class="bi bi-filetype-json"></i>
                    <span>filetype-json</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63378">
                    <i class="bi bi-filetype-pptx"></i>
                    <span>filetype-pptx</span>
                </li>
                <li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_63379">
                    <i class="bi bi-filetype-xlsx"></i>
                    <span>filetype-xlsx</span>
                </li>
            </ul>

        </div>
    </div>
    <input type="text" id="clp">

    <button class="back_to_top"><i class="fas fa-angle-up"></i></button>

@push('css')
<link rel="stylesheet" href="{{ asset('backend/common/bootstrap/icons/bootstrap-icons.css') }}">
@endpush

@push('js')
<script>
    var all_icons = {
                "123": 63103,
                "alarm-fill": 61697,
                "alarm": 61698,
                "align-bottom": 61699,
                "align-center": 61700,
                "align-end": 61701,
                "align-middle": 61702,
                "align-start": 61703,
                "align-top": 61704,
                "alt": 61705,
                "app-indicator": 61706,
                "app": 61707,
                "archive-fill": 61708,
                "archive": 61709,
                "arrow-90deg-down": 61710,
                "arrow-90deg-left": 61711,
                "arrow-90deg-right": 61712,
                "arrow-90deg-up": 61713,
                "arrow-bar-down": 61714,
                "arrow-bar-left": 61715,
                "arrow-bar-right": 61716,
                "arrow-bar-up": 61717,
                "arrow-clockwise": 61718,
                "arrow-counterclockwise": 61719,
                "arrow-down-circle-fill": 61720,
                "arrow-down-circle": 61721,
                "arrow-down-left-circle-fill": 61722,
                "arrow-down-left-circle": 61723,
                "arrow-down-left-square-fill": 61724,
                "arrow-down-left-square": 61725,
                "arrow-down-left": 61726,
                "arrow-down-right-circle-fill": 61727,
                "arrow-down-right-circle": 61728,
                "arrow-down-right-square-fill": 61729,
                "arrow-down-right-square": 61730,
                "arrow-down-right": 61731,
                "arrow-down-short": 61732,
                "arrow-down-square-fill": 61733,
                "arrow-down-square": 61734,
                "arrow-down-up": 61735,
                "arrow-down": 61736,
                "arrow-left-circle-fill": 61737,
                "arrow-left-circle": 61738,
                "arrow-left-right": 61739,
                "arrow-left-short": 61740,
                "arrow-left-square-fill": 61741,
                "arrow-left-square": 61742,
                "arrow-left": 61743,
                "arrow-repeat": 61744,
                "arrow-return-left": 61745,
                "arrow-return-right": 61746,
                "arrow-right-circle-fill": 61747,
                "arrow-right-circle": 61748,
                "arrow-right-short": 61749,
                "arrow-right-square-fill": 61750,
                "arrow-right-square": 61751,
                "arrow-right": 61752,
                "arrow-up-circle-fill": 61753,
                "arrow-up-circle": 61754,
                "arrow-up-left-circle-fill": 61755,
                "arrow-up-left-circle": 61756,
                "arrow-up-left-square-fill": 61757,
                "arrow-up-left-square": 61758,
                "arrow-up-left": 61759,
                "arrow-up-right-circle-fill": 61760,
                "arrow-up-right-circle": 61761,
                "arrow-up-right-square-fill": 61762,
                "arrow-up-right-square": 61763,
                "arrow-up-right": 61764,
                "arrow-up-short": 61765,
                "arrow-up-square-fill": 61766,
                "arrow-up-square": 61767,
                "arrow-up": 61768,
                "arrows-angle-contract": 61769,
                "arrows-angle-expand": 61770,
                "arrows-collapse": 61771,
                "arrows-expand": 61772,
                "arrows-fullscreen": 61773,
                "arrows-move": 61774,
                "aspect-ratio-fill": 61775,
                "aspect-ratio": 61776,
                "asterisk": 61777,
                "at": 61778,
                "award-fill": 61779,
                "award": 61780,
                "back": 61781,
                "backspace-fill": 61782,
                "backspace-reverse-fill": 61783,
                "backspace-reverse": 61784,
                "backspace": 61785,
                "badge-3d-fill": 61786,
                "badge-3d": 61787,
                "badge-4k-fill": 61788,
                "badge-4k": 61789,
                "badge-8k-fill": 61790,
                "badge-8k": 61791,
                "badge-ad-fill": 61792,
                "badge-ad": 61793,
                "badge-ar-fill": 61794,
                "badge-ar": 61795,
                "badge-cc-fill": 61796,
                "badge-cc": 61797,
                "badge-hd-fill": 61798,
                "badge-hd": 61799,
                "badge-tm-fill": 61800,
                "badge-tm": 61801,
                "badge-vo-fill": 61802,
                "badge-vo": 61803,
                "badge-vr-fill": 61804,
                "badge-vr": 61805,
                "badge-wc-fill": 61806,
                "badge-wc": 61807,
                "bag-check-fill": 61808,
                "bag-check": 61809,
                "bag-dash-fill": 61810,
                "bag-dash": 61811,
                "bag-fill": 61812,
                "bag-plus-fill": 61813,
                "bag-plus": 61814,
                "bag-x-fill": 61815,
                "bag-x": 61816,
                "bag": 61817,
                "bar-chart-fill": 61818,
                "bar-chart-line-fill": 61819,
                "bar-chart-line": 61820,
                "bar-chart-steps": 61821,
                "bar-chart": 61822,
                "basket-fill": 61823,
                "basket": 61824,
                "basket2-fill": 61825,
                "basket2": 61826,
                "basket3-fill": 61827,
                "basket3": 61828,
                "battery-charging": 61829,
                "battery-full": 61830,
                "battery-half": 61831,
                "battery": 61832,
                "bell-fill": 61833,
                "bell": 61834,
                "bezier": 61835,
                "bezier2": 61836,
                "bicycle": 61837,
                "binoculars-fill": 61838,
                "binoculars": 61839,
                "blockquote-left": 61840,
                "blockquote-right": 61841,
                "book-fill": 61842,
                "book-half": 61843,
                "book": 61844,
                "bookmark-check-fill": 61845,
                "bookmark-check": 61846,
                "bookmark-dash-fill": 61847,
                "bookmark-dash": 61848,
                "bookmark-fill": 61849,
                "bookmark-heart-fill": 61850,
                "bookmark-heart": 61851,
                "bookmark-plus-fill": 61852,
                "bookmark-plus": 61853,
                "bookmark-star-fill": 61854,
                "bookmark-star": 61855,
                "bookmark-x-fill": 61856,
                "bookmark-x": 61857,
                "bookmark": 61858,
                "bookmarks-fill": 61859,
                "bookmarks": 61860,
                "bookshelf": 61861,
                "bootstrap-fill": 61862,
                "bootstrap-reboot": 61863,
                "bootstrap": 61864,
                "border-all": 61865,
                "border-bottom": 61866,
                "border-center": 61867,
                "border-inner": 61868,
                "border-left": 61869,
                "border-middle": 61870,
                "border-outer": 61871,
                "border-right": 61872,
                "border-style": 61873,
                "border-top": 61874,
                "border-width": 61875,
                "border": 61876,
                "bounding-box-circles": 61877,
                "bounding-box": 61878,
                "box-arrow-down-left": 61879,
                "box-arrow-down-right": 61880,
                "box-arrow-down": 61881,
                "box-arrow-in-down-left": 61882,
                "box-arrow-in-down-right": 61883,
                "box-arrow-in-down": 61884,
                "box-arrow-in-left": 61885,
                "box-arrow-in-right": 61886,
                "box-arrow-in-up-left": 61887,
                "box-arrow-in-up-right": 61888,
                "box-arrow-in-up": 61889,
                "box-arrow-left": 61890,
                "box-arrow-right": 61891,
                "box-arrow-up-left": 61892,
                "box-arrow-up-right": 61893,
                "box-arrow-up": 61894,
                "box-seam": 61895,
                "box": 61896,
                "braces": 61897,
                "bricks": 61898,
                "briefcase-fill": 61899,
                "briefcase": 61900,
                "brightness-alt-high-fill": 61901,
                "brightness-alt-high": 61902,
                "brightness-alt-low-fill": 61903,
                "brightness-alt-low": 61904,
                "brightness-high-fill": 61905,
                "brightness-high": 61906,
                "brightness-low-fill": 61907,
                "brightness-low": 61908,
                "broadcast-pin": 61909,
                "broadcast": 61910,
                "brush-fill": 61911,
                "brush": 61912,
                "bucket-fill": 61913,
                "bucket": 61914,
                "bug-fill": 61915,
                "bug": 61916,
                "building": 61917,
                "bullseye": 61918,
                "calculator-fill": 61919,
                "calculator": 61920,
                "calendar-check-fill": 61921,
                "calendar-check": 61922,
                "calendar-date-fill": 61923,
                "calendar-date": 61924,
                "calendar-day-fill": 61925,
                "calendar-day": 61926,
                "calendar-event-fill": 61927,
                "calendar-event": 61928,
                "calendar-fill": 61929,
                "calendar-minus-fill": 61930,
                "calendar-minus": 61931,
                "calendar-month-fill": 61932,
                "calendar-month": 61933,
                "calendar-plus-fill": 61934,
                "calendar-plus": 61935,
                "calendar-range-fill": 61936,
                "calendar-range": 61937,
                "calendar-week-fill": 61938,
                "calendar-week": 61939,
                "calendar-x-fill": 61940,
                "calendar-x": 61941,
                "calendar": 61942,
                "calendar2-check-fill": 61943,
                "calendar2-check": 61944,
                "calendar2-date-fill": 61945,
                "calendar2-date": 61946,
                "calendar2-day-fill": 61947,
                "calendar2-day": 61948,
                "calendar2-event-fill": 61949,
                "calendar2-event": 61950,
                "calendar2-fill": 61951,
                "calendar2-minus-fill": 61952,
                "calendar2-minus": 61953,
                "calendar2-month-fill": 61954,
                "calendar2-month": 61955,
                "calendar2-plus-fill": 61956,
                "calendar2-plus": 61957,
                "calendar2-range-fill": 61958,
                "calendar2-range": 61959,
                "calendar2-week-fill": 61960,
                "calendar2-week": 61961,
                "calendar2-x-fill": 61962,
                "calendar2-x": 61963,
                "calendar2": 61964,
                "calendar3-event-fill": 61965,
                "calendar3-event": 61966,
                "calendar3-fill": 61967,
                "calendar3-range-fill": 61968,
                "calendar3-range": 61969,
                "calendar3-week-fill": 61970,
                "calendar3-week": 61971,
                "calendar3": 61972,
                "calendar4-event": 61973,
                "calendar4-range": 61974,
                "calendar4-week": 61975,
                "calendar4": 61976,
                "camera-fill": 61977,
                "camera-reels-fill": 61978,
                "camera-reels": 61979,
                "camera-video-fill": 61980,
                "camera-video-off-fill": 61981,
                "camera-video-off": 61982,
                "camera-video": 61983,
                "camera": 61984,
                "camera2": 61985,
                "capslock-fill": 61986,
                "capslock": 61987,
                "card-checklist": 61988,
                "card-heading": 61989,
                "card-image": 61990,
                "card-list": 61991,
                "card-text": 61992,
                "caret-down-fill": 61993,
                "caret-down-square-fill": 61994,
                "caret-down-square": 61995,
                "caret-down": 61996,
                "caret-left-fill": 61997,
                "caret-left-square-fill": 61998,
                "caret-left-square": 61999,
                "caret-left": 62000,
                "caret-right-fill": 62001,
                "caret-right-square-fill": 62002,
                "caret-right-square": 62003,
                "caret-right": 62004,
                "caret-up-fill": 62005,
                "caret-up-square-fill": 62006,
                "caret-up-square": 62007,
                "caret-up": 62008,
                "cart-check-fill": 62009,
                "cart-check": 62010,
                "cart-dash-fill": 62011,
                "cart-dash": 62012,
                "cart-fill": 62013,
                "cart-plus-fill": 62014,
                "cart-plus": 62015,
                "cart-x-fill": 62016,
                "cart-x": 62017,
                "cart": 62018,
                "cart2": 62019,
                "cart3": 62020,
                "cart4": 62021,
                "cash-stack": 62022,
                "cash": 62023,
                "cast": 62024,
                "chat-dots-fill": 62025,
                "chat-dots": 62026,
                "chat-fill": 62027,
                "chat-left-dots-fill": 62028,
                "chat-left-dots": 62029,
                "chat-left-fill": 62030,
                "chat-left-quote-fill": 62031,
                "chat-left-quote": 62032,
                "chat-left-text-fill": 62033,
                "chat-left-text": 62034,
                "chat-left": 62035,
                "chat-quote-fill": 62036,
                "chat-quote": 62037,
                "chat-right-dots-fill": 62038,
                "chat-right-dots": 62039,
                "chat-right-fill": 62040,
                "chat-right-quote-fill": 62041,
                "chat-right-quote": 62042,
                "chat-right-text-fill": 62043,
                "chat-right-text": 62044,
                "chat-right": 62045,
                "chat-square-dots-fill": 62046,
                "chat-square-dots": 62047,
                "chat-square-fill": 62048,
                "chat-square-quote-fill": 62049,
                "chat-square-quote": 62050,
                "chat-square-text-fill": 62051,
                "chat-square-text": 62052,
                "chat-square": 62053,
                "chat-text-fill": 62054,
                "chat-text": 62055,
                "chat": 62056,
                "check-all": 62057,
                "check-circle-fill": 62058,
                "check-circle": 62059,
                "check-square-fill": 62060,
                "check-square": 62061,
                "check": 62062,
                "check2-all": 62063,
                "check2-circle": 62064,
                "check2-square": 62065,
                "check2": 62066,
                "chevron-bar-contract": 62067,
                "chevron-bar-down": 62068,
                "chevron-bar-expand": 62069,
                "chevron-bar-left": 62070,
                "chevron-bar-right": 62071,
                "chevron-bar-up": 62072,
                "chevron-compact-down": 62073,
                "chevron-compact-left": 62074,
                "chevron-compact-right": 62075,
                "chevron-compact-up": 62076,
                "chevron-contract": 62077,
                "chevron-double-down": 62078,
                "chevron-double-left": 62079,
                "chevron-double-right": 62080,
                "chevron-double-up": 62081,
                "chevron-down": 62082,
                "chevron-expand": 62083,
                "chevron-left": 62084,
                "chevron-right": 62085,
                "chevron-up": 62086,
                "circle-fill": 62087,
                "circle-half": 62088,
                "circle-square": 62089,
                "circle": 62090,
                "clipboard-check": 62091,
                "clipboard-data": 62092,
                "clipboard-minus": 62093,
                "clipboard-plus": 62094,
                "clipboard-x": 62095,
                "clipboard": 62096,
                "clock-fill": 62097,
                "clock-history": 62098,
                "clock": 62099,
                "cloud-arrow-down-fill": 62100,
                "cloud-arrow-down": 62101,
                "cloud-arrow-up-fill": 62102,
                "cloud-arrow-up": 62103,
                "cloud-check-fill": 62104,
                "cloud-check": 62105,
                "cloud-download-fill": 62106,
                "cloud-download": 62107,
                "cloud-drizzle-fill": 62108,
                "cloud-drizzle": 62109,
                "cloud-fill": 62110,
                "cloud-fog-fill": 62111,
                "cloud-fog": 62112,
                "cloud-fog2-fill": 62113,
                "cloud-fog2": 62114,
                "cloud-hail-fill": 62115,
                "cloud-hail": 62116,
                "cloud-haze-1": 62117,
                "cloud-haze-fill": 62118,
                "cloud-haze": 62119,
                "cloud-haze2-fill": 62120,
                "cloud-lightning-fill": 62121,
                "cloud-lightning-rain-fill": 62122,
                "cloud-lightning-rain": 62123,
                "cloud-lightning": 62124,
                "cloud-minus-fill": 62125,
                "cloud-minus": 62126,
                "cloud-moon-fill": 62127,
                "cloud-moon": 62128,
                "cloud-plus-fill": 62129,
                "cloud-plus": 62130,
                "cloud-rain-fill": 62131,
                "cloud-rain-heavy-fill": 62132,
                "cloud-rain-heavy": 62133,
                "cloud-rain": 62134,
                "cloud-slash-fill": 62135,
                "cloud-slash": 62136,
                "cloud-sleet-fill": 62137,
                "cloud-sleet": 62138,
                "cloud-snow-fill": 62139,
                "cloud-snow": 62140,
                "cloud-sun-fill": 62141,
                "cloud-sun": 62142,
                "cloud-upload-fill": 62143,
                "cloud-upload": 62144,
                "cloud": 62145,
                "clouds-fill": 62146,
                "clouds": 62147,
                "cloudy-fill": 62148,
                "cloudy": 62149,
                "code-slash": 62150,
                "code-square": 62151,
                "code": 62152,
                "collection-fill": 62153,
                "collection-play-fill": 62154,
                "collection-play": 62155,
                "collection": 62156,
                "columns-gap": 62157,
                "columns": 62158,
                "command": 62159,
                "compass-fill": 62160,
                "compass": 62161,
                "cone-striped": 62162,
                "cone": 62163,
                "controller": 62164,
                "cpu-fill": 62165,
                "cpu": 62166,
                "credit-card-2-back-fill": 62167,
                "credit-card-2-back": 62168,
                "credit-card-2-front-fill": 62169,
                "credit-card-2-front": 62170,
                "credit-card-fill": 62171,
                "credit-card": 62172,
                "crop": 62173,
                "cup-fill": 62174,
                "cup-straw": 62175,
                "cup": 62176,
                "cursor-fill": 62177,
                "cursor-text": 62178,
                "cursor": 62179,
                "dash-circle-dotted": 62180,
                "dash-circle-fill": 62181,
                "dash-circle": 62182,
                "dash-square-dotted": 62183,
                "dash-square-fill": 62184,
                "dash-square": 62185,
                "dash": 62186,
                "diagram-2-fill": 62187,
                "diagram-2": 62188,
                "diagram-3-fill": 62189,
                "diagram-3": 62190,
                "diamond-fill": 62191,
                "diamond-half": 62192,
                "diamond": 62193,
                "dice-1-fill": 62194,
                "dice-1": 62195,
                "dice-2-fill": 62196,
                "dice-2": 62197,
                "dice-3-fill": 62198,
                "dice-3": 62199,
                "dice-4-fill": 62200,
                "dice-4": 62201,
                "dice-5-fill": 62202,
                "dice-5": 62203,
                "dice-6-fill": 62204,
                "dice-6": 62205,
                "disc-fill": 62206,
                "disc": 62207,
                "discord": 62208,
                "display-fill": 62209,
                "display": 62210,
                "distribute-horizontal": 62211,
                "distribute-vertical": 62212,
                "door-closed-fill": 62213,
                "door-closed": 62214,
                "door-open-fill": 62215,
                "door-open": 62216,
                "dot": 62217,
                "download": 62218,
                "droplet-fill": 62219,
                "droplet-half": 62220,
                "droplet": 62221,
                "earbuds": 62222,
                "easel-fill": 62223,
                "easel": 62224,
                "egg-fill": 62225,
                "egg-fried": 62226,
                "egg": 62227,
                "eject-fill": 62228,
                "eject": 62229,
                "emoji-angry-fill": 62230,
                "emoji-angry": 62231,
                "emoji-dizzy-fill": 62232,
                "emoji-dizzy": 62233,
                "emoji-expressionless-fill": 62234,
                "emoji-expressionless": 62235,
                "emoji-frown-fill": 62236,
                "emoji-frown": 62237,
                "emoji-heart-eyes-fill": 62238,
                "emoji-heart-eyes": 62239,
                "emoji-laughing-fill": 62240,
                "emoji-laughing": 62241,
                "emoji-neutral-fill": 62242,
                "emoji-neutral": 62243,
                "emoji-smile-fill": 62244,
                "emoji-smile-upside-down-fill": 62245,
                "emoji-smile-upside-down": 62246,
                "emoji-smile": 62247,
                "emoji-sunglasses-fill": 62248,
                "emoji-sunglasses": 62249,
                "emoji-wink-fill": 62250,
                "emoji-wink": 62251,
                "envelope-fill": 62252,
                "envelope-open-fill": 62253,
                "envelope-open": 62254,
                "envelope": 62255,
                "eraser-fill": 62256,
                "eraser": 62257,
                "exclamation-circle-fill": 62258,
                "exclamation-circle": 62259,
                "exclamation-diamond-fill": 62260,
                "exclamation-diamond": 62261,
                "exclamation-octagon-fill": 62262,
                "exclamation-octagon": 62263,
                "exclamation-square-fill": 62264,
                "exclamation-square": 62265,
                "exclamation-triangle-fill": 62266,
                "exclamation-triangle": 62267,
                "exclamation": 62268,
                "exclude": 62269,
                "eye-fill": 62270,
                "eye-slash-fill": 62271,
                "eye-slash": 62272,
                "eye": 62273,
                "eyedropper": 62274,
                "eyeglasses": 62275,
                "facebook": 62276,
                "file-arrow-down-fill": 62277,
                "file-arrow-down": 62278,
                "file-arrow-up-fill": 62279,
                "file-arrow-up": 62280,
                "file-bar-graph-fill": 62281,
                "file-bar-graph": 62282,
                "file-binary-fill": 62283,
                "file-binary": 62284,
                "file-break-fill": 62285,
                "file-break": 62286,
                "file-check-fill": 62287,
                "file-check": 62288,
                "file-code-fill": 62289,
                "file-code": 62290,
                "file-diff-fill": 62291,
                "file-diff": 62292,
                "file-earmark-arrow-down-fill": 62293,
                "file-earmark-arrow-down": 62294,
                "file-earmark-arrow-up-fill": 62295,
                "file-earmark-arrow-up": 62296,
                "file-earmark-bar-graph-fill": 62297,
                "file-earmark-bar-graph": 62298,
                "file-earmark-binary-fill": 62299,
                "file-earmark-binary": 62300,
                "file-earmark-break-fill": 62301,
                "file-earmark-break": 62302,
                "file-earmark-check-fill": 62303,
                "file-earmark-check": 62304,
                "file-earmark-code-fill": 62305,
                "file-earmark-code": 62306,
                "file-earmark-diff-fill": 62307,
                "file-earmark-diff": 62308,
                "file-earmark-easel-fill": 62309,
                "file-earmark-easel": 62310,
                "file-earmark-excel-fill": 62311,
                "file-earmark-excel": 62312,
                "file-earmark-fill": 62313,
                "file-earmark-font-fill": 62314,
                "file-earmark-font": 62315,
                "file-earmark-image-fill": 62316,
                "file-earmark-image": 62317,
                "file-earmark-lock-fill": 62318,
                "file-earmark-lock": 62319,
                "file-earmark-lock2-fill": 62320,
                "file-earmark-lock2": 62321,
                "file-earmark-medical-fill": 62322,
                "file-earmark-medical": 62323,
                "file-earmark-minus-fill": 62324,
                "file-earmark-minus": 62325,
                "file-earmark-music-fill": 62326,
                "file-earmark-music": 62327,
                "file-earmark-person-fill": 62328,
                "file-earmark-person": 62329,
                "file-earmark-play-fill": 62330,
                "file-earmark-play": 62331,
                "file-earmark-plus-fill": 62332,
                "file-earmark-plus": 62333,
                "file-earmark-post-fill": 62334,
                "file-earmark-post": 62335,
                "file-earmark-ppt-fill": 62336,
                "file-earmark-ppt": 62337,
                "file-earmark-richtext-fill": 62338,
                "file-earmark-richtext": 62339,
                "file-earmark-ruled-fill": 62340,
                "file-earmark-ruled": 62341,
                "file-earmark-slides-fill": 62342,
                "file-earmark-slides": 62343,
                "file-earmark-spreadsheet-fill": 62344,
                "file-earmark-spreadsheet": 62345,
                "file-earmark-text-fill": 62346,
                "file-earmark-text": 62347,
                "file-earmark-word-fill": 62348,
                "file-earmark-word": 62349,
                "file-earmark-x-fill": 62350,
                "file-earmark-x": 62351,
                "file-earmark-zip-fill": 62352,
                "file-earmark-zip": 62353,
                "file-earmark": 62354,
                "file-easel-fill": 62355,
                "file-easel": 62356,
                "file-excel-fill": 62357,
                "file-excel": 62358,
                "file-fill": 62359,
                "file-font-fill": 62360,
                "file-font": 62361,
                "file-image-fill": 62362,
                "file-image": 62363,
                "file-lock-fill": 62364,
                "file-lock": 62365,
                "file-lock2-fill": 62366,
                "file-lock2": 62367,
                "file-medical-fill": 62368,
                "file-medical": 62369,
                "file-minus-fill": 62370,
                "file-minus": 62371,
                "file-music-fill": 62372,
                "file-music": 62373,
                "file-person-fill": 62374,
                "file-person": 62375,
                "file-play-fill": 62376,
                "file-play": 62377,
                "file-plus-fill": 62378,
                "file-plus": 62379,
                "file-post-fill": 62380,
                "file-post": 62381,
                "file-ppt-fill": 62382,
                "file-ppt": 62383,
                "file-richtext-fill": 62384,
                "file-richtext": 62385,
                "file-ruled-fill": 62386,
                "file-ruled": 62387,
                "file-slides-fill": 62388,
                "file-slides": 62389,
                "file-spreadsheet-fill": 62390,
                "file-spreadsheet": 62391,
                "file-text-fill": 62392,
                "file-text": 62393,
                "file-word-fill": 62394,
                "file-word": 62395,
                "file-x-fill": 62396,
                "file-x": 62397,
                "file-zip-fill": 62398,
                "file-zip": 62399,
                "file": 62400,
                "files-alt": 62401,
                "files": 62402,
                "film": 62403,
                "filter-circle-fill": 62404,
                "filter-circle": 62405,
                "filter-left": 62406,
                "filter-right": 62407,
                "filter-square-fill": 62408,
                "filter-square": 62409,
                "filter": 62410,
                "flag-fill": 62411,
                "flag": 62412,
                "flower1": 62413,
                "flower2": 62414,
                "flower3": 62415,
                "folder-check": 62416,
                "folder-fill": 62417,
                "folder-minus": 62418,
                "folder-plus": 62419,
                "folder-symlink-fill": 62420,
                "folder-symlink": 62421,
                "folder-x": 62422,
                "folder": 62423,
                "folder2-open": 62424,
                "folder2": 62425,
                "fonts": 62426,
                "forward-fill": 62427,
                "forward": 62428,
                "front": 62429,
                "fullscreen-exit": 62430,
                "fullscreen": 62431,
                "funnel-fill": 62432,
                "funnel": 62433,
                "gear-fill": 62434,
                "gear-wide-connected": 62435,
                "gear-wide": 62436,
                "gear": 62437,
                "gem": 62438,
                "geo-alt-fill": 62439,
                "geo-alt": 62440,
                "geo-fill": 62441,
                "geo": 62442,
                "gift-fill": 62443,
                "gift": 62444,
                "github": 62445,
                "globe": 62446,
                "globe2": 62447,
                "google": 62448,
                "graph-down": 62449,
                "graph-up": 62450,
                "grid-1x2-fill": 62451,
                "grid-1x2": 62452,
                "grid-3x2-gap-fill": 62453,
                "grid-3x2-gap": 62454,
                "grid-3x2": 62455,
                "grid-3x3-gap-fill": 62456,
                "grid-3x3-gap": 62457,
                "grid-3x3": 62458,
                "grid-fill": 62459,
                "grid": 62460,
                "grip-horizontal": 62461,
                "grip-vertical": 62462,
                "hammer": 62463,
                "hand-index-fill": 62464,
                "hand-index-thumb-fill": 62465,
                "hand-index-thumb": 62466,
                "hand-index": 62467,
                "hand-thumbs-down-fill": 62468,
                "hand-thumbs-down": 62469,
                "hand-thumbs-up-fill": 62470,
                "hand-thumbs-up": 62471,
                "handbag-fill": 62472,
                "handbag": 62473,
                "hash": 62474,
                "hdd-fill": 62475,
                "hdd-network-fill": 62476,
                "hdd-network": 62477,
                "hdd-rack-fill": 62478,
                "hdd-rack": 62479,
                "hdd-stack-fill": 62480,
                "hdd-stack": 62481,
                "hdd": 62482,
                "headphones": 62483,
                "headset": 62484,
                "heart-fill": 62485,
                "heart-half": 62486,
                "heart": 62487,
                "heptagon-fill": 62488,
                "heptagon-half": 62489,
                "heptagon": 62490,
                "hexagon-fill": 62491,
                "hexagon-half": 62492,
                "hexagon": 62493,
                "hourglass-bottom": 62494,
                "hourglass-split": 62495,
                "hourglass-top": 62496,
                "hourglass": 62497,
                "house-door-fill": 62498,
                "house-door": 62499,
                "house-fill": 62500,
                "house": 62501,
                "hr": 62502,
                "hurricane": 62503,
                "image-alt": 62504,
                "image-fill": 62505,
                "image": 62506,
                "images": 62507,
                "inbox-fill": 62508,
                "inbox": 62509,
                "inboxes-fill": 62510,
                "inboxes": 62511,
                "info-circle-fill": 62512,
                "info-circle": 62513,
                "info-square-fill": 62514,
                "info-square": 62515,
                "info": 62516,
                "input-cursor-text": 62517,
                "input-cursor": 62518,
                "instagram": 62519,
                "intersect": 62520,
                "journal-album": 62521,
                "journal-arrow-down": 62522,
                "journal-arrow-up": 62523,
                "journal-bookmark-fill": 62524,
                "journal-bookmark": 62525,
                "journal-check": 62526,
                "journal-code": 62527,
                "journal-medical": 62528,
                "journal-minus": 62529,
                "journal-plus": 62530,
                "journal-richtext": 62531,
                "journal-text": 62532,
                "journal-x": 62533,
                "journal": 62534,
                "journals": 62535,
                "joystick": 62536,
                "justify-left": 62537,
                "justify-right": 62538,
                "justify": 62539,
                "kanban-fill": 62540,
                "kanban": 62541,
                "key-fill": 62542,
                "key": 62543,
                "keyboard-fill": 62544,
                "keyboard": 62545,
                "ladder": 62546,
                "lamp-fill": 62547,
                "lamp": 62548,
                "laptop-fill": 62549,
                "laptop": 62550,
                "layer-backward": 62551,
                "layer-forward": 62552,
                "layers-fill": 62553,
                "layers-half": 62554,
                "layers": 62555,
                "layout-sidebar-inset-reverse": 62556,
                "layout-sidebar-inset": 62557,
                "layout-sidebar-reverse": 62558,
                "layout-sidebar": 62559,
                "layout-split": 62560,
                "layout-text-sidebar-reverse": 62561,
                "layout-text-sidebar": 62562,
                "layout-text-window-reverse": 62563,
                "layout-text-window": 62564,
                "layout-three-columns": 62565,
                "layout-wtf": 62566,
                "life-preserver": 62567,
                "lightbulb-fill": 62568,
                "lightbulb-off-fill": 62569,
                "lightbulb-off": 62570,
                "lightbulb": 62571,
                "lightning-charge-fill": 62572,
                "lightning-charge": 62573,
                "lightning-fill": 62574,
                "lightning": 62575,
                "link-45deg": 62576,
                "link": 62577,
                "linkedin": 62578,
                "list-check": 62579,
                "list-nested": 62580,
                "list-ol": 62581,
                "list-stars": 62582,
                "list-task": 62583,
                "list-ul": 62584,
                "list": 62585,
                "lock-fill": 62586,
                "lock": 62587,
                "mailbox": 62588,
                "mailbox2": 62589,
                "map-fill": 62590,
                "map": 62591,
                "markdown-fill": 62592,
                "markdown": 62593,
                "mask": 62594,
                "megaphone-fill": 62595,
                "megaphone": 62596,
                "menu-app-fill": 62597,
                "menu-app": 62598,
                "menu-button-fill": 62599,
                "menu-button-wide-fill": 62600,
                "menu-button-wide": 62601,
                "menu-button": 62602,
                "menu-down": 62603,
                "menu-up": 62604,
                "mic-fill": 62605,
                "mic-mute-fill": 62606,
                "mic-mute": 62607,
                "mic": 62608,
                "minecart-loaded": 62609,
                "minecart": 62610,
                "moisture": 62611,
                "moon-fill": 62612,
                "moon-stars-fill": 62613,
                "moon-stars": 62614,
                "moon": 62615,
                "mouse-fill": 62616,
                "mouse": 62617,
                "mouse2-fill": 62618,
                "mouse2": 62619,
                "mouse3-fill": 62620,
                "mouse3": 62621,
                "music-note-beamed": 62622,
                "music-note-list": 62623,
                "music-note": 62624,
                "music-player-fill": 62625,
                "music-player": 62626,
                "newspaper": 62627,
                "node-minus-fill": 62628,
                "node-minus": 62629,
                "node-plus-fill": 62630,
                "node-plus": 62631,
                "nut-fill": 62632,
                "nut": 62633,
                "octagon-fill": 62634,
                "octagon-half": 62635,
                "octagon": 62636,
                "option": 62637,
                "outlet": 62638,
                "paint-bucket": 62639,
                "palette-fill": 62640,
                "palette": 62641,
                "palette2": 62642,
                "paperclip": 62643,
                "paragraph": 62644,
                "patch-check-fill": 62645,
                "patch-check": 62646,
                "patch-exclamation-fill": 62647,
                "patch-exclamation": 62648,
                "patch-minus-fill": 62649,
                "patch-minus": 62650,
                "patch-plus-fill": 62651,
                "patch-plus": 62652,
                "patch-question-fill": 62653,
                "patch-question": 62654,
                "pause-btn-fill": 62655,
                "pause-btn": 62656,
                "pause-circle-fill": 62657,
                "pause-circle": 62658,
                "pause-fill": 62659,
                "pause": 62660,
                "peace-fill": 62661,
                "peace": 62662,
                "pen-fill": 62663,
                "pen": 62664,
                "pencil-fill": 62665,
                "pencil-square": 62666,
                "pencil": 62667,
                "pentagon-fill": 62668,
                "pentagon-half": 62669,
                "pentagon": 62670,
                "people-fill": 62671,
                "people": 62672,
                "percent": 62673,
                "person-badge-fill": 62674,
                "person-badge": 62675,
                "person-bounding-box": 62676,
                "person-check-fill": 62677,
                "person-check": 62678,
                "person-circle": 62679,
                "person-dash-fill": 62680,
                "person-dash": 62681,
                "person-fill": 62682,
                "person-lines-fill": 62683,
                "person-plus-fill": 62684,
                "person-plus": 62685,
                "person-square": 62686,
                "person-x-fill": 62687,
                "person-x": 62688,
                "person": 62689,
                "phone-fill": 62690,
                "phone-landscape-fill": 62691,
                "phone-landscape": 62692,
                "phone-vibrate-fill": 62693,
                "phone-vibrate": 62694,
                "phone": 62695,
                "pie-chart-fill": 62696,
                "pie-chart": 62697,
                "pin-angle-fill": 62698,
                "pin-angle": 62699,
                "pin-fill": 62700,
                "pin": 62701,
                "pip-fill": 62702,
                "pip": 62703,
                "play-btn-fill": 62704,
                "play-btn": 62705,
                "play-circle-fill": 62706,
                "play-circle": 62707,
                "play-fill": 62708,
                "play": 62709,
                "plug-fill": 62710,
                "plug": 62711,
                "plus-circle-dotted": 62712,
                "plus-circle-fill": 62713,
                "plus-circle": 62714,
                "plus-square-dotted": 62715,
                "plus-square-fill": 62716,
                "plus-square": 62717,
                "plus": 62718,
                "power": 62719,
                "printer-fill": 62720,
                "printer": 62721,
                "puzzle-fill": 62722,
                "puzzle": 62723,
                "question-circle-fill": 62724,
                "question-circle": 62725,
                "question-diamond-fill": 62726,
                "question-diamond": 62727,
                "question-octagon-fill": 62728,
                "question-octagon": 62729,
                "question-square-fill": 62730,
                "question-square": 62731,
                "question": 62732,
                "rainbow": 62733,
                "receipt-cutoff": 62734,
                "receipt": 62735,
                "reception-0": 62736,
                "reception-1": 62737,
                "reception-2": 62738,
                "reception-3": 62739,
                "reception-4": 62740,
                "record-btn-fill": 62741,
                "record-btn": 62742,
                "record-circle-fill": 62743,
                "record-circle": 62744,
                "record-fill": 62745,
                "record": 62746,
                "record2-fill": 62747,
                "record2": 62748,
                "reply-all-fill": 62749,
                "reply-all": 62750,
                "reply-fill": 62751,
                "reply": 62752,
                "rss-fill": 62753,
                "rss": 62754,
                "rulers": 62755,
                "save-fill": 62756,
                "save": 62757,
                "save2-fill": 62758,
                "save2": 62759,
                "scissors": 62760,
                "screwdriver": 62761,
                "search": 62762,
                "segmented-nav": 62763,
                "server": 62764,
                "share-fill": 62765,
                "share": 62766,
                "shield-check": 62767,
                "shield-exclamation": 62768,
                "shield-fill-check": 62769,
                "shield-fill-exclamation": 62770,
                "shield-fill-minus": 62771,
                "shield-fill-plus": 62772,
                "shield-fill-x": 62773,
                "shield-fill": 62774,
                "shield-lock-fill": 62775,
                "shield-lock": 62776,
                "shield-minus": 62777,
                "shield-plus": 62778,
                "shield-shaded": 62779,
                "shield-slash-fill": 62780,
                "shield-slash": 62781,
                "shield-x": 62782,
                "shield": 62783,
                "shift-fill": 62784,
                "shift": 62785,
                "shop-window": 62786,
                "shop": 62787,
                "shuffle": 62788,
                "signpost-2-fill": 62789,
                "signpost-2": 62790,
                "signpost-fill": 62791,
                "signpost-split-fill": 62792,
                "signpost-split": 62793,
                "signpost": 62794,
                "sim-fill": 62795,
                "sim": 62796,
                "skip-backward-btn-fill": 62797,
                "skip-backward-btn": 62798,
                "skip-backward-circle-fill": 62799,
                "skip-backward-circle": 62800,
                "skip-backward-fill": 62801,
                "skip-backward": 62802,
                "skip-end-btn-fill": 62803,
                "skip-end-btn": 62804,
                "skip-end-circle-fill": 62805,
                "skip-end-circle": 62806,
                "skip-end-fill": 62807,
                "skip-end": 62808,
                "skip-forward-btn-fill": 62809,
                "skip-forward-btn": 62810,
                "skip-forward-circle-fill": 62811,
                "skip-forward-circle": 62812,
                "skip-forward-fill": 62813,
                "skip-forward": 62814,
                "skip-start-btn-fill": 62815,
                "skip-start-btn": 62816,
                "skip-start-circle-fill": 62817,
                "skip-start-circle": 62818,
                "skip-start-fill": 62819,
                "skip-start": 62820,
                "slack": 62821,
                "slash-circle-fill": 62822,
                "slash-circle": 62823,
                "slash-square-fill": 62824,
                "slash-square": 62825,
                "slash": 62826,
                "sliders": 62827,
                "smartwatch": 62828,
                "snow": 62829,
                "snow2": 62830,
                "snow3": 62831,
                "sort-alpha-down-alt": 62832,
                "sort-alpha-down": 62833,
                "sort-alpha-up-alt": 62834,
                "sort-alpha-up": 62835,
                "sort-down-alt": 62836,
                "sort-down": 62837,
                "sort-numeric-down-alt": 62838,
                "sort-numeric-down": 62839,
                "sort-numeric-up-alt": 62840,
                "sort-numeric-up": 62841,
                "sort-up-alt": 62842,
                "sort-up": 62843,
                "soundwave": 62844,
                "speaker-fill": 62845,
                "speaker": 62846,
                "speedometer": 62847,
                "speedometer2": 62848,
                "spellcheck": 62849,
                "square-fill": 62850,
                "square-half": 62851,
                "square": 62852,
                "stack": 62853,
                "star-fill": 62854,
                "star-half": 62855,
                "star": 62856,
                "stars": 62857,
                "stickies-fill": 62858,
                "stickies": 62859,
                "sticky-fill": 62860,
                "sticky": 62861,
                "stop-btn-fill": 62862,
                "stop-btn": 62863,
                "stop-circle-fill": 62864,
                "stop-circle": 62865,
                "stop-fill": 62866,
                "stop": 62867,
                "stoplights-fill": 62868,
                "stoplights": 62869,
                "stopwatch-fill": 62870,
                "stopwatch": 62871,
                "subtract": 62872,
                "suit-club-fill": 62873,
                "suit-club": 62874,
                "suit-diamond-fill": 62875,
                "suit-diamond": 62876,
                "suit-heart-fill": 62877,
                "suit-heart": 62878,
                "suit-spade-fill": 62879,
                "suit-spade": 62880,
                "sun-fill": 62881,
                "sun": 62882,
                "sunglasses": 62883,
                "sunrise-fill": 62884,
                "sunrise": 62885,
                "sunset-fill": 62886,
                "sunset": 62887,
                "symmetry-horizontal": 62888,
                "symmetry-vertical": 62889,
                "table": 62890,
                "tablet-fill": 62891,
                "tablet-landscape-fill": 62892,
                "tablet-landscape": 62893,
                "tablet": 62894,
                "tag-fill": 62895,
                "tag": 62896,
                "tags-fill": 62897,
                "tags": 62898,
                "telegram": 62899,
                "telephone-fill": 62900,
                "telephone-forward-fill": 62901,
                "telephone-forward": 62902,
                "telephone-inbound-fill": 62903,
                "telephone-inbound": 62904,
                "telephone-minus-fill": 62905,
                "telephone-minus": 62906,
                "telephone-outbound-fill": 62907,
                "telephone-outbound": 62908,
                "telephone-plus-fill": 62909,
                "telephone-plus": 62910,
                "telephone-x-fill": 62911,
                "telephone-x": 62912,
                "telephone": 62913,
                "terminal-fill": 62914,
                "terminal": 62915,
                "text-center": 62916,
                "text-indent-left": 62917,
                "text-indent-right": 62918,
                "text-left": 62919,
                "text-paragraph": 62920,
                "text-right": 62921,
                "textarea-resize": 62922,
                "textarea-t": 62923,
                "textarea": 62924,
                "thermometer-half": 62925,
                "thermometer-high": 62926,
                "thermometer-low": 62927,
                "thermometer-snow": 62928,
                "thermometer-sun": 62929,
                "thermometer": 62930,
                "three-dots-vertical": 62931,
                "three-dots": 62932,
                "toggle-off": 62933,
                "toggle-on": 62934,
                "toggle2-off": 62935,
                "toggle2-on": 62936,
                "toggles": 62937,
                "toggles2": 62938,
                "tools": 62939,
                "tornado": 62940,
                "trash-fill": 62941,
                "trash": 62942,
                "trash2-fill": 62943,
                "trash2": 62944,
                "tree-fill": 62945,
                "tree": 62946,
                "triangle-fill": 62947,
                "triangle-half": 62948,
                "triangle": 62949,
                "trophy-fill": 62950,
                "trophy": 62951,
                "tropical-storm": 62952,
                "truck-flatbed": 62953,
                "truck": 62954,
                "tsunami": 62955,
                "tv-fill": 62956,
                "tv": 62957,
                "twitch": 62958,
                "twitter": 62959,
                "type-bold": 62960,
                "type-h1": 62961,
                "type-h2": 62962,
                "type-h3": 62963,
                "type-italic": 62964,
                "type-strikethrough": 62965,
                "type-underline": 62966,
                "type": 62967,
                "ui-checks-grid": 62968,
                "ui-checks": 62969,
                "ui-radios-grid": 62970,
                "ui-radios": 62971,
                "umbrella-fill": 62972,
                "umbrella": 62973,
                "union": 62974,
                "unlock-fill": 62975,
                "unlock": 62976,
                "upc-scan": 62977,
                "upc": 62978,
                "upload": 62979,
                "vector-pen": 62980,
                "view-list": 62981,
                "view-stacked": 62982,
                "vinyl-fill": 62983,
                "vinyl": 62984,
                "voicemail": 62985,
                "volume-down-fill": 62986,
                "volume-down": 62987,
                "volume-mute-fill": 62988,
                "volume-mute": 62989,
                "volume-off-fill": 62990,
                "volume-off": 62991,
                "volume-up-fill": 62992,
                "volume-up": 62993,
                "vr": 62994,
                "wallet-fill": 62995,
                "wallet": 62996,
                "wallet2": 62997,
                "watch": 62998,
                "water": 62999,
                "whatsapp": 63000,
                "wifi-1": 63001,
                "wifi-2": 63002,
                "wifi-off": 63003,
                "wifi": 63004,
                "wind": 63005,
                "window-dock": 63006,
                "window-sidebar": 63007,
                "window": 63008,
                "wrench": 63009,
                "x-circle-fill": 63010,
                "x-circle": 63011,
                "x-diamond-fill": 63012,
                "x-diamond": 63013,
                "x-octagon-fill": 63014,
                "x-octagon": 63015,
                "x-square-fill": 63016,
                "x-square": 63017,
                "x": 63018,
                "youtube": 63019,
                "zoom-in": 63020,
                "zoom-out": 63021,
                "bank": 63022,
                "bank2": 63023,
                "bell-slash-fill": 63024,
                "bell-slash": 63025,
                "cash-coin": 63026,
                "check-lg": 63027,
                "coin": 63028,
                "currency-bitcoin": 63029,
                "currency-dollar": 63030,
                "currency-euro": 63031,
                "currency-exchange": 63032,
                "currency-pound": 63033,
                "currency-yen": 63034,
                "dash-lg": 63035,
                "exclamation-lg": 63036,
                "file-earmark-pdf-fill": 63037,
                "file-earmark-pdf": 63038,
                "file-pdf-fill": 63039,
                "file-pdf": 63040,
                "gender-ambiguous": 63041,
                "gender-female": 63042,
                "gender-male": 63043,
                "gender-trans": 63044,
                "headset-vr": 63045,
                "info-lg": 63046,
                "mastodon": 63047,
                "messenger": 63048,
                "piggy-bank-fill": 63049,
                "piggy-bank": 63050,
                "pin-map-fill": 63051,
                "pin-map": 63052,
                "plus-lg": 63053,
                "question-lg": 63054,
                "recycle": 63055,
                "reddit": 63056,
                "safe-fill": 63057,
                "safe2-fill": 63058,
                "safe2": 63059,
                "sd-card-fill": 63060,
                "sd-card": 63061,
                "skype": 63062,
                "slash-lg": 63063,
                "translate": 63064,
                "x-lg": 63065,
                "safe": 63066,
                "apple": 63067,
                "microsoft": 63069,
                "windows": 63070,
                "behance": 63068,
                "dribbble": 63071,
                "line": 63072,
                "medium": 63073,
                "paypal": 63074,
                "pinterest": 63075,
                "signal": 63076,
                "snapchat": 63077,
                "spotify": 63078,
                "stack-overflow": 63079,
                "strava": 63080,
                "wordpress": 63081,
                "vimeo": 63082,
                "activity": 63083,
                "easel2-fill": 63084,
                "easel2": 63085,
                "easel3-fill": 63086,
                "easel3": 63087,
                "fan": 63088,
                "fingerprint": 63089,
                "graph-down-arrow": 63090,
                "graph-up-arrow": 63091,
                "hypnotize": 63092,
                "magic": 63093,
                "person-rolodex": 63094,
                "person-video": 63095,
                "person-video2": 63096,
                "person-video3": 63097,
                "person-workspace": 63098,
                "radioactive": 63099,
                "webcam-fill": 63100,
                "webcam": 63101,
                "yin-yang": 63102,
                "bandaid-fill": 63104,
                "bandaid": 63105,
                "bluetooth": 63106,
                "body-text": 63107,
                "boombox": 63108,
                "boxes": 63109,
                "dpad-fill": 63110,
                "dpad": 63111,
                "ear-fill": 63112,
                "ear": 63113,
                "envelope-check-1": 63114,
                "envelope-check-fill": 63115,
                "envelope-check": 63116,
                "envelope-dash-1": 63117,
                "envelope-dash-fill": 63118,
                "envelope-dash": 63119,
                "envelope-exclamation-1": 63120,
                "envelope-exclamation-fill": 63121,
                "envelope-exclamation": 63122,
                "envelope-plus-fill": 63123,
                "envelope-plus": 63124,
                "envelope-slash-1": 63125,
                "envelope-slash-fill": 63126,
                "envelope-slash": 63127,
                "envelope-x-1": 63128,
                "envelope-x-fill": 63129,
                "envelope-x": 63130,
                "explicit-fill": 63131,
                "explicit": 63132,
                "git": 63133,
                "infinity": 63134,
                "list-columns-reverse": 63135,
                "list-columns": 63136,
                "meta": 63137,
                "mortorboard-fill": 63138,
                "mortorboard": 63139,
                "nintendo-switch": 63140,
                "pc-display-horizontal": 63141,
                "pc-display": 63142,
                "pc-horizontal": 63143,
                "pc": 63144,
                "playstation": 63145,
                "plus-slash-minus": 63146,
                "projector-fill": 63147,
                "projector": 63148,
                "qr-code-scan": 63149,
                "qr-code": 63150,
                "quora": 63151,
                "quote": 63152,
                "robot": 63153,
                "send-check-fill": 63154,
                "send-check": 63155,
                "send-dash-fill": 63156,
                "send-dash": 63157,
                "send-exclamation-1": 63158,
                "send-exclamation-fill": 63159,
                "send-exclamation": 63160,
                "send-fill": 63161,
                "send-plus-fill": 63162,
                "send-plus": 63163,
                "send-slash-fill": 63164,
                "send-slash": 63165,
                "send-x-fill": 63166,
                "send-x": 63167,
                "send": 63168,
                "steam": 63169,
                "terminal-dash-1": 63170,
                "terminal-dash": 63171,
                "terminal-plus": 63172,
                "terminal-split": 63173,
                "ticket-detailed-fill": 63174,
                "ticket-detailed": 63175,
                "ticket-fill": 63176,
                "ticket-perforated-fill": 63177,
                "ticket-perforated": 63178,
                "ticket": 63179,
                "tiktok": 63180,
                "window-dash": 63181,
                "window-desktop": 63182,
                "window-fullscreen": 63183,
                "window-plus": 63184,
                "window-split": 63185,
                "window-stack": 63186,
                "window-x": 63187,
                "xbox": 63188,
                "ethernet": 63189,
                "hdmi-fill": 63190,
                "hdmi": 63191,
                "usb-c-fill": 63192,
                "usb-c": 63193,
                "usb-fill": 63194,
                "usb-plug-fill": 63195,
                "usb-plug": 63196,
                "usb-symbol": 63197,
                "usb": 63198,
                "boombox-fill": 63199,
                "displayport-1": 63200,
                "displayport": 63201,
                "gpu-card": 63202,
                "memory": 63203,
                "modem-fill": 63204,
                "modem": 63205,
                "motherboard-fill": 63206,
                "motherboard": 63207,
                "optical-audio-fill": 63208,
                "optical-audio": 63209,
                "pci-card": 63210,
                "router-fill": 63211,
                "router": 63212,
                "ssd-fill": 63213,
                "ssd": 63214,
                "thunderbolt-fill": 63215,
                "thunderbolt": 63216,
                "usb-drive-fill": 63217,
                "usb-drive": 63218,
                "usb-micro-fill": 63219,
                "usb-micro": 63220,
                "usb-mini-fill": 63221,
                "usb-mini": 63222,
                "cloud-haze2": 63223,
                "device-hdd-fill": 63224,
                "device-hdd": 63225,
                "device-ssd-fill": 63226,
                "device-ssd": 63227,
                "displayport-fill": 63228,
                "mortarboard-fill": 63229,
                "mortarboard": 63230,
                "terminal-x": 63231,
                "arrow-through-heart-fill": 63232,
                "arrow-through-heart": 63233,
                "badge-sd-fill": 63234,
                "badge-sd": 63235,
                "bag-heart-fill": 63236,
                "bag-heart": 63237,
                "balloon-fill": 63238,
                "balloon-heart-fill": 63239,
                "balloon-heart": 63240,
                "balloon": 63241,
                "box2-fill": 63242,
                "box2-heart-fill": 63243,
                "box2-heart": 63244,
                "box2": 63245,
                "braces-asterisk": 63246,
                "calendar-heart-fill": 63247,
                "calendar-heart": 63248,
                "calendar2-heart-fill": 63249,
                "calendar2-heart": 63250,
                "chat-heart-fill": 63251,
                "chat-heart": 63252,
                "chat-left-heart-fill": 63253,
                "chat-left-heart": 63254,
                "chat-right-heart-fill": 63255,
                "chat-right-heart": 63256,
                "chat-square-heart-fill": 63257,
                "chat-square-heart": 63258,
                "clipboard-check-fill": 63259,
                "clipboard-data-fill": 63260,
                "clipboard-fill": 63261,
                "clipboard-heart-fill": 63262,
                "clipboard-heart": 63263,
                "clipboard-minus-fill": 63264,
                "clipboard-plus-fill": 63265,
                "clipboard-pulse": 63266,
                "clipboard-x-fill": 63267,
                "clipboard2-check-fill": 63268,
                "clipboard2-check": 63269,
                "clipboard2-data-fill": 63270,
                "clipboard2-data": 63271,
                "clipboard2-fill": 63272,
                "clipboard2-heart-fill": 63273,
                "clipboard2-heart": 63274,
                "clipboard2-minus-fill": 63275,
                "clipboard2-minus": 63276,
                "clipboard2-plus-fill": 63277,
                "clipboard2-plus": 63278,
                "clipboard2-pulse-fill": 63279,
                "clipboard2-pulse": 63280,
                "clipboard2-x-fill": 63281,
                "clipboard2-x": 63282,
                "clipboard2": 63283,
                "emoji-kiss-fill": 63284,
                "emoji-kiss": 63285,
                "envelope-heart-fill": 63286,
                "envelope-heart": 63287,
                "envelope-open-heart-fill": 63288,
                "envelope-open-heart": 63289,
                "envelope-paper-fill": 63290,
                "envelope-paper-heart-fill": 63291,
                "envelope-paper-heart": 63292,
                "envelope-paper": 63293,
                "filetype-aac": 63294,
                "filetype-ai": 63295,
                "filetype-bmp": 63296,
                "filetype-cs": 63297,
                "filetype-css": 63298,
                "filetype-csv": 63299,
                "filetype-doc": 63300,
                "filetype-docx": 63301,
                "filetype-exe": 63302,
                "filetype-gif": 63303,
                "filetype-heic": 63304,
                "filetype-html": 63305,
                "filetype-java": 63306,
                "filetype-jpg": 63307,
                "filetype-js": 63308,
                "filetype-jsx": 63309,
                "filetype-key": 63310,
                "filetype-m4p": 63311,
                "filetype-md": 63312,
                "filetype-mdx": 63313,
                "filetype-mov": 63314,
                "filetype-mp3": 63315,
                "filetype-mp4": 63316,
                "filetype-otf": 63317,
                "filetype-pdf": 63318,
                "filetype-php": 63319,
                "filetype-png": 63320,
                "filetype-ppt-1": 63321,
                "filetype-ppt": 63322,
                "filetype-psd": 63323,
                "filetype-py": 63324,
                "filetype-raw": 63325,
                "filetype-rb": 63326,
                "filetype-sass": 63327,
                "filetype-scss": 63328,
                "filetype-sh": 63329,
                "filetype-svg": 63330,
                "filetype-tiff": 63331,
                "filetype-tsx": 63332,
                "filetype-ttf": 63333,
                "filetype-txt": 63334,
                "filetype-wav": 63335,
                "filetype-woff": 63336,
                "filetype-xls-1": 63337,
                "filetype-xls": 63338,
                "filetype-xml": 63339,
                "filetype-yml": 63340,
                "heart-arrow": 63341,
                "heart-pulse-fill": 63342,
                "heart-pulse": 63343,
                "heartbreak-fill": 63344,
                "heartbreak": 63345,
                "hearts": 63346,
                "hospital-fill": 63347,
                "hospital": 63348,
                "house-heart-fill": 63349,
                "house-heart": 63350,
                "incognito": 63351,
                "magnet-fill": 63352,
                "magnet": 63353,
                "person-heart": 63354,
                "person-hearts": 63355,
                "phone-flip": 63356,
                "plugin": 63357,
                "postage-fill": 63358,
                "postage-heart-fill": 63359,
                "postage-heart": 63360,
                "postage": 63361,
                "postcard-fill": 63362,
                "postcard-heart-fill": 63363,
                "postcard-heart": 63364,
                "postcard": 63365,
                "search-heart-fill": 63366,
                "search-heart": 63367,
                "sliders2-vertical": 63368,
                "sliders2": 63369,
                "trash3-fill": 63370,
                "trash3": 63371,
                "valentine": 63372,
                "valentine2": 63373,
                "wrench-adjustable-circle-fill": 63374,
                "wrench-adjustable-circle": 63375,
                "wrench-adjustable": 63376,
                "filetype-json": 63377,
                "filetype-pptx": 63378,
                "filetype-xlsx": 63379
                };
    
    var search = document.getElementById('search');
    // icons
    let tx = '';
    for (const icon in all_icons) {
        tx += `<li class="icon col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 spc_id_${all_icons[icon]}">
                <i class="bi bi-${icon}"></i>
                <span>${icon}</span>
            </li>`;
    }
    $('.icons').html(tx);
    search.addEventListener('input', function () {
        var keyword = this.value.toLowerCase();
        for (const icon_name in all_icons) {
            var t_elem = document.querySelector('.spc_id_' + all_icons[icon_name]);
            if (icon_name.substring(0, keyword.length) === keyword) {
                t_elem.style.display = 'flex';
            }else {
                t_elem.style.display = 'none';
            }
        }
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
