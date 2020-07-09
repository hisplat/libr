$(document).ready(function() {
    var page = new Vue({
        el: "#page-content",
        data: {
            book: {
                id: 0,
                avatar: null,
                stat: 0,
                title: "",
            },
            user: {
                headimgurl: null,
                nickname: null,
                openid: null,
            },

        },
        methods: {
            publish: function(event) {
                if (page.book.title.length == 0) {
                    alert("书名未录入！");
                    return;
                }

                var face = $("#book-face").attr("src");

                __file_upload("index.update", $("#faceImg").get(0), {
                    title: page.book.title,
                    bookid: page.book.id,
                }, function(data) {
                    console.debug(data);
                    if (data.data !== false) {
                        alert("上传成功.");
                    } else {
                        alert("上传失败.");
                    }
                    document.location.reload();
                }, function(data) {
                });

            },
            chooseAvatar: function(event) {
                console.log("chooseAvatar.");

                $("#faceImg").click();
            },
            updateAvatar: function(event) {
                console.log("updateAvatar.");
                if (typeof FileReader == 'undefined') {
                    alert("您的浏览器不支持上传，请更换浏览器重试！");
                    return false;
                }

                var file = $("#faceImg").get(0).files[0];
                if (!/image\/\w+/.test(file.type)) {
                    alert("文件不是图像类型！");
                    return false;
                }

                var reader = new FileReader();
                reader.onload = function(e){
                    $("#avatarImg").attr("src", e.target.result);
                    $("#avatarImg").removeClass("hidden");
                    $("#chooseBtn").addClass("hidden");
                }
                reader.readAsDataURL(file);
                return true;
            },
            borrow: function(event) {
                console.log("borrow.");
                __request("index.borrow", {bookid: page.book.id, openid: page.user.openid}, function(data) {
                    document.location.reload();
                });
            },
            returnback: function(event) {
                console.log("returnback.");
                __request("index.returnback", {bookid: page.book.id, openid: page.user.openid}, function(data) {
                    window.location.reload();
                });
            },
        }
    });

    var reload_data = function() {
        page.book.id = $("#variable").attr("bookid");
        page.book.stat = $("#variable").attr("stat");
        page.user.openid = $("#variable").attr("openid");
        page.user.nickname= $("#variable").attr("nickname");
        page.user.headimgurl = $("#variable").attr("headimgurl");
    }

    reload_data();

});

