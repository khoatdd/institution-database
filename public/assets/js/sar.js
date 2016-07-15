/**
 * Created by Yurnero on 11/07/2016.
 */
$('#form-thongtinchung').submit(function () {
    event.preventDefault();

    //get data from form
    //var form = document.querySelector('#form-thongtinchung');
    //var formData = new FormData(this);
    //var url = $(this).attr("action");
    //console.log(url);
    //
    //$.post(url,formData).done(function(data){
    //   console.log('OK');
    //});
    var data = new FormData(this);
    var url = $(this).attr("action");
    $.ajax({
        url: url, // Url to which the request is send
        type: "POST", // Type of request to be send, called as method
        data: data, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
        contentType: false, // The content type used when sending data to the server.
        cache: false, // To unable request pages to be cached
        processData: false, // To send DOMDocument or non processed data file it is set to false
        success: function (data) // A function to be called if request succeeds
        {
            $('body').html(data);
        }
    });
});