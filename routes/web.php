<?php

/*------------- Frontend ---------------*/

Route::get('/', 'HomeController@index')->name('home');

Route::get('cau-hoi-thuong-gap', 'HomeController@question')->name('question');

Route::get('dieu-khoan-su-dung', 'HomeController@term')->name('term');

Route::get('quy-che-hoi-vien', 'HomeController@membership')->name('membership');

Route::get('quy-trinh-giai-quyet-khieu-nai', 'HomeController@complain')->name('complain');

Route::get('chinh-sach-bao-mat-thong-tin', 'HomeController@privacy')->name('privacy');

Route::get('loc-diem-don', 'HomeController@filter')->name('filter');

Route::post('tim-chuyen', 'HomeController@search')->name('trips.search');

Route::get('gioi-thieu', 'IntroController@index')->name('introduce');

Route::get('lien-he', 'ContactController@index')->name('contact');

Route::get('/show/tuyen/{ma_tuyen}/xe/{ma_xe}/', 'TicketController@findChuyen')->name('ticket.show');

Route::get('xac-nhan-dat-ve', 'CheckoutController@confirm')->name('tickets.confirm');

Route::post('hoan-tat-dat-ve', 'CheckoutController@success')->name('store.checkout');

Route::get('huy-ve-dat-ve', 'CheckoutController@destroyTicket')->name('destroy.ticketed');

Route::post('tim-chuyen-theo-ngay', 'TicketController@search')->name('trips.find');

Route::get('/gio-hang', 'CartController@index')->name('carts.index');

Route::get('them-vao-gio-hang', 'CartController@addToCart')->name('carts.add_to_cart');

Route::get('huy-ve', 'CartController@destroyTicket')->name('carts.destroyTicket');

Route::post('loc-chuyen', 'TicketController@filterTime')->name('trips.filter');

Route::get('/xem-chi-tiet', 'TicketController@show')->name('ticket.show_images');

Route::get('/chon-ve', 'TicketController@showTicket')->name('ticket.show_tickets');

Route::get('/dat-ve', 'TicketController@buyTicket')->name('ticket.buy_tickets');

Route::get('/chon-diem-do', 'TicketController@chooseLocation')->name('ticket.choose_location');

Route::post('loc-chuyen-theo-gia', 'TicketController@filterPrice')->name('trips.filter_price');

Route::delete('huy-ve', 'TicketController@destroy')->name('ticket.destroy');

Route::get('danh-sach-ve-da-dat/{id}', 'HistoryController@listTicket')->name('customers.history');

Route::get('lich-su-tich-diem', 'HistoryController@listPoint')->name('customers.point');

Route::get('tai-khoan', 'HistoryController@profile')->name('customers.profile');

Route::get('doi-mat-khau', 'HistoryController@changePassword')->name('customers.change_password');

Route::get('dang-nhap', 'CustomerController@getLogin')->name('login.customer');

Route::post('dang-nhap', 'CustomerController@postLogin')->name('postLogin.customer');

Route::get('dang-ki', 'CustomerController@getRegister')->name('register.customer');

Route::post('dang-ki', 'CustomerController@postRegister')->name('postRegister.customer');

Route::get('dang-xuat', 'CustomerController@getLogout')->name('logout.customer');

Route::get('quen-mat-khau', 'CustomerController@forgotPassword')->name('forgot');

Route::get('dat-mat-khau-moi', 'CustomerController@setNewPassword')->name('new.password');

Route::post('thay-doi-mat-khau', 'CustomerController@changePassword')->name('change.password');

Route::post('cap-nhat-thong-tin', 'CustomerController@updateProfile')->name('update.profile');

Route::post('cap-nhat-mat-khau', 'CustomerController@updatePassword')->name('update.password');


/*------------- End Frontend -----------*/

//---------Backend--------
Auth::routes();

Route::get('/dashboard', 'Admin\AdminController@index')->middleware(['auth', 'can:login']);

Route::group(array('prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'), function () {
    Route::resource('roads', 'RoadsController');
    Route::resource('trips', 'TripsController');
    Route::get('trips_list/{id}', 'TripsController@list_all')->name('trips.list');
    Route::resource('stop_point', 'StopPointController');
    Route::resource('roads_stop_point', 'RoadsStopPointController');
    Route::get('/roads_stop_point_list/{id}/{chieu}', 'RoadsStopPointController@list_all')->name('roads_stop_point.list');
    Route::get('/delete/roads_stop_point/{ma_tuyen}/{ma_dd}', 'RoadsStopPointController@delete')->name('roads_stop_point.delete');
    Route::get('/edit/roads_stop_point/{ma_tuyen}/{ma_dd}/{chieu_xe}', 'RoadsStopPointController@editTuyenDiemDo')->name('roads_stop_point.edit');
    Route::resource('trips_day', 'TripsDayController');
    Route::put('trips.export', 'TripsDayController@export')->name('trips.report');
    Route::get('trips.search', 'TripsDayController@searchDay')->name('trip.search');
    Route::put('tickets/export', 'TicketsController@export')->name('tickets.report');
    Route::get('tickets/search', 'TicketsController@searchTicket')->name('ticket.search');
    Route::resource('cars', 'CarsController');
    Route::resource('checkouts', 'CheckoutController');
    Route::get('checkout/edit/{id}', 'CheckoutController@editCheckout')->name('edit.checkout');
    Route::put('checkout/update/{checkout}', 'CheckoutController@updateCheckout')->name('update.checkout');
    Route::get('/checkout/{ma_cn}', 'CheckoutController@list_all')->name('checkouts.list');
    Route::resource('types', 'TypesController');
    Route::resource('tickets', 'TicketsController');
    Route::get('list-customer/{ma_cn}', 'CheckoutController@listCustomer')->name('customer.list');
    Route::get('/createTickets/{ma_cn}', 'TicketsController@createTicket')->name('tickets.createTicket');
    Route::get('/storeTickets/{ma_cn}', 'TicketsController@storeTickets')->name('tickets.storeTicket');
    Route::get('/edit/tickets/{ma_ve}/{ma_cn}/{ma_gx}', 'TicketsController@editVeChuyen')->name('tickets.editVeChuyen');
    Route::put('/update/tickets/{ma_cn}/{ma_gx}', 'TicketsController@updateVeChuyen')->name('tickets.updateVeChuyen');
//    Route::get('/delete/tickets/{ma_ve}/{ma_chuyen}/{ma_gx}', 'TicketsController@deleteVeChuyen')->name('tickets.delete');
    Route::get('tickets_list/{ma_cn}', 'TicketsController@list_all')->name('tickets.list');
    Route::resource('users', 'UsersController');
    Route::get('/users/show/admins', 'UsersController@showAdmin')->name('users.listAdmin');
    Route::get('/users/show/customers', 'UsersController@showCustomer')->name('users.listCustomer');
    Route::get('customer.report', 'UsersController@export')->name('customer.export');
    //Users
    Route::post('changeStatusUser/{id}', 'UsersController@changeStatusUser')->name('users.changeStatus');
    Route::post('changePassword', 'UsersController@changePassword')->name('admin.changePassword');
    Route::get('profile', 'UsersController@profile');
    Route::post('updateProfile', 'UsersController@updateProfile');
    Route::post('changeStatusUser/{id}', 'UsersController@changeStatusUser');
    Route::post('deleteUsers/{id}', 'UsersController@deleteUsers');
//    Route::get('changeStatusContact/{id}', 'ContactsController@changeStatus')->name('contact.changeStatus');
});




