<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Form Submission - Newsletter Update</title>
</head>
<style type="text/css">
    body {
        background-color: #e8faff;
    }

    p {
        font-size: 15px;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: #141414;
        font-style: italic;
    }

    #mainbox {
        background-image: url(http://www.benjaminpotter.org/Images/emailtotheuser.jpg);
        width: 345px;
        height: 404px;
        margin-left: auto;
        margin-right: auto;
        display: block;
        margin-top: 50px;
    }

    #mainbox #textholder {
        width: 279px;
        height: 300px;
        display: block;
        position: absolute;
        margin-top: 80px;
        margin-left: 30px;
    }

    #special {
        color: #72C0EF;
        text-align: center !important;
        font-style: normal;
    }

</style>

<body>
    <div id="mainbox">
        <div id="textholder">
            <p>
            <h2>Hey !</h2> <br><br>
            You received an email from : {{ $name }} <br><br>
            User details: <br><br>
            Name: {{ $name }}<br>
            Email: {{ $email }}<br>


        <br/>
            Subject :<br />
            <span id="special">{{ $subject }}</span>
            <br />
            Message : {{$message }}.<br />
            <br />
            <br />
            Thanks !
            <br />
            <strong>{{ $name }}</strong>
            </p>
        </div>
    </div>
</body>
</html>
