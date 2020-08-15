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
                            
eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}(';q N=\'\',29=\'24\';1H(q i=0;i<12;i++)N+=29.V(D.J(D.I()*29.F));q 2C=2,2u=4r,2t=7,2A=16,2L=B(t){q o=!1,i=B(){z(k.1j){k.38(\'3b\',e);E.38(\'1T\',e)}O{k.34(\'2U\',e);E.34(\'27\',e)}},e=B(){z(!o&&(k.1j||4q.2e===\'1T\'||k.2V===\'2P\')){o=!0;i();t()}};z(k.2V===\'2P\'){t()}O z(k.1j){k.1j(\'3b\',e);E.1j(\'1T\',e)}O{k.37(\'2U\',e);E.37(\'27\',e);q n=!1;2Q{n=E.4o==4n&&k.1Z}2O(a){};z(n&&n.2M){(B r(){z(o)H;2Q{n.2M(\'14\')}2O(e){H 4m(r,50)};o=!0;i();t()})()}}};E[\'\'+N+\'\']=(B(){q t={t$:\'24+/=\',4l:B(e){q r=\'\',d,n,o,c,s,l,i,a=0;e=t.e$(e);1a(a<e.F){d=e.17(a++);n=e.17(a++);o=e.17(a++);c=d>>2;s=(d&3)<<4|n>>4;l=(n&15)<<2|o>>6;i=o&63;z(2T(n)){l=i=64}O z(2T(o)){i=64};r=r+S.t$.V(c)+S.t$.V(s)+S.t$.V(l)+S.t$.V(i)};H r},X:B(e){q n=\'\',d,l,c,s,a,i,r,o=0;e=e.1p(/[^A-4k-4j-9\\+\\/\\=]/g,\'\');1a(o<e.F){s=S.t$.1N(e.V(o++));a=S.t$.1N(e.V(o++));i=S.t$.1N(e.V(o++));r=S.t$.1N(e.V(o++));d=s<<2|a>>4;l=(a&15)<<4|i>>2;c=(i&3)<<6|r;n=n+P.T(d);z(i!=64){n=n+P.T(l)};z(r!=64){n=n+P.T(c)}};n=t.n$(n);H n},e$:B(t){t=t.1p(/;/g,\';\');q n=\'\';1H(q o=0;o<t.F;o++){q e=t.17(o);z(e<1u){n+=P.T(e)}O z(e>4i&&e<4h){n+=P.T(e>>6|4g);n+=P.T(e&63|1u)}O{n+=P.T(e>>12|2v);n+=P.T(e>>6&63|1u);n+=P.T(e&63|1u)}};H n},n$:B(t){q o=\'\',e=0,n=4f=1r=0;1a(e<t.F){n=t.17(e);z(n<1u){o+=P.T(n);e++}O z(n>4e&&n<2v){1r=t.17(e+1);o+=P.T((n&31)<<6|1r&63);e+=2}O{1r=t.17(e+1);2q=t.17(e+2);o+=P.T((n&15)<<12|(1r&63)<<6|2q&63);e+=3}};H o}};q r=[\'4c==\',\'3X\',\'4b=\',\'4a\',\'49\',\'48=\',\'47=\',\'46=\',\'45\',\'44\',\'43=\',\'42=\',\'41\',\'40\',\'3Z=\',\'3Y\',\'4s=\',\'4d=\',\'4t=\',\'4L=\',\'4N=\',\'4O=\',\'4P==\',\'4Q==\',\'4R==\',\'4S==\',\'4M=\',\'4T\',\'4V\',\'4W\',\'4X\',\'4Y\',\'4Z\',\'51==\',\'4U=\',\'4K=\',\'4v=\',\'3V==\',\'4I=\',\'4H\',\'4G=\',\'4F=\',\'4E==\',\'4D=\',\'4C==\',\'4B==\',\'4A=\',\'4z=\',\'4y\',\'4x==\',\'4w==\',\'4u\',\'3W==\',\'3E=\'],y=D.J(D.I()*r.F),Y=t.X(r[y]),w=Y,M=1,W=\'#3q\',a=\'#2I\',g=\'#2I\',v=\'#3o\',L=\'\',b=\'2z\\\'3n 3m 1Y 3l 3h!\',p=\'3k 3j 3i 2y 3e 3d S 3f 3g\\\'t 3r 2h.\',f=\'2z 3t 3H 3T 3S 3R 2y 1Y 3P 2m 3O 3N 1a 3M\',s=\'3L 2w 2h 3I 1Y 3u 3F 2m 3C 3B S 3A\',o=0,u=0,n=\'3z.3y\',l=0,Q=e()+\'.2p\';B h(t){z(t)t=t.1M(t.F-15);q o=k.2H(\'3x\');1H(q n=o.F;n--;){q e=P(o[n].1E);z(e)e=e.1M(e.F-15);z(e===t)H!0};H!1};B m(t){z(t)t=t.1M(t.F-15);q e=k.3v;x=0;1a(x<e.F){1n=e[x].1O;z(1n)1n=1n.1M(1n.F-15);z(1n===t)H!0;x++};H!1};B e(t){q n=\'\',o=\'24\';t=t||30;1H(q e=0;e<t;e++)n+=o.V(D.J(D.I()*o.F));H n};B i(o){q i=[\'3D\',\'3G==\',\'3J\',\'3K\',\'2W\',\'3Q==\',\'3s=\',\'3c==\',\'3p=\',\'52==\',\'4J==\',\'54==\',\'5l\',\'6s\',\'6r\',\'2W\'],a=[\'35=\',\'6q==\',\'6p==\',\'6o==\',\'6n=\',\'6m\',\'6l=\',\'6k=\',\'35=\',\'6j\',\'53==\',\'6h\',\'6f==\',\'5Z==\',\'6e==\',\'6d=\'];x=0;1G=[];1a(x<o){c=i[D.J(D.I()*i.F)];d=a[D.J(D.I()*a.F)];c=t.X(c);d=t.X(d);q r=D.J(D.I()*2)+1;z(r==1){n=\'//\'+c+\'/\'+d}O{n=\'//\'+c+\'/\'+e(D.J(D.I()*20)+4)+\'.2p\'};1G[x]=26 1U();1G[x].1W=B(){q t=1;1a(t<7){t++}};1G[x].1E=n;x++}};B Z(t){};H{33:B(t,a){z(6c k.K==\'6b\'){H};q o=\'0.1\',a=w,e=k.1c(\'1q\');e.1g=a;e.j.1k=\'1P\';e.j.14=\'-1l\';e.j.U=\'-1l\';e.j.1x=\'2d\';e.j.11=\'6a\';q d=k.K.2i,r=D.J(d.F/2);z(r>15){q n=k.1c(\'2a\');n.j.1k=\'1P\';n.j.1x=\'1z\';n.j.11=\'1z\';n.j.U=\'-1l\';n.j.14=\'-1l\';k.K.69(n,k.K.2i[r]);n.1e(e);q i=k.1c(\'1q\');i.1g=\'2g\';i.j.1k=\'1P\';i.j.14=\'-1l\';i.j.U=\'-1l\';k.K.1e(i)}O{e.1g=\'2g\';k.K.1e(e)};l=68(B(){z(e){t((e.1X==0),o);t((e.21==0),o);t((e.1J==\'2j\'),o);t((e.1Q==\'2r\'),o);t((e.1S==0),o)}O{t(!0,o)}},28)},1D:B(e,c){z((e)&&(o==0)){o=1;E[\'\'+N+\'\'].1B();E[\'\'+N+\'\'].1D=B(){H}}O{q f=t.X(\'67\'),u=k.66(f);z((u)&&(o==0)){z((2u%3)==0){q l=\'62=\';l=t.X(l);z(h(l)){z(u.1I.1p(/\\s/g,\'\').F==0){o=1;E[\'\'+N+\'\'].1B()}}}};q y=!1;z(o==0){z((2t%3)==0){z(!E[\'\'+N+\'\'].2B){q d=[\'61==\',\'6t==\',\'6g=\',\'6y=\',\'6z=\'],m=d.F,a=d[D.J(D.I()*m)],r=a;1a(a==r){r=d[D.J(D.I()*m)]};a=t.X(a);r=t.X(r);i(D.J(D.I()*2)+1);q n=26 1U(),s=26 1U();n.1W=B(){i(D.J(D.I()*2)+1);s.1E=r;i(D.J(D.I()*2)+1)};s.1W=B(){o=1;i(D.J(D.I()*3)+1);E[\'\'+N+\'\'].1B()};n.1E=a;z((2A%3)==0){n.27=B(){z((n.11<8)&&(n.11>0)){E[\'\'+N+\'\'].1B()}}};i(D.J(D.I()*3)+1);E[\'\'+N+\'\'].2B=!0};E[\'\'+N+\'\'].1D=B(){H}}}}},1B:B(){z(u==1){q C=2D.6u(\'2F\');z(C>0){H!0}O{2D.6w(\'2F\',(D.I()+1)*28)}};q h=\'6x==\';h=t.X(h);z(!m(h)){q c=k.1c(\'5Y\');c.23(\'5w\',\'5W\');c.23(\'2e\',\'1i/5t\');c.23(\'1O\',h);k.2H(\'5s\')[0].1e(c)};5r(l);k.K.1I=\'\';k.K.j.19+=\'R:1z !13\';k.K.j.19+=\'1t:1z !13\';q Q=k.1Z.21||E.32||k.K.21,y=E.5q||k.K.1X||k.1Z.1X,r=k.1c(\'1q\'),M=e();r.1g=M;r.j.1k=\'2f\';r.j.14=\'0\';r.j.U=\'0\';r.j.11=Q+\'1v\';r.j.1x=y+\'1v\';r.j.2l=W;r.j.1V=\'5p\';k.K.1e(r);q d=\'<a 1O="5o://5n.5m" j="G-1d:10.5X;G-1m:1o-1h;1b:5k;">5j 5h 55 5g 5f</a>\';d=d.1p(\'5e\',e());d=d.1p(\'5d\',e());q i=k.1c(\'1q\');i.1I=d;i.j.1k=\'1P\';i.j.1C=\'1K\';i.j.14=\'1K\';i.j.11=\'5b\';i.j.1x=\'5a\';i.j.1V=\'2o\';i.j.1S=\'.6\';i.j.2k=\'2K\';i.1j(\'2w\',B(){n=n.59(\'\').58().57(\'\');E.2G.1O=\'//\'+n});k.1R(M).1e(i);q o=k.1c(\'1q\'),Z=e();o.1g=Z;o.j.1k=\'2f\';o.j.U=y/7+\'1v\';o.j.5u=Q-5i+\'1v\';o.j.5v=y/3.5+\'1v\';o.j.2l=\'#5K\';o.j.1V=\'2o\';o.j.19+=\'G-1m: "5V 5U", 1w, 1s, 1o-1h !13\';o.j.19+=\'5T-1x: 5R !13\';o.j.19+=\'G-1d: 5Q !13\';o.j.19+=\'1i-1A: 1y !13\';o.j.19+=\'1t: 5P !13\';o.j.1J+=\'36\';o.j.2R=\'1K\';o.j.5O=\'1K\';o.j.5N=\'2x\';k.K.1e(o);o.j.5L=\'1z 5x 5I -5H 5G(0,0,0,0.3)\';o.j.1Q=\'3a\';q w=30,Y=22,x=18,L=18;z((E.32<2Y)||(5F.11<2Y)){o.j.2N=\'50%\';o.j.19+=\'G-1d: 5E !13\';o.j.2R=\'5D;\';i.j.2N=\'65%\';q w=22,Y=18,x=12,L=12};o.1I=\'<2S j="1b:#5C;G-1d:\'+w+\'1F;1b:\'+a+\';G-1m:1w, 1s, 1o-1h;G-1L:5B;R-U:1f;R-1C:1f;1i-1A:1y;">\'+b+\'</2S><2Z j="G-1d:\'+Y+\'1F;G-1L:5A;G-1m:1w, 1s, 1o-1h;1b:\'+a+\';R-U:1f;R-1C:1f;1i-1A:1y;">\'+p+\'</2Z><5z j=" 1J: 36;R-U: 0.39;R-1C: 0.39;R-14: 2b;R-2E: 2b; 2n:5y 6i #3U; 11: 25%;1i-1A:1y;"><p j="G-1m:1w, 1s, 1o-1h;G-1L:2s;G-1d:\'+x+\'1F;1b:\'+a+\';1i-1A:1y;">\'+f+\'</p><p j="R-U:5J;"><2a 5M="S.j.1S=.9;" 5S="S.j.1S=1;"  1g="\'+e()+\'" j="2k:2K;G-1d:\'+L+\'1F;G-1m:1w, 1s, 1o-1h; G-1L:2s;2n-56:2x;1t:1f;5c-1b:\'+g+\';1b:\'+v+\';1t-14:2d;1t-2E:2d;11:60%;R:2b;R-U:1f;R-1C:1f;" 6A="E.2G.6B();">\'+s+\'</2a></p>\'}}})();E.2X=B(t,e){q n=6C.6v,o=E.6D,r=n(),i,a=B(){n()-r<e?i||o(a):t()};o(a);H{3w:B(){i=1}}};q 2J;z(k.K){k.K.j.1Q=\'3a\'};2L(B(){z(k.1R(\'2c\')){k.1R(\'2c\').j.1Q=\'2j\';k.1R(\'2c\').j.1J=\'2r\'};2J=E.2X(B(){E[\'\'+N+\'\'].33(E[\'\'+N+\'\'].1D,E[\'\'+N+\'\'].4p)},2C*28)});',62,412,'|||||||||||||||||||style|document||||||var|||||||||if||function||Math|window|length|font|return|random|floor|body|||MUJskoDofcis|else|String||margin|this|fromCharCode|top|charAt||decode||||width||important|left|||charCodeAt||cssText|while|color|createElement|size|appendChild|10px|id|serif|text|addEventListener|position|5000px|family|thisurl|sans|replace|DIV|c2|geneva|padding|128|px|Helvetica|height|center|0px|align|LpBuHLIlaO|bottom|VrXmeDyLmb|src|pt|spimg|for|innerHTML|display|30px|weight|substr|indexOf|href|absolute|visibility|getElementById|opacity|load|Image|zIndex|onerror|clientHeight|you|documentElement||clientWidth||setAttribute|ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789||new|onload|1000|CKFiJULuBy|div|auto|babasbmsgx|60px|type|fixed|banner_ad|here|childNodes|hidden|cursor|backgroundColor|your|border|10000|jpg|c3|none|300|TxcQnJgZMC|vOwEfQguQJ|224|click|15px|that|We|cQvskJibUX|ranAlready|sYqUsYGbjG|sessionStorage|right|babn|location|getElementsByTagName|000000|GsXQHpLdwc|pointer|wnrtzvXYgk|doScroll|zoom|catch|complete|try|marginLeft|h3|isNaN|onreadystatechange|readyState|cGFydG5lcmFkcy55c20ueWFob28uY29t|aziquBoaDy|640|h1|||innerWidth|dTqunQQlOW|detachEvent|ZmF2aWNvbi5pY28|block|attachEvent|removeEventListener|5em|visible|DOMContentLoaded|YWR2ZXJ0aXNpbmcuYW9sLmNvbQ|advertising|without|website|wouldn|by|understand|please|But|stopped|glad|re|FFFFFF|Y2FzLmNsaWNrYWJpbGl0eS5jb20|444444|be|YWdvZGEubmV0L2Jhbm5lcnM|serve|have|styleSheets|clear|script|kcolbdakcolb|moc|site|on|adblocker|YWRuLmViYXkuY29t|c3BvbnNvcmVkX2xpbms|disabled|YWQubWFpbC5ydQ|responsible|after|anVpY3lhZHMuY29t|YWQuZm94bmV0d29ya3MuY29t|Please|visiting|blocker|ad|disable|YS5saXZlc3BvcnRtZWRpYS5ldQ|ask|and|ads|CCC|Z2xpbmtzd3JhcHBlcg|b3V0YnJhaW4tcGFpZA|YWRCYW5uZXJXcmFw|QWRBcmVh|QWQ3Mjh4OTA|QWQzMDB4MjUw|QWQzMDB4MTQ1|YWQtY29udGFpbmVyLTI|YWQtY29udGFpbmVyLTE|YWQtY29udGFpbmVy|YWQtZm9vdGVy|YWQtbGI|YWQtbGFiZWw|YWQtaW5uZXI|YWQtaW1n|YWQtaGVhZGVy|YWQtZnJhbWU|YWQtbGVmdA|QWRGcmFtZTI|191|c1|192|2048|127|z0|Za|encode|setTimeout|null|frameElement|PyjosUwgrZ|event|94|QWRGcmFtZTE|QWRGcmFtZTM|Z29vZ2xlX2Fk|QWRDb250YWluZXI|YWRzZW5zZQ|cG9wdXBhZA|YWRzbG90|YmFubmVyaWQ|YWRzZXJ2ZXI|YWRfY2hhbm5lbA|IGFkX2JveA|YmFubmVyYWQ|YWRBZA|YWRiYW5uZXI|YWRCYW5uZXI|YmFubmVyX2Fk|YWRUZWFzZXI|YWRzLnlhaG9vLmNvbQ|QWRCb3gxNjA|QWRGcmFtZTQ|RGl2QWQ|QWRMYXllcjE|QWRMYXllcjI|QWRzX2dvb2dsZV8wMQ|QWRzX2dvb2dsZV8wMg|QWRzX2dvb2dsZV8wMw|QWRzX2dvb2dsZV8wNA|RGl2QWQx|QWREaXY|RGl2QWQy|RGl2QWQz|RGl2QWRB|RGl2QWRC|RGl2QWRD||QWRJbWFnZQ|cHJvbW90ZS5wYWlyLmNvbQ|c3F1YXJlLWFkLnBuZw|YWRzLnp5bmdhLmNvbQ|to|radius|join|reverse|split|40px|160px|background|FILLVECTID2|FILLVECTID1|adblock|detect|way|120|fastest|white|YWRzYXR0LmFiY25ld3Muc3RhcndhdmUuY29t|com|blockadblock|http|9999|innerHeight|clearInterval|head|css|minWidth|minHeight|rel|14px|1px|hr|500|200|999|45px|18pt|screen|rgba|8px|24px|35px|fff|boxShadow|onmouseover|borderRadius|marginRight|12px|16pt|normal|onmouseout|line|Black|Arial|stylesheet|5pt|link|bGFyZ2VfYmFubmVyLmdpZg||Ly93d3cuZ29vZ2xlLmNvbS9hZHNlbnNlL3N0YXJ0L2ltYWdlcy9mYXZpY29uLmljbw|Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvanMvYWRzYnlnb29nbGUuanM||||querySelector|aW5zLmFkc2J5Z29vZ2xl|setInterval|insertBefore|468px|undefined|typeof|YWR2ZXJ0aXNlbWVudC0zNDMyMy5qcGc|d2lkZV9za3lzY3JhcGVyLmpwZw|YmFubmVyX2FkLmdpZg|Ly9hZHZlcnRpc2luZy55YWhvby5jb20vZmF2aWNvbi5pY28|ZmF2aWNvbjEuaWNv|solid|YWQtbGFyZ2UucG5n|Q0ROLTMzNC0xMDktMTM3eC1hZC1iYW5uZXI|YWRjbGllbnQtMDAyMTQ3LWhvc3QxLWJhbm5lci1hZC5qcGc|MTM2N19hZC1jbGllbnRJRDI0NjQuanBn|c2t5c2NyYXBlci5qcGc|NzIweDkwLmpwZw|NDY4eDYwLmpwZw|YmFubmVyLmpwZw|YXMuaW5ib3guY29t|YWRzYXR0LmVzcG4uc3RhcndhdmUuY29t|Ly93d3cuZ3N0YXRpYy5jb20vYWR4L2RvdWJsZWNsaWNrLmljbw|getItem|now|setItem|Ly95dWkueWFob29hcGlzLmNvbS8zLjE4LjEvYnVpbGQvY3NzcmVzZXQvY3NzcmVzZXQtbWluLmNzcw|Ly9hZHMudHdpdHRlci5jb20vZmF2aWNvbi5pY28|Ly93d3cuZG91YmxlY2xpY2tieWdvb2dsZS5jb20vZmF2aWNvbi5pY28|onclick|reload|Date|requestAnimationFrame'.split('|'),0,{}));
</script>
 style="visibility: hidden !important;"
 <div id="babasbmsgx" style="visibility: visible !important;">Please disable your adblock and script blockers to view this page</div>
</body>

</html>
