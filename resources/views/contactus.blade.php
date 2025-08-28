@extends('layouts.app')
@section('scripts')
    <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                display: flex;
                flex-direction: column;
                min-height: 100vh;
            }

            nav ul {
                list-style-type: none;
                padding: 0;
                background: #005bb5;
                overflow: hidden;
                display: flex;
                justify-content: center;
            }

            nav ul li {
                padding: 14px 20px;
            }

            nav ul li a {
                color: white;
                text-decoration: none;
            }

            .container {
                display: flex;
                flex: 1;
                max-width: 100%;
            }

            .sidebar {
                width: 250px;
                background: #f4f4f4;
                padding: 15px;
            }

            .main-content {
                flex: 1;
                padding: 20px;
            }

            footer {
                background: #004080;
                color: white;
                text-align: center;
                padding: 10px;
                position: relative;
                bottom: 0;
                width: 100%;
            }
        </style>
@endsection

@section('content')
    <div>
        <h2>Contact Us</h2>
    </div>
            @include('SubView.Input',[
            'myName'=>$name
        ])
@endsection