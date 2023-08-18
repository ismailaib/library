$(document).ready(function(){
    $("#mysettings").click(function(){
      $(".settings").show();
      $(".request, .progress, .text").hide();
    });
    $("#myrequest").click(function(){
      $(".request").show();
      $(".settings, .progress, .text").hide();
    });
    $("#myprogress").click(function(){
      $(".progress").show();
      $(".settings, .request, .text").hide();
    });
  });
  


