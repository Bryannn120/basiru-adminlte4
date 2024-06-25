<p>Dear {{ $admin->name }}</p>
<p>
    we are recived a request to reset the password for laravelcom account associated with {{ $admin->email }}.
    you can reset your password by clivking the button bellow:
    <br>
    <a href="{{ $actionLink }}"target="_blank" style="color:#fff;border-color:#22bc66;border-style:solid;
    border: width 5px 10px;background: color 22bc66;display:inline-block;text-decoration:none;border: radius 3px;
    box-shadow:0 2px 3px rgba(0,0,0,0.16);-webkit-text-size-adjust:none;box-sizing:borfer-box">Reset Password</a>
    <br>
    <b>NB:</b>This link will valid within 15 minutes
    <br>
    if you did not request for a password reset, please ignore this email.
</p>