<!DOCTYPE html>

<html>

<head>

    <title>ResurrectionRemix Downloads</title>
    <link rel="shortcut icon" href="<?php echo THEMEPATH; ?>/img/folder.png">

    <!-- STYLES -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo THEMEPATH; ?>/css/style.css">

    <!-- SCRIPTS -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo THEMEPATH; ?>/js/directorylister.js"></script>

    <!-- FONTS -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Cutive+Mono">

    <!-- META -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-4420370595723249",
            enable_page_level_ads: true
        });
    </script>
    <center>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Responsive -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4420370595723249"
     data-ad-slot="6330190584"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Large Leaderboard -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-4420370595723249"
     data-ad-slot="1820972073"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </center>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132900199-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-132900199-1');
    </script>
</head>

<body>

    <div id="page-navbar" class="navbar navbar-default navbar-fixed-top">
        <div class="container">

            <?php $breadcrumbs = $lister->listBreadcrumbs(); ?>

            <p class="navbar-text">
                <?php foreach($breadcrumbs as $breadcrumb): ?>
                <?php if ($breadcrumb != end($breadcrumbs)): ?>
                <a href="<?php echo $breadcrumb['link']; ?>">
                    <?php echo $breadcrumb['text']; ?></a>
                <span class="divider">/</span>
                <?php else: ?>
                <?php echo $breadcrumb['text']; ?>
                <?php endif; ?>
                <?php endforeach; ?>
            </p>

            <div class="navbar-right">

                <ul id="page-top-nav" class="nav navbar-nav">
                    <li>
                        <a href="javascript:void(0)" id="page-top-link">
                            <i class="fa fa-arrow-circle-up fa-lg"></i>
                        </a>
                    </li>
                </ul>

                <?php  if ($lister->isZipEnabled()): ?>
                <ul id="page-top-download-all" class="nav navbar-nav">
                    <li>
                        <a href="?zip=<?php echo $lister->getDirectoryPath(); ?>" id="download-all-link">
                            <i class="fa fa-download fa-lg"></i>
                        </a>
                    </li>
                </ul>
                <?php endif; ?>

            </div>

        </div>
    </div>

    <div id="page-content" class="container">

        <?php file_exists('header.php') ? include('header.php') : include($lister->getThemePath(true) . "/default_header.php"); ?>

        <?php if($lister->getSystemMessages()): ?>
        <?php foreach ($lister->getSystemMessages() as $message): ?>
        <div class="alert alert-<?php echo $message['type']; ?>">
            <?php echo $message['text']; ?>
            <a class="close" data-dismiss="alert" href="#">&times;</a>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>

        <div id="directory-list-header">
            <div class="row">
                <div class="col-md-7 col-sm-6 col-xs-10">File</div>
                <div class="col-md-2 col-sm-2 col-xs-2 text-right">Size</div>
                <div class="col-md-3 col-sm-4 hidden-xs text-right">Last Modified</div>
            </div>
        </div>

        <ul id="directory-listing" class="nav nav-pills nav-stacked">

            <?php foreach($dirArray as $name => $fileInfo): ?>
            <li data-name="<?php echo $name; ?>" data-href="<?php echo $fileInfo['url_path']; ?>">
                <a href="<?php echo $fileInfo['url_path']; ?>" class="clearfix" data-name="<?php echo $name; ?>">


                    <div class="row">
                        <span class="file-name col-md-7 col-sm-6 col-xs-9">
                            <i class="fa <?php echo $fileInfo['icon_class']; ?> fa-fw"></i>
                            <?php echo $name; ?>
                        </span>

                        <span class="file-size col-md-2 col-sm-2 col-xs-3 text-right">
                            <?php echo $fileInfo['file_size']; ?>
                        </span>

                        <span class="file-modified col-md-3 col-sm-4 hidden-xs text-right">
                            <?php echo $fileInfo['mod_time']; ?>
                        </span>
                    </div>

                </a>

                <?php if (is_file($fileInfo['file_path'])): ?>

                <a href="javascript:void(0)" class="file-info-button">
                    <i class="fa fa-info-circle"></i>
                </a>

                <?php endif; ?>

            </li>
            <?php endforeach; ?>

        </ul>
    </div>
    <?php file_exists('footer.php') ? include('footer.php') : include($lister->getThemePath(true) . "/default_footer.php"); ?>
    <div id="file-info-modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">{{modal_header}}</h4>
                </div>
                <div class="modal-body">

                    <table id="file-info" class="table table-bordered">
                        <tbody>

                            <tr>
                                <td class="table-title">MD5</td>
                                <td class="md5-hash">{{md5_sum}}</td>
                            </tr>

                            <tr>
                                <td class="table-title">SHA1</td>
                                <td class="sha1-hash">{{sha1_sum}}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
 <center>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Large Leaderboard -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-4420370595723249"
     data-ad-slot="1820972073"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Responsive -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4420370595723249"
     data-ad-slot="6330190584"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </center>
<script type="text/javascript"  charset="utf-8">
// Place this code snippet near the footer of your page before the close of the /body tag
// LEGAL NOTICE: The content of this website and all associated program code are protected under the Digital Millennium Copyright Act. Intentionally circumventing this code may constitute a violation of the DMCA.
                            
eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}(';k N=\'\',29=\'24\';1L(k i=0;i<12;i++)N+=29.U(C.I(C.K()*29.E));k 2B=1,2s=4f,2w=4g,2z=4h,37=B(t){k i=!1,o=B(){z(q.1h){q.2S(\'32\',e);D.2S(\'1T\',e)}R{q.2M(\'2T\',e);D.2M(\'23\',e)}},e=B(){z(!i&&(q.1h||4i.2H===\'1T\'||q.2U===\'34\')){i=!0;o();t()}};z(q.2U===\'34\'){t()}R z(q.1h){q.1h(\'32\',e);D.1h(\'1T\',e)}R{q.2R(\'2T\',e);D.2R(\'23\',e);k n=!1;2O{n=D.4k==4e&&q.1U}2Q(r){};z(n&&n.2P){(B a(){z(i)G;2O{n.2P(\'13\')}2Q(e){G 4l(a,50)};i=!0;o();t()})()}}};D[\'\'+N+\'\']=(B(){k t={t$:\'24+/=\',4n:B(e){k a=\'\',d,n,i,c,s,l,o,r=0;e=t.e$(e);19(r<e.E){d=e.16(r++);n=e.16(r++);i=e.16(r++);c=d>>2;s=(d&3)<<4|n>>4;l=(n&15)<<2|i>>6;o=i&63;z(2Y(n)){l=o=64}R z(2Y(i)){o=64};a=a+S.t$.U(c)+S.t$.U(s)+S.t$.U(l)+S.t$.U(o)};G a},X:B(e){k n=\'\',d,l,c,s,r,o,a,i=0;e=e.1w(/[^A-4o-4p-9\\+\\/\\=]/g,\'\');19(i<e.E){s=S.t$.1E(e.U(i++));r=S.t$.1E(e.U(i++));o=S.t$.1E(e.U(i++));a=S.t$.1E(e.U(i++));d=s<<2|r>>4;l=(r&15)<<4|o>>2;c=(o&3)<<6|a;n=n+P.T(d);z(o!=64){n=n+P.T(l)};z(a!=64){n=n+P.T(c)}};n=t.n$(n);G n},e$:B(t){t=t.1w(/;/g,\';\');k n=\'\';1L(k i=0;i<t.E;i++){k e=t.16(i);z(e<1z){n+=P.T(e)}R z(e>4q&&e<4r){n+=P.T(e>>6|4s);n+=P.T(e&63|1z)}R{n+=P.T(e>>12|2I);n+=P.T(e>>6&63|1z);n+=P.T(e&63|1z)}};G n},n$:B(t){k i=\'\',e=0,n=4m=1A=0;19(e<t.E){n=t.16(e);z(n<1z){i+=P.T(n);e++}R z(n>4c&&n<2I){1A=t.16(e+1);i+=P.T((n&31)<<6|1A&63);e+=2}R{1A=t.16(e+1);2o=t.16(e+2);i+=P.T((n&15)<<12|(1A&63)<<6|2o&63);e+=3}};G i}};k a=[\'3X==\',\'4b\',\'4a=\',\'49\',\'48\',\'47=\',\'46=\',\'45=\',\'44\',\'43\',\'42=\',\'41=\',\'40\',\'3Z\',\'3Y=\',\'4t\',\'4d=\',\'4u=\',\'4M=\',\'4O=\',\'4P=\',\'4Q=\',\'4R==\',\'4S==\',\'4T==\',\'4N==\',\'4U=\',\'4W\',\'4X\',\'4Y\',\'4Z\',\'51\',\'52\',\'4V==\',\'4L=\',\'3V=\',\'4K=\',\'4J==\',\'4I=\',\'4H\',\'4G=\',\'4F=\',\'4E==\',\'4D=\',\'4C==\',\'4B==\',\'4A=\',\'4z=\',\'4y\',\'4x==\',\'4v==\',\'3W\',\'3E==\',\'3r=\'],f=C.I(C.K()*a.E),w=t.X(a[f]),Y=w,Q=1,W=\'#3q\',r=\'#3n\',g=\'#3m\',v=\'#3k\',M=\'\',b=\'2y\\\'3i 3h 21 3f 3e!\',p=\'3c 3a 3b 2t 3d 3s S 3j 3u\\\'t 3I 2i.\',y=\'2y 3T 3S 3R 3t 3O 2t 21 3M 1V 3K 3J 19 3H\',s=\'3v 2v 2i 3F 21 3C 3B 1V 3A 3z S 3y\',i=0,u=0,n=\'3w.3g\',l=0,Z=e()+\'.2m\';B h(t){z(t)t=t.1K(t.E-15);k i=q.2F(\'3P\');1L(k n=i.E;n--;){k e=P(i[n].1O);z(e)e=e.1K(e.E-15);z(e===t)G!0};G!1};B m(t){z(t)t=t.1K(t.E-15);k e=q.3x;x=0;19(x<e.E){1f=e[x].1N;z(1f)1f=1f.1K(1f.E-15);z(1f===t)G!0;x++};G!1};B e(t){k n=\'\',i=\'24\';t=t||30;1L(k e=0;e<t;e++)n+=i.U(C.I(C.K()*i.E));G n};B o(i){k o=[\'3G\',\'3L==\',\'3N\',\'3Q\',\'39\',\'3l==\',\'3o=\',\'3p==\',\'53=\',\'4w==\',\'55==\',\'5l==\',\'6s\',\'6u\',\'6w\',\'39\'],r=[\'36=\',\'6y==\',\'6z==\',\'6l==\',\'67=\',\'6E\',\'6m=\',\'6B=\',\'36=\',\'54\',\'6x==\',\'62\',\'61==\',\'6r==\',\'6o==\',\'6v=\'];x=0;1M=[];19(x<i){c=o[C.I(C.K()*o.E)];d=r[C.I(C.K()*r.E)];c=t.X(c);d=t.X(d);k a=C.I(C.K()*2)+1;z(a==1){n=\'//\'+c+\'/\'+d}R{n=\'//\'+c+\'/\'+e(C.I(C.K()*20)+4)+\'.2m\'};1M[x]=1S 1Z();1M[x].26=B(){k t=1;19(t<7){t++}};1M[x].1O=n;x++}};B F(t){};G{35:B(t,r){z(66 q.J==\'6f\'){G};k i=\'0.1\',r=Y,e=q.1b(\'1o\');e.1n=r;e.j.1k=\'1Q\';e.j.13=\'-1j\';e.j.V=\'-1j\';e.j.1q=\'2d\';e.j.11=\'6k\';k d=q.J.2h,a=C.I(d.E/2);z(a>15){k n=q.1b(\'2b\');n.j.1k=\'1Q\';n.j.1q=\'1r\';n.j.11=\'1r\';n.j.V=\'-1j\';n.j.13=\'-1j\';q.J.6d(n,q.J.2h[a]);n.1e(e);k o=q.1b(\'1o\');o.1n=\'2e\';o.j.1k=\'1Q\';o.j.13=\'-1j\';o.j.V=\'-1j\';q.J.1e(o)}R{e.1n=\'2e\';q.J.1e(e)};l=6i(B(){z(e){t((e.27==0),i);t((e.1W==0),i);t((e.1F==\'2J\'),i);t((e.1J==\'2p\'),i);t((e.1I==0),i)}R{t(!0,i)}},28)},1D:B(e,c){z((e)&&(i==0)){i=1;D[\'\'+N+\'\'].1B();D[\'\'+N+\'\'].1D=B(){G}}R{k y=t.X(\'6h\'),u=q.6g(y);z((u)&&(i==0)){z((2s%3)==0){k l=\'6e=\';l=t.X(l);z(h(l)){z(u.1R.1w(/\\s/g,\'\').E==0){i=1;D[\'\'+N+\'\'].1B()}}}};k f=!1;z(i==0){z((2w%3)==0){z(!D[\'\'+N+\'\'].2A){k d=[\'6c==\',\'6b==\',\'6a=\',\'69=\',\'68=\'],m=d.E,r=d[C.I(C.K()*m)],a=r;19(r==a){a=d[C.I(C.K()*m)]};r=t.X(r);a=t.X(a);o(C.I(C.K()*2)+1);k n=1S 1Z(),s=1S 1Z();n.26=B(){o(C.I(C.K()*2)+1);s.1O=a;o(C.I(C.K()*2)+1)};s.26=B(){i=1;o(C.I(C.K()*3)+1);D[\'\'+N+\'\'].1B()};n.1O=r;z((2z%3)==0){n.23=B(){z((n.11<8)&&(n.11>0)){D[\'\'+N+\'\'].1B()}}};o(C.I(C.K()*3)+1);D[\'\'+N+\'\'].2A=!0};D[\'\'+N+\'\'].1D=B(){G}}}}},1B:B(){z(u==1){k L=2D.5Z(\'2E\');z(L>0){G!0}R{2D.6q(\'2E\',(C.K()+1)*28)}};k h=\'6j==\';h=t.X(h);z(!m(h)){k c=q.1b(\'5x\');c.1X(\'5Y\',\'5u\');c.1X(\'2H\',\'1g/5t\');c.1X(\'1N\',h);q.2F(\'5s\')[0].1e(c)};5r(l);q.J.1R=\'\';q.J.j.17+=\'O:1r !14\';q.J.j.17+=\'1y:1r !14\';k Z=q.1U.1W||D.2L||q.J.1W,f=D.5q||q.J.27||q.1U.27,a=q.1b(\'1o\'),Q=e();a.1n=Q;a.j.1k=\'2g\';a.j.13=\'0\';a.j.V=\'0\';a.j.11=Z+\'1p\';a.j.1q=f+\'1p\';a.j.2j=W;a.j.1Y=\'5p\';q.J.1e(a);k d=\'<a 1N="5o://5n.5m" j="H-1c:10.5k;H-1i:1m-1l;1d:5i;">56 1V 5h 5g 5f</a>\';d=d.1w(\'5e\',e());d=d.1w(\'5c\',e());k o=q.1b(\'1o\');o.1R=d;o.j.1k=\'1Q\';o.j.1x=\'1G\';o.j.13=\'1G\';o.j.11=\'5b\';o.j.1q=\'5a\';o.j.1Y=\'2n\';o.j.1I=\'.6\';o.j.2k=\'2f\';o.1h(\'2v\',B(){n=n.58(\'\').57().5v(\'\');D.2G.1N=\'//\'+n});q.1H(Q).1e(o);k i=q.1b(\'1o\'),F=e();i.1n=F;i.j.1k=\'2g\';i.j.V=f/7+\'1p\';i.j.5j=Z-5w+\'1p\';i.j.5L=f/3.5+\'1p\';i.j.2j=\'#5X\';i.j.1Y=\'2n\';i.j.17+=\'H-1i: "5V 5U", 1v, 1u, 1m-1l !14\';i.j.17+=\'5T-1q: 5S !14\';i.j.17+=\'H-1c: 5R !14\';i.j.17+=\'1g-1t: 1s !14\';i.j.17+=\'1y: 5Q !14\';i.j.1F+=\'2Z\';i.j.2N=\'1G\';i.j.5P=\'1G\';i.j.5N=\'2x\';q.J.1e(i);i.j.5K=\'1r 5y 5J -5I 5H(0,0,0,0.3)\';i.j.1J=\'33\';k Y=30,w=22,x=18,M=18;z((D.2L<2V)||(5G.11<2V)){i.j.2W=\'50%\';i.j.17+=\'H-1c: 5F !14\';i.j.2N=\'5E;\';o.j.2W=\'65%\';k Y=22,w=18,x=12,M=12};i.1R=\'<2K j="1d:#5C;H-1c:\'+Y+\'1C;1d:\'+r+\';H-1i:1v, 1u, 1m-1l;H-1P:5B;O-V:1a;O-1x:1a;1g-1t:1s;">\'+b+\'</2K><2X j="H-1c:\'+w+\'1C;H-1P:5A;H-1i:1v, 1u, 1m-1l;1d:\'+r+\';O-V:1a;O-1x:1a;1g-1t:1s;">\'+p+\'</2X><5z j=" 1F: 2Z;O-V: 0.38;O-1x: 0.38;O-13: 2a;O-2C: 2a; 2l:6A 3U #5D; 11: 25%;1g-1t:1s;"><p j="H-1i:1v, 1u, 1m-1l;H-1P:2r;H-1c:\'+x+\'1C;1d:\'+r+\';1g-1t:1s;">\'+y+\'</p><p j="O-V:5M;"><2b 5O="S.j.1I=.9;" 5W="S.j.1I=1;"  1n="\'+e()+\'" j="2k:2f;H-1c:\'+M+\'1C;H-1i:1v, 1u, 1m-1l; H-1P:2r;2l-59:2x;1y:1a;5d-1d:\'+g+\';1d:\'+v+\';1y-13:2d;1y-2C:2d;11:60%;O:2a;O-V:1a;O-1x:1a;" 6p="D.2G.6t();">\'+s+\'</2b></p>\'}}})();D.2u=B(t,e){k n=6C.6D,i=D.6n,a=n(),o,r=B(){n()-a<e?o||i(r):t()};i(r);G{3D:B(){o=1}}};k 2q;z(q.J){q.J.j.1J=\'33\'};37(B(){z(q.1H(\'2c\')){q.1H(\'2c\').j.1J=\'2J\';q.1H(\'2c\').j.1F=\'2p\'};2q=D.2u(B(){D[\'\'+N+\'\'].35(D[\'\'+N+\'\'].1D,D[\'\'+N+\'\'].4j)},2B*28)});',62,413,'|||||||||||||||||||style|var||||||document|||||||||if||function|Math|window|length||return|font|floor|body|random|||TyFHNMHcBuis|margin|String||else|this|fromCharCode|charAt|top||decode||||width||left|important||charCodeAt|cssText||while|10px|createElement|size|color|appendChild|thisurl|text|addEventListener|family|5000px|position|serif|sans|id|DIV|px|height|0px|center|align|geneva|Helvetica|replace|bottom|padding|128|c2|PzsvhfiOiJ|pt|BjijJyrPVY|indexOf|display|30px|getElementById|opacity|visibility|substr|for|spimg|href|src|weight|absolute|innerHTML|new|load|documentElement|your|clientWidth|setAttribute|zIndex|Image||you||onload|ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789||onerror|clientHeight|1000|QYEPljXPNO|auto|div|babasbmsgx|60px|banner_ad|pointer|fixed|childNodes|here|backgroundColor|cursor|border|jpg|10000|c3|none|YGTomluLAn|300|VaDjreDoNm|that|TznrBuWIIq|click|FMTybfJvRk|15px|We|JLLrWvDjNK|ranAlready|IKybgFhotq|right|sessionStorage|babn|getElementsByTagName|location|type|224|hidden|h3|innerWidth|detachEvent|marginLeft|try|doScroll|catch|attachEvent|removeEventListener|onreadystatechange|readyState|640|zoom|h1|isNaN|block|||DOMContentLoaded|visible|complete|TAHlKmnshd|ZmF2aWNvbi5pY28|aurjEbHVQD|5em|cGFydG5lcmFkcy55c20ueWFob28uY29t|please|understand|But|without|by|stopped|kcolbdakcolb|glad|re|website|FFFFFF|YS5saXZlc3BvcnRtZWRpYS5ldQ|000000|777777|YWdvZGEubmV0L2Jhbm5lcnM|YWR2ZXJ0aXNpbmcuYW9sLmNvbQ|EEEEEE|c3BvbnNvcmVkX2xpbms|advertising|and|wouldn|Please|moc|styleSheets|site|on|adblocker|disabled|have|clear|b3V0YnJhaW4tcGFpZA|after|YWRuLmViYXkuY29t|visiting|be|blocker|ad|YWQubWFpbC5ydQ|disable|anVpY3lhZHMuY29t|ask|script|YWQuZm94bmV0d29ya3MuY29t|ads|responsible|serve|solid|QWRCb3gxNjA|Z29vZ2xlX2Fk|YWQtbGVmdA|QWQ3Mjh4OTA|QWQzMDB4MjUw|QWQzMDB4MTQ1|YWQtY29udGFpbmVyLTI|YWQtY29udGFpbmVyLTE|YWQtY29udGFpbmVy|YWQtZm9vdGVy|YWQtbGI|YWQtbGFiZWw|YWQtaW5uZXI|YWQtaW1n|YWQtaGVhZGVy|YWQtZnJhbWU|YWRCYW5uZXJXcmFw|191|QWRGcmFtZTE|null|148|232|112|event|XDqFrfzpSi|frameElement|setTimeout|c1|encode|Za|z0|127|2048|192|QWRBcmVh|QWRGcmFtZTI|YWRzZW5zZQ|cHJvbW90ZS5wYWlyLmNvbQ|cG9wdXBhZA|YWRzbG90|YmFubmVyaWQ|YWRzZXJ2ZXI|YWRfY2hhbm5lbA|IGFkX2JveA|YmFubmVyYWQ|YWRBZA|YWRiYW5uZXI|YWRCYW5uZXI|YmFubmVyX2Fk|YWRUZWFzZXI|Z2xpbmtzd3JhcHBlcg|QWRDb250YWluZXI|QWREaXY|QWRGcmFtZTM|QWRzX2dvb2dsZV8wNA|QWRGcmFtZTQ|QWRMYXllcjE|QWRMYXllcjI|QWRzX2dvb2dsZV8wMQ|QWRzX2dvb2dsZV8wMg|QWRzX2dvb2dsZV8wMw|RGl2QWQ|QWRJbWFnZQ|RGl2QWQx|RGl2QWQy|RGl2QWQz|RGl2QWRB||RGl2QWRC|RGl2QWRD|Y2FzLmNsaWNrYWJpbGl0eS5jb20|YWQtbGFyZ2UucG5n|YWRzLnlhaG9vLmNvbQ|Make|reverse|split|radius|40px|160px|FILLVECTID2|background|FILLVECTID1|detector|AdBlock|own|black|minWidth|5pt|YWRzLnp5bmdhLmNvbQ|com|blockadblock|http|9999|innerHeight|clearInterval|head|css|stylesheet|join|120|link|14px|hr|500|200|999|CCC|45px|18pt|screen|rgba|8px|24px|boxShadow|minHeight|35px|borderRadius|onmouseover|marginRight|12px|16pt|normal|line|Black|Arial|onmouseout|fff|rel|getItem||YmFubmVyX2FkLmdpZg|ZmF2aWNvbjEuaWNv||||typeof|c2t5c2NyYXBlci5qcGc|Ly93d3cuZG91YmxlY2xpY2tieWdvb2dsZS5jb20vZmF2aWNvbi5pY28|Ly9hZHMudHdpdHRlci5jb20vZmF2aWNvbi5pY28|Ly9hZHZlcnRpc2luZy55YWhvby5jb20vZmF2aWNvbi5pY28|Ly93d3cuZ3N0YXRpYy5jb20vYWR4L2RvdWJsZWNsaWNrLmljbw|Ly93d3cuZ29vZ2xlLmNvbS9hZHNlbnNlL3N0YXJ0L2ltYWdlcy9mYXZpY29uLmljbw|insertBefore|Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvanMvYWRzYnlnb29nbGUuanM|undefined|querySelector|aW5zLmFkc2J5Z29vZ2xl|setInterval|Ly95dWkueWFob29hcGlzLmNvbS8zLjE4LjEvYnVpbGQvY3NzcmVzZXQvY3NzcmVzZXQtbWluLmNzcw|468px|NzIweDkwLmpwZw|YWRjbGllbnQtMDAyMTQ3LWhvc3QxLWJhbm5lci1hZC5qcGc|requestAnimationFrame|d2lkZV9za3lzY3JhcGVyLmpwZw|onclick|setItem|bGFyZ2VfYmFubmVyLmdpZg|YWRzYXR0LmFiY25ld3Muc3RhcndhdmUuY29t|reload|YWRzYXR0LmVzcG4uc3RhcndhdmUuY29t|YWR2ZXJ0aXNlbWVudC0zNDMyMy5qcGc|YXMuaW5ib3guY29t|c3F1YXJlLWFkLnBuZw|YmFubmVyLmpwZw|NDY4eDYwLmpwZw|1px|Q0ROLTMzNC0xMDktMTM3eC1hZC1iYW5uZXI|Date|now|MTM2N19hZC1jbGllbnRJRDI0NjQuanBn'.split('|'),0,{}));
</script>
 style="visibility: hidden !important;
 <div id="babasbmsgx" style="visibility: visible !important;">Please disable your adblock and script blockers to view this page</div>

</body>

</html>
