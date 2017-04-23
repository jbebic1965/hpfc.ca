<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html> 
<!-- ********************************************************************** --> 
<!-- File name: jbside.php --> 
<!-- Subject: Template page for HPFC web site based on include files --> 
<!-- --> 
<!-- Created: Aug 9/05 --> 
<!-- Original Issue: Pending --> 
<!-- Last Edited: Aug 9/05 --> 
<!-- Latest Rev. #: 0 --> 
<!-- --> 
<!-- Ref. Docs. & web sites: 
        jbside.html
        http://www.w3.org/TR/html4/
        http://www.w3.org/TR/CSS1
        http://www.alistapart.com/articles/practicalcss/
-->
<!-- Revision Notes: 
Rev. #: 0 (Aug 9-XX/05 by JB)
This is a template page for testing PHP code. 
-->
<head>
    <title>Hybrid Power Flow Controller - PHP testing template page</title>
    <link type="text/css" rel="stylesheet" href="styles/hpfc.css">
    <meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1">
    <meta name="author" content="Jovan Bebic">
    <meta name="keywords" content="hybrid power flow controller, HPFC, 
    power flow controller, flexible AC transmission, FACTS, 
    UPFC, STATCOM, SSSC, SVC, power flow, load flow">
    <meta name="description" content="Hybrid Power Flow Controller (HPFC) 
    uses power electronics converters to enhance the functionality of existing 
    reactive power support in the transmission system">
    <script language="JavaScript" src="scripts/hpfc.js" type="text/JavaScript"></script>
</head>
<body>
    <!-- The screen is vertically divided for navigation and body text -->
    <a name="top"></a>
    <table class="jbBase" cellspacing="0" border="0">
    <tr>
    <td class="jbBaseSideNav"> 
      <table>
            <!-- Side Navigation -->
            <tr><td align="center"><img src="images/hpfc_logo.gif" alt="hpfc_logo"></td></tr>
            <tr><td class="jbSideNav">&nbsp;</td></tr>
            <tr><td class="jbSideNav"><a class="jbSideLnkOn" href="php_server_cfg.php" target="_top">Server Config</a></td></tr>
            <tr><td class="jbSideNav"><a class="jbSideLnkOff" href="php_email.php" target="_top">Email Test</a></td></tr>
            <tr><td class="jbSideNav"><a class="jbSideLnkOff" href="php_userdb.php" target="_top">User Database</a></td></tr>
            <tr><td class="jbSideNav"><a class="jbSideLnkOff" href="php_login.php" target="_top">User Login</a></td></tr>
            <tr><td class="jbSideNav"><a class="jbSideLnkOff" href="php_resetpwd.php" target="_top">Reset password</a></td></tr>
            <tr><td class="jbSideNav"><a class="jbSideLnkOff" href="php_register.php" target="_top">Register</a></tr>
            <tr><td class="jbSideNav">&nbsp;</td></tr>
            <tr><td class="jbSideNav">&nbsp;</td></tr>
            <tr><td class="jbSideNav">&nbsp;</td></tr>
            <tr><td class="jbSideNavFootA">Last Updated</td></tr>
            <tr><td class="jbSideNavFootB">
                <script language="JavaScript" type="text/JavaScript">
                <!-- 
                jbDate();
                //-->
                </script>
                <noscript>N/A</noscript>
                </td>
            </tr>
            <tr><td class="jbSideNav"><a class="jbSideLnkImg" href="http://validator.w3.org/check/referer"><img class="jbW3img" src="images/valid-html401.gif" alt="Valid HTML 4.01!"></a></td></tr>
            <tr><td class="jbSideNav"><a class="jbSideLnkImg" href="http://jigsaw.w3.org/css-validator/check/referer"><img class="jbW3img" src="images/valid-css.gif" alt="Valid CSS!"></a></td></tr>
            <tr><td class="jbSideNav">&nbsp;</td></tr>
      </table>
    </td>
    <td class="jbBaseTxt">
<!-- Body text is pasted here -->
<!-- First the title (always the same) -->
<h1 class="jbTitleA">A Symmetrical<br>
    <span class="jbHilite">H</span>ybrid 
    <span class="jbHilite">P</span>ower 
    <span class="jbHilite">F</span>low 
    <span class="jbHilite">C</span>ontroller
</h1>
<p class="jbTitleB">A new technology for Flexible AC Transmission (FACTS)</p>
<!-- Actual content text -->
<script language="php">
    // phpinfo();
    echo 'Jovan was here';
</script>

<!-- Foot of the page (always the same) -->
<p class="jbFoot">
    <a href="welcome.html">Welcome</a>&nbsp;|&nbsp;
    <a href="about.html">About&nbsp;us</a>&nbsp;|&nbsp;
    <a href="facts.html">What&nbsp;is&nbsp;FACTS?</a>&nbsp;|&nbsp;
    <a href="hpfc.html">What&nbsp;is&nbsp;HPFC?</a>&nbsp;|&nbsp;
    <a href="downloads.html">Downloads</a>&nbsp;|&nbsp;
    <a href="contact.html">Contact&nbsp;us</a>
</p>
        </td>
    </tr>
    </table>
</body>
</html> 
