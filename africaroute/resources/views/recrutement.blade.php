@extends ('base')

@section ('content')

<style>

.longa{
   
    background-color:gray;
}
.longb{
    
    background-color:green;
}
.ban1{
    background-color:red;
    padding:20px;
}
.cadre3{
    background-color:palegreen;
   
}
.cadre1{
    background-color:blue;
   
    
}
.cadre2{
    background-color:green;
    
}
.cadre3{
    background-color:yellow;
    
}
.recrut{
    width:25%;
    height:50%;
}
.recrute{
    padding:10px;
    
}


</style>


     <!--container englobe tout-->
    <div class="container-fluid fmod2">
        <div class="row justify-content-around">
            <div class="col-12 longa">
                <!--container englobe 1-->
                <div class="container-fluid ">
                     <!--ligne  1-->
                    <div class="row">
                        <div class="col-12 ban1">
                            <img style="width:100%;" src="image/ba.jpeg" class=" card img-fluid" alt=""/>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6  cadre3 d-flex flex-column">
                            <div class="recrute card">
                              <h3>Recrutement de:<small>Poste de .....</small></h3>
                              <h5>Nom de l'entreprise</h5>
                              <p style=" word-wrap:break-word;">kfffffffffffffffffnnnnnnnnnnnnnnnhhhhhhhhhhhhhhhhhhhhhhhhhhffffffffffffffffffffffffjjjjjjjjjjjjjjjjjjjjjjjjjjj</p>
                              <small class="text-end" >lundi 22 Juin 2023</small>
                            </div>
                          </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 recrute cadre2">
                            <h5>Information supplémentaire </h5>
                            <div class="row">
                                <div class="col-lg-12  ">
                                    <img src="image/ba.jpeg" class="img-fluid  img-thumbnail rounded" alt=""/>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-lg-12 d-flex flex-column ">
                                    <h2>Site Web : <small style=" word-wrap:break-word;">www..w.kjjjjjjjjehhhhheeeeeeeee.com</small></h2>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 cadre1">
                            <div style="height:115px;" class="viz"></div>
                        </div>
                        <div class="col-8 cadre2 d-flex">
                        <div class="recrute card">
                              <h3>Recrutement de:<small>Poste de .....</small></h3>
                              <h5>Nom de l'entreprise</h5>
                              <small style=" word-wrap:break-word;">kfffffffffffffffffnnnnnnnnnnnnnnnhhhhhhhhhhhhhhhhhhhhhhhhhhffffffffffffffffffffffffjjjjjjjjjjjjjjjjjjjjjjjjjjj</small>
                              <small style="font-size:x-small;font-weight:bold; " class="text-right" >lundi 22 Juin 2023</small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 cadre1">

                        </div>
                        <div class="col-6 cadre3">

                        </div>
                    </div>

                </div>



            </div>

        </div>
    </div>

    <script>
setTimeout(()=>{

    alert('site modal');
},2000)
        
    </script>
@endsection