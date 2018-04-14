var mainproperties={
	init:function(){
		this.removeUnderlineAnimation();
		this.IsMobileDevice();
		this.HeightOverflow();
		this.ChangeSkillsPage();
		this.contactBody();
		this.MakeResponsive();
	},
        removeUnderlineAnimation:function()
        {
		var _this = this;
		var mobiledeviceWidth = window.matchMedia('only screen and (max-width: 767px)').matches;

                if(mobiledeviceWidth || (_this.IsMobileDevice() == true))
                {
                        $("li").removeClass("underline-opening");
                }

        },
	IsMobileDevice:function()
	{
		var isMobile = false; //initiate as false
	// device detection
	if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
	    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4)))
	    {
		 isMobile = true;
	    }

	    return isMobile

    },
    HeightOverflow:function(){
	     var _this = this;
	     var deviceScreenHeight = window.matchMedia('only screen and (max-height: 1300px)').matches;
	     var browser = _this.checkBrowser();
	     var mobileDevice = _this.IsMobileDevice();

	     var current_width = $(window).width();
	     var current_height = $(window).height();
	     current_width = current_width + 16;


	     if($(window).width() <= 1440)
	     {
		  $(".experience-timeline").css({"height":"initial"});
	     }


	     if(deviceScreenHeight)
	     {
		     if(browser == "Firefox")
		     {
			     $(".js .page").css({"width":current_width});
		     }
	     }

	     if(browser == "Firefox" && current_width < 768 && mobileDevice)
	     {
		     $(".js .pages-stack").css({"z-index":"0"});
		     $(".menu-button").css({"z-index":"5"});
	     }

	     $(".resume").css({"height": current_height});
	     $(".resume").css({"width": current_width - 50 });

    },
    checkBrowser:function(){

	    var browser = ""

	    var c = navigator.userAgent.search("Chrome");
	    var f = navigator.userAgent.search("Firefox");
	    var m8 = navigator.userAgent.search("MSIE 8.0");
	    var m9 = navigator.userAgent.search("MSIE 9.0");
	    var o1 = navigator.userAgent.search("opera");
	    var o2 = navigator.userAgent.search("OPR");
	    var omini = navigator.userAgent.search("Opera Mini");
	    var uc = navigator.userAgent.search("UCBrowser");
	    var uc11 = navigator.userAgent.search("WOW64");
	    var dsuc = navigator.userAgent.search("YaBrowser");

	    if (f > -1)
	    {
	        browser = "Firefox";
	    }
	    else if (m9 > -1)
	    {
	        browser ="MSIE 9.0";
	    }
	    else if (m8 > -1)
	    {
	        browser ="MSIE 8.0";
	    }
	    else if (o1 > -1)
	    {
		    browser = "Opera";
	    }
	    else if (o2 > -1)
	    {
		   browser = "Opera";
	    }
	    else if (o2 > -1)
	    {
		  browser = "Opera Mini";
	    }
	    else if (uc > -1)
	    {
		   browser = "UCBrowser";
	    }
	   else if (uc11 > -1)
	   {
		   browser = "WOW64";
	   }
	   else if (c > -1)
	   {
		 browser = "Chrome";
	   }

	    return browser;
    },
    getPage:function(url)
    {
	    var index = url.lastIndexOf("/") + 1;
	    var filenameWithExtension = url.substr(index);
	    var filename = filenameWithExtension.split(".")[0];
	    return filename;
    },
    ChangeSkillsPage:function()
    {
	    var _this = this;
	    var pathname = window.location.pathname;
	    var url      = window.location.href;
	    var current_height = $(window).height();
	    var deviceWidth = $(window).width();

	    var page = _this.getPage(url);

	    (page == "skills" && deviceWidth > 768)
	    {
		    var current_width = $(window).width();
		    perspective_width = current_width - 100;
		    perspective_width_for_tab = current_width - 140;
		    $("div.3Dcontent").css({"perspective":"initial"});
		    $("div.3Dcontent").css({"perspective":perspective_width});
	    }


	    if(page == "skills"  && deviceWidth <= 768)
	    {
		  $('div.3Dcontent').remove();
		  $('div#menu').remove();
		  $("html").removeClass("video");

		  $.get('js/skills.json', function(data) {
			 for (i in data)
	       		  {
	       			 $("#container").append("<div class='col-xs-5 text-center skill-small'>"+ i +"<div class='skill-rating'>"+ data[i]+ "</div></div>")
	       		  }
		  });
	    }


    },
    contactBody:function(){
	   var _this = this;
 	   var pathname = window.location.pathname;
 	   var url      = window.location.href;
 	   var mobiledeviceWidth = window.matchMedia('only screen and (max-width: 767px)').matches;
 	   var page = _this.getPage(url);

	   if(page == "contact")
	   {
		   $("html").removeClass("video");

		   if(mobiledeviceWidth == true)
		   {
		      var current_height = $(window).height();

		      $(document).ready(function () {

			      if(current_height <= 580)
			      {
				      $('.group').click(function () {
					      current_height = 730;
		        		      $(".contact-body").css({"min-height":current_height});
				    });
			      }
	      		});
		   }

		//    $('.close').click(function() {
		// 	    location.reload();
		// 	});

	   }

   },
   MakeResponsive:function()
   {       var _this = this;
	   var current_width = $(window).width();
	   var current_height = $(window).height();

	   if(current_width >= 753 && current_width < 1000)
	   {
		   $(".banner-text h1").css({"font-size":"400%"});
		   $(".banner-text").css({"margin-left": current_width*.15});
		   $(".banner-text h4 ").css({"font-size":" 200%"});
		   $(".nav > li").css({"padding":"1em .8em"});
		   $(".pagebody").css({"width":current_width*.90});
		   $(".pagebody").css({"margin-left":current_width*.12});
		   $(".developer-body").css({"margin-left":current_width*.10});
		   $(".mebody").css({"margin-left":"0"});
	   }

	  if(current_width >= 1001 && current_width < 1200)
	  {
		  $(".banner-text h1").css({"font-size":"400%"});
		  $(".banner-text").css({"margin-left": current_width*.15});
		  $(".banner-text h4 ").css({"font-size":" 200%"});
		  $(".nav > li").css({"padding":"1em .8em"});
		  $(".pagebody").css({"width":"100%"});
		  $(".pagebody").css({"margin-left": "6%"});
		  $(".developer-body").css({"margin-left":"5%"});
	  }

	   if(current_width < 374)
	   {
		   $(".link").css({"letter-spacing":".5px"});
	   }

	    var browser = _this.checkBrowser();
	    var alerted = localStorage.getItem('alerted') || '';
	    var isOperaMini = Object.prototype.toString.call(window.operamini) === "[object OperaMini]";

	   if(browser == "UCBrowser")
	   {

	   	  if (alerted != 'yes')
		   {
			   alert("PLEASE TURN OFF(DISABLE) SPEED MODE(OR DATA SAVING MODE) OR USE ANOTHER BROWSER INSTEAD OF UCBROWSER. OTHERWISE, YOU WOULD NOT ABLE SEE MY FULL DETAILS WITH ANIMATIONS..");
			   localStorage.setItem('alerted','yes');
		   }
	   }

	   if(browser == "WOW64")
	   {
		   var instance = $('#video').data('vide');
		   if (alerted != 'yes')
		   {
			   alert("PLEASE TURN OFF(DISABLE) SPEED MODE(OR DATA SAVING MODE) OR USE ANOTHER BROWSER INSTEAD OF UCBROWSER. OTHERWISE, YOU WOULD NOT ABLE SEE MY FULL DETAILS WITH ANIMATIONS..");
			   localStorage.setItem('alerted','yes');
		   }

		   instance.destroy();

		    $("#video").css({"background-image":"../assets/videos/bgv.jpg","background-repeat":"no-repeat","background-size":"contain","background-position":"center"});
		    $(".bp-header").css({"padding":"4em 10vw 2em"});

	   }

	   if(browser == "Opera Mini" && (_this.IsMobileDevice() == true))
	   {
		   if(alerted != 'yes')
		   {
			   alert("PLEASE TURN OFF(DISABLE) EXTREME MODE OR DATA SAVING MODE. OTHERWISE, YOU WOULD NOT ABLE TO SEE MY FULL DETAILS WITH ANIMATIONS.");
			   localStorage.setItem('alerted','yes');
		   }

	   }

	   if(browser == "Opera" && (_this.IsMobileDevice() == true))
	   {
		   if(alerted != 'yes')
		   {
			   alert("PLEASE TURN OFF(DISABLE) EXTREME MODE OR DATA SAVING MODE. OTHERWISE, YOU WOULD NOT ABLE SEE MY FULL DETAILS WITH ANIMATIONS.");
			   localStorage.setItem('alerted','yes');
		   }
	   }


   }

}
$(document).ready(function(){
	mainproperties.init();
});
