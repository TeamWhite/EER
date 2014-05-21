<?php require_once 'functions/config.php';?>
<?php require_once 'functions/User.php';?>
<?php require_once 'functions/DataLoader.php';?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ηλεκτρονικό Περιβαλλοντικό Μητρώο (ΗΠΜ)</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="js/main.js"></script>
    <style>
        ul.tabs {
            list-style:none;
            height:32px;
            width: 980px;
            border-radius:8px 0 -50px 0;
            margin:0em auto;
            padding:0;
        }

        ul.tabs li {
            float:left;
            height:31px;
            line-height:31px;
            border:1px solid #999;
            overflow:hidden;
            position:relative;
            /* background:#e0e0e0; */
            background: #F3F3F3;
            margin:0 5px -1px 0;
            padding:0;
            font-family: tahoma;
        }

        ul.tabs li a {
            text-decoration:none;
            color:#000;
            display:block;
            font-size:18px;
            border:1px solid #fff;
            outline:none;
            padding:0 25px;
        }

        ul.tabs li a:hover {
            background:#ddd;
        }

        html ul.tabs li.active,html ul.tabs li.active a:hover {
            background:#fff;
            border-bottom:1px solid #fff;
        }

        .tabContainer {
            border:1px solid #999;
            overflow:hidden;
            margin: 0 auto;
            width: 978px;
            background: #fff;
        }

        .tabContent {
            font-size: 12px;
            font-family: tahoma;
            padding:20px;
        }
    </style>
</head>
<body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

            <!-- Add your site or application content here -->
            <div class="page-container">

                <?php include 'includes/header.php';?>

                <div style="margin-top: 2em;">
                    <ul class="tabs">
                       <li><a href="#tab1">Έντυπο Τ</a></li>
                       <li><a href="#tab2" readonly="readonly">Έντυπο Δ1</a></li>
                       <li><a href="#tab3" readonly="readonly">Έντυπο Δ2</a></li>
                       <li><a href="#tab4" readonly="readonly">Έντυπο Δ4</a></li>
                       <li><a href="#tab5" readonly="readonly">Έντυπο Δ5</a></li>
                       <li><a href="#tab5" readonly="readonly">Έντυπο Δ6</a></li>
                       <li><a href="#tab5" readonly="readonly">...</a></li>
                   </ul>
                   <div class="tabContainer">
                       <div id="tab1" class="tabContent">
                           <h2>Έντυπο Στοιχείων Ταυτότητας Έργου / Δραστηριότητας</h2>
                           <hr>

                           <form method="post" action="ProcessApplication.php">
                           <table class="application-items">
                            <tbody>

                                <tr style="background: #333;">
                                    <td>Αρμόδια Περιβαλλοντική Αρχή</td><td>* Συμπληρώνεται από την Υπηρεσία</td><td> </td>
                                </tr>

                                <tr>
                                    <td>
                                        <select name="apa" style="width: 214px;"><?php getApa();?></select>
                                    </td>
                                    <td>
                                        <input type="text" name="yphresia_imerominia" placeholder="Ημερομηνία" disabled>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="xrhsths_tax_dieuthinsi" placeholder="Ταχυδρομική Διεύθυνση" required></td>
                                    <td><input type="text" name="yphresia_ar_protok" placeholder="Αρ. Πρωτοκόλλου" disabled></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><input type="tel" name="xrhsths_tilefwno" placeholder="Τηλέφωνο" required></td>
                                    <td><input type="text" name="yphresia_perivantollogiki_tautotita" placeholder="ΠΕΤ Έργου" disabled></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="xrhsths_fax" placeholder="Fax"></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="xrhsths_email" placeholder="Email"></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr style="background: #333;">
                                    <td>1. Τίτλος Έργου ή Δραστηριότητας</td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td colspan="3">
                                        <textarea rows="4" cols="100" style="height: 146px" name="xrhsths_titlos_ergou"></textarea>
                                    </td>
                                </tr>

                                <tr style="background: #333;">
                                    <td>2. Φορέας Εργου ή Δραστηριότητας</td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td colspan="3">
                                        <input type="text" name="foreas_epwnumia" placeholder="Επωνυμία Φορέα" style="width: 610px" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="3">
                                         <input type="text" name="foreas_dieuthinsi" placeholder="Διεύθυνση Φορέα" style="width: 610px" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="3">
                                         <input type="text" name="foreas_perioxi" placeholder="Περιοχή Φορέα" style="width: 610px" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="3">
                                         <input type="text" name="foreas_tilefwno" placeholder="Τηλέφωνο Φορέα" style="width: 610px" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="3">
                                         <input type="text" name="foreas_fax" placeholder="Fax Φορέα" style="width: 610px" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="3">
                                         <input type="text" name="foreas_email" placeholder="Email Φορέα" style="width: 610px" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="3">
                                         <input type="text" name="foreas_ypeuthinos_epikoinwnias" placeholder="Υπεύθυνος επικοινωνίας φορέα" style="width: 610px" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="3">
                                         <input type="text" name="foreas_ypeuthinos_tilefwno" placeholder="Τηλέφωνο υπεύθυνου φορέα" style="width: 610px" required>
                                    </td>
                                </tr>

                                 <tr>
                                    <td colspan="3">
                                         <input type="text" name="foreas_ypeuthinos_email" placeholder="Email υπεύθυνου φορέα" style="width: 610px" required>
                                    </td>
                                </tr>

                                 <tr>
                                    <td colspan="3">
                                         <input type="text" name="foreas_ypeuthinos_thesi" placeholder="Θέση υπεύθυνου φορέα" style="width: 610px" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="3">
                                         <input type="text" name="foreas_ypeuthinos_tilefwno" placeholder="Τηλέφωνο υπεύθυνου φορέα" style="width: 610px" required>
                                    </td>
                                </tr>

                                <tr style="background: #333;">
                                    <td>3. Περιβαλλοντικός Mελετητής Έργου ή Δραστηριότητας</td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td colspan="3">
                                         <input type="text" name="meletitis_epwnumia" placeholder="Επωνυμία μελετητή" style="width: 610px" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="3">
                                         <input type="text" name="meletitis_dieuthinsi" placeholder="Διεύθυνση μελετητή" style="width: 610px" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="3">
                                         <input type="text" name="meletitis_perioxi" placeholder="Περιοχή μελετητή" style="width: 610px" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="3">
                                         <input type="text" name="meletitis_tilefwno" placeholder="Μελετητής τηλέφωνο" style="width: 610px" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="3">
                                         <input type="text" name="meletitis_fax" placeholder="Μελετητής Fax" style="width: 610px" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="3">
                                         <input type="text" name="meletitis_email" placeholder="Μελετητής Email" style="width: 610px" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="3">
                                         <input type="text" name="meletitis_ypeuthinos_epikoinwnias" placeholder="Υπεύθυνος επικοινωνίας μελετητή" style="width: 610px" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="3">
                                         <input type="text" name="meletitis_ypeuthinos_tilefwno" placeholder="Υπεύθυνος μελετητή τηλέφωνο" style="width: 610px" required>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td colspan="3">
                                         <input type="text" name="meletitis_ypeuthinos_email" placeholder="Υπεύθυνος μελετητή email" style="width: 610px" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="3">
                                         <input type="text" name="meletitis_ypeuthinos_thesi" placeholder="Θέση υπεύθυνου μελετητή" style="width: 610px" required>
                                    </td>
                                </tr>

                                
                                <tr style="background: #333;">
                                    <td>4. Κατάταξη Έργου ή Δραστηριότητας σύμφωνα με ΥΑ 1958/2012, όπως ισχύει</td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>Υποκατηγορία:</td>
                                    <td colspan="2"></td>
                                </tr>

                                <tr>
                                    <td><select name="category_id"><?php getDocumentCategories();?></select></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>Ομάδα:</td>
                                    <td colspan="2"></td>
                                </tr>

                                <tr>
                                    <td><select name="type_id" style="width: 610px;"><?php getTypes();?></select></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>Α/Α (1-226):</td>
                                    <td colspan="2"></td>
                                </tr>

                                <tr>
                                    <td><input type="number" min="1" max="226" name="aa" required></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr style="background: #333;">
                                    <td>5. Θέση και Διοικητική Υπαγωγή Έργου η Δραστηριότητας</td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>Συντεταγμένες του Έργου * (Για σημειακό ή εκτατικό έργο-δραστηριότητα οι συντεταγμένες δίδονται κεντροβαρικά, ενώ για γραμμικό έργο δίδονται οι συντεταγμένεςτης αρχής, της μέσης και του τέλους )</td>
                                    <td colspan="2"></td>
                                </tr>
                                
                                <tr>
                                    <td>(x,y) στο Εθνικό σύστημα συντεταγμένων ΕΓΣΑ ΄87</td>
                                    <td colspan="2"></td>
                                </tr>

                                <tr>
                                    <td><input type="text" name="egsa87_1" placeholder="(x,y)"></td>
                                    <td colspan="2"></td>
                                </tr>

                                <tr>
                                    <td><input type="text" name="egsa87_2" placeholder="(x,y)"></td>
                                    <td colspan="2"></td>
                                </tr>

                                <tr>
                                    <td><input type="text" name="egsa87_3" placeholder="(x,y)"></td>
                                    <td colspan="2"></td>
                                </tr>

                                <tr>
                                    <td>(φ,λ) στο γεωδαιτικό σύστημα αναφοράς WGS84</td>
                                    <td colspan="2"></td>
                                </tr>
                                
                                <tr>
                                    <td><input type="text" name="wgs84_1" placeholder="(φ,λ)"></td>
                                    <td colspan="2"></td>
                                </tr>

                                <tr>
                                    <td><input type="text" name="wgs84_2" placeholder="(φ,λ)"></td>
                                    <td colspan="2"></td>
                                </tr>

                                <tr>
                                    <td><input type="text" name="wgs84_3" placeholder="(φ,λ)"></td>
                                    <td colspan="2"></td>
                                </tr>

                                <tr>
                                    <td>Περιφέρεια/ες:</td>
                                    <td colspan="2"></td>
                                </tr>

                                <tr>
                                    <td><select name="perifereia_id" style="width: 610px;"><?php getPerifereies();?></select></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>Περιφέρειακή Ενότητα/ες:</td>
                                    <td colspan="2"></td>
                                </tr>

                                <tr>
                                    <td><select name="perifereiaki_enotita_id" style="width: 610px;"><?php getPerifereiakesEnotites();?></select></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>Δήμος/οι:</td>
                                    <td colspan="2"></td>
                                </tr>

                                <tr>
                                    <td><input type="text" name="dimos" placeholder="Δήμος/οι" style="width: 610px;"></td>
                                    <td colspan="2"></td>
                                </tr>
                               
                            </tbody>
                        </table>
                            </br>
                            <input type="submit" class="btn-submit" value="ΥΠΟΒΟΛΗ ΑΙΤΗΣΗΣ"/>
                        </form>
                    </div>
                    <!-- / END #tab1 -->

                    <div id="tab2" class="tabContent">
                       <h2>Two</h2>
                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                   </div>
                   <!-- / END #tab2 -->
                   <div id="tab3" class="tabContent">
                       <h2>Three</h2>
                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                   </div>
                   <!-- / END #tab3 -->
                   <div id="tab4" class="tabContent">
                       <h2>Four</h2>
                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                   </div>
                   <!-- / END #tab4 -->
                   <div id="tab5" class="tabContent">
                       <h2>Five</h2>
                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                   </div>
                   <!-- / END #tab5 -->
               </div>
               <!-- / END .tabContainer -->
           </div>

       </div>

       <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
       <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
       <script src="js/plugins.js"></script>

       <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
       <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    <script>
        $(document).ready(function() {
    //hiding tab content except first one
    $(".tabContent").not(":first").hide(); 
    // adding Active class to first selected tab and show 
    $("ul.tabs li:first").addClass("active").show();  

    // Click event on tab
    $("ul.tabs li").click(function() {
        // Removing class of Active tab
        $("ul.tabs li.active").removeClass("active"); 
        // Adding Active class to Clicked tab
        $(this).addClass("active"); 
        // hiding all the tab contents
        $(".tabContent").hide();        
        // showing the clicked tab's content using fading effect
        $($('a',this).attr("href")).fadeIn('slow'); 

        return false;
    });

});</script>
</body>
</html>
