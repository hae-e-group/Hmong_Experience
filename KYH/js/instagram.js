jQuery(function($) {
    var token = "" /* Access Token */
    var count = "30"
    
    $.ajax({
        type: "GET",
        dataType: "jsonp",
        cache: false,
        url: "https://api.instagram.com/v1/user/self/media/recent/?access_token=" + token + "&count=" + count,
        success: function(response) {
            if (response.data.length > 0) {
                for(var i = 0; i < response.data.length; i++) {
                    var insta = '<div class="insta-box">';
                    insta += "<a target='_blank' href='" + response.data[i].link + "'>";
                    insta += "<div class'image-layer'>";
                    //insta += "<img src'" + response.data[i].images.thumbnail.url + "'>";
                    insta += "<img src='" + response.data[i].images.thumbnail.url + "'>";
                    insta += "</div>"
                    if (response.data[i].caption !== null) {
                        insta += "<div class='caption-layer'>";
                        if (response.data[i].caption.text.length > 0) {
                            insta += "<p class='insta-caption'>" + response.data[i].caption.text + "</p>"
                        }
                        insta += "<span class='insta-likes'>" + response.data[i].likes.count + " Likes</span>";
                        insta += "</div>";
                    }
                    insta += "</a>";
                    insta += "</div>";
                    $("#instaPics".append(insta))
                }
            }
            $(".insta-box").hover(function() {
                $(this).find(".caption-layer").css({"background":"rgba(255,255,255,0.7)", "display":"block"});
            }, function() {
                $(this).find(".caption-layer").css({"display":"none"});
            });
        }
    });
});

// http://blog.naver.com/PostView.nhn?blogId=goldxxx&logNo=221075690893