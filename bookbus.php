<!-- <?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
include 'header.php';
?>

<style>

   
    .container{
        border-spacing: 10px;

      font-family: Montserrat, sans-serif;
     font-size: 18px !important;
      border: 2px solid grey;
        margin-top: 30px;
        margin-bottom: 50px;
       padding-top: 50px;
      padding-right: 50px;
      padding-bottom: 50px;
      padding-left: 150px;
      align-content: center;
      height: 35em;
    }
    .button {
  padding: 15px 32px;
  align-content: left;
  color: white;
background-color:black;
    }
#number {
  overflow: hidden;
  width: 600px;
}
input[type=number]{
    width: 250px;
} 
  </style>


  </script>
</head>
<body>
  <h1><center><b><img src="https://img.icons8.com/bubbles/80/000000/bus.png"/>Bus Ticket Booking &nbsp <img src="https://img.icons8.com/officel/54/000000/road.png"/></center></b></h1>
  <form method='post' align='center'>
    <div class="container">
      <section id="form" class="formborder">
        <div class="container2">
          <form>
            <div class="form-row row justify-content-around" name="source">&nbsp
              <div class="form-group col-md-5" name="source">
                <label for="inputEmail4">SOURCE BUS-STOP :</label>    
                <select id="inputState" class="form-control" name="source">
                  <option>Adilabad-ADB</option>
                  <option>Ajjakolu-AJK</option>
                  <option>Akanapet-AKE</option>
                  <option>Aler-ALER</option>
                  <option>Alampur Road-ALPR</option>
                  <option>Alwal-ALW</option>
                  <option>Ammuguda-AMQ</option>
                  <option>Armur-ARMU</option>
                  <option>Arepalli Halt-ARPL</option>
                  <option>Asifabad Road-ASAF</option>
                  <option>Arts College-ATC</option>
                  <option>Aswapuram-AWM</option>
                  <option>Balanagar-BABR</option>
                  <option>Bhadrachalam Road-BDCR</option>
                  <option>Bodhan-BDHN</option>
                  <option>Budvel-BDVL</option>
                  <option>Bhongir-BG</option>
                  <option>Bisugirsharif-BGSF</option>
                  <option>Bona Kalu--BKL</option>
                  <option>Bhiknur-BKU</option>
                  <option>Bolarum-BMO</option>
                  <option>Brahmanapalli-BMPL</option>
                  <option>Begumpet-BMT</option>
                  <option>Bibinagar-BN</option>
                  <option>Bolarum Bazar-BOZ</option>
                  <option>Bellampalli-BPA</option>
                  <option>Burgula-BRGL</option>
                  <option>Basar-BSX</option>
                  <option>Bethampudi-BTPD</option>
                  <option>Charlapalli-CHZ</option>
                  <option>Chinta Kani-CKN</option>
                  <option>Chintalpalli-CLE</option>
                  <option>Chimalpahad-CMW</option>
                  <option>Chitgidda-CTF</option>
                  <option>CTYL-Chityala</option>
                  <option>CVB-Cavalry Barracks</option>
                  <option>DBV-Dabilpur</option>
                  <option>DHP-Dichpalli</option>
                  <option>DKJ-Dornakal Junction</option>
                  <option>DKC-Devarkadra Junction</option>
                  <option>DKUR-Dokur</option>
                  <option>DQR-Dabirpura</option>
                  <option>DRR-Dharur</option>
                  <option>DTP-Divitipalli</option>
                  <option>DYE-Dayanand Nagar</option>
                  <option>FKB-Fakhrabad</option>
                  <option>FM-Falaknuma</option>
                  <option>GDPL-Gundla Pochampally</option>
                  <option>GDQ-Godamgura</option>
                  <option>GDRA-Gangadhara</option>
                  <option>GGD-Gullaguda</option>
                  <option>GHPU-Gandhipuram Halt</option>
                  <option>GLA-Garla</option>
                  <option>GLE-Gajulagudem</option>
                  <option>GLY-Gollapalli</option>
                  <option>GNP-Ghanpur</option>
                  <option>GT-Ghatkesar</option>
                  <option>GUU-Gundratimadugu</option>
                  <option>GWD-Gadwal Junction</option>
                  <option>GWV-Gowdavalli</option>
                  <option>HBLN-HBL Nagar</option>
                  <option>HFZ-Hafizpet</option>
                  <option>-HPG-Huppuguda</option>
                  <option>HSP-Hasanparthi Road</option>
                  <option>HYB-Hyderabad Deccan</option>
                  <option>IDL-Indalvai</option>
                  <option>IKI-Itikyala</option>
                  <option>INK-Intakanne</option>
                  <option>JCL-Jadcherla</option>
                  <option>JKAR-Jaklair</option>
                  <option>JKM-Jankampet Junction</option>
                  <option>JMKT-Jammikunta</option>
                  <option>JOO-Jamai Osmania</option>
                  <option>KCG-Kacheguda</option>
                  <option>KDGL-Kondrapole Halt</option>
                  <option>KDM-Kesamudram</option>
                  <option>KMC-Kamareddi</option>
                  <option>KMT-Khammam</option>
                  <option>KOHR-Kohir Deccan</option>
                  <option>KOLR-Kolanoor</option>
                  <option>KONN-Konnur</option>
                  <option>KOTT-Kottur</option>
                  <option>KPHI-Kothapalli</option>
                  <option>KQD-Khairatabad</option>
                  <option>KQQ-Kaukuntla</option>
                  <option>KRA-Karepalli</option>
                  <option>KRLA-Korutla</option>
                  <option>KSN-Krishna</option>
                  <option>KTKA-Kotakadra</option>
                  <option>KXI-Kurumurthi</option>
                  <option>KYOP-Kottapalli</option>
                  <option>KZJ-Kazipet Junction</option>
                  <option>KZJE-Kazipet E Cabin</option>
                  <option>KZJF-Kazipet F Cabin</option>
                  <option>LGDH-Lalaguda Gate</option>
                  <option>LPI-Lingampalli</option>
                  <option>LPJL-Lingampet - Jagityal</option>
                  <option>MABD-Mahbubabad</option>
                  <option>MBNR-Mahbubnagar</option>
                  <option>MCI-Manchiryal</option>
                  <option>MDPJ-Madanapur Halt</option>
                  <option>MDR-Madhira</option>
                  <option>ME-Masaipet</option>
                  <option>-MED-Medchal</option>
                  <option>MHBT-Mahbubnagar Town Halt</option>
                  <option>MIDP-Mamidipalli</option>
                  <option>MJF-Malkajgiri Junction</option>
                  <option>MLMG-Mallemadugu</option>
                  <option>MLY-Moula Ali</option>
                  <option>MMZ-Mandamari</option>
                  <option>MOA-Manopad</option>
                  <option>MOB-Manoharabad</option>
                  <option>MQN-Manyamkonda</option>
                  <option>MRF-Marpalli</option>
                  <option>MRGA-Miryalaguda</option>
                  <option>MRKL-Marikal</option>
                  <option>MRTD-Morthad</option>
                  <option>MTMI-Motumari Junction</option>
                  <option>MTPI-Metpally</option>
                  <option>MTV-Matalkunta</option>
                  <option>MUGR-Manuguru</option>
                  <option>MVH-Mantatti</option>
                  <option>MWY-Mailaram</option>
                  <option>MXT-Malakpet</option>
                  <option>MZL-Mirzapalli</option>
                  <option>NAW-Nawandgi</option>
                  <option>NKD-Nekonda</option>
                  <option>NLDA-Nalgonda</option>
                  <option>NPL-Nagalapalli</option>
                  <option>NPML-Mallial Nukapalli</option>
                  <option>NRDP-Nagireddipalli</option>
                  <option>NSVP-NPA Shivram Pally</option>
                  <option>NVC-Nagalwancha</option>
                  <option>NVT-Navipet</option>
                  <option>NZB-Nizamabad Junction</option>
                  <option>OEA-Odela</option>
                  <option>OPL-Uppal</option>
                  <option>PASR-Panduranga Swamy Road</option>
                  <option>PBP-Pembarti</option>
                  <option>PCZ-Pocharam</option>
                  <option>PDNA-Peddadinne</option>
                  <option>PDO-Poodoor</option>
                  <option>PDPL-Peddapalli Junction</option>
                  <option>PGP-Pandurangapuram</option>
                  <option>PJPR-Priyadarshini Jurala Project Road</option>
                  <option>PNDP-Pandillapalli</option>
                  <option>PPY-Papatapalli</option>
                  <option>PPZ-Peddampet</option>
                  <option>PQL-Pindial</option>
                  <option>PTKP-Potkapalli</option>
                  <option>PUDR-Podur</option>
                  <option>RAG-Raigir</option>
                  <option>RDM-Ramagundam</option>
                  <option>RECH-Rechni Road</option>
                  <option>RGP-Raghunathpalli</option>
                  <option>RGPM-Raghavapuram</option>
                  <option>RJAP-Rajapur</option>
                  <option>RKO-Ramakistapuram Gate</option>
                  <option>RMNP-Ramannapet</option>
                  <option>-RMY-Rukmapur</option>
                  <option>RPK-Ravulapalli Kalan</option>
                  <option>RRGA-Ranga Reddy Guda</option>
                  <option>RVKH-Ravindrakhani</option>
                  <option>SBBJ-Sri Bala Brahmeswara Jogulamba Halt</option>
                  <option>SC-Secunderabad Junction</option>
                  <option>SCP-Sirnapalli</option>
                  <option>SFX-Safilguda</option>
                  <option>SFX-Safilguda</option>
                  <option>SHAN-Srinivasa Nagar</option>
                  <option>SHNR-Shadnagar</option>
                  <option>SKNR-Shakar Nagar</option>
                  <option>SKP-Shankarpalli</option>
                  <option>SKZR-Sirpur Kaghaznagar</option>
                  <option>SNF-Sanathnagar</option>
                  <option>SNPH-Shankapur Halt</option>
                  <option>SRMR-Shrirampuram</option>
                  <option>SRNR-Sriramnagar</option>
                  <option>SRUR-Sirpur Town</option>
                  <option>SSPD-Sadashivapet Road</option>
                  <option>STDB-Sitafalmandi B Cabin</option>
                  <option>STPD-Sitafal Mandi</option>
                  <option>TAA-Tadla Pusapalli</option>
                  <option>TDU-Tandur</option>
                  <option>THPR-Tippapur</option>
                  <option>TLMG-Talmadugu</option>
                  <option>TMD-Talmadla</option>
                  <option>TMX-Timmapur</option>
                  <option>TNGM-Tondalagopavaram</option>
                  <option>TPPI-Tipparthi</option>
                  <option>TPY-Tadakalpudi</option>
                  <option>UMM-Umram</option>
                  <option>UPW-Uppalavai</option>
                  <option>UR-Umdanagar</option>
                  <option>VAR-Vidya Nagar</option>
                  <option>VKB-Vikarabad Junction</option>
                  <option>VLG-Valigonda</option>
                  <option>VNUP-Vishnupuram</option>
                  <option>WDR-Wadiaram</option>
                  <option>WL-Warangal</option>
                  <option>WP-Wangapalli</option>
                  <option>WPR-Wanaparti Road</option>
                  <option>YDP-Yedapalli</option>
                  <option>YGL-Yelgur</option>
                  <option>YKA-Yakutpura</option>
                  <option>YNG-Yenugonda</option>
                  <option>YP-Errupalem</option>
                  <option>ZB-Zahirabad</option>
                  <option>ZN-Jangaon</option>
                </select>
              </div> 
              <div class="form-group col-md-5" name="dest">
                <label for="inputPassword4"> FINAL BUS-STOP :</label>
                <select id="inputState" class="form-control" name="dest">
                  <option>Adilabad-ADB</option>
                  <option>Ajjakolu-AJK</option>
                  <option>Akanapet-AKE</option>
                  <option>Aler-ALER</option>
                  <option>Alampur Road-ALPR</option>
                  <option>Alwal-ALW</option>
                  <option>Ammuguda-AMQ</option>
                  <option>Armur-ARMU</option>
                  <option>Arepalli Halt-ARPL</option>
                  <option>Asifabad Road-ASAF</option>
                  <option>Arts College-ATC</option>
                  <option>Aswapuram-AWM</option>
                  <option>Balanagar-BABR</option>
                  <option>Bhadrachalam Road-BDCR</option>
                  <option>Bodhan-BDHN</option>
                  <option>Budvel-BDVL</option>
                  <option>Bhongir-BG</option>
                  <option>Bisugirsharif-BGSF</option>
                  <option>Bona Kalu--BKL</option>
                  <option>Bhiknur-BKU</option>
                  <option>Bolarum-BMO</option>
                  <option>Brahmanapalli-BMPL</option>
                  <option>Begumpet-BMT</option>
                  <option>Bibinagar-BN</option>
                  <option>Bolarum Bazar-BOZ</option>
                  <option>Bellampalli-BPA</option>
                  <option>Burgula-BRGL</option>
                  <option>Basar-BSX</option>
                  <option>Bethampudi-BTPD</option>
                  <option>Charlapalli-CHZ</option>
                  <option>Chinta Kani-CKN</option>
                  <option>Chintalpalli-CLE</option>
                  <option>Chimalpahad-CMW</option>
                  <option>Chitgidda-CTF</option>
                  <option>CTYL-Chityala</option>
                  <option>CVB-Cavalry Barracks</option>
                  <option>DBV-Dabilpur</option>
                  <option>DHP-Dichpalli</option>
                  <option>DKJ-Dornakal Junction</option>
                  <option>DKC-Devarkadra Junction</option>
                  <option>DKUR-Dokur</option>
                  <option>DQR-Dabirpura</option>
                  <option>DRR-Dharur</option>
                  <option>DTP-Divitipalli</option>
                  <option>DYE-Dayanand Nagar</option>
                  <option>FKB-Fakhrabad</option>
                  <option>FM-Falaknuma</option>
                  <option>GDPL-Gundla Pochampally</option>
                  <option>GDQ-Godamgura</option>
                  <option>GDRA-Gangadhara</option>
                  <option>GGD-Gullaguda</option>
                  <option>GHPU-Gandhipuram Halt</option>
                  <option>GLA-Garla</option>
                  <option>GLE-Gajulagudem</option>
                  <option>GLY-Gollapalli</option>
                  <option>GNP-Ghanpur</option>
                  <option>GT-Ghatkesar</option>
                  <option>GUU-Gundratimadugu</option>
                  <option>GWD-Gadwal Junction</option>
                  <option>GWV-Gowdavalli</option>
                  <option>HBLN-HBL Nagar</option>
                  <option>HFZ-Hafizpet</option>
                  <option>-HPG-Huppuguda</option>
                  <option>HSP-Hasanparthi Road</option>
                  <option>HYB-Hyderabad Deccan</option>
                  <option>IDL-Indalvai</option>
                  <option>IKI-Itikyala</option>
                  <option>INK-Intakanne</option>
                  <option>JCL-Jadcherla</option>
                  <option>JKAR-Jaklair</option>
                  <option>JKM-Jankampet Junction</option>
                  <option>JMKT-Jammikunta</option>
                  <option>JOO-Jamai Osmania</option>
                  <option>KCG-Kacheguda</option>
                  <option>KDGL-Kondrapole Halt</option>
                  <option>KDM-Kesamudram</option>
                  <option>KMC-Kamareddi</option>
                  <option>KMT-Khammam</option>
                  <option>KOHR-Kohir Deccan</option>
                  <option>KOLR-Kolanoor</option>
                  <option>KONN-Konnur</option>
                  <option>KOTT-Kottur</option>
                  <option>KPHI-Kothapalli</option>
                  <option>KQD-Khairatabad</option>
                  <option>KQQ-Kaukuntla</option>
                  <option>KRA-Karepalli</option>
                  <option>KRLA-Korutla</option>
                  <option>KSN-Krishna</option>
                  <option>KTKA-Kotakadra</option>
                  <option>KXI-Kurumurthi</option>
                  <option>KYOP-Kottapalli</option>
                  <option>KZJ-Kazipet Junction</option>
                  <option>KZJE-Kazipet E Cabin</option>
                  <option>KZJF-Kazipet F Cabin</option>
                  <option>LGDH-Lalaguda Gate</option>
                  <option>LPI-Lingampalli</option>
                  <option>LPJL-Lingampet - Jagityal</option>
                  <option>MABD-Mahbubabad</option>
                  <option>MBNR-Mahbubnagar</option>
                  <option>MCI-Manchiryal</option>
                  <option>MDPJ-Madanapur Halt</option>
                  <option>MDR-Madhira</option>
                  <option>ME-Masaipet</option>
                  <option>-MED-Medchal</option>
                  <option>MHBT-Mahbubnagar Town Halt</option>
                  <option>MIDP-Mamidipalli</option>
                  <option>MJF-Malkajgiri Junction</option>
                  <option>MLMG-Mallemadugu</option>
                  <option>MLY-Moula Ali</option>
                  <option>MMZ-Mandamari</option>
                  <option>MOA-Manopad</option>
                  <option>MOB-Manoharabad</option>
                  <option>MQN-Manyamkonda</option>
                  <option>MRF-Marpalli</option>
                  <option>MRGA-Miryalaguda</option>
                  <option>MRKL-Marikal</option>
                  <option>MRTD-Morthad</option>
                  <option>MTMI-Motumari Junction</option>
                  <option>MTPI-Metpally</option>
                  <option>MTV-Matalkunta</option>
                  <option>MUGR-Manuguru</option>
                  <option>MVH-Mantatti</option>
                  <option>MWY-Mailaram</option>
                  <option>MXT-Malakpet</option>
                  <option>MZL-Mirzapalli</option>
                  <option>NAW-Nawandgi</option>
                  <option>NKD-Nekonda</option>
                  <option>NLDA-Nalgonda</option>
                  <option>NPL-Nagalapalli</option>
                  <option>NPML-Mallial Nukapalli</option>
                  <option>NRDP-Nagireddipalli</option>
                  <option>NSVP-NPA Shivram Pally</option>
                  <option>NVC-Nagalwancha</option>
                  <option>NVT-Navipet</option>
                  <option>NZB-Nizamabad Junction</option>
                  <option>OEA-Odela</option>
                  <option>OPL-Uppal</option>
                  <option>PASR-Panduranga Swamy Road</option>
                  <option>PBP-Pembarti</option>
                  <option>PCZ-Pocharam</option>
                  <option>PDNA-Peddadinne</option>
                  <option>PDO-Poodoor</option>
                  <option>PDPL-Peddapalli Junction</option>
                  <option>PGP-Pandurangapuram</option>
                  <option>PJPR-Priyadarshini Jurala Project Road</option>
                  <option>PNDP-Pandillapalli</option>
                  <option>PPY-Papatapalli</option>
                  <option>PPZ-Peddampet</option>
                  <option>PQL-Pindial</option>
                  <option>PTKP-Potkapalli</option>
                  <option>PUDR-Podur</option>
                  <option>RAG-Raigir</option>
                  <option>RDM-Ramagundam</option>
                  <option>RECH-Rechni Road</option>
                  <option>RGP-Raghunathpalli</option>
                  <option>RGPM-Raghavapuram</option>
                  <option>RJAP-Rajapur</option>
                  <option>RKO-Ramakistapuram Gate</option>
                  <option>RMNP-Ramannapet</option>
                  <option>-RMY-Rukmapur</option>
                  <option>RPK-Ravulapalli Kalan</option>
                  <option>RRGA-Ranga Reddy Guda</option>
                  <option>RVKH-Ravindrakhani</option>
                  <option>SBBJ-Sri Bala Brahmeswara Jogulamba Halt</option>
                  <option>SC-Secunderabad Junction</option>
                  <option>SCP-Sirnapalli</option>
                  <option>SFX-Safilguda</option>
                  <option>SFX-Safilguda</option>
                  <option>SHAN-Srinivasa Nagar</option>
                  <option>SHNR-Shadnagar</option>
                  <option>SKNR-Shakar Nagar</option>
                  <option>SKP-Shankarpalli</option>
                  <option>SKZR-Sirpur Kaghaznagar</option>
                  <option>SNF-Sanathnagar</option>
                  <option>SNPH-Shankapur Halt</option>
                  <option>SRMR-Shrirampuram</option>
                  <option>SRNR-Sriramnagar</option>
                  <option>SRUR-Sirpur Town</option>
                  <option>SSPD-Sadashivapet Road</option>
                  <option>STDB-Sitafalmandi B Cabin</option>
                  <option>STPD-Sitafal Mandi</option>
                  <option>TAA-Tadla Pusapalli</option>
                  <option>TDU-Tandur</option>
                  <option>THPR-Tippapur</option>
                  <option>TLMG-Talmadugu</option>
                  <option>TMD-Talmadla</option>
                  <option>TMX-Timmapur</option>
                  <option>TNGM-Tondalagopavaram</option>
                  <option>TPPI-Tipparthi</option>
                  <option>TPY-Tadakalpudi</option>
                  <option>UMM-Umram</option>
                  <option>UPW-Uppalavai</option>
                  <option>UR-Umdanagar</option>
                  <option>VAR-Vidya Nagar</option>
                  <option>VKB-Vikarabad Junction</option>
                  <option>VLG-Valigonda</option>
                  <option>VNUP-Vishnupuram</option>
                  <option>WDR-Wadiaram</option>
                  <option>WL-Warangal</option>
                  <option>WP-Wangapalli</option>
                  <option>WPR-Wanaparti Road</option>
                  <option>YDP-Yedapalli</option>
                  <option>YGL-Yelgur</option>
                  <option>YKA-Yakutpura</option>
                  <option>YNG-Yenugonda</option>
                  <option>YP-Errupalem</option>
                  <option>ZB-Zahirabad</option>
                  <option>ZN-Jangaon</option>
                </select> 
              </div>
              <center>
                <div class="form-group col-md-5" name="class">
                  <label for="inputPassword4"> Coach Type :</label>
                  <select id="inputState" required class="form-control" name="class">
                    <option>SLEEPER</option>
                    <option>AC</option>
                    <option>NON-AC</option>
                  </select> 
                </div>
                <center><div class="form-group col-md-5" name="type"><label for="inputState">Date :</label>
                <input type ="date" id="inputState" min="<?php echo date('Y-m-d');?>" required class="form-control" name="Date">
              </div>
              <div class="form-row row justify-content-aroundd">
                <div class="form-row row justify-content-aroundd">
                  <div class="form-group col-md-16" >
                    <center><label for="inputState" style="margin-right: 20px;" ><h8>NO OF PASSENGERS :</h8></label></center>
                    <center style="margin-right: 20px;"> <input type="number" name="number" required  min="1"></center>
                  </div>
                  <br>
                  <div>
                    <button type="submit" formaction="busaction.php" class="button" name="login_submit" >Buy a Ticket</button>
                  </div>
                  <div class="form-row row justify-content-aroundd"  >
                    <div class="form-group col-md-16" >
                      <button type="submit" class="button" formaction="busaction1.php"name="login_submit1" ><u>Sell a Ticket?<u></button>  
                    </div>
                  </form>
                </div>
              </section>
            </div>
          </body>
<?php include 'footer.php';
?> 
</html> -->



<!-- Modified Code  -->


<?php
include 'connect.php';
session_start();

if ($_SESSION['log'] == '') {
    header("location:sindex.php");
    exit;
}

include 'header.php';
?>

<style>
    .container {
        border-spacing: 10px;
        font-family: Montserrat, sans-serif;
        font-size: 18px !important;
        border: 2px solid grey;
        margin-top: 30px;
        margin-bottom: 50px;
        padding: 50px;
        align-content: center;
        height: 35em;
    }

    .button {
        padding: 15px 32px;
        align-content: left;
        color: white;
        background-color: black;
    }

    #number {
        overflow: hidden;
        width: 600px;
    }

    input[type=number] {
        width: 250px;
    }
</style>

<h1>
    <center>
        <b>
            <img src="https://img.icons8.com/bubbles/80/000000/bus.png" />
            Bus Ticket Booking &nbsp;
            <img src="https://img.icons8.com/officel/54/000000/road.png" />
        </b>
    </center>
</h1>

<form method='post' align='center'>
    <div class="container">
        <section id="form" class="formborder">
            <div class="container2">
                <form>
                    <div class="form-row row justify-content-around" name="source">
                        &nbsp
                        <div class="form-group col-md-5" name="source">
                            <label for="inputEmail4">SOURCE BUS-STOP :</label>
                            <select id="inputState" class="form-control" name="source">
                              <option>Adilabad-ADB</option>
                              <option>Ajjakolu-AJK</option>
                              <option>Akanapet-AKE</option>
                              <option>Aler-ALER</option>
                              <option>Alampur Road-ALPR</option>
                              <option>Alwal-ALW</option>
                              <option>Ammuguda-AMQ</option>
                              <option>Armur-ARMU</option>
                              <option>Arepalli Halt-ARPL</option>
                              <option>Asifabad Road-ASAF</option>
                              <option>Arts College-ATC</option>
                              <option>Aswapuram-AWM</option>
                              <option>Balanagar-BABR</option>
                              <option>Bhadrachalam Road-BDCR</option>
                              <option>Bodhan-BDHN</option>
                              <option>Budvel-BDVL</option>
                              <option>Bhongir-BG</option>
                              <option>Bisugirsharif-BGSF</option>
                              <option>Bona Kalu--BKL</option>
                              <option>Bhiknur-BKU</option>
                              <option>Bolarum-BMO</option>
                              <option>Brahmanapalli-BMPL</option>
                              <option>Begumpet-BMT</option>
                              <option>Bibinagar-BN</option>
                              <option>Bolarum Bazar-BOZ</option>
                              <option>Bellampalli-BPA</option>
                              <option>Burgula-BRGL</option>
                              <option>Basar-BSX</option>
                              <option>Bethampudi-BTPD</option>
                              <option>Charlapalli-CHZ</option>
                              <option>Chinta Kani-CKN</option>
                              <option>Chintalpalli-CLE</option>
                              <option>Chimalpahad-CMW</option>
                              <option>Chitgidda-CTF</option>
                              <option>CTYL-Chityala</option>
                              <option>CVB-Cavalry Barracks</option>
                              <option>DBV-Dabilpur</option>
                              <option>DHP-Dichpalli</option>
                              <option>DKJ-Dornakal Junction</option>
                              <option>DKC-Devarkadra Junction</option>
                              <option>DKUR-Dokur</option>
                              <option>DQR-Dabirpura</option>
                              <option>DRR-Dharur</option>
                              <option>DTP-Divitipalli</option>
                              <option>DYE-Dayanand Nagar</option>
                              <option>FKB-Fakhrabad</option>
                              <option>FM-Falaknuma</option>
                              <option>GDPL-Gundla Pochampally</option>
                              <option>GDQ-Godamgura</option>
                              <option>GDRA-Gangadhara</option>
                              <option>GGD-Gullaguda</option>
                              <option>GHPU-Gandhipuram Halt</option>
                              <option>GLA-Garla</option>
                              <option>GLE-Gajulagudem</option>
                              <option>GLY-Gollapalli</option>
                              <option>GNP-Ghanpur</option>
                              <option>GT-Ghatkesar</option>
                              <option>GUU-Gundratimadugu</option>
                              <option>GWD-Gadwal Junction</option>
                              <option>GWV-Gowdavalli</option>
                              <option>HBLN-HBL Nagar</option>
                              <option>HFZ-Hafizpet</option>
                              <option>-HPG-Huppuguda</option>
                              <option>HSP-Hasanparthi Road</option>
                              <option>HYB-Hyderabad Deccan</option>
                              <option>IDL-Indalvai</option>
                              <option>IKI-Itikyala</option>
                              <option>INK-Intakanne</option>
                              <option>JCL-Jadcherla</option>
                              <option>JKAR-Jaklair</option>
                              <option>JKM-Jankampet Junction</option>
                              <option>JMKT-Jammikunta</option>
                              <option>JOO-Jamai Osmania</option>
                              <option>KCG-Kacheguda</option>
                              <option>KDGL-Kondrapole Halt</option>
                              <option>KDM-Kesamudram</option>
                              <option>KMC-Kamareddi</option>
                              <option>KMT-Khammam</option>
                              <option>KOHR-Kohir Deccan</option>
                              <option>KOLR-Kolanoor</option>
                              <option>KONN-Konnur</option>
                              <option>KOTT-Kottur</option>
                              <option>KPHI-Kothapalli</option>
                              <option>KQD-Khairatabad</option>
                              <option>KQQ-Kaukuntla</option>
                              <option>KRA-Karepalli</option>
                              <option>KRLA-Korutla</option>
                              <option>KSN-Krishna</option>
                              <option>KTKA-Kotakadra</option>
                              <option>KXI-Kurumurthi</option>
                              <option>KYOP-Kottapalli</option>
                              <option>KZJ-Kazipet Junction</option>
                              <option>KZJE-Kazipet E Cabin</option>
                              <option>KZJF-Kazipet F Cabin</option>
                              <option>LGDH-Lalaguda Gate</option>
                              <option>LPI-Lingampalli</option>
                              <option>LPJL-Lingampet - Jagityal</option>
                              <option>MABD-Mahbubabad</option>
                              <option>MBNR-Mahbubnagar</option>
                              <option>MCI-Manchiryal</option>
                              <option>MDPJ-Madanapur Halt</option>
                              <option>MDR-Madhira</option>
                              <option>ME-Masaipet</option>
                              <option>-MED-Medchal</option>
                              <option>MHBT-Mahbubnagar Town Halt</option>
                              <option>MIDP-Mamidipalli</option>
                              <option>MJF-Malkajgiri Junction</option>
                              <option>MLMG-Mallemadugu</option>
                              <option>MLY-Moula Ali</option>
                              <option>MMZ-Mandamari</option>
                              <option>MOA-Manopad</option>
                              <option>MOB-Manoharabad</option>
                              <option>MQN-Manyamkonda</option>
                              <option>MRF-Marpalli</option>
                              <option>MRGA-Miryalaguda</option>
                              <option>MRKL-Marikal</option>
                              <option>MRTD-Morthad</option>
                              <option>MTMI-Motumari Junction</option>
                              <option>MTPI-Metpally</option>
                              <option>MTV-Matalkunta</option>
                              <option>MUGR-Manuguru</option>
                              <option>MVH-Mantatti</option>
                              <option>MWY-Mailaram</option>
                              <option>MXT-Malakpet</option>
                              <option>MZL-Mirzapalli</option>
                              <option>NAW-Nawandgi</option>
                              <option>NKD-Nekonda</option>
                              <option>NLDA-Nalgonda</option>
                              <option>NPL-Nagalapalli</option>
                              <option>NPML-Mallial Nukapalli</option>
                              <option>NRDP-Nagireddipalli</option>
                              <option>NSVP-NPA Shivram Pally</option>
                              <option>NVC-Nagalwancha</option>
                              <option>NVT-Navipet</option>
                              <option>NZB-Nizamabad Junction</option>
                              <option>OEA-Odela</option>
                              <option>OPL-Uppal</option>
                              <option>PASR-Panduranga Swamy Road</option>
                              <option>PBP-Pembarti</option>
                              <option>PCZ-Pocharam</option>
                              <option>PDNA-Peddadinne</option>
                              <option>PDO-Poodoor</option>
                              <option>PDPL-Peddapalli Junction</option>
                              <option>PGP-Pandurangapuram</option>
                              <option>PJPR-Priyadarshini Jurala Project Road</option>
                              <option>PNDP-Pandillapalli</option>
                              <option>PPY-Papatapalli</option>
                              <option>PPZ-Peddampet</option>
                              <option>PQL-Pindial</option>
                              <option>PTKP-Potkapalli</option>
                              <option>PUDR-Podur</option>
                              <option>RAG-Raigir</option>
                              <option>RDM-Ramagundam</option>
                              <option>RECH-Rechni Road</option>
                              <option>RGP-Raghunathpalli</option>
                              <option>RGPM-Raghavapuram</option>
                              <option>RJAP-Rajapur</option>
                              <option>RKO-Ramakistapuram Gate</option>
                              <option>RMNP-Ramannapet</option>
                              <option>-RMY-Rukmapur</option>
                              <option>RPK-Ravulapalli Kalan</option>
                              <option>RRGA-Ranga Reddy Guda</option>
                              <option>RVKH-Ravindrakhani</option>
                              <option>SBBJ-Sri Bala Brahmeswara Jogulamba Halt</option>
                              <option>SC-Secunderabad Junction</option>
                              <option>SCP-Sirnapalli</option>
                              <option>SFX-Safilguda</option>
                              <option>SFX-Safilguda</option>
                              <option>SHAN-Srinivasa Nagar</option>
                              <option>SHNR-Shadnagar</option>
                              <option>SKNR-Shakar Nagar</option>
                              <option>SKP-Shankarpalli</option>
                              <option>SKZR-Sirpur Kaghaznagar</option>
                              <option>SNF-Sanathnagar</option>
                              <option>SNPH-Shankapur Halt</option>
                              <option>SRMR-Shrirampuram</option>
                              <option>SRNR-Sriramnagar</option>
                              <option>SRUR-Sirpur Town</option>
                              <option>SSPD-Sadashivapet Road</option>
                              <option>STDB-Sitafalmandi B Cabin</option>
                              <option>STPD-Sitafal Mandi</option>
                              <option>TAA-Tadla Pusapalli</option>
                              <option>TDU-Tandur</option>
                              <option>THPR-Tippapur</option>
                              <option>TLMG-Talmadugu</option>
                              <option>TMD-Talmadla</option>
                              <option>TMX-Timmapur</option>
                              <option>TNGM-Tondalagopavaram</option>
                              <option>TPPI-Tipparthi</option>
                              <option>TPY-Tadakalpudi</option>
                              <option>UMM-Umram</option>
                              <option>UPW-Uppalavai</option>
                              <option>UR-Umdanagar</option>
                              <option>VAR-Vidya Nagar</option>
                              <option>VKB-Vikarabad Junction</option>
                              <option>VLG-Valigonda</option>
                              <option>VNUP-Vishnupuram</option>
                              <option>WDR-Wadiaram</option>
                              <option>WL-Warangal</option>
                              <option>WP-Wangapalli</option>
                              <option>WPR-Wanaparti Road</option>
                              <option>YDP-Yedapalli</option>
                              <option>YGL-Yelgur</option>
                              <option>YKA-Yakutpura</option>
                              <option>YNG-Yenugonda</option>
                              <option>YP-Errupalem</option>
                              <option>ZB-Zahirabad</option>
                              <option>ZN-Jangaon</option>
                            </select>
                        </div>
                        <div class="form-group col-md-5" name="dest">
                            <label for="inputPassword4">FINAL BUS-STOP :</label>
                            <select id="inputState" class="form-control" name="dest">
                            <option>Adilabad-ADB</option>
                            <option>Ajjakolu-AJK</option>
                            <option>Akanapet-AKE</option>
                            <option>Aler-ALER</option>
                            <option>Alampur Road-ALPR</option>
                            <option>Alwal-ALW</option>
                            <option>Ammuguda-AMQ</option>
                            <option>Armur-ARMU</option>
                            <option>Arepalli Halt-ARPL</option>
                            <option>Asifabad Road-ASAF</option>
                            <option>Arts College-ATC</option>
                            <option>Aswapuram-AWM</option>
                            <option>Balanagar-BABR</option>
                            <option>Bhadrachalam Road-BDCR</option>
                            <option>Bodhan-BDHN</option>
                            <option>Budvel-BDVL</option>
                            <option>Bhongir-BG</option>
                            <option>Bisugirsharif-BGSF</option>
                            <option>Bona Kalu--BKL</option>
                            <option>Bhiknur-BKU</option>
                            <option>Bolarum-BMO</option>
                            <option>Brahmanapalli-BMPL</option>
                            <option>Begumpet-BMT</option>
                            <option>Bibinagar-BN</option>
                            <option>Bolarum Bazar-BOZ</option>
                            <option>Bellampalli-BPA</option>
                            <option>Burgula-BRGL</option>
                            <option>Basar-BSX</option>
                            <option>Bethampudi-BTPD</option>
                            <option>Charlapalli-CHZ</option>
                            <option>Chinta Kani-CKN</option>
                            <option>Chintalpalli-CLE</option>
                            <option>Chimalpahad-CMW</option>
                            <option>Chitgidda-CTF</option>
                            <option>CTYL-Chityala</option>
                            <option>CVB-Cavalry Barracks</option>
                            <option>DBV-Dabilpur</option>
                            <option>DHP-Dichpalli</option>
                            <option>DKJ-Dornakal Junction</option>
                            <option>DKC-Devarkadra Junction</option>
                            <option>DKUR-Dokur</option>
                            <option>DQR-Dabirpura</option>
                            <option>DRR-Dharur</option>
                            <option>DTP-Divitipalli</option>
                            <option>DYE-Dayanand Nagar</option>
                            <option>FKB-Fakhrabad</option>
                            <option>FM-Falaknuma</option>
                            <option>GDPL-Gundla Pochampally</option>
                            <option>GDQ-Godamgura</option>
                            <option>GDRA-Gangadhara</option>
                            <option>GGD-Gullaguda</option>
                            <option>GHPU-Gandhipuram Halt</option>
                            <option>GLA-Garla</option>
                            <option>GLE-Gajulagudem</option>
                            <option>GLY-Gollapalli</option>
                            <option>GNP-Ghanpur</option>
                            <option>GT-Ghatkesar</option>
                            <option>GUU-Gundratimadugu</option>
                            <option>GWD-Gadwal Junction</option>
                            <option>GWV-Gowdavalli</option>
                            <option>HBLN-HBL Nagar</option>
                            <option>HFZ-Hafizpet</option>
                            <option>-HPG-Huppuguda</option>
                            <option>HSP-Hasanparthi Road</option>
                            <option>HYB-Hyderabad Deccan</option>
                            <option>IDL-Indalvai</option>
                            <option>IKI-Itikyala</option>
                            <option>INK-Intakanne</option>
                            <option>JCL-Jadcherla</option>
                            <option>JKAR-Jaklair</option>
                            <option>JKM-Jankampet Junction</option>
                            <option>JMKT-Jammikunta</option>
                            <option>JOO-Jamai Osmania</option>
                            <option>KCG-Kacheguda</option>
                            <option>KDGL-Kondrapole Halt</option>
                            <option>KDM-Kesamudram</option>
                            <option>KMC-Kamareddi</option>
                            <option>KMT-Khammam</option>
                            <option>KOHR-Kohir Deccan</option>
                            <option>KOLR-Kolanoor</option>
                            <option>KONN-Konnur</option>
                            <option>KOTT-Kottur</option>
                            <option>KPHI-Kothapalli</option>
                            <option>KQD-Khairatabad</option>
                            <option>KQQ-Kaukuntla</option>
                            <option>KRA-Karepalli</option>
                            <option>KRLA-Korutla</option>
                            <option>KSN-Krishna</option>
                            <option>KTKA-Kotakadra</option>
                            <option>KXI-Kurumurthi</option>
                            <option>KYOP-Kottapalli</option>
                            <option>KZJ-Kazipet Junction</option>
                            <option>KZJE-Kazipet E Cabin</option>
                            <option>KZJF-Kazipet F Cabin</option>
                            <option>LGDH-Lalaguda Gate</option>
                            <option>LPI-Lingampalli</option>
                            <option>LPJL-Lingampet - Jagityal</option>
                            <option>MABD-Mahbubabad</option>
                            <option>MBNR-Mahbubnagar</option>
                            <option>MCI-Manchiryal</option>
                            <option>MDPJ-Madanapur Halt</option>
                            <option>MDR-Madhira</option>
                            <option>ME-Masaipet</option>
                            <option>-MED-Medchal</option>
                            <option>MHBT-Mahbubnagar Town Halt</option>
                            <option>MIDP-Mamidipalli</option>
                            <option>MJF-Malkajgiri Junction</option>
                            <option>MLMG-Mallemadugu</option>
                            <option>MLY-Moula Ali</option>
                            <option>MMZ-Mandamari</option>
                            <option>MOA-Manopad</option>
                            <option>MOB-Manoharabad</option>
                            <option>MQN-Manyamkonda</option>
                            <option>MRF-Marpalli</option>
                            <option>MRGA-Miryalaguda</option>
                            <option>MRKL-Marikal</option>
                            <option>MRTD-Morthad</option>
                            <option>MTMI-Motumari Junction</option>
                            <option>MTPI-Metpally</option>
                            <option>MTV-Matalkunta</option>
                            <option>MUGR-Manuguru</option>
                            <option>MVH-Mantatti</option>
                            <option>MWY-Mailaram</option>
                            <option>MXT-Malakpet</option>
                            <option>MZL-Mirzapalli</option>
                            <option>NAW-Nawandgi</option>
                            <option>NKD-Nekonda</option>
                            <option>NLDA-Nalgonda</option>
                            <option>NPL-Nagalapalli</option>
                            <option>NPML-Mallial Nukapalli</option>
                            <option>NRDP-Nagireddipalli</option>
                            <option>NSVP-NPA Shivram Pally</option>
                            <option>NVC-Nagalwancha</option>
                            <option>NVT-Navipet</option>
                            <option>NZB-Nizamabad Junction</option>
                            <option>OEA-Odela</option>
                            <option>OPL-Uppal</option>
                            <option>PASR-Panduranga Swamy Road</option>
                            <option>PBP-Pembarti</option>
                            <option>PCZ-Pocharam</option>
                            <option>PDNA-Peddadinne</option>
                            <option>PDO-Poodoor</option>
                            <option>PDPL-Peddapalli Junction</option>
                            <option>PGP-Pandurangapuram</option>
                            <option>PJPR-Priyadarshini Jurala Project Road</option>
                            <option>PNDP-Pandillapalli</option>
                            <option>PPY-Papatapalli</option>
                            <option>PPZ-Peddampet</option>
                            <option>PQL-Pindial</option>
                            <option>PTKP-Potkapalli</option>
                            <option>PUDR-Podur</option>
                            <option>RAG-Raigir</option>
                            <option>RDM-Ramagundam</option>
                            <option>RECH-Rechni Road</option>
                            <option>RGP-Raghunathpalli</option>
                            <option>RGPM-Raghavapuram</option>
                            <option>RJAP-Rajapur</option>
                            <option>RKO-Ramakistapuram Gate</option>
                            <option>RMNP-Ramannapet</option>
                            <option>-RMY-Rukmapur</option>
                            <option>RPK-Ravulapalli Kalan</option>
                            <option>RRGA-Ranga Reddy Guda</option>
                            <option>RVKH-Ravindrakhani</option>
                            <option>SBBJ-Sri Bala Brahmeswara Jogulamba Halt</option>
                            <option>SC-Secunderabad Junction</option>
                            <option>SCP-Sirnapalli</option>
                            <option>SFX-Safilguda</option>
                            <option>SFX-Safilguda</option>
                            <option>SHAN-Srinivasa Nagar</option>
                            <option>SHNR-Shadnagar</option>
                            <option>SKNR-Shakar Nagar</option>
                            <option>SKP-Shankarpalli</option>
                            <option>SKZR-Sirpur Kaghaznagar</option>
                            <option>SNF-Sanathnagar</option>
                            <option>SNPH-Shankapur Halt</option>
                            <option>SRMR-Shrirampuram</option>
                            <option>SRNR-Sriramnagar</option>
                            <option>SRUR-Sirpur Town</option>
                            <option>SSPD-Sadashivapet Road</option>
                            <option>STDB-Sitafalmandi B Cabin</option>
                            <option>STPD-Sitafal Mandi</option>
                            <option>TAA-Tadla Pusapalli</option>
                            <option>TDU-Tandur</option>
                            <option>THPR-Tippapur</option>
                            <option>TLMG-Talmadugu</option>
                            <option>TMD-Talmadla</option>
                            <option>TMX-Timmapur</option>
                            <option>TNGM-Tondalagopavaram</option>
                            <option>TPPI-Tipparthi</option>
                            <option>TPY-Tadakalpudi</option>
                            <option>UMM-Umram</option>
                            <option>UPW-Uppalavai</option>
                            <option>UR-Umdanagar</option>
                            <option>VAR-Vidya Nagar</option>
                            <option>VKB-Vikarabad Junction</option>
                            <option>VLG-Valigonda</option>
                            <option>VNUP-Vishnupuram</option>
                            <option>WDR-Wadiaram</option>
                            <option>WL-Warangal</option>
                            <option>WP-Wangapalli</option>
                            <option>WPR-Wanaparti Road</option>
                            <option>YDP-Yedapalli</option>
                            <option>YGL-Yelgur</option>
                            <option>YKA-Yakutpura</option>
                            <option>YNG-Yenugonda</option>
                            <option>YP-Errupalem</option>
                            <option>ZB-Zahirabad</option>
                            <option>ZN-Jangaon</option>
                            </select>
                        </div>
                    </div>
                    <center>
                        <div class="form-group col-md-5" name="class">
                            <label for="inputPassword4">Coach Type :</label>
                            <select id="inputState" required class="form-control" name="class">
                                <option>SLEEPER</option>
                                <option>AC</option>
                                <option>NON-AC</option>
                            </select>
                        </div>
                    </center>
                    <center>
                        <div class="form-group col-md-5" name="type">
                            <label for="inputState">Date :</label>
                            <input type="date" id="inputState" min="<?php echo date('Y-m-d');?>" required class="form-control" name="Date">
                        </div>
                        <div class="form-row row justify-content-aroundd">
                            <div class="form-row row justify-content-aroundd">
                                <div class="form-group col-md-16">
                                    <center>
                                        <label for="inputState" style="margin-right: 20px;">
                                            <h8>NO OF PASSENGERS :</h8>
                                        </label>
                                    </center>
                                    <center style="margin-right: 20px;">
                                        <input type="number" name="number" required min="1">
                                    </center>
                                </div>
                                <br>
                                <div>
                                    <button type="submit" formaction="busaction.php" class="button" name="login_submit">Buy a Ticket</button>
                                </div>
                                <div class="form-row row justify-content-aroundd">
                                    <div class="form-group col-md-16">
                                        <button type="submit" class="button" formaction="busaction1.php" name="login_submit1">
                                            <u>Sell a Ticket?</u>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </section>
    </div>
</form>

<?php include 'footer.php'; ?>
</html>
