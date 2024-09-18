<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Configurateur 2D PP</title>
    <!--<base href="/">-->
    <base href=".">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" type="image/x-icon" href="https://paris-performance.com/wp-content/uploads/2024/09/PARIS_PERFORMANCE_no_text_blk_bg-v2.png">

    <style>


        @media (min-width: 2100px) and (max-width: 2570px) {
            .slider_boxed, .content_wrap, .content_container {
                width: 2100px;
                margin: 0 auto;
            }
        }

        @media (min-width: 1600px) and (max-width: 1920px) {
            .slider_boxed, .content_wrap, .content_container {
                width: 1900px;
                margin: 0 auto;
            }
        }
        @media (min-width: 1200px) and (max-width: 1440px) {
            .slider_boxed, .content_wrap, .content_container {
                width: 1300px;
                margin: 0 auto;
            }
        }

        .container[_ngcontent-bic-c80] {
            top: 40px;
            position: relative;
            width: 100vw;
            display: flex;
            justify-content: flex-end
        }

        @media (orientation: portrait) and (max-width: 440px) {
            .container[_ngcontent-bic-c80] {
                background-color:#000
            }
        }

        @media only screen and (orientation: portrait) and (min-width: 600px) and (max-width: 1366px) {
            .container[_ngcontent-bic-c80] {
                height:calc(100vh - 40px);
                background-color: #000
            }
        }

        .container[_ngcontent-bic-c80] .view-port[_ngcontent-bic-c80] {
            position: absolute;
            z-index: 0;
            width: 100vw
        }

        @media (orientation: portrait) and (max-width: 440px) {
            .container[_ngcontent-bic-c80] .config-panel[_ngcontent-bic-c80] {
                position:absolute;
                bottom: 0;
                max-width: unset
            }
        }

        @media only screen and (orientation: portrait) and (min-width: 600px) and (max-width: 1366px) {
            .container[_ngcontent-bic-c80] .config-panel[_ngcontent-bic-c80] {
                position:absolute;
                bottom: 0;
                max-width: unset
            }
        }


        @media (orientation: portrait) and (max-width: 440px) {
            .container-hidden-super-header[_ngcontent-bic-c80] {
                top:0;
                height: 100vh;
                transition: opacity .8s ease-in-out
            }
        }

    </style>

    <style>
        .background[_ngcontent-bic-c88] {
            width: 100vw;
            height: calc(100vh - 40px);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-color: #000
        }

        @media (orientation: portrait) and (max-width: 440px) {
            .background[_ngcontent-bic-c88] {
                margin-top:60px;
                height: auto
            }
        }

        @media only screen and (orientation: portrait) and (min-width: 600px) and (max-width: 1366px) {
            .background[_ngcontent-bic-c88] {
                margin-top:75px;
                height: 375px
            }
        }



        .logo-and-controls[_ngcontent-bic-c88] {
            position: absolute;
            top: 15px;
            left: 45px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: calc(100vw - 600px)
        }

        @media (orientation: portrait) and (max-width: 440px) {
            .logo-and-controls[_ngcontent-bic-c88] {
                top:10px;
                left: 20px;
                width: calc(100vw - 30px)
            }
        }

        @media only screen and (orientation: portrait) and (min-width: 600px) and (max-width: 1366px) {
            .logo-and-controls[_ngcontent-bic-c88] {
                top:20px;
                left: 60px;
                width: calc(100vw - 100px)
            }
        }

        .logo-and-controls[_ngcontent-bic-c88] .logo-container[_ngcontent-bic-c88] img[_ngcontent-bic-c88] {
            height: 70px
        }

        @media (orientation: portrait) and (max-width: 440px) {
            .logo-and-controls[_ngcontent-bic-c88] .logo-container[_ngcontent-bic-c88] img[_ngcontent-bic-c88] {
                height:30px
            }
        }

        @media only screen and (orientation: portrait) and (min-width: 600px) and (max-width: 1366px) {
            .logo-and-controls[_ngcontent-bic-c88] .logo-container[_ngcontent-bic-c88] img[_ngcontent-bic-c88] {
                height:30px
            }
        }


    </style>

    <style>

        .pp-dots[_ngcontent-bic-c84] {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='20' viewBox='0 0 4 20' fill='none'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M4 2C4 3.10457 3.10457 4 2 4C0.895431 4 0 3.10457 0 2C0 0.895431 0.895431 0 2 0C3.10457 0 4 0.895431 4 2ZM4 10C4 11.1046 3.10457 12 2 12C0.895431 12 0 11.1046 0 10C0 8.89543 0.895431 8 2 8C3.10457 8 4 8.89543 4 10ZM2 20C3.10457 20 4 19.1046 4 18C4 16.8954 3.10457 16 2 16C0.895431 16 0 16.8954 0 18C0 19.1046 0.895431 20 2 20Z' fill='white'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: center
        }



        .slider[_ngcontent-bic-c84] {
            position: relative;
            height: calc(100vh - 40px);
            width: 100%;
            overflow: hidden;
            transition: all .3s ease
        }

        @media (orientation: portrait) and (max-width: 440px) {
            .slider[_ngcontent-bic-c84] {
                min-height:220px;
                position: inherit
            }
        }

        @media only screen and (orientation: portrait) and (min-width: 600px) and (max-width: 1366px) {
            .slider[_ngcontent-bic-c84] {
                height:100%
            }
        }

        @media (orientation: portrait) and (max-width: 440px) {
            .fullscreen-view[_ngcontent-bic-c84] {
                margin-top:unset;
                height: calc(100vh - 40px)
            }
        }

        .slider-container[_ngcontent-bic-c84] {
            height: 100%;
            width: 100%;
            display: flex;
            flex-wrap: nowrap;
            transition: transform .5s ease-in-out
        }

        .slider-slide[_ngcontent-bic-c84] {
            flex: 1 0 100%;
            height: 100%;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center
        }

        .slider-slide[_ngcontent-bic-c84] img[_ngcontent-bic-c84] {
            max-height: 100%;
            max-width: 100%;
            object-fit: contain
        }
    </style>

    <style>
        .configuration-container[_ngcontent-bic-c76] {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            background-color: #0f1318a6;
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            position: relative
        }

        @media (orientation: portrait) and (max-width: 440px) {
            .configuration-container[_ngcontent-bic-c76] {
                background-color:#000
            }
        }



    </style>
    <style>
        @media (orientation: portrait) and (max-width: 440px) {
            .nav-bar .tab-group-container {
                margin-top:10px
            }
        }

        @media only screen and (orientation: portrait) and (min-width: 600px) and (max-width: 1366px) {
            .nav-bar .tab-group-container {
                margin-top:10px
            }
        }

        .nav-bar .tab-group-container .mat-tab-group {
            max-width: 536px!important;
            overflow: auto!important
        }

        @media (orientation: portrait) and (max-width: 440px) {
            .nav-bar .tab-group-container .mat-tab-group {
                max-width:100vw!important
            }
        }

        @media only screen and (orientation: portrait) and (min-width: 600px) and (max-width: 1366px) {
            .nav-bar .tab-group-container .mat-tab-group {
                max-width:100vw!important
            }
        }

        .nav-bar .tab-group-container .mat-tab-header-pagination.mat-tab-header-pagination-disabled {
            display: none!important
        }

        @media (orientation: portrait) and (max-width: 440px) {
            .nav-bar .tab-group-container .mat-tab-header-pagination.mat-tab-header-pagination-disabled {
                display:none!important
            }
        }

        .nav-bar .tab-group-container .tab-content {
            height: calc(100vh - 139px);
            overflow: auto;
            margin-top: 20px
        }

        @media (orientation: portrait) and (max-width: 440px) {
            .nav-bar .tab-group-container .tab-content {
                margin-bottom:20px
            }
        }

        @media only screen and (orientation: portrait) and (min-width: 600px) and (max-width: 1366px) {
            .nav-bar .tab-group-container .tab-content {
                height:calc(100vh - 617px);
                margin-bottom: 50px
            }
        }

        .nav-bar .tab-group-container .tab-content .item-container {
            width: 446px;
            margin: 45px
        }

        @media (orientation: portrait) and (max-width: 440px) {
            .nav-bar .tab-group-container .tab-content .item-container {
                width:calc(100vw - 50px);
                margin: 25px
            }
        }

        @media only screen and (orientation: portrait) and (min-width: 600px) and (max-width: 1366px) {
            .nav-bar .tab-group-container .tab-content .item-container {
                width:calc(100vw - 120px);
                margin: 25px 60px
            }
        }

        .nav-bar .tab-group-container ::-webkit-scrollbar {
            display: none
        }

        .nav-bar .mat-tab-list .mat-ink-bar {
            background: #da291c;
            height: 3px;
            box-shadow: 0 0 15px 1.5px #da291c;
            border-radius: 30px 30px 0 0
        }

        .nav-bar .mat-tab-labels {
            justify-content: space-between;
            padding: 0 45px
        }

        @media (orientation: portrait) and (max-width: 440px) {
            .nav-bar .mat-tab-labels {
                padding:0 20px
            }
        }

        @media only screen and (orientation: portrait) and (min-width: 600px) and (max-width: 1366px) {
            .nav-bar .mat-tab-labels {
                justify-content:flex-start;
                padding: 0 34px
            }
        }

        .nav-bar .mat-tab-label {
            padding: 0!important;
            min-width: 10px;
            margin: 0 5px
        }

        @media only screen and (orientation: portrait) and (min-width: 600px) and (max-width: 1366px) {
            .nav-bar .mat-tab-label {
                margin:0 25px
            }
        }

        .nav-bar .mat-tab-label-content {
            font-size: 12px;
            letter-spacing: 1px;
            text-transform: uppercase
        }

        .nav-bar .section {
            color: #fff
        }

        .configuration-actions-container {
            width: 100%;
            position: fixed;
            bottom: 0;
            display: flex;
            flex-direction: column;
            z-index: 1
        }


    </style>
    <style>
        .mat-tab-header {
            display: flex;
            overflow: hidden;
            position: relative;
            flex-shrink: 0
        }

        .mat-tab-header-pagination {
            -webkit-user-select: none;
            user-select: none;
            position: relative;
            display: none;
            justify-content: center;
            align-items: center;
            min-width: 32px;
            cursor: pointer;
            z-index: 2;
            -webkit-tap-highlight-color: rgba(0,0,0,0);
            touch-action: none;
            box-sizing: content-box;
            background: none;
            border: none;
            outline: 0;
            padding: 0
        }

        .mat-tab-header-pagination::-moz-focus-inner {
            border: 0
        }

        .mat-tab-header-pagination-controls-enabled .mat-tab-header-pagination {
            display: flex
        }

        .mat-tab-header-pagination-before,.mat-tab-header-rtl .mat-tab-header-pagination-after {
            padding-left: 4px
        }

        .mat-tab-header-pagination-before .mat-tab-header-pagination-chevron,.mat-tab-header-rtl .mat-tab-header-pagination-after .mat-tab-header-pagination-chevron {
            transform: rotate(-135deg)
        }

        .mat-tab-header-rtl .mat-tab-header-pagination-before,.mat-tab-header-pagination-after {
            padding-right: 4px
        }

        .mat-tab-header-rtl .mat-tab-header-pagination-before .mat-tab-header-pagination-chevron,.mat-tab-header-pagination-after .mat-tab-header-pagination-chevron {
            transform: rotate(45deg)
        }

        .mat-tab-header-pagination-chevron {
            border-style: solid;
            border-width: 2px 2px 0 0;
            height: 8px;
            width: 8px
        }

        .mat-tab-header-pagination-disabled {
            box-shadow: none;
            cursor: default
        }

        .mat-tab-list {
            flex-grow: 1;
            position: relative;
            transition: transform 500ms cubic-bezier(0.35, 0, 0.25, 1)
        }

        .mat-ink-bar {
            position: absolute;
            bottom: 0;
            height: 2px;
            transition: 500ms cubic-bezier(0.35, 0, 0.25, 1)
        }

        .mat-ink-bar._mat-animation-noopable {
            transition: none !important;
            animation: none !important
        }

        .mat-tab-group-inverted-header .mat-ink-bar {
            bottom: auto;
            top: 0
        }

        .cdk-high-contrast-active .mat-ink-bar {
            outline: solid 2px;
            height: 0
        }

        .mat-tab-labels {
        }

        [mat-align-tabs=center]>.mat-tab-header .mat-tab-labels {
            justify-content: center
        }

        [mat-align-tabs=end]>.mat-tab-header .mat-tab-labels {
            justify-content: flex-end
        }

        .mat-tab-label-container {
            display: flex;
            flex-grow: 1;
            overflow: hidden;
            z-index: 1
        }

        .mat-tab-list._mat-animation-noopable {
            transition: none !important;
            animation: none !important
        }

        .mat-tab-label {
            height: 48px;
            padding: 0 24px;
            cursor: pointer;
            box-sizing: border-box;
            opacity: .6;
            min-width: 160px;
            text-align: center;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            white-space: nowrap;
            position: relative
        }

        .mat-tab-label:focus {
            outline: none
        }

        .mat-tab-label:focus:not(.mat-tab-disabled) {
            opacity: 1
        }

        .mat-tab-label.mat-tab-disabled {
            cursor: default
        }

        .cdk-high-contrast-active .mat-tab-label.mat-tab-disabled {
            opacity: .5
        }

        .mat-tab-label .mat-tab-label-content {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            white-space: nowrap
        }

        .cdk-high-contrast-active .mat-tab-label {
            opacity: 1
        }

        .mat-tab-label::before {
            margin: 5px
        }

        @media(max-width: 599px) {
            .mat-tab-label {
                min-width:72px
            }
        }
    </style>

    <style>


        .pp-dots[_ngcontent-bic-c105] {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='20' viewBox='0 0 4 20' fill='none'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M4 2C4 3.10457 3.10457 4 2 4C0.895431 4 0 3.10457 0 2C0 0.895431 0.895431 0 2 0C3.10457 0 4 0.895431 4 2ZM4 10C4 11.1046 3.10457 12 2 12C0.895431 12 0 11.1046 0 10C0 8.89543 0.895431 8 2 8C3.10457 8 4 8.89543 4 10ZM2 20C3.10457 20 4 19.1046 4 18C4 16.8954 3.10457 16 2 16C0.895431 16 0 16.8954 0 18C0 19.1046 0.895431 20 2 20Z' fill='white'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: center
        }



        .popup-actions-container[_ngcontent-bic-c105] .action-list[_ngcontent-bic-c105] {
            list-style: none;
            margin: 0;
            padding: 20px 30px;
            z-index: 1;
            position: relative
        }

        .popup-actions-container[_ngcontent-bic-c105] .action-list[_ngcontent-bic-c105] li[_ngcontent-bic-c105] {
            cursor: pointer;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 1px;
            padding: 10px 0
        }

        .popup-actions-container[_ngcontent-bic-c105] .action-list[_ngcontent-bic-c105] li[_ngcontent-bic-c105] a[_ngcontent-bic-c105] {
            cursor: pointer;
            text-transform: uppercase;
            font-size: 12px;
            font-style: normal;
            color: #fff;
            text-decoration: none
        }

        .config-actions-container[_ngcontent-bic-c105] {
            display: flex;
            flex-direction: column;
            align-items: stretch;
            width: 100%
        }

        .config-actions-container[_ngcontent-bic-c105] .shadow[_ngcontent-bic-c105] {
            width: 100%;
            height: 127px;
            background: linear-gradient(0deg,rgba(24,24,24,.7) 0%,rgba(0,0,0,0) 100%);
            position: absolute;
            bottom: 59px;
            pointer-events: none
        }

        @media (orientation: portrait) and (max-width: 440px) {
            .config-actions-container[_ngcontent-bic-c105] .shadow[_ngcontent-bic-c105] {
                bottom:49px
            }
        }

        .config-actions-container[_ngcontent-bic-c105] .actions-container[_ngcontent-bic-c105] {
            display: flex;
            flex-direction: row;
            align-items: stretch;
            width: 100%
        }

        .config-actions-container[_ngcontent-bic-c105] .actions-container[_ngcontent-bic-c105] .save-button[_ngcontent-bic-c105] {
            cursor: pointer;
            width: 75%;
            flex: 1;
            background: var(--gradients-service-red, radial-gradient(199.89% 50% at 50% 100%, rgba(255, 255, 255, .5) 0%, rgba(255, 255, 255, 0) 100%), radial-gradient(349.37% 116.89% at 50% 100%, rgba(255, 255, 255, .5) 0%, rgba(0, 0, 0, .5) 100%), #DA291C);
            background-blend-mode: overlay,overlay,normal;
            text-align: center;
            padding: 20px
        }

        @media (orientation: portrait) and (max-width: 440px) {
            .config-actions-container[_ngcontent-bic-c105] .actions-container[_ngcontent-bic-c105] .save-button[_ngcontent-bic-c105] {
                padding:15px
            }
        }

        .config-actions-container[_ngcontent-bic-c105] .actions-container[_ngcontent-bic-c105] .save-button[_ngcontent-bic-c105] span[_ngcontent-bic-c105] {
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 1px
        }

        .config-actions-container[_ngcontent-bic-c105] .actions-container[_ngcontent-bic-c105] .menu-button[_ngcontent-bic-c105] {
            cursor: pointer;
            width: 60px;
            background: linear-gradient(#3E3E3E 0%,#000 100%);
            display: flex;
            justify-content: center;
            align-items: center
        }

        .config-actions-container[_ngcontent-bic-c105] .actions-container[_ngcontent-bic-c105] .menu-button[_ngcontent-bic-c105] .pp-dots[_ngcontent-bic-c105], .config-actions-container[_ngcontent-bic-c105] .actions-container[_ngcontent-bic-c105] .menu-button[_ngcontent-bic-c105] .pp-close[_ngcontent-bic-c105] {
            width: 40px;
            height: 40px
        }
    </style>

    <style>


        .pp-dots[_ngcontent-bic-c69] {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='20' viewBox='0 0 4 20' fill='none'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M4 2C4 3.10457 3.10457 4 2 4C0.895431 4 0 3.10457 0 2C0 0.895431 0.895431 0 2 0C3.10457 0 4 0.895431 4 2ZM4 10C4 11.1046 3.10457 12 2 12C0.895431 12 0 11.1046 0 10C0 8.89543 0.895431 8 2 8C3.10457 8 4 8.89543 4 10ZM2 20C3.10457 20 4 19.1046 4 18C4 16.8954 3.10457 16 2 16C0.895431 16 0 16.8954 0 18C0 19.1046 0.895431 20 2 20Z' fill='white'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: center
        }



        .container[_ngcontent-bic-c69] {
            cursor: pointer;
            border-bottom: solid 1px #5b5b5b;
            padding: 0 0 45px;
            display: flex;
            justify-content: space-between
        }

        @media (orientation: portrait) and (max-width: 440px) {
            .container[_ngcontent-bic-c69] {
                padding:0 0 30px
            }
        }

        @media only screen and (orientation: portrait) and (min-width: 600px) and (max-width: 1366px) {
            .container[_ngcontent-bic-c69] {
                padding:0 0 25px
            }
        }

        .container[_ngcontent-bic-c69] .text-area[_ngcontent-bic-c69] {
            min-width: 70%;
            display: flex;
            flex-direction: column;
            justify-content: space-around
        }

        .container[_ngcontent-bic-c69] .text-area[_ngcontent-bic-c69] .title-section[_ngcontent-bic-c69] span[_ngcontent-bic-c69] {
            font-family: pp-SansMedium;
            font-size: 13px
        }

        .container[_ngcontent-bic-c69] .text-area[_ngcontent-bic-c69] .title-section[_ngcontent-bic-c69] .title-museum[_ngcontent-bic-c69] {
            font-size: 18px
        }

        .container[_ngcontent-bic-c69] .text-area[_ngcontent-bic-c69] .opt-name[_ngcontent-bic-c69] {
            width: 330px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis
        }

        @media (orientation: portrait) and (max-width: 440px) {
            .container[_ngcontent-bic-c69] .text-area[_ngcontent-bic-c69] .opt-name[_ngcontent-bic-c69] {
                width:240px
            }
        }

        .container[_ngcontent-bic-c69] .text-area[_ngcontent-bic-c69] .opt-name[_ngcontent-bic-c69] span[_ngcontent-bic-c69] {
            font-size: 11px;
            text-transform: capitalize
        }

        .container[_ngcontent-bic-c69] .text-area[_ngcontent-bic-c69] .opt-name[_ngcontent-bic-c69] .opt-name-museum[_ngcontent-bic-c69] {
            font-size: 17px
        }

        .container[_ngcontent-bic-c69] .img-area[_ngcontent-bic-c69] .img-container[_ngcontent-bic-c69] {
            width: 48px;
            height: 48px
        }

        .container[_ngcontent-bic-c69] .img-area[_ngcontent-bic-c69] .img-container[_ngcontent-bic-c69] img[_ngcontent-bic-c69] {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50px
        }
    </style>
    <style>
        .mat-tab-body-content {
            height: 100%;
            overflow: auto
        }

        .mat-tab-group-dynamic-height .mat-tab-body-content {
            overflow: hidden
        }

        .mat-tab-body-content[style*="visibility: hidden"] {
            display: none
        }
    </style>
<style>
    .slider1-container {
        text-align: center;
        max-width: 300px;
        position: relative;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
    }

    /* Navigation arrows for vertical slider */
    .arrow {
        cursor: pointer;
        font-size: 24px;
        color: #ffffff;
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .arrow-up {
        top: 10px;
    }

    .arrow-down {
        bottom: 80px;
    }

    /* Vertical slider container */
    .slider-items {
        max-height: 300px;
        overflow: hidden;
        margin: 20px 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .slider-item {
        margin: 5px 0;
    }

    .slider-item img {
        width: 100px;
        height: auto;
    }

    /* Label for each image */
    .slider-item label {
        display: block;
        font-size: 14px;
        color: #ffffff;
    }

    /* Pagination */
    .pagination {
        margin-top: 20px;
    }

    .pagination span {
        font-size: 16px;
        color: #ffffff;
    }

    .step-buttons {
        margin-top: 20px;
        display: flex;
        justify-content: space-between;
    }

    .step-buttons button {
        padding: 10px 15px;
        cursor: pointer;
        color: black;
    }

    .year-option {
        color: #000000;
        height: 50px;
        width: 160px;
        transition: transform 0.2s;
        cursor: pointer;
        border: 2px solid transparent;
    }

    .year-option:hover {
        transform: scale(1.1);
    }

    .year-option.selected{
        border: 2px solid #000000;
        transform: scale(1.1);
    }

    .make-option.selected{
        border: 2px solid #ffffff;
        transform: scale(1.1);
    }
    .badgemodifright {
        position: absolute;
        top: -10px;
        right: -10px;
        padding: 5px 10px;
        font-size: 12px;
        border-radius: 25%;
        background-color: #fff;
        color: #000000;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .badgemodifleft {
        position: absolute;
        top: -10px;
        left: -10px;
        padding: 5px 10px;
        font-size: 12px;
        border-radius: 25%;
        background-color: #fff;
        color: #000000;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .modif-option {
        width: 180px;
        transition: transform 0.2s;
        cursor: pointer;
        border: 2px solid transparent;
    }

    .modif-option:hover {
        transform: scale(1.1);
    }

    .modif-option.selected {
        border: 2px solid #000000;
        transform: scale(1.1);
    }

    .param-option {
        width: 150px;
        height: 150px;
        transition: transform 0.2s;
        cursor: pointer;
        border: 2px solid transparent;
    }

    .param-option:hover {
        transform: scale(1.1);
    }

    .param-option.selected {
        border: 2px solid #000000;
        transform: scale(1.1);
    }

    .badge {
        position: absolute;
        top: -10px;
        right: -10px;
        padding: 5px 10px;
        font-size: 12px;
        border-radius: 50%;
        background-color: #fff;
        color: #000000;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .badge:hover::after {
        content: attr(data-tooltip);
        position: absolute;
        top: 100%;
        left: -250%;
        transform: translate(-50%, -5px);
        background-color: #000;
        color: #fff;
        padding: 5px 10px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        z-index: 1;
        display: block;
        opacity: 0;
        transition: opacity 0.2s ease-in-out;
        text-transform: lowercase;
    }

    .badge:hover::after {
        opacity: 1;
        width: 200px;
    }

    .dynamic-select{
        background-color: #ffffff;
    }
    .dynamic-select option {
        background-color: rgba(0, 0, 0, 0.2);
    }

    td, th {
        border: 1px solid #e4e7e8;
        padding: 4px 4px 20px 40px;
        /* margin-right: 10px; */
    }
</style>




</head>
<body >

<app-root >
    <app-model-selection>
        <app-configuration-area >
            <div _ngcontent-bic-c80="" class="container">
                <div _ngcontent-bic-c80="" class="view-port ">
                    <app-car-viewer _nghost-bic-c88="" >
                        <div _ngcontent-bic-c88="" class="background ">
                            <rt-render-slider _ngcontent-bic-c88=""  >
                                <div _ngcontent-bic-c84="" class="slider" style="height: 100%;">
                                    <div _ngcontent-bic-c84="" class="slider-container">
                                        <div _ngcontent-bic-c84="" id="render-container" class="slider-slide " style="background-image: url(&quot;https://paris-performance.com/wp-content/uploads/2024/09/Blackroom_frontleft.jpg&quot;);">
                                            <div style="background-image: url(&quot;https://paris-performance.com/wp-content/uploads/2024/09/chevrolet-blazer-idle.png&quot;);" class="slider-slide" _ngcontent-bic-c84=""></div>
                                        </div>
                                        <!---->
                                    </div>
                                </div>
                                <!---->
                            </rt-render-slider>
                            <!---->
                            <!---->
                        </div>
                        <div _ngcontent-bic-c88="" class="logo-and-controls ng-trigger ng-trigger-fadeInOut">
                            <div _ngcontent-bic-c88="" class="logo-container">
                                <img _ngcontent-bic-c88=""  src="https://paris-performance.com/wp-content/uploads/2024/09/PARIS_PERFORMANCE_no_text_blk_bg-v2.png">
                            </div>

                        </div>
                    </app-car-viewer>
                </div>
                <div _ngcontent-bic-c80="" class="config-panel ng-trigger ng-trigger-navFadeInOutFromRight">
                    <app-configuration-panel >
                        <div _ngcontent-bic-c76="" class="configuration-container">
                            <app-navigation>
                                <div class="nav-bar">
                                    <div id="tabGroupContainer" class="tab-group-container">
                                        <mat-tab-group >
                                            <mat-tab-header class="mat-tab-header">

                                                <div class="mat-tab-label-container">
                                                    <div role="tablist" class="mat-tab-list" style="transform: translateX(0px);">
                                                        <div class="mat-tab-labels">
                                                            <div role="tab" mattablabelwrapper="" mat-ripple="" cdkmonitorelementfocus="" class="mat-ripple mat-tab-label mat-focus-indicator  mat-tab-label-active" id="mat-tab-label-2-0" tabindex="0" aria-posinset="1" aria-setsize="3" aria-controls="mat-tab-content-2-0" aria-selected="true" aria-disabled="false">
                                                                <div class="mat-tab-label-content">
                                                                    <!--<span class="section ">Extérieur</span>-->
                                                                    <h2 id="stepTitle">Étape 1</h2>
                                                                    <br>
                                                                    <span id="stepDescription" style="margin-top: 70px;padding-left: 15px;">Choix du Véhicule - Année</span>
                                                                    <span id="stepChoice" style="margin-top: 70px;padding-left: 15px;font-size: x-large;"></span>
                                                                    <!---->
                                                                    <!---->
                                                                    <!---->
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <mat-ink-bar class="mat-ink-bar" style="visibility: visible; left: 50px; width: 94px;"></mat-ink-bar>
                                                    </div>
                                                </div>
                                                <button aria-hidden="true" type="button" mat-ripple="" tabindex="-1" class="mat-ripple mat-tab-header-pagination mat-tab-header-pagination-after mat-elevation-z4 mat-tab-header-pagination-disabled" disabled="">
                                                    <div class="mat-tab-header-pagination-chevron"></div>
                                                </button>
                                            </mat-tab-header>
                                            <div class="mat-tab-body-wrapper" >
                                                <mat-tab-body role="tabpanel" class="mat-tab-body ng-tns-c37-11  mat-tab-body-active" id="mat-tab-content-2-0" aria-labelledby="mat-tab-label-2-0">
                                                    <div cdkscrollable="" class="mat-tab-body-content ng-tns-c37-11 ng-trigger ng-trigger-translateTab" style="transform: none;">
                                                        <!---->
                                                        <!---->
                                                    </div>
                                                </mat-tab-body>
                                                <mat-tab-body role="tabpanel" class="mat-tab-body ng-tns-c37-12 " id="mat-tab-content-2-1" aria-labelledby="mat-tab-label-2-1">
                                                    <div cdkscrollable="" class="mat-tab-body-content ng-tns-c37-12 ng-trigger ng-trigger-translateTab" style="transform: translate3d(100%, 0px, 0px); min-height: 1px; visibility: hidden;">
                                                        <!---->
                                                    </div>
                                                </mat-tab-body>
                                                <mat-tab-body role="tabpanel" class="mat-tab-body ng-tns-c37-13 " id="mat-tab-content-2-2" aria-labelledby="mat-tab-label-2-2">
                                                    <div cdkscrollable="" class="mat-tab-body-content ng-tns-c37-13 ng-trigger ng-trigger-translateTab" style="transform: translate3d(100%, 0px, 0px); min-height: 1px; visibility: hidden;">
                                                        <!---->
                                                    </div>
                                                </mat-tab-body>
                                                <!---->
                                            </div>
                                        </mat-tab-group>
                                        <div id="navigation-content" class="tab-content">

                                            <div class="item-container " id="24">
                                                <app-list-item _nghost-bic-c69="">
                                                    <div _ngcontent-bic-c69="" class="container">

                                                        <div _ngcontent-bic-c69="" class="text-area">
                                                            <!--<div _ngcontent-bic-c69="" class="title-section">
                                                                <span _ngcontent-bic-c69="">Pack De Personnalisation</span>
                                                            </div>
                                                            <div _ngcontent-bic-c69="" class="opt-name">
                                                                <span _ngcontent-bic-c69="" >Pack De Personnalisation</span>

                                                            </div> -->
                                                            <div class="slider1-container">

                                                                <div class="container" id="divParam" style="margin-top: 150px;display: none">
                                                                    <div class="card-content" >
                                                                        <button style="--clr: #ffffff; height: 50px; width: 260px" class="param-option" onclick="selectParam(this, 'free')">
                                                                            PARAMÈTRES LIBRES
                                                                            <span class="badge" data-tooltip="Nous vous donnons les commandes, vous êtes totalement libre et responsable dans le choix des paramètres">?</span>
                                                                        </button>
                                                                        <hr style="border: 0; height: 2px; background-color: #c9c9c9; width: 20%;margin-bottom:40px;margin-top: 40px;">
                                                                        <button style="--clr: #ffffff; height: 50px; width: 260px" class="param-option" onclick="selectParam(this, 'recommanded')"> PARAMÈTRES CONSEILLÉS
                                                                            <span class="badge" data-tooltip="Nous vous proposons le plus large choix de paramétrage adapté pour vous ainsi que votre véhicule">?</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div id="divWheelOption" style="margin-left: -50px;">
                                                                    <div class="card-content" style="margin-left: 35px;">
                                                                        <table>
                                                                            <tr>
                                                                                <td><span>Taille :</span></td>
                                                                                <td>
                                                                                    <select  class="dynamic-select" id="rim_diameter">
                                                                                        <!-- Ajoutez d'autres options si nécessaire -->
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><span>Alesage Central :</span></td>
                                                                                <td>
                                                                                    <select  class="dynamic-select" id="centre_bore">
                                                                                        <!-- Ajoutez d'autres options si nécessaire -->
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><span>Entraxe :</span></td>
                                                                                <td>
                                                                                    <select  class="dynamic-select" id="front_rim">
                                                                                        <!-- Ajoutez d'autres options si nécessaire -->
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><span>Déport :</span></td>
                                                                                <td>
                                                                                    <select  class="dynamic-select" id="rim_offset">
                                                                                        <!-- Ajoutez d'autres options si nécessaire -->
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><span>Taille de Filletage :</span></td>
                                                                                <td>
                                                                                    <select  class="dynamic-select" id="thread_size">
                                                                                        <!-- Ajoutez d'autres options si nécessaire -->
                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                        </table>
                                                                        <br>

                                                                        <div class="checkbox">
                                                                            <span style="margin-right: 200px;">Conserver les mêmes paramètres <br>avant et arrière</span>
                                                                            <input type="checkbox" id="conserver" >
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="arrow arrow-up" onclick="previousSlide()">&#9650;</div>
                                                                <div class="slider-items" id="sliderItems">
                                                                    <!-- 5 items will be dynamically displayed here -->
                                                                </div>
                                                                <div class="arrow arrow-down" onclick="nextSlide()">&#9660;</div>

                                                                <div class="pagination">
                                                                    <span id="pagination">1/4</span>
                                                                </div>

                                                                <div class="step-buttons">
                                                                    <button id="prevButton" onclick="previousStep()" disabled>Précédent</button>
                                                                    <button id="nextButton" onclick="nextStep()">Suivant</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--<div _ngcontent-bic-c69="" class="img-area">
                                                           <div _ngcontent-bic-c69="" class="img-container ">
                                                               <img _ngcontent-bic-c69="" onerror="this.style.display=&#39;none&#39;" src="../Configurateur%20pp%20Purosangue%20_%20Configurateur%20Officiel%20pp_files/PPAC.png" style="display: none;">
                                                           </div>

                                                       </div>-->
                                                        
                                                    </div>
                                                </app-list-item>
                                            </div>
                                            <div class="item-container " id="25">
                                            </div>
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                                <div class="configuration-actions-container">
                                    <app-configuration-actions _nghost-bic-c105="" class="ng-tns-c105-10 ">
                                        <!---->
                                        <div _ngcontent-bic-c105="" class="config-actions-container ng-tns-c105-10">
                                            <div _ngcontent-bic-c105="" class="shadow ng-tns-c105-10"></div>
                                            <div _ngcontent-bic-c105="" class="actions-container ng-tns-c105-10">
                                                <div _ngcontent-bic-c105="" class="save-button ng-tns-c105-10">
                                                    <span _ngcontent-bic-c105="" class="ng-tns-c105-10">Enregistrer et demander</span>
                                                </div>
                                                <div _ngcontent-bic-c105="" class="menu-button ng-tns-c105-10">
                                                    <div _ngcontent-bic-c105="" class="pp-dots ng-tns-c105-10 "></div>
                                                    <!---->
                                                    <!---->
                                                </div>
                                            </div>
                                        </div>
                                    </app-configuration-actions>
                                    <!---->
                                    <!---->
                                </div>
                            </app-navigation>
                            <!---->
                        </div>
                    </app-configuration-panel>
                    <!---->
                </div>
                <!---->
                <!---->
                <!---->
            </div>
            <div _ngcontent-bic-c80="" class="loading-indicator ">
                <div _ngcontent-bic-c80="" class="slider-container "></div>
            </div>
            <div _ngcontent-bic-c80="" class="loading-indicator-spinner "></div>
            <div _ngcontent-bic-c80="" class="loading-indicator-turntable ">
                <!---->
                <!---->
                <!---->
            </div>
            <!---->
        </app-configuration-area>
        <!---->
    </app-model-selection>
    <!---->
    <div class="loading-indicator"></div>
</app-root>
<script>


    let currentStep = 0; // 0: Brand, 1: Model, 2: Engine
    let currentSlide = 0;


    const maxVisibleItems = 5;

    // Data for each step
    let yearsData = [];
    let brandsData = [];
    let modelsData = [];
    let modificationsData = [];
    let wheelOptionsData = [];

    //var
    let selectedYear = null;
    let selectedBrand = null;
    let brandSlug = null;
    let selectedModel = null;
    let modelSlug = null;
    let selectedModification = null;
    let modificationId= null;
    let param_selected = null;

    function updateSlider() {
        const sliderItems = document.getElementById('sliderItems');
        const pagination = document.getElementById('pagination');
        const stepTitle = document.getElementById('stepTitle');
        const stepDescription = document.getElementById('stepDescription');
        const stepChoice = document.getElementById('stepChoice');


        let items = [];
        let limit = 0;

        if (currentStep === 0) {
            // Step 1: Year
            const years = yearsData;
            console.log(years);
            limit = years.length;
            items = years.slice(currentSlide, currentSlide + maxVisibleItems).map(year => `<div class="slider-item"><button class="year-option" onclick="selectYear(this,${year.name})">${year.name}</button></div>`);
            pagination.innerText = `${currentSlide + 1}/${limit}`;
            stepTitle.innerText = 'Étape 1';
            stepDescription.innerText = 'Choix du Véhicule - Année';
            stepChoice.innerText = '';

        } else if (currentStep === 1) {
            // Step 2: Brand
            const brands = brandsData;
            limit = brands.length;
            items = brands.slice(currentSlide, currentSlide + maxVisibleItems).map(brand => `<div class="slider-item"><img class="make-option" src="${brand.logo}" alt="${brand.name}" onclick="selectBrand(this,'${brand.slug}','${brand.name}')"><label>${brand.name}</label></div>`);
            pagination.innerText = `${currentSlide + 1}/${limit}`;
            stepTitle.innerText = 'Étape 1';
            stepDescription.innerText = `Choix du Véhicule - Marque`;
            stepChoice.innerText = '';
        } else if (currentStep === 2) {
            // Step 3: Model
            const models = modelsData;
            limit = models.length;
            items = models.slice(currentSlide, currentSlide + maxVisibleItems).map(model => `<div class="slider-item"><button class="year-option" style="height: 60px" onclick="selectModel(this,'${model.slug}','${model.name}')">${model.name}</button></div>`);
            pagination.innerText = `${currentSlide + 1}/${limit}`;
            stepTitle.innerText = 'Étape 1';
            stepDescription.innerText = `Choix du Véhicule - Modèle`;
            stepChoice.innerText = '';
        } else if (currentStep === 3) {
        // Step 4: Modification
        const modifications = modificationsData;
        limit = modifications.length;
        items = modifications.slice(currentSlide, currentSlide + maxVisibleItems).map(modif => `<div class="slider-item"><button class="modif-option" onclick="selectModification(this,'${modif.slug}','${modif.name}')">${modif.name}<span class="badgemodifright" >${modif.engine.power.hp+" HP"}</span>
                         <span class="badgemodifleft" >${modif.engine.type}</span></button></div>`);
        pagination.innerText = `${currentSlide + 1}/${limit}`;
        stepTitle.innerText = 'Étape 1';
        stepDescription.innerText = `Choix du Véhicule - Motorisation`;
        stepChoice.innerText = '';
        }else if (currentStep === 4) {
            // Step 5: Paramètrage
                stepTitle.innerText = 'Étape 2';
                stepDescription.innerText = `Choix des paramètres`;
                stepChoice.innerText = '';
                const divParam = document.getElementById('divParam');
                divParam.setAttribute("style", "margin-top: 150px;display:block");
        }else if (currentStep === 5) {
            // Step 6: Paramètrage
            const wheelOptions = wheelOptionsData;

            limit = wheelOptions.length;
            const select = document.getElementById('rim_diameter');
            const select1 = document.getElementById('centre_bore');
            const select2 = document.getElementById('front_rim');
            const select3 = document.getElementById('rim_offset');
            const select4 = document.getElementById('thread_size');
            select.innerHTML = ""; // Clear previous options

            items = wheelOptions.slice(currentSlide, currentSlide + maxVisibleItems).map(wheelOption=> {
            for (let i = 0; i < wheelOption.wheels.length; i++) {
                let option = document.createElement("option");
                option.value = wheelOption.wheels[i].front.rim_diameter; // Use the slug as the value
                option.textContent = wheelOption.wheels[i].front.rim_diameter+"\"";
                select.appendChild(option);
            }

                let option1 = document.createElement("option");
                option1.value = wheelOption.technical.centre_bore; // Use the slug as the value
                option1.textContent = wheelOption.technical.centre_bore;
                select1.appendChild(option1);

                for (let i = 0; i < wheelOption.wheels.length; i++) {
                    let option2 = document.createElement("option");
                    option2.value = wheelOption.wheels[i].front.rim; // Use the slug as the value
                    option2.textContent = wheelOption.wheels[i].front.rim;
                    select2.appendChild(option2);
                }

                
                let deports = [];

// Remplir le tableau avec les valeurs de wheelOption.wheels[i].front.rim_offset
                for (let i = 0; i < wheelOption.wheels.length; i++) {
                    deports.push(wheelOption.wheels[i].front.rim_offset);
                }

// Trouver la plus petite et la plus grande valeur
                let minValue = Math.min(...deports);
                let maxValue = Math.max(...deports);

// Ajouter deux valeurs inférieures et deux supérieures
                let newDeports = [
                    minValue - 2,
                    minValue - 1,
                    ...deports,
                    maxValue + 1,
                    maxValue + 2
                ];

                console.log("Nouveau tableau :", newDeports); // Vérifier le nouveau tableau
                // Supprimer les doublons et trier le tableau
                newDeports = [...new Set(newDeports)].sort((a, b) => a - b);

// Ajouter aussi les nouvelles valeurs dans le select
                newDeports.forEach(value => {
                    let option = document.createElement("option");
                    option.value = value;
                    option.textContent = "ET" + value;
                    select3.appendChild(option);
                });


                let option4 = document.createElement("option");
                option4.value =  wheelOption.technical.wheel_fasteners.thread_size; // Use the slug as the value
                option4.textContent = wheelOption.technical.wheel_fasteners.thread_size;
                select4.appendChild(option4);
            })

            pagination.innerText = `${currentSlide + 1}/${limit}`;
            stepTitle.innerText = 'Étape 2';
            stepDescription.innerText = `Choix des paramètres`;
            stepChoice.innerText = '';

        }

        // Update slider items
        sliderItems.innerHTML = items.join('');

        // Update button states
        document.getElementById('prevButton').disabled = (currentStep === 0 && currentSlide === 0);
        document.getElementById('nextButton').disabled = false;
    }

    function nextSlide() {
        const limit = currentStep === 0 ? yearsData.length :
            currentStep === 1 ? brandsData.length : currentStep === 2 ? modelsData.length : currentStep === 3 ? modificationsData.length : currentStep === 5 ? wheelOptionsData.length : null;

        if (currentSlide + maxVisibleItems < limit) {
            currentSlide++;
        } else {
            currentSlide = 0;
        }
        updateSlider();
    }

    function previousSlide() {
        if (currentSlide > 0) {
            currentSlide--;
        } else {
            const limit = currentStep === 0 ? yearsData.length :
                currentStep === 1 ? brandsData.length : currentStep === 2 ? modelsData.length : currentStep === 3 ? modificationsData.length : currentStep === 5 ? wheelOptionsData.length : null;
            currentSlide = limit - maxVisibleItems;
        }
        updateSlider();
    }

    function nextStep() {
        if (currentStep === 0) {
            fetchMake();
            currentStep++;
            currentSlide = 0;
        } else if (currentStep === 1) {
            // Select Model
            //selectedModel = selectedBrand.models[currentSlide];
            fetchModel();
            currentStep++;
            currentSlide = 0;
        } else if (currentStep === 2) {
            fetchModification();
            currentStep++;
            currentSlide = 0;
        }
        else if (currentStep === 3) {
            currentStep++;
            currentSlide = 0;
        }
        else if (currentStep === 4) {
            currentStep++;
            currentSlide = 0;
            fetchWheelOption();
        }else if (currentStep === 5) {
            alert(`Vous avez sélectionné: ${selectedBrand.name}, ${selectedModel.name}, ${selectedModel.engines[currentSlide]}`);
            return;
        }
        updateSlider();
    }

    function previousStep() {
        if (currentStep > 0) {
            currentStep--;
            currentSlide = 0;
        }
        updateSlider();
    }

    // Initialize the slider
    fetchYear();


    //Conf2D API
    function fetchYear(){

        let apiUrl = "https://api.wheel-size.com/v2/configurator/years/?user_key=a77861354fca6475fa1ec64b00bed407";
        //let apiUrl = "";

            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {

                    yearsData = data.data;
                    console.log(yearsData);
                    updateSlider();

                })
                .catch(error => {
                    console.error("Error fetching data:", error);
                });
    }
    function fetchMake(){
        let apiUrl = "https://api.wheel-size.com/v2/configurator/makes/?year="+selectedYear+"&user_key=a77861354fca6475fa1ec64b00bed407";
        //let apiUrl = "";

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                brandsData = data.data;
                console.log(brandsData);
                updateSlider();

            })
            .catch(error => {
                console.error("Error fetching data:", error);
            });


    }
    function fetchModel(){
        let apiUrl = "https://api.wheel-size.com/v2/configurator/models/?make="+brandSlug+"&year="+selectedYear+"&user_key=a77861354fca6475fa1ec64b00bed407";
        //let apiUrl = "";



        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                modelsData = data.data;
                console.log(modelsData);
                updateSlider();



            })
            .catch(error => {
                console.error("Error fetching data:", error);
            });


    }
    function fetchModification(){

        let apiUrl = "https://api.wheel-size.com/v2/modifications/?make="+brandSlug+"&model="+modelSlug+"&year="+selectedYear+"&user_key=a77861354fca6475fa1ec64b00bed407";
        //let apiUrl = "";
        console.log(apiUrl);
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {

                modificationsData = data.data;
                console.log(modificationsData);
                updateSlider();




            })
            .catch(error => {
                console.error("Error fetching data:", error);
            });


    }

    function fetchWheelOption() {

        let apiUrl = "https://api.wheel-size.com/v2/search/by_model/?make="+brandSlug+"&model="+modelSlug+"&modification="+modificationId+"&year="+selectedYear+"&user_key=a77861354fca6475fa1ec64b00bed407";

        console.log(apiUrl);

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {

                wheelOptionsData = data.data;
                console.log(wheelOptionsData);
                updateSlider();


            })
            .catch(error => {
                console.error("Error fetching data:", error);
            });


    }

    function selectYear(element, year) {
        resetSelect('.year-option');
        element.classList.add('selected');
        document.getElementById('stepChoice').textContent = year;
        selectedYear = year;
    }

    function selectBrand(element,slug,brand) {
        resetSelect('.make-option');
        element.classList.add('selected');
        document.getElementById('stepChoice').textContent = brand;
        selectedBrand = brand;
        brandSlug = slug;
    }

    function selectModel(element,slug,model) {
        resetSelect('.year-option');
        element.classList.add('selected');
        document.getElementById('stepChoice').textContent = model;
        selectedModel = model;
        modelSlug = slug;
    }
    function selectModification(element, id,name) {
        resetSelect('.modif-option');
        element.classList.add('selected');
        document.getElementById('stepChoice').textContent = name;
        modificationId = id;
        selectedModification = name;

    }

    function selectParam(button, param) {
        // Deselect all other buttons
        const allButtons = document.querySelectorAll('.param-option');
        for (const btn of allButtons) {
            btn.classList.remove('selected'); // Assuming 'selected' is the class used to indicate selection
        }

        // Select the current button
        button.classList.add('selected');

        // Handle the selection based on the param value (e.g., update a state, trigger an event)
        if (param === "free") {
            console.log(param);
            param_selected = param;
        } else if (param === "recommanded") {
            console.log(param);
            param_selected = param;
        }
    }


    function resetSelect(option) {
        const optionType = document.querySelectorAll(option);
        optionType.forEach(option => option.classList.remove('selected'));

    }
</script>
