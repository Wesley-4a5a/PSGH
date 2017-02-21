
<!DOCTYPE html>
<html lang="en" dir="ltr" class="client-nojs">
<head>
<meta charset="UTF-8"/>
<title>Manual install on Windows 7 with Apache and MySQL - MoodleDocs</title>
<script>document.documentElement.className = document.documentElement.className.replace( /(^|\s)client-nojs(\s|$)/, "$1client-js$2" );</script>
<script>window.RLQ = window.RLQ || []; window.RLQ.push( function () {
mw.config.set({"wgCanonicalNamespace":"","wgCanonicalSpecialPageName":!1,"wgNamespaceNumber":0,"wgPageName":"Manual_install_on_Windows_7_with_Apache_and_MySQL","wgTitle":"Manual install on Windows 7 with Apache and MySQL","wgCurRevisionId":120808,"wgRevisionId":120808,"wgArticleId":16600,"wgIsArticle":!0,"wgIsRedirect":!1,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgCategories":["Installation"],"wgBreakFrames":!1,"wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgRelevantPageName":"Manual_install_on_Windows_7_with_Apache_and_MySQL","wgRelevantArticleId":16600,"wgIsProbablyEditable":!1,"wgRestrictionEdit":[],"wgRestrictionMove":
[]});mw.loader.implement("user.options",function($,jQuery){mw.user.options.set({"variant":"en"});});mw.loader.implement("user.tokens",function($,jQuery){mw.user.tokens.set({"editToken":"+\\","patrolToken":"+\\","watchToken":"+\\"});});mw.loader.load(["mediawiki.page.startup","mediawiki.legacy.wikibits"]);
} );</script>
<link rel="stylesheet" href="/29/en/load.php?debug=false&amp;lang=en&amp;modules=mediawiki.legacy.commonPrint%2Cshared%7Cmediawiki.sectionAnchor&amp;only=styles&amp;skin=moodledocs"/>
<link rel="stylesheet" href="/29/en/skins/moodledocs/userdocs.css?305" media="screen"/>
<link rel="stylesheet" href="/29/en/skins/moodledocs/sitebar/sitebar-doc.css?305" media="screen"/>
<link rel="stylesheet" href="/29/en/skins/moodledocs/bootstrap-responsive.min.css?305"/>
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300&amp;amp;subset=latin,cyrillic-ext,greek-ext,greek,vietnamese,latin-ext,cyrillic"/>
<meta name="ResourceLoaderDynamicStyles" content=""/>
<style>a:lang(ar),a:lang(kk-arab),a:lang(mzn),a:lang(ps),a:lang(ur){text-decoration:none}</style>
<script async="" src="/29/en/load.php?debug=false&amp;lang=en&amp;modules=startup&amp;only=scripts&amp;skin=moodledocs"></script>
<meta name="generator" content="MediaWiki 1.26.4"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="shortcut icon" href="/favicon.ico"/>
<link rel="search" type="application/opensearchdescription+xml" href="/29/en/opensearch_desc.php" title="MoodleDocs 29 (English)"/>
<link rel="EditURI" type="application/rsd+xml" href="https://docs.moodle.org/29/en/api.php?action=rsd"/>
<link rel="copyright" href="https://docs.moodle.org/dev/License"/>
<link rel="alternate" type="application/atom+xml" title="MoodleDocs Atom feed" href="/29/en/index.php?title=Special:RecentChanges&amp;feed=atom"/>
</head>
<body class="mediawiki ltr sitedir-ltr ns-0 ns-subject page-Manual_install_on_Windows_7_with_Apache_and_MySQL skin-moodledocs action-view">
<div id="moodlesitestopnavbar">
<div class="navbar-container">
<a class="sitelogo" href="https://moodle.org/">
<img alt="Moodle.org" width="96" height="25" src="/dev/skins/moodledocs/sitebar/pix/logo.png"/>
</a>
<ul>
<li class="home">
<a href="https://moodle.org"><span>Home</span><span class="placeholder"></span></a>
</li>
<li class="documentation">
<a href="https://docs.moodle.org"><span>Documentation</span><span class="placeholder"></span></a>
</li>
<li class="download">
<a href="https://download.moodle.org"><span>Downloads</span><span class="placeholder"></span></a>
</li>
<li class="demo">
<a href="https://moodle.org/demo"><span>Demo</span><span class="placeholder"></span></a>
</li>
<li class="tracker">
<a href="https://tracker.moodle.org"><span>Tracker</span><span class="placeholder"></span></a>
</li>
<li class="development">
<a href="https://docs.moodle.org/dev/Main_Page"><span>Development</span><span class="placeholder"></span></a>
</li>
<li class="translation">
<a href="https://lang.moodle.org"><span>Translation</span><span class="placeholder"></span></a>
</li>
<li class="moodlenet">
<a href="https://moodle.net"><span>Moodle.net</span><span class="placeholder"></span></a>
</li>
<li class="search">
<a href="https://moodle.org/public/search/"><span>Search</span><span class="placeholder"></span></a>
</li>
</ul>
</div>
<div style="clear:both"></div>
</div>
<div id="page">
 
<div id="moodlelogo"></div>
 
 
<div id="moodlenavbar" class="navbar clearfix" dir="LTR"><div class="breadcrumb"><h2 class="accesshide">You are here</h2></div></div>
 
<div id="globalWrapper" class="container-fluid">
<div id="column-content" class="has-sideblock">
<div id="content">
<a id="top"></a>
<h1 id="firstHeading" class="firstHeading">Manual install on Windows 7 with Apache and MySQL</h1>
<div id="bodyContent">
<div id="contentSub"></div>
<div id="jump-to-nav">Jump to: <a href="#column-one">navigation</a>, <a href="#searchInput">search</a></div>
<div id="site-notice"><p class="note"><i>Note: You are currently viewing documentation for Moodle 2.9. Up-to-date documentation for the latest stable version of Moodle may be available here: <b><a href="http://docs.moodle.org/en/Manual_install_on_Windows_7_with_Apache_and_MySQL" class="extiw" title="en:Manual install on Windows 7 with Apache and MySQL">Manual install on Windows 7 with Apache and MySQL</a>.</b></i></p>
</div>  
<div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr"><div class="navtrail"><a href="/29/en/Main_page" title="Main page">Main page</a> &#9658; <a href="/29/en/Installation" title="Installation">Installation</a> &#9658; <strong class="selflink">Manual install on Windows 7 with Apache and MySQL</strong></div>
<div class="sideblock right" style="width: 16em;">
<div class="header"><a href="/29/en/Installation" title="Installation">Installation</a></div>
<div class="content">
<ul><li><a href="/29/en/Installing_Moodle" title="Installing Moodle">Installing Moodle</a></li>
<li><a href="/29/en/Installation_Quickstart" title="Installation Quickstart">Installation Quickstart</a></li>
<li><a href="/29/en/Cron" title="Cron">Cron</a></li>
<li><a href="/29/en/Installing_plugins" title="Installing plugins">Installing plugins</a></li>
<li><a href="/29/en/Installation_FAQ" title="Installation FAQ">Installation FAQ</a></li>
<li><a href="/29/en/Upgrading" title="Upgrading">Upgrading</a></li>
<li><a href="/29/en/Upgrade_overview" title="Upgrade overview">Upgrade overview</a></li>
<li><a href="/29/en/Automatic_updates_deployment" title="Automatic updates deployment">Automatic updates deployment</a></li>
<li><a href="/29/en/Git_for_Administrators" title="Git for Administrators">Git guide</a></li>
<li><a href="/29/en/Administration_via_command_line" title="Administration via command line">Administration via command line</a></li>
<li><a href="/29/en/Upgrading_FAQ" title="Upgrading FAQ">Upgrading FAQ</a></li>
<li><a href="/29/en/Moodle_migration" title="Moodle migration">Moodle migration</a></li></ul>
</div>
</div>
<p>These are instructions for installing on Windows 7 desktop (they may also be useful for a server install with some thought to security) using individual components rather than a one click installer. This is intended only as a testing/evaluation install via 'localhost'. Proper server configuration and security is not considered.
</p><p><b>NOTE</b>: This assumes that you are comfortable with administering a Windows system and can use the command line. I never use Windows and I managed, but this may not be the quickest or most efficient way to do things. Make sure your Windows installation is in good shape, you clear out all the junk and stuff making it run slower (because installing all this server software certainly isn't going to make it run faster!) and that you have installed any outstanding updates.
</p><p><b>ANOTHER NOTE</b>: Watch out for the irritating "Do you want this program to get control of your computer" window that comes up at various stages. Sometimes it didn't appear but you do see a shield dimly flashing in the task bar. Click and say yes.
</p><p><b>NOTE</b>: Make sure you use 32 bit Apache with 32 bit PHP, or 64 bit Apache with 64 bit PHP, if mixed you will get an error when you finish and restart your Apache Server.
</p>
<div id="toc" class="toc"><div id="toctitle"><h2>Contents</h2></div>
<ul>
<li class="toclevel-1 tocsection-1"><a href="#Step_1:_Install_MySQL"><span class="tocnumber">1</span> <span class="toctext">Step 1: Install MySQL</span></a></li>
<li class="toclevel-1 tocsection-2"><a href="#Step_2:_Install_Apache"><span class="tocnumber">2</span> <span class="toctext">Step 2: Install Apache</span></a></li>
<li class="toclevel-1 tocsection-3"><a href="#Step_3:_Install_PHP"><span class="tocnumber">3</span> <span class="toctext">Step 3: Install PHP</span></a></li>
<li class="toclevel-1 tocsection-4"><a href="#Step_4:_Configure_Apache_and_PHP"><span class="tocnumber">4</span> <span class="toctext">Step 4: Configure Apache and PHP</span></a></li>
<li class="toclevel-1 tocsection-5"><a href="#Step_5:_Test_your_install"><span class="tocnumber">5</span> <span class="toctext">Step 5: Test your install</span></a></li>
<li class="toclevel-1 tocsection-6"><a href="#Step_6:_Install_Git"><span class="tocnumber">6</span> <span class="toctext">Step 6: Install Git</span></a></li>
<li class="toclevel-1 tocsection-7"><a href="#Step_7:_Install_Moodle"><span class="tocnumber">7</span> <span class="toctext">Step 7: Install Moodle</span></a></li>
<li class="toclevel-1 tocsection-8"><a href="#Upgrading_Moodle"><span class="tocnumber">8</span> <span class="toctext">Upgrading Moodle</span></a></li>
</ul>
</div>
<h2><span class="mw-headline" id="Step_1:_Install_MySQL">Step 1: Install MySQL</span></h2>
<ul><li>Install the MySQL database server on your PC. We will do this using the 'MSI' one-click installer for Windows. Go to <a rel="nofollow" class="external free" href="http://dev.mysql.com/downloads/">http://dev.mysql.com/downloads/</a> and download the 'MySQL Installer for Windows'. At the time of writing this was from a very obvious graphic at the top of the screen (which I missed the first time).</li>
<li>Run the installation. Click...
<ul><li> Install MySQL products</li>
<li> Accept the license</li>
<li> Allow the version check (optional)</li>
<li> At 'Choose a Setup Type' accept the "Developer Default" and click Next</li>
<li> A number of downloads of required software may be identified. Click Execute and follow onscreen instructions to install them. </li>
<li> At 'Installation progress' screen, hit Execute - the MySQL software will be installed</li>
<li> At 'Configuration overview' hit Next to go to the basic configuration screen.</li>
<li> Accept all the defaults on the 'MySQL Server Configuration' and hit Next. </li>
<li> On the password screen, supply a password for the 'root' (main administrator) user. Make sure it's one you won't forget. You can also create a 'User' account just for Moodle with more restricted access if you like. This would be good practice on a public server but just using the 'root' user will suffice for testing. </li>
<li> On the Service details page, accept the defaults and hit Next and then Next a couple more times for the configuration progress.</li>
<li> Click Finish. Job done. </li></ul></li>
<li> MySQL Workbench will open. Under Server Administration (right hand column, double click 'Local MySQL56' (or whatever you called it). A box should pop up asking for the root password. Enter the password you supplied</li>
<li> The server management screen should appear. You don't have to worry too much about this. It just shows the install is working.</li></ul>
<h2><span class="mw-headline" id="Step_2:_Install_Apache">Step 2: Install Apache</span></h2>
<ul><li> Install the Apache web server on your PC. Go to <a rel="nofollow" class="external free" href="http://www.apachelounge.com/download/">http://www.apachelounge.com/download/</a>. Scroll down the page until you find the download for the 'Apache 2.4 win32 binaries' and download. You need to be careful that the module dll in PHP matches the version of Apache you install. Apache won't load otherwise. </li>
<li> Unzip the file into C:\. You should end up with a directory 'Apache24' (or whatever the latest version is).</li>
<li> Find Start &gt; All programs &gt; Accessories &gt; Command Prompt...... BUT, right click, and select 'Run as administrator'.</li>
<li> Enter the following commands</li></ul>
<pre>   cd \Apache24\bin
   httpd -k install
   httpd -k start
</pre>
<p>...you may well get a warning about the server name. Don't worry about it. Don't close this window, you will need it again in a minute.
</p>
<ul><li> To test it worked type '<a rel="nofollow" class="external free" href="http://localhost'">http://localhost'</a> into your browser. You should get a screen up to the effect that Apache is installed and working.</li></ul>
<h2><span class="mw-headline" id="Step_3:_Install_PHP">Step 3: Install PHP</span></h2>
<ul><li> Now install the PHP scripting language on your PC. Go to <a rel="nofollow" class="external free" href="http://www.php.net/download">http://www.php.net/download</a>. In the current stable release section click on link for Windows 5.x.x binaries and source. Scroll down to the newest 'Zip' for <b>VC11 x86 Thread Safe</b> (non thread safe doesn't have the Apache dll) PHP (again, the newest versions of PHP didn't have this but it shouldn't matter) and download. *Don't* be tempted to use the Microsoft Installer version; it won't work.</li>
<li> Open the zip file and extract to C:\PHP\</li></ul>
<h2><span class="mw-headline" id="Step_4:_Configure_Apache_and_PHP">Step 4: Configure Apache and PHP</span></h2>
<p>You now need to edit Apache's httpd.conf file. In the file explorer navigate to C:\Apache24\conf\httpd.conf. Open it in Notepad . At the end of this file (or wherever you like if you want to be more organised) add the following lines:
</p>
<pre>   LoadModule php5_module "C:/PHP/php5apache2_4.dll"
   AddHandler application/x-httpd-php .php
   PHPIniDir C:/PHP
</pre>
<p>The version of the module file matters (2_4 in this case). It MUST match the Apache version installed.
</p><p>In the same file. Search for the line starting <b>DirectoryIndex</b>. Change it as follows
</p>
<pre>   DirectoryIndex index.php index.html
</pre>
<p>Now, navigate to C:\PHP, and copy php.ini-development to php.ini. Edit this file, find the following lines and modify them as follows (all should exist already):
</p>
<pre>   memory_limit = 256M
   post_max_size = 128M
   upload_max_filesize = 128M
</pre>
<p>You need to specify the extensions required for Moodle. Find the 'Dynamic Extensions' section and change the following lines (uncomment and add the correct path):
</p>
<pre>   extension=c:/php/ext/php_curl.dll
   extension=c:/php/ext/php_gd2.dll
   extension=c:/php/ext/php_intl.dll
   extension=c:/php/ext/php_mbstring.dll
   extension=c:/php/ext/php_mysqli.dll
   extension=c:/php/ext/php_openssl.dll
   extension=c:/php/ext/php_soap.dll
   extension=c:/php/ext/php_xmlrpc.dll
</pre>
<p>(these are a minimum. You may need others - e.g. LDAP - for specific functions)
...and save.
</p><p>Back in the 'cmd' window for Apache, you need to restart it to load your changes...
</p>
<pre>   httpd -k restart
</pre>
<h2><span class="mw-headline" id="Step_5:_Test_your_install">Step 5: Test your install</span></h2>
<p>Navigate to C:\Apache24\htdocs and create a file called 'test.php'. I had to change a file explorer setting to create .php files - Organise &gt; Folder and search options &gt; View and then untick 'Hide extensions for known file types'.
</p><p>In this file enter the single line...
</p>
<pre>   &lt;?php phpinfo();
</pre>
<p>And then, in your browser, navigate to <a rel="nofollow" class="external free" href="http://localhost/test.php">http://localhost/test.php</a>. You should see a screen with masses of information and the PHP logo at the top. Check a few lines down for 'Loaded Configuration File' and make sure it says c:\php\php.ini.
</p><p>That's PHP and Apache all working&#160;:)
</p>
<h2><span class="mw-headline" id="Step_6:_Install_Git">Step 6: Install Git</span></h2>
<p>We will use the Git version control system for loading and updating the Moodle software. If you really don't want to do this you can just download the latest Moodle zip file and unzip it in c:\Apache24\htdocs but Git makes updates MUCH easier. We need to install Git first...
</p>
<ul><li> Go to <a rel="nofollow" class="external free" href="http://msysgit.github.com">http://msysgit.github.com</a>. Navigate to 'Downloads' and download/run the latest installer. </li>
<li> Accept defaults until you get to 'Adjusting your PATH environment'. Select 'Run Git from the Windows Command Prompt' at this point. </li>
<li> Accept remaining defaults and install</li>
<li> If you right click on folders in the file explorer you should now see additional Git commands.</li></ul>
<h2><span class="mw-headline" id="Step_7:_Install_Moodle">Step 7: Install Moodle</span></h2>
<ul><li> In the file explorer navigate to C:\Apache24\htdocs. </li>
<li> Inside the folder, right click and select Git GUI</li>
<li> Select 'Clone existing repository'</li>
<li> Use the following settings for the clone...</li></ul>
<pre>   Source location: <a rel="nofollow" class="external free" href="https://github.com/moodle/moodle.git">https://github.com/moodle/moodle.git</a>
   Target directory: C:/Apache24/htdocs/moodle
</pre>
<p>(You can also try <i><a rel="nofollow" class="external free" href="git://git.moodle.org/moodle.git">git://git.moodle.org/moodle.git</a></i>. Depending on your firewall situation one may work and the other not. The code is the same.)
</p>
<ul><li> Click 'Clone'. Depending on your network speed, this may well take a while as the whole Moodle history is being downloaded.</li>
<li> You should now have a 'moodle' directory inside 'htdocs. Right click and select 'Git GUI' again - a more complex screen should now appear</li>
<li> Click on the 'Branch' command and then 'Checkout...'. </li>
<li> Select the version of Moodle you want from the list, probably origin/MOODLE_24_STABLE. Make sure 'Tracking branch' is selected and click Checkout.</li>
<li> Create a data directory for Moodle. It can be anywhere you like but I used C:\moodledata. Just create an empty folder</li>
<li> Go to <a rel="nofollow" class="external free" href="http://localhost/moodle">http://localhost/moodle</a>. The language select page should come up and you are away. The installation is not covered in detail here but...
<ul><li> Data directory is C:\moodledata (or whatever you created)</li>
<li> Database user is 'root' (unless you created a more restricted user)</li>
<li> Database password is whatever you set installing MySQL</li></ul></li></ul>
<p>That should be it! Time for a cup of tea.
</p>
<h2><span class="mw-headline" id="Upgrading_Moodle">Upgrading Moodle</span></h2>
 
 
 
</div><div class="printfooter">
Retrieved from "<a dir="ltr" href="https://docs.moodle.org/29/en/index.php?title=Manual_install_on_Windows_7_with_Apache_and_MySQL&amp;oldid=120808">https://docs.moodle.org/29/en/index.php?title=Manual_install_on_Windows_7_with_Apache_and_MySQL&amp;oldid=120808</a>"</div>
<div id='catlinks' class='catlinks'><div id="mw-normal-catlinks" class="mw-normal-catlinks"><a href="/29/en/Special:Categories" title="Special:Categories">Category</a>: <ul><li><a href="/29/en/Category:Installation" title="Category:Installation">Installation</a></li></ul></div></div>  
<div class="visualClear"></div>
</div>
</div></div>
<div id="column-one" class="row-fluid">
<div id="p-cactions" class="portlet">
<div class="moodleTagline dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">2.9 docs<b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="https://docs.moodle.org/32/en/Manual_install_on_Windows_7_with_Apache_and_MySQL">3.2 docs</a></li><li><a href="https://docs.moodle.org/31/en/Manual_install_on_Windows_7_with_Apache_and_MySQL">3.1 docs</a></li><li><a href="https://docs.moodle.org/27/en/Manual_install_on_Windows_7_with_Apache_and_MySQL">2.7 docs</a></li> </ul>
</div>
<h5>Views</h5>
<div class="pBody">
<ul><li id="ca-nstab-main" class="selected"><a href="/29/en/Manual_install_on_Windows_7_with_Apache_and_MySQL" title="View the content page [c]" accesskey="c">Article</a></li><li id="ca-talk"><a href="/29/en/Talk:Manual_install_on_Windows_7_with_Apache_and_MySQL" title="Discussion about the content page [t]" accesskey="t">Page Comments</a></li><li id="ca-viewsource"><a href="/29/en/index.php?title=Manual_install_on_Windows_7_with_Apache_and_MySQL&amp;action=edit" title="This page is protected.&#10;You can view its source [e]" accesskey="e">View source</a></li><li id="ca-history"><a href="/29/en/index.php?title=Manual_install_on_Windows_7_with_Apache_and_MySQL&amp;action=history" title="Past revisions of this page [h]" accesskey="h">History</a></li></ul> </div>
</div>
<div class="portlet" id="p-personal">
<h5>Personal tools</h5>
<div class="pBody">
<ul><li><a href="/29/en/index.php?title=Special:UserLogin&amp;returnto=Manual+install+on+Windows+7+with+Apache+and+MySQL">Log in</a></li></ul> </div>
</div>
<div class='portlet bottom-portlet span6' id='p-navigation'>
<h5>Navigation</h5>
<div class='pBody'>
<ul>
<li id="n-mainpage"><a href="/29/en/Main_page" title="Visit the main page [z]" accesskey="z">Main page</a></li>
<li id="n-Table-of-contents"><a href="/29/en/Table_of_Contents">Table of contents</a></li>
<li id="n-recentchanges"><a href="/29/en/Special:RecentChanges" title="A list of recent changes in the wiki [r]" accesskey="r">Recent changes</a></li>
<li id="n-Docs-overview"><a href="https://docs.moodle.org/overview/">Docs overview</a></li>
</ul>
</div>
</div>
<div class='portlet bottom-portlet span6' id='p-tb'>
<h5>Tools</h5>
<div class='pBody'>
<ul>
<li id="t-whatlinkshere"><a href="/29/en/Special:WhatLinksHere/Manual_install_on_Windows_7_with_Apache_and_MySQL" title="A list of all wiki pages that link here [j]" accesskey="j">What links here</a></li>
<li id="t-recentchangeslinked"><a href="/29/en/Special:RecentChangesLinked/Manual_install_on_Windows_7_with_Apache_and_MySQL" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li>
<li id="t-specialpages"><a href="/29/en/Special:SpecialPages" title="A list of all special pages [q]" accesskey="q">Special pages</a></li>
<li id="t-print"><a href="/29/en/index.php?title=Manual_install_on_Windows_7_with_Apache_and_MySQL&amp;printable=yes" rel="alternate" title="Printable version of this page [p]" accesskey="p">Printable version</a></li> <li id="t-permalink"><a href="/29/en/index.php?title=Manual_install_on_Windows_7_with_Apache_and_MySQL&amp;oldid=120808" title="Permanent link to this revision of the page">Permanent link</a></li> </ul>
</div>
</div>
<div id="p-search" role="search">
<h3><label for="searchInput">Search</label></h3>
<form action="/29/en/index.php" id="searchform">
<div id="simpleSearch">
<input name="search" placeholder="Search" title="Search MoodleDocs [f]" accesskey="f" id="searchInput"/> <button type="submit" name="button" title="Search the pages for this text" id="searchButton"><img src="/29/en/skins/moodledocs/images/search-ltr.png?305" alt="Search" width="12" height="13"/></button> <input type='hidden' name="title" value="Special:Search"/>
</div>
</form>
</div>
</div> 
<div class="visualClear"></div>
<div id="footer">
<div id="f-poweredbyico">
<a href="//www.mediawiki.org/"><img src="/29/en/resources/assets/poweredby_mediawiki_88x31.png" alt="Powered by MediaWiki" srcset="/29/en/resources/assets/poweredby_mediawiki_132x47.png 1.5x, /29/en/resources/assets/poweredby_mediawiki_176x62.png 2x" width="88" height="31"/></a>
</div>
<ul id="f-list">
<li id="lastmod"> This page was last modified on 30 September 2016, at 16:42.</li>
<li id="copyright">Content is available under <a class="external" rel="nofollow" href="https://docs.moodle.org/dev/License">GNU General Public License</a> unless otherwise noted.</li>
<li id="privacy"><a href="/29/en/MoodleDocs:Privacy_policy" title="MoodleDocs:Privacy policy">Privacy policy</a></li>
<li id="about"><a href="/29/en/MoodleDocs:About" title="MoodleDocs:About">About Moodle Docs</a></li>
<li id="disclaimer"><a href="/29/en/MoodleDocs:General_disclaimer" title="MoodleDocs:General disclaimer">Disclaimers</a></li>
</ul>
</div>
</div>
<script>window.RLQ = window.RLQ || []; window.RLQ.push( function () {
mw.loader.state({"user":"ready","user.groups":"ready"});mw.loader.load(["mediawiki.toc","mediawiki.action.view.postEdit","site","mediawiki.user","mediawiki.hidpi","mediawiki.page.ready","mediawiki.searchSuggest","skins.moodledocs.bootstrap"]);
} );</script><script>window.RLQ = window.RLQ || []; window.RLQ.push( function () {
mw.config.set({"wgBackendResponseTime":26});
} );</script>
 
<div id="moodlesitelink"></div>
 
</div> 
 
<script type="text/javascript">var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));</script><script type="text/javascript">try {var pageTracker = _gat._getTracker("UA-72764-4");pageTracker._trackPageview();} catch(err) {}</script>
 
</body></html>