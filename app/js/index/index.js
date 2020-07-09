$(document).ready(function() {
    var page = new Vue({
        el: "#page-content",
        data: {
            books: null,
        },
        methods: {
            publish: function(event) {
            }
        }
    });

    var reload_data = function() {
        __request("index.list", {}, function(res) {
            console.debug(res);
            page.books = [];
            for (var k in res.data) {
                page.books.push(res.data[k]);
            }
        });
    }

    reload_data();

    // $('[data-toggle="tooltip"]').tooltip();
});

