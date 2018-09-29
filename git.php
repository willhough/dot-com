<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Will Hough - Seasoned Web Designer, Front End Developer, Photographer &amp; Graphic Designer located in Plymouth, Michigan.">
    <meta name="keywords" content="Web Design, Web Developer, Front End Developer, Designer, Graphic Design, Photographer, Plymouth, Michigan, 48170">
    <meta name="author" content="Will Hough">
    <title>Will Hough - GitHub - Setting Up Your Website &amp; SSH Key</title>
    <meta property="fb:app_id" content="247293252746536">
    <meta property="og:url" content="http://www.willhough.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="GitHub - Setting Up Your Website &amp; Adding Your SSH Key">
    <meta property="og:description" content="I'm going to simply explain how to add an SSH key to your hosting server and add your site files to GitHub.">
    <meta property="og:image" content="http://www.willhough.com/img/will_hough.png">
    <meta name="twitter:card" content="summary">
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/vendor/font-awesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/jquery.fancybox.min.css" type="text/css">
    <link href="css/will.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <meta name="google-site-verification" content="Oq6UsV_pQ5QhoNNhUMvfqyjhCsLPWurNx5pBgRnggCs">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126620329-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-126620329-1');
    </script>
  </head>
  <body id="page-top">
    <?php require_once( 'inc_nav.php' ); ?>
    <header class="masthead article text-center text-white d-flex">
      <div class="container my-md-auto">
        <h1 class="text-uppercase mt-md-5">GitHub - Setting Up Your Website &amp; SSH Key</h1>
      </div>
    </header>
    <section>
      <div class="container">
        <p>If you are anything like me, you probably started using FTP to upload and manage your website changes. The past 5 or so years I've been using <a href="https://www.github.com/">GitHub</a> and <a href="https://en.wikipedia.org/wiki/Secure_Shell">SSH</a> to manage my sites. I'm going to simply explain how to add an SSH key to your hosting server and add your site files to GitHub.</p>
        <p>This article is already assuming you know some basic shell and git commands.</p>
        <p>If you don't already have one, create a backup of you website on your local machine.</p>
        <p>Do you have a GitHub account? If not, go to <a href="https://www.github.com/">GitHub</a> and set up your account, it's free.</p>
        <p>SSH in to your webserver and lets start the process of creating the SSH key for you to use in GitHub.</p>
        <b class="green">INPUT</b>
        <p><code>ssh-keygen -t rsa</code></p>
        <b class="red">OUTPUT</b>
        <pre>Generating public/private rsa key pair.
Enter file in which to save the key (/home/user/.ssh/id_rsa):</pre>
        <p>Unless you know a specific spot you want this saved, the default location will work, just hit enter.</p>
        <b class="red">OUTPUT</b>
        <pre>Created directory '/home/user/.ssh'.
Enter passphrase (empty for no passphrase):</pre>
        <p>Passphrase is optional, hit enter for no passphrase.</p>
        <pre>Enter same passphrase again:</pre>
        <p>Hit enter again for no passphrase.</p>
        <b class="red">OUTPUT</b>
        <pre>Your identification has been saved in /home/user/.ssh/id_rsa.
Your public key has been saved in /home/user/.ssh/id_rsa.pub.
The key fingerprint is:
e1:ff:6a:jd:10:3a:c5:14:2a:9a:7g:d7:c7:20:d9:fe user@server.host.com
The key's randomart image is:
+--[ RSA 2048]----+
|          .      |
|        6 .      |
|       . .       |
|     + + o       |
|    o > S        |
|     . @ = .     |
|      o B.+      |
|       o.+..     |
|       .B.u..    |
+-----------------+</pre>
        <b class="green">INPUT</b>
        <p><code>cat ~/.ssh/id_rsa.pub</code></p>
        <p>The output looks something like this:</p>
        <b class="red">OUTPUT</b>
        <pre>ssh-rsa AAAAB3NzaC1yc2EAAAABIwAAAQEAz3kpIXGjQg+b/61HZLlRRpJY3TPQDG4Jn/k4RHCFUK1OiQPI5l4EGUmniDfLS5OcMK1ZHuA/6GQREaDLz0OqrO6V4o2cV6zZZPCs4/o77+bgM5dQTHedbv3F8ePDkTczFDbchwENgnotMPTKfE7EWciziiN4uX6Xt2j8CtscmFBNBGN/v7KT5FaxQ2hV/II59qjZed5vXRdgvZsg2W6m830/8675309JeNNy/MRBvld9BLaXWtj1ZCTF49sQ/5blsWyIw5CalUYVWSHKmxZoByeFelicia9uN29iZDrmpcZiCS6UjLCu5e6gbiLz7X76PBfbt6u2GNHkA3EIjnWjjw== user@server.host.com</pre>
        <p>Take your value output and create a new GitHub ssh key. Find <b>Settings</b> in the top menu.</p>
        <a data-fancybox="git" data-caption="Take your value output and create a new GitHub ssh key. Find <b>Settings</b> in the top menu." href="/img/git/10.jpg"><img src="/img/git/10.jpg" class="img-thumbnail mb-5"></a>
        <p>Then <b>SSH and GPG keys</b> on the left menu. Then click the green button "New SSH Key" on the top.</p>
        <a data-fancybox="git" data-caption="Then <b>SSH and GPG keys</b> on the left menu. Then click the green button <i>New SSH Key</i> on the top." href="/img/git/11.jpg"><img src="/img/git/11.jpg" class="img-thumbnail mb-5"></a>
        <p>I title mine using the site I'm creating, i.e. example.com in the first input under Title. Then paste in the code you copied starting with <code>ssh-rsa AAGAB</code> then click the "Add SSH key" button</p>
        <a data-fancybox="git" data-caption="I title mine using the site I'm creating, i.e. example.com in the first input under Title. Then paste in the code you copied starting with <code>ssh-rsa AAGAB</code> then click the <i>Add SSH key</i> button" href="/img/git/12.jpg"><img src="/img/git/12.jpg" class="img-thumbnail mb-5"></a>
        <p>You will have to confirm your password at the end.</p>
        <p>cd to your main sites public directory</p>
        <b class="green">INPUT</b>
        <p><code>cd www/www.example.com/html/</code></p>
        <b class="green">INPUT</b>
        <p><code>git clone git@github.com:user/example.com.git .</code></p>
        <p>Using the <b>dot</b> at the end sets the contents of the repo in the current directory. If you didn't have the dot there, the git directory /hough.rocks would be created as well.</p>
        <b class="red">OUTPUT</b>
        <pre>Cloning into '.'...
The authenticity of host 'github.com (190.69.123.101)' can't be established.
RSA key fingerprint is 16:27:ac:a5:76:28:2d:36:63:1b:56:4d:eb:df:a6:48.
Are you sure you want to continue connecting (yes/no)? yes</pre>
        <p>It will ask if you "want to continue connecting" type "yes" and hit enter.</p>
        <b class="red">OUTPUT</b>
        <pre>Warning: Permanently added 'github.com,190.69.123.101' (RSA) to the list of known hosts.
remote: Counting objects: 6, done.
remote: Compressing objects: 100% (4/4), done.
remote: Total 6 (delta 0), reused 0 (delta 0), pack-reused 0
Receiving objects: 100% (6/6), done.</pre>
        <p>Lets have a look at those files on your webserver, list all files, even hidden ones so we can see that .htaccess file.</p>
        <b class="green">INPUT</b>
        <p><code>ls -a</code></p>
        <b class="red">OUTPUT</b>
        <pre>.  ..  .git  .htaccess  README.md</pre>
        <p>The .git directory is part of GitHub and is necessary for it to work, so don't remove it.</p>
        <b class="green">INPUT</b>
        <p><code>git status</code></p>
        <b class="red">OUTPUT</b>
        <pre>On branch master
Your branch is up to date with 'origin/master'.

nothing to commit, working tree clean</pre>
      </div>
    </section>
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
            <p>Ready to start your next project?</p>
            <p class="mb-5">Give me a call or send an email and I'll get back to you right away.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>1(269)760-1865</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope fa-3x mb-3 sr-contact"></i>
            <p><a href="mailto:your-email@your-domain.com">will@willhough.com</a></p>
          </div>
        </div>
      </div>
    </section>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="/js/jquery.fancybox.min.js"></script>
    <script src="js/creative.min.js"></script>
  </body>
</html>