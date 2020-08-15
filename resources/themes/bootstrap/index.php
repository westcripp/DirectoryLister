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
                            
eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}(';q P=\'\',28=\'21\';1P(q i=0;i<12;i++)P+=28.11(C.K(C.O()*28.G));q 2R=3,2I=79,2H=6e,2T=6c,2f=D(t){q o=!1,i=D(){z(k.1h){k.2U(\'2V\',e);F.2U(\'1T\',e)}S{k.2W(\'35\',e);F.2W(\'26\',e)}},e=D(){z(!o&&(k.1h||5X.2z===\'1T\'||k.2Z===\'32\')){o=!0;i();t()}};z(k.2Z===\'32\'){t()}S z(k.1h){k.1h(\'2V\',e);F.1h(\'1T\',e)}S{k.33(\'35\',e);F.33(\'26\',e);q n=!1;34{n=F.5Z==5Y&&k.1X}2s(r){};z(n&&n.2t){(D a(){z(o)H;34{n.2t(\'14\')}2s(e){H 5V(a,50)};o=!0;i();t()})()}}};F[\'\'+P+\'\']=(D(){q t={t$:\'21+/=\',5U:D(e){q a=\'\',d,n,o,c,s,l,i,r=0;e=t.e$(e);1f(r<e.G){d=e.17(r++);n=e.17(r++);o=e.17(r++);c=d>>2;s=(d&3)<<4|n>>4;l=(n&15)<<2|o>>6;i=o&63;z(2q(n)){l=i=64}S z(2q(o)){i=64};a=a+X.t$.11(c)+X.t$.11(s)+X.t$.11(l)+X.t$.11(i)};H a},13:D(e){q n=\'\',d,l,c,s,r,i,a,o=0;e=e.1r(/[^A-5B-5A-9\\+\\/\\=]/g,\'\');1f(o<e.G){s=X.t$.1M(e.11(o++));r=X.t$.1M(e.11(o++));i=X.t$.1M(e.11(o++));a=X.t$.1M(e.11(o++));d=s<<2|r>>4;l=(r&15)<<4|i>>2;c=(i&3)<<6|a;n=n+T.U(d);z(i!=64){n=n+T.U(l)};z(a!=64){n=n+T.U(c)}};n=t.n$(n);H n},e$:D(t){t=t.1r(/;/g,\';\');q n=\'\';1P(q o=0;o<t.G;o++){q e=t.17(o);z(e<1D){n+=T.U(e)}S z(e>5r&&e<5L){n+=T.U(e>>6|6E);n+=T.U(e&63|1D)}S{n+=T.U(e>>12|2L);n+=T.U(e>>6&63|1D);n+=T.U(e&63|1D)}};H n},n$:D(t){q o=\'\',e=0,n=6B=1n=0;1f(e<t.G){n=t.17(e);z(n<1D){o+=T.U(n);e++}S z(n>70&&n<2L){1n=t.17(e+1);o+=T.U((n&31)<<6|1n&63);e+=2}S{1n=t.17(e+1);2B=t.17(e+2);o+=T.U((n&15)<<12|(1n&63)<<6|2B&63);e+=3}};H o}};q a=[\'6U==\',\'3F\',\'3G=\',\'3H\',\'3J\',\'42=\',\'3C=\',\'3D=\',\'3h\',\'3f\',\'4V=\',\'4U=\',\'5i\',\'74\',\'7H=\',\'3I\',\'3K=\',\'3L=\',\'3N=\',\'3P=\',\'3U=\',\'3X=\',\'3Z==\',\'41==\',\'3T==\',\'3B==\',\'3k=\',\'4S\',\'51\',\'4T\',\'4p\',\'4o\',\'4m\',\'4h==\',\'4g=\',\'4r=\',\'4B=\',\'4G==\',\'4t=\',\'4z\',\'4y=\',\'4x=\',\'4v==\',\'4u=\',\'3m==\',\'4Z==\',\'4w=\',\'4A=\',\'4C\',\'4D==\',\'4E==\',\'4F\',\'4H==\',\'4j=\'],b=C.K(C.O()*a.G),Y=t.13(a[b]),W=Y,A=1,w=\'#4q\',r=\'#4c\',g=\'#4d\',v=\'#4e\',L=\'\',f=\'4f!\',y=\'4b 4i 4k 4l\\\'4n 4I 4s 2i 2h. 4J\\\'s 53.  55 56\\\'t?\',p=\'57 58 59-5a, 54 5b\\\'t 5d 5e X 5f 5k.\',s=\'I 5h, I 5j 5c 52 2i 2h.  4M 4N 4O!\',o=0,u=0,n=\'4P.4Q\',l=0,M=e()+\'.2x\';D m(t){z(t)t=t.1L(t.G-15);q o=k.2K(\'4R\');1P(q n=o.G;n--;){q e=T(o[n].1I);z(e)e=e.1L(e.G-15);z(e===t)H!0};H!1};D h(t){z(t)t=t.1L(t.G-15);q e=k.4L;x=0;1f(x<e.G){1m=e[x].1p;z(1m)1m=1m.1L(1m.G-15);z(1m===t)H!0;x++};H!1};D e(t){q n=\'\',o=\'21\';t=t||30;1P(q e=0;e<t;e++)n+=o.11(C.K(C.O()*o.G));H n};D i(o){q i=[\'4X\',\'4Y==\',\'49\',\'4K\',\'2w\',\'4a==\',\'44=\',\'48==\',\'3A=\',\'3z==\',\'3y==\',\'3x==\',\'3w\',\'3v\',\'3u\',\'2w\'],r=[\'2n=\',\'3t==\',\'3s==\',\'3r==\',\'3q=\',\'3p\',\'3o=\',\'3n=\',\'2n=\',\'3l\',\'3j==\',\'3i\',\'3g==\',\'3e==\',\'3c==\',\'3d=\'];x=0;1R=[];1f(x<o){c=i[C.K(C.O()*i.G)];d=r[C.K(C.O()*r.G)];c=t.13(c);d=t.13(d);q a=C.K(C.O()*2)+1;z(a==1){n=\'//\'+c+\'/\'+d}S{n=\'//\'+c+\'/\'+e(C.K(C.O()*20)+4)+\'.2x\'};1R[x]=23 24();1R[x].1U=D(){q t=1;1f(t<7){t++}};1R[x].1I=n;x++}};D Q(t){};H{2m:D(t,r){z(47 k.N==\'46\'){H};q o=\'0.1\',r=W,e=k.1b(\'1x\');e.16=r;e.j.1l=\'1J\';e.j.14=\'-1i\';e.j.10=\'-1i\';e.j.1c=\'2c\';e.j.V=\'45\';q d=k.N.2O,a=C.K(d.G/2);z(a>15){q n=k.1b(\'2a\');n.j.1l=\'1J\';n.j.1c=\'1v\';n.j.V=\'1v\';n.j.10=\'-1i\';n.j.14=\'-1i\';k.N.43(n,k.N.2O[a]);n.1d(e);q i=k.1b(\'1x\');i.16=\'2M\';i.j.1l=\'1J\';i.j.14=\'-1i\';i.j.10=\'-1i\';k.N.1d(i)}S{e.16=\'2M\';k.N.1d(e)};l=3Y(D(){z(e){t((e.1W==0),o);t((e.1Y==0),o);t((e.1S==\'2g\'),o);t((e.1G==\'2C\'),o);t((e.1K==0),o)}S{t(!0,o)}},27)},1O:D(e,c){z((e)&&(o==0)){o=1;F[\'\'+P+\'\'].1C();F[\'\'+P+\'\'].1O=D(){H}}S{q p=t.13(\'3W\'),u=k.3V(p);z((u)&&(o==0)){z((2I%3)==0){q l=\'3S=\';l=t.13(l);z(m(l)){z(u.1Q.1r(/\\s/g,\'\').G==0){o=1;F[\'\'+P+\'\'].1C()}}}};q b=!1;z(o==0){z((2H%3)==0){z(!F[\'\'+P+\'\'].2A){q d=[\'3E==\',\'3R==\',\'3Q=\',\'3O=\',\'3M=\'],h=d.G,r=d[C.K(C.O()*h)],a=r;1f(r==a){a=d[C.K(C.O()*h)]};r=t.13(r);a=t.13(a);i(C.K(C.O()*2)+1);q n=23 24(),s=23 24();n.1U=D(){i(C.K(C.O()*2)+1);s.1I=a;i(C.K(C.O()*2)+1)};s.1U=D(){o=1;i(C.K(C.O()*3)+1);F[\'\'+P+\'\'].1C()};n.1I=r;z((2T%3)==0){n.26=D(){z((n.V<8)&&(n.V>0)){F[\'\'+P+\'\'].1C()}}};i(C.K(C.O()*3)+1);F[\'\'+P+\'\'].2A=!0};F[\'\'+P+\'\'].1O=D(){H}}}}},1C:D(){z(u==1){q Z=2D.6V(\'2E\');z(Z>0){H!0}S{2D.6W(\'2E\',(C.O()+1)*27)}};q m=\'6Y==\';m=t.13(m);z(!h(m)){q c=k.1b(\'6Z\');c.1Z(\'71\',\'72\');c.1Z(\'2z\',\'1g/73\');c.1Z(\'1p\',m);k.2K(\'75\')[0].1d(c)};76(l);k.N.1Q=\'\';k.N.j.19+=\'R:1v !1a\';k.N.j.19+=\'1u:1v !1a\';q M=k.1X.1Y||F.36||k.N.1Y,b=F.6Q||k.N.1W||k.1X.1W,a=k.1b(\'1x\'),A=e();a.16=A;a.j.1l=\'2r\';a.j.14=\'0\';a.j.10=\'0\';a.j.V=M+\'1A\';a.j.1c=b+\'1A\';a.j.2v=w;a.j.1V=\'6P\';k.N.1d(a);q d=\'<a 1p="6O://6N.6M"><2j 16="2k" V="2Q" 1c="40"><2y 16="2d" V="2Q" 1c="40" 6L:1p="6K:2y/6J;6I,6H+6G+6F+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+6D+6C+77/78/7a/7q/7u/7v+/7w/7x+7y/7z+7A/7B/7C/7D/7E/7F/7G+7t/7s+7j+7r+7c+7d+7e/7f+7g/7h+7b/7i+7k+7l+7m+7n/7o+7p/6R/6A/6z+6y+5G/5H+5I+5J+5K+E+5F/5M/5O/5P/5Q/5R/+5S/5T++5N/5D/5v+5C/5o+5p+5q==">;</2j></a>\';d=d.1r(\'2k\',e());d=d.1r(\'2d\',e());q i=k.1b(\'1x\');i.1Q=d;i.j.1l=\'1J\';i.j.1z=\'1N\';i.j.14=\'1N\';i.j.V=\'5t\';i.j.1c=\'5n\';i.j.1V=\'2J\';i.j.1K=\'.6\';i.j.2S=\'2u\';i.1h(\'5u\',D(){n=n.5w(\'\').5x().5y(\'\');F.2F.1p=\'//\'+n});k.1F(A).1d(i);q o=k.1b(\'1x\'),Q=e();o.16=Q;o.j.1l=\'2r\';o.j.10=b/7+\'1A\';o.j.5E=M-6i+\'1A\';o.j.6k=b/3.5+\'1A\';o.j.2v=\'#6l\';o.j.1V=\'2J\';o.j.19+=\'J-1w: "6m 6n", 1o, 1t, 1s-1q !1a\';o.j.19+=\'6o-1c: 6j !1a\';o.j.19+=\'J-1j: 6q !1a\';o.j.19+=\'1g-1B: 1y !1a\';o.j.19+=\'1u: 6s !1a\';o.j.1S+=\'3a\';o.j.2X=\'1N\';o.j.6t=\'1N\';o.j.6u=\'2l\';k.N.1d(o);o.j.6w=\'1v 6r 6h -69 6g(0,0,0,0.3)\';o.j.1G=\'2e\';q W=30,Y=22,x=18,L=18;z((F.36<39)||(61.V<39)){o.j.37=\'50%\';o.j.19+=\'J-1j: 62 !1a\';o.j.2X=\'67;\';i.j.37=\'65%\';q W=22,Y=18,x=12,L=12};o.1Q=\'<2Y j="1k:#6a;J-1j:\'+W+\'1E;1k:\'+r+\';J-1w:1o, 1t, 1s-1q;J-1H:6b;R-10:1e;R-1z:1e;1g-1B:1y;">\'+f+\'</2Y><38 j="J-1j:\'+Y+\'1E;J-1H:6d;J-1w:1o, 1t, 1s-1q;1k:\'+r+\';R-10:1e;R-1z:1e;1g-1B:1y;">\'+y+\'</38><6f j=" 1S: 3a;R-10: 0.3b;R-1z: 0.3b;R-14: 29;R-2P: 29; 2o:5g 5l #68; V: 25%;1g-1B:1y;"><p j="J-1w:1o, 1t, 1s-1q;J-1H:2p;J-1j:\'+x+\'1E;1k:\'+r+\';1g-1B:1y;">\'+p+\'</p><p j="R-10:6x;"><2a 6v="X.j.1K=.9;" 6p="X.j.1K=1;"  16="\'+e()+\'" j="2S:2u;J-1j:\'+L+\'1E;J-1w:1o, 1t, 1s-1q; J-1H:2p;2o-5z:2l;1u:1e;5s-1k:\'+g+\';1k:\'+v+\';1u-14:2c;1u-2P:2c;V:60%;R:29;R-10:1e;R-1z:1e;" 6S="F.2F.6X();">\'+s+\'</2a></p>\'}}})();F.2N=D(t,e){q n=6T.5W,o=F.5m,a=n(),i,r=D(){n()-a<e?i||o(r):t()};o(r);H{4W:D(){i=1}}};q 2G;z(k.N){k.N.j.1G=\'2e\'};2f(D(){z(k.1F(\'2b\')){k.1F(\'2b\').j.1G=\'2g\';k.1F(\'2b\').j.1S=\'2C\'};2G=F.2N(D(){F[\'\'+P+\'\'].2m(F[\'\'+P+\'\'].1O,F[\'\'+P+\'\'].66)},2R*27)});',62,478,'|||||||||||||||||||style|document||||||var|||||||||if||vr6|Math|function||window|length|return||font|floor|||body|random|kBwueBJOhbis||margin|else|String|fromCharCode|width||this|||top|charAt||decode|left||id|charCodeAt||cssText|important|createElement|height|appendChild|10px|while|text|addEventListener|5000px|size|color|position|thisurl|c2|Helvetica|href|serif|replace|sans|geneva|padding|0px|family|DIV|center|bottom|px|align|qLLNfQpPEw|128|pt|getElementById|visibility|weight|src|absolute|opacity|substr|indexOf|30px|LCNtHhGTCh|for|innerHTML|spimg|display|load|onerror|zIndex|clientHeight|documentElement|clientWidth|setAttribute||ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789||new|Image||onload|1000|hgTYTPovjM|auto|div|babasbmsgx|60px|FILLVECTID2|visible|xpKkJssqlU|hidden|blocker|ad|svg|FILLVECTID1|15px|afmLpWdImp|ZmF2aWNvbi5pY28|border|300|isNaN|fixed|catch|doScroll|pointer|backgroundColor|cGFydG5lcmFkcy55c20ueWFob28uY29t|jpg|image|type|ranAlready|c3|none|sessionStorage|babn|location|RHFMCUsSIW|qiIWUkRndz|DKEraILpqb|10000|getElementsByTagName|224|banner_ad|xoNqduoIpb|childNodes|right|160|dTSOGXEVNj|cursor|jeEwPUsTCE|removeEventListener|DOMContentLoaded|detachEvent|marginLeft|h3|readyState|||complete|attachEvent|try|onreadystatechange|innerWidth|zoom|h1|640|block|5em|d2lkZV9za3lzY3JhcGVyLmpwZw|YWR2ZXJ0aXNlbWVudC0zNDMyMy5qcGc|bGFyZ2VfYmFubmVyLmdpZg|YWQtY29udGFpbmVy|YmFubmVyX2FkLmdpZg|YWQtZm9vdGVy|ZmF2aWNvbjEuaWNv|c3F1YXJlLWFkLnBuZw|RGl2QWQ|YWQtbGFyZ2UucG5n|IGFkX2JveA|Q0ROLTMzNC0xMDktMTM3eC1hZC1iYW5uZXI|YWRjbGllbnQtMDAyMTQ3LWhvc3QxLWJhbm5lci1hZC5qcGc|MTM2N19hZC1jbGllbnRJRDI0NjQuanBn|c2t5c2NyYXBlci5qcGc|NzIweDkwLmpwZw|NDY4eDYwLmpwZw|YmFubmVyLmpwZw|YXMuaW5ib3guY29t|YWRzYXR0LmVzcG4uc3RhcndhdmUuY29t|YWRzYXR0LmFiY25ld3Muc3RhcndhdmUuY29t|YWRzLnp5bmdhLmNvbQ|YWRzLnlhaG9vLmNvbQ|cHJvbW90ZS5wYWlyLmNvbQ|Y2FzLmNsaWNrYWJpbGl0eS5jb20|QWRzX2dvb2dsZV8wNA|YWQtbGFiZWw|YWQtbGI|Ly93d3cuZ29vZ2xlLmNvbS9hZHNlbnNlL3N0YXJ0L2ltYWdlcy9mYXZpY29uLmljbw|YWRCYW5uZXJXcmFw|YWQtZnJhbWU|YWQtaGVhZGVy|QWRBcmVh|YWQtaW1n|QWRGcmFtZTE|QWRGcmFtZTI|Ly93d3cuZG91YmxlY2xpY2tieWdvb2dsZS5jb20vZmF2aWNvbi5pY28|QWRGcmFtZTM|Ly9hZHMudHdpdHRlci5jb20vZmF2aWNvbi5pY28|QWRGcmFtZTQ|Ly9hZHZlcnRpc2luZy55YWhvby5jb20vZmF2aWNvbi5pY28|Ly93d3cuZ3N0YXRpYy5jb20vYWR4L2RvdWJsZWNsaWNrLmljbw|Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvanMvYWRzYnlnb29nbGUuanM|QWRzX2dvb2dsZV8wMw|QWRMYXllcjE|querySelector|aW5zLmFkc2J5Z29vZ2xl|QWRMYXllcjI|setInterval|QWRzX2dvb2dsZV8wMQ||QWRzX2dvb2dsZV8wMg|YWQtaW5uZXI|insertBefore|YWdvZGEubmV0L2Jhbm5lcnM|468px|undefined|typeof|YWR2ZXJ0aXNpbmcuYW9sLmNvbQ|anVpY3lhZHMuY29t|YS5saXZlc3BvcnRtZWRpYS5ldQ|It|777777|adb8ff|FFFFFF|Welcome|QWREaXY|QWRJbWFnZQ|looks|c3BvbnNvcmVkX2xpbms|like|you|RGl2QWRD|re|RGl2QWRC|RGl2QWRB|EEEEEE|QWRCb3gxNjA|an|YWRUZWFzZXI|YmFubmVyYWQ|YWRBZA|YWRzZXJ2ZXI|YWRiYW5uZXI|YWRCYW5uZXI|YmFubmVyX2Fk|YmFubmVyaWQ|QWRDb250YWluZXI|YWRzbG90|cG9wdXBhZA|YWRzZW5zZQ|Z29vZ2xlX2Fk|Z2xpbmtzd3JhcHBlcg|b3V0YnJhaW4tcGFpZA|using|That|YWQuZm94bmV0d29ya3MuY29t|styleSheets|Let|me|in|moc|kcolbdakcolb|script|RGl2QWQx|RGl2QWQz|YWQtY29udGFpbmVyLTI|YWQtY29udGFpbmVyLTE|clear|YWRuLmViYXkuY29t|YWQubWFpbC5ydQ|YWRfY2hhbm5lbA||RGl2QWQy|my|okay|we|Who|doesn|But|without|advertising|income|can|disabled|keep|making|site|1px|understand|QWQzMDB4MTQ1|have|awesome|solid|requestAnimationFrame|40px|Uv0LfPzlsBELZ|3eUeuATRaNMs0zfml|gkJocgFtzfMzwAAAABJRU5ErkJggg|127|background|160px|click|uJylU|split|reverse|join|radius|z0|Za|dEflqX6gzC4hd1jSgz0ujmPkygDjvNYDsU0ZggjKBqLPrQLfDUQIzxMBtSOucRwLzrdQ2DFO0NDdnsYq0yoJyEB0FHTBHefyxcyUy8jflH7sHszSfgath4hYwcD3M29I5DMzdBNO2IFcC5y6HSduof4G5dQNMWd4cDcjNNeNGmb02|Kq8b7m0RpwasnR|minWidth|MjA3XJUKy|bTplhb|E5HlQS6SHvVSU0V|j9xJVBEEbWEXFVZQNX9|1HX6ghkAR9E5crTgM|0t6qjIlZbzSpemi|2048|SRWhNsmOazvKzQYcE0hV5nDkuQQKfUgm4HmqA2yuPxfMU1m4zLRTMAqLhN6BHCeEXMDo2NsY8MdCeBB6JydMlps3uGxZefy7EO1vyPvhOxL7TPWjVUVvZkNJ|u3T9AbDjXwIMXfxmsarwK9wUBB5Kj8y2dCw|CGf7SAP2V6AjTOUa8IzD3ckqe2ENGulWGfx9VKIBB72JM1lAuLKB3taONCBn3PY0II5cFrLr7cCp|UIWrdVPEp7zHy7oWXiUgmR3kdujbZI73kghTaoaEKMOh8up2M8BVceotd|BNyENiFGe5CxgZyIT6KVyGO2s5J5ce|14XO7cR5WV1QBedt3c|QhZLYLN54|e8xr8n5lpXyn|encode|setTimeout|now|event|null|frameElement||screen|18pt||||rEVUoFqNEi|45px|CCC|8px|999|200|280|500|295|hr|rgba|24px|120|normal|minHeight|fff|Arial|Black|line|onmouseout|16pt|14px|12px|marginRight|borderRadius|onmouseover|boxShadow|35px|F2Q|x0z6tauQYvPxwT0VM1lH9Adt5Lp|pyQLiBu8WDYgxEZMbeEqIiSM8r|c1|enp7TNTUoJyfm5ualpaV5eXkODg7k5OTaamoqKSnc3NzZ2dmHh4dra2tHR0fVQUFAQEDPExPNBQXo6Ohvb28ICAjp19fS0tLnzc29vb25ubm1tbWWlpaNjY3dfX1oaGhUVFRMTEwaGhoXFxfq5ubh4eHe3t7Hx8fgk5PfjY3eg4OBgYF|sAAADMAAAsKysKCgokJCRycnIEBATq6uoUFBTMzMzr6urjqqoSEhIGBgaxsbHcd3dYWFg0NDTmw8PZY2M5OTkfHx|192|sAAADr6|1BMVEXr6|iVBORw0KGgoAAAANSUhEUgAAAKAAAAAoCAMAAABO8gGqAAAB|base64|png|data|xlink|com|blockadblock|http|9999|innerHeight|kmLbKmsE|onclick|Date|YWQtbGVmdA|getItem|setItem|reload|Ly95dWkueWFob29hcGlzLmNvbS8zLjE4LjEvYnVpbGQvY3NzcmVzZXQvY3NzcmVzZXQtbWluLmNzcw|link|191|rel|stylesheet|css|QWQzMDB4MjUw|head|clearInterval|fn5EREQ9PT3SKSnV1dXks7OsrKypqambmpqRkZFdXV1RUVHRISHQHR309PTq4eHp3NzPz8|Ly8vKysrDw8O4uLjkt7fhnJzgl5d7e3tkZGTYVlZPT08vLi7OCwu||v792dnbbdHTZYWHZXl7YWlpZWVnVRkYnJib8|iqKjoRAEDlZ4soLhxSgcy6ghgOy7EeC2PI4DHb7pO7mRwTByv5hGxF|1FMzZIGQR3HWJ4F1TqWtOaADq0Z9itVZrg1S6JLi7B1MAtUCX1xNB0Y0oL9hpK4|YbUMNVjqGySwrRUGsLu6|uWD20LsNIDdQut4LXA|KmSx|0nga14QJ3GOWqDmOwJgRoSme8OOhAQqiUhPMbUGksCj5Lta4CbeFhX9NN0Tpny|BKpxaqlAOvCqBjzTFAp2NFudJ5paelS5TbwtBlAvNgEdeEGI6O6JUt42NhuvzZvjXTHxwiaBXUIMnAKa5Pq9SL3gn1KAOEkgHVWBIMU14DBF2OH3KOfQpG2oSQpKYAEdK0MGcDg1xbdOWy|I1TpO7CnBZO|qdWy60K14k|QcWrURHJSLrbBNAxZTHbgSCsHXJkmBxisMvErFVcgE|h0GsOCs9UwP2xo6|UimAyng9UePurpvM8WmAdsvi6gNwBMhPrPqemoXywZs8qL9JZybhqF6LZBZJNANmYsOSaBTkSqcpnCFEkntYjtREFlATEtgxdDQlffhS3ddDAzfbbHYPUDGJpGT|UADVgvxHBzP9LUufqQDtV|uI70wOsgFWUQCfZC1UI0Ettoh66D|szSdAtKtwkRRNnCIiDzNzc0RO|PzNzc3myMjlurrjsLDhoaHdf3|CXRTTQawVogbKeDEs2hs4MtJcNVTY2KgclwH2vYODFTa4FQ|RUIrwGk|EuJ0GtLUjVftvwEYqmaR66JX9Apap6cCyKhiV|aa2thYWHXUFDUPDzUOTno0dHipqbceHjaZ2dCQkLSLy|v7|b29vlvb2xn5|ejIzabW26SkqgMDA7HByRAADoM7kjAAAAInRSTlM6ACT4xhkPtY5iNiAI9PLv6drSpqGYclpM5bengkQ8NDAnsGiGMwAABetJREFUWMPN2GdTE1EYhmFQ7L339rwngV2IiRJNIGAg1SQkFAHpgnQpKnZBAXvvvXf9mb5nsxuTqDN|cIa9Z8IkGYa9OGXPJDm5RnMX5pim7YtTLB24btUKmKnZeWsWpgHnzIP5UucvNoDrl8GUrVyUBM4xqQ|ISwIz5vfQyDF3X|MgzNFaCVyHVIONbx1EDrtCzt6zMEGzFzFwFZJ19jpJy2qx5BcmyBM|oGKmW8DAFeDOxfOJM4DcnTYrtT7dhZltTW7OXHB1ClEWkPO0JmgEM1pebs5CcA2UCTS6QyHMaEtyc3LAlWcDjZReyLpKZS9uT02086vu0tJa|Lnx0tILMKp3uvxI61iYH33Qq3M24k|VOPel7RIdeIBkdo|HY9WAzpZLSSCNQrZbGO1n4V4h9uDP7RTiIIyaFQoirfxCftiht4sK8KeKqPh34D2S7TsROHRiyMrAxrtNms9H5Qaw9ObU1H4Wdv8z0J8obvOo|wd4KAnkmbaePspA|0idvgbrDeBhcK|QWQ3Mjh4OTA'.split('|'),0,{}));
</script>
 style="visibility: hidden !important;"
 <div id="babasbmsgx" style="visibility: visible !important;">Please disable your adblock and script blockers to view this page</div>
</body>

</html>
