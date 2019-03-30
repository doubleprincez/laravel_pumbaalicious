@extends('layouts.app')

@section('title') Not Found @endsection

@section('style')
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .code {
            border-right: 2px solid;
            font-size: 26px;
            padding: 0 15px 0 15px;
            text-align: center;
        }

        .message {
            font-size: 18px;
            text-align: center;
        }
        .vfinder-info a,
        .vfinder-info div  {
            color: #dedede;
        }
        .vfinder-info *,
        .vfinder-code *
        {
            margin: 0;
            padding: 0;
            border-width: 0;
            background: transparent;
        }
        .vfinder-info > div {
            padding: 4px 12px;
        }
        .vfinder-info > div:hover{
            background: rgba(140, 140, 140, 0.36);
        }
        .vfinder-info {
            position: fixed;
            border-radius: 4px;
            padding: 5px 0;
            background: rgba(64, 64, 64, 0.9);

            /*    padding: 10px 18px;*/
            z-index: 9999999;
            border: 1px solid rgb(143, 143, 143);
            font-size: 13px;
        }
        .vfinder-info:after{
            position: absolute;
            content: " ";
            width: 10px;
            height: 10px;
            -webkit-transform: rotate(45deg);
            background: rgba(64, 64, 64, 0.9);
            left: -5px;
            top: 50%;
            margin-top: -5px;
        }
        .vfinder-info-name-template{
            color: #ff7474;
        }
        .vfinder-info-name-style{
            color: #17ceff;
        }
        .vfinder-info-name-script{
            color: #f281ff;
        }
        .vfinder-info-name-created{
            color: #40c22a;
        }
        .vfinder-info-name-template,
        .vfinder-info-name-style,
        .vfinder-info-name-script,
        .vfinder-info-name-created{
            display: inline-block;
            width: 75px;
        }
        .vfinder-mask {
            position: fixed;
            z-index: 9999998;
            background-color: rgba(1, 165, 255, 0.2);
            pointer-events: none;
        }
        .vfinder-code{
            position: fixed;
            /*    padding: 10px;*/
            /*    background: rgba(254, 255, 221, 0.9);*/
            background: rgba(64, 64, 64, 0.9);
            max-width: 400px;
            font-size: 10px;
            z-index: 10000000;
            word-wrap: break-word;
            border-radius: 4px;
            /*    color: #747474;*/
            color: #dedede;
            border: 1px solid rgba(222, 222, 222, 0.34);
        }
        .vfinder-path::-webkit-scrollbar,
        .vfinder-code-content::-webkit-scrollbar {
            height: 8px;
            width: 8px;
        }
        .vfinder-path::-webkit-scrollbar-thumb,
        .vfinder-code-content::-webkit-scrollbar-thumb {
            background: rgba(103, 103, 103, 0.9);
            border-radius: 4px;
        }
        .vfinder-path::-webkit-scrollbar-track,
        .vfinder-code-content::-webkit-scrollbar-track {
            background: #ddd;
            border-radius: 4px;
        }


        .vfinder-code-content{
            padding: 0 10px;
            overflow: auto;
            max-height: 260px;
        }
        .vfinder-code-content p {
            padding: 2px 6px 2px 0;
        }
        .vfinder-code-content > pre {
            float: left;
            clear: left;
            white-space: nowrap;
        }
        .vfinder-current-code-line{
            background: rgba(234, 102, 223, 0.25);
            border-radius: 2px;
        }
        .vfinder-path{
            padding: 10px;
            border-bottom: 1px solid rgba(222, 222, 222, 0.34);
            background: rgba(140, 140, 140, 0.36);
            white-space:nowrap;
            overflow-x: auto;
        }
        .vfinder-line-count{
            color: #dedede;
            min-width: 25px;
            display: inline-block;
        }
        /*
         IR_Black style (c) Vasily Mikhailitchenko <vaskas@programica.ru>
       */

        .hljs {
            display: block;
            overflow-x: auto;
            padding: 0.5em;
            background: #000;
            color: #f8f8f8;
        }

        .hljs-comment,
        .hljs-quote,
        .hljs-meta {
            color: #7c7c7c;
        }

        .hljs-keyword,
        .hljs-selector-tag,
        .hljs-tag,
        .hljs-name {
            color: #96cbfe;
        }

        .hljs-attribute,
        .hljs-selector-id {
            color: #ffffb6;
        }

        .hljs-string,
        .hljs-selector-attr,
        .hljs-selector-pseudo,
        .hljs-addition {
            color: #a8ff60;
        }

        .hljs-subst {
            color: #daefa3;
        }

        .hljs-regexp,
        .hljs-link {
            color: #e9c062;
        }

        .hljs-title,
        .hljs-section,
        .hljs-type,
        .hljs-doctag {
            color: #ffffb6;
        }

        .hljs-symbol,
        .hljs-bullet,
        .hljs-variable,
        .hljs-template-variable,
        .hljs-literal {
            color: #c6c5fe;
        }

        .hljs-number,
        .hljs-deletion {
            color:#ff73fd;
        }

        .hljs-emphasis {
            font-style: italic;
        }

        .hljs-strong {
            font-weight: bold;
        }
    </style>
@endsection
@section('content')


    <div class="flex-center position-ref full-height">
        <div class="code">
            404
        </div>
        <div class="message" style="padding: 10px;"> Not Found </div>&nbsp;&nbsp;
       <a  href="{{ url()->previous() }}">
           <button class="btn btn-outline-primary"><i class="fa fa-backward"></i> Back</button>
       </a>
    </div>
@endsection