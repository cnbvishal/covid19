
<?php
  include'link/links.php'; 
  include'css/style.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg nav_style p-3"> 
    <div class="container-fluid">
        <a class="navbar-brand pl-5" href="#">COVID-19</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto pr-5">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#aboutid">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#sympid">Symptoms</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#preventid">Prevention</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#totalcaseid">indiacorona</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#contactid">Contact</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
     <div class="main_header">
         <div class="row h-100 w-100">
             <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
                    <div class="leftside w-100 h-100 d-flex justify-content-center
                    align-items-center">

                    <img src="image/humain.png" class="img-fluid">
                </div>
              </div>

              <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1 m">  
                <div class="rightside w-100 h-100 d-flex justify-content-center
                    align-items-center">
                 <h1>Lets Stay Safe & Fight Together Against cor<span class="corona_rotate"> <img src="image/corona1.jpg"width="60" height="60">
                 </span>na Virus</h1>
               </div>
             </div>
           </div>
         </div>
         <section class="corona_update container-fluid" id="totalcaseid">
             <div class="mb-5">
                 <h3 class="text-center text-uppercase">COVID-19 UPDATES OF THE WORLD</h3>
             </div>
             <div class="table-responsive">
                 <table class="table table-borderd table-striped text-center" id="tbval">
                    <thead>
                        <tr>
                        
                        <th class="text-capitalize">state</th>
                        <th class="text-capitalize">Confirmed</th>
                        <th class="text-capitalize">Recovered</th>
                        <th class="text-capitalize">Deaths</th>
                        <th class="text-capitalize">totalConfirmed</th>
                        <th class="text-capitalize">lastRefreshed</th>
                        </tr>

                        
         
                    <?php
                      // from here we started the api data fetching.

                        $data = file_get_contents('https://api.rootnet.in/covid19-in/stats/latest');
                        $coranalive = json_decode($data, true);
                        // print_r($coranalive);die;
                
                        // $statescount = count($coranalive [0]);
                               


                        $i=1;
                        while($i < 36)
                        {
                            ?>
                            <tr>
                                <td><?php echo $coranalive['data']['regional'][$i]['loc'] ?></td>
                                <td><?php echo $coranalive['data']['regional'][$i]['confirmedCasesIndian'] ?></td>
                                <td><?php echo $coranalive['data']['regional'][$i]['discharged'] ?></td>
                                <td><?php echo $coranalive['data']['regional'][$i]['deaths'] ?></td>
                                <td><?php echo $coranalive['data']['regional'][$i]['totalConfirmed'] ?></td>  
                                <td><?php echo $coranalive['lastRefreshed']?></td>
                            </tr>
                         <?php
                        $i++;
                 }
                  ?>
            </table>
            </div>
           </section>
        <!-- *******************corona latest updates***************** -->
     <!--    <section class="corona_update">
            <div clas="mb-3">
               <h3 class="text-uppercase text-center">covid-19 updates</h3>
            </div>
            <div class="d-flex justify-content-around align-items-center">
                <div>
                    <h1 class="count">15724356</h1>
                    <p>Passengers screened at airpot</p>
                </div>

                <div>
                    <h1 class="count">512</h1>
                    <p>Active COVID-19 cases</p>
                </div>

                <div>
                    <h1 class="count">40</h1>
                    <p>Cured/Discharged cases</p>
                </div>

                <div>
                    <h1 class="count">9</h1>
                    <p>Death cases</p>
                </div>

            </div>

        </section> -->

        <!--*******************about section****************************************-->
        <div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
            <div class="section-header text-center mb-5 mt-4">
                <h1>About COVID-19</h1>
            </div>
            <div class="row pt-5">
                <div class="col-lg-5 col-md-5 col-12">
                    <img src="image/about1.jpg" class="img-fluid">
                </div>
                  <div class="col-lg-6 col-md-6 col-12 ml-5">
                     <h2>What is covid19(corona-Virus)?</h2>
                     <p>Coronavirus disease (COVID-19) is an infectious disease caused by the SARS-CoV-2 virus.
                     </p>
                     <p>Most people infected with the virus will experience mild to moderate respiratory illness and recover without requiring special treatment. However, some will become seriously ill and require medical attention. 
                         Older people and those with underlying medical conditions like cardiovascular disease, diabetes, chronic respiratory disease, or cancer are more likely to develop serious illness.
                          Anyone can get sick with COVID-19 and become seriously ill or die at any age.
                          The virus can spread from an infected person’s mouth or nose in small liquid particles when they cough, sneeze, speak, sing or breathe. 
                          These particles range from larger respiratory droplets to smaller aerosols.
                         </p>                 
                  </div>
            </div>
        </div>
      <!--***************************corona symptoms************************-->
      <div class="container-fluid pt-5 pb-5"id="sympid">
            <div class="section-header text-center mb-5 mt-4">
                <h1>coronavirus symptoms</h1>
            </div>
             
            <div class="container">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-12 mt-5">
                   <figure class="text-center">
                      <img src="image/cough.png" class="img-fluid" width="120" height="120">
                      <figcaption>cough</figcaption>
                   </figure>
                  </div>

                  <div class="col-lg-4 col-md-4 col-12 mt-5">
                   <figure class="text-center">
                      <img src="image/runnynose.jpg" class="img-fluid" width="120" height="120">
                      <figcaption>runnynose</figcaption>
                   </figure>
                  </div>

                  <div class="col-lg-4 col-md-4 col-12 mt-5">
                   <figure class="text-center">
                      <img src="image/fever.png" class="img-fluid" width="120" height="120">
                      <figcaption>fever</figcaption>
                   </figure>
                  </div>

                  <div class="col-lg-4 col-md-4 col-12 mt-5">
                   <figure class="text-center">
                      <img src="image/cold.jpg" class="img-fluid" width="120" height="120">
                      <figcaption>cold</figcaption>
                   </figure>
                  </div>

                  <div class="col-lg-4 col-md-4 col-12 mt-5">
                   <figure class="text-center">
                      <img src="image/tired2.jpg" class="img-fluid" width="120" height="120">
                      <figcaption>tiredness</figcaption>
                   </figure>
                  </div>

                  <div class="col-lg-4 col-md-4 col-12 mt-5">
                   <figure class="text-center">
                      <img src="image/breathing.jpg" class="img-fluid" width="120" height="120">
                      <figcaption>difficulty breathing(serve cases)</figcaption>
                   </figure>
                  </div>
                </div>
            </div>

            <!--***************************6 Steps Preventation Against Coronavirus ************************-->
      <div class="container-fluid sub_section pt-5 pb-5" id="preventid">
            <div class="section-header text-center mb-5 mt-4">
                <h1>6 Steps Preventation Against Coronavirus</h1>
            </div>
            <div class="text-center">
            <p >1.Wash your hands thoroughly with soap and warm water or with an alcohol-based hand sanitizer</p>
            <p>2.Take hot shower or steamy shower to relieve sore, scratchy throat and cough </p>
            <p>3.Keep your hands and fingers away from your eyes, nose, and mouth</p>
            <p>4.Avoid close contact with people who are infected</p>
            <p>5.Setup humidifier in your home</p>
            <p>6.Drink plenty of fluids</p>
            </div>
      </div>
          <!--***************************Contact Us ASAP************************-->
      <div class="container-fluid pt-5 pb-5"id="contactid">
            <div class="section-header text-center mb-5 mt-4">
                <h1>Contact Us ASAP</h1>
            </div>
                <div class="container">
                <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                  <form>
                  <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" placeholder="
                        name"autocomplete="off" required>
                       </div>

                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="
                        name@example.com"autocomplete="off" required>
                       </div>
                       <div class="form-group">
                       <label>Mobile</label>
                        <input type="number" class="form-control" name="mobile" placeholder="
                        mobile"autocomplete="off" required>
                       </div>


                       <div class="form-group">
                        <label>Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                     </form>
                    </div>
                </div>
            </div>
      </div>
         <!--***************************footer************************-->
         <footer class="mt-5">
          <div class="footer_style text-white text-center container-fluid">
              <p>copyright by Vishalraj</p>

          </div>
         </footer>

        </body>
     </html>


         
  