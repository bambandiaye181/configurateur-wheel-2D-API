<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Configurateur 2D PP</title>
    <!--<base href="/">-->
    <base href=".">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" type="image/x-icon"
        href="https://paris-performance.com/wp-content/uploads/2024/09/PARIS_PERFORMANCE_no_text_blk_bg-v2.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body,
        html {
            font-family: 'Montserrat', Arial, Helvetica, sans-serif !important;
        }
    </style>
    <style>
        @media (min-width: 2100px) and (max-width: 2570px) {

            .slider_boxed,
            .content_wrap,
            .content_container {
                width: 2100px;
                margin: 0 auto;
            }
        }

        @media (min-width: 1600px) and (max-width: 2099px) {

            .slider_boxed,
            .content_wrap,
            .content_container {
                width: 1900px;
                margin: 0 auto;
            }
        }

        @media (min-width: 1200px) and (max-width: 1599px) {

            .slider_boxed,
            .content_wrap,
            .content_container {
                width: 1300px;
                margin: 0 auto;
            }
        }

        .container[_ngcontent-bic-c80] {
            top: 140px;
            position: fixed;
            width: 100vw;
            display: flex;
            left: 10px;
        }

        @media (orientation: portrait) and (max-width: 440px) {
            .container[_ngcontent-bic-c80] {
                background-color: #000
            }
        }

        @media only screen and (orientation: portrait) and (min-width: 600px) and (max-width: 1366px) {
            .container[_ngcontent-bic-c80] {
                height: calc(100vh - 40px);
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
                position: absolute;
                bottom: 0;
                max-width: unset
            }
        }

        @media only screen and (orientation: portrait) and (min-width: 600px) and (max-width: 1366px) {
            .container[_ngcontent-bic-c80] .config-panel[_ngcontent-bic-c80] {
                position: absolute;
                bottom: 0;
                max-width: unset
            }
        }


        @media (orientation: portrait) and (max-width: 440px) {
            .container-hidden-super-header[_ngcontent-bic-c80] {
                top: 0;
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
                margin-top: 60px;
                height: auto
            }
        }

        @media only screen and (orientation: portrait) and (min-width: 600px) and (max-width: 1366px) {
            .background[_ngcontent-bic-c88] {
                margin-top: 75px;
                height: 375px
            }
        }



        .logo-and-controls[_ngcontent-bic-c88] {
            position: absolute;
            top: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }


        @media (orientation: portrait) and (max-width: 440px) {
            .logo-and-controls[_ngcontent-bic-c88] {
                top: 10px;
                left: 20px;
                width: calc(100vw - 30px)
            }
        }

        @media only screen and (orientation: portrait) and (min-width: 600px) and (max-width: 1366px) {
            .logo-and-controls[_ngcontent-bic-c88] {
                top: 20px;
                left: 60px;
                width: calc(100vw - 100px)
            }
        }

        .logo-and-controls[_ngcontent-bic-c88] .logo-container[_ngcontent-bic-c88] img[_ngcontent-bic-c88] {
            height: 70px
        }

        @media (orientation: portrait) and (max-width: 440px) {
            .logo-and-controls[_ngcontent-bic-c88] .logo-container[_ngcontent-bic-c88] img[_ngcontent-bic-c88] {
                height: 30px
            }
        }

        @media only screen and (orientation: portrait) and (min-width: 600px) and (max-width: 1366px) {
            .logo-and-controls[_ngcontent-bic-c88] .logo-container[_ngcontent-bic-c88] img[_ngcontent-bic-c88] {
                height: 30px
            }
        }

        .background-change {
            position: absolute;
            top: 15px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            right: 40px;
        }

        @media (min-width: 2500px) {
            .background-change {
                right: 150px;
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
                min-height: 220px;
                position: inherit
            }
        }

        @media only screen and (orientation: portrait) and (min-width: 600px) and (max-width: 1366px) {
            .slider[_ngcontent-bic-c84] {
                height: 100%
            }
        }

        @media (orientation: portrait) and (max-width: 440px) {
            .fullscreen-view[_ngcontent-bic-c84] {
                margin-top: unset;
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
            background-position: center;
            margin-left: -5px;
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
                background-color: #000
            }
        }
    </style>
    <style>
        @media (orientation: portrait) and (max-width: 440px) {
            .nav-bar .tab-group-container {
                margin-top: 10px
            }
        }

        @media only screen and (orientation: portrait) and (min-width: 600px) and (max-width: 1366px) {
            .nav-bar .tab-group-container {
                margin-top: 10px
            }
        }

        .nav-bar .tab-group-container .mat-tab-group {
            max-width: 536px !important;
            overflow: auto !important
        }

        @media (orientation: portrait) and (max-width: 440px) {
            .nav-bar .tab-group-container .mat-tab-group {
                max-width: 100vw !important
            }
        }

        @media only screen and (orientation: portrait) and (min-width: 600px) and (max-width: 1366px) {
            .nav-bar .tab-group-container .mat-tab-group {
                max-width: 100vw !important
            }
        }

        .nav-bar .tab-group-container .mat-tab-header-pagination.mat-tab-header-pagination-disabled {
            display: none !important
        }

        @media (orientation: portrait) and (max-width: 440px) {
            .nav-bar .tab-group-container .mat-tab-header-pagination.mat-tab-header-pagination-disabled {
                display: none !important
            }
        }

        .nav-bar .tab-group-container .tab-content {
            height: calc(100vh - 139px);
            overflow: auto;
            margin-top: -15px;
            /* transition: margin-top 0.3s ease; */
        }

        /* .nav-bar .tab-group-container .tab-content:hover {
            margin-top: 10px;
        } */

        @media (min-width: 2500px) {
            height: calc(100vh - 139px);
            overflow: auto;
            /* margin-top: 20px; */
            margin-bottom: -400px;
        }


        @media (orientation: portrait) and (max-width: 440px) {
            .nav-bar .tab-group-container .tab-content {
                margin-bottom: 20px
            }
        }

        @media only screen and (orientation: portrait) and (min-width: 600px) and (max-width: 1366px) {
            .nav-bar .tab-group-container .tab-content {
                height: calc(100vh - 617px);
                margin-bottom: 50px
            }
        }

        .nav-bar .tab-group-container .tab-content .item-container {
            /*width: 446px;
            margin: 45px*/
        }

        @media (orientation: portrait) and (max-width: 440px) {
            .nav-bar .tab-group-container .tab-content .item-container {
                width: calc(100vw - 50px);
                margin: 25px
            }
        }

        @media only screen and (orientation: portrait) and (min-width: 600px) and (max-width: 1366px) {
            .nav-bar .tab-group-container .tab-content .item-container {
                width: calc(100vw - 120px);
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
            /* padding: 0 45px */
            text-align: center;
        }

        @media (orientation: portrait) and (max-width: 440px) {
            .nav-bar .mat-tab-labels {
                padding: 0 20px
            }
        }

        @media only screen and (orientation: portrait) and (min-width: 600px) and (max-width: 1366px) {
            .nav-bar .mat-tab-labels {
                justify-content: flex-start;
                padding: 0 34px
            }
        }

        .nav-bar .mat-tab-label {
            padding: 0 !important;
            min-width: 10px;
            margin: 0 5px
        }

        @media only screen and (orientation: portrait) and (min-width: 600px) and (max-width: 1366px) {
            .nav-bar .mat-tab-label {
                margin: 0 25px
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
            bottom: 0;
            display: flex;
            flex-direction: column;
            z-index: 1;
            align-items: flex-end;
            margin-left: -15px;
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
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
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

        .mat-tab-header-pagination-before,
        .mat-tab-header-rtl .mat-tab-header-pagination-after {
            padding-left: 4px
        }

        .mat-tab-header-pagination-before .mat-tab-header-pagination-chevron,
        .mat-tab-header-rtl .mat-tab-header-pagination-after .mat-tab-header-pagination-chevron {
            transform: rotate(-135deg)
        }

        .mat-tab-header-rtl .mat-tab-header-pagination-before,
        .mat-tab-header-pagination-after {
            padding-right: 4px
        }

        .mat-tab-header-rtl .mat-tab-header-pagination-before .mat-tab-header-pagination-chevron,
        .mat-tab-header-pagination-after .mat-tab-header-pagination-chevron {
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
            transition: transform 500ms cubic-bezier(0.35, 0, 0.25, 1);
            width: 500px;
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

        .mat-tab-labels {}

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
            opacity: 1;
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
                min-width: 72px
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
            background: linear-gradient(0deg, rgba(24, 24, 24, .7) 0%, rgba(0, 0, 0, 0) 100%);
            position: absolute;
            bottom: 59px;
            pointer-events: none
        }

        @media (orientation: portrait) and (max-width: 440px) {
            .config-actions-container[_ngcontent-bic-c105] .shadow[_ngcontent-bic-c105] {
                bottom: 49px
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
            background-blend-mode: overlay, overlay, normal;
            text-align: center;
            padding: 20px
        }

        @media (orientation: portrait) and (max-width: 440px) {
            .config-actions-container[_ngcontent-bic-c105] .actions-container[_ngcontent-bic-c105] .save-button[_ngcontent-bic-c105] {
                padding: 15px
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
            background: linear-gradient(#3E3E3E 0%, #000 100%);
            display: flex;
            justify-content: center;
            align-items: center
        }

        .config-actions-container[_ngcontent-bic-c105] .actions-container[_ngcontent-bic-c105] .menu-button[_ngcontent-bic-c105] .pp-dots[_ngcontent-bic-c105],
        .config-actions-container[_ngcontent-bic-c105] .actions-container[_ngcontent-bic-c105] .menu-button[_ngcontent-bic-c105] .pp-close[_ngcontent-bic-c105] {
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



        .region[_ngcontent-bic-c69] {
            cursor: pointer;
            border-image: linear-gradient(to right, rgba(204, 204, 204, 0) 0%, #cccccc61 20%, #cccccc61 80%, rgba(204, 204, 204, 0) 100%);
            border-bottom: 1px solid #cccccc61;
            border-image-slice: 1;
            padding: 10px 0 10px;
            display: flex;
            justify-content: space-between;
        }


        .containerCarChoice[_ngcontent-bic-c69] {
            cursor: pointer;
            border-image: linear-gradient(to right, rgba(204, 204, 204, 0) 0%, #cccccc61 20%, #cccccc61 80%, rgba(204, 204, 204, 0) 100%);
            border-bottom: 1px solid #cccccc61;
            border-image-slice: 1;
            padding: 10px 0 10px;
            /* display: flex; */
            justify-content: space-between;
        }

        @media (min-width: 2500px) {
            .containerCarChoice[_ngcontent-bic-c69] {
                cursor: pointer;
                border-image: linear-gradient(to right, rgba(204, 204, 204, 0) 0%, #cccccc61 20%, #cccccc61 80%, rgba(204, 204, 204, 0) 100%);
                border-bottom: 1px solid #cccccc61;
                border-image-slice: 1;
                padding: 10px 0 10px;
                /* display: flex; */
                justify-content: space-between;
            }
        }

        .containerParam[_ngcontent-bic-c69] {
            cursor: pointer;
            border-image: linear-gradient(to right, rgba(204, 204, 204, 0) 0%, #cccccc61 20%, #cccccc61 80%, rgba(204, 204, 204, 0) 100%);
            border-bottom: 1px solid #cccccc61;
            border-image-slice: 1;
            padding: 10px 0 10px;
            display: flex;
            justify-content: space-between;
        }

        @media (min-width: 2500px) {
            .containerParam[_ngcontent-bic-c69] {
                cursor: pointer;
                border-image: linear-gradient(to right, rgba(204, 204, 204, 0) 0%, #cccccc61 20%, #cccccc61 80%, rgba(204, 204, 204, 0) 100%);
                border-bottom: 1px solid #cccccc61;
                border-image-slice: 1;
                padding: 10px 0 10px;
                display: flex;
                justify-content: space-between;
            }
        }

        .container[_ngcontent-bic-c69] {
            cursor: pointer;
            /* border-bottom: solid 1px #5b5b5b; */
            /* padding: 10px 0 10px; */
            /* display: flex; */
            justify-content: space-between;
            /* margin-left: 25%; */
        }

        @media (min-width: 2500px) {
            .container[_ngcontent-bic-c69] {
                cursor: pointer;
                /* border-bottom: solid 1px #5b5b5b; */
                /* padding: 10px 0 10px; */
                /* display: flex; */
                justify-content: space-between;
                /* margin-left: 25%; */
            }
        }

        @media (orientation: portrait) and (max-width: 440px) {
            .container[_ngcontent-bic-c69] {
                padding: 0 0 30px
            }
        }

        @media only screen and (orientation: portrait) and (min-width: 600px) and (max-width: 1366px) {
            .container[_ngcontent-bic-c69] {
                padding: 0 0 25px
            }
        }

        .container[_ngcontent-bic-c69] .text-area[_ngcontent-bic-c69] {
            min-width: 70%;
            /*display: flex;*/
            flex-direction: column;
            justify-content: space-around;
            align-content: space-around;
            align-items: center;
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
                width: 240px
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

        .custom-checkbox {
            display: flex;
            align-items: end;
            margin-top: -45px;
            margin-right: -40px;
            margin-bottom: 30px;
            cursor: pointer;
            justify-content: flex-end;
            font-size: large;
        }

        .custom-checkbox input[type="checkbox"] {
            display: none;
            /* Hide default checkbox */
        }

        /* Default (unchecked) icon */
        .custom-checkbox i.fa-square-check {
            display: none;
            /* Hidden by default */
            color: #ffffff;
            /* Customize checked color */
        }

        /* Show checked icon when checkbox is checked */
        .custom-checkbox input[type="checkbox"]:checked~i.fa-square-check {
            display: inline;
            /* Show the checked icon */
        }

        /* Hide unchecked icon when checkbox is checked */
        .custom-checkbox input[type="checkbox"]:checked~i.fa-square {
            display: none;
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
        .front-rear-tabs {
            display: flex;
            gap: 10px;
            margin: 10px 50px 0 50px;
            flex-wrap: nowrap;
            align-content: center;
            justify-content: center;
        }

        .front-rear-tabs .fr-tab {
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            background: #fff;
            color: #222;
            cursor: pointer;
        }

        .front-rear-tabs .fr-tab.active {
            background: #fff;
            color: #fff;
            border-color: #222;
        }

        .front-rear-tabs .fr-tab.disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }
    </style>
    <style>
        .slider1-container {
            text-align: center;
            /*max-width: 300px;*/
            position: relative;
            /*padding: 20px;*/
            /*border: 1px solid #ccc;*/
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
            margin-left: 450px;
        }

        .arrow-previous {
            cursor: pointer;
            font-size: 24px;
            color: #ffffff;
            width: 100%;
            display: flex;
            justify-content: center;
            margin-left: 20px;
            margin-top: -25px;
            z-index: 1000;
        }

        .arrow-up {
            top: 10px;
        }

        .arrow-down {
            bottom: 80px;
        }

        /* Vertical slider container */
        @media (max-width: 2300px) {
            .slider-items {
                max-height: 500px;
                overflow: hidden;
                margin: 20px 0;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                transition: opacity 0.5s ease, transform 0.5s ease;
            }
        }

        @media (min-width: 2300px) {
            .slider-items {
                overflow: hidden;
                margin: 20px 0;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                transition: opacity 0.5s ease, transform 0.5s ease;
            }
        }

        .slider-items.animate {
            opacity: 0;
            transform: translateY(-20px);
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
            text-transform: uppercase;
        }

        /* Pagination */
        .pagination {
            /* margin-top: 20px; */
        }

        .pagination span {
            font-size: 16px;
            color: #ffffff;
        }

        .step-buttons {
            margin-top: -210px;
            display: flex;
            padding: 10px;
            justify-content: space-between;
            width: 100px;
            margin-left: 470px;
            z-index: 1000;
        }

        .step-buttons button {
            padding: 10px 15px;
            cursor: pointer;
            color: black;
        }

        /* .year-option {
            color: #000000;
            height: 50px;
            width: 160px;
            transition: transform 0.2s;
            cursor: pointer;
            border: 2px solid transparent;
        } */
        .year-option {
            height: 40px;
            text-align: center;
            font-size: 10px;
            display: inline-block;
            background: rgba(255, 255, 255, 0.65) !important;
            opacity: 0.76;
            width: 180px;
            box-shadow: 0 2px 4px rgba(11, 15, 50, 0.08);
            border: 0px solid rgba(0, 0, 0, 1);
            border-radius: 5px;
            background-blend-mode: luminosity;
            -webkit-backdrop-filter: blur(25px);
            backdrop-filter: blur(25px);
        }

        .year-option:hover {
            transform: scale(1.1);
            transition: transform 0.3s ease;
        }

        .year-option.selected {
            border: 2px solid #ffffff;
            transform: scale(1.2);
            transition: transform 0.3s ease;
        }

        .model-option {
            height: 40px;
            text-align: center;
            font-size: 10px;
            display: inline-block;
            background: rgba(255, 255, 255, 0.65) !important;
            border: 2px solid transparent;
            border-radius: 5px;
            color: #000000;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .model-option:hover {
            transform: scale(1.1);
            transition: transform 0.3s ease;
        }

        .model-option.selected {
            border: 2px solid #ffffff;
            transform: scale(1.2);
            transition: transform 0.3s ease;
        }

        .make-option:hover {
            transform: scale(1.2);
            transition: transform 0.3s ease;
        }

        .make-option.selected {
            /*border: 2px solid #ffffff;*/
            transform: scale(1.5);
            transition: transform 0.3s ease;
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
            height: 40px;
            text-align: center;
            font-size: 10px;
            display: inline-block;
            background: rgba(255, 255, 255, 0.65) !important;
            opacity: 0.76;
            width: 180px;
            box-shadow: 0 2px 4px rgba(11, 15, 50, 0.08);
            border: 0px solid rgba(0, 0, 0, 1);
            border-radius: 5px;
            background-blend-mode: luminosity;
            -webkit-backdrop-filter: blur(25px);
            backdrop-filter: blur(25px);
        }

        .modif-option:hover {
            transform: scale(1.1);
        }

        .modif-option.selected {
            border: 2px solid #ffffff;
            transform: scale(1.1);
        }

        .param-option {
            height: 40px;
            text-align: center;
            font-size: 10px;
            display: inline-block;
            background: rgba(255, 255, 255, 0.65) !important;
            opacity: 0.76;
            width: 180px;
            box-shadow: 0 2px 4px rgba(11, 15, 50, 0.08);
            border: 0px solid rgba(0, 0, 0, 1);
            border-radius: 5px;
            background-blend-mode: luminosity;
            -webkit-backdrop-filter: blur(25px);
            backdrop-filter: blur(25px);
        }

        .param-option:hover {
            transform: scale(1.1);
        }

        .param-option.selected {
            border: 2px solid #ffffff;
            transform: scale(1.1);
        }

        .badge {
            position: absolute;
            padding: 1px 8px 0px 10px;
            right: 90px;
            font-size: 12px;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.65) !important;
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
        }

        .badge:hover::after {
            opacity: 1;
            width: 200px;
        }

        .dynamic-select {
            /* background-color: #ffffff !important; */
            height: 40px;
            text-align: center;
            font-size: 10px;
            display: inline-block;
            background: rgba(255, 255, 255, 0.65) !important;
            opacity: 0.76;
            box-shadow: 0 2px 4px rgba(11, 15, 50, 0.08);
            border: 0px solid rgba(0, 0, 0, 1);
            border-radius: 5px;
            background-blend-mode: luminosity;
            -webkit-backdrop-filter: blur(25px);
            backdrop-filter: blur(25px);
        }

        .dynamic-select option {
            background-color: rgba(0, 0, 0, 0.2);
        }

        select {
            color: rgba(34, 34, 34, 0.7) !important;
        }

        select option {
            background-color: rgba(34, 34, 34, 0.7) !important;
            color: #ffffff !important;
        }

        select option:checked {
            background-color: rgba(34, 34, 34, 0.7) !important;
            color: #ffffff !important;
        }

        select option:hover {
            background-color: rgba(34, 34, 34, 0.7) !important;
            color: #ffffff !important;
        }

        td,
        th {
            border: 1px solid #e4e7e8;
            padding: 4px 4px 20px 40px;
            /* margin-right: 10px; */
        }

        .scheme_original td,
        .scheme_original th {
            border-color: rgba(79, 89, 102, .08);
        }

        .wheel-option {
            border-radius: 10%;
            transition: transform 0.2s;
            cursor: pointer;
            border: 2px solid transparent;
            object-fit: cover;
            width: auto;
        }

        .wheel-option:hover {
            /* transform: scale(1.1);*/
            transform: scale(1.1);
            transition: transform 0.3s ease;
        }

        .wheel-option.selected {
            border: 0.1px solid rgb(248, 248, 248);
            transform: scale(1.1);
            transition: transform 0.3s ease;
        }

        .page_content_wrap {
            padding: 0;
            margin-left: -260px;
        }

        @media (max-width: 1990px) {
            .page_content_wrap {
                padding: 0;
                margin-left: -110px;
            }
        }
    </style>
    <style>
        .btn-plat {
            background-color: #f0f0f0;
            /* Couleur de fond du bouton */
            border: none;
            /* Supprime la bordure par défaut */
            color: #333;
            /* Couleur du texte */
            padding: 10px 20px;
            /* Espacement interne */
            cursor: pointer;
            /* Change le curseur en pointeur au survol */
            border-radius: 5px;
            /* Arrondis les coins */
            transition: background-color 0.3s ease;
            margin-left: 50px;
        }

        .btn-plat:hover {
            background-color: #e0e0e0;
            /* Change la couleur de fond au survol */
        }
    </style>
    <style>
        .action-panel {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.65) !important;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            padding: 10px;
            width: 50px;
            position: relative;
            margin-right: 15px;
            margin-top: -35px;
        }

        .action-panel i {
            font-size: 24px;
            color: #333;
            cursor: pointer;
            margin: 15px 0;
        }

        .menu {
            display: block;
            /* Afficher par défaut */
        }

        /* Add class for showing menu */
        .show-menu {
            display: block;
        }
    </style>
    <style>
        .list-palet {
            display: flex;
            flex-direction: column;
            margin-bottom: 36px;
            width: 400px;
            margin-left: 10px;
            margin-top: 71px;
        }

        .palet-container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .circle-slider {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            position: relative;
            justify-content: center;
        }

        .slider-container-pallet {
            overflow: hidden;
            width: 320px;
        }

        .slider-track {
            display: flex;
            gap: 15px;
            transition: transform 0.5s ease;
        }

        .car-color {
            width: 80px;
            height: 80px;
            background-color: black;
            border-radius: 50%;
            flex: 0 0 80px;
        }

        .circle {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            flex: 0 0 80px;
        }

        .circle.selected {
            /*border: 3px solid #ffffff;*/
            transition: transform 0.5s ease;
            transform: scale(1.2);
        }

        .wheel-option-1 {
            width: 70px;
            height: 70px;
            background-color: black;
            border-radius: 50%;
            flex: 0 0 50px;
            object-fit: cover;
        }

        .wheel-option-1.selected {
            border: 3px solid #ffffff;
        }

        .slider-btn {
            cursor: pointer;
            font-size: 20px;
            background-color: lightgray;
            border: none;
            padding: 10px;
            margin: 0 5px;
        }

        .slider-btn.disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .circle-menu {
            display: flex;
            justify-content: center;
            align-items: center;
            transition: height 0.5s ease;
            overflow: hidden;
            height: 0;
            flex-direction: column;
        }

        .circle-menu.active {
            height: 810px;
            /* Adjust height based on slider size */
        }

        .circle-menu-wheel {
            display: flex;
            justify-content: center;
            align-items: center;
            transition: height 0.5s ease;
            overflow: hidden;
            height: 0;
            flex-direction: column;
        }

        .circle-menu-wheel.active {
            height: 120px;
            /* Adjust height based on slider size */
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://unpkg.com/merge-images"></script>
    <style>
        button,
        .btn-plat,
        .param-option,
        .year-option,
        .make-option,
        .modif-option,
        .model-option {
            color: #000 !important;
        }
    </style>
</head>

<body>

    <app-root>
        <app-model-selection>
            <app-configuration-area>
                <div>
                </div>
                <div _ngcontent-bic-c80="" class="container">
                    <div _ngcontent-bic-c80="" class="view-port ">
                        <app-car-viewer _nghost-bic-c88="">

                            <div _ngcontent-bic-c88="" class="background ">
                                <rt-render-slider _ngcontent-bic-c88="">
                                    <div _ngcontent-bic-c84="" class="slider" style="height: 100%;">
                                        <div _ngcontent-bic-c84="" class="slider-container">
                                            <div _ngcontent-bic-c84="" id="render-container" class="slider-slide "
                                                style="background-image: url(&quot;https://paris-performance.com/wp-content/uploads/2024/09/Withroom_frontleft1.jpg&quot;);">
                                                <div id="car"
                                                    style="background-image: url(&quot;https://paris-performance.com/wp-content/uploads/2024/10/car_default_2.png&quot;);background-size: 80% auto;margin-left: 180px;"
                                                    class="slider-slide" _ngcontent-bic-c84=""></div>
                                                <div id="loader"
                                                    style="display:none; text-align:center; position:absolute; top:50%; left:50%; transform:translate(-50%, -50%);">
                                                    <img src="https://paris-performance.com/wp-content/uploads/2024/12/208-1.gif"
                                                        style="margin-left: 400px;width:100px" alt="Chargement...">
                                                </div>

                                            </div>

                                        </div>
                                        <!--<div class="step-buttons" id="stepButtons">
                                            <button id="prevButton" onclick="previousStep()" disabled><i
                                                    class="fa-solid fa-circle-chevron-left"
                                                    style="font-size: large"></i></button>&nbsp;
                                            <button id="nextButton" onclick="nextStep()"><i
                                                    class="fa-solid fa-circle-chevron-right"
                                                    style="font-size: large"></i></button>
                                        </div>-->
                                    </div>


                                </rt-render-slider>



                            </div>

                            <div _ngcontent-bic-c88="" class="logo-and-controls ng-trigger ng-trigger-fadeInOut">
                                <div _ngcontent-bic-c88="" class="logo-container">
                                    <button id="menuButtonClose" style="display: none;" class="btn-plat">
                                        <i id="iconMenuButtonClose" class="fa-solid fa-bars"
                                            style="font-size: large;color: white"></i>
                                    </button>
                                </div>

                            </div>
                            <div _ngcontent-bic-c88=""
                                class="logo-and-controls ng-trigger ng-trigger-fadeInOut background-change">
                                <div _ngcontent-bic-c88="" class="logo-container">
                                    <img _ngcontent-bic-c88="" id="bgButton"
                                        style="background-color: white;border-radius: 15px;width: 50px;height: 50px;margin-right: 15px;"
                                        src="https://paris-performance.com/wp-content/uploads/2024/09/icon-background.png">
                                </div>
                            </div>
                        </app-car-viewer>
                    </div>
                    <div _ngcontent-bic-c80="" id="menu"
                        class="config-panel ng-trigger ng-trigger-navFadeInOutFromRight" style="margin-top: -140px">
                        <app-configuration-panel>
                            <div _ngcontent-bic-c76="" class="configuration-container">
                                <app-navigation>
                                    <div class="nav-bar">
                                        <div style="text-align: end;padding: 10px;">
                                            <button id="menuButton" class="btn-plat"
                                                style="background-color: rgba(0, 0, 0, 0);">
                                                <i id="iconMenuButton" class="fa-solid fa-circle-xmark"
                                                    style="font-size: large;color: white"></i>
                                            </button>
                                        </div>
                                        <div id="tabGroupContainer" class="tab-group-container">
                                            <mat-tab-group>
                                                <mat-tab-header class="mat-tab-header">

                                                    <div class="mat-tab-label-container">
                                                        <div role="tablist" class="mat-tab-list"
                                                            style="transform: translateX(0px);">
                                                            <div id="customTabs" class="custom-tabs">
                                                                <div class="custom-tab" id="tab-etape-1"
                                                                    onclick="goToStep(0)">MODÈLE</div>
                                                                <div class="custom-tab" id="tab-etape-2"
                                                                    onclick="goToStep(4)">PARAMÈTRES</div>
                                                                <div class="custom-tab" id="tab-etape-3"
                                                                    onclick="goToStep(6)">FINITIONS</div>
                                                                <div class="custom-tab" id="tab-resume"
                                                                    onclick="goToStep(8)">RÉSUMÉ</div>
                                                            </div>
                                                            <div class="mat-tab-labels">
                                                                <div role="tab" mattablabelwrapper="" mat-ripple=""
                                                                    cdkmonitorelementfocus=""
                                                                    class="mat-ripple mat-tab-label mat-focus-indicator  mat-tab-label-active"
                                                                    id="mat-tab-label-2-0" tabindex="0"
                                                                    aria-posinset="1" aria-setsize="3"
                                                                    aria-controls="mat-tab-content-2-0"
                                                                    aria-selected="true" aria-disabled="false">
                                                                    <div class="mat-tab-label-content"
                                                                        style="color: #ffffff !important;">
                                                                        <span id="stepDescription"
                                                                            style="padding-left: 15px;left: 44px;font-size: medium;text-align: center;color: #ffffff !important;display: block;">Choix
                                                                            du Véhicule - Année</span>
                                                                        <span id="stepChoice"
                                                                            style="margin-top: 70px;padding-left: 15px;font-size: large;"></span>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                            <div style="display: flex;align-items: center;justify-content: space-between;margin: 25px;">
                                                            <button onclick="previousStep()" id="arrow-back"
                                                                style="display: none; width: 40px; height: 40px; border-radius: 8px; border: none; background: rgba(255, 255, 255, 0.65) !important; display: flex; align-items: center; justify-content: center; padding: 0; box-shadow: 0 2px 6px rgba(0,0,0,0.08);margin-left: 15px;">
                                                                <i class="fa-solid fa-chevron-left"
                                                                    style="font-size: 22px; color: #fff;"></i>
                                                            </button>
                                                            <button id="arrow-next"
                                                                onclick="nextStep()" style="display: none;width: 40px; height: 40px; border-radius: 8px; border: none; background: rgba(255, 255, 255, 0.65) !important; display: flex; align-items: center; justify-content: center; padding: 0; box-shadow: 0 2px 6px rgba(0,0,0,0.08);"> <i class="fa-solid fa-chevron-right"
                                                                    style="font-size: 22px; color: #fff;"></i>
                                                            </button>
                                                           
                                                            </div>
                                                            <button class="btn-plat" id="close-panel"
                                                                onclick="hideSubMenu('divWheelModel')"
                                                                style="display: none;margin-left: 440px;margin-top: -35px;">
                                                                <i class="fa-solid fa-close"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <button aria-hidden="true" type="button" mat-ripple="" tabindex="-1"
                                                        class="mat-ripple mat-tab-header-pagination mat-tab-header-pagination-after mat-elevation-z4 mat-tab-header-pagination-disabled"
                                                        disabled="">
                                                        <div class="mat-tab-header-pagination-chevron"></div>
                                                    </button>
                                                </mat-tab-header>
                                                <div class="mat-tab-body-wrapper">
                                                    <mat-tab-body role="tabpanel"
                                                        class="mat-tab-body ng-tns-c37-11  mat-tab-body-active"
                                                        id="mat-tab-content-2-0" aria-labelledby="mat-tab-label-2-0">
                                                        <div cdkscrollable=""
                                                            class="mat-tab-body-content ng-tns-c37-11 ng-trigger ng-trigger-translateTab"
                                                            style="transform: none;">


                                                        </div>
                                                    </mat-tab-body>
                                                    <mat-tab-body role="tabpanel" class="mat-tab-body ng-tns-c37-12 "
                                                        id="mat-tab-content-2-1" aria-labelledby="mat-tab-label-2-1">
                                                        <div cdkscrollable=""
                                                            class="mat-tab-body-content ng-tns-c37-12 ng-trigger ng-trigger-translateTab"
                                                            style="transform: translate3d(100%, 0px, 0px); min-height: 1px; visibility: hidden;">

                                                        </div>
                                                    </mat-tab-body>
                                                    <mat-tab-body role="tabpanel" class="mat-tab-body ng-tns-c37-13 "
                                                        id="mat-tab-content-2-2" aria-labelledby="mat-tab-label-2-2">
                                                        <div cdkscrollable=""
                                                            class="mat-tab-body-content ng-tns-c37-13 ng-trigger ng-trigger-translateTab"
                                                            style="transform: translate3d(100%, 0px, 0px); min-height: 1px; visibility: hidden;">
                                                        </div>
                                                    </mat-tab-body>

                                                </div>
                                                <app-list-item _nghost-bic-c69="" id="region-section"
                                                    style="display: none;">
                                                    <div _ngcontent-bic-c69="" class="containerCarChoice"
                                                        style="text-align: center;">
                                                        <div _ngcontent-bic-c69="" class="text-area">
                                                            <div
                                                                style="display: flex;align-items: center;gap: 32px;justify-content: center;">
                                                                <div style="margin-bottom: 0;">
                                                                    <label for="brandOrder" style="margin-right: 8px;">
                                                                        &nbsp;</label><br>
                                                                    <select id="mainFilter"
                                                                        onchange="handleMainFilterChange()" style="height: 40px; text-align: center; font-size: 10px; display: inline-block;
                                                                            background: rgba(255, 255, 255, 0.65) !important;
                                                                            opacity: 0.76;
                                                                            width: 180px;
                                                                            box-shadow: 0 2px 4px rgba(11, 15, 50, 0.08);
                                                                            border: 0px solid rgba(0, 0, 0, 1);
                                                                            border-radius: 5px;
                                                                            background-blend-mode: luminosity;
                                                                            -webkit-backdrop-filter: blur(25px);
                                                                            backdrop-filter: blur(25px);">
                                                                        <option value="">Sélectionner un filtre</option>
                                                                        <option value="region">Région</option>
                                                                        <option value="popular">Marques populaires
                                                                        </option>
                                                                        <option value="alphabetical">Ordre alphabétique
                                                                        </option>
                                                                    </select>

                                                                    <select id="regionSelect" onchange="filterBrands()"
                                                                        style="height: 40px; text-align: center; font-size: 10px; display: none;
                                                                            background: rgba(255, 255, 255, 0.65) !important;
                                                                            opacity: 0.76;
                                                                            box-shadow: 0 2px 4px rgba(11, 15, 50, 0.08);
                                                                            border: 0px solid rgba(0, 0, 0, 1);
                                                                            border-radius: 5px;
                                                                            background-blend-mode: luminosity;
                                                                            -webkit-backdrop-filter: blur(25px);
                                                                            backdrop-filter: blur(25px);">
                                                                        <option value="">Sélectionner une région
                                                                        </option>
                                                                        <option value="usdm">USA+</option>
                                                                        <option value="cdm">Canada</option>
                                                                        <option value="mxndm">Mexico</option>
                                                                        <option value="ladm">Central & South America
                                                                        </option>
                                                                        <option value="eudm">Europe</option>
                                                                        <option value="russia">Russia+</option>
                                                                        <option value="jdm">Japan</option>
                                                                        <option value="chdm">China</option>
                                                                        <option value="skdm">South Korea</option>
                                                                        <option value="sam">Southeast Asia</option>
                                                                        <option value="medm">Middle East</option>
                                                                        <option value="nadm">North Africa</option>
                                                                        <option value="sadm">South Africa</option>
                                                                        <option value="audm">Oceania</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="text-align: right;">

                                                    </div>
                                                </app-list-item>

                                            </mat-tab-group>
                                            <div class="tab-content" id="divWheelOption" style="display: none;">
                                                <div class="front-rear-tabs" id="frontRearTabsWheelOption">
                                                    <button type="button" class="fr-tab front-tab active" onclick="
                                                        document.querySelector('.front-tab').classList.add('active');
                                                        document.querySelector('.rear-tab').classList.remove('active');
                                                        document.getElementById('divWheelOptionFront').style.display = 'block';
                                                        document.getElementById('divWheelOptionRear').style.display = 'none';
                                                    ">Avant</button>
                                                    <button type="button" class="fr-tab rear-tab" onclick="
                                                        document.querySelector('.rear-tab').classList.add('active');
                                                        document.querySelector('.front-tab').classList.remove('active');
                                                        document.getElementById('divWheelOptionFront').style.display = 'none';
                                                        document.getElementById('divWheelOptionRear').style.display = 'block';
                                                    ">Arrière</button>
                                                </div>
                                                <div id="divWheelOptionFront">
                                                    <div class="item-container ng-star-inserted" id="0"
                                                        style="margin-top: 50px;">
                                                        <app-list-item _nghost-bic-c69="">
                                                            <div _ngcontent-bic-c69="" class="containerParam">
                                                                <div _ngcontent-bic-c69="" class="text-area">
                                                                    <div _ngcontent-bic-c69="" class="title-section">
                                                                        <span _ngcontent-bic-c69=""
                                                                            style="font-size: large;margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;">Taille</span>
                                                                    </div>
                                                                </div>
                                                                <div _ngcontent-bic-c69="" class="img-area"
                                                                    style="margin-right: 30px;">
                                                                    <div _ngcontent-bic-c69=""
                                                                        class="img-container ng-star-inserted">
                                                                        <select class="dynamic-select" id="rim_diameter"
                                                                            onchange="handleRimOffsetChange(this)"
                                                                            style="order-radius: 5px;border-color: white;">
                                                                            <!-- Ajoutez d'autres options si nécessaire -->
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </app-list-item>
                                                    </div>
                                                    <div class="item-container ng-star-inserted" id="1"
                                                        style="margin-top: 50px;">
                                                        <app-list-item _nghost-bic-c69="">
                                                            <div _ngcontent-bic-c69="" class="containerParam">
                                                                <div _ngcontent-bic-c69="" class="text-area">
                                                                    <div _ngcontent-bic-c69="" class="title-section">
                                                                        <span _ngcontent-bic-c69=""
                                                                            style="font-size: large;margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;">Alesage
                                                                            Central</span>
                                                                    </div>
                                                                </div>
                                                                <div _ngcontent-bic-c69="" class="img-area"
                                                                    style="margin-right: 30px;">
                                                                    <div _ngcontent-bic-c69=""
                                                                        class="img-container ng-star-inserted">
                                                                        <select class="dynamic-select" id="centre_bore">
                                                                            <!-- Ajoutez d'autres options si nécessaire -->
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </app-list-item>
                                                    </div>
                                                    <div class="item-container ng-star-inserted" id="2"
                                                        style="margin-top: 50px;">
                                                        <app-list-item _nghost-bic-c69="">
                                                            <div _ngcontent-bic-c69="" class="containerParam">
                                                                <div _ngcontent-bic-c69="" class="text-area">
                                                                    <div _ngcontent-bic-c69="" class="title-section">
                                                                        <span _ngcontent-bic-c69=""
                                                                            style="font-size: large;margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;">Entraxe</span>
                                                                    </div>
                                                                </div>
                                                                <div _ngcontent-bic-c69="" class="img-area"
                                                                    style="margin-right: 30px;">
                                                                    <div _ngcontent-bic-c69=""
                                                                        class="img-container ng-star-inserted">
                                                                        <select class="dynamic-select"
                                                                            id="bolt_pattern">
                                                                            <!-- Ajoutez d'autres options si nécessaire -->
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </app-list-item>
                                                    </div>
                                                    <div class="item-container ng-star-inserted" id="3"
                                                        style="margin-top: 50px;">
                                                        <app-list-item _nghost-bic-c69="">
                                                            <div _ngcontent-bic-c69="" class="containerParam">
                                                                <div _ngcontent-bic-c69="" class="text-area">
                                                                    <div _ngcontent-bic-c69="" class="title-section">
                                                                        <span _ngcontent-bic-c69=""
                                                                            style="font-size: large;margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;">Déport</span>
                                                                    </div>
                                                                </div>
                                                                <div _ngcontent-bic-c69="" class="img-area"
                                                                    style="margin-right: 30px;">
                                                                    <div _ngcontent-bic-c69=""
                                                                        class="img-container ng-star-inserted">
                                                                        <select class="dynamic-select" id="rim_offset">
                                                                            <!-- Ajoutez d'autres options si nécessaire -->
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </app-list-item>
                                                    </div>
                                                    <div class="item-container ng-star-inserted" id="4"
                                                        style="margin-top: 50px;">
                                                        <app-list-item _nghost-bic-c69="">
                                                            <div _ngcontent-bic-c69="" class="containerParam">
                                                                <div _ngcontent-bic-c69="" class="text-area">
                                                                    <div _ngcontent-bic-c69="" class="title-section">
                                                                        <span _ngcontent-bic-c69=""
                                                                            style="font-size: large;margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;">Taille
                                                                            de Filletage </span>
                                                                    </div>
                                                                </div>
                                                                <div _ngcontent-bic-c69="" class="img-area"
                                                                    style="margin-right: 30px;">
                                                                    <div _ngcontent-bic-c69=""
                                                                        class="img-container ng-star-inserted">
                                                                        <select class="dynamic-select" id="thread_size">
                                                                            <!-- Ajoutez d'autres options si nécessaire -->
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </app-list-item>
                                                    </div>
                                                    <div class="item-container ng-star-inserted" id="5"
                                                        style="margin-top: 50px;">
                                                        <app-list-item _nghost-bic-c69="">
                                                            <div _ngcontent-bic-c69="" class="containerParam">
                                                                <div _ngcontent-bic-c69="" class="text-area"
                                                                    style="margin-left: 15px;">
                                                                    <div _ngcontent-bic-c69="" class="title-section">
                                                                        <div class="checkbox">
                                                                            <span
                                                                                style="margin-right: 200px;font-size: large;">Conserver
                                                                                les mêmes paramètres <br>avant et
                                                                                arrière</span>
                                                                            <label for="keepParamFrontBack"
                                                                                class="custom-checkbox">
                                                                                <input type="checkbox"
                                                                                    id="keepParamFrontBack" checked>
                                                                                <i class="fa-solid fa-square"></i>
                                                                                <i class="fa-solid fa-square-check"></i>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div _ngcontent-bic-c69="" class="img-area"
                                                                    style="margin-right: 30px;">
                                                                    <div _ngcontent-bic-c69=""
                                                                        class="img-container ng-star-inserted">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </app-list-item>
                                                    </div>
                                                </div>
                                                <div id="divWheelOptionRear" style="display: none;">
                                                    <div class="item-container ng-star-inserted" id="0"
                                                        style="margin-top: 50px;">
                                                        <app-list-item _nghost-bic-c69="">
                                                            <div _ngcontent-bic-c69="" class="containerParam">
                                                                <div _ngcontent-bic-c69="" class="text-area">
                                                                    <div _ngcontent-bic-c69="" class="title-section">
                                                                        <span _ngcontent-bic-c69=""
                                                                            style="font-size: large;margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;">Taille</span>
                                                                    </div>
                                                                </div>
                                                                <div _ngcontent-bic-c69="" class="img-area"
                                                                    style="margin-right: 30px;">
                                                                    <div _ngcontent-bic-c69=""
                                                                        class="img-container ng-star-inserted">
                                                                        <select class="dynamic-select"
                                                                            id="rim_diameter_rear"
                                                                            onchange="handleRimOffsetChange(this)">
                                                                            <!-- Ajoutez d'autres options si nécessaire -->
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </app-list-item>
                                                    </div>
                                                    <div class="item-container ng-star-inserted" id="1"
                                                        style="margin-top: 50px;">
                                                        <app-list-item _nghost-bic-c69="">
                                                            <div _ngcontent-bic-c69="" class="containerParam">
                                                                <div _ngcontent-bic-c69="" class="text-area">
                                                                    <div _ngcontent-bic-c69="" class="title-section">
                                                                        <span _ngcontent-bic-c69=""
                                                                            style="font-size: large;margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;">Alesage
                                                                            Central</span>
                                                                    </div>
                                                                </div>
                                                                <div _ngcontent-bic-c69="" class="img-area"
                                                                    style="margin-right: 30px;">
                                                                    <div _ngcontent-bic-c69=""
                                                                        class="img-container ng-star-inserted">
                                                                        <select class="dynamic-select"
                                                                            id="centre_bore_rear">
                                                                            <!-- Ajoutez d'autres options si nécessaire -->
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </app-list-item>
                                                    </div>
                                                    <div class="item-container ng-star-inserted" id="2"
                                                        style="margin-top: 50px;">
                                                        <app-list-item _nghost-bic-c69="">
                                                            <div _ngcontent-bic-c69="" class="containerParam">
                                                                <div _ngcontent-bic-c69="" class="text-area">
                                                                    <div _ngcontent-bic-c69="" class="title-section">
                                                                        <span _ngcontent-bic-c69=""
                                                                            style="font-size: large;margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;">Entraxe</span>
                                                                    </div>
                                                                </div>
                                                                <div _ngcontent-bic-c69="" class="img-area"
                                                                    style="margin-right: 30px;">
                                                                    <div _ngcontent-bic-c69=""
                                                                        class="img-container ng-star-inserted">
                                                                        <select class="dynamic-select"
                                                                            id="bolt_pattern_rear">
                                                                            <!-- Ajoutez d'autres options si nécessaire -->
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </app-list-item>
                                                    </div>
                                                    <div class="item-container ng-star-inserted" id="3"
                                                        style="margin-top: 50px;">
                                                        <app-list-item _nghost-bic-c69="">
                                                            <div _ngcontent-bic-c69="" class="containerParam">
                                                                <div _ngcontent-bic-c69="" class="text-area">
                                                                    <div _ngcontent-bic-c69="" class="title-section">
                                                                        <span _ngcontent-bic-c69=""
                                                                            style="font-size: large;margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;">Déport</span>
                                                                    </div>
                                                                </div>
                                                                <div _ngcontent-bic-c69="" class="img-area"
                                                                    style="margin-right: 30px;">
                                                                    <div _ngcontent-bic-c69=""
                                                                        class="img-container ng-star-inserted">
                                                                        <select class="dynamic-select"
                                                                            id="rim_offset_rear">
                                                                            <!-- Ajoutez d'autres options si nécessaire -->
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </app-list-item>
                                                    </div>
                                                    <div class="item-container ng-star-inserted" id="4"
                                                        style="margin-top: 50px;">
                                                        <app-list-item _nghost-bic-c69="">
                                                            <div _ngcontent-bic-c69="" class="containerParam">
                                                                <div _ngcontent-bic-c69="" class="text-area">
                                                                    <div _ngcontent-bic-c69="" class="title-section">
                                                                        <span _ngcontent-bic-c69=""
                                                                            style="font-size: large;margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;">Taille
                                                                            de Filletage </span>
                                                                    </div>
                                                                </div>
                                                                <div _ngcontent-bic-c69="" class="img-area"
                                                                    style="margin-right: 30px;">
                                                                    <div _ngcontent-bic-c69=""
                                                                        class="img-container ng-star-inserted">
                                                                        <select class="dynamic-select"
                                                                            id="thread_size_rear">
                                                                            <!-- Ajoutez d'autres options si nécessaire -->
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </app-list-item>
                                                    </div>
                                                    <script>
                                                        // Fonction pour activer/désactiver les selects arrière selon la checkbox
                                                        function updateRearSelectsDisabledState() {
                                                            var keepParam = document.getElementById('keepParamFrontBack');
                                                            var disabled = keepParam && keepParam.checked;
                                                            var rearSelectIds = [
                                                                'rim_diameter_rear',
                                                                'centre_bore_rear',
                                                                'bolt_pattern_rear',
                                                                'rim_offset_rear',
                                                                'thread_size_rear'
                                                            ];
                                                            rearSelectIds.forEach(function (id) {
                                                                var el = document.getElementById(id);
                                                                if (el) el.disabled = disabled;
                                                            });
                                                        }

                                                        // Ajoute l'écouteur sur la checkbox
                                                        document.addEventListener('DOMContentLoaded', function () {
                                                            var keepParam = document.getElementById('keepParamFrontBack');
                                                            if (keepParam) {
                                                                keepParam.addEventListener('change', updateRearSelectsDisabledState);
                                                                updateRearSelectsDisabledState();
                                                            }
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                            <div class="tab-content" id="divWheelFreeOption" style="display: none;">
                                                <div class="front-rear-tabs" id="frontRearTabsWheelFreeOption">
                                                    <button type="button" class="fr-tab front-tab active">Avant</button>
                                                    <button type="button" class="fr-tab rear-tab">Arrière</button>
                                                </div>

                                                <div class="item-container ng-star-inserted" id="0"
                                                    style="margin-top: 50px;">
                                                    <app-list-item _nghost-bic-c69="">
                                                        <div _ngcontent-bic-c69="" class="containerParam">
                                                            <div _ngcontent-bic-c69="" class="text-area">
                                                                <div _ngcontent-bic-c69="" class="title-section">
                                                                    <span _ngcontent-bic-c69=""
                                                                        style="font-size: large;margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;">Taille</span>
                                                                </div>
                                                            </div>
                                                            <div _ngcontent-bic-c69="" class="img-area"
                                                                style="margin-right: 30px;">
                                                                <div _ngcontent-bic-c69=""
                                                                    class="img-container ng-star-inserted">
                                                                    <input type="text" style="width: 90px;"
                                                                        class="dynamic-select" id="rim_diameter">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </app-list-item>
                                                </div>
                                                <div class="item-container ng-star-inserted" id="1"
                                                    style="margin-top: 50px;">
                                                    <app-list-item _nghost-bic-c69="">
                                                        <div _ngcontent-bic-c69="" class="containerParam">
                                                            <div _ngcontent-bic-c69="" class="text-area">
                                                                <div _ngcontent-bic-c69="" class="title-section">
                                                                    <span _ngcontent-bic-c69=""
                                                                        style="font-size: large;margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;">Alesage
                                                                        Central</span>
                                                                </div>
                                                            </div>
                                                            <div _ngcontent-bic-c69="" class="img-area"
                                                                style="margin-right: 30px;">
                                                                <div _ngcontent-bic-c69=""
                                                                    class="img-container ng-star-inserted">
                                                                    <input type="text" style="width: 90px;"
                                                                        class="dynamic-select" id="centre_bore">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </app-list-item>
                                                </div>
                                                <div class="item-container ng-star-inserted" id="2"
                                                    style="margin-top: 50px;">
                                                    <app-list-item _nghost-bic-c69="">
                                                        <div _ngcontent-bic-c69="" class="containerParam">
                                                            <div _ngcontent-bic-c69="" class="text-area">
                                                                <div _ngcontent-bic-c69="" class="title-section">
                                                                    <span _ngcontent-bic-c69=""
                                                                        style="font-size: large;margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;">Entraxe</span>
                                                                </div>
                                                            </div>
                                                            <div _ngcontent-bic-c69="" class="img-area"
                                                                style="margin-right: 30px;">
                                                                <div _ngcontent-bic-c69=""
                                                                    class="img-container ng-star-inserted">
                                                                    <input type="text" style="width: 90px;"
                                                                        class="dynamic-select" id="bolt_pattern">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </app-list-item>
                                                </div>
                                                <div class="item-container ng-star-inserted" id="3"
                                                    style="margin-top: 50px;">
                                                    <app-list-item _nghost-bic-c69="">
                                                        <div _ngcontent-bic-c69="" class="containerParam">
                                                            <div _ngcontent-bic-c69="" class="text-area">
                                                                <div _ngcontent-bic-c69="" class="title-section">
                                                                    <span _ngcontent-bic-c69=""
                                                                        style="font-size: large;margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;">Déport</span>
                                                                </div>
                                                            </div>
                                                            <div _ngcontent-bic-c69="" class="img-area"
                                                                style="margin-right: 30px;">
                                                                <div _ngcontent-bic-c69=""
                                                                    class="img-container ng-star-inserted">
                                                                    <input type="text" style="width: 90px;"
                                                                        class="dynamic-select" id="rim_offset">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </app-list-item>
                                                </div>
                                                <div class="item-container ng-star-inserted" id="4"
                                                    style="margin-top: 50px;">
                                                    <app-list-item _nghost-bic-c69="">
                                                        <div _ngcontent-bic-c69="" class="containerParam">
                                                            <div _ngcontent-bic-c69="" class="text-area">
                                                                <div _ngcontent-bic-c69="" class="title-section">
                                                                    <span _ngcontent-bic-c69=""
                                                                        style="font-size: large;margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;">Taille
                                                                        de Filletage </span>
                                                                </div>
                                                            </div>
                                                            <div _ngcontent-bic-c69="" class="img-area"
                                                                style="margin-right: 30px;">
                                                                <div _ngcontent-bic-c69=""
                                                                    class="img-container ng-star-inserted">
                                                                    <input type="text" style="width: 90px;"
                                                                        class="dynamic-select" id="thread_size">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </app-list-item>
                                                </div>
                                                <div class="item-container ng-star-inserted" id="5"
                                                    style="margin-top: 50px;">
                                                    <app-list-item _nghost-bic-c69="">
                                                        <div _ngcontent-bic-c69="" class="containerParam">
                                                            <div _ngcontent-bic-c69="" class="text-area"
                                                                style="margin-left: 15px;">
                                                                <div _ngcontent-bic-c69="" class="title-section">
                                                                    <div class="checkbox">
                                                                        <span
                                                                            style="margin-right: 200px;font-size: large;">Conserver
                                                                            les mêmes paramètres <br>avant et
                                                                            arrière</span>
                                                                        <label for="keepParamFrontBack"
                                                                            class="custom-checkbox">
                                                                            <input type="checkbox"
                                                                                id="keepParamFrontBack" checked>
                                                                            <i class="fa-solid fa-square"></i>
                                                                            <i class="fa-solid fa-square-check"></i>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div _ngcontent-bic-c69="" class="img-area"
                                                                style="margin-right: 30px;">
                                                                <div _ngcontent-bic-c69=""
                                                                    class="img-container ng-star-inserted">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </app-list-item>
                                                </div>
                                            </div>
                                            <div class="tab-content" id="divPalletOption" style="display:none;">
                                                <div class="item-container ng-star-inserted" id="0"
                                                    style="margin-top: 50px;">
                                                    <app-list-item _nghost-bic-c69="">
                                                        <div _ngcontent-bic-c69="" class="containerParam">
                                                            <div _ngcontent-bic-c69="" class="text-area">
                                                                <div _ngcontent-bic-c69="" class="title-section">
                                                                    <span _ngcontent-bic-c69=""
                                                                        style="font-size: large;margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;">Couleur
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div _ngcontent-bic-c69="" class="img-area"
                                                                style="margin-right: 30px;">
                                                                <div _ngcontent-bic-c69=""
                                                                    class="img-container ng-star-inserted">
                                                                    <img src="https://paris-performance.com/wp-content/uploads/2024/09/PNTA_000880227.png"
                                                                        id="resume_car_color" onclick="toggleMenu(0)"
                                                                        class="wheel-option"
                                                                        style="width: 70px;height: 70px;border-radius: 50%;margin-top: -30px;">
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </app-list-item>
                                                    <!-- <div id="circleMenu0" class="circle-menu-wheel">
                                                        <div >
                                                            <button id="leftBtn0" class="slider-btn disabled"
                                                                onclick="slideLeft(0)">&#10094;</button>
                                                            <div class="slider-container">
                                                                <div id="sliderTrack0" class="slider-track">
                                                                    <div class="car-color"></div>
                                                                    <div class="car-color"></div>
                                                                    <div class="car-color"></div>
                                                                    <div class="car-color"></div>
                                                                    <div class="car-color"></div>
                                                                    <div class="car-color"></div>
                                                                </div>
                                                            </div>
                                                            <button id="rightBtn0" class="slider-btn"
                                                                onclick="slideRight(0)">&#10095;</button>
                                                        </div>
                                                    </div> -->
                                                    <app-list-item _nghost-bic-c69="">
                                                        <div _ngcontent-bic-c69="" class="containerParam"
                                                            style="padding: 50px 0 10px;">
                                                            <div _ngcontent-bic-c69="" class="text-area">
                                                                <div _ngcontent-bic-c69="" class="title-section">
                                                                    <span _ngcontent-bic-c69=""
                                                                        style="font-size: large;margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;">Jante
                                                                    </span><br>
                                                                    <span id="resume_wheelColor_name"
                                                                        style="font-size: small;margin-left: 50px;"></span>
                                                                </div>
                                                            </div>
                                                            <div _ngcontent-bic-c69="" class="img-area"
                                                                style="margin-right: 30px;">
                                                                <div _ngcontent-bic-c69=""
                                                                    class="img-container ng-star-inserted">
                                                                    <img src="https://paris-performance.com/wp-content/uploads/2024/09/PNTA_000880227.png"
                                                                        id="resume_wheelColor" onclick="toggleMenu(2)"
                                                                        class="wheel-option"
                                                                        style="width: 65px;height: 65px;border-radius: 50%;margin-top: -30px;">
                                                                    <img src="https://paris-performance.com/wp-content/uploads/2025/06/pp01_lutece.png"
                                                                        id="resume_wheel_option"
                                                                        onclick="toogleMenuJante()" class="wheel-option"
                                                                        style="width: 70px;height: 70px;border-radius: 50%;margin-top: -30px;">
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </app-list-item>



                                                    <!--<app-list-item _nghost-bic-c69="">
                                                    <div _ngcontent-bic-c69="" class="containerParam" style="padding: 50px 0 10px;">
                                                        <div _ngcontent-bic-c69="" class="text-area">
                                                            <div _ngcontent-bic-c69="" class="title-section">
                                                                <span _ngcontent-bic-c69="" style="font-size: large;margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;">Finition</span>
                                                                <span id="resume_wheelColor_name"></span>
                                                            </div>
                                                        </div>
                                                        <div _ngcontent-bic-c69="" class="img-area" style="margin-right: 30px;">
                                                            <div _ngcontent-bic-c69="" class="img-container ng-star-inserted">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/09/PNTA_000880227.png"  id="resume_wheelColor" onclick="toggleMenu(2)" class="wheel-option" style="width: 70px;height: 70px;border-radius: 50%;margin-top: -30px;">
                                                            </div>
                                                        </div>

                                                    </div>

                                                </app-list-item>-->

                                                </div>
                                                <div class="item-container ng-star-inserted" id="1"
                                                    style="margin-top: 50px;">
                                                    <app-list-item _nghost-bic-c69="">
                                                        <div _ngcontent-bic-c69="" class="containerParam">
                                                            <div _ngcontent-bic-c69="" class="text-area">
                                                                <div _ngcontent-bic-c69="" class="title-section">
                                                                    <span _ngcontent-bic-c69=""
                                                                        style="font-size: large;margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;">Cache
                                                                        moyeux</span><br>
                                                                    <span id="resume_CM_Color_name"
                                                                        style="font-size: small;margin-left: 50px;"></span>
                                                                </div>
                                                            </div>
                                                            <div _ngcontent-bic-c69="" class="img-area"
                                                                style="margin-right: 30px;">
                                                                <div _ngcontent-bic-c69=""
                                                                    class="img-container ng-star-inserted">
                                                                    <img src="https://paris-performance.com/wp-content/uploads/2024/09/PNTA_000880227.png"
                                                                        id="resume_CM_Img" onclick="toggleMenu(3)"
                                                                        class="wheel-option"
                                                                        style="width: 70px;height: 70px;border-radius: 50%;margin-top: -30px;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </app-list-item>
                                                </div>
                                                <div class="item-container ng-star-inserted" id="2"
                                                    style="margin-top: 50px;">
                                                    <app-list-item _nghost-bic-c69="">
                                                        <div _ngcontent-bic-c69="" class="containerParam">
                                                            <div _ngcontent-bic-c69="" class="text-area">
                                                                <div _ngcontent-bic-c69="" class="title-section">
                                                                    <span _ngcontent-bic-c69=""
                                                                        style="font-size: large;margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;">Boulons</span><br>
                                                                    <span id="resume_Boulons_Color_name"
                                                                        style="font-size: small;margin-left: 50px;"></span>
                                                                </div>
                                                            </div>
                                                            <div _ngcontent-bic-c69="" class="img-area"
                                                                style="margin-right: 30px;">
                                                                <div _ngcontent-bic-c69=""
                                                                    class="img-container ng-star-inserted">
                                                                    <img src="https://paris-performance.com/wp-content/uploads/2024/09/PNTA_000880227.png"
                                                                        id="resume_Boulons_Img" onclick="toggleMenu(4)"
                                                                        class="wheel-option"
                                                                        style="width: 70px;height: 70px;border-radius: 50%;margin-top: -30px;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </app-list-item>
                                                </div>
                                                <div class="item-container ng-star-inserted" id="3"
                                                    style="margin-top: 50px;">
                                                    <app-list-item _nghost-bic-c69="">
                                                        <div _ngcontent-bic-c69="" class="containerParam">
                                                            <div _ngcontent-bic-c69="" class="text-area">
                                                                <div _ngcontent-bic-c69="" class="title-section">
                                                                    <span _ngcontent-bic-c69=""
                                                                        style="font-size: large;margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;">Gravure</span>
                                                                </div>
                                                            </div>
                                                            <div _ngcontent-bic-c69="" class="img-area"
                                                                style="margin-right: 30px;">
                                                                <div _ngcontent-bic-c69=""
                                                                    class="img-container ng-star-inserted">
                                                                    <input type="text" style="width: 150px;"
                                                                        class="dynamic-select" maxlength="8"
                                                                        oninput="if(this.value.length>8)this.value=this.value.slice(0,8);">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </app-list-item>
                                                </div>


                                            </div>
                                            <div class="tab-content" id="divCarColor" style="display: none;">
                                                <div id="circleMenu0" class="circle-menu" style="height: 400px;">
                                                    <div onclick="hideSubMenu('divCarColor')">
                                                        &#9664;
                                                    </div>
                                                    <button class="btn-plat" onclick="hideSubMenu('divWheelModel')">
                                                        <i class="fa-solid fa-bars"
                                                            style="font-size: large;color: white"></i>2
                                                    </button>
                                                    <div class="list-palet">
                                                        <div class="palet-container">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-content" id="divWheelModel" style="display: none;">
                                                <div class="arrow arrow-down" onclick="hideSubMenu('divWheelModel')">
                                                    &#9664;</div>
                                                <button class="btn-plat" onclick="hideSubMenu('divWheelModel')">
                                                    <i class="fa-solid fa-bars"
                                                        style="font-size: large;color: white"></i>3
                                                </button>
                                                <div id="circleMenu1" class="circle-menu-wheel">
                                                    <div>
                                                        <div class="list-palet">
                                                            <div class="palet-container">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/06/main.29V2-1-scaled-e1718040438520.jpg"
                                                                    class="wheel-option-1 selected"
                                                                    onclick="selectWheel(this, 'PP-O1 : LUTECE','https://paris-performance.com/wp-content/uploads/2024/06/main.29V2-1-scaled-e1718040438520.jpg')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/06/main.23-scaled.jpg"
                                                                    class="wheel-option-1"
                                                                    onclick="selectWheel(this, 'PP-O2 : BOHEME','https://paris-performance.com/wp-content/uploads/2024/06/main.23-scaled.jpg')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/06/main.28v2-scaled.jpg"
                                                                    class="wheel-option-1"
                                                                    onclick="selectWheel(this, 'PP-O3 : SEINE','https://paris-performance.com/wp-content/uploads/2024/06/main.28v2-scaled.jpg')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/06/main.30v2-scaled.jpg"
                                                                    class="wheel-option-1"
                                                                    onclick="selectWheel(this, 'PP-O4 : GALION','https://paris-performance.com/wp-content/uploads/2024/06/main.30v2-scaled.jpg')">
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-content" id="divSubMenuWheelColor" style="display: none;">
                                                <div class="arrow arrow-down"
                                                    onclick="hideSubMenu('divSubMenuWheelColor')">&#9664;</div>
                                                <div id="circleMenu2" class="circle-menu" style="overflow-y: auto;">

                                                    <div class="list-palet" style="margin-top: 500px;">
                                                        <p style="text-align: center;">GLOSS</p>
                                                        <div class="palet-container">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-chrome.png"
                                                                class="circle"
                                                                onclick="selectWheelColor(this, 'gloss-chrome')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-metallic-black.png"
                                                                class="circle"
                                                                onclick="selectWheelColor(this, 'gloss-metallic-black')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-metallic-silver.png"
                                                                class="circle"
                                                                onclick="selectWheelColor(this, 'gloss-metallic-silver')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-white.png"
                                                                class="circle"
                                                                onclick="selectWheelColor(this, 'gloss-white')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-anthracite.png"
                                                                class="circle"
                                                                onclick="selectWheelColor(this, 'gloss-anthracite')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-champagne-gold-metallic.png"
                                                                class="circle"
                                                                onclick="selectWheelColor(this, 'gloss-champagne-gold-metallic')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-gold-glitter.png"
                                                                class="circle"
                                                                onclick="selectWheelColor(this, 'gloss-gold-glitter')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-aubergine-bronze.png"
                                                                class="circle"
                                                                onclick="selectWheelColor(this, 'gloss-aubergine-bronze')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-cinder-rose-metallic.png"
                                                                class="circle"
                                                                onclick="selectWheelColor(this, 'gloss-cinder-rose-metallic')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-amber-gold.png"
                                                                class="circle"
                                                                onclick="selectWheelColor(this, 'gloss-amber-gold')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-bronze.png"
                                                                class="circle"
                                                                onclick="selectWheelColor(this, 'gloss-bronze')">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="list-palet">
                                                            <div class="palet-container">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p>MATTE</p>
                                                    <div>
                                                        <div class="list-palet">
                                                            <div class="palet-container">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-matte-metallic-silver.png"
                                                                    class="circle"
                                                                    onclick="selectWheelColor(this, 'matte-metallic-silver')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-matte-white.png"
                                                                    class="circle"
                                                                    onclick="selectWheelColor(this, 'matte-white')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-matte-aubergine-bronze.png"
                                                                    class="circle"
                                                                    onclick="selectWheelColor(this, 'matte-aubergine-bronze')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-matte-silver-rose.png"
                                                                    class="circle"
                                                                    onclick="selectWheelColor(this, 'matte-cinder-rose-metallic')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-matte-bronze.png"
                                                                    class="circle"
                                                                    onclick="selectWheelColor(this, 'matte-bronze')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-matte-metallic-blue.png"
                                                                    class="circle"
                                                                    onclick="selectWheelColor(this, 'matte-metallic-blue')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-matte-metallic-copper-brown.png"
                                                                    class="circle"
                                                                    onclick="selectWheelColor(this, 'matte-metallic-copper-brown')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-matte-metallic-grey.png"
                                                                    class="circle"
                                                                    onclick="selectWheelColor(this, 'matte-metallic-grey')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-matte-metallic-midnight-purple.png"
                                                                    class="circle"
                                                                    onclick="selectWheelColor(this, 'matte-midnight-purple')">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p>SATIN</p>
                                                    <div>
                                                        <div class="list-palet">
                                                            <div class="palet-container">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-satin-black.png"
                                                                    class="circle"
                                                                    onclick="selectWheelColor(this, 'satin-black')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-satin-graphite-metallic.png"
                                                                    class="circle"
                                                                    onclick="selectWheelColor(this, 'satin-graphite-metallic')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-satin-dark-basalt-metallic.png"
                                                                    class="circle"
                                                                    onclick="selectWheelColor(this, 'satin-dark-basalt-metallic')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-satin-kaki-green.png"
                                                                    class="circle"
                                                                    onclick="selectWheelColor(this, 'satin-kaki-green')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-satin-rose-gold.png"
                                                                    class="circle"
                                                                    onclick="selectWheelColor(this, 'satin-rose-gold')">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-content" id="divSubMenuCacheMoyeux" style="display: none;">
                                                <div id="circleMenu3" class="circle-menu" style="overflow-y: auto;">

                                                    <div style="margin-top: 500px;">
                                                        <p style="text-align: center;">GLOSS</p>
                                                        <div class="list-palet">
                                                            <div class="palet-container">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-chrome.png"
                                                                    class="circle"
                                                                    onclick="selectCacheMoyeuxColor(this, 'gloss-chrome')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-metallic-black.png"
                                                                    class="circle"
                                                                    onclick="selectCacheMoyeuxColor(this, 'gloss-metallic-black')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-metallic-silver.png"
                                                                    class="circle"
                                                                    onclick="selectCacheMoyeuxColor(this, 'gloss-metallic-silver')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-white.png"
                                                                    class="circle"
                                                                    onclick="selectCacheMoyeuxColor(this, 'gloss-white')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-anthracite.png"
                                                                    class="circle"
                                                                    onclick="selectCacheMoyeuxColor(this, 'gloss-anthracite')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-champagne-gold-metallic.png"
                                                                    class="circle"
                                                                    onclick="selectCacheMoyeuxColor(this, 'gloss-champagne-gold-metallic')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-gold-glitter.png"
                                                                    class="circle"
                                                                    onclick="selectCacheMoyeuxColor(this, 'gloss-gold-glitter')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-aubergine-bronze.png"
                                                                    class="circle"
                                                                    onclick="selectCacheMoyeuxColor(this, 'gloss-aubergine-bronze')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-cinder-rose-metallic.png"
                                                                    class="circle"
                                                                    onclick="selectCacheMoyeuxColor(this, 'gloss-cinder-rose-metallic')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-amber-gold.png"
                                                                    class="circle"
                                                                    onclick="selectCacheMoyeuxColor(this, 'gloss-amber-gold')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-bronze.png"
                                                                    class="circle"
                                                                    onclick="selectCacheMoyeuxColor(this, 'gloss-bronze')">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p>MATTE</p>
                                                    <div>
                                                        <div class="list-palet">
                                                            <div class="palet-container">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-matte-metallic-silver.png"
                                                                    class="circle"
                                                                    onclick="selectCacheMoyeuxColor(this, 'matte-metallic-silver')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-matte-white.png"
                                                                    class="circle"
                                                                    onclick="selectCacheMoyeuxColor(this, 'matte-white')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-matte-aubergine-bronze.png"
                                                                    class="circle"
                                                                    onclick="selectCacheMoyeuxColor(this, 'matte-aubergine-bronze')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-matte-silver-rose.png"
                                                                    class="circle"
                                                                    onclick="selectCacheMoyeuxColor(this, 'matte-cinder-rose-metallic')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-matte-bronze.png"
                                                                    class="circle"
                                                                    onclick="selectCacheMoyeuxColor(this, 'matte-bronze')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-matte-metallic-blue.png"
                                                                    class="circle"
                                                                    onclick="selectCacheMoyeuxColor(this, 'matte-metallic-blue')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-matte-metallic-copper-brown.png"
                                                                    class="circle"
                                                                    onclick="selectCacheMoyeuxColor(this, 'matte-metallic-copper-brown')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-matte-metallic-grey.png"
                                                                    class="circle"
                                                                    onclick="selectCacheMoyeuxColor(this, 'matte-metallic-grey')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-matte-metallic-midnight-purple.png"
                                                                    class="circle"
                                                                    onclick="selectCacheMoyeuxColor(this, 'matte-midnight-purple')">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p>SATIN</p>
                                                    <div>
                                                        <div class="list-palet">
                                                            <div class="palet-container">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-satin-black.png"
                                                                    class="circle"
                                                                    onclick="selectCacheMoyeuxColor(this, 'satin-black')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-satin-graphite-metallic.png"
                                                                    class="circle"
                                                                    onclick="selectCacheMoyeuxColor(this, 'satin-graphite-metallic')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-satin-dark-basalt-metallic.png"
                                                                    class="circle"
                                                                    onclick="selectCacheMoyeuxColor(this, 'satin-dark-basalt-metallic')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-satin-kaki-green.png"
                                                                    class="circle"
                                                                    onclick="selectCacheMoyeuxColor(this, 'satin-kaki-green')">
                                                                <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-satin-rose-gold.png"
                                                                    class="circle"
                                                                    onclick="selectCacheMoyeuxColor(this, 'satin-rose-gold')">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-content" id="divSubMenuBoulons" style="display: none;">
                                                <div id="circleMenu4" class="circle-menu" style="overflow-y: auto;">
                                                    <div class="list-palet" style="margin-top: 500px;">
                                                        <p style="text-align: center;">GLOSS</p>
                                                        <div class="palet-container">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-chrome.png"
                                                                class="circle"
                                                                onclick="selectBoulonsColor(this, 'gloss-chrome')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-metallic-black.png"
                                                                class="circle"
                                                                onclick="selectBoulonsColor(this, 'gloss-metallic-black')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-metallic-silver.png"
                                                                class="circle"
                                                                onclick="selectBoulonsColor(this, 'gloss-metallic-silver')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-white.png"
                                                                class="circle"
                                                                onclick="selectBoulonsColor(this, 'gloss-white')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-anthracite.png"
                                                                class="circle"
                                                                onclick="selectBoulonsColor(this, 'gloss-anthracite')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-champagne-gold-metallic.png"
                                                                class="circle"
                                                                onclick="selectBoulonsColor(this, 'gloss-champagne-gold-metallic')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-gold-glitter.png"
                                                                class="circle"
                                                                onclick="selectBoulonsColor(this, 'gloss-gold-glitter')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-aubergine-bronze.png"
                                                                class="circle"
                                                                onclick="selectBoulonsColor(this, 'gloss-aubergine-bronze')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-cinder-rose-metallic.png"
                                                                class="circle"
                                                                onclick="selectBoulonsColor(this, 'gloss-cinder-rose-metallic')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-amber-gold.png"
                                                                class="circle"
                                                                onclick="selectBoulonsColor(this, 'gloss-amber-gold')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-gloss-bronze.png"
                                                                class="circle"
                                                                onclick="selectBoulonsColor(this, 'gloss-bronze')">
                                                        </div>
                                                    </div>
                                                    <p>MATTE</p>
                                                    <div class="list-palet">
                                                        <div class="palet-container">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-matte-metallic-silver.png"
                                                                class="circle"
                                                                onclick="selectBoulonsColor(this, 'matte-metallic-silver')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-matte-white.png"
                                                                class="circle"
                                                                onclick="selectBoulonsColor(this, 'matte-white')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-matte-aubergine-bronze.png"
                                                                class="circle"
                                                                onclick="selectBoulonsColor(this, 'matte-aubergine-bronze')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-matte-silver-rose.png"
                                                                class="circle"
                                                                onclick="selectBoulonsColor(this, 'matte-cinder-rose-metallic')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-matte-bronze.png"
                                                                class="circle"
                                                                onclick="selectBoulonsColor(this, 'matte-bronze')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-matte-metallic-blue.png"
                                                                class="circle"
                                                                onclick="selectBoulonsColor(this, 'matte-metallic-blue')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-matte-metallic-copper-brown.png"
                                                                class="circle"
                                                                onclick="selectBoulonsColor(this, 'matte-metallic-copper-brown')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-matte-metallic-grey.png"
                                                                class="circle"
                                                                onclick="selectBoulonsColor(this, 'matte-metallic-grey')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-matte-metallic-midnight-purple.png"
                                                                class="circle"
                                                                onclick="selectBoulonsColor(this, 'matte-midnight-purple')">
                                                        </div>
                                                    </div>
                                                    <p>SATIN</p>
                                                    <div class="list-palet">
                                                        <div class="palet-container">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-satin-black.png"
                                                                class="circle"
                                                                onclick="selectBoulonsColor(this, 'satin-black')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-satin-graphite-metallic.png"
                                                                class="circle"
                                                                onclick="selectBoulonsColor(this, 'satin-graphite-metallic')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-satin-dark-basalt-metallic.png"
                                                                class="circle"
                                                                onclick="selectBoulonsColor(this, 'satin-dark-basalt-metallic')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-satin-kaki-green.png"
                                                                class="circle"
                                                                onclick="selectBoulonsColor(this, 'satin-kaki-green')">
                                                            <img src="https://paris-performance.com/wp-content/uploads/2024/10/btn-pp-satin-rose-gold.png"
                                                                class="circle"
                                                                onclick="selectBoulonsColor(this, 'satin-rose-gold')">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-content" id="divResume" style="display: none;">
                                                <div class="item-container ng-star-inserted" style="margin-top: 50px;">
                                                    <app-list-item _nghost-bic-c69="">
                                                        <div _ngcontent-bic-c69="" class="containerParam">
                                                            <div _ngcontent-bic-c69="" class="text-area">
                                                                <div _ngcontent-bic-c69="" class="title-section">
                                                                    <span _ngcontent-bic-c69=""
                                                                        style="font-size: large;margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;">Marque</span>
                                                                </div>
                                                            </div>
                                                            <div _ngcontent-bic-c69="" class="img-area"
                                                                style="margin-right: 30px;">
                                                                <div _ngcontent-bic-c69=""
                                                                    class="img-container ng-star-inserted">
                                                                    <span
                                                                        style="text-transform: uppercase;font-size: larger;"
                                                                        id="resume_brand">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </app-list-item>
                                                </div>

                                                <div class="item-container ng-star-inserted" style="margin-top: 50px;">
                                                    <app-list-item _nghost-bic-c69="">
                                                        <div _ngcontent-bic-c69="" class="containerParam">
                                                            <div _ngcontent-bic-c69="" class="text-area">
                                                                <div _ngcontent-bic-c69="" class="title-section">
                                                                    <span _ngcontent-bic-c69=""
                                                                        style="font-size: large;margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;">Année</span>
                                                                </div>
                                                            </div>
                                                            <div _ngcontent-bic-c69="" class="img-area"
                                                                style="margin-right: 30px;">
                                                                <div _ngcontent-bic-c69=""
                                                                    class="img-container ng-star-inserted">
                                                                    <span
                                                                        style="text-transform: uppercase;font-size: larger;"
                                                                        id="resume_year"><span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </app-list-item>
                                                </div>
                                                <div class="item-container ng-star-inserted" style="margin-top: 50px;">
                                                    <app-list-item _nghost-bic-c69="">
                                                        <div _ngcontent-bic-c69="" class="containerParam">
                                                            <div _ngcontent-bic-c69="" class="text-area">
                                                                <div _ngcontent-bic-c69="" class="title-section">
                                                                    <span _ngcontent-bic-c69=""
                                                                        style="font-size: large;margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;">Modele</span>
                                                                </div>
                                                            </div>
                                                            <div _ngcontent-bic-c69="" class="img-area"
                                                                style="margin-right: 30px;">
                                                                <div _ngcontent-bic-c69=""
                                                                    class="img-container ng-star-inserted">
                                                                    <span
                                                                        style="text-transform: uppercase;font-size: larger;"
                                                                        id="resume_model"><span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </app-list-item>
                                                </div>
                                                <div class="item-container ng-star-inserted" style="margin-top: 50px;">
                                                    <app-list-item _nghost-bic-c69="">
                                                        <div _ngcontent-bic-c69="" class="containerParam">
                                                            <div _ngcontent-bic-c69="" class="text-area">
                                                                <div _ngcontent-bic-c69="" class="title-section">
                                                                    <span _ngcontent-bic-c69=""
                                                                        style="font-size: large;margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;">Motorisation</span>
                                                                </div>
                                                            </div>
                                                            <div _ngcontent-bic-c69="" class="img-area"
                                                                style="margin-right: 30px;">
                                                                <div _ngcontent-bic-c69=""
                                                                    class="img-container ng-star-inserted">
                                                                    <span
                                                                        style="text-transform: uppercase;font-size: larger;"
                                                                        id="resume_modification"><span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </app-list-item>
                                                </div>
                                                <div class="item-container ng-star-inserted" style="margin-top: 50px;">
                                                    <app-list-item _nghost-bic-c69="">
                                                        <div _ngcontent-bic-c69="" class="containerParam">
                                                            <div _ngcontent-bic-c69="" class="text-area">
                                                                <div _ngcontent-bic-c69="" class="title-section">
                                                                    <span _ngcontent-bic-c69="" style="font-size: large;margin-left: 50px;color: #e96868;text-transform: uppercase;text-align: center;display: block;    margin-left: 120px;
    margin-top: -30px;">paramètres
                                                                        jantes</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </app-list-item>
                                                </div>
                                                <div class="item-container ng-star-inserted" style="margin-top: 50px;">
                                                    <app-list-item _nghost-bic-c69="">
                                                        <div _ngcontent-bic-c69="" class="containerParam">
                                                            <div _ngcontent-bic-c69="" class="text-area">
                                                                <div _ngcontent-bic-c69="" class="title-section">
                                                                    <span _ngcontent-bic-c69=""
                                                                        style="font-size: large;margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;">Taille</span>
                                                                </div>
                                                            </div>
                                                            <div _ngcontent-bic-c69="" class="img-area"
                                                                style="margin-right: 30px;">
                                                                <div _ngcontent-bic-c69=""
                                                                    class="img-container ng-star-inserted">
                                                                    <span
                                                                        style="text-transform: uppercase;font-size: larger;"
                                                                        id="resume_rim_diameter"><span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </app-list-item>
                                                </div>
                                                <div class="item-container ng-star-inserted" style="margin-top: 50px;">
                                                    <app-list-item _nghost-bic-c69="">
                                                        <div _ngcontent-bic-c69="" class="containerParam">
                                                            <div _ngcontent-bic-c69="" class="text-area">
                                                                <div _ngcontent-bic-c69="" class="title-section">
                                                                    <span _ngcontent-bic-c69=""
                                                                        style="font-size: large;margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;">Alesage
                                                                        Central</span>
                                                                </div>
                                                            </div>
                                                            <div _ngcontent-bic-c69="" class="img-area"
                                                                style="margin-right: 30px;">
                                                                <div _ngcontent-bic-c69=""
                                                                    class="img-container ng-star-inserted">
                                                                    <span
                                                                        style="text-transform: uppercase;font-size: larger;"
                                                                        id="resume_centre_bore"><span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </app-list-item>
                                                </div>
                                                <div class="item-container ng-star-inserted" style="margin-top: 50px;">
                                                    <app-list-item _nghost-bic-c69="">
                                                        <div _ngcontent-bic-c69="" class="containerParam">
                                                            <div _ngcontent-bic-c69="" class="text-area">
                                                                <div _ngcontent-bic-c69="" class="title-section">
                                                                    <span _ngcontent-bic-c69=""
                                                                        style="font-size: large;margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;">Entraxe</span>
                                                                </div>
                                                            </div>
                                                            <div _ngcontent-bic-c69="" class="img-area"
                                                                style="margin-right: 30px;">
                                                                <div _ngcontent-bic-c69=""
                                                                    class="img-container ng-star-inserted">
                                                                    <span
                                                                        style="text-transform: uppercase;font-size: larger;"
                                                                        id="resume_bolt_pattern"><span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </app-list-item>
                                                </div>
                                                <div class="item-container ng-star-inserted" style="margin-top: 50px;">
                                                    <app-list-item _nghost-bic-c69="">
                                                        <div _ngcontent-bic-c69="" class="containerParam">
                                                            <div _ngcontent-bic-c69="" class="text-area">
                                                                <div _ngcontent-bic-c69="" class="title-section">
                                                                    <span _ngcontent-bic-c69=""
                                                                        style="font-size: large;margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;">Déport</span>
                                                                </div>
                                                            </div>
                                                            <div _ngcontent-bic-c69="" class="img-area"
                                                                style="margin-right: 30px;">
                                                                <div _ngcontent-bic-c69=""
                                                                    class="img-container ng-star-inserted">
                                                                    <span
                                                                        style="text-transform: uppercase;font-size: larger;"
                                                                        id="resume_rim_offset"><span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </app-list-item>
                                                </div>
                                                <div class="item-container ng-star-inserted" style="margin-top: 50px;">
                                                    <app-list-item _nghost-bic-c69="">
                                                        <div _ngcontent-bic-c69="" class="containerParam">
                                                            <div _ngcontent-bic-c69="" class="text-area">
                                                                <div _ngcontent-bic-c69="" class="title-section">
                                                                    <span _ngcontent-bic-c69=""
                                                                        style="font-size: large;margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;">Taille
                                                                        de Filletage </span>
                                                                </div>
                                                            </div>
                                                            <div _ngcontent-bic-c69="" class="img-area"
                                                                style="margin-right: 30px;">
                                                                <div _ngcontent-bic-c69=""
                                                                    class="img-container ng-star-inserted">
                                                                    <span
                                                                        style="text-transform: uppercase;font-size: larger;"
                                                                        id="resume_thread_size"><span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </app-list-item>
                                                </div>
                                                <div class="item-container ng-star-inserted" style="margin-top: 50px;">
                                                    <app-list-item _nghost-bic-c69="">
                                                        <div _ngcontent-bic-c69="" class="containerParam">
                                                            <div _ngcontent-bic-c69="" class="text-area">
                                                                <div _ngcontent-bic-c69="" class="title-section">
                                                                    <div class="checkbox">
                                                                        <span
                                                                            style="padding-left: 20px;font-size: large;">Avant
                                                                            et Arrière identiques</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div _ngcontent-bic-c69="" class="img-area"
                                                                style="margin-right: 30px;">
                                                                <div _ngcontent-bic-c69=""
                                                                    class="img-container ng-star-inserted">
                                                                    <span
                                                                        style="text-transform: uppercase;font-size: larger;"
                                                                        id="resume_keepParamFrontBack"><span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </app-list-item>
                                                </div>
                                                <div class="item-container ng-star-inserted" style="margin-top: 50px;">
                                                    <app-list-item _nghost-bic-c69="">
                                                        <div _ngcontent-bic-c69="" class="containerParam">
                                                            <div _ngcontent-bic-c69="" class="text-area">
                                                                <div _ngcontent-bic-c69="" class="title-section">
                                                                    <span _ngcontent-bic-c69=""
                                                                        style="font-size: large;margin-left: 160px;color: #e96868;text-transform: uppercase;text-align: center;display: block;margin-top: -30px;">Jante
                                                                        choisie</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </app-list-item>
                                                </div>
                                                <div class="item-container ng-star-inserted" style="margin-top: 50px;">
                                                    <app-list-item _nghost-bic-c69="">
                                                        <div _ngcontent-bic-c69="" class="containerParam">
                                                            <div _ngcontent-bic-c69="" class="text-area">
                                                                <div _ngcontent-bic-c69="" class="title-section">
                                                                    <span
                                                                        style="font-size: large;margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;"
                                                                        id="resume_wheel"><span>
                                                                </div>
                                                            </div>
                                                            <div _ngcontent-bic-c69="" class="img-area"
                                                                style="margin-right: 30px;">
                                                                <div _ngcontent-bic-c69=""
                                                                    class="img-container ng-star-inserted">
                                                                    <img src="https://paris-performance.com/wp-content/uploads/2024/06/main.29V2-1-scaled-e1718040438520.jpg"
                                                                        id="resume_wheelImg" class="wheel-option"
                                                                        style="width: 90px;height: 90px;border-radius: 50%;margin-top: -40px;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </app-list-item>
                                                </div>
                                                <div class="item-container ng-star-inserted" style="margin-top: 50px;">
                                                    <app-list-item _nghost-bic-c69="">
                                                        <div _ngcontent-bic-c69="" class="containerParam">
                                                            <div _ngcontent-bic-c69="" class="text-area">
                                                                <div _ngcontent-bic-c69="" class="title-section">
                                                                    <span _ngcontent-bic-c69="" style="font-size: large;margin-left: 50px;color: #e96868;text-transform: uppercase;text-align: center;display: block;    margin-left: 190px;
    margin-top: -30px;">Finition</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </app-list-item>
                                                </div>
                                                <div class="item-container ng-star-inserted" style="margin-top: 50px;">
                                                    <app-list-item _nghost-bic-c69="">
                                                        <div _ngcontent-bic-c69="" class="containerParam">
                                                            <div _ngcontent-bic-c69="" class="text-area">
                                                                <div _ngcontent-bic-c69="" class="title-section">
                                                                    <span
                                                                        style="margin-left: 50px;color: rgba(255, 255, 255, 0.84);text-transform: uppercase;"
                                                                        id="resume_wheel_color_name"><span>
                                                                </div>
                                                            </div>
                                                            <div _ngcontent-bic-c69="" class="img-area"
                                                                style="margin-right: 30px;">
                                                                <div _ngcontent-bic-c69=""
                                                                    class="img-container ng-star-inserted">
                                                                    <img src="https://paris-performance.com/wp-content/uploads/2024/06/main.29V2-1-scaled-e1718040438520.jpg"
                                                                        id="resume_wheel_color_img" class="wheel-option"
                                                                        style="width: 90px;height: 90px;border-radius: 50%;margin-top: -40px;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </app-list-item>
                                                </div>
                                                <div class="item-container ng-star-inserted"
                                                    style="margin-top: 50px;margin-bottom: 150px;">
                                                    <app-list-item _nghost-bic-c69="">
                                                        <div _ngcontent-bic-c69="" class="containerParam">
                                                            <div _ngcontent-bic-c69="" class="text-area">
                                                                <div _ngcontent-bic-c69="" class="title-section"
                                                                    style="text-align: center;margin-left: 65px;margin-top: -22px;">
                                                                    <button onclick="checkout()"
                                                                        style="margin-bottom: 15px;font-size: medium;width: 250px;"
                                                                        class="year-option">
                                                                        Commander
                                                                    </button><br>
                                                                    <button class="year-option"
                                                                        style="--clr: #ffffff; height: 40px;width: 250px;"
                                                                        class="year-option">
                                                                        se faire accompagner
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div _ngcontent-bic-c69="" class="img-area"
                                                                style="margin-top:-12px;">
                                                                <div _ngcontent-bic-c69=""
                                                                    class="img-container ng-star-inserted">
                                                                    <div class="configuration-actions-container"
                                                                        id="menuAction">
                                                                        <div class="action-panel">
                                                                            <i class="fas fa-download menu"
                                                                                onclick="generatePDF()"></i>

                                                                            <i class="fas fa-paper-plane menu"></i>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </app-list-item>
                                                </div>

                                            </div>
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
                                                                    <div class="container" id="divParam"
                                                                        style="margin-top: 150px;margin-left:-30%;display: none">
                                                                        <div class="card-content"
                                                                            style="margin-top: 150px;">
                                                                            <button
                                                                                style="--clr: #ffffff; height: 50px; width: 260px;margin-left: 90px;"
                                                                                class="param-option"
                                                                                onclick="selectParam(this, 'free')">
                                                                                PARAMÈTRES LIBRES

                                                                            </button>
                                                                            <span class="badge"
                                                                                data-tooltip="Nous vous donnons les commandes, vous êtes totalement libre et responsable dans le choix des paramètres">?</span>
                                                                            <hr
                                                                                style="border: 0; height: 1px; background-color: #cccccc61; margin-bottom:40px;margin-top: 40px;margin-left: 110px">
                                                                            <button
                                                                                style="--clr: #ffffff; height: 50px; width: 260px;margin-bottom: 100px;margin-left: 90px;"
                                                                                class="param-option"
                                                                                onclick="selectParam(this, 'recommanded')">
                                                                                PARAMÈTRES CONSEILLÉS

                                                                            </button>
                                                                            <span class="badge"
                                                                                data-tooltip="Nous vous proposons le plus large choix de paramétrage adapté pour vous ainsi que votre véhicule">?</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="tab-content">
                                                                        <div class="item-container ng-star-inserted"
                                                                            style="justify-content: flex-end;">
                                                                            <app-list-item _nghost-bic-c69=""
                                                                                id="region-section"
                                                                                style="display: none">
                                                                                <div _ngcontent-bic-c69=""
                                                                                    class="containerCarChoice">
                                                                                    <div _ngcontent-bic-c69=""
                                                                                        class="text-area">
                                                                                        <div class="slider-item">
                                                                                            <label>Région</label>
                                                                                            <select name="region"
                                                                                                id="region"
                                                                                                onchange="selectRegion()"
                                                                                                style="width: 150px;text-align: center;">
                                                                                                <option value="usdm">
                                                                                                    USA+</option>
                                                                                                <option value="cdm">
                                                                                                    Canada</option>
                                                                                                <option value="mxndm">
                                                                                                    Mexico</option>
                                                                                                <option value="ladm">
                                                                                                    Central & South
                                                                                                    America</option>
                                                                                                <option value="eudm"
                                                                                                    selected>Europe
                                                                                                </option>
                                                                                                <option value="russia">
                                                                                                    Russia+</option>
                                                                                                <option value="jdm">
                                                                                                    Japan</option>
                                                                                                <option value="chdm">
                                                                                                    China</option>
                                                                                                <option value="skdm">
                                                                                                    South Korea</option>
                                                                                                <option value="sam">
                                                                                                    Southeast Asia
                                                                                                </option>
                                                                                                <option value="medm">
                                                                                                    Middle East</option>
                                                                                                <option value="nadm">
                                                                                                    North Africa
                                                                                                </option>
                                                                                                <option value="sadm">
                                                                                                    South Africa
                                                                                                </option>
                                                                                                <option value="audm">
                                                                                                    Oceania</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </app-list-item>
                                                                        </div>
                                                                        <div class="item-container ng-star-inserted"
                                                                            id="sliderItems" style="margin-top: 50px;">

                                                                        </div>
                                                                    </div>
                                                                    <!--<div class="arrow arrow-down" onclick="nextSlide()">&#9660;</div>

                                                                <div class="pagination">
                                                                    <span id="pagination">1/4</span>
                                                                </div>-->


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


                                            </div>
                                        </div>
                                    </div>

                                </app-navigation>


                            </div>
                        </app-configuration-panel>



                    </div>




                </div>
                <div _ngcontent-bic-c80="" class="loading-indicator ">
                    <div _ngcontent-bic-c80="" class="slider-container "></div>
                </div>
                <div _ngcontent-bic-c80="" class="loading-indicator-spinner "></div>
                <div _ngcontent-bic-c80="" class="loading-indicator-turntable ">



                </div>

            </app-configuration-area>

        </app-model-selection>

        <div class="loading-indicator"></div>
    </app-root>
    <script>


        let currentStep = 0;
        let currentSlide = 0;


        let maxVisibleItems = 5;

        // Data for each step
        let yearsData = [];
        let brandsData = [];
        let brandsBaseData = [];
        let modelsData = [];
        let modificationsData = [];
        let templatesData = [];
        let wheelOptionsData = [];
        let wheelPPData = [];
        let rimsData = [];

        //var
        let selectedYear = null;
        let selectedBrand = null;
        let brandSlug = null;
        let selectedModel = null;
        let modelSlug = null;
        let selectedModification = null;
        let modificationId = null;
        let param_selected = null;
        let wheelName_selected = null;
        let wheelImg_selected = null;
        let wheelColorName_selected = null;
        let wheelColorImg_selected = null;
        let CM_ColorName_selected = null;
        let CM_ColorImg_selected = null;
        let Boulons_ColorName_selected = null;
        let Boulons_ColorImg_selected = null;
        let templateId = null;

        let taille = null;
        let alesageCentral = null;
        let entraxe = null;
        let deport = null;
        let filletage = null;
        let keepParamFrontBack = null;

        let wheelId = null;


        function updateSlider() {
            const sliderItems = document.getElementById('sliderItems');
            //const pagination = document.getElementById('pagination');
            const stepTitle = document.getElementById('stepTitle');
            const stepDescription = document.getElementById('stepDescription');
            const stepChoice = document.getElementById('stepChoice');

            // Add animation class to trigger fade out
            sliderItems.classList.add('animate');

            // Allow the animation to complete before changing content
            setTimeout(() => {
                let items = [];
                let limit = 0;

                let stepData = [];

                if (currentStep === 0) {
                    // Step 1: Brand
                    const brands = brandsData;
                    limit = brands.length;

                    /* items = brands.slice(currentSlide, currentSlide + maxVisibleItems).map(brand =>
                         `<div class="slider-item">
                             <img class="make-option" src="${brand.logo}" alt="${brand.name}" onclick="selectBrand(this,'${brand.slug}','${brand.name}')">
                             <label>${brand.name}</label>
                         </div>`);*/
                    maxVisibleItems = limit;
                    items = brands.slice(currentSlide, currentSlide + maxVisibleItems).map(brand =>
                        `<app-list-item _nghost-bic-c69="">
                <div _ngcontent-bic-c69="" class="containerCarChoice">
                    <div _ngcontent-bic-c69="" class="text-area">
                        <div class="slider-item">
                            <img decoding="async" class="make-option" src="${brand.logo}" alt="${brand.name}" onclick="selectBrand(this,'${brand.slug}','${brand.name}')">
                                <label>${brand.name}</label>
                        </div>
                    </div>
                </div>
            </app-list-item>`);

                    //pagination.innerText = `${currentSlide + 1}/${limit}`;
                    //stepTitle.innerText = 'Modèle';
                    stepDescription.innerText = `Choix du Véhicule - Marque`;
                    stepChoice.innerText = '';

                } else if (currentStep === 1) {

                    // Step 2: Year
                    const years = yearsData;
                    console.log(years);
                    limit = years.length;
                    maxVisibleItems = limit;
                    items = years.slice(currentSlide, currentSlide + maxVisibleItems).map(year =>
                        `<app-list-item _nghost-bic-c69="">
                    <div _ngcontent-bic-c69="" class="containerCarChoice">
                        <div _ngcontent-bic-c69="" class="text-area">
                            <div class="slider-item">
                                <button class="year-option" onclick="selectYear(this,${year.name})">${year.name}</button>
                            </div>
                        </div>
                    </div>
                </app-list-item>`);
                    //pagination.innerText = `${currentSlide + 1}/${limit}`;
                    //stepTitle.innerText = 'Modèle';
                    stepDescription.innerText = 'Choix du Véhicule - Année';
                    stepChoice.innerText = '';

                } else if (currentStep === 2) {
                    // Step 3: Model
                    const models = modelsData;
                    limit = models.length;
                    maxVisibleItems = limit;
                    items = models.slice(currentSlide, currentSlide + maxVisibleItems).map(model => `<app-list-item _nghost-bic-c69="">
                    <div _ngcontent-bic-c69="" class="containerCarChoice">
                        <div _ngcontent-bic-c69="" class="text-area">
                            <div class="slider-item"><button class="year-option" style="height: 50px" onclick="selectModel(this,'${model.slug}','${model.name}')">${model.name}</button></div>
                        </div>
                    </div>
                </app-list-item>`);
                    //pagination.innerText = `${currentSlide + 1}/${limit}`;
                    //stepTitle.innerText = 'Modèle';
                    stepDescription.innerText = `Choix du Véhicule - Modèle`;
                    stepChoice.innerText = '';

                } else if (currentStep === 3) {
                    // Step 4: Modification
                    const modifications = modificationsData;
                    limit = modifications.length;
                    maxVisibleItems = limit;
                    items = modifications.slice(currentSlide, currentSlide + maxVisibleItems).map(modif => `<app-list-item _nghost-bic-c69="">
                    <div _ngcontent-bic-c69="" class="containerCarChoice">
                        <div _ngcontent-bic-c69="" class="text-area">
                            <div class="slider-item"><button class="modif-option" onclick="selectModification(this,'${modif.slug}','${modif.name}')">${modif.name}<span class="badgemodifright label" style="display: none">${modif.engine.power.hp + " HP"}</span>
                         <span class="badgemodifleft label" style="display: none">${modif.engine.type}</span></button></div>
                        </div>
                    </div>
                </app-list-item>`);
                    //pagination.innerText = `${currentSlide + 1}/${limit}`;
                    //stepTitle.innerText = 'Modèle';
                    stepDescription.innerText = `Choix du Véhicule - Motorisation`;
                    stepChoice.innerText = '';
                } else if (currentStep === 4) {
                    // Step 5: Paramètrage
                    //stepTitle.innerText = 'Paramètres';
                    stepDescription.innerText = `Choix des paramètres`;
                    stepChoice.innerText = '';
                } else if (currentStep === 5) {
                    // Step 6: Paramètrage
                    const wheelOptions = wheelOptionsData;

                    limit = wheelOptions.length;
                    const select = document.getElementById('rim_diameter');
                    const select1 = document.getElementById('centre_bore');
                    const select2 = document.getElementById('bolt_pattern');
                    const select3 = document.getElementById('rim_offset');
                    const select4 = document.getElementById('thread_size');

                    const select_rear = document.getElementById('rim_diameter_rear');
                    const select1_rear = document.getElementById('centre_bore_rear');
                    const select2_rear = document.getElementById('bolt_pattern_rear');
                    const select3_rear = document.getElementById('rim_offset_rear');
                    const select4_rear = document.getElementById('thread_size_rear');

                    select.innerHTML = ""; // Clear previous options
                    select1.innerHTML = ""; // Clear previous options
                    select2.innerHTML = ""; // Clear previous options
                    select3.innerHTML = ""; // Clear previous options
                    select4.innerHTML = ""; // Clear previous options

                    select_rear.innerHTML = ""; // Clear previous options
                    select1_rear.innerHTML = ""; // Clear previous options
                    select2_rear.innerHTML = ""; // Clear previous options
                    select3_rear.innerHTML = ""; // Clear previous options
                    select4_rear.innerHTML = ""; // Clear previous options

                    items = wheelOptions.slice(currentSlide, currentSlide + maxVisibleItems).map(wheelOption => {

                        let tailles = [];

                        for (let i = 0; i < wheelOption.wheels.length; i++) {
                            tailles.push(wheelOption.wheels[i].front.rim_diameter);
                        }
                        let newTailles = [...new Set(tailles)].sort((a, b) => a - b);

                        newTailles.forEach(value => {
                            let option = document.createElement("option");
                            option.value = value + "\"";
                            option.textContent = value + "\"";
                            select.appendChild(option);

                            let optionRear = document.createElement("option");
                            optionRear.value = value + "\"";
                            optionRear.textContent = value + "\"";
                            select_rear.appendChild(optionRear);
                        });



                        let option1 = document.createElement("option");
                        option1.value = wheelOption.technical.centre_bore; // Use the slug as the value
                        option1.textContent = wheelOption.technical.centre_bore;
                        select1.appendChild(option1);

                        let option1_rear = document.createElement("option");
                        option1_rear.value = wheelOption.technical.centre_bore; // Use the slug as the value
                        option1_rear.textContent = wheelOption.technical.centre_bore;
                        select1_rear.appendChild(option1_rear);

                        let option2 = document.createElement("option");
                        option2.value = wheelOption.technical.bolt_pattern;
                        option2.textContent = wheelOption.technical.bolt_pattern;
                        select2.appendChild(option2);

                        let option2_rear = document.createElement("option");
                        option2_rear.value = wheelOption.technical.bolt_pattern;
                        option2_rear.textContent = wheelOption.technical.bolt_pattern;
                        select2_rear.appendChild(option2_rear);



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
                            option.value = "ET" + value;
                            option.textContent = "ET" + value;
                            select3.appendChild(option);

                            let optionRear = document.createElement("option");
                            optionRear.value = "ET" + value;
                            optionRear.textContent = "ET" + value;
                            select3_rear.appendChild(optionRear);
                        });



                        let option4 = document.createElement("option");
                        option4.value = wheelOption.technical.wheel_fasteners.thread_size; // Use the slug as the value
                        option4.textContent = wheelOption.technical.wheel_fasteners.thread_size;
                        select4.appendChild(option4);

                        let option4_rear = document.createElement("option");
                        option4_rear.value = wheelOption.technical.wheel_fasteners.thread_size; // Use the slug as the value
                        option4_rear.textContent = wheelOption.technical.wheel_fasteners.thread_size;
                        select4_rear.appendChild(option4_rear);

                        // save rim for limitation deport
                        let rims = [];
                        for (let i = 0; i < wheelOption.wheels.length; i++) {
                            rims.push(wheelOption.wheels[i].front.rim);
                        }

                        rimsData = rims;

                        // Check if the selected value exists in the rimd array
                        console.log("ok" + document.getElementById('rim_diameter').value);
                        var matchingRim = rimsData.find(rim => rim.includes(document.getElementById('rim_diameter').value.replace('"', '')));

                        if (matchingRim) {
                            // Extract the ET value from the matching rim string (e.g., ET53)
                            var etMatch = matchingRim.match(/ET(\d+)/);
                            if (etMatch) {
                                var etInt = parseInt(etMatch[1], 10);
                                var etValueStr = `ET${etInt}`;
                                console.log('Extracted ET value:', etInt);

                                // Set the ET value as the selected option in the rim_offset select
                                var rimOffsetSelect = document.getElementById('rim_offset');
                                Array.from(rimOffsetSelect.options).forEach(option => {
                                    option.selected = (option.value === etValueStr);
                                });

                                var newMin = etInt - 2;
                                var newMax = etInt + 2;

                                // Filter and update rim_offset options
                                var rimOffsetOptions = Array.from(document.getElementById('rim_offset').options);
                                rimOffsetOptions.forEach(option => {
                                    var optionValue = parseInt(option.value.replace("ET", ""), 10);
                                    option.disabled = (optionValue < newMin || optionValue > newMax);
                                });
                                console.log('Rim offset option selected:', etValueStr);
                            }
                        } else {
                            console.log('No matching rim found.');
                        }

                    })

                    //pagination.innerText = `${currentSlide + 1}/${limit}`;
                    //stepTitle.innerText = 'Paramètres';
                    stepDescription.innerText = `Choix des paramètres`;
                    stepChoice.innerText = '';
                } else if (currentStep === 6) {
                    // Step 3: Wheel
                    const wheels = [
                        { name: 'PP-O1 : LUTECE', image: 'https://paris-performance.com/wp-content/uploads/2025/06/pp01_lutece.png' },
                        { name: 'PP-O2 : BOHEME', image: 'https://paris-performance.com/wp-content/uploads/2025/06/pp02_boheme.png' },
                        { name: 'PP-O3 : SEINE', image: 'https://paris-performance.com/wp-content/uploads/2025/06/pp03_seine.png' },
                        { name: 'PP-O4 : GALION', image: 'https://paris-performance.com/wp-content/uploads/2025/06/pp04_galion.png' }];

                    wheelPPData = wheels;

                    limit = wheels.length;
                    maxVisibleItems = limit;
                    items = wheels.slice(currentSlide, currentSlide + maxVisibleItems).map((wheel, index) => `<div class="slider-item"><img src="${wheel.image}" alt="${wheel.name}" class="wheel-option ${index === 0 ? 'selected' : ''}" style="width: 120px;height: 120px;border-radius: 200px;object-fit: cover;" onclick="selectWheel(this, '${wheel.name}','${wheel.image}')"><label style="font-size: large;margin-top: 15px;margin-bottom: 40px;">${wheel.name}</label></div>`);
                    //pagination.innerText = `${currentSlide + 1}/${limit}`;
                    //stepTitle.innerText = 'Finitions';
                    stepDescription.innerText = `Configuration - MODELE`;
                    stepChoice.innerText = '';
                } else if (currentStep === 7) {
                    //stepTitle.innerText = 'Finitions';
                    stepDescription.innerText = `Configuration`;
                    stepChoice.innerText = '';
                } else if (currentStep === 8) {
                    //stepTitle.innerText = 'Résumé';
                    stepDescription.innerText = `Votre vehicule`;
                    stepChoice.innerText = '';
                    divWheelOption("none", "divPalletOption");
                }


                // display or hide blocks
                if (currentStep === 4) {
                    divParam("block");
                    controlButton("none");
                    divWheelOption("none", "divWheelOption");
                    divWheelOption("none", "divWheelFreeOption");
                    divWheelOption("none", "divResume");
                    divWheelOption("none", "divPalletOption");
                } else if (currentStep === 5 && param_selected == "recommanded") {
                    divParam("none");
                    controlButton("none");
                    divWheelOption("block", "divWheelOption");
                    divWheelOption("none", "divWheelFreeOption");
                    divWheelOption("none", "divResume");
                    divWheelOption("none", "divPalletOption");
                } else if (currentStep === 5 && param_selected == "free") {
                    divParam("none");
                    controlButton("none");
                    divWheelOption("none", "divWheelOption");
                    divWheelOption("block", "divWheelFreeOption");
                    divWheelOption("none", "divResume");
                    divWheelOption("none", "divPalletOption");
                } else if (currentStep === 7) {
                    divParam("none");
                    controlButton("none");
                    divWheelOption("none", "divWheelOption");
                    divWheelOption("none", "divWheelFreeOption");
                    divWheelOption("none", "divResume");
                    divWheelOption("block", "divPalletOption");
                } else if (currentStep === 8) {
                    divParam("none");
                    controlButton("none");
                    divWheelOption("none", "divWheelOption");
                    divWheelOption("none", "divWheelFreeOption");
                    divWheelOption("none", "divPalletOption");
                    divWheelOption("block", "divResume");
                    document.getElementById("menuAction").setAttribute("style", "display:block");
                    hideSubMenu('divCarColor');
                    divWheelOption('none', 'divSubMenuWheelColor');
                    divWheelOption('none', 'divSubMenuCacheMoyeux');
                    divWheelOption('none', 'divSubMenuBoulons');
                    divWheelOption('none', 'divWheelModel');
                    divWheelOption("none", "divPalletOption");
                } else {
                    controlButton("block");
                    divParam("none");
                    divWheelOption("none", "divWheelOption");
                    divWheelOption("none", "divWheelFreeOption");
                    divWheelOption("none", "divResume");
                    divWheelOption("none", "divPalletOption");
                }

                if (currentStep === 6) {
                    maxVisibleItems = 1;
                } else {
                    maxVisibleItems = 5;
                }

                if (currentStep === 5 || currentStep === 6 || currentStep === 7) {
                    document.getElementById('arrow-next').style.display = 'block';
                } else {
                    document.getElementById('arrow-next').style.display = 'none';
                }

                if (currentStep === 0) {
                    divWheelOption("block", "region-section");
                } else {
                    divWheelOption("none", "region-section");
                }


                if (currentStep > 0) {
                    document.getElementById('arrow-back').style.display = 'block';
                } else {
                    document.getElementById('arrow-back').style.display = 'none';
                }

                // Update slider items
                sliderItems.innerHTML = items.join('');

                // Remove animation class to trigger fade in
                sliderItems.classList.remove('animate');

                // Restaurer la sélection visuelle après le rendu
                restoreSelection();

                // Update button states (guard if buttons exist)
                const prevBtn = document.getElementById('prevButton');
                const nextBtn = document.getElementById('nextButton');
                if (prevBtn) prevBtn.disabled = (currentStep === 0 && currentSlide === 0);
                if (nextBtn) nextBtn.disabled = (currentStep === 0 && brandSlug === null);
            }, 500);  // Wait for the fade-out animation to complete (0.5s)
        }

        function nextSlide() {
            const limit = currentStep === 0 ? brandsData.length :
                currentStep === 1 ? yearsData.length : currentStep === 2 ? modelsData.length : currentStep === 3 ? modificationsData.length : currentStep === 5 ? wheelOptionsData.length : currentStep === 6 ? wheelPPData.length : null;

            /*if (currentSlide + maxVisibleItems < limit) {
                currentSlide++;
            } else {
                currentSlide = 0;
            }*/
            currentSlide = (currentSlide + maxVisibleItems) % limit; // Incrémenter par 5 et boucler
            updateSlider();
        }

        function previousSlide() {
            if (currentSlide > 0) {
                currentSlide--;
            } else {
                const limit = currentStep === 0 ? brandsData.length :
                    currentStep === 1 ? yearsData.length : currentStep === 2 ? modelsData.length : currentStep === 3 ? modificationsData.length : currentStep === 5 ? wheelOptionsData.length : currentStep === 6 ? wheelPPData.length : null;
                //currentSlide = limit - maxVisibleItems;
                currentSlide = (currentSlide - maxVisibleItems + limit) % limit; // Décrémenter par 5 et boucler
            }

            updateSlider();
        }

        function nextStep() {
            if (currentStep === 0) {
                fetchYear();
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
            } else if (currentStep === 5) {

                // Read inputs from the visible container only
                const sourceContainerId = (param_selected === 'free') ? 'divWheelFreeOption' : 'divWheelOption';
                const source = document.getElementById(sourceContainerId);

                if (source) {
                    const getValue = (innerId) => {
                        const el = source.querySelector('[id="' + innerId + '"]');
                        return el ? el.value : '';
                    };

                    taille = getValue('rim_diameter');
                    alesageCentral = getValue('centre_bore');
                    entraxe = getValue('bolt_pattern');
                    deport = getValue('rim_offset');
                    filletage = getValue('thread_size');

                    taille_rear = getValue('rim_diameter_rear');
                    alesageCentral_rear = getValue('centre_bore_rear');
                    entraxe_rear = getValue('bolt_pattern_rear');
                    deport_rear = getValue('rim_offset_rear');
                    filletage_rear = getValue('thread_size_rear');

                    const checkbox = source.querySelector('[id="keepParamFrontBack"]');
                    const isChecked = checkbox ? checkbox.checked : false;
                    console.log("Checkbox value:", isChecked);
                    keepParamFrontBack = isChecked;
                }
                console.log(taille);
                currentStep++;
                currentSlide = 0;

            } else if (currentStep === 6) {
                currentStep++;
                currentSlide = 0;
                console.log("ok");



            } else if (currentStep === 7) {
                currentStep++;
                currentSlide = 0;
                document.getElementById('resume_year').textContent = selectedYear;
                document.getElementById('resume_brand').textContent = selectedBrand;
                document.getElementById('resume_model').textContent = selectedModel;
                document.getElementById('resume_modification').textContent = selectedModification;

                document.getElementById('resume_rim_diameter').textContent = taille;
                document.getElementById('resume_centre_bore').textContent = alesageCentral;
                document.getElementById('resume_bolt_pattern').textContent = entraxe;
                document.getElementById('resume_rim_offset').textContent = deport;
                document.getElementById('resume_thread_size').textContent = filletage;
                document.getElementById('resume_keepParamFrontBack').textContent = keepParamFrontBack ? "OUI" : "NON";

                document.getElementById('resume_wheel').textContent = wheelName_selected;
                document.getElementById('resume_wheelImg').src = wheelImg_selected;

                document.getElementById('resume_wheel_color_name').textContent = wheelColorName_selected;
                document.getElementById('resume_wheel_color_img').src = wheelColorImg_selected;

                document.getElementById("menuAction").setAttribute("style", "display:block");


            } else if (currentStep === 8) {

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

        function resumePanel() {
            currentStep = 8;
            updateSlider();
        }

        function controlButton(value) {
            let navigationButton1 = document.getElementsByClassName("arrow");
            let navigationButton2 = document.getElementsByClassName("pagination");
            for (let i = 0; i < navigationButton1.length; i++) {
                navigationButton1[i].style.display = value;
            }
            for (let i = 0; i < navigationButton2.length; i++) {
                navigationButton2[i].style.display = value;
            }
        }

        function divParam(value) {
            const divParam = document.getElementById('divParam');
            divParam.setAttribute("style", "margin-top: 150px;margin-left:-30%;display:" + value + "");
        }

        function divWheelOption(value, id) {
            const divWheelOption = document.getElementById(id);
            divWheelOption.style.display = value;
        }

        // Initialize the slider
        fetchMake("eudm");

        //Conf2D API
        function fetchYear() {

            let apiUrl = "https://api.wheel-size.com/v2/years/?make=" + brandSlug + "&user_key=a77861354fca6475fa1ec64b00bed407";
            //let apiUrl = "";
            console.log(apiUrl);

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
        function fetchMake(region) {
            let apiUrl = "https://api.wheel-size.com/v2/makes/?region=" + region + "&user_key=a77861354fca6475fa1ec64b00bed407";
            //let apiUrl = "";

            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    brandsBaseData = Array.isArray(data.data) ? data.data.slice() : [];
                    // Appliquer le filtre par défaut (populaire)
                    filterBrands();
                })
                .catch(error => {
                    console.error("Error fetching data:", error);
                });

        }
        // Tri des marques par popularité par défaut
        function sortBrandsByPopular(inputBrands) {
            const popularOrder = [
                'audi', 'bmw', 'mercedes-benz', 'volkswagen', 'peugeot', 'renault', 'citroen', 'dacia', 'opel', 'fiat', 'seat', 'skoda', 'toyota', 'nissan', 'ford', 'hyundai', 'kia', 'honda', 'volvo', 'mini', 'porsche', 'land-rover', 'alfa-romeo', 'tesla'
            ];
            const rank = new Map(popularOrder.map((slug, idx) => [slug, idx]));
            const normalizeSlug = (b) => (b && (b.slug || '').toString().toLowerCase()) || '';
            const normalizeName = (b) => (b && (b.name || '').toString().toLowerCase()) || '';
            return (inputBrands || []).slice().sort((a, b) => {
                const sa = normalizeSlug(a); const sb = normalizeSlug(b);
                const ra = rank.has(sa) ? rank.get(sa) : Number.POSITIVE_INFINITY;
                const rb = rank.has(sb) ? rank.get(sb) : Number.POSITIVE_INFINITY;
                if (ra !== rb) return ra - rb;
                // fallback: alphabetical by name
                const na = normalizeName(a); const nb = normalizeName(b);
                if (na < nb) return -1; if (na > nb) return 1; return 0;
            });
        }
        // Tri alphabétique
        function sortBrandsAlphabetically(inputBrands) {
            return (inputBrands || []).slice().sort((a, b) => {
                const na = (a && a.name || '').toString().toLowerCase();
                const nb = (b && b.name || '').toString().toLowerCase();
                if (na < nb) return -1; if (na > nb) return 1; return 0;
            });
        }

        // Gère le changement du filtre principal
        function handleMainFilterChange() {
            const mainFilter = document.getElementById('mainFilter');
            const regionSelect = document.getElementById('regionSelect');

            if (mainFilter.value === 'region') {
                regionSelect.style.display = 'inline-block';
            } else {
                regionSelect.style.display = 'none';
                regionSelect.value = ''; // Reset la sélection de région

                // Applique directement le filtre pour les autres options
                if (mainFilter.value === 'popular' || mainFilter.value === 'alphabetical') {
                    filterBrandsByType(mainFilter.value);
                }
            }
        }

        // Applique le filtre par type (popular ou alphabetical)
        function filterBrandsByType(type) {
            if (type === 'alphabetical') {
                brandsData = sortBrandsAlphabetically(brandsBaseData);
            } else {
                brandsData = sortBrandsByPopular(brandsBaseData);
            }
            updateSlider();
        }

        // Applique le filtre choisi et met à jour l'affichage
        function filterBrands() {
            const regionSelect = document.getElementById('regionSelect');
            const mainFilter = document.getElementById('mainFilter');

            // Si on filtre par région
            if (mainFilter.value === 'region' && regionSelect) {
                const region = regionSelect.value;
                if (region) {
                    // Ici vous pouvez ajouter la logique pour filtrer par région
                    // Pour l'instant, on applique le tri par popularité
                    brandsData = sortBrandsByPopular(brandsBaseData);
                }
            } else {
                // Filtre par type (popular ou alphabetical)
                const type = mainFilter ? mainFilter.value : 'popular';
                filterBrandsByType(type);
            }
            updateSlider();
        }
        function fetchModel() {
            let apiUrl = "https://api.wheel-size.com/v2/models/?make=" + brandSlug + "&year=" + selectedYear + "&user_key=a77861354fca6475fa1ec64b00bed407";
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
        function fetchModification() {

            let apiUrl = "https://api.wheel-size.com/v2/modifications/?make=" + brandSlug + "&model=" + modelSlug + "&year=" + selectedYear + "&user_key=a77861354fca6475fa1ec64b00bed407";
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

        function fetchTemplatesVehicule() {
            let apiUrl = "https://api.wheel-size.com/v2/configurator/templates/?make=" + brandSlug + "&model=" + modelSlug + "&year=" + selectedYear + "&user_key=a77861354fca6475fa1ec64b00bed407";
            //let apiUrl = "";
            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {

                    templatesData = data.data;
                    data.data.forEach(function (item) {
                        let id = item.id;
                        console.log(id);
                        templateId = item.id;
                        wheelName_selected = "default";
                        //fetchVehiculeColor("default");

                    })
                }).catch(error => {
                    console.error("Error fetching data:", error);
                });

        }
        function fetchVehiculeColor(wheel) {



            let wheelImgUrl = wheel;
            console.log(wheelImgUrl);

            // Replace NEW_API_URL with your actual API endpoint

            let apiUrl = "https://api.wheel-size.com/v2/configurator/templates/" + templateId + "/fit/?url=" + wheelImgUrl + "&user_key=a77861354fca6475fa1ec64b00bed407";
            //let apiUrl = "";

            console.log(apiUrl);

            // Afficher le loader avant d'effectuer la requête
            document.getElementById('loader').style.display = 'block';
            document.getElementById('car').style.display = 'none';

            let requestOptions = {
                method: "PUT",
                headers: {
                    "Content-Type": "application/json"
                }
            };

            fetch(apiUrl, requestOptions)
                .then(response => response.json())
                .then(data => {
                    let img = new Image();
                    img.src = data.image;

                    img.onload = () => {
                        let car = document.getElementById("car");
                        car.style.display = 'block';
                        car.style.backgroundImage = `url('${data.image}')`;

                        // Masquer le loader une fois l'image chargée
                        document.getElementById('loader').style.display = 'none';
                    };
                })
                .catch(error => {
                    console.error("Erreur lors de la récupération des données:", error);

                    // Masquer le loader en cas d'erreur également
                    document.getElementById('loader').style.display = 'none';
                });



        }
        function fetchWheelOption() {

            let apiUrl = "https://api.wheel-size.com/v2/search/by_model/?make=" + brandSlug + "&model=" + modelSlug + "&modification=" + modificationId + "&year=" + selectedYear + "&user_key=a77861354fca6475fa1ec64b00bed407";

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

        function selectRegion() {
            let selectedRegion = document.getElementById("region").value;
            //fetchMake(selectedRegion);
        }
        function selectYear(element, year) {
            resetSelect('.year-option');
            element.classList.add('selected');
            //document.getElementById('stepChoice').textContent = year;
            selectedYear = year;

            setTimeout(nextStep, 500);
        }

        function selectBrand(element, slug, brand) {
            resetSelect('.make-option');
            element.classList.add('selected');
            //document.getElementById('stepChoice').textContent = brand;
            selectedBrand = brand;
            brandSlug = slug;
            setTimeout(nextStep, 500);
        }

        function selectModel(element, slug, model) {
            resetSelect('.model-option');
            element.classList.add('selected');
            //document.getElementById('stepChoice').textContent = model;
            selectedModel = model;
            modelSlug = slug;
            //fetchTemplatesVehicule();
            setTimeout(nextStep, 500);
        }
        function selectModification(element, id, name) {
            resetSelect('.modif-option');
            element.classList.add('selected');
            let labels = document.getElementsByClassName("label");
            for (let i = 0; i < labels.length; i++) {
                labels[i].style.display = 'none';
            }
            const children = element.children;

            for (let i = 0; i < children.length; i++) {
                const child = children[i];
                child.style.display = 'block';
            }
            //document.getElementById('stepChoice').textContent = name;
            modificationId = id;
            selectedModification = name;
            setTimeout(nextStep, 500);
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
            setTimeout(nextStep, 500);
        }

        function selectWheel(element, wheelName, wheelImg) {
            resetSelect('.wheel-option');
            resetSelect('.wheel-option-1');
            element.classList.add('selected');

            wheelName_selected = wheelName;
            wheelImg_selected = wheelImg;
            //fetchVehiculeColor("gloss-chrome");
            console.log(wheelName_selected);
            let resume_wheel_option = document.getElementById("resume_wheel_option");

            // Vérification si l'élément existe
            if (resume_wheel_option) {
                resume_wheel_option.src = element.src;
            }



        }
        function getWheelColor(wheel) {
            let wheelImgUrl = "";
            switch (wheelName_selected) {
                case "PP-O1 : LUTECE":
                    wheelImgUrl = "https://paris-performance.com/wp-content/uploads/2024/10/pp01-" + wheel + ".png";
                    console.log(wheelImgUrl);
                    wheelId = 1101;
                    break;
                case "PP-O2 : BOHEME":
                    wheelImgUrl = "https://paris-performance.com/wp-content/uploads/2024/10/pp02-" + wheel + ".png";
                    console.log(wheelImgUrl);
                    wheelId = 1191;
                    break;
                case "PP-O3 : SEINE":
                    wheelImgUrl = "https://paris-performance.com/wp-content/uploads/2024/10/pp03-" + wheel + ".png";
                    console.log(wheelImgUrl);
                    wheelId = 1201;
                    break;
                case "PP-O4 : GALION":
                    wheelImgUrl = "https://paris-performance.com/wp-content/uploads/2024/10/pp04-" + wheel + ".png";
                    console.log(wheelImgUrl);
                    wheelId = 1211;
                    break;
                default:
                    wheelImgUrl = "https://m.media-amazon.com/images/I/61N5BogXB7L._AC_SL1000_.jpg";
            }
            return wheelImgUrl;
        }


        function resetSelect(option) {
            const optionType = document.querySelectorAll(option);
            optionType.forEach(option => option.classList.remove('selected'));

        }

        function restoreSelection() {
            console.log('restoreSelection called - currentStep:', currentStep);

            // Restaurer la sélection de la marque
            if (currentStep === 0 && selectedBrand && brandSlug) {
                console.log('Restoring brand selection:', selectedBrand, brandSlug);
                setTimeout(() => {
                    const brandElements = document.querySelectorAll('.make-option');
                    console.log('Found brand elements:', brandElements.length);
                    brandElements.forEach(element => {
                        const onclickAttr = element.getAttribute('onclick');
                        console.log('Brand element onclick:', onclickAttr, 'looking for:', brandSlug);
                        if (onclickAttr && onclickAttr.includes(`'${brandSlug}'`)) {
                            element.classList.add('selected');
                            console.log('Brand selected restored');
                        }
                    });
                }, 100);
            }

            // Restaurer la sélection de l'année
            if (currentStep === 1 && selectedYear) {
                console.log('Restoring year selection:', selectedYear);
                setTimeout(() => {
                    const yearElements = document.querySelectorAll('.year-option');
                    console.log('Found year elements:', yearElements.length);
                    yearElements.forEach(element => {
                        console.log('Year element text:', element.textContent.trim(), 'vs selectedYear:', selectedYear.toString());
                        if (element.textContent.trim() === selectedYear.toString()) {
                            element.classList.add('selected');
                            console.log('Year selection restored');
                        }
                    });
                }, 100);
            }

            // Restaurer la sélection du modèle (utilise .year-option, pas .modif-option)
            if (currentStep === 2 && selectedModel && modelSlug) {
                console.log('Restoring model selection:', selectedModel, modelSlug);
                setTimeout(() => {
                    const modelElements = document.querySelectorAll('.year-option');
                    console.log('Found model elements:', modelElements.length);
                    modelElements.forEach(element => {
                        const onclickAttr = element.getAttribute('onclick');
                        console.log('Model element onclick:', onclickAttr, 'looking for:', modelSlug);
                        if (onclickAttr && onclickAttr.includes(`'${modelSlug}'`)) {
                            element.classList.add('selected');
                            console.log('Model selection restored');
                        }
                    });
                }, 100);
            }

            // Restaurer la sélection de la modification
            if (currentStep === 3 && selectedModification && modificationId) {
                console.log('Restoring modification selection:', selectedModification, modificationId);
                setTimeout(() => {
                    const modifElements = document.querySelectorAll('.modif-option');
                    console.log('Found modification elements:', modifElements.length);
                    modifElements.forEach(element => {
                        const onclickAttr = element.getAttribute('onclick');
                        console.log('Modification element onclick:', onclickAttr, 'looking for:', modificationId);
                        if (onclickAttr && onclickAttr.includes(`'${modificationId}'`)) {
                            element.classList.add('selected');
                            console.log('Modification selection restored');
                        }
                    });
                }, 100);
            }
        }

        const button = document.getElementById('menuButton');
        const button1 = document.getElementById('menuButtonClose');
        const menu = document.getElementById('menu');
        const stepButtons = document.getElementById('stepButtons');

        button.addEventListener('click', () => {
            menu.style.display = 'none';
            //button1.style.display = 'block';
            button1.setAttribute("style", "display:block;background-color: rgba(0, 0, 0, 0);")
            if (stepButtons) stepButtons.style.display = 'none';
        });

        button1.addEventListener('click', () => {
            menu.style.display = 'block';
            button1.style.display = 'none';
            if (stepButtons) stepButtons.style.display = 'block';

        });

        const bgButton = document.getElementById('bgButton');
        const bg = document.getElementById('render-container');
        let compteur = 0;
        const images = [
            'https://paris-performance.com/wp-content/uploads/2024/09/Blackroom_frontleft.jpg',
            'https://paris-performance.com/wp-content/uploads/2024/09/Withroom_frontleft1.jpg'
        ]; // Remplacez par vos images

        bgButton.addEventListener('click', () => {
            compteur = (compteur + 1) % images.length;
            bg.style.backgroundImage = `url('${images[compteur]}')`;
        });

        function selectWheelColor(element, wheelColorName) {
            resetSelect('.circle');
            element.classList.add('selected');

            document.getElementById('resume_wheelColor').src = element.src;

            //fetchVehiculeColor(wheelColorName);
            wheelColorName_selected = wheelColorName;
            wheelColorImg_selected = getWheelColor(wheelColorName);
            console.log(wheelColorImg_selected);
            document.getElementById('resume_wheelColor_name').innerHTML = wheelColorName.replaceAll("-", " ")
        }

        async function selectCacheMoyeuxColor(element, colorName) {
            resetSelect('.circle');
            element.classList.add('selected');

            document.getElementById('resume_CM_Img').src = element.src;

            //fetchVehiculeColor(wheelColorName);
            CM_ColorName_selected = colorName;
            CM_ColorImg_selected = "https://paris-performance.com/wp-content/uploads/2024/12/amber_cap.png";
            console.log(CM_ColorImg_selected);
            console.log(wheelColorImg_selected);

            document.getElementById('resume_CM_Color_name').innerHTML = colorName.replaceAll("-", " ");

            // Define image URLs
            //const imageJanteCombine = wheelColorImg_selected;
            const imageJanteCombine = 'https://paris-performance.com/wp-content/uploads/2024/12/pp01-gloss-chrome.png';
            const imageCachemoyeuxCombine = CM_ColorImg_selected;
            const imageBoulonCombine = 'https://paris-performance.com/wp-content/uploads/2024/12/amber.png';

            //mergeAndDisplayImages([imageJanteCombine, imageCachemoyeuxCombine, imageBoulonCombine]);
            // Appel de la fonction
            try {
                const url = await mergeThreeImages(imageJanteCombine, imageCachemoyeuxCombine, imageBoulonCombine);
                console.log('Image fusionnée:', url);
                //fetchVehiculeColor(url);

                // Si vous voulez utiliser l'URL fusionnée, par exemple pour l'afficher
                // document.getElementById('quelqueImage').src = url;

            } catch (error) {
                console.error('Erreur lors de la fusion des images:', error);
            }

        }

        async function selectBoulonsColor(element, colorName) {
            resetSelect('.circle');
            element.classList.add('selected');

            document.getElementById('resume_Boulons_Img').src = element.src;

            //fetchVehiculeColor(wheelColorName);
            Boulons_ColorName_selected = colorName;
            Boulons_ColorImg_selected = element.src;
            console.log(Boulons_ColorName_selected);
            console.log(Boulons_ColorImg_selected);
            document.getElementById('resume_Boulons_Color_name').innerHTML = colorName.replaceAll("-", " ");

            // Define image URLs
            const imageJanteCombine = wheelColorImg_selected;
            const imageCachemoyeuxCombine = CM_ColorImg_selected;
            const imageBoulonCombine = Boulons_ColorImg_selected;

            //mergeAndDisplayImages([imageJanteCombine, imageCachemoyeuxCombine, imageBoulonCombine]);
            // Appel de la fonction
            try {
                const url = await mergeThreeImages(imageJanteCombine, imageCachemoyeuxCombine, imageBoulonCombine);
                console.log('Image fusionnée:', url);
                //fetchVehiculeColor(url);

                // Si vous voulez utiliser l'URL fusionnée, par exemple pour l'afficher
                // document.getElementById('quelqueImage').src = url;

            } catch (error) {
                console.error('Erreur lors de la fusion des images:', error);
            }

        }

        function handleRimOffsetChange(selectElement) {
            var selectedValue = selectElement.value.replace('"', '');
            console.log('Selected value:', selectedValue);

            // Add your logic here

            // Check if the selected value exists in the rimd array
            var matchingRim = rimsData.find(rim => rim.includes(selectedValue));

            if (matchingRim) {
                // Extract the ET value from the matching rim string (e.g., ET53)
                var etMatch = matchingRim.match(/ET(\d+)/);
                if (etMatch) {
                    var etValue = parseInt(etMatch[1]);
                    console.log('Extracted ET value:', etValue);

                    // Modify the rim offset options based on the ET value (min = ET - 2, max = ET + 2)
                    var newMin = etValue - 2;
                    var newMax = etValue + 2;

                    // Filter and update rim_offset options
                    var rimOffsetOptions = Array.from(document.getElementById('rim_offset').options);
                    rimOffsetOptions.forEach(option => {
                        var optionValue = parseInt(option.value.replace("ET", ""));
                        if (optionValue < newMin || optionValue > newMax) {
                            option.disabled = true;  // Disable options outside the range
                        } else {
                            option.disabled = false; // Enable options within the range
                        }
                    });
                    // Set the ET value as the selected option in the rim_offset select
                    var rimOffsetSelect = document.getElementById('rim_offset');
                    Array.from(rimOffsetSelect.options).forEach(option => {
                        option.selected = (option.value === `ET${etValue}`);
                    });

                    console.log(`Rim offset options updated. Min: ET${newMin}, Max: ET${newMax}`);
                }
            } else {
                console.log('No matching rim found.');
            }
        }
    </script>
    <style>
        /* Reflet glossy sur les éléments de palette */
        .circle,
        .car-color {
            position: relative;
            overflow: hidden;
        }

        .circle::before,
        .car-color::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 50%;
            pointer-events: none;
            background: radial-gradient(circle at 30% 15%, rgba(255, 255, 255, 0.9) 0%, rgba(255, 255, 255, 0.55) 18%, rgba(255, 255, 255, 0.2) 32%, rgba(255, 255, 255, 0) 55%),
                linear-gradient(145deg, rgba(255, 255, 255, 0.18), rgba(255, 255, 255, 0));
        }
    </style>
    <script>
        async function mergeThreeImages(url1, url2, url3) {
            try {
                if (!url1 || !url2 || !url3) {
                    throw new Error('Les trois URLs sont requises');
                }
                // Utilise la librairie merge-images injectée via CDN
                const dataUrl = await mergeImages([url1, url2, url3]);
                return dataUrl;
            } catch (error) {
                console.error('Erreur pendant la fusion:', error);
                throw error;
            }
        }

    </script>
    <script>
        // Check if Font Awesome is loaded
        document.addEventListener("DOMContentLoaded", function () {
            if (!document.querySelector('.fas')) {
                alert('Font Awesome did not load. Please check your connection.');
            }
        });

        // Toggle menu display
        document.getElementById('menuToggle').addEventListener('click', function () {
            let menu = document.getElementsByClassName('menu');

            for (let i = 0; i < menu.length; i++) {
                if (menu[i].style.display === "none" || menu[i].style.display === "") {
                    menu[i].style.display = "block"; // Afficher le menu
                    this.className = "fa-solid fa-xmark"; // Remplacer l'icône par "xmark"
                } else {
                    menu[i].style.display = "none"; // Cacher le menu
                    this.className = "fas fa-ellipsis-vertical"; // Remplacer l'icône par "ellipsis"
                }
            }
        });

    </script>
    <script>
        // Toggle the foldable menu visibility for a specific menu
        function toggleMenu(menuIndex) {
            console.log('Toggling menu:', menuIndex);

            let menu = document.getElementById('circleMenu' + menuIndex);
            menu.classList.toggle('active');
            console.log(menu);
            if (menuIndex === 0) {
                console.log("menuindex", menuIndex);

                showSubMenu('divCarColor');
                goToStep(6);
                divWheelOption('none', 'divSubMenuWheelColor');
                divWheelOption('none', 'divSubMenuCacheMoyeux');
                divWheelOption('none', 'divSubMenuBoulons');
                divWheelOption('none', 'divWheelModel');
            }
            if (menuIndex === 1) {

                showSubMenu('divWheelModel');
                goToStep(6);
                divWheelOption('none', 'divSubMenuWheelColor');
                divWheelOption('none', 'divSubMenuCacheMoyeux');
                divWheelOption('none', 'divSubMenuBoulons');
                divWheelOption('none', 'divCarColor');
                // let resume_wheel_option = document.getElementById("resume_wheel_option");

                // // Get all images with class 'wheel-option-1'
                // const wheelOptions = document.getElementsByClassName('wheel-option-1');

                // // Loop through each image and check if the src matches
                // for (let i = 0; i < wheelOptions.length; i++) {
                //     if (wheelOptions[i].src === resume_wheel_option.src) {
                //         // If src matches, apply a selected style or class
                //         wheelOptions[i].classList.add('selected'); // Adding a class for styling
                //     }
                // }
            }
            if (menuIndex === 2) {

                showSubMenu('divSubMenuWheelColor');
                goToStep(6);
                divWheelOption('none', 'divSubMenuCacheMoyeux');
                divWheelOption('none', 'divSubMenuBoulons');
                divWheelOption('none', 'divCarColor');
                divWheelOption('none', 'divWheelModel');
            }
            if (menuIndex === 3) {
                showSubMenu('divSubMenuCacheMoyeux');
                goToStep(6);
                divWheelOption('none', 'divSubMenuWheelColor');
                divWheelOption('none', 'divSubMenuBoulons');
                divWheelOption('none', 'divCarColor');
                divWheelOption('none', 'divWheelModel');
            }
            if (menuIndex === 4) {
                showSubMenu('divSubMenuBoulons');
                goToStep(6);
                divWheelOption('none', 'divSubMenuWheelColor');
                divWheelOption('none', 'divSubMenuCacheMoyeux');
                divWheelOption('none', 'divCarColor');
                divWheelOption('none', 'divWheelModel');
            }
        }

        function toogleMenuJante() {
            // toggleMenu(1);
            // toggleMenu(2);
            goToStep(6);
            divWheelOption('none', 'divSubMenuWheelColor');
            divWheelOption('none', 'divSubMenuCacheMoyeux');
            divWheelOption('none', 'divSubMenuBoulons');
            divWheelOption('none', 'divCarColor');
            divWheelOption('none', 'divWheelModel');
        }

        // Horizontal slider functionality for specific sliders with disabling of buttons
        const sliders = [
            { position: 0, visibleCircles: 4, circleWidth: 70, totalCircles: 6 },  // For "Couleur"
            { position: 0, visibleCircles: 4, circleWidth: 70, totalCircles: 4 },  // For "Jante"
            { position: 0, visibleCircles: 5, circleWidth: 70, totalCircles: 11 },  // For "Finition GLOSS"
            { position: 0, visibleCircles: 5, circleWidth: 70, totalCircles: 9 },  // For "Finition MATTE"
            { position: 0, visibleCircles: 5, circleWidth: 70, totalCircles: 5 },   // For "Finition SATIN"
            { position: 0, visibleCircles: 5, circleWidth: 70, totalCircles: 11 },  // For "Finition GLOSS CM"
            { position: 0, visibleCircles: 5, circleWidth: 70, totalCircles: 9 },  // For "Finition MATTE CM"
            { position: 0, visibleCircles: 5, circleWidth: 70, totalCircles: 5 },   // For "Finition SATIN CM"
            { position: 0, visibleCircles: 5, circleWidth: 70, totalCircles: 11 },  // For "Finition GLOSS Boulon"
            { position: 0, visibleCircles: 5, circleWidth: 70, totalCircles: 9 },  // For "Finition MATTE Boulon"
            { position: 0, visibleCircles: 5, circleWidth: 70, totalCircles: 5 }   // For "Finition SATIN Boulon"

        ];

        // function updateButtons(menuIndex) {
        //     const sliderData = sliders[menuIndex];
        //     const leftBtn = document.getElementById('leftBtn' + menuIndex);
        //     const rightBtn = document.getElementById('rightBtn' + menuIndex);
        //     const maxPosition = sliderData.circleWidth * (sliderData.totalCircles - sliderData.visibleCircles);

        //     leftBtn.disabled = (sliderData.position === 0);
        //     rightBtn.disabled = (sliderData.position >= maxPosition);

        //     leftBtn.classList.toggle('disabled', leftBtn.disabled);
        //     rightBtn.classList.toggle('disabled', rightBtn.disabled);
        // }

        // function slideLeft(menuIndex) {
        //     const sliderTrack = document.getElementById('sliderTrack' + menuIndex);
        //     const sliderData = sliders[menuIndex];

        //     if (sliderData.position > 0) {
        //         sliderData.position -= sliderData.circleWidth;
        //         sliderTrack.style.transform = `translateX(-${sliderData.position}px)`;
        //     }

        //     updateButtons(menuIndex);
        // }

        // function slideRight(menuIndex) {
        //     const sliderTrack = document.getElementById('sliderTrack' + menuIndex);
        //     const sliderData = sliders[menuIndex];
        //     const maxPosition = sliderData.circleWidth * (sliderData.totalCircles - sliderData.visibleCircles);

        //     if (sliderData.position < maxPosition) {
        //         sliderData.position += sliderData.circleWidth;
        //         sliderTrack.style.transform = `translateX(-${sliderData.position}px)`;
        //     }

        //     updateButtons(menuIndex);
        // }

        // // Initialize the button state on page load for each slider
        // sliders.forEach((_, index) => updateButtons(index));
    </script>
    <script>
        // Gestion des onglets Avant/Arrière en fonction de la case "Conserver les mêmes paramètres avant et arrière"
        document.addEventListener('DOMContentLoaded', function () {
            function initFrontRearSection(sectionId) {
                const section = document.getElementById(sectionId);
                if (!section) return;

                const tabs = section.querySelector('.front-rear-tabs');
                if (!tabs) return;

                const frontTab = tabs.querySelector('.front-tab');
                const rearTab = tabs.querySelector('.rear-tab');
                if (!frontTab || !rearTab) return;

                // Chercher la checkbox dans la même section
                const checkbox = section.querySelector('#keepParamFrontBack');
                if (!checkbox) return;

                function applyState() {
                    const keepSame = !!checkbox.checked;
                    if (keepSame) {
                        // Désactiver l'onglet Arrière et forcer l'état Avant
                        rearTab.classList.add('disabled');
                        rearTab.setAttribute('aria-disabled', 'true');
                        if (!frontTab.classList.contains('active')) {
                            frontTab.classList.add('active');
                        }
                        rearTab.classList.remove('active');
                    } else {
                        // Activer l'onglet Arrière
                        rearTab.classList.remove('disabled');
                        rearTab.removeAttribute('aria-disabled');
                    }
                }

                // Gestion clics sur onglets (simple bascule de style visuel)
                function handleTabClick(evt, tab) {
                    const isRear = tab.classList.contains('rear-tab');
                    if (isRear && tab.classList.contains('disabled')) {
                        evt.preventDefault();
                        return;
                    }
                    frontTab.classList.toggle('active', tab === frontTab);
                    rearTab.classList.toggle('active', tab === rearTab);
                }

                frontTab.addEventListener('click', (e) => handleTabClick(e, frontTab));
                rearTab.addEventListener('click', (e) => handleTabClick(e, rearTab));

                checkbox.addEventListener('change', applyState);
                // État initial
                applyState();
            }

            // Initialiser pour les deux sections Paramètres
            initFrontRearSection('divWheelOption');
            initFrontRearSection('divWheelFreeOption');
        });
    </script>
    <!--<button onclick="generatePDF()">Télécharger</button>-->

    <script>
        function getCarImageUrl(elementId) {
            const element = document.getElementById(elementId);
            if (!element) {
                console.error(`L'élément avec l'ID "${elementId}" est introuvable.`);
                return null;
            }

            // Récupérer le style inline ou calculé
            const style = window.getComputedStyle(element);
            const backgroundImage = style.backgroundImage;

            // Extraire l'URL de l'image
            const urlMatch = backgroundImage.match(/url\(["']?(.*?)["']?\)/);
            return urlMatch ? urlMatch[1] : null;
        }

        async function convertImgToBase64(url) {
            try {
                // Vérifier si l'URL est valide
                if (!url) {
                    throw new Error("URL de l'image non fournie.");
                }

                // Convertir l'image de l'URL en base64
                const response = await fetch(url);
                if (!response.ok) {
                    throw new Error(`Erreur lors de la récupération de l'image : ${response.statusText}`);
                }

                const blob = await response.blob();
                return new Promise((resolve, reject) => {
                    const reader = new FileReader();
                    reader.onloadend = () => resolve(reader.result);
                    reader.onerror = () => reject("Erreur lors de la lecture du fichier.");
                    reader.readAsDataURL(blob);
                });
            } catch (error) {
                console.error("Erreur dans convertImgToBase64:", error.message);
                throw error;
            }
        }

        async function generatePDF() {
            try {
                const { jsPDF } = window.jspdf;
                const doc = new jsPDF();

                // Obtenir les dimensions de la page PDF
                const pageWidth = doc.internal.pageSize.getWidth();
                const pageHeight = doc.internal.pageSize.getHeight();

                // Ajouter des informations sur le véhicule
                doc.setFontSize(16);
                doc.text("Configuration du véhicule", 10, 10);
                doc.setFontSize(12);
                doc.text(`Marque : ${selectedBrand}`, 10, 20);
                doc.text(`Année : ${selectedYear}`, 10, 30);
                doc.text(`Modèle : ${selectedModel}`, 10, 40);
                doc.text(`Motorisation : ${selectedModification}`, 10, 50);

                // Ajouter des paramètres des jantes
                doc.text(`Paramètres des Jantes : ${param_selected === "free" ? "Libre" : "Recommandé"}`, 10, 70);
                doc.text(`Taille : ${taille}`, 10, 80);
                doc.text(`Alesage central : ${alesageCentral}`, 10, 90);
                doc.text(`Entraxe : ${entraxe}`, 10, 100);
                doc.text(`Déport : ${deport}`, 10, 110);
                doc.text(`Taille de Filetage : ${filletage}`, 10, 120);
                doc.text(`Paramètres avant et arrière identiques : ${keepParamFrontBack ? "Oui" : "Non"}`, 10, 130);
                // Ajouter des informations sur la jante choisie
                doc.text("Jante Choisie", 10, 150);
                doc.text(`Modèle : ${wheelName_selected}`, 10, 160);
                doc.text(`Couleur : ${CM_ColorName_selected}`, 10, 170);

                // Ajouter des informations supplémentaires
                doc.text(`Cache moyeux : ${CM_ColorName_selected}`, 10, 190);
                doc.text(`Boulons : ${Boulons_ColorName_selected}`, 10, 200);

                console.log("pdf" + wheelColorImg_selected);

                // Récupérer et ajouter les images
                const imgUrl1 = getCarImageUrl('car');
                const imgData1 = await convertImgToBase64(imgUrl1);
                const imgData2 = await convertImgToBase64(wheelColorImg_selected);

                doc.addImage(imgData2, 'PNG', 10, 320, 80, 80); // Position fixe pour la roue

                // Ajouter une nouvelle page pour l'image de la voiture
                doc.addPage();
                doc.text("Image de la voiture", 10, 10);
                const imgWidth = pageWidth; // Largeur maximale
                const imgHeight = (100 / 200) * imgWidth; // Exemple de proportions fixes
                doc.addImage(imgData1, 'PNG', 0, 20, imgWidth, imgHeight);

                // Ajouter un pied de page
                doc.setFontSize(10);
                doc.text("Copyright PP 2024 - All rights reserved", 10, pageHeight - 10);

                // Télécharger le PDF
                doc.save("configuration-paris-performance.pdf");
            } catch (error) {
                console.error("Erreur dans generatePDF:", error.message);
                alert(`Erreur lors de la génération du PDF : ${error.message}`);
            }
        }

        window.productAmount = 1000; // Montant en centimes
        window.productId = 123; // ID du produit WooCommerce


        /* function handleKeyPress(event ){
             if(event.key === 'd' || event.key === 'D'){
                 generatePDF();
             }
         }
     
         document.addEventListener('keydown',handleKeyPress);*/
    </script>

    <script>
        // Fonction checkout simple et fiable (sans dépendance PHP inline)
        function checkout() {
            try {
                const bodyData = new URLSearchParams({
                    action: 'woocommerce_ajax_add_to_cart',
                    product_id: (typeof wheelId !== 'undefined' && wheelId) ? wheelId : 0,
                    quantity: 1,
                    selectedBrand: selectedBrand || '',
                    selectedYear: selectedYear || '',
                    selectedModel: selectedModel || '',
                    selectedModification: selectedModification || '',
                    param_selected: param_selected || '',
                    taille: taille || '',
                    alesageCentral: alesageCentral || '',
                    entraxe: entraxe || '',
                    deport: deport || '',
                    filletage: filletage || '',
                    keepParamFrontBack: !!keepParamFrontBack,
                    wheelName_selected: wheelName_selected || '',
                    CM_ColorName_selected: CM_ColorName_selected || '',
                    Boulons_ColorName_selected: Boulons_ColorName_selected || ''
                });

                const ajaxUrl = (typeof wc_add_to_cart_params !== 'undefined' && wc_add_to_cart_params.ajax_url)
                    ? wc_add_to_cart_params.ajax_url
                    : '/?wc-ajax=add_to_cart';

                fetch(ajaxUrl, {
                    method: 'POST',
                    credentials: 'same-origin',
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                    body: bodyData
                })
                    .then(r => r.json().catch(() => ({})))
                    .then(data => {
                        if (data && data.success && data.data && data.data.redirect) {
                            window.location.href = data.data.redirect;
                        } else {
                            // Fallback vers la page checkout si la réponse ne contient pas d'URL
                            window.location.href = '/checkout/';
                        }
                    })
                    .catch(() => {
                        window.location.href = '/checkout/';
                    });
            } catch (e) {
                window.location.href = '/checkout/';
            }
        }
    </script>

    <style>
        .custom-tabs {
            display: flex;
            justify-content: center;
            margin: 20px 0 10px 0;
            gap: 10px;
            font-size: small;
        }

        .custom-tab {
            padding: 10px 24px;
            background: transparent;
            color: #222;
            border-bottom: none;
            cursor: pointer;
            font-weight: bold;
            opacity: 0.7;
            transition: background 0.2s, color 0.2s, opacity 0.2s;
        }

        .custom-tab.active {
            background: transparent;
            color: #fff;
            opacity: 1;
            border-bottom: 4px solid #da291c;
            box-shadow: -3px 8px 11px -8px rgb(255 61 61);
        }

        .custom-tab.disabled {
            background: transparent;
            color: #aaa;
            cursor: not-allowed;
            opacity: 0.5;
        }
    </style>
    <script>
        function updateCustomTabs() {
            // Détermine l'étape accessible la plus avancée
            let maxStep = currentStep;
            // Active/désactive les onglets
            document.getElementById('tab-etape-1').className = 'custom-tab' + (currentStep >= 0 && currentStep < 4 ? ' active' : '') + '';
            document.getElementById('tab-etape-2').className = 'custom-tab' + (currentStep >= 4 && currentStep < 6 ? ' active' : '') + (maxStep >= 4 ? '' : ' disabled');
            document.getElementById('tab-etape-3').className = 'custom-tab' + (currentStep >= 6 && currentStep < 8 ? ' active' : '') + (maxStep >= 6 ? '' : ' disabled');
            document.getElementById('tab-resume').className = 'custom-tab' + (currentStep === 8 ? ' active' : '') + (maxStep >= 8 ? '' : ' disabled');
        }
        function goToStep(step) {
            // Ne pas permettre d'aller à une étape non accessible
            if ((step === 4 && currentStep < 4) || (step === 6 && currentStep < 6) || (step === 8 && currentStep <= 8)) return;
            currentStep = step;
            currentSlide = 0;
            updateSlider();
            updateCustomTabs();
        }
        // Appeler updateCustomTabs à chaque changement d'étape
        const _oldUpdateSlider = updateSlider;
        updateSlider = function () {
            _oldUpdateSlider.apply(this, arguments);
            updateCustomTabs();
        };
        document.addEventListener('DOMContentLoaded', updateCustomTabs);
    </script>
    <script>
        // Exemple de données couleurs (à adapter selon ton besoin)
        const carColors = [
            '#000', '#fff', '#f00', '#0f0', '#00f', '#ff0', '#0ff', '#f0f', '#888', '#444', '#ccc', '#bada55', '#123456', '#abcdef', '#654321'
        ];

        function renderCarColors(colors) {
            const container = document.querySelector('.palet-container');
            if (!container) return;
            container.innerHTML = '';
            colors.forEach((color, i) => {
                const div = document.createElement('div');
                div.className = 'car-color';
                div.style.background = color;
                // Optionnel : gestion du clic ou d'autres attributs
                container.appendChild(div);
            });
        }

        // Appeler cette fonction à l'ouverture du menu couleur
        function showSubMenu(div) {
            document.getElementById('close-panel').style.display = 'block';
            document.getElementById('arrow-next').style.display = 'none';


            if (div == 'divCarColor') {
                renderCarColors(carColors);
            }
            divWheelOption('block', div);
            divWheelOption('none', 'divPalletOption');
        }

        function hideSubMenu(div) {
            document.getElementById('close-panel').style.display = 'none';
            divWheelOption('none', div);
            divWheelOption('block', 'divPalletOption');
        }
    </script>
    <style>
        /* Force Montserrat for all textual elements (without overriding icon fonts) */
        html,
        body,
        div,
        span,
        p,
        a,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        label,
        button,
        input,
        select,
        textarea,
        .mat-tab-label-content,
        .mat-tab-label,
        .mat-tab-label-container,
        .mat-tab-list,
        .mat-tab-header {
            font-family: 'Montserrat', Arial, Helvetica, sans-serif !important;
        }

        /* Ensure labels are Montserrat and readable size */
        label {
            font-size: 1rem;
        }
    </style>