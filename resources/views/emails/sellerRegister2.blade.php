<html>
<head>
    <style>

        btn {
            display: inline-block;
            font-weight: 500;
            line-height: 1.5;
            color: #181C32;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0.75rem 1.5rem;
            font-size: 1.1rem;
            border-radius: 0.475rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
    </style>
</head>
<body>

<h3> Congratulations! Your account has been created</h3>
<p>
    all you need to do now is start adding your products.
    start now</p>
<p>this Your Data To login : </p>
<br>
<p>Your Email : {{$mailData['email']}}</p>
<p>Your password : {{$mailData['password']}}</p>
<p>You Can Access Your Dashboard From This Link {{url('login')}} </p>
<br>


</body>
</html>
