@extends('layouts.site.app')
@section('content')
    <style>
        .container5 {
            max-width: 600px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: right;
        }
        p {
            margin-top: 20px;
        }
        .copy-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .copy-button:hover {
            background-color: #45a049;
        }
    </style>
    <div class="container5">
        <h1>انسخ الرابط واحصل على مكافأه</h1>
        <p id="link-to-copy"><a href="{{$inviteCode}}" target="_blank">{{$inviteCode}}</a></p>
        <button type="button" class="copy-button" onclick="copyTextFromElement('link-to-copy')">Copy Link</button>
    </div>
    <script>
        function copyTextFromElement(elementID) {
            let element = document.getElementById(elementID); // select the element
            let elementText = element.textContent; // get the text content from the element
            copyText(elementText); // use the copyText function below
        }

        function copyText(text) {
            navigator.clipboard.writeText(text).then(function() {
                alert('Text successfully copied to clipboard');
            }).catch(function(err) {
                console.error('Unable to copy text to clipboard', err);
            });
        }

    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/index.js"></script>
@endsection
