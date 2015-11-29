<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta charset="utf-8">

	<title>jQuery Accordion Menu</title>

	<link rel="stylesheet" href="./js/accordionmenu.css" type="text/css" media="screen">

	
<style>
.site_body{
    margin: 0;
    pading: 0;
    color: #fff;
    background: repeat #1b1b1b;
    font-size: 14px;
    text-shadow: #050505 0 -1px 0;
    font-weight: bold;
	margin-left: 875px;


}

#admin_footer {
    color: #fff;
    background: #204562;
    border-top: 1px solid #1d3b53;
    padding-left: 20px;
    /* margin-top: 602px; */
    height: 40px;
    line-height: 35px;
    margin-bottom: 0px;
    font-weight: normal;
}
</style>
</head>

<body cz-shortcut-listen="true" class="site_body" >

	<!--<img src="./jQuery Accordion Menu_files/title.png" alt="">-->
    
	<div id="wrapper-250">
            <div class="active" style=" margin-left: -187px;margin-top: 27px;">Dynamic jQuery Accordion </div>
		<ul id="start" class="accordion">
			
			<li id="one" class="files"><a href='' class='active'>Fresh<span></span></a>
			<li id='two' class='files'><a href='' class='active'>Grocry<span></span></a>
                            <li id='three' class='files'><a href='' class='active'>GM<span></span></a>
			

	</div>


	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript">

		$(document).ready(function() {

			// Store variables
			
			var accordion_head = $('.accordion > li > a'),
				accordion_body = $('.accordion li > .sub-menu');

			// Open the first tab on load
accordion_head.addClass('active').next().slideDown('normal');
			//accordion_head.first().addClass('active').next().slideDown('normal');
//accordion_head.second().addClass('active').next().slideDown('normal');
			// Click function
                        
                        
          
        $.ajax({
        dataType : "json",
        type : "POST",
//        data : {
//
//            g_username : $('#u_name').val(),
//
//            g_pwd : $('#p_wd').val()
//
//        },
       url : 'data.php',
        success : function(response) {            //alert(111)
            var color ="";
           var div = "";
           // var divs = "";
            var fresh=""; var non_dip="";
            var grocry="";var mysql="";
            var gm="";var service="";
for (var i = 0; i < response.length; i++)
{
//response[i].status_id==2;
 if(response[i].status_id ==1)
 { color="<span id='success'>success";
     
 }
 else if(response[i].status_id ==2)
 {
     color="<span id='not_run'>Faild";
     }
      else if(response[i].status_id ==3)
 {
     color="<span id='running'>Running";
     }
      else 
 {
     color="<span id='inactive'>InActive";
     }
                 
                 if(response[i].user_id ==1)
                 {
                    // alert(1);
                     var fresh_div = 
			"<ul class='sub-menu' style='display: block;'><li><a href=''<em></em>" + response[i].name + "" + color + "</span></a></li></ul></li>"
					
				fresh=fresh+fresh_div;
                                fresh_div = "";
                               // alert(1);
                               
                                        }	
 if(response[i].user_id ==2)
                 {
                   var   grocry_div = 
			"<ul class='sub-menu' style='display: block;'><li><a href=''<em></em>" + response[i].name + ""+ color +"</span></a></li></ul></li>"
				
                    grocry= grocry+grocry_div;
                                grocry_div = "";
                     }
//                     
                     if(response[i].user_id ==3)
                 {
                    var  gm_div = 
			"<ul class='sub-menu' style='display: block;'><li><a href=''<em></em>" + response[i].name + "" + color +"</span></a></li></ul></li>"
 gm= gm+gm_div;
                                gm_div = "";
////                     
 }
 if(response[i].user_id ==4)
                 {
                    // alert(1);
                     var non_dip_div = 
			"<ul class='sub-menu' style='display: block;'><li><a href=''<em></em>" + response[i].name + "" + color + "</span></a></li></ul></li>"
					
				non_dip=non_dip+non_dip_div;
                                non_dip_div = "";
                               // alert(1);
                               
                                        }	
               if(response[i].user_id ==5)
                 {
                    // alert(1);
                     var mysql_div = 
			"<ul class='sub-menu' style='display: block;'><li><a href=''<em></em>" + response[i].name + "" + color + "</span></a></li></ul></li>"
					
				mysql=mysql+mysql_div;
                                mysql_div = "";
                               // alert(1);
                               
                                        }	
                   
 if(response[i].user_id ==6)
                 {
                    // alert(1);
                     var services_div = 
			"<ul class='sub-menu' style='display: block;'><li><a href=''<em></em>" + response[i].name + "" + color + "</span></a></li></ul></li>"
					
				service=service+services_div;
                                services_div = "";
                               // alert(1);
                               
                                        }	
        }
      $("#one").append(fresh);
      $("#two").append(grocry);
      $("#three").append(gm);
      $("#four").append(non_dip);
      $("#five").append(mysql);
      $("#six").append(service);
        }

    });              
                        

			accordion_head.on('click', function(event) {

				// Disable header links
				
				event.preventDefault();

				// Show and hide the tabs on click

				if ($(this).attr('class') != 'active'){
					accordion_body.slideUp('normal');
					$(this).next().stop(true,true).slideToggle('normal');
					accordion_head.removeClass('active');
					$(this).addClass('active');
				}

			});

		});

	</script>

 <div  id="admin_footer" style=" margin-top: 378px;margin-left: -880px;">Copyright By BackPacker @ All Rights Reserved. </div>

</body></html>