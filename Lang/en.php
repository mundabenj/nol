<?php

// email subject for registration verification
$lang['reg_ver_subject'] = "Account Activation Code - {{site_name}}";

// email body for registration verification
$lang['reg_ver_body'] = "
Hello {{fullname}},

You requested an account on <strong>{{site_name}}</strong>.
Your activation code is:
<h1>{{activation_code}}</h1>
Regards,
Systems Admin
{{site_name}}
";