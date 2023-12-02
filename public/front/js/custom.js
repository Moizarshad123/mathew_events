/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  


  $(function() {
    $("#rating-range").slider({
      step: 1,
      range: true, 
      min: 0, 
      max: 5, 
      values: [0, 5], 
      slide: function(event, ui)
      {$("#ratingRange").val(ui.values[0] + " - " + ui.values[1]);}
    });
    $("#ratingRange").val($("#rating-range").slider("values", 0) + " - " + $("#rating-range").slider("values", 1));
    
  });

  $(function() {
    $("#guestroom-range").slider({
      step: 10,
      range: true, 
      min: 0, 
      max: 410, 
      values: [0, 410], 
      slide: function(event, ui)
      {$("#guestroomRange").val(ui.values[0] + " - " + ui.values[1])}
    });
    $("#guestroomRange").val($("#guestroom-range").slider("values", 0) + " - " + $("#guestroom-range").slider("values", 1));
    
    
  });

  $(function() {
    $("#largestroom-range").slider({
      step: 100,
      range: true, 
      min: 0, 
      max: 14000, 
      values: [0, 14000], 
      slide: function(event, ui)
      {$("#largestroomRange").val(ui.values[0] + " - " + ui.values[1])}
    });
    $("#largestroomRange").val($("#largestroom-range").slider("values", 0) + " - " + $("#largestroom-range").slider("values", 1));
    
    
  });

  $(function() {
    $("#secondlargestroom-range").slider({
      step: 100,
      range: true, 
      min: 0, 
      max: 4000, 
      values: [0, 4000], 
      slide: function(event, ui)
      {$("#secondlargestroomRange").val(ui.values[0] + " - " + ui.values[1])}
    });
    $("#secondlargestroomRange").val($("#secondlargestroom-range").slider("values", 0) + " - " + $("#secondlargestroom-range").slider("values", 1));
    
    
  });


  $(function() {
    $("#totalmeetingspace-range").slider({
      step: 1000,
      range: true, 
      min: 0, 
      max: 64000, 
      values: [0, 64000], 
      slide: function(event, ui)
      {$("#totalmeetingspaceRange").val(ui.values[0] + " - " + ui.values[1])}
    });
    $("#totalmeetingspaceRange").val($("#totalmeetingspace-range").slider("values", 0) + " - " + $("#totalmeetingspace-range").slider("values", 1));
    
    
  });


  $(function() {
    $("#meetingrooms-range").slider({
      step: 1,
      range: true, 
      min: 0, 
      max: 19, 
      values: [0, 19], 
      slide: function(event, ui)
      {$("#meetingroomsRange").val(ui.values[0] + " - " + ui.values[1])}
    });
    $("#meetingroomsRange").val($("#meetingrooms-range").slider("values", 0) + " - " + $("#meetingrooms-range").slider("values", 1));
    
    
  });

  $(function() {
    $("#ceilingheight-range").slider({
      step: 1,
      range: true, 
      min: 0, 
      max: 30, 
      values: [0, 30], 
      slide: function(event, ui)
      {$("#ceilingheightRange").val(ui.values[0] + " - " + ui.values[1])}
    });
    $("#ceilingheightRange").val($("#ceilingheight-range").slider("values", 0) + " - " + $("#ceilingheight-range").slider("values", 1));
    
    
  });
