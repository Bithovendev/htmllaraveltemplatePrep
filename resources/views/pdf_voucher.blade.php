<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->

    <!-- Theme Style CSS -->
    <title>Table des transfer</title>
    <style>
        @page {
            margin:25px;
        }
    </style>
    <style>

        .col-6 {  flex: 0 0 auto; width: 50%;}
        .col-4 { flex: 0 0 auto; width: 33.33333333%;}
        .col-3 {  flex: 0 0 auto;  width: 25%;}
        .mt-4 { margin-top: 1.5rem !important;}
        .pad10{
            padding: 10px;
        }
        .row {  --bs-gutter-x: 1.5rem;  --bs-gutter-y: 0;
            display: flex;  flex-wrap: wrap;  margin-top: calc(-1 * var(--bs-gutter-y));
            margin-right: calc(-0.5 * var(--bs-gutter-x));  margin-left: calc(-0.5 * var(--bs-gutter-x));}
        .col {flex: 1 0 0%;}
        h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1 {  margin-top: 0;  margin-bottom: 0.5rem;  font-weight: 500;  line-height: 1.2;  color: var(--bs-heading-color, inherit);}
        h1, .h1 {  font-size: calc(1.375rem + 1.5vw);}


        h1, .h1 {    font-size: 2.5rem;  }
        h2, .h2 {    font-size: 2rem;  }
        h3, .h3 {    font-size: 1.75rem;  }
        h4, .h4 {  font-size: calc(1.275rem + 0.3vw);}
        h5, .h5 {  font-size: 1.25rem;}
        h6, .h6 {  font-size: 1rem;}

        .m-22 {  margin: 0.5rem !important;}\n\n.m-3 { margin: 1rem !important;}
        body {


            font-size: 14px;


            color: #4c5258;


            letter-spacing: 0.5px;


            background-color: #f7f7ff;


            font-family: 'Roboto', sans-serif;


        }


        a {


            text-decoration: none;


        }


        .wrapper {


            width: 100%;


            position: relative;


        }

        .mobile-topbar-header {

            display: none;

        }

        /* Sidebar */


        .topbar-logo-header{
            width: auto;
            align-items: center;
            padding: 0 30px 0 0;
            height: 60px;
            border-right: 1px solid #f0f0f0;
        }


        .logo-icon {


            width: 30px;


        }

        .logo-icon-2 {
            width: 35px;

            margin-left: 10px;
        }


        .logo-text {


            font-size: 22px;


            margin-left: 10px;


            margin-bottom: 0;


            letter-spacing: 1px;


            color: #0d6efd;


        }


        .toggle-icon {

            font-size: 26px;


            color: #0d6efd;


            cursor: pointer;


        }


        /* Header */


        .topbar {


            position: fixed;


            top: 0;


            left: 0;


            right: 0;


            height: 60px;


            background: #ffffff;


            border-bottom: 1px solid #f0f0f0;


            z-index: 10;


        }


        .topbar .navbar {


            width: 100%;


            height: 60px;


            padding-left: 1.5rem;
            padding-right: 1.5rem;


        }


        .page-wrapper {


            height: 100%;





            margin-bottom: 30px;


            margin-left: 0px;


        }

        /* @media screen and (min-width: 1400px){

        .page-wrapper {

            padding-left: 80px;

            padding-right: 80px;

        }

        } */


        .page-content {

            background: #fff;




        }


        .page-footer {


            background: #ffffff;


            left: 0px;


            right: 0;


            bottom: 0;


            position: fixed;


            text-align: center;


            padding: 7px;


            font-size: 14px;


            border-top: 1px solid #e4e4e4;


            z-index: 3;


        }


        .search-bar {
            width: 30%;
            cursor: pointer;
        }

        .search-bar input[disabled] {
            cursor: pointer;
            background-color: #f7f7ff;
            border: 0;
        }




        /*primary menu*/

        .primary-menu .navbar .navbar-nav .nav-item {
            width: 100%;
        }

        .primary-menu .navbar .navbar-nav a.nav-link {
            display: flex;
            align-items: center;
            justify-content: start;
            gap: 0.5rem;
            font-size: 16px;
            border-radius: 0;
            padding: 0.25rem 1rem;
            margin: 2px 0rem;
            border-bottom: 1px solid #e3e3e3;

        }


        .primary-menu .navbar .navbar-nav a.nav-link:first-child {
            margin-left: 0;

        }

        .primary-menu .navbar .navbar-nav a.nav-link:last-child {
            margin-right: 0;
        }


        .primary-menu .navbar .navbar-nav a.nav-link:active,
        .primary-menu .navbar .navbar-nav a.nav-link:focus {
            color: #ffffff;
            background-color: #008cff;
        }


        .primary-menu .navbar .navbar-nav a.nav-link:hover {
            color: #32393f;
            background-color: #f5f6f7;
        }


        .primary-menu .navbar .navbar-nav a.nav-link.active:hover,
        .primary-menu .navbar .navbar-nav a.nav-link.active {
            color: #ffffff;
            background-color: #008cff;
        }

        ul.scroll-menu {
            overflow-x: auto;
            height: auto;
            max-height: 450px;
        }

        .primary-menu .navbar .navbar-nav .dropend a.dropdown-toggle:after {
            content: "\e9b2";
            position: absolute;
            right: 4px;
            border: 0;
            font-size: 20px;
            display: inline-block;
            font-family: 'boxicons';
        }


        .primary-menu .navbar .navbar-nav .dropdown-menu {
            transform-origin: top center;
            animation: rotateX 200ms  ease-in forwards;
            box-shadow: none;
            padding: 0.5rem;
            margin: 0;
        }

        .primary-menu .navbar .navbar-nav .dropend .dropdown-menu {
            padding-left: 1rem;
        }



        @keyframes rotateX {
            0% {
                opacity: 0;
                transform: rotateX(-90deg);
            }
            50% {
                transform: rotateX(-20deg);
            }
            100% {
                opacity: 1;
                transform: rotateX(0deg);
            }
        }




        .primary-menu .navbar .navbar-nav .dropdown-menu .dropdown-item {
            font-size: 16px;
            flex-shrink: 0;
            border-radius: 0;
            display: flex;
            align-items: center;
        }

        .primary-menu .navbar .navbar-nav .dropdown-menu .dropdown-item i {
            margin-right: 10px;
            font-size: 20px;
        }


        .primary-menu .navbar .navbar-nav a .parent-icon {
            font-size: 20px;
        }

        .primary-menu .navbar .navbar-nav a .menu-title i {
            font-size: 20px;
        }






        @media screen and (min-width:992px) {




            .primary-menu .navbar .navbar-nav a.nav-link {

                border-radius: 6px;
                margin: 0px 0.3rem;
                border-bottom: 0px solid #e3e3e3;

            }



            .primary-menu .navbar .navbar-nav .dropdown-menu .dropdown-item {
                border-radius: 6px;
            }


            .primary-menu .navbar .navbar-nav  .dropdown-menu {
                transform-origin: top center;
                animation: rotateX 300ms  ease-in-out forwards;
                -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, .15);
                box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, .15);

            }

            @keyframes rotateX {
                0% {
                    opacity: 0;
                    transform: rotateX(-90deg);
                }
                50% {
                    transform: rotateX(-20deg);
                }
                100% {
                    opacity: 1;
                    transform: rotateX(0deg);
                }
            }



            .primary-menu .navbar .navbar-nav .dropend .dropdown-menu {
                padding-left: 0.5rem;
            }

            .primary-menu .navbar {

                position: fixed;

                top: 60px;

                right: 0;

                left: 0;

                z-index: 9;

                border-bottom: 1px solid #e4e4e4;

                box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075)!important;

                background: #ffffff;

                padding: 10px 1.5rem;

            }



            .primary-menu .navbar .navbar-nav .dropdown-menu {
                width: 14rem;
                border-radius: 10px;
            }


            .primary-menu .navbar .navbar-nav .nav-item {
                width: auto;
            }

            .primary-menu .navbar .navbar-nav .dropdown .dropdown-menu{
                display: none;
            }

            .primary-menu .navbar .navbar-nav .dropdown:hover > .dropdown-menu,
            .primary-menu .navbar .navbar-nav .dropend:hover > .dropdown-menu{
                display: block;

            }

            .primary-menu .navbar .navbar-nav .dropend:hover > .dropdown-menu{
                position: absolute;
                top: 0;
                left: 100%;
            }







        }




        @media screen and (min-width: 1025px) {



            .email-toggle-btn {


                display: none !important;


            }


            .chat-toggle-btn {


                display: none !important;


            }


        }


        /* Extra CSS */


        .back-to-top {


            display: none;


            width: 40px;


            height: 40px;


            line-height: 40px;


            text-align: center;


            font-size: 26px;


            color: white;


            position: fixed;


            border-radius: 10px;


            bottom: 20px;


            right: 12px;


            background-color: #0d6efd;


            z-index: 5;


        }


        .back-to-top:hover {


            color: white;


            background-color: #000;


            transition: all .5s;


        }


        .breadcrumb-title {


            font-size: 20px;


            border-right: 1.5px solid #aaa4a4;


        }


        .page-breadcrumb .breadcrumb li.breadcrumb-item {


            font-size: 16px;


        }


        .page-breadcrumb .breadcrumb-item+.breadcrumb-item::before {


            display: inline-block;


            padding-right: .5rem;


            color: #6c757d;


            font-family: 'LineIcons';


            content: "\ea5c";


        }


        .icon-badge {


            width: 45px;


            height: 45px;


            background: #f2f2f2;


            display: flex;


            align-items: center;


            justify-content: center;


            border-radius: 50%;


        }


        .product-grid .card {
            -webkit-transition: all .2s;
            -o-transition: all .2s;
            transition: all .2s
        }

        @media (min-width:992px) {
            .product-grid .card:hover {
                margin-top: -.25rem;
                margin-bottom: .25rem;
                -webkit-box-shadow: 0 .5rem 1rem 0 rgba(0, 0, 0, .3);
                box-shadow: 0 .5rem 1rem 0 rgba(0, 0, 0, .3)
            }
        }

        .product-show {
            font-size: 18px;
            left: 15px;
        }

        .widgets-icons {


            width: 50px;


            height: 50px;


            display: flex;


            align-items: center;


            justify-content: center;


            background-color: #ededed;


            font-size: 26px;


            border-radius: 10px;


        }


        .widgets-icons-2 {
            width: 56px;
            height: 56px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ededed;
            font-size: 27px;
            border-radius: 10px
        }

        #geographic-map {


            width: 100%;


            height: 440px;


        }


        #geographic-map-2 {

            width: 100%;

            height: 330px

        }

        #geographic-map-3 {

            width: 100%;

            height: 350px

        }


        .product-img {


            width: 60px;


            height: 60px;


            background-color: white;


            display: flex;


            align-items: center;


            justify-content: center;


            border-radius: 10px;


            border: 1px solid #e6e6e6;


        }


        .product-img img {


            width: 60px;


            height: 60px;


            padding: 6px;


        }


        .product-img-2 {
            width: 45px;
            height: 45px;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            border: 1px solid #e6e6e6
        }

        .product-img-2 img {
            width: 45px;
            height: 45px;
            padding: 1px
        }

        .border-light-2 {
            border-color: rgb(255 255 255 / 12%)!important;
        }


        .product-list {


            position: relative;


            height: 380px;


        }


        .dashboard-top-countries {


            position: relative;


            height: 360px;


        }



        .customers-list {


            position: relative;


            height: 450px;


        }

        .store-metrics {
            position: relative;
            height: 450px;
        }

        .product-list-2 {
            position: relative;
            height: 450px;
        }



        .product-list .row {


            background-color: #f8f9fa;


            -webkit-transition: all 0.2s;


            -o-transition: all 0.2s;


            transition: all 0.2s;


        }


        @media (min-width: 992px) {


            .product-list .row:hover {


                background-color: #fff;


                margin-top: -.25rem;


                margin-bottom: .25rem;


                -webkit-box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.2);


                box-shadow: 0 0.25rem 0.5rem 0 rgba(0, 0, 0, 0.2);


            }


        }


        .recent-product-img {


            width: 40px;


            height: 40px;


            background-color: #fbfbfb;


            display: flex;


            align-items: center;


            justify-content: center;


            border-radius: 10px;


            border: 1px solid #e6e6e6;


        }


        .recent-product-img img {


            width: 40px;


            height: 40px;


            padding: 6px;


        }


        .theme-icons {


            background-color: #FFF;


        }


        .lead-table .table {


            border-collapse: separate;


            border-spacing: 0 10px;


        }


        .fm-menu .list-group a {


            font-size: 16px;


            color: #5f5f5f;


            display: flex;


            align-items: center;


        }


        .fm-menu .list-group a i {


            font-size: 23px;


        }


        .fm-menu .list-group a:hover {


            background: #0d6efd;


            color: #ffffff;


            transition: all .2s ease-out;


        }


        .fm-file-box {


            font-size: 25px;


            background: #e9ecef;


            width: 44px;


            height: 44px;


            display: flex;


            align-items: center;


            justify-content: center;


            border-radius: .25rem;


        }


        .fm-icon-box {


            font-size: 32px;


            background: #ffffff;


            width: 52px;


            height: 52px;


            display: flex;


            align-items: center;


            justify-content: center;


            border-radius: .25rem;


        }


        .user-plus {


            width: 33px;


            height: 33px;


            margin-left: -14px;


            line-height: 33px;


            background: #ffffff;


            border-radius: 50%;


            text-align: center;


            font-size: 22px;


            cursor: pointer;


            border: 1px dotted #a9b2bb;


            color: #404142;


        }


        .user-groups img {


            margin-left: -14px;


            border: 1px solid #e4e4e4;


            padding: 2px;


            cursor: pointer;


        }


        .contacts-social a {


            font-size: 16px;


            width: 36px;


            height: 36px;


            line-height: 36px;


            background: #ffffff;


            border: 1px solid #eeecec;


            text-align: center;


            border-radius: 50%;


            color: #2b2a2a;


        }


        .customers-contacts a {


            font-size: 16px;


            width: 34px;


            height: 34px;


            display: flex;


            align-items: center;


            justify-content: center;


            background: #ffffff;


            border: 1px solid #eeecec;


            text-align: center;


            border-radius: 50%;


            color: #2b2a2a;


        }


        .order-actions a {


            font-size: 18px;


            width: 34px;


            height: 34px;


            display: flex;


            align-items: center;


            justify-content: center;


            background: #f1f1f1;


            border: 1px solid #eeecec;


            text-align: center;


            border-radius: 20%;


            color: #2b2a2a;


        }


        .customers-list .customers-list-item {


            -webkit-transition: all 0.2s;


            -o-transition: all 0.2s;


            transition: all 0.2s;


        }


        @media (min-width: 992px) {


            .customers-list .customers-list-item:hover {


                background-color: #f8f9fa;


                border-radius: 10px;


                margin-top: -.25rem;


                margin-bottom: .25rem;


                -webkit-box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.2);


                box-shadow: 0 0.25rem 0.5rem 0 rgba(0, 0, 0, 0.2);


            }


        }


        .right-15 {


            right: 15px!important;


        }


        .font-13 {


            font-size: 13px;


        }


        .font-14 {


            font-size: 14px;


        }


        .font-18 {


            font-size: 18px;


        }


        .font-20 {


            font-size: 20px;


        }


        .font-22 {


            font-size: 22px;


        }


        .font-24 {


            font-size: 24px;


        }


        .font-30 {


            font-size: 30px;


        }


        .font-35 {


            font-size: 35px;


        }


        .font-50 {


            font-size: 50px;


        }


        .font-60 {


            font-size: 60px;


        }


        .radius-30 {


            border-radius: 30px;


        }


        .radius-10 {


            border-radius: 10px;


        }


        .radius-15 {

            border-radius: 15px;

        }

        .input-icon span {
            font-size: 16px;
            left: 15px;
        }

        .input-icon .form-control {
            padding-left: 2.5rem;
        }

        .error {
            color: #dc3545;
        }

        .auth-cover-left {
            display: flex;
            background-color: #f7f7ff;
            min-height: 100vh;
        }

        .auth-cover-right {
            display: flex;
            background-color: #ffffff;
            min-height: 100vh;
        }



        form select.error, form textarea.error, form input.error, form input.error:focus, form textarea.error:focus, form select.error:focus {
            border-color: #ea5455 !important;
        }

        .row.row-group>div {
            border-right: 1px solid rgba(0, 0, 0, 0.12);
        }

        .row.row-group>div:last-child {
            border-right: none;
        }

        .cursor-pointer {

            cursor: pointer

        }

        .dash-wrapper {
            margin: -1.5rem -1.5rem -5.5rem -1.5rem;
            padding: 1.5rem 1.5rem 6.5rem 1.5rem;
        }

        .dash-array-chart-box {
            width: 105px;
            height: 90px;
            position: relative;
            top: -15px;
            right: 30px;
        }

        .chart-container-0{
            position:relative;
            height:320px;
        }

        .chart-container-1{
            position:relative;
            height:260px;
        }

        .chart-container-2{
            position:relative;
            height:210px;
        }

        .chart-container-3{
            position:relative;
            height:188px;
        }

        .chart-container-4{
            position:relative;
            height:162px;
        }

        .chart-container-5{
            position:relative;
            height:110px;
        }

        .chart-container-6{
            position:relative;
            height:205px;
        }

        .chart-container-7{
            position:relative;
            height:60px;
        }
        .chart-container-8 {
            position: relative;
            height: 260px;
        }
        .chart-container-9 {
            position: relative;
            height: 280px;
        }
        .chart-container-10 {
            position: relative;
            height: 300px;
            top: 20px;
        }
        .chart-container-11 {
            position: relative;
            height: 280px;
        }

        .chart-container-12 {
            position: relative;
            height: 160px;
        }
        .chart-container-13 {
            position: relative;
            height: 240px;
        }
        .chart-container-14{
            position:relative;
            height:40px;
        }

        .w_chart {
            position: relative;
            display: inline-block;
            width: 65px !important;
            height: 65px !important;
            text-align: center;
            color: #32393f;
        }


        .w_chart canvas {
            position: absolute;
            top: 0;
            left: 0;
            width: 65px !important;
            height: 65px !important;
        }
        .w_percent {
            display: inline-block;
            line-height: 65px !important;
            z-index: 2;
        }
        .w_percent:after {
            content: '%';
            margin-left: 0.1em;
            font-size: .8em;
        }

        .cursor-pointer {


            cursor: pointer;


        }


        .chip {


            display: inline-block;


            height: 32px;


            padding: 0 12px;


            margin-right: 1rem;


            margin-bottom: 1rem;


            font-size: 14px;


            font-weight: 500;


            line-height: 32px;


            color: rgba(0, 0, 0, 0.70);


            cursor: pointer;


            background-color: #f1f1f1;


            border: 1px solid rgba(0, 0, 0, 0.15);


            border-radius: 16px;


            -webkit-transition: all .3s linear;


            transition: all .3s linear;


            box-shadow: none;


        }


        .chip img {


            float: left;


            width: 32px;


            height: 32px;


            margin: 0 8px 0 -12px;


            border-radius: 50%;


        }


        .chip .closebtn {


            padding-left: 10px;


            font-weight: bold;


            float: right;


            font-size: 16px;


            cursor: pointer;


        }


        .chip.chip-md {


            height: 42px;


            line-height: 42px;


            border-radius: 21px;


        }


        .chip.chip-md img {


            height: 42px;


            width: 42px;


        }


        /*Invoice Page*/


        #invoice {


            padding: 0px;


        }


        .invoice {


            position: relative;


            background-color: #FFF;


            min-height: 680px;


            padding: 15px


        }


        .invoice header {


            padding: 10px 10px 10px 10px;


            margin-bottom: 20px;


            border-bottom: 1px solid #243040


        }


        .invoice .company-details {


            text-align: right


        }


        .invoice .company-details .name {


            margin-top: 0;


            margin-bottom: 0


        }


        .invoice .contacts {

            padding: 10px 10px 0 10px;
            margin-bottom: 20px


        }


        .invoice .invoice-to {


            text-align: left


        }


        .invoice .invoice-to .to {


            margin-top: 0;


            margin-bottom: 0


        }


        .invoice .invoice-details {


            text-align: right


        }


        .invoice .invoice-details .invoice-id {


            margin-top: 0;


            color: #0d6efd


        }


        .invoice main {


            padding-bottom: 50px


        }


        .invoice main .thanks {


            margin-top: -100px;


            font-size: 2em;


            margin-bottom: 50px


        }


        .invoice main .notices {


            padding-left: 6px;


            border-left: 6px solid #f18b20;
            background: #fff5e7;


            padding: 10px;


        }


        .invoice main .notices .notice {


            font-size: 1.2em


        }


        .invoice table {


            width: 100%;


            border-collapse: collapse;


            border-spacing: 0;


            margin-bottom: 20px


        }


        .invoice table td,


        .invoice table th {


            padding: 5px;


            background: #eee;


            border-bottom: 1px solid #fff


        }


        .invoice table th {


            white-space: nowrap;


            font-weight: 400;


            font-size: 16px


        }


        .invoice table td h3 {


            margin: 0;


            font-weight: 400;


            color: #243040;


            font-size: 1.5em


        }


        .invoice table .qty,


        .invoice table .total,


        .invoice table .unit {


            text-align: center;


            font-size: 1.0em


        }


        .invoice table .no {


            color: #fff;


            font-size: 1.2em;


            background: #243040;


        }


        .invoice table .unit {


            background: #ddd


        }


        .invoice table .total {


            background: #0d6efd;


            color: #fff


        }


        .invoice table tbody tr:last-child td {


            border: none


        }


        .invoice table tfoot td {


            background: 0 0;


            border-bottom: none;


            white-space: nowrap;


            text-align: right;


            padding: 10px 20px;


            font-size: 1.2em;


        }


        .invoice table tfoot tr:first-child td {


            border-top: none


        }


        .invoice table tfoot tr:last-child td {


            color: #0d6efd;


            font-size: 1.4em;


        }


        .invoice table tfoot tr td:first-child {


            border: none


        }


        .invoice footer {


            width: 100%;


            text-align: center;


            color: #777;


            border-top: 1px solid #aaa;


            padding: 8px 0


        }


        @media print {


            .invoice {


                font-size: 11px!important;


                overflow: hidden!important


            }


            .invoice footer {


                position: absolute;


                bottom: 10px;


                page-break-after: always


            }


            .invoice>div:last-child {


                page-break-before: always


            }


        }


        .main-row {


            height: 100vh;


        }


        .main-col {


            max-width: 500px;


            min-height: 300px;


        }


        .todo-done {


            text-decoration: line-through;


        }



    </style>
</head>

<body  style="background-color: white;">
<!--wrapper-->
<div class="wrapper">

    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">

            <div class="card">
                <div class="card-body">
                    <div id="invoice">

                        <div class="invoice overflow-auto">
                            <div style="min-width: 600px">
                                <header>
                                    <table  style="background-color: white;" >
                                        <tbody   >
                                        <tr  >
                                            <td  style="background-color: white;" class="text-left">
                                                <div class="col">

                                                        <img  src="{{ public_path('logo.png') }}" width="150px" alt="" />

                                                </div>
                                            </td>
                                            <td  style="background-color: white;"  class="text-right">
                                                <div class="col company-details">
                                                    <div>Address: Hay Oussra, Casablanca</div>
                                                    <div>+212 700-721140</div>
                                                    <div>Contact@tawsilex.com</div>
                                                </div>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>

                                </header>
                                <main>
                                    <table  style="background-color: white;" >
                                        <tbody   >
                                        <tr  >
                                            <td  style="background-color: white;" class="text-left">
                                                <div class="col invoice-to">
                                                    <div class="text-gray-light"><h5 class="to"><span class="font-14">Client:</span> test</h5></div>

                                                    <div class="address"> test</div>
                                                    <div>test</div>
                                                </div>
                                            </td>
                                            <td  style="background-color: white;"  class="text-right">
                                                <div class="col invoice-details">

                                                </div>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                    <div class="col invoice-details">

                                        <h5 class="invoice-id"><span class="font-18">Bon N°:</span> test</h5>
                                        <div class="date">Date du bon: test</div>
                                    </div>
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>Nº</th>
                                            <th class="text-left">Code</th>
                                            <th class="text-right">Produit(s)</th>
                                            <th class="text-right">Ville</th>
                                            <th class="text-right">CRBT</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        test

                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td ></td>
                                            <td  ></td>
                                            <td  ></td>
                                            <td  style="border-top: 1px solid #aaa">Total Brut: </td>
                                            <td style="border-top: 1px solid #aaa">test DH</td>
                                        </tr>






                                        </tfoot>
                                    </table>

                                    <table style="margin-top: 30px;">
                                        <tfoot>
                                        <tr>
                                            <td colspan="2" style="text-align: center;">Cachet et/ou signature société:</td>
                                            <td colspan="2"></td>
                                            <td colspan="2"></td>
                                            <td colspan="2" style="text-align: center;">Cachet et/ou signature client:</td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </main>
                            </div>
                            <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!--end wrapper-->

</body>

</html>
