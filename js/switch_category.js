function getTheCategory(value){
    //alert("changed");
    if(value == "default"){
        document.getElementById("add_post_link").setAttribute("href","#")
    }
    if(value==1){
        document.getElementById("add_post_link").setAttribute("href","../../flexapp/estate.php")
    }
    if(value==2){
        document.getElementById("add_post_link").setAttribute("href","../../flexapp/job.php")
    }
    if(value==3){
        document.getElementById("add_post_link").setAttribute("href","../../flexapp/car.php")
    }
    if(value==4){
        document.getElementById("add_post_link").setAttribute("href","../../flexapp/other.php")
    }
}



//controlling the job category, subcategory and occupation text-box and select different approach!


$(document).ready(function(){
  
    $("#select_job_category").change(function(){
        var e = document.getElementById("select_job_category");
        var categoryID = e.options[e.selectedIndex].value;
        var category_t = e.options[e.selectedIndex].text;
        //alert(categoryID);
        //alert(category_t);

       
        if(categoryID !="select"){

//ajax call to list job categories from database
            $.ajax({
                type:'POST',
                url:"../../flexapp/php/loadJob.php",
                data:{categoryID:categoryID},
                success:function(feedback){
                    $("#select_job_subcategory").html(feedback);
                }
            })
            
        }
     var job_category = document.getElementById("select_job_category").value;
     //alert (job_category);
       if(job_category =="insert_category"){
        window.location.href="../../flexapp/create_new_cat.php";
       }
    })
//end of change function for job category

//validate job category
$("#new_category").focusout(function(){

    var job_category = document.getElementById("new_category").value;
    //alert(job_category);
    $.ajax({
        type: "POST",
        url: "../../flexapp/php/validate_category.php",
        dataType: 'JSON',
        data:{validate_category:job_category},
        success: function(data){
        //alert(data);
        if(data['response']=="response_fail"){
        $(".msg").html("Enter Your Category");
        $("#submit_category").removeClass("hidden");
        }
        else{$(".msg").html("Category Already Exists");
        $("#new_category").val("");
          }
        } //end of success
          })//end of ajax
})


$("#select_job_subcategory").change(function(){ 
    var subCategoryId  = document.getElementById("select_job_subcategory");
    var subCategoryId = $('option:selected',this).val();
    var subcategory_t= $('option:selected',this).data("value"); 
    //alert(subCategoryId);
    //alert(subcategory_t);
    $("#ent_new_sub").removeClass("hidden");
    $("#new_subcategory").val(subcategory_t);

    $('#select_job_subcategory option:selected').val(categoryID);
    var e = document.getElementById("select_job_category");
    var categoryID = e.options[e.selectedIndex].value;

     if(subcategory_t !="select"){
        //ajax call to list job occupations from database

                    $.ajax({
                        type:'POST',
                        url:"../../flexapp/php/loadOccupation.php",
                        data:{subCategoryId:subCategoryId},
                        success:function(feedback){
                            $("#job_occupation_list").html(feedback);
                        }
                    })
                    
                }
                if(subCategoryId =="insert_subcategory"){
                    var id=$("#select_job_category").value;
                    var subCategoryId = $('option:selected',this).val(id);
                  }  
                      
  });//end of change function for job subcategory 
  
   $("#new_subcategory").change(function(){
    var new_sub=document.getElementById("new_subcategory").value;
   $('#select_job_subcategory option:selected').text(new_sub);
  
  })  

//validate subcategory
      $("#new_subcategory").focusout(function(){
        var job_subcategory = document.getElementById("new_subcategory").value;
        //alert(job_subcategory);
        $.ajax({
            type: "POST",
            url: "../../flexapp/php/validate_subcategory.php",
            dataType: 'JSON',
            data:{validate_subcategory:job_subcategory},
            success: function(data){
            //alert(data);
        if(data['response']=="response_fail"){
            $(".msg_sub").html("Enter Your Subcategory");
            }
            else{$(".msg_sub").html("Category Already Exists");
            $("#new_subcategory").val(""); 
              }
            } //end of success
              })//end of ajax
      })


    $("#job_occupation_list").change(function(){
        //alert ("changed");
        var occupationId  = document.getElementById("job_occupation_list");
        var occupationId = $('option:selected',this).val();
        var occupation_t= $('option:selected',this).data("value");
          //alert(occupationId);
          //alert(occupation_t);
                       $("#ent_new_occ").removeClass("hidden");
                       $("#new_occupation").val(occupation_t);
                     
                       $("#remaining_categories").removeClass("hidden");

                        if(occupationId ="insert_occupation"){
                            var id=$("#select_job_subcategory").value;
                        var occupationId = $('option:selected',this).val(id);
                        }

                      /*  if(occupationId =="insert_occupation"){
                        $("#ent_new_occ").removeClass("hidden");
                       } */
                       var e = document.getElementById("select_job_category");
                       var categoryID = e.options[e.selectedIndex].value;
                       $('#job_occupation_list  option:selected').val(categoryID);
    })//end of change function for occupation

    //validate occupation
    $("#new_occupation").focusout(function(){
        var job_occupation = document.getElementById("new_occupation").value;
        $.ajax({
            type: "POST",
            url: "../../flexapp/php/validate_occupation.php",
            dataType: 'JSON',
            data:{validate_occupation:job_occupation},
            success: function(data){
            //alert(data);
            if(data['response']=="response_fail"){
            $(".msg_occ").html("Enter Your Occupation");
            $("#remaining_categories").removeClass("hidden");
            }
            else{$(".msg_occ").html("Category Already Exists");
            $("#new_occupation").val("");
              }
            } //end of success
              })//end of ajax
    })

    $("#new_occupation").change(function(){
        var new_occ=document.getElementById("new_occupation").value;
       $('#job_occupation_list option:selected').text(new_occ);
      
      })

    $("#autocomplete").change(function(){
        //alert ("changed");
        $("#submit_job_post").removeClass("hidden");  
    })
})