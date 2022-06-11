<script type="text/javascript">$(document).ready(function () {
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        $("body").on('click', '#register', function () {
            let url1 = "{{ route('register.customer')}}";
            $.ajax({
                url: url1, success: function (response) {
                    $('div#modal-customer').html(response)
                },
            })
        });
        $("body").on('click', '#login', function () {
            let url2 = "{{ route('login.customer')}}";
            $.ajax({
                url: url2, success: function (response) {
                    $('div#modal-customer').html(response)
                },
            })
        });
        $("body").on('click', '#forgot-password', function () {
            let url3 = "{{ route('forgot')}}";
            $.ajax({
                url: url3, success: function (response) {
                    $('div.modal-content').html(response)
                },
            })
        });
        $("body").on('click', '#btn_forgot', function () {
            let email = $('#email_verified').val();
            let url = "{{ route('new.password')}}";
            $.ajax({
                url: url, method: "GET", data: {email: email}, success: function (response) {
                    $('div.modal-content').html(response)
                },
            })
        });
        $(document).on('input', '#pickupPoint', function () {
            var string = $("#pickupPoint").val();
            let url4 = "{{route('filter')}}";
            $.ajax({
                url: url4, method: "GET", data: {keywords: string,}, success: function (response) {
                    $("ul#pickupPoint").html(response)
                },
            })
        });
        $("body").on('click', "div#customer_info", function () {
            $("div.account-mobile").toggleClass('open')
        });
        $("body").on('click', "#toggle_pwd", function () {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var type = $(this).hasClass("fa-eye-slash") ? "text" : "password";
            $("#txtPassword").attr("type", type)
        });
        $("body").on('click', "#toggle_pwd1", function () {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var type = $(this).hasClass("fa-eye-slash") ? "text" : "password";
            $("#txtPassword1").attr("type", type)
        });
        $("body").on('click', "#toggle_pwd3", function () {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var type = $(this).hasClass("fa-eye-slash") ? "text" : "password";
            $("#txtPassword3").attr("type", type)
        });
        $("body").on('click', "#toggle_pwd2", function () {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var type = $(this).hasClass("fa-eye-slash") ? "text" : "password";
            $("#txtPassword2").attr("type", type)
        });
        $("body").on('click', "ul#pickupPoint li#pickupPoint", function () {
            var value = $(this).text();
            $("input#pickupPoint").val(value)
        });
        $(document).on('input', '#dropOffPoint', function () {
            var string = $("#dropOffPoint").val();
            let url4 = "{{route('filter')}}";
            $.ajax({
                url: url4, method: "GET", data: {keywords: string,}, success: function (response) {
                    $("ul#dropOffPoint").html(response)
                },
            })
        });
        $("body").on('click', "ul#dropOffPoint li", function () {
            var value = $(this).text();
            $("input#dropOffPoint").val(value)
        });
        $("body").on('click', "button.btn-switch", function () {
            var departure = $("input#pickupPoint").val();
            var destination = $("input#dropOffPoint").val();
            $("input#pickupPoint").val(destination);
            $("input#dropOffPoint").val(departure)
        });
        $("body").on('click', "div.ticket-footer-info", function () {
            let id = $(this).data('id');
            let product_id = $(this).data('product_id');
            let url = "{{route('ticket.show_images')}}";
            $.ajax({
                url: url, method: "GET", data: {'id': product_id,}, success: function (response) {
                    $('div#product_images').html(response);
                    $("div#ticket_" + id).toggleClass("open");
                    $("#ticket_book_" + id).removeClass('open');
                },
            })
        });

        $("body").on('click', "button.btn-book", function () {
            let id = $(this).data('id');
            let ma_cn = $(this).data('trip-day');
            let url = "{{route('ticket.show_tickets')}}";
            $.ajax({
                url: url, method: "GET", data: {'id': ma_cn,}, success: function (response) {
                    $('div#trip-seat').html(response);
                    $("#ticket_book_" + id).toggleClass('open');
                    $("div.ticket-book").not("#ticket_book_" + id).removeClass('open');
                    $("div#ticket_" + id).removeClass('open');
                },
            })
        });
        $("body").on('click', "button#choose_point", function () {
            let id = $(this).data('id');
            let chieu = $(this).data('type');
            let url = "{{route('ticket.choose_location')}}";
            $.ajax({
                url: url, method: "GET", data: {'id': id, 'chieu': chieu,}, success: function (response) {
                    $('div#choose_location').html(response)
                },
            })
        });
        $("body").on('click', "div.ticket_choosed", function () {
            let id = $(this).data('id');
            let ky_hieu = $(this).data('val');
            let price = $(this).data('price');
            let self = $(this).find("path.ticket_status_" + id);
            let type = self.hasClass('active') ? 0 : 1;
            var formatter = new Intl.NumberFormat('en-VN', {currency: 'VND',});
            let url = "{{route('ticket.buy_tickets')}}";
            if (self.hasClass('active')) {
                self.removeClass('active')
            } else {
                self.addClass('active')
            }
            $.ajax({
                url: url,
                method: "GET",
                data: {"id": id, "ky_hieu": ky_hieu, "type": type,},
                success: function (response) {
                    if (response.number > 6) {
                        $("div#dialog-maxSeatLimit-max").css('display', 'block');
                        self.removeClass('active')
                    } else {
                        $('div#ticket_choosed_list').html(response.html);
                        if (response.number > 0) {
                            $('p#total_ticket').text(formatter.format(response.number * price) + ' ₫')
                        } else {
                            $('p#total_ticket').text(0 + ' ₫')
                        }
                    }
                },
            })
        });
        $("body").on('click', "div.ticket_choosed", function () {
            let name = $("input#full_name").val();
            let phone = $("input#phone_number").val();
            let email = $("input#email_address").val();
            let notes = $("#notes").val();
            let url = "{{route('checkouts.store')}}";
            $.ajax({
                url: url,
                method: "GET",
                data: {"name": name, "phone": phone, "email": email, "notes": notes,},
                success: function (response) {
                },
            })
        });
        $("body").on('click', "button#btn_choose_location", function () {
            let self = $(this).parents('.ticket-book-content');
            let id = self.find("h4.name_car").data("id");
            let car = self.find("h4.name_car").data("car");
            let type = self.find("h4.name_car").data("type");
            let date_start = $("p#date_start").text();
            let point_start = $("p.start_point_0").text();
            let time_start = $("p.time_start_0").text();
            let point_end = $("p.end_point_0").text();
            let time_end = $("p.time_end_0").text();
            let number = $("p#number_ticket").text();
            let list_ghe = $("p#list_ticket").text();
            let price = self.find("h4.name_car").data('price');
            let url = "{{route('carts.add_to_cart')}}";
            $.ajax({
                url: url,
                method: "GET",
                data: {
                    "id": id,
                    "car": car,
                    "type": type,
                    "date_start": date_start,
                    "point_start": point_start,
                    "time_start": time_start,
                    "point_end": point_end,
                    "time_end": time_end,
                    "number": number,
                    "list_ghe": list_ghe,
                    "price": price,
                    "status": 1
                },
                success: function (response) {
                    $("div#result_content").html(response);
                    $('span#total_ticket_cart').text(parseInt($('span#total_ticket_cart').text()) + 1);
                    $(window).scrollTop(0)
                },
            })
        });
        $("body").on('click', "a.rounded-pill", function () {
            $(window).scrollTop(0)
        });
        $("body").on('click', "div#menu-toggle", function () {
            $('nav.menu').toggleClass('active')
        });
        $("body").on('click', "div.point_pickup", function () {
            let id = $(this).data('id');
            let time = $(this).data('time');
            let point_pickup = $("input#pickupPoint-" + id).data('point');
            $("label.pickupPoint" + id).removeAttr("style");
            $("p#start_point").text(point_pickup);
            $("p#time_start").text(time);
            $("input#pickupPoint-" + id).css('background-color', '#ff7d00');
        });
        $("body").on('click', "div.dropOffPoint", function () {
            let id = $(this).data('id');
            let time = $(this).data('time');
            let point_pickup = $("input#dropOffPoint-" + id).data('point');
            $("p#end_point").text(point_pickup);
            $("p#time_end").text(time)
        });
        $("body").on('click', "button#btn_close", function () {
            let id = $(this).data('id');
            $("#ticket_book_" + id).removeClass('open');
            $("div#ticket_" + id).removeClass('open')
        });
        $("body").on('click', "button#btn_close", function () {
            $("div#dialog-maxSeatLimit-max").css('display', 'none')
        });
        $("body").on('click', "button#btn_cancel", function () {
            $("div#dialog-maxSeatLimit-max").css('display', 'none')
        });
        $("body").on('click', "button.btn-remove-ticket", function () {
            let id = $(this).data('id');
            $("div#dialog-cart-" + id).addClass('show');
            $("div#dialog-cart-" + id).css('display', 'block')
        });
        $("body").on('click', "button.close", function () {
            $("div.dialog-cart").css('display', 'none')
        });
        $("body").on('click', "button.btn-cancel", function () {
            $("div.dialog-cart").css('display', 'none')
        });
        $("body").on('click', "button.btn-confirm", function () {
            let id = $(this).data('id');
            let url = "{{route('carts.destroyTicket')}}";
            $.ajax({
                url: url, method: "GET", data: {"ma_cn": id,}, success: function (response) {
                    $("div#cart_infor").html(response);
                    $('span#total_ticket_cart').text(parseInt($('span#total_ticket_cart').text()) - 1);
                    $(window).scrollTop(0)
                },
            })
        });
        $("body").on('click', "button.btn-destroy-ticket", function () {
            let id = $(this).data('id');
            let url = "{{route('destroy.ticketed')}}";
            $.ajax({
                url: url, method: "GET", data: {"id": id,}, success: function (response) {
                    $("div#checkout_list_ticket").html(response);
                    $(window).scrollTop(0)
                },
            })
        });
        $("body").on('click', "button#btn_back", function () {
            parent.history.back();
            return !1
        });
        $("body").on('click', ".nav-link", function () {
            var listItems = $(".nav-link");
            for (let i = 0; i < listItems.length; i++) {
                listItems[i].classList.remove("active")
            }
            this.classList.add("active")
        });
        $("body").on('click', '#btn-search', function () {
            var diemDi = $('.diemDi').val();
            var diemDen = $('.diemDen').val();
            var date = $('.time_go').val();
            let url = "{{ route('trips.find')}}";
            $.ajax({
                url: url,
                method: "POST",
                data: {_token: "{{ csrf_token() }}", 'diemDi': diemDi, 'diemDen': diemDen, 'day': date},
                success: function (response) {
                    $('section.ticket').html(response)
                },
            })
        });
        $("#datepicker").datetimepicker({
            timepicker: !1,
            format: 'd/m/Y',
            closeOnDateSelect: !0
        }).on('dp.change', function (ev) {
            var diemDi = $('.diemDi').val();
            var diemDen = $('.diemDen').val();
            var date = $('.time_go').val();
            let url = "{{ route('trips.find')}}";
            $.ajax({
                url: url,
                method: "POST",
                data: {_token: "{{ csrf_token() }}", 'diemDi': diemDi, 'diemDen': diemDen, 'day': date},
                success: function (response) {
                    $('section.ticket').html(response)
                },
            })
        });
        $("body").on('click', '.filter_trip_time', function () {
            var id = $(this).data('id');
            var type = $(this).data('type');
            var time = $(this).data('time');
            $('li a').removeClass("active");
            $(this).addClass("active");
            let url = "{{ route('trips.filter')}}";
            $.ajax({
                url: url,
                method: "POST",
                data: {_token: "{{ csrf_token() }}", 'id': id, 'type': type, 'day': time},
                success: function (response) {
                    $('section.ticket').html(response)
                },
            })
        });
        $("body").on('click', '.filter_trip_price', function () {
            var id = $(this).data('id');
            var type = $(this).data('type');
            var day = $(this).data('time');
            if (!$(this).hasClass('active')) {
                $('li a').removeClass("active");
                $(this).addClass('active')
            }
            let url = "{{ route('trips.filter_price')}}";
            $.ajax({
                url: url,
                method: "POST",
                data: {_token: "{{ csrf_token() }}", 'id': id, 'type': type, 'day': day},
                success: function (response) {
                    $('section.ticket').html(response)
                },
            })
        });
        $("body").on('click', "a.btn-destroy-ticket", function () {
            let id = $(this).data('id');
            let user_id = $(this).data('user');
            let url = "{{ route('ticket.destroy')}}";
            if (confirm("Bạn thực sự muốn hủy vé này?")) {
                $.ajax({
                    url: url,
                    method: "DELETE",
                    data: {_token: "{{ csrf_token() }}", id: id, user_id: user_id,},
                    success: function (response) {
                        $('div#list_ticketed').html(response)
                    },
                })
            }
        })
    });</script>
