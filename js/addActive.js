$('#post_type').change(function() {
    var val = $("#post_type option:selected").text();
    alert(val);
});//propably I dont need this, I have to get the date paied and calculate the time expired by the post status in payment records