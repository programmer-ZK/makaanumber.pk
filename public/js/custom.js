
$(document).ready(function() {

  $("#multipleSelect").show();

  $("#multipleSelect").select2({
    width:"100%",
    placeholder: " Cities/Locations",
  });


  $('#multipleSelect').on('select2:close', function(e){
    $(".select2-selection").css('padding-top', '3px');
    $(".select2-selection__choice:not(:first-child").hide();
    var selectedValues = $("#multipleSelect").select2('val');
    
    var tag = `<li class="select2-selection__choice" title="${selectedValues.length - 1} More" data-select2-id="select2-data-75-kal7"><span class="select2-selection__choice__display" id="select2-multipleSelect-container-choice-mdng-1">+${selectedValues.length - 1} More </span></li>`;


    if(selectedValues.length > 1 ){
      $("#select2-multipleSelect-container").append(tag);
    }else{
      $("#select2-multipleSelect-container").append('');

    }
    // if(selectedValues.length == 0 ){
    //   $("#select2-multipleSelect-container").append('tag');
    // }

  });

  $("#searchFormSubmit").on('click', function(e){
    e.preventDefault();
    var selectedValues = $("#multipleSelect").select2('val');
    console.log(selectedValues);
    
  });


  
   
  // $(document).click("#multiple-select", function(){
  //   console.log('clicked!');
  // });
  // $(document).select("#multipleSelect", function(){
  //   if(e){
  //     console.log('option clicked');  
  //   }
  //   // var value = $(this).val();
  //   console.log('selected');
  // })
  // $(document).on('select2:select', "#multipleSelect", function (evt) {
  //   var selfVal = $(this).val();
  //   $("#hiddenLocationInput").val(selfVal);


  //   console.log(selfVal);
  //   console.log('selected');
  //   // Do something
  // });

  function returnPromises() {
  return new Promise((resolve) => {
    setTimeout(() => {
      $("#searchSpinner").hide();
      resolve("Sample Data");
    }, 3000);
  });
}

async function ExecuteFunction() {
  await returnPromises();
  $("#searchItems").fadeIn();
}

ExecuteFunction()
});
