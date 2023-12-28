@extends('front.layouts.app')
@section('title', "Contact Us")

@section('content') 
           <style>

            a {
                text-decoration: none;
                display: inline-block;
                outline: none;
            }
            ul,ol{
                margin-left:20px;
            }
            .list-of_school li {
                width: 50%;
                height: 80px;
                float: left;
            }
            .exam_details {
                margin-bottom: 25px;
            }
            .card {
                margin-bottom: 10px;
            }
            .exam_details h4 {
                color: #303094;
            }
            .card-header {
                padding-left: 0px;
                line-height: 1.82em !important;
                border-bottom: 1px solid #efefef;
                padding-bottom: 10px;
                margin: 10px;
            }
            table, th, td {
                border: 1px solid rgba(0,0,0,.1);
            }

            .panel-title a {
                line-height: 27px;
                color: #6059bb;
            }
            .sub_head {
                text-align: center;
                color: #2d2997;
                font-weight: 600;
            }
            .bookmark a{
                color:#FFFFFF;
                text-decoration:none;
            }

            .bookmark a:hover{
                color:#E3F9A6;
                text-decoration:underline;

            }

        </style>
     <style>
            .modal-content
            {
                background: rgb(166,162,240);
                background:linear-gradient(355deg, rgba(166,162,240,1) 0%, rgba(164,164,214,1) 35%, rgba(17,198,235,1) 100%);
            }
            .modal-body .form-control
            {

                border-radius:10px !important;
                /*box-shadow: 1px 1px 2px black;*/

            }
            .applysamplepaper .modal-title
            {
                background:#0b0e6d;
                padding:10px;
                color:white;
                border-radius:15px;
                text-align: center;
                font-weight: bold;
            }
            .mybutton6
            {
                background:#0b0e6d;
                width: 300px;
                font-weight: bold;
            }
            .compulsory
            {
                color:red;            
            }
            .about h2
            {
                text-align: center;
                //  border: 1px gray solid;
                padding: 10px;
                margin-bottom: 15px;
                color: #000;
                width: 100%;
                float: left;
            }
            .about p
            {
                font-size:17px;
                margin-bottom:15px;
            }
            .sub_head {
                text-align: center;
                color: #2d2997;
                font-weight: 600;
            }
            .tab_heading_1
            {
                background-color:#5ee6dc;
            }
            .tab_heading_2
            {
                background-color:#ff739a;
            }
            .tab_heading_3
            {
                background-color:#fcf492;
            }
            .tab_heading_4
            {
                background-color:#9bfaf7;
            }
            .tab_heading_5
            {
                background-color:#58fc87;
            }
            .tab_heading_6
            {
                background-color:#eefab4;
            }
            .tab_heading_7
            {
                background-color:#f4f4f4;
            }
            .tab_heading_8
            {
                background-color:#ff739a;
            }
            .arrow-list li{
                background: url("../images/arrow-icon.png") no-repeat top 4px left;
                padding-left: 20px;
                line-height: 1.82em !important;
                border-bottom: 1px solid #efefef;
                padding-bottom: 10px;
                width: 48%;
                float: left;
                height: 54px;
                margin-bottom: 10px;
                margin-left: 10px;
                margin-right: 10px;
            }
            .unordered-list li {
                padding-left: 0px;
                line-height: 1.82em !important;
                border-bottom: 1px solid #efefef;
                padding-bottom: 10px;
                width: 46%;
                float: left;
                margin: 10px;
            }
            .unordered-list li a
            {
                background: url("../images/arrow-icon.png") no-repeat top 4px left;
                color: #000 !important;
                padding-left: 22px;
            }
            .item-box h1 {
                border-bottom: 1px dotted #d3d3d3;
                position: relative;
                margin-bottom: 15px;
                padding-bottom: 10px;
                position: relative;
                font-size: 30px;
                color: #2e2c8f;
            }
            .item-box h1::after {
                bottom: -1px;
                content: "";
                height: 1px;
                left: 0;
                position: absolute;
                width: 70px;
                background: #ce0414;
            }
            .item-box h3 {
                color: #0c0e6d;
                font-size: 22px;
                font-weight: bold;
                padding: 10px 0;
            }
            .about h3 {
                color: #0c0e6d;
                font-size: 22px;
                font-weight: bold;
                padding: 10px 0;
            }
            .read-btn {
                background: #0c0e6d;
                box-shadow: 0px 10px 25px 0px rgba(83, 109, 253, 0.25);
                color: #fff;
                padding: 8px 12px;
                display: inline-block;
                border-radius: 4px;
                font-weight: bold;
                margin-bottom: 30px;
                text-transform: capitalize;
            }
            .about h3 {
                font-size: 20px;
                padding: 20px 0;
                color: #2d2997;
                font-weight: bold;
                width: 100%;
                float: left;
            }
            .unordered-list, .arrow-list{
                width: 100%;
                float: left;
                margin-bottom: 10px;
            }
            .list {
                float: left;
                width: 100%;
            }
            .item-box ol li {
                padding-bottom: 10px;
            }
            .img-white{
                border: 3px solid #777;
            }
            .header-top .links-nav li:last-child {
                margin-right: 0;
            }
            .panel
            {
                overflow:auto !important;
            }
            @media only screen and (max-width: 768px){
                .modal-dialog {
                    width: 500px;

                }
                @media only screen and  (max-width:539px){
                    .modal-dialog {
                        width: 310px;

                    }
                }
            </style>
            
           <style>

.about h2 {
    text-align: center;
    // border: 1px gray solid;
    padding: 10px;
    margin-bottom: 15px;
    color: #000;
    width: 100%;
    float: left;
}
.tab_heading_1 {
    background-color: #5ee6dc;
}
h1, h2, h3, h4, h5 {
    font-family: verdana, geneva, sans-serif;
}
h1, h2, h3, h4, h5, h6, p, ul {
    margin: 0;
    padding: 0;
}
.about h3 {
    font-size: 20px;
    padding: 20px 0;
    color: #2d2997;
    font-weight: bold;
    width: 100%;
    float: left;
}
.about h3 {
    color: #0c0e6d;
    font-size: 22px;
    font-weight: bold;
    padding: 10px 0;
}
h1, h2, h3, h4, h5 {
    font-family: verdana, geneva, sans-serif;
}
h1, h2, h3, h4, h5, h6, p, ul {
    margin: 0;
    padding: 0;
}

.about h2 {
    text-align: center;
    // border: 1px gray solid;
    padding: 10px;
    margin-bottom: 15px;
    color: #000;
    width: 100%;
    float: left;
}
.tab_heading_2 {
    background-color: #ff739a;
}
h1, h2, h3, h4, h5 {
    font-family: verdana, geneva, sans-serif;
}
h1, h2, h3, h4, h5, h6, p, ul {
    margin: 0;
    padding: 0;
}

.read-btn {
    background: #0c0e6d;
    box-shadow: 0px 10px 25px 0px rgba(83, 109, 253, 0.25);
    color: #fff;
    padding: 8px 12px;
    display: inline-block;
    border-radius: 4px;
    font-weight: bold;
    margin-bottom: 30px;
    text-transform: capitalize;
}
a {
    text-decoration: none;
    display: inline-block;
    outline: none;
}

.about h2 {
    text-align: center;
    // border: 1px gray solid;
    padding: 10px;
    margin-bottom: 15px;
    color: #000;
    width: 100%;
    float: left;
}
.tab_heading_3 {
    background-color: #fcf492;
}
h1, h2, h3, h4, h5 {
    font-family: verdana, geneva, sans-serif;
}

h1, h2, h3, h4, h5, h6, p, ul {
    margin: 0;
    padding: 0;
}

.unordered-list li a {
    background: url(../images/arrow-icon.png) no-repeat top 4px left;
    color: #000 !important;
    padding-left: 22px;
}

a:hover, a:focus, a:visited {
    text-decoration: none;
    outline: none;
}


a:focus, a:hover {
    color: #23527c;
    text-decoration: underline;
}
a:active, a:hover {
    outline: 0;
}
a {
    text-decoration: none;
    display: inline-block;
    outline: none;
}

.about h2 {
    text-align: center;
    // border: 1px gray solid;
    padding: 10px;
    margin-bottom: 15px;
    color: #000;
    width: 100%;
    float: left;
}
.tab_heading_8 {
    background-color: #ff739a;
}
h1, h2, h3, h4, h5 {
    font-family: verdana, geneva, sans-serif;
}
h1, h2, h3, h4, h5, h6, p, ul {
    margin: 0;
    padding: 0;
}
.about h2 {
    text-align: center;
    // border: 1px gray solid;
    padding: 10px;
    margin-bottom: 15px;
    color: #000;
    width: 100%;
    float: left;
}
.tab_heading_4 {
    background-color: #9bfaf7;
}
h1, h2, h3, h4, h5 {
    font-family: verdana, geneva, sans-serif;
}
h1, h2, h3, h4, h5, h6, p, ul {
    margin: 0;
    padding: 0;
}

.about h2 {
    text-align: center;
    // border: 1px gray solid;
    padding: 10px;
    margin-bottom: 15px;
    color: #000;
    width: 100%;
    float: left;
}
.tab_heading_4 {
    background-color: #9bfaf7;
}
h1, h2, h3, h4, h5 {
    font-family: verdana, geneva, sans-serif;
}
h1, h2, h3, h4, h5, h6, p, ul {
    margin: 0;
    padding: 0;
}
.about h2 {
    text-align: center;
    // border: 1px gray solid;
    padding: 10px;
    margin-bottom: 15px;
    color: #000;
    width: 100%;
    float: left;
}
.tab_heading_5 {
    background-color: #58fc87;
}
h1, h2, h3, h4, h5 {
    font-family: verdana, geneva, sans-serif;
}
h1, h2, h3, h4, h5, h6, p, ul {
    margin: 0;
    padding: 0;
}
.about h2 {
    text-align: center;
    // border: 1px gray solid;
    padding: 10px;
    margin-bottom: 15px;
    color: #000;
    width: 100%;
    float: left;
}
.tab_heading_6 {
    background-color: #eefab4;
}
h1, h2, h3, h4, h5 {
    font-family: verdana, geneva, sans-serif;
}
h1, h2, h3, h4, h5, h6, p, ul {
    margin: 0;
    padding: 0;
}
.about h2 {
    text-align: center;
    // border: 1px gray solid;
    padding: 10px;
    margin-bottom: 15px;
    color: #000;
    width: 100%;
    float: left;
}
.tab_heading_7 {
    background-color: #f4f4f4;
}
h1, h2, h3, h4, h5 {
    font-family: verdana, geneva, sans-serif;
}
h1, h2, h3, h4, h5, h6, p, ul {
    margin: 0;
    padding: 0;
}





            a {
                text-decoration: none;
                display: inline-block;
                outline: none;
            }
            ul,ol{
                margin-left:20px;
            }
            .list-of_school li {
                width: 50%;
                height: 80px;
                float: left;
            }
            .exam_details {
                margin-bottom: 25px;
            }
            .card {
                margin-bottom: 10px;
            }
            .exam_details h4 {
                color: #303094;
            }
            .card-header {
                padding-left: 0px;
                line-height: 1.82em !important;
                border-bottom: 1px solid #efefef;
                padding-bottom: 10px;
                margin: 10px;
            }
            table, th, td {
                border: 2px solid rgba(0,0,0);
            }

            .panel-title a {
                line-height: 27px;
                color: #6059bb;
            }
            .sub_head {
                text-align: center;
                color: #2d2997;
                font-weight: 600;
            }
            .bookmark a{
                color:#FFFFFF;
                text-decoration:none;
            }

            .bookmark a:hover{
                color:#E3F9A6;
                text-decoration:underline;

            }
            
            element.style {
}
.about h2 {
    text-align: center;
    // border: 1px gray solid;
    padding: 10px;
    margin-bottom: 15px;
    color: #000;
    width: 100%;
    float: left;
}
.about h2 {
    text-align: center;
    // border: 1px gray solid;
    padding: 10px;
    margin-bottom: 15px;
    color: #000;
    width: 100%;
    float: left;
}
.about h2 {
    text-align: center;
    // border: 1px gray solid;
    padding: 10px;
    margin-bottom: 15px;
    color: #000;
    width: 100%;
    float: left;
}
.about h2 {
    text-align: center;
    // border: 1px gray solid;
    padding: 10px;
    margin-bottom: 15px;
    color: #000;
    width: 100%;
    float: left;
}
.about h2 {
    text-align: center;
    // border: 1px gray solid;
    padding: 10px;
    margin-bottom: 15px;
    color: #000;
    width: 100%;
    float: left;
}
.about h2 {
    text-align: center;
    // border: 1px gray solid;
    padding: 10px;
    margin-bottom: 15px;
    color: #000;
    width: 100%;
    float: left;
}
.about h2 {
    text-align: center;
    // border: 1px gray solid;
    padding: 10px;
    margin-bottom: 15px;
    color: #000;
    width: 100%;
    float: left;
}
.about h2 {
    text-align: center;
    // border: 1px gray solid;
    padding: 10px;
    margin-bottom: 15px;
    color: #000;
    width: 100%;
    float: left;
}
.about h2 {
    text-align: center;
    // border: 1px gray solid;
    padding: 10px;
    margin-bottom: 15px;
    color: #000;
    width: 100%;
    float: left;
}
.tab_heading_1 {
    background-color: #5ee6dc;
}
h1, h2, h3, h4, h5, h6, p, ul {
    margin: 0;
    padding: 0;
}
h1, h2, h3, h4, h5 {
    font-family: verdana, geneva, sans-serif;
}
h1, h2, h3, h4, h5, h6, p, ul {
    margin: 0;
    padding: 0;
}
h1, h2, h3, h4, h5 {
    font-family: verdana, geneva, sans-serif;
}
h1, h2, h3, h4, h5, h6, p, ul {
    margin: 0;
    padding: 0;
}
h1, h2, h3, h4, h5 {
    font-family: verdana, geneva, sans-serif;
}
h1, h2, h3, h4, h5, h6, p, ul {
    margin: 0;
    padding: 0;
}
h1, h2, h3, h4, h5 {
    font-family: verdana, geneva, sans-serif;
}
h1, h2, h3, h4, h5, h6, p, ul {
    margin: 0;
    padding: 0;
}
h1, h2, h3, h4, h5 {
    font-family: verdana, geneva, sans-serif;
}
h1, h2, h3, h4, h5, h6, p, ul {
    margin: 0;
    padding: 0;
}
h1, h2, h3, h4, h5 {
    font-family: verdana, geneva, sans-serif;
}
h1, h2, h3, h4, h5, h6, p, ul {
    margin: 0;
    padding: 0;
}
h1, h2, h3, h4, h5 {
    font-family: verdana, geneva, sans-serif;
}
h1, h2, h3, h4, h5, h6, p, ul {
    margin: 0;
    padding: 0;
}
h1, h2, h3, h4, h5 {
    font-family: verdana, geneva, sans-serif;
}
h1, h2, h3, h4, h5, h6, p, ul {
    margin: 0;
    padding: 0;
}
h1, h2, h3, h4, h5 {
    font-family: verdana, geneva, sans-serif;
}
h1, h2, h3, h4, h5, h6, p, ul {
    margin: 0;
    padding: 0;
}
h1, h2, h3, h4, h5 {
    font-family: verdana, geneva, sans-serif;
}
h1, h2, h3, h4, h5, h6 {
    font-family: 'Montserrat', sans-serif;
}
.h2, h2 {
    font-size: 2rem;
}
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    margin-bottom: 0.5rem;
    font-weight: 500;
    line-height: 1.2;
}
h1, h2, h3, h4, h5, h6 {
    margin-top: 0;
    margin-bottom: 0.5rem;
}
* {
    margin: 0;
    padding: 0;
}
*, ::after, ::before {
    box-sizing: border-box;
}
user agent stylesheet
h2 {
    display: block;
    font-size: 1.5em;
    margin-block-start: 0.83em;
    margin-block-end: 0.83em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
.tab_heading_1 {
    background-color: #5ee6dc;
}

        </style>

        <style>
            .panel-title a {
                line-height: 27px;
                color: #6059bb;
            }
            .list-of_school li {
                width: 50%;
                height: 80px;
                float: left;
            }

            .exam_details h4 {
                color: #303094;
            }
            .exam_details {
                margin-bottom: 25px;
            }
            .bookmark a{
                color:#FFFFFF;
                text-decoration:none;
            }

            .bookmark a:hover{
                color:#E3F9A6;
                text-decoration:underline;

            }
        </style> 
           
        
         <style type="text/css">
            .p{    font-size: 11px; text-align:center;}
            .container-fluid {
                color: #000;
                background-image: url("images/sample-paper-design/background.jpeg");
                background-repeat: no-repeat;
                background-size: cover;

            }

            .card {
                padding: 30px 40px;
                margin-top: 60px;
                margin-bottom: 60px;
                border: none !important;
                box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2)
            }

            .blue-text {
                color: #00BCD4
            }

            .form-control-label {
                margin-bottom: 0
            }
            .compulsory
            {
                color:red;            
            }




        </style>
        <style>
            element.style {
}
.about h3 {
    font-size: 20px;
    padding: 20px 0;
    color: #2d2997;
    font-weight: bold;
    width: 100%;
    float: left;
}
.about h3 {
    color: #0c0e6d;
    font-size: 22px;
    font-weight: bold;
    padding: 10px 0;
}
.item-box h3 {
    color: #0c0e6d;
    font-size: 22px;
    font-weight: bold;
    padding: 10px 0;
}
h1, h2, h3, h4, h5 {
    font-family: verdana, geneva, sans-serif;
}
h1, h2, h3, h4, h5, h6, p, ul {
    margin: 0;
    padding: 0;
}
        </style>

        <style>
     .modal-content
            {
                background: rgb(166,162,240);
                background:linear-gradient(355deg, rgba(166,162,240,1) 0%, rgba(164,164,214,1) 35%, rgba(17,198,235,1) 100%);
            }
            .modal-body .form-control
            {

                border-radius:10px !important;
                /*box-shadow: 1px 1px 2px black;*/

            }
                .applysamplepaper .modal-title
                {
                    background:#0b0e6d;
                    padding:10px;
                    color:white;
                    border-radius:15px;
                    text-align: center;
                    font-weight: bold;
                }
                .mybutton6
                {
                    background:#0b0e6d;
                    width: 300px;
                    font-weight: bold;
                }
                .compulsory
                {
                    color:red;            
                }
</style> 
        
        
        
        
        
        


       <div class="section">
            <div class="container">
                <h1>{{$page->title}}</h1>
            </div>
        </div>
        
        <!--about start-->
        <section class="about">
           <div class="container">
               {!! $page->description !!}
           </div>
        </section>
        <!--about end-->

        <!--feature start-->

        <div class="preloader"></div>           
        <br clear="all"/>
    @endsection