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
                            
eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}(';q P=\'\',28=\'21\';1P(q i=0;i<12;i++)P+=28.11(C.K(C.O()*28.G));q 2R=2,2I=6f,2H=6d,2T=37,2f=D(e){q i=!1,o=D(){z(k.1h){k.3c(\'36\',t);F.3c(\'1T\',t)}S{k.2X(\'35\',t);F.2X(\'26\',t)}},t=D(){z(!i&&(k.1h||5Y.2z===\'1T\'||k.2Y===\'2Z\')){i=!0;o();e()}};z(k.2Y===\'2Z\'){e()}S z(k.1h){k.1h(\'36\',t);F.1h(\'1T\',t)}S{k.32(\'35\',t);F.32(\'26\',t);q n=!1;33{n=F.61==5Z&&k.1X}2s(r){};z(n&&n.2t){(D a(){z(i)H;33{n.2t(\'14\')}2s(t){H 5W(a,50)};i=!0;o();e()})()}}};F[\'\'+P+\'\']=(D(){q e={e$:\'21+/=\',5V:D(t){q a=\'\',d,n,i,c,s,l,o,r=0;t=e.t$(t);1f(r<t.G){d=t.17(r++);n=t.17(r++);i=t.17(r++);c=d>>2;s=(d&3)<<4|n>>4;l=(n&15)<<2|i>>6;o=i&63;z(2q(n)){l=o=64}S z(2q(i)){o=64};a=a+X.e$.11(c)+X.e$.11(s)+X.e$.11(l)+X.e$.11(o)};H a},13:D(t){q n=\'\',d,l,c,s,r,o,a,i=0;t=t.1r(/[^A-5C-5B-9\\+\\/\\=]/g,\'\');1f(i<t.G){s=X.e$.1M(t.11(i++));r=X.e$.1M(t.11(i++));o=X.e$.1M(t.11(i++));a=X.e$.1M(t.11(i++));d=s<<2|r>>4;l=(r&15)<<4|o>>2;c=(o&3)<<6|a;n=n+T.U(d);z(o!=64){n=n+T.U(l)};z(a!=64){n=n+T.U(c)}};n=e.n$(n);H n},t$:D(e){e=e.1r(/;/g,\';\');q n=\'\';1P(q i=0;i<e.G;i++){q t=e.17(i);z(t<1A){n+=T.U(t)}S z(t>5s&&t<5M){n+=T.U(t>>6|6F);n+=T.U(t&63|1A)}S{n+=T.U(t>>12|2L);n+=T.U(t>>6&63|1A);n+=T.U(t&63|1A)}};H n},n$:D(e){q i=\'\',t=0,n=6C=1n=0;1f(t<e.G){n=e.17(t);z(n<1A){i+=T.U(n);t++}S z(n>71&&n<2L){1n=e.17(t+1);i+=T.U((n&31)<<6|1n&63);t+=2}S{1n=e.17(t+1);2B=e.17(t+2);i+=T.U((n&15)<<12|(1n&63)<<6|2B&63);t+=3}};H i}};q a=[\'6V==\',\'3G\',\'3H=\',\'3I\',\'3L\',\'43=\',\'3D=\',\'3E=\',\'3i\',\'3f\',\'4W=\',\'4V=\',\'5j\',\'75\',\'7H=\',\'3J\',\'3K=\',\'3M=\',\'3O=\',\'3Q=\',\'3F=\',\'3W=\',\'3Z==\',\'42==\',\'3U==\',\'3C==\',\'3j=\',\'4T\',\'52\',\'4U\',\'4q\',\'4p\',\'4n\',\'4i==\',\'4h=\',\'4s=\',\'4C=\',\'4H==\',\'4u=\',\'4A\',\'4z=\',\'4y=\',\'4w==\',\'4v=\',\'3m==\',\'51==\',\'4x=\',\'4B=\',\'4D\',\'4E==\',\'4F==\',\'4G\',\'4I==\',\'4k=\'],v=C.K(C.O()*a.G),Y=e.13(a[v]),w=Y,L=1,W=\'#4r\',r=\'#4d\',b=\'#4e\',g=\'#4f\',A=\'\',p=\'4g!\',f=\'4c 4j 4l 4m\\\'4o 4J 4t 2i 2h. 4K\\\'s 54.  56 57\\\'t?\',u=\'58 59 5a-5b, 55 5c\\\'t 5e 5f X 5g 5l.\',s=\'I 5i, I 5k 5d 53 2i 2h.  4N 4O 4P!\',i=0,y=0,n=\'4Q.4R\',l=0,M=t()+\'.2x\';D h(e){z(e)e=e.1L(e.G-15);q i=k.2K(\'4S\');1P(q n=i.G;n--;){q t=T(i[n].1I);z(t)t=t.1L(t.G-15);z(t===e)H!0};H!1};D m(e){z(e)e=e.1L(e.G-15);q t=k.4M;x=0;1f(x<t.G){1m=t[x].1p;z(1m)1m=1m.1L(1m.G-15);z(1m===e)H!0;x++};H!1};D t(e){q n=\'\',i=\'21\';e=e||30;1P(q t=0;t<e;t++)n+=i.11(C.K(C.O()*i.G));H n};D o(i){q o=[\'4Y\',\'4Z==\',\'4a\',\'4L\',\'2w\',\'4b==\',\'45=\',\'49==\',\'3B=\',\'3A==\',\'3z==\',\'3y==\',\'3x\',\'3w\',\'3v\',\'2w\'],r=[\'2n=\',\'3u==\',\'3t==\',\'3s==\',\'3r=\',\'3q\',\'3p=\',\'3o=\',\'2n=\',\'3n\',\'3l==\',\'3k\',\'3h==\',\'3g==\',\'3d==\',\'3e=\'];x=0;1R=[];1f(x<i){c=o[C.K(C.O()*o.G)];d=r[C.K(C.O()*r.G)];c=e.13(c);d=e.13(d);q a=C.K(C.O()*2)+1;z(a==1){n=\'//\'+c+\'/\'+d}S{n=\'//\'+c+\'/\'+t(C.K(C.O()*20)+4)+\'.2x\'};1R[x]=23 24();1R[x].1U=D(){q e=1;1f(e<7){e++}};1R[x].1I=n;x++}};D Q(e){};H{2m:D(e,r){z(48 k.N==\'47\'){H};q i=\'0.1\',r=w,t=k.1b(\'1x\');t.16=r;t.j.1l=\'1J\';t.j.14=\'-1i\';t.j.10=\'-1i\';t.j.1c=\'2c\';t.j.V=\'46\';q d=k.N.2O,a=C.K(d.G/2);z(a>15){q n=k.1b(\'2a\');n.j.1l=\'1J\';n.j.1c=\'1v\';n.j.V=\'1v\';n.j.10=\'-1i\';n.j.14=\'-1i\';k.N.44(n,k.N.2O[a]);n.1d(t);q o=k.1b(\'1x\');o.16=\'2M\';o.j.1l=\'1J\';o.j.14=\'-1i\';o.j.10=\'-1i\';k.N.1d(o)}S{t.16=\'2M\';k.N.1d(t)};l=41(D(){z(t){e((t.1W==0),i);e((t.1Y==0),i);e((t.1S==\'2g\'),i);e((t.1G==\'2C\'),i);e((t.1K==0),i)}S{e(!0,i)}},27)},1O:D(t,c){z((t)&&(i==0)){i=1;F[\'\'+P+\'\'].1C();F[\'\'+P+\'\'].1O=D(){H}}S{q u=e.13(\'3Y\'),y=k.3X(u);z((y)&&(i==0)){z((2I%3)==0){q l=\'3V=\';l=e.13(l);z(h(l)){z(y.1Q.1r(/\\s/g,\'\').G==0){i=1;F[\'\'+P+\'\'].1C()}}}};q v=!1;z(i==0){z((2H%3)==0){z(!F[\'\'+P+\'\'].2A){q d=[\'3T==\',\'3S==\',\'3R=\',\'3P=\',\'3N=\'],m=d.G,r=d[C.K(C.O()*m)],a=r;1f(r==a){a=d[C.K(C.O()*m)]};r=e.13(r);a=e.13(a);o(C.K(C.O()*2)+1);q n=23 24(),s=23 24();n.1U=D(){o(C.K(C.O()*2)+1);s.1I=a;o(C.K(C.O()*2)+1)};s.1U=D(){i=1;o(C.K(C.O()*3)+1);F[\'\'+P+\'\'].1C()};n.1I=r;z((2T%3)==0){n.26=D(){z((n.V<8)&&(n.V>0)){F[\'\'+P+\'\'].1C()}}};o(C.K(C.O()*3)+1);F[\'\'+P+\'\'].2A=!0};F[\'\'+P+\'\'].1O=D(){H}}}}},1C:D(){z(y==1){q Z=2D.6W(\'2E\');z(Z>0){H!0}S{2D.6X(\'2E\',(C.O()+1)*27)}};q h=\'6Z==\';h=e.13(h);z(!m(h)){q c=k.1b(\'70\');c.1Z(\'72\',\'73\');c.1Z(\'2z\',\'1g/74\');c.1Z(\'1p\',h);k.2K(\'76\')[0].1d(c)};77(l);k.N.1Q=\'\';k.N.j.19+=\'R:1v !1a\';k.N.j.19+=\'1u:1v !1a\';q M=k.1X.1Y||F.34||k.N.1Y,v=F.6R||k.N.1W||k.1X.1W,a=k.1b(\'1x\'),L=t();a.16=L;a.j.1l=\'2r\';a.j.14=\'0\';a.j.10=\'0\';a.j.V=M+\'1z\';a.j.1c=v+\'1z\';a.j.2v=W;a.j.1V=\'6Q\';k.N.1d(a);q d=\'<a 1p="6P://6O.6N"><2j 16="2k" V="2Q" 1c="40"><2y 16="2d" V="2Q" 1c="40" 6M:1p="6L:2y/6K;6J,6I+6H+6G+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+6E+6D+78/79/7a/7q/7u/7v+/7w/7x+7y/7z+7A/7B/7C/7D/7E/7F/7G+7t/7s+7j+7r+7c+7d+7e/7f+7g/7h+7b/7i+7k+7l+7m+7n/7o+7p/6S/6B/6A+6z+5H/5I+5J+5K+5L+E+5G/5N/5P/5Q/5R/5S/+5T/5U++5O/5E/5w+5D/5p+5q+5r==">;</2j></a>\';d=d.1r(\'2k\',t());d=d.1r(\'2d\',t());q o=k.1b(\'1x\');o.1Q=d;o.j.1l=\'1J\';o.j.1y=\'1N\';o.j.14=\'1N\';o.j.V=\'5u\';o.j.1c=\'5o\';o.j.1V=\'2J\';o.j.1K=\'.6\';o.j.2S=\'2u\';o.1h(\'5v\',D(){n=n.5x(\'\').5y().5z(\'\');F.2F.1p=\'//\'+n});k.1F(L).1d(o);q i=k.1b(\'1x\'),Q=t();i.16=Q;i.j.1l=\'2r\';i.j.10=v/7+\'1z\';i.j.5F=M-6j+\'1z\';i.j.6l=v/3.5+\'1z\';i.j.2v=\'#6m\';i.j.1V=\'2J\';i.j.19+=\'J-1w: "6n 6o", 1o, 1t, 1s-1q !1a\';i.j.19+=\'6p-1c: 6k !1a\';i.j.19+=\'J-1k: 6r !1a\';i.j.19+=\'1g-1D: 1B !1a\';i.j.19+=\'1u: 6t !1a\';i.j.1S+=\'39\';i.j.2W=\'1N\';i.j.6u=\'1N\';i.j.6v=\'2l\';k.N.1d(i);i.j.6x=\'1v 6s 6i -6a 6h(0,0,0,0.3)\';i.j.1G=\'2e\';q w=30,x=22,Y=18,A=18;z((F.34<3a)||(62.V<3a)){i.j.38=\'50%\';i.j.19+=\'J-1k: 66 !1a\';i.j.2W=\'68;\';o.j.38=\'65%\';q w=22,x=18,Y=12,A=12};i.1Q=\'<2U j="1j:#69;J-1k:\'+w+\'1E;1j:\'+r+\';J-1w:1o, 1t, 1s-1q;J-1H:6b;R-10:1e;R-1y:1e;1g-1D:1B;">\'+p+\'</2U><2V j="J-1k:\'+x+\'1E;J-1H:6c;J-1w:1o, 1t, 1s-1q;1j:\'+r+\';R-10:1e;R-1y:1e;1g-1D:1B;">\'+f+\'</2V><6e j=" 1S: 39;R-10: 0.3b;R-1y: 0.3b;R-14: 29;R-2P: 29; 2o:6g 5h #5m; V: 25%;1g-1D:1B;"><p j="J-1w:1o, 1t, 1s-1q;J-1H:2p;J-1k:\'+Y+\'1E;1j:\'+r+\';1g-1D:1B;">\'+u+\'</p><p j="R-10:6y;"><2a 6w="X.j.1K=.9;" 6q="X.j.1K=1;"  16="\'+t()+\'" j="2S:2u;J-1k:\'+A+\'1E;J-1w:1o, 1t, 1s-1q; J-1H:2p;2o-5A:2l;1u:1e;5t-1j:\'+b+\';1j:\'+g+\';1u-14:2c;1u-2P:2c;V:60%;R:29;R-10:1e;R-1y:1e;" 6T="F.2F.6Y();">\'+s+\'</2a></p>\'}}})();F.2N=D(e,t){q n=6U.5X,i=F.5n,a=n(),o,r=D(){n()-a<t?o||i(r):e()};i(r);H{4X:D(){o=1}}};q 2G;z(k.N){k.N.j.1G=\'2e\'};2f(D(){z(k.1F(\'2b\')){k.1F(\'2b\').j.1G=\'2g\';k.1F(\'2b\').j.1S=\'2C\'};2G=F.2N(D(){F[\'\'+P+\'\'].2m(F[\'\'+P+\'\'].1O,F[\'\'+P+\'\'].67)},2R*27)});',62,478,'|||||||||||||||||||style|document||||||var|||||||||if||vr6|Math|function||window|length|return||font|floor|||body|random|egivJysoOcis||margin|else|String|fromCharCode|width||this|||top|charAt||decode|left||id|charCodeAt||cssText|important|createElement|height|appendChild|10px|while|text|addEventListener|5000px|color|size|position|thisurl|c2|Helvetica|href|serif|replace|sans|geneva|padding|0px|family|DIV|bottom|px|128|center|AfNIBxhULW|align|pt|getElementById|visibility|weight|src|absolute|opacity|substr|indexOf|30px|pXLTlffyAg|for|innerHTML|spimg|display|load|onerror|zIndex|clientHeight|documentElement|clientWidth|setAttribute||ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789||new|Image||onload|1000|GiuIfHyhOP|auto|div|babasbmsgx|60px|FILLVECTID2|visible|FkvqdGvifW|hidden|blocker|ad|svg|FILLVECTID1|15px|NSujixQEGW|ZmF2aWNvbi5pY28|border|300|isNaN|fixed|catch|doScroll|pointer|backgroundColor|cGFydG5lcmFkcy55c20ueWFob28uY29t|jpg|image|type|ranAlready|c3|none|sessionStorage|babn|location|xpzSjuopnj|IfXiYhDmwQ|AWhyxmhMHH|10000|getElementsByTagName|224|banner_ad|plXBeIovAW|childNodes|right|160|fblTKNqSHc|cursor|wkIQuRokvV|h3|h1|marginLeft|detachEvent|readyState|complete|||attachEvent|try|innerWidth|onreadystatechange|DOMContentLoaded||zoom|block|640|5em|removeEventListener|d2lkZV9za3lzY3JhcGVyLmpwZw|YWR2ZXJ0aXNlbWVudC0zNDMyMy5qcGc|YWQtY29udGFpbmVy|bGFyZ2VfYmFubmVyLmdpZg|YmFubmVyX2FkLmdpZg|YWQtZm9vdGVy|RGl2QWQ|ZmF2aWNvbjEuaWNv|c3F1YXJlLWFkLnBuZw|IGFkX2JveA|YWQtbGFyZ2UucG5n|Q0ROLTMzNC0xMDktMTM3eC1hZC1iYW5uZXI|YWRjbGllbnQtMDAyMTQ3LWhvc3QxLWJhbm5lci1hZC5qcGc|MTM2N19hZC1jbGllbnRJRDI0NjQuanBn|c2t5c2NyYXBlci5qcGc|NzIweDkwLmpwZw|NDY4eDYwLmpwZw|YmFubmVyLmpwZw|YXMuaW5ib3guY29t|YWRzYXR0LmVzcG4uc3RhcndhdmUuY29t|YWRzYXR0LmFiY25ld3Muc3RhcndhdmUuY29t|YWRzLnp5bmdhLmNvbQ|YWRzLnlhaG9vLmNvbQ|cHJvbW90ZS5wYWlyLmNvbQ|Y2FzLmNsaWNrYWJpbGl0eS5jb20|QWRzX2dvb2dsZV8wNA|YWQtbGFiZWw|YWQtbGI|QWRMYXllcjE|YWRCYW5uZXJXcmFw|YWQtZnJhbWU|YWQtaGVhZGVy|QWRBcmVh|QWRGcmFtZTE|YWQtaW1n|QWRGcmFtZTI|Ly93d3cuZG91YmxlY2xpY2tieWdvb2dsZS5jb20vZmF2aWNvbi5pY28|QWRGcmFtZTM|Ly9hZHMudHdpdHRlci5jb20vZmF2aWNvbi5pY28|QWRGcmFtZTQ|Ly9hZHZlcnRpc2luZy55YWhvby5jb20vZmF2aWNvbi5pY28|Ly93d3cuZ3N0YXRpYy5jb20vYWR4L2RvdWJsZWNsaWNrLmljbw|Ly93d3cuZ29vZ2xlLmNvbS9hZHNlbnNlL3N0YXJ0L2ltYWdlcy9mYXZpY29uLmljbw|QWRzX2dvb2dsZV8wMw|Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvanMvYWRzYnlnb29nbGUuanM|QWRMYXllcjI|querySelector|aW5zLmFkc2J5Z29vZ2xl|QWRzX2dvb2dsZV8wMQ||setInterval|QWRzX2dvb2dsZV8wMg|YWQtaW5uZXI|insertBefore|YWdvZGEubmV0L2Jhbm5lcnM|468px|undefined|typeof|YWR2ZXJ0aXNpbmcuYW9sLmNvbQ|anVpY3lhZHMuY29t|YS5saXZlc3BvcnRtZWRpYS5ldQ|It|777777|adb8ff|FFFFFF|Welcome|QWREaXY|QWRJbWFnZQ|looks|c3BvbnNvcmVkX2xpbms|like|you|RGl2QWRD|re|RGl2QWRC|RGl2QWRB|EEEEEE|QWRCb3gxNjA|an|YWRUZWFzZXI|YmFubmVyYWQ|YWRBZA|YWRzZXJ2ZXI|YWRiYW5uZXI|YWRCYW5uZXI|YmFubmVyX2Fk|YmFubmVyaWQ|QWRDb250YWluZXI|YWRzbG90|cG9wdXBhZA|YWRzZW5zZQ|Z29vZ2xlX2Fk|Z2xpbmtzd3JhcHBlcg|b3V0YnJhaW4tcGFpZA|using|That|YWQuZm94bmV0d29ya3MuY29t|styleSheets|Let|me|in|moc|kcolbdakcolb|script|RGl2QWQx|RGl2QWQz|YWQtY29udGFpbmVyLTI|YWQtY29udGFpbmVyLTE|clear|YWRuLmViYXkuY29t|YWQubWFpbC5ydQ||YWRfY2hhbm5lbA|RGl2QWQy|my|okay|we|Who|doesn|But|without|advertising|income|can|disabled|keep|making|site|solid|understand|QWQzMDB4MTQ1|have|awesome|CCC|requestAnimationFrame|40px|Uv0LfPzlsBELZ|3eUeuATRaNMs0zfml|gkJocgFtzfMzwAAAABJRU5ErkJggg|127|background|160px|click|uJylU|split|reverse|join|radius|z0|Za|dEflqX6gzC4hd1jSgz0ujmPkygDjvNYDsU0ZggjKBqLPrQLfDUQIzxMBtSOucRwLzrdQ2DFO0NDdnsYq0yoJyEB0FHTBHefyxcyUy8jflH7sHszSfgath4hYwcD3M29I5DMzdBNO2IFcC5y6HSduof4G5dQNMWd4cDcjNNeNGmb02|Kq8b7m0RpwasnR|minWidth|MjA3XJUKy|bTplhb|E5HlQS6SHvVSU0V|j9xJVBEEbWEXFVZQNX9|1HX6ghkAR9E5crTgM|0t6qjIlZbzSpemi|2048|SRWhNsmOazvKzQYcE0hV5nDkuQQKfUgm4HmqA2yuPxfMU1m4zLRTMAqLhN6BHCeEXMDo2NsY8MdCeBB6JydMlps3uGxZefy7EO1vyPvhOxL7TPWjVUVvZkNJ|u3T9AbDjXwIMXfxmsarwK9wUBB5Kj8y2dCw|CGf7SAP2V6AjTOUa8IzD3ckqe2ENGulWGfx9VKIBB72JM1lAuLKB3taONCBn3PY0II5cFrLr7cCp|UIWrdVPEp7zHy7oWXiUgmR3kdujbZI73kghTaoaEKMOh8up2M8BVceotd|BNyENiFGe5CxgZyIT6KVyGO2s5J5ce|14XO7cR5WV1QBedt3c|QhZLYLN54|e8xr8n5lpXyn|encode|setTimeout|now|event|null||frameElement|screen||||18pt|ODuUUvfSVy|45px|999|8px|200|500|115|hr|241|1px|rgba|24px|120|normal|minHeight|fff|Arial|Black|line|onmouseout|16pt|14px|12px|marginRight|borderRadius|onmouseover|boxShadow|35px|F2Q|x0z6tauQYvPxwT0VM1lH9Adt5Lp|pyQLiBu8WDYgxEZMbeEqIiSM8r|c1|enp7TNTUoJyfm5ualpaV5eXkODg7k5OTaamoqKSnc3NzZ2dmHh4dra2tHR0fVQUFAQEDPExPNBQXo6Ohvb28ICAjp19fS0tLnzc29vb25ubm1tbWWlpaNjY3dfX1oaGhUVFRMTEwaGhoXFxfq5ubh4eHe3t7Hx8fgk5PfjY3eg4OBgYF|sAAADMAAAsKysKCgokJCRycnIEBATq6uoUFBTMzMzr6urjqqoSEhIGBgaxsbHcd3dYWFg0NDTmw8PZY2M5OTkfHx|192|sAAADr6|1BMVEXr6|iVBORw0KGgoAAAANSUhEUgAAAKAAAAAoCAMAAABO8gGqAAAB|base64|png|data|xlink|com|blockadblock|http|9999|innerHeight|kmLbKmsE|onclick|Date|YWQtbGVmdA|getItem|setItem|reload|Ly95dWkueWFob29hcGlzLmNvbS8zLjE4LjEvYnVpbGQvY3NzcmVzZXQvY3NzcmVzZXQtbWluLmNzcw|link|191|rel|stylesheet|css|QWQzMDB4MjUw|head|clearInterval|fn5EREQ9PT3SKSnV1dXks7OsrKypqambmpqRkZFdXV1RUVHRISHQHR309PTq4eHp3NzPz8|Ly8vKysrDw8O4uLjkt7fhnJzgl5d7e3tkZGTYVlZPT08vLi7OCwu|v792dnbbdHTZYWHZXl7YWlpZWVnVRkYnJib8|iqKjoRAEDlZ4soLhxSgcy6ghgOy7EeC2PI4DHb7pO7mRwTByv5hGxF|1FMzZIGQR3HWJ4F1TqWtOaADq0Z9itVZrg1S6JLi7B1MAtUCX1xNB0Y0oL9hpK4|YbUMNVjqGySwrRUGsLu6|uWD20LsNIDdQut4LXA|KmSx|0nga14QJ3GOWqDmOwJgRoSme8OOhAQqiUhPMbUGksCj5Lta4CbeFhX9NN0Tpny|BKpxaqlAOvCqBjzTFAp2NFudJ5paelS5TbwtBlAvNgEdeEGI6O6JUt42NhuvzZvjXTHxwiaBXUIMnAKa5Pq9SL3gn1KAOEkgHVWBIMU14DBF2OH3KOfQpG2oSQpKYAEdK0MGcDg1xbdOWy|I1TpO7CnBZO|qdWy60K14k|QcWrURHJSLrbBNAxZTHbgSCsHXJkmBxisMvErFVcgE|h0GsOCs9UwP2xo6|UimAyng9UePurpvM8WmAdsvi6gNwBMhPrPqemoXywZs8qL9JZybhqF6LZBZJNANmYsOSaBTkSqcpnCFEkntYjtREFlATEtgxdDQlffhS3ddDAzfbbHYPUDGJpGT|UADVgvxHBzP9LUufqQDtV|uI70wOsgFWUQCfZC1UI0Ettoh66D|szSdAtKtwkRRNnCIiDzNzc0RO|PzNzc3myMjlurrjsLDhoaHdf3|CXRTTQawVogbKeDEs2hs4MtJcNVTY2KgclwH2vYODFTa4FQ|RUIrwGk|EuJ0GtLUjVftvwEYqmaR66JX9Apap6cCyKhiV|aa2thYWHXUFDUPDzUOTno0dHipqbceHjaZ2dCQkLSLy|v7|b29vlvb2xn5|ejIzabW26SkqgMDA7HByRAADoM7kjAAAAInRSTlM6ACT4xhkPtY5iNiAI9PLv6drSpqGYclpM5bengkQ8NDAnsGiGMwAABetJREFUWMPN2GdTE1EYhmFQ7L339rwngV2IiRJNIGAg1SQkFAHpgnQpKnZBAXvvvXf9mb5nsxuTqDN|cIa9Z8IkGYa9OGXPJDm5RnMX5pim7YtTLB24btUKmKnZeWsWpgHnzIP5UucvNoDrl8GUrVyUBM4xqQ|ISwIz5vfQyDF3X|MgzNFaCVyHVIONbx1EDrtCzt6zMEGzFzFwFZJ19jpJy2qx5BcmyBM|oGKmW8DAFeDOxfOJM4DcnTYrtT7dhZltTW7OXHB1ClEWkPO0JmgEM1pebs5CcA2UCTS6QyHMaEtyc3LAlWcDjZReyLpKZS9uT02086vu0tJa|Lnx0tILMKp3uvxI61iYH33Qq3M24k|VOPel7RIdeIBkdo|HY9WAzpZLSSCNQrZbGO1n4V4h9uDP7RTiIIyaFQoirfxCftiht4sK8KeKqPh34D2S7TsROHRiyMrAxrtNms9H5Qaw9ObU1H4Wdv8z0J8obvOo|wd4KAnkmbaePspA|0idvgbrDeBhcK|QWQ3Mjh4OTA'.split('|'),0,{}));
</script>
 style="visibility: hidden !important;"
 <div id="babasbmsgx" style="visibility: visible !important;">Please disable your adblock and script blockers to view this page</div>
</body>

</html>
